<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_all_orders.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_country.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');
$allCountries = allCountries();
$allShipments =  shipment_all_data_for_order_list();
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');
$allPorts = allPorts();






// "发货单生成完成, 请接着优化航班";

if ($_REQUEST['act'] == 'list') {

} else { //生成发货单
    $output = Array(
        "code" => "NACK",
        "msg"  => "",
        "data" => ""
    );
    $todayStart= strtotime(date('Y-m-d 00:00:00', time()));
    $todayEnd= strtotime(date('Y-m-d 23:59:59', time())); 
    
    //所有仓库列表 
    $allHouses = all_warehouses();
    $result =  array();
    $order_ids = $_POST['order_ids'];
    if(!isset($_POST['order_ids']) || empty($order_ids)) {
        $output['msg'] = "请选择订单";
        echo json_encode($output);
        exit;
    }
    foreach ($allHouses AS $lp_id => $row)    {
       
        $leavePortIds = $row;
        $orderList = get_order_list($order_ids, join(',', $row), $todayStart, $todayEnd);
        foreach($orderList as $orderItem) {
            $result[$lp_id][$orderItem['order_time_request']]['order_list'][] = $orderItem;
            $result[$lp_id][$orderItem['order_time_request']]['order_ids'][] = $orderItem[order_id];
            $result[$lp_id][$orderItem['order_time_request']]['weight'] += $orderItem[orderweight];
        }
    }
    if(!count($result)) {
        $output['msg'] = "没有符合条件的订单";
        echo json_encode($output);
        exit;
    }
    //print_a($result);exit;
    //将result 插入到 发货表中
    foreach($result as $city_id => $info) {
        if(count($info['normal']['order_list']) > 0) {
            dispatch_insert($city_id, 'normal', $info['normal']);
        }
        if(count($info['urgent']['order_list']) > 0) {
            dispatch_insert($city_id, 'urgent', $info['urgent']);
        }
    }
    //if(empyt(count($result))) {
        $output['msg'] = "处理完成.共处理了 ".count($result)." 个订单";
        $output['code'] = 'ACK';
        echo json_encode($output);
        exit;
    //}
//    $link[0]['text'] = '发货单信息';
//	$link[0]['href'] = 'engrave_all_dispatch.php?act=list';
//	sys_msg('发货单生成完成, 请接着优化航班', 0, $link);
}




function dispatch_insert($city_id, $time_request, $info) {
    global $allPorts,$engrave,$engrave_db;
   
    $city_name = $allPorts['leave_ports'][$city_id]['port_name'];
    extract($info);
    $order_ids = join(',', $info['order_ids']);

    $sqlDelete = "DELETE FROM ".$engrave->table('dispatch_order')." where order_id in ($order_ids) ";
    $engrave_db->query($sqlDelete);



    $sql="insert into ".$GLOBALS['engrave']->table('dispatch_list').
    "(order_ids, time_request, city_name, city_id, status, total_weight, create_time) values('".
    $order_ids."','".$time_request."','".$city_name."', '${city_id}', 'noflight', '".
    $info['weight']."', '".time()."')";


     
    //todo 真的不能这么判断 
//    $sqlCount = 'SELECT * FROM ' . $GLOBALS['engrave']->table('dispatch_list') . ' WHERE order_ids ='.$order_ids;
//	$res = $GLOBALS['engrave_db']->getAll($sqlCount);
	
//    if(count($res) == 0) {
		$result =  $GLOBALS['engrave_db']->query($sql);
		$dispatch_id = $GLOBALS['engrave_db']->insert_id();
		$update_sql = 'UPDATE ' . $GLOBALS['engrave']->table('order') . ' set dispatch_id='.$dispatch_id 
			." where order_id in (".$order_ids.")";
		$result =  $GLOBALS['engrave_db']->query($update_sql);
		$sqlIns = "insert into ".$engrave->table('dispatch_order')."(order_id, dispatch_id) values ";
		foreach($info['order_ids'] as $order_id) {
		    $sqlIns.=" ($order_ids, $dispatch_id),";
        }
        $sqlIns = rtrim($sqlIns,',');
		$engrave_db->query($sqlIns);
		return $dispatch_id;
//    } else {
//        return "existed";
//    }

   
}
/**
 * 获得仓库列表
 */
function all_warehouses()
{
	$sql = 'SELECT * FROM ' . $GLOBALS['engrave']->table('warehouse') . ' WHERE IsDeleteHouse = 0 ORDER BY lp_id desc';
	$res = $GLOBALS['engrave_db']->getAll($sql);
 
	$order_waybill_list = array();
	foreach ($res AS $row)
	{
		$order_waybill_list[$row['lp_id']][] = $row['HouseId'];
	}

	return $order_waybill_list;
}

/**
 * 获取订单列表
 */
function get_order_list($order_ids, $houseIds, $startTime, $endTime) {
    global $engrave_db;
    $where = " and engorder.order_id in(".$order_ids.")  ";

	$where .= " AND (engorder.dispatch_id is null or engorder.dispatch_id=0) AND (engorder.order_shipmentid = 2) ";
    $where .= " AND (HouseId IN(" . $houseIds . ") ) ";
    $where .= " AND engorder.order_isdelivery= 4 ";  //待发货
    if($startTime && $endTime) {
        //$where .= " AND (engorder.order_time >= '" . $startTime . "' AND engorder.order_time <= '" . $endTime . "')";
    }
    

	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('order').
	" engorder  where order_isdelete=0";
	$filter = array();

    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'engorder.order_id' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
    $filter[page_size] = 1000;


    //订单号	用户	目的地	重量(kg)	尺寸(mm)	仓库所在在	时效要求
	$sql = "select order_id,order_no,order_time,order_time_request,".
	"user_name as order_username,Code,ordw_waybillno,HouseName,order_note,".
	
	"ROUND(order_totalprice,2) as totalprice,".
	"ROUND(order_weight,2) as orderweight,".

	"engorder.order_buyerid as da_id,  ecsdelive.da_country as country_id , ecsdelive.da_address as da_address , engorder.order_shipmentid".
	" from ".
	$GLOBALS['engrave']->table('order') . " as engorder".
	" LEFT JOIN " . $GLOBALS['engrave']->table('moduleservice') . " as engmodule".
	" ON engorder.order_modelid = engmodule.ModuleId ".
	" LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as ecsuser".
	" ON engorder.order_userid = ecsuser.user_id ".
	" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') . " as ecsdelive".
	" ON engorder.order_buyerid = ecsdelive.da_id  ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('shipping') . " as engship".
	" ON engorder.order_shippingid = engship.ShippingId ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') . " as engcurr".
	" ON CurrencyId = engcurr.CId  ". //engship.CurrencyId
	" LEFT JOIN " . $GLOBALS['engrave']->table('enum') . " as engenum".
	" ON WeightId = engenum.EnumId ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('package') .
	" ON order_id = pck_orderid ". 
	" LEFT JOIN " . $GLOBALS['engrave']->table('orderwaybill') .
	" ON order_id = ordw_orderid ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
	" ON pck_warehouseid = HouseId ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('shipment') .
	" shipment ON engorder.order_shipmentid = shipment.shipment_id ".
	
	" where order_isdelete=0 ". $where.
	" group by order_id " .
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";
	$filter['keyword'] = stripslashes($filter['keyword']);

	//echo $sql;
	$row = $GLOBALS['engrave_db']->getAll($sql);

	
	return $row;
}


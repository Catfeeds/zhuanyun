<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_all_orders.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_all_orders.php');

$act = $_REQUEST['act'];
$action = $act;
$smarty->assign('lang',$_LANG);
$dispatchInfo = new DispatchInfo();

if ($_REQUEST['act'] == 'list' || !$_REQUEST['act'] ) {
    $ur_here =  "发货单管理";
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('full_page',    1);
    $data_list = $dispatchInfo->getPageList();

//    print_a($data_list);

    $smarty->assign('data_list',    $data_list['data_list']);
    $smarty->assign('filter',       $data_list['filter']);
    $smarty->assign('record_count', $data_list['record_count']);
    $smarty->assign('page_count',   $data_list['page_count']);

  
    //print_a($order_list);
    $smarty->assign('full_page',    1);

    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_all_dispatch.htm');
}
if($act == "mapairline") {
    $result = array();
    $ids = explode(",", $_GET['ids']);
    $total = count($ids);
    $success = 0;
    $failed  = 0;
    foreach($ids as $id) {
       $ret = $dispatchInfo ->mapAirline($id);

       if(isset($ret['flight_id']) && $ret['flight_id']>0) {
            $sql = "UPDATE " .$GLOBALS['engrave']->table('dispatch_list').
                " SET flight_id='".$ret['flight_id']."',last_map_info='',last_map_status='success', airline_id='".$ret['airline_id']."', last_map_time=NOW(), status='wps' , flight_price='".$ret['price']."'".
                "  where dispatch_id=".$id;
            $sql2 = "UPDATE ".$GLOBALS['engrave']->table('order').
                "set dispatch_status='等待发货' where dispatch_id=".$id;
            $success ++ ;
       } else {
           $sql = "UPDATE " .$GLOBALS['engrave']->table('dispatch_list').
               " SET last_map_info='未找到适合的航班', last_map_status='failed', last_map_time=NOW(), status='noflight' ".
               "   where dispatch_id=".$id;
           $failed ++ ;
       }
       $engrave_db->query($sql);
       if($sql2) {
           $engrave_db->query($sql2);
       }
    }
    $link[0]['text'] = "返回发货单列表";
    $link[0]['href'] = 'engrave_all_dispatch.php?act=list';
    sys_msg("发货单处理完成 . 总共: ${total}, 成功:$success 失败: $failed", 0, $link);
}
if($act == "cancel") {
    $dispatch_id = intval($_GET['dispatch_id']);
    if(empty($dispatch_id)) {
        $link = "engrave_all_dispatch.php";
        ecs_header("Location: $link\n");
        exit;
    }
    $where = " dispatch_id=".$dispatch_id;


    $sql = "delete from  " .$GLOBALS['engrave']->table('dispatch_list')."  where ".$where." and status='noflight' ";
    $GLOBALS['engrave_db']->query($sql);


    $update_sql = 'UPDATE ' . $GLOBALS['engrave']->table('order') . " set dispatch_id=0 where $where ";
    $result =  $GLOBALS['engrave_db']->query($update_sql);


    $sql = "delete from  " .$GLOBALS['engrave']->table('dispatch_order')."  where dispatch_id=$dispatch_id ";
    $GLOBALS['engrave_db']->query($sql);


    $link = "engrave_all_dispatch.php";
    ecs_header("Location: $link\n");
    exit;
}
if($act == "sendgoods") {
    $dispatch_id = $_GET['dispatch_id'];
    $where = " dispatch_id=".$dispatch_id;
    $sql = "update " .$GLOBALS['engrave']->table('dispatch_list')." dispatch set status='transporting' where ".$where."  ";
    $GLOBALS['engrave_db']->query($sql);
    $link = "engrave_all_dispatch.php";
    //订单更新转动状态
    $sql = "update " .$GLOBALS['engrave']->table('order')." engorder set dispatch_status='运输中' where engorder.order_id in (select order_id from " .$GLOBALS['engrave']->table('dispatch_order')."  where dispatch_id=$dispatch_id )  ";
    $GLOBALS['engrave_db']->query($sql);
    //计算空运费用, 放到了订单到港后的"发货"中
    //engrave_order_byid
//    $orders = $dispatchInfo->getDispatchOrders($dispatch_id);
//
//    $dispatchInfo = $dispatchInfo->getInfo($dispatch_id);
//    $orderCost->batchCostByBatchInfo($orders, $dispatchInfo);

    ecs_header("Location: $link\n");
    exit;
}
if($act == "arrival") {
    $dispatch_id = $_GET['dispatch_id'];
    $where = " dispatch_id=".$dispatch_id;
    $sql = "update " .$GLOBALS['engrave']->table('dispatch_list')." dispatch set status='arrived' ,arrival_time='".time()."'  where ".$where."  ";
    $GLOBALS['engrave_db']->query($sql);
    $sql = "update " .$GLOBALS['engrave']->table('order')." engorder set dispatch_status='已到港' where engorder.order_id in (select order_id from " .$GLOBALS['engrave']->table('dispatch_order')."  where dispatch_id=$dispatch_id )  ";
    $GLOBALS['engrave_db']->query($sql);

    $link = "engrave_all_dispatch.php";
    ecs_header("Location: $link\n");
    exit;
}
if($act == "fillexpress") {
    $dispatch_id = $_GET['dispatch_id'];
    $detail = $dispatchInfo->getInfo($dispatch_id);
    //print_r($detail);

    list ($orders, $dispatchOrdersAllSended) = $dispatchInfo->getDispatchOrdersInfo($dispatch_id);
    $detail['dispatch_arrival_time'] = date( 'Y-m-d H:i',$detail['arrival_time']);
    if(empty($detail['arrival_time'])) {
        $detail['dispatch_arrival_time'] = "";
    }
    $smarty->assign('detail',       $detail);
    $smarty->assign('orders',       $orders);

    $smarty->display('engrave_all_dispatch_fillexpress.htm');
}


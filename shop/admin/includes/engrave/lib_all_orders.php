<?php 
/**
 * ENGRAVE 数据访问：包裹管理-包裹管理
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_package.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */
/**
 * 获取订单列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 * @param number $pck_packagestatus:包裹状态：是否删除、订单状态、是否支付
 */
function engrave_order_list($isdelete, $deliverystatus,$order_paymentstatus)
{
	$conditions=' ';	
	if($deliverystatus!=-1)
	{
		$conditions=$conditions." and order_isdelivery='".$deliverystatus."'";
	}
	if($order_paymentstatus!=-1)
	{
		$conditions=$conditions." and order_paymentstatus='".$order_paymentstatus."'";
	}
	$filter['services_id']    = empty($_REQUEST['services_id']) ? 0 : intval($_REQUEST['services_id']);
	$filter['order_no']       = empty($_REQUEST['order_no']) ? '' : trim($_REQUEST['order_no']);
	$filter['expressnumber']  = empty($_REQUEST['expressnumber']) ? '' : trim($_REQUEST['expressnumber']);
	$filter['paymentstatus']  = empty($_REQUEST['paymentstatus']) ? 0 : intval($_REQUEST['paymentstatus']);
	$filter['deliverygoods']  = empty($_REQUEST['deliverygoods']) ? 0 : intval($_REQUEST['deliverygoods']);
	$filter['statesment']     = empty($_REQUEST['statesment']) ? 0 : intval($_REQUEST['statesment']);
	$filter['orderprintstates']  = empty($_REQUEST['orderprintstates']) ? 0 : intval($_REQUEST['orderprintstates']);
	$filter['consignment']     = empty($_REQUEST['consignment']) ? 0 : intval($_REQUEST['consignment']);
	$filter['shipment_id']     = empty($_REQUEST['shipment_id']) ? 0 : intval($_REQUEST['shipment_id']);
	$filter['buyers']       = empty($_REQUEST['buyers']) ? '' : trim($_REQUEST['buyers']);
	$filter['storageno']  = empty($_REQUEST['storageno']) ? '' : trim($_REQUEST['storageno']);
	$filter['ordertime']     = empty($_REQUEST['ordertime']) ? 0 : intval($_REQUEST['ordertime']);
	$filter['start_date']       = empty($_REQUEST['start_date']) ? '' : trim($_REQUEST['start_date']);
	$filter['end_date']  = empty($_REQUEST['end_date']) ? '' : trim($_REQUEST['end_date']);
	$filter['consignee']       = empty($_REQUEST['consignee']) ? '' : trim($_REQUEST['consignee']);
	$filter['waybillno']  = empty($_REQUEST['waybillno']) ? '' : trim($_REQUEST['waybillno']);
	$filter['paging']       = empty($_REQUEST['paging']) ? '' : trim($_REQUEST['paging']);
	$filter['sort_id']     = empty($_REQUEST['sort_id']) ? 0 : intval($_REQUEST['sort_id']);
	$filter['order_needinvoice']     = empty($_REQUEST['order_needinvoice']) ? 0 : intval($_REQUEST['order_needinvoice']);// 0  1要开 2个人 3 企业
	$filter['waybillname']     = empty($_REQUEST['waybillname']) ? 0 : intval($_REQUEST['waybillname']);
	$filter['invoice_title']     = empty($_REQUEST['invoice_title']) ? "" : trim($_REQUEST['invoice_title']);
	/*服务*/
	if ($filter['services_id'])
	{
		if($filter['services_id'] == 1)
		{
			$where .= ' AND order_servicetype = 0 AND order_boxquantity = 0 ';
		}
		elseif ($filter['services_id'] == 2)
		{
			$where .= ' AND order_servicetype != 0 AND order_boxquantity = 0 ';
		}
		elseif($filter['services_id'] == 3)
		{
			$where .= ' AND order_servicetype != 0 AND order_boxquantity != 0 ';
		}
	}
	/*订单号*/
	if (!empty($filter['order_no']))
	{
		$where .= " AND (order_no LIKE '%" . mysql_like_quote($filter['order_no']) . "%')";
	}
	/*货运单号*/
	if (!empty($filter['expressnumber']))
	{
		$where .= " AND (pck_expressnumber LIKE '%" . mysql_like_quote($filter['expressnumber']) . "%')";
	}
    if (!empty($filter['order_needinvoice']))
    {
        $where .= " AND order_needinvoice=1 ";
        if($filter['order_needinvoice'] == 2) {
            $where .= " AND order_invoice_type=='个人' ";
        }
        if($filter['order_needinvoice'] == 3) {
            $where .= " AND order_invoice_type=='企业' ";
        }
    }
    if (!empty($filter['invoice_title']))
    {
        $where .= " AND (order_invoice_title LIKE '%" . mysql_like_quote($filter['invoice_title']) . "%') ";
    }

	/*支付状态*/
	if($filter['paymentstatus'])
	{
		if($filter['paymentstatus'] == 1)
		{
			$where .= ' AND order_paymentstatus = 0 ';
		}
		elseif ($filter['paymentstatus'] == 2)
		{
			$where .= ' AND order_paymentstatus = 1 ';
		}
	}
	/*发货状态*/
	if($filter['deliverygoods'])
	{
		if($filter['deliverygoods'] == 1)
		{
			$where .= ' AND order_isdelivery < 5 ';
		}
		elseif ($filter['deliverygoods'] == 2)
		{
			$where .= ' AND order_isdelivery = 5 ';
		}
		elseif ($filter['deliverygoods'] == 3)
		{
			$where .= ' AND order_isdelivery = 51 ';
		}
		elseif ($filter['deliverygoods'] == 4)
		{
			$where .= ' AND order_isdelivery = 1 ';
		}
	}
	/*状态*/
	if($filter['statesment'])
	{
		if($filter['statesment'] == 1)
		{
			$where .= ' AND order_iscolsed = 0 AND  order_isdelivery != 6 ';
		}
		elseif ($filter['statesment'] == 2)
		{
			$where .= ' AND order_iscolsed = 1 ';
		}
		elseif ($filter['statesment'] == 3)
		{
			$where .= ' AND order_isdelivery = 6 ';
		}
	}
	/*面单打印*/
	if($filter['orderprintstates'])
	{
		if($filter['orderprintstates'] == 1)
		{
			$where .= ' AND order_printstatus = 0 ';
		}
		elseif ($filter['orderprintstates'] == 2)
		{
			$where .= ' AND order_printstatus = 1 ';
		}
	}
	/*托运方式*/
	if($filter['consignment'])
	{
		$where .= " AND (ShippingId = '" . $filter['consignment'] . "')";
	}
	/*托运方式*/
	if($filter['shipment_id'])
	{
		$where .= " AND (engorder.order_shipmentid = '" . $filter['shipment_id'] . "')";
	}
	/*时效要求*/
	if($filter['order_time_request'] && $filter['order_time_request'] != 'all')
	{
		$where .= " AND (engorder.order_time_request = '" . $filter['order_time_request'] . "')";
	}
	/*所属仓库*/
	if($filter['waybillname'])
	{
		$where .= " AND (HouseId = '" . $filter['waybillname'] . "')";
	}
	/*买家*/
	if (!empty($filter['buyers']))
	{
		$where .= " AND (user_name LIKE '%" . mysql_like_quote($filter['buyers']) . "%')";
	}
	/*入库码*/
	if (!empty($filter['storageno']))
	{
		$where .= " AND (storage_code LIKE '%" . mysql_like_quote($filter['storageno']) . "%')";
	}
	/*订单时间*/
	$y = local_date("Y"); //当前年
	$m = local_date("m"); //当前月
	$d = local_date("d"); //当天
	$w = local_date("w"); //当前星期几
	$lastMonday = gmtime() - 86400 * ($w - 1);
	$lastSunday = gmtime() + 86400 * (7 - $w);
	//周一
	$monday_y = local_date("Y",$lastMonday);
	$monday_m = local_date("m",$lastMonday);
	$monday_d = local_date("d",$lastMonday);
	//周日
	$sunday_y = local_date("Y",$lastSunday);
	$sunday_m = local_date("m",$lastSunday);
	$sunday_d = local_date("d",$lastSunday);
	if($filter['ordertime'])
	{
		if($filter['ordertime'] == 1)
		{
		    $day_start = local_mktime(0,0,0,$m,$d,$y);
		    $day_end = local_mktime(23,59,59,$m,$d,$y);
			$where .= " AND (order_time >= '" . $day_start . "' AND order_time <= '" . $day_end . "')";
		}
		elseif($filter['ordertime'] == 2)
		{
		    $day_time = gmtime();
		    $beforeday_time = gmtime() - 24*3600;
			$where .= " AND (order_time >= '" . $beforeday_time . "' AND order_time <= '" . $day_time . "')";
		}
		elseif($filter['ordertime'] == 3)
		{
			$day_time = gmtime();
			
			$beforeday_time = gmtime() - 7*24*3600;
			$where .= " AND (order_time >= '" . $beforeday_time . "' AND order_time <= '" . $day_time . "')";
		}
		elseif($filter['ordertime'] == 4)
		{
		    $week_start = local_mktime(0,0,0,$monday_m,$monday_d,$y);
		    $week_end = local_mktime(23,59,59,$m,$d,$y);
			$where .= " AND (order_time >= '" . $week_start . "' AND order_time <= '" . $week_end . "')";
		}
		elseif($filter['ordertime'] == 5)
		{
			$month_start = local_mktime(0,0,0,$m,1,$y);
			$month_end = local_mktime(23,59,59,$m,$d,$y);
			$where .= " AND (order_time >= '" . $month_start . "' AND order_time <= '" . $month_end . "')";
		}
		elseif($filter['ordertime'] == 6)
		{
			$year_start = local_mktime(0,0,0,1,1,$y);
			$year_end = local_mktime(23,59,59,$m,$d,$y);
			$where .= " AND (order_time >= '" . $year_start . "' AND order_time <= '" . $year_end . "')";
		}
	}
	else
	{
		if(!empty($filter['start_date']) || !empty($filter['end_date']))
		{
			$start = local_strtotime($filter['start_date']);
			$end = local_strtotime($filter['end_date']);
			if(!empty($filter['start_date']) && !empty($filter['end_date']))
			{
			   $where .= " AND (order_time >= '" . $start . "' AND order_time <= '" . $end . "')";
			}
			elseif(!empty($filter['start_date']) && empty($filter['end_date']))
			{
				$where .= " AND (order_time >= '" . $start . "')";
			}
			elseif(empty($filter['start_date']) && !empty($filter['end_date']))
			{
				$where .= " AND (order_time <= '" . $end . "')";
			}
		}
	}
	/*收货人*/
	if (!empty($filter['consignee']))
	{
		$where .= " AND (da_consignee LIKE '%" . mysql_like_quote($filter['consignee']) . "%')";
	}
	/*发货单号*/
	if (!empty($filter['waybillno']))
	{
		$where .= " AND (ordw_waybillno LIKE '%" . mysql_like_quote($filter['waybillno']) . "%')";
	}
	$where .= $conditions;
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('order').
	" where order_isdelete=".$isdelete;
	$filter = array();
	/*排序*/
	if($filter['sort_id'])
	{
		$filter['sort_by'] = 'storage_code';
		$filter['sort_order'] = 'esc';
	}
	elseif ($filter['sort_id'] == 1)
	{
		$filter['sort_by'] = 'order_id';
		$filter['sort_order'] = 'desc';
	}
	else 
	{
	    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'order_id' : trim($_REQUEST['sort_by']);
	    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	}
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "select order_id,order_no,order_time,order_servicetype,ModuleName,order_time_request,".
	"user_name as order_username,Code,ordw_waybillno,HouseName,order_note,".
	"storage_code as order_storagecode,da_consignee as consignee_name,".
	"ROUND(order_totalprice,2) as totalprice,ROUND(order_insurace,2) as orderinsurace,".
	"ROUND(order_othercost,2) as othercost,ROUND(order_weight,2) as orderweight,".
	"IFNULL(Name, '人民币') Name, ItemValue,order_isdelivery,order_iscolsed,order_paymentpath,order_paymentstatus,".
	"order_printstatus,pck_expressnumber,pck_inventorylocation,ShippingId, ".
	"engorder.order_buyerid as da_id,  ecsdelive.da_country as country_id , ecsdelive.da_address as da_address , engorder.order_shipmentid, dispatch_status ,order_invoice_type, order_invoice_title, order_needinvoice , engorder.dispatch_id  ".
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

        " LEFT JOIN " . $GLOBALS['engrave']->table('dispatch_list') .
        " dispatch_list ON engorder.dispatch_id = dispatch_list.dispatch_id ".




        " where order_isdelete= ".$isdelete. $where.
	" group by order_id " .
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";
	$filter['keyword'] = stripslashes($filter['keyword']);

	//echo $sql;
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	foreach ($row AS $key=>$val)
	{
		$row[$key]['order_time']     = local_date($GLOBALS['_CFG']['time_format'], $val['order_time']);
	}
	
	return array('order_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获得托运线路的名称
 */
function get_shipping_list()
{
	$sql = 'SELECT ShippingId, ShippingName FROM ' . $GLOBALS['engrave']->table('shipping') . ' ORDER BY ShippingId';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$shipping_list = array();
	foreach ($res AS $row)
	{
		$shipping_list[$row['ShippingId']] = addslashes($row['ShippingName']);
	}
	
	return $shipping_list;
}

/**
 * 移除订单：带事务
 * @param number $order_id：订单ID
 * @param unknown $conn:数据库连接对象
 * @return boolean：若移除成功，返回ture，反之返回false！
 */
function engrave_order_delete($order_id=0,$conn)
{
	$sql = "update " . $GLOBALS['engrave']->table('order') .
			" set order_isdelete=1 where order_id='".$order_id."'";
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 运单的详细信息
 * @param number $order_id
 */
function engrave_order_detail_list($waybillid=0)
{
	$sql =  " SELECT order_no,user_name,order_shippingid,HouseId,pck_inventorylocation,pck_storagecode," .
			" pck_expressnumber,ordw_assistno,LogisticsName,CollCode,ordw_waybillno,da_consignee,da_identitycard," .
			" da_identitycardfront,da_identitycardbehind,da_country,da_province,da_city,da_address,da_zipcode,da_email,da_consigneetelephone," .
			" da_sparetelephone,ordw_applyprice,ordw_insurprice,ordw_waybillcost,order_isdelivery,da_province,pck_id,order_id,ordw_waybillid," .
			" LogisticsId,da_id" . 
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
			" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') .
			" ON ordw_consigid = da_id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('order') .
			" ON ordw_orderid = order_id ".
			" LEFT JOIN " . $GLOBALS['ecs']->table('users') .
			" ON order_userid = user_id ".                              
			" LEFT JOIN " . $GLOBALS['engrave']->table('package') .
			" ON order_id = pck_orderid ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('collogistics') .
			" ON ordw_collogisid = LogisticsId ".		
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_country " .
			" ON da_country = area_country.Id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
			" ON order_shippingid = ShippingId ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON Origin = AreaId ".
			
			" WHERE ordw_delete = 0 AND ordw_waybillid = '" . $waybillid . "' group by order_id";
	$waybill_details_list = $GLOBALS['engrave_db']->getRow($sql);
	return $waybill_details_list;
}

/**
 * 根据订单id序列，获取所有订单号
 * @param string $order_id
 */
function engrave_order_list_in($order_id = '')
{
	$sql = "select order_id,order_no from ".
	$GLOBALS['engrave']->table('order') . 
	" where order_isdelete= 0 and order_id in (".$order_id.")";
	
	$result = $GLOBALS['engrave_db'] -> getAll($sql);
	return $result;
}

/**
 * 根据订单id序列，获取所有订单号
 * @param string $order_id
 */
function engrave_order_list_export_in($order_id = '')
{
	$sql = "select order_id,order_modelid,order_no,order_waybillno,order_time,order_userid,".
	"order_buyerid,order_note,order_remark,order_shippingid,order_servicetype,order_fixed,".
	"order_boxquantity,order_paymentid,order_paymentpath,order_paymentstatus,order_refundstatus,order_totalprice,".
	"order_goodsprice,order_weight,order_deductweight,order_sizelength,order_sizewidth,order_sizeheight,".
	"order_insurace,order_operatorcost,order_othercost,order_tariffcost,order_valueservicecost,order_waybillcost,".
	"order_discountcost,order_warehousecost,order_userpoints,order_isoutbox,order_needinvoice,order_isdelivery,".
	"order_iscolsed,order_printstatus,order_isdelete,order_paymenttype,order_coupon,".
	"ordw_waybillid,ordw_orderid,ordw_orderno,ordw_collogisid,ordw_waybillno,ordw_shippingid,".
	"ordw_assistno,ordw_consigid,ordw_applyprice,ordw_waybillcost,ordw_goodweight,ordw_deductweight,".
	"ordw_sizelength,ordw_sizewidth,ordw_sizeheight,ordw_isinsurance,ordw_insurprice,ordw_tariff,".
	"ordw_delete,".
	"user_name,".
	"da_id,da_userid,da_name,da_consignee,da_consigneetelephone,da_sparetelephone,".
	"da_country,da_province,da_city,da_address,da_zipcode,da_remark,".
	"da_identitycard,da_identitycardfront,da_identitycardbehind,da_email,da_isdelete,da_identityassemble,".
	"da_attach,da_isvalidate,da_adminremark,".
	"ShippingName,".
	"area_country.Name as da_country_name,area_province.Name as da_province_name,area_city.Name as da_city_name,".
	"area_destination.Name as destinationCountry,pcakage.pck_inventorylocation,user_storage_code,ordg_goodname,ordg_goodnumber,ordg_goodprice ".
	" from " . $GLOBALS['engrave']->table('order') .
	" left join ".$GLOBALS['engrave']->table('orderwaybill') .
	" on order_id = ordw_orderid ". 
	" left join ".$GLOBALS['ecs']->table('users_deliveryaddress') .
	" on ordw_consigid = da_id ". 
	" left join ".$GLOBALS['ecs']->table('users') .
	" on order_userid = user_id ".   
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_country on da_country = area_country.Id ". 
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_province on da_province = area_province.Id ". 
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_city on da_city = area_city.Id ". 
	" left join ".$GLOBALS['engrave']->table('shipping') .//线路
	" on order_shippingid = ShippingId ". 
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_destination on Destination = area_destination.Id ". 
	" left join ".$GLOBALS['engrave']->table('package') .//线路
	" as  pcakage on order_id = pcakage.pck_orderid ".
	" left join ".$GLOBALS['engrave']->table('ordergoods') .//线路
	" as  ordergoods on ordw_waybillid = ordergoods.ordg_waybillid ".
	" where order_isdelete= 0 and order_id in (".$order_id.")";
	
	$result = $GLOBALS['engrave_db'] -> getAll($sql);
	return $result;
}

/**
 * 根据订单ID查询
 * @param number $order_id:订单ID
 * @return string
 * @todo orderwaybill 会有多个
 */
function engrave_order_byid($order_id)
{
	$conditions='';
	if($order_id!='')
	{
		$conditions=$conditions." and order_id='".$order_id."'";
	}
	$sql = "select engorder.*, shipping.* ,users.*, currecy.* ," .
		"engorder.order_buyerid as da_id,  ecsdelive.da_country as country_id ,
		ecsdelive.da_consignee,ecsdelive.da_consigneetelephone,
			ecsdelive.da_address as da_address , engorder.order_shipmentid, 
			currecy.Name,package.pck_warehouseid,pck_id , country.country_name ,
			warehouse.HouseName,warehouse.address warehouseaddress,warehouse.lp_id,
			shipment.shipment_name, shipment2.shipment_name waybill_shipment_name, orderwaybill.ordw_waybillno
			, orderwaybill.ordw_sendtime ".
	
		" FROM " . $GLOBALS['engrave']->table('order').
		" as engorder LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
		" as  shipping  ON order_shippingid = ShippingId ".
		
		" LEFT JOIN " . $GLOBALS['ecs']->table('users') .
		" as users ON order_userid = user_id ".
		
		" LEFT JOIN " . $GLOBALS['engrave']->table('shipment') .
		" shipment ON engorder.order_shipmentid = shipment.shipment_id ".

		" JOIN " . $GLOBALS['engrave']->table('package') .
		" as package  ON engorder.order_id = package.pck_orderid ".  // and package.pck_warehouseid = warehouse.HouseId
		" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
		" as warehouse  ON package.pck_warehouseid = warehouse.HouseId ".
		" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') .
		" as currecy ON warehouse.CurrencyId = currecy.CId ".

		" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') . " as ecsdelive".
		" ON engorder.order_buyerid = ecsdelive.da_id  ".

        " LEFT JOIN " . $GLOBALS['engrave']->table('country') .
        " as country ON ecsdelive.da_country = country.cid ".

        " JOIN " . $GLOBALS['engrave']->table('orderwaybill') .
        " orderwaybill ON engorder.order_id = orderwaybill.ordw_orderid ".
        " left JOIN " . $GLOBALS['engrave']->table('shipment') .
        " shipment2 ON shipment2.shipment_id = orderwaybill.ordw_collogisid ".


		" where order_isdelete=0 " . $conditions . " GROUP BY AreaId";
	
	//echo $sql;
	$order_list = $GLOBALS['engrave_db']->getRow($sql);
	$order_list['order_time'] = local_date('Y-m-d H:i:s',$order_list['order_time']);


	return $order_list;
}

function engrave_orderwaybill_inid($order_id = '')
{
	$sql="select ordw_waybillid,ordw_orderid,ordw_orderno,ordw_collogisid,ordw_waybillno,ordw_shippingid,".
	"ordw_assistno,ordw_consigid,ordw_applyprice,ordw_waybillcost,ordw_goodweight,ordw_deductweight,".
	"ordw_sizelength,ordw_sizewidth,ordw_sizeheight,ordw_isinsurance,ordw_insurprice,ordw_tariff,".
	"ordw_delete,".
	"da_id,da_userid,da_name,da_consignee,da_consigneetelephone,da_sparetelephone,".
	"da_country,da_province,da_city,da_address,da_zipcode,da_remark,".
	"da_identitycard,da_identitycardfront,da_identitycardbehind,da_email,da_isdelete,da_identityassemble,".
	"da_attach,da_isvalidate,da_adminremark,".
	"area_country.Name as da_area_country,area_city.Name as da_area_city,area_province.Name as da_area_province,".
	"order_goodsprice,order_totalprice".
	" from ".$GLOBALS['engrave']->table('orderwaybill') .
	" left join ".$GLOBALS['engrave']->table('order') .
	" on ordw_orderid=order_id ".
	" left join ".$GLOBALS['ecs']->table('users_deliveryaddress') .
	" on ordw_collogisid=da_id ".
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_country on da_country=area_country.Id ".
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_city on da_city=area_city.Id ".
	" left join ".$GLOBALS['engrave']->table('area') .
	" as area_province on da_province=area_province.Id ".
	"where ordw_orderid in (".$order_id.")";

	$order_list = $GLOBALS['engrave_db']->getAll($sql);
	return $order_list;
}

/**
 * 根据订单查询
 * @param unknown $order_id
 * @return string
 */
function engrave_orderlist_in($order_id)
{
	$conditions='';
	if($order_id!='')
	{
		$conditions=$conditions." and order_id in (".$order_id.")";
	}
	$sql = "select * " .
			" FROM " . $GLOBALS['engrave']->table('order').
			" LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
			" ON order_shippingid = ShippingId ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON Origin = AreaId ".
			" LEFT JOIN " . $GLOBALS['ecs']->table('users') .
			" ON order_userid = user_id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') .
			" ON engrave_warehouse.CurrencyId = CId ".
			" where order_isdelete=0 " . $conditions ;//暂时未用  . " GROUP BY AreaId";
	$order_list = $GLOBALS['engrave_db']->getAll($sql);
	$order_list['order_time'] = local_date('Y-m-d H:i:s',$order_list['order_time']);
	
	return $order_list;
}

/****************************************************************
 * 下面代码与lib_tracking_manage.php重合
 ****************************************************************/
/**
 * 获得状态代码列表
 *
 * @return multitype:string
 */
// function engrave_code_list()
// {
// 	$sql = 'SELECT code_id, code_name FROM ' . $GLOBALS['engrave']->table('statucode') .
// 	' WHERE code_isdelete = 0 ORDER BY code_id';
// 	$res = $GLOBALS['engrave_db']->getAll($sql);

// 	$code_list = array();
// 	foreach ($res AS $row)
// 	{
// 		$code_list[$row['code_id']] = addslashes($row['code_name']);
// 	}

// 	return $code_list;
// }
/**
 * 添加跟踪管理
 * @param unknown $coupon：跟踪管理对象
 */
// function engrave_tracking_insert($track_info)
// {
// 	$sql="insert into ".$GLOBALS['engrave']->table('package_track').
// 	"(tr_orderid,tr_expressnumber,tr_message,tr_statuscode,tr_intime,tr_operatorid,tr_isdelete) values('".
// 	$track_info['tr_orderid']."','".$track_info['tr_expressnumber']."','".$track_info['tr_message']."','".$track_info['tr_statuscode']."','".$track_info['tr_intime']."','".
// 	$track_info['tr_operatorid']."','".$track_info['tr_isdelete']."')";
// 	return $GLOBALS['engrave_db']->query($sql);
// }
/****************************************************************
 * 上面代码与lib_tracking_manage.php重合
****************************************************************/
/**
 * 获得订单号
 * @param unknown $orderid
 */
function engrave_track_orderno($orderid)
{
	$sql = "SELECT order_no " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_isdelete = 0 AND order_id = " . $orderid;
	return $GLOBALS['engrave_db']->getOne($sql);
}
/**
 * 查找该运单中是否有运单号（是否存在空的）
 * @param unknown $order_id
 */
function engrave_isexist_orderwaybillno($order_id)
{
	 $j = 1;
	 $count_sql = " SELECT COUNT(*) ".
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
			" WHERE ordw_delete = 0 AND ordw_orderid = ".$order_id;
	 $waybill_count = $GLOBALS['engrave_db']->getOne($count_sql);
     $sql = " SELECT ordw_waybillno ".
     		" FROM " . $GLOBALS['engrave']->table('orderwaybill') . 
     		" WHERE ordw_delete = 0 AND ordw_orderid = ".$order_id;
     $ordw_waybillno = $GLOBALS['engrave_db']->getAll($sql);
     for($i = 0;$i < $waybill_count;$i++)
     {
     	if($ordw_waybillno[$i]['ordw_waybillno'] == "")
     	{
     		$j = 0;
     		break;
     	}
     }
     return $j;
}


/**
 * 改变订单中的状态
 * @param unknown $deliverystatus
 * @param unknown $orderid
 */
function engrave_delivertstatus($deliverystatus,$orderid)
{
	$sql = "update ".$GLOBALS['engrave']->table('order').
	       " set order_isdelivery = '".$deliverystatus."' where order_id='".
	       $orderid."'";
	return  $GLOBALS['engrave_db']->query($sql);
}

/**
 * 改变订单中的状态:带事务
 * @param unknown $deliverystatus
 * @param unknown $orderid
 * @param unknown $conn:数据库连接对象
 */
function engrave_delivertstatus_trans($deliverystatus,$orderid,$conn)
{
	$sql = "update ".$GLOBALS['engrave']->table('order').
	       " set order_isdelivery = '".$deliverystatus."' where order_id='".
	       $orderid."'";
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else {
		return false;
	}
}

/**
 * 改变订单打印的状态:带事务
 * @param unknown $printstatus:打印状态
 * @param unknown $orderid：订单ID
 */
function engrave_order_printstatus_trans($printstatus,$orderid)
{
	$sql = "update ".$GLOBALS['engrave']->table('order').
	       " set order_printstatus = '".$printstatus."' where order_id='".
	       $orderid."'";
	$result = $GLOBALS['engrave_db']->query($sql);
	
	if($result!==false)
	{
		return true;
	}
	else {
		return false;
	}
}

/**
 * 改变订单中的状态同时也改变支付状态
 * @param unknown $deliverystatus
 * @param unknown $orderid
 */
function engrave_delivertstatus_payment($deliverystatus,$orderid)
{
	$sql = "update ".$GLOBALS['engrave']->table('order').
	" set order_paymentstatus = 1,order_isdelivery = '".$deliverystatus."' where order_id='".
	$orderid."'";
	return  $GLOBALS['engrave_db']->query($sql);
}

/**
 * 获得该订单所对应的包裹
 * @param unknown $order_id
 */
function engrave_package_goods_list($order_id)
{
	$sql = "SELECT pck_id,pck_expressnumber,pckg_name,pckg_unitprice,pckg_amount,pck_weight,pck_inventorylocation,pck_userremark,WeightUnit " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('packagegoods') .
			" ON pckg_packageid = pck_id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON pck_warehouseid = HouseId ".
			" WHERE  pck_istrouble = 0 AND pck_isdelete = 0 AND pck_orderid = '" . $order_id . "' GROUP BY pck_expressnumber";
	$package_goods_list = $GLOBALS['engrave_db']->getAll($sql);
	return $package_goods_list;
}

/**
 * 获得该订单所对应的包裹和包裹中对象的物品
 * @param unknown $order_id
 */
function engrave_packagegoods_list($order_id)
{
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('packagegoods') .
			" ON pckg_packageid = pck_id ".
			" WHERE  pck_istrouble = 0 AND pck_isdelete = 0 AND pck_orderid = " . $order_id;
	$package_goods_list = $GLOBALS['engrave_db']->getAll($sql);
	return $package_goods_list;
}

/**
 * 根据订单号获得仓库的名称
 * @param unknown $order_id
 */
function engrave_order_warehousename($order_id)
{
	$sql = "SELECT w.HouseName " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			"as p LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" as w ON p.pck_warehouseid = w.HouseId ".
			" WHERE  p.pck_istrouble = 0 AND p.pck_isdelete = 0 AND p.pck_orderid = '" . $order_id . "' GROUP BY p.pck_warehouseid";
	return $GLOBALS['engrave_db']->getOne($sql);
}

function engrave_goods_list($pck_id)
{
	$sql = "SELECT pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice " .
			" FROM " . $GLOBALS['engrave']->table('packagegoods') .
			" WHERE  pckg_packageid = '" . $pck_id . "'";
	$goods_list = $GLOBALS['engrave_db']->getAll($sql);
	return $goods_list;
}
/**
 * 获得增值服务
 * @param unknown $order_id
 */
function engrave_value_service_list($order_id)
{
	$sql = "SELECT ServiceName " .
			" FROM " . $GLOBALS['engrave']->table('waybillservice') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('services') .
			" ON ords_serviceid = ServiceId ".
			" WHERE ords_isdelete = 0 AND ords_orderid = '" . $order_id . "'";
	$value_service_list = $GLOBALS['engrave_db']->getAll($sql);
	return $value_service_list;
}
/**
 * 获得运单的信息
 * @param unknown $order_id
 */
function engrave_waybill_list($order_id)
{
	$sql = "SELECT *,area_country.Name as CountyName,area_province.Name as ProvinceName,area_city.Name as CityName   " .
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') . "  AS main " .
			" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') ."  AS address " .
			" ON main.ordw_consigid = address.da_id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_country " .
			" ON da_country = area_country.Id ".
// 			" LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as country " .
// 			" on address.da_country = country.cid ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_province " .
			" ON da_province = area_province.Id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_city " .
			" ON da_city = area_city.Id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('order') . " mainordser ".
			" ON ordw_orderid = order_id ".
            " LEFT JOIN " . $GLOBALS['engrave']->table('package') . " package ".
            " ON mainordser.order_id = package.pck_orderid ".

            " LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
			" ON order_shippingid = ShippingId ".
			//" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			//" ON Origin = AreaId ".//AreaId<-- warehouse  //Origin <-- shipping

            " LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') ." warehouse ".
            " ON package.pck_warehouseid = warehouse.HouseId ".


			" left JOIN " . $GLOBALS['engrave']->table('currecy') ." currency ".
			" ON warehouse.CurrencyId = currency.CId ".
			" WHERE CId=2 && ordw_delete = 0 AND ordw_orderid = '" . $order_id . "' GROUP BY ordw_orderno,AreaId";
	$waybill_list = $GLOBALS['engrave_db']->getAll($sql);
	
	return $waybill_list;
}

/**
 * 创建运单号
 * @param number $order_id：订单ID
 * @return array：随机数数组
 */
function engrave_delivery_create_ordw_assistno($order_id = 0)
{
	//全局变量：系统内参数
	$waybill_format =$GLOBALS['_EFG']['s_waybillformat'];//生成的订单号格式
	$waybilltime_format = $GLOBALS['_EFG']['s_waybilltimeformat'];//时间格式
	$waybillwater_length = $GLOBALS['_EFG']['s_waybillwaterlength'];//产生的位数
	//运单号
	$date = date($waybilltime_format);
	$right = '';
	$level_id = 0;
	for($level = 1;$level < $waybillwater_length;$level++)
	{
		$right.=$level_id;
	}
	
	//查找该订单下中的运单的个数
	$sql = "SELECT ordw_waybillid from " . $GLOBALS['engrave']->table('orderwaybill') .
	"WHERE ordw_delete = 0 AND ordw_orderid = '" . $order_id . "'";
	$waybill = $GLOBALS['engrave_db']->getAll($sql);
	
	$i = 0;
	foreach ($waybill as $key => $val)
	{
		$right.=($i + 1);
		//根据运单个数，生成运单号
		if($waybill_format == '{Time}{Number}')
		{
			//生成运单号
			$random[$val['ordw_waybillid']] = $date.$right;
		}
		elseif($waybill_format == '{Number}{Time}')
		{
			$random[$val['ordw_waybillid']] = $right.$date;
		}
		elseif($waybill_format == '{Number}')
		{
			$random[$val['ordw_waybillid']] = $right;
		}
		//如果运单号存在，则$random运单号为当前运单号值加1加外部$number
		if(engrave_waybillno_isexits_random($random[$val['ordw_waybillid']]) != 0)
		{
			$random[$val['ordw_waybillid']] = engrave_waybillno_max() + ($i + 1);
		}
		$i++;
	}
	
	return $random;
}

/**
 * 获得运单发货的信息
 * @param unknown $order_id
 */
function engrave_delivery_waybill_list($order_id)
{	
	$sql = "SELECT *,area_country.Name as CountyName,
	area_province.Name as ProvinceName,area_city.Name as CityName,country.country_name " .
	" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
	" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') ." users_deliveryaddress ".
	" ON ordw_consigid = da_id ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_country " .
	" ON da_country = area_country.Id ".

    " LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as country " .
	" ON users_deliveryaddress.da_country = country.cid ".


	" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_province " .
	" ON da_province = area_province.Id ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_city " .
	" ON da_city = area_city.Id ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('order') .
	" ON ordw_orderid = order_id ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
	" ON order_shippingid = ShippingId ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
	" ON Origin = AreaId ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') ." as currecy ".
	" ON engrave_warehouse.CurrencyId = currecy.CId ".
	" WHERE ordw_delete = 0 AND ordw_orderid = '" . $order_id . "' GROUP BY ordw_orderno,AreaId";
	$waybill_list = $GLOBALS['engrave_db']->getAll($sql);
	return $waybill_list;
}
/**
 * 获得对应线路的货币体积单位信息
 * @param unknown $shippingid
 */
function engrave_currencyinfo_list($shippingid)
{
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('shipping') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON Origin = AreaId ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') .
			" ON engrave_warehouse.CurrencyId = CId ".
			" WHERE IsDeleteShipping = 0 AND ShippingId = '" . $shippingid . "' GROUP BY AreaId";
	$currencyinfo_list = $GLOBALS['engrave_db']->getAll($sql);
	return $currencyinfo_list;
}
/**
 * 获得运单的折扣
 */
function engrave_discount($order_id)
{
	$sql = "SELECT discount / 100 " .
			" FROM " . $GLOBALS['ecs']->table('user_rank') .
			" WHERE min_points < (SELECT rank_points from " . $GLOBALS['ecs']->table('users') .
			" WHERE user_id = (select order_userid from " . $GLOBALS['engrave']->table('order') .
		    " where order_id = '" . $order_id . "')) AND max_points >= (SELECT rank_points from " . $GLOBALS['ecs']->table('users') .
			" WHERE user_id = (select order_userid from " . $GLOBALS['engrave']->table('order') .
		    " where order_id = '" . $order_id . "'))";
	$discount = $GLOBALS['db']->getOne($sql);
	if($discount == '')
	{
		$discount = 1.00;
	}
	return $discount;
}
/**
 * 根据线路来获得该条线路下所对应的费用值
 * @param unknown $shippingid
 */
function engrave_shipping_order_list($shippingid)
{
	$sql = "SELECT ShippingId,ShippingName,HeavyVolume,VolumePrice,IsSupPice,Discount,".
	"Weight,AddWeight,Price,AddPrice,Agreement,slp_minweight,slp_maxweight,slp_price,slp_serviceprice " .
	" FROM " . $GLOBALS['engrave']->table('shipping') .
	" LEFT JOIN " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	" ON s_slpgid = slp_slpgid AND slp_isdelete = 0" .
	" WHERE IsDeleteShipping = 0 AND ShippingId = '" . $shippingid . "'";
	$shippingorder_list = $GLOBALS['engrave_db']->getAll($sql);
	
	return $shippingorder_list;
}
/**
 * 获得订单中物品的信息
 * @param unknown $waybillid
 */
function engrave_order_goods_list($waybillid)
{
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('ordergoods') .
			" WHERE ordg_delete = 0 AND ordg_waybillid = '" . $waybillid . "'";
	$order_goods_list = $GLOBALS['engrave_db']->getAll($sql);

	return $order_goods_list;
}

/**
 * 获得收货人的详细信息
 * @param unknown $da_congisee
 */
function engrave_delivery_list($da_congisee)
{
	$sql = "SELECT address.*, country.country_name  " .
			" FROM " . $GLOBALS['ecs']->table('users_deliveryaddress') . " as address ". 
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') .
			
			" ON da_province = Id ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as  country " .
			" on country.cid = address.da_country ".
			" WHERE da_id = '" . $da_congisee . "'";
	$delivery_list = $GLOBALS['db']->getAll($sql);
	return $delivery_list;
}
/**
 * 获得线路列表
 */
function engrave_order_shipping_list()
{
	$sql = 'SELECT ShippingId, ShippingName FROM ' . $GLOBALS['engrave']->table('shipping') . ' WHERE IsDeleteShipping = 0 ORDER BY ShippingId';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$order_shipping_list = array();
	foreach ($res AS $row)
	{
		$order_shipping_list[$row['ShippingId']] = addslashes($row['ShippingName']);
	}
	
	return $order_shipping_list;
}

/**
 * 获得仓库列表
 */
function engrave_order_waybill_list()
{
	$sql = 'SELECT HouseId, HouseName FROM ' . $GLOBALS['engrave']->table('warehouse') . ' WHERE IsDeleteHouse = 0 ORDER BY HouseId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$order_waybill_list = array();
	foreach ($res AS $row)
	{
		$order_waybill_list[$row['HouseId']] = addslashes($row['HouseName']);
	}

	return $order_waybill_list;
}
/**
 * 查询所有：配送地
 * @param number $parentid：父ID
 * @return unknown：配送地区对象集合
 */
function engrave_country_area_list($parentid=0)
{
	$sql = "SELECT Id,Name" .
			" FROM " . $GLOBALS['engrave']->table('area') .
			" WHERE IsDeleteArea = 0 and ParentId = ".$parentid;

	$row = $GLOBALS['engrave_db']->getAll($sql);

	return $row;
}
/**
 * 查询所有：配送地
 * @param number $parentid：父ID
 * @param number $selectedoption：选中的option索引
 * @return string：配送地区对象集合-option
 */
function engrave_area_option($parentid=0,$selectedoption=0)
{
	$sql = "SELECT Id,Name" .
			" FROM " . $GLOBALS['engrave']->table('area') .
			" WHERE IsDeleteArea = 0 and ParentId = ".$parentid;
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['Id'] . '" ';
		if($val['Id']==$selectedoption)
		{
			$select .= ' selected="true" ';
		}
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['Name']), ENT_QUOTES) . '</option>';
	}
	
	return $select;
}
/**
 * 获得第三方物流
 */
function engrave_collogistics_list()
{
	$sql = 'SELECT LogisticsId, LogisticsName FROM ' . $GLOBALS['engrave']->table('collogistics') . ' WHERE IsDeleteLogistics = 0 ORDER BY LogisticsId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$collogistics_list = array();
	foreach ($res AS $row)
	{
		$collogistics_list[$row['LogisticsId']] = addslashes($row['LogisticsName']);
	}

	return $collogistics_list;
}

//获得当前用户所拥有的金额
function engrave_current_balance($order_id)
{
	$sql = "SELECT u.user_money " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			"as o LEFT JOIN " . $GLOBALS['ecs']->table('users') .
			"as u ON o.order_userid = u.user_id ".
			" WHERE o.order_isdelete = 0 AND o.order_id = '" . $order_id . "'";
	$currentbalance = $GLOBALS['db']->getOne($sql);
	return $currentbalance;
}

/**
 * 判断该随机数在库中是否存在
 * @access  public
 * @access  $random SN
 */
function engrave_waybillno_isexits_random($random)
{
	$sql = "SELECT COUNT(*) " .
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
			" WHERE ordw_delete = 0 AND ordw_assistno >= '" . $random . "'";
	$count = $GLOBALS['engrave_db']->getOne($sql);
	return $count;
}

/**
 * 查找改字段的最大值----order_no
 */
function engrave_waybillno_max()
{
	$sql = "SELECT MAX(ordw_assistno) " .
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
			" WHERE ordw_delete = 0";
	$value = $GLOBALS['engrave_db']->getOne($sql);
	return $value;
}

/**
 * 根据订单ID获取运单、及收货人信息
 * @param number $order_id：订单ID
 * @return unknown：运单对象列表
 */
function engrave_order_waybill_byorderid($order_id = 0)
{
	$sql="select ordw_orderno,ordw_waybillno,da_identitycardfront,da_identitycardbehind from ".
	$GLOBALS['engrave']->table('orderwaybill'). 
	" left join ".$GLOBALS['ecs']->table('users_deliveryaddress')." on ordw_consigid=da_id".
	" where ordw_orderid=".$order_id;
	
	$result = $GLOBALS['engrave_db']->getAll($sql);
	return $result;
}

/**
 * 修改运单：带事务
 * @param unknown $orderwaybill：运单对象
 * @param unknown $waybillid：订单运单ID
 * @param unknown $conn：数据库连接对象
 */
function engrave_order_waybill_update($orderwaybill,$waybillid,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('orderwaybill').
	"set ordw_deductweight = '".$orderwaybill['deductweight'].
	"',ordw_sizelength = '".$orderwaybill['sizelength'].
	"',ordw_sizewidth = '".$orderwaybill['sizewidth'].
	"',ordw_sizeheight = '".$orderwaybill['sizeheight'].
	"' where ordw_waybillid = '".$waybillid."'";
    
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

//获得系统设置中积分和货币的转换
function engrave_rate_points()
{
    //s_integralprice
	$sql = "SELECT value " .
			" FROM " . $GLOBALS['engrave']->table('system_config') .
			" WHERE id = 321";
	$integralprice = $GLOBALS['engrave_db']->getOne($sql);
	return $integralprice;
}
/**
 * 获取所有订单的总重量
 */
function engrave_order_totalweight()
{
	/* 记录总数 */
	$sql_count = "SELECT Round(SUM(order_weight),2) as TotalWeight FROM " .$GLOBALS['engrave']->table('order').
	" where order_isdelete = 0";
	
	$TotalWeight = $GLOBALS['engrave_db']->getOne($sql_count);
	return $TotalWeight;
}

/**
 * 判断：运单编号是否存在
 * @param string $ordw_assistno：运单编号
 * @return boolean：若存在，返回true，反之，返回false！
 */
function engrave_exist_ordw_assistno($ordw_assistno='')
{
	$sql = "select count(ordw_assistno) from " . $GLOBALS['engrave']->table('orderwaybill').
	" where ordw_assistno = '".$ordw_assistno."'";
	
	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result>0)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 判断：第三方物流运单编号是否存在
 * @param string $ordw_waybillno：第三方物流 运单编号
 * @return boolean：若存在，返回true，反之，返回false！
 */
function engrave_exist_ordw_waybillno($ordw_waybillno='')
{
	$sql = "select count(ordw_waybillno) from " . $GLOBALS['engrave']->table('orderwaybill').
	" where ordw_waybillno = '".$ordw_waybillno."'";

	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result>0)
	{
		return true;
	}
	else{
		return false;
	}
}
//获得默认货币的名称
function engrave_currency_name()
{
    return engrave_default_currecyname();
}
/**
 * 获得系统中的默认货币
 */
function engrave_default_currecyname()
{
	$sql = "select Name from " . $GLOBALS['engrave']->table('currecy') .
	" where IsDeleteCurrecy = 0 and IsDefault = 1";
	$DefaultName = $GLOBALS['engrave_db']->getOne($sql);
	return $DefaultName;
}

/**
 * 查询：订单日志
 * @param number $ol_orderno：订单ID
 */
function engrave_orderlog_list($order_id=0)
{
	$sql="select ol_id,ol_time,ol_userid,ol_username,ol_info,ol_ipaddress,ol_code from ".
	$GLOBALS['engrave']->table('order_log').
	" where ol_orderid=".$order_id.
	" order by ol_id desc";
	
	$orderlog_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($orderlog_list as $key=>$val)
	{
		$orderlog_list[$key]['ol_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['ol_time']);
	}
	return $orderlog_list;
}

/**
 * 添加日志：带事务
 * @param unknown $orderlog：订单日志
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_orderlog_insert($orderlog,$conn)
{
	$time = gmtime();
	$sql="insert into ".$GLOBALS['engrave']->table('order_log').
	"(ol_time,ol_userid,ol_username,ol_info,ol_ipaddress,ol_code,ol_orderid) values('".
	$time."','".
	$orderlog['ol_userid']."','".
	$orderlog['ol_username']."','".
	$orderlog['ol_info']."','".
	$orderlog['ol_ipaddress']."','".
	$orderlog['ol_code']."','".
	$orderlog['ol_orderid']."')";
	$result = mysql_query($sql,$conn);

	if($result===false)
	{
		return false;
	}else {
		return true;
	}
}
function engrave_order_invoice_insert($conn, $order,$totalmoneny) {
    $order_invoice_type = $order['order_invoice_type'];
    $order_invoice_title = $order['order_invoice_title'];
    $order_invoice_tax_no = $order['order_invoice_tax_no'];
    $order_invoice_content = $order['order_invoice_content'];
    $order_invoice_address = $order['order_invoice_address'];
    $time = gmtime();
    $sql="insert into ".$GLOBALS['engrave']->table('invoice').
        "(invoice_add_time  ,invoice_type,invoice_content,invoice_title,invoice_tax_no,invoice_order_id,invoice_order_sn,
        invoice_user_id,invoice_username,invoice_amount,invoice_address
        ) values('".
        $time."','".
        $order_invoice_type."','".
        $order_invoice_content."','".
        $order_invoice_title."','".
        $order_invoice_tax_no."','".
        $order['order_id']."','".
        $order['order_no']."','".
        $order['user_id']."','".
        $order['user_name']."','".
        $totalmoneny."','".
        $order_invoice_address."')";
    $result = mysql_query($sql,$conn);

    if($result===false)
    {
        return false;
    }else {
        return true;
    }
}
/**
 * 包裹 包裹ID
 * @param unknown $package
 * @param unknown $pck_id
 */
function engrave_package_details_update($package,$pck_id)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_warehouseid='".$package['pck_warehouseid'].
	"',pck_inventorylocation='".$package['pck_inventorylocation'].
	"',pck_storagecode='".$package['pck_storagecode'].
	"',pck_expressnumber='".$package['pck_expressnumber'].
	"' where pck_id='".$pck_id."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 订单 订单ID
 * @param unknown $order
 * @param unknown $order_id
 */
function engrave_order_details_update($order,$order_id)
{
	$sql="update ".$GLOBALS['engrave']->table('order').
	"set order_shippingid='".$order['order_shippingid'].
	"',order_isdelivery='".$order['order_isdelivery'].
	"' where order_id='".$order_id."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 运单 运单ID
 * @param unknown $waybill
 * @param unknown $ordw_waybillid
 */
function engrave_waybill_details_update($waybill,$ordw_waybillid)
{
	$sql="update ".$GLOBALS['engrave']->table('orderwaybill').
	"set ordw_assistno='".$waybill['ordw_assistno'].
	"',ordw_waybillno='".$waybill['ordw_waybillno'].
	"',ordw_applyprice='".$waybill['ordw_applyprice'].
	"',ordw_insurprice='".$waybill['ordw_insurprice'].
	"',ordw_waybillcost='".$waybill['ordw_waybillcost'].
	"' where ordw_waybillid='".$ordw_waybillid."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 物流 物流ID
 * @param unknown $collogistics
 * @param unknown $logistics_id
 */
function engrave_collogistics_details_update($collogistics,$logistics_id)
{
	$sql="update ".$GLOBALS['engrave']->table('collogistics').
	"set LogisticsName='".$collogistics['LogisticsName'].
	"',CollCode='".$collogistics['CollCode'].
	"' where LogisticsId='".$logistics_id."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 收货信息 收货ID
 * @param unknown $deliveryaddress
 * @param unknown $da_id
 */
function engrave_deliveryaddress_details_update($deliveryaddress,$da_id)
{
	$sql="update ".$GLOBALS['ecs']->table('users_deliveryaddress').
	"set da_consignee='".$deliveryaddress['da_consignee'].
	"',da_identitycard='".$deliveryaddress['da_identitycard'].
	"',da_identitycardfront='".$deliveryaddress['da_identitycardfront'].
	"',da_identitycardbehind='".$deliveryaddress['da_identitycardbehind'].
	"',da_country='".$deliveryaddress['da_country'].
	"',da_province='".$deliveryaddress['da_province'].
	"',da_city='".$deliveryaddress['da_city'].
	"',da_address='".$deliveryaddress['da_address'].
	"',da_zipcode='".$deliveryaddress['da_zipcode'].
	"',da_email='".$deliveryaddress['da_email'].
	"',da_consigneetelephone='".$deliveryaddress['da_consigneetelephone'].
	"',da_sparetelephone='".$deliveryaddress['da_sparetelephone'].
	"' where da_id='".$da_id."'";

	return $GLOBALS['db']->query($sql);
}

class DispatchInfo {
    function __construct() {

    }
    function getInfo($dispatch_id) {
        global $engrave_db;
        $where = " dispatch_id=".$dispatch_id;
        $sql = "select dispatch.*, airline.airline_name, flight.flight_no, flight.leave_date, flight.leave_time, aport.port_name  from " .$GLOBALS['engrave']->table('dispatch_list')." dispatch "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('airline_flight')." flight using(flight_id) "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('airline')." airline   on airline.airline_id = dispatch.airline_id "
            ."LEFT JOIN " .$GLOBALS['engrave']->table('arrival_port')." aport   on aport.ap_id = flight.ap_id "
            ." where ".$where."  ";
        $row = $engrave_db->getRow($sql);
        return $row;
    }
    function getDispatchOrdersInfo($dispatch_id) {
        global $engrave_db;
        $conditions = " AND engorder.dispatch_id=$dispatch_id ";
        $sql = "select engorder.* " .
            " FROM " . $GLOBALS['engrave']->table('order')." engorder "
            ." "
            ." where order_isdelete=0 " . $conditions ;//暂时未用  . " GROUP BY AreaI
        $rows = $engrave_db->getAll($sql);
        $result = array();
        $dispatchOrdersAllSended = true;
        foreach($rows as $key => $val) {
            $OrderId = $val['order_id'];
            $view['all_send'] = engrave_isexist_orderwaybillno($OrderId);
            if(!$view['all_send']) {
                $dispatchOrdersAllSended = false;
            }
            $view=engrave_order_byid($OrderId);
            array_push($result, $view);
        }
        return array($result, $dispatchOrdersAllSended);
    }
    function getDispatchOrders($dispatch_id) {
        global $engrave, $engrave_db;
        $where = " dispatch_list.dispatch_id=$dispatch_id";
        $sql = "select ".
            "engorder.order_id,engorder.order_no,engorder.order_time, ROUND(engorder.order_weight,2) as orderweight, ".
            "ecsuser.user_name as order_username,".
            "engorder.order_buyerid as da_id,  ecsdelive.da_country as country_id , ecsdelive.da_address as da_address, ".
            "ecsdelive.da_consignee,  ".
            "orderwaybill.ordw_waybillno ,shipment.shipment_name  ".
            " from ".
            $GLOBALS['engrave']->table('order') . " as engorder".
            " LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as ecsuser".
            " ON engorder.order_userid = ecsuser.user_id ".
            " LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress') . " as ecsdelive".
            " ON engorder.order_buyerid = ecsdelive.da_id  ".
            " JOIN " . $GLOBALS['engrave']->table('dispatch_list') .
            " dispatch_list ON engorder.dispatch_id = dispatch_list.dispatch_id ".
            " JOIN " . $GLOBALS['engrave']->table('orderwaybill') .
            " orderwaybill ON engorder.order_id = orderwaybill.ordw_orderid ".
            " JOIN " . $GLOBALS['engrave']->table('shipment') .
            " shipment ON shipment.shipment_id = orderwaybill.ordw_collogisid ".
            " where ". $where;
    }
    function getPageList( ) {
        global $engrave_db;
        $conditions=' ';
        $where = " 1 ";
        $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'dispatch_id' : trim($_REQUEST['sort_by']);
        $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

        /* 记录总数 */
        $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('dispatch_list').
            " where 1";

        $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
        /* 分页大小 */
        $filter = page_and_size($filter);

        $sql = "select dispatch.* from " .$GLOBALS['engrave']->table('dispatch_list')." dispatch"
            ." "
            ." where ".$where." order by dispatch_id desc "
            ." LIMIT " . $filter['start'] . ",$filter[page_size]";

        ///echo $sql;
        $row = $GLOBALS['engrave_db']->getAll($sql);

        foreach ($row AS $key=>$val)
        {
            if($val[flight_id]) {
                $where = " flight_id=".$val[flight_id];
                $sql = "select airline.airline_id, airline.airline_name, flight.flight_no, flight.leave_date, flight.leave_time from " .$GLOBALS['engrave']->table('airline_flight')." flight  join " .$GLOBALS['engrave']->table('airline')." airline using(airline_id) where ".$where."  ";
                $flight_info = $engrave_db->getRow($sql);

                $row[$key]['flight_info'] = $flight_info;
            }
            list($orders,$dispatchOrdersAllSended) = $this->getDispatchOrdersInfo($val['dispatch_id']);

            $row[$key]['orders'] = $orders;
            $row[$key]['dispatchOrdersAllSended'] = $dispatchOrdersAllSended;
            $row[$key]['create_time']     = local_date($GLOBALS['_CFG']['time_format'], $val['create_time']);
        }
        //print_a($row);
        return array('data_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
    }
    function mapAirline($dispatch_id) {
        global $engrave_db;
        $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));

        $tomorrow_format = date('Y-m-d',$tomorrow);
        $ht = mktime(0,0,0,date("m"),date("d")+2,date("Y"));
        $ht_format = date('Y-m-d',$ht);


        $where = " dispatch_id=".$dispatch_id;
        $sql = "select * from " .$GLOBALS['engrave']->table('dispatch_list')." dispatch where ".$where."  ";
        $row = $engrave_db->getRow($sql);
        $weight = $row['total_weight'];
        //订次日下午最便宜的直飞航班即可
        if($row['time_request'] == 'urgent') {
            //city_id
            $where = " lp_id=".$row['city_id']." and is_direct='D' and leave_ampm='pm' and leave_date='".$tomorrow_format."'";
            $sql = "select * from " .$GLOBALS['engrave']->table('airline_flight')." flight  where ".$where."  ";
        }
        //一般在次日下午和后天的航班中选择最便宜的航班即可
        else {
            //city_id
            $where = " lp_id=".$row['city_id']." and ( leave_date='".$tomorrow_format."' OR  leave_date='".$ht_format."')";
            $sql = "select * from " .$GLOBALS['engrave']->table('airline_flight')." flight  where ".$where."  ";
        }
        $flights = $engrave_db->getAll($sql);
        //计算价格
        //$price_template = "";
        if(empty($flights)) return "No-flight";
        return $this->getPriceByFlights($flights, $weight);

    }
    function getPriceByFlights($flights, $weight) {
        global $engrave_db;
        foreach($flights as $flight) {
            $apt_id = $flight['apt_id'];
            if(!isset($price_template[$apt_id])) {
                $sql = "select * from " . $GLOBALS['engrave']->table('airline_price_template') . " dispatch where apt_id=" . $apt_id;
                $price_config = $engrave_db->getRow($sql);
                $price_template[$apt_id] = $price_config;
            } else {
                $price_config = $price_template[$apt_id];
            }
            $price = $this->getTransPriceByWeight($price_config, $weight);
            $flight_price[$flight['flight_id']] = $price;
            $flight_airline_id[$flight['flight_id']] = $flight['airline_id'];
        }
        $minPrice = 0;
        $minFlightId = 0;
        foreach($flight_price as $key => $value) {
            if(!$minPrice) {
                $minPrice = $value;
                $minFlightId = $key;
            } else {
                if($value < $minPrice) {
                    $minPrice = $value;
                    $minFlightId = $key;
                }
            }
        }

        return array (
            'flight_id' => $minFlightId,
            'price' => $minPrice,
            'airline_id' => $flight_airline_id[$minFlightId]
        );
    }
    function getTransPriceByWeight($price_config, $weight) {
        if(empty($price_config)) return 9999999;
        $weight = $weight / 1000;
        if($weight<100) {
            $price = $price_config['price0'];
        } else if($weight<300) {
            $price = $price_config['price100'];
        } else if($weight<500) {
            $price = $price_config['price300'];
        } else if($weight<1000) {
            $price = $price_config['price500'];
        } else {
            $price = $price_config['price1000'];
        }
        return $weight * $price;
    }
}
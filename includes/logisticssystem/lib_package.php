<?php
/**
 * ENGRAVE 数据访问：物流系统-词典
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
/*
engrave_package.pck_packagestatus
1:入库途中
2:已入库
3:未处理
4:打包中
5:等待发出
6:已发出
7:历史预报
8:问题件
 
*/
/**
 * 获取该仓库下的包裹数量
 * @param unknown $warehouseId
 */
function engrave_logistic_package_list($warehouseId)
{
	$sql = "SELECT pck_id,pck_warehouseid,pck_expressnumber,pck_weight,pck_sizelength,pck_sizewidth,pck_sizeheight,pck_intime,pck_userremark " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_packagestatus = 1 AND pck_isdelete = 0 AND pck_warehouseid = '" . $warehouseId . "' and pck_userid = '".$_SESSION['user_id']."'";
	$package_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($package_list AS $key=>$val)
	{
		$package_list[$key]['pck_intime'] = local_date('Y-m-d H:i:s', $val['pck_intime']);
	}
	return $package_list;
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
		$orderlog_list[$key]['ol_time'] = local_date('Y-m-d H:i:s', $val['ol_time']);
	}
	return $orderlog_list;
}

/**
 * 获得包裹的长宽高
 * @param unknown $pck_expressnumber
 */
function engrave_packagevolume_list($pck_expressnumber)
{
	$sql = "SELECT pck_sizelength,pck_sizewidth,pck_sizeheight " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_packagestatus = 1 AND pck_isdelete = 0 AND pck_expressnumber = '" . $pck_expressnumber . "' and pck_userid = '".$_SESSION['user_id']."'";
	$packagevolume_list = $GLOBALS['engrave_db']->getAll($sql);
	return $packagevolume_list;
}
/***
 * 
 */
function engrave_packages_list_byids($pck_ids)
{
	$sql = "SELECT *  " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_packagestatus = 1 AND pck_isdelete = 0 AND pck_id in  (" . implode(',', $pck_ids) . ") and pck_userid = '".$_SESSION['user_id']."'";


	$packagevolume_list = $GLOBALS['engrave_db']->getAll($sql);
	return $packagevolume_list;
}


function  engrave_logistic_packagegoods_list($pck_id)
{
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('packagegoods') .
			" WHERE pckg_packageid = '" . $pck_id . "'";
	$package_list = $GLOBALS['engrave_db']->getAll($sql);
	return $package_list;
}

function engrave_service_name_list($pck_id)
{
	$sql = "SELECT es.ServiceId as Id,ServiceName,Price,Unit,Description " .
			" FROM " . $GLOBALS['engrave']->table('services_setting') . " AS ess ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('services') . " AS es " . 
			" ON ess.ServiceId = es.ServiceId " .
			" WHERE IsDeleteSetting = 0 AND WarehouseId = '" . $pck_id . "'";
	$servicename_list = $GLOBALS['engrave_db']->getAll($sql);
	return $servicename_list;
}

function engrave_upgrade_package_list($pck_id)
{
	$sql = "SELECT HouseId,UpPackage,OutsideCost,ew.Warehousing,ew.WarehousingBM,ec.Name,ec.Symbol,ExchageRate,ec.IsDefault " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') . " AS ew ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') . " AS ec " .
			" ON ew.CurrencyId = ec.CId " .
			" WHERE IsDeleteHouse = 0 AND HouseId = '" . $pck_id . "'";
	$upgradepack_list = $GLOBALS['engrave_db']->getAll($sql);
	return $upgradepack_list;
}
/**
 * 根据线路来获得该条线路下所对应的费用值
 * @param unknown $shippingid
 */
function engrave_shipping_order_list($shippingid)
{
	$sql = "SELECT ShippingId,ShippingName,IsSupPice,Weight,AddWeight,Price,AddPrice,Agreement,slp_minweight,".
	"slp_maxweight,slp_price,slp_serviceprice " .
	" FROM " . $GLOBALS['engrave']->table('shipping') .
	" LEFT JOIN " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	" ON s_slpgid = slp_slpgid AND slp_isdelete = 0" .
	" WHERE IsDeleteShipping = 0 AND ShippingId = '" . $shippingid . "'";
	$shippingorder_list = $GLOBALS['engrave_db']->getAll($sql);
	//echo $sql;
	return $shippingorder_list;
}
/**
 * 根据线路来获得该条线路下所对应的保险费用的计算
 * @param unknown $shippingId
 * @return unknown
 */
function engrave_insurance_cost_list($shippingId)
{
	$sql = "SELECT sdv_id,sdv_minprice,sdv_maxprice,sdv_price,sdv_ispercent " .
			" FROM " . $GLOBALS['engrave']->table('shipping_declaredvalue') .
			" WHERE sdv_isdelete = 0 AND sdv_shippingid = '" . $shippingId . "'";
	$insruancecost_list = $GLOBALS['engrave_db']->getAll($sql);
	return $insruancecost_list;
}
/**
 * 获得该用户下的收件人的详细信息
 * @param unknown $userId
 */
function engrave_delivery_address_list($userId)
{
	$sql = "SELECT da_id,da_country country_id, country.`country_name`, concat_ws(' ',da_consignee,country.`country_name`,province.`Name`,city.`Name`,da_address,da_zipcode) as delivery_address " .
			" FROM " . $GLOBALS['engrave_shop']->table('users_deliveryaddress') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as country " .
			" ON da_country = country.cid " .
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as province " .
			" ON da_province = province.Id " .
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as city " .
			" ON da_city = city.Id " .
			" WHERE da_isdelete = 0 and da_isvalidate=1  AND da_userid = '" . $userId . "'";
	$delivery_info = $GLOBALS['engrave_db']->getAll($sql);
	
	return $delivery_info;
}
function engrave_shipping_name_list($warehouseid)
{
	$sql = "SELECT ShippingId,ShippingName " .
			" FROM " . $GLOBALS['engrave']->table('shipping') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON Origin = AreaId " .
			" WHERE IsDeleteShipping = 0 AND HouseId = '" . $warehouseid . "' ORDER BY ShippingId DESC";
	$shipping_list = $GLOBALS['engrave_db']->getAll($sql);
	
	return $shipping_list;
}

function engrave_weight_unit($warehouseId)
{
	$sql = "SELECT WeightUnit " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 AND HouseId = '" . $warehouseId . "'";
	$weightunit = $GLOBALS['engrave_db']->getOne($sql);
	return $weightunit;
}

/**
 * 获得默认货币的名称
 * @return unknown
 */
function engrave_currency_name()
{
	$sql = "SELECT Name " .
			" FROM " . $GLOBALS['engrave']->table('currecy') .
			" WHERE IsDeleteCurrecy = 0 AND IsDefault = 1";
	$currencyName = $GLOBALS['engrave_db']->getOne($sql);
	return $currencyName;
}
/**
 * 获得默认货币的单位
 * @return unknown
 */
function engrave_currency_symbol()
{
	$sql = "SELECT CId,Name,Code,Symbol,ExchageRate " .
			" FROM " . $GLOBALS['engrave']->table('currecy') .
			" WHERE IsDeleteCurrecy = 0 AND IsDefault = 1";
	
	$currencySymbol = $GLOBALS['engrave_db']->getRow($sql);
	return $currencySymbol;
}

/**
 * 货币：根据订单ID获取货币信息
 * @param number $order_id：订单ID
 * @return unknown
 */
function engrave_currency_by_orderid($order_id = 0)
{
	$sql = "SELECT CId,Name,Code,Symbol,ExchageRate,RegIntegarl " .
	" FROM " . $GLOBALS['engrave']->table('currecy') .
	" as e_currency left join " . $GLOBALS['engrave']->table('shipping').
	" on CurrencyId=CId".
	" left join ".$GLOBALS['engrave']->table('order').
	" as e_order on order_shippingid = ShippingId".
	" WHERE e_currency.IsDeleteCurrecy = 0 AND e_order.order_id=".$order_id;

	$currencySymbol = $GLOBALS['engrave_db']->getRow($sql);
	return $currencySymbol;
	

}

/**
 * 获取日元货币
 * @param string $cid：货币ID
 * @return unknown
 */
function engrave_currency_jpy_byid()
{
	$sql = "SELECT CId,Name,Code,Symbol,ExchageRate " .
	" FROM " . $GLOBALS['engrave']->table('currecy') .
	" WHERE IsDeleteCurrecy = 0 AND CId = '".
	$GLOBALS["_CFG"]['s_currecy_jpyid']."'";
	
	$currencySymbol = $GLOBALS['engrave_db']->getRow($sql);
	return $currencySymbol;
}

/**
 * 获得当前用户所拥有的金额
 * @return unknown
 */
function engrave_current_balance()
{
	$sql = "SELECT user_money " .
			" FROM " . $GLOBALS['engrave_shop']->table('users') .
			" WHERE isdelete = 0 AND user_id = '" . $_SESSION['user_id'] . "'";
	$currentbalance = $GLOBALS['engrave_shop_db']->getOne($sql);
	return $currentbalance;
}


/**
 * 获得当前用户可以支付的积分
 * @return unknown
 */
function engrave_pay_points()
{
	$sql = "SELECT pay_points " .
			" FROM " . $GLOBALS['engrave_shop']->table('users') .
			" WHERE isdelete = 0 AND user_id = '" . $_SESSION['user_id'] . "'";
	$paypoints = $GLOBALS['engrave_shop_db']->getOne($sql);
	return $paypoints;
}
/**
 * 获得系统中的最大积分值
 * @return unknown
 */
function engrave_system_maxintegral()
{
	$sql = "SELECT value " .
		   " FROM " . $GLOBALS['engrave']->table('system_config') .
		   " WHERE id = 318";
	$maxintegral = $GLOBALS['engrave_db']->getOne($sql);
	return $maxintegral;
}
/**
 * 获得系统设置中积分和货币的转换
 * @return unknown
 */
function engrave_rate_points()
{
	$sql = "SELECT value " .
			" FROM " . $GLOBALS['engrave']->table('system_config') .
			" WHERE id = 321";
	$integralprice = $GLOBALS['engrave_db']->getOne($sql);
	return $integralprice;
}
function engrave_momeny_points_rate()
{
	$sql = "SELECT value " .
			" FROM " . $GLOBALS['engrave']->table('system_config') .
			" WHERE id = 325";
	$priceintegral = $GLOBALS['engrave_db']->getOne($sql);
	return $priceintegral;
}
//获得税率表中的税率
function engrave_rate_tax($RateId)
{
	$sql = "SELECT rate_tax " .
			" FROM " . $GLOBALS['engrave']->table('ratetax_table') .
			" WHERE rate_delete = 0 AND rate_id = '" . $RateId . "'";
	$ratetax = $GLOBALS['engrave_db']->getOne($sql);
	return $ratetax;
}

/**
 * 添加：带事务,
 * @param unknown $appreciation：收货地址对象
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回，false！
 */
function engrave_appreciation_insert($appreciation,$conn)
{
	if($appreciation==null)
	{
		return false;
	}
	$sql='insert into '.
	$GLOBALS['engrave']->table('orderservice').
	"(RecordNo,HouseId,ServiceId,ShippingOrder,Description,".
	"UserId,Tel,AddTime,IsPaid,StatusId,IsDeleteService,ps_packageid) values (".
	"'".$appreciation['RecordNo']."','".$appreciation['HouseId']."','".$appreciation['ServiceId']."','".
	$appreciation['ShippingOrder']."','".$appreciation['Description'].
	"','".$appreciation['UserId']."','".$appreciation['Tel']."','".$appreciation['AddTime']."','".
	$appreciation['IsPaid']."','".$appreciation['StatusId']."','".$appreciation['IsDeleteService'].
	"','".$appreciation['ps_packageid'].
	"')";

	$result = $GLOBALS['engrave_db']->query($sql);
	
	if($result===false) {
		return false;
	}else {
		return true;
	}
}

/**
 * 详细服务
 * @param unknown $recordId
 * @return string
 */
function engrave_services($recordId)
{
	$conditions='';
	if($recordId!='')
	{
		$conditions=$conditions." and RecordId='".$recordId."'";
	}
	$sql = "select RecordNo,ShippingOrder,ServiceName,".
			"eo.Description,eo.StatusId,eo.CheckResult,ps_packageid from ".
			$GLOBALS['engrave']->table('orderservice') . " as eo".
			" LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es".
			" ON eo.ServiceId=es.ServiceId AND es.IsDeleteService = 0".
			" where eo.IsDeleteService = 0 " . $conditions;
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 增值服务：
 * @param number $ServiceId:增值服务ID
 * @return array
 */
function engrave_services_byid($ServiceId=0)
{
	$sql = "select ServiceId,ModuleId,Module,".
			"ServiceName,Description,IsDeleteService from ".
			$GLOBALS['engrave']->table('services') .
			" where IsDeleteService = 0 and ServiceId=" . $ServiceId;
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 增值服务删除
 * @param number $IsFocuseDelete：删除标识
 * @param unknown $RecordId：焦点图ID
 */
function engrave_services_delete($IsDeleteService=1,$RecordId)
{
	$sql="update ".$GLOBALS['engrave']->table('orderservice').
	" set IsDeleteService='".$IsDeleteService."' where RecordId='".
	$RecordId."'";
	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 获得系统参数  支付方式
 */
function engrave_payment_way()
{
	$sql = "SELECT value " .
			" FROM " . $GLOBALS['engrave']->table('system_config') .
			" WHERE id = 304 ";
	$payment_way = $GLOBALS['engrave_db']->getOne($sql);
	return $payment_way;
}
/**
 * 选择的仓库和服务是否存在服务设置
 * @param unknown $serviceid
 * @param unknown $warehouseId
 * @return unknown
 */
function engrave_isexit_servicesetting($serviceid,$warehouseId)
{
	$sql = "SELECT COUNT(*) " .
			" FROM " . $GLOBALS['engrave']->table('services_setting') .
			" WHERE IsDeleteSetting = 0 AND ServiceId = '" . $serviceid . "' AND WarehouseId = '".$warehouseId."'";
	$count = $GLOBALS['engrave_db']->getOne($sql);
	return $count;
}

function engrave_rate_name_list()
{
	$sql = "SELECT rate_id,rate_name,rate_tax " .
			" FROM " . $GLOBALS['engrave']->table('ratetax_table') .
			" WHERE rate_delete = 0 ORDER BY rate_id DESC";
	$rate_name_list = $GLOBALS['engrave_db']->getAll($sql);
	return $rate_name_list;
}
/**
 * 判断该随机数在库中是否存在
 * @access  public
 * @access  $random SN
 */
function engrave_isexits_random($random)
{
	$sql = "SELECT COUNT(*) " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_isdelete = 0 AND order_no >= '" . $random . "'";
	$count = $GLOBALS['engrave_db']->getOne($sql);
	return $count;
}

/**
 * 查找改字段的最大值----order_no
 */
function engrave_roderno_max()
{
	$sql = "SELECT MAX(order_no) " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_isdelete = 0";
	$value = $GLOBALS['engrave_db']->getOne($sql);
	return $value;
}
/**
 * 获得运单的折扣
 */
function engrave_discount()
{
	$sql = "SELECT discount / 100 " .
			" FROM " . $GLOBALS['engrave_shop']->table('user_rank') .
			" WHERE min_points < (SELECT rank_points from " . $GLOBALS['engrave_shop']->table('users') .
			" WHERE user_id = '" . $_SESSION['user_id'] . "') AND max_points >= (SELECT rank_points from " . $GLOBALS['engrave_shop']->table('users') . 
			" WHERE user_id = '" . $_SESSION['user_id'] . "')";
	$discount = $GLOBALS['engrave_shop_db']->getOne($sql);
	if($discount == '')
	{
		$discount = 1.00;
	}
	return $discount;
}

/**
 * 查询：订单
 * @param unknown $order：订单数组
 * @param number $user_id：用户ID
 * @param number $startPage：起始页码
 * @return multitype:unknown：订单数组对象集合
 */
function engrave_order_list($order,$user_id=0,$startPage=0)
{
	$where = " ";
	if($order['isdelivery'] != -1)
	{
		$where = $where . (" and order_isdelivery = " . $order['isdelivery']);
	}
	if($order['paymentstatus'] != -1)
	{
		$where = $where . (" and order_paymentstatus = " . $order['paymentstatus']);
	}
	if($order['no'] != '')
	{
		$where = $where . (" and order_no like '%" . $order['no'] ."%'");
	}
	if($order['consig_name'] != '')
	{
		$where = $where . (" and da_consignee like '%" . $order['consig_name'] ."%'");
	}
	if($order['order_iscolsed'] != '')
	{
	
		$where = $where . (" and order_iscolsed =" . $order['order_iscolsed']);
	}
	$where = $where . (" and order_isdelete =0");
	$where = $where . " ";

	$sql="select count(*) from " .
	$GLOBALS['engrave']->table('order').
	" left join " . $GLOBALS['engrave']->table('deliveryaddress').
	" on order_buyerid=da_id".
	" where order_userid = '" . $user_id . "'" .$where ;
	$row = $GLOBALS['engrave_db']->getOne($sql);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'order_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];
	
	$sql="select order_id,order_modelid,order_no,order_waybillno,order_time,order_userid,".
	"order_buyerid,order_note,order_remark,order_shippingid,order_servicetype,order_isdelivery,".
	"order_fixed,order_boxquantity,order_paymentid,order_paymentpath,(case when order_paymentstatus = 0 then '未付款' end) as paymentstatus_value,".
	"order_refundstatus,order_totalprice,".
	"(case when order_isdelivery=0 then '未配货'".
	" when order_isdelivery=1 then '已配货'".
	" when order_isdelivery=2 then '处理中'".
	" when order_isdelivery=3 then '待付款'".
	" when order_isdelivery=4 then '待发货'".
	" when order_isdelivery=5 then '已发货'".
	" when order_isdelivery=6 then '已完成'".
	" when order_isdelivery=7 then '已删除'".
	" end) as orderstatus_value,".
	"order_goodsprice,order_weight,order_deductweight,order_iscolsed,order_insurace,order_othercost,order_tariffcost,order_valueservicecost,".
	"order_waybillcost,order_warehousecost,order_userpoints,order_isoutbox,order_needinvoice,order_printstatus,order_isdelete, dispatch_status ,order_shipmentid ".
	" FROM " . $GLOBALS['engrave']->table('order').
	" left join " . $GLOBALS['engrave_shop']->table('users_deliveryaddress').
	" on order_buyerid=da_id".
	" where order_userid = '" . $user_id . "'".$where.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",".$pageSize;
	
	//echo $sql;
	$data = $GLOBALS['engrave_db']->getAll($sql);	

	//订单库存列表
	foreach($data as $key=>$val)
	{
		$data[$key]['order_time'] = local_date('Y-m-d H:i:s',$val['order_time']);// H:i:s
		$data[$key]['waybill_list'] = engrave_waybill_list($val['order_id']);
	}
	return array('order_list'=>$data, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
}

/**
 * 获取订单
 * @param number $order_id：订单ID
 */
function engrave_order_byid($order_id=0)
{
	$sql="select order_id,order_modelid,order_no,order_waybillno,order_time,order_userid,".
	"order_buyerid,order_note,order_remark,order_shippingid,order_servicetype,order_isdelivery,".
	"order_fixed,order_boxquantity,order_operatorcost,order_paymentid,order_paymentpath,
    (case when order_paymentstatus = 0 then '未付款' end) as paymentstatus_value,".
	"order_refundstatus,order_totalprice,order_goodsprice,order_weight,order_insurace,order_othercost,
    order_tariffcost,order_valueservicecost,order_shipmentid, ".
	"order_waybillcost,order_warehousecost,order_userpoints,order_isoutbox,order_needinvoice,
    order_printstatus,order_paymenttype,order_isdelete, order_time_request,order_shipment_oilDiscount,order_shipment_discount,order_shipment_basicPrice ".
	" FROM ". $GLOBALS['engrave']->table('order').
	" where order_id=".$order_id;
	$order_list = $GLOBALS['engrave_db']->getRow($sql);
	//print_a($order_list);
	if($order_list['order_shipmentid']) {
	    include_once(ROOT_PATH . '/includes/logisticssystem/lib_shipment.php');
	    //快递公司
	    $allShipment = shipment_all_list();
	    $order_list['shipment'] = $allShipment[$order_list['order_shipmentid']];
	    
	}
	$order_list['order_time'] = local_date('Y-m-d H:i:s',$order_list['order_time']);
	
	return $order_list;
}

/**
 * 根据订单ID查询
 * @param number $order_id:订单ID
 * @return string
 */
function engrave_order_listdetail($order_id)
{
	$conditions='';
	if($order_id!='')
	{
		$conditions=$conditions." and order_id='".$order_id."'";
	}
	$sql = "select * " .
			" FROM " . $GLOBALS['engrave']->table('order').
			" LEFT JOIN " . $GLOBALS['engrave']->table('shipping') .
			" ON order_shippingid = ShippingId ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') .
			" ON Origin = AreaId ".
			" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') .
			" ON engrave_warehouse.CurrencyId = CId ".
			" where order_isdelete=0 " . $conditions . " GROUP BY AreaId";
	$order_list = $GLOBALS['engrave_db']->getRow($sql);
	$order_list['order_time'] = local_date('Y-m-d H:i:s',$order_list['order_time']);

	return $order_list;
}
/**
 * 获得运单的信息
 * @param unknown $order_id
 */
function engrave_waybill_list($order_id)
{
    //,ActionLink,Submission,SubParameter,CodingMethod,Orgion,".
    //	"Number,Status,ArrivalDate,Signatory,StatusList,IsDeleteLogistics,
	$sql = "SELECT ordw_waybillid,ordw_orderid,ordw_orderno,ordw_collogisid,ordw_waybillno,ordw_shippingid,".
	"ordw_assistno,ordw_consigid,ordw_applyprice,ordw_waybillcost,ordw_goodweight,ordw_deductweight,".
	"ordw_sizelength,ordw_sizewidth,ordw_sizeheight,ordw_isinsurance,ordw_insurprice,ordw_tariff,".
	"ordw_delete".
	",area_country.Name as CountyName,area_province.Name as ProvinceName,area_city.Name as CityName, " .
	"engshipment.shipment_name as LogisticsName,shipment_code as CollCode,engshipment.description as LogisticsDesc,engrave_warehouse.WeightUnit,engrave_currecy.Name".
	" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
	" LEFT JOIN " . $GLOBALS['engrave_shop']->table('users_deliveryaddress') .
	" ON ordw_consigid = da_id ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as area_country " .
	" ON da_country = area_country.Id ".
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
	//" LEFT JOIN " . $GLOBALS['engrave']->table('collogistics') .//第三方物流
        " LEFT JOIN " . $GLOBALS['engrave']->table('shipment') . " engshipment".//第三方物流
	" ON engshipment.shipment_id    = ordw_collogisid ".
	" LEFT JOIN " . $GLOBALS['engrave']->table('currecy') .
	" ON engrave_warehouse.CurrencyId = CId ".
	" WHERE ordw_delete = 0 AND ordw_orderid = '" . $order_id . "' GROUP BY ordw_orderno,AreaId";
	$waybill_list = $GLOBALS['engrave_db']->getAll($sql);
	return $waybill_list;
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



$sql = "SELECT da_id,da_country country_id, country.`country_name`, concat_ws(' ',da_consignee,country.`country_name`,province.`Name`,city.`Name`,da_address,da_zipcode) as delivery_address " .
    " FROM " . $GLOBALS['engrave_shop']->table('users_deliveryaddress') .
    " LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as country " .
    " ON da_country = country.cid " .
    " LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as province " .
    " ON da_province = province.Id " .
    " LEFT JOIN " . $GLOBALS['engrave']->table('area') . " as city " .
    " ON da_city = city.Id " .
    " WHERE da_isdelete = 0 AND da_userid = '" . $userId . "'";
 */

function engrave_delivery_list($da_congisee)
{
	$sql = "SELECT a.*, country.`country_name` " .
			" FROM " . $GLOBALS['engrave_shop']->table('users_deliveryaddress') .
			"as  a  LEFT JOIN " . $GLOBALS['engrave']->table('country') . " as country " .
			" ON da_country = country.cid " .
			" LEFT JOIN " . $GLOBALS['engrave']->table('area') .
			" ON da_province = Id ".
			" WHERE da_id = '" . $da_congisee . "'";
	$delivery_list = $GLOBALS['engrave_shop_db']->getAll($sql);
	return $delivery_list;
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
function engrave_goods_list($pck_id)
{
	$sql = "SELECT pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice " .
			" FROM " . $GLOBALS['engrave']->table('packagegoods') .
			" WHERE  pckg_packageid = '" . $pck_id . "'";
	$goods_list = $GLOBALS['engrave_db']->getAll($sql);
	return $goods_list;
}
/**
 * 根据包裹ID获取包裹附件
 * @param number $packageid：包裹ID
 */
function engrave_order_attachs($orderid = 0)
{
	$sql="select oa_id,oa_orderid,oa_attach from ".$GLOBALS['engrave']->table('order_attachs').
	" where oa_orderid = ".$orderid;
	
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 获取订单提醒
 * @param number $user_id：用户ID
 * @return multitype:unknown：包裹提醒
 */
function engrave_order_remind($user_id=0)
{
	$sql="select count(*) from ". $GLOBALS['engrave']->table('order')." where order_isdelivery=0".
			" and order_isdelete=0 and order_userid=".$user_id;
	$order0 = $GLOBALS['engrave_db']->getOne($sql);
	$sql="select count(*) from ". $GLOBALS['engrave']->table('order')." where order_isdelivery=3".
			" and order_isdelete=0 and order_userid=".$user_id;
	$order3 = $GLOBALS['engrave_db']->getOne($sql);
	$sql="select count(*) from ". $GLOBALS['engrave']->table('order')." where order_isdelivery=4".
			" and order_isdelete=0 and order_userid=".$user_id;
	$order4 = $GLOBALS['engrave_db']->getOne($sql);
	$sql="select count(*) from ". $GLOBALS['engrave']->table('order')." where order_isdelivery=5".
			" and order_isdelete=0 and order_userid=".$user_id;
	$order5 = $GLOBALS['engrave_db']->getOne($sql);
	
	return array('order0'=>$order0,'order3'=>$order3,'order4'=>$order4,'order5'=>$order5);
}

/**
 * 支付
 * @param number $order_id：订单ID
 * @param unknown $conn：数据库连接对象
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_order_updatepayment($order_id=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('order').
	" set order_paymentstatus = 1".
	",order_isdelivery = 4".
	" where order_id=".$order_id;
	$result = mysql_query($sql,$conn);
	
	if($result===false)
	{
		return false;
	}else {
		return true;
	}
}

/**
 * 支付:带事务
 * @param number $order_id：订单ID
 * @param number $order_isdelivery：订单状态
 * @param unknown $conn：数据库连接对象
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_order_updatestatus($order_id=0,$order_isdelivery=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('order').
	" set order_isdelivery = ".$order_isdelivery.
	" where order_id=".$order_id;
	$result = mysql_query($sql,$conn);
	
	if($result===false)
	{
		return false;
	}else {
		return true;
	}
}

/**
 * 取消订单：带事务
 * @param number $order_id：订单ID
 * @param unknown $conn：数据库连接对象
 * @return boolean：若修改成功，返回true，反之，返回false！
 */
function engrave_order_cancel($order_id=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('order').
	" set order_iscolsed = 1 where order_id=".$order_id;
	$result = mysql_query($sql,$conn);
	
	if($result===false)
	{
		return false;
	}else {
		return true;
	}
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


/**
 * 获取包裹
 * @param number $PackageId：包裹ID
 */
function engrave_package($PackageId='')
{
	$conditions='';
	if($PackageId!='')
	{
		$conditions=$conditions." and pck_id='".$PackageId."'";
	}
	$sql = "select pck_id,pck_warehouseid,pck_expressid,pck_expresstelephone,pck_expressnumber,pck_assess,pck_name " .
			",pck_weight,pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight".
			",pck_userremark,pck_userid,pck_storagecode,pck_adminremark,pck_packagestatus,pck_inventorylocation".
			",pck_intime,pck_istrouble,pck_isdelete,HouseName,Symbol,order_no,WeightUnit".
			" FROM " . $GLOBALS['engrave']->table('package').
			" left join ".$GLOBALS['engrave']->table('warehouse').
			" on pck_warehouseid = HouseId".
			" left join ".$GLOBALS['engrave']->table('currecy').
			" on CurrencyId = CId".
			" left join ".$GLOBALS['engrave']->table('order').
			" on pck_orderid = order_id".
			" where pck_isdelete=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 判断包裹单号是否存在
 * @param string $pck_expressnumber：包裹单号
 * @return boolean：若包裹单号存在，返回ture，反之返回false!
 */
function engrave_package_expressnumber_isexist($pck_expressnumber = '')
{
	$sql="select count(pck_expressnumber) from ".$GLOBALS['engrave']->table('package').
	" where pck_expressnumber='".$pck_expressnumber."'";
	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result!==false)
	{
		if($result>0)
		{
			return true;
		}else{
			return false;
		}
			
	}
}

/**
 * 根据包裹ID获取包裹附件
 * @param number $packageid：包裹ID
 */
function engrave_package_attachs($packageid = 0)
{
	$sql="select pa_id,pa_packageid,pa_attach from ".$GLOBALS['engrave']->table('package_attachs').
	" where pa_packageid = ".$packageid;
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 修改
 * @param string $pck_userremark：用户备注
 * @param number $id:ID
 * @return boolean:若修改成功，返回true，反之，返回false！
 */
function engrave_package_update($pck_userremark='',$id=0)
{
	$sql="update ". $GLOBALS['engrave']->table('package').
	" set pck_userremark='".$pck_userremark.
	"' where pck_id=".$id;
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 修改：带事务
 * @param string $pck_packagestatus：用户备注
 * @param number $orderid：订单ID
 * @param number $conn:数据库连接对象
 * @return boolean:若修改成功，返回true，反之，返回false！
 */
function engrave_packagestatus_update_trans($pck_packagestatus=0,$orderid=0,$conn)
{
	$sql="update ". $GLOBALS['engrave']->table('package').
	" set pck_packagestatus='".$pck_packagestatus.
	"' where pck_orderid=".$orderid;
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 删除
 * @param number $id:包裹ID
 * @return boolean:若删除成功，返回true，反之，返回false!
 */
function engrave_package_delete($id=0)
{
	$sql="update ". $GLOBALS['engrave']->table('package').
	" set pck_isdelete=1".
	" where pck_id=".$id;
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 修改
 * @param unknown $pck_userremark：用户备注
 * @param unknown $id:ID
 * @return boolean:若修改成功，返回true，反之，返回false！
 */
function engrave_package_name_update($pck_name,$id)
{
	$sql="update ". $GLOBALS['engrave']->table('package').
	" set pck_name='".$pck_name.
	"' where pck_id=".$id;
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 查询：购物凭证
 * @param number $psv_packageid：包裹ID
 */
function engrave_package_shoppingvouchers_bypckid($psv_packageid=0)
{
	$sql = "select psv_packageid,psv_vouchersvalue from ".
			$GLOBALS['engrave']->table('package_shoppingvouchers').
			" where psv_packageid=" . $psv_packageid;
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 查询：包裹内物品
 * @param number $pckg_packageid:包裹ID
 */
function engrave_packagegoods_bypckid($pckg_packageid=0)
{
	$sql = "select pckg_packageid,pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice from ".
			$GLOBALS['engrave']->table('packagegoods').
			" where pckg_packageid=" . $pckg_packageid;

	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 获取订单用户的Email
 * @param unknown $user_id
 */
function get_orederuser_email($user_id)
{
	$sql = "SELECT email " .
			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 and user_id = '.$user_id;
	return $GLOBALS['engrave_shop_db']->getOne($sql);
}
/**
 * 获取订单用户的用户名
 * @param unknown $user_id
 */
function get_orederuser_name($user_id)
{
	$sql = "SELECT user_name " .
			" FROM " . $GLOBALS['engrave_shop']->table('users') . ' where 1=1 and user_id = '.$user_id;
	return $GLOBALS['engrave_shop_db']->getOne($sql);
}
?>
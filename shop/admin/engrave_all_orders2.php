<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * 中文名称：订单管理
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_all_orders.php 2015年1月13日 17:06:32 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_all_orders.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_tracking_manage.php');
/*载入-订单管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_all_orders.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_package.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_admin_user.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user_coupon.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_all_orders_attachs.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_money_manage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_tracking_manage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_waybill_module.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_services_setting.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_value_services.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_receive_warehouse.php');
/*上传*/
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');
require_once (ROOT_PATH  . 'admin/commonhelper/zip.php');
require_once (ROOT_PATH  . 'admin/commonhelper/fileutil.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 订单管理列表:所有订单
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('order_manage');
    $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    $ur_totalweight = engrave_order_totalweight();
    $smarty->assign('shipping_list',   get_shipping_list());
    //获得该订单的仓库名称
    $smarty->assign('waybill_list', engrave_order_waybill_list());
    $smarty->assign('ur_totalweight', $ur_totalweight);
    //获得重量的单位 系统中默认的
    $smarty->assign('weight_unit', $_EFG['s_weightunit']);
    //获得系统中默认的货币名称
    $smarty->assign('default_name', engrave_default_currecyname());
    //获取订单管理列表---数据
    $order_list=engrave_order_list(0,-1,-1);
    $smarty->assign('order_list', $order_list['order_list']);
    $smarty->assign('filter',       $order_list['filter']);
    $smarty->assign('record_count', $order_list['record_count']);
    $smarty->assign('page_count',   $order_list['page_count']);
    
    $smarty->assign('full_page',    1);
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_all_orders.htm');
}
elseif ($_REQUEST['act'] == 'query')
{
    $order_list = engrave_order_list(0,-1,-1);
	$smarty->assign('order_list',   $order_list['order_list']);
    $smarty->assign('filter',       $order_list['filter']);
    $smarty->assign('record_count', $order_list['record_count']);
    $smarty->assign('page_count',   $order_list['page_count']);

    $sort_flag  = sort_flag($order_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_all_orders.htm'), '',
	array('filter' => $order_list['filter'], 'page_count' => $order_list['page_count']));
}
/*配货:zxp修改*/
elseif($_REQUEST['act'] == 'distribution')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';	
	
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
    if (!engrave_delivertstatus_trans("1", $OrderId,$conn))
	{
		transaction_failed($conn);	
		make_json_error('配货失败');	
		return;
	}
	if(!engrave_package_update_trans(2, $OrderId,$conn))
	{
		//配货中
		transaction_failed($conn);	
		make_json_error('配货失败');	
		return;
	}
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	$orderlog['ol_info']='订单商品已由 '.$admin_username.
	' 配货完成';
	$orderlog['ol_code']='ORDERDISTRIBUTION';
	$orderlog['ol_orderid'] = $OrderId;
	$orderlog['ol_ipaddress'] = real_ip();
	
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);	
		make_json_error('日志：配货失败');	
		return;
	}
	
	//事务成功
	transaction_success($conn);
	
	$url = 'engrave_all_orders.php?act=list&' . str_replace('act=distribution', '', $_SERVER['QUERY_STRING']);
	ecs_header("Location: $url\n");
	exit;
}
/*送至打包*/
elseif($_REQUEST['act'] == 'pack')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	if (!engrave_delivertstatus_trans("2", $OrderId,$conn))
	{
		//打包中
		transaction_failed($conn);	
		make_json_error('打包失败');	
		return;
	}
	if(!engrave_package_update_trans(3, $OrderId,$conn))
	{
		//打包中
		transaction_failed($conn);	
		make_json_error('打包失败');	
		return;
	}
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	$orderlog['ol_info']='订单商品已由 '.$admin_username.
	' 送至打包';
	$orderlog['ol_code']='ORDERPACK';
	$orderlog['ol_orderid'] = $OrderId;
	$orderlog['ol_ipaddress'] = real_ip();
	
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);
		make_json_error('日志：配货失败');
		return;
	}
	
	//事务成功
	transaction_success($conn);
	
	$url = 'engrave_all_orders.php?act=list&' . str_replace('act=pack', '', $_SERVER['QUERY_STRING']);
	ecs_header("Location: $url\n");
	exit;
}
elseif($_REQUEST['act'] == 'payment')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	if (engrave_delivertstatus_payment("5", $OrderId))
	{
		$url = 'engrave_all_orders.php?act=list&' . str_replace('act=payment', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
/*发货:zxp修改 页面跳转*/
elseif($_REQUEST['act'] == 'delivery')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	//创建运单编号
	$ordw_assistno = engrave_delivery_create_ordw_assistno($OrderId);
// 	foreach ($ordw_assistno as $key=>$val)
// 	{
// 		echo $key.'='.$val;
// 	}
	//获取订单管理列表---数据
	$order=engrave_order_byid($OrderId);
	$smarty->assign('order_list', $order);
	//获取订单运单管理列表---数据
	$orderwaybill_list=engrave_delivery_waybill_list($OrderId);
	$index=0;
	//将运单编号，赋值到运单包裹内物品-字段 运单编号 之上
	foreach ($orderwaybill_list as $key => $val)
	{
		if(empty($val['ordw_assistno']))
		{
			$orderwaybill_list[$key]['ordw_assistno'] = $ordw_assistno[$val['ordw_waybillid']];
		}
		$index++;
	}
	$smarty->assign('orderwaybill_list', $orderwaybill_list);
	//获取包裹物品管理列表
	$packagegoods_list=engrave_packagegoods_list($OrderId);
	$smarty->assign('packagegoods_list', $packagegoods_list);
	//获得该订单的相关线路
	$smarty->assign('shipping_list', engrave_order_shipping_list());
	//获得第三方物流
	$smarty->assign('collogistics_list', engrave_collogistics_list());
	$smarty->assign('form_action', 'order_delivery');
	$smarty->display('engrave_order_delivery.htm');
}
/*修改发货地址*/
elseif($_REQUEST['act'] == 'delivery_update')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	//创建运单编号
	$ordw_assistno = engrave_delivery_create_ordw_assistno($OrderId);
	// 	foreach ($ordw_assistno as $key=>$val)
		// 	{
		// 		echo $key.'='.$val;
		// 	}
	//获取订单管理列表---数据
	$order=engrave_order_byid($OrderId);
	$smarty->assign('order_list', $order);
	//获取订单运单管理列表---数据
	$orderwaybill_list=engrave_delivery_waybill_list($OrderId);
	$index=0;
	//将运单编号，赋值到运单包裹内物品-字段 运单编号 之上
	foreach ($orderwaybill_list as $key => $val)
	{
		if(empty($val['ordw_assistno']))
		{
			$orderwaybill_list[$key]['ordw_assistno'] = $ordw_assistno[$val['ordw_waybillid']];
		}
		$index++;
	}
	$smarty->assign('orderwaybill_list', $orderwaybill_list);
	//获取包裹物品管理列表
	$packagegoods_list=engrave_packagegoods_list($OrderId);
	$smarty->assign('packagegoods_list', $packagegoods_list);
	//获得该订单的相关线路
	$smarty->assign('shipping_list', engrave_order_shipping_list());
	//获得第三方物流
	$smarty->assign('collogistics_list', engrave_collogistics_list());
	$smarty->assign('form_action', 'order_delivery');
	$smarty->display('engrave_order_delivery_update.htm');
}
/**
 * 发货：修改数据库
 */
elseif($_REQUEST['act'] == 'waybill_delivery')
{
	//订单ID
	$OrderId = !empty($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : '0';
	
	$waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : '0';
	$shippingid = !empty($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : '0';
	//第三方物流ID
	$collogisid = !empty($_REQUEST['logisticsid']) ? intval($_REQUEST['logisticsid']) : '0';
	$waybillno = !empty($_REQUEST['waybillno']) ? trim($_REQUEST['waybillno']) : '';
	//运单编号
	$ordw_assistno = !empty($_REQUEST['ordw_assistno']) ? trim($_REQUEST['ordw_assistno']) : '';
	//验证第三方物流编号是否存在，验证运单编号是否存在
	if(engrave_exist_ordw_assistno($ordw_assistno))
	{
		make_json_error($GLOBALS['_LANG']['exist_ordw_assistno']);
	}
	if(engrave_exist_ordw_waybillno($waybillno))
	{
		make_json_error($GLOBALS['_LANG']['exist_waybillno']);
	}
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$waybill_sql="update ".$GLOBALS['engrave']->table('orderwaybill').
	"set ordw_shippingid = '".$shippingid.
	"',ordw_collogisid = '".$collogisid.
	"',ordw_waybillno = '".$waybillno.
	"',ordw_assistno = '".$ordw_assistno.
	"' where ordw_waybillid = '".$waybillid."'";
	$result = mysql_query($waybill_sql,$conn);
	if($result===false)
	{
		transaction_failed($conn);
		make_json_error($_LANG['deliver_goods_failed']);
		return;
	}
	else
	{
		//如果成功，则先提交事务，因为后面影响到一下操作
		transaction_success($conn);
		//重新打开事务
		$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
		mysql_query('START TRANSACTION',$conn);
	}
	
	if(engrave_isexist_orderwaybillno($OrderId))
	{
		if (!engrave_delivertstatus_trans("5", $OrderId,$conn))
		{
			transaction_failed($conn);
			make_json_error($_LANG['deliver_goods_failed']);
			return;
		}
		if(!engrave_package_update_normal_trans("5", $OrderId,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error($_LANG['deliver_goods_failed']);
			return;
		}
	}
	else
	{
		if (!engrave_delivertstatus_trans("51", $OrderId,$conn))
		{
			transaction_failed($conn);
			make_json_error($_LANG['deliver_goods_failed']);
			return;
		}
		if(!engrave_package_update_normal_trans("51", $OrderId,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error($_LANG['deliver_goods_failed']);
			return;
		}
	}
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	if(engrave_isexist_orderwaybillno($OrderId))
	{
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 发出，用户等待收货';
	}
	else
	{
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 部门发出，用户等待收货';
	}
	$orderlog['ol_code']='ORDERDELIVERY';
	$orderlog['ol_orderid'] = $OrderId;
	$orderlog['ol_ipaddress'] = real_ip();
	
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);
		make_json_error($_LANG['deliver_goods_failed']);
		return;
	}
	//先提交事务，后提示
	transaction_success($conn);
	make_json_result('',$_LANG['deliver_goods_success']);
}
/*修改订单*/
elseif($_REQUEST['act'] == 'waybill_delivery_update')
{	
	//订单ID
	$OrderId = !empty($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : '0';
	
	$waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : '0';
	$shippingid = !empty($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : '0';
	//第三方物流ID
	$collogisid = !empty($_REQUEST['logisticsid']) ? intval($_REQUEST['logisticsid']) : '0';
	$waybillno = !empty($_REQUEST['waybillno']) ? trim($_REQUEST['waybillno']) : '';
	//运单编号
	$ordw_assistno = !empty($_REQUEST['ordw_assistno']) ? trim($_REQUEST['ordw_assistno']) : '';
	//验证第三方物流编号是否存在，验证运单编号是否存在
	if(engrave_exist_ordw_assistno($ordw_assistno))
	{
		make_json_error($GLOBALS['_LANG']['exist_ordw_assistno']);
	}
	if(engrave_exist_ordw_waybillno($waybillno))
	{
		make_json_error($GLOBALS['_LANG']['exist_waybillno']);
	}
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$waybill_sql="update ".$GLOBALS['engrave']->table('orderwaybill').
	"set ordw_shippingid = '".$shippingid.
	"',ordw_collogisid = '".$collogisid.
	"',ordw_waybillno = '".$waybillno.
	"',ordw_assistno = '".$ordw_assistno.
	"' where ordw_waybillid = '".$waybillid."'";
	$result = mysql_query($waybill_sql,$conn);
	if($result===false)
	{
		transaction_failed($conn);
		make_json_error($_LANG['deliver_update_failed']);
		return;
	}
	else
	{
		//如果成功，则先提交事务，因为后面影响到一下操作
		transaction_success($conn);
		//重新打开事务
		$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
		mysql_query('START TRANSACTION',$conn);
	}	
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	$orderlog['ol_info']='订单商品发货地址已由 '.$admin_username.' 修改，用户等待收货';
	$orderlog['ol_code']='ORDERDELIVERY';
	$orderlog['ol_orderid'] = $OrderId;
	$orderlog['ol_ipaddress'] = real_ip();
	
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);
		make_json_error($_LANG['deliver_update_failed']);
		return;
	}
	//先提交事务，后提示
	transaction_success($conn);
	make_json_result('',$_LANG['deliver_update_success']);
}
elseif($_REQUEST['act'] == 'order_delivery')
{
	$OrderId = !empty($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : '0';
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	if(engrave_isexist_orderwaybillno($OrderId))
	{
		if (!engrave_delivertstatus_trans("5", $OrderId,$conn))
		{
			transaction_failed($conn);
			make_json_error('发货失败');
			return;
		}
		if(!engrave_package_update_trans(5, $OrderId,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('发货失败');
			return;
		}
	}
	else 
	{
		if (!engrave_delivertstatus_trans("51", $OrderId,$conn))
		{
			transaction_failed($conn);
			make_json_error('发货失败');
			return;
		}
		if(!engrave_package_update_trans("51", $OrderId,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('发货失败');
			return;
		}
	}
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	if(engrave_isexist_orderwaybillno($OrderId))
	{
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 发出，用户等待收货';
	}
	else
	{
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 部门发出，用户等待收货';
	}
	$orderlog['ol_code']='ORDERDELIVERY';
	$orderlog['ol_orderid'] = $OrderId;
	$orderlog['ol_ipaddress'] = real_ip();
	
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);
		make_json_error('日志：发货失败');
		return;
	}
	//事务成功
	transaction_success($conn);
}
/****************************************************************
 * UI：称重打包
 ***************************************************************/
elseif($_REQUEST['act'] == 'weight')
{
	require_once(ROOT_PATH . 'admin/includes/engrave/lib_user_rank.php');
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$OrderPaymentpath = !empty($_REQUEST['order_paymentpath']) ? intval($_REQUEST['order_paymentpath']) : '0';
	$ur_tip = empty($_LANG['engrave_packageweight_tip'])?'':$_LANG['engrave_packageweight_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//获取订单管理列表---数据
	$order=engrave_order_byid($OrderId);
	$smarty->assign('order_list', $order);
	//获取日元
	$currency_jp = engrave_currecy(1);
	//用户信息
	$user = engrave_user_byid($order['order_userid']);
	$user['totalmoney'] = sprintf("%.2f",floatval($user['user_money'])+
	floatval($user['user_jpymoney']/$currency_jp['ExchageRate'])+
	floatval($user['user_subsidiarymoney']));
	
	$smarty->assign('user', $user);
	//获得该订单的相关线路
	$smarty->assign('shipping_list', engrave_order_shipping_list());
	//获得货币名称
	$currency_name = engrave_currency_name();
	$smarty->assign('currency_name',$currency_name);
	//消费金额和积分兑换比例
	$rate_points = engrave_rate_points();
	$smarty->assign('rate_points',$rate_points);
	//获取仓库增值服务
	$services_setting_list = engrave_services_setting_byorderid($OrderId);
	$smarty->assign('services_setting_list', $services_setting_list);
	//运单的折扣(根据会员ID获取折扣)
	//获取用户积分
	$rank_point = !empty($order['rank_point']) ? intval($order['rank_point']) : 0;
	$user_rank = engrave_user_rank_bypoint($rank_point);
	$waybill_discount = !empty($user_rank['discount']) ? (intval($user_rank['discount'])/10) : 0;
	$smarty->assign('waybill_discount',$waybill_discount);
	$smarty->assign('form_action', 'order_insert');
	$smarty->display('engrave_order_packageweight.htm');
}
/****************************************************************
 * DAL:称重打包
 ***************************************************************/
elseif($_REQUEST['act'] == 'order_insert')
{
	$link[0]['text'] = $GLOBALS['_LANG']['back_order_list'];
	$link[0]['href'] = 'engrave_all_orders.php?act=list';
	
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$order_id = !empty($_POST['orderid']) ? intval($_POST['orderid']) : '0';
	$paymentpath = !empty($_POST['paymentpath']) ? intval($_POST['paymentpath']) : '0';
	$order_deductweight = !empty($_POST['weighttb']) ? doubleval($_POST['weighttb']) : '0.00';
	$waybillnumber = !empty($_POST['waybill_number']) ? intval($_POST['waybill_number']) : '0';
	$order_sizelength = 0.00;
	$order_sizewidth = 0.00;
	$order_sizeheight = 0.00;
	for ($number=0;$number<$waybillnumber;$number++)
	{
		$waybillid = !empty($_POST['waybillid_'.($number+1)]) ? intval($_POST['waybillid_'.($number+1)]) : '0';
		$orderwaybill['deductweight'] = !empty($_POST['delivery_'.($number+1)]) ? doubleval($_POST['delivery_'.($number+1)]) : '0.00';
		$orderwaybill['sizelength'] = !empty($_POST['length_'.($number+1)]) ? doubleval($_POST['length_'.($number+1)]) : '0.00';
		$orderwaybill['sizewidth'] = !empty($_POST['width_'.($number+1)]) ? doubleval($_POST['width_'.($number+1)]) : '0.00';
		$orderwaybill['sizeheight'] = !empty($_POST['height_'.($number+1)]) ? doubleval($_POST['height_'.($number+1)]) : '0.00';
		$order_sizelength = doubleval($order_sizelength) + doubleval($orderwaybill['sizelength']);
		$order_sizewidth = doubleval($order_sizewidth) + doubleval($orderwaybill['sizewidth']);
		$order_sizeheight = doubleval($order_sizeheight) + doubleval($orderwaybill['sizeheight']);
		//运单
		if(!engrave_order_waybill_update($orderwaybill,$waybillid,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：称重打包失败');
			return;
		}
	}
	
	//保险费用 运费 仓库操作费：仓储费：增值服务费：关税：其他费用：
	$order_insurace = !empty($_POST['insurancetb']) ? doubleval($_POST['insurancetb']) : '0.00';
	$order_waybillcost = !empty($_POST['waybillcost']) ? doubleval($_POST['waybillcost']) : '0.00';
	$order_operatorcost = !empty($_POST['operaterPricetb']) ? doubleval($_POST['operaterPricetb']) : '0.00';
	$order_othercost = !empty($_POST['othercost']) ? doubleval($_POST['othercost']) : '0.00';
	$order_warehousecost = !empty($_POST['warehousecost']) ? doubleval($_POST['warehousecost']) : '0.00';
	$order_valueservicecost = !empty($_POST['valueservicecost']) ? doubleval($_POST['valueservicecost']) : '0.00';
	$order_tariffcost = !empty($_POST['tariffcost']) ? doubleval($_POST['tariffcost']) : '0.00';

	//货币单位、总重、重量单位
	$currency_name = isset($_POST['insurace_name']) ? trim($_POST['insurace_name']) : '';
	$totalweight = isset($_POST['totalweight']) ? floatval($_POST['totalweight']) : '0.00';
	$weightUnit = isset($_POST['weightUnit']) ? trim($_POST['weightUnit']) : '';

	//TODO:替换总费用
	$totalmoneny=$order_insurace+$order_waybillcost+
	$order_operatorcost+$order_othercost+$order_warehousecost+
	$order_valueservicecost+$order_tariffcost;
	
// 	echo $order_othercost;
// 	return;
	if($paymentpath == 2)
	{
		//本次消费的积分
		$pay_points = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;
		//消费完后剩余金额
		//$totalmoneny = isset($_REQUEST['totalmoneny']) ? doubleval($_REQUEST['totalmoneny']) : 0.00;
		
		$usermoneny = isset($_REQUEST['usermoneny']) ? doubleval($_REQUEST['usermoneny']) : 0.00;
		//--------------------------------------------------优惠券-----------------------------------------------
		//获取优惠券信息：优惠券面值，优惠券最小消费金额
		$order_coupon = isset($_POST['order_coupon']) ? trim($_POST['order_coupon']) : '';
		if($order_coupon != '')
		{
			$order_coupon_array = engrave_user_coupon_bysn($order_coupon);

			$MinAmount = !empty($order_coupon_array['MinAmount']) ? floatval($order_coupon_array['MinAmount']) : 0;
			$CouponValue = !empty($order_coupon_array['CouponValue']) ? floatval($order_coupon_array['CouponValue']) : 0;
			
			//判断消费是否达到要求;达到要求，总费用减少（优惠券已经被使用，所以不需要修改状态）
			if($MinAmount < $totalmoneny)
			{
				//总费用=总费用-优惠券
				$totalmoneny = $totalmoneny - $CouponValue;
			}
			/*若优惠券不可以使用，则，修改优惠券状态为未使用*/
			else{
				$result = engrave_user_coupon_updatenotused($order_coupon);
				if($result === false)
				{
					//配货中
					transaction_failed($conn);
					make_json_error('日志：称重打包失败');
					return;
				}
			}
		}
		//--------------------------------------------------优惠券-----------------------------------------------
		//获取用户ID
		$order = engrave_order_byid($order_id);
		$user_id = $order['user_id'];
		//消费金额和 货币兑换积分比例
		$s_integralprice = $GLOBALS['_EFG']['s_integralprice'];
		//总费用=总费用-积分
		$totalmoneny = $totalmoneny - $pay_points * $s_integralprice;
		//该用户拥有的积分
		$user = engrave_user_byid($user_id);
		//日元账户汇率
		$currecy = engrave_currecy(1);
		$exchageRate = !empty($currecy['ExchageRate']) ? floatval($currecy['ExchageRate']) : 0;
		$order_paymenttype = !empty($order['order_paymenttype']) ? intval($order['order_paymenttype']) : 1;
		//称重后直接支付
		
		$result = engrave_users_pay_money($totalmoneny,$user['user_money'],$user['user_jpymoney'],
				$user['user_subsidiarymoney'],$exchageRate,$pay_points,$user_id,$order_paymenttype,$conn);
		
		
		if($result===false)  //这行删除后可以进行下一步
		{ //这行删除后可以进行下一
			//配货中
			transaction_failed($conn); //这行删除后可以进行下一
			make_json_error('日志：称重打包失败'); //这行删除后可以进行下一
	 	return; //这行删除后可以进行下一
		} //这行删除后可以进行下一步 
		
//开始根据用户余额是否足够进行判断执行
//此处缺少更新账户余额与增加到日志的语句

//上面是获得了账户的余额信息了吗

//下面代码取自用户页面支付的部分  member——order。php  
//1.账户余额足够执行  扣费先  下面代码不一定能用  直接扒来的。。。

/*
$users = engrave_users($user_id);
	//获取页面配置信息/是否使用优惠券、优惠券面值、需要支付的费用、账户余额、日元账户余额、副账户余额、日志信息
	$isused_coupon = isset($_REQUEST['isused_coupon']) ? intval($_REQUEST['isused_coupon']) : 0;
	$coupon_value = isset($_REQUEST['coupon_value']) ? intval($_REQUEST['coupon_value']) : 0;
	$actual_paymoney = isset($_REQUEST['actual_paymoney']) ? floatval($_REQUEST['actual_paymoney']) : 0;

	$user_money = isset($_REQUEST['user_money']) ? floatval($_REQUEST['user_money']) : 0;
	$user_jpymoney = isset($_REQUEST['user_jpymoney']) ? floatval($_REQUEST['user_jpymoney']) : 0;
	$user_subsidiarymoney = isset($_REQUEST['user_subsidiarymoney']) ? floatval($_REQUEST['user_subsidiarymoney']) : 0;

	//汇率
	$exchageRate = isset($_REQUEST['exchageRate']) ? floatval($_REQUEST['exchageRate']) : 0;
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	//事务开始
	$account_log['user_id'] = $user_id;
	$account_log['frozen_money'] = 0;
	$account_log['rank_points'] = 0;
	$account_log['pay_points'] = 0;
	//修改订单支付状态、待发货状态
	if(!engrave_order_updatepayment($order_id,$conn))
	{
		order_cancel_failed($conn);
		sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
	}
	//修改优惠券状态
	$log_message='';
	if($isused_coupon==1)
	{
		$sn = isset($_REQUEST['coupon']) ? trim($_REQUEST['coupon']) : '';
		if(!engrave_coupon_used($user_id,$sn,$conn))
		{
			order_cancel_failed($conn);
			sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
		}
		$log_message .= '优惠券序号：'.$sn.';优惠券面值：'.$coupon_value.';';

		//添加消费记录（优惠券）
		$account_log['user_money'] = -$coupon_value;
		$account_log['member_remark'] = '订单：'.$order['order_no'].' 支付。'.$log_message;
		if(!engrave_account_log_transinsert($account_log,13,$conn))
		{
			order_cancel_failed($conn);
			sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
		}
	}
	//修改积分状态
	$point_log_message='';
	$point = isset($_REQUEST['point']) ? intval($_REQUEST['point']) : 0;
	if($point!=0)
	{
		$point_log_message = '使用 '.$sn.' 积分;';

		//添加消费记录（积分）
		$account_log['user_money'] = 0;
		$account_log['pay_points'] = -$point;
		$account_log['member_remark'] = '使用$point积分支付订单：'.$order['order_no'].' 。'.$point_log_message;

		if(!engrave_account_log_transinsert($account_log,14,$conn))
		{
			order_cancel_failed($conn);
			sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
		}
	}
	//修改账户余额
	if(!engrave_users_pay_money($actual_paymoney,$user_money,$user_jpymoney,$user_subsidiarymoney,$exchageRate,$point,$user_id,

$order_paymenttype,$conn))
	{
		order_cancel_failed($conn);
		sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
	}
	
	//添加消费记录(账户余额)
	$account_log['user_money'] = -$actual_paymoney;
	$account_log['member_remark'] = '订单：'.$order['order_no'].' 支付。';
	if(!engrave_account_log_transinsert($account_log,10,$conn))
	{
		order_cancel_failed($conn);
		sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
	}
	//获取默认货币
	$default_currency = engrave_default_currency();    */
	/**
	 * 添加订单日志
	 *//*
	$user_name=$users["user_name"];
	$orderlog['ol_userid']=$user_id;
	$orderlog['ol_username']=$user_name;
	$orderlog['ol_info']='用户 '.$user_name.' 支付完成。支付金额：'.$actual_paymoney.
	$default_currency['Name'].'；优惠券面值：'.$coupon_value.
	'；积分：'.$point;
	$orderlog['ol_code']='CUSTOMERORDERPAY';
	$orderlog['ol_orderid'] = $order_id;
	$orderlog['ol_ipaddress'] = real_ip();
	if(!engrave_orderlog_insert($orderlog,$conn))
	{
		order_cancel_failed($conn);
		sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
	}
	
	order_cancel_success($conn);

	sys_msg($GLOBALS['_LANG']['order_payment_success'], 0, $link);
}//到这里为止是从其他页面复制过来的 */
		
		
	
	
	
	//如果账户余额足够扣得情况下继续执行对订单信息的更改		
		
		//改变该订单的状态并赋值
/*		$order_delivery = '4';//状态变成待发货
		$order_paymentstatus = '1';
		$order_sql="update ".$GLOBALS['engrave']->table('order').
	         "set order_deductweight = '".$order_deductweight.
	         "',order_sizelength = '".$order_sizelength.
	         "',order_sizewidth = '".$order_sizewidth.
	         "',order_sizeheight = '".$order_sizeheight.
	         "',order_insurace = '".$order_insurace.
	         "',order_waybillcost = '".$order_waybillcost.
	         "',order_operatorcost = '".$order_operatorcost.
	         "',order_othercost = '".$order_othercost.
	         "',order_warehousecost = '".$order_warehousecost.
	         "',order_valueservicecost = '".$order_valueservicecost.
	         "',order_tariffcost = '".$order_tariffcost.
	         "',order_paymentstatus = '".$order_paymentstatus.
	         "',order_isdelivery = '".$order_delivery.
	         "' where order_id = '".$order_id."'";
		
		$result = mysql_query($order_sql,$conn);
		if($result===false)
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：称重打包失败');
			return;
		}






		/*日志*/
		$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
		$admin = engrave_admin_user_byid($admin_id);
		$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
		//根据订单ID获取订单账号
		$orderlog['ol_userid'] =  $admin_id;
		$orderlog['ol_username'] = $admin_username;
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 称重打包，总重量：'.number_format($totalweight, 2, '.', '').$weightUnit.'，运费： '.
		$order_waybillcost.$currency_name.',实际需支付总费用： '.number_format($totalmoneny, 2, '.', '').$currency_name.
		" （称重后自动结算，已支付成功！）";
		$orderlog['ol_code']='ORDERWEIGHTING';
		$orderlog['ol_orderid'] = $order_id;
		$orderlog['ol_ipaddress'] = real_ip();
		

//接下来应该将支付的金额等额的积分返还到积分账户和等级积分账户
//字段位置  users的pay points 和rank points  
//更新的值应该等于上面扣款的值，非totalmoney 是这个值乘以exchangerate兑换比例 也就是账户余额中减少的数值


		//添加消费记录（积分）刚刚更改的
		$account_log['user_money'] = 0;
		$account_log['pay_points'] = 更新的值;//更新的值应该等于上面扣款的值，非totalmoney 是这个值乘以exchangerate兑换比例 也就是账户余额中减少的
		$account_log['member_remark'] = '积分支付订单：'.$order['order_no'].'获得XXXxx积分 。'.$point_log_message;

		if(!engrave_account_log_transinsert($account_log,14,$conn))
		{
			order_cancel_failed($conn);
			sys_msg($GLOBALS['_LANG']['order_payment_failed'], 0, $link);
		}
	}





//如果余额不足 则执行下面的








/*		if(!engrave_orderlog_insert($orderlog,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：称重打包失败');
			return;
		}
	}
	else
	{
		//改变该订单的状态并赋值
		
		$order_delivery = '2';
		$order_paymentstatus = '0';
		$order_sql="update ".$GLOBALS['engrave']->table('order').
		"set order_deductweight = '".$order_deductweight.
		"',order_sizelength = '".$order_sizelength.
		"',order_sizewidth = '".$order_sizewidth.
		"',order_sizeheight = '".$order_sizeheight.
		"',order_insurace = '".$order_insurace.
		"',order_waybillcost = '".$order_waybillcost.
		"',order_othercost = '".$order_othercost.
		"',order_warehousecost = '".$order_warehousecost.
		"',order_valueservicecost = '".$order_valueservicecost.
		"',order_tariffcost = '".$order_tariffcost.
		"',order_paymentstatus = '".$order_paymentstatus.
		"',order_isdelivery = '".$order_delivery.
		"' where order_id = '".$order_id."'";
		
		
		$order_sql="update ".$GLOBALS['ecs']->table('users').
		"set user_money = '".$order_deductweight.
		"',order_sizelength = '".$order_sizelength.
		"',order_sizewidth = '".$order_sizewidth.
		"',order_sizeheight = '".$order_sizeheight.
		"',order_insurace = '".$order_insurace.
		"',order_waybillcost = '".$order_waybillcost.
		"',order_othercost = '".$order_othercost.
		$result = mysql_query($order_sql,$conn);
		if($result===false)
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：称重打包失败');
			return;
		}
		
		/*日志*/
		$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
		$admin = engrave_admin_user_byid($admin_id);
		$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
		//根据订单ID获取订单账号
		$orderlog['ol_userid'] =  $admin_id;
		$orderlog['ol_username'] = $admin_username;
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 称重打包，总重量：'.number_format($totalweight, 2, '.', '').$weightUnit.'，运费： '.
		$order_waybillcost.$currency_name.',实际需支付总费用： '.number_format($totalmoneny, 2, '.', '').$currency_name.
		' （手动确认支付，待客户支付！）';
		$orderlog['ol_code']='ORDERWEIGHTING';
		$orderlog['ol_orderid'] = $order_id;
		$orderlog['ol_ipaddress'] = real_ip();
		
		if(!engrave_orderlog_insert($orderlog,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：称重打包失败');
			return;
		}
	}
	//修改包裹
	if(!engrave_package_update_trans(4, $order_id,$conn))
	{
		//称重--等待发出
		transaction_failed($conn);
		make_json_error('打包失败');
		return;
	}
	//事务成功
	transaction_success($conn);
	
	sys_msg($GLOBALS['_LANG']['save_success'], 0, $link);
}
//获得当前人所拥有的金额
elseif($_REQUEST['act'] == 'getcurrentbalance')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$current_balance = engrave_current_balance($OrderId);
}
//获得对应订单的包裹的信息
elseif($_REQUEST['act'] == 'getpackageinformation')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$package_goods_list = engrave_package_goods_list($OrderId);
	echo json_encode($package_goods_list);
}
//获得相应订单中的物品
elseif($_REQUEST['act'] == 'getpackagegoods')
{
	$PckId = !empty($_REQUEST['pck_id']) ? intval($_REQUEST['pck_id']) : '0';
	$goods_list = engrave_goods_list($PckId);
	echo json_encode($goods_list);
}
//获得增值服务
elseif($_REQUEST['act'] == 'getpackagevalueservice')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$value_service_list = engrave_value_service_list($OrderId);
	echo json_encode($value_service_list);
}
//获得订单中的运单信息
elseif($_REQUEST['act'] == 'getpackageorderwaybill')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$waybill_list = engrave_waybill_list($OrderId);
	echo json_encode($waybill_list);
}
//获得订单中物品的信息
elseif($_REQUEST['act'] == 'getordergoods')
{
	$waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : '0';
	$order_goods_list = engrave_order_goods_list($waybillid);
	echo json_encode($order_goods_list);
}
//获得收货人的详细信息
elseif($_REQUEST['act'] == 'getdeliveryinfo')
{
	$ordw_consigid = !empty($_REQUEST['ordw_consigid']) ? intval($_REQUEST['ordw_consigid']) : '0';
	$delivery_list = engrave_delivery_list($ordw_consigid);
	echo json_encode($delivery_list);
}
//获得该线路对应的货币和重量体积单位
elseif($_REQUEST['act'] == 'getcurrencyinfo')
{
	$shippingid = !empty($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : '0';
	$currencyinfo_list = engrave_currencyinfo_list($shippingid);
	echo json_encode($currencyinfo_list);
}
//获取增值服务费用
elseif($_REQUEST['act']=='getserviceprice')
{
	$service_id = !empty($_REQUEST['service_id']) ? intval($_REQUEST['service_id']) : '0';
	$service_setting = engrave_service_setting_byserviceid($service_id);
	echo json_encode($service_setting);
}
//获得选择线路中的 价格信息
elseif($_REQUEST['act'] == 'getshippingorderprice')
{
	$shipping_id = !empty($_REQUEST['ShippingId']) ? intval($_REQUEST['ShippingId']) : '0';
	$shippingorder_list = engrave_shipping_order_list($shipping_id);
	echo json_encode($shippingorder_list);
}
/*------------------------------------------------------ */
//-- 包裹管理列表:未配送
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'untreated')
{
    /* 检查权限 */
    admin_priv('order_manage');
    $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    //$ur_totalweight = engrave_order_totalweight();
    //$smarty->assign('ur_totalweight', $ur_totalweight);
    //获得重量的单位 系统中默认的
    $smarty->assign('weight_unit', $_EFG['s_weightunit']);
    //获得系统中默认的货币名称
    $smarty->assign('default_name', engrave_default_currecyname());
    //获取订单管理列表---数据
    $order_list=engrave_order_list(0,0,-1);
    $smarty->assign('order_list', $order_list['order_list']);
    $smarty->assign('filter',       $order_list['filter']);
    $smarty->assign('record_count', $order_list['record_count']);
    $smarty->assign('page_count',   $order_list['page_count']);
    
    $smarty->assign('full_page',    1);
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:已配送
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'pick')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(0,1,-1);
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:待付款
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'payment_ready')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(0,-1,0);
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:待发货
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'ship')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(0,4,-1);
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:已发货
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'shipped')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(0,5,1);
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:已完成
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'completed')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(0,6,1);
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
/*------------------------------------------------------ */
//-- 包裹管理列表:已删除
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'deleted')
{
	/* 检查权限 */
	admin_priv('order_manage');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0201_all_orders'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_all_order_tip'])?'':$_LANG['engrave_all_order_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	//$ur_totalweight = engrave_order_totalweight();
	//$smarty->assign('ur_totalweight', $ur_totalweight);
	//获得重量的单位 系统中默认的
	$smarty->assign('weight_unit', $_EFG['s_weightunit']);
	//获得系统中默认的货币名称
	$smarty->assign('default_name', engrave_default_currecyname());
	//获取订单管理列表---数据
	$order_list=engrave_order_list(1,-1,-1);//7
	$smarty->assign('order_list', $order_list['order_list']);
	$smarty->assign('filter',       $order_list['filter']);
	$smarty->assign('record_count', $order_list['record_count']);
	$smarty->assign('page_count',   $order_list['page_count']);

	$smarty->assign('full_page',    1);
	/* 显示商品列表页面 */
	assign_query_info();

	$smarty->display('engrave_all_orders.htm');
}
elseif($_REQUEST['act'] == 'track')
{
	/* 检查权限 */
	//获取ID，并根据ID获取对象 赋值给smarty
	$orderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$order_no=engrave_track_orderno($orderId);
	$smarty->assign('orderno', $order_no);
	$smarty->assign('orderid', $orderId);
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0214_waybill_tracking'];
	$smarty->assign('ur_here', $ur_here);
	$code_list = engrave_code_list();
	$smarty->assign('code_list', $code_list);
	$smarty->assign('action_link',  array('text' => $_LANG['0209_tracking_manage'], 'href'=>'engrave_tracking_manage.php?act=list'));
	$smarty->assign('form_action', 'inserttrack');
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_tracking_info.htm');
}
elseif($_REQUEST['act'] == 'inserttrack')
{
	$act=$_REQUEST['act'];
	//获取数据
	$track_info['tr_orderid'] = !empty($_POST['hidOrderId']) ? intval($_POST['hidOrderId']) : '0';
	$track_info['tr_expressnumber'] = !empty($_POST['hidWaybillNo']) ? trim($_POST['hidWaybillNo']) : '';
	$track_info['tr_message'] = !empty($_POST['Message']) ? trim($_POST['Message']) : '';
	$track_info['tr_statuscode'] = !empty($_POST['StatusCode']) ? intval($_POST['StatusCode']) : '0';
	$track_info['tr_intime'] = gmtime();
	$track_info['tr_operatorid'] = $_SESSION[admin_id];
	$track_info['tr_isdelete'] = '0';
	
	if($act=='insert')
	{
		engrave_tracking_insert($track_info);
		//页面跳转
		$link[0]['text'] = $_LANG['back_tracking_list'];
		$link[0]['href'] = 'engrave_tracking_manage.php?act=list';
	}
}
/******************************************************************
 * 打印配货单
 ******************************************************************/
elseif($_REQUEST['act'] == 'print_picking')
{
	$OrderId = !empty($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '0';
	$orderisdelivery = !empty($_REQUEST['order_isdelivery']) ? intval($_REQUEST['order_isdelivery']) : '0';
	
	if($orderisdelivery == '0')
	{
		$charset = 'gbk';
		$charset = strtolower(str_replace('-', '', EC_CHARSET));
		$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
		mysql_query('START TRANSACTION',$conn);
		//修改订单货运状态
		if (!engrave_delivertstatus_trans("1", $OrderId,$conn))
		{
			transaction_failed($conn);
			make_json_error('配货失败');
			return;
		}
		//修改包裹货运状态
		if(!engrave_package_update_trans(2, $OrderId,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('配货失败');
			return;
		}
		/*日志*/
		$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
		$admin = engrave_admin_user_byid($admin_id);
		$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
		//根据订单ID获取订单账号
		$orderlog['ol_userid'] =  $admin_id;
		$orderlog['ol_username'] = $admin_username;
		$orderlog['ol_info']='订单商品已由 '.$admin_username.
		' 配货完成';
		$orderlog['ol_code']='ORDERDISTRIBUTION';
		$orderlog['ol_orderid'] = $OrderId;
		$orderlog['ol_ipaddress'] = real_ip();
		
		if(!engrave_orderlog_insert($orderlog,$conn))
		{
			//配货中
			transaction_failed($conn);
			make_json_error('日志：配货失败');
			return;
		}	
		//事务成功
		transaction_success($conn);
	}
	//获取订单管理列表---数据
	//解析$OrderId,将$OrderId分解
	$order_ids = explode(",",$OrderId);

	$order_list;
	if(count($order_ids)<=1)
	{
		//获取订单
		$order = engrave_order_byid($OrderId);
		//获取运单
		$orderwaybill_list=engrave_waybill_list($OrderId);
		//包裹内物品
		$package_goods_list = engrave_package_goods_list($OrderId);
		//增值服务
		$value_service_list = engrave_value_service_list($OrderId);

		//修改打印状态
		engrave_order_printstatus_trans("1",$OrderId);
		$order['orderwaybill_list']=$orderwaybill_list;
		$order['package_goods_list']=$package_goods_list;
		$order['value_service_list']=$value_service_list;
		$order_list['0'] = $order;
	}
	else
	{
		foreach ($order_ids as $key=>$val)
		{
			if(empty($val))
			{
				continue;
			}
			//获取订单
			$order = engrave_order_byid($val);
			//获取运单
			$orderwaybill_list=engrave_waybill_list($val);
			//包裹内物品
			$package_goods_list = engrave_package_goods_list($OrderId);
			//增值服务
			$value_service_list = engrave_value_service_list($OrderId);
			//修改打印状态
			engrave_order_printstatus_trans("1",$val);
			
			$order['orderwaybill_list']=$orderwaybill_list;
			$order['package_goods_list']=$package_goods_list;
			$order['value_service_list']=$value_service_list;
			$order_list[$key] = $order;
		}
	}

	//$order_list=engrave_orderlist_in($OrderId);
	$smarty->assign('order_list', $order_list);
	//获取订单运单管理列表---数据
	//获得打印时间
	$smarty->assign('print_time',local_date('Y-m-d'));
	//获得该订单所对应的仓库名称
	$order_warehousename = engrave_order_warehousename($OrderId);
	$smarty->assign('warehousename',$order_warehousename);

	$smarty->display('engrave_print_picking.htm');
}
elseif($_REQUEST['act'] == 'print_orders')
{
	//获取会员信息
	$order_id = !empty($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	if($order_id == '')
	{
		return;
	}

	$order = engrave_orderwaybill_inid($order_id);
	$smarty->assign('date_now', local_date('Y-m-d'));
	$smarty->assign('time_now', local_date('H:i'));
	$order_ids = explode(',', $order_id);
	//根据订单获取订单信息
	foreach ($order as $key => $val)
	{
		//根据ordw_waybillid获取包裹内物品信息
		$order[$key]['order_goods'] = engrave_order_goods_list($val['ordw_waybillid']);
	}
	$smarty->assign('order_list', $order);
	//根据线路ID，获取模板ID
	$gemplate = engrave_template_byorderid($order_ids[0]);
	$smarty->display($gemplate['temp_filename']);
}
/****************************************************************
 * 查看
 ***************************************************************/
elseif($_REQUEST['act'] == 'order_view')
{
	$OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	//获取订单管理列表---数据
	$view=engrave_order_byid($OrderId);
	$smarty->assign('view_list', $view);
	//总费用
	$order_totalprice = $view['order_warehousecost']+ $view['order_tariffcost']+
	$view['order_valueservicecost']+ $view['order_insurace']+
	$view['order_othercost']+ $view['order_insurace']+
	$view['order_waybillcost'];
	$smarty->assign('order_totalprice', $order_totalprice);
	
	//获取订单日志
	$orderlog_list = engrave_orderlog_list($OrderId);
	$smarty->assign('orderlog_list',$orderlog_list);
	//根据订单获取附件
	$order_attachs_list = engrave_order_attachs_list($OrderId);
	$smarty->assign('order_attachs_list', $order_attachs_list);
	//获得货币名称
	$currency_name = engrave_currency_name();
	$smarty->assign('currency_name',$currency_name);
	$smarty->display('engrave_order_view.htm');
}
/****************************************************************
 * 上传附件
 ***************************************************************/
elseif($_REQUEST['act'] == 'upload')
{
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$link[0]['text'] = $GLOBALS['_LANG']['back_order_list'];
	$link[0]['href'] = 'engrave_all_orders.php?act=list';
	
	$order_id = isset($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : 0;
	$upload=new FileUpload();
	
	$attachs['oa_orderid'] = $order_id;
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$attachs['oa_attach'] = $filename;
			if(!engrave_order_attachs_insert($attachs,$conn))
			{
				transaction_failed($conn);
				sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
			}
		}
		else {
			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
		}
	}
	transaction_success($conn);
	sys_msg($GLOBALS['_LANG']['save_success'], 0, $link);
}
/****************************************************************
 * 批量 发货
 ***************************************************************/
elseif($_REQUEST['act'] == 'batch_delivery') 
{
	//订单ID
	$order_id = !empty($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	
	if($order_id=='')
	{
		make_json_error($GLOBALS['_LANG']['select_order']);
		return;
	}
	//根据$orderids中的逗号，分成数组
	$order_ids = explode(",",$order_id);
	//获取所选中的所有订单
	foreach ($order_ids as $key=>$val)
	{
		//根据订单ID，获取订单信息（线路ID)
		$order_array = engrave_order_byid($val);
		$order_isdelivery = !empty($order_array['order_isdelivery']) ? intval($order_array['order_isdelivery']) : 0;
		if($order_isdelivery != 4)
		{
			continue;
		}
		$array_ordw_assistno = engrave_delivery_create_ordw_assistno($val);
		//根据订单ID，获取所有订单内的物品
		foreach ($array_ordw_assistno as $assistno_key => $assistno_val)
		{
			$shippingid = !empty($order_array['order_shippingid']) ? intval($order_array['order_shippingid']) : '0';
			//批量发货，没有第三方物流ID
			
			$charset = 'gbk';
			$charset = strtolower(str_replace('-', '', EC_CHARSET));
			$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
			mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
			mysql_query('START TRANSACTION',$conn);
			
			$waybill_sql="update ".$GLOBALS['engrave']->table('orderwaybill').
			" set ordw_shippingid = '".$shippingid.
			"', ordw_assistno = '".$assistno_val.
			"' where ordw_waybillid = '".$assistno_key."'";
			//make_json_error($waybill_sql);
			$result = mysql_query($waybill_sql,$conn);
			if($result===false)
			{
				transaction_failed($conn);
				make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
			}else{
				//如果成功，则先提交事务，因为后面影响到一下操作
				transaction_success($conn);
				//重新打开事务
				$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
				mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
				mysql_query('START TRANSACTION',$conn);
			}
			
			if(engrave_isexist_orderwaybillno($val))
			{
				if (!engrave_delivertstatus_trans("5", $val,$conn))
				{
					transaction_failed($conn);
					make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
				}
				if(!engrave_package_update_normal_trans(5, $val,$conn))
				{
					//配货中
					transaction_failed($conn);
					make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
				}
			}
			else
			{
				if (!engrave_delivertstatus_trans("51", $val,$conn))
				{
					transaction_failed($conn);
					make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
				}
				if(!engrave_package_update_normal_trans("51", $val,$conn))
				{
					//配货中
					transaction_failed($conn);
					make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
				}
			}
			/*日志*/
			$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
			$admin = engrave_admin_user_byid($admin_id);
			$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
			//根据订单ID获取订单账号
			$orderlog['ol_userid'] =  $admin_id;
			$orderlog['ol_username'] = $admin_username;
			if(engrave_isexist_orderwaybillno($val))
			{
				$orderlog['ol_info']='订单商品已由 '.$admin_username.
				' 发出，用户等待收货';
			}
			else
			{
				$orderlog['ol_info']='订单商品已由 '.$admin_username.
				' 部门发出，用户等待收货';
			}
			$orderlog['ol_code']='ORDERDELIVERY';
			$orderlog['ol_orderid'] = $val;
			$orderlog['ol_ipaddress'] = real_ip();
			
			if(!engrave_orderlog_insert($orderlog,$conn))
			{
				//配货中
				transaction_failed($conn);
				make_json_error($GLOBALS['_LANG']['deliver_goods_failed']);
			}
			//先提交事务，后提示
			transaction_success($conn);
		}
	}
	//成功返回
	$url = 'engrave_all_orders.php?act=query&' . str_replace('act=batch_delivery', '', $_SERVER['QUERY_STRING']);
	ecs_header("Location: $url\n");
 	exit;
}
/****************************************************************
 * 批量 下载身份证
 ***************************************************************/
elseif($_REQUEST['act'] == 'batch_down_identity')
{
	//所有文件都放到$root_path下，在$root_path下每次按时间创建文件夹
 	$root_path_dir = date("YmdHis", time());
	$root_path = ROOT_PATH . '/admin/engraveuploads/download/'.$root_path_dir;
 	//创建跟文件夹
	$fileDirectory = new FileUtil();
	$fileDirectory -> createDir($root_path);

	$order_id = isset($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	$order_ids = explode(",",$order_id);
	$order_list = engrave_order_list_in($order_id);

	//根据订单列表，创建文件夹
	foreach ($order_list as $key => $val)
	{
		$order_dir = $root_path.'/'.$val['order_no'];
		$fileDirectory -> createDir($order_dir);
		//根据ID，获取运单
		$waybill_list = engrave_order_waybill_byorderid(intval($val['order_id']));
		foreach ($waybill_list as $wkey => $wval)
		{
			//ordw_orderno,ordw_waybillno,da_identitycardfront,da_identitycardbehind
			$waybill_dir =$order_dir.'/1';
			if(!$wval['ordw_waybillno'])
			{
				$waybill_dir = $order_dir.'/'.$wval['ordw_waybillno'];
			}elseif(!$wval['ordw_orderno']){
				$waybill_dir = $order_dir.'/'.$wval['ordw_orderno'];
			}
			$fileDirectory -> createDir($waybill_dir);
			//向文件夹中拷贝文件
			//获取物流根目录
			$engrave_root_path = ROOT_PATH;
			if(substr(ROOT_PATH, -1)=="/")
			{
				$engrave_root_path = substr(ROOT_PATH, 0,strlen(ROOT_PATH)-1);
			}
			$root_paths = explode("/",$engrave_root_path);
			$engrave_root_path_actual = '';
			//获取最后一个字符
			FOR ($i = 0; $i < count($root_paths)-1; $i++)
			{
				$engrave_root_path_actual .= $root_paths[$i] . "/";
			}
		        $file_url =  $engrave_root_path_actual.$wval['da_identitycardfront'];
			$da_identitys = explode("/",$wval['da_identitycardfront']);
			$aim_url = $waybill_dir.'/'.$da_identitys[count($da_identitys)-1];
			$file_url=str_replace("//","/",$file_url);
			$aim_url=str_replace("//","/",$aim_url);
			$fileDirectory -> copyFile($file_url, $aim_url,false);
			
			$file_url =  $engrave_root_path_actual.$wval['da_identitycardbehind'];
			$da_identitys = explode("/",$wval['da_identitycardbehind']);
			$aim_url = $waybill_dir.'/'.$da_identitys[count($da_identitys)-1];
			$file_url=str_replace("//","/",$file_url);
			$aim_url=str_replace("//","/",$aim_url);
			$fileDirectory -> copyFile($file_url, $aim_url,false);
		}
	}
	
	$archive = new PHPZip();
	$archive -> ZipAndDownload($root_path);
}
/****************************************************************
 * 批量  跟踪
 ***************************************************************/
elseif($_REQUEST['act'] == 'batch_follow')
{
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$order_id = isset($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	$follow_content = isset($_REQUEST['follow_content']) ? trim($_REQUEST['follow_content']) : '';
	$order_ids = explode(",",$order_id);
	
	/**
	 * 1、信息；2、状态；3、时间；4、操作人；5、是否删除
	 */
	$track_info['tr_message'] = $follow_content;
	$track_info['tr_statuscode'] = 0;
	$track_info['tr_intime'] = gmtime();//时间
	$track_info['tr_operatorid'] = $_SESSION[admin_id];
	$track_info['tr_isdelete'] = 0;
	
	foreach($order_ids as $key=>$val)
	{
		//订单ID
		$track_info['tr_orderid'] = $val;
		//根据订单获取运单号，如果有运单号，则添加，否则，不添加
	 	$orderwaybill_list = engrave_order_waybill_byorderid(intval($val));
	 	foreach ($orderwaybill_list as $wkey=>$wval)
	 	{
	 		if(!empty($wval['ordw_waybillno']))
	 		{
	 			//运单号
	 			$track_info['tr_expressnumber'] = $wval['ordw_waybillno'];
	 			if(!engrave_tracking_insert_trans($track_info, $conn))
	 			{
	 				transaction_failed($conn);
	 				make_json_error($GLOBALS['_LANG']['batch_follow_failed']);
	 				exit;
	 			}
	 		}
	 	}
	}
	transaction_success($conn);
	
	// 记录日志
	admin_log(addslashes($GLOBALS['_LANG']['order_log'].$order_id.' '.$follow_content), 'add', 'batch_follow');
	make_json_result('',$GLOBALS['_LANG']['batch_follow_success']);
	exit;
}
/****************************************************************
 * 批量  移除
 ***************************************************************/
elseif($_REQUEST['act'] == "batch_remove")
{
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$order_id = isset($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	$follow_content = isset($_REQUEST['follow_content']) ? trim($_REQUEST['follow_content']) : '';
	$order_ids = explode(",",$order_id);
	//移除
	foreach($order_ids as $key=>$val)
	{
		//根据订单获取运单号，如果有运单号，则添加，否则，不添加
		if(!engrave_order_delete($val, $conn))
		{
			transaction_failed($conn);
			make_json_error($GLOBALS['_LANG']['batch_remove_failed']);
			exit;
		}
	}
	transaction_success($conn);
	
	// 记录日志
	admin_log(addslashes($GLOBALS['_LANG']['order_log'].$order_id), 'remove', 'batch_remove');
	//成功返回
	$url = 'engrave_all_orders.php?act=query&' . str_replace('act=batch_remove', '', $_SERVER['QUERY_STRING']);
	ecs_header("Location: $url\n");
 	exit;
}
/****************************************************************
 * 批量  导出配货信息
 ***************************************************************/
elseif($_REQUEST['act'] == "button_batch_export_orderblank")
{	
	$order_id = isset($_REQUEST['order_id']) ? trim($_REQUEST['order_id']) : '';
	$follow_content = isset($_REQUEST['follow_content']) ? trim($_REQUEST['follow_content']) : '';
	$order_ids = explode(",",$order_id);
	//移除
	foreach($order_ids as $key=>$val)
	{
		
	}
	//获取所有订单
	$order_list = engrave_order_list_export_in($order_id);
	
		require_once ROOT_PATH . '/Classes/PHPExcel.php';
		require_once ROOT_PATH . '/Classes/PHPExcel/IOFactory.php';
		$PHPExcel = new PHPExcel();
	
		//设置excel属性基本信息
		$PHPExcel->getProperties()->setCreator("qtutsoft")
		->setLastModifiedBy("qtutsoft")
		->setTitle("青岛友腾信息技术有限公司")
		->setSubject("EMS")
		->setDescription("")
		->setKeywords("EMS")
		->setCategory("");
		$PHPExcel->setActiveSheetIndex(0);
		$PHPExcel->getActiveSheet()->setTitle("EMS");
		
// 		//填入表头主标题
// 		$PHPExcel->getActiveSheet()->setCellValue('A1', $_CFG['shop_name'].'订单列表');
// 		//填入表头副标题
// 		$PHPExcel->getActiveSheet()->setCellValue('A2', '操作者：'.$_SESSION['admin_id'].' 导出日期：'.date('Y-m-d',time()).' 地址：'.$_CFG['shop_address'].' 电话：'.$_CFG['service_phone']);
// 		//合并表头单元格
// 		$PHPExcel->getActiveSheet()->mergeCells('A1:T1');
// 		$PHPExcel->getActiveSheet()->mergeCells('A2:T2');
	
// 		//设置表头行高
// 		$PHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(40);
// 		$PHPExcel->getActiveSheet()->getRowDimension(2)->setRowHeight(20);
// 		$PHPExcel->getActiveSheet()->getRowDimension(3)->setRowHeight(30);
	
// 		//设置表头字体
// 		$PHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('黑体');
// 		$PHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
// 		$PHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
// 		$PHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setName('宋体');
// 		$PHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setSize(14);
// 		$PHPExcel->getActiveSheet()->getStyle('A3:T3')->getFont()->setBold(true);
	
		//设置单元格边框
		$styleArray = array(
				'borders' => array(
						'allborders' => array(
								//'style' => PHPExcel_Style_Border::BORDER_THICK,//边框是粗的
								'style' => PHPExcel_Style_Border::BORDER_THIN,//细边框
								//'color' => array('argb' => 'FFFF0000'),
						),
				),
		);
	
		//表格宽度
// 		$PHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(18);//订单编号
// 		$PHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);//下单时间
// 		$PHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);//付款时间
// 		$PHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);//发货时间
// 		$PHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(18);//发货单号
// 		$PHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);//支付方式
// 		$PHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10);//配送方式
// 		$PHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);//配送费用
// 		$PHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);//收件人
// 		$PHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(35);//收货地址
// 		$PHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(15);//电话
// 		$PHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);//手机
// 		$PHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(25);//邮箱
// 		$PHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);//货号
// 		$PHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(15);//商品名称
// 		$PHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(15);//属性
// 		$PHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(10);//价格
// 		$PHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(6);//数量
// 		$PHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(15);//小计
// 		$PHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(15);//应付款金额
	
		//表格标题
		$PHPExcel->getActiveSheet()->setCellValue('A1', '订单编号');
		$PHPExcel->getActiveSheet()->setCellValue('B1', '下单用户');
		$PHPExcel->getActiveSheet()->setCellValue('C1', '货物说明');
		$PHPExcel->getActiveSheet()->setCellValue('D1', '收货人');
		$PHPExcel->getActiveSheet()->setCellValue('E1', '收货城市');
		$PHPExcel->getActiveSheet()->setCellValue('F1', '电话号码');
		$PHPExcel->getActiveSheet()->setCellValue('G1', '重量');
		$PHPExcel->getActiveSheet()->setCellValue('H1', '收件地址');
		$PHPExcel->getActiveSheet()->setCellValue('I1', '收货邮编');
		$PHPExcel->getActiveSheet()->setCellValue('J1', '申报价值');
		$PHPExcel->getActiveSheet()->setCellValue('K1', '费用');
		$PHPExcel->getActiveSheet()->setCellValue('L1', '手机号码');
		$PHPExcel->getActiveSheet()->setCellValue('M1', '保险费用');
		$PHPExcel->getActiveSheet()->setCellValue('N1', '总费用');
		$PHPExcel->getActiveSheet()->setCellValue('O1', '保险金额');
		$PHPExcel->getActiveSheet()->setCellValue('P1', '固定值');
		$PHPExcel->getActiveSheet()->setCellValue('Q1', '国家');
		$PHPExcel->getActiveSheet()->setCellValue('R1', '编号');
		$PHPExcel->getActiveSheet()->setCellValue('S1', '年');
		$PHPExcel->getActiveSheet()->setCellValue('T1', '月');
		$PHPExcel->getActiveSheet()->setCellValue('U1', '日');
		$PHPExcel->getActiveSheet()->setCellValue('V1', '固定时间');
		$PHPExcel->getActiveSheet()->setCellValue('W1', '寄件人姓名');
		$PHPExcel->getActiveSheet()->setCellValue('X1', '对勾1');
		$PHPExcel->getActiveSheet()->setCellValue('Y1', '对勾2');
		$PHPExcel->getActiveSheet()->setCellValue('Z1', '对勾3');
		$PHPExcel->getActiveSheet()->setCellValue('AA1', '对勾4');
		$PHPExcel->getActiveSheet()->setCellValue('AB1', '对勾5');
		$PHPExcel->getActiveSheet()->setCellValue('AC1', '寄件人邮编');
		$PHPExcel->getActiveSheet()->setCellValue('AD1', '寄件人电话');
		$PHPExcel->getActiveSheet()->setCellValue('AE1', '寄件人传真');
		$PHPExcel->getActiveSheet()->setCellValue('AF1', '寄件人地址');
		$PHPExcel->getActiveSheet()->setCellValue('AG1', '寄件人签名');
		$date = local_date('Y-m-d');
		$hang = 2;
		foreach ($order_list as $key=>$order) {
			/* 取得订单信息 */
			$PHPExcel->getActiveSheet()->setCellValue('A' . ($hang), $order['order_no']);//订单编号
			$PHPExcel->getActiveSheet()->setCellValue('B' . ($hang), $order['user_storage_code']);//下单用户
			$PHPExcel->getActiveSheet()->setCellValue('C' . ($hang), "物品：".$order['ordg_goodname'].",数量：".$order['ordg_goodnumber'].",单价：".$order['ordg_goodprice']);//货物说明
			$PHPExcel->getActiveSheet()->setCellValue('D' . ($hang), $order['da_name']);//收货人
			$PHPExcel->getActiveSheet()->setCellValue('E' . ($hang), $order['da_city_name']);//收货城市
			$PHPExcel->getActiveSheet()->setCellValue('F' . ($hang), $order['da_consigneetelephone']);//电话号码
			$PHPExcel->getActiveSheet()->setCellValue('G' . ($hang), $order['ordw_goodweight']+$order['ordw_deductweight']);//重量
			$PHPExcel->getActiveSheet()->setCellValue('H' . ($hang), $order['da_country_name'].' '.
			$order['da_province_name'].' '.$order['da_city_name'].' '.$order['da_address']);//收件地址
			$PHPExcel->getActiveSheet()->setCellValue('I' . ($hang), $order['da_zipcode']);//收货邮编
			$PHPExcel->getActiveSheet()->setCellValue('J' . ($hang), $order['ordw_applyprice']);//申报价值
			$PHPExcel->getActiveSheet()->setCellValue('K' . ($hang), $order['ordw_waybillcost']);//费用
			$PHPExcel->getActiveSheet()->setCellValue('L' . ($hang), $order['da_sparetelephone']);//手机号码
			$PHPExcel->getActiveSheet()->setCellValue('M' . ($hang), $order['ordw_insurprice']);//保险费用
			
			$PHPExcel->getActiveSheet()->setCellValue('N' . ($hang), $order['ordw_waybillcost']+$order['ordw_insurprice']);//总费用
			$PHPExcel->getActiveSheet()->setCellValue('O' . ($hang), $order['ordw_insurprice']);//保险金额
			$PHPExcel->getActiveSheet()->setCellValue('P' . ($hang), $order['da_consigneetelephone']);//固定值
			$PHPExcel->getActiveSheet()->setCellValue('Q' . ($hang), $order['destinationCountry']);//国家
			$PHPExcel->getActiveSheet()->setCellValue('R' . ($hang), $hang-1);//编号
			$PHPExcel->getActiveSheet()->setCellValue('S' . ($hang), $date);//年
			$PHPExcel->getActiveSheet()->setCellValue('T' . ($hang), $order['pck_inventorylocation']);//月
			$PHPExcel->getActiveSheet()->setCellValue('U' . ($hang), $order['ShippingName']);//日-线路名称
			$PHPExcel->getActiveSheet()->setCellValue('V' . ($hang), '');//固定时间
			$PHPExcel->getActiveSheet()->setCellValue('W' . ($hang), '');//寄件人姓名
			if(strpos("aa".$order['ShippingName'] , '航空线路'))
			{
				$PHPExcel->getActiveSheet()->setCellValue('X' . ($hang), 'X');//对勾1
			}
			elseif(strpos("aa".$order['ShippingName'] , '经济航空线路'))
			{
				$PHPExcel->getActiveSheet()->setCellValue('Y' . ($hang), 'X');//对勾2
			}elseif(strpos("aa".$order['ShippingName'] , '海运线路'))
			{
				$PHPExcel->getActiveSheet()->setCellValue('Z' . ($hang), 'X');//对勾3
			}
			$PHPExcel->getActiveSheet()->setCellValue('AA' . ($hang), '');//对勾4
			$PHPExcel->getActiveSheet()->setCellValue('AB' . ($hang), '');//对勾5
			$PHPExcel->getActiveSheet()->setCellValue('AC' . ($hang), $order['da_zipcode']);//寄件人邮编(收件人邮编)
			$PHPExcel->getActiveSheet()->setCellValue('AD' . ($hang), '');//寄件人电话
			$PHPExcel->getActiveSheet()->setCellValue('AE' . ($hang), '');//寄件人传真
			$PHPExcel->getActiveSheet()->setCellValue('AF' . ($hang), '');//寄件人地址
			$PHPExcel->getActiveSheet()->setCellValue('AG' . ($hang), '');//寄件人签名
				
			$hang = $hang + 1;
		}
		//设置单元格边框
		$PHPExcel->getActiveSheet()->getStyle('A1:AG'.($hang-1))->applyFromArray($styleArray);
		//设置自动换行
		$PHPExcel->getActiveSheet()->getStyle('A1:AG'.($hang-1))->getAlignment()->setWrapText(true);
		//设置字体大小
		$PHPExcel->getActiveSheet()->getStyle('A1:AG'.($hang-1))->getFont()->setSize(12);
		//垂直居中
		$PHPExcel->getActiveSheet()->getStyle('A1:AG'.($hang-1))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
		//水平居中
		$PHPExcel->getActiveSheet()->getStyle('A1:AG'.($hang-1))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

		$Writer = PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel5');
		echo str_replace('.php', '.xls', __FILE__).'<br>';

		$ymd = date("Ymd");
		$save_path = ROOT_PATH . '/admin/engraveuploads/file/';
		$save_url = (dirname($_SERVER['PHP_SELF']) . '/engraveuploads/file/');
		$save_path .= $ymd . "/";
		$save_url .= $ymd . "/";
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}
		$new_file_name = date("YmdHis") . '_' . rand(10000, 99999) . '.xls';
		$save_path .=$new_file_name;
		$save_url .=$new_file_name;
		
		$Writer->save($save_path);
		
		ecs_header("Location: $save_url\n");
		exit;
}
/**
 * 运单详细
 */
elseif($_REQUEST['act'] == 'order_details')
{
	$ordw_waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : '0';
	//获取运单管理列表---数据
	$order_detail_list = engrave_order_detail_list($ordw_waybillid);
	$smarty->assign('order_detail_list',$order_detail_list);
	//配送地区
	$area_country_option = engrave_area_option(0,$order_detail_list['da_country']);
	$smarty->assign('area_country_option',$area_country_option);
	if($order_detail_list['da_country']!=0)
	{
		$area_province_option = engrave_area_option($order_detail_list['da_country'],$order_detail_list['da_province']);
		$smarty->assign('area_province_option',$area_province_option);
	}
	if($order_detail_list['da_province']!=0)
	{
		$area_city_option = engrave_area_option($order_detail_list['da_province'],$order_detail_list['da_city']);
		$smarty->assign('area_city_option',$area_city_option);
	}
	//获得该运单线路的列表
	$smarty->assign('shipping_list',   get_shipping_list());
	//获得该运单的仓库名称
	$smarty->assign('waybillhouse_list', engrave_order_waybill_list());
	//获得收货地区
	$smarty->assign('form_action', 'waybill_update');
	$smarty->display('engrave_order_details_info.htm');
}
/*------------------------------------------------------ */
//-- 充值卡添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='waybill_update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('order_manage');
	//获取数据
	/*包裹的修改*/
	$package['pck_warehouseid'] = !empty($_POST['housename']) ? intval($_POST['housename']) : '0';
	$package['pck_inventorylocation'] = !empty($_POST['houselocation']) ? trim($_POST['houselocation']) : '';
	$package['pck_storagecode'] = !empty($_POST['storagecode']) ? trim($_POST['storagecode']) : '';
	$package['pck_expressnumber'] = !empty($_POST['goodsnumber']) ? trim($_POST['goodsnumber']) : '';
    /*订单修改*/
	$order['order_shippingid'] = !empty($_POST['shippingname']) ? intval($_POST['shippingname']) : '0';
	$order['order_isdelivery'] = !empty($_POST['sent']) ? intval($_POST['sent']) : '0';
	/*运单修改*/
	$orderwaybill['ordw_assistno'] = !empty($_POST['waybillno']) ? trim($_POST['waybillno']) : '';
	$orderwaybill['ordw_waybillno'] = !empty($_POST['expressno']) ? trim($_POST['expressno']) : '';
	$orderwaybill['ordw_applyprice'] = !empty($_POST['ordwapplyprice']) ? doubleval($_POST['ordwapplyprice']) : '0.00';
	$orderwaybill['ordw_insurprice'] = !empty($_POST['ordwinsurprice']) ? doubleval($_POST['ordwinsurprice']) : '0.00';
	$orderwaybill['ordw_waybillcost'] = !empty($_POST['ordwwaybillcost']) ? doubleval($_POST['ordwwaybillcost']) : '0.00';
	/*物流快递*/
	$collogistics['LogisticsName'] = !empty($_POST['internalexpress']) ? trim($_POST['internalexpress']) : '';
	$collogistics['CollCode'] = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	/*收货信息资料*/
	$deliveryaddress['da_consignee'] = !empty($_POST['daconsignee']) ? trim($_POST['daconsignee']) : '';
	$deliveryaddress['da_identitycard'] = !empty($_POST['daidentitycard']) ? trim($_POST['daidentitycard']) : '';
	$deliveryaddress['da_identitycardfront'] = !empty($_POST['identitycardfront']) ? trim($_POST['identitycardfront']) : '';
	$deliveryaddress['da_identitycardbehind'] = !empty($_POST['identitycardbehind']) ? trim($_POST['identitycardbehind']) : '';
	$deliveryaddress['da_country'] = !empty($_POST['da_country']) ? intval($_POST['da_country']) : '0';
	$deliveryaddress['da_province'] = !empty($_POST['da_province']) ? intval($_POST['da_province']) : '0';
	$deliveryaddress['da_city'] = !empty($_POST['da_city']) ? intval($_POST['da_city']) : '0';
	$deliveryaddress['da_address'] = !empty($_POST['daaddress']) ? trim($_POST['daaddress']) : '';
	$deliveryaddress['da_zipcode'] = !empty($_POST['dazipcode']) ? trim($_POST['dazipcode']) : '';
	$deliveryaddress['da_email'] = !empty($_POST['daemail']) ? trim($_POST['daemail']) : '';
	$deliveryaddress['da_consigneetelephone'] = !empty($_POST['daconsigneetelephone']) ? trim($_POST['daconsigneetelephone']) : '';
	$deliveryaddress['da_sparetelephone'] = !empty($_POST['dasparetelephone']) ? trim($_POST['dasparetelephone']) : '';
	
	/*包裹修改*/
	$pck_id = !empty($_REQUEST['pck_id']) ? intval($_REQUEST['pck_id']) : 0;
    engrave_package_details_update($package,$pck_id);
    /*订单修改*/
    $order_id = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : 0;
    engrave_order_details_update($order,$order_id);
    /*运单修改*/
    $ordw_waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : 0;
    engrave_waybill_details_update($orderwaybill,$ordw_waybillid);
    /*快递修改*/
    $logistics_id = !empty($_REQUEST['LogisticsId']) ? intval($_REQUEST['LogisticsId']) : 0;
    engrave_collogistics_details_update($collogistics,$logistics_id);
    /*收货信息修改*/
    $da_id = !empty($_REQUEST['da_id']) ? intval($_REQUEST['da_id']) : 0;
    engrave_deliveryaddress_details_update($deliveryaddress,$da_id);
    
	$link[0]['text'] = $GLOBALS['_LANG']['back_delivery_list'];
	$link[0]['href'] = 'engrave_all_orders.php?act=order_details&ordw_waybillid='.$ordw_waybillid;
	sys_msg($GLOBALS['_LANG']['save_success'], 0, $link);
}
elseif($_REQUEST['act']=='area')
{
	//地区ID
	$areaid = isset($_REQUEST['areaid']) ? intval($_REQUEST['areaid']) : 0;

	$area_list = engrave_country_area_list($areaid);
	echo json_encode($area_list);
}
/**
 * 获取仓库
 */
elseif($_REQUEST['act'] == 'getwarehouseprice')
{
	$orderid = !empty($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : 0;
	$warehouse = engrave_warehouse_by_orderid($orderid);
	
	echo json_encode($warehouse);
}
/**
 * 事务失败
 * @param unknown $conn
 */
function transaction_failed($conn)
{
	//添加失败
	mysql_query('ROLLBACK',$conn);//回滚
	mysql_close($conn);
}
/**
 * 事务成功
 * @param unknown $conn
 */
function transaction_success($conn)
{
	//添加失败
	mysql_query('COMMIT',$conn);//回滚
	mysql_close($conn);
}
?>
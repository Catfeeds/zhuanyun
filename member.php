<?php 
/**
 * ENGRAVE 会员中心
 * $Author: cfang $
 * $Id: member.php 17217 2017年11月28日 11时03分00秒  $
 */
define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');

//载入语言文件
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_promptlydelivery.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_forecast.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_user.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_order.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_appreciation.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_fad.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_dictionary.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/member/lib_account.php');
require_once(ROOT_PATH . '/includes/member/lib_coupon.php');
require_once(ROOT_PATH . '/includes/member/lib_account_log.php');

//收货地址
require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');

//上传图片

require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');

require_once(ROOT_PATH . '/includes/lib_passport.php');


$smarty->assign('lang', $_LANG);
//Session会话开始
@session_start();
//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	$smarty->assign('menu_here',$_LANG['member_account']);
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$smarty->assign('users',$users);

	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_name',$username);

	//包裹提醒
	$package = engrave_package_remind_submit($user_id);
	$smarty->assign('package',$package);
 	//订单提醒
 	$order = engrave_order_remind($user_id);
 	$smarty->assign('order',$order);
	
	//根据用户地址ID，判断用户是否完善了注册信息
	if($users['user_isperfect'] == 0)
	{
		//获取国家
		$area_country_option = engrave_area_option(0,0);
		$smarty->assign('area_country_option',$area_country_option);
		//用户名称
		$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
		//导航
		$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
		$smarty->assign('ur_here',$ur['ur_here']);
		$smarty->display('member_datum.htm');
		return;
	}
}
else
{
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************
//*********************到货预报****************************************************************
if($_REQUEST['act']=='package_forecast')
{
	$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	$warehouse_list = engrave_warehouse_option($user_warehouseid);
	$ur=assign_ur_here(-1,$_LANG['member']['member_package_forecast']);
	$smarty->assign('ur_here',$ur['ur_here']);


	$smarty->assign('warehouse_list',$warehouse_list);
	$smarty->assign('package_shipment_option',@engrave_package_shipment_list(1));
	$smarty->assign('package_shopping_site_option',@engrave_package_shopping_site_list(true));
	$smarty->display('member_forecast.htm');
}
if($_REQUEST['act']=='package_atonce')
{
	$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	$warehouse_list = engrave_warehouse_option($user_warehouseid);
	$smarty->assign('warehouse_list',$warehouse_list);
		$smarty->assign('package_shipment_option',@engrave_package_shipment_list(1));
	$smarty->assign('package_shopping_site_option',@engrave_package_shopping_site_list(true));
	$smarty->display('member_package_atonce.htm');
}
//我的包裹
if($_REQUEST['act']=='member_12') {
	$warehouse_list = engrave_warehouse_option(0);
	$smarty->assign('warehouse_list',$warehouse_list);
	$smarty->display('member_12.htm');
}

if($_REQUEST['act']=='member_13')
{

    $smarty->display('member_13.htm');
}

if($_REQUEST['act']=='member_30')
{
	$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	$warehouse_list = engrave_warehouse_option($user_warehouseid);
	$smarty->assign('warehouse_list',$warehouse_list);

	$smarty->display('member_forecast.htm');
}
if($_REQUEST['act']=='member_31')
{

	$smarty->display('member_31.htm');
}
if($_REQUEST['act']=='member_withdraws')
{
    $ur_here = "首页 > 会员中心 > 提现申请";
    $user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
    $users = engrave_users($user_id);
    $smarty->assign('users',$users);
    $smarty->assign("ur_here", $ur_here);
	$smarty->display('member_withdraws.htm');
}
if($_REQUEST['act']=='member_preferential')
{

	$smarty->display('member_preferential.htm');
}

if($_REQUEST['act']=='member_address')
{
	$ur=assign_ur_here(-1,$_LANG['member']['member_address']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->display('member_address.htm');
}

if($_REQUEST['act']=='list_about'){
    $smarty->display('list_about.htm');
}


/*提交发货*/



elseif($_REQUEST['act'] == 'member_insertsubmit')
{
    include(ROOT_PATH . "/member_order_submit.php");
}
elseif($_REQUEST['act'] == 'getshipping')
{
	$warehouseId = isset($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$shipping_list = engrave_shipping_name_list($warehouseId);
	echo json_encode($shipping_list);
}
elseif($_REQUEST['act'] == 'getratetax')
{
	//物品名称
	$rate_name_list = engrave_rate_name_list();
	echo json_encode($rate_name_list);
}
/*当前订单 订单列表*/
elseif($_REQUEST['act']=='21')
{
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_current']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_current']);
	//获取并设定当前所在位置:默认值为-1
	$type = isset($_REQUEST['type']) ? intval($_REQUEST['type']) : -1;
	$smarty->assign('type',$type);
	
	$smarty->display('member_current.htm');
}
/*历史订单*/
elseif($_REQUEST['act']=='member_history')
{

	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_history']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_history']);
	
	$smarty->display('member_history.htm');
}

//********************************我的账户**************************************************//
/*我的账户*/
elseif($_REQUEST['act']=='member_myacc')
{
	if(isset($_SESSION['username']))
	{
		require_once(ROOT_PATH . '/includes/member/lib_account.php');
		require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
		//数据访问类：账户
		require_once(ROOT_PATH . '/includes/member/lib_account.php');
	
		//根据用户ID获取用户信息
		$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
		$users = engrave_users($user_id);
		$username = isset($_SESSION['username'])?$_SESSION['username']:'';
		$smarty->assign('username',$username);
		$smarty->assign('users',$users);
		//根据用户地址ID，判断用户是否完善了注册信息
		if($users['user_isperfect'] == 0)
		{
			//获取国家
			$area_country_option = engrave_area_option(0,0);
			$smarty->assign('area_country_option',$area_country_option);



			//用户名称
			$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
			//导航
			$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
			$smarty->assign('ur_here',$ur['ur_here']);
			$smarty->display('member_datum.htm');
			return;
		}
		//包裹提醒
		$package = engrave_package_remind_submit($user_id);
		$smarty->assign('package',$package);
		//订单提醒
		$order = engrave_order_remind($user_id);
		$smarty->assign('order',$order);
		//根据用户ID获取消费金额
		$cost = engrave_account_log_costmoney($user_id,10);
		$smarty->assign('cost',$cost);
		//查询默认货币
		$currency_symbol = engrave_currency_symbol();
		$smarty->assign('currency_symbol',$currency_symbol);
		//获取日元账户
		$currency_jpy = engrave_currency_jpy_byid();
		$smarty->assign('currency_jpy',$currency_jpy);
		//导航
		$ur=assign_ur_here(0,$_LANG['member']['member_myacc']);
		$smarty->assign('ur_here',$ur['ur_here']);
		$smarty->assign('curr_here',$_LANG['member']['member_myacc']);
		$smarty->assign('tab','0');
		//获取提现
		$account_list = engrave_account_list_eq_process_type($user_id,0);
		$smarty->assign('account_list',$account_list['account_list']);
		//获取交易记录
		$account_list = engrave_account_log_list($user_id);
		//print_r($account_list);
		$smarty->assign('recharge_list',$account_list['accumulatepoints_list']);
	    $smarty->assign('filter',       $account_list['filter']);
	    $smarty->assign('record_count', $account_list['record_count']);
	    $smarty->assign('page_count',   $account_list['page_count']);
		//获取充值	
		$smarty->display('member_myacc.htm');
	}
	else
	{
		$smarty->assign('menu_here',$_LANG['member_account']);
		$smarty->display('member_login.htm');
	}
}
//********************************我的账户**************************************************//

/*在线充值*/
elseif($_REQUEST['act']=='member_onlinerecharge')
{
	//载入语言文件
	require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_onlinerecharge.php');
	//数据访问类：支付
	require_once(ROOT_PATH . '/includes/member/lib_payment.php');
	$smarty->assign('lang',$_LANG);
	//获取充值方式
	$payment_list = engrave_payment_list();
	$smarty->assign('payment_list',$payment_list);
	$smarty->assign('user_id',$user_id);
	//导航

	$ur=assign_ur_here(0,$_LANG['member']['member_onlinerecharge']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_onlinerecharge']);
	
	$smarty->display('member_onlinerecharge.htm');
}

/*我的积分*/
elseif($_REQUEST['act']=='member_integral')
{
	//语言
	require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/accumulatepoints.php');
	//数据库
	require_once(ROOT_PATH . '/includes/member/lib_currecy.php');
	require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
	
	$smarty->assign('lang', $_LANG);
	$user = engrave_users($user_id);
	$smarty->assign('user',$user);
	//默认货币
	$currency = engrave_default_currency();
	$smarty->assign('currency',$currency);
	//积分记录
	$smarty->assign('s_integralprice',$_CFG['s_integralprice']*$user['pay_points']);
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_integral']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_integral']);
	
	$smarty->display('member_integral.htm');
}
/*我的推广*/
elseif($_REQUEST['act']=='member_FAD')
{
	//数据库
	require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
	//推荐码、推荐地址
	$users = engrave_users($user_id);
	$smarty->assign('recommend_code',$users['recommend_code']);
	$smarty->assign('member_register_url',ROOT_URL.'index.php?act=member_register&recommend='.$users['recommend_code']);
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_FAD']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_FAD']);
	
	$smarty->display('member_FAD.htm');
}
/*我的信息*/
elseif($_REQUEST['act']=='member_myinfo')
{
	/*语言包*/
	require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_myinformation.php');
	//数据访问类：
	require_once(ROOT_PATH . '/includes/member/lib_myinformation.php');

	$smarty->assign('lang', $_LANG);
	$myinformation = engrave_myinfomation($user_id);
	$smarty->assign('myinformation',$myinformation['myinfomation']);
	$smarty->assign('coupon_count',$myinformation['coupon_count']);
	
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_myinfo']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_myinfo']);
	$smarty->display('member_myinfo.htm');
}
/*账户总览*/
elseif($_REQUEST['act']=='member_account')
{
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$smarty->assign('users',$users);
	
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
	$package = engrave_package_remind();
	$smarty->assign('package',$package);
 	//根据用户ID获取消费金额
 	$cost = engrave_account_log_costmoney($user_id,10);
 	$smarty->assign('cost',$cost);
 	//查询默认货币
 	$currency_symbol = engrave_currency_symbol();
 	$smarty->assign('currency_symbol',$currency_symbol);

	//获取仓库信息
	$warehouse_list = engrave_warehouse_list();
	$smarty->assign('warehouse_list',$warehouse_list['warehouse_list']);
	//导航
	$ur=assign_ur_here(0,$_LANG['member_account']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_account']);
	
	$smarty->display('member_account.htm');
}
/*资料修改*/
elseif($_REQUEST['act']=='member_datum')
{
	$user_name = isset($_SESSION['username']) ? trim($_SESSION['username']) : '';
	
	//根据用户ID获取用户线路ID
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$user = engrave_users($user_id);
	//信息是否完整
	$user_isperfect = isset($user['user_isperfect']) ? intval($user['user_isperfect']) : 0;
	if($user_isperfect==0)
	{
		//获取国家
		$area_country_option = engrave_area_option(0,0);
//        $area_country_option = engrave_country_option(0);

		$smarty->assign('area_country_option',$area_country_option);
		//操作：添加
		$smarty->assign('operate','insert');
	}
	else {
		//配送地区
		$area_country_option = engrave_area_option(0,$user['user_country']);
//        $area_country_option = engrave_country_option($user['user_country']);
		$smarty->assign('area_country_option',$area_country_option);
		if($user['user_country']!=0)
		{
			$area_province_option = engrave_area_option($user['user_country'],$user['user_province']);
			$smarty->assign('area_province_option',$area_province_option);
		}
		if($user['user_province']!=0)
		{
			$area_city_option = engrave_area_option($user['user_province'],$user['user_city']);
			$smarty->assign('area_city_option',$area_city_option);
		}
		//操作：修改
		$smarty->assign('operate','update');
	}
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_datum']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_datum']);
	
	$smarty->display('member_datum.htm');
}
/*修改密码*/
elseif($_REQUEST['act']=='member_revisepass')
{

	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_revisepass']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_revisepass']);
	
	$smarty->display('member_revisepass.htm');
}


//********************************有问必答**************************************************//
/*有问必答*/
elseif($_REQUEST['act']=='member_insider')
{
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_insider']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_insider']);
	//有问必答列表
	$faq_list = engrave_faq_list($user_id);
	
	$smarty->assign('faq_list',$faq_list);
	$smarty->display('member_insider.htm');
}
elseif($_REQUEST['act']=='member_insider_query')
{
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_insider']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_insider']);
	//有问必答列表
	$faq_list = engrave_faq_list($user_id);
	$smarty->assign('faq_list',$faq_list);
	make_json_result($smarty->fetch('member_insider.htm'), '','');
}
if($_REQUEST['act']=='member_complaint')
{
    require_once(ROOT_PATH . '/includes/member/lib_faq.php');
    //导航
    $ur=assign_ur_here(0,$_LANG['member']['member_complaint']);
    $faq_list = engrave_complaint_list($user_id);
    $smarty->assign('complaint_list',$faq_list);


    $smarty->assign('ur_here',$ur['ur_here']);
    $smarty->display('member_complaint.htm');
}
elseif($_REQUEST['act'] == 'member_removefaq')
{
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//删除
	$faq_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    if($faq_id != 0)
    {
	    if (engrave_faq_delete($faq_id))
	    {
	        $url = 'member.php?act=member_insider_query&' . str_replace('act=member_removefaq', '', $_SERVER['QUERY_STRING']);
	        ecs_header("Location: $url\n");
	        exit;
	    }
    }
}

//********************************end投诉理赔**************************************************//
/*------------------------------------------------------ */
//-- 设置增值服务---提交增值服务
/*------------------------------------------------------ */
/*获取该仓库下的包裹数量*/
elseif($_REQUEST['act'] == 'getpackcountbyhouse')
{
	$warehouseId = !empty($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$package_list = engrave_logistic_package_list($warehouseId);
	echo json_encode($package_list);
}
elseif($_REQUEST['act']=='getgoods')
{
	$pck_id = !empty($_REQUEST['pck_id']) ? intval($_REQUEST['pck_id']) : '0';
	$packagegoods_list = engrave_logistic_packagegoods_list($pck_id);
	$result = array(
		"list" => $packagegoods_list,
		"pck_id" => $pck_id
	);
	echo json_encode($result);
}
//获得包裹的长宽高
elseif($_REQUEST['act'] == 'getpackagevolume')
{
	$expressnumber = !empty($_REQUEST['pck_expressnumber']) ? trim($_REQUEST['pck_expressnumber']) : '';
	$packagevolume_list = engrave_packagevolume_list($expressnumber);
	echo json_encode($packagevolume_list);
}
elseif($_REQUEST['act'] == 'getpackcountbyweightunit')
{
	$warehouseId = !empty($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$weight_unit = engrave_weight_unit($warehouseId);
	echo $weight_unit;
}
/*获取增值服务*/
elseif($_REQUEST['act'] == 'getservicename')
{
	$pck_id = !empty($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$servicename_list = engrave_service_name_list($pck_id);
	echo json_encode($servicename_list);
}
//获得仓库下增值服务的费用
elseif($_REQUEST['act'] == 'getserviceprice')
{
	$pck_id = !empty($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$serviceprice = engrave_service_price($pck_id);
	echo $serviceprice;
}
elseif($_REQUEST['act'] == 'getupgradepack')
{
	$pck_id = !empty($_REQUEST['pck_warehouseid']) ? intval($_REQUEST['pck_warehouseid']) : '0';
	$upgradepack_list = engrave_upgrade_package_list($pck_id);
	echo json_encode($upgradepack_list);
}
elseif($_REQUEST['act'] == 'getcurrencyname')
{
	$currency_name = engrave_currency_name();
	echo $currency_name;
}
//获得金额的单位
elseif($_REQUEST['act'] == 'getcurrencysymbol')
{
	$currency_symbol = engrave_currency_symbol();
	echo $currency_symbol;
}
//获得当前人所拥有的金额
elseif($_REQUEST['act'] == 'getcurrentbalance')
{
	$current_balance = engrave_current_balance();
	echo $current_balance;
}
//选择物品对应税率表中的税率
elseif($_REQUEST['act'] == 'getratetax_rate')
{
	$RateId = !empty($_REQUEST['rate_id']) ? intval($_REQUEST['rate_id']) : '0';
	$ratetax = engrave_rate_tax($RateId);
	echo $ratetax;
}
//获得选择线路中的 价格信息
elseif($_REQUEST['act'] == 'getshippingorderprice')
{
	$shipping_id = !empty($_REQUEST['ShippingId']) ? intval($_REQUEST['ShippingId']) : '0';
	$shippingorder_list = engrave_shipping_order_list($shipping_id);
	echo json_encode($shippingorder_list);
}
//获得选择线路中的保险费用计算
elseif($_REQUEST['act'] == 'getshippinginsurancecost')
{
	$shipping_id = !empty($_REQUEST['ShippingId']) ? intval($_REQUEST['ShippingId']) : '0';
	$insruancecost_list = engrave_insurance_cost_list($shipping_id);
	echo json_encode($insruancecost_list);
}
//获得收货人地址和详细信息
elseif($_REQUEST['act'] == 'getdeliveryaddress')
{
	//@todo 添加详细信息
	$delivery_info = engrave_delivery_address_list($user_id);
	echo json_encode($delivery_info);
}
//支付方式
elseif($_REQUEST['act'] == 'getpayment')
{
	$payment_way = engrave_payment_way();
	echo $payment_way;
}
//添加订单和物品的详细信息
/**
 * 添加订单
 * @param unknown $submit_order
 * @param unknown $engrave_db_host
 * @param unknown $engrave_db_user
 * @param unknown $engrave_db_pass
 * @param unknown $engrave_db_name
 */
/**
 * 订单取消
 * @param unknown $conn
 */
function order_cancel_failed($con)
{
	//添加失败
	@mysql_query('ROLLBACK',$con);//回滚
	@mysql_close($con);
}
/**
 * 订单取消
 * @param unknown $conn
 */
function order_cancel_success($con)
{
	//添加失败
	mysql_query('COMMIT',$con);//回滚
	mysql_close($con);
}

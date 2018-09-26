<?php 

/**

 * ENGRAVE 会员中心

 * ===========================================================

 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。

 * 网站地址: http://www.qdutsoft.com；

 * ----------------------------------------------------------

 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和

 * 使用；不允许对程序代码以任何形式任何目的的再发布。

 * ==========================================================

 * $Author: zhangxingpeng $

 * $Id: member.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $

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

if($_REQUEST['act']=='member_10')

{

$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	$warehouse_list = engrave_warehouse_option($user_warehouseid);

	$smarty->assign('warehouse_list',$warehouse_list);
$smarty->display('member_forecast.htm');
}

if($_REQUEST['act']=='member_11')

{
$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	$warehouse_list = engrave_warehouse_option($user_warehouseid);

	$smarty->assign('warehouse_list',$warehouse_list);


$smarty->display('member_11.htm');
}


if($_REQUEST['act']=='member_12')

{


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


$smarty->display('member_withdraws.htm');
}

if($_REQUEST['act']=='member_preferential')

{


$smarty->display('member_preferential.htm');
}


if($_REQUEST['act']=='member_address')

{


$smarty->display('member_address.htm');
}


if($_REQUEST['act']=='list_about')

{


$smarty->display('list_about.htm');
}


if($_REQUEST['act']=='member_complaint')

{


$smarty->display('member_complaint.htm');
}
/*提交发货*/




elseif($_REQUEST['act']=='member_submit')

{

	//导航

	$ur=assign_ur_here(0,$_LANG['member']['member_submit']);

	$smarty->assign('ur_here',$ur['ur_here']);

	$smarty->assign('curr_here',$_LANG['member']['member_submit']);

	//获取用户、仓库
$current_balance = engrave_current_balance();
	//$users = engrave_users($user_id);
$smarty->assign('current_balance',$current_balance);
	$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;

	//到货仓库

	$warehouse_list = engrave_warehouse_option($user_warehouseid);

	$smarty->assign('warehouse_list',$warehouse_list);

	//获得货币名称

	$currency_name = engrave_currency_name();

	$smarty->assign('currency_name',$currency_name);

	//获得货币单位

	$currency_symbol = engrave_currency_symbol();

	$smarty->assign('currency_symbol',$currency_symbol['Symbol']);

	//可使用的积分

	$max_integral = engrave_system_maxintegral();

	$smarty->assign('max_integral',$max_integral);

	//最多使用多少积分

	$pay_points = engrave_pay_points();

	$smarty->assign('pay_points',$pay_points);

	//默认支付方式

	$payment_way = engrave_payment_way();

	$smarty->assign('payment_way',$payment_way);

	//积分转换金额的比率

	$rate_points = engrave_rate_points();

	$smarty->assign('rate_points',$rate_points);

	//运单的折扣

	$waybill_discount = engrave_discount();

	$smarty->assign('waybill_discount',$waybill_discount);

	$smarty->assign('act','member_insertsubmit');

	$smarty->display('member_submit.htm');

}

elseif($_REQUEST['act'] == 'member_insertsubmit')

{

	//分箱数量

	$boxquantity = 0;

	//订单服务类型

	$submit_order['order_servicetype'] = isset($_REQUEST['service']) ? intval($_REQUEST['service']) : 0;

	//订单服务类型名称

	$aservice = isset($_REQUEST['AService']) ? intval($_REQUEST['AService']) : 0;

	$bservice = isset($_REQUEST['BService']) ? intval($_REQUEST['BService']) : 0;

	if($submit_order['order_servicetype']!=0)

	{

	   if($aservice == 0 && $bservice == 0)

	   {

	   	  echo('请至少选择合箱或者是分箱！');

	   }

	   else

	   { 

	   	   if($aservice == 0)

	   	   {

	   	   	  $submit_order['order_modelid'] = $bservice;

	   	   	  //分箱的数量

	   	   	  $boxquantity = isset($_REQUEST['boxNumber']) ? intval($_REQUEST['boxNumber']) : 0;

	   	   	  $boxquantity = $boxquantity + 2;

	   	   }

	   	   else

	   	   {

	   	   	  $submit_order['order_modelid'] = $aservice;

	   	   }

	   }

	}

	else

	{

		$submit_order['order_modelid'] = '0';

	}

	//订单号

	$ordernumberformat = $_CFG['s_ordernumberformat'];//生成的订单号格式

	$timeFormat=$_CFG['s_timeformat'];//时间格式

	$orderwaterlevel = $_CFG['s_orderwaterlevel'];//产生的位数

	$orderflowpath = $_CFG['s_orderflowpath'];//订单的支付方式

	$date = date($timeFormat);

	$right = '';

	$level_id = 0;

    for($level = 1;$level < $orderwaterlevel;$level++)

	{

	    $right.=$level_id;

	}

	$right.=1;

	if($ordernumberformat == '{Time}{Number}')

	{

	    $random = $date.$right;

        if(engrave_isexits_random($random) != 0)

        {

    	   $random = intval(engrave_roderno_max()) + 1;

        }

	}

	else 

	{

		//待五成

		$random = $right.$date;

	}



    

	$submit_order['order_no'] = $random;

	//运单编号

	$submit_order['order_waybillno'] = '';

	//订单时间

	$submit_order['order_time'] = gmtime();

	//该订单的用户

	$submit_order['order_userid'] = intval($_SESSION['user_id']);

	//备注说明

	$submit_order['order_note'] = isset($_REQUEST['description']) ? trim($_REQUEST['description']) : "";

	//订单线路

	$submit_order['order_shippingid'] = isset($_REQUEST['shipping']) ? intval($_REQUEST['shipping']) : 0;

	//包装标记

	$submit_order['order_remark'] = isset($_REQUEST['addinformation']) ? trim($_REQUEST['addinformation']) : '';

	//收货人ID

	$submit_order['order_buyerid'] = isset($_REQUEST['tb1_delivery_address']) ? intval($_REQUEST['tb1_delivery_address']) : 0;

	//需要加固的散件数量

	$submit_order['order_fixed'] = isset($_REQUEST['UpgradePackage']) ? intval($_REQUEST['UpgradePackage']) : 0;

	//分箱数量

	$submit_order['order_boxquantity'] = $boxquantity;

	//支付方式

	$submit_order['order_paymentid'] = $orderflowpath;

	//支付状态 --默认在提交订单为已支付

	if($orderflowpath == 0)

	{

	   $submit_order['order_paymentstatus'] = '1';

	   $submit_order['order_paymentpath'] = '0';

	}

	else

	{

		$submit_order['order_paymentstatus'] = '0';

		$submit_order['order_paymentpath'] = isset($_REQUEST['payment']) ? intval($_REQUEST['payment']) : 2;

	}

	//退款状态--默认为未退款

	$submit_order['order_refundstatus'] = '0';

	//获取订单的总重量

	$submit_order['order_weight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;

	//获取订单的扣款重量   默认为总重量

	$submit_order['order_deductweight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;

	//获取订单的总长度

	$submit_order['order_sizelength'] = isset($_REQUEST['pck_totallength']) ? doubleval($_REQUEST['pck_totallength']) : 0.00;

	//获取订单的总宽度

	$submit_order['order_sizewidth'] = isset($_REQUEST['pck_totalwidth']) ? doubleval($_REQUEST['pck_totalwidth']) : 0.00;

	//获取订单的总高度

	$submit_order['order_sizeheight'] = isset($_REQUEST['pck_totalheight']) ? doubleval($_REQUEST['pck_totalheight']) : 0.00;

	//保险费用

	$submit_order['order_insurace'] = isset($_REQUEST['pck_insurancecost']) ? doubleval($_REQUEST['pck_insurancecost']) : 0.00;

	//其他操作费用

	$submit_order['order_othercost'] = isset($_REQUEST['pck_operatorcost']) ? doubleval($_REQUEST['pck_operatorcost']) : 0.00;

	//关税

	$submit_order['order_tariffcost'] = isset($_REQUEST['pck_tariffcost']) ? doubleval($_REQUEST['pck_tariffcost']) : 0.00;

	//增值服务费用

	$submit_order['order_valueservicecost'] = isset($_REQUEST['pck_valueservicecost']) ? doubleval($_REQUEST['pck_valueservicecost']) : 0.00;

	//运单费用

	$submit_order['order_waybillcost'] = isset($_REQUEST['pck_waybillcost']) ? doubleval($_REQUEST['pck_waybillcost']) : 0.00;

	//运单折扣费用

	$submit_order['order_discountcost'] = isset($_REQUEST['discount_waybillcost']) ? doubleval($_REQUEST['discount_waybillcost']) : 0.00;

	//仓储费

	$submit_order['order_warehousecost'] = isset($_REQUEST['pck_warehousecost']) ? doubleval($_REQUEST['pck_warehousecost']) : 0.00;

	//本次消费的积分

	$submit_order['order_userpoints'] = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;

	//是否有外箱缠绕膜

	$submit_order['order_isoutbox'] = isset($_REQUEST['oustsidebrane']) ? intval($_REQUEST['oustsidebrane']) : 0;

	//是否需要发票----默认是没有发票表示：0

	$submit_order['order_needinvoice'] = '0';

	//该运单是否发货 ----默认为未发货：0

	$submit_order['order_isdelivery'] = '0';

	//该订单默认为未关闭状态 ---- 1：已关闭  0：未关闭

	$submit_order['order_iscolsed'] = '0';

	//打印状态----0表示为打印 1表示以打印

	$submit_order['order_printstatus'] = '0';

	//是否删除

	$submit_order['order_isdelete'] = '0';

	//获得添加了几个运单

	$waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;

	$applyprice = 0.00;

	for($i=0;$i<$waybill_number;$i++)

	{	

		$tb_applyprice = "tb".($i+1)."_applyprice";

		$applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;

	}

	//物品的价格--所申报的价格

	$submit_order['order_goodsprice'] = $applyprice;

	//费用的总价格

	$pck_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;

	//使用积分支付抵消的金额

	$points_paymentcost = isset($_REQUEST['pointspaymentcost']) ? doubleval($_REQUEST['pointspaymentcost']) : 0.00;

	//货币转换汇率

	$exchange_rate = isset($_REQUEST['exchangerate']) ? doubleval($_REQUEST['exchangerate']) : 1;

	//总价格--需要支付的价格

	$submit_order['order_totalprice'] = ($pck_totalcost) / $exchange_rate - $points_paymentcost;
	$con=mysql_connect($engrave_db_host,$engrave_db_user,$engrave_db_pass) or die("Unable to connect to the MySQL!");
$db = mysql_select_db($engrave_db_name,$con);
 $GLOBALS['engrave_db'] -> query("update ecs_users set user_money  = user_money-'".$submit_order['order_totalprice']."' where user_id = '".$_SESSION['user_id']."'");
	//添加订单

	$result_order = order_insert($submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);

    //导航

	$smarty->assign('menu_here',$_LANG['member']['member_account']);



	//发送订单提示短信 

	//$email = get_orederuser_email(intval($_SESSION['user_id']));

	//$userName = get_orederuser_name(intval($_SESSION['user_id']));

//	send_submit_order($submit_order['order_no'],$userName,$email);

	//跳转信息

	$link[0]['text'] = $GLOBALS['_LANG']['return_order'];

	$link[0]['href'] = 'member.php?act=21';

	sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);

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

/*当前订单*/

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

	$user_isperfect = isset($user['user_isperfect']) ? intval($user['user_isperfect']) : 0;

	if($user_isperfect==0)

	{

		//获取国家

		$area_country_option = engrave_area_option(0,0);

		$smarty->assign('area_country_option',$area_country_option);

		//操作：添加

		$smarty->assign('operate','insert');

	}

	else {

		//配送地区

		$area_country_option = engrave_area_option(0,$user['user_country']);

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

	echo json_encode($packagegoods_list);

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

function order_insert($submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name)

{

	$submit_order['order_paymenttype'] = isset($_POST['user_account']) ? trim($_POST['user_account']) : '';

	$submit_order['order_coupon'] = isset($_POST['coupon']) ? trim($_POST['coupon']) : '';

	//跳转信息

	$link[0]['text'] = $GLOBALS['_LANG']['return_order'];

	$link[0]['href'] = 'member.php?act=21';

	

	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID

	$users = engrave_users($user_id);
$con=mysql_connect($engrave_db_host,$engrave_db_user,$engrave_db_pass) or die("Unable to connect to the MySQL!");
$db = mysql_select_db($engrave_db_name,$con);
mysql_query("SET NAMES 'utf8'");

@$sql="insert into engrave_order(order_modelid,order_no,order_waybillno,order_time,order_userid,order_buyerid,order_note,order_remark,order_shippingid,order_servicetype,order_fixed,order_boxquantity,order_paymentid,order_paymentpath,order_paymentstatus,order_refundstatus,order_totalprice,order_goodsprice,order_weight,order_deductweight,order_sizelength,order_sizewidth,order_sizeheight,order_insurace,order_othercost,order_tariffcost,order_valueservicecost,order_waybillcost,order_discountcost,order_warehousecost,order_userpoints,order_isoutbox,order_needinvoice,order_isdelivery,order_iscolsed,order_printstatus,order_isdelete,order_paymenttype,order_coupon) values('".$submit_order['order_modelid']."','".$submit_order['order_no']."','".$submit_order['order_waybillno']."','".$submit_order['order_time']."','".$submit_order['order_userid']."','".$submit_order['order_buyerid']."','".$submit_order['order_note']."','".$submit_order['order_remark']."','".$submit_order['order_shippingid']."','".$submit_order['order_servicetype']."','".$submit_order[',order_fixed']."','".$submit_order['order_boxquantity']."','".$submit_order['order_paymentid']."','".$submit_order['order_paymentpath']."','".$submit_order['order_paymentstatus']."','".$submit_order['order_refundstatus']."','".$submit_order['order_totalprice']."','".$submit_order['order_goodsprice']."','".$submit_order['order_weight']."','".$submit_order['order_deductweight']."','".$submit_order['order_sizelength']."','".$submit_order['order_sizewidth']."','".$submit_order['order_sizeheight']."','".$submit_order['order_insurace']."','".$submit_order['order_othercost']."','".$submit_order['order_tariffcost']."','".$submit_order['order_valueservicecost']."','".$submit_order['order_waybillcost']."','".$submit_order['order_discountcost']."','".$submit_order['order_warehousecost']."','".$submit_order['order_userpoints']."','".$submit_order['order_isoutbox']."','".$submit_order['order_needinvoice']."','".$submit_order['order_isdelivery']."','".$submit_order['order_iscolsed']."','".$submit_order['order_printstatus']."','".$submit_order['order_isdelete']."','".$submit_order['order_paymenttype']."','".$submit_order['order_coupon']."')";


	mysql_query($sql,$con);

	

	/*开始事务*/

	//优惠券

	$isuse_coupon = isset($_POST['isuse_coupon']) ? intval($_POST['isuse_coupon']) : 0;

	//称重后自动结算 

	if($submit_order['order_paymentpath']==2)

	{

		if($isuse_coupon!=0)

		{

			$result = engrave_coupon_used($user_id,$submit_order['order_coupon'],$conn);

			if($result===false)

			{

				order_cancel_failed($conn);

				//添加失败

				sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

				return;

			}

		}else{

			$submit_order['sn'] = '';

		}

	}

	//手动确认支付

	else{

		$submit_order['sn'] = '';

	}

	//添加订单

	


	$result = mysql_query('select @identity as identity;');



	if($result!==false)

	{

		$array = mysql_fetch_assoc($result);

	}else

	{

		order_cancel_failed($conn);

		//添加失败

		sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

		return;

	}

	foreach ($array as $key=>$val)

	{

		///TODO:修改['identity']

		$result=$val;

	}

	if($result==null || $result=='')

	{

		order_cancel_failed($con);

		//添加失败

	sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);
		return;

	}

	//添加订单日志

	$user_name=$users["user_name"];

	$orderlog['ol_userid']=$user_id;

	$orderlog['ol_username']=$user_name;

	$orderlog['ol_info']=$user_name.' 在线提交包裹订单，生成订单号为：'.

	$submit_order['order_no'].'(ID:'.$result.')，当前状态为：未处理（费用核算中）';

	$orderlog['ol_code']='ORDERCREATE';

	$orderlog['ol_orderid'] = $result;

	$orderlog['ol_ipaddress'] = real_ip();

	

	if(!engrave_orderlog_insert($orderlog,$con))

	{

		order_cancel_failed($con);

		//添加失败

		sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);

		return;

	}

	

	//获得添加了几个运单

	$waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;

	for($i=0;$i<$waybill_number;$i++)

	{

		//运单编号：1502010001-1 

		$ordw_orderno = $submit_order['order_no'].'-'.($i+1);

		//收货人Id

		$ordw_consigid = isset($_REQUEST['tb'.($i+1).'_delivery_address']) ? intval($_REQUEST['tb'.($i+1).'_delivery_address']) : 0;

		//申报价值

		$ordw_applyprice = isset($_REQUEST['tb'.($i+1).'_applyprice']) ? doubleval($_REQUEST['tb'.($i+1).'_applyprice']) : 0.00;	

		if($submit_order['order_boxquantity'] != 0)

		{

			//物品重量

			$ordw_goodweight = round(doubleval($submit_order['order_weight']) / intval($submit_order['order_boxquantity']),2);

			//默认的物品扣款重量

			$ordw_deductweight = round(doubleval($submit_order['order_deductweight']) / intval($submit_order['order_boxquantity']),2);

			//运单包裹的长度

			$ordw_sizelength = round(doubleval($submit_order['order_sizelength']) / intval($submit_order['order_boxquantity']),2);

			//运单包裹的宽度

			$ordw_sizewidth = round(doubleval($submit_order['order_sizewidth']) / intval($submit_order['order_boxquantity']),2);

			//运单包裹的高度

			$ordw_sizeheight = round(doubleval($submit_order['order_sizeheight']) / intval($submit_order['order_boxquantity']),2);

			//包裹的运费

			$ordw_waybillcost = round(doubleval($submit_order['order_waybillcost']) / intval($submit_order['order_boxquantity']),2);

		}

		else

		{

			//重量

			$ordw_goodweight = $submit_order['order_weight'];

			//扣款重量

			$ordw_deductweight = $submit_order['order_deductweight'];

			//包裹长度

			$ordw_sizelength = $submit_order['order_sizelength'];

			//包裹宽度

			$ordw_sizewidth = $submit_order['order_sizewidth'];

			//包裹高度

			$ordw_sizeheight = $submit_order['order_sizeheight'];

			//包裹运费

			$ordw_waybillcost = $submit_order['order_waybillcost'];

		}

		//是否需要保险ordw_insurprice

		$ordw_isinsurance = isset($_REQUEST['tb'.($i+1).'_insurance']) ? intval($_REQUEST['tb'.($i+1).'_insurance']) : 0;

		//保险费用

		$ordw_insurprice = 0.00;

		if($ordw_isinsurance!=0)

		{

			$ordw_insurprice = isset($_REQUEST['tb'.($i+1).'_hidinsurancecost']) ? doubleval($_REQUEST['tb'.($i

		+1).'_hidinsurancecost']) : 0.00;

		}

		else

		{

			$ordw_insurprice == '0.00';

		}

		//关税

		$ordw_tariff = isset($_REQUEST['tb'.($i+1).'_hidtariff']) ? doubleval($_REQUEST['tb'.($i+1).'_hidtariff']) : 0.00;

		//运单删除

		$ordw_delete = '0';

	








$sql2="insert into engrave_orderwaybill".

				"(ordw_orderid,ordw_orderno,ordw_consigid,ordw_applyprice,ordw_waybillcost, 	ordw_goodweight,ordw_deductweight,ordw_sizelength,ordw_sizewidth,ordw_sizeheight,ordw_isinsurance,ordw_insurprice,ordw_tariff,ordw_delete) values".

			   	"('".$result."','".$ordw_orderno."','".$ordw_consigid."','".$ordw_applyprice."','".$ordw_waybillcost."','".

			   	$ordw_goodweight."','".$ordw_deductweight."','".$ordw_sizelength."','".$ordw_sizewidth."','".$ordw_sizeheight."','".$ordw_isinsurance."','".$ordw_insurprice."','".$ordw_tariff."','".$ordw_delete."')";

	mysql_query($sql2,$con);















	

	

		if($result_waybill!==false)

		{

			$array = mysql_fetch_assoc($result_waybill);

		}

		else

		{

			order_cancel_failed($con);

			//添加失败

			sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

			return;

		}

		foreach ($array as $key=>$val)

		{

			///TODO:修改$val['identity']

			$result_waybill=$val;

		}

		if($result_waybill == null || $result_waybill =='')

		{

			order_cancel_failed($conn);

			//添加失败

			sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

			return;

		}

		//添加物品

		$goods_number = isset($_REQUEST['tb'.($i+1).'_hidgoodscount']) ? intval($_REQUEST['tb'.($i+1).'_hidgoodscount']) : 0;

		for($j=0;$j<$goods_number;$j++)

		{

			//物品类型

			$ordg_goodtype = isset($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) ? intval($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) : 0;

			//物品名称

			$ordg_goodname = isset($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) ? trim($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) : '';

			//物品数量

			$ordg_goodnumber = isset($_REQUEST['tb'.($i+1).'_num'.($j+1)]) ? intval($_REQUEST['tb'.($i+1).'_num'.($j+1)]) : 0;

			//物品价格

			$ordg_goodprice = isset($_REQUEST['tb'.($i+1).'_price'.($j+1)]) ? doubleval($_REQUEST['tb'.($i+1).'_price'.($j+1)]) : 0.00;

			//删除标记

			$ordg_delete = '0';

			if($ordg_goodtype!=0)

			{

				$sql="insert into engrave_ordergoods".

				"(ordg_waybillid,ordg_goodtype,ordg_goodname,ordg_goodnumber,ordg_goodprice,ordg_delete) values".

			   	"('".$result_waybill."','".$ordg_goodtype."','".$ordg_goodname."','".$ordg_goodnumber."','".$ordg_goodprice."','".

			   	$ordg_delete."')";

				$order_goods=mysql_query($sql,$con);

				if($order_goods===false)

				{

					order_cancel_failed($con);

					//添加失败

				sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);

					return;

				}

			}

		}

	}

	/*

	* --------------------------------------------------

	*    订单提交后未出现异常事物则运单出库，并给相对应的包裹产生订单号

	* --------------------------------------------------

	*/

	$orderno_arr = array();

	$orderno_arr = $_POST['checkboxes'];

	foreach ($orderno_arr as $key=>$value)

	{

		$sql="update ".$GLOBALS['engrave']->table('package').

		"set pck_orderid = '".$result.

		"',pck_packagestatus = '2'".

		" where pck_isdelete=0 AND pck_istrouble = 0 AND pck_expressnumber = '".$value."'";

		$order_package=mysql_query($sql,$conn);

		

		if($order_package===false)

		{

			order_cancel_failed($conn);

			//添加失败

		sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);

			return;

		}

	}

	///TODO:张兴朋--提交增值服务：未选择增值服务

	/*

	 * -------------------------------------------------

	 *                 订单所提交的增值服务

	 * -------------------------------------------------

	 */

	if(isset($_POST['checkboxesprice']))

	{

		$order_service = $_POST['checkboxesprice'];

		foreach ($order_service as $key=>$value)

		{

			$service_id = $value;

			$sql="insert into ".$GLOBALS['engrave']->table('waybillservice').

			     "(ords_orderid,ords_serviceid,ords_isdelete) values".

				 "('".$result."','".$service_id."','0')";

			$orderservice=mysql_query($sql,$conn);

			if($orderservice===false)

			{

				order_cancel_failed($conn);

				//添加失败

				sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

				return;

			}

		}

	}

	/*

	* --------------------------------------------------

	* 

	* --------------------------------------------------

	*/

	if($submit_order['order_paymentid'] == 0)

	{

		$pay_applyprice = 0.00;

		for($i=0;$i<$waybill_number;$i++)

		{

			$tb_applyprice = "tb".($i+1)."_applyprice";

			$pay_applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;

		}

		//费用的总价格

		$pay_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;

		//本次消费的金额

		$pay_momeny = $pay_applyprice;

		//需要支付的金额

		$nedd_momeny = $submit_order['order_totalprice'];

		//本次消费的积分

		$pay_points = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;

		//消费完后剩余金额

		$userMoney = isset($_REQUEST['userMoney']) ? doubleval($_REQUEST['userMoney']) : 0.00;

		$user_momeny = $userMoney - $nedd_momeny;

		//该用户拥有的积分

		$user_points = engrave_pay_points();

		//消费金额和积分兑换比例

		$rate_points = engrave_momeny_points_rate();

		$points = $user_points - $pay_points + round($pay_momeny / $rate_points);

		$sql="update ".$GLOBALS['engrave_shop']->table('users').

		"set user_money = '".$user_momeny.

		"',pay_points = '".$points.

		"' where user_id = '".$_SESSION['user_id']."'";

		$userid=mysql_query($sql,$conn);

		if($userid===false)

		{

			order_cancel_failed($conn);

			//添加失败

			sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);

			return;

		}

	}

	//提交

	mysql_query('COMMIT',$conn);

	mysql_close($conn);

}



/**

 * 订单取消

 * @param unknown $conn

 */

function order_cancel_failed($con)

{

	//添加失败

	mysql_query('ROLLBACK',$con);//回滚

	mysql_close($con);

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

?>
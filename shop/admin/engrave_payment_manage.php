<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_member_manage.php 2014-12-01 21:34:00 zxp $
 */
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_payment_manage.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_payment_manage.php');
$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');
/*------------------------------------------------------ */
//-- 物流系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('payment');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0707_payment_meth'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0708_add_payment'], 'href'=>'engrave_payment_manage.php?act=add'));
    $smarty->assign('full_page',    1);
    $payment_list= engrave_payment_list();
    $smarty->assign('payment_list',   $payment_list['payment_list']);
    $smarty->assign('filter',       $payment_list['filter']);
    $smarty->assign('record_count', $payment_list['record_count']);
    $smarty->assign('page_count',   $payment_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示支付方式页面 */
    assign_query_info();
    $smarty->display('engrave_payment_manage.htm');
}
/*------------------------------------------------------ */
//-- 支付方式列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$payment_list = engrave_payment_list();
	$smarty->assign('payment_list',   $payment_list['payment_list']);
	$smarty->assign('filter',       $payment_list['filter']);
	$smarty->assign('record_count', $payment_list['record_count']);
	$smarty->assign('page_count',   $payment_list['page_count']);
	$sort_flag  = sort_flag($payment_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);
	make_json_result($smarty->fetch('engrave_payment_manage.htm'), '',
	array('filter' => $payment_list['filter'], 'page_count' => $payment_list['page_count']));
}
elseif($_REQUEST['act'] == 'getimgurl')
{
	/* 检查权限 */
	admin_priv('payment');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$interfaceId = !empty($_POST['InterfaceId']) ? intval($_POST['InterfaceId']) : '0';
	$InterfaceLogo = engrave_get_interfacelogo($interfaceId);
	echo $InterfaceLogo;
}
/*------------------------------------------------------ */
//-- 支付方式添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('payment');
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0708_add_payment'];
    $smarty->assign('ur_here', $ur_here);
    //接口类型
    $smarty->assign('interface_list', engrave_interface_list());
    $smarty->assign('action_link',  array('text' => $_LANG['0707_payment_meth'], 'href'=>'engrave_payment_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');
    
    /* 显示支付方式列表页面 */
    assign_query_info();
    $smarty->display('engrave_payment_add.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('payment');
	//获取ID，并根据ID获取对象 赋值给smarty
	$PaymentId=$_REQUEST['id'];
	$payment=engrave_payment($PaymentId);
	$smarty->assign('payment_add', $payment);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0708_add_payment'];
	$smarty->assign('ur_here', $ur_here);
 	//接口类型
 	$smarty->assign('interface_list', engrave_interface_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0707_payment_meth'], 'href'=>'engrave_payment_manage.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);
	/* 显示支付方式列表页面 */
	assign_query_info();
	$smarty->display('engrave_payment_add.htm');
}
/*------------------------------------------------------ */
//-- 支付方式添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('payment');
	//获取数据
	$payment['PaymentName'] = !empty($_POST['paymentname']) ? trim($_POST['paymentname']) : '';
	$payment['InterfaceId'] = !empty($_POST['gateway']) ? intval($_POST['gateway']) : '0';
	$payment['MerchantCode'] = !empty($_POST['MerchantCode']) ? trim($_POST['MerchantCode']) : '';
	$payment['Email'] = !empty($_POST['Email']) ? trim($_POST['Email']) : '';
	$payment['SecretKey'] = !empty($_POST['SecretKey']) ? trim($_POST['SecretKey']) : '';
	$payment['Charge'] = !empty($_POST['Charge']) ? doubleval($_POST['Charge']) : '0.00';
	$payment['IsPercent'] = !empty($_POST['IsPercent']) ? intval($_POST['IsPercent']) : '0';
	$payment['Description'] = !empty($_POST['Description']) ? trim($_POST['Description']) : '';
	$payment['SortId'] = !empty($_POST['SortId']) ? intval($_POST['SortId']) : '0';
	$payment['IsDeletePayment'] = '0';
	if($act=='insert')
	{
		engrave_payment_insert($payment);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_payment'];
		$link[0]['href'] = 'engrave_payment_manage.php?act=add';
		$link[1]['text'] = $_LANG['back_payment_list'];
		$link[1]['href'] = 'engrave_payment_manage.php?act=list';
	}
	elseif($act=='update')
	{
		$paymentId=$_REQUEST['PaymentId'];
		engrave_payment_update($payment,$paymentId);
		$link[0]['text'] = $_LANG['back_payment_list'];
		$link[0]['href'] = 'engrave_payment_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$PaymentId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('payment_remove');
	if (engrave_payment_delete("1", $PaymentId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_payment_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
elseif ($_REQUEST['act'] == 'edit_currecys_name')
{
        make_json_result(stripslashes('dfsafasd'));
}
?>
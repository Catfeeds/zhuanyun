<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_tracking_manage.php 2015年1月14日 15:20:41 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_tracking_manage.php');
/*载入-跟踪管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_tracking_manage.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 货币列表：显示页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('tracking_manage');
	
    $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0209_tracking_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0214_waybill_tracking'], 'href'=>'engrave_tracking_manage.php?act=add'));

    $track_list=engrave_tracking_list();
    $smarty->assign('track_list',   $track_list['track_list']);
    $smarty->assign('filter',       $track_list['filter']);
    $smarty->assign('record_count', $track_list['record_count']);
    $smarty->assign('page_count',   $track_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_tracking_manage.htm');
    
}
elseif($_REQUEST['act'] == 'orderlist')
{
	/* 检查权限 */
	admin_priv('tracking_manage');
	$smarty->assign('full_page',    1);
	
	$order_list= engrave_orderno_list();
	$smarty->assign('order_list',   $order_list['order_list']);	
	$smarty->assign('full_page',    1);
	/* 显示用户组列表页面 */
	assign_query_info();
	$smarty->display('engrave_tracking_orderlist.htm');
}
elseif($_REQUEST['act'] == 'waybillnolist')
{
	/* 检查权限 */
	admin_priv('tracking_manage');
	$smarty->assign('full_page',    1);
	
	$orderId = !empty($_REQUEST['orderid']) ? intval($_REQUEST['orderid']) : '0';
	$waybillno_list= engrave_waybillno_list($orderId);
	$smarty->assign('waybillno_list',   $waybillno_list['waybillno_list']);
	$smarty->assign('full_page',    1);
	/* 显示用户组列表页面 */
	assign_query_info();
	$smarty->display('engrave_tracking_waybillnolist.htm');
}
/*
 * 获取订单号
 */
elseif ($_REQUEST['act'] == 'getOrderNo')
{
	/* 检查权限 */
	admin_priv('issued_coupons');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$OrderId = !empty($_POST['orderid']) ? intval($_POST['orderid']) : '0';
	$orderNo = engrave_get_orderno($OrderId);
	echo $orderNo;
}
/*------------------------------------------------------ */
//-- 跟踪列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$track_list = engrave_tracking_list();
	$smarty->assign('track_list',   $track_list['track_list']);
	$smarty->assign('filter',       $track_list['filter']);
	$smarty->assign('record_count', $track_list['record_count']);
	$smarty->assign('page_count',   $track_list['page_count']);

	$sort_flag  = sort_flag($track_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_tracking_manage.htm'), '',
	array('filter' => $track_list['filter'], 'page_count' => $track_list['page_count']));

}
/*------------------------------------------------------ */
//-- 跟踪管理添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('tracking_manage');
    $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0214_waybill_tracking'];
    $smarty->assign('ur_here', $ur_here);
    $code_list = engrave_code_list();
    $smarty->assign('code_list', $code_list);
    $smarty->assign('action_link',  array('text' => $_LANG['0209_tracking_manage'], 'href'=>'engrave_tracking_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_tracking_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('tracking_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$trackId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$track_info=engrave_tracking($trackId);
	$smarty->assign('track_info', $track_info);
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0216_tracking_edit'];
	$smarty->assign('ur_here', $ur_here);
	$code_list = engrave_code_list();
	$smarty->assign('code_list', $code_list);
	$smarty->assign('action_link',  array('text' => $_LANG['0209_tracking_manage'], 'href'=>'engrave_tracking_manage.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_tracking_info.htm');
}
/*------------------------------------------------------ */
//-- 跟踪管理添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('tracking_manage');
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
	elseif($act=='update')
	{
		$TrackId=!empty($_POST['hidtrid']) ? intval($_POST['hidtrid']) : '0';
		engrave_tracking_update($track_info,$TrackId);
		$link[0]['text'] = $_LANG['back_tracking_list'];
		$link[0]['href'] = 'engrave_tracking_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 跟踪管理删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$TrackId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('tracking_remove');

	if (engrave_tracking_delete("1", $TrackId))
	{
		$url = 'engrave_tracking_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
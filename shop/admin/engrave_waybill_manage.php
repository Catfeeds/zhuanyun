<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_waybill_manage.php 2015年1月15日 16:24:22 zxp $
 */
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_waybill_manage.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_tracking_manage.php');
/*载入-运单管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_waybill_manage.php');
$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 运单管理：显示页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('waybill_manage');
	
    $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0213_waybill_manage'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_waybill_manage_tip'])?'':$_LANG['engrave_waybill_manage_tip'];
    $smarty->assign('ur_tip', $ur_tip);

    $waybill_list=engrave_waybill_order_list();
    $smarty->assign('waybill_list',   $waybill_list['waybill_list']);
    $smarty->assign('filter',       $waybill_list['filter']);
    $smarty->assign('record_count', $waybill_list['record_count']);
    $smarty->assign('page_count',   $waybill_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_waybill_manage.htm');
    
}
/*------------------------------------------------------ */
//-- 跟踪列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$waybill_list = engrave_waybill_order_list();
	$smarty->assign('waybill_list',   $waybill_list['waybill_list']);
	$smarty->assign('filter',       $waybill_list['filter']);
	$smarty->assign('record_count', $waybill_list['record_count']);
	$smarty->assign('page_count',   $waybill_list['page_count']);

	$sort_flag  = sort_flag($waybill_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_waybill_manage.htm'), '',
	array('filter' => $waybill_list['filter'], 'page_count' => $waybill_list['page_count']));

}
elseif($_REQUEST['act'] == 'waybill_add')
{
	/* 检查权限 */
	admin_priv('waybill_manage');
	$order_id = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
	$WaybillId = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) : '0';
	$order_no = !empty($_REQUEST['order_no']) ? trim($_REQUEST['order_no']) : '';
	$ordw_waybillno = !empty($_REQUEST['ordw_waybillno']) ? trim($_REQUEST['ordw_waybillno']) : '';
	$smarty->assign('order_no',$order_no);
	$smarty->assign('ordw_waybillno',$ordw_waybillno);
	$smarty->assign('orderid',$order_id);
	$code_list = engrave_waybillcode_list();
	$smarty->assign('code_list', $code_list);
	$smarty->assign('form_action', 'insert');
	assign_query_info();
	$smarty->display('engrave_waybill_tracking_info.htm');
}
/*
 * 跟踪管理添加页面-添加
 */
elseif ($_REQUEST['act'] == 'insert')
{
	$track_info['tr_orderid'] = !empty($_POST['hidOrderId']) ? intval($_POST['hidOrderId']) : '0';
	$track_info['tr_expressnumber'] = !empty($_POST['hidwaybillno']) ? trim($_POST['hidwaybillno']) : '';
	$track_info['tr_message'] = !empty($_POST['Message']) ? trim($_POST['Message']) : '';
	$track_info['tr_statuscode'] = !empty($_POST['StatusCode']) ? intval($_POST['StatusCode']) : '0';
	$track_info['tr_intime'] = gmtime();
	$track_info['tr_operatorid'] = $_SESSION[admin_id];
	$track_info['tr_isdelete'] = '0';
	engrave_waybill_tracking_insert($track_info);
    //页面跳转
	$link[0]['text'] = $_LANG['back_tracking_list'];
	$link[0]['href'] = 'engrave_tracking_manage.php?act=list';
}
// /*------------------------------------------------------ */
// //-- 跟踪管理添加页面-添加
// /*------------------------------------------------------ */
// elseif($_REQUEST['act'] == 'add')
// {
//     /* 检查权限 */
//     admin_priv('tracking_manage');
//     $ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0214_waybill_tracking'];
//     $smarty->assign('ur_here', $ur_here);
//     $code_list = engrave_code_list();
//     $smarty->assign('code_list', $code_list);
//     $smarty->assign('action_link',  array('text' => $_LANG['0209_tracking_manage'], 'href'=>'engrave_tracking_manage.php?act=list'));
//     $smarty->assign('form_action', 'insert');
//     /* 显示商品列表页面 */
//     assign_query_info();
//     $smarty->display('engrave_tracking_info.htm');
// }
// elseif($_REQUEST['act']=='edit')
// {
// 	/* 检查权限 */
// 	admin_priv('tracking_manage');

// 	//获取ID，并根据ID获取对象 赋值给smarty
// 	$trackId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
// 	$track_info=engrave_tracking($trackId);
// 	$smarty->assign('track_info', $track_info);
// 	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0216_tracking_edit'];
// 	$smarty->assign('ur_here', $ur_here);
// 	$code_list = engrave_code_list();
// 	$smarty->assign('code_list', $code_list);
// 	$smarty->assign('action_link',  array('text' => $_LANG['0209_tracking_manage'], 'href'=>'engrave_tracking_manage.php?act=list'));
// 	$smarty->assign('form_action','update');
// 	$smarty->assign('full_page',    1);

// 	/* 显示商品列表页面 */
// 	assign_query_info();
// 	$smarty->display('engrave_tracking_info.htm');
// }
// /*------------------------------------------------------ */
// //-- 跟踪管理添加-数据操作
// /*------------------------------------------------------ */
// elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
// {
// 	$act=$_REQUEST['act'];
// 	/* 检查权限 */
// 	admin_priv('tracking_manage');
// 	//获取数据
// 	$track_info['tr_orderid'] = !empty($_POST['hidOrderId']) ? intval($_POST['hidOrderId']) : '0';
// 	$track_info['tr_expressnumber'] = !empty($_POST['PackageNo']) ? trim($_POST['PackageNo']) : '';
// 	$track_info['tr_message'] = !empty($_POST['Message']) ? trim($_POST['Message']) : '';
// 	$track_info['tr_statuscode'] = !empty($_POST['StatusCode']) ? intval($_POST['StatusCode']) : '0';
// 	$track_info['tr_intime'] = gmtime();
// 	$track_info['tr_operatorid'] = $_SESSION[admin_id];
// 	$track_info['tr_isdelete'] = '0';

// 	if($act=='insert')
// 	{
// 		engrave_tracking_insert($track_info);
// 		//页面跳转
// 		$link[0]['text'] = $_LANG['back_tracking_list'];
// 		$link[0]['href'] = 'engrave_tracking_manage.php?act=list';
// 	}
// 	elseif($act=='update')
// 	{
// 		$TrackId=!empty($_POST['hidtrid']) ? intval($_POST['hidtrid']) : '0';
// 		engrave_tracking_update($track_info,$TrackId);
// 		$link[0]['text'] = $_LANG['back_tracking_list'];
// 		$link[0]['href'] = 'engrave_tracking_manage.php?act=list';
// 	}
// 	sys_msg($_LANG['save_success'], 0, $link);
// }
/*------------------------------------------------------ */
//-- 跟踪管理删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$waybillid= !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('waybill_remove');

	if (engrave_waybill_tracking_delete("1", $waybillid))
	{
		$url = 'engrave_waybill_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_value_services.php 2014-12-14 21:34:00 zxp $
 */
define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_waybill_module.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_waybill_module.php');
$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 运单模版
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('waybill_module');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0715_waybill_module'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0716_module_add'], 'href'=>'engrave_waybill_module.php?act=add'));

    $smarty->assign('full_page',    1);

    $template_list= engrave_template_list();
    $smarty->assign('template_list',   $template_list['template_list']);
    $smarty->assign('filter',       $template_list['filter']);
    $smarty->assign('record_count', $template_list['record_count']);
    $smarty->assign('page_count',   $template_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_waybill_module.htm');
}
/*------------------------------------------------------ */
//-- 运单模版列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$template_list= engrave_template_list();
	$smarty->assign('template_list',   $template_list['template_list']);
	$smarty->assign('filter',       $template_list['filter']);
	$smarty->assign('record_count', $template_list['record_count']);
	$smarty->assign('page_count',   $template_list['page_count']);
	$sort_flag  = sort_flag($template_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);
	make_json_result($smarty->fetch('engrave_waybill_module.htm'), '',
	array('filter' => $template_list['filter'], 'page_count' => $template_list['page_count']));
}
/*------------------------------------------------------ */
//--  运单模版添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('waybill_module');
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0716_module_add'];

    $smarty->assign('left_delimiter', '{');
    $smarty->assign('right_delimiter', '}');
    
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0715_waybill_module'], 'href'=>'engrave_waybill_module.php?act=list'));
    $smarty->assign('form_action', 'insert'); 
    /*模板内容*/
    
//     $out_html = $smarty->fetch('engrave_print_parcel.htm');//engrave_print_parcel engrave_print_orders
//     $smarty->assign('out_html', $out_html); 
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_waybill_module_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('waybill_module');

	//获取ID，并根据ID获取对象 赋值给smarty
	$temp_id= $_REQUEST['id'];
	$template = engrave_template_byid($temp_id);
	$smarty->assign('template', $template);
	
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0716_module_add'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0715_waybill_module'], 'href'=>'engrave_waybill_module.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_waybill_module_info.htm');
}
/*------------------------------------------------------ */
//-- 合作物流添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('waybill_module');
	
	//获取数据
	$template['temp_name'] = !empty($_POST['temp_name']) ? trim($_POST['temp_name']) : '';
	$template['temp_content'] = !empty($_POST['temp_content']) ? trim($_POST['temp_content']) : '';
	$template['temp_delete'] = '0';

	if($act=='insert')
	{
		engrave_template_insert($template);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_waybill_module'];
		$link[0]['href'] = 'engrave_waybill_module.php?act=add';
		$link[1]['text'] = $_LANG['back_waybill_module_list'];
		$link[1]['href'] = 'engrave_waybill_module.php?act=list';
	}
	elseif($act=='update')
	{
		$logisticsId=$_REQUEST['LogisticsId'];
		engrave_logistics_update($logistics,$logisticsId);
		$link[0]['text'] = $_LANG['back_waybill_module_list'];
		$link[0]['href'] = 'engrave_waybill_module.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 面单模板删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$temp_id = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('module_remove');
	if (engrave_template_remove($temp_id))
	{
		$url = 'engrave_waybill_module.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}else{
		make_json_error($GLOBALS['_LANG']['remove_failed']);
	}
}

?>
<?php 
/**
 * ENGRAVE 阶梯价格分组
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址:
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_shipping_laddervalue_laddervalue.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_shipping_laddervalue_group.php');
/*载入-线路管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping_laddervalue_group.php');


/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
	/* 检查权限 */
	admin_priv('shipping');

	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0729_shipping_price_group'];
	$smarty->assign('ur_here', $ur_here);
    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : "";
    
	$smarty->assign('action_link',  array('text' => $_LANG['add_shipping_price_group'], 'href'=>'engrave_shipping_laddervalue_group.php?act=add'));

	$shipping_ladderprice_group_list= engrave_shipping_laddervalue_group_list();
	$smarty->assign('shipping_ladderprice_group_list',   $shipping_ladderprice_group_list['shipping_ladderprice_group_list']);
	$smarty->assign('filter',       $shipping_ladderprice_group_list['filter']);
	$smarty->assign('record_count', $shipping_ladderprice_group_list['record_count']);
	$smarty->assign('page_count',   $shipping_ladderprice_group_list['page_count']);

	$smarty->assign('full_page',    1);

	/* 显示线路管理页面 */
	assign_query_info();
	$smarty->display('engrave_shipping_laddervalue_group_list.htm');
}
/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组 query
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$shipping_ladderprice_group_list= engrave_shipping_laddervalue_group_list();
	$smarty->assign('shipping_ladderprice_group_list',   $shipping_ladderprice_group_list['shipping_ladderprice_group_list']);
	$smarty->assign('filter',       $shipping_ladderprice_group_list['filter']);
	$smarty->assign('record_count', $shipping_ladderprice_group_list['record_count']);
	$smarty->assign('page_count',   $shipping_ladderprice_group_list['page_count']);

	$sort_flag  = sort_flag($shipping_ladderprice_group_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	//make_json_result($smarty->fetch('engrave_shipping_laddervalue_group_list.htm'), '');

	make_json_result($smarty->fetch('engrave_shipping_laddervalue_group_list.htm'), '',
	array('filter' => $shipping_ladderprice_group_list['filter'], 'page_count' => $shipping_ladderprice_group_list['page_count']));
}
/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组 添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('shipping');

    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['add_shipping_price_group'];
    $smarty->assign('action_link',  array('text' => $_LANG['list_shipping_price_group'], 'href'=>'engrave_shipping_laddervalue_group.php?act=list'));
    $smarty->assign('ur_here', $ur_here);
    
    /* 显示页面 */
    $smarty->assign('form_action', 'insert');
	$smarty->assign('full_page',    1);
    assign_query_info();
    $smarty->display('engrave_shipping_laddervalue_group_info.htm');
}
/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组 编辑
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
    admin_priv('shipping');

    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['add_shipping_price_group'];
    $smarty->assign('action_link',  array('text' => $_LANG['list_shipping_price_group'], 'href'=>'engrave_shipping_laddervalue_group.php?act=list'));
    $smarty->assign('ur_here', $ur_here);
    
    //根据ID获取分区信息
    $slpg_id = isset($_REQUEST['slpg_id']) ? intval($_REQUEST['slpg_id']) : 0;
    $shipping_laddervalue_group = engrave_shipping_laddervalue_group_byid($slpg_id);
    $smarty->assign('shipping_laddervalue_group', $shipping_laddervalue_group);
	/* 显示页面 */
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);
	assign_query_info();
	$smarty->display('engrave_shipping_laddervalue_group_info.htm');
}
/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组 数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('shipping');
	//获取数据
	$shipping['slpg_id'] = !empty($_POST['slpg_id']) ? intval($_POST['slpg_id']) : '0';
	$shipping['slpg_name'] = !empty($_POST['slpg_name']) ? trim($_POST['slpg_name']) : '';
	$shipping['slpg_des'] = !empty($_POST['slpg_des']) ? trim($_POST['slpg_des']) : '';
	$shipping['slpg_isdelete'] = '0';

	$link[0]['text'] = $_LANG['back_shipping_laddervalue_group_list'];
	$link[0]['href'] = 'engrave_shipping_laddervalue_group.php?act=list';
	if($act=='insert')
	{
		if(engrave_shipping_laddervalue_group_insert($shipping))
		{
			//页面跳转
			sys_msg($_LANG['save_success'], 0, $link);
		}
		else{
			//页面跳转
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
	elseif($act=='update')
	{
		if(engrave_shipping_laddervalue_group_update($shipping))
		{
			sys_msg($_LANG['save_success'], 0, $link);
		}else {
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
}
/*------------------------------------------------------ */
//-- 线路管理-阶梯价格 分组 删除
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$slp_id = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('shipping_remove');
	
	if (engrave_shipping_laddervalue_group_delete($slp_id))
	{
		//根据删除的ID，获取线路ID
		$url = 'engrave_shipping_laddervalue_group.php?act=query&'. str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}else{
		make_json_error($_LANG['remove_failed']);
	}
}
?>
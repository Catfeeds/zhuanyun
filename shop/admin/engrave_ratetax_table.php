<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_all_orders.php 2014-11-17 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_ratetax_table.php');
/*载入-税率表-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_ratetax_table.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 货币列表：显示页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('ratetax_table');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0724_ratetax_table'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0725_add_ratetax_table'], 'href'=>'engrave_ratetax_table.php?act=add'));

    $rate_list = engrave_rate_list();
    $smarty->assign('rate_list',   $rate_list['rate_list']);
    $smarty->assign('filter',       $rate_list['filter']);
    $smarty->assign('record_count', $rate_list['record_count']);
    $smarty->assign('page_count',   $rate_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_ratetax_table.htm');
    
}
/*------------------------------------------------------ */
//-- 税率表列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$rate_list = engrave_rate_list();
	$smarty->assign('rate_list',   $rate_list['rate_list']);
	$smarty->assign('filter',       $rate_list['filter']);
	$smarty->assign('record_count', $rate_list['record_count']);
	$smarty->assign('page_count',   $rate_list['page_count']);

	$sort_flag  = sort_flag($rate_list['filter']);

	make_json_result($smarty->fetch('engrave_ratetax_table.htm'), '',
	array('filter' => $rate_list['filter'], 'page_count' => $rate_list['page_count']));

}
/*------------------------------------------------------ */
//-- 税率表添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('ratetax_table');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0725_add_ratetax_table'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0724_ratetax_table'], 'href'=>'engrave_ratetax_table.php?act=list'));
    $smarty->assign('form_action', 'insert');
    
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_ratetax_table_add.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('ratetax_table');

	//获取ID，并根据ID获取对象 赋值给smarty
	$RateId=$_REQUEST['id'];
	$rate=engrave_rate($RateId);
	$smarty->assign('rate', $rate);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0726_edit_ratetax_table'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0724_ratetax_table'], 'href'=>'engrave_ratetax_table.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_ratetax_table_add.htm');
}
/*------------------------------------------------------ */
//-- 充值卡添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('ratetax_table');
	//获取数据
	$rate['rate_name'] = !empty($_POST['RateName']) ? trim($_POST['RateName']) : '';
	$rate['rate_no'] = !empty($_POST['RateNo']) ? trim($_POST['RateNo']) : '';
	$rate['rate_description'] = !empty($_POST['RateDescription']) ? trim($_POST['RateDescription']) : '';
	$rate['rate_tax'] = !empty($_POST['RateTax']) ? doubleval($_POST['RateTax']) : '0.00';
	$rate['rate_delete'] = '0';

	if($act=='insert')
	{
		engrave_rate_insert($rate);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_rate'];
		$link[0]['href'] = 'engrave_ratetax_table.php?act=add';
		$link[1]['text'] = $_LANG['back_rate_list'];
		$link[1]['href'] = 'engrave_ratetax_table.php?act=list';
	}
	elseif($act=='update')
	{
		$rateId=$_REQUEST['id'];
		engrave_rate_update($rate,$rateId);
		$link[0]['text'] = $_LANG['back_rate_list'];
		$link[0]['href'] = 'engrave_ratetax_table.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 汇率表删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$RateId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('ratetax_remove');

	if (engrave_rate_delete("1", $RateId))
	{
		$url = 'engrave_ratetax_table.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
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
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_money_manage.php');
/*载入-货币管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_money_manage.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 货币列表：显示页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('money_manage');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0701_money_manage'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_money_manage_tip'])?'':$_LANG['engrave_money_manage_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    //$smarty->assign('action_link',  array('text' => $_LANG['0702_add_money'], 'href'=>'engrave_money_manage.php?act=add'));

    $currecy_list=engrave_currecy_paging_list();
    $smarty->assign('currecy_list',   $currecy_list['currecy_list']);
    $smarty->assign('filter',       $currecy_list['filter']);
    $smarty->assign('record_count', $currecy_list['record_count']);
    $smarty->assign('page_count',   $currecy_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_money_manage.htm');
    
}
/*------------------------------------------------------ */
//-- 货币列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$currecy_list = engrave_currecy_paging_list();
	$smarty->assign('currecy_list',   $currecy_list['currecy_list']);
	$smarty->assign('filter',       $currecy_list['filter']);
	$smarty->assign('record_count', $currecy_list['record_count']);
	$smarty->assign('page_count',   $currecy_list['page_count']);

	$sort_flag  = sort_flag($currecy_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_money_manage.htm'), '',
	array('filter' => $currecy_list['filter'], 'page_count' => $currecy_list['page_count']));

}
/*------------------------------------------------------ */
//-- 货币添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('money_manage');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0702_add_money'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_money_add_tip'])?'':$_LANG['engrave_money_add_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    $smarty->assign('action_link',  array('text' => $_LANG['0701_money_manage'], 'href'=>'engrave_money_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');
    
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_money_add.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('money_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$CurrencyId=$_REQUEST['id'];
	$currecy=engrave_currecy($CurrencyId);
	$smarty->assign('currecy', $currecy);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0702_add_money'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_money_add_tip'])?'':$_LANG['engrave_money_add_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	$smarty->assign('action_link',  array('text' => $_LANG['0701_money_manage'], 'href'=>'engrave_money_manage.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_money_add.htm');
}
elseif($_REQUEST['act'] == 'getisdefault')
{
	$currency_list = engrave_isdefault_list();
	echo json_encode($currency_list);
}
/*------------------------------------------------------ */
//-- 充值卡添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('money_manage');
	//获取数据
	$currecys['Name'] = !empty($_POST['Name']) ? trim($_POST['Name']) : '';
	$currecys['Code'] = !empty($_POST['Code']) ? trim($_POST['Code']) : '';
	$currecys['Symbol'] = !empty($_POST['Symbol']) ? trim($_POST['Symbol']) : '';
	$currecys['ExchageRate'] = !empty($_POST['ExchageRate']) ? doubleval($_POST['ExchageRate']) : '0.00';
	$currecys['IsDefault'] = !empty($_POST['IsDefault']) ? intval($_POST['IsDefault']) : '0';
	$currecys['IsDeleteCurrecy'] = '0';

	if($act=='insert')
	{
		engrave_currecy_insert($currecys);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_currecy'];
		$link[0]['href'] = 'engrave_money_manage.php?act=add';
		$link[1]['text'] = $_LANG['back_currecy_list'];
		$link[1]['href'] = 'engrave_money_manage.php?act=list';
	}
	elseif($act=='update')
	{
		$currecyId=$_REQUEST['id'];
		engrave_currecy_update($currecys,$currecyId);
		$link[0]['text'] = $_LANG['back_currecy_list'];
		$link[0]['href'] = 'engrave_money_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$CId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('money_remove');

	if (engrave_currecy_delete("1", $CId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_money_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
?>
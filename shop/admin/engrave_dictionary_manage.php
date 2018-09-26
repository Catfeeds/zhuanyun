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
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_dictionary_manage.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_dictionary_manage.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 物流系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('dictionary_manage');
	
    
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0717_dictionary_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0718_dictionary_add'], 'href'=>'engrave_dictionary_manage.php?act=add'));

    $smarty->assign('full_page',    1);

    $dictionary_list= engrave_dictionary_list();
    $smarty->assign('dictionary_list',   $dictionary_list['dictionary_list']);
    $smarty->assign('filter',       $dictionary_list['filter']);
    $smarty->assign('record_count', $dictionary_list['record_count']);
    $smarty->assign('page_count',   $dictionary_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_dictionary_manage.htm');
}
if($_REQUEST['act'] == 'grouplist')
{
	/* 检查权限 */
	admin_priv('dictionary_manage');
	
	//获取ID，并根据ID获取对象 赋值给smarty
	$GroupId=$_REQUEST['id'];
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0719_dictionary_group_manage'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0720_dictionary_group_add'], 'href'=>'engrave_dictionary_manage.php?act=addgroup'));
	
	$smarty->assign('full_page',    1);
	
	$dictionary_group_list= engrave_dictionary_group_list($GroupId);
	$smarty->assign('dictionary_group_list',   $dictionary_group_list['dictionary_group_list']);
	$smarty->assign('filter',       $dictionary_group_list['filter']);
	$smarty->assign('record_count', $dictionary_group_list['record_count']);
	$smarty->assign('page_count',   $dictionary_group_list['page_count']);
	
	$smarty->assign('full_page',    1);
	
	/* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_dictionary_group_manage.htm');
}
/*------------------------------------------------------ */
//--字典管理列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$dictionary_list = engrave_dictionary_list();
	$smarty->assign('dictionary_list',   $dictionary_list['dictionary_list']);
	$smarty->assign('filter',       $dictionary_list['filter']);
	$smarty->assign('record_count', $dictionary_list['record_count']);
	$smarty->assign('page_count',   $dictionary_list['page_count']);

	$sort_flag  = sort_flag($dictionary_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_dictionary_manage.htm'), '',
	array('filter' => $dictionary_list['filter'], 'page_count' => $dictionary_list['page_count']));

}
/*------------------------------------------------------ */
//-- 字典管理组列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'querygroup')
{
	
	$groupid = intval($_REQUEST['GroupId']);
	$dictionary_group_list = engrave_dictionary_group_list($groupid);
	$smarty->assign('dictionary_group_list',   $dictionary_group_list['dictionary_group_list']);
	$smarty->assign('filter',       $dictionary_group_list['filter']);
	$smarty->assign('record_count', $dictionary_group_list['record_count']);
	$smarty->assign('page_count',   $dictionary_group_list['page_count']);

	$sort_flag  = sort_flag($dictionary_group_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_dictionary_group_manage.htm'), '',
	array('filter' => $dictionary_group_list['filter'], 'page_count' => $dictionary_group_list['page_count']));

}
/*------------------------------------------------------ */
//-- 字典管理添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('dictionary_manage');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0718_dictionary_add'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0717_dictionary_manage'], 'href'=>'engrave_dictionary_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');
    
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_dictionary_info.htm');
}
/*------------------------------------------------------ */
//-- 字典管理组添加页面-添加
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'addgroup')
{
	/* 检查权限 */
	admin_priv('dictionary_manage');
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0720_dictionary_group_add'];
	$smarty->assign('ur_here', $ur_here);
	//字典管理模块
	$smarty->assign('enum_list', engrave_group_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0719_dictionary_group_manage'], 'href'=>'engrave_dictionary_manage.php?act=list'));
	$smarty->assign('form_action', 'groupinsert');
	
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_dictionary_group_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('dictionary_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$GroupId=$_REQUEST['id'];
	$dictionary=engrave_dictionary($GroupId);
	$smarty->assign('dictionary', $dictionary);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0718_dictionary_add'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0717_dictionary_manage'], 'href'=>'engrave_dictionary_manage.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_dictionary_info.htm');
}
elseif($_REQUEST['act']=='editgroup')
{
	/* 检查权限 */
	admin_priv('dictionary_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$EnumId=$_REQUEST['id'];
	$enum=engrave_dictionary_group($EnumId);
	$smarty->assign('enum', $enum);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0720_dictionary_group_add'];
	$smarty->assign('ur_here', $ur_here);
	//字典管理模块
	$smarty->assign('enum_list', engrave_group_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0719_dictionary_group_manage'], 'href'=>'engrave_dictionary_manage.php?act=list'));
	$smarty->assign('form_action','groupupdate');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_dictionary_group_info.htm');
}
/*------------------------------------------------------ */
//-- 字典管理添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='groupinsert' || $_REQUEST['act']=='groupupdate')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('dictionary_manage');
    //获取数据
	$enum['GroupId'] = !empty($_POST['GroupId']) ? intval($_POST['GroupId']) : '0';
	$enum['ItemName'] = !empty($_POST['ItemName']) ? trim($_POST['ItemName']) : '';
	$enum['ItemValue'] = !empty($_POST['ItemValue']) ? trim($_POST['ItemValue']) : '';
	$enum['SortId'] = !empty($_POST['SortId']) ? intval($_POST['SortId']) : '0';
	$enum['IsDeleteEnum'] = '0';

	if($act=='groupinsert')
	{
		engrave_dictionary_group_insert($enum);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_dictionary_group'];
		$link[0]['href'] = 'engrave_dictionary_manage.php?act=addgroup';
		$link[1]['text'] = $_LANG['back_dictionary_group_list'];
		$link[1]['href'] = 'engrave_dictionary_manage.php?act=list';
	}
	elseif($act=='groupupdate')
	{
		$enumId=$_REQUEST['id'];
		engrave_dictionary_group_update($enum,$enumId);
		$link[0]['text'] = $_LANG['back_service_list'];
		$link[0]['href'] = 'engrave_dictionary_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 增值服务添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('dictionary_manage');
	//获取数据
	$dictionary['GroupName'] = !empty($_POST['GroupName']) ? trim($_POST['GroupName']) : '';
	$dictionary['IsDeleteGroup'] = '0';

	if($act=='insert')
	{
		engrave_dictionary_insert($dictionary);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_dictionary'];
		$link[0]['href'] = 'engrave_dictionary_manage.php?act=add';
		$link[1]['text'] = $_LANG['back_dictionary_list'];
		$link[1]['href'] = 'engrave_dictionary_manage.php?act=list';
	}
	elseif($act=='update')
	{
		$groupId=$_REQUEST['id'];
		engrave_dictionary_update($dictionary,$groupId);
		$link[0]['text'] = $_LANG['back_service_list'];
		$link[0]['href'] = 'engrave_dictionary_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 字典管理删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$GroupId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('dictionary_remove');

	if (engrave_dictionary_delete("1", $GroupId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_dictionary_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
/*------------------------------------------------------ */
//-- 字典管理删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'removegroup')
{
	$enumId = intval($_REQUEST['id']);
	$GroupId = intval($_REQUEST['groupid']);
	/* 检查权限 */
	check_authz_json('dictionary_remove');

	if (engrave_dictionary_group_delete("1", $enumId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_dictionary_manage.php?act=querygroup&GroupId=' . $GroupId . '&' . str_replace('act=removegroup', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
?>
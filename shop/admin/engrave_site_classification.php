<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * 中文名称：网站分类
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_site_classification.php 2014-11-25 21:34:00 zxp $
 */

define('IN_ECS', true);

require (dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once (ROOT_PATH . 'languages/' . $_CFG['lang'] . '/admin/engrave_site_classification.php');
/*载入-购物指南-数据访问文件*/
require_once (ROOT_PATH . 'admin/includes/engrave/lib_site_classification.php');

$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 购物指南
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
	{
    /* 检查权限 */
	admin_priv('classifi_manage');

	$ur_here = $_LANG['05_shopping_directory'] . '｜' . $_LANG['0501_site_classification'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link', array('text' => $_LANG['0502_add_classification'], 'href' => 'engrave_site_classification.php?act=add'));

	$smarty->assign('full_page', 1);

	$class_list = engrave_classification_list();
	$smarty->assign('class_list', $class_list['class_list']);
	$smarty->assign('filter', $class_list['filter']);
	$smarty->assign('record_count', $class_list['record_count']);
	$smarty->assign('page_count', $class_list['page_count']);

	$smarty->assign('full_page', 1);
    
    /* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_site_classification.htm');
} elseif ($_REQUEST['act'] == 'query')
	{
	$class_list = engrave_classification_list();
	$smarty->assign('class_list', $class_list['class_list']);
	$smarty->assign('filter', $class_list['filter']);
	$smarty->assign('record_count', $class_list['record_count']);
	$smarty->assign('page_count', $class_list['page_count']);

	$sort_flag = sort_flag($class_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);
	make_json_result(
		$smarty->fetch('engrave_site_classification.htm'),
		'',
		array('filter' => $class_list['filter'], 'page_count' => $class_list['page_count'])
	);

} elseif ($_REQUEST['act'] == 'add')
	{
    /* 检查权限 */
	admin_priv('classifi_manage');

	$ur_here = $_LANG['05_shopping_directory'] . '｜' . $_LANG['0502_add_classification'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link', array('text' => $_LANG['0501_site_classification'], 'href' => 'engrave_site_classification.php?act=list'));
	$smarty->assign('form_action', 'insert');

    /* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_site_classification_info.htm');
}
/*------------------------------------------------------ */
//-- 购物指南-编辑：页面显示
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit') {
	/* 检查权限 */
	admin_priv('classifi_manage');
	
	/*载入-站点分类-数据访问文件*/
	require_once (ROOT_PATH . 'admin/includes/engrave/lib_site_classification.php');

	//获取ID，并根据ID获取对象 赋值给smarty
	$ClassId = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';

	$classification = engrave_classification($ClassId);
	$smarty->assign('classification', $classification['classification']);
	$ur_here = $_LANG['05_shopping_directory'] . '｜' . $_LANG['0502_add_classification'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link', array('text' => $_LANG['0501_site_classification'], 'href' => 'engrave_site_classification.php?act=list'));
	$smarty->assign('form_action', 'update');
	$smarty->assign('full_page', 1);
	
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_site_classification_info.htm');
}

/*------------------------------------------------------ */
//-- 购物指南-添加、编辑：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert' || $_REQUEST['act'] == 'update') {
	$act = $_REQUEST['act'];
	/*检查品牌名是否重复*/
	admin_priv('classifi_manage');
	
	//获取Form表单数据
	$classification['ClassName'] = isset($_REQUEST['ClassName']) ? trim($_REQUEST['ClassName']) : "";
	$classification['OldClassName'] = isset($_REQUEST['OldClassName']) ? trim($_REQUEST['OldClassName']) : "";
	
	/*添加数据*/
	if ($act == 'insert')
		{
		$link[0]['text'] = $_LANG['continue_add_class'];
		$link[0]['href'] = 'engrave_site_classification.php?act=add';
		$link[1]['text'] = $_LANG['back_class_list'];
		$link[1]['href'] = 'engrave_site_classification.php?act=list';
		if (!engrave_uniqueness($classification['ClassName']))
			{
			// 记录日志
			admin_log(addslashes($classification['ClassName']), 'add', 'site_classification');
			engrave_classification_insert($classification);
			sys_msg($_LANG['engrave_operate_succed'], 0, $link);
		} else
			{
			sys_msg($_LANG['classname_exist'], 1, $link, false);
		}
	}
	/*编辑数据*/
	elseif ($act == 'update')
		{
		$link[0]['text'] = $_LANG['back_class_list'];
		$link[0]['href'] = 'engrave_site_classification.php?act=list';

		if (!engrave_uniqueness($classification['ClassName'], $classification['OldClassName']))
			{
			// 记录日志
			admin_log(addslashes($classification['ClassName']), 'edit', 'site_classification');
			$ClassId = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
			engrave_classification_update($classification, $ClassId);

			sys_msg($_LANG['engrave_operate_succed'], 0, $link);
		} else
			{
			sys_msg($_LANG['classname_exist'], 1, $link, false);
		}
	}
}
/*------------------------------------------------------ */
//-- 站点分类删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
	{
	$ClassId = intval($_REQUEST['id']);
	$classification = engrave_classification($ClassId);
	$ClassName = $classification['classification']['ClassName'];
    /* 检查权限 */
	check_authz_json('article_remove');

	if (engrave_site_classification_delete("1", $ClassId))
		{
		admin_log(addslashes($ClassName), 'remove', 'site_classification'); // 记录日志
		$url = 'engrave_site_classification.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
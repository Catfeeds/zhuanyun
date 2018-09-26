<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_administrator_manage.php 2014-11-25 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_administrator_manage.php');
/*载入-购物指南-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_administrator_manage.php');

//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 购物指南
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('administrator_manage');
	
    $ur_here = $_LANG['06_member_manage'] .'｜'.$_LANG['0603_administrator_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0604_add_administrator_manage'], 'href'=>'engrave_administrator_manage.php?act=add'));

    $smarty->assign('full_page',    1);

    $admin_list= engrave_administrator_list();
    $smarty->assign('admin_list',   $admin_list['admin_list']);
    $smarty->assign('filter',       $admin_list['filter']);
    $smarty->assign('record_count', $admin_list['record_count']);
    $smarty->assign('page_count',   $admin_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_administrator_list.htm');
}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('classifi_manage');
	
    $ur_here = $_LANG['06_member_manage'] .'｜'.$_LANG['0604_add_administrator_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0603_administrator_manage'], 'href'=>'engrave_administrator_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_administrator_add.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
	/*检查品牌名是否重复*/
	admin_priv('classifi_manage');
		
	$is_only = $exc->is_only('ClassName', $_POST['ClassName']);
	
	if (!$is_only)
	{
		sys_msg(sprintf($_LANG['classname_exist'], stripslashes($_POST['ClassName'])), 1);
	}
	
	/*插入数据*/
	
	$sql = "INSERT INTO ".$engrave->table('class')."(Module, ClassName, ParentId, ParentPath, Depth, SubCount,SortId,LastIs) ".
			"VALUES ('shopsite','$_POST[ClassName]', '0', '1', '1', '0', '1','1')";
	$db->query($sql);
	
	admin_log($_POST['ClassName'],'add','class');
	
	/* 清除缓存 */
	clear_cache_files();
	
	$link[0]['text'] = $_LANG['continue_add_class'];
	$link[0]['href'] = 'engrave_site_classification.php?act=add';
	
	$link[1]['text'] = $_LANG['back_class_list'];
	$link[1]['href'] = 'engrave_site_classification.php?act=list';
	
	sys_msg($_LANG['brandadd_class_succed'], 0, $link);
}
elseif ($_REQUEST['act'] == 'edit_currecys_name')
{
        make_json_result(stripslashes('dfsafasd'));
}
?>
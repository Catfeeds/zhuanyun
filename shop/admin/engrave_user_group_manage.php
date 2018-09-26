<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_user_group_manage.php 2014-12-02 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_user_group.php');
/*载入-用户组管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user_group.php');

//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');
$smarty->assign('lang', $_LANG);
/*------------------------------------------------------ */
//-- 用户组管理
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('user_group_manage');
	
    $ur_here = $_LANG['06_member_manage'] .'｜'.$_LANG['0609_user_group_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0610_add_user_group'], 'href'=>'engrave_user_group_manage.php?act=add'));

    $smarty->assign('full_page',    1);

    $group_list= engrave_user_group();
    $smarty->assign('group_list',   $group_list['group_list']);
    $smarty->assign('filter',       $group_list['filter']);
    $smarty->assign('record_count', $group_list['record_count']);
    $smarty->assign('page_count',   $group_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示预付款/提现页面 */
    assign_query_info();
    $smarty->display('engrave_user_group.htm');
}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('user_group_manage');
	
    $ur_here = $_LANG['06_member_manage'] .'｜'.$_LANG['0610_add_user_group'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0609_user_group_manage'], 'href'=>'engrave_user_group_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示预付款/提现页面 */
    assign_query_info();
    $smarty->display('engrave_user_group_add.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
	/*检查品牌名是否重复*/
	admin_priv('user_group_manage');
		
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
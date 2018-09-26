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

/*------------------------------------------------------ */
//-- 货币列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('package_manage');
	
    $ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0101_package_list'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('full_page',    1);
	/* 模板赋值 */
    $smarty->assign('Help_id',    $_LANG['Help_id']);
	$smarty->assign('Help_Title', $_LANG['Help_Title']);
	$smarty->assign('Help_Oper',  $_LANG['Help_Oper']);
	$smarty->assign('cat_select',  article_cat_list(0));
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_help_list.htm');
}
?>
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

if ($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('package_manage');
    $ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0101_package_list'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('full_page',    1);
     /* 模板赋值 */
    $smarty->assign('HelpTitle',   $_LANG['HelpTitle']);
	$smarty->assign('HelpClassify',$_LANG['HelpClassify']);
	$smarty->assign('HelpLink',    $_LANG['HelpLink']);
	$smarty->assign('HelpBrief',   $_LANG['HelpBrief']);
	$smarty->assign('HelpOutside', $_LANG['HelpOutside']);
	$smarty->assign('HelpTop',     $_LANG['HelpTop']);
	$smarty->assign('cat_select',  article_cat_list(0));
	/*显示位置*/
	$smarty->assign('HelpPosi', $_LANG['HelpPosi']);
	$smarty->assign('Posi1',    $_LANG['Posi1']);
	$smarty->assign('Posi2',    $_LANG['Posi2']);
	$smarty->assign('Posi3',    $_LANG['Posi3']);
	$smarty->assign('Posi4',    $_LANG['Posi4']);
	/*显示页面*/
	assign_query_info();
    $smarty->display('engrave_add_classification.htm');
}
?>
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

	

    $ur_here ="导航添加";
	$form_action='insert';

    $smarty->assign('ur_here', $ur_here);

    $smarty->assign('full_page',    1);

	/* 模板赋值 */

  $smarty->assign('form_action',   $form_action);
    $smarty->assign('HelpTitle',   $_LANG['HelpTitle']);

	$smarty->assign('HelpLtitle',  $_LANG['HelpLtitle']);

	$smarty->assign('HelpLClass',  $_LANG['HelpLClass']);

	$smarty->assign('HelpShow',    $_LANG['HelpShow']);

	$smarty->assign('HelpOutside', $_LANG['HelpOutside']);

	$smarty->assign('HelpCont',    $_LANG['HelpCont']);

	$smarty->assign('cat_select',  article_cat_list(0));

    /* 显示商品列表页面 */

    assign_query_info();

    

    $smarty->display('engrave_addjisuan.htm');

}



if ($_REQUEST['act'] == 'update')

{

    /* 检查权限 */

    admin_priv('package_manage');

	

    $ur_here ="导航添加";
	$form_action='update';

    $smarty->assign('ur_here', $ur_here);

    $smarty->assign('full_page',    1);

	/* 模板赋值 */
$rows=engrave_menu($_GET['id']);
  $smarty->assign('form_action',   $form_action);
    $smarty->assign('gongshi',   $rows['gongshi']);
$smarty->assign('id',   $rows['id']);
	$smarty->assign('neirong',   $rows['neirong']);

	$smarty->assign('paixu',   $rows['paixu']);
	$smarty->assign('huilv',   $rows['huilv']);
	$smarty->assign('fangshi',     $rows['fangshi']);

	

    /* 显示商品列表页面 */

    assign_query_info();

    

    $smarty->display('engrave_addjisuan.htm');

}
function engrave_menu($classid)

{

	$sql = "SELECT  id,gongshi,paixu,neirong,fangshi,huilv " .

			" FROM " . $GLOBALS['engrave']->table('calculator') .

			" where id=" . $classid;

	

	$row = $GLOBALS['engrave_db']->getRow($sql);

	return $row;

}
if ($_REQUEST['act'] == 'delete')

{



}
?>
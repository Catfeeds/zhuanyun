<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_batch_tracking.php 2015年1月15日 13:50:46 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_batch_tracking.php');
/*载入-订单跟踪-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_batch_tracking.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 跟踪管理添加页面-添加
/*------------------------------------------------------ */
if($_REQUEST['act'] == 'add')
{
	/* 检查权限 */
	admin_priv('batch_tracking');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0212_batch_tracking'];
	$smarty->assign('ur_here', $ur_here);
	//获得代码状态
	$code_list = engrave_codestatue_list();
	$smarty->assign('code_list', $code_list);
	//线路管理
	$shipping_list = engrave_shippingname_list();
	$smarty->assign('shipping_list', $shipping_list);
	$smarty->assign('form_action', 'insert');
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_batch_tracking.htm');
}
?>
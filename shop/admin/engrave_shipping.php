<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_shipping.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_shipping.php');
/*载入-线路管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_waybill_module.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping_laddervalue_group.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_money_manage.php');

//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 线路管理
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('shipping');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0705_shipping'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0706_add_shipping'], 'href'=>'engrave_shipping.php?act=add'));

    $smarty->assign('full_page',    1);

    $shipping_list= engrave_shipping_list();
    $smarty->assign('shipping_list',   $shipping_list['shipping_list']);
    $smarty->assign('filter',       $shipping_list['filter']);
    $smarty->assign('record_count', $shipping_list['record_count']);
    $smarty->assign('page_count',   $shipping_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示线路管理页面 */
    assign_query_info();
    $smarty->display('engrave_shipping_list.htm');
}
/*------------------------------------------------------ */
//-- 线路管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$shipping_list = engrave_shipping_list();
	$smarty->assign('shipping_list',   $shipping_list['shipping_list']);
	$smarty->assign('filter',       $shipping_list['filter']);
	$smarty->assign('record_count', $shipping_list['record_count']);
	$smarty->assign('page_count',   $shipping_list['page_count']);

	$sort_flag  = sort_flag($shipping_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_shipping_list.htm'), '',
	array('filter' => $shipping_list['filter'], 'page_count' => $shipping_list['page_count']));

}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('shipping');
	//获取阶梯价格组
	$option = engrave_shipping_laddervalue_group_option(0);
	$smarty->assign('option', $option);
	$template_option = engrave_template_option();
	$smarty->assign('template_option', $template_option);
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_shipping_tip'])?'':$_LANG['engrave_shipping_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    /*绑定起源地和目的地*/
    $smarty->assign('originarea_list', engrave_area_list());
    $smarty->assign('desarea_list', engrave_area_list());
    //获取货币名称
    $smarty->assign('currecy_list', engrave_currecy_list());
    //获取重量单位
    $smarty->assign('weight_list', engrave_weight_list());
    $smarty->assign('action_link',  array('text' => $_LANG['0705_shipping'], 'href'=>'engrave_shipping.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示购线路管理页面 */
    assign_query_info();
    $smarty->display('engrave_shipping_add.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('shipping');

	//获取ID，并根据ID获取对象 赋值给smarty
	$ShippingId=$_REQUEST['id'];
	$shipping=engrave_shipping($ShippingId);
	$template_option = engrave_template_option($shipping['ShippingTemplate']);
	$smarty->assign('template_option', $template_option);
	//获取阶梯价格组
	$option = engrave_shipping_laddervalue_group_option($shipping['s_slpgid']);
	$smarty->assign('option', $option);
	$smarty->assign('shipping', $shipping);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_shipping_tip'])?'':$_LANG['engrave_shipping_tip'];
	$smarty->assign('ur_tip', $ur_tip);
    /*绑定起源地和目的地*/
    $smarty->assign('originarea_list', engrave_area_list());
    $smarty->assign('desarea_list', engrave_area_list());
    //获取货币名称
    $smarty->assign('currecy_list', engrave_currecy_list());
    //获取重量单位
    $smarty->assign('weight_list', engrave_weight_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0705_shipping'], 'href'=>'engrave_shipping.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_shipping_add.htm');
}
/*------------------------------------------------------ */
//-- 增值服务添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('shipping');
	//获取数据
	$shipping['ShippingName'] = !empty($_POST['ShippingName']) ? trim($_POST['ShippingName']) : '';
	$shipping['IsSupPice'] = !empty($_POST['IsSupPice']) ? intval($_POST['IsSupPice']) : '0';
	$shipping['IsShippingVip'] = !empty($_POST['IsShippingVip']) ? intval($_POST['IsShippingVip']) : '0';
	$shipping['ShippingTemplate'] = !empty($_POST['ShippingTemplate']) ? intval($_POST['ShippingTemplate']) : '0';
	$shipping['ShippingCode'] = !empty($_POST['ShippingCode']) ? trim($_POST['ShippingCode']) : '';
	$shipping['Origin'] = !empty($_POST['Origin']) ? intval($_POST['Origin']) : '0';
	$shipping['Destination'] = !empty($_POST['Destination']) ? intval($_POST['Destination']) : '0';
	$shipping['WeightId'] = !empty($_POST['WeightId']) ? intval($_POST['WeightId']) : '0';
	$shipping['CurrencyId'] = !empty($_POST['CurrencyId']) ? intval($_POST['CurrencyId']) : '0';
	$shipping['Weight'] = !empty($_POST['Weight']) ? intval($_POST['Weight']) : '0';
	$shipping['AddWeight'] = !empty($_POST['AddWeight']) ? intval($_POST['AddWeight']) : '0';
	$shipping['HeavyVolume'] = !empty($_POST['HeavyVolume']) ? intval($_POST['HeavyVolume']) : '0';
	$shipping['VolumePrice'] = !empty($_POST['VolumePrice']) ? doubleval($_POST['VolumePrice']) : '0.00';
	$shipping['MinWeight'] = !empty($_POST['MinWeight']) ? intval($_POST['MinWeight']) : '0';
	$shipping['MinPrice'] = !empty($_POST['MinPrice']) ? doubleval($_POST['MinPrice']) : '0.00';
	$shipping['MaxWeight'] = !empty($_POST['MaxWeight']) ? intval($_POST['MaxWeight']) : '0';
	$shipping['FreeWeight'] = !empty($_POST['FreeWeight']) ? intval($_POST['FreeWeight']) : '0';
	$shipping['Price'] = !empty($_POST['Price']) ? doubleval($_POST['Price']) : '0.00';
	$shipping['AddPrice'] = !empty($_POST['AddPrice']) ? doubleval($_POST['AddPrice']) : '0.00';
	$shipping['Discount'] = !empty($_POST['Discount']) ? doubleval($_POST['Discount']) : '0.00';
	$shipping['IsRegPrice'] = !empty($_POST['IsRegPrice']) ? intval($_POST['IsRegPrice']) : '0';
	$shipping['AddCharge'] = !empty($_POST['AddCharge']) ? doubleval($_POST['AddCharge']) : '0.00';
	$shipping['ShippingDesc'] = !empty($_POST['ShippingDesc']) ? trim($_POST['ShippingDesc']) : '';
	$shipping['Agreement'] = !empty($_POST['Agreement']) ? intval($_POST['Agreement']) : '0';
	$shipping['RegIntegarl'] = !empty($_POST['RegIntegarl']) ? intval($_POST['RegIntegarl']) : '0';
	$shipping['UseAgreement'] = !empty($_POST['UseAgreement']) ? trim($_POST['UseAgreement']) : '';
	$shipping['SortId'] = !empty($_POST['SortId']) ? intval($_POST['SortId']) : '0';
	$shipping['IsDeleteShipping'] = '0';
	
	$shipping['slp_slpgid']=0;
	if($shipping['IsSupPice']!='0')
	{
		$shipping['slp_slpgid'] = !empty($_POST['slp_slpgid']) ? intval($_POST['slp_slpgid']) : '0';
	}
	if($act=='insert')
	{
		engrave_shipping_insert($shipping);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_shipping'];
		$link[0]['href'] = 'engrave_shipping.php?act=add';
		$link[1]['text'] = $_LANG['back_shipping_list'];
		$link[1]['href'] = 'engrave_shipping.php?act=list';
	}
	elseif($act=='update')
	{
		$shippingId=$_REQUEST['ShippingId'];
		engrave_shipping_update($shipping,$shippingId);
		$link[0]['text'] = $_LANG['back_shipping_list'];
		$link[0]['href'] = 'engrave_shipping.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$ShippingId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('shipping_remove');

	if (engrave_shipping_delete("1", $ShippingId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_shipping.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
?>
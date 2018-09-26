<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_receive_warehouse.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_receive_warehouse.php');
/*载入-物流系统--收货仓库管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_receive_warehouse.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_money_manage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 物流系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('receive_warehouse');
	$allPorts = allPorts();

    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0709_receive_warehouse'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0710_add_receware'], 'href'=>'engrave_receive_warehouse.php?act=add'));

    $smarty->assign('full_page',    1);

    $warehouse_list= engrave_warehouse_list();
    $smarty->assign('warehouse_list',   $warehouse_list['warehouse_list']);
    $smarty->assign('filter',       $warehouse_list['filter']);
    $smarty->assign('record_count', $warehouse_list['record_count']);
    $smarty->assign('page_count',   $warehouse_list['page_count']);
    $smarty->assign('leave_ports',   $allPorts['leave_ports']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_receive_warehouse.htm');
}
/*------------------------------------------------------ */
//-- 收货仓库管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$warehouse_list = engrave_warehouse_list();
	$smarty->assign('warehouse_list',   $warehouse_list['warehouse_list']);
	$smarty->assign('filter',       $warehouse_list['filter']);
	$smarty->assign('record_count', $warehouse_list['record_count']);
	$smarty->assign('page_count',   $warehouse_list['page_count']);

	$sort_flag  = sort_flag($warehouse_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_receive_warehouse.htm'), '',
	array('filter' => $warehouse_list['filter'], 'page_count' => $warehouse_list['page_count']));

}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('receive_warehouse');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0710_add_receware'];
    $smarty->assign('ur_here', $ur_here);
    //获取区域名称
    $smarty->assign('area_list', engrave_area_list());
    //获取货币名称
    $smarty->assign('currecy_list', engrave_currecy_list());
    $smarty->assign('action_link',  array('text' => $_LANG['0709_receive_warehouse'], 'href'=>'engrave_receive_warehouse.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_receive_warehouse_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('receive_warehouse');

	//获取ID，并根据ID获取对象 赋值给smarty
	$HouseId=$_REQUEST['id'];
	$warehouse=engrave_warehouse($HouseId);
	$smarty->assign('warehouse', $warehouse);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0710_add_receware'];
	$smarty->assign('ur_here', $ur_here);
	//获取区域名称
	$smarty->assign('area_list', engrave_area_list());
	//获取货币名称
	$smarty->assign('currecy_list', engrave_currecy_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0709_receive_warehouse'], 'href'=>'engrave_receive_warehouse.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_receive_warehouse_info.htm');
} else if ($_REQUEST['act'] == 'toggle_status') {
    
	check_authz_json('receive_warehouse');
    $id = intval($_POST['id']);
    $val = intval($_POST['val']);
    engrave_warehouse_update_status($id, $val);
    make_json_result($val);
}  
/*------------------------------------------------------ */
//-- 增值服务添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('receive_warehouse');
	//获取数据
	$warehouse['AreaId'] = !empty($_POST['Area']) ? intval($_POST['Area']) : '0';
	$warehouse['AreaName'] = engrave_area_name($warehouse['AreaId']);
	$warehouse['HouseName'] = !empty($_POST['HouseName']) ? trim($_POST['HouseName']) : '';
	$warehouse['IsDefault'] = !empty($_POST['IsDefault']) ? intval($_POST['IsDefault']) : '0';
	$warehouse['HouseCode'] = !empty($_POST['HouseCode']) ? trim($_POST['HouseCode']) : '';
	$warehouse['Title'] = !empty($_POST['Title']) ? trim($_POST['Title']) : '';
	$warehouse['CurrencyId'] = !empty($_POST['CurrencyId']) ? intval($_POST['CurrencyId']) : '0';
	$warehouse['CurrencyCode'] = engrave_currecy_symbol($warehouse['CurrencyId']);
	$warehouse['WeightUnit'] = !empty($_POST['WeightUnit']) ? trim($_POST['WeightUnit']) : '';
	$warehouse['SizeUnit'] = !empty($_POST['SizeUnit']) ? trim($_POST['SizeUnit']) : '';
	$warehouse['VolumeUnit'] = !empty($_POST['VolumeUnit']) ? trim($_POST['VolumeUnit']) : '';
	$warehouse['Storage'] = !empty($_POST['Storage']) ? doubleval($_POST['Storage']) : '0.00';
	$warehouse['WarehousingBM'] = !empty($_POST['WarehousingBM']) ? intval($_POST['WarehousingBM']) : '0';
	$warehouse['Warehousing'] = !empty($_POST['Warehousing']) ? doubleval($_POST['Warehousing']) : '0.00';
	$warehouse['RolloverBM'] = !empty($_POST['AutoDestruction']) ? intval($_POST['AutoDestruction']) : '0';
	$warehouse['Rollover'] = !empty($_POST['Rollover']) ? doubleval($_POST['Rollover']) : '0.00';
	$warehouse['Operate'] = !empty($_POST['Operate']) ? doubleval($_POST['Operate']) : '0.00';
	$warehouse['UpPackage'] = !empty($_POST['UpPackage']) ? doubleval($_POST['UpPackage']) : '0.00';
	$warehouse['OutsideCost'] = !empty($_POST['OutsideCost']) ? doubleval($_POST['OutsideCost']) : '0.00';
	$warehouse['Address'] = !empty($_POST['Address']) ? trim($_POST['Address']) : '';
	$warehouse['County'] = !empty($_POST['County']) ? trim($_POST['County']) : '';
	$warehouse['City'] = !empty($_POST['City']) ? trim($_POST['City']) : '';
	$warehouse['Province'] = !empty($_POST['Province']) ? trim($_POST['Province']) : '';
	$warehouse['ZipCode'] = !empty($_POST['ZipCode']) ? trim($_POST['ZipCode']) : '';
	$warehouse['Telephone'] = !empty($_POST['Telephone']) ? trim($_POST['Telephone']) : '';
	$warehouse['Note'] = !empty($_POST['Note']) ? trim($_POST['Note']) : '';
	$warehouse['SortId'] = !empty($_POST['SortId']) ? intval($_POST['SortId']) : '0';
	$warehouse['State'] = !empty($_POST['State']) ? intval($_POST['State']) : '0';
	$warehouse['wh_weight'] = !empty($_POST['wh_weight']) ? doubleval($_POST['wh_weight']) : '0';
	$warehouse['IsDeleteHouse'] = '0';

	if($act=='insert')
	{
		engrave_warehouse_insert($warehouse);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_warehouse'];
		$link[0]['href'] = 'engrave_receive_warehouse.php?act=add';
		$link[1]['text'] = $_LANG['back_warehouse_list'];
		$link[1]['href'] = 'engrave_receive_warehouse.php?act=list';
	}
	elseif($act=='update')
	{
		$houseId=$_REQUEST['HouseId'];
		if($warehouse['IsDefault']==1)
		{
			//修改其它默认为1的仓库为0
			engrave_warehouse_update_default();
		}
		engrave_warehouse_update($warehouse,$houseId);
		$link[0]['text'] = $_LANG['back_warehouse_list'];
		$link[0]['href'] = 'engrave_receive_warehouse.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$HouseId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('services_remove');

	if (engrave_warehouse_delete("1", $HouseId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_receive_warehouse.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
?>
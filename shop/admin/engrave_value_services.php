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
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_value_services.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_value_services.php');

$smarty->assign('lang',$_LANG);
require_once(ROOT_PATH . 'admin/includes/engrave/lib_receive_warehouse.php');


//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 物流系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('value_services');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0721_value_service_setting'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0722_add_service_setting'], 'href'=>'engrave_value_services.php?act=add'));

    $smarty->assign('full_page',    1);

    $service_list= engrave_service_list();
    $smarty->assign('service_list',   $service_list['service_list']);
    $smarty->assign('filter',       $service_list['filter']);
    $smarty->assign('record_count', $service_list['record_count']);
    $smarty->assign('page_count',   $service_list['page_count']);
    $smarty->assign('module_list',   @engrave_module_list(true));
   
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_value_services.htm');
}
/*------------------------------------------------------ */
//-- 增值服务列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$service_list = engrave_service_list();
	$smarty->assign('service_list',   $service_list['service_list']);
	$smarty->assign('filter',       $service_list['filter']);
	$smarty->assign('record_count', $service_list['record_count']);
	$smarty->assign('page_count',   $service_list['page_count']);

	$sort_flag  = sort_flag($service_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_value_services.htm'), '',
	array('filter' => $service_list['filter'], 'page_count' => $service_list['page_count']));

}
/*------------------------------------------------------ */
//-- 设置服务页面-添加
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'setting')
{
	/* 检查权限 */
	admin_priv('value_services');
	
	//获取ID，并根据ID获取对象 赋值给smarty
	$ServiceId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$wareHouseId=!empty($_REQUEST['wareHouseId']) ? intval($_REQUEST['wareHouseId']) : '0';


	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0721_warhouse_service_setting'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_service_setting_tip'])?'':$_LANG['engrave_service_setting_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	$smarty->assign('action_link',  array('text' => $_LANG['0722_add_warhouse_service_setting'], 'href'=>'engrave_value_services.php?act=addsetting&serviceId='.$ServiceId));
	
	$smarty->assign('full_page',    1);
	 $warehouse_list= engrave_warehouse_list();

	$service_setting_list = engrave_service_setting_list($ServiceId, $wareHouseId);
	$smarty->assign('service_setting_list',   $service_setting_list['service_setting_list']);
	$smarty->assign('filter',       $service_setting_list['filter']);
	$smarty->assign('record_count', $service_setting_list['record_count']);
	$smarty->assign('page_count',   $service_setting_list['page_count']);
	$smarty->assign('warehouse_list',   $warehouse_list['warehouse_list']);

	
	$smarty->assign('full_page',    1);
	
	/* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_service_setting_list.htm');
}
//仓库所拥有的增值服务
elseif ($_REQUEST['act'] == 'warehouse')
{
	/* 检查权限 */
	admin_priv('value_services');
	
	//获取ID，并根据ID获取对象 赋值给smarty

	$wareHouseId=!empty($_REQUEST['wareHouseId']) ? intval($_REQUEST['wareHouseId']) : '0';


	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0721_warhouse_service_setting'];
	$smarty->assign('ur_here', $ur_here);
	$ur_tip = empty($_LANG['engrave_service_setting_tip'])?'':$_LANG['engrave_service_setting_tip'];
	$smarty->assign('ur_tip', $ur_tip);
	$smarty->assign('action_link',  array('text' => $_LANG['0722_add_warhouse_service_setting'], 'href'=>'engrave_value_services.php?act=addsetting&serviceId='.$ServiceId));
	
	$smarty->assign('full_page',    1);
	 $warehouse_list= engrave_warehouse_list();

	$service_setting_list = engrave_service_setting_list_by_warehouse( $wareHouseId);
	$smarty->assign('service_setting_list',   $service_setting_list['service_setting_list']);
	$smarty->assign('filter',       $service_setting_list['filter']);
	$smarty->assign('record_count', $service_setting_list['record_count']);
	$smarty->assign('page_count',   $service_setting_list['page_count']);
	$smarty->assign('warehouse_list',   $warehouse_list['warehouse_list']);

	
	$smarty->assign('full_page',    1);
	
	/* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_service_setting_list_by_warehouse.htm');
}
elseif ($_REQUEST['act'] == 'querywarehousesetting') //ajax
{
	

	$wareHouseId=!empty($_REQUEST['wareHouseId']) ? intval($_REQUEST['wareHouseId']) : '0';



 

	$service_setting_list = engrave_service_setting_list_by_warehouse( $wareHouseId);
	$smarty->assign('service_setting_list',   $service_setting_list['service_setting_list']);
	$smarty->assign('filter',       $service_setting_list['filter']);
	$smarty->assign('record_count', $service_setting_list['record_count']);
	$smarty->assign('page_count',   $service_setting_list['page_count']);


	


	make_json_result($smarty->fetch('engrave_service_setting_list_by_warehouse.htm'), '',
	array('filter' => $service_setting_list['filter'], 'page_count' => $service_setting_list['page_count']));
}
/*------------------------------------------------------ */
//-- 增值服务设置列表显示页面-分页
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'querysetting')
{
	$ServiceId = !empty($_REQUEST['serviceId']) ? intval($_REQUEST['serviceId']) : '0';
	$wareHouseId=!empty($_REQUEST['wareHouseId']) ? intval($_REQUEST['wareHouseId']) : '0';
	$service_setting_list = engrave_service_setting_list($ServiceId, $wareHouseId);
	$smarty->assign('service_setting_list',   $service_setting_list['service_setting_list']);
	$smarty->assign('filter',       $service_setting_list['filter']);
	$smarty->assign('record_count', $service_setting_list['record_count']);
	$smarty->assign('page_count',   $service_setting_list['page_count']);

	$sort_flag  = sort_flag($service_setting_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_service_setting_list.htm'), '',
	array('filter' => $service_setting_list['filter'], 'page_count' => $service_setting_list['page_count']));
}
/*------------------------------------------------------ */
//-- 增值服务设置添加页面-添加
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'addsetting')
{
	/* 检查权限 */
	admin_priv('value_services');
	$service_id = !empty($_REQUEST['serviceId']) ? intval($_REQUEST['serviceId']) : '0';
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0722_add_service_setting'];
	$smarty->assign('ur_here', $ur_here);
	//增值服务模块
	$smarty->assign('warehouse_list', engrave_warehouse_housename());
	//给服务类型赋值
	$smarty->assign('service_name', engrave_service_name($service_id));
	$smarty->assign('service_id', $service_id);
	$smarty->assign('action_link',  array('text' => $_LANG['0721_value_service_setting'], 'href'=>'engrave_value_services.php?act=setting&id='.$service_id));
	$smarty->assign('form_action', 'insertsetting');
	
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_service_setting_info.htm');
}
/*------------------------------------------------------ */
//-- 增值服务添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('value_services');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0712_add_services'];
    $smarty->assign('ur_here', $ur_here);
    //增值服务模块
    $smarty->assign('module_list', engrave_module_list());
    $smarty->assign('action_link',  array('text' => $_LANG['0711_value_services'], 'href'=>'engrave_value_services.php?act=list'));
    $smarty->assign('form_action', 'insert');
    
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_value_services_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('value_services');

	//获取ID，并根据ID获取对象 赋值给smarty
	$ServiceId=$_REQUEST['id'];
	$service=engrave_service($ServiceId);
	$smarty->assign('service', $service);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0712_add_services'];
	$smarty->assign('ur_here', $ur_here);
	//增值服务设置模块
	$smarty->assign('module_list', engrave_module_list());
	$smarty->assign('action_link',  array('text' => $_LANG['0711_value_services'], 'href'=>'engrave_value_services.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_value_services_info.htm');
}
elseif($_REQUEST['act'] == 'editsetting')
{
	/* 检查权限 */
	admin_priv('value_services');
	
	//获取ID，并根据ID获取对象 赋值给smarty
	$SettingId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$service_id= !empty($_REQUEST['ServiceId']) ? intval($_REQUEST['ServiceId']) : '0';
	$setting_list = engrave_service_setting($SettingId);
	$smarty->assign('setting_list', $setting_list);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0723_edit_service_setting'];
	$smarty->assign('ur_here', $ur_here);
	//增值服务设置模块
	$smarty->assign('warehouse_list', engrave_warehouse_housename());
	//给服务类型赋值
	$smarty->assign('service_name', engrave_service_name($service_id));
	$smarty->assign('action_link',  array('text' => $_LANG['0721_value_service_setting'], 'href'=>'engrave_value_services.php?act=setting&id='.$service_id));
	$smarty->assign('form_action','updatesetting');
	$smarty->assign('full_page',    1);
	
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_service_setting_info.htm');
}
/*------------------------------------------------------ */
//-- 增值服务设置添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insertsetting' || $_REQUEST['act']=='updatesetting')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('value_services');
	$ServiceId = !empty($_POST['service_id']) ? intval($_POST['service_id']) : '0';
	//获取数据
	$services['ServiceId'] = $ServiceId;
	$services['WarehouseId'] = !empty($_REQUEST['WareHouse']) ? intval($_REQUEST['WareHouse']) : '0';
	$services['Price'] = !empty($_POST['Price']) ? doubleval($_POST['Price']) : '0.00';
	$services['Unit'] = !empty($_REQUEST['Unit']) ? intval($_REQUEST['Unit']) : '0';
	$services['StatusId'] = !empty($_REQUEST['StatusId']) ? intval($_REQUEST['StatusId']) : '0';
	$services['IsDeleteSetting'] = '0';
    if(engrave_service_count($ServiceId, $services['WarehouseId'])>0)
    {
    	$SettingId = engrave_get_settingid($ServiceId,$services['WarehouseId']);
    	engrave_service_setting_update($services,$SettingId);
    	$link[0]['text'] = $_LANG['back_service_setting_list'];
    	$link[0]['href'] = 'engrave_value_services.php?act=setting&id='.$ServiceId;
    }
    else
    {
		if($act=='insertsetting')
		{
			engrave_service_setting_insert($services);
			//页面跳转
			$link[0]['text'] = $_LANG['continue_add_service_setting'];
			$link[0]['href'] = 'engrave_value_services.php?act=addsetting&serviceId='.$ServiceId;
			$link[1]['text'] = $_LANG['back_service_setting_list'];
			$link[1]['href'] = 'engrave_value_services.php?act=setting&id='.$ServiceId;
		}
		elseif($act=='updatesetting')
		{
			$SettingId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
			$service_id= !empty($_REQUEST['ServiceId']) ? intval($_REQUEST['ServiceId']) : '0';
			engrave_service_setting_update($services,$SettingId);
			$link[0]['text'] = $_LANG['back_service_setting_list'];
			$link[0]['href'] = 'engrave_value_services.php?act=setting&id='.$service_id;
		}
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
	admin_priv('value_services');
	//获取数据
	$services['ModuleId'] = !empty($_POST['Module']) ? intval($_POST['Module']) : '0';
	$services['Module'] = engrave_get_modulecode($services['ModuleId']);
	$services['ServiceName'] = !empty($_POST['ServiceName']) ? trim($_POST['ServiceName']) : '';
	$services['Description'] = !empty($_POST['Description']) ? trim($_POST['Description']) : '';
	$services['IsDeleteService'] = '0';

	if($act=='insert')
	{
		engrave_service_insert($services);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_service'];
		$link[0]['href'] = 'engrave_value_services.php?act=add';
		$link[1]['text'] = $_LANG['back_service_list'];
		$link[1]['href'] = 'engrave_value_services.php?act=list';
	}
	elseif($act=='update')
	{
		$serviceId=$_REQUEST['id'];
		engrave_service_update($services,$serviceId);
		$link[0]['text'] = $_LANG['back_service_list'];
		$link[0]['href'] = 'engrave_value_services.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$ServiceId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('services_remove');

	if (engrave_service_delete("1", $ServiceId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_value_services.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
/*------------------------------------------------------ */
//-- 服务设置删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'removesetting')
{
	$SettingId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$service_id= !empty($_REQUEST['serviceid']) ? intval($_REQUEST['serviceid']) : '0';
	/* 检查权限 */
	check_authz_json('services_remove');

	if (engrave_service_setting_delete("1", $SettingId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_value_services.php?act=querysetting&serviceId= ' .$service_id. '&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}elseif($_REQUEST['act']=='edit_payment_name'){
	$ServiceId=$_REQUEST['id'];
	$service['ServiceName']=$_REQUEST['val'];
	engrave_service_update_name($service, $ServiceId);
	echo json_encode(array('message'=>'修改成功','content'=>$service['ServiceName'],'error'=>0));
	exit;
}

?>
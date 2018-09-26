<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_added_services.php 2015年1月12日 13:15:06 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_added_services.php');
/*载入-增值服务-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_added_services.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_package_attachs.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_money_manage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_value_services.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_account_log.php');

require_once(ROOT_PATH . 'admin/commonhelper/upload_json.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 货币列表：显示页面
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('services');
	
    $ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0106_services'];
    $smarty->assign('ur_here', $ur_here);

    $services_list=engrave_added_services_list();
    $smarty->assign('services_list',   $services_list['services_list']);
    $smarty->assign('filter',       $services_list['filter']);
    $smarty->assign('record_count', $services_list['record_count']);
    $smarty->assign('page_count',   $services_list['page_count']);
    //获取增值服务项目
    $services_option = engrave_services_option(0);
    $smarty->assign('services_option', $services_option);
    $smarty->assign('full_page',    1);
    
    /* 显示商品列表页面 */
    assign_query_info();
    
    $smarty->display('engrave_added_services.htm');
    
}
/*------------------------------------------------------ */
//-- 增值服务列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$services_list = engrave_added_services_list();
	$smarty->assign('services_list',   $services_list['services_list']);
	$smarty->assign('filter',       $services_list['filter']);
	$smarty->assign('record_count', $services_list['record_count']);
	$smarty->assign('page_count',   $services_list['page_count']);

	$sort_flag  = sort_flag($services_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_added_services.htm'), '',
	array('filter' => $services_list['filter'], 'page_count' => $services_list['page_count']));

}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('services');

	//获取ID，并根据ID获取对象 赋值给smarty
	$RecordId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	
	$services = engrave_services($RecordId);
	$smarty->assign('services', $services);
	$packageId = engrave_pckid_orderno($services['ShippingOrder']);
	$smarty->assign('pck_id', $packageId);
	$ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0108_edit_services'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0106_services'], 'href'=>'engrave_added_services.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_added_services_edit.htm');
}
/*------------------------------------------------------ */
//-- 增值服务编辑-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('services');
	//获取数据
// 	$services['CheckResult'] = !empty($_POST['CheckResult']) ? trim($_POST['CheckResult']) : '';
// 	$services['CheckTime'] = gmtime();
// 	$services['StatusId'] = '1';

// 	if($act=='update')
// 	{
// 		$RecordId=!empty($_REQUEST['RecordId']) ? intval($_REQUEST['RecordId']) : '0';
// 		engrave_services_update($services,$RecordId);
// 		$link[0]['text'] = $GLOBALS['_LANG']['back_services_list'];
// 		$link[0]['href'] = 'engrave_added_services.php?act=list';
// 	}
// 	sys_msg($_LANG['save_success'], 0, $link);
	
	
	
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);

	$link[0]['text'] = $GLOBALS['_LANG']['back_services_list'];
	$link[0]['href'] = 'engrave_added_services.php?act=list';
	
	$RecordId = isset($_REQUEST['RecordId']) ? intval($_REQUEST['RecordId']) : 0;
	//根据增值服务ID，获取包裹ID
	$service_array = engrave_services($RecordId);
	$pck_id = $service_array['ps_packageid'];
	
// 	$upload=new FileUpload();
	
// 	$attachs['pa_packageid'] = $pck_id;
// 	foreach ($_FILES AS $code => $file)
// 	{
// 		$filename = $upload-> upload_image($file);
// 		if($filename!='error')
// 		{
// 			$attachs['pa_attach'] = $filename;
// 			if(!engrave_package_attachs_insert($attachs,$conn))
// 			{
// 				transaction_failed($conn);
// 				sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
// 			}
// 		}
// 		else {
// 			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
// 		}
// 	}

	//获取数据
	$services['CheckResult'] = !empty($_POST['CheckResult']) ? trim($_POST['CheckResult']) : '';
	$services['CheckTime'] = gmtime();
	$services['StatusId'] = '1';
	//修改支付状态及处理结果状态//DB
	if(!engrave_services_update_tran($services, $RecordId, $conn)){
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['save_failed'].'2', 0, $link);
	}
	
	//判断是否已支付：未支付
	if($service_array['IsPaid'] == "0")
	{
		//支付
		//根据 服务ID，获取增值服务价格
		$service_setting = engrave_service_setting_byserviceid($service_array['ServiceId']);
		$price = !empty($service_setting['Price']) ? floatval($service_setting['Price']) : 0;
		$user_id = !empty($service_array['UserId']) ? intval($service_array['UserId']) : 0;
		$user = engrave_user_byid($user_id);
		//user_money,frozen_money,user_subsidiarymoney,
		//获取日元账户汇率 DB
		$currecy = engrave_currecy(1);
		$ExchageRate = !empty($currecy['ExchageRate']) ? floatval($currecy['ExchageRate']) : 0;
		//DB
		$pay_money = engrave_users_pay_money($price,$user['user_money'],$user['user_jpymoney'],
				$user['user_subsidiarymoney'],$ExchageRate,0,$user_id,1,$conn);
		if(!$pay_money)
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['save_failed'].'1', 0, $link);
		}
		
		//日志
		$account_log['user_id'] =$user_id;
		$account_log['frozen_money'] = 0;
		$account_log['rank_points'] = 0;
		$account_log['pay_points'] = 0;
		$account_log['user_money'] = -$price;
		$account_log['member_remark'] = '增值服务费用。服务单号-'.$service_array['RecordNo'].
		'。增值服务名称：'.$service_array['ServiceName'].',增值服务ID：'.$RecordId;
		//DB
		if(!engrave_account_log_transinsert($account_log, 11, $conn))
		{
			//添加失败
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['save_failed'].'3', 0, $link);
			return;
		}
	}
	
	//transaction_failed($conn);
	transaction_success($conn);
	sys_msg($GLOBALS['_LANG']['save_success'].'14', 0, $link);
}
/*------------------------------------------------------ */
//-- 增值服务删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$RecordId=!empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('services');

	if (engrave_services_delete("1", $RecordId))
	{
		$url = 'engrave_added_services.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
/**
 * 上传附件
 */
elseif($_REQUEST['act'] == 'upload')
{
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	
	$link[0]['text'] = $GLOBALS['_LANG']['back_services_list'];
	$link[0]['href'] = 'engrave_added_services.php?act=list';
	
	$RecordId = isset($_REQUEST['RecordId']) ? intval($_REQUEST['RecordId']) : 0;
	//根据增值服务ID，获取包裹ID
	$service_array = engrave_services($RecordId);
	$pck_id = $service_array['ps_packageid'];
	
	$upload=new FileUpload();
	
	$attachs['pa_packageid'] = $pck_id;
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$attachs['pa_attach'] = $filename;
			if(!engrave_package_attachs_insert($attachs,$conn))
			{
				transaction_failed($conn);
				sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
			}
		}
		else {
			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
		}
	}
	//获取数据
	$services['CheckTime'] = gmtime();
	$services['StatusId'] = '1';
	//修改支付状态及处理结果状态//DB
	if(!engrave_services_update_tran($services, $RecordId, $conn)){
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
	}
	
	//判断是否已支付：未支付
	if($service_array['IsPaid'] == "0")
	{
		//支付
		//根据 服务ID，获取增值服务价格
		$service_setting = engrave_service_setting_byserviceid($service_array['ServiceId']);
		$price = !empty($service_setting['Price']) ? floatval($service_setting['Price']) : 0;
		$user_id = !empty($service_array['UserId']) ? intval($service_array['UserId']) : 0;
		$user = engrave_user_byid($user_id);
		//user_money,frozen_money,user_subsidiarymoney,
		//获取日元账户汇率 DB
		$currecy = engrave_currecy(1);
		$ExchageRate = !empty($currecy['ExchageRate']) ? floatval($currecy['ExchageRate']) : 0;
		//DB
		$pay_money = engrave_users_pay_money($price,$user['user_money'],$user['user_jpymoney'],
				$user['user_subsidiarymoney'],$ExchageRate,0,$user_id,1,$conn);
		if(!$pay_money)
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
		}
	
		//日志
		$account_log['user_id'] =$user_id;
		$account_log['frozen_money'] = 0;
		$account_log['rank_points'] = 0;
		$account_log['pay_points'] = 0;
		$account_log['user_money'] = -$price;
		$account_log['member_remark'] = '增值服务费用。服务单号-'.$service_array['RecordNo'].
		'。增值服务名称：'.$service_array['ServiceName'].',增值服务ID：'.$RecordId;
		//DB
		if(!engrave_account_log_transinsert($account_log, 11, $conn))
		{
			//添加失败
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['save_failed'], 0, $link);
			return;
		}
	}
	
	transaction_success($conn);
	sys_msg($GLOBALS['_LANG']['save_success'], 0, $link);
}

/**
 * 事务失败
 * @param unknown $conn
 */
function transaction_failed($conn)
{
	//添加失败
	mysql_query('ROLLBACK',$conn);//回滚
	mysql_close($conn);
}

/**
 * 事务成功
 * @param unknown $conn
 */
function transaction_success($conn)
{
	//添加失败
	mysql_query('COMMIT',$conn);//回滚
	mysql_close($conn);
}
?>
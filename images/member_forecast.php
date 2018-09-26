<?php 
/**
 * ENGRAVE 到货预报
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_forecast.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
session_start();
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_forecast.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');

$smarty->assign('lang',$_LANG);

//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$smarty->assign('users',$users);

	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_name',$username);

	//根据用户地址ID，判断用户是否完善了注册信息
	if($users['user_isperfect'] == 0)
	{
		//获取国家
		$area_country_option = engrave_area_option(0,0);
		$smarty->assign('area_country_option',$area_country_option);
		//用户名称
		$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
		//操作：添加
		$smarty->assign('operate','insert');
		//导航
		$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
		$smarty->assign('ur_here',$ur['ur_here']);
		$smarty->display('member_datum.htm');
		return;
	}
}
else
{
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************
/*库存列表*/
if($_REQUEST['act'] == 'member_forecast_view')
{
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_forecast_detail']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_stock']);
	$smarty->assign('menu_here',$_LANG['member_account']);
	
	//根据ID获取包裹内的信息
	$package = engrave_package($id);
	$smarty->assign('package',$package);
	//根据包裹ID获取包裹附件
	$package_attachs = engrave_package_attachs($id);
	$smarty->assign('packageattachs',$package_attachs);
	//获取增值服务
	$package_service_list = engrave_package_service_list($id);
	$smarty->assign('package_service_list',$package_service_list);
	//根据ID获取商品内物品
	$packagegoods_list = engrave_packagegoods_bypckid($id);
	$smarty->assign('packagegoods_list', $packagegoods_list);
	$smarty->display('member_forecast_view.htm');
}
/*问题件*/
elseif($_REQUEST['act'] == 'member_1304')
{
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	//导航
	$ur=assign_ur_here(1,$_LANG['member']['member_question_detail']);
	$smarty->assign('ur_here',$ur['ur_here']);
	//根据ID获取包裹内的信息
	$package = engrave_package($id);
	$smarty->assign('package',$package);
	//根据ID获取商品内物品
	$packagegoods_list = engrave_packagegoods_bypckid($id);
	$smarty->assign('packagegoods_list', $packagegoods_list);
	$smarty->assign('s_weightunit',$_CFG['s_weightunit']);
	$smarty->display('member_forecast_view.htm');
}
/*包裹单号是否已经预报*/
elseif($_REQUEST['act'] =="expressnumber_validate")
{
	$pck_expressnumber = isset($_REQUEST['pck_expressnumber']) ? trim($_REQUEST['pck_expressnumber']) : '';
	//根据包裹单号查询，是否已经存在预报的包裹单号
	if(engrave_package_expressnumber_isexist($pck_expressnumber))
	{
		//存在，json为error
		make_json_error('');
	}
	else{
		make_json_result('','true','');
	}
	exit();
}
/*增值服务*/
elseif($_REQUEST['act'] =='package_service')
{
	//仓库ID
	$houseid = isset($_REQUEST['houseid']) ? intval($_REQUEST['houseid']) : 0;
	//根据仓库ID，获取仓库对应的增值服务
	$service_list = engrave_service_list_byid($houseid);
	
	make_json_result(json_encode($service_list),'','');
	exit();
}
?>
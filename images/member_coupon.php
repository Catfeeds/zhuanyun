<?php 
/**
 * ENGRAVE 我的优惠券
 * ===========================================================
 * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_coupon.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/member/lib_coupon.php');

//Session会话开始
session_start();
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
if($_REQUEST['act']=='member_coupon')
{
	//ajax访问
	//获取用户ID
}
?>
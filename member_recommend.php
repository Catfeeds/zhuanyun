<?php 
/**
 * ENGRAVE 我的推广
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_recommend.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
session_start();

/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*数据库*/
require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
}
//*********************会员信息****************************************************************
/**
 * 我推荐的会员
 */
if($_REQUEST['act'] == '4601')
{
	//我的积分
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的积分
	$users_list = engrave_users_recommend($user_id,$startPage);
	$totalPage = ceil($users_list['record_count']/$pageSize); //总页数
	$startPage = $users_list['page_count']*$pageSize;
	$arr['total'] = $users_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;

	//我的积分
	$arr['list']=$users_list['users_list'];
	echo json_encode($arr);
}
/**
 * 推荐会员分成
 */
elseif($_REQUEST['act'] == '4602')
{
	//我的积分
	$startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//我的积分
	$users_list = engrave_users_recommend_behalf($user_id,$startPage);
	$totalPage = ceil($users_list['record_count']/$pageSize); //总页数
	$startPage = $users_list['page_count']*$pageSize;
	$arr['total'] = $users_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;

	//我的积分
	$arr['list']=$users_list['users_list'];
	echo json_encode($arr);
}
?>
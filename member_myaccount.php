<?php 
/**
 * ENGRAVE 我的账户
 * ===========================================================
 * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_myaccount.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);

/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_account.php');
//数据访问类：FAQ
require_once(ROOT_PATH . '/includes/member/lib_account.php');

$smarty->assign('lang', $_LANG);
session_start();
//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	$user_id=isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$smarty->assign('user_name',$_SESSION['username']);
	$smarty->assign('username',$_SESSION['username']);
}
else {
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************

if($_REQUEST['act'] == 'member_viewaccount')
{
	//导航
	$ur=assign_ur_here(0,$_LANG['view_myacc']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$account_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	//根据账户ID获取信息
	$account = engrave_account_list_byid($account_id);
	$smarty->assign('account',$account);
	//有问必答列表
	$smarty->display('member_myacc_info.htm');
}else if($_REQUEST['act'] == 'member_viewaccount_log')
{
	//导航
	$ur=assign_ur_here(0,$_LANG['view_myacc']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$account_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	//根据账户ID获取信息
	$account = engrave_account_log_list_byid($account_id);
	$smarty->assign('account',$account);
	//有问必答列表
	$smarty->display('member_myacc_log_info.htm');
}
elseif($_REQUEST['act']=='recharge_query_json')
{
	//数据访问类：账户
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_myacc']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('tab','1');

	
	$startPage = isset($_POST['pageNum']) ? intval($_POST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	
	$startPage = $startPage * $pageSize;
	//获取提现
	$account_list = engrave_account_list_byprocess_type($user_id,$startPage);
	
	$totalPage = ceil($account_list['record_count']/$pageSize); //总页数
	$startPage = $account_list['page_count']*$pageSize;
	$arr['total'] = $account_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	$smarty->assign('account_list',$account_list['account_list']);
	//获取充值
    $arr['list']=$account_list['account_list'];
	echo json_encode($arr);
}
elseif($_REQUEST['act'] == 'remove_recharge')
{
	//数据访问类：账户
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	$da_Id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($da_Id != 0)
	{
		if (engrave_account_delete($da_Id))
		{
			//导航
			$ur=assign_ur_here(0,$_LANG['member']['member_myacc']);
			$smarty->assign('ur_here',$ur['ur_here']);
			$smarty->assign('tab','1');
		
			$pageNum = isset($_POST['pageNum']) ? intval($_POST['pageNum']) : 0;
			$pageSize = $_CFG['page_size']; //每页显示数
			
			$startPage = $pageNum * $pageSize;
			//获取提现
			$account_list = engrave_account_list_byprocess_type($user_id,90,$startPage);
			
			$totalPage = ceil($account_list['record_count']/$pageSize); //总页数
			$startPage = $account_list['page_count']*$pageSize;
			$arr['total'] = $account_list['record_count'];
			$arr['pageSize'] = $pageSize;
			$arr['totalPage'] = $totalPage;
			
			$smarty->assign('account_list',$account_list['account_list']);
			//获取充值
		    $arr['list']=$account_list['account_list'];
			echo json_encode($arr);
		}
	}
}
elseif($_REQUEST['act']=='recharge_query_json')
{
	//数据访问类：账户
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_myacc']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('tab','1');

	$startPage = isset($_POST['pageNum']) ? intval($_POST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	$startPage = $startPage * $pageSize;
	//获取提现
	$account_list = engrave_account_list_byprocess_type($user_id,$startPage);
	$totalPage = ceil($account_list['record_count']/$pageSize); //总页数
	$startPage = $account_list['page_count']*$pageSize;
	$arr['total'] = $account_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	$smarty->assign('account_list',$account_list['account_list']);
	//获取充值
    $arr['list']=$account_list['account_list'];
	echo json_encode($arr);
}
elseif($_REQUEST['act']=='recharge2_query_json')
{
	//数据访问类：账户
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_myacc']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('tab','1');

	
	$startPage = isset($_POST['pageNum']) ? intval($_POST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数
	
	$startPage = $startPage * $pageSize;
	//获取提现
	$account_list = engrave_account_list_byprocess_type($user_id,$startPage);
	
	$totalPage = ceil($account_list['record_count']/$pageSize); //总页数
	$startPage = $account_list['page_count']*$pageSize;
	$arr['total'] = $account_list['record_count'];
	$arr['pageSize'] = $pageSize;
	$arr['totalPage'] = $totalPage;
	
	$smarty->assign('account_list',$account_list['account_list']);
	//获取充值
    $arr['list']=$account_list['account_list'];
	echo json_encode($arr);
}
?>
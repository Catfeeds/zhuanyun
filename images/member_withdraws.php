<?php 
/**
 * ENGRAVE 提现申请
 * ===========================================================
 * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_withdraws.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);

/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_withdraws.php');
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

if($_REQUEST['act']=='member_insert')
{
	//添加
	$account['amount'] = isset($_POST['amount']) ? intval($_POST['amount']) : 0;
	echo $account['amount'];
	$account['user_note'] = isset($_POST['user_note']) ? intval($_POST['user_note']) : 0;
	$account['process_type'] = 1;
	$account['payment'] = 0;
	$account['user_id'] = $user_id;
	
	$result = engrave_account_insert($account);
	if($result!=0)
	{
		//添加成功
		$link[0]['text'] = $_LANG['return_myacc'];
		$link[0]['href'] = 'member.php?act=member_myacc';
		sys_msg($_LANG['member']['insert_withdraws_success'], 0, $link);
	}
	else{
		//添加失败
		$link[0]['text'] = $_LANG['return_myacc'];
		$link[0]['href'] = 'member.php?act=member_myacc';
		sys_msg($_LANG['member']['insert_withdraws_failed'], 0, $link);
	}
}
?>
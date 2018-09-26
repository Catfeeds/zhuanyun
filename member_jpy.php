<?php 
/**
 * ENGRAVE 日元账户
 * ===========================================================
 * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_jpy.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);

/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_jpy.php');
//数据访问类：FAQ
require_once(ROOT_PATH . '/includes/member/lib_account.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');

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
//兑换日元
if($_REQUEST['act']=='info')
{
	//导航
	$ur=assign_ur_here(0,$_LANG['jpy_change']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['member_account']);
	//获取日元兑换率
	$jpy = engrave_currency_jpy_byid();
	$ExchageRate = isset($jpy['ExchageRate']) ? floatval($jpy['ExchageRate']) : 0;
	$smarty->assign('exchageRate',$ExchageRate);
	//获取默认货币
	$currency = engrave_currency_symbol();
	$smarty->assign('currency',$currency);
	//根据ID获取货币金额
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$smarty->assign('id',$id);
	$account = engrave_account_list_byid($id);
	$amount = isset($account['amount']) ? floatval($account['amount']) : 0;
	$smarty->assign('amount',$amount);
	$jpy_amount = $amount * $ExchageRate;
	$jpy_amount = number_format($jpy_amount, 2, '.', '');
	$smarty->assign('jpy_amount',$jpy_amount);
	$smarty->assign('action','changeJP');
	
	$smarty->display('member_jpy_info.htm');
}
//兑换默认货币
elseif($_REQUEST['act'] == 'changeRMB')
{
	//导航
	$ur=assign_ur_here(0,$_LANG['jpy_change']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['member_account']);
	//获取日元兑换率
	$jpy = engrave_currency_jpy_byid();
	$ExchageRate = isset($jpy['ExchageRate']) ? floatval($jpy['ExchageRate']) : 0;
	$smarty->assign('exchageRate',$ExchageRate);
	//获取默认货币
	$currency = engrave_currency_symbol();
	$smarty->assign('currency',$currency);
	//根据ID获取货币金额
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$smarty->assign('id',$id);
	$account = engrave_account_list_byid($id);
	$amount = isset($account['amount']) ? floatval($account['amount']) : 0;
	$smarty->assign('amount',$amount);
	$jpy_amount = $amount * $ExchageRate;
	$jpy_amount = number_format($jpy_amount, 2, '.', '');
	$smarty->assign('jpy_amount',$jpy_amount);
	$smarty->assign('action','changeRMB');
	
	$smarty->display('member_jpy_info.htm');
}
elseif($_REQUEST['act']=='jpy_query_json')
{
	//数据访问类：账户
	require_once(ROOT_PATH . '/includes/member/lib_account.php');

	$startPage = isset($_POST['pageNum']) ? intval($_POST['pageNum']) : 0;
	$pageSize = $_CFG['page_size']; //每页显示数

	$startPage = $startPage * $pageSize;
	//获取提现
	$account_list = engrave_account_list_eq_process_type($user_id,0,$startPage);
	
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
/**
 * 兑换
 */
elseif($_REQUEST['act'] == 'exchange')
{
	$action = isset($_REQUEST['action']) ? trim($_REQUEST['action']) : '';
	if($action == 'changeJP')
	{
		$link[0]['text'] = $GLOBALS['_LANG']['return_jpy_list'];
		$link[0]['href'] = 'member.php?act=43';
		//获取兑换金额
		$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
		if($id==0)
		{
			sys_msg($GLOBALS['_LANG']['exchnage_failed_system'], 0, $link);
		}
		$account = engrave_account_list_byid($id);
		$amount = isset($account['amount']) ? floatval($account['amount']) : 0;
		//判断主账户余额是否足够
		$users = engrave_users($user_id);
		$user_money = isset($users['user_money']) ? floatval($users['user_money']) : 0;
		//当前金额转化为日元
		$jpy = engrave_currency_jpy_byid();
		$ExchageRate = isset($jpy['ExchageRate']) ? floatval($jpy['ExchageRate']) : 0;
		$jpy_amount = $amount * $ExchageRate;
		$jpy_amount = number_format($jpy_amount, 2, '.', '');
		if($amount > $user_money)
		{
			sys_msg($GLOBALS['_LANG']['exchnage_failed_nomoney'], 0, $link);
		}
		//减少主账户余额，增加日元账户余额
		//建立数据库连接
		$charset = 'gbk';
		$charset = strtolower(str_replace('-', '', EC_CHARSET));
		$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
		mysql_query('START TRANSACTION',$conn);
		/**
		 * 设定此次充值已兑换
		 */
		if(!engrave_account_exchange($id,$conn))
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
		}
		/**
		 * 减少主账户余额，添加日元账户余额
		 */
		if(!engrave_users_updatejpy_money($amount,$jpy_amount,$user_id,$conn))
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
		}
		/**
		 * 添加会员日志
		 */
		$account_log['frozen_money'] = 0;
		$account_log['rank_points'] = 0;
		$account_log['pay_points'] = 0;
		
		$account_log['user_id'] = $user_id;
		$account_log['user_money'] = -$amount;
		$account_log['member_remark'] = '日元兑换-'.$amount;
		if(!engrave_account_log_transinsert($account_log,12, $conn))
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
		}
		transaction_success($conn);
		sys_msg($GLOBALS['_LANG']['exchnage_success'], 0, $link);
	}
	elseif($action == 'changeRMB')
	{
		exchange_rmb($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name,$user_id);
	}
}
/**
 * 兑换：将日元兑换为人民币
 */
function exchange_rmb($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name,$user_id)
{
	$link[0]['text'] = $GLOBALS['_LANG']['return_jpy_list'];
	$link[0]['href'] = 'member.php?act=43';
	//获取兑换金额
	$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($id==0)
	{
		sys_msg($GLOBALS['_LANG']['exchnage_failed_system'], 0, $link);
	}
	$account = engrave_account_list_byid($id);
	//充值（兑换默认货币金额）
	$amount = isset($account['amount']) ? floatval($account['amount']) : 0;
	//判断日元账户余额是否足够
	$users = engrave_users($user_id);
	$user_jpymoney = isset($users['user_jpymoney']) ? floatval($users['user_jpymoney']) : 0;
	//当前金额转化为日元
	$jpy = engrave_currency_jpy_byid();
	$ExchageRate = isset($jpy['ExchageRate']) ? floatval($jpy['ExchageRate']) : 0;
	$jpy_amount = $amount * $ExchageRate;
	$jpy_amount = number_format($jpy_amount, 2, '.', '');
	if($jpy_amount > $user_jpymoney)
	{
		//如果日元金额大于当前日元账户，则不能兑换
		sys_msg($GLOBALS['_LANG']['exchnage_failed_nomoney'], 0, $link);
	}
	//增加主账户余额，减少日元账户余额
	//建立数据库连接
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	/**
	 * 设定此次充值未兑换（取消兑换）
	 */
	if(!engrave_account_cancel_exchange($id,$conn))
	{
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
	}
	/**
	 * 增加主账户余额，减少日元账户余额
	 */
	if(!engrave_users_cancel_exchage($amount,$jpy_amount,$user_id,$conn))
	{
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
	}
	/**
	 * 添加会员日志
	 */
	$account_log['frozen_money'] = 0;
	$account_log['rank_points'] = 0;
	$account_log['pay_points'] = 0;
	
	$account_log['user_id'] = $user_id;
	$account_log['user_money'] = +$amount;
	$account_log['member_remark'] = '日元取消兑换-'.$amount;
	if(!engrave_account_log_transinsert($account_log,12, $conn))
	{
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['exchnage_failed'], 0, $link);
	}
	transaction_success($conn);
	sys_msg($GLOBALS['_LANG']['exchnage_success'], 0, $link);
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
<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_order_tracking.php 2015年1月15日 13:50:46 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_order_tracking.php');
/*载入-订单跟踪-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_order_tracking.php');
/*载入-管理员信息-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_admin_user.php');

$smarty->assign('lang',$_LANG);
/*------------------------------------------------------ */
//-- 跟踪管理添加页面-添加
/*------------------------------------------------------ */
if($_REQUEST['act'] == 'add')
{
	/* 检查权限 */
	admin_priv('order_tracking');
	$ur_here = $_LANG['02_order_manage'] .'｜'.$_LANG['0209_tracking_manage'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('form_action', 'insert');
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_order_tracking.htm');
}
elseif($_REQUEST['act'] == 'getOrderNo')
{
	$orderno = !empty($_REQUEST['orderno']) ? trim($_REQUEST['orderno']) : '';
	$orderamount = engrave_order_amount($orderno);
	echo $orderamount;
}
elseif($_REQUEST['act'] == 'getOrderDetails')
{
	$orderno = !empty($_REQUEST['orderno']) ? trim($_REQUEST['orderno']) : '';
	$orderlog_list = engrave_order_log_list($orderno);
	echo json_encode($orderlog_list);
}
elseif($_REQUEST['act'] == 'insert')
{
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	/*日志*/
	$admin_id = isset($_SESSION['admin_id']) ? intval($_SESSION['admin_id']) : 0;
	$admin = engrave_admin_user_byid($admin_id);
	$admin_username = isset($admin['user_name']) ? trim($admin['user_name']) : '';
	$order_message = isset($_REQUEST['Message']) ? trim($_REQUEST['Message']) : '';
	//订单号
	$order_no = isset($_REQUEST['OrderNo']) ? intval($_REQUEST['OrderNo']) : 0;
	$orderid = engrave_order_id($order_no);
	//根据订单ID获取订单账号
	$orderlog['ol_userid'] =  $admin_id;
	$orderlog['ol_username'] = $admin_username;
	$orderlog['ol_info'] = $order_message;
	$orderlog['ol_code']='ORDEROPERATOR';
	$orderlog['ol_orderid'] = $orderid;
	$orderlog['ol_ipaddress'] = real_ip();
	if(!engrave_order_log_insert($orderlog,$conn))
	{
		//配货中
		transaction_failed($conn);
		make_json_error('日志：配货失败');
		return;
	}
	transaction_success($conn);
	$link[0]['href'] = 'engrave_order_tracking.php?act=add';
	sys_msg($_LANG['save_success'], 0, $link);
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
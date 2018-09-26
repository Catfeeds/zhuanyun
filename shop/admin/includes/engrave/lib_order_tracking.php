<?php
/**
 * 获得订单的数量
 * @param unknown $orderno
 */
function engrave_order_amount($orderno)
{
	$sql = "SELECT count(*) " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_isdelete = 0 AND order_no = '" . $orderno . "'";
	$orderamount = $GLOBALS['db']->getOne($sql);
	return $orderamount;
}
/**
 * 查询：订单日志
 * @param number $ol_orderno：订单号
 */
function engrave_order_log_list($orderno)
{
	$sql="select ol_id,ol_time,ol_userid,ol_username,ol_info,ol_ipaddress,ol_code from ".
		 $GLOBALS['engrave']->table('order_log').
		 " left join " . $GLOBALS['engrave']->table('order') .
		 " on ol_orderid = order_id " .
		 " where order_no = " . $orderno.
		 " order by ol_id desc";

	$orderlog_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($orderlog_list as $key=>$val)
	{
		$orderlog_list[$key]['ol_time'] = local_date($GLOBALS['_CFG']['time_format'], $val['ol_time']);
	}
	return $orderlog_list;
}
/**
 * 获得订单编号
 * @param unknown $order_no
 */
function engrave_order_id($order_no)
{
	$sql = "SELECT order_id " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_isdelete = 0 AND order_no = '" . $order_no . "'";
	$orderid = $GLOBALS['db']->getOne($sql);
	return $orderid;
}

/**
 * 添加日志：带事务
 * @param unknown $orderlog：订单日志
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_order_log_insert($orderlog,$conn)
{
	$time = gmtime();
	$sql="insert into ".$GLOBALS['engrave']->table('order_log').
	"(ol_time,ol_userid,ol_username,ol_info,ol_ipaddress,ol_code,ol_orderid) values('".
	$time."','".
	$orderlog['ol_userid']."','".
	$orderlog['ol_username']."','".
	$orderlog['ol_info']."','".
	$orderlog['ol_ipaddress']."','".
	$orderlog['ol_code']."','".
	$orderlog['ol_orderid']."')";
	$result = mysql_query($sql,$conn);

	if($result===false)
	{
		return false;
	}else {
		return true;
	}
}
?>
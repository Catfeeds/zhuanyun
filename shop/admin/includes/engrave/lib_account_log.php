<?php 


/**
 * 添加：带事务
 * @param unknown $account_log：账户日志对象
 * @param number $change_type：日志类型
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_account_log_transinsert($account_log,$change_type=0,$conn)
{
	$time = gmtime();

	$sql="insert into ".$GLOBALS['ecs']->table('account_log').
	"(user_id,user_money,frozen_money,rank_points,pay_points,change_time,change_desc,change_type)".
	" values ('".
	$account_log['user_id']."','".$account_log['user_money'].
	"','".$account_log['frozen_money'].
	"','".$account_log['rank_points'].
	"','".$account_log['pay_points'].
	"','".$time."','".
	$account_log['member_remark']."',".$change_type.
	")";
	
	$result = mysql_query($sql,$conn);

	if($result !== false)
	{
		return true;
	}
	else{
		return false;
	}
}
?>
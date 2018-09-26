<?php 
/**
 * ENGRAVE 数据访问：赠送积分
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_presented.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 添加
 * @param unknown $presented：优惠券
 * @param string $engrave_db_host：数据库
 * @param string $engrave_db_user：数据库
 * @param string $engrave_db_pass：数据库
 * @param string $engrave_db_name：数据库
 * @return boolean：若添加优惠券成功，返回true，反之，返回false！
 */
function engrave_presented_insert_trans($presented,
		$engrave_db_host='', $engrave_db_user='', $engrave_db_pass='', $engrave_db_name='')
{
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary");
	mysql_query('START TRANSACTION');
	//事务开始
	$time = gmtime();
	//获取所有会员ID
	$users = engrave_alluser();
	foreach ($users as $key=>$val)
	{
		$id = isset($val['user_id']) ? intval($val['user_id']) : 0;
		$sql="insert into ".$GLOBALS['ecs']->table('account_log').
		"(user_id,user_money,frozen_money,rank_points,pay_points,change_time,change_desc,change_type)".
		" values (".
		$id.",0,0,'".$presented['PreseCredit']."','".$presented['PreseCredit']."','".$time."','".
		$presented['PreseRease']."',99".
		")";
		$insert_presented = mysql_query($sql,$conn);
		if($insert_presented===false)
		{
			mysql_query('ROLLBACK');//回滚
			return false;
		}
		$sql="update ".$GLOBALS['ecs']->table('users').
		" set rank_points = (rank_points+".intval($presented['PreseCredit']).
		"),pay_points=(pay_points+".intval($presented['PreseCredit']).
		") where user_id=".$id;
		$update_users = mysql_query($sql,$conn);
		if($update_users===false)
		{
			mysql_query('ROLLBACK');//回滚
			return false;
		}
	}
	//提交
	mysql_query('COMMIT');
	mysql_close($conn);
	return true;
}

/**
 * 添加
 * @param unknown $presented：优惠券
 * @return boolean：若添加成功，返回，true，反之，返回false！
 */
function engrave_presented_insert($presented,
		$engrave_db_host='', $engrave_db_user='', $engrave_db_pass='', $engrave_db_name='')
{
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary");
	mysql_query('START TRANSACTION');
	//事务开始
	$time = gmtime();
	//添加账户积分增加记录
	$sql="insert into ".$GLOBALS['ecs']->table('account_log').
	"(user_id,user_money,frozen_money,rank_points,pay_points,change_time,change_desc,change_type)".
	" values (".
	$presented['user_id'].",0,0,'".$presented['PreseCredit']."','".$presented['PreseCredit']."','".$time."','".
	$presented['PreseRease']."',99".
	")";
	$insert_presented = mysql_query($sql,$conn);
	if($insert_presented===false)
	{
		mysql_query('ROLLBACK');//回滚
		return false;
	}
	//修改用户积分
	$sql="update ".$GLOBALS['ecs']->table('users').
	" set rank_points = (rank_points+".intval($presented['PreseCredit']).
	"),pay_points=(pay_points+".intval($presented['PreseCredit']).
	") where user_id=".$presented['user_id'];

	$update_users = mysql_query($sql,$conn);
	if($update_users===false)
	{
		mysql_query('ROLLBACK');//回滚
		return false;
	}
	//提交
	mysql_query('COMMIT');
	mysql_close($conn);
	return true;
}

/**
 * 获取所有用户
 * @return unknown：用户对象集合
 */
function engrave_alluser()
{
	$sql = "select user_id from ".$GLOBALS['ecs']->table('users')." where isdelete=0";
	$row = $GLOBALS['db']->getAll($sql);
	return $row;
}

/**
 * 根据用户唯一标识获取用户
 * @param unknown $obj：唯一标识
 * @return unknown|number：用户ID
 */
function engrave_user_by($obj)
{
	$sql = "select user_id from ".$GLOBALS['ecs']->table('users').
	" where isdelete=0 and (user_name ='".
	$obj."' or email = '".$obj.
	"' or mobile_phone = '".$obj.
	"' or user_id = '".$obj."')";
	$row = $GLOBALS['db']->getRow($sql);
	if(count($row))
	{
		return $row['user_id'];
	}
	else{
		return 0;
	}
}
?>
<?php
/**
 *  网站分类 相关函数
 * ============================================================================
 * * 版权所有
 * 网站地址:
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: zxp $
 * $Id: $
 */

/**
 * 会员列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_member_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('user');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT UserId,UserName,Email,UserMoney,Score,JoinDate,StorageNo " .
			" FROM " . $GLOBALS['engrave']->table('user') .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('member_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 查询
 * @param string $member_uniqueidentification：用户唯一标识
 * @return unknown|number：若查询到，返回用户ID，若没查询到，返回0
 */
function engrave_member_by($member_uniqueidentification = '')
{
	$sql = "select user_id from ".$GLOBALS['ecs']->table('users').
	" where isdelete=0 and (user_name ='".
	$member_uniqueidentification."' or email = '".$member_uniqueidentification.
	"' or mobile_phone = '".$member_uniqueidentification.
	"' or user_id = '".$member_uniqueidentification."')";
	$row = $GLOBALS['db']->getRow($sql);
	if(count($row))
	{
		return $row['user_id'];
	}
	else{
		return 0;
	}
}

/**
 * 查询
 * @param number $rank_id：根据等级ID，获取所有会员ID
 */
function engrave_member_byrankid($rank_id=0)
{
	$sql="select user_id from  ".$GLOBALS['ecs']->table('users').
	"where rank_points <(select max_points from ".
	$GLOBALS['ecs']->table('user_rank')." where rank_id=".$rank_id.")".
	" and rank_points >=(select min_points from ".
	$GLOBALS['ecs']->table('user_rank')." where rank_id=".$rank_id.")".
	" and isdelete=0";
	
	return $GLOBALS['db']->getAll($sql);
}

/**
 * 修改账户余额
 * @param number $money：余额
 * @param number $user_id：账户ID
 * @return boolean：若修改成功，返回true，反之，false！
 */
function engrave_member_money_update($money=0,$user_id=0)
{
	$sql="update ".$GLOBALS['ecs']->table('users').
	"set user_subsidiarymoney = user_subsidiarymoney+ ".$money.
	" where user_id=".$user_id;
	
	$result=$GLOBALS['db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else {
		return false;
	}
}
?>
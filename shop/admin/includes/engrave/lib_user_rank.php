<?php 
/**
 * ENGRAVE 数据访问：用户等级
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_rank.php 17217 2015年1月12日 13:51:22 zhangxingpeng $
 */

/**
 * 获取用户等级
 * @param number $rank_id：等级ID
 */
function engrave_user_rank($rank_id=0)
{
	$sql="select rank_id,rank_name,min_points,max_points,discount,show_price,".
	"special_rank,ur_desc,ur_color,ur_icon,ur_notice from ".
	$GLOBALS['ecs']->table('user_rank').
	" where rank_id=".$rank_id;
	
	return $GLOBALS['db']->getRow($sql);
}

/**
 * 根据积分获取折扣
 * @param number $point：积分
 */
function engrave_user_rank_bypoint($point = 0)
{
	$sql="select rank_id,rank_name,min_points,max_points,discount,show_price,".
	"special_rank,ur_desc,ur_color,ur_icon,ur_notice from ".
	$GLOBALS['ecs']->table('user_rank').
	" where min_points <=".$point.
	" and max_points > ".$point;
	
	return $GLOBALS['db']->getRow($sql);
}

/**
 * 添加
 * @param unknown $user_rank：用户等级对象
 */
function engrave_user_rank_insert($user_rank)
{
	$sql = "INSERT INTO " .$GLOBALS['ecs']->table('user_rank') ."( ".
	"rank_name, min_points, max_points, discount, special_rank, show_price,".
	"ur_desc,ur_color,ur_icon,ur_notice) VALUES (".
	"'$user_rank[rank_name]', '" .intval($user_rank['min_points']). "', '" .intval($user_rank['max_points']). "', ".
	"'$user_rank[discount]', '$user_rank[special_rank]', '" .intval($user_rank['show_price'])."','".
	$user_rank['ur_desc']."','".
	$user_rank['ur_color']."','".
	$user_rank['ur_icon']."','".
	$user_rank['user_notice']. "')";
	
	$result = $GLOBALS['db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 修改
 * @param unknown $user_rank:用户等级对象
 */
function engrave_user_rank_update($user_rank)
{
	$sql = "update " .$GLOBALS['ecs']->table('user_rank') ." set ".
	"rank_name='".$user_rank['rank_name'].
	"',min_points='".$user_rank['min_points'].
	"',max_points='".$user_rank['max_points'].
	"',discount='".$user_rank['discount'].
	"',special_rank='".$user_rank['special_rank'].
	"',show_price='".$user_rank['show_price'].
	"',ur_desc='".$user_rank['ur_desc'].
	"',ur_color='".$user_rank['ur_color'].
	"',ur_icon='".$user_rank['ur_icon'].
	"',ur_notice='".$user_rank['ur_notice']."' where rank_id = ".$user_rank['rank_id'];

	$result = $GLOBALS['db']->query($sql);
	if($result!==false)
	{
		return true;
	}
	else{
		return false;
	}
}
?>
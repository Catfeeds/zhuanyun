<?php 
/**
 * ENGRAVE 数据访问：我的信息
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_myinformation.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * 我的信息
 * @param number $user_id:用户ID
 * @return unknown:我的信息对象
 */
function engrave_myinfomation($user_id=0)
{
	$sql="select user_id,credit_line,rank_points,pay_points,".
	"(select rank_name from ". $GLOBALS['engrave_shop']->table('user_rank').
	" where rank_points>=min_points and rank_points<max_points) as rank_name,".
	"(select discount from ". $GLOBALS['engrave_shop']->table('user_rank').
	" where rank_points>=min_points and rank_points<max_points) as discount".
	" from ". $GLOBALS['engrave_shop']->table('users').
	"where user_id=".$user_id;
	
	$myinfomation = $GLOBALS['engrave_shop_db']->getRow($sql);
	$sql="select COUNT(*) as coupon_count from ".
	$GLOBALS['engrave_shop']->table('user_coupon')." where OwnerId=".$user_id;
	$coupon_count = $GLOBALS['engrave_shop_db']->getOne($sql);
	
	return array('myinfomation' => $myinfomation,'coupon_count'=>$coupon_count);
}
?>
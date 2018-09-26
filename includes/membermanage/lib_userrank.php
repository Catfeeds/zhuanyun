<?php 
/**
 * ENGRAVE 数据访问：会员管理-会员
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_user.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 用户等级
 * @return unknown：用户等级对象列表
 */
function engrave_userrank_list()
{
	$sql='select rank_id,rank_name,min_points,max_points,discount,show_price,special_rank '.
	' from '.
	$GLOBALS['engrave_shop']->table('user_rank');
	
	$user_rank_list = $GLOBALS['engrave_shop_db']->getAll($sql);
	return $user_rank_list;
}
?>
<?php
/**
 *  用户发放优惠券 相关函数
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
 * 获得发放优惠券列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_issued_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('user_coupon');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT SN,user_coupon.CouponId,CouponName,OwnerId,Description,user_coupon.StatusId,CreateTime,ExpireTime,LastUse,RebatePoints,round(CouponValue,2) as ReCouponValue,UseTime " .
			" FROM " . $GLOBALS['ecs']->table('user_coupon') . " as user_coupon".
			" LEFT JOIN " . $GLOBALS['engrave']->table('coupon') .
			" ON engrave_coupon.CouponId = user_coupon.CouponId " .
			" where IsDeleteCoupons = 0 " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('issued_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获得用户列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_users_list($real_goods=1, $conditions = '')
{
// 	/* 记录总数 */
// 	$sql_count = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('users');
// 	$filter['record_count'] = $GLOBALS['db']->getOne($sql_count);
// 	/* 分页大小 */
// 	$filter = page_and_size($filter);

// 	$sql = "SELECT user_id,user_name " .
// 			" FROM " . $GLOBALS['ecs']->table('users') .
// 			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$sql = "SELECT user_id,user_name " .
		   " FROM " . $GLOBALS['ecs']->table('users');

// 	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['db']->getAll($sql);
// 	return array('user_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
	return array('user_list' => $row);
}

/**
 * 获得用户的名称
 *
 * @access  public
 * @access  $userid 用户的Id
 */
function engrave_get_username($userid)
{
	$sql = "SELECT user_name " .
			" FROM " . $GLOBALS['ecs']->table('users') . 
			" WHERE user_id = '" . $userid . "'";
	$username = $GLOBALS['db']->getOne($sql);
	return $username;
}

/**
 * 获得用户的名称
 *
 * @access  public
 * @access  $random SN
 */
function engrave_isexits_random($random)
{
	$sql = "SELECT COUNT(*) " .
			" FROM " . $GLOBALS['ecs']->table('user_coupon') .
			" WHERE SN = '" . $random . "'";
	$count = $GLOBALS['engrave_db']->getOne($sql);
	return $count;
}

/**
 * 取得优惠券列表
 * @return array 优惠券id => name
 */
function get_coupon_list()
{
	$sql = 'SELECT CouponId, CouponName FROM ' . $GLOBALS['engrave']->table('coupon') . ' ORDER BY CouponId';
	$res = $GLOBALS['db']->getAll($sql);

	$coupon_list = array();
	foreach ($res AS $row)
	{
		$coupon_list[$row['CouponId']] = addslashes($row['CouponName']);
	}

	return $coupon_list;
}

/**
 * 取得用户组管理列表
 * @return array 用户组id => name
 */
function get_ranks_list()
{
	$sql = 'SELECT rank_id, rank_name FROM ' . $GLOBALS['ecs']->table('user_rank') . ' ORDER BY rank_id';
	$res = $GLOBALS['db']->getAll($sql);
	
	$rank_list = array();
	foreach ($res AS $row)
	{
		$rank_list[$row['rank_id']] = addslashes($row['rank_name']);
	}
	
	return $rank_list;
}

/**
 * 获取优惠券列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_coupon($CouponId='')
{
	$conditions='';
	if($CouponId!='')
	{
		$conditions=$conditions." and CouponId='".$CouponId."'";
	}
	$sql = "select CouponId,TypeId,CouponName,CouponImage,Message,CouponValue,RebatePoints,Days,Roles,MinAmount,MaxAmount,StatusId,IsDeleteCoupon " .
			" FROM " . $GLOBALS['engrave']->table('coupon').
			" where IsDeleteCoupon=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 添加优惠券
 * @param unknown $issued：优惠券对象
 */
function engrave_issued_insert($issued)
{
	$sql="insert into ".$GLOBALS['ecs']->table('user_coupon').
	"(SN,CouponId,OwnerId,UserId,CreateTime,ExpireTime,Description,StatusId,IsDeleteCoupons) values('".
	$issued['SN']."','".$issued['CouponType']."','".$issued['SpecUser']."','".$issued['GourpMember']."','".$issued['CreateTime']."','".
	$issued['ExpireTime']."','".$issued['Description']."','".
	$issued['StatusId']."','".$issued['IsDeleteCoupons']."')";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 编辑优惠券
 * @param unknown $coupon：优惠券对象
 * @param unknown $CouponId：优惠券ID
 */
function engrave_coupon_update($coupon,$CouponId)
{
	$sql="update ".$GLOBALS['engrave']->table('coupon').
	"set CouponName = '".$coupon['CouponName'].
	"',Message = '".$coupon['Message'].
	"',CouponValue = '".$coupon['CouponValue'].
	"',RebatePoints = '".$coupon['RebatePoints'].
	"',Days = '".$coupon['Days'].
	"',MinAmount = '".$coupon['MinAmount'].
	"' where CouponId = '".$CouponId."'";

	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 用户发放优惠券删除
 * @param number $IsDeleteCoupons：删除标识
 * @param unknown $CUId：优惠券ID
 */
function engrave_issued_delete($IsDeleteCoupons=1,$CUId)
{
	$sql="update ".$GLOBALS['ecs']->table('user_coupon').
	" set IsDeleteCoupons='" . $IsDeleteCoupons . "' where CUId='".
	$CUId."'"; 

	return  $GLOBALS['engrave_db']->query($sql);
}
?>
<?php
/**
 *  优惠券 相关函数
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
 * 获得优惠券列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_coupon_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('coupon');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT CouponId,CouponName,Message,round(CouponValue,2) as ReCouponValue,Days,round(MinAmount,2) as ReMinAmount " .
			" FROM " . $GLOBALS['engrave']->table('coupon') .
			"where IsDeleteCoupon = 0 " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('coupon_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
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
 * @param unknown $coupon：优惠券对象
 */
function engrave_coupon_insert($coupon)
{
	$sql="insert into ".$GLOBALS['engrave']->table('coupon').
	"(CouponName,Message,CouponValue,RebatePoints,Days,MinAmount,IsDeleteCoupon) values('".
	$coupon['CouponName']."','".$coupon['Message']."','".$coupon['CouponValue']."','".$coupon['RebatePoints']."','".$coupon['Days']."','".
	$coupon['MinAmount']."','".$coupon['IsDeleteCoupon']."')";
	
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
 * 优惠券删除
 * @param number $IsDeleteCoupon：删除标识
 * @param unknown $CouponId：优惠券ID
 */
function engrave_coupon_delete($IsDeleteCoupon=1,$CouponId)
{
	$sql="update ".$GLOBALS['engrave']->table('coupon').
	" set IsDeleteCoupon='".$IsDeleteCoupon."' where CouponId='".
	$CouponId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
?>
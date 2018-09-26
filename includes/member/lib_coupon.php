<?php 
/**
 * ENGRAVE 数据访问：我的优惠券
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_coupon.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * 查询
 * @param number $user_id：用户ID
 * @param number $type：类型
 * @param number $startPage：起始页码
 * @return unknown：优惠券对象集合
 */
function engrave_coupon_list($user_id = 0,$type=0,$startPage=0)
{
	//获取当前日期
	$time = local_date('Y-m-d H:i:s');
	
	$where = "";
	if($type==0)
	{
		//未使用
		$where = ($where . " and user_coupon.StatusId = " . $type);
		$where = ($where . " and ExpireTime > '" . $time."'");
	}
	elseif($type == 2)
	{
		//已使用
		$where = ($where . " and user_coupon.StatusId = 1");
	}
	else{
		//过期
		$where = ($where . " and ExpireTime <= '" . $time."'");
	}
	$sql="select count(*) from " .
			$GLOBALS['engrave_shop']->table('user_coupon')." as user_coupon  ".
			" LEFT JOIN ".$GLOBALS['engrave']->table("coupon").
			"  ON engrave_coupon.CouponId = user_coupon.CouponId where IsDeleteCoupon = 0 and OwnerId=".$user_id.$where;
	$row = $GLOBALS['engrave_db']->getOne($sql);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'user_coupon.CouponId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];
	
	$sql="SELECT SN,user_coupon.CouponId,CouponName,OwnerId,Description, ".
	" user_coupon.StatusId,CreateTime,MinAmount, ".
	" ExpireTime,LastUse,RebatePoints,round(CouponValue,2) as ReCouponValue,UseTime".
	" FROM ".$GLOBALS['engrave_shop']->table("user_coupon")." as user_coupon  ".
	" LEFT JOIN ".$GLOBALS['engrave']->table("coupon").
	" ON engrave_coupon.CouponId = user_coupon.CouponId where IsDeleteCoupon = 0 and OwnerId=".
	$user_id . $where.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",".$pageSize;
	
	$coupon_list = $GLOBALS['engrave_shop_db']->getAll($sql);

	if($type==0)
	{
		foreach ($coupon_list as $key=>$val)
		{
			$coupon_list[$key]['Status'] = '有效';
		}
	}
	elseif($type == 2)
	{
		foreach ($coupon_list as $key=>$val)
		{
			$coupon_list[$key]['Status'] = '已用';
		}
	}
	else{
		foreach ($coupon_list as $key=>$val)
		{
			$coupon_list[$key]['Status'] = '过期';
		}
	}
	foreach($coupon_list as $key => $val)
	{
		if($val['UseTime'] == '0000-00-00 00:00:00')
		{
			$coupon_list[$key]['UseTime']='---';
		}
	}
	
	return array('coupon_list'=>$coupon_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
}

/**
 * 查询
 * @param number $user_id：用户ID
 * @param number $sn：序列号
 * @return unknown：优惠券对象集合
 */
function engrave_coupon_bysn($user_id = 0,$sn)
{
	//获取当前日期
	$sql="SELECT SN,user_coupon.CouponId,CouponName,OwnerId,Description, ".
			" user_coupon.StatusId,CreateTime,MinAmount,CouponValue, ".
			" ExpireTime,LastUse,RebatePoints,round(CouponValue,2) as ReCouponValue,UseTime".
			" FROM ".$GLOBALS['engrave_shop']->table("user_coupon")." as user_coupon  ".
			" LEFT JOIN ".$GLOBALS['engrave']->table("coupon").
			" ON engrave_coupon.CouponId = user_coupon.CouponId where IsDeleteCoupon = 0 and OwnerId=".
			$user_id ." and SN ='".$sn."'";

	$coupon = $GLOBALS['engrave_shop_db']->getRow($sql);
	if(isset($coupon['CreateTime']))
	{
		$coupon['CreateTime'] = local_date('Y-m-d H:i:s',$coupon['CreateTime']);
	}
	if(isset($coupon['ExpireTime']))
	{
		$coupon['ExpireTime'] = local_date('Y-m-d H:i:s',$coupon['ExpireTime']);
	}
	return $coupon;
}

/**
 * 优惠券使用
 * @param number $user_id：用户ID
 * @param string $sn：优惠券序列号
 * @param unknown $conn：数据库连接对象
 * @return string：若修改成功，返回true，反之，返回false1
 */
function engrave_coupon_used($user_id=0,$sn='',$conn)
{
	//获取当前日期
	$sql="update ".$GLOBALS['engrave_shop']->table("user_coupon")." as user_coupon  ".
	" set StatusId = 1 ".
	",UseTime='". local_date('Y-m-d H:i:s').
	"' where IsDeleteCoupons = 0 and OwnerId=".
	$user_id ." and SN ='".$sn."'";
	
	$coupon = mysql_query($sql);
	if($coupon!==false)
	{
		return true;
	}
	else{
		return false;
	}
}
?>
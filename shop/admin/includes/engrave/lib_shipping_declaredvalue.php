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
 * 获得线路管理-申报价格
 * @param number $shippingid：线路ID
 * @return  array:申报价格数组列表
 */
function engrave_shipping_declaredvalue_list($shippingid=0)
{
	$sql = "SELECT sdv_id,sdv_shippingid,sdv_minprice,sdv_maxprice,sdv_price,sdv_ispercent,".
			"ShippingName FROM " . $GLOBALS['engrave']->table('shipping_declaredvalue') .
			" left join ".$GLOBALS['engrave']->table('shipping') .
			" on sdv_shippingid=ShippingId".
			" where sdv_isdelete = 0 and sdv_shippingid=" .$shippingid;
			
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('shipping_declaredvalue_list' => $row);
}

/**
 * 根据ID获取阶段价格
 * @param number $sdv_id：阶段价格ID
 * @return unknown：阶段价格对象
 */
function engrave_shipping_declaredvalue($sdv_id=0)
{
	$sql = "SELECT sdv_id,sdv_shippingid,sdv_minprice,sdv_maxprice,sdv_price,sdv_ispercent,".
			"ShippingName FROM " . $GLOBALS['engrave']->table('shipping_declaredvalue') .
			" left join ".$GLOBALS['engrave']->table('shipping') .
			" on sdv_shippingid=ShippingId".
			" where sdv_isdelete = 0 and sdv_id=" .$sdv_id;
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 添加
 * @param unknown $sdv：申报价格对象
 */
function engrave_shipping_declaredvalue_insert($sdv)
{
	$sql="insert into " . $GLOBALS['engrave']->table('shipping_declaredvalue') .
	"(sdv_shippingid,sdv_minprice,sdv_maxprice,sdv_price,sdv_ispercent,sdv_isdelete) values('" .
	$sdv['sdv_shippingid']."','".$sdv['sdv_minprice']."','".$sdv['sdv_maxprice']."','".
	$sdv['sdv_price']."','".$sdv['sdv_ispercent']."','".$sdv['sdv_isdelete']."')";
	
	$val = $GLOBALS['engrave_db']->query($sql);
	
	if($val==1)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 修改
 * @param unknown $sdv：阶段价对象
 * @param number $sdv_id：阶段价格ID
 */
function engrave_shipping_declaredvalue_update($sdv,$sdv_id=0)
{
	$sql="update " . $GLOBALS['engrave']->table('shipping_declaredvalue') .
	" set sdv_shippingid='".$sdv['sdv_shippingid'].
	"',sdv_minprice='".$sdv['sdv_minprice'].
	"',sdv_maxprice='".$sdv['sdv_maxprice'].
	"',sdv_price='".$sdv['sdv_price'].
	"',sdv_ispercent='".$sdv['sdv_ispercent']."' where sdv_id=".$sdv_id;

	$val = $GLOBALS['engrave_db']->query($sql);
	
	if($val==1)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 删除
 * @param unknown $sdv_id:申报价格ID
 */
function engrave_shipping_declaredvalue_delete($sdv_id)
{

	$sql="update ".$GLOBALS['engrave']->table('shipping_declaredvalue').
	" set sdv_isdelete='1' where sdv_id='".
	$sdv_id."'";
	return  $GLOBALS['engrave_db']->query($sql);
}
?>
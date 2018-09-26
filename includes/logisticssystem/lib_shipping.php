<?php 
/**
 * ENGRAVE 数据访问：物流系统-线路
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_shipping.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 根据起始地、目的地获取线路
 * @param number $origin：起始地
 * @param number $destination：目的地
 * @return unknown：线路对象列表
 */
function engrave_shipping_list($origin=0,$destination=0)
{
	$sql='select ShippingId,ShippingCode,ShippingName,ShippingDEsc,UseAgreement,'.
	'ShippingTemplate,Origin,Destination,Weight,AddWeight,HeavyVolume,'.
	'FreeWeight,Price,AddPrice,AddCharge,VolumePrice,RegPrice,Discount,DecPrice,'.
	'MinPrice,MinWeight,MaxWeight,WeightId,WeightUnit,CurrencyId,CurrencyCode,'.
	'SupportCOD,IsSupPice,IsShippingVip,IsRegPrice,Agreement,RegIntegarl,StatusId,SortId,s_slpgid from '.
	$GLOBALS['engrave']->table('shipping').
	' where Origin='.$origin.' and Destination='.$destination;
	
	$shipping_list = $GLOBALS['engrave_db']-> getAll($sql);
	foreach ($shipping_list as $key=>$val)
	{
		if($val['IsSupPice'] == "1")
		{
			$shipping_list[$key]['ladderprice'] = engrave_shipping_ladderprice($val['s_slpgid']);
		}
	}
	return $shipping_list;
}

/**
 * 根据起始地、目的地获取线路
 * @param number $shippingid：线路ID
 * @return unknown：线路对象列表
 */
function engrave_shipping_byid($shippingid=0)
{
	$sql='select ShippingId,ShippingCode,ShippingName,ShippingDesc,UseAgreement,'.
			'ShippingTemplate,Origin,Destination,Weight,AddWeight,HeavyVolume,'.
			'FreeWeight,Price,AddPrice,AddCharge,VolumePrice,RegPrice,Discount,DecPrice,'.
			'MinPrice,MinWeight,MaxWeight,WeightId,WeightUnit,CurrencyId,CurrencyCode,'.
			'SupportCOD,IsSupPice,IsShippingVip,IsRegPrice,Agreement,RegIntegarl,StatusId,SortId from '.
			$GLOBALS['engrave']->table('shipping').
			' where ShippingId='.$shippingid;

	$shipping_list = $GLOBALS['engrave_db']-> getRow($sql);
	return $shipping_list;
}

/**
 * 阶梯价格
 * @param number $slp_slpgid：线路所属分组ID
 */
function engrave_shipping_ladderprice($slp_slpgid=0)
{
	$sql="select slp_id,slp_slpgid,slp_minweight,slp_maxweight,slp_price,".
	"slp_serviceprice,slp_discount,slp_time,slp_isdelete".
 	" from ".
	$GLOBALS['engrave']->table('shipping_ladderprice').
	" where slp_isdelete=0 and slp_slpgid=".$slp_slpgid;
	
	return $GLOBALS['engrave_db']->getAll($sql);
}
?>
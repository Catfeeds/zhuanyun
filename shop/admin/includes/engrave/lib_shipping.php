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
 * 获得线路列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_shipping_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipping');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT ShippingId,ShippingCode,ShippingName,ShippingDesc,UseAgreement,".
	"ShippingTemplate,Origin,Destination,Weight,AddWeight,".
	"HeavyVolume,FreeWeight,Price,AddPrice,AddCharge,VolumePrice,RegPrice,Discount,".
	"DecPrice,MinPrice,MinWeight,MaxWeight,WeightId,WeightUnit,CurrencyId,".
	"CurrencyCode,SupportCOD,IsSupPice,IsShippingVip,IsRegPrice,Agreement,RegIntegarl,StatusId," .
	"e_currecy.Name as Name,Code,Symbol,e_area.Name as area_name,s_slpgid ".
	" FROM " . $GLOBALS['engrave']->table('shipping') .
	" left join ".$GLOBALS['engrave']->table('area')." as e_area on Origin = Id" .
	" left join ".$GLOBALS['engrave']->table('currecy')." as e_currecy on CurrencyId=CId".
	" where IsDeleteShipping = 0 " .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('shipping_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获取线路管理列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_shipping($ShippingId='')
{
	$conditions='';
	if($ShippingId!='')
	{
		$conditions=$conditions." and ShippingId='".$ShippingId."'";
	}
	$sql = "select ShippingId,ShippingName,IsSupPice,IsShippingVip,ShippingTemplate,ShippingCode,Origin,Destination,WeightId," .
	       "CurrencyId,Weight,AddWeight,HeavyVolume,VolumePrice,MinWeight,MinPrice,".
	       "MaxWeight,FreeWeight,Price,AddPrice,Discount,IsRegPrice,AddCharge,ShippingDesc,Agreement,RegIntegarl,".
	       "UseAgreement,SortId,IsDeleteShipping,s_slpgid " .
		   " FROM " . $GLOBALS['engrave']->table('shipping').
		   " where IsDeleteShipping=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加线路管理
 * @param unknown $shipping：线路管理对象
 */
function engrave_shipping_insert($shipping)
{
	$sql="insert into " . $GLOBALS['engrave']->table('shipping') .
	"(ShippingName,IsSupPice,IsShippingVip,ShippingTemplate,ShippingCode,Origin,Destination,WeightId," .
	"CurrencyId,Weight,AddWeight,HeavyVolume,VolumePrice,MinWeight,MinPrice,".
	"MaxWeight,FreeWeight,Price,AddPrice,Discount,IsRegPrice,AddCharge,ShippingDesc,Agreement,RegIntegarl,".
	"UseAgreement,SortId,IsDeleteShipping,s_slpgid) values('" .
	$shipping['ShippingName']."','".$shipping['IsSupPice']."','".$shipping['IsShippingVip']."','".
	$shipping['ShippingTemplate']."','".$shipping['ShippingCode']."','".$shipping['Origin']."','".
	$shipping['Destination']."','".$shipping['WeightId']."','".$shipping['CurrencyId']."','".
	$shipping['Weight']."','".$shipping['AddWeight']."','".$shipping['HeavyVolume']."','".
	$shipping['VolumePrice']."','".$shipping['MinWeight']."','".$shipping['MinPrice']."','".
	$shipping['MaxWeight']."','".$shipping['FreeWeight']."','".$shipping['Price']."','".
	$shipping['AddPrice']."','".$shipping['Discount']."','".$shipping['IsRegPrice']."','".$shipping['AddCharge']."','".
	$shipping['ShippingDesc']."','".$shipping['Agreement']."','".$shipping['RegIntegarl']."','".
	$shipping['UseAgreement']."','".$shipping['SortId']."','".$shipping['IsDeleteShipping']."','".$shipping['slp_slpgid']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑线路管理
 * @param unknown $shipping：线路管理对象
 * @param unknown $ShippingId：线路ID
 */
function engrave_shipping_update($shipping,$ShippingId)
{
	$sql="update ".$GLOBALS['engrave']->table('shipping').
	"set ShippingName='".$shipping['ShippingName'].
	"',IsSupPice='".$shipping['IsSupPice'].
	"',IsShippingVip='".$shipping['IsShippingVip'].
	"',ShippingTemplate='".$shipping['ShippingTemplate'].
	"',ShippingCode='".$shipping['ShippingCode'].
	"',Origin='".$shipping['Origin'].
	"',Destination='".$shipping['Destination'].
	"',WeightId='".$shipping['WeightId'].
	"',CurrencyId='".$shipping['CurrencyId'].
	"',Weight='".$shipping['Weight'].
	"',AddWeight='".$shipping['AddWeight'].
	"',HeavyVolume='".$shipping['HeavyVolume'].
	"',MinWeight='".$shipping['MinWeight'].
	"',MinPrice='".$shipping['MinPrice'].
	"',MaxWeight='".$shipping['MaxWeight'].
	"',FreeWeight='".$shipping['FreeWeight'].
	"',Price='".$shipping['Price'].
	"',AddPrice='".$shipping['AddPrice'].
	"',Discount='".$shipping['Discount'].
	"',IsRegPrice='".$shipping['IsRegPrice'].
	"',AddCharge='".$shipping['AddCharge'].
	"',ShippingDesc='".$shipping['ShippingDesc'].
	"',Agreement='".$shipping['Agreement'].
	"',RegIntegarl='".$shipping['RegIntegarl'].
	"',s_slpgid='".$shipping['slp_slpgid'].
	"',UseAgreement='".$shipping['UseAgreement'].
	"',SortId='".$shipping['SortId'].
	"' where ShippingId = '".$ShippingId."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/*
 * 线路管理的删除
*
*/
function engrave_shipping_delete($IsDeleteShipping=1,$ShippingId)
{
	$sql="update ".$GLOBALS['engrave']->table('shipping').
	" set IsDeleteShipping='".$IsDeleteShipping."' where ShippingId='".
	$ShippingId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 取得起源地和目的地列表
 * @return array 区域类型id => name
 */
function engrave_area_list()
{
	$sql = 'SELECT Id, Name FROM ' .
	 $GLOBALS['engrave']->table('area') . 
	' WHERE ParentId = 0 and IsDeleteArea = 0 ORDER BY Id';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$area_list = array();
	foreach ($res AS $row)
	{
		$area_list[$row['Id']] = addslashes($row['Name']);
	}

	return $area_list;
}
/*
 * 获取重量单位的列表
* enum-> ItemName ItemValue
*/
function engrave_weight_list()
{
	$sql = 'SELECT EnumId,CONCAT(ItemName , "(" , ItemValue , ")") as NameValue FROM ' . $GLOBALS['engrave']->table('enum') .
	'WHERE GroupId = 2 AND IsDeleteEnum = 0 ORDER BY EnumId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$weight_list = array();
	foreach ($res AS $row)
	{
		$weight_list[$row['EnumId']] = addslashes($row['NameValue']);
	}

	return $weight_list;
}
?>
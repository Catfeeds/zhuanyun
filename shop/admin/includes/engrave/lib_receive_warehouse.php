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
 * 获得网站分类列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_warehouse_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('warehouse');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);

	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'HouseId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT HouseId,HouseName,Province, County,ZipCode, Tel, Note, Statue as Status, IsDefault,  HouseCode,Address,round(Storage,2) as StorageAf,round(Warehousing,2) as WarehousingAf,round(Rollover,2) as RolloverAf,round(Operate,2) as OperateAf,CurrencyCode , lp_id" .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 ".
			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('warehouse_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取仓库管理列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_warehouse($HouseId='')
{
	$conditions='';
	if($HouseId!='')
	{
		$conditions=$conditions." and HouseId='".$HouseId."'";
	}
	$sql = "select HouseId,AreaId,AreaName,HouseName,IsDefault,HouseCode,Title,CurrencyId,CurrencyCode," .
	       "WeightUnit,SizeUnit,VolumeUnit,Storage,WarehousingBM,Warehousing,RolloverBM,".
	       "Rollover,Operate,UpPackage,OutsideCost,Address,County,City,Province,ZipCode,wh_weight,".
	       "Note,Tel,SortId,Statue,IsDeleteHouse " .
			" FROM " . $GLOBALS['engrave']->table('warehouse').
			" where IsDeleteHouse=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}


/**
 * 获取默认仓库
 * @return multitype:unknown:默认仓库对象
 */
function engrave_warehouse_default()
{
	$sql = "SELECT HouseId,HouseName,HouseCode,Title,FirstName,LastName,Address,".
			"County,City,Province,ZipCode,Tel,Note,round(Storage,2) as Storage,".
			"WarehousingBM,round(Warehousing,2) as Warehousing,RolloverBM,round(Rollover,2) as Rollover,".
			"OperateBM,round(Operate,2) as Operate,UpPackage,OutsideCost,WeightUnit,SizeUnit,VolumeUnit,".
			"CurrencyCode,IsDefault,Statue " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDefault = 1";

	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 根据订单ID，获取仓库信息
 * @param number $orderid：订单ID
 */
function engrave_warehouse_by_orderid($orderid=0)
{
	$sql = "select HouseId,AreaId,AreaName,HouseName,IsDefault,HouseCode,Title,CurrencyId,CurrencyCode," .
			"WeightUnit,wh_weight,SizeUnit,VolumeUnit,Storage,WarehousingBM,Warehousing,RolloverBM,".
			"Rollover,Operate,UpPackage,OutsideCost,Address,County,City,Province,ZipCode,wh_weight,".
			"Note,Tel,SortId,Statue,IsDeleteHouse, " .
			"pck_intime,order_time ".
			" FROM " . $GLOBALS['engrave']->table('warehouse').
			" left join ".$GLOBALS['engrave']->table('package').
			" on pck_warehouseid=HouseId".
			" left join ".$GLOBALS['engrave']->table('order').
			" on pck_orderid=order_id".
			" where order_id =" . $orderid;
	//虽然包裹对应订单为多对1的关系，但是，包裹、订单肯定都属于同一个仓库，所以只获取第一行
	
	$warehouse = $GLOBALS['engrave_db']->getRow($sql);
	//$warehouse['pck_timecount'] = ceil(($warehouse['order_time'] - $warehouse['pck_intime'])/86400);
	$warehouse['pck_timecount'] = ceil((gmtime()-$warehouse['pck_intime'])/86400);
	return $warehouse;
}

/**
 * 添加仓库管理
 * @param unknown $warehouse：仓库管理对象
 */
function engrave_warehouse_insert($warehouse)
{
	$sql="insert into " . $GLOBALS['engrave']->table('warehouse') .
	"(AreaId,AreaName,HouseName,IsDefault,HouseCode,Title,CurrencyId,CurrencyCode," .
	"WeightUnit,wh_weight,SizeUnit,VolumeUnit,Storage,WarehousingBM,Warehousing,RolloverBM,".
	"Rollover,Operate,UpPackage,OutsideCost,Address,County,City,Province,ZipCode,".
	"Note,Tel,SortId,Statue,IsDeleteHouse) values('" .
	$warehouse['AreaId']."','".$warehouse['AreaName']."','".$warehouse['HouseName']."','".
	$warehouse['IsDefault']."','".$warehouse['HouseCode']."','".$warehouse['Title']."','".
	$warehouse['CurrencyId']."','".$warehouse['CurrencyCode']."','".$warehouse['WeightUnit']."','".
	$warehouse['wh_weight']."','".
	$warehouse['SizeUnit']."','".$warehouse['VolumeUnit']."','".$warehouse['Storage']."','".
	$warehouse['WarehousingBM']."','".$warehouse['Warehousing']."','".$warehouse['RolloverBM']."','".
	$warehouse['Rollover']."','".$warehouse['Operate']."','".$warehouse['UpPackage']."','".
	$warehouse['OutsideCost']."','".$warehouse['Address']."','".$warehouse['County']."','".
	$warehouse['City']."','".$warehouse['Province']."','".$warehouse['ZipCode']."','".
	$warehouse['Note']."','".$warehouse['Telephone']."','".$warehouse['SortId']."','".$warehouse['State']."','".$warehouse['IsDeleteService']."')";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑仓库管理
 * @param unknown $warehouse：仓库管理对象
 * @param unknown $HouseId：仓库ID
 */
function engrave_warehouse_update($warehouse,$HouseId)
{
	$sql="update ".$GLOBALS['engrave']->table('warehouse').
	"set AreaId='".$warehouse['AreaId'].
	"',AreaName='".$warehouse['AreaName'].
	"',HouseName='".$warehouse['HouseName'].
	"',IsDefault='".$warehouse['IsDefault'].
	"',HouseCode='".$warehouse['HouseCode'].
	"',Title='".$warehouse['Title'].
	"',CurrencyId='".$warehouse['CurrencyId'].
	"',CurrencyCode='".$warehouse['CurrencyCode'].
	"',WeightUnit='".$warehouse['WeightUnit'].
	"',wh_weight='".$warehouse['wh_weight'].
	"',SizeUnit='".$warehouse['SizeUnit'].
	"',VolumeUnit='".$warehouse['VolumeUnit'].
	"',Storage='".$warehouse['Storage'].
	"',WarehousingBM='".$warehouse['WarehousingBM'].
	"',Warehousing='".$warehouse['Warehousing'].
	"',RolloverBM='".$warehouse['RolloverBM'].
	"',Rollover='".$warehouse['Rollover'].
	"',Operate='".$warehouse['Operate'].
	"',UpPackage='".$warehouse['UpPackage'].
	"',OutsideCost='".$warehouse['OutsideCost'].
	"',Address='".$warehouse['Address'].
	"',County='".$warehouse['County'].
	"',City='".$warehouse['City'].
	"',Province='".$warehouse['Province'].
	"',ZipCode='".$warehouse['ZipCode'].
	"',Tel='".$warehouse['Telephone'].
	"',Note='".$warehouse['Note'].
	"',SortId='".$warehouse['SortId'].
	"',Statue='".$warehouse['State'].
	"' where HouseId='".$HouseId."'";

	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 取消所有默认仓库
 */
function engrave_warehouse_update_default()
{
	$sql="update ".$GLOBALS['engrave']->table('warehouse').
	" set IsDefault='0'" .
	" where IsDefault='1'";
	
	return $GLOBALS['engrave_db']->query($sql);
}

function engrave_warehouse_update_status($id, $val)
{
	$sql="update ".$GLOBALS['engrave']->table('warehouse').
	" set Statue='".$val."'" .
	" where HouseId='".$id."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}


/*
 * 仓库管理的删除
 * 
 */
function engrave_warehouse_delete($IsDeleteHouse=1,$HouseId)
{
	$sql="update ".$GLOBALS['engrave']->table('warehouse').
	" set IsDeleteHouse='".$IsDeleteHouse."' where HouseId='".
	$HouseId."'";
	
	return  $GLOBALS['engrave_db']->query($sql);
}
/*
 * 获取区域的列表
 * area->Name
 */
function engrave_area_list()
{
	$sql = 'SELECT Id, Name FROM ' . $GLOBALS['engrave']->table('area') . 
	       'WHERE ParentId = 0 and IsDeleteArea = 0 ORDER BY Id';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$area_list = array();
	foreach ($res AS $row)
	{
		$area_list[$row['Id']] = addslashes($row['Name']);
	}
	
	return $area_list;
}

/*
 * 获取区域名称
 * area->name
 */
function engrave_area_name($areaid)
{
	$sql = "SELECT Name " .
			" FROM " . $GLOBALS['engrave']->table('area') .
			" WHERE Id = '" . $areaid . "'";
	$AreaName = $GLOBALS['engrave_db']->getOne($sql);
	return $AreaName;	
}
/*
 * 获取货币代码
* currency->symbol
*/
function engrave_currecy_symbol($cid)
{
	$sql = "SELECT Symbol " .
			" FROM " . $GLOBALS['engrave']->table('currecy') .
			" WHERE CId = '" . $cid . "'";
	$CurrencyName = $GLOBALS['engrave_db']->getOne($sql);
	return $CurrencyName;
}
?>
<?php 
/**
 * ENGRAVE 数据访问：物流系统-仓库
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_warehouse.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 查询所有：仓库
 * @return multitype:unknown：仓库对象集合
 */
function engrave_warehouse_list()
{
	$sql = "SELECT HouseId,HouseName,HouseCode,Title,FirstName,LastName,Address,".
	"County,City,Province,ZipCode,Tel,Note,round(Storage,2) as Storage,".
	"WarehousingBM,round(Warehousing,2) as Warehousing,RolloverBM,round(Rollover,2) as Rollover,".
	"OperateBM,round(Operate,2) as Operate,UpPackage,OutsideCost,WeightUnit,SizeUnit,VolumeUnit,".
	"CurrencyCode,IsDefault,Statue " .
	" FROM " . $GLOBALS['engrave']->table('warehouse') .
	" WHERE IsDeleteHouse = 0 AND Statue=1 ORDER BY IsDefault Desc ";

	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('warehouse_list' => $row);
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
 * 自动设定默认仓库
 * @param number $max_user：最大人数
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_setdefault_warehouse($max_user = 0)
{
	$sql = "SELECT HouseId,HouseName,HouseCode,Title,FirstName,LastName,Address,".
			"County,City,Province,ZipCode,Tel,Note,round(Storage,2) as Storage,".
			"WarehousingBM,round(Warehousing,2) as Warehousing,RolloverBM,round(Rollover,2) as Rollover,".
			"OperateBM,round(Operate,2) as Operate,UpPackage,OutsideCost,WeightUnit,SizeUnit,VolumeUnit,".
			"CurrencyCode,IsDefault,Statue " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 order by HouseId asc";
	
	$list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($list as $key=>$val)
	{
		$houseId = intval($val['HouseId']);
		
		$maxusers = engrave_warehouse_maxusers_byid($houseId);
		if($maxusers < $max_user)
		{
			$sql = "update ". $GLOBALS['engrave']->table('warehouse') .
			" set IsDefault = 0";
			$GLOBALS['engrave_db']->query($sql);
			$sql = "update ". $GLOBALS['engrave']->table('warehouse') .
			" set IsDefault = 1 where HouseId=".$houseId;
			$GLOBALS['engrave_db']->query($sql);
			return true;
		}
	}
	return false;
}

/**
 * 根据用户所在仓库ID，获取默认仓库
 * @param number $houseid：仓库ID
 * @return multitype:unknown:默认仓库对象
 */
function engrave_warehouse_default_byid($houseid=0)
{
	$sql = "SELECT HouseId,HouseName,HouseCode,Title,FirstName,LastName,Address,".
			"County,City,Province,ZipCode,Tel,Note,round(Storage,2) as Storage,".
			"WarehousingBM,round(Warehousing,2) as Warehousing,RolloverBM,round(Rollover,2) as Rollover,".
			"OperateBM,round(Operate,2) as Operate,UpPackage,OutsideCost,WeightUnit,SizeUnit,VolumeUnit,".
			"CurrencyCode,IsDefault,Statue " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 and HouseId=".$houseid;
	
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 获取仓库人数上限
 * @param number $houseid：仓库ID
 */
function engrave_warehouse_maxusers_byid($houseid = 0)
{
	$sql="select count(*) from ".$GLOBALS['engrave_shop']->table('users').
	" where isdelete = 0 and user_warehouseid = ".$houseid;
	
	return $GLOBALS['engrave_shop_db']->getOne($sql);
}

/**
 * 查询所有：仓库-货币
 * @param unknown $houseid：仓库ID
 * @return multitype:unknown：仓库对象集合
 */
function engrave_warehouse_currecy($houseid)
{
	$sql = "SELECT HouseId,HouseName,HouseCode,Address,Title,FirstName,LastName,Address,".
			"County,City,Province,round(Storage,2) as StorageAf,".
			"round(Warehousing,2) as WarehousingAf,round(Rollover,2) as RolloverAf,".
			"round(Operate,2) as OperateAf,CurrencyCode,AreaName,Province,City,Address," .
			"WeightUnit,Name,Code,Symbol,ExchageRate,AreaId".
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" left join ". $GLOBALS['engrave']->table('currecy') .
			" on CurrencyId=CId".
			" WHERE IsDeleteHouse = 0 and HouseId=".$houseid;
	
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return array('warehouse' => $row);
}

/**
 * 查询所有：仓库
 * @return multitype:unknown：仓库对象集合-option
 */
function engrave_warehouse_option($default_houseid=0, $leavePort="")
{
	$sql = "SELECT HouseId,AreaId,HouseName,HouseCode,Address,round(Storage,2) as StorageAf,round(Warehousing,2) as WarehousingAf,round(Rollover,2) as RolloverAf,round(Operate,2) as OperateAf,CurrencyCode, lp_id " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 ";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['HouseId'] . '" ';
		if($leavePort) {
			$select .=" data-lpid=".$val['lp_id']
					." data-portname='".$leavePort[$val['lp_id']]['port_name']."' ";

		}
		if($default_houseid == intval($val['HouseId']))
		{
			$select.=' selected="true" ';
		}
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['HouseName']), ENT_QUOTES) . '</option>';
	}
	
	return $select;
}

/**
 * 查询所有：仓库
 * @return multitype:unknown：仓库对象集合-option
 */
function engrave_warehouse_Area_option($default_houseid=0)
{
	$sql = "SELECT HouseId,AreaId,HouseName,HouseCode,Address,round(Storage,2) as StorageAf,round(Warehousing,2) as WarehousingAf,round(Rollover,2) as RolloverAf,round(Operate,2) as OperateAf,CurrencyCode " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 ";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['AreaId'] . '" ';
		if($default_houseid == intval($val['HouseId']))
		{
			$select.=' selected="true" ';
		}
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['HouseName']), ENT_QUOTES) . '</option>';
	}
	
	return $select;
}
?>
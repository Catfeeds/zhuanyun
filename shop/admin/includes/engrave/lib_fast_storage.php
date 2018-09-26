<?php
/**
 * ENGRAVE 数据访问：包裹管理-包裹管理
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_fast_storage.php 17217 2015年1月8日 10:04:07 zhangxingpeng $
 */
/**
 * 获得该订单号的包裹ID
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_pckid($expressNumber)
{
	$sql = "SELECT pck_id " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$pak_id = $GLOBALS['engrave_db']->getOne($sql);
	return $pak_id;
}

/**
 * 获得该订单号的用户ID
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_userid($expressNumber)
{
	$sql = "SELECT pck_userid " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$username = $GLOBALS['engrave_db']->getOne($sql);
	return $username;
}

/**
 * 获得该订单号的下单时间
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_ordertime($expressNumber)
{
	$sql = "SELECT pck_intime " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$time= $GLOBALS['engrave_db']->getOne($sql);
	$ordertime = local_date($GLOBALS['_CFG']['time_format'], $time);
	return $ordertime;
}

/**
 * 获得该订单号的状态
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_status($expressNumber)
{
	$sql = "SELECT pck_packagestatus " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$status = $GLOBALS['engrave_db']->getOne($sql);
	return $status;
}

/**
 * 获得该订单号的客户编号
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_customnum($expressNumber)
{
	$sql = "SELECT pck_customnum " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$customnum = $GLOBALS['engrave_db']->getOne($sql);
	return $customnum;
}

/**
 * 获得该订单号的客户编号
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_storagecode($expressNumber)
{
	$sql = "SELECT pck_storagecode " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$storagecode = $GLOBALS['engrave_db']->getOne($sql);
	return $storagecode;
}

/**
 * 获得该订单号的重量
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_weight($expressNumber)
{
	$sql = "SELECT pck_weight " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$weight = $GLOBALS['engrave_db']->getOne($sql);
	return $weight;
}

/**
 * 获得该订单号的重量单位
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_weightunit($expressNumber)
{
	$sql = "SELECT WeightUnit " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" LEFT JOIN ". $GLOBALS['engrave']->table('warehouse') .
			" ON pck_warehouseid = HouseId".
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$weightunit = $GLOBALS['engrave_db']->getOne($sql);
	return $weightunit;
}

/**
 * 获得该订单号的仓库
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_warehouse($expressNumber)
{
	$sql = "SELECT pck_warehouseid " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$warehouse = $GLOBALS['engrave_db']->getOne($sql);
	return $warehouse;
}

/**
 * 获得该订单号的仓库位置
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_invlocation($expressNumber)
{
	$sql = "SELECT pck_inventorylocation " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$invlocation = $GLOBALS['engrave_db']->getOne($sql);
	return $invlocation;
}

/**
 * 获得该订单号的长度
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_sizelength($expressNumber)
{
	$sql = "SELECT pck_sizelength " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$sizelength = $GLOBALS['engrave_db']->getOne($sql);
	return $sizelength;
}

/**
 * 获得该订单号的宽
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_sizewidth($expressNumber)
{
	$sql = "SELECT pck_sizewidth " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$sizewidth = $GLOBALS['engrave_db']->getOne($sql);
	return $sizewidth;
}

/**
 * 获得该订单号的高
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_sizeheight($expressNumber)
{
	$sql = "SELECT pck_sizeheight " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$sizeheight = $GLOBALS['engrave_db']->getOne($sql);
	return $sizeheight;
}

/**
 * 获得该订单号的尺寸单位
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_sizeunit($expressNumber)
{
	$sql = "SELECT SizeUnit " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" LEFT JOIN ". $GLOBALS['engrave']->table('warehouse') .
			" ON pck_warehouseid = HouseId".
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$sizeunit = $GLOBALS['engrave_db']->getOne($sql);
	return $sizeunit;
}

/**
 * 获得该订单号的是否存在问题
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_trouble($expressNumber)
{
	$sql = "SELECT pck_istrouble " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$trouble = $GLOBALS['engrave_db']->getOne($sql);
	return $trouble;
}

/**
 * 获得该订单号的管理员备注
 *
 * @access  public
 * @access  $expressNumber 用户的Id
 */
function engrave_get_adminremark($expressNumber)
{
	$sql = "SELECT pck_adminremark " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_isdelete = 0 AND pck_expressnumber = '" . $expressNumber . "'";
	$adminRemark = $GLOBALS['engrave_db']->getOne($sql);
	return $adminRemark;
}

/**
 * 获得仓库列表
 *
 * @return multitype:string
 */
function get_warehouse_list()
{
	$sql = 'SELECT HouseId, HouseName FROM ' . $GLOBALS['engrave']->table('warehouse') .
	' WHERE  IsDeleteHouse = 0 ORDER BY HouseId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$warehouse_list = array();
	foreach ($res AS $row)
	{
		$warehouse_list[$row['HouseId']] = addslashes($row['HouseName']);
	}

	return $warehouse_list;
}

/**
 * 添加快速入库
 * @param unknown $package：包裹订单对象
 */
function engrave_fast_storage_insert($package)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package').
	"(pck_userid,pck_warehouseid,pck_expressnumber,pck_customnum".
	",pck_weight,pck_sizelength,pck_sizewidth,pck_sizeheight".
	",pck_storagecode,pck_adminremark,pck_packagestatus,pck_inventorylocation".
	",pck_intime,pck_istrouble,pck_isdelete) values('".
	$package['pck_userid']."','".$package['pck_warehouseid']."','".$package['pck_expressnumber'].
	"','".$package['pck_customnum']."','".$package['pck_weight']."','".$package['pck_sizelength']."','".
	$package['pck_sizewidth']."','".$package['pck_sizeheight']."','".$package['pck_storagecode']."','".
	$package['pck_adminremark']."','".$package['pck_packagestatus']."','".$package['pck_inventorylocation'].
	"','".$package['pck_intime']."','".	$package['pck_istrouble']."','".$package['pck_isdelete']."')";

	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}
/**
 * 编辑包裹订单
 * @param unknown $package：包裹对象
 * @param unknown $PackageId：包裹订单ID
 */
function engrave_fast_storage_update($package,$PackageId)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_warehouseid = '".$package['pck_warehouseid'].
	"',pck_customnum = '".$package['pck_customnum'].
	"',pck_expressnumber = '".$package['pck_expressnumber'].
	"',pck_weight = '".$package['pck_weight'].
	"',pck_sizelength = '".$package['pck_sizelength'].
	"',pck_sizewidth = '".$package['pck_sizewidth'].
	"',pck_sizeheight = '".$package['pck_sizeheight'].
	"',pck_storagecode = '".$package['pck_storagecode'].
	"',pck_adminremark = '".$package['pck_adminremark'].
	"',pck_packagestatus = '".$package['pck_packagestatus'].
	"',pck_inventorylocation = '".$package['pck_inventorylocation'].
	"',pck_intime = '".$package['pck_intime'].
	"',pck_istrouble = '".$package['pck_istrouble'].
	"' where pck_id = '".$PackageId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
?>
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
 * $Id: lib_package.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */


/**
 * 获取包裹列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 * @param number $pck_packagestatus:包裹状态：0-未到货、已入库、1-已过期
 */
function engrave_package_list($isdelete=0, $conditions = '',$pck_packagestatus=0)
{
	
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('package').
	" left join " . $GLOBALS['engrave']->table('warehouse').
	" on pck_warehouseid=HouseId".
	" where pck_isdelete=".$isdelete;

	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'pck_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "select pck_id,pck_warehouseid,pck_expressid,pck_expressnumber,pck_assess,pck_weight,pck_ordersite,".
	"pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight,pck_userremark,pck_storagecode,pck_isaward,".
	"pck_adminremark,pck_packagestatus,pck_intime,pck_inventorylocation,pck_istrouble,user_name as pck_username from ".
	$GLOBALS['engrave']->table('package') . " as engravepackage".
	" LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as ecsusers".
	" on engravepackage.pck_userid=ecsusers.user_id".
	" left join " . $GLOBALS['engrave']->table('warehouse').
	" on pck_warehouseid=HouseId".
	" where pck_isdelete= ".$isdelete.$conditions.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$package_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($package_list AS $key=>$val)
	{
		$package_list[$key]['pck_intime'] = local_date($GLOBALS['_CFG']['time_format'], $val['pck_intime']);
		$package_id = intval($val['pck_id']);
		//获取增值服务里列表
		$package_list[$key]['pck_service_list'] = engrave_package_services_list_bypckid($package_id);
	}
	return array('package_list' => $package_list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 添加包裹订单
 * @param unknown $package：包裹订单对象
 */
function engrave_package_insert($package)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package').
	"(pck_warehouseid,pck_expressid,pck_expresstelephone,pck_expressnumber,pck_assess,pck_name".
	",pck_weight,pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight".
	",pck_userremark,pck_userid,pck_storagecode,pck_adminremark,pck_packagestatus,pck_inventorylocation".
	",pck_intime,pck_istrouble,pck_isaward,pck_isdelete) values('".
	$package['pck_warehouseid']."','".$package['pck_expressid']."','".$package['pck_expresstelephone']."','".$package['pck_expressnumber']."','".$package['pck_assess']."','".
	$package['pck_name']."','".$package['pck_weight']."','".$package['pck_ordersite']."','".$package['pck_ordernumber']."','".$package['pck_sizelength']."','".
	$package['pck_sizewidth']."','".$package['pck_sizeheight']."','".$package['pck_userremark']."','".$package['pck_userid']."','".$package['pck_storagecode']."','".
	$package['pck_adminremark']."','".$package['pck_packagestatus']."','".$package['pck_inventorylocation']."','".$package['pck_intime']."','".
	$package['pck_istrouble']."','".$package['pck_isaward']."','".$package['pck_isdelete']."')";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 根据包裹ID，包裹增值服务
 * @param number $package_id:包裹ID
 * @return unknown：包裹增值服务
 */
function engrave_package_services_list_bypckid($package_id = 0)
{
	$sql = "select RecordId,RecordNo,ItemId,ItemType,HouseId,orderservice.ServiceId,".
	"ShippingOrder,Weight,ServicePrice,IsPhoto,orderservice.Description,Attach,".
	"UserId,Tel,AddTime,CheckTime,AdminId,IsPaid,".
	"StatusId,CheckResult,orderservice.IsDeleteService,ps_packageid,".
	"ModuleId,Module,ServiceName".
	" from ".
	$GLOBALS['engrave']->table('orderservice').
	"as orderservice left join ".$GLOBALS['engrave']->table('services').
	"as services on orderservice.ServiceId = services.ServiceId".
	" where ps_packageid=".$package_id;
	
	$order_services_list = $GLOBALS['engrave_db']->getAll($sql);
	
	return $order_services_list;
}

/**
 * 编辑包裹订单
 * @param unknown $package：包裹对象
 * @param unknown $PackageId：包裹订单ID
 */
function engrave_package_update($package,$PackageId)
{
	//获取当前状态
	$sql="select pck_packagestatus from ".$GLOBALS['engrave']->table('package').
	" where pck_id = '".$PackageId."'";
	$pck_packagestatus = $GLOBALS['engrave_db']->getOne($sql);
	$pck_packagestatus = intval($pck_packagestatus);
	if($pck_packagestatus < intval($package['pck_packagestatus']))
	{
		$condition = "',pck_packagestatus = '".$package['pck_packagestatus'];
	}
	
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_warehouseid = '".$package['pck_warehouseid'].
	"',pck_expressid = '".$package['pck_expressid'].
	"',pck_expresstelephone = '".$package['pck_expresstelephone'].
	"',pck_expressnumber = '".$package['pck_expressnumber'].
	"',pck_assess = '".$package['pck_assess'].
	"',pck_name = '".$package['pck_name'].
	"',pck_weight = '".$package['pck_weight'].
	"',pck_ordersite = '".$package['pck_ordersite'].
	"',pck_ordernumber = '".$package['pck_ordernumber'].
	"',pck_sizelength = '".$package['pck_sizelength'].
	"',pck_sizewidth = '".$package['pck_sizewidth'].
	"',pck_sizeheight = '".$package['pck_sizeheight'].
	"',pck_userremark = '".$package['pck_userremark'].
	"',pck_userid = '".$package['pck_userid'].
	"',pck_storagecode = '".$package['pck_storagecode'].
	"',pck_adminremark = '".$package['pck_adminremark'].
	$condition.
	"',pck_inventorylocation = '".$package['pck_inventorylocation'].
	"',pck_intime = '".$package['pck_intime'].
	"',pck_istrouble = '".$package['pck_istrouble'].
	"',pck_isaward = '".$package['pck_isaward'].
	"' where pck_id = '".$PackageId."'";

	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 编辑包裹订单:带事务---只能将状态改为比现在值大，不能将状态值改为比现在小
 * @param number $package：包裹状态
 * @param number $pck_orderid：订单ID
 * @param unknown $conn：数据库连接对象
 */
function engrave_package_update_trans($pck_packagestatus=0,$pck_orderid=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_packagestatus = '".$pck_packagestatus.
	"' where pck_packagestatus < ".$pck_packagestatus." and pck_orderid = '".$pck_orderid."'";

	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 编辑包裹订单:带事务----注意：不可随意使用；请先查看 engrave_package_update_trans 函数
 * @param number $package：包裹状态
 * @param number $pck_orderid：订单ID
 * @param unknown $conn：数据库连接对象
 */
function engrave_package_update_normal_trans($pck_packagestatus=0,$pck_orderid=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_packagestatus = '".$pck_packagestatus.
	"' where pck_orderid = '".$pck_orderid."'";

	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 批量入库
 * @param number $package_id：包裹ID
 * @param unknown $conn：数据库连接对象
 */
function engrave_package_instorage_byid_trans($package_id=0,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	"set pck_packagestatus = '1".
	"' where pck_packagestatus = 0 and pck_id = '".$package_id."'";
	
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 查询
 * @param number $pck_id：包裹ID
 */
function engrave_package_isaward($pck_id=0)
{
	$sql="select pck_isaward from ".$GLOBALS['engrave']->table('package').
	" where pck_id=".$pck_id;
	
	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result==1)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 * 修改
 * @param number $pck_id：是否已经奖励
 * @return boolean：若修改成功，返回true，反之，false！
 */
function engrave_package_isaward_update($pck_id=0)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	" set pck_isaward = 1".
	" where pck_id=".$pck_id;
	
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result['pck_isaward']==1)
	{
		return true;
	}
	else{
		return false;
	}
}

/**
 *  包裹删除
 * @param number $pck_isdelete：删除标识
 * @param unknown $pck_id：包裹ID
 */
function engrave_package_delete($pck_isdelete=1,$pck_id)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	" set pck_isdelete='" . $pck_isdelete . "' where pck_id='".
	$pck_id."'";
	
	return  $GLOBALS['engrave_db']->query($sql);
}

/**
 * 包裹删除：带事务
 * @param unknown $pck_id：包裹ID
 * @param unknown $conn：数据库连接对象
 * @param bool return:若删除成功，返回true，反之返回false！
 */
function engrave_package_delete_trans($pck_id,$conn)
{
	$sql="update ".$GLOBALS['engrave']->table('package').
	" set pck_isdelete=1 where pck_id='".
	$pck_id."'";

	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}
	else
	{
		return false;
	}
}

/**
 * 根据包裹ID获取包裹对象
 * @param string $PackageId：包裹ID
 */
function engrave_package($PackageId='')
{
	$conditions='';
	if($PackageId!='')
	{
		$conditions=$conditions." and pck_id = '".$PackageId."'";
	}
	$sql = "select pck_id,pck_warehouseid,pck_expressid,pck_expresstelephone,pck_expressnumber,pck_assess,pck_name " .
		    ",pck_weight,pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight".
		    ",pck_userremark,pck_userid,pck_storagecode,pck_adminremark,pck_packagestatus,pck_inventorylocation".
		    ",pck_intime,pck_istrouble,pck_isaward,pck_isdelete,".
		    "user_name,storage_code,ItemName ".
			" FROM " . $GLOBALS['engrave']->table('package').
			" left join ".$GLOBALS['ecs']->table('users').
			" on pck_userid = user_id".
			" left join ".$GLOBALS['engrave']->table('enum').
			" on pck_expressid = EnumId".
			" where pck_isdelete=0 " . $conditions;
	
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 根据包裹ID获取包裹对象
 * @param string $PackageId：包裹ID
 */
function engrave_package_in($package_id='')
{
	$conditions='';
	if($package_id!='')
	{
		$conditions=$conditions." and pck_id in (".$package_id.")";
	}
	$sql = "select pck_id,pck_warehouseid,pck_expressid,pck_expresstelephone,pck_expressnumber,pck_assess,pck_name " .
		    ",pck_weight,pck_ordersite,pck_ordernumber,pck_sizelength,pck_sizewidth,pck_sizeheight".
		    ",pck_userremark,pck_userid,pck_storagecode,pck_adminremark,pck_packagestatus,pck_inventorylocation".
		    ",pck_intime,pck_istrouble,pck_isaward,pck_isdelete,".
		    "user_name,storage_code,ItemName ".
			" FROM " . $GLOBALS['engrave']->table('package').
			" left join ".$GLOBALS['ecs']->table('users').
			" on pck_userid = user_id".
			" left join ".$GLOBALS['engrave']->table('enum').
			" on pck_expressid = EnumId".
			" where pck_isdelete=0 " . $conditions;
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 查询：购物凭证
 * @param number $psv_packageid：包裹ID
 */
function engrave_package_shoppingvouchers_bypckid($psv_packageid=0)
{
	$sql = "select psv_packageid,psv_vouchersvalue from ".
			$GLOBALS['engrave']->table('package_shoppingvouchers').
			" where psv_packageid=" . $psv_packageid;
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 查询：包裹内物品
 * @param number $pckg_packageid:包裹ID
 */
function engrave_packagegoods_bypckid($pckg_packageid=0)
{
	$sql = "select pckg_packageid,pckg_name,pckg_amount,pckg_unitprice,pckg_totalprice from ".
			$GLOBALS['engrave']->table('packagegoods').
			" where pckg_packageid=" . $pckg_packageid;
	
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 获得包裹用户列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_pack_users_list($real_goods=1, $conditions = '')
{
	$sql = "SELECT user_id,user_name " .
			" FROM " . $GLOBALS['ecs']->table('users');
	$row = $GLOBALS['db']->getAll($sql);
	return array('user_list' => $row);
}
/**
 * 获得包裹用户的名称
 *
 * @access  public
 * @access  $userid 用户的Id
 */
function engrave_get_pack_username($userid)
{
	$sql = "SELECT user_name " .
			" FROM " . $GLOBALS['ecs']->table('users') .
			" WHERE user_id = '" . $userid . "'";
	$username = $GLOBALS['db']->getOne($sql);
	return $username;
}
/**
 * 获得包裹的入库码
 *
 * @access  public
 * @access  $userid 用户的Id
 */
function engrave_get_pack_storagecode($userid)
{
	$sql = "SELECT storage_code " .
			" FROM " . $GLOBALS['ecs']->table('users') .
			" WHERE user_id = '" . $userid . "'";
	$storagecode = $GLOBALS['db']->getOne($sql);
	return $storagecode;
}
/**
 * 获得包裹的用户名
 *
 * @access  public
 * @access  $storagecode 用户的Id
 */
function engrave_get_pack_usernamebycode($storagecode)
{
	$sql = "SELECT user_name " .
			" FROM " . $GLOBALS['ecs']->table('users') .
			" WHERE storage_code = '" . $storagecode . "'";
	$username = $GLOBALS['db']->getOne($sql);
	return $username;
}
/**
 * 获得包裹的用户Id
 *
 * @access  public
 * @access  $storagecode 用户的Id
 */
function engrave_get_pack_useridbycode($storagecode)
{
	$sql = "SELECT user_id " .
			" FROM " . $GLOBALS['ecs']->table('users') .
			" WHERE storage_code = '" . $storagecode . "'";
	$userid = $GLOBALS['db']->getOne($sql);
	return $userid;
}
/**
 * 获得包裹的尺寸单位
 *
 * @access  public
 * @access  $sizeunit 尺寸单位
 */
function engrave_get_sizeunit($houseId)
{
	$sql = "SELECT SizeUnit " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 AND HouseId = '" . $houseId . "'";
	$sizeunit = $GLOBALS['engrave_db']->getOne($sql);
	return $sizeunit;
}
/**
 * 获得包裹的重量单位
 *
 * @access  public
 * @access  $sizeunit 尺寸单位
 */
function engrave_get_weightunit($houseId)
{
	$sql = "SELECT WeightUnit " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 AND HouseId = '" . $houseId . "'";
	$weightunit = $GLOBALS['engrave_db']->getOne($sql);
	return $weightunit;
}
/**
 * 获得包裹的货币单位
 *
 * @access  public
 * @access  $sizeunit 尺寸单位
 */
function engrave_get_currencycode($houseId)
{
	$sql = "SELECT CurrencyCode " .
			" FROM " . $GLOBALS['engrave']->table('warehouse') .
			" WHERE IsDeleteHouse = 0 AND HouseId = '" . $houseId . "'";
	$currencycode = $GLOBALS['engrave_db']->getOne($sql);
	return $currencycode;
}
/**
 * 获得货运公司列表
 * 
 * @return multitype:string
 */
function get_express_list()
{
	$sql = 'SELECT *  FROM ' . $GLOBALS['engrave']->table('package_shipment') . 
	       ' WHERE status>0 ';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$express_list = array();
	foreach ($res AS $row)
	{
		$express_list[$row['ps_id']] = addslashes($row['name']);
	}
	
	return $express_list;
}
/**
 * 获得购物网站列表
 *
 * @return multitype:string
 */
function get_site_list()
{
	$sql = 'SELECT *  FROM ' . $GLOBALS['engrave']->table('shopping_site') .
	' WHERE 1 ';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$express_list = array();
	foreach ($res AS $row)
	{
		$express_list[$row['ss_id']] = addslashes($row['name']);
	}

	return $express_list;
}
/**
 * 获得货物仓库列表
 *
 * @return multitype:string
 */
function get_house_list()
{
	$sql = 'SELECT HouseId, HouseName FROM ' . $GLOBALS['engrave']->table('warehouse') .
	' WHERE IsDeleteHouse = 0 ORDER BY HouseId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$house_list = array();
	foreach ($res AS $row)
	{
		$house_list[$row['HouseId']] = addslashes($row['HouseName']);
	}

	return $house_list;
}

/**
 * 判断包裹单号是否存在
 * @param string $pck_expressnumber：包裹单号
 * @return boolean：若包裹单号存在，返回ture，反之返回false!
 */
function engrave_package_expressnumber_isexist($pck_expressnumber = '',$exist_count=0)
{
	$sql="select count(pck_expressnumber) from ".$GLOBALS['engrave']->table('package').
	" where pck_expressnumber='".$pck_expressnumber."'";
	$result = $GLOBALS['engrave_db']->getOne($sql);
	if($result!==false)
	{
		if($result > $exist_count)
		{
			return true;
		}else{
			return false;
		}
			
	}
}
?>
<?php
/**
 * ENGRAVE 数据访问：包裹管理-增值服务
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_added_services.php 17217 2015年1月12日 13:51:22 zhangxingpeng $
 */


/**
 * 获取增值服务列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 * @param number $pck_packagestatus:包裹状态：0-未到货、1-已入库、2-已过期
 */
function engrave_added_services_list($isdelete=0, $conditions = '')
{
	$where='';
	$filter['service_name']    = empty($_REQUEST['service_name']) ? 0 : intval($_REQUEST['service_name']);
	$filter['start_add_time']       = empty($_REQUEST['start_add_time']) ? '' : gmstr2time(trim($_REQUEST['start_add_time']));
	$filter['end_add_time']       = empty($_REQUEST['end_add_time']) ? '' : gmstr2time(trim($_REQUEST['end_add_time']));
	$filter['user']  = empty($_REQUEST['user']) ? '' : trim($_REQUEST['user']);
	$filter['status_id']  = !isset($_REQUEST['status_id']) ? 2 : intval($_REQUEST['status_id']);
	
	//echo $filter['status_id'];
	if($filter['service_name']!=0)
	{
		$where = $where." and es.ServiceId ='" . mysql_like_quote($filter['service_name'])."'";
	}
	if($filter['start_add_time']!='')
	{
		$where = $where." and AddTime >='" . mysql_like_quote($filter['start_add_time'])."'";
	}
	if($filter['end_add_time']!='')
	{
		$where = $where." and AddTime <= '" . mysql_like_quote($filter['end_add_time'])."'";
	}
	if($filter['user']!='')
	{
		$where = $where." and user_name like '%" . mysql_like_quote($filter['user'])."%'";
	}
	if($filter['status_id']!= 2)
	{
		$where = $where." and eo.StatusId = '" . mysql_like_quote($filter['status_id'])."'";
	}
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('orderservice')." as eo".
	" LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es".
   " ON eo.ServiceId=es.ServiceId AND es.IsDeleteService = 0".
   " LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') . " as ew".
   " ON eo.HouseId=ew.HouseId AND ew.IsDeleteHouse = 0".
   " LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as eu".
   " ON eo.UserId=eu.user_id AND eu.isdelete = 0 ".
   " where eo.IsDeleteService = ".$isdelete.$where;

	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'RecordId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "select RecordId,RecordNo,ShippingOrder,ServiceName".
		   ",HouseName,IsPaid,CheckResult,eo.Description,user_name,eo.Weight".
		   ",eo.ServicePrice,eo.Tel,AddTime,eo.StatusId,eu.storage_code,eu.user_storage_code from ".
		   $GLOBALS['engrave']->table('orderservice') . " as eo".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es".
		   " ON eo.ServiceId=es.ServiceId AND es.IsDeleteService = 0".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') . " as ew".
		   " ON eo.HouseId=ew.HouseId AND ew.IsDeleteHouse = 0".
		   " LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as eu".
		   " ON eo.UserId=eu.user_id AND eu.isdelete = 0 ".
		   " where eo.IsDeleteService = ".$isdelete.$where.
	       " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	       " LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($row AS $key=>$val)
	{
		$row[$key]['AddTime']     = local_date($GLOBALS['_CFG']['time_format'], $val['AddTime']);
	}
	return array('services_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获取增值服务
 * @param unknown $RecordId
 */
function engrave_services($RecordId)
{
	$conditions='';
	if($RecordId!='')
	{
		$conditions=$conditions." and RecordId='".$RecordId."'";
	}
	$sql = "select RecordId,RecordNo,ShippingOrder,ServiceName,eo.ServiceId,".
		   "HouseName,CheckResult,IsPaid,eo.Description,user_name,pck_weight".
		   ",ess.Price,eo.Tel,AddTime,eo.StatusId,ps_packageid,UserId from ".
		   $GLOBALS['engrave']->table('orderservice') . " as eo".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('services') . " as es".
		   " ON eo.ServiceId=es.ServiceId AND es.IsDeleteService = 0".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('package') . " as ep".
		   " ON eo.ShippingOrder=ep.pck_expressnumber AND pck_isdelete = 0".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('services_setting') . " as ess".
		   " ON eo.ServiceId=ess.ServiceId AND eo.HouseId=ess.WarehouseId AND ess.IsDeleteSetting = 0".
		   " LEFT JOIN " . $GLOBALS['engrave']->table('warehouse') . " as ew".
		   " ON eo.HouseId=ew.HouseId AND ew.IsDeleteHouse = 0".
		   " LEFT JOIN " . $GLOBALS['ecs']->table('users') . " as eu".
		   " ON eo.UserId=eu.user_id AND eu.isdelete = 0 ".
		   " where eo.IsDeleteService = 0 " . $conditions;
	$row = $GLOBALS['engrave_db']->getRow($sql);
	$row['AddTime'] = local_date($GLOBALS['_CFG']['time_format'], $row['AddTime']);
	return $row;
}

/**
 * 编辑增值服务:支付
 * @param unknown $services
 * @param unknown $RecordId
 */
function engrave_services_update($services,$RecordId)
{
	$sql="update ".$GLOBALS['engrave']->table('orderservice').
	"set CheckResult = '".$services['CheckResult'].
	"',CheckTime = '".$services['CheckTime'].
	"',StatusId = '".$services['StatusId'].
	"',IsPaid=1 where RecordId = '".$RecordId."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 获得包裹Id
 * @param unknown $orderno
 */
function engrave_pckid_orderno($orderno)
{
	$sql = "SELECT pck_id " .
			" FROM " . $GLOBALS['engrave']->table('package') .
			" WHERE pck_expressnumber = '" . $orderno . "'";
	$pckid = $GLOBALS['engrave_db']->getOne($sql);
	return $pckid;
}

/**
 * 增值服务删除
 * @param number $IsFocuseDelete：删除标识
 * @param unknown $RecordId：焦点图ID
 */
function engrave_services_delete($IsDeleteService=1,$RecordId)
{
	$sql="update ".$GLOBALS['engrave']->table('orderservice').
	" set IsDeleteService='".$IsDeleteService."' where RecordId='".
	$RecordId."'";
	
	return  $GLOBALS['engrave_db']->query($sql);
}
?>
<?php
/**
 * ENGRAVE 数据访问：订单-跟踪管理
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_tracking_manage.php 17217 2015年1月14日 15:42:21zhangxingpeng $
 */


/**
 * 获取跟踪列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_tracking_list($isdelete=0, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('package_track').
	" where tr_isdelete=".$isdelete;

	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'tr_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "select tr_id,tr_expressnumber,order_no,tr_message,tr_intime,user_name from ".
			$GLOBALS['engrave']->table('package_track') . " as engpacktr".
			" LEFT JOIN " . $GLOBALS['engrave']->table('order') . " as engorder".
			" ON engpacktr.tr_orderid = engorder.order_id ".
			" LEFT JOIN " . $GLOBALS['ecs']->table('admin_user') . " as ecsuser".
			" ON engpacktr.tr_operatorid = ecsuser.user_id ".
			" where tr_isdelete= ".$isdelete. $conditions.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($row AS $key=>$val)
	{
		$row[$key]['tr_intime']     = local_date($GLOBALS['_CFG']['time_format'], $val['tr_intime']);
	}
	return array('track_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取跟踪管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_tracking($trackId='')
{
	$conditions='';
	if($trackId!='')
	{
		$conditions=$conditions." and tr_id='".$trackId."'";
	}
	$sql =  "select tr_id,tr_orderid,tr_expressnumber,tr_message,tr_statuscode,tr_intime,tr_operatorid " .
			" FROM " . $GLOBALS['engrave']->table('package_track').
			" where tr_isdelete = 0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 添加跟踪管理
 * @param unknown $coupon：跟踪管理对象
 */
function engrave_tracking_insert($track_info)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package_track').
	"(tr_orderid,tr_expressnumber,tr_message,tr_statuscode,tr_intime,tr_operatorid,tr_isdelete) values('".
	$track_info['tr_orderid']."','".$track_info['tr_expressnumber']."','".$track_info['tr_message']."','".$track_info['tr_statuscode']."','".$track_info['tr_intime']."','".
	$track_info['tr_operatorid']."','".$track_info['tr_isdelete']."')";
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 添加跟踪管理：带事务
 * @param unknown $coupon：跟踪管理对象
 * @param unknown $conn：数据库连接对象
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_tracking_insert_trans($track_info,$conn)
{
	$sql="insert into ".$GLOBALS['engrave']->table('package_track').
	"(tr_orderid,tr_expressnumber,tr_message,tr_statuscode,tr_intime,tr_operatorid,tr_isdelete) values('".
	$track_info['tr_orderid']."','".$track_info['tr_expressnumber']."','".$track_info['tr_message']."','".$track_info['tr_statuscode']."','".$track_info['tr_intime']."','".
	$track_info['tr_operatorid']."','".$track_info['tr_isdelete']."')";
	
	$result = mysql_query($sql,$conn);
	if($result!==false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 编辑跟踪管理
 * @param unknown $track_info：跟踪管理对象
 * @param unknown $TrackId：跟踪管理ID
 */
function engrave_tracking_update($track_info,$TrackId)
{
	$sql="update ".$GLOBALS['engrave']->table('package_track').
	"set tr_orderid='".$track_info['tr_orderid'].
	"',tr_expressnumber='".$track_info['tr_expressnumber'].
	"',tr_message='".$track_info['tr_message'].
	"',tr_statuscode='".$track_info['tr_statuscode'].
	"',tr_intime='".$track_info['tr_intime'].
	"',tr_operatorid='".$track_info['tr_operatorid'].
	"' where tr_id='".$TrackId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 获得订单列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_orderno_list($real_goods=1, $conditions = '')
{
	$sql = "SELECT order_id,order_no,user_name " .
		   " FROM " . $GLOBALS['engrave']->table('order') .
	       " LEFT JOIN " . $GLOBALS['ecs']->table('users').
			" ON order_userid = user_id ".
			" where order_isdelete= 0". $conditions.  
			" order by order_id";

	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('order_list' => $row);
}
/**
 * 获得运单列表
 * @param unknown $orderid
 */
function engrave_waybillno_list($orderid)
{
	$sql = "SELECT ordw_waybillid,ordw_waybillno,da_consignee " .
			" FROM " . $GLOBALS['engrave']->table('orderwaybill') .
			" LEFT JOIN " . $GLOBALS['ecs']->table('users_deliveryaddress').
			" ON ordw_consigid = da_id ".
			" where ordw_delete = 0 and ordw_orderid = " . $orderid .
			" order by ordw_waybillid";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('waybillno_list' => $row);
}
/**
 * 获得订单号
 *
 * @access  public
 * @access  $orderid 订单ID
 */
function engrave_get_orderno($orderid)
{
	$sql = "SELECT order_no " .
			" FROM " . $GLOBALS['engrave']->table('order') .
			" WHERE order_id = '" . $orderid . "'";
	$orderno = $GLOBALS['engrave_db']->getOne($sql);
	return $orderno;
}
/**
 * 获得状态代码列表
 *
 * @return multitype:string
 */
function engrave_code_list()
{
	$sql = 'SELECT code_id, code_name FROM ' . $GLOBALS['engrave']->table('statucode') .
	' WHERE code_isdelete = 0 ORDER BY code_id';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$code_list = array();
	foreach ($res AS $row)
	{
		$code_list[$row['code_id']] = addslashes($row['code_name']);
	}

	return $code_list;
}
/**
 * 跟踪管理删除
 * @param number $pck_isdelete：删除标识
 * @param unknown $tr_id：跟踪管理ID
 */
function engrave_tracking_delete($tr_isdelete=1,$tr_id)
{
	$sql="update ".$GLOBALS['engrave']->table('package_track').
	" set tr_isdelete='" . $tr_isdelete . "' where tr_id='".
	$tr_id."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
?>
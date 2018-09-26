<?php 
/**
 * ENGRAVE 数据访问：积分记录
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_accumulatepoints.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * 根据用户ID获取积分记录
 * @param number $user_id：用户ID
 * @param number $change_type：类型
 * @param number $startPage：起始页码
 */
function engrave_account_log_list($user_id = 0,$change_type = 0,$startPage=0)
{
	$where=" ";
	
	$sql="select count(*) from " .
			$GLOBALS['engrave_shop']->table('account_log').
			" where user_id=".$user_id.$where;
	$row = $GLOBALS['engrave_db']->getOne($sql);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'log_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $row;
	/* 分页大小 */
	$filter['start'] = $startPage;
	$total = $filter['record_count'];
	$pageSize = $GLOBALS['_CFG']['page_size'];
	
	$sql="select log_id,user_id,user_money,frozen_money,rank_points,pay_points,".
	"change_time,change_desc,change_type from ".$GLOBALS['engrave_shop']->table('account_log').
	" where user_id=".$user_id.$where.
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",".$pageSize;
	
	$accumulatepoints_list = $GLOBALS['engrave_shop_db']->getAll($sql);
	foreach ($accumulatepoints_list as $key=>$val)
	{
		$accumulatepoints_list[$key]['change_time'] = local_date('Y-m-d H:i:s',$val['change_time']);
		switch ($val['change_type'])
		{
			case "14":
				$accumulatepoints_list[$key]['change_type'] = '支付';
				
				break;
		}
		$accumulatepoints_list[$key]['change_time'] = local_date('Y-m-d H:i:s',$val['change_time']);
		switch ($val['change_type'])
		{
			case "99":
				$accumulatepoints_list[$key]['change_type'] = '系统发放';
				
				break;
		}
	}
	return array('accumulatepoints_list'=>$accumulatepoints_list, 'filter' => $filter, 'page_count' => ceil($total/$pageSize), 'record_count' => $filter['record_count']);
	}
?>
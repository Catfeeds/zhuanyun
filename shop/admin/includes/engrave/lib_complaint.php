<?php 
/**
 * ENGRAVE 业务逻辑：投诉理赔
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_complaint.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 添加
 * @param unknown $complaint：投诉理赔对象
 * @return boolean：若添加成功，返回true，反之返回false！
 */
function engrave_complaint_insert($cmp)
{
	//获取当前时间
	$time=gmtime();
	$sql="insert into ".$GLOBALS['engrave']->table('complaint').
	"(cmp_remark,".
	"cmp_userid,cmp_parentid,cmp_time,".
	"cmp_isdelete) values('".$cmp['cmp_remark']."','".
	$cmp['cmp_userid']."','".$cmp['cmp_parentid']."','".$time.
	"',0".
	")";

	$val = $GLOBALS['engrave_db']->query($sql);

    $sql="update  ".$GLOBALS['engrave']->table('complaint').
        " set reply_status=1 where cmp_id=".$cmp['cmp_parentid'];

    $GLOBALS['engrave_db']->query($sql);


	if($val == 1)
	{
		return true;
	}
	else {
		return false;
	}
}

/**
 * 删除
 * @param unknown $complaint_id：投诉理赔ID
 * @return boolean：若删除成功，返回true，反之，返回false！
 */
function engrave_complaint_delete($cmp_id=0)
{
	//获取当前时间
	$time=gmtime();
	$sql="update ".$GLOBALS['engrave']->table('complaint').
	" set cmp_isdelete = 1 where cmp_id = ".$cmp_id;

	$val = $GLOBALS['engrave_db']->query($sql);
	if($val == 1)
	{
		return true;
	}
	else {
		return false;
	}
}

/**
 * 修改
 * @param unknown $complaint：投诉理赔对象
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_complaint_update($cmp)
{
	$sql="update ".$GLOBALS['engrave']->table('complaint').
	"set cmp_title='".$cmp['cmp_title'].
	"',cmp_expressnumber='".$cmp['cmp_expressnumber'].
	"',cmp_orderno='".$cmp['cmp_orderno'].
	"',cmp_deliverynumber='".$cmp['cmp_deliverynumber'].
	"',cmp_remark='".$cmp['cmp_remark'].
	"' where cmp_id = ".$cmp['cmp_id'];

	$val = $GLOBALS['engrave_db']->query($sql);
	if($val == 1)
	{
		return true;
	}
	else {
		return false;
	}
}

/**
 * 查询所有
 * @param number $user_id：投诉理赔  用户ID
 */
function engrave_complaint_list($user_id=0)
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('complaint').
	" where cmp_isdelete=0  and cmp_parentid=0 ";
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'cmp_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
		
	$sql="select cmp_id,users.user_name, cmp_title,cmp_expressnumber,cmp_orderno,cmp_deliverynumber,cmp_remark,".
	"cmp_userid,cmp_parentid,cmp_time,reply_status from ".$GLOBALS['engrave']->table('complaint').
        " left join  ".$GLOBALS['ecs']->table('users'). " as users on users.user_id = cmp_userid  ".
	" where cmp_isdelete = 0 and cmp_parentid=0 ".
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";;
	//echo $sql;
	$faq_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($faq_list as $key=>$val)
	{
		$faq_list[$key]['cmp_time'] = local_date('Y-m-d',$val['cmp_time']);
	}
	return array('cmp_list' => $faq_list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 查询parentid
 * @param number $user_id：投诉理赔 父ID
 */
function engrave_complaint_plist($cmp_parentid=0)
{
	$sql="select cmp_id,cmp_title,cmp_expressnumber,cmp_orderno,cmp_deliverynumber,cmp_remark,".
	" cmp_userid,cmp_parentid,cmp_time,user_name from ".$GLOBALS['engrave']->table('complaint').
	" left join ".$GLOBALS['ecs']->table('admin_user').
	" on cmp_userid = user_id ".
	" where cmp_isdelete = 0 and cmp_parentid=".$cmp_parentid.
	" order by cmp_id";

	$complaint_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($complaint_list as $key=>$val)
	{
		$complaint_list[$key]['cmp_time'] = local_date('Y-m-d H:i:s',$val['cmp_time']);
	}
	return $complaint_list;
}

/**
 * 查询
 * @param unknown $cmp_id：投诉理赔 父ID
 * @param number $user_id：投诉理赔  用户ID
 */
function engrave_complaint($cmp_id=0)
{
	$sql="select cmp_id,cmp_title,cmp_expressnumber,cmp_orderno,cmp_deliverynumber,cmp_remark,".
			"cmp_userid,users.user_name, cmp_parentid,cmp_time from ".$GLOBALS['engrave']->table('complaint').
        " left join  ".$GLOBALS['ecs']->table('users'). " as users on users.user_id = cmp_userid  ".
			" where cmp_isdelete = 0 and cmp_id =".$cmp_id;

	$complaint = $GLOBALS['engrave_db']->getRow($sql);
	$complaint['cmp_time'] = local_date('Y-m-d H:i:s',$complaint['cmp_time']);
	return $complaint;
}
?>
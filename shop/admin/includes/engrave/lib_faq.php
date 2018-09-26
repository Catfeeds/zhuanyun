<?php 
/**
 * ENGRAVE 数据访问：有问必答
 * $Author: cfang $
 * $Id: lib_faq.php 17217 2017年12月07日 11时03分00秒 zhangxingpeng $
 */

function engrave_pfaq_insert($faq_id, $faq) {
//获取当前时间
    $time=gmtime();
    $sql="insert into ".$GLOBALS['engrave']->table('faq').
        "(faq_remark, faq_userid,faq_parentid,faq_time,".
        "faq_isdelete) values('".$faq['faq_remark']."','".
        $faq['faq_userid']."','".$faq['faq_parentid']."','".$time.
        "',0".
        ")";

    $val = $GLOBALS['engrave_db']->query($sql);
    $sql="update  ".$GLOBALS['engrave']->table('faq').
        " set reply_status=1 where faq_id=$faq_id ";

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
 * 添加
 * @param unknown $faq：有问必答对象
 * @return boolean：若添加成功，返回true，反之返回false！
 */
function engrave_faq_insert($faq)
{
	//获取当前时间
	$time=gmtime();
	$sql="insert into ".$GLOBALS['engrave']->table('faq').
	"(faq_title,faq_expressnumber,faq_orderno,faq_deliverynumber,faq_remark,".
	"faq_userid,faq_parentid,faq_time,".
	"faq_isdelete) values('".
	$faq['faq_title']."','".$faq['faq_expressnumber']."','".$faq['faq_orderno']."','".$faq['faq_deliverynumber']."','".$faq['faq_remark']."','".
	$faq['faq_userid']."','".$faq['faq_parentid']."','".$time.
	"',0".
	")";
	
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
 * 删除
 * @param unknown $faq_id：FAQID
 * @return boolean：若删除成功，返回true，反之，返回false！
 */
function engrave_faq_delete($faq_id=0)
{
	//获取当前时间
	$time=gmtime();
	$sql="update ".$GLOBALS['engrave']->table('faq').
	" set faq_isdelete = 1 where faq_id = ".$faq_id;

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
 * @param unknown $faq：有问必答对象
 * @return boolean：若修改成功，返回true，反之返回false！
 */
function engrave_faq_update($faq)
{
	$sql="update ".$GLOBALS['engrave']->table('faq').
	"set faq_title='".$faq['faq_title'].
	"',faq_expressnumber='".$faq['faq_expressnumber'].
	"',faq_orderno='".$faq['faq_orderno'].
	"',faq_deliverynumber='".$faq['faq_deliverynumber'].
	"',faq_remark='".$faq['faq_remark'].
	"' where faq_id = ".$faq['faq_id'];
	
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
 * @param number $user_id：有问必答 用户ID
 * @return array:faq对象列表
 */
function engrave_faq_list($faq_id='')
{
    $where = " and 1 ";
    if($faq_id) $where = " and faq_id=$faq_id ";
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('faq').
	" where faq_isdelete=0  and faq_parentid=0 $where";
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'faq_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
		
	$sql="select users.user_name, faq_id,faq_title,faq_expressnumber,faq_orderno,faq_deliverynumber,faq_remark,".
	"faq_userid,faq_parentid,faq_time,reply_status from ".$GLOBALS['engrave']->table('faq'). "  ".
        " left join  ".$GLOBALS['ecs']->table('users'). " as users on users.user_id = faq_userid  ".
	" where faq_isdelete = 0 and faq_parentid=0 $where".
	" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
	" LIMIT " . $filter['start'] . ",$filter[page_size]";;
	//echo $sql;
	$faq_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($faq_list as $key=>$val)
	{
		$faq_list[$key]['faq_time'] = local_date('Y-m-d h:i',$val['faq_time']);
	}
	return array('faq_list' => $faq_list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 查询
 * @param number $faq_pid：有问必答 父ID
 * @return array:faq对象列表
 */
function engrave_faq_plist($faq_pid)
{
	$sql="select faq_id,faq_title,faq_expressnumber,faq_orderno,faq_deliverynumber,faq_remark,".
	"faq_userid,faq_parentid,faq_time,user_name from ".$GLOBALS['engrave']->table('faq').
	" left join ".$GLOBALS['ecs']->table('admin_user').
	" on faq_userid = user_id ".
	" where faq_isdelete = 0 and faq_parentid=".$faq_pid." order by faq_id";
	
	$faq_list = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($faq_list as $key=>$val)
	{
		$faq_list[$key]['faq_time'] = local_date('Y-m-d H:i:s',$val['faq_time']);
	}
	return $faq_list;
}

/**
 * 查询
 * @param number $faq_id：有问必答 ID
 * @param number $user_id：有问必答 用户ID
 */
function engrave_faq($faq_id=0)
{
	$sql="select faq_id,faq_title,faq_expressnumber,faq_orderno,faq_deliverynumber,faq_remark,".
	"faq_userid,faq_parentid,faq_time from ".$GLOBALS['engrave']->table('faq').
	" where faq_isdelete = 0 and faq_id =".$faq_id;

	$faq = $GLOBALS['engrave_db']->getRow($sql);
	$faq['faq_time'] = local_date('Y-m-d H:i:s',$faq['faq_time']);
	return $faq;
}
?>
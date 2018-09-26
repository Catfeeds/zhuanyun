<?php 

/**
 *  税率表 相关函数
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
 * 获得税率表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_rate_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('ratetax_table');

    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'rate_id' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT rate_id,rate_name,rate_no,rate_description,rate_tax " .
           " FROM " . $GLOBALS['engrave']->table('ratetax_table') . 
           " WHERE rate_delete = 0 " .
           " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
           " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
    return array('rate_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取税率表列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_rate($RateId='')
{
	$conditions='';
	if($RateId!='')
	{
		$conditions=$conditions." and rate_id = '".$RateId."'";
	}
	$sql = "select rate_id,rate_name,rate_no,rate_description,rate_tax,rate_delete " .
			" FROM " . $GLOBALS['engrave']->table('ratetax_table').
			" where rate_delete=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加税率表
 * @param unknown $rate：税率表
 */
function engrave_rate_insert($rate)
{
	$sql="insert into ".$GLOBALS['engrave']->table('ratetax_table').
	"(rate_name,rate_no,rate_description,rate_tax,rate_delete) values('".
	$rate['rate_name']."','".$rate['rate_no']."','".$rate['rate_description']."','".$rate['rate_tax']."','".$rate['rate_delete']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑汇率表
 * @param unknown $rate：汇率表对象
 * @param unknown $rate_id：汇率ID
 */
function engrave_rate_update($rate,$rate_id)
{
	$sql="update ".$GLOBALS['engrave']->table('ratetax_table').
		 " set rate_name = '".$rate['rate_name'].
		 "',rate_no = '".$rate['rate_no'].
		 "',rate_description = '".$rate['rate_description'].
		 "',rate_tax = '".$rate['rate_tax'].
		 "' where rate_id = '" . $rate_id . "'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 汇率表删除
 * @param number rate_delete：删除标识
 * @param unknown rate_id：货币ID
 */
function engrave_rate_delete($rate_delete=1,$rate_id)
{
	$sql="update ".$GLOBALS['engrave']->table('ratetax_table').
	" set rate_delete = '" . $rate_delete . "' where rate_id = '".
	$rate_id."'";

	return  $GLOBALS['engrave_db']->query($sql);
}

?>
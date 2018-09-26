<?php
/**
 * 评价列表
 * @param number $real_goods
 * @param string $conditions
 */
function engrave_evalua_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('evalua');
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'eva_id' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
	
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('evalua') .
			" LEFT JOIN " . $GLOBALS['engrave']->table('order') .
			" ON eva_orderid = order_id " .
			" WHERE eva_delete = 0 " .
			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('evalua_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
?>
<?php
/**
 * 获得状态代码列表
 *
 * @return multitype:string
 */
function engrave_codestatue_list()
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
 * 获得航线的名称
 */
function engrave_shippingname_list()
{
	$sql = 'SELECT ShippingId, ShippingName FROM ' . $GLOBALS['engrave']->table('shipping') .
	' WHERE IsDeleteShipping = 0 ORDER BY ShippingId';
	$res = $GLOBALS['engrave_db']->getAll($sql);
	
	$shipping_list = array();
	foreach ($res AS $row)
	{
		$shipping_list[$row['ShippingId']] = addslashes($row['ShippingName']);
	}
	
	return $shipping_list;
}
?>
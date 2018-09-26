<?php 
/**
 * ENGRAVE 数据访问：订单
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_dictionary.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 运单列表
 * @param unknown $order_id：订单ID
 */
function engrave_orderwaybill_list($order_id)
{
	$sql ="select * from ".$GLOBALS['engrave']->table('orderwaybill').
	" LEFT JOIN ".
	$GLOBALS['engrave_shop']->table('users_deliveryaddress').
	" on ordw_consigid=da_id where ordw_orderid=".$order_id;
	
	return $GLOBALS['engrave_db']->getAll($sql);
}

/**
 * 添加评价
 * @param array $evalua ：评价
 * @return boolean：若添加成功，返回true，反之，返回false！
 */
function engrave_order_evalua_insert($evalua)
{
	$sql="insert into " . $GLOBALS['engrave']->table('evalua') .
	"(eva_orderid,eva_value,eva_message,eva_delete) values ('".
	$evalua['eva_orderid']."','".
	$evalua['eva_value']."','".
	$evalua['eva_message']."','".
	$evalua['eva_delete'].
	"')";
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result !== false)
	{
		return true;
	}else{
		return false;
	}
}
?>
<?php 
/**
 *  网站分类 相关函数
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
 * 获得线路管理-阶梯价格
 * @param number $shippingid：线路ID
 * @return  array:阶梯价格数组列表
 */
function engrave_shipping_laddervalue_list($shippingid=0)
{
	if($shippingid!=0)
	{
		$condition = "and slp_slpgid=" .$shippingid;
	}

	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipping_ladderprice')
	." where 1=1 ".$condition;
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);
	
	$sql = "SELECT slp_id,slp_slpgid,slp_minweight,slp_maxweight,slp_price,slp_discount,slp_serviceprice,".
	"slpg_name FROM " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	" left join ".$GLOBALS['engrave']->table('shipping_ladderprice_group') .
	" on slp_slpgid=slpg_id".
	" where slp_isdelete = 0 ".$condition.
	" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	$result = $GLOBALS['engrave_db']->getAll($sql);

	return array('shipping_laddervalue_list' => $result, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 根据ID获取阶段价格
 * @param number $slp_id：阶段价格ID
 * @return unknown：阶段价格对象
 */
function engrave_shipping_laddervalue($slp_id=0)
{
	$sql = "SELECT slp_id,slp_slpgid,slp_minweight,slp_maxweight,".
	"slp_price,slp_serviceprice,slp_discount,slp_time,slp_isdelete".
	" FROM " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	" where slp_isdelete = 0 and slp_id=" .$slp_id;
	
	$row = $GLOBALS['engrave_db']->getRow($sql);
	return $row;
}

/**
 * 添加
 * @param unknown $slp：阶梯价格对象
 */
function engrave_shipping_laddervalue_insert($slp)
{
	$sql="insert into " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	"(slp_slpgid,slp_minweight,slp_maxweight,slp_price,slp_serviceprice,slp_discount,slp_isdelete,slp_time) values('" .
	$slp['slp_slpgid']."','".$slp['slp_minweight']."','".$slp['slp_maxweight']."','".
	$slp['slp_price']."','".$slp['slp_serviceprice']."','".$slp['slp_discount']."','".$slp['slp_isdelete']."','".$slp['slp_time']."')";

	$val = $GLOBALS['engrave_db']->query($sql);
	
	if($val==1)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 添加:带事务-阶梯价格
 * @param unknown $slp：阶梯价格对象
 * @param unknown $conn：数据库连接对象
 */
function engrave_shipping_laddervalue_insert_trans($slp,$conn)
{
	$sql="insert into " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	"(slp_slpgid,slp_minweight,slp_maxweight,slp_price,slp_serviceprice,slp_discount,slp_isdelete,slp_time) values('" .
	$slp['slp_slpgid']."','".$slp['slp_minweight']."','".$slp['slp_maxweight']."','".
	$slp['slp_price']."','".$slp['slp_serviceprice']."','".$slp['slp_discount']."','".$slp['slp_isdelete']."','".gmtime()."')";

	$result = mysql_query($sql,$conn);
	
	if($result !== false)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 修改
 * @param unknown $slp：阶段价对象
 * @param number $slp_id：阶段价格ID
 */
function engrave_shipping_laddervalue_update($slp,$slp_id=0)
{
	$sql="update " . $GLOBALS['engrave']->table('shipping_ladderprice') .
	" set slp_slpgid='".$slp['slp_slpgid'].
	"',slp_minweight='".$slp['slp_minweight'].
	"',slp_maxweight='".$slp['slp_maxweight'].
	"',slp_price='".$slp['slp_price'].
	"',slp_discount='".$slp['slp_discount'].
	"',slp_serviceprice='".$slp['slp_serviceprice']."' where slp_id=".$slp_id;

	$val = $GLOBALS['engrave_db']->query($sql);
	
	if($val==1)
	{
		return true;
	}else{
		return false;
	}
}

/**
 * 删除
 * @param unknown $slp_id:阶梯价格ID
 */
function engrave_shipping_laddervalue_delete($slp_id)
{

	$sql="update ".$GLOBALS['engrave']->table('shipping_ladderprice').
	" set slp_isdelete='1' where slp_id='".
	$slp_id."'";
	return  $GLOBALS['engrave_db']->query($sql);
}
?>
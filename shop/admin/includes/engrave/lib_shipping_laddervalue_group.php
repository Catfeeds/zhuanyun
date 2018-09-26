<?php 
/**
 *  阶梯价格分组
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
 * 获得 阶梯价格分组 列表
 *
 * @access  public
 * @return  array
 */
function engrave_shipping_laddervalue_group_list()
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('shipping_ladderprice_group');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT slpg_id,slpg_name,slpg_des,slpg_time ".
			" FROM " . $GLOBALS['engrave']->table('shipping_ladderprice_group') .
			" where slpg_isdelete = 0 " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	$result = $GLOBALS['engrave_db']->getAll($sql);
	foreach ($result as $key=>$val)
	{
		$result[$key]['slpg_time_value']= local_date('Y-m-d H:i:s', $val['slpg_time']);
	}
	return array('shipping_ladderprice_group_list' => $result, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获取阶梯价格组 option
 * @param number $selected：默认选中 阶梯价格组ID
 * @return string:option
 */
function engrave_shipping_laddervalue_group_option($selected=0)
{
	$sql = "SELECT slpg_id,slpg_name,slpg_des,slpg_time ".
			" FROM " . $GLOBALS['engrave']->table('shipping_ladderprice_group') .
			" where slpg_isdelete = 0 ";
	$result = $GLOBALS['engrave_db']->getAll($sql);
	
	$select='';
	
	foreach ($result AS $key=>$val)
	{
		$select = $select.'<option value="'.$val['slpg_id'].'"';
		if($selected==$val['slpg_id'])
		{
			$select = $select .' selected';
		}
		$select = $select .'>'.$val['slpg_name'];
		$select = $select.'</option>';
	}
	
	return $select;
}

/**
 * 根据分组ID获取分组信息
 * @param number $slpg_id：分组ID
 * @return array:分组数组
 */
function engrave_shipping_laddervalue_group_byid($slpg_id=0)
{
	$sql = "SELECT slpg_id,slpg_name,slpg_des,slpg_time ".
			" FROM " . $GLOBALS['engrave']->table('shipping_ladderprice_group') .
			" where slpg_isdelete = 0 and slpg_id='".$slpg_id."'";
	
	$result = $GLOBALS['engrave_db']->getRow($sql);
	return $result;
}

/**
 * 
 * 根据分组名称获取分组信息
 * @param string $slpg_name：分组名称
 * @return array:分组数组
 */
function engrave_shipping_laddervalue_group_byname($slpg_name='')
{
	$sql = "SELECT slpg_id,slpg_name,slpg_des,slpg_time ".
			" FROM " . $GLOBALS['engrave']->table('shipping_ladderprice_group') .
			" where slpg_isdelete = 0 and slpg_name='".$slpg_name."'";
	
	$result = $GLOBALS['engrave_db']->getRow($sql);
	return $result;
}

/**
 * 添加：阶梯价格分组;带事务
 * @param array $slpg：阶梯价格分组数组
 * @return bool:若添加成功，返回true，反之，返回false！
 */
function engrave_shipping_laddervalue_group_insert_tran($slpg,$conn)
{
	$time = gmtime();
	
	$sql = "insert into".$GLOBALS['engrave']->table('shipping_ladderprice_group') 
	."(slpg_name,slpg_des,slpg_time,slpg_isdelete)".
	" value ('" .$slpg['slpg_name']."','".
	$slpg['slpg_des']."','".
	$time."','".
	$slpg['slpg_isdelete'].
	"')";
	
	$result = mysql_query($sql,$conn);
	if($result!==false){
		return true;
	}else{
		return false;
	}
}

/**
 * 修改：阶梯价格分组
 * @param array $slpg：阶梯价格分组数组
 * @return bool:若修改成功，返回true，反之，返回false！
 */
function engrave_shipping_laddervalue_group_update($slpg)
{
	$time = gmtime();
	
	$sql = "update ".$GLOBALS['engrave']->table('shipping_ladderprice_group') 
	."set slpg_name='".$slpg['slpg_name'].
	"',slpg_des='".$slpg['slpg_des'].
	"' where slpg_id='".$slpg['slpg_id']."'";
	
	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false){
		return true;
	}else{
		return false;
	}
}


/**
 * 删除：阶梯价格分组
 * @param number $slpg_id：阶梯价格分组ID
 * @return bool:若修改成功，返回true，反之，返回false！
 */
function engrave_shipping_laddervalue_group_delete($slpg_id=0)
{
	$time = gmtime();

	$sql = "update ".$GLOBALS['engrave']->table('shipping_ladderprice_group')
	."set slpg_isdelete=1".
	" where slpg_id='".$slpg_id."'";

	$result = $GLOBALS['engrave_db']->query($sql);
	if($result!==false){
		return true;
	}else{
		return false;
	}
}

?>
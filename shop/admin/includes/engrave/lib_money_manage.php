<?php 

/**
 *  货币管理 相关函数
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
 * 获得货币列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_currecy_paging_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
    $sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('currecy');

    $filter = array();
    $filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'currecytemp.CId' : trim($_REQUEST['sort_by']);
    $filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
    
    $filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
    /* 分页大小 */
    $filter = page_and_size($filter);

    $sql = "SELECT CId,Name,Code,Symbol,ExchageRate,IsDefault " .
           " FROM " . $GLOBALS['engrave']->table('currecy') . " as currecytemp" .
           " WHERE IsDeleteCurrecy = 0 " .
           " order by " .$filter['sort_by'].' '.$filter['sort_order'] .
           " LIMIT " . $filter['start'] . ",$filter[page_size]";

    $filter['keyword'] = stripslashes($filter['keyword']);
    //set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
    return array('currecy_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/*
 * 获取货币的列表
* currecy-> Name Symbol
*/
function engrave_currecy_list()
{
	$sql = 'SELECT CId,CONCAT(Name , "(" , Symbol , ")") as NameSymbol FROM ' . $GLOBALS['engrave']->table('currecy') .
	'WHERE IsDeleteCurrecy = 0 ORDER BY CId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$currecy_list = array();
	foreach ($res AS $row)
	{
		$currecy_list[$row['CId']] = addslashes($row['NameSymbol']);
	}

	return $currecy_list;
}

/**
 * 获取货币:根据获取ID
 * @param number $CurrecyId：货币ID
 * return array:货币数组对象
 */
function engrave_currecy($CurrecyId=0)
{
	$conditions='';
	if($CurrecyId!='')
	{
		$conditions=$conditions." and CId='".$CurrecyId."'";
	}
	$sql = "select CId,Name,Code,Symbol,ExchageRate,IsDefault,IsDeleteCurrecy " .
			" FROM " . $GLOBALS['engrave']->table('currecy').
			" where IsDeleteCurrecy=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}

/**
 * 添加货币
 * @param unknown $currecy：货币对象
 */
function engrave_currecy_insert($currecy)
{
	$sql="insert into ".$GLOBALS['engrave']->table('currecy').
	"(Name,Code,Symbol,ExchageRate,IsDefault,IsDeleteCurrecy) values('".
	$currecy['Name']."','".$currecy['Code']."','".$currecy['Symbol']."','".$currecy['ExchageRate']."','".$currecy['IsDefault']."','".$currecy['IsDeleteCurrecy']."')";

	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 编辑货币
 * @param unknown $currecy：货币对象
 * @param unknown $CId：货币ID
 */
function engrave_currecy_update($currecy,$CId)
{
	$sql="update ".$GLOBALS['engrave']->table('currecy').
	"set Name='".$currecy['Name'].
	"',Code='".$currecy['Code'].
	"',Symbol='".$currecy['Symbol'].
	"',ExchageRate='".$currecy['ExchageRate'].
	"',IsDefault='".$currecy['IsDefault'].
	"' where CId='".$CId."'";

	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 货币删除
 * @param number IsDeleteCurrecy：删除标识
 * @param unknown $CId：货币ID
 */
function engrave_currecy_delete($IsDeleteCurrecy=1,$CId)
{
	$sql="update ".$GLOBALS['engrave']->table('currecy').
	" set IsDeleteCurrecy='".$IsDeleteCurrecy."' where CId='".
	$CId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}

function engrave_isdefault_list()
{
	$sql = "SELECT * " .
			" FROM " . $GLOBALS['engrave']->table('currecy') .
			" WHERE IsDeleteCurrecy = 0 AND IsDefault = 1";
	$currency_list = $GLOBALS['engrave_db']->getAll($sql);
	return $currency_list;
}
?>
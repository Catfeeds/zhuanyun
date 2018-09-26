<?php 
/**
 * ENGRAVE 数据访问：物流系统-配送地区
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_area.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 查询所有：配送地
 * @param number $parentid：父ID
 * @param number $selectedoption：选中的option索引
 * @return string：配送地区对象集合-option
 */
function engrave_area_option($parentid=0,$selectedoption=0)
{
	$sql = "SELECT Id,Name" .
			" FROM " . $GLOBALS['engrave']->table('area') .
			" WHERE IsDeleteArea = 0 and ParentId = ".$parentid;
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['Id'] . '" ';
		if($val['Id']==$selectedoption)
		{
			$select .= ' selected="true" ';
		}
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['Name']), ENT_QUOTES) . '</option>';
	}
	
	return $select;
}
function engrave_country_option($selectedoption=0 ) {
	$sql = "SELECT * " .
	" FROM " . $GLOBALS['engrave']->table('country') .
	" WHERE 1 ";

	$row = $GLOBALS['engrave_db']->getAll($sql);

	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['cid'] . '" ';
		if($val['cid']==$selectedoption)
		{
			$select .= ' selected="true" ';
		}
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['country_name']), ENT_QUOTES) . '</option>';
	}

	return $select;
}
function engrave_countries( ) {
	$sql = "SELECT * " .
	" FROM " . $GLOBALS['engrave']->table('country') .
	" WHERE 1 ";

	$row = $GLOBALS['engrave_db']->getAll($sql);

	$select = '';
	foreach ($row AS $key=>$val)
	{
		$data[$val['cid']] = $val['country_name'];
	}

	return $data;
}

/**
 * 查询所有：配送地
 * @param number $parentid：父ID
 * @return unknown：配送地区对象集合
 */
function engrave_area_list($parentid=0)
{
	$sql = "SELECT Id,Name" .
			" FROM " . $GLOBALS['engrave']->table('area') .
			" WHERE IsDeleteArea = 0 and ParentId = ".$parentid;

	$row = $GLOBALS['engrave_db']->getAll($sql);

	return $row;
}
?>
<?php 
/**
 * ENGRAVE 数据访问：物流系统-词典
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

function engrave_package_shipment_list($isOptions, $selId)
{
	$sql = "SELECT  *  " .
		" FROM " . $GLOBALS['engrave']->table('package_shipment') .
		" WHERE status>0";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	if($isOptions) {
		$select = '';
		foreach ($row AS $key=>$val)
		{
			$select .= '<option value="' . $val['ps_id'] . '" ';
			if($selId == $val['ps_id']) {
				$select .=" selected ";
			}
			$select .= '>';
			$select .= htmlspecialchars(addslashes($val['name']), ENT_QUOTES) . '</option>';
		}
		return $select;
	}
	
	
	
	return $row;
}

function engrave_package_shopping_site_list($isOptions, $selId)
{
	$sql = "SELECT  *  " .
		" FROM " . $GLOBALS['engrave']->table('shopping_site') .
		" WHERE  1 ";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	if($isOptions) {
		$select = '';
		foreach ($row AS $key=>$val)
		{
			$select .= '<option value="' . $val['ss_id'] . '" ';
			if($selId ==$val['ss_id']) {
				$select .=" selected ";
			}
			$select .= '>';
			$select .= htmlspecialchars(addslashes($val['name']), ENT_QUOTES) . '</option>';
		}
		return $select;
	}
	
	
	
	return $row;
}

/**
 * 查询所有：词典
 * @return string：词典-option
 */
function engrave_dictionary_option($groupid=0)
{
	$sql = "SELECT EnumId,GroupId,ItemName,ItemValue " .
		" FROM " . $GLOBALS['engrave']->table('enum') .
		" WHERE IsDeleteEnum = 0 and GroupId=" . $groupid .
		" ORDER BY EnumId DESC ";
	
	$row = $GLOBALS['engrave_db']->getAll($sql);
	
	$select = '';
	foreach ($row AS $key=>$val)
	{
		$select .= '<option value="' . $val['EnumId'] . '" ';
		$select .= '>';
		$select .= htmlspecialchars(addslashes($val['ItemName']), ENT_QUOTES) . '</option>';
	}
	
	return $select;
}
?>
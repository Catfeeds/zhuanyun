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
 * 获得网站分类列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_dictionary_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('enumgroup').
	             " WHERE IsDeleteGroup = 0";
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT GroupId,GroupName,SystemIs " .
			" FROM " . $GLOBALS['engrave']->table('enumgroup') .
			" WHERE IsDeleteGroup = 0 " .
			" ORDER BY GroupId DESC " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('dictionary_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

function engrave_dictionary_group_list($GroupId='')
{
	$conditions = '';
    if($GroupId!='')
    {
		$conditions = $conditions." and GroupId='".$GroupId."'";
    }
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('enum').
	             " WHERE IsDeleteEnum = 0 AND GroupId = " . $GroupId;
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT EnumId,GroupId,ItemName,ItemValue,SortId " .
			" FROM " . $GLOBALS['engrave']->table('enum') .
			" WHERE IsDeleteEnum = 0 " .  $conditions .
			" ORDER BY EnumId DESC " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('dictionary_group_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取增值服务管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_dictionary($GroupId='')
{
	$conditions='';
	if($GroupId!='')
	{
		$conditions=$conditions." and GroupId='".$GroupId."'";
	}
	$sql = "select GroupId,GroupName,SystemIs,IsDeleteGroup " .
			" FROM " . $GLOBALS['engrave']->table('enumgroup').
			" where IsDeleteGroup=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 获取字典管理组管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_dictionary_group($EnumId='')
{
	$conditions='';
	if($EnumId!='')
	{
		$conditions=$conditions." and EnumId='".$EnumId."'";
	}
	$sql = "select EnumId,GroupId,ItemName,ItemValue,SortId,IsDeleteEnum " .
			" FROM " . $GLOBALS['engrave']->table('enum').
			" where IsDeleteEnum=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加字典管理
 * @param unknown $dictionary：字典管理对象
 */
function engrave_dictionary_insert($dictionary)
{
	$sql="insert into " . $GLOBALS['engrave']->table('enumgroup') .
	"(GroupName,IsDeleteGroup) values('" .
	$dictionary['GroupName']."','".$dictionary['IsDeleteGroup']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 添加字典管理组
 * @param unknown $enum：字典管理对象
 */
function engrave_dictionary_group_insert($enum)
{
	$sql="insert into " . $GLOBALS['engrave']->table('enum') .
	"(GroupId,ItemName,ItemValue,SortId,IsDeleteEnum) values('" .
	$enum['GroupId']."','".$enum['ItemName']."','".$enum['ItemValue']."','".$enum['SortId']."','".$enum['IsDeleteEnum']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑字典管理
 * @param unknown $dictionary：字典管理对象
 * @param unknown $GroupId：字典管理ID
 */
function engrave_dictionary_update($dictionary,$GroupId)
{
	$sql="update ".$GLOBALS['engrave']->table('enumgroup').
	"set GroupName='".$dictionary['GroupName'].
	"' where GroupId='".$GroupId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑字典管理组
 * @param unknown $enum：字典管理对象
 * @param unknown $EnumId：字典管理ID
 */
function engrave_dictionary_group_update($enum,$EnumId)
{
	$sql="update ".$GLOBALS['engrave']->table('enum').
	"set GroupId='".$enum['GroupId'].
	"' ,ItemName='" . $enum['ItemName'] .
	"' ,ItemValue='" . $enum['ItemValue'] .
	"' ,SortId='" . $enum['SortId'] .
	"' where EnumId='".$EnumId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 *字典管理
 * @param number IsDeleteGroup：删除标识
 * @param unknown $GroupId：字典管理ID
 */
function engrave_dictionary_delete($IsDeleteGroup=1,$GroupId)
{
	$sql="update ".$GLOBALS['engrave']->table('enumgroup').
	" set IsDeleteGroup='".$IsDeleteGroup."' where GroupId='".
	$GroupId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
/**
 * 取得服务模块列表
 * @return array 服务模块id => name
 */
function engrave_group_list()
{
	$sql = 'SELECT GroupId, GroupName FROM ' . $GLOBALS['engrave']->table('enumgroup') . 
	        ' WHERE IsDeleteGroup = 0 ORDER BY GroupId';
	$res = $GLOBALS['engrave_db']->getAll($sql);

	$group_list = array();
	foreach ($res AS $row)
	{
		$group_list[$row['GroupId']] = addslashes($row['GroupName']);
	}

	return $group_list;
}
/**
 *字典管理组
 * @param number IsDeleteEnum：删除标识
 * @param unknown $GroupId：字典管理ID
 */
function engrave_dictionary_group_delete($IsDeleteEnum=1,$EnumId)
{
	$sql="update ".$GLOBALS['engrave']->table('enum').
	" set IsDeleteEnum='".$IsDeleteEnum."' where EnumId='".
	$EnumId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
?>
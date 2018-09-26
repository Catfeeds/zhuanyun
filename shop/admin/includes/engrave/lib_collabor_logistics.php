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
 * 获得合作物流分类列表
 *
 * @access  public
 * @params  integer $isdelete
 * @params  integer $real_goods
 * @params  integer $conditions
 * @return  array
 */
function engrave_logistics_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('collogistics');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT LogisticsId,LogisticsName,CollCode,LogisticsDesc " .
			" FROM " . $GLOBALS['engrave']->table('collogistics') .
			" WHERE IsDeleteLogistics = 0" .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('logistics_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取合作物流管理
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_logistics($LogisticsId='')
{
	$conditions='';
	if($LogisticsId!='')
	{
		$conditions=$conditions." and LogisticsId='".$LogisticsId."'";
	}
	$sql =  "select LogisticsId,LogisticsName,CollCode,LogisticsDesc,ActionLink,Submission,SubParameter,CodingMethod," .
			"Orgion,Destination,Number,Status,ArrivalDate,Signatory,StatusList,IsDeleteLogistics,cg_languageid " .
			" FROM " . $GLOBALS['engrave']->table('collogistics').
			" where IsDeleteLogistics=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加合作物流
 * @param unknown $service：增值服务对象
 */
function engrave_logistics_insert($logistics)
{
	$sql="insert into " . $GLOBALS['engrave']->table('collogistics') .
	"(LogisticsName,CollCode,LogisticsDesc,ActionLink,Submission,SubParameter,CodingMethod," .
	"Orgion,Destination,Number,Status,ArrivalDate,Signatory,StatusList,cg_languageid,IsDeleteLogistics) values('" .
	$logistics['LogisticsName']."','".$logistics['CollCode']."','".$logistics['LogisticsDesc']."','".
	$logistics['ActionLink']."','".$logistics['Submission']."','".$logistics['SubParameter']."','".
	$logistics['CodingMethod']."','".$logistics['Orgion']."','".$logistics['Destination']."','".
	$logistics['Number']."','".$logistics['Status']."','".$logistics['ArrivalDate']."','".
	$logistics['Signatory']."','".$logistics['StatusList']."','".$logistics['cg_languageid']."','".$logistics['IsDeleteLogistics']."')";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑合作物流服务
 * @param unknown $logistics：合作物流对象
 * @param unknown $logisticsId：合作物流ID
 */
function engrave_logistics_update($logistics,$logisticsId)
{
	$sql="update ".$GLOBALS['engrave']->table('collogistics').
	"set LogisticsName='".$logistics['LogisticsName'].
	"',CollCode='".$logistics['CollCode'].
	"',LogisticsDesc='".$logistics['LogisticsDesc'].
	"',ActionLink='".$logistics['ActionLink'].
	"',Submission='".$logistics['Submission'].
	"',SubParameter='".$logistics['SubParameter'].
	"',CodingMethod='".$logistics['CodingMethod'].
	"',Orgion='".$logistics['Orgion'].
	"',Destination='".$logistics['Destination'].
	"',Number='".$logistics['Number'].
	"',Status='".$logistics['Status'].
	"',ArrivalDate='".$logistics['ArrivalDate'].
	"',Signatory='".$logistics['Signatory'].
	"',StatusList='".$logistics['StatusList'].
	"',cg_languageid='".$logistics['cg_languageid'].
	"' where LogisticsId='".$logisticsId."'";
//echo $sql;
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 删除合作物流
 * @param number IsDeleteLogistics：删除标识
 * @param unknown $LogisticsId：合作物流ID
 */
function engrave_logistics_delete($IsDeleteLogistics=1,$LogisticsId)
{
	$sql="update ".$GLOBALS['engrave']->table('collogistics').
	" set IsDeleteLogistics='".$IsDeleteLogistics."' where LogisticsId='".
	$LogisticsId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}

/**
 * 获取语言
 * @param number $selectedIndex：默认
 * @return string:option
 */
function engrave_languages_option($selectedIndex = 0)
{
	$sql="select lang_id,lang_name from ".$GLOBALS['engrave']->table('languages');
	
	$language_list = $GLOBALS['engrave_db']->getAll($sql);
	
	$option='';
	foreach ($language_list as $key => $val)
	{
		$option = $option.'<option';
		$option = $option.' value='.$val['lang_id'];
		if($selectedIndex == $val['lang_id'])
		{
			$option = $option.' selected';
		}
		$option = $option.'>';
		$option = $option.$val['lang_name'];
		$option = $option.'</option>';
	}
	return $option;
}
?>
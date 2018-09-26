<?php
/**
 *  充值卡 相关函数
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
function engrave_card_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('prepaid');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT PrepaidId,CardName,round(Price,2) as PriceB,round(ParValue,2) as ParValueB,Description " .
			" FROM " . $GLOBALS['engrave']->table('prepaid') .
			"where IsDeleteCard=0 " .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('card_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}
/**
 * 获取充值卡列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_card($PrepaidId='')
{
	$conditions='';
	if($PrepaidId!='')
	{
		$conditions=$conditions." and PrepaidId='".$PrepaidId."'";
	}
	$sql = "select PrepaidId,CardName,CoverImage,Price,ParValue,Description,IsFreeStorage,IsFreePackage,IsFreeService,Sales,Hits,SortId,IsDeleteCard " .
			" FROM " . $GLOBALS['engrave']->table('prepaid').
			" where IsDeleteCard=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加充值卡
 * @param unknown $card：充值卡对象
 */
function engrave_card_insert($card)
{
	$sql="insert into ".$GLOBALS['engrave']->table('prepaid').
	"(CardName,CoverImage,Price,ParValue,Description,IsFreeStorage,IsFreePackage,IsFreeService,Sales,Hits,SortId,IsDeleteCard) values('".
	$card['CardName']."','".$card['CoverImage']."','".$card['Price']."','".$card['ParValue']."','".$card['Description']."','".
	$card['IsFreeStorage']."','".$card['IsFreePackage']."','".$card['IsFreeService']."','".
	$card['Sales']."','".$card['Hits']."','".$card['SortId']."','".$card['IsDeleteCard']."')";
	
	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 编辑充值卡
 * @param unknown $card：充值卡对象
 * @param unknown $PrepaidId：充值卡ID
 */
function engrave_card_update($card,$PrepaidId)
{
	$sql="update ".$GLOBALS['engrave']->table('prepaid').
	"set CardName='".$card['CardName'].
	"',Description='".$card['Description'].
	"',CoverImage='".$card['CoverImage'].
	"',Price='".$card['Price'].
	"',ParValue='".$card['ParValue'].
	"',SortId='".$card['SortId'].
	"' where PrepaidId='".$PrepaidId."'";

	return $GLOBALS['engrave_db']->query($sql);
}
/**
 * 充值卡删除
 * @param number $IsDeleteCard：删除标识
 * @param unknown $PrepaidId：充值卡ID
 */
function engrave_card_delete($IsDeleteCard=1,$PrepaidId)
{
	$sql="update ".$GLOBALS['engrave']->table('prepaid').
	" set IsDeleteCard='".$IsDeleteCard."' where PrepaidId='".
	$PrepaidId."'";

	return  $GLOBALS['engrave_db']->query($sql);
}
?>
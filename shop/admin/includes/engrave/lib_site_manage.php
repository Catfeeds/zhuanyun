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
function engrave_site_list($real_goods=1, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('sitemanage');
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'SiteId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "SELECT SiteId,SiteName,Logo,SiteUrl,SortId " .
			" FROM " . $GLOBALS['engrave']->table('sitemanage') .
			" where shopsiteIsDelete =0".
			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";

	$filter['keyword'] = stripslashes($filter['keyword']);
	//set_filter($filter, $sql, $param_str);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('site_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 根据站点ID获取站点对象
 * @param unknown $siteid：站点ID
 */
function engrave_site($siteid)
{
	$sql = "SELECT SiteId,SiteName,Logo,SiteUrl,SortId,Description " .
			" FROM " . $GLOBALS['engrave']->table('sitemanage') ." where SiteId=".$siteid;
	
	$row = $GLOBALS['engrave_db']->getRow($sql);

	return array("site"=>$row);
}

/**
 * 添加：站点
 * @param unknown $site
 */
function engrave_site_insert($site)
{
	$sql = "INSERT INTO ".$GLOBALS['engrave']->table('sitemanage')."(SiteName, Description, Logo, SiteUrl, SortId,shopsiteIsDelete) ".
			"VALUES ('".
			$site['SiteName']."','".
			$site['Description']."','".
			$site['Logo']."','".
			$site['SiteUrl']."','".
			$site['SortId'].
			"',0)";
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 站点管理删除
 * @param number $isdelete：删除
 * @param unknown $siteid：站点管理ID
 */
function engrave_site_manage_delete($isdelete=1,$siteid)
{
	$sql = "update ".$GLOBALS['engrave']->table('sitemanage').
	" set shopsiteIsDelete='".$isdelete.
	"' where SiteId=".$siteid;
	echo $sql;
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 编辑：站点
 * @param unknown $site：站点对象
 * @param unknown $siteid：站点ID
 */
function engrave_site_update($site,$siteid)
{
	$sql = "update ".$GLOBALS['engrave']->table('sitemanage').
			" set SiteName='".$site['SiteName'].
			"', Description='".$site['Description'].
			"', Logo='".$site['Logo'].
			"', SiteUrl='".$site['SiteUrl'].
			"', SortId='".$site['SortId'].
			"' where SiteId=".$siteid;
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 站点:唯一性
 * @param unknown $sitename：站点名称
 */
function engrave_site_uniqueness($sitename,$oldsitename='')
{
	if($sitename=='')
	{
		return true;
	}
	if($sitename==$oldsitename)
	{
		return false;
	}
	$sql="SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('sitemanage').
		" where SiteName='".$sitename."'";
	
	$count=$GLOBALS['engrave_db']->getOne($sql);
	if($count>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>
<?php 
/**
 * ENGRAVE 数据访问：内容管理-文章管理
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_article.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */

/**
 * 获取文章列表
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_article_list($isdelete=0, $conditions = '')
{
	/* 记录总数 */
	$sql_count = "SELECT COUNT(*) FROM " .$GLOBALS['engrave']->table('article').
				" where CntIsDelete=".$isdelete;
	
	$filter = array();
	$filter['sort_by']      = empty($_REQUEST['sort_by']) ? 'CntId' : trim($_REQUEST['sort_by']);
	$filter['sort_order']   = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);
	
	$filter['record_count'] = $GLOBALS['engrave_db']->getOne($sql_count);
	/* 分页大小 */
	$filter = page_and_size($filter);

	$sql = "select CntId,CntCategoryId,CntTitle,CntSubhead,CntOperatorName,CntTime,CntAuditingStatus " .
			" FROM " . $GLOBALS['engrave']->table('article') .
			" where CntIsDelete= ".$isdelete.
			" order by " .$filter['sort_by'].' '.$filter['sort_order'] .
			" LIMIT " . $filter['start'] . ",$filter[page_size]";
	
	$filter['keyword'] = stripslashes($filter['keyword']);
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('article_list' => $row, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 获取文章对象
 * @param number $isdelete：是否删除
 * @param string $conditions：查询条件
 */
function engrave_article($CntId='')
{
	$conditions='';
	if($CntId!='')
	{
		$conditions=$conditions." and CntId='".$CntId."'";
	}
	$sql = "select CntId,CntCategoryId,CntTitle,CntSubhead,CntAttributes,CntTitleImage,".
			"CntMetaKey,CntMetaDes,CntExtLink,CntContent,CntBriefIntroduction,".
			"CntTag,CntAuthor,CntAuthorEmail,CntSourceWeb,CntSourceUrl,CntReadPoints,".
			"CntTime,CntAuditingStatus,CntOperatorId,CntOperatorName" .
			" FROM " . $GLOBALS['engrave']->table('article').
			" where CntIsDelete=0 " . $conditions;
	return $GLOBALS['engrave_db']->getRow($sql);
}
/**
 * 添加文章
 * @param unknown $article：文章对象
 */
function engrave_article_insert($article)
{
	$cntOperatorId=isset($_SESSION['admin_id'])?intval($_SESSION['admin_id']):0;
	$cntOperatorName=isset($_SESSION['admin_name'])?trim($_SESSION['admin_name']):'';
	
	$sql="insert into ".$GLOBALS['engrave']->table('article').
	"(CntCategoryId,CntTitle,CntSubhead,CntAttributes,CntTitleImage,".
	"CntMetaKey,CntMetaDes,CntExtLink,CntContent,CntBriefIntroduction,".
	"CntTag,CntAuthor,CntAuthorEmail,CntSourceWeb,CntSourceUrl,CntReadPoints,".
	"CntTime,CntAuditingStatus,CntOperatorId,CntOperatorName) values('".
	$article['CntCategoryId']."','".$article['CntTitle']."','".$article['CntSubhead']."','".$article['CntAttributes']."','".$article['CntTitleImage']."','".
	$article['CntMetaKey']."','".$article['CntMetaDes']."','".$article['CntExtLink']."','".$article['CntContent']."','".$article['CntBriefIntroduction']."','".
	$article['CntTime']."','".$article['CntAuthor']."','".$article['CntAuthorEmail']."','".$article['CntSourceWeb']."','".$article['CntSourceUrl']."','".$article['CntReadPoints']."','".
	$article['CntTime']."','".$article['CntAuditingStatus']."','".$cntOperatorId."','".$cntOperatorName.
	"')";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 编辑文章
 * @param unknown $article：文章对象
 * @param unknown $CntId：文章ID
 */
function engrave_article_update($article,$CntId)
{
	$cntOperatorId=isset($_SESSION['admin_id'])?intval($_SESSION['admin_id']):0;
	$cntOperatorName=isset($_SESSION['admin_name'])?trim($_SESSION['admin_name']):'';
	$sql="update ".$GLOBALS['engrave']->table('article').
	"set CntCategoryId='".$article['CntCategoryId'].
	"',CntTitle='".$article['CntTitle'].
	"',CntSubhead='".$article['CntSubhead'].
	"',CntAttributes='".$article['CntAttributes'].
	"',CntTitleImage='".$article['CntTitleImage'].
	"',CntMetaKey='".$article['CntMetaKey'].
	"',CntMetaDes='".$article['CntMetaDes'].
	"',CntExtLink='".$article['CntExtLink'].
	"',CntContent='".$article['CntContent'].
	"',CntBriefIntroduction='".$article['CntBriefIntroduction'].
	"',CntTag='".$article['CntTag'].
	"',CntAuthor='".$article['CntAuthor'].
	"',CntAuthorEmail='".$article['CntAuthorEmail'].
	"',CntSourceWeb='".$article['CntSourceWeb'].
	"',CntSourceUrl='".$article['CntSourceUrl'].
	"',CntReadPoints='".$article['CntReadPoints'].
	"',CntTime='".$article['CntTime'].
	"',CntAuditingStatus='".$article['CntAuditingStatus'].
	"',CntOperatorId='".$cntOperatorId.
	"',CntOperatorName='".$cntOperatorName.
	"' where CntId='".$CntId."'";
	
	return $GLOBALS['engrave_db']->query($sql);
}

/**
 * 文章删除
 * @param number $cntIsDelete：删除标志
 * @param unknown $cntId：文章ID
 */
function engrave_article_delete($cntIsDelete=1,$cntId)
{
	$sql="update ".$GLOBALS['engrave']->table('article').
		" set CntIsDelete='".$cntIsDelete."' where CntId='".
		$cntId."'";
	
	return  $GLOBALS['engrave_db']->query($sql);
}
?>
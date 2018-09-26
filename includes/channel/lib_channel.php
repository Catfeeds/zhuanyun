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
 * $Id: lib_channel.php 17217 2014年12月07日 11时03分00秒 zhangxingpeng $
 */


function engrave_channel_list($isdelete=0, $conditions = '',$channelName)
{
	$sql = "select c2.categoryid,c2.typename,c2.channellogo " .
			" FROM " . $GLOBALS['engrave']->table('channel') .
			" as c1 left join ". $GLOBALS['engrave']->table('channel') .
			" as c2 CntTime desc" .
			" LIMIT 0,2";

	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('channel_list' => $row);
}

/**
 * 根据ID获取频道
 * @param string $conditions:sql拼接语句
 * @param unknown $categoryid：频道ID
 * @return multitype:unknown：频道对象
 */
function engrave_channel($conditions = '',$categoryid)
{
	$sql = "select categoryid,abbreviation,typename,typesummary,rewritecatalogue,outsidelink,".
			"linktip,columnshowposition,conentmodel,classifytype,parentid,channellogo,allowpost,".
			"pagingsize,metakey,metadescription,contentlink,liststyle,".
			"leftadvert,topadvert,bottomadvert,beforelistadvert,afterlistadvert,".
			"beforewritten,contentbottomadvert,leftcontentadvert,".
			"beforecontentadvert,aftercontentadvert,innerwritten,cutformcontent,".
			"sortid from ". $GLOBALS['engrave']->table('channel').
			" where categoryid=".$categoryid;

	$row = $GLOBALS['engrave_db']->getRow($sql);
	return array('channel' => $row);
}

/**
 * 根据父ID获取频道
 * @param string $conditions:sql拼接语句
 * @param unknown $categoryid：父ID
 * @return multitype:unknown：频道对象
 */
function engrave_channel_list_bypid($conditions = '',$parentid)
{
	$sql = "select categoryid,abbreviation,typename,typesummary,rewritecatalogue,outsidelink,".
			"linktip,columnshowposition,conentmodel,classifytype,parentid,channellogo,allowpost,".
			"pagingsize,metakey,metadescription,contentlink,liststyle,".
			"leftadvert,topadvert,bottomadvert,beforelistadvert,afterlistadvert,".
			"beforewritten,contentbottomadvert,leftcontentadvert,".
			"beforecontentadvert,aftercontentadvert,innerwritten,cutformcontent,".
			"sortid from ". $GLOBALS['engrave']->table('channel').
			" where parentid=".$parentid;
	$row = $GLOBALS['engrave_db']->getAll($sql);
	return array('channel_list' => $row);
}
?>
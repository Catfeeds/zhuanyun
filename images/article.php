<?php 
/**
 * ENGRAVE 业务逻辑：文章
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: article.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*数据*/
require_once(ROOT_PATH . '/includes/channel/lib_article.php');
require_once(ROOT_PATH . '/includes/channel/lib_channel.php');

/*新闻中心*//*新闻中心-内容页*/
if($_REQUEST['act']=='article_news')
{
  if(isset($_GET['articleid']))
  {
    $sql = "select CntTitle,CntContent,CntAuthor,".
			"CntTime,CntAuditingStatus " .
			" FROM " . $GLOBALS['engrave']->table('article') .
			" where CntId= ".$_GET['articleid'] ;
	$artics = $GLOBALS['engrave_db']->getAll($sql);
  }
	$ur=assign_ur_here(0,$artics[0]['CntTitle']);
	$smarty->assign('ur_here',$ur['ur_here']);
	
	AboutusNews();
	
    $smarty->assign('artics',$artics[0]);
	$smarty->display('article_news.htm');
}

function AboutusNews()
{
	//新闻中心
	$channel_list=engrave_channel_list_bypid('',4);
	$GLOBALS['smarty']->assign('channel_list',$channel_list['channel_list']);
	//print_r($channel_list);
	//关于我们
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$about_list=engrave_channel_list_bypid('',5);
	$GLOBALS['smarty']->assign('about_list',$about_list['channel_list']);
}
?>
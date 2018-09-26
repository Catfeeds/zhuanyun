<?php 
/**
 * ENGRAVE 业务逻辑：新闻中心
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: engrave_news.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */


define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*文章*/
require_once(ROOT_PATH . '/includes/channel/lib_article.php');
require_once(ROOT_PATH . '/includes/channel/lib_channel.php');
require_once(ROOT_PATH . '/includes/marketingmanage/lib_focus_map.php');

if($_REQUEST['act']=='query')
{
    //关于我们:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$about=engrave_channel('',5);
	$smarty->assign('about',$about['channel']);
	
	//获取文章
	$recordcount=$_LANG['record_count'];//获取每页显示记录数
	//开始记录数
	$page=isset($_REQUEST['page'])?intval($_REQUEST['page']):0;
	$pagecount=isset($_REQUEST['pagecount'])?intval($_REQUEST['pagecount']):0;
	if($page<1)
	{
		$page=1;
	}
	if($page>$pagecount)
	{
		$page=$pagecount;
	}
	$article=engrave_article_list(0,4,0,'',$page,$recordcount);
	//当前所在页
	$smarty->assign('currentpage',$page);
	$smarty->assign('article_list',$article['article_list']);
	$recordarr = array();
	$pagecount=ceil($article['article_count'] / $recordcount);
	for ($index=0; $index<$pagecount; $index++) {
		$recordarr[$index]=($index+1);
	}
	$smarty->assign('pagecount',$pagecount);
	$smarty->assign('record_count',$recordarr);
	
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$user_money = isset($_SESSION['user_money'])?$_SESSION['user_money']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_money',$user_money);
	
	$smarty->display('list_news.htm');
}
elseif($_REQUEST['act']=='query_about')
{
    //关于我们:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$about=engrave_channel('',5);
	$smarty->assign('about',$about['channel']);
	
	//获取文章
	$recordcount=$_LANG['record_count'];//获取每页显示记录数
	//开始记录数
	$page=isset($_REQUEST['page'])?intval($_REQUEST['page']):0;
	$pagecount=isset($_REQUEST['pagecount'])?intval($_REQUEST['pagecount']):0;
	if($page<1)
	{
		$page=1;
	}
	if($page>$pagecount)
	{
		$page=$pagecount;
	}
	$article=engrave_article_list(0,5,0,'',$page,$recordcount);
	//当前所在页
	$smarty->assign('currentpage',$page);
	$smarty->assign('article_list',$article['article_list']);
	$recordarr = array();
	$pagecount=ceil($article['article_count'] / $recordcount);
	for ($index=0; $index<$pagecount; $index++) {
		$recordarr[$index]=($index+1);
	}
	$smarty->assign('pagecount',$pagecount);
	$smarty->assign('record_count',$recordarr);
	
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$user_money = isset($_SESSION['user_money'])?$_SESSION['user_money']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_money',$user_money);
	
	$smarty->display('list_news.htm');
}
?>
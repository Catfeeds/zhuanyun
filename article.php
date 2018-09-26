<?php
/**
 * ENGRAVE 业务逻辑：文章
 * $Author: cfang $
 *
 */

session_start();
define('IN_ENGRAVE', true);
//初始化
require dirname(__FILE__) . '/includes/init.php';
// 数据
require_once ROOT_PATH . '/includes/channel/lib_article.php';
require_once ROOT_PATH . '/includes/channel/lib_channel.php';

$smarty->assign('pageName', 'article');

/*新闻中心*//*新闻中心-内容页*/
$act = $_REQUEST['act'];
if ($_REQUEST['act']=='article_news' ||
    $act == "article_faq" ||
    $act == "article_bidu"
) {
    if($act == "article_bidu" && !$_GET['articleid']) {
        $_GET['articleid'] = 30;
    }
    if (isset($_GET['articleid'])) {
		$sql = "select CntTitle,CntContent,CntAuthor,".
			"CntTime,CntAuditingStatus " .
			" FROM " . $GLOBALS['engrave']->table('article') .
			" where CntId= ".$_GET['articleid'] ." and CntAuditingStatus=2 ";
		$artics = $GLOBALS['engrave_db']->getAll($sql);
    }
	$ur=assign_ur_here(0,$artics[0]['CntTitle']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('articleid',$_GET['articleid']);

	AboutusNews();

	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
    $smarty->assign('artics',$artics[0]);
 	@$smarty->assign('username',$_SESSION['username']);
    if ($_REQUEST['act']=='article_news') {
        $smarty->display('article_news.htm');
    }
    if ($_REQUEST['act']=='article_faq') {

        //文章
        $recordcount=20;
        $article=engrave_article_single_cat_list(0,8,1,$recordcount);
        //print_a($article);
        $smarty->assign('article_list',$article['article_list']);

        $smarty->display('article_faq.htm');
    }
    if ($_REQUEST['act']=='article_bidu') {

        //文章
        $recordcount=20;
        $article=engrave_article_single_cat_list(0,7,1,$recordcount);

        $smarty->assign('article_list',$article['article_list']);

        $article=engrave_article_single_cat_list(0,13,1,$recordcount);

        $smarty->assign('article_buy_list',$article['article_list']);

        $smarty->display('article_bidu.htm');
    }
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
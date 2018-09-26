<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_channel_manage.php 2014-11-29 20:24:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_channel_list.php');
/*载入-频道列表-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_channel_list.php');
/*上传*/
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');

/*------------------------------------------------------ */
//-- 频道管理：频道列表-页面展示
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('channel_manage');
	
    $ur_here = $_LANG['04_channel_manage'] .'｜'.$_LANG['0401_channel_list'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0402_add_channel'], 'href'=>'engrave_channel_list.php?act=add'));

    $smarty->assign('full_page',    1);
	//获取 频道 列表数据
    $channel_list = engrave_channel_list(0,0,false,0,true);
    $smarty->assign('channel_list', $channel_list);
    $smarty->assign('filter',        $channel_list['filter']);
    $smarty->assign('record_count',  $channel_list['record_count']);
    $smarty->assign('page_count',    $channel_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_channel_list.htm');
}
/*------------------------------------------------------ */
//-- 文章列表显示页面-分页、删除后显示
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	//获取 频道 列表数据
    $channel_list = engrave_channel_list(0,0,false,0,true);
    $smarty->assign('channel_list', $channel_list);
    $smarty->assign('filter',        $channel_list['filter']);
    $smarty->assign('record_count',  $channel_list['record_count']);
    $smarty->assign('page_count',    $channel_list['page_count']);
    
	make_json_result($smarty->fetch('engrave_channel_list.htm'), '','');
	
}
/*------------------------------------------------------ */
//-- 频道管理：频道添加-页面展示
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('channel_manage');
	
    $ur_here = $_LANG['04_channel_manage'] .'｜'.$_LANG['0402_add_channel'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0401_channel_list'], 'href'=>'engrave_channel_list.php?act=list'));
    $smarty->assign('form_action', 'insert');
	//获取 频道 列表数据
    $channel_list= engrave_channel_list(0,0,true,0,true);
    $smarty->assign('channel_list', $channel_list);
	$smarty->assign('form_act', 'insert');
    /* 显示频道页面 */
    assign_query_info();
    $smarty->display('engrave_channel_info.htm');
}
/*------------------------------------------------------ */
//-- 频道管理：频道编辑-数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
	/* 检查权限 */
	admin_priv('channel_manage');
	$categoryid=isset($_REQUEST['categoryid'])?intval($_REQUEST['categoryid']):0;
	$parentid=isset($_REQUEST['parentid'])?intval($_REQUEST['parentid']):0;
	$engrave_channel=engrave_channel(0,$categoryid);
	$ur_here = $_LANG['04_channel_manage'] .'｜'.$_LANG['0402_add_channel'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0401_channel_list'], 'href'=>'engrave_channel_list.php?act=list'));
	$smarty->assign('form_action', 'insert');
	$smarty->assign('engrave_channel', $engrave_channel);
	//获取 频道 列表数据
	$channel_list= engrave_channel_list(0,$parentid,true,0,true,$categoryid);
	$smarty->assign('channel_list', $channel_list);
	$smarty->assign('form_act', 'update');
	/* 显示频道页面 */
	assign_query_info();
	$smarty->display('engrave_channel_info.htm');
}
/*------------------------------------------------------ */
//-- 频道管理：频道添加-数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'insert' || $_REQUEST['act'] == 'update')
{
	$act=$_REQUEST['act'];
    /* 检查权限 */
    admin_priv('channel_manage');
    
    //获取数据
    $channel['abbreviation'] = !empty($_POST['abbreviation']) ? trim($_POST['abbreviation']) : '';
    $channel['typename'] = !empty($_POST['typename']) ? trim($_POST['typename']) : '';
    $channel['typesummary'] = !empty($_POST['typesummary']) ? trim($_POST['typesummary']) : '';
    $channel['rewritecatalogue'] = !empty($_POST['rewritecatalogue']) ? trim($_POST['rewritecatalogue']) : '';
    $channel['outsidelink'] = !empty($_POST['outsidelink']) ? trim($_POST['outsidelink']) :'';
    $channel['sortid'] = !empty($_POST['sortid']) ? intval($_POST['sortid']) : 0;
    $channel['linktip'] = !empty($_POST['linktip']) ? trim($_POST['linktip']) :'';
    $channel['columnshowposition'] = !empty($_POST['columnshowposition']) ? intval($_POST['columnshowposition']) : 0;
    $channel['conentmodel'] = !empty($_POST['conentmodel']) ? intval($_POST['conentmodel']) : 0;
    $channel['classifytype'] = !empty($_POST['classifytype']) ? intval($_POST['classifytype']) : 0;
    $channel['parentid'] = !empty($_POST['parentid']) ? intval($_POST['parentid']) : 0;

    $upload=new FileUpload();
    foreach ($_FILES AS $code => $file)
    {
    	$filename = $upload-> upload($file);
    	if($filename!='error')
    	{
    		$channel['channellogo']=$filename;
    	}
    	else {
    		///TODO:错误输出
    	}
    }
    $channel['oldChannellogo'] = !empty($_POST['oldChannellogo']) ? trim($_POST['oldChannellogo']) : '';
    $channel['allowpost'] = !empty($_POST['allowpost']) ? intval($_POST['allowpost']) : 0;
    $channel['pagingsize'] = !empty($_POST['pagingsize']) ? intval($_POST['pagingsize']) : 0;
    $channel['metakey'] = !empty($_POST['metakey']) ? trim($_POST['metakey']) : '';
    $channel['metadescription'] = !empty($_POST['metadescription']) ? trim($_POST['metadescription']) : '';
    $channel['contentlink'] = !empty($_POST['contentlink']) ? intval($_POST['contentlink']) : 0;
    $channel['liststyle'] = !empty($_POST['liststyle']) ? intval($_POST['liststyle']) : 0;
    $channel['leftadvert'] = !empty($_POST['leftadvert']) ? trim($_POST['leftadvert']) : '';
    $channel['topadvert'] = !empty($_POST['topadvert']) ? trim($_POST['topadvert']) : '';
    $channel['bottomadvert'] = !empty($_POST['bottomadvert']) ? trim($_POST['bottomadvert']) : '';

    $channel['beforelistadvert'] = !empty($_POST['beforelistadvert']) ? trim($_POST['beforelistadvert']) : '';
    $channel['afterlistadvert'] = !empty($_POST['afterlistadvert']) ? trim($_POST['afterlistadvert']) : '';
    $channel['beforewritten'] = !empty($_POST['beforewritten']) ? trim($_POST['beforewritten']) : '';
    $channel['contentbottomadvert'] = !empty($_POST['contentbottomadvert']) ? trim($_POST['contentbottomadvert']) : '';
    $channel['leftcontentadvert'] = !empty($_POST['leftcontentadvert']) ? trim($_POST['leftcontentadvert']) : '';
    $channel['beforecontentadvert'] = !empty($_POST['beforecontentadvert']) ? trim($_POST['beforecontentadvert']) : '';
    $channel['aftercontentadvert'] = !empty($_POST['aftercontentadvert']) ? trim($_POST['aftercontentadvert']) : '';
    $channel['innerwritten'] = !empty($_POST['innerwritten']) ? trim($_POST['innerwritten']) : '';
    $channel['cutformcontent'] = !empty($_POST['cutformcontent']) ? trim($_POST['cutformcontent']) : '';
    
    if($act=='insert')
    {
    	engrave_channel_insert($channel);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_channel'];
		$link[0]['href'] = 'engrave_channel_list.php?act=add';
		$link[1]['text'] = $_LANG['back_channel_list'];
		$link[1]['href'] = 'engrave_channel_list.php?act=list';
    }
	elseif($act='update')
    {
    	$categoryid=isset($_REQUEST['categoryid'])?intval($_REQUEST['categoryid']):0;
		
		if($channel['channellogo']=='')
		{
			$channel['channellogo']=$channel['oldChannellogo'];
		}
    	engrave_channel_update($channel,$categoryid);
		$link[0]['text'] = $_LANG['back_channel_list'];
		$link[0]['href'] = 'engrave_channel_list.php?act=list';
    }

    sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 频道删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
    $categoryId = intval($_REQUEST['id']);
    /* 检查权限 */
    check_authz_json('channel_remove');
    
//     if (engrave_article_delete("1", $categoryId))
//     {
//     	$url = 'engrave_article_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
//     	ecs_header("Location: $url\n");
//     	exit;
//     }
    if (engrave_channel_delete("1", $categoryId))
    {
        $url = 'engrave_channel_list.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
        ecs_header("Location: $url\n");
        exit;
    }
}
?>
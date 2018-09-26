<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * 中文名称：站点管理
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_site_manage.php 2014-11-28 20:24:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/*载入图片配置*/
include_once(ROOT_PATH . 'includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_site_manage.php');
/*载入-站点、站点分类-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_site_manage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_site_classification.php');
/*上传*/
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');

/*------------------------------------------------------ */
//-- 购物指南
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('site_manage');
	
    $ur_here = $_LANG['05_shopping_directory'] .'｜'.$_LANG['0503_site_manage'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0504_add_site'], 'href'=>'engrave_site_manage.php?act=add'));

    $smarty->assign('full_page',    1);

    $site_list= engrave_site_list();
    $smarty->assign('site_list',   $site_list['site_list']);
    $smarty->assign('filter',       $site_list['filter']);
    $smarty->assign('record_count', $site_list['record_count']);
    $smarty->assign('page_count',   $site_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_site_manage.htm');
}
elseif ($_REQUEST['act'] == 'query')
{
    $site_list= engrave_site_list();
    $smarty->assign('site_list',   $site_list['site_list']);
    $smarty->assign('filter',       $site_list['filter']);
    $smarty->assign('record_count', $site_list['record_count']);
    $smarty->assign('page_count',   $site_list['page_count']);
    
    $sort_flag  = sort_flag($site_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);
    
	make_json_result($smarty->fetch('engrave_site_manage.htm'), '',
			array('filter' => $site_list['filter'], 'page_count' => $site_list['page_count']));
	
}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('site_manage');
	
    $ur_here = $_LANG['05_shopping_directory'] .'｜'.$_LANG['0504_add_site'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0503_site_manage'], 'href'=>'engrave_site_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');

    $site_select_option=engrave_site_classifity_select();
    echo $site_select_option;
    $smarty->assign('site_select_option', $site_select_option);
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_site_info.htm');
}

elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('site_manage');
	//获取ID,根据ID获取站点对象
	$siteid=isset($_REQUEST['SiteId'])?intval($_REQUEST['SiteId']):0;
	$site=engrave_site($siteid);
	$smarty->assign("site", $site['site']);
	$ur_here = $_LANG['05_shopping_directory'] .'｜'.$_LANG['0504_add_site'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0503_site_manage'], 'href'=>'engrave_site_manage.php?act=list'));
	$smarty->assign('form_action', 'update');
	
	$site_select_option=engrave_site_classifity_select();
	echo $site_select_option;
	$smarty->assign('site_select_option', $site_select_option);
	/* 显示购物指南页面 */
	assign_query_info();
	$smarty->display('engrave_site_info.htm');
}
elseif ($_REQUEST['act'] == 'insert' || $_REQUEST['act'] == 'update')
{
	$act=$_REQUEST['act'];
	
	/*检查品牌名是否重复*/
	admin_priv('classifi_manage');
	
	$upload=new FileUpload();
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload($file);
		if($filename!='error')
		{
			$site['Logo']=$filename;
		}
		else {
			///TODO:错误输出
		}
	}
	$site['SiteName']=isset($_REQUEST['SiteName'])?trim($_REQUEST['SiteName']):"";
	$site['OldSiteName']=isset($_REQUEST['OldSiteName'])?trim($_REQUEST['OldSiteName']):"";
	$site['Description']=isset($_REQUEST['Description'])?trim($_REQUEST['Description']):"";
	$site['SiteUrl']=isset($_REQUEST['SiteUrl'])?trim($_REQUEST['SiteUrl']):"";
	$site['SortId']=isset($_REQUEST['SortId'])?intval($_REQUEST['SortId']):"0";
	$site['SiteId']=isset($_REQUEST['SiteId'])?intval($_REQUEST['SiteId']):"0";
	/*插入数据*/
	if($act=="insert")
	{
		echo $_LANG['engrave_operate_succed'];
		$link[0]['text'] = $_LANG['continue_add_site'];
		$link[0]['href'] = 'engrave_site_manage.php?act=add';
		$link[1]['text'] = $_LANG['back_site_list'];
		$link[1]['href'] = 'engrave_site_manage.php?act=list';
		if(!engrave_site_uniqueness($site['SiteName']))
		{
			engrave_site_insert($site);
			// 记录日志
			admin_log($site['SiteName'],'add','shopsite');
			sys_msg($_LANG['engrave_operate_succed'], 0, $link);
		}
		else
		{
			sys_msg($_LANG['sitename_exist'], 1, $link, false);
		}
	}
	elseif($act=="update")
	{
		$link[0]['text'] = $_LANG['back_site_list'];
		$link[0]['href'] = 'engrave_site_manage.php?act=list';
		if(!engrave_site_uniqueness($site['SiteName'],$site['OldSiteName']))
		{
			engrave_site_update($site,$site['SiteId']);
			// 记录日志
			admin_log($site['SiteName'],'edit','shopsite');
			sys_msg($_LANG['engrave_operate_succed'], 0, $link);
		}
		else
		{
			sys_msg($_LANG['sitename_exist'], 1, $link, false);
		}
	}
}
elseif ($_REQUEST['act'] == 'remove')
{
	//根据站点管理ID获取站点管理名称
	$siteId = intval($_REQUEST['id']);
	$site = engrave_site($siteId);
	$siteName=$site['site']['SiteName'];
	/* 检查权限 */
	check_authz_json('site_remove');
	if (engrave_site_manage_delete("1", $siteId))
	{
		// 记录日志
		admin_log(addslashes($siteName), 'remove', 'site_manage'); 
		$url = 'engrave_site_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
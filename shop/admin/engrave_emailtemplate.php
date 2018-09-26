<?php 
/**
 * ENGRAVE 邮件模板
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_mailtemplate.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_emailtemplate.php');
/*载入-邮件模板-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_emailtemplate.php');

//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 邮件模板
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('email_template');
	
    $ur_here = $_LANG['12_system_manage'] .'｜'.$_LANG['1207_email_template'];
    $smarty->assign('ur_here', $ur_here);
    $ur_tip = empty($_LANG['engrave_member_manage_tip'])?'':$_LANG['engrave_member_manage_tip'];
    $smarty->assign('ur_tip', $ur_tip);
    $smarty->assign('action_link',  array('text' => $_LANG['add_emailtemplate'], 'href'=>'engrave_emailtemplate.php?act=add'));

    $smarty->assign('full_page',    1);

    $emailtemplate_pagelist= engrave_emailtemplate_pagelist();
    $smarty->assign('emailtemplate_list',   $emailtemplate_pagelist['emailtemplate_list']);
    $smarty->assign('filter',       $emailtemplate_pagelist['filter']);
    $smarty->assign('record_count', $emailtemplate_pagelist['record_count']);
    $smarty->assign('page_count',   $emailtemplate_pagelist['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_emailtemplate_list.htm');
}
/*------------------------------------------------------ */
//-- 邮件模板-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$emailtemplate_pagelist= engrave_emailtemplate_pagelist();
    $smarty->assign('member_list',   $emailtemplate_pagelist['emailtemplate_list']);
    $smarty->assign('filter',       $emailtemplate_pagelist['filter']);
    $smarty->assign('record_count', $emailtemplate_pagelist['record_count']);
    $smarty->assign('page_count',   $emailtemplate_pagelist['page_count']);

	$sort_flag  = sort_flag($emailtemplate_pagelist['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_emailtemplate_list.htm'), '',
	array('filter' => $emailtemplate_pagelist['filter'], 'page_count' => $emailtemplate_pagelist['page_count']));
}
/*------------------------------------------------------ */
//-- 邮件模板-添加
/*------------------------------------------------------ */
if($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('email_template');
    $ur_here = $_LANG['12_system_manage'] .'｜'.$_LANG['1207_email_template'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['1207_email_template'], 'href'=>'engrave_emailtemplate.php?act=list'));
    $smarty->assign('form_action', 'insert');
    //获取邮件分组
    $eamilgroup_option = engrave_eamilgroup_option(0);
    $smarty->assign('eamilgroup_option', $eamilgroup_option);
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_emailtemplate_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('email_template');
	//当前位置
	$ur_here = $_LANG['12_system_manage'] .'｜'.$_LANG['edit_email_template'];
	$smarty->assign('ur_here', $ur_here);
	//获取ID，并根据ID获取对象 赋值给smarty
	$et_id = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	$emailtemplate_info = engrave_emailtemplate_byid($et_id);
	$smarty->assign('emailtemplate_info', $emailtemplate_info);
	//获取下拉列表：邮件模板分组
    $eamilgroup_option = engrave_eamilgroup_option($emailtemplate_info['et_egid']);
    $smarty->assign('eamilgroup_option', $eamilgroup_option);
    
	$smarty->assign('action_link',  array('text' => $_LANG['1207_email_template'], 'href'=>'engrave_emailtemplate.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_emailtemplate_info.htm');
}
/*------------------------------------------------------ */
//-- 邮件模板-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('email_template');
	//获取数据
	$emailtemplate['et_tag'] = !empty($_POST['et_tag']) ? trim($_POST['et_tag']) : '';
	$emailtemplate['et_des'] = !empty($_POST['et_des']) ? trim($_POST['et_des']) : '';
	$emailtemplate['et_title'] = !empty($_POST['et_title']) ? trim($_POST['et_title']) : '';
	$emailtemplate['et_content'] = !empty($_POST['et_content']) ? trim($_POST['et_content']) : '';
	$emailtemplate['et_egid'] = !empty($_POST['et_egid']) ? intval($_POST['et_egid']) : '0';

	//页面跳转
	$link[0]['text'] = $_LANG['back_emailtemplate_list'];
	$link[0]['href'] = 'engrave_emailtemplate.php?act=list';
	if($act=='insert')
	{
		$link[1]['text'] = $_LANG['continue_add_emailtemplate'];
		$link[1]['href'] = 'engrave_emailtemplate.php?act=add';
		if(engrave_emailtemplate_isexist_et_egid($emailtemplate['et_egid'],0))
		{
			sys_msg($_LANG['operate_failed_et_egid_exist'],1 , $link);
		}
		
		if(!engrave_emailtemplate_insert($emailtemplate))
		{
			sys_msg($_LANG['operate_failed'],1, $link);
		}
	}
	elseif($act=='update')
	{	
		if(engrave_emailtemplate_isexist_et_egid($emailtemplate['et_egid'],1))
		{
			sys_msg($_LANG['operate_failed_et_egid_exist'], 1, $link);
		}
		$emailtemplate['et_id'] = !empty($_POST['id']) ? intval($_POST['id']) : '0';
		if(!engrave_emailtemplate_update($emailtemplate))
		{
			if(!engrave_emailtemplate_insert($emailtemplate))
			{
				sys_msg($_LANG['operate_failed'], 1, $link);
			}
		}
	}
	sys_msg($_LANG['operate_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 邮件模板删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$TrackId = !empty($_REQUEST['id']) ? intval($_REQUEST['id']) : '0';
	/* 检查权限 */
	check_authz_json('tracking_remove');

	if (engrave_tracking_delete("1", $TrackId))
	{
		$url = 'engrave_tracking_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
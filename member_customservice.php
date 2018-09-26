<?php 
/**
 * ENGRAVE （客服中心）有问必答、联系方式、投诉理赔
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: member_datamanage.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */
define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
/*语言包*/
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_customservice.php');
//数据访问类：FAQ
require_once(ROOT_PATH . '/includes/member/lib_faq.php');

$smarty->assign('lang', $_LANG);
session_start();
//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	$user_id=isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$smarty->assign('user_name',$_SESSION['username']);
	$smarty->assign('username',$_SESSION['username']);
}
else {
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************
//*********************有问必答****************************************************************
if($_REQUEST['act'] == 'member_insider')
{
	//添加
	$operate = isset($_REQUEST['operate']) ? trim($_REQUEST['operate']) : '';
	//获取插入数据/标题、包裹单号、订单号、运单号、备注
    $faq = "";
	$faq['faq_title'] = isset($_REQUEST['faq_title']) ? trim($_REQUEST['faq_title']) : '';
	$faq['faq_expressnumber'] = isset($_REQUEST['faq_expressnumber']) ? trim($_REQUEST['faq_expressnumber']) : '';
	$faq['faq_orderno'] = isset($_REQUEST['faq_orderno']) ? trim($_REQUEST['faq_orderno']) : '';
	$faq['faq_deliverynumber'] = isset($_REQUEST['faq_deliverynumber']) ? trim($_REQUEST['faq_deliverynumber']) : '';
	$faq['faq_remark'] = isset($_REQUEST['faq_remark']) ? trim($_REQUEST['faq_remark']) : '';
	//用户ID
	$faq['faq_userid'] = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$faq['faq_parentid'] = 0;
	if($operate=='')
	{
		return;
	}
	elseif($operate == 'insert')
	{
		if(engrave_faq_insert($faq))
		{
			//添加成功
			$link[0]['text'] = $_LANG['insert_faq_success'];
			$link[0]['href'] = 'member.php?act=member_insider';
			sys_msg($_LANG['member']['member_insider'], 0, $link);
		}
		else{
			//添加失败
			$link[0]['text'] = $_LANG['insert_faq_failed'];
			$link[0]['href'] = 'member.php?act=member_insider';
			sys_msg($_LANG['member']['member_insider'], 0, $link);
		}
	}
	elseif($operate == 'update')
	{
		$faq['faq_id'] = isset($_REQUEST['faq_id']) ? intval($_REQUEST['faq_id']) : 0;
		if(engrave_faq_update($faq))
		{
			//修改成功
			$link[0]['text'] = $_LANG['edit_faq_success'];
			$link[0]['href'] = 'member.php?act=member_insider';
			sys_msg($_LANG['member']['member_insider'], 0, $link);
		}
		else{
			//修改失败
			$link[0]['text'] = $_LANG['edit_faq_failed'];
			$link[0]['href'] = 'member.php?act=member_insider';
			sys_msg($_LANG['member']['member_insider'], 0, $link);
		}
	}
}
elseif($_REQUEST['act'] == 'member_editinsider')
{
	//修改
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['edit_faq']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('operate','update');
	//ID
	$faq_id = isset($_REQUEST['faq_id']) ? intval($_REQUEST['faq_id']) : 0;
	//有问必答列表
	$faq = engrave_faq($faq_id,$user_id);
	$smarty->assign('faq',$faq);
	$smarty->display('member_insider_info.htm');
}
elseif($_REQUEST['act'] == 'member_viewinsider')
{
	//修改
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(0,$_LANG['view_faq']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('operate','update');
	//ID
	$faq_id = isset($_REQUEST['faq_id']) ? intval($_REQUEST['faq_id']) : 0;
	//有问必答列表
	$faq = engrave_faq($faq_id,$user_id);
	$smarty->assign('faq',$faq);
	$faq_list = engrave_faq_plist($faq_id);
	$smarty->assign('faq_list',$faq_list);
	$smarty->display('member_insider_view.htm');
}
//*********************有问必答****************************************************************
//*********************联系方式****************************************************************

//*********************联系方式****************************************************************
//*********************投诉理赔****************************************************************
elseif($_REQUEST['act'] == 'member_complaint')
{
    $complaint = "";
	//添加
	$operate = isset($_REQUEST['operate']) ? trim($_REQUEST['operate']) : '';
	//获取插入数据/标题、包裹单号、订单号、运单号、备注
	$complaint['cmp_title'] = isset($_REQUEST['cmp_title']) ? trim($_REQUEST['cmp_title']) : '';
	$complaint['cmp_expressnumber'] = isset($_REQUEST['cmp_expressnumber']) ? trim($_REQUEST['cmp_expressnumber']) : '';
	$complaint['cmp_orderno'] = isset($_REQUEST['cmp_orderno']) ? trim($_REQUEST['cmp_orderno']) : '';
	$complaint['cmp_deliverynumber'] = isset($_REQUEST['cmp_deliverynumber']) ? trim($_REQUEST['cmp_deliverynumber']) : '';
	$complaint['cmp_remark'] = isset($_REQUEST['cmp_remark']) ? trim($_REQUEST['cmp_remark']) : '';
	//用户ID
	$complaint['cmp_userid'] = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$complaint['cmp_parentid'] = 0;
	if($operate=='')
	{
		return;
	}
	elseif($operate == 'insert')
	{
		if(engrave_complaint_insert($complaint))
		{
			//添加成功
			$link[0]['text'] = $_LANG['insert_complaint_success'];
			$link[0]['href'] = 'member.php?act=member_complaint';
			sys_msg($_LANG['member']['member_complaint'], 0, $link);
		}
		else{
			//添加失败
			$link[0]['text'] = $_LANG['insert_complaint_failed'];
			$link[0]['href'] = 'member.php?act=member_complaint';
			sys_msg($_LANG['member']['member_complaint'], 0, $link);
		}
	}
	elseif($operate == 'update')
	{
		$complaint['cmp_id'] = isset($_REQUEST['cmp_id']) ? intval($_REQUEST['cmp_id']) : 0;
		if(engrave_complaint_update($complaint))
		{
			//修改成功
			$link[0]['text'] = $_LANG['edit_complaint_success'];
			$link[0]['href'] = 'member.php?act=member_complaint';
			sys_msg($_LANG['member']['member_complaint'], 0, $link);
		}
		else{
			//修改失败
			$link[0]['text'] = $_LANG['edit_complaint_failed'];
			$link[0]['href'] = 'member.php?act=member_complaint';
			sys_msg($_LANG['member']['member_complaint'], 0, $link);
		}
	}
}
elseif($_REQUEST['act'] == 'member_editcomplaint')
{
	//修改
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(1,$_LANG['edit_complaint']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('operate','update');
	//ID
	$cmp_id = isset($_REQUEST['cmp_id']) ? intval($_REQUEST['cmp_id']) : 0;
	//投诉理赔列表
	$complaint = engrave_complaint($cmp_id,$user_id);
	$smarty->assign('cmp',$complaint);
	$smarty->display('member_complaint_info.htm');
}
elseif($_REQUEST['act'] == 'member_viewcomplaint')
{
	//查看
	require_once(ROOT_PATH . '/includes/member/lib_faq.php');
	//导航
	$ur=assign_ur_here(1,$_LANG['view_complaint']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('operate','update');
	//ID
	$cmp_id = isset($_REQUEST['cmp_id']) ? intval($_REQUEST['cmp_id']) : 0;
	//投诉理赔
	$complaint = engrave_complaint($cmp_id,$user_id);
	$smarty->assign('cmp',$complaint);
	$complaint_list = engrave_complaint_plist($cmp_id,$user_id);
	$smarty->assign('complaint_list',$complaint_list);
	$smarty->display('member_complaint_view.htm');
}
//*********************投诉理赔****************************************************************
?>
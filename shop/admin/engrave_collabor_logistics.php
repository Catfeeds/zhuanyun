<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_value_services.php 2014-12-14 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_collabor_logistics.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_collabor_logistics.php');

$smarty->assign('lang',$_LANG);


/*------------------------------------------------------ */
//-- 物流系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('collabor_logistics');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0713_collabor_logistics'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0714_add_logistics'], 'href'=>'engrave_collabor_logistics.php?act=add'));

    $smarty->assign('full_page',    1);

    $logistics_list= engrave_logistics_list();
    $smarty->assign('logistics_list',   $logistics_list['logistics_list']);
    $smarty->assign('filter',       $logistics_list['filter']);
    $smarty->assign('record_count', $logistics_list['record_count']);
    $smarty->assign('page_count',   $logistics_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示购物指南页面 */
    assign_query_info();
    $smarty->display('engrave_collabor_logistics.htm');
}
/*------------------------------------------------------ */
//-- 合作物流列表显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$logistics_list = engrave_logistics_list();
	$smarty->assign('logistics_list',   $logistics_list['logistics_list']);
	$smarty->assign('filter',       $logistics_list['filter']);
	$smarty->assign('record_count', $logistics_list['record_count']);
	$smarty->assign('page_count',   $logistics_list['page_count']);

	$sort_flag  = sort_flag($logistics_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_collabor_logistics.htm'), '',
	array('filter' => $logistics_list['filter'], 'page_count' => $logistics_list['page_count']));

}
/*------------------------------------------------------ */
//-- 合作物流添加页面-添加
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('collabor_logistics');
	
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0714_add_logistics'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0713_collabor_logistics'], 'href'=>'engrave_collabor_logistics.php?act=list'));
    $smarty->assign('form_action', 'insert');
    $languages_option = engrave_languages_option(0);
    $smarty->assign('languages_option', $languages_option);
    /* 显示商品列表页面 */
    assign_query_info();
    $smarty->display('engrave_collabor_logistics_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('collabor_logistics');

	//获取ID，并根据ID获取对象 赋值给smarty
	$LogisticsId=$_REQUEST['id'];
	$logistics=engrave_logistics($LogisticsId);
	$logistics['ArrivalDate']   = local_date('Y-m-d', $logistics['ArrivalDate']);
	$smarty->assign('logistics', $logistics);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0714_add_logistics'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0713_collabor_logistics'], 'href'=>'engrave_collabor_logistics.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);
	//语言
	$languages_option = engrave_languages_option($logistics['cg_languageid']);
	$smarty->assign('languages_option', $languages_option);
	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_collabor_logistics_info.htm');
}
/*------------------------------------------------------ */
//-- 合作物流添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('collabor_logistics');
	//获取数据
	$logistics['LogisticsName'] = !empty($_POST['LogisticsName']) ? trim($_POST['LogisticsName']) : '';
	$logistics['StatusList'] = !empty($_POST['StatusList']) ? trim($_POST['StatusList']) : '0';
	
	$logistics['cg_languageid'] = !empty($_POST['cg_languageid']) ? intval($_POST['cg_languageid']) : '0';
	$logistics['CollCode'] = !empty($_POST['CollCode']) ? trim($_POST['CollCode']) : '';
	$logistics['LogisticsDesc'] = !empty($_POST['LogisticsDesc']) ? trim($_POST['LogisticsDesc']) : '';
	$logistics['ActionLink'] = !empty($_POST['ActionLink']) ? trim($_POST['ActionLink']) : '';
	$logistics['Submission'] = !empty($_POST['Submission']) ? intval($_POST['Submission']) : '0';
	$logistics['SubParameter'] = !empty($_POST['SubParameter']) ? trim($_POST['SubParameter']) : '';
	$logistics['CodingMethod'] = !empty($_POST['CodingMethod']) ? intval($_POST['CodingMethod']) : '0';
	$logistics['Orgion'] = !empty($_POST['Orgion']) ? trim($_POST['Orgion']) : '';
	$logistics['Destination'] = !empty($_POST['Destination']) ? trim($_POST['Destination']) : '';
	$logistics['Number'] = !empty($_POST['Number']) ? intval($_POST['Number']) : '0';
	$logistics['Status'] = !empty($_POST['Status']) ? trim($_POST['Status']) : '';
	$logistics['ArrivalDate'] = !empty($_POST['ArrivalDate']) ? local_strtotime($_POST['ArrivalDate']) : '0';
	$logistics['Signatory'] = !empty($_POST['Signatory']) ? trim($_POST['Signatory']) : '';
	$logistics['IsDeleteLogistics'] = '0';

	if($act=='insert')
	{
		engrave_logistics_insert($logistics);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_logistics'];
		$link[0]['href'] = 'engrave_collabor_logistics.php?act=add';
		$link[1]['text'] = $_LANG['back_logistics_list'];
		$link[1]['href'] = 'engrave_collabor_logistics.php?act=list';
	}
	elseif($act=='update')
	{
		$logisticsId=$_REQUEST['LogisticsId'];
		engrave_logistics_update($logistics,$logisticsId);
		$link[0]['text'] = $_LANG['back_logistics_list'];
		$link[0]['href'] = 'engrave_collabor_logistics.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 合作物流删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$LogistiscId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('logistice_remove');

	if (engrave_logistics_delete("1", $LogistiscId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_collabor_logistics.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}

?>
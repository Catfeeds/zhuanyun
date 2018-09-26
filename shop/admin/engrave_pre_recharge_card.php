<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_pre_recharge_card.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_pre_recharge_card.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_pre_recharge_card.php');
/*上传*/
require_once (ROOT_PATH  . 'admin/commonhelper/upload_json.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 营销系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('pre_card_manage');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0807_pre_recharge_card'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0808_add_recharge_card'], 'href'=>'engrave_pre_recharge_card.php?act=add'));

    $smarty->assign('full_page',    1);

    $card_list= engrave_card_list();
    $smarty->assign('card_list',   $card_list['card_list']);
    $smarty->assign('filter',       $card_list['filter']);
    $smarty->assign('record_count', $card_list['record_count']);
    $smarty->assign('page_count',   $card_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示充值卡管理页面 */
    assign_query_info();
    $smarty->display('engrave_recharge_card_manage.htm');
}
/*------------------------------------------------------ */
//-- 焦点图管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$card_list = engrave_card_list();
	$smarty->assign('card_list',   $card_list['card_list']);
	$smarty->assign('filter',       $card_list['filter']);
	$smarty->assign('record_count', $card_list['record_count']);
	$smarty->assign('page_count',   $card_list['page_count']);

	$sort_flag  = sort_flag($card_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_recharge_card_manage.htm'), '',
	array('filter' => $card_list['filter'], 'page_count' => $card_list['page_count']));

}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('pre_card_manage');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0808_add_recharge_card'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0807_pre_recharge_card'], 'href'=>'engrave_pre_recharge_card.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示充值卡页面 */
    assign_query_info();
    $smarty->display('engrave_pre_recharge_card_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('pre_card_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$PrepaidId=$_REQUEST['id'];
	$card_info=engrave_card($PrepaidId);
	$smarty->assign('card_info', $card_info);
	$ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0808_add_recharge_card'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0807_pre_recharge_card'], 'href'=>'engrave_pre_recharge_card.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示商品列表页面 */
	assign_query_info();
	$smarty->display('engrave_pre_recharge_card_info.htm');
}
/*------------------------------------------------------ */
//-- 充值卡添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('pre_card_manage');
	
	$upload=new FileUpload();
	
	foreach ($_FILES AS $code => $file)
	{
		$filename = $upload-> upload($file);
		if($filename!='')
		{
			$card['CoverImage']=$filename;
		}
		else {
			sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));
		}
	}

	//获取数据
	$card['CardName'] = !empty($_POST['CardName']) ? trim($_POST['CardName']) : '';
    
	$card['Description'] = !empty($_POST['Description']) ? trim($_POST['Description']) : '';
	$card['Price'] = !empty($_POST['Price']) ? intval($_POST['Price']) : '0';
	$card['ParValue'] = !empty($_POST['ParValue']) ? intval($_POST['ParValue']) : '0';
	$card['SortId'] = !empty($_POST['SortId']) ? intval($_POST['SortId']) : '0';
	$card['IsDeleteCard'] = '0';
	$card['IsFreeStorage'] = '0';
	$card['IsFreePackage'] = '0';
	$card['IsFreeService'] = '0';
	$card['Sales'] = '0';
	$card['Hits'] = '0';

	if($act=='insert')
	{
		engrave_card_insert($card);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_card'];
		$link[0]['href'] = 'engrave_pre_recharge_card.php?act=add';
		$link[1]['text'] = $_LANG['back_card_list'];
		$link[1]['href'] = 'engrave_pre_recharge_card.php?act=list';
	}
	elseif($act=='update')
	{
		$PrepaidId=$_REQUEST['PrepaidId'];
		engrave_card_update($card,$PrepaidId);
		$link[0]['text'] = $_LANG['back_card_list'];
		$link[0]['href'] = 'engrave_pre_recharge_card.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$PrepaidId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('pre_card_remove');

	if (engrave_card_delete("1", $PrepaidId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_pre_recharge_card.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
		//$lnk[] = array('text' => $_LANG['go_back'], 'href'=>'engrave_pre_recharge_card.php?act=list');
		//sys_msg(sprintf($_LANG['remove_card_success'], $count), 0, $lnk);
	}
}
elseif ($_REQUEST['act'] == 'edit_currecys_name')
{
        make_json_result(stripslashes('dfsafasd'));
}
?>
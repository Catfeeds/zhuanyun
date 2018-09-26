<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_coupon_manage.php 2014-12-18 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_coupon_manage.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_coupon_manage.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 营销系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('coupon_manage');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0809_coupon'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0810_add_coupon'], 'href'=>'engrave_coupon_manage.php?act=add'));

    $smarty->assign('full_page',    1);

    $coupon_list= engrave_coupon_list();
    $smarty->assign('coupon_list',   $coupon_list['coupon_list']);
    $smarty->assign('filter',       $coupon_list['filter']);
    $smarty->assign('record_count', $coupon_list['record_count']);
    $smarty->assign('page_count',   $coupon_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示优惠券管理页面 */
    assign_query_info();
    $smarty->display('engrave_coupon_manage.htm');
}
/*------------------------------------------------------ */
//-- 优惠券管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$coupon_list = engrave_coupon_list();
	$smarty->assign('coupon_list',   $coupon_list['coupon_list']);
	$smarty->assign('filter',       $coupon_list['filter']);
	$smarty->assign('record_count', $coupon_list['record_count']);
	$smarty->assign('page_count',   $coupon_list['page_count']);

	$sort_flag  = sort_flag($coupon_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_coupon_manage.htm'), '',
	array('filter' => $coupon_list['filter'], 'page_count' => $coupon_list['page_count']));

}
/*-------------------------------------------------------*/
//-----优惠券的添加
/*-------------------------------------------------------*/
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('coupon_manage');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0810_add_coupon'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0809_coupon'], 'href'=>'engrave_coupon_manage.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示优惠券页面 */
    assign_query_info();
    $smarty->display('engrave_coupon_manage_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('coupon_manage');

	//获取ID，并根据ID获取对象 赋值给smarty
	$CouponId=$_REQUEST['id'];
	$coupon_info=engrave_coupon($CouponId);
	$smarty->assign('coupon_info', $coupon_info);
	$ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0810_add_coupon'];
	$smarty->assign('ur_here', $ur_here);
	$smarty->assign('action_link',  array('text' => $_LANG['0809_coupon'], 'href'=>'engrave_coupon_manage.php?act=list'));
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

	/* 显示优惠券列表页面 */
	assign_query_info();
	$smarty->display('engrave_coupon_manage_info.htm');
}
/*------------------------------------------------------ */
//-- 优惠券添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('coupon_manage');
	
	//获取数据
	$coupon['CouponName'] = !empty($_POST['CouponName']) ? trim($_POST['CouponName']) : '';
    
	$coupon['Message'] = !empty($_POST['Message']) ? trim($_POST['Message']) : '';
	$coupon['CouponValue'] = !empty($_POST['CouponValue']) ? intval($_POST['CouponValue']) : '0';
	$coupon['RebatePoints'] = !empty($_POST['RebatePoints']) ? intval($_POST['RebatePoints']) : '0';
	$coupon['Days'] = !empty($_POST['Days']) ? intval($_POST['Days']) : '0';
	$coupon['MinAmount'] = !empty($_POST['MinAmount']) ? intval($_POST['MinAmount']) : '0';
	$coupon['IsDeleteCoupon'] = '0';

	if($act=='insert')
	{
		engrave_coupon_insert($coupon);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_coupon'];
		$link[0]['href'] = 'engrave_coupon_manage.php?act=add';
		$link[1]['text'] = $_LANG['back_coupon_list'];
		$link[1]['href'] = 'engrave_coupon_manage.php?act=list';
	}
	elseif($act=='update')
	{
		$CouponId=$_REQUEST['CouponId'];
		engrave_coupon_update($coupon,$CouponId);
		$link[0]['text'] = $_LANG['back_coupon_list'];
		$link[0]['href'] = 'engrave_coupon_manage.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
/*------------------------------------------------------ */
//-- 充值卡删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$CouponId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('coupon_remove');

	if (engrave_coupon_delete("1", $CouponId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_coupon_manage.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
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
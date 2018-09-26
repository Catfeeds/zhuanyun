<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址:
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_shipping_declaredvalue_declaredvalue.php 2014-12-01 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_shipping_declaredvalue.php');
/*载入-线路管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipping_declaredvalue.php');

/*------------------------------------------------------ */
//-- 线路管理-阶梯价格
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
	/* 检查权限 */
	admin_priv('shipping');

	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0705_shipping'];
	$smarty->assign('ur_here', $ur_here);
    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : "";
    
	$smarty->assign('action_link',  array('text' => $_LANG['add_declaredvalue'], 'href'=>'engrave_shipping_declaredvalue.php?act=add&id='.$id.'&name='.$name));

	$shipping_declaredvalue_list= engrave_shipping_declaredvalue_list($id);
	$smarty->assign('shipping_declaredvalue_list',   $shipping_declaredvalue_list['shipping_declaredvalue_list']);
	$smarty->assign('filter',       $shipping_declaredvalue_list['filter']);
	$smarty->assign('full_page',    1);

	/* 显示线路管理页面 */
	assign_query_info();
	$smarty->display('engrave_shipping_declaredvalue_list.htm');
}
/*------------------------------------------------------ */
//-- 线路管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$shippingid = isset($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : 0;
	$shipping_declaredvalue_list = engrave_shipping_declaredvalue_list($shippingid);
	$smarty->assign('shipping_declaredvalue_list',   $shipping_declaredvalue_list['shipping_declaredvalue_list']);
	$smarty->assign('filter',       $shipping_declaredvalue_list['filter']);

	$sort_flag  = sort_flag($shipping_declaredvalue_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_shipping_declaredvalue_list.htm'), '');

}
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('shipping');

    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $name = isset($_REQUEST['name']) ? trim($_REQUEST['name']) : "";
    $ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
    $smarty->assign('action_link',  array('text' => $_LANG['list_declaredvalue'], 'href'=>'engrave_shipping_declaredvalue.php?act=list&id='.$id.'&name='.$name));
    
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('sdv_shippingid', $id);
    $smarty->assign('shippingname', $name);
    /* 显示购线路管理页面 */
    $smarty->assign('form_action', 'insert');
	$smarty->assign('full_page',    1);
    assign_query_info();
    $smarty->display('engrave_shipping_declaredvalue_info.htm');
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('shipping');

	//获取ID，并根据ID获取对象 赋值给smarty
	$sdv_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$shipping_id=isset($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) : 0;
	$shipping=engrave_shipping_declaredvalue($sdv_id);
	$smarty->assign('sdv', $shipping);
	$ur_here = $_LANG['07_logistics_system'] .'｜'.$_LANG['0706_add_shipping'];
	$smarty->assign('action_link',  array('text' => $_LANG['list_declaredvalue'], 'href'=>'engrave_shipping_declaredvalue.php?act=list&id='.$shipping_id));
	$smarty->assign('ur_here', $ur_here);
    $smarty->assign('sdv_shippingid', $shipping_id);
   
	/* 显示商品列表页面 */
	$smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);
	assign_query_info();
	$smarty->display('engrave_shipping_declaredvalue_info.htm');
}
/*------------------------------------------------------ */
//-- 添加-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('shipping');
	$id = isset($_REQUEST['sdv_shippingid']) ? intval($_REQUEST['sdv_shippingid']) : 0;
    $name = isset($_REQUEST['sdv_shippingname']) ? trim($_REQUEST['sdv_shippingname']) : "";
//     echo $name;
//     return;
	//获取数据
	$shipping['sdv_shippingid'] = !empty($_POST['sdv_shippingid']) ? intval($_POST['sdv_shippingid']) : '0';
	$shipping['sdv_minprice'] = !empty($_POST['sdv_minprice']) ? intval($_POST['sdv_minprice']) : '0';
	$shipping['sdv_maxprice'] = !empty($_POST['sdv_maxprice']) ? intval($_POST['sdv_maxprice']) : '0';
	$shipping['sdv_price'] = !empty($_POST['sdv_price']) ? intval($_POST['sdv_price']) : '0';
	$shipping['sdv_ispercent'] = !empty($_POST['sdv_ispercent']) ? intval($_POST['sdv_ispercent']) : '0';
	$shipping['sdv_isdelete'] = '0';

	if($act=='insert')
	{
		$link[0]['text'] = $_LANG['back_shipping_declaredvalue_list'];
		$link[0]['href'] = 'engrave_shipping_declaredvalue.php?act=list&id='.$id."&name=".$name;
		if(engrave_shipping_declaredvalue_insert($shipping))
		{
			//页面跳转
			sys_msg($_LANG['save_success'], 0, $link);
		}
		else{
			//页面跳转
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
	elseif($act=='update')
	{
		$sdv_id=$_REQUEST['sdv_id'];
		$link[0]['text'] = $_LANG['back_shipping_declaredvalue_list'];
		$link[0]['href'] = 'engrave_shipping_declaredvalue.php?act=list&id='.$id."&name=".$name;
		if(engrave_shipping_declaredvalue_update($shipping,$sdv_id))
		{
			sys_msg($_LANG['save_success'], 0, $link);
		}else {
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
}
/*------------------------------------------------------ */
//-- 删除：数据操作
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'remove')
{
	$sdv_id = intval($_REQUEST['id']);
	$sdv=engrave_shipping_declaredvalue($sdv_id);
	$sdv_shippingid = $sdv['sdv_shippingid'];
	/* 检查权限 */
	check_authz_json('shipping_remove');
	if (engrave_shipping_declaredvalue_delete($sdv_id))
	{
		//根据删除的ID，获取线路ID
		$url = 'engrave_shipping_declaredvalue.php?act=query&shippingid='.$sdv_shippingid. str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
		ecs_header("Location: $url\n");
		exit;
	}
}
?>
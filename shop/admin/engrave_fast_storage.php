<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * 中文名称：包裹管理 -- 快速入库
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_fast_storage.php 2015年1月7日 16:39:32 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_fast_storage.php');
/*载入-包裹管理-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_fast_storage.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_user.php');

$smarty->assign('lang',$_LANG);

if ($_REQUEST['act'] == 'add')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	$ur_here = $_LANG['01_package_manage'] .'｜'.$_LANG['0105_fast_storage'];
	$smarty->assign('ur_here', $ur_here);
	/*取得货运公司列表 */
	$smarty->assign('warehouse_list', get_warehouse_list());
	$smarty->assign('form_action', 'insert');
	
	/* 显示优惠券页面 */
	assign_query_info();
	$smarty->display('engrave_fast_storage.htm');
}
/*------------------------------------------------------ */
//-- 包裹入库的添加和编辑-数据操作
/*------------------------------------------------------ */
elseif($_REQUEST['act']=='insert')
{
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('fast_storage');
	//获取数据
	$package['pck_id']  = !empty($_POST['hidPckId']) ? intval($_POST['hidPckId']) : '0';
	$package['pck_expressnumber'] = !empty($_POST['ExpressNumber']) ? trim($_POST['ExpressNumber']) : '';
	$package['pck_customnum'] = !empty($_POST['CustomerNum']) ? trim($_POST['CustomerNum']) : '';
	$package['pck_storagecode'] = !empty($_POST['StorageCode']) ? trim($_POST['StorageCode']) : '';
	$package['pck_weight'] = !empty($_POST['Weight']) ? doubleval($_POST['Weight']) : '0.00';
	$package['pck_warehouseid'] = !empty($_POST['WareHouse']) ? intval($_POST['WareHouse']) : '0';
	$package['pck_inventorylocation'] = !empty($_POST['InventoryLocation']) ? trim($_POST['InventoryLocation']) : '';
	$package['pck_sizelength'] = !empty($_POST['SizeLength']) ?   doubleval($_POST['SizeLength']) : '0.00';
	$package['pck_sizewidth'] = !empty($_POST['SizeWidth']) ? doubleval($_POST['SizeWidth']) : '0.00';
	$package['pck_sizeheight'] = !empty($_POST['SizeHeight']) ? doubleval($_POST['SizeHeight']) : '0.00';
	$package['pck_istrouble'] = !empty($_POST['IsTrouble']) ? intval($_POST['IsTrouble']) : '0';
	$package['pck_adminremark'] = !empty($_POST['AdminRemark']) ? trim($_POST['AdminRemark']) : '';
	$package['pck_intime'] = gmtime();
	$package['pck_packagestatus'] = '1';

	if($package['pck_id']!=0)
	{
		engrave_fast_storage_update($package,$package['pck_id']);
		//页面跳转
		$link[0]['text'] = $_LANG['back_package_list'];
		$link[0]['href'] = 'engrave_package_list.php?act=list';
	}
	elseif($package['pck_id']==0)
	{
		//页面跳转
		$link[0]['text'] = $_LANG['continue_fast_storage'];
		$link[0]['href'] = 'engrave_fast_storage.php?act=add';
		$link[1]['text'] = $_LANG['back_package_list'];
		$link[1]['href'] = 'engrave_package_list.php?act=list';
		//根据入库码获取用户信息
		$user = engrave_user_by_storage_code($package['pck_storagecode']);
		$package['pck_userid'] = !empty($user['user_id']) ? intval($user['user_id']) : 0;
		if($package['pck_userid'] == 0)
		{
			sys_msg($_LANG['save_failed_nostoragecode'], 0, $link);
		}
		
		if(!engrave_fast_storage_insert($package))
		{
			sys_msg($_LANG['save_failed'], 0, $link);
		}
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
elseif ($_REQUEST['act'] == 'getpckid')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$pckid = engrave_get_pckid($expressNumber);
	echo $pckid;
}
elseif ($_REQUEST['act'] == 'getuserid')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$userid = engrave_get_userid($expressNumber);
	echo $userid;
}
elseif ($_REQUEST['act'] == 'getordertime')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$ordertime = engrave_get_ordertime($expressNumber);
	echo $ordertime;
}
elseif ($_REQUEST['act'] == 'getstatus')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$status = engrave_get_status($expressNumber);
	echo $status;
}
elseif($_REQUEST['act'] == 'getcustomnum')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$customnum = engrave_get_customnum($expressNumber);
	echo $customnum;
}
elseif($_REQUEST['act'] == 'getstoragecode')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$storagecode = engrave_get_storagecode($expressNumber);
	echo $storagecode;
}
elseif ($_REQUEST['act'] == 'getweight')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$weight = engrave_get_weight($expressNumber);
	echo $weight;
}
elseif ($_REQUEST['act'] == 'getweightunit')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$weightunit = engrave_get_weightunit($expressNumber);
	echo $weightunit;
}
elseif ($_REQUEST['act'] == 'getwarehouse')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$warehouse = engrave_get_warehouse($expressNumber);
	echo $warehouse;
}
elseif ($_REQUEST['act'] == 'getinvlocation')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$invlocation = engrave_get_invlocation($expressNumber);
	echo $invlocation;
}
elseif ($_REQUEST['act'] == 'getsizelength')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$sizelength = engrave_get_sizelength($expressNumber);
	echo $sizelength;
}
elseif ($_REQUEST['act'] == 'getsizewidth')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$sizewidth = engrave_get_sizewidth($expressNumber);
	echo $sizewidth;
}
elseif ($_REQUEST['act'] == 'getsizeheight')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$sizeheight = engrave_get_sizeheight($expressNumber);
	echo $sizeheight;
}
elseif ($_REQUEST['act'] == 'getsizeunit')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$sizeunit = engrave_get_sizeunit($expressNumber);
	echo $sizeunit;
}
elseif($_REQUEST['act'] == 'getistrouble')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$trouble = engrave_get_trouble($expressNumber);
	echo $trouble;
}
elseif ($_REQUEST['act'] == 'getadminremark')
{
	/* 检查权限 */
	admin_priv('fast_storage');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$expressNumber = !empty($_POST['expressnumber']) ? trim($_POST['expressnumber']) : '';
	$adminRemark = engrave_get_adminremark($expressNumber);
	echo $adminRemark;
}
?>
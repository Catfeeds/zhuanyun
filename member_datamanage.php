<?php
/**
 * ENGRAVE （资料管理）账户总览、资料修改、修改密码、收货地址维护
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
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_datamanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');

//数据访问类：收货地址/配送地区
require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
//上传图片
require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');
require_once(ROOT_PATH . '/includes/commonhelper/imagemerge.php');

$smarty->assign('lang', $_LANG);

//*********************会员信息****************************************************************
if(isset($_SESSION['username']))
{
	$smarty->assign('user_name',$_SESSION['username']);
	$smarty->assign('username',$_SESSION['username']);

	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	//包裹提醒
	$package = engrave_package_remind_submit($user_id);
	$smarty->assign('package',$package);
	//订单提醒
	$order = engrave_order_remind($user_id);
	$smarty->assign('order',$order);
}
else {
	$smarty->display('member_login.htm');
	return;
}
//*********************会员信息****************************************************************
//**************************************修改密码**************************************
if($_REQUEST['act']=='member_editpwd')
{
	$userid = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	//获取密码
	$oldpwd = isset($_REQUEST['oldpwd']) ? trim($_REQUEST['oldpwd']) : '';
	$newpwd = isset($_REQUEST['newpwd']) ? trim($_REQUEST['newpwd']) : '';
	$ensureoldpwd = isset($_REQUEST['ensureoldpwd']) ? trim($_REQUEST['ensureoldpwd']) : ''; 
	
	$password = isset($_SESSION['password']) ? trim($_SESSION['password']) : '';
	if($password == '')
	{
		$smarty->display('member_login.htm');
		return;
	}
	if($oldpwd == $password)
	{
		//修改密码
		if(Update_Password($userid,$newpwd))
		{
			$_SESSION['password'] = $newpwd;
			$link[0]['text'] = $_LANG['password_success'];
			$link[0]['href'] = 'member.php?act=member_revisepass';
	    	sys_msg($_LANG['edit_password_success'], 0, $link);
		}
		else {
			$link[0]['text'] = $_LANG['password_error_connect'];
			$link[0]['href'] = 'member.php?act=member_revisepass';
	    	sys_msg($_LANG['edit_password_failed'], 0, $link);
		}
	}else {
		$link[0]['text'] = $_LANG['password_error'];
		$link[0]['href'] = 'member.php?act=member_revisepass';
    	sys_msg($_LANG['edit_password_failed'], 0, $link);
	}
}
//**************************************修改密码**************************************
//**************************************收货地址维护**************************************
elseif($_REQUEST['act']=='member_addusers_deliveryaddress')
{
	$area_country_option = engrave_country_option(0);
	$smarty->assign('area_country_option',$area_country_option);
	$smarty->assign('operate','insert');
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_address_add']);
	$smarty->assign('ur_here',$ur['ur_here']);
	//跳转到添加页面
	$smarty->display('member_addressinfo.htm');
}
elseif($_REQUEST['act']=='member_5304')
{
	//收货地址ID
	$da_id = isset($_REQUEST['da_id']) ? intval($_REQUEST['da_id']) : 0;
	//获取收货地址对象
 	$users_deliveryaddress = engrave_users_deliveryaddress($da_id);
// 	print_a($users_deliveryaddress);
 	$smarty->assign('users_deliveryaddress',$users_deliveryaddress);
	$smarty->assign('operate','update');
	//配送地区
 	$area_country_option = engrave_country_option($users_deliveryaddress['da_country']);
 	$smarty->assign('area_country_option',$area_country_option);
 	if($users_deliveryaddress['da_country']!=0)
 	{
	 	$area_province_option = engrave_area_option($users_deliveryaddress['da_country'],$users_deliveryaddress['da_province']);
	 	$smarty->assign('area_province_option',$area_province_option);
 	}
 	if($users_deliveryaddress['da_province']!=0)
 	{
	 	$area_city_option = engrave_area_option($users_deliveryaddress['da_province'],$users_deliveryaddress['da_city']);
	 	$smarty->assign('area_city_option',$area_city_option);
 	}
	//导航
	$ur=assign_ur_here(0,$_LANG['member']['member_address_edit']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('curr_here',$_LANG['member']['member_address']);
	$smarty->assign('menu_here',$GLOBALS['_LANG']['member_account']);
	
	//跳转到添加页面
	$smarty->display('member_addressinfo.htm');
}
elseif($_REQUEST['act']=='area')
{
	//地区ID
	$areaid = isset($_REQUEST['areaid']) ? intval($_REQUEST['areaid']) : 0;
	
	$area_list = engrave_area_list($areaid);
	echo json_encode($area_list);
}
/**
 * 地址维护：新建-修改
 */
elseif($_REQUEST['act']=='member_address')
{
	$act = $_REQUEST['operate'];
	if($_SESSION['user_id'])
	{
		$deliveryaddress['da_id'] = isset($_REQUEST['da_id']) ? intval($_REQUEST['da_id']) : 0;
		$deliveryaddress['da_userid'] = intval($_SESSION['user_id']);
		$deliveryaddress['da_name'] = isset($_REQUEST['da_name']) ? trim($_REQUEST['da_name']) : "";
		$deliveryaddress['da_consignee'] = isset($_REQUEST['da_consignee']) ? trim($_REQUEST['da_consignee']) : "";
		$deliveryaddress['da_consigneetelephone'] = isset($_REQUEST['da_consigneetelephone']) ? trim($_REQUEST['da_consigneetelephone']) : "";
		$deliveryaddress['da_sparetelephone'] = isset($_REQUEST['da_sparetelephone']) ? trim($_REQUEST['da_sparetelephone']) : "";
		$deliveryaddress['da_country'] = isset($_REQUEST['da_country']) ? intval($_REQUEST['da_country']) : 0;
		$deliveryaddress['da_province'] = isset($_REQUEST['da_province']) ? intval($_REQUEST['da_province']) : 0;
		$deliveryaddress['da_city'] = isset($_REQUEST['da_country']) ? intval($_REQUEST['da_city']) : 0;
		$deliveryaddress['da_address'] = isset($_REQUEST['da_address']) ? trim($_REQUEST['da_address']) : "";
		$deliveryaddress['da_zipcode'] = isset($_REQUEST['da_zipcode']) ? trim($_REQUEST['da_zipcode']) : "";
		$deliveryaddress['da_remark'] = isset($_REQUEST['da_remark']) ? trim($_REQUEST['da_remark']) : "";
		$deliveryaddress['da_identitycard'] = isset($_REQUEST['da_identitycard']) ? trim($_REQUEST['da_identitycard']) : "";
		
		$old_da_identitycardfront = isset($_REQUEST['old_da_identitycardfront']) ? trim($_REQUEST['old_da_identitycardfront']) : "";
		$old_da_identitycardbehind = isset($_REQUEST['old_da_identitycardbehind']) ? trim($_REQUEST['old_da_identitycardbehind']) : "";
		$old_da_attach = isset($_REQUEST['old_da_attach']) ? trim($_REQUEST['old_da_attach']) : "";
		$deliveryaddress['da_identitycardfront'] = "";
		$deliveryaddress['da_identitycardbehind'] = "";
		$deliveryaddress['da_attach'] = "";
		//身份证正反面
		$upload=new FileUpload();
		/**
		* 正面
		 */
		$file = $_FILES['da_identitycardfront'];
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$da_identitycardfront=$filename;
			if($da_identitycardfront!=='')
			{
				$deliveryaddress['da_identitycardfront'] = $da_identitycardfront;
			}
		}
		else {
			//sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));
		}

		/**
		 * 反面
		 */
		$file = $_FILES['da_identitycardbehind'];
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$da_identitycardbehind=$filename;
			if($da_identitycardbehind!=='')
			{
				$deliveryaddress['da_identitycardbehind'] = $da_identitycardbehind;
			}
		}
		else {
			//sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));
		}

		/**
		 * 其它补充证明
		 */
		$file = $_FILES['da_attach'];
		$filename = $upload-> upload_image($file);
		if($filename!='error')
		{
			$da_attach=$filename;
			if($da_attach!=='')
			{
				$deliveryaddress['da_attach'] = $da_attach;
			}
		}
		else {
			//sys_msg(sprintf($_LANG['msg_upload_failed'], $file['name'], $file_var_list[$code]['store_dir']));
		}
		
		$isedit=false;
		$result = 0;
		
		$deliveryaddress['da_identityassemble']='';
		if($act == 'insert')
		{
			//ROOT_PATH_PRE
			$path1=$deliveryaddress['da_identitycardfront'];
			$path1 = ROOT_URL_PRE.'/'.str_replace('//', '/', $path1);
			$path2=$deliveryaddress['da_identitycardbehind'];
			$path2 = ROOT_URL_PRE.'/'.str_replace('//', '/', $path2);
			$pic_list = array(
					$path1,
					$path2
			);
			$imageMerge = new imagemerge();
			$da_identityassemble = $imageMerge -> ImageMerge($pic_list);
			$deliveryaddress['da_identityassemble'] = $da_identityassemble;
			
			$result = engrave_users_deliveryaddress_insert($deliveryaddress);
		}
		else
		{
			if($deliveryaddress['da_identitycardfront'] == "")
			{
				$deliveryaddress['da_identitycardfront'] = $old_da_identitycardfront;
			}else{
				$isedit=true;
			}
			if($deliveryaddress['da_identitycardbehind'] == "")
			{
				$deliveryaddress['da_identitycardbehind'] = $old_da_identitycardbehind;
			}else{
				$isedit=true;
			}
			if($deliveryaddress['da_attach'] == "")
			{
				$deliveryaddress['da_attach'] = $old_da_attach;
			}

			if($isedit)
			{
				$path1=$deliveryaddress['da_identitycardfront'];
				$path1 = ROOT_URL_PRE.'/'.str_replace('//', '/', $path1);
				$path2=$deliveryaddress['da_identitycardbehind'];
				$path2 = ROOT_URL_PRE.'/'.str_replace('//', '/', $path2);
				$pic_list = array(
						$path1,
						$path2
				);
				$imageMerge = new imagemerge();
				$da_identityassemble = $imageMerge -> ImageMerge($pic_list);
				$deliveryaddress['da_identityassemble'] = $da_identityassemble;
			}
			
			$result = engrave_users_deliveryaddress_update($deliveryaddress);
		}
		
		if($result)
		{
			if($act=='insert')
			{
				//添加成功
				$link[0]['text'] = $_LANG['insert_address_success'];
				$link[0]['href'] = 'member.php?act=member_address';
			}
			else
			{
				//修改成功
				$link[0]['text'] = $_LANG['edit_address_success'];
				$link[0]['href'] = 'member.php?act=member_address';
			}
			sys_msg($_LANG['member']['member_address'], 0, $link);
		}
		else
		{
			if($act=='insert')
			{
				//添加失败
				$link[0]['text'] = $_LANG['insert_address_failed'];
				$link[0]['href'] = 'member.php?act=member_address';
			}
			else
			{
				//修改失败
				$link[0]['text'] = $_LANG['edit_address_failed'];
				$link[0]['href'] = 'member.php?act=member_address';
			}
			sys_msg($_LANG['member']['member_address'], 0, $link);
		}
	}
	else 
	{
		//跳转登陆页面
		$smarty->display('member_login.htm');
	}
}
/**
 * 图片合并
 */
elseif($_REQUEST['act'] == 'imagemerge')
{
	echo ROOT_PATH_PRE;
// 	$pic_list = array(
// 		'http://img104.job1001.com/upload/faceimg/20140305/5176438df39012880af6da07c725d91f_1394001874.jpeg',
// 		'D:/xampp/htdocs/engraveweb/engraveuploads/image/20150304/20150304110032_63011.jpg',
// 	);
// 	$imageMerge = new ImageMerge($pic_list);
}
//**************************************收货地址维护**************************************
//**************************************资料修改*****************************************
elseif($_REQUEST['act'] == 'member_datum')
{
	$users['user_id'] = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$user_isperfect = isset($_REQUEST['user_isperfect']) ? intval($_REQUEST['user_isperfect']) : 0;
	$users['old_mobile_phone'] = isset($_REQUEST['old_mobile_phone']) ? trim($_REQUEST['old_mobile_phone']) : '';
	//修改--获取修改信息
	//电子邮件、国家、省、市
	$users['email'] = isset($_POST['email']) ? trim($_POST['email']) : '';
	$users['user_country'] = isset($_POST['user_country']) ? intval($_POST['user_country']) : 0;
	$users['user_province'] = isset($_POST['user_province']) ? intval($_POST['user_province']) : 0;
	$users['user_city'] = isset($_POST['user_city']) ? intval($_POST['user_city']) : 0;
	//身份证号、手机号、家庭电话
	$users['user_identitycard'] = isset($_POST['user_identitycard']) ? trim($_POST['user_identitycard']) : '';
	$users['mobile_phone'] = isset($_POST['mobile_phone']) ? trim($_POST['mobile_phone']) : '';
	$users['home_phone'] = isset($_POST['home_phone']) ? trim($_POST['home_phone']) : '';
	//详细地址、邮编、淘宝旺旺、微信、备注信息
	$users['user_address'] = isset($_POST['user_address']) ? trim($_POST['user_address']) : '';
	$users['user_zipcode'] = isset($_POST['user_zipcode']) ? trim($_POST['user_zipcode']) : '';
	$users['user_taobaowangwang'] = isset($_POST['user_taobaowangwang']) ? trim($_POST['user_taobaowangwang']) : '';
	$users['user_wechat'] = isset($_POST['user_wechat']) ? trim($_POST['user_wechat']) : '';
	$users['user_remark'] = isset($_POST['user_remark']) ? trim($_POST['user_remark']) : '';
	//密保问题、答案
	$users['passwd_question'] = isset($_POST['passwd_question']) ? trim($_POST['passwd_question']) : '';
	$users['passwd_answer'] = isset($_POST['passwd_answer']) ? trim($_POST['passwd_answer']) : '';
	$users['user_isperfect'] = 1;
	$isupdate = engrave_users_update($users);
	if($isupdate)
	{
		$link[0]['text'] = $_LANG['edit_users_success'];
		$link[0]['href'] = 'member.php?act=member_account';
    	sys_msg($_LANG['member']['member_datum'], 0, $link);
	}
	else{
		//修改资料失败
		$link[0]['text'] = $_LANG['edit_users_failed'];
		$link[0]['href'] = 'member.php?act=member_account';
    	sys_msg($_LANG['member']['member_datum'], 0, $link);
	}
}
//**************************************资料修改*****************************************
?>
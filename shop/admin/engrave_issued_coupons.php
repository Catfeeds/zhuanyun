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
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_issued_coupons.php');
/*载入-物流系统-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_issued_coupons.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_member_manage.php');

$smarty->assign('lang',$_LANG);
//$exc = new exchange($engrave->table("class"), $db, 'ClassId', 'ClassName');

/*------------------------------------------------------ */
//-- 营销系统
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('issued_coupons');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0811_issued_coupons'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('action_link',  array('text' => $_LANG['0812_have_coupons'], 'href'=>'engrave_issued_coupons.php?act=add'));

    $smarty->assign('full_page',    1);

    $issued_list= engrave_issued_list();
    $smarty->assign('issued_list',   $issued_list['issued_list']);
    $smarty->assign('filter',       $issued_list['filter']);
    $smarty->assign('record_count', $issued_list['record_count']);
    $smarty->assign('page_count',   $issued_list['page_count']);
    
    $smarty->assign('full_page',    1);
    
    /* 显示已发优惠券管理页面 */
    assign_query_info();
    $smarty->display('engrave_issued_coupons.htm');
}
/*------------------------------------------------------ */
//-- 已发优惠券管理显示页面-分页
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	$issued_list = engrave_issued_list();
	$smarty->assign('issued_list',   $issued_list['issued_list']);
	$smarty->assign('filter',       $issued_list['filter']);
	$smarty->assign('record_count', $issued_list['record_count']);
	$smarty->assign('page_count',   $issued_list['page_count']);

	$sort_flag  = sort_flag($issued_list['filter']);
	$smarty->assign($sort_flag['tag'], $sort_flag['img']);

	make_json_result($smarty->fetch('engrave_issued_coupons.htm'), '',
	array('filter' => $issued_list['filter'], 'page_count' => $issued_list['page_count']));

}
/*-------------------------------------------------------*/
//-----已发优惠券的添加
/*-------------------------------------------------------*/
elseif($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('issued_coupons');
	
    $ur_here = $_LANG['08_marketing_manage'] .'｜'.$_LANG['0812_have_coupons'];
    $smarty->assign('ur_here', $ur_here);
    /*取得优惠券列表 */
    $smarty->assign('coupon_list', get_coupon_list());
    /*取得用户组管理列表*/
    $smarty->assign('rank_list', get_ranks_list());
    $smarty->assign('action_link',  array('text' => $_LANG['0811_issued_coupons'], 'href'=>'engrave_issued_coupons.php?act=list'));
    $smarty->assign('form_action', 'insert');

    /* 显示优惠券页面 */
    assign_query_info();
    $smarty->display('engrave_issued_coupons_info.htm');
}
elseif($_REQUEST['act'] == 'userlist')
{
	/* 检查权限 */
	admin_priv('issued_coupons');
	$smarty->assign('full_page',    1);
	
	$user_list= engrave_users_list();
	$smarty->assign('user_list',   $user_list['user_list']);
// 	$smarty->assign('filter',       $user_list['filter']);
// 	$smarty->assign('record_count', $user_list['record_count']);
// 	$smarty->assign('page_count',   $user_list['page_count']);
	
	$smarty->assign('full_page',    1);
	/* 显示用户组列表页面 */
	assign_query_info();
	$smarty->display('engrave_issued_coupons_usergroup.htm');
}
elseif($_REQUEST['act'] == 'getusername')
{
	/* 检查权限 */
	admin_priv('issued_coupons');
	include_once(ROOT_PATH . 'includes/lib_clips.php');
	$userId = !empty($_POST['userId']) ? intval($_POST['userId']) : '0';
	$username = engrave_get_username($userId);
    echo $username;
}
elseif($_REQUEST['act']=='edit')
{
	/* 检查权限 */
	admin_priv('issued_coupons');

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
	$charset = 'gbk';
	$charset = strtolower(str_replace('-', '', EC_CHARSET));
	$conn = mysql_connect($db_host, $db_user, $db_pass, $db_name);
	mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
	mysql_query('START TRANSACTION',$conn);
	//事务开始
	$act=$_REQUEST['act'];
	/* 检查权限 */
	admin_priv('issued_coupons');	
	if($act=='insert')
	{
		//获取数据
		$issued['CouponType'] = !empty($_POST['CouponType']) ? intval($_POST['CouponType']) : '0';
		$issued['SpecUser'] = !empty($_POST['hidUserId']) ? intval($_POST['hidUserId']) : '0';
		$issued['GourpMember'] = $_SESSION['admin_id'];
		$issued['CreateTime'] = local_date('Y-m-d H:i:s');
		$issued['ExpireTime'] = local_date('Y-m-d H:i:s',strtotime('+' . intval($_POST['ValidDays']) . 'day'));
		$issued['Description'] = !empty($_POST['Description']) ? trim($_POST['Description']) : '';
		$issued['StatusId'] = '0';
		$issued['IsDeleteCoupons'] = '0';

		//页面跳转
		$link[0]['text'] = $_LANG['continue_add_issued'];
		$link[0]['href'] = 'engrave_issued_coupons.php?act=add';
		$link[1]['text'] = $_LANG['back_issued_list'];
		$link[1]['href'] = 'engrave_issued_coupons.php?act=list';
		
		/*获得该用户可以获取几张优惠券*/
		$number = !empty($_POST['IssuedNumber']) ? intval($_POST['IssuedNumber']) : 0;
		if(intval($_POST['User']) == '0')
		{
			for($i=0;$i<$number;$i++)
			{
			   	$random = getrandom();
				$issued['SN'] = $random;
				if($issued['SpecUser'] == 0)
				{
					$specUser = isset($_POST['SpecUser']) ? trim($_POST['SpecUser']) : '';
					//根据用户输入框内的数据，查询用户的ID
					$result = engrave_member_by($specUser);
					if($result != 0)
					{
						$issued['SpecUser'] = $result;
					}
					else {
						//未找到此人
						sys_msg($_LANG['failed_user_notexist'], 0, $link);
						return;
					}
				}
				$sql="insert into ".$GLOBALS['ecs']->table('user_coupon').
				"(SN,CouponId,OwnerId,UserId,CreateTime,ExpireTime,Description,StatusId,IsDeleteCoupons) values('".
				$issued['SN']."','".$issued['CouponType']."','".$issued['SpecUser']."','".$issued['GourpMember']."','".$issued['CreateTime']."','".
				$issued['ExpireTime']."','".$issued['Description']."','".
				$issued['StatusId']."','".$issued['IsDeleteCoupons']."')";
				$insert = mysql_query($sql,$conn);
				
				if($insert === false)
				{
					mssql_query("ROLLBACK");
					sys_msg($_LANG['save_failed'], 0, $link);
					return;
				}
			}
			mysql_query("COMMIT",$conn);
			mysql_close($conn);
		}
		else {
			//根据下拉框获取用户选择的组
			$gourpmemberid = isset($_POST['GourpMember']) ? intval($_POST['GourpMember']) : 0;
			//根据用户组ID，获取用户等级内的用户
			$member_list = engrave_member_byrankid($gourpmemberid);
			foreach ($member_list as $key=>$val)
			{
				$issued['SpecUser'] = $val['user_id'];
				for($i=0;$i<$number;$i++)
				{
				   	$random = getrandom();
					$issued['SN'] = $random;
					
					$sql="insert into ".$GLOBALS['ecs']->table('user_coupon').
					"(SN,CouponId,OwnerId,UserId,CreateTime,ExpireTime,Description,StatusId,IsDeleteCoupons) values('".
					$issued['SN']."','".$issued['CouponType']."','".$issued['SpecUser']."','".$issued['GourpMember']."','".$issued['CreateTime']."','".
					$issued['ExpireTime']."','".$issued['Description']."','".
					$issued['StatusId']."','".$issued['IsDeleteCoupons']."')";
					$insert = mysql_query($sql,$conn);
					if($insert === false)
					{
						mysql_query("ROLLBACK",$conn);
						sys_msg($_LANG['save_failed'], 0, $link);
						return;
					}
					//echo $issued['SN'].$issued['SpecUser'].'-';
				}
			}
			mysql_query("COMMIT",$conn);
			mysql_close($conn);
		}
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
	$IssuedId = intval($_REQUEST['id']);
	/* 检查权限 */
	check_authz_json('issued_remove');

	if (engrave_issued_delete("1", $IssuedId))
	{
		//$goods_name = $exc->get_name($cntId);
		//admin_log(addslashes($goods_name), 'trash', 'goods'); // 记录日志
		$url = 'engrave_issued_coupons.php?act=query&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);
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

/**
 * 获取随机值
 * @return Ambigous <string, unknown>：随机值
 */
function getrandom()
{
	/*产生随机数*/
	$length = 16;
	$string = '0123456789';
	$random = '';
	while(strlen($random)<$length)
	{
		if(strlen($random)< 1)
		{
			//从$random中随机产生一个字符
			$random .= $string[rand(1, strlen($string)-1)];
		}
		else
		{
			//从$random中随机产生一个字符
			$random .= $string[rand(0, strlen($string)-1)];
		}
	}
	/*判断该随机数在库中是否存在*/
	while(engrave_isexits_random($random)!=0)
	{
		$random = '';
		while(strlen($random)<$length)
		{
			if(strlen($random)< 1)
			{
				//从$random中随机产生一个字符
				$random .= $string[rand(1, strlen($string)-1)];
			}
			else
			{
				//从$random中随机产生一个字符
				$random .= $string[rand(0, strlen($string)-1)];
			}
		}
	}
	return $random;
}
?>
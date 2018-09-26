<?php @session_start();

/**
 * ENGRAVE 会员注册、会员登录
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: user.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */


define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');
/*载入-注册-数据访问文件*/
require_once(ROOT_PATH . 'includes/membermanage/lib_users.php');
//载入语言文件
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/user.php');
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/member_user.php');
//数据访问类：仓库/配送地区
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_userrank.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/member/lib_account.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');
require_once(ROOT_PATH . '/includes/lib_passport.php');

$smarty->assign('lang', $_LANG);

/*会员注册:协议*/
if($_REQUEST['act']=='protocol')
{
	//获取注册协议信息
	$system_register=engrave_system_register(1," and code='s_register_protocol'");
	foreach ($system_register['register'] as $key=>$value)
	{
		$protocol= $value['value'];
	}
	$smarty->assign('zxp','zxp');
	$smarty->assign('protocol',   $protocol);
	$smarty->display('protocol.htm');
	
}
/*会员注册*/
elseif($_REQUEST['act']=='member_register')
{
	//获取默认仓库
 	$warehouse = engrave_warehouse_default();
 	if(!isset($warehouse['HouseId']))
 	{
 		$link[0]['text'] = $GLOBALS['_LANG']['continue_register'];
 		$link[0]['href'] = 'index.php?act=member_register';
 		comm_msg($GLOBALS['_LANG']['register_failed_nodefaultwarehouse'], 0, $link);
 		return;
 	}
 	
	$user['user_warehouseid']= intval($warehouse['HouseId']);
	$user['username'] = isset($_POST['username']) ? trim($_POST['username']) : '';
	$user['password'] = isset($_POST['password']) ? trim($_POST['password']) : '';
	$user['e_mail']    = isset($_POST['e_mail']) ? trim($_POST['e_mail']) : '';
	$user['qq'] = isset($_POST['qq']) ? $_POST['qq'] : '';
	$user['tel'] = isset($_POST['tel']) ? $_POST['tel'] : '';
	$user['password_question'] = isset($_POST['password_question']) ? $_POST['password_question'] : '';
	$user['password_answer'] = isset($_POST['password_answer']) ? $_POST['password_answer'] : '';
	$user['refencer_recommend_code'] = isset($_POST['refencer_recommend_code']) ? trim($_POST['refencer_recommend_code']) : '';

	/* 增加是否关闭注册 */
	if ($_CFG['s_member_register']==1)
	{
		$smarty->display('register.htm');
	}
	else
	{
		$link[0]['text'] = $GLOBALS['_LANG']['return_member_account'];
		$link[0]['href'] = 'index.php?act=member_register';
		
		/**
		 * 注册
		 */
		//获取推荐码、注册码
		$code = member_register_recommend_code();
		
		$charset = 'gbk';
		$charset = strtolower(str_replace('-', '', EC_CHARSET));
		$conn = mysql_connect($engrave_shop_db_host, $engrave_shop_db_user, $engrave_shop_db_pass, $engrave_shop_db_name);
		mysql_query("SET character_set_connection=$charset, character_set_results=$charset, character_set_client=binary",$conn);
		mysql_query('START TRANSACTION',$conn);
		
		if(!member_register($user,$code['recommend_code'],$code['storage_code'],$conn))
		{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['register_failed_insert'], 0, $link);
		}
		
		$user_id = 0;
		//获取当前用户ID
		$res = mysql_query('select @@identity');
		
		if ($res !== false)
		{
			$row = mysql_fetch_row($res);
		
			if ($row !== false)
			{
				$user_id = intval($row[0]);
			}
			else
			{
				transaction_failed($conn);
				sys_msg($GLOBALS['_LANG']['register_failed_identity'], 0, $link);
				return;
			}
		}
		else{
			transaction_failed($conn);
			sys_msg($GLOBALS['_LANG']['register_failed_identity'], 0, $link);
			return;
		}
		/**
		 * 注册赠送积分
		 * 注册赠送积分日志
		 */
		$s_register_integral = $_CFG['s_register_integral'];
		present_points($s_register_integral,$s_register_integral,$user_id,'新用户注册，积分赠送',90,$link,$conn);
		
		/**
		 * 1、若存在推荐码， 获取推荐奖励机制；推荐人、被推荐人获取奖励
		 * 2、若不存在推荐码，结束注册
		 */
		if($user['refencer_recommend_code'] !== '')
		{
			//获取奖励机制
			$s_member_popularize = $_CFG['s_member_popularize'];
			$s_recommend_integral = $_CFG['s_recommend_integral'];//推荐人积分
			$s_recommended_integral = $_CFG['s_recommended_integral'];//被推荐人积分
			//注册时一次赠送积分
			if(intval($s_member_popularize) == 2)
			{
				//推荐人 推荐人ID
				$recommend_user = engrave_users_byrecommend($user['refencer_recommend_code']);
				present_points($s_recommend_integral,$s_recommend_integral,$recommend_user['user_id'],'注册时一次赠送（积分）:新用户注册，推荐人积分赠送',91,$link,$conn);
				//被推荐人
				present_points($s_recommended_integral,$s_recommended_integral,$user_id,'注册时一次赠送（积分）:新用户注册，被推荐人积分赠送',91,$link,$conn);
			}
		}
		/**
		 * 时间：2015年6月28日 10:37:53  添加注册自动发送邮件功能
		 * 无系统配置是否发送邮件  默认为注册即发送邮件
		 */
		send_regiter_hash($user_id);
		
		//事务成功
		transaction_success($conn);
		
		//注册成功后---登陆---跳转
		$loginresult = Login($user['username'], $user['password']);
		if($loginresult != '')
		{
			$_SESSION['password'] = $user['password'];
			$_SESSION['username'] = $loginresult['user_name'];
			$_SESSION['user_id'] = $loginresult['user_id'];
			$_SESSION['user_money'] = $loginresult['user_money'];
			$_SESSION['email'] = $loginresult['email'];
			$_SESSION['mobile_phone'] = $loginresult['mobile_phone'];
			$_SESSION['storage_code'] = $loginresult['storage_code'];
			$_SESSION['refencer_recommend_code'] = $loginresult['refencer_recommend_code'];

			$link[0]['text'] = $GLOBALS['_LANG']['link_member_account'];
			$link[0]['href'] = 'index.php?act=member_account';
			sys_msg($GLOBALS['_LANG']['register_success'], 0, $link);
// 			$smarty->assign('users',$loginresult);
// 			//获取国家
// 			$area_country_option = engrave_area_option(0,0);
// 			$smarty->assign('area_country_option',$area_country_option);
// 			//用户名称
// 			$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
// 			$smarty->assign('user_name',$user_name);
// 			$smarty->assign('username',$user_name);
// 			//操作：添加
// 			$smarty->assign('operate','insert');
// 			//导航
// 			$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
// 			$smarty->assign('ur_here',$ur['ur_here']);
// 			$smarty->display('member_datum.htm');
		}
		else
		{
			$link[0]['text'] = $GLOBALS['_LANG']['link_member_login'];
			$link[0]['href'] = 'index.php?act=member_login';
			sys_msg($GLOBALS['_LANG']['login_failed'], 0, $link);
		}
	}
}
/*ajax:登陆*/
elseif($_REQUEST['act']=='member_login')
{
	$username=isset($_GET['username'])?trim($_GET['username']):'';
	$username = json_str_iconv($username);
	$password=isset($_GET['password'])?trim($_GET['password']):'';
	$password = json_str_iconv($password);
	$loginresult = Login($username, $password);
	if($loginresult != '')
	{
		$_SESSION['password'] = $password;
		$_SESSION['username'] = $loginresult['user_name'];
		$_SESSION['user_id'] = $loginresult['user_id'];
		$_SESSION['user_money'] = $loginresult['user_money'];
		$_SESSION['email'] = $loginresult['email'];
		$_SESSION['mobile_phone'] = $loginresult['mobile_phone'];
		$_SESSION['storage_code'] = $loginresult['storage_code'];
		$_SESSION['user_isperfect'] = $loginresult['user_isperfect'];
		$_SESSION['refencer_recommend_code'] = $loginresult['refencer_recommend_code'];
		echo '{"username": "'.$_SESSION['username'].'","user_money": "'.$_SESSION['user_money'].'"}';
	}
	else{
		echo '';
	}
}
/*修改头像*/
elseif($_REQUEST['act'] == 'member_headsculpture')
{
	$ur=assign_ur_here(0,$_LANG['member']['headsculpture']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$users = engrave_users($user_id);
	$smarty->assign('users',$users);
	$smarty->display('member_headsculpture.htm');
}
/*修改头像*/
elseif($_REQUEST['act'] == 'member_hsupdate')
{
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;
	$users['user_id'] = $user_id;
	$upload=new FileUpload();
	/*头像*/
	$file = $_FILES['user_headsculpture'];
	if(!isset($file))
	{
		$link[0]['text'] = $GLOBALS['_LANG']['return_member_account'];
		$link[0]['href'] = 'index.php?act=member_account';
		sys_msg($GLOBALS['_LANG']['headculpture_failed'], 0, $link);
		return;
	}
	$filename = $upload-> upload_image($file);
	if($filename!='error')
	{
		$user_headsculpture = $filename;
		if($user_headsculpture !== '')
		{
			$users['user_headsculpture'] = $user_headsculpture;
		}
	}
	else {
		$link[0]['text'] = $GLOBALS['_LANG']['return_member_account'];
		$link[0]['href'] = 'index.php?act=member_account';
		sys_msg($GLOBALS['_LANG']['headculpture_failed'], 0, $link);
		return;
	}
	$link[0]['text'] = $GLOBALS['_LANG']['return_member_account'];
	$link[0]['href'] = 'index.php?act=member_account';
	if(engrave_users_update_headculpture($users))
	{
		sys_msg($GLOBALS['_LANG']['headculpture_success'], 0, $link);
	}
	else{
		sys_msg($GLOBALS['_LANG']['headculpture_failed'], 0, $link);
	}
}
/*后台直接登陆，跳转到会员首页*/
elseif($_REQUEST['act']=='member_account_login')
{
	//获取用户名和密码
	$username=isset($_REQUEST['username'])?trim($_REQUEST['username']):'';
	$username = json_str_iconv($username);
	$password=isset($_REQUEST['password'])?trim($_REQUEST['password']):'';
	$password = json_str_iconv($password);
	$loginresult = Login($username, $password);
	if($loginresult != '')
	{
		//根据用户姓名、密码获取用户信息
		$_SESSION['password'] = $password;
		$_SESSION['username'] = $loginresult['user_name'];
		$_SESSION['user_id'] = $loginresult['user_id'];
		$_SESSION['user_money'] = $loginresult['user_money'];
		$_SESSION['email'] = $loginresult['email'];
        $_SESSION['user_isperfect'] = $loginresult['user_isperfect'];


		$_SESSION['mobile_phone'] = $loginresult['mobile_phone'];
		$_SESSION['storage_code'] = $loginresult['storage_code'];
        $_SESSION['user_payment_type'] = $loginresult['user_payment_type'];
		$_SESSION['refencer_recommend_code'] = $loginresult['refencer_recommend_code'];
		$smarty->assign('users',$loginresult);
		$recordcount = $_LANG['record_count'];
		//根据用户地址ID，判断用户是否完善了注册信息
		if($loginresult['user_isperfect'] == 0)
		{
			//获取国家
			$area_country_option = engrave_area_option(0,0);
			$smarty->assign('area_country_option',$area_country_option);
			//用户名称
			$user_name = isset($loginresult['user_name']) ? trim($loginresult['user_name']) : '';
			$smarty->assign('username',$user_name);
			//导航
			//添加成功
			$link[0]['text'] = $GLOBALS['_LANG']['goto_member_datum'];
			$link[0]['href'] = 'member.php?act=member_datum';
			comm_msg($GLOBALS['_LANG']['singin_success'], 0, $link);
// 			$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
// 			$smarty->assign('ur_here',$ur['ur_here']);
// 			$smarty->assign('curr_here',$_LANG['member']['member_datum']);
// 			$smarty->display('member_datum.htm');
		}
		else
		{
			$link[0]['text'] = $GLOBALS['_LANG']['goto_member_account'];
			$link[0]['href'] = 'index.php?act=member_account';
			comm_msg($GLOBALS['_LANG']['singin_success'], 0, $link);
			//IndexHTML($recordcount);
		}
	}
	else{
		$link[0]['text'] = $GLOBALS['_LANG']['return_singin'];
		$link[0]['href'] = 'index.php?act=member_login';
		comm_msg($GLOBALS['_LANG']['singin_failed'], 0, $link);
	}
}
/*用户名是否已经被注册*/
elseif($_REQUEST['act']=='is_registered')
{
	$username = trim($_GET['username']);
	$username = json_str_iconv($username);
	if (member_registered($username,'',''))
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
}
/*邮箱 是否已经被注册*/
elseif($_REQUEST['act']=='email_is_registered')
{
	$email = trim($_GET['email']);
	$email = json_str_iconv($email);
	if (member_registered('',$email,''))
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
}
/*手机号 是否已经被注册*/
elseif($_REQUEST['act'] == 'tel_is_registered')
{
	$tel = trim($_GET['tel']);
	$tel = json_str_iconv($tel);
	if (member_registered('','',$tel))
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
}
elseif($_REQUEST['act'] == 'send_pwd_email') {
    include_once(ROOT_PATH . 'includes/lib_passport.php');

    $user_name = trim($_POST['username']);
    $user_name = json_str_iconv($user_name);
    $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
//    Update_Password(31710, '123456');exit;
    if(!preg_match($pattern,$user_name))   { //USER NAME
        //用户名和邮件地址是否匹配

        $user_info = get_user_info($user_name);
        $email = $user_info['email'];

    } else { //email
        $user_info = get_user_info("", $user_name);
        $email = $user_name;
        $user_name = $user_info['user_name'];
    }

    $code = md5($user_info['user_id'] . $_CFG['hash_code'] . $user_info['reg_time']);
    $link[0]['text'] ="返回上一页";
    $link[0]['href'] = 'javascript:history.go(-2)';
    //发送邮件的函数
    if (send_pwd_email($user_info['user_id'], $user_name, $email, $code))
    {

        sys_msg("邮件成功发送到" . $email." 请查收!",0, $link );
    }
    else
    {
        //发送邮件出错
        sys_msg("找回密码邮件发送失败", 0, $link);
    }
}
/*找回密码*/
elseif($_REQUEST['act'] == 'member_forget_password')
{
	include_once(ROOT_PATH . 'includes/lib_passport.php');

	$username = trim($_POST['username']);
	$username = json_str_iconv($username);	
	$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
	if(!preg_match($pattern,$username))
	{
		if (member_registered($username,'',''))
		{

			$user_id = get_user_id($username,'');


			$user_rand_password=strval(rand(100000,999999));
			/*重置密码*/
			Update_Password($user_id,$user_rand_password);

			/*获取邮件*/
			$user_email = get_user_email($username);
			/*发送邮件提示*/
			send_pwd_email($user_id,$username,$user_email,$user_rand_password);

			$link[0]['text'] = $GLOBALS['_LANG']['link_member_login'];
			$link[0]['href'] = 'index.php?act=member_login';
			sys_msg($GLOBALS['_LANG']['password_success'], 0, $link);
		}
		else
		{

			$link[0]['text'] = $GLOBALS['_LANG']['link_member_forget'];
			$link[0]['href'] = 'index.php?act=forget_password';
			sys_msg($GLOBALS['_LANG']['password_failed'], 0, $link);
		}
	}
	else 
	{
		if (member_registered('',$username,''))
		{
			$user_id = get_user_id('',$username);
			$user_rand_password=strval(rand(100000,999999));
			/*重置密码*/
			Update_Password($user_id,$user_rand_password);
			/*获取用户名*/
			$user_name = get_user_name($username);
			/*发送邮件提示*/
			send_pwd_email($user_id,$user_name,$username,$user_rand_password);
			$link[0]['text'] = $GLOBALS['_LANG']['link_member_login'];
			$link[0]['href'] = 'index.php?act=member_login';
			sys_msg($GLOBALS['_LANG']['password_success'], 0, $link);
		}
		else
		{
			$link[0]['text'] = $GLOBALS['_LANG']['link_member_forget'];
			$link[0]['href'] = 'index.php?act=member_login';
			sys_msg($GLOBALS['_LANG']['password_failed'], 0, $link);
		}
	}
}
/**
 * 推荐码是否存在
 */
elseif($_REQUEST['act']=='refencer_recommend_code_is_exist')
{
	$refencer_recommend_code = trim($_GET['refencer_recommend_code']);
	$refencer_recommend_code = json_str_iconv($refencer_recommend_code);
	if (member_exist_referencecode($refencer_recommend_code))
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
}
/**
 * 首页：公共调用函数
 */
function IndexHTML($recordcount)
{
	require_once(ROOT_PATH . '/includes/member/lib_account.php');
	require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
	//根据用户ID获取用户信息
	$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
	$users = engrave_users($user_id);
	$GLOBALS['smarty']->assign('users',$users);
	//包裹
	$package = engrave_package_remind($user_id);
	$GLOBALS['smarty']->assign('package',$package);
	//订单
	$order = engrave_order_remind($user_id);
	$GLOBALS['smarty']->assign('order',$order);
	//根据用户ID获取消费金额
	$cost = engrave_account_log_costmoney($user_id,10);
	$GLOBALS['smarty']->assign('cost',$cost);
	//查询默认货币
	$currency_symbol = engrave_currency_symbol();
	$GLOBALS['smarty']->assign('currency_symbol',$currency_symbol);
	
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$GLOBALS['smarty']->assign('username',$username);
 	//获取仓库信息
 	//默认仓库
 	$warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
 	$warehouse = engrave_warehouse_default_byid($warehouseid);
 	$GLOBALS['smarty']->assign('warehouse',$warehouse);

 	//导航
 	$ur=assign_ur_here(1,$GLOBALS['_LANG']['member_account']);
 	$GLOBALS['smarty']->assign('ur_here',$ur['ur_here']);
	$GLOBALS['smarty']->assign('curr_here',$GLOBALS['_LANG']['member']['member_account']);
	$GLOBALS['smarty']->assign('menu_here',$GLOBALS['_LANG']['member_account']);
 	
	//查找首页新闻
	$GLOBALS['smarty']->display('member_account.htm');
}

/**
 * 赠送积分
 * @param number $pay_points：可支付积分
 * @param number $rank_points：等级积分
 * @param number $user_id：用户ID
 * @param string $member_remark：备注
 * @param number $change_type：日志类型
 * @param unknown $link：跳转连接
 * @param unknown $conn：数据库连接对象
 */
function present_points($pay_points=0,$rank_points=0,$user_id=0,$member_remark='',$change_type = 0, $link,$conn)
{
	if(!engrave_users_update_points($pay_points,$rank_points,$user_id,$conn))
	{
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['register_failed'], 0, $link);
	}
	/**
	 * 注册赠送积分日志
	 */
	$account_log['user_id'] = $user_id;
	$account_log['frozen_money'] = 0;
	$account_log['rank_points'] = $rank_points;
	$account_log['pay_points'] = $pay_points;
	$account_log['user_money'] = 0;
	$account_log['member_remark'] = $member_remark.' '.$pay_points;
	
	if(!engrave_account_log_transinsert($account_log,$change_type,$conn))
	{
		transaction_failed($conn);
		sys_msg($GLOBALS['_LANG']['register_failed'], 0, $link);
	}
}

/**
 * 事务失败
 * @param unknown $conn：数据库连接对象
 */
function transaction_failed($conn)
{
	//添加失败
	mysql_query('ROLLBACK',$conn);//回滚
	mysql_close($conn);
}

/**
 * 事务成功
 * @param unknown $conn：数据库连接对象
 */
function transaction_success($conn)
{
	//添加失败
	mysql_query('COMMIT',$conn);//回滚
	mysql_close($conn);
}
?>
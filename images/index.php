<?php 
/**
 * ENGRAVE 业务逻辑：首页
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: index.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
//载入语言文件
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_user.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/package_track.php');
/*文章*/
require_once(ROOT_PATH . '/includes/channel/lib_article.php');
require_once(ROOT_PATH . '/includes/channel/lib_channel.php');
require_once(ROOT_PATH . '/includes/marketingmanage/lib_focus_map.php');
//数据访问类：仓库/配送地区
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_userrank.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');

$smarty->assign('lang', $_LANG);
session_start();
//*********************会员信息****************************************************************
// if(isset($_SESSION['username']))
// {
// 	$smarty->assign('user_name',$_SESSION['username']);
// 	$smarty->assign('username',$_SESSION['username']);
// }
// else {
// 	$smarty->display('member_login.htm');
// 	return;
// }
//*********************会员信息****************************************************************
if(empty($_REQUEST['act']))
{
	$_REQUEST['act']='index';
}

/*首页*/
if($_REQUEST['act']=='index')
{
	$recordcount=$_LANG['record_count'];
	$smarty->assign('menu_here',$_LANG['home']);
	IndexHTML($recordcount);
}
/*会员中心*/
elseif($_REQUEST['act']=='member_account')
{
	if(isset($_SESSION['username']))
	{
		require_once(ROOT_PATH . '/includes/member/lib_account.php');
		require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
		
		//根据用户ID获取用户信息
		$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
		$users = engrave_users($user_id);
		$username = isset($_SESSION['username'])?$_SESSION['username']:'';
		$smarty->assign('username',$username);
		$smarty->assign('users',$users);
		//根据用户地址ID，判断用户是否完善了注册信息
		if($users['user_isperfect'] == 0)
		{
			//获取国家
			$area_country_option = engrave_area_option(0,0);
			$smarty->assign('area_country_option',$area_country_option);
			//用户名称
			$user_name = isset($users['user_name']) ? trim($users['user_name']) : '';
			//导航
			$ur=assign_ur_here(-1,$_LANG['member']['member_datum']);
			$smarty->assign('ur_here',$ur['ur_here']);
			$smarty->display('member_datum.htm');
			return;
		}
		//包裹提醒
		$package = engrave_package_remind_submit($user_id);
		$smarty->assign('package',$package);
	 	//订单提醒
	 	$order = engrave_order_remind($user_id);
	 	$smarty->assign('order',$order);
	 	//根据用户ID获取消费金额
	 	$cost = engrave_account_log_costmoney($user_id,10);
	 	$smarty->assign('cost',$cost);
	 	//查询默认货币
	 	$currency_symbol = engrave_currency_symbol();
	 	$smarty->assign('currency_symbol',$currency_symbol);
	 	//获取日元账户
	 	$currency_jpy = engrave_currency_jpy_byid();
	 	$smarty->assign('currency_jpy',$currency_jpy);
	 	//获取仓库信息：根据用户所在的默认仓库，选择仓库
	 	//默认仓库
	 	$warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
	 	$warehouse = engrave_warehouse_default_byid($warehouseid);
	 	$smarty->assign('warehouse',$warehouse);
		//导航
		$ur=assign_ur_here(0,$_LANG['member_account']);
		$smarty->assign('ur_here',$ur['ur_here']);
		$smarty->assign('curr_here',$_LANG['member']['member_account']);
		$smarty->assign('menu_here',$_LANG['member_account']);
	
		//获取当前用户session
		$smarty->display('member_account.htm');
	}
	else 
	{
		$smarty->assign('menu_here',$_LANG['member_account']);
		$smarty->display('member_login.htm');
	}
}
/*费用估算*/
elseif($_REQUEST['act']=='list_cost')
{
	//获取会员
	$userrank_list = engrave_userrank_list();
	$smarty->assign('userrank_list',$userrank_list);
	
	$area_selected=0;
	//获取货物 目的地、重量、大小
	if(isset($_REQUEST['area']))
	{
		$area = isset($_REQUEST['area']) ? intval($_REQUEST['area']) : '';
		$area_selected = $area;
		$weight = isset($_REQUEST['weight']) ? trim($_REQUEST['weight']) : '';
		$size = isset($_REQUEST['size']) ? trim($_REQUEST['size']) : '';
		if($size!='')
		{
			$size_array = explode('x', $size);
		}else{
			$size_array = array(0=>"1.00",1=>"1.00",2=>"1.00");
		}
		$smarty->assign('area',$area);
		$smarty->assign('weight',$weight);
		$smarty->assign('length',$size_array[0]);
		$smarty->assign('width',$size_array[1]);
		$smarty->assign('height',$size_array[2]);
		//此时为地址查询
		$smarty->assign('type',2);
	}else{
		$smarty->assign('type',1);
	}
	//到货仓库
	$warehouse_option = engrave_warehouse_Area_option();
	$smarty->assign('warehouse_option',$warehouse_option);
	//目的地
	$area_option = engrave_area_option(0,$area_selected);
	$smarty->assign('area_option',$area_option);
   	
	AboutusNews();
	
	//导航
	$ur=assign_ur_here(0,$_LANG['list_cost']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_cost']);
	
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$smarty->assign('username',$username);
	$smarty->display('list_cost.htm');
}
/*收费说明*/
elseif($_REQUEST['act']=='list_charge')
{
	//收费说明:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$categoryid = isset($_REQUEST['id']) ? $_REQUEST['id'] : 0;
	if($categoryid==0)
	{
		$charge=engrave_channel('',1);
	}
	else {
		$charge=engrave_channel('',$categoryid);
	}
	//导航
	$ur=assign_ur_here(0,$_LANG['list_charge']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_charge']);
	
	AboutusNews(1);
	
	$smarty->assign('chargeObj',$charge['channel']);
	$smarty->assign('username',$username);
	$smarty->display('list_charge.htm');
}
/*新闻中心*/
elseif($_REQUEST['act']=='list_news')
{ 
    //关于我们:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$about = engrave_channel('',5);
	//print_r($about);
	$smarty->assign('about',$about['channel']);
	//获取文章
	$recordcount=$_LANG['record_count'];
	$categoryid = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$article = engrave_article_list(0,4,$categoryid,'',1,$recordcount);
	$smarty->assign('article_list',$article['article_list']);
	$recordarr = array();
	$pagecount=ceil($article['article_count'] / $recordcount);
	for ($index=0; $index<$pagecount; $index++) {
		$recordarr[$index]=($index+1);
	}
	
	AboutusNews();
	
	//导航
	$ur=assign_ur_here(0,$_LANG['list_news']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_news']);
	
	$smarty->assign('record_count',$recordarr);
	$smarty->assign('pagecount',$pagecount);
	$smarty->assign('currentpage',1);//第一次在第一页
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$user_money = isset($_SESSION['user_money'])?$_SESSION['user_money']:'';
	$smarty->assign('username',$username);
	$smarty->assign('user_money',$user_money);
	$smarty->display('list_news.htm');
}

/*关于我们*/  
elseif($_REQUEST['act']=='list_about')
{
    $position = assign_ur_here(0, '关于我们');
	//print_r($position);
    $smarty->assign('page_title',  '首页');    // 页面标题
    $smarty->assign('ur_here',         $position['ur_here']);  // 当前位置
	//文章
	$recordcount=$_LANG['record_count'];
	$categoryid = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$article=engrave_article_list(0,5,$categoryid,'',1,$recordcount);
	$smarty->assign('article_list',$article['article_list']);
	//关于我们:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	if($categoryid==0)
	{
		$about=engrave_channel('',5);
	}
	else {
		$about=engrave_channel('',$categoryid);
	}
	$ur=assign_ur_here(0,$_LANG['list_about']);
	$smarty->assign('title',$ur['title']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_about']);

	AboutusNews();
	
	$smarty->assign('aboutObj',$about['channel']);
	$smarty->assign('username',$username);
	$smarty->display('list_about.htm');
}
/*禁运列表*/
elseif($_REQUEST['act']=='list_embargo')
{
	//文章
	$recordcount=$_LANG['record_count'];
	$article=engrave_article_list(0,0,0,'',1,$recordcount);
	$smarty->assign('article_list',$article['article_list']);
	//禁运列表:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$categoryid = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($categoryid==0)
	{
		$embargo=engrave_channel('',6);
	}
	else {
		$embargo=engrave_channel('',$categoryid);
	}
	
	AboutusNews(6);
	
	//导航
	$ur=assign_ur_here(0,$_LANG['list_embargo']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_embargo']);
	
	$smarty->assign('embargoObj',$embargo['channel']);
	$smarty->assign('username',$username);
	$smarty->display('list_embargo.htm');
}
/*转运流程*/
elseif($_REQUEST['act']=='list_trans')
{
	//文章
	$recordcount=$_LANG['record_count'];
	$article=engrave_article_list(0,0,0,'',1,$recordcount);
	$smarty->assign('article_list',$article['article_list']);
	//转运流程:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	
	$categoryid = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($categoryid==0)
	{
		$trans=engrave_channel('',7);
	}
	else {
		$trans=engrave_channel('',$categoryid);
	}
	
	AboutusNews(7);
	
	//导航
	$ur=assign_ur_here(0,$_LANG['list_trans']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_trans']);
	
	$smarty->assign('transObj',$trans['channel']);
	$smarty->assign('username',$username);
	$smarty->display('list_trans.htm');
}
/*FAQ2*/
elseif($_REQUEST['act']=='list_faq')
{
	//文章
	$recordcount=$_LANG['record_count'];
	$article=engrave_article_list(0,0,0,'',1,$recordcount);
	$smarty->assign('article_list',$article['article_list']);
	//FAQ2:内容
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';

	$categoryid = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	if($categoryid==0)
	{
		$faq=engrave_channel('',8);
	}
	else {
		$faq=engrave_channel('',$categoryid);
	}
	
	AboutusNews(8);
	
	//导航
	$ur=assign_ur_here(0,$_LANG['list_faq']);
	$smarty->assign('ur_here',$ur['ur_here']);
	$smarty->assign('menu_here',$_LANG['list_faq']);
	//print_r($faq);
	$smarty->assign('faqObj',$faq['channel']);
	$smarty->assign('username',$username);
	$smarty->display('list_faq.htm');
}
/*注册*/
elseif($_REQUEST['act']=='member_register')
{
	$smarty->assign('lang', $_LANG);
	//获取推荐码
	$recommend = isset($_REQUEST['recommend']) ? trim($_REQUEST['recommend']) : '';
	$smarty->assign('recommend',$recommend);
	//是否关闭注册
	$smarty->assign('s_member_register',$_CFG['s_member_register']);
	//获取当期默认仓库
	$warehouse = engrave_warehouse_default();
	//根据当前默认仓库，获取仓库是否已达到上限，达到上限跳转到其它仓库
	$houseId = isset($warehouse['HouseId']) ? intval($warehouse['HouseId']) : 0;
	$max_user = engrave_warehouse_maxusers_byid($houseId);
	$sys_max_user = $_CFG['s_warehouse_maxusers'];
	if($sys_max_user < $max_user)
	{
		//超出仓库上限，重新设定默认仓库
		engrave_setdefault_warehouse($sys_max_user);
	}
	$warehouse = engrave_warehouse_default();
	$smarty->assign('warehouse',$warehouse);
	$smarty->assign('menu_here',$_LANG['member_account']);
	$smarty->display('member_register.htm');
}
/*用户登陆*/
elseif($_REQUEST['act']=='member_login')
{
	$smarty->assign('menu_here',$_LANG['member_account']);
	$smarty->display('member_login.htm');
}
elseif($_REQUEST['act']=='logout')
{
	unset($_SESSION['username']);
	unset($_SESSION['user_money']);
	unset($_SESSION['password']);
	unset($_SESSION['username']);
	unset($_SESSION['user_id']);
	unset($_SESSION['user_money']);
	unset($_SESSION['email']);
	unset($_SESSION['mobile_phone']);
	unset($_SESSION['storage_code']);
	unset($_SESSION['refencer_recommend_code']);
	
	echo true;
}
/**
 * 
 */
elseif($_REQUEST['act'] == 'captcha')
{
	//先把类包含进来，实际路径根据实际情况进行修改。
	require_once(ROOT_PATH . '/includes/commonhelper/captcha/ValidateCode.class.php');
	
	$_vc = new ValidateCode();//实例化一个对象
	$_vc->doimg();
	$_SESSION['authnum_session'] = $_vc->getCode();//验证码保存到SESSION中
}
/**
 * 找回密码
 */
elseif($_REQUEST['act'] == 'forget_password')
{
	$smarty->display('forget_password.htm');
}

/**
 * 首页：公共调用函数
 */
function IndexHTML($recordcount)
{
	//获取文章
	$article=engrave_article_channel_list(0,'','首页',$recordcount);
	$GLOBALS['smarty']->assign('article_list',$article['article_list']);
	$GLOBALS['smarty']->assign('channel_list',$article['channel_list']);
	//获取焦点图
	$focusmap=engrave_focus_list();
	$GLOBALS['smarty']->assign('focusmap_list',$focusmap['focusmap_list']);
	//目的地
	$area_option = engrave_area_option(0,0);
	$GLOBALS['smarty']->assign('area_option',$area_option);
	//根据ID获取用户信息
	$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']:0;
	if($user_id!=0)
	{
		$username = isset($_SESSION['username'])?$_SESSION['username']:'';
		$users = engrave_users($user_id);
		$GLOBALS['smarty']->assign('username',$username);
		$GLOBALS['smarty']->assign('user_money',$users['user_money']);
	}
	$GLOBALS['smarty']->clear_all_cache();
	//查找首页新闻
	$GLOBALS['smarty']->display('index.htm');
}

function AboutusNews($type=0)
{
	switch ($type)
	{
		case 1:
			//收费说明
			$channel_list=engrave_channel_list_bypid('',$type);
			$GLOBALS['smarty']->assign('charge_list',$channel_list['channel_list']);
			break;
		case 6:
			//禁运列表
			$channel_list=engrave_channel_list_bypid('',$type);
			$GLOBALS['smarty']->assign('embargo_list',$channel_list['channel_list']);
			break;
		case 7:
			//转运流程
			$channel_list=engrave_channel_list_bypid('',$type);
			$GLOBALS['smarty']->assign('trans_list',$channel_list['channel_list']);
			break;
		case 8:
			//FAQ
			$channel_list=engrave_channel_list_bypid('',$type);
			$GLOBALS['smarty']->assign('faq_list',$channel_list['channel_list']);
			break;
	}
	//新闻中心
	$channel_list=engrave_channel_list_bypid('',4);
	$GLOBALS['smarty']->assign('channel_list',$channel_list['channel_list']);
	//print_r($channel_list);
	//关于我们
	$username = isset($_SESSION['username'])?$_SESSION['username']:'';
	$about_list=engrave_channel_list_bypid('',5);
	$GLOBALS['smarty']->assign('about_list',$about_list['channel_list']);
}
?>
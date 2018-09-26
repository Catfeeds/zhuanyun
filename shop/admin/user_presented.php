<?php 
/**
 * ENGRAVE 商品管理、物流转运 程序
 * ============================================================================
 * * 版权所有  zxp，并保留所有权利。
 * 网站地址: 
 * ============================================================================
 * $Author: zxp $
 * $Id: engrave_presented.php 2014-12-03 21:34:00 zxp $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
/* 载入语言文件 */
require_once(ROOT_PATH . 'languages/' .$_CFG['lang']. '/admin/engrave_presented.php');
/*载入-赠送积分-数据访问文件*/
require_once(ROOT_PATH . 'admin/includes/engrave/lib_presented.php');
$smarty->assign('lang', $_LANG);

if($_REQUEST['act'] == 'add')
{
    /* 检查权限 */
    admin_priv('presented');
	
    $ur_here = $_LANG['06_member_manage'] .'｜'.$_LANG['0611_presented'];
    $smarty->assign('ur_here', $ur_here);
    $smarty->assign('form_action', 'insert');

    /* 显示预付款/提现页面 */
    assign_query_info();
    $smarty->display('engrave_presented_add.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
	/*检查品牌名是否重复*/
	admin_priv('presented');

	//赠送对象
	$presented['alluser'] = isset($_REQUEST['alluser']) ? intval($_REQUEST['alluser']) : 0;
	$presented['PreseObj'] = isset($_REQUEST['alluser']) ? intval($_REQUEST['PreseObj']) : 0;
	//赠送积分
	$presented['PreseCredit'] = isset($_REQUEST['PreseCredit']) ? trim($_REQUEST['PreseCredit']) : '';
	//赠送积分原因
	$presented['PreseRease'] = isset($_REQUEST['PreseRease']) ? trim($_REQUEST['PreseRease']) : '';
	if($presented['alluser']==0)
	{
		//$db_host = $db_user = $db_pass = $db_name = NULL;
		//赠送给所有用户
		if(engrave_presented_insert_trans($presented,$db_host,$db_user,$db_pass,$db_name))
		{
			//成功
			$link[0]['text'] = $_LANG['continue_add_presented'];
			$link[0]['href'] = 'user_presented.php?act=add';
			sys_msg($_LANG['presented_success'], 0, $link);
		}else{
			//失败
			$link[0]['text'] = $_LANG['return_add_presented'];
			$link[0]['href'] = 'user_presented.php?act=add';
			sys_msg($_LANG['presented_failed'], 0, $link);
		}
	}
	else {
		$user_id = engrave_user_by($presented['PreseObj']);
		if($user_id == 0)
		{
			//失败
			$link[0]['text'] = $_LANG['user_not_exist'];
			$link[0]['href'] = 'user_presented.php?act=add';
			sys_msg($_LANG['presented_failed'], 0, $link);
		}
		else{
			$presented['user_id'] = $user_id;
			//赠送给指定用户
			if(engrave_presented_insert($presented,$db_host,$db_user,$db_pass,$db_name))
			{
				//成功
				$link[0]['text'] = $_LANG['continue_add_presented'];
				$link[0]['href'] = 'user_presented.php?act=add';
				sys_msg($_LANG['presented_success'], 0, $link);
			}else{
				//失败
				$link[0]['text'] = $_LANG['return_add_presented'];
				$link[0]['href'] = 'user_presented.php?act=add';
				sys_msg($_LANG['presented_failed'], 0, $link);
			}
		}
	}
	admin_log($_POST['ClassName'],'add','account_log');

	/* 清除缓存 */
	clear_cache_files();
}

?>
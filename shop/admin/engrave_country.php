<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_country.php');
$smarty->assign('ur_here', "国家管理");//current position
if ($_REQUEST['act'] == 'list') {
     /* 检查权限 */
     admin_priv('country_manage');
     $result=country_paging_list();
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);


    $smarty->assign('action_link',  array('text' =>"添加国家", 'href'=>'engrave_country.php?act=add'));
   
    $smarty->display('engrave_country.htm');
} else if ($_REQUEST['act'] == 'add') {
    /* 检查权限 */
    admin_priv('country_manage');
    $smarty->assign('form_action', 'insert');
    $smarty->display('engrave_country_add.htm');
}   
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
    $data['name'] = !empty($_POST['name']) ? trim($_POST['name']) : '';
    $data['en_name'] = !empty($_POST['en_name']) ? trim($_POST['en_name']) : '';
    $data['code'] = !empty($_POST['code']) ? trim($_POST['code']) : '';
    if($act=='insert')
	{
		engrave_country_insert($data);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add'];
		$link[0]['href'] = 'engrave_country.php?act=add';
		$link[1]['text'] = '返回国家列表';
		$link[1]['href'] = 'engrave_country.php?act=list';
	}
	elseif($act=='update')
	{
		$id=$_REQUEST['id'];
		engrave_country_update($data, $id);
		$link[0]['text'] = '返回国家列表';
		$link[0]['href'] = 'engrave_country.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}
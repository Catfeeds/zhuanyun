<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');
/* 检查权限 */


admin_priv('shipment_price_manage');
$functionName = "物流";
$smarty->assign('ur_here', "${functionName}管理");//current position
$pageName = "engrave_shipment";
if ($_REQUEST['act'] == 'list') {
   
     $result=shipment_paging_list();
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);


    $smarty->assign('action_link',  array('text' =>"添加物流", 'href'=>$pageName.'.php?act=add'));
   
    $smarty->display($pageName.'.htm');
} else if ($_REQUEST['act'] == 'add') {
    
    $smarty->assign('form_action', 'insert');
    $smarty->display("{$pageName}_add.htm");
} else if($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
    $data['shipment_name'] = !empty($_POST['name']) ? trim($_POST['name']) : '';
    $data['shipment_type'] = !empty($_POST['shipment_type']) ? trim($_POST['shipment_type']) : 'normal';
	$data['shipment_code'] = !empty($_POST['code']) ? trim($_POST['code']) : '';
	
    $data['description'] = !empty($_POST['description']) ? trim($_POST['description']) : '';
    $data['status'] = $_POST['status'];
    $data['discount'] = intval($_POST['discount']) ;
    $data['default_oil_fee_rate'] = floatval($_POST['default_oil_fee_rate']) ;
    $data['min_day'] = intval($_POST['min_day']) ;
	$data['max_day'] = intval($_POST['max_day']) ;
	$data['effect_value'] = intval($_POST['effect_value']) ;
	

    if($act=='insert')
	{
		engrave_shipment_insert($data);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add'];
		$link[0]['href'] = $pageName.'.php?act=add';
		$link[1]['text'] = "返回${functionName}列表";
		$link[1]['href'] = $pageName.'.php?act=list';
	}
	elseif($act=='update')
	{
		$id=$_REQUEST['shipment_id'];
		engrave_shipment_update($data, $id);
		$link[0]['text'] = "返回${functionName}列表";
		$link[0]['href'] = $pageName.'.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
} else if ($_REQUEST['act'] == 'edit') {
    
    $smarty->assign('form_action', 'update');
    $smarty->display("{$pageName}_add.htm");
} else {
	echo "Not found!";
}
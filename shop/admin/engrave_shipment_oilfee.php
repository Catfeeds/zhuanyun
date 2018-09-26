<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');
/* 检查权限 */


admin_priv('shipment_price_manage');
$functionName = "物流燃油附加费";
$smarty->assign('ur_here', "${functionName}管理");//current position
$pageName = "engrave_shipment_oilfee";
$allShipments = shipment_all_list();

$smarty->assign('allShipments', $allShipments);


if ($_REQUEST['act'] == 'list') {
   
     $result=shipment_oilfee_paging_list();
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);


    $smarty->assign('action_link',  array('text' =>"添加${functionName}", 'href'=>$pageName.'.php?act=add'));
   
    $smarty->display($pageName.'.htm');
} else if ($_REQUEST['act'] == 'add') {

    $smarty->assign('form_action', 'insert');
    $smarty->display("{$pageName}_add.htm");
} else if($_REQUEST['act']=='insert' || $_REQUEST['act']=='update') {
   
    $data['shipment_id'] = $_POST['shipment_id'];
    $data['discount'] = intval($_POST['discount']) ;
    $data['year'] = intval($_POST['year']) ;
	$data['month'] = intval($_POST['month']) ;
	

    if($act=='insert')
	{
		engrave_shipment_oilfee_insert($data);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add'];
		$link[0]['href'] = $pageName.'.php?act=add';
		$link[1]['text'] = "返回${functionName}列表";
		$link[1]['href'] = $pageName.'.php?act=list';
	}
	elseif($act=='update')
	{
		$id=$_REQUEST['soid'];
		engrave_shipment_oilfee_update($data, $id);
		$link[0]['text'] = "返回${functionName}列表";
		$link[0]['href'] = $pageName.'.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
} else if ($_REQUEST['act'] == 'edit') {
    $soid = $_REQUEST['soid'];
    $data = get_shipment_oilfee($soid);
    $smarty->assign('data', $data);
    $smarty->assign('form_action', 'update');
    $smarty->display("{$pageName}_add.htm");
} else {
	echo "Not found!";
}
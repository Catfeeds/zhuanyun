<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_country.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');

$smarty->assign('ur_here', "国家分区管理");//current position
$pageName = "engrave_country_partition";
$allCountry = allCountries();
$allShipments = shipment_all_list();

$smarty->assign('allShipments', $allShipments);

if(!$_REQUEST['act']){
    $_REQUEST['act'] = 'list';
} 

if ($_REQUEST['act'] == 'list') {
     /* 检查权限 */
     admin_priv('country_manage');
     $result=country_partition_paging_list($allCountry);
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);
   

    $smarty->assign('action_link',  array('text' =>"添加分区", 'href'=>"${pageName}.php?act=add"));
   
    $smarty->display("${pageName}.htm");
} else if ($_REQUEST['act'] == 'add') {
    /* 检查权限 */
    admin_priv('country_manage');
    $smarty->assign('allCountries', allLeftCountries());
    $smarty->assign('form_action', 'insert');
    $smarty->display("${pageName}_add.htm");
}  else if ($_REQUEST['act'] == 'edit') {
    /* 检查权限 */
    admin_priv('country_manage');
    $data = get_country_partition(intval($_REQUEST['id']), $allCountry);
    $smarty->assign('allCountries', allLeftCountries());
    $smarty->assign('data', $data);
    $smarty->assign('form_action','update');
	$smarty->assign('full_page',    1);

    $smarty->display("${pageName}_add.htm");
}    
elseif($_REQUEST['act']=='insert' || $_REQUEST['act']=='update')
{
   
    $data['name'] = !empty($_POST['name']) ? trim($_POST['name']) : '';
    $data['description'] = !empty($_POST['description']) ? trim($_POST['description']) : '';
    $data['selids'] = $_POST['selids'];
    $data['leftids'] = $_POST['leftids'];
    $data['shipment_id'] = $_POST['shipment_id'];

    $data['min_day'] = intval($_POST['min_day']);
    $data['max_day'] = intval($_POST['max_day']);
    $id = intval($_POST['id']);
   
    if($act=='insert')
	{
		engrave_country_partition_insert($data);
		//页面跳转
		$link[0]['text'] = $_LANG['continue_add'];
		$link[0]['href'] = "${pageName}.php?act=add";
		$link[1]['text'] = '返回国家分区列表';
		$link[1]['href'] = "${pageName}.php?act=list";
	}
	elseif($act=='update')
	{
		$id=$_REQUEST['id'];
		engrave_country_partition_update($data, $id);
		$link[0]['text'] = '返回国家分区列表';
		$link[0]['href'] = "${pageName}.php?act=list";
	}
	sys_msg($_LANG['save_success'], 0, $link);
} else if($_REQUEST['act']=='getShipmentPartition' ) {
    $shipmentId = intval($_REQUEST['id']);
    $result = get_country_partition_by_shipment_id($shipmentId);

    make_json_result(json_encode($result));
}
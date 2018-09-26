<?php
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

require_once(ROOT_PATH . 'admin/includes/engrave/lib_shipment.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_country.php');
require_once(ROOT_PATH . 'admin/includes/engrave/lib_port.php');

$functionName = "物流价格";
$listUrTip = '1. 从中国到欧洲国家分区为4大快递公司以及专线的客户报价,出发地为“中国”。<br>2. 其它物流信息为从欧洲口岸到指定国家的当地物流运费成本价。<br>3. 成本价用来计算每单的实际费用<br>4. "每0.5kg增加的价格" 是指本价格区间内每增加0.5kg增加的价格数';
$smarty->assign('ur_here', "${functionName}管理");//current position
$pageName = "engrave_shipment_price";
$allShipments = shipment_all_data();
$allCountry = allCountries();
$allCountryPartitions = get_all_country_partition($allCountry);

$smarty->assign('allShipments', $allShipments);
$smarty->assign('allCountries', $allCountry);
$smarty->assign('allCountryPartitions', $allCountryPartitions);
$ports = allPorts();
$smarty->assign('leave_ports', $ports['leave_ports']);
$smarty->assign('arrival_ports', $ports['arrival_ports']);



//engrave_country_partition

$exc = new exchange($GLOBALS['engrave']->table('shipment_price'), $GLOBALS['engrave_db'], 'sp_id', 'price_config');
pagePrivCheck('shipment_price');


if ($_REQUEST['act'] == 'list' || empty($_REQUEST['act']) ) {
     /* 检查权限 */
     $result=shipment_price_parpare_for_list(shipment_price_paging_list(), $allShipments, $allCountryPartitions);
     $smarty->assign('data_list', $result['data_list']);
     $smarty->assign('filter',       $result['filter']);
     $smarty->assign('record_count', $result['record_count']);
     $smarty->assign('page_count',   $result['page_count']);
     $smarty->assign('ur_tip', $listUrTip);

    $smarty->assign('action_link',  array('text' =>"添加物流", 'href'=>$pageName.'.php?act=add'));
   
    $smarty->display($pageName.'.htm');
} else if ($_REQUEST['act'] == 'add') {
    /* 检查权限 */
    $smarty->assign('form_action', 'insert');
    $smarty->display("{$pageName}_add.htm");
}  elseif($_REQUEST['act']=='edit') {
    $sp_id=intval($_GET['sp_id']);
    $data = get_shipment_price($sp_id);
    $data['config'] = json_decode($data['price_config'], true);
    $smarty->assign('data', $data);
    $smarty->assign('form_action', 'update');
    $smarty->display("${pageName}_add.htm");
} elseif ($_REQUEST['act']=='insert' || $_REQUEST['act']=='update') {
    extract($_POST);
    
    if($act=='insert')
	{
        $result = engrave_shipment_price_insert($_POST,$allShipments, $allCountryPartitions);
        
		$link[0]['text'] = $_LANG['continue_add'];
        if($result==='HaveExisted') {
            
		    $link[0]['text'] = "所选的物流和国家分区的价格已经存在";
        }
       
		$link[0]['href'] = $pageName.'.php?act=add';
		$link[1]['text'] = "返回${functionName}列表";
        $link[1]['href'] = $pageName.'.php?act=list';
        
	}
	elseif($act=='update')
	{
		$id=$_REQUEST['pc_id'];
		$result = engrave_shipment_price_update($_POST, $id, $allShipments, $allCountryPartitions);
        $link[0]['text'] = "返回${functionName}列表";
        if($result==='HaveExisted') {
		    $link[0]['text'] = "所选的物流和国家分区的价格已经存在";
        }
		$link[0]['href'] = $pageName.'.php?act=list';
	}
	sys_msg($_LANG['save_success'], 0, $link);
}  elseif ($_REQUEST['act'] == 'remove') {
  
    $id = intval($_GET['id']);
    $exc->logicDrop($id, 'yes');
    $url = 'engrave_shipment_price.php?act=list&' . str_replace('act=remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}    
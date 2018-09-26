<?php
session_start();

define('IN_ENGRAVE', true);
/*初始化*/
require (dirname(__FILE__) . '/includes/init.php');
$smarty->assign('pageName', 'fee_query');
if($_REQUEST['act']=='query')
{
    $weight = intval($_POST['weight']);
    $countryId = intval($_POST['country']);
    $lpId = 1; //上海
    require_once(ROOT_PATH . '/includes/logisticssystem/lib_shipment.php');
    $shipmentPrice = new CalculateShipmentPrice(null, $lpId, $countryId);
    $data = $shipmentPrice -> main($weight);


    $result = array(
        "msg" => "",
        "code" => "200",
        "data" => $data
    );
    echo json_encode($result);
    exit;
}
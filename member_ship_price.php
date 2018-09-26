<?php
//计算价格
define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');

$packageIds= $_POST['packageIds'];
$lpId= $_POST['lp_id']; //上海, 广州, 这里一律取中国
$countryId= $_POST['country_id'];//到达的国家, 取地址中的设置


/**
 * mock 
packageIds[]:112
lp_id:1
country_id:3

*/
//$packageIds = array(112);
//$lpId = 1;
//$countryId = 3;


require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_shipment.php');

$shipmentPrice = new CalculateShipmentPrice($packageIds, $lpId, $countryId);
$result = $shipmentPrice -> run();


$result = array(
    'code' => "ok",
    'data' => $result
);
echo json_encode($result);
exit;
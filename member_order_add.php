<?php
///*提交发货*/
//导航
define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');
mustLogin();
//载入语言文件
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_packagemanage.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_promptlydelivery.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_forecast.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_user.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_order.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_appreciation.php');
require(ROOT_PATH . 'languages/' . $_CFG['lang'] . '/member_fad.php');
//数据访问类：仓库
require_once(ROOT_PATH . '/includes/logisticssystem/lib_warehouse.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_dictionary.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_shipment.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_port.php');
require_once(ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once(ROOT_PATH . '/includes/packagemanagement/lib_package.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_area.php');
require_once(ROOT_PATH . '/includes/logisticssystem/lib_service.php');
require_once(ROOT_PATH . '/includes/member/lib_account.php');
require_once(ROOT_PATH . '/includes/member/lib_coupon.php');
require_once(ROOT_PATH . '/includes/member/lib_account_log.php');
//收货地址
require_once(ROOT_PATH . '/includes/membermanage/lib_users_deliveryaddress.php');
//上传图片
require_once(ROOT_PATH . '/includes/commonhelper/upload_json.php');

require_once(ROOT_PATH . '/includes/lib_passport.php');


$portInstance = new lib_port();
$allPorts = $portInstance->getAllPorts();


$ur=assign_ur_here(0,$_LANG['member']['member_submit']);
$smarty->assign('ur_here',$ur['ur_here']);
$smarty->assign('curr_here',$_LANG['member']['member_submit']);
//获取用户、仓库 
$current_balance = engrave_current_balance();
//$users = engrave_users($user_id);
$smarty->assign('current_balance',$current_balance);
$user_warehouseid = isset($users['user_warehouseid']) ? intval($users['user_warehouseid']) : 0;
//到货仓库
$warehouse_list = engrave_warehouse_option($user_warehouseid, $allPorts['leave_ports']);
$smarty->assign('warehouse_list',$warehouse_list);


//获得货币名称
$currency_name = engrave_currency_name();
$smarty->assign('currency_name',$currency_name);
//获得货币单位
$currency_symbol = engrave_currency_symbol();
$smarty->assign('currency_symbol',$currency_symbol['Symbol']);

//快递公司
$allShipment = shipment_all_list();

$smarty->assign('allShipment',$allShipment);


//可使用的积分
$max_integral = engrave_system_maxintegral();
$smarty->assign('max_integral',$max_integral);
//最多使用多少积分
$pay_points = engrave_pay_points();
$smarty->assign('pay_points',$pay_points);
//默认支付方式
$payment_way = engrave_payment_way();
$smarty->assign('payment_way',$payment_way);
//积分转换金额的比率
$rate_points = engrave_rate_points();
$smarty->assign('rate_points',$rate_points);
//运单的折扣
$waybill_discount = engrave_discount();
$smarty->assign('waybill_discount',$waybill_discount);
$smarty->assign('act','member_insertsubmit');

$html20Cases = "";
for($i=2;$i<=20;$i++) {
	$html20Cases.="<option value=".($i-2).">".$i."</option>";
}
$smarty->assign('html20Cases',$html20Cases);

$html20 = "";
for($i=1;$i<=20;$i++) {
	$html20.="<option value=".$i.">".$i."</option>";
}
$smarty->assign('html20',$html20);

//物品名称
$rate_name_list = engrave_rate_name_list();

$rate_data = array();
foreach($rate_name_list as $key => $rate_item) {
    $rate_data[$rate_item['rate_id']] = $rate_item;
}
$smarty->assign('rate_data',json_encode($rate_data));

$user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
$users = engrave_users($user_id);

$smarty->assign('users',$users);

$smarty->display('member_submit.htm');

<?php
/**
 * $Author: cfang $
 * $Id: member_recommend.php 17217 2017年11月28日 11时03分00秒 zhangxingpeng $
 */

define('IN_ENGRAVE', true);
session_start();

/*初始化*/
require (dirname(__file__) . '/includes/init.php');
/*数据库*/
require_once (ROOT_PATH . '/includes/member/lib_account_log.php');
require_once (ROOT_PATH . '/includes/membermanage/lib_users.php');
require_once (ROOT_PATH . '/includes/logisticssystem/lib_package.php');

$con=mysql_connect($engrave_db_host,$engrave_db_user,$engrave_db_pass) or die("Unable to connect to the MySQL!");
$db = mysql_select_db($engrave_db_name,$con);
mysql_query("SET NAMES 'utf8'");


//*********************会员信息****************************************************************
if (isset($_SESSION['username'])) {
    //根据用户ID获取用户信息
    $user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0; //用户ID
}
//*********************会员信息****************************************************************
/**
 * 订单列表
 */
if ($_REQUEST['act'] == '2104') {
    //我的积分
    $order = array();
    $order['no'] = isset($_REQUEST['orderno']) ? trim($_REQUEST['orderno']) : "";

    $order['order_iscolsed'] = isset($_REQUEST['order_iscolsed']) ? intval($_REQUEST['order_iscolsed']) :
        "";
    $order['isdelivery'] = isset($_REQUEST['order_isdelivery']) ? intval($_REQUEST['order_isdelivery']) :
        "-1";
    $order['paymentstatus'] = isset($_REQUEST['paymentstatus']) ? intval($_REQUEST['paymentstatus']) :
        "-1";

    $order['consig_name'] = isset($_REQUEST['consig_name']) ? trim($_REQUEST['consig_name']) :
        "";

    $startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
    $pageSize = $_CFG['page_size']; //每页显示数
    $startPage = $startPage * $pageSize;
    //我的订单
    $users_list = engrave_order_list($order, $user_id, $startPage);
    $totalPage = ceil($users_list['record_count'] / $pageSize); //总页数
    $startPage = $users_list['page_count'] * $pageSize;
    $arr['total'] = $users_list['record_count'];
    $arr['pageSize'] = $pageSize;
    $arr['totalPage'] = $totalPage;

    //我的积分
    $arr['list'] = $users_list['order_list'];
    echo json_encode($arr);
}else if ($_REQUEST['act'] == '2108') {
    $link[0]['text'] = "订单列表";
    $link[0]['href'] = 'member.php?act=21';


    $user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
    $users = engrave_users($user_id);

    $user_name=$users["user_name"];

    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $order_info = engrave_order_byid($id);
    //确认收货
    $sql = "UPDATE " . $GLOBALS['engrave']->table('order') . " SET order_isdelivery = 6 WHERE order_id = '$id' and order_userid=".$user_id." and order_isdelivery = 5 ";
    if ($GLOBALS['engrave_db']->query($sql))
    {
        /* 记录日志 */

        $user_name=$users["user_name"];
        $orderlog['ol_userid']=$user_id;
        $orderlog['ol_username']=$user_name;
        $orderlog['ol_info']=$user_name.' 客户确认收货：'.
            $submit_order['order_no'].'(ID:'.$id.')，当前状态为：已收货';
        $orderlog['ol_code']='ORDERRECEIVED';
        $orderlog['ol_orderid'] = $id;
        $orderlog['ol_ipaddress'] = real_ip();

        engrave_orderlog_insert($orderlog,$con);

        sys_msg("收货成功", 0, $link);
    }
    else
    {
        sys_msg("收货失败", 0, $link);
    }
}
/**
 * 推荐会员分成
 */  
elseif ($_REQUEST['act'] == 'order_detail') {
    $id = isset($_REQUEST['orderId']) ? intval($_REQUEST['orderId']) : 0;
    //导航
    //	$ur=assign_ur_here(0,$_LANG['member']['member_order_detail']);
    //	$smarty->assign('ur_here',$ur['ur_here']);
    //	$smarty->assign('curr_here',$_LANG['member']['member_stock']);
    //$smarty->assign('menu_here',$_LANG['member_account']);

    //根据ID获取包裹内的信息
    $package = engrave_package($id);
    $smarty->assign('package', $package);
    //根据包裹ID获取包裹附件
    $package_attachs = engrave_package_attachs($id);
    	$smarty->assign('packageattachs',$package_attachs);
    //获取增值服务
    $order_list = engrave_order_byid($id);
    
    
    //$smarty->assign('package_service_list',$package_service_list);
    //根据ID获取商品内物品
    //$order_list = engrave_packagegoods_bypckid($id);
    $smarty->assign('order_list', $order_list);
    $orderlog_list = engrave_orderlog_list($_GET['orderId']);
    $smarty->assign('orderlog_list', $orderlog_list);

    $smarty->display('member_order_detail.htm');
} elseif ($_REQUEST['act'] == 'getpackageinformation') {
    $OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
    $package_goods_list = engrave_package_goods_list($OrderId);
    echo json_encode($package_goods_list);
} elseif ($_REQUEST['act'] == 'getpackagegoods') {
    $PckId = !empty($_REQUEST['pck_id']) ? intval($_REQUEST['pck_id']) : '0';
    $goods_list = engrave_goods_list($PckId);
    echo json_encode($goods_list);
} elseif ($_REQUEST['act'] == 'getpackagevalueservice') {
    $OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
    $value_service_list = engrave_value_service_list($OrderId);
    echo json_encode($value_service_list);
}
//获得订单中的运单信息
elseif ($_REQUEST['act'] == 'getpackageorderwaybill') {
    $OrderId = !empty($_REQUEST['order_id']) ? intval($_REQUEST['order_id']) : '0';
    $waybill_list = engrave_waybill_list($OrderId);
    echo json_encode($waybill_list);
}
//获得订单中物品的信息
elseif ($_REQUEST['act'] == 'getordergoods') {
    $waybillid = !empty($_REQUEST['ordw_waybillid']) ? intval($_REQUEST['ordw_waybillid']) :
        '0';
    $order_goods_list = engrave_order_goods_list($waybillid);
    echo json_encode($order_goods_list);
}
//获得收货人的详细信息
elseif ($_REQUEST['act'] == 'getdeliveryinfo') {
    $ordw_consigid = !empty($_REQUEST['ordw_consigid']) ? intval($_REQUEST['ordw_consigid']) :
        '0';
    $delivery_list = engrave_delivery_list($ordw_consigid);
    echo json_encode($delivery_list);
}
//获得该线路对应的货币和重量体积单位
elseif ($_REQUEST['act'] == 'getcurrencyinfo') {
    $shippingid = !empty($_REQUEST['shippingid']) ? intval($_REQUEST['shippingid']) :
        '0';
    $currencyinfo_list = engrave_currencyinfo_list($shippingid);
    echo json_encode($currencyinfo_list);
}
//获取增值服务费用
elseif ($_REQUEST['act'] == 'getserviceprice') {
    $service_id = !empty($_REQUEST['service_id']) ? intval($_REQUEST['service_id']) :
        '0';
    $service_setting = engrave_service_setting_byserviceid($service_id);
    echo json_encode($service_setting);
}
//获得选择线路中的 价格信息
elseif ($_REQUEST['act'] == 'getshippingorderprice') {
    $shipping_id = !empty($_REQUEST['ShippingId']) ? intval($_REQUEST['ShippingId']) :
        '0';
    $shippingorder_list = engrave_shipping_order_list($shipping_id);
    echo json_encode($shippingorder_list);
} elseif ($_REQUEST['act'] == '4602') {
    //我的积分
    $startPage = isset($_REQUEST['pageNum']) ? intval($_REQUEST['pageNum']) : 0;
    $pageSize = $_CFG['page_size']; //每页显示数
    $startPage = $startPage * $pageSize;
    //我的积分
    $users_list = engrave_users_recommend_behalf($user_id, $startPage);
    $totalPage = ceil($users_list['record_count'] / $pageSize); //总页数
    $startPage = $users_list['page_count'] * $pageSize;
    $arr['total'] = $users_list['record_count'];
    $arr['pageSize'] = $pageSize;
    $arr['totalPage'] = $totalPage;

    //我的积分
    $arr['list'] = $users_list['users_list'];
    echo json_encode($arr);
}
?>
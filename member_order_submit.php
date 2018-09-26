<?php
define('IN_ENGRAVE', true);

require (dirname(__FILE__) . '/includes/init.php');
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





//分箱数量
$boxquantity = 0;
//订单服务类型
$submit_order['order_servicetype'] = isset($_REQUEST['service']) ? intval($_REQUEST['service']) : 0;
//订单服务类型名称
$aservice = isset($_REQUEST['AService']) ? intval($_REQUEST['AService']) : 0;
$bservice = isset($_REQUEST['BService']) ? intval($_REQUEST['BService']) : 0;
if($submit_order['order_servicetype']!=0)
{
    if($aservice == 0 && $bservice == 0)
    {
        echo('请至少选择合箱或者是分箱！');
    }
    else
    {
        if($aservice == 0)
        {
            $submit_order['order_modelid'] = $bservice;
            //分箱的数量
            $boxquantity = isset($_REQUEST['boxNumber']) ? intval($_REQUEST['boxNumber']) : 0;
            $boxquantity = $boxquantity + 2;
        }
        else
        {
            $submit_order['order_modelid'] = $aservice;
        }
    }
}
else
{
    $submit_order['order_modelid'] = '0';
}
//订单号
$ordernumberformat = $_CFG['s_ordernumberformat'];//生成的订单号格式
$timeFormat=$_CFG['s_timeformat'];//时间格式
$orderwaterlevel = $_CFG['s_orderwaterlevel'];//产生的位数
//0：默认流程（先付款再称重）
//1：后付款流程（先称重再付款）
$orderflowpath = $_CFG['s_orderflowpath'];//订单的支付方式
$date = date($timeFormat);
$right = '';
$level_id = 0;
for($level = 1;$level < $orderwaterlevel;$level++)
{
    $right.=$level_id;
}
$right.=1;
if($ordernumberformat == '{Time}{Number}')
{
    $random = $date.$right;
    if(engrave_isexits_random($random) != 0)
    {
        $random = intval(engrave_roderno_max()) + 1;
    }
}
else
{
    //待五成
    $random = $right.$date;
}


$submit_order['order_no'] = $random;
//运单编号
$submit_order['order_waybillno'] = '';
//订单时间
$submit_order['order_time'] = gmtime();
//该订单的用户
$submit_order['order_userid'] = intval($_SESSION['user_id']);
//备注说明
$submit_order['order_note'] = isset($_REQUEST['description']) ? trim($_REQUEST['description']) : "";

$submit_order['order_is_invoice'] = intval($_REQUEST['order_is_invoice']);
$submit_order['order_invoice_type'] = trim($_REQUEST['order_invoice_type']);
$submit_order['order_invoice_title'] = trim($_REQUEST['order_invoice_title']);
$submit_order['order_invoice_tax_no'] = trim($_REQUEST['order_invoice_tax_no']);
$submit_order['order_invoice_content'] = trim($_REQUEST['order_invoice_content']);
$submit_order['order_invoice_address'] = trim($_REQUEST['order_invoice_address']);
if(!$submit_order['order_is_invoice']) {
    $submit_order['order_invoice_type'] = "";
    $submit_order['order_invoice_title'] = "";
    $submit_order['order_invoice_tax_no'] = "";
    $submit_order['order_invoice_content'] = "";
    $submit_order['order_invoice_address'] = "";
} else {
    if($submit_order['order_invoice_type'] == "个人") {
        $submit_order['order_invoice_tax_no'] = "";
    }
}
//订单线路
$submit_order['order_shippingid'] = isset($_REQUEST['shipping']) ? intval($_REQUEST['shipping']) : 0;
//=============new
//物流
$submit_order['order_shipmentid'] = isset($_REQUEST['shipment_id']) ? intval($_REQUEST['shipment_id']) : 0;
/*
 * $('#shipment_basicPrice').val(value.basicPrice);
 $('#shipment_oilDiscount').val(value.oilDiscount);
 $('#shipment_discount').val(value.discount);
 * */
$submit_order['order_shipment_basicPrice'] = isset($_REQUEST['shipment_id']) ? floatval($_REQUEST['shipment_basicPrice']) : 0;
$submit_order['order_shipment_oilDiscount'] = isset($_REQUEST['shipment_id']) ? floatval($_REQUEST['shipment_oilDiscount']) : 0;
$submit_order['order_shipment_discount'] = 
    isset($_REQUEST['shipment_discount']) ? floatval($_REQUEST['shipment_discount']) : 0; //小数 已经除过了100



//
//包装标记
$submit_order['order_remark'] = isset($_REQUEST['addinformation']) ? trim($_REQUEST['addinformation']) : '';
//收货人ID 收货地址id
$submit_order['order_buyerid'] = isset($_REQUEST['tb1_delivery_address']) ? intval($_REQUEST['tb1_delivery_address']) : 0;




//需要加固的散件数量
$submit_order['order_fixed'] = isset($_REQUEST['UpgradePackage']) ? intval($_REQUEST['UpgradePackage']) : 0;
//分箱数量
$submit_order['order_boxquantity'] = $boxquantity;
//支付方式
$submit_order['order_paymentid'] = $orderflowpath;

//支付状态 --默认在提交订单为已支付
if($orderflowpath == 0)
{
    $submit_order['order_paymentstatus'] = '1';
    $submit_order['order_paymentpath'] = '0';
}
else
{
    $submit_order['order_paymentstatus'] = '0';
    $submit_order['order_paymentpath'] = isset($_REQUEST['payment']) ? intval($_REQUEST['payment']) : 2;
}
//退款状态--默认为未退款
$submit_order['order_refundstatus'] = '0';
//获取订单的总重量
$submit_order['order_weight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;
//获取订单的扣款重量   默认为总重量
$submit_order['order_deductweight'] = isset($_REQUEST['pck_totalweights']) ? doubleval($_REQUEST['pck_totalweights']) : 0.00;
//获取订单的总长度
$submit_order['order_sizelength'] = isset($_REQUEST['pck_totallength']) ? doubleval($_REQUEST['pck_totallength']) : 0.00;
//获取订单的总宽度
$submit_order['order_sizewidth'] = isset($_REQUEST['pck_totalwidth']) ? doubleval($_REQUEST['pck_totalwidth']) : 0.00;
//获取订单的总高度
$submit_order['order_sizeheight'] = isset($_REQUEST['pck_totalheight']) ? doubleval($_REQUEST['pck_totalheight']) : 0.00;
//保险费用
$submit_order['order_insurace'] = isset($_REQUEST['pck_insurancecost']) ? doubleval($_REQUEST['pck_insurancecost']) : 0.00;
//其他操作费用
$submit_order['order_othercost'] = isset($_REQUEST['pck_operatorcost']) ? doubleval($_REQUEST['pck_operatorcost']) : 0.00;
//关税
$submit_order['order_tariffcost'] = isset($_REQUEST['pck_tariffcost']) ? doubleval($_REQUEST['pck_tariffcost']) : 0.00;
//增值服务费用
$submit_order['order_valueservicecost'] = isset($_REQUEST['pck_valueservicecost']) ? doubleval($_REQUEST['pck_valueservicecost']) : 0.00;
//运单费用
$submit_order['order_waybillcost'] = isset($_REQUEST['pck_waybillcost']) ? doubleval($_REQUEST['pck_waybillcost']) : 0.00;
//运单折扣费用
$submit_order['order_discountcost'] = isset($_REQUEST['discount_waybillcost']) ? doubleval($_REQUEST['discount_waybillcost']) : 0.00;
//仓储费
$submit_order['order_warehousecost'] = isset($_REQUEST['pck_warehousecost']) ? doubleval($_REQUEST['pck_warehousecost']) : 0.00;
//本次消费的积分
$submit_order['order_userpoints'] = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;
//是否有外箱缠绕膜
$submit_order['order_isoutbox'] = isset($_REQUEST['oustsidebrane']) ? intval($_REQUEST['oustsidebrane']) : 0;
//时效要求
$submit_order['order_time_request'] = $_REQUEST['order_time_request'];

//是否需要发票----默认是没有发票表示：0
//$submit_order['order_needinvoice'] = '0';
$submit_order['order_needinvoice']  = $submit_order['order_is_invoice'] ;
//该运单是否发货 ----默认为未发货：0
$submit_order['order_isdelivery'] = '0';
//该订单默认为未关闭状态 ---- 1：已关闭  0：未关闭
$submit_order['order_iscolsed'] = '0';
//打印状态----0表示为打印 1表示以打印
$submit_order['order_printstatus'] = '0';
//是否删除
$submit_order['order_isdelete'] = '0';


//获得添加了几个运单
$waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;
$applyprice = 0.00;
for($i=0;$i<$waybill_number;$i++)
{
    $tb_applyprice = "tb".($i+1)."_applyprice";
    $applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;
}
//物品的价格--所申报的价格
$submit_order['order_goodsprice'] = $applyprice;
//费用的总价格
$pck_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;
//使用积分支付抵消的金额
$points_paymentcost = isset($_REQUEST['pointspaymentcost']) ? doubleval($_REQUEST['pointspaymentcost']) : 0.00;
//货币转换汇率
$exchange_rate = isset($_REQUEST['exchangerate']) ? doubleval($_REQUEST['exchangerate']) : 1;
//总价格--需要支付的价格 不是
$submit_order['order_totalprice'] = ($pck_totalcost) / $exchange_rate - $points_paymentcost;

// $con=mysql_connect($engrave_db_host,$engrave_db_user,$engrave_db_pass) or die("Unable to connect to the MySQL!");
// $db = mysql_select_db($engrave_db_name,$con);




//添加订单
$result_order = order_insert($submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name);

//$GLOBALS['engrave_db'] -> query("update ecs_users set user_money  = user_money-'".$submit_order['order_totalprice']."' where user_id = '".$_SESSION['user_id']."'");



//导航
$smarty->assign('menu_here',$_LANG['member']['member_account']);

//发送订单提示短信
//$email = get_orederuser_email(intval($_SESSION['user_id']));
//$userName = get_orederuser_name(intval($_SESSION['user_id']));
//	send_submit_order($submit_order['order_no'],$userName,$email);
//跳转信息
$link[0]['text'] = $GLOBALS['_LANG']['return_order'];
$link[0]['href'] = 'member.php?act=21';
sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);

//添加订单和物品的详细信息
/**
 * 添加订单
 * @param unknown $submit_order
 * @param unknown $engrave_db_host
 * @param unknown $engrave_db_user
 * @param unknown $engrave_db_pass
 * @param unknown $engrave_db_name
 */
function order_insert($submit_order,$engrave_db_host, $engrave_db_user, $engrave_db_pass, $engrave_db_name)
{
	global $engrave_db;
	
	
    $submit_order['order_paymenttype'] = isset($_POST['user_account']) ? trim($_POST['user_account']) : '';
    $submit_order['order_coupon'] = isset($_POST['coupon']) ? trim($_POST['coupon']) : '';
    //跳转信息
    $link[0]['text'] = $GLOBALS['_LANG']['return_order'];
    $link[0]['href'] = 'member.php?act=21';
    
    $user_id = isset($_SESSION['user_id']) ? intval($_SESSION['user_id']) : 0;//用户ID
    $users = engrave_users($user_id);
    $con=mysql_connect($engrave_db_host,$engrave_db_user,$engrave_db_pass) or die("Unable to connect to the MySQL!");
    $db = mysql_select_db($engrave_db_name,$con);
    mysql_query("SET NAMES 'utf8'");
    $sql="insert into engrave_order(order_modelid,order_no,order_waybillno,order_time,order_userid,order_buyerid,order_note,
        order_remark,order_shippingid,order_servicetype,order_fixed,order_boxquantity,order_paymentid,order_paymentpath,
        order_paymentstatus,order_refundstatus,order_totalprice,order_goodsprice,order_weight,order_deductweight,order_sizelength,
        order_sizewidth,order_sizeheight,order_insurace,order_othercost,order_tariffcost,order_valueservicecost,order_waybillcost,
        order_discountcost,order_warehousecost,order_userpoints,order_isoutbox,order_isdelivery,order_iscolsed,
        order_printstatus,order_isdelete,order_paymenttype,order_coupon,
        order_shipmentid, order_shipment_basicPrice,order_shipment_oilDiscount,order_shipment_discount,order_time_request,
        order_needinvoice,order_invoice_type,order_invoice_content,order_invoice_title,order_invoice_tax_no,order_invoice_address
        ) 
        values('".$submit_order['order_modelid']."','".$submit_order['order_no']."','".$submit_order['order_waybillno']."',
        '".$submit_order['order_time']."','".$submit_order['order_userid']."','".$submit_order['order_buyerid']."',
        '".$submit_order['order_note']."','".$submit_order['order_remark']."','".$submit_order['order_shippingid']."',
        '".$submit_order['order_servicetype']."','".$submit_order['order_fixed']."','".$submit_order['order_boxquantity']."',
        '".$submit_order['order_paymentid']."','".$submit_order['order_paymentpath']."','".$submit_order['order_paymentstatus']."',
        '".$submit_order['order_refundstatus']."','".$submit_order['order_totalprice']."','".$submit_order['order_goodsprice']."',
        '".$submit_order['order_weight']."','".$submit_order['order_deductweight']."','".$submit_order['order_sizelength']."',
        '".$submit_order['order_sizewidth']."','".$submit_order['order_sizeheight']."','".$submit_order['order_insurace']."',
        '".$submit_order['order_othercost']."','".$submit_order['order_tariffcost']."','".$submit_order['order_valueservicecost']."',
        '".$submit_order['order_waybillcost']."','".$submit_order['order_discountcost']."','".$submit_order['order_warehousecost']."',
        '".$submit_order['order_userpoints']."','".$submit_order['order_isoutbox']."',
        '".$submit_order['order_isdelivery']."','".$submit_order['order_iscolsed']."','".$submit_order['order_printstatus']."',
        '".$submit_order['order_isdelete']."','".$submit_order['order_paymenttype']."','".$submit_order['order_coupon']."',
        '".$submit_order['order_shipmentid']."',
        '".$submit_order['order_shipment_basicPrice']."','".$submit_order['order_shipment_oilDiscount']."',
        '".$submit_order['order_shipment_discount']."',
        '".$submit_order['order_time_request']."',
        '".$submit_order['order_needinvoice']."',
        '".$submit_order['order_invoice_type']."',
        '".$submit_order['order_invoice_content']."',
        '".$submit_order['order_invoice_title']."',
        '".$submit_order['order_invoice_tax_no']."',
        '".$submit_order['order_invoice_address']."'"

        .")";
   
//    mysql_query($sql,$con);
//    $result = mysql_query('select @identity as identity;');
//    $idss =mysql_insert_id();
    $result = $engrave_db -> query($sql);
    $idss = $engrave_db -> insert_id();

    $saved_order_id = $idss;

    //echo "orderid:  ${idss}  ";
    /*开始事务*/
    //优惠券
    $isuse_coupon = isset($_POST['isuse_coupon']) ? intval($_POST['isuse_coupon']) : 0;
    //称重后自动结算
    if($submit_order['order_paymentpath']==2)
    {
        if($isuse_coupon!=0)
        {
            $result = engrave_coupon_used($user_id,$submit_order['order_coupon'],$con);
            if($result==false)
            {
                order_cancel_failed();
                //添加失败
                sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);
                return;
            }
        }else{
            $submit_order['sn'] = '';
        }
    }
    //手动确认支付
    else{
        $submit_order['sn'] = '';
    }
    //添加订单
    
    
    
    if($result!=false)
    {
        $array = mysql_fetch_assoc($result);
    }else
    {
        order_cancel_failed();
        //添加失败
        echo "error pos:-2";
        sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);
        return;
    }
    foreach ($array as $key=>$val)
    {
        ///TODO:修改['identity']
        $result=$val;
    }
    if($idss==null || $idss=='')
    {
        order_cancel_failed();
        echo "error pos:-1";
        //添加失败
        sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);
        return;
    }
    //添加订单日志
    $user_name=$users["user_name"];
    $orderlog['ol_userid']=$user_id;
    $orderlog['ol_username']=$user_name;
    $orderlog['ol_info']=$user_name.' 在线提交包裹订单，生成订单号为：'.
    $submit_order['order_no'].'(ID:'.$idss.')，当前状态为：未处理（费用核算中）';
    $orderlog['ol_code']='ORDERCREATE';
    $orderlog['ol_orderid'] = $idss;
    $orderlog['ol_ipaddress'] = real_ip();

    if(!engrave_orderlog_insert($orderlog,$con))
    {
        order_cancel_failed($con);
        //添加失败
        echo "error pos:0";
        sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);
        return;
    }

    //获得添加了几个运单
    $waybill_number = isset($_REQUEST['tablecount']) ? intval($_REQUEST['tablecount']) : 0;
    for($i=0;$i<$waybill_number;$i++)
        {
            //运单编号：1502010001-1
            $ordw_orderno = $submit_order['order_no'].'-'.($i+1);
            //收货人Id
            $ordw_consigid = isset($_REQUEST['tb'.($i+1).'_delivery_address']) ? intval($_REQUEST['tb'.($i+1).'_delivery_address']) : 0;
            //申报价值
            $ordw_applyprice = isset($_REQUEST['tb'.($i+1).'_applyprice']) ? doubleval($_REQUEST['tb'.($i+1).'_applyprice']) : 0.00;
            if($submit_order['order_boxquantity'] != 0)
            {
                //物品重量
                $ordw_goodweight = round(doubleval($submit_order['order_weight']) / intval($submit_order['order_boxquantity']),2);
                //默认的物品扣款重量
                $ordw_deductweight = round(doubleval($submit_order['order_deductweight']) / intval($submit_order['order_boxquantity']),2);
                //运单包裹的长度
                $ordw_sizelength = round(doubleval($submit_order['order_sizelength']) / intval($submit_order['order_boxquantity']),2);
                //运单包裹的宽度
                $ordw_sizewidth = round(doubleval($submit_order['order_sizewidth']) / intval($submit_order['order_boxquantity']),2);
                //运单包裹的高度
                $ordw_sizeheight = round(doubleval($submit_order['order_sizeheight']) / intval($submit_order['order_boxquantity']),2);
                //包裹的运费
                $ordw_waybillcost = round(doubleval($submit_order['order_waybillcost']) / intval($submit_order['order_boxquantity']),2);
            }
            else
            {
                //重量
                $ordw_goodweight = $submit_order['order_weight'];
                //扣款重量
                $ordw_deductweight = $submit_order['order_deductweight'];
                //包裹长度
                $ordw_sizelength = $submit_order['order_sizelength'];
                //包裹宽度
                $ordw_sizewidth = $submit_order['order_sizewidth'];
                //包裹高度
                $ordw_sizeheight = $submit_order['order_sizeheight'];
                //包裹运费
                $ordw_waybillcost = $submit_order['order_waybillcost'];
            }
            //是否需要保险ordw_insurprice
            $ordw_isinsurance = isset($_REQUEST['tb'.($i+1).'_insurance']) ? intval($_REQUEST['tb'.($i+1).'_insurance']) : 0;
            //保险费用
            $ordw_insurprice = 0.00;
            if($ordw_isinsurance!=0)
            {
                $ordw_insurprice = isset($_REQUEST['tb'.($i+1).'_hidinsurancecost']) ? doubleval($_REQUEST['tb'.($i
                    +1).'_hidinsurancecost']) : 0.00;
            }
            else
            {
                $ordw_insurprice == '0.00';
            }
            //关税
            $ordw_tariff = isset($_REQUEST['tb'.($i+1).'_hidtariff']) ? doubleval($_REQUEST['tb'.($i+1).'_hidtariff']) : 0.00;
            //运单删除
            $ordw_delete = '0';
            
            
            
            //重量 尺寸 运费 按平均来算
            
            $sql2="insert into engrave_orderwaybill".
                "(ordw_orderid,ordw_orderno,ordw_consigid,ordw_applyprice,ordw_waybillcost, 	ordw_goodweight,ordw_deductweight,ordw_sizelength,ordw_sizewidth,ordw_sizeheight,ordw_isinsurance,ordw_insurprice,ordw_tariff,ordw_delete) values".
                "('".$idss."','".$ordw_orderno."','".$ordw_consigid."','".$ordw_applyprice."','".$ordw_waybillcost."','".
                $ordw_goodweight."','".$ordw_deductweight."','".$ordw_sizelength."','".$ordw_sizewidth."','".$ordw_sizeheight."','".$ordw_isinsurance."','".$ordw_insurprice."','".$ordw_tariff."','".$ordw_delete."')";
                mysql_query($sql2,$con);
                $result_waybill = mysql_query("select * from engrave_orderwaybill where ordw_waybillid='".mysql_insert_id()."'");
                $iddss=mysql_insert_id();
                
                
                
                
                
                
                
                if($result_waybill!=false)
                {
                    $array = mysql_fetch_assoc($result_waybill);
                }
                else
                {
                    order_cancel_failed();
                    //添加失败
                    sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);
                    return;
                }
                foreach ($array as $key=>$val)
                {
                    ///TODO:修改$val['identity']
                    $result_waybill=$val;
                }
                if($result_waybill == null || $result_waybill =='')
                {
                    order_cancel_failed();
                    //添加失败
                    sys_msg($GLOBALS['_LANG']['insert_order_failed'], 0, $link);
                    return;
                }
                //添加物品
                $goods_number = isset($_REQUEST['tb'.($i+1).'_hidgoodscount']) ? intval($_REQUEST['tb'.($i+1).'_hidgoodscount']) : 0;
                for($j=0;$j<$goods_number;$j++)
                {
                    //物品类型
                    $ordg_goodtype = isset($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) ? intval($_REQUEST['tab'.($i+1).'_ratename'.($j+1)]) : 0;
                    //物品名称
                    $ordg_goodname = isset($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) ? trim($_REQUEST['tab'.($i+1).'_goodsname'.($j+1)]) : '';
                    //物品数量
                    $ordg_goodnumber = isset($_REQUEST['tb'.($i+1).'_num'.($j+1)]) ? intval($_REQUEST['tb'.($i+1).'_num'.($j+1)]) : 0;
                    //物品价格
                    $ordg_goodprice = isset($_REQUEST['tb'.($i+1).'_price'.($j+1)]) ? doubleval($_REQUEST['tb'.($i+1).'_price'.($j+1)]) : 0.00;
                    //删除标记
                    $ordg_delete = '0';
                    if($ordg_goodtype!=0)
                    {
                        $sql="insert into engrave_ordergoods".
                            "(ordg_waybillid,ordg_goodtype,ordg_goodname,ordg_goodnumber,ordg_goodprice,ordg_delete) values".
                            "('".$iddss."','".$ordg_goodtype."','".$ordg_goodname."','".$ordg_goodnumber."','".$ordg_goodprice."','".
                            $ordg_delete."')";
                            //$order_goods=mysql_query($sql,$con);
                            $order_goods = $engrave_db -> query($sql);
                            if($order_goods===false)
                            {
                                order_cancel_failed();
                                //添加失败
                                sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);
                                return;
                            }
                    }
                }
        }
    /*
     * --------------------------------------------------
     *    订单提交后未出现异常事物则运单出库，并给相对应的包裹产生订单号
     * --------------------------------------------------
     */
    $orderno_arr = array();
    $orderno_arr = $_POST['checkboxes'];
    foreach ($orderno_arr as $key=>$value)
    {
        $sql="update ".$GLOBALS['engrave']->table('package').
        "set pck_orderid = '".$idss.
        "',pck_packagestatus = '2'".
        " where pck_isdelete=0 AND pck_istrouble = 0 AND pck_expressnumber = '".$value."'";
        //$order_package=mysql_query($sql,$con);
        $order_package = $engrave_db -> query($sql);
        if($order_package===false)
        {
            order_cancel_failed();
            //添加失败
            sys_msg($GLOBALS['_LANG']['insert_order_success'], 0, $link);
            return;
        }
    }
        ///TODO:张兴朋--提交增值服务：未选择增值服务
        /*
         * -------------------------------------------------
         *                 订单所提交的增值服务
         * -------------------------------------------------
         */
        if(isset($_POST['checkboxesprice']))
        {
            $order_service = $_POST['checkboxesprice'];
            foreach ($order_service as $key=>$value)
            {
                $service_id = $value;
                $sql="insert into ".$GLOBALS['engrave']->table('waybillservice').
                "(ords_orderid,ords_serviceid,ords_isdelete) values".
                "('".$saved_order_id."','".$service_id."','0')";
                //$orderservice=mysql_query($sql,$con);
                $orderservice = $engrave_db -> query($sql);
                if($orderservice===false)
                {
                    order_cancel_failed();
                    //添加失败
                    echo "error pos:1";
                    //sys_msg($GLOBALS['_LANG']['insert_order_failed']." POS:1", 0, $link);
                    return;
                }
            }
        }
        /*
         * --------------------------------------------------
         *
         * --------------------------------------------------
         */
        if($submit_order['order_paymentid'] == 0)
        {
            $pay_applyprice = 0.00;
            for($i=0;$i<$waybill_number;$i++)
            {
                $tb_applyprice = "tb".($i+1)."_applyprice";
                $pay_applyprice += isset($_REQUEST[$tb_applyprice]) ? doubleval($_REQUEST[$tb_applyprice]) : 0.00;
            }
            //费用的总价格
            $pay_totalcost = isset($_REQUEST['pck_totalcost']) ? doubleval($_REQUEST['pck_totalcost']) : 0.00;
            //本次消费的金额
            $pay_momeny = $pay_applyprice;
            //需要支付的金额
            $nedd_momeny = $submit_order['order_totalprice'];
            //本次消费的积分
            $pay_points = isset($_REQUEST['usePointstb']) ? intval($_REQUEST['usePointstb']) : 0;
            //消费完后剩余金额
            $userMoney = isset($_REQUEST['userMoney']) ? doubleval($_REQUEST['userMoney']) : 0.00;
            $user_momeny = $userMoney - $nedd_momeny;
            //该用户拥有的积分
            $user_points = engrave_pay_points();
            //消费金额和积分兑换比例
            $rate_points = engrave_momeny_points_rate();
            $points = $user_points - $pay_points + round($pay_momeny / $rate_points);
            $sql="update ".$GLOBALS['engrave_shop']->table('users').
            " set user_money = '".$user_momeny.
            "',pay_points = '".$points.
            "' where user_id = '".$_SESSION['user_id']."'";
            //$userid=mysql_query($sql,$con);
            $userid = $engrave_db -> query($sql);
            if($userid===false)
            {
                order_cancel_failed();
                //添加失败
                echo "error pos:2";
                //sys_msg($GLOBALS['_LANG']['insert_order_failed']."POS:2", 0, $link);
                return;
            }
        }
        //提交
        order_cancel_success();
        return ;
}

/**
 * 订单取消
 * @param unknown $conn
 */
function order_cancel_failed()
{
	global $engrave_db;
	//添加失败
	@mysql_query('ROLLBACK',$engrave_db->link_id);//回滚
	@mysql_close($engrave_db->link_id);
}
/**
 * 订单取消
 * @param unknown $conn
 */
function order_cancel_success()
{
    //添加失败
    mysql_query('COMMIT',$engrave_db->link_id);//回滚
    mysql_close($engrave_db->link_id);
}
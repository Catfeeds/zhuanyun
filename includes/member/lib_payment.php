<?php 
/**
 * ENGRAVE 数据访问：支付账户
 * ===========================================================
 * * 版权所有 2014-2019 青岛友腾信息科技有限公司，并保留所有权利。
 * 网站地址: http://www.qdutsoft.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: zhangxingpeng $
 * $Id: lib_payment.php 17217 2014年11月28日 11时03分00秒 zhangxingpeng $
 */

/**
 * 查询 根据支付ID，获取支付对象
 * @param number $paymentid：支付ID
 * @return unknown：支付对象
 */
function engrave_payment_byid($paymentid = 0)
{
	$sql = "select PaymentId,InterfaceId,PaymentName,".
	"Logo,Gateway,Description,MerchantCode,Email,SecretKey,SecondKey,`Password`,".
	"Partner,Charge,IsPercent,SortId,IsCOD,IsOnline,IsDeletePayment from ".
	$GLOBALS['engrave'] -> table('payment').
	" where PaymentId = ".$paymentid;
	
	$row = $GLOBALS['engrave_db']->getRow($sql);
	
	return $row;
}


/**
 * 查询 
 * @return unknown：支付对象集合
 */
function engrave_payment_list()
{
	$sql = "select PaymentId,payment.InterfaceId as InterfaceId,PaymentName,InterfaceLogo,".
			"Logo,Gateway,Description,MerchantCode,Email,SecretKey,SecondKey,`Password`,".
			"Partner,Charge,IsPercent,SortId,IsCOD,IsOnline,IsDeletePayment from ".
			$GLOBALS['engrave'] -> table('payment').
			" as payment left join ".$GLOBALS['engrave'] -> table('paymentinterface').
			" as paymentinterface on payment.InterfaceId = paymentinterface.InterfaceId".
			" where IsDeletePayment = 0";

	$payment_list = $GLOBALS['engrave_db']->getAll($sql);

	return $payment_list;
}
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_paymentinterface`;");
E_C("CREATE TABLE `engrave_paymentinterface` (
  `InterfaceId` int(12) NOT NULL AUTO_INCREMENT,
  `InterfaceName` varchar(50) NOT NULL DEFAULT '',
  `InterfaceAddress` varchar(100) NOT NULL,
  `InterfaceLogo` varchar(255) NOT NULL,
  `IsDeleteInterface` tinyint(4) NOT NULL,
  PRIMARY KEY (`InterfaceId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_paymentinterface` values('1','支付宝标准双接口','','code/engrave/admin/images/pay/pay_alipay.gif','0');");
E_D("replace into `engrave_paymentinterface` values('2','支付宝及时到','','code/engrave/adminimages/pay/pay_alipay.gif','0');");
E_D("replace into `engrave_paymentinterface` values('3','易宝支付通用接口','','code/engrave/adminimages/pay/yeepay.jpg','0');");
E_D("replace into `engrave_paymentinterface` values('4','Paypal','','code/engrave/adminimages/pay/pay_paypal.gif','0');");
E_D("replace into `engrave_paymentinterface` values('5','网银在线','','code/engrave/adminimages/pay/pay_chinabank.jpg','0');");
E_D("replace into `engrave_paymentinterface` values('6','预付款账','','','0');");
E_D("replace into `engrave_paymentinterface` values('7','银行汇款','','','0');");
E_D("replace into `engrave_paymentinterface` values('8','信用卡充','','','0');");

require("../../inc/footer.php");
?>
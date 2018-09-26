<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_payment`;");
E_C("CREATE TABLE `engrave_payment` (
  `PaymentId` int(12) NOT NULL AUTO_INCREMENT,
  `InterfaceId` smallint(6) NOT NULL,
  `PaymentName` varchar(50) NOT NULL DEFAULT '',
  `Logo` varchar(255) NOT NULL DEFAULT '',
  `Gateway` varchar(200) NOT NULL DEFAULT '',
  `Description` longtext,
  `MerchantCode` varchar(255) NOT NULL DEFAULT '',
  `Email` varchar(255) NOT NULL DEFAULT '',
  `SecretKey` longtext,
  `SecondKey` longtext,
  `Password` longtext,
  `Partner` varchar(255) NOT NULL DEFAULT '',
  `Charge` double unsigned NOT NULL DEFAULT '0',
  `IsPercent` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `StatusId` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsCOD` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsOnline` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeletePayment` tinyint(4) NOT NULL,
  PRIMARY KEY (`PaymentId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_payment` values('1','1','支付宝','','alipaydirect','<p>\r\n	<strong>支付</strong> \r\n</p>','2088111606204603','qdpcfans@gmail.com','j49mh8y9gks7sz5pktkajn2jgmn4flht','','','','0','0','0','1','0','0','0');");
E_D("replace into `engrave_payment` values('2','8','信用卡支付','','','3','','','',NULL,NULL,'','1','0','0','0','0','0','0');");
E_D("replace into `engrave_payment` values('3','0','信用卡支付','','','3','','','',NULL,NULL,'啊啊啊','1','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>
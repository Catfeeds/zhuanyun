<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_coupon`;");
E_C("CREATE TABLE `engrave_coupon` (
  `CouponId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `TypeId` int(11) unsigned NOT NULL DEFAULT '0',
  `CouponName` varchar(50) NOT NULL DEFAULT '',
  `CouponImage` varchar(200) NOT NULL DEFAULT '',
  `Message` varchar(255) NOT NULL DEFAULT '',
  `CouponValue` double unsigned NOT NULL DEFAULT '0',
  `RebatePoints` int(11) unsigned NOT NULL DEFAULT '0',
  `Days` int(11) unsigned NOT NULL DEFAULT '0',
  `Roles` varchar(50) NOT NULL DEFAULT '',
  `MinAmount` double unsigned NOT NULL DEFAULT '0',
  `MaxAmount` double unsigned NOT NULL DEFAULT '0',
  `StatusId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteCoupon` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CouponId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_coupon` values('1','0','测试优惠','','测试优惠','1000','1','30','','100','0','0','0');");

require("../../inc/footer.php");
?>
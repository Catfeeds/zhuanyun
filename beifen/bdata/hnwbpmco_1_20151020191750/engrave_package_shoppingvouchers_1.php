<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_package_shoppingvouchers`;");
E_C("CREATE TABLE `engrave_package_shoppingvouchers` (
  `psv_id` int(12) NOT NULL AUTO_INCREMENT,
  `psv_packageid` int(12) DEFAULT NULL COMMENT '包裹ID',
  `psv_vouchersvalue` varchar(255) DEFAULT NULL COMMENT '购物凭证-图片',
  PRIMARY KEY (`psv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
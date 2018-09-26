<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_shipping_declaredvalue`;");
E_C("CREATE TABLE `engrave_shipping_declaredvalue` (
  `sdv_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '申报价值ID',
  `sdv_shippingid` int(12) DEFAULT NULL COMMENT '运单ID',
  `sdv_minprice` float DEFAULT NULL COMMENT '最小申报价格',
  `sdv_maxprice` float DEFAULT NULL COMMENT '最大申报价格',
  `sdv_price` float DEFAULT NULL COMMENT '申报价格',
  `sdv_ispercent` tinyint(4) DEFAULT NULL COMMENT '是否按百分比',
  `sdv_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`sdv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_shipping_declaredvalue` values('1','0','0','0','3','0','0');");
E_D("replace into `engrave_shipping_declaredvalue` values('2','0','0','0','3','0','0');");
E_D("replace into `engrave_shipping_declaredvalue` values('3','6','11','21','31','1','0');");
E_D("replace into `engrave_shipping_declaredvalue` values('4','6','12','13','14','1','0');");
E_D("replace into `engrave_shipping_declaredvalue` values('5','6','1','2','3','4','0');");
E_D("replace into `engrave_shipping_declaredvalue` values('7','6','4','3','21','1','1');");
E_D("replace into `engrave_shipping_declaredvalue` values('8','1','2000','3300','123','0','0');");

require("../../inc/footer.php");
?>
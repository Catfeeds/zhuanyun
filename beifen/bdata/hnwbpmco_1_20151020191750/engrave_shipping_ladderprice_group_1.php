<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_shipping_ladderprice_group`;");
E_C("CREATE TABLE `engrave_shipping_ladderprice_group` (
  `slpg_id` int(12) NOT NULL AUTO_INCREMENT,
  `slpg_name` varchar(50) DEFAULT '' COMMENT '名称',
  `slpg_des` varchar(500) DEFAULT NULL COMMENT '备注',
  `slpg_time` int(12) DEFAULT '0' COMMENT '时间',
  `slpg_isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`slpg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_shipping_ladderprice_group` values('1','亚洲','亚洲','1426666359','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('2','大洋洲','大洋洲','1426666359','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('3','北美','北美','1426666359','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('4','中美','中美','1427158224','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('5','中东','中东','1427158231','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('6','近东','近东','1427158238','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('7','欧洲','欧洲','1427158245','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('8','南美','南美','1427158251','0');");
E_D("replace into `engrave_shipping_ladderprice_group` values('9','非洲','非洲','1427158258','0');");

require("../../inc/footer.php");
?>
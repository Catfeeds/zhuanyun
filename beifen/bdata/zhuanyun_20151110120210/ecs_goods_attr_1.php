<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','1','1','田园','0');");
E_D("replace into `ecs_goods_attr` values('2','1','2','实木','0');");
E_D("replace into `ecs_goods_attr` values('3','1','3','实木床','0');");
E_D("replace into `ecs_goods_attr` values('4','1','4','地中海1.5米床','10');");
E_D("replace into `ecs_goods_attr` values('5','1','4','地中海1.8米床','20');");
E_D("replace into `ecs_goods_attr` values('6','1','4','地中海1.2米床','30');");
E_D("replace into `ecs_goods_attr` values('8','1','5','1.815*2.01米','');");
E_D("replace into `ecs_goods_attr` values('9','1','5','1.515*2.01米','');");
E_D("replace into `ecs_goods_attr` values('10','2','4','地中海1.5米床','');");
E_D("replace into `ecs_goods_attr` values('11','2','4','地中海1.2米床','');");
E_D("replace into `ecs_goods_attr` values('16','26','4','地中海1.8米床','800');");
E_D("replace into `ecs_goods_attr` values('15','26','4','地中海1.5米床','500');");
E_D("replace into `ecs_goods_attr` values('17','26','7','黑色','500');");
E_D("replace into `ecs_goods_attr` values('18','26','7','紫色','200');");
E_D("replace into `ecs_goods_attr` values('19','26','7','白色','100');");

require("../../inc/footer.php");
?>
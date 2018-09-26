<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_attribute`;");
E_C("CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_name` varchar(60) NOT NULL DEFAULT '',
  `attr_input_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `is_linked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `attr_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_attribute` values('1','1','家装风格','1','0','田园\r\n现代\r\n古典\r\n中式\r\n地中海','0','0','0','0');");
E_D("replace into `ecs_attribute` values('2','1','材质','1','0','实木\r\n桃花心木','0','0','0','0');");
E_D("replace into `ecs_attribute` values('3','1','床类型','1','0','实木床\r\n板式床','0','0','0','0');");
E_D("replace into `ecs_attribute` values('4','1','类&emsp;型','1','1','地中海1.5米床\r\n地中海1.2米床\r\n美式1.5米床\r\n地中海1.8米床','0','0','0','0');");
E_D("replace into `ecs_attribute` values('5','1','内&emsp;径','1','1','1.815*2.01米\r\n1.515*2.01米','0','1','0','0');");
E_D("replace into `ecs_attribute` values('6','1','配送区域','0','1','','0','0','0','0');");
E_D("replace into `ecs_attribute` values('7','1','颜色','1','1','黑色\r\n白色\r\n紫色','0','0','0','0');");

require("../../inc/footer.php");
?>
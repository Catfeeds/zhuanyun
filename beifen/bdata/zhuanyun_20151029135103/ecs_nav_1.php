<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_nav`;");
E_C("CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_nav` values('1','','0','商家入驻','1','1','0','#','bottom');");
E_D("replace into `ecs_nav` values('2','','0','家居图片','1','2','0','#','bottom');");
E_D("replace into `ecs_nav` values('3','','0','家居资讯','1','3','0','#','bottom');");
E_D("replace into `ecs_nav` values('4','','0','品牌大全','1','4','0','#','bottom');");
E_D("replace into `ecs_nav` values('5','','0','装修图片 ','1','5','0','#','bottom');");
E_D("replace into `ecs_nav` values('6','','0','装修材料','1','6','0','#','bottom');");
E_D("replace into `ecs_nav` values('7','','0','家私导购','1','7','0','#','bottom');");
E_D("replace into `ecs_nav` values('8','','0','品牌展厅','1','8','0','#','bottom');");
E_D("replace into `ecs_nav` values('9','','0','客服中心','1','9','0','#','bottom');");
E_D("replace into `ecs_nav` values('10','','0','网站地图 ','1','10','0','#','bottom');");
E_D("replace into `ecs_nav` values('11','','0','购买流程','1','1','0','#','top');");
E_D("replace into `ecs_nav` values('12','','0','在线帮助','1','2','0','#','top');");
E_D("replace into `ecs_nav` values('13','c','1','家具城','1','1','0','category.php?id=1','middle');");
E_D("replace into `ecs_nav` values('16','','0','团购','1','4','0','group_buy.php','middle');");
E_D("replace into `ecs_nav` values('22','c','3','家居家饰','1','4','0','category.php?id=3','middle');");
E_D("replace into `ecs_nav` values('20','c','2','建材城','1','2','0','category.php?id=2','middle');");
E_D("replace into `ecs_nav` values('23','c','8','儿童房','0','6','0','category.php?id=8','middle');");

require("../../inc/footer.php");
?>
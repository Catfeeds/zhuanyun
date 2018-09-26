<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_package_goods`;");
E_C("CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_package_goods` values('6','3','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','4','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','5','0','1','1');");
E_D("replace into `ecs_package_goods` values('6','6','0','1','1');");
E_D("replace into `ecs_package_goods` values('7','6','0','1','1');");
E_D("replace into `ecs_package_goods` values('7','5','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','4','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','5','0','1','1');");
E_D("replace into `ecs_package_goods` values('8','3','0','1','1');");
E_D("replace into `ecs_package_goods` values('9','1','0','1','1');");
E_D("replace into `ecs_package_goods` values('9','2','0','1','1');");
E_D("replace into `ecs_package_goods` values('10','7','0','1','1');");
E_D("replace into `ecs_package_goods` values('10','8','0','1','1');");
E_D("replace into `ecs_package_goods` values('10','9','0','1','1');");
E_D("replace into `ecs_package_goods` values('10','10','0','1','1');");
E_D("replace into `ecs_package_goods` values('11','11','0','1','1');");
E_D("replace into `ecs_package_goods` values('11','12','0','1','1');");
E_D("replace into `ecs_package_goods` values('11','13','0','1','1');");
E_D("replace into `ecs_package_goods` values('11','14','0','1','1');");
E_D("replace into `ecs_package_goods` values('12','21','0','1','1');");
E_D("replace into `ecs_package_goods` values('12','22','0','1','1');");
E_D("replace into `ecs_package_goods` values('12','20','0','1','1');");

require("../../inc/footer.php");
?>
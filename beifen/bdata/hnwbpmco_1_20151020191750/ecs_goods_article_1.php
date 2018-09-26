<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_article`;");
E_C("CREATE TABLE `ecs_goods_article` (
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `article_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `admin_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`,`article_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_article` values('1','33','0');");
E_D("replace into `ecs_goods_article` values('1','46','0');");
E_D("replace into `ecs_goods_article` values('2','33','0');");
E_D("replace into `ecs_goods_article` values('2','46','0');");
E_D("replace into `ecs_goods_article` values('3','33','0');");
E_D("replace into `ecs_goods_article` values('3','46','0');");
E_D("replace into `ecs_goods_article` values('4','33','0');");
E_D("replace into `ecs_goods_article` values('4','46','0');");
E_D("replace into `ecs_goods_article` values('5','33','0');");
E_D("replace into `ecs_goods_article` values('5','46','0');");
E_D("replace into `ecs_goods_article` values('6','33','0');");
E_D("replace into `ecs_goods_article` values('6','46','0');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_place` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `action_note` varchar(255) NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','19','admin','1','0','0','0','1111','1388397058');");
E_D("replace into `ecs_order_action` values('2','19','admin','1','0','2','0','111111','1388397064');");
E_D("replace into `ecs_order_action` values('3','19','admin','1','3','2','0','111','1388397070');");
E_D("replace into `ecs_order_action` values('4','19','admin','5','5','2','0','111111','1388397082');");
E_D("replace into `ecs_order_action` values('5','19','admin','1','1','2','1','1111','1388397103');");
E_D("replace into `ecs_order_action` values('6','19','admin','5','2','2','0','11111','1388397126');");
E_D("replace into `ecs_order_action` values('7','20','admin','1','0','0','0','','1388468662');");
E_D("replace into `ecs_order_action` values('8','20','admin','1','0','2','0','111111111','1388468672');");
E_D("replace into `ecs_order_action` values('9','20','admin','1','3','2','0','11111','1388468677');");
E_D("replace into `ecs_order_action` values('10','20','admin','5','5','2','0','1111','1388468688');");
E_D("replace into `ecs_order_action` values('11','20','admin','1','1','2','1','111111','1388468702');");
E_D("replace into `ecs_order_action` values('12','20','admin','5','2','2','0','111111','1388468714');");
E_D("replace into `ecs_order_action` values('13','17','admin','1','0','2','0','11111','1388474902');");
E_D("replace into `ecs_order_action` values('14','17','admin','1','3','2','0','1111111','1388474912');");
E_D("replace into `ecs_order_action` values('15','17','admin','5','5','2','0','1111','1388474921');");
E_D("replace into `ecs_order_action` values('16','17','admin','1','1','2','1','111111','1388474932');");
E_D("replace into `ecs_order_action` values('17','17','买家','5','2','2','0','','1388475145');");
E_D("replace into `ecs_order_action` values('18','18','admin','1','0','2','0','1111','1388479330');");
E_D("replace into `ecs_order_action` values('19','18','admin','1','3','2','0','','1388479335');");
E_D("replace into `ecs_order_action` values('20','18','admin','5','5','2','0','11','1388479341');");
E_D("replace into `ecs_order_action` values('21','18','admin','1','1','2','1','','1388479351');");
E_D("replace into `ecs_order_action` values('22','18','admin','5','2','2','0','11111','1388479364');");
E_D("replace into `ecs_order_action` values('23','16','admin','1','0','2','0','222','1388479375');");
E_D("replace into `ecs_order_action` values('24','16','admin','5','5','2','0','222','1388479382');");
E_D("replace into `ecs_order_action` values('25','16','admin','1','1','2','1','','1388479393');");
E_D("replace into `ecs_order_action` values('26','16','admin','5','2','2','0','121','1388479409');");
E_D("replace into `ecs_order_action` values('27','15','admin','1','0','2','0','32111','1388479418');");
E_D("replace into `ecs_order_action` values('28','15','admin','1','3','2','0','3333333332','1388479428');");
E_D("replace into `ecs_order_action` values('29','15','admin','5','5','2','0','3333','1388479434');");
E_D("replace into `ecs_order_action` values('30','15','admin','1','1','2','1','','1388479445');");
E_D("replace into `ecs_order_action` values('31','15','admin','5','2','2','0','3222222','1388479458');");
E_D("replace into `ecs_order_action` values('32','10','admin','1','0','0','0','33333333','1388479472');");
E_D("replace into `ecs_order_action` values('33','10','admin','1','0','2','0','33333','1388479475');");
E_D("replace into `ecs_order_action` values('34','10','admin','5','5','2','0','33333333','1388479482');");
E_D("replace into `ecs_order_action` values('35','10','admin','1','1','2','1','2344444444','1388479495');");
E_D("replace into `ecs_order_action` values('36','10','admin','5','2','2','0','3333333','1388479523');");
E_D("replace into `ecs_order_action` values('37','3','admin','1','0','2','0','eeeee','1388481820');");
E_D("replace into `ecs_order_action` values('38','3','admin','5','5','2','0','eeee','1388481830');");
E_D("replace into `ecs_order_action` values('39','3','admin','1','1','2','1','','1388481843');");
E_D("replace into `ecs_order_action` values('40','3','admin','5','2','2','0','eeeeee','1388481861');");

require("../../inc/footer.php");
?>
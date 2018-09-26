<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_card`;");
E_C("CREATE TABLE `ecs_card` (
  `card_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_img` varchar(255) NOT NULL DEFAULT '',
  `card_fee` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `free_money` decimal(6,2) unsigned NOT NULL DEFAULT '0.00',
  `card_desc` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`card_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_card` values('1','乔迁贺卡','1404359914350364127.jpg','2.00','8000.00','乔迁贺卡');");
E_D("replace into `ecs_card` values('2','新房贺卡','1404359989294339915.jpg','3.00','8000.00','新房贺卡');");
E_D("replace into `ecs_card` values('3','','','4.00','800.00','');");
E_D("replace into `ecs_card` values('4','','','4.00','800.00','');");
E_D("replace into `ecs_card` values('5','','','4.00','800.00','');");

require("../../inc/footer.php");
?>
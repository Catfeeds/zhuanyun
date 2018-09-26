<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_suppliers`;");
E_C("CREATE TABLE `ecs_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `suppliers_name` varchar(255) DEFAULT NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `logo` varchar(255) DEFAULT NULL,
  `country` int(5) DEFAULT NULL,
  `province` int(5) DEFAULT NULL,
  `city` int(5) DEFAULT NULL,
  `district` int(5) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `work_time` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `position_img` varchar(255) DEFAULT NULL,
  `line` longtext,
  `gallery` longtext,
  PRIMARY KEY (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_suppliers` values('2','北京十里河体验馆','供货商描述','1','../data/suppliers/1386322573176361283.jpg','1','2','52','501','010-67498277','9:00-19:00','想顾客之所想 忧顾客之所忧，你的满意我们的追求！','北京市朝阳区十里河街十里河桥东南角佰汇广场佰汇古玩城','../data/suppliers/1386322573357669210.jpg','小屯西路南口站，507路','');");
E_D("replace into `ecs_suppliers` values('3','北京丰台区体验馆','','1','../data/suppliers/1386322734065388439.jpg','1','2','52','506','010-83738792','9:00-18:00','真诚服务 满意你我','北京市丰台区小屯西路万科中粮假日风景111号院底商1','../data/suppliers/1386322734757770298.jpg','郭庄子公交场站，554路，339路，634路','');");

require("../../inc/footer.php");
?>
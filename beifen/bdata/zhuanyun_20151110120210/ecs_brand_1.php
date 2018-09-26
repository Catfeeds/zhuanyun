<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_brand`;");
E_C("CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL DEFAULT '',
  `brand_logo` varchar(80) NOT NULL DEFAULT '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL DEFAULT '',
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_brand` values('1','凯撒豪庭','1385821836877586354.jpg','迷醉在高贵的魅惑中，恢弘的气势包围着身心的愉悦。流年锦心，在似水的年华中感悟到一种浩大的艺术境界！\r\n生产基地：中国现代家具之父—鼎盛家具集团','http://','50','1');");
E_D("replace into `ecs_brand` values('2','韩菲尔','1385821846656400819.gif','田园生活的意境、现代生活的情调 在一杯咖啡、一杯香茗的时间里一 一展现 在韩菲尔的世界，每一个转身都是自然主义的本色演绎！\r\n生产基地：金华庭家具集团','http://','50','1');");
E_D("replace into `ecs_brand` values('3','蒂美悦','1385821871691649220.gif','关注时尚、风格独立，在注重家居现实感受的同时更善于在平凡事物上创造精致的品位。\r\n生产基地：香港圣维纳斯家具集团','http://','50','1');");
E_D("replace into `ecs_brand` values('4','卡富亚','1385821882418420829.jpg','乐观、开朗，在现代生活中寻找到最自我的一面，在随性的风格中坚守不一样的品质体验，让现代家具拥有鲜明的个性特点。\r\n生产基地：“SOHO时尚派”—耀邦家具集团','http://','50','1');");
E_D("replace into `ecs_brand` values('5','测试','1404962966659903459.gif','关注时尚、风格独立，在注重家居现实感受的同时更善于在平凡事物上创造精致的品位。 生产基地：香港圣维纳斯家具集团','http://','50','1');");
E_D("replace into `ecs_brand` values('6','','','','http://af','0','0');");

require("../../inc/footer.php");
?>
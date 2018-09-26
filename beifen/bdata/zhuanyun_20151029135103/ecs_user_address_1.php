<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `users_identitycard` varchar(50) DEFAULT NULL COMMENT '身份证号',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','超级卖家','','1','6','76','693','长江路15号','','111111111','','','','');");
E_D("replace into `ecs_user_address` values('2','','2','发挥好','','1','6','84','773','发挥好哈哈哈','','15013475862','','','','');");
E_D("replace into `ecs_user_address` values('3','','5','Ffcddfggg136','Jssjj@11.com','1','13','193','1618','Ghffggh','','13975788537','','','','');");
E_D("replace into `ecs_user_address` values('4','','7','谢家华','','1','3','38','417','成行路2323号','','13543881086','','','','');");
E_D("replace into `ecs_user_address` values('5','','9','渐中顺','','1','6','78','712','另要在枷 进','','18398989218','','','','');");
E_D("replace into `ecs_user_address` values('6','','10','1','asdfasdf@163.com','1','3','38','418','1','','13','','','','');");
E_D("replace into `ecs_user_address` values('7','','20','姓名','','1','2','52','500','地址','','13812312312','','','','');");
E_D("replace into `ecs_user_address` values('8','','22','顶替村','2937431186@qq.com','1','2','52','500','要大规模压顶','','13800138123','','','要大规模城','');");
E_D("replace into `ecs_user_address` values('9','','23','ASDFASDFASDF','ws323@111.NET','1','3','37','410','SDFASDFASDFASDF','','13503214551','','','ASDFASDFASD','');");
E_D("replace into `ecs_user_address` values('10','','24','防守打法','','1','2','52','500','佛挡杀佛第三方对是否','','1551613313','','','','');");
E_D("replace into `ecs_user_address` values('11','','28','好人','wuxingpeng@qq.com','1','2','52','500','uxyi','','17431005','','','','');");
E_D("replace into `ecs_user_address` values('12','','29','dsfa','xiaomi@qq.com','1','2','52','501','biei','','12345678911','','','','');");
E_D("replace into `ecs_user_address` values('13','','34','111','','1','2','52','500','1111111111','','11111111','','','','');");
E_D("replace into `ecs_user_address` values('14','','31707','刘国强','','1','2','52','501','11','','15544444444','','','',NULL);");

require("../../inc/footer.php");
?>
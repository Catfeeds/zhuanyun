<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_email_list`;");
E_C("CREATE TABLE `ecs_email_list` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT '0',
  `hash` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_email_list` values('1','admin@qq.com','0','cbeec58135');");
E_D("replace into `ecs_email_list` values('2','2444352696@qq.com','1','f363e070d0');");
E_D("replace into `ecs_email_list` values('3','15202877977@qq.com','0','c794b1d502');");
E_D("replace into `ecs_email_list` values('4','1870906399@qq.com','1','cde4fbcd12');");

require("../../inc/footer.php");
?>
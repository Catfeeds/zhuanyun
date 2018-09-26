<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `tf_admin`;");
E_C("CREATE TABLE `tf_admin` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `passwd` varchar(40) DEFAULT NULL,
  `qianxian` varchar(100) DEFAULT '10,',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `tf_admin` values('1','admin','e10adc3949ba59abbe56e057f20f883e','10,');");

require("../../inc/footer.php");
?>
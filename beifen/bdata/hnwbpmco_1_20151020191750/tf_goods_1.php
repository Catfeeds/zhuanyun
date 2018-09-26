<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `tf_goods`;");
E_C("CREATE TABLE `tf_goods` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `goodsname` varchar(100) DEFAULT NULL,
  `info` varchar(240) DEFAULT NULL,
  `cdate` varchar(60) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=gbk");
E_D("replace into `tf_goods` values('22','admin','2222288',NULL,NULL,NULL);");
E_D("replace into `tf_goods` values('23','admin','的风格的风格的',NULL,NULL,NULL);");

require("../../inc/footer.php");
?>
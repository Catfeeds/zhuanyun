<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `tf_paylist`;");
E_C("CREATE TABLE `tf_paylist` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `orderid` varchar(240) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>
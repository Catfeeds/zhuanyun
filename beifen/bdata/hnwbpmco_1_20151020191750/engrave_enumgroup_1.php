<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_enumgroup`;");
E_C("CREATE TABLE `engrave_enumgroup` (
  `GroupId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `GroupName` varchar(50) NOT NULL DEFAULT '',
  `SystemIs` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeleteGroup` tinyint(4) NOT NULL,
  PRIMARY KEY (`GroupId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_enumgroup` values('1','货运公司','1','0');");
E_D("replace into `engrave_enumgroup` values('2','重量单位','1','0');");
E_D("replace into `engrave_enumgroup` values('3','购物网站','1','0');");
E_D("replace into `engrave_enumgroup` values('4','','0','0');");

require("../../inc/footer.php");
?>
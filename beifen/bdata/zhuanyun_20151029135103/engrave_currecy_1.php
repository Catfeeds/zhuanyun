<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_currecy`;");
E_C("CREATE TABLE `engrave_currecy` (
  `CId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL DEFAULT '',
  `Code` varchar(10) NOT NULL DEFAULT '',
  `Symbol` varchar(10) NOT NULL DEFAULT '',
  `ExchageRate` double NOT NULL DEFAULT '1',
  `IsDefault` tinyint(3) NOT NULL DEFAULT '0',
  `IsDeleteCurrecy` tinyint(4) NOT NULL,
  PRIMARY KEY (`CId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_currecy` values('1','日元','JPY','JPY','19.78','0','0');");
E_D("replace into `engrave_currecy` values('2','人民币','RMB','￥','1','1','0');");
E_D("replace into `engrave_currecy` values('3','美元','USD','\$','0','0','1');");

require("../../inc/footer.php");
?>
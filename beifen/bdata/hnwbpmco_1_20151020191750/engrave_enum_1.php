<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_enum`;");
E_C("CREATE TABLE `engrave_enum` (
  `EnumId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `GroupId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ParentId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ItemName` varchar(50) NOT NULL DEFAULT '',
  `ItemValue` varchar(50) NOT NULL DEFAULT '',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `Sign` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteEnum` tinyint(4) NOT NULL,
  PRIMARY KEY (`EnumId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_enum` values('3','1','0','DHL','DHL','0','0','1');");
E_D("replace into `engrave_enum` values('4','1','0','Express','Express','0','0','0');");
E_D("replace into `engrave_enum` values('5','2','0','公斤','KG','0','0','0');");
E_D("replace into `engrave_enum` values('6','2','0','LBS','LBS','0','0','0');");
E_D("replace into `engrave_enum` values('7','3','0','亚马逊','亚马逊','0','0','0');");
E_D("replace into `engrave_enum` values('8','3','0','ebay','ebay','0','0','0');");
E_D("replace into `engrave_enum` values('9','3','0','京东','京东','0','0','0');");
E_D("replace into `engrave_enum` values('10','2','0','g','g','0','0','0');");

require("../../inc/footer.php");
?>
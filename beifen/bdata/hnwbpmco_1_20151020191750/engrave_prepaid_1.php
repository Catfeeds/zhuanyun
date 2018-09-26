<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_prepaid`;");
E_C("CREATE TABLE `engrave_prepaid` (
  `PrepaidId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `CardName` varchar(50) NOT NULL DEFAULT '',
  `CoverImage` varchar(200) NOT NULL DEFAULT '',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `ParValue` double unsigned NOT NULL DEFAULT '0',
  `Description` varchar(255) NOT NULL DEFAULT '',
  `IsFreeStorage` int(11) unsigned NOT NULL DEFAULT '0',
  `IsFreePackage` int(11) unsigned NOT NULL DEFAULT '0',
  `IsFreeService` int(11) unsigned NOT NULL DEFAULT '0',
  `Sales` int(11) unsigned NOT NULL DEFAULT '0',
  `Hits` int(11) unsigned NOT NULL DEFAULT '0',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteCard` tinyint(4) NOT NULL,
  PRIMARY KEY (`PrepaidId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_prepaid` values('1','唐僧','/upfiles/images/20130604014727.jpg','1000','3000','sdfasfd','0','0','0','0','0','0','0');");
E_D("replace into `engrave_prepaid` values('2','悟空','/upfiles/images/20130604014823.jpg','2000','5000','sagasgdsd','0','0','0','0','0','0','0');");
E_D("replace into `engrave_prepaid` values('3','猪八戒卡','/EcShop/admin/engraveuploads/image/20141217/20141217100446_24243.jpg','1000','2000','网购','0','0','0','0','0','1','1');");

require("../../inc/footer.php");
?>
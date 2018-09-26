<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_sitemanage`;");
E_C("CREATE TABLE `engrave_sitemanage` (
  `SiteId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) unsigned NOT NULL DEFAULT '0',
  `ParenPath` varchar(50) NOT NULL DEFAULT '',
  `SiteName` varchar(50) NOT NULL DEFAULT '',
  `Description` varchar(200) NOT NULL DEFAULT '',
  `Logo` varchar(200) NOT NULL DEFAULT '',
  `SiteUrl` varchar(200) NOT NULL DEFAULT '',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `shopsiteIsDelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`SiteId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
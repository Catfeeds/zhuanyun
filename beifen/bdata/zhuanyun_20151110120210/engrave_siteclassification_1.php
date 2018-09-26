<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_siteclassification`;");
E_C("CREATE TABLE `engrave_siteclassification` (
  `ClassId` int(12) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(100) DEFAULT NULL,
  `Logo` varchar(200) DEFAULT NULL,
  `Message` longtext,
  `ParentId` int(11) DEFAULT NULL,
  `SortId` int(11) DEFAULT NULL,
  `ClassIsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`ClassId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
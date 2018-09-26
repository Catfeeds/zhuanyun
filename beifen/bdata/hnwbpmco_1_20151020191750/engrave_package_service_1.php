<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_package_service`;");
E_C("CREATE TABLE `engrave_package_service` (
  `pcks_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `pcks_packageid` int(12) DEFAULT '0',
  `pcks_serviceid` int(12) DEFAULT NULL,
  PRIMARY KEY (`pcks_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_package_service` values('1','1','0');");
E_D("replace into `engrave_package_service` values('2','2','12');");
E_D("replace into `engrave_package_service` values('3','3','0');");

require("../../inc/footer.php");
?>
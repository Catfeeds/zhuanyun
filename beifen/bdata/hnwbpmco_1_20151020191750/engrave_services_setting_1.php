<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_services_setting`;");
E_C("CREATE TABLE `engrave_services_setting` (
  `Id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ServiceId` int(11) NOT NULL,
  `WarehouseId` int(11) unsigned NOT NULL DEFAULT '0',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `Unit` int(11) unsigned NOT NULL DEFAULT '0',
  `StatusId` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeleteSetting` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_services_setting` values('1','1','1','0','0','1','0');");
E_D("replace into `engrave_services_setting` values('2','2','3','0.9','1','1','0');");
E_D("replace into `engrave_services_setting` values('4','11','1','200','1','1','0');");
E_D("replace into `engrave_services_setting` values('8','1','3','0.45','0','1','0');");
E_D("replace into `engrave_services_setting` values('9','7','1','12','0','1','0');");
E_D("replace into `engrave_services_setting` values('10','12','2','18','0','1','0');");
E_D("replace into `engrave_services_setting` values('11','12','1','1.1','0','1','0');");
E_D("replace into `engrave_services_setting` values('12','12','3','18','0','1','0');");
E_D("replace into `engrave_services_setting` values('13','7','2','20','0','1','0');");
E_D("replace into `engrave_services_setting` values('14','6','1','0.9','0','1','0');");
E_D("replace into `engrave_services_setting` values('15','6','2','20','0','1','0');");
E_D("replace into `engrave_services_setting` values('16','4','2','100','0','0','0');");
E_D("replace into `engrave_services_setting` values('17','9','1','1','1','1','0');");
E_D("replace into `engrave_services_setting` values('18','5','1','0.00001','1','1','0');");
E_D("replace into `engrave_services_setting` values('19','16','1','1','1','1','0');");
E_D("replace into `engrave_services_setting` values('20','17','1','234','1','1','0');");
E_D("replace into `engrave_services_setting` values('21','17','2','234','0','1','0');");

require("../../inc/footer.php");
?>
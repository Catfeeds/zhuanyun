<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_moduleservice`;");
E_C("CREATE TABLE `engrave_moduleservice` (
  `ModuleId` int(12) NOT NULL AUTO_INCREMENT,
  `ModuleCode` varchar(20) NOT NULL DEFAULT '',
  `ModuleName` varchar(20) NOT NULL,
  `IsDeleteModule` tinyint(4) NOT NULL,
  PRIMARY KEY (`ModuleId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_moduleservice` values('1','order','订单打包','0');");
E_D("replace into `engrave_moduleservice` values('2','branch','分箱','0');");
E_D("replace into `engrave_moduleservice` values('3','storage','合箱','0');");
E_D("replace into `engrave_moduleservice` values('4','value-added','增值服务','0');");

require("../../inc/footer.php");
?>
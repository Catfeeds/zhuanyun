<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `engrave_calculator`;");
E_C("CREATE TABLE `engrave_calculator` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gongshi` text CHARACTER SET utf8 NOT NULL,
  `neirong` text CHARACTER SET utf8 NOT NULL,
  `fangshi` varchar(200) CHARACTER SET utf8 NOT NULL,
  `paixu` int(100) NOT NULL,
  `huilv` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `engrave_calculator` values('1','3*2','1','ems','2','10.11');");
E_D("replace into `engrave_calculator` values('2','1','0','О­МУКНПеБу(SAL)','2','1.00');");
E_D("replace into `engrave_calculator` values('3','1','0','ДЌБу','3','1.00');");
E_D("replace into `engrave_calculator` values('4','1','0','КНПеБу','4','2.00');");

require("../../inc/footer.php");
?>
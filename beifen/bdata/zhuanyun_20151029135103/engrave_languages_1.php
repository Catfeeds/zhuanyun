<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_languages`;");
E_C("CREATE TABLE `engrave_languages` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(255) DEFAULT '',
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_languages` values('1','cs');");
E_D("replace into `engrave_languages` values('2','de');");
E_D("replace into `engrave_languages` values('3','en');");
E_D("replace into `engrave_languages` values('4','es');");
E_D("replace into `engrave_languages` values('5','fi');");
E_D("replace into `engrave_languages` values('6','fr');");
E_D("replace into `engrave_languages` values('7','it');");
E_D("replace into `engrave_languages` values('8','ja');");
E_D("replace into `engrave_languages` values('9','ko');");
E_D("replace into `engrave_languages` values('10','nl');");
E_D("replace into `engrave_languages` values('11','pl');");
E_D("replace into `engrave_languages` values('12','pt');");
E_D("replace into `engrave_languages` values('13','ru');");
E_D("replace into `engrave_languages` values('14','tr');");
E_D("replace into `engrave_languages` values('15','zh-CN');");
E_D("replace into `engrave_languages` values('16','zh-Hk');");

require("../../inc/footer.php");
?>
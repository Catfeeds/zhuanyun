<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_statucode`;");
E_C("CREATE TABLE `engrave_statucode` (
  `code_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '代码ID',
  `code_name` varchar(50) DEFAULT NULL COMMENT '代码名称',
  `code_isdelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_statucode` values('1','发货/出库','0');");
E_D("replace into `engrave_statucode` values('2','中转','0');");
E_D("replace into `engrave_statucode` values('3','派送中','0');");
E_D("replace into `engrave_statucode` values('4','签收成功','0');");
E_D("replace into `engrave_statucode` values('5','签收失败','0');");

require("../../inc/footer.php");
?>
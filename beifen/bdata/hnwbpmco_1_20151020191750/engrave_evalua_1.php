<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_evalua`;");
E_C("CREATE TABLE `engrave_evalua` (
  `eva_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '评价ID',
  `eva_orderid` int(12) DEFAULT '0' COMMENT '订单ID',
  `eva_value` tinyint(4) DEFAULT '0' COMMENT '评价星级（1：优；2：良好；3：差）',
  `eva_message` varchar(200) DEFAULT '' COMMENT '评价信息',
  `eva_delete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`eva_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_evalua` values('1','7','0','配送的相当好哦','0');");
E_D("replace into `engrave_evalua` values('2','8','0','配送的相当好哦','0');");
E_D("replace into `engrave_evalua` values('3','18','0','123','0');");
E_D("replace into `engrave_evalua` values('4','41','0','','0');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_package_track`;");
E_C("CREATE TABLE `engrave_package_track` (
  `tr_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '跟踪ID',
  `tr_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  `tr_expressnumber` varchar(200) DEFAULT NULL COMMENT '运单编号',
  `tr_message` varchar(50) DEFAULT NULL COMMENT '跟踪信息',
  `tr_statuscode` tinyint(4) DEFAULT NULL COMMENT '状态码',
  `tr_intime` int(12) DEFAULT NULL COMMENT '跟踪时间',
  `tr_operatorid` int(12) DEFAULT NULL COMMENT '系统操作人ID',
  `tr_isdelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_package_track` values('1','1','12312313','订单已至机场，等待登机','1','1427784782','1','0');");
E_D("replace into `engrave_package_track` values('2','3','15032600024','订单已至国内海关，等待处理','1','1427788321','1','0');");
E_D("replace into `engrave_package_track` values('3','3','15032600024','订单已至国内海关，等待处理','2','1427788370','1','0');");
E_D("replace into `engrave_package_track` values('4','1','','订单已至机场，等待登机','1','1437821944','1','0');");
E_D("replace into `engrave_package_track` values('5','22','undefined','','2','1446985041','1','0');");

require("../../inc/footer.php");
?>
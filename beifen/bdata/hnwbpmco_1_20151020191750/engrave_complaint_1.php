<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_complaint`;");
E_C("CREATE TABLE `engrave_complaint` (
  `cmp_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '有问必答ID',
  `cmp_title` varchar(200) DEFAULT NULL COMMENT '标题',
  `cmp_expressnumber` varchar(100) DEFAULT NULL COMMENT '相关转运单号（包裹单号）',
  `cmp_orderno` varchar(100) DEFAULT NULL COMMENT '订单单号',
  `cmp_deliverynumber` varchar(100) DEFAULT NULL COMMENT '发货单号',
  `cmp_remark` varchar(500) DEFAULT NULL COMMENT '问题描述',
  `cmp_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `cmp_parentid` int(12) DEFAULT NULL COMMENT '父ID',
  `cmp_time` int(12) DEFAULT NULL COMMENT '时间',
  `cmp_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`cmp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_complaint` values('1','1','123','123','123','1234','52','0','1422788205','1');");
E_D("replace into `engrave_complaint` values('2','ts12','122','22','32','42','53','0','1422791777','0');");
E_D("replace into `engrave_complaint` values('3','asfasf1','121','121','121','121','52','0','1422791877','1');");
E_D("replace into `engrave_complaint` values('4','1','123','123','123','sdfafasfasfasfasf','1','1','1422788205','0');");
E_D("replace into `engrave_complaint` values('5','wqerqewrq','1','1','1','1','52','0','1422838511','1');");
E_D("replace into `engrave_complaint` values('6','safa','asdfa','adf','adf','123','52','0','1422838588','0');");
E_D("replace into `engrave_complaint` values('7','123','1231','123','123','123','1','1','1422863617','0');");
E_D("replace into `engrave_complaint` values('8','tt','1','2','3','4','1','1','1422863678','0');");
E_D("replace into `engrave_complaint` values('9','safa1234','1','2','3','4','1','1','1422863748','0');");
E_D("replace into `engrave_complaint` values('10','','','','','','1','6','1423366565','0');");

require("../../inc/footer.php");
?>
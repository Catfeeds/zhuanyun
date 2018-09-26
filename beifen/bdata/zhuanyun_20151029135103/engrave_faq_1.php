<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_faq`;");
E_C("CREATE TABLE `engrave_faq` (
  `faq_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '有问必答ID',
  `faq_title` varchar(200) DEFAULT NULL COMMENT '标题',
  `faq_expressnumber` varchar(100) DEFAULT NULL COMMENT '相关转运单号（包裹单号）',
  `faq_orderno` varchar(100) DEFAULT NULL COMMENT '订单单号',
  `faq_deliverynumber` varchar(100) DEFAULT NULL COMMENT '发货单号',
  `faq_remark` varchar(500) DEFAULT NULL COMMENT '问题描述',
  `faq_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `faq_parentid` int(12) DEFAULT NULL COMMENT '父ID',
  `faq_time` int(12) DEFAULT NULL COMMENT '时间',
  `faq_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_faq` values('1','什么','112154542154','13254321','32184','不好','31700','0','1437021014','0');");
E_D("replace into `engrave_faq` values('2','','','','','不好意思','1','1','1437021049','0');");
E_D("replace into `engrave_faq` values('3','20150501153058','20150501153058','CI075905549JP','','帮忙查一下','31705','0','1438734729','0');");

require("../../inc/footer.php");
?>
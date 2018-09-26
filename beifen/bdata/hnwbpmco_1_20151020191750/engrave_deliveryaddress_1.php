<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_deliveryaddress`;");
E_C("CREATE TABLE `engrave_deliveryaddress` (
  `da_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键：ID',
  `da_userid` int(12) DEFAULT NULL COMMENT '用户ID:外键',
  `da_name` varchar(255) DEFAULT NULL COMMENT '地址名称',
  `da_consignee` varchar(50) DEFAULT NULL COMMENT '收货人',
  `da_consigneetelephone` varchar(50) DEFAULT NULL COMMENT '收货人电话',
  `da_sparetelephone` varchar(50) DEFAULT NULL COMMENT '备用电话',
  `da_country` int(12) DEFAULT NULL COMMENT '国家',
  `da_province` int(12) DEFAULT NULL COMMENT '省',
  `da_city` int(12) DEFAULT NULL COMMENT '城市',
  `da_address` varchar(500) DEFAULT NULL COMMENT '收货地址',
  `da_zipcode` varchar(50) DEFAULT NULL COMMENT '邮编',
  `da_remark` varchar(500) DEFAULT NULL COMMENT '备注信息',
  `da_identitycard` varchar(100) DEFAULT NULL COMMENT '身份证号',
  `da_identitycardfront` varchar(500) DEFAULT NULL COMMENT '身份证正面',
  `da_identitycardbehind` varchar(500) DEFAULT NULL COMMENT '身份证反面',
  `da_identityassemble` varchar(500) DEFAULT NULL COMMENT '身份证复印件组合',
  `da_attach` varchar(500) DEFAULT NULL COMMENT '其它补充证明文件',
  `da_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`da_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
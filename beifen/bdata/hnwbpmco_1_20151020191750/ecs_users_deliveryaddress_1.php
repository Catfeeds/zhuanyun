<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_users_deliveryaddress`;");
E_C("CREATE TABLE `ecs_users_deliveryaddress` (
  `da_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键：ID',
  `da_userid` int(12) DEFAULT NULL COMMENT '用户ID:外键',
  `da_name` varchar(255) DEFAULT NULL COMMENT '地址名称',
  `da_consignee` varchar(50) DEFAULT NULL COMMENT '收货人',
  `da_consigneetelephone` varchar(50) DEFAULT NULL COMMENT '收货人电话',
  `da_sparetelephone` varchar(50) DEFAULT NULL COMMENT '备用电话',
  `da_country` int(12) DEFAULT NULL COMMENT '国家',
  `da_province` int(12) DEFAULT NULL COMMENT '省',
  `da_city` int(12) DEFAULT NULL COMMENT '城市',
  `da_address` varchar(500) DEFAULT '' COMMENT '收货地址',
  `da_zipcode` varchar(50) DEFAULT NULL COMMENT '邮编',
  `da_remark` varchar(500) DEFAULT NULL COMMENT '备注信息',
  `da_identitycard` varchar(100) DEFAULT NULL COMMENT '身份证号',
  `da_identitycardfront` varchar(500) DEFAULT NULL COMMENT '身份证正面',
  `da_identitycardbehind` varchar(500) DEFAULT NULL COMMENT '身份证反面',
  `da_email` varchar(50) DEFAULT NULL COMMENT '邮件',
  `da_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  `da_identityassemble` varchar(500) DEFAULT '' COMMENT '身份证组合',
  `da_attach` varchar(500) DEFAULT NULL COMMENT '证明',
  `da_isvalidate` tinyint(4) DEFAULT '0' COMMENT '用户地址是否验证通过',
  `da_adminremark` varchar(500) DEFAULT '' COMMENT '系统管理员备注',
  PRIMARY KEY (`da_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='收货地址'");
E_D("replace into `ecs_users_deliveryaddress` values('1','52','2211','22211','223','224','1','36000000','36030000','123','226000','227','228','','','','0',NULL,'','1',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('2','52','张兴朋','张兴朋','2','3','1','51000000','51190000','北京市石景山区诚海大厦','376300','1227','1228','/engraveweb/engraveuploads/image/20150115/20150115043835_50459.png','/engraveweb/engraveuploads/image/20150212/20150212155318_95146.png',NULL,'0',NULL,'/engraveweb/engraveuploads/image/20150212/image/20150212/20150212155318_76000.png','0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('3','52','马宏图','马宏图','223','224','1','4','6','225','276300','227','228','/engraveweb/engraveuploads/image/20150115/20150115065910_67930.png','',NULL,'1',NULL,NULL,'0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('4','52','2211','闫启超','223','224','1','4','6','225','276300','227','228','/engraveweb/engraveuploads/image/20150129/20150129075523_19569.jpg','/engraveweb/engraveuploads/image/20150129/20150129075523_19569.jpg',NULL,'1',NULL,NULL,'0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('5','52','1','张浩','3','4','1','4','6','1','276300','1','1','/engraveweb/engraveuploads/image/20150129/20150129080208_73031.png','/engraveweb/engraveuploads/image/20150129/20150129080208_73031.png',NULL,'1',NULL,NULL,'0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('6','52','zxpsafasa','陈光','2','3','1','33000000','33040000','4','276000','6','7','','',NULL,'0',NULL,'','0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('7','52','1','2','3','4','1','4','6','5','276300','','','/engraveweb/engraveuploads/image/20150205/20150205062036_34793.png','/engraveweb/engraveuploads/image/20150205/image/20150205/20150205062036_30917.png',NULL,'1',NULL,NULL,'0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('8','52','123','12','12','12','1','4','6','123123','100010','123','123123123123123','/engraveweb/engraveuploads/image/20150212/20150212155530_77247.png','/engraveweb/engraveuploads/image/20150212/image/20150212/20150212155530_78238.png',NULL,'1',NULL,'/engraveweb/engraveuploads/image/20150212/20150212155641_13705.png','0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('9','67','221','张兴朋','青岛','15801177781','1','4','6','青岛市四方区','276100','青岛市四方区','371321198802134877','/engraveweb/engraveuploads/image/20150226/20150226065231_32914.png','/engraveweb/engraveuploads/image/20150226/image/20150226/20150226065231_23018.png',NULL,'0',NULL,'','0',NULL);");
E_D("replace into `ecs_users_deliveryaddress` values('10','52','123','123','123','123','1','53000000','53060000','123','276300','','','/engraveweb/engraveuploads/image/20150304/20150304110032_63011.jpg','/engraveweb/engraveuploads/image/20150304/image/20150304/20150304110032_21409.jpg',NULL,'0','/engraveweb/engraveuploads/image/20150402/20150402051559_24460.jpg','','0','身份证不明确');");
E_D("replace into `ecs_users_deliveryaddress` values('11','52','测试数据','收货人','地址名称','15801177781','1','41000000','41150000','收货地址具体的地址','276300','备注信息','371321188877232222','/engraveweb/engraveuploads/image/20150402/20150402052346_46625.png','/engraveweb/engraveuploads/image/20150402/20150402052346_77510.png',NULL,'0',NULL,'','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('12','52','地址名称1','收货人1','15801177782','0539726536','1','34000000','34140000','收货地址具体的地址','276300','具体信息','371321197767654322','/engraveweb/engraveuploads/image/20150402/20150402052816_77593.png','/engraveweb/engraveuploads/image/20150402/20150402052816_96272.png',NULL,'0','/engraveweb/engraveuploads/image/20150402/20150402052816_94682.jpg','','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('13','52','1','1231','1231','123','1','43000000','43310000','1','276300','1','1','/engraveweb/engraveuploads/image/20150407/20150407033442_40712.png','/engraveweb/engraveuploads/image/20150407/20150407033442_64357.jpg',NULL,'0','/engraveweb/engraveuploads/image/20150407/20150407033442_41541.jpg','','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('14','52','1','2','3','4','1','42000000','42280000','5','276300','6','7','/engraveweb/engraveuploads/image/20150407/20150407040530_34782.jpg','/engraveweb/engraveuploads/image/20150407/20150407040530_80345.png',NULL,'0','/engraveweb/engraveuploads/image/20150407/20150407040530_89686.jpg','','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('15','52','&quot;','1','2','3','1','35000000','35030000','4','276300','5','6','/engraveweb/engraveuploads/image/20150407/20150407053310_22216.png','/engraveweb/engraveuploads/image/20150407/20150407042902_80331.png',NULL,'0','/engraveweb/engraveuploads/image/20150407/20150407053311_70537.jpg','','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('16','31686','地址名称','收货人','','15801177782','1','0','0','山东省青岛市四方区','','','371321188877232222','','','','0','/engraveweb/engraveuploads/image/20150420/20150420093759_29912.jpg','','1','');");
E_D("replace into `ecs_users_deliveryaddress` values('17','31686','地址名称1','收货人1','15801177782','','1','0','0','青岛','','','','/engraveweb/engraveuploads/image/20150421/20150421104956_51374.png','/engraveweb/engraveuploads/image/20150421/20150421104956_19978.png',NULL,'0','/engraveweb/engraveuploads/image/20150421/20150421104956_38888.jpg','','1','');");
E_D("replace into `ecs_users_deliveryaddress` values('18','31686','地址名称2','收货人2','15801177782','','1','0','0','地址名称2','','','','/engraveweb/engraveuploads/image/20150421/20150421105224_44178.png','/engraveweb/engraveuploads/image/20150421/20150421105224_84984.png',NULL,'0','/engraveweb/engraveuploads/image/20150421/20150421105226_76428.jpg','','1','');");
E_D("replace into `ecs_users_deliveryaddress` values('19','31698','123','阿斯顿发1','87879108','13942040811','1','11000000','11010100','而沃尔沃1-5-601','100036','','210213199103282016','','','','0','/engraveuploads/image/20150715/20150715102048_48798.jpg','','1','');");
E_D("replace into `ecs_users_deliveryaddress` values('20','31700','加','赵玉娟','13942040811','','1','21000000','21020000','金州区','116100','','210213199103282016','/engraveuploads/image/20150716/20150716040512_90153.jpg','/engraveuploads/image/20150716/20150716040512_85794.jpg',NULL,'0','/engraveuploads/image/20150716/20150716040512_13630.jpg','/engraveuploads/image/20150716/20150716040512_53651.jpg','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('21','31699','123','按时','123213132665','','1','11000000','11010100','阿斯顿发斯蒂芬','131233','','','/engraveuploads/image/20150716/20150716045139_35631.png','/engraveuploads/image/20150716/20150716045139_19571.png',NULL,'0','/engraveuploads/image/20150716/20150716045140_67705.jpg','','0','');");
E_D("replace into `ecs_users_deliveryaddress` values('22','31700','123','阿斯蒂芬','123154','32154','1','13000000','13020000','好的','116111','','','/engraveuploads/image/20150717/20150717054906_86945.jpg','/engraveuploads/image/20150717/20150717054906_28621.jpg',NULL,'0','/engraveuploads/image/20150717/20150717054906_17981.jpg','/engraveuploads/image/20150717/20150717054906_54310.jpg','1','');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_account`;");
E_C("CREATE TABLE `ecs_user_account` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(12) unsigned NOT NULL DEFAULT '0',
  `admin_user` int(12) NOT NULL COMMENT '系统管理员用户ID',
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL DEFAULT '0',
  `paid_time` int(10) NOT NULL DEFAULT '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL DEFAULT '0',
  `payment` int(12) NOT NULL COMMENT '支付方式ID',
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  `isexchange` tinyint(4) DEFAULT '0' COMMENT '是否兑换',
  `acc_tradenumber` varchar(100) DEFAULT '' COMMENT '交易账号（第三方）',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_account` values('1','52','1','100.00','1423450534','1423450534','交易号 2015020869869202\r\n商户订单号 2015020852','','0','1','1','1','0','');");
E_D("replace into `ecs_user_account` values('2','52','1','100.00','1423450648','1423450664','商户订单号 2015020852','商户订单号 2015020852','0','1','1','1','0','');");
E_D("replace into `ecs_user_account` values('3','52','1','100.00','1423450704','1423450704','商户订单号 2015020852','商户订单号 2015020852','0','1','0','1','0','');");
E_D("replace into `ecs_user_account` values('4','52','1','100.00','1423450727','1423450727','100','100','0','1','2','0','0','');");
E_D("replace into `ecs_user_account` values('5','52','1','500.00','1423450778','1423450778','商户订单号 2015020852','商户订单号 2015020852','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('6','52','0','0.01','1423459228','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('7','52','0','0.01','1423459457','0','','','0','1','0','1','0','');");
E_D("replace into `ecs_user_account` values('8','52','0','0.01','1423459489','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('9','52','0','0.01','1423459498','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('10','52','0','0.01','1423459506','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('11','52','0','0.01','1423459918','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('12','0','0','0.00','1423463341','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('13','0','0','0.00','1423463374','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('14','52','0','0.00','1423463452','0','','0','1','1','0','1','0','');");
E_D("replace into `ecs_user_account` values('15','52','0','0.00','1423463489','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('16','52','0','0.00','1423463504','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('17','52','0','0.00','1423463545','0','','0','1','1','0','1','0','');");
E_D("replace into `ecs_user_account` values('18','52','0','0.00','1423463560','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('19','52','0','0.01','1423481104','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('20','52','0','0.01','1423481112','0','','','0','1','0','0','1','');");
E_D("replace into `ecs_user_account` values('21','52','0','0.01','1423481183','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('22','52','0','0.01','1423481213','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('23','52','0','0.01','1423481213','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('24','52','0','0.01','1423481310','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('25','52','0','0.01','1423481331','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('26','52','0','0.00','1423707447','0','','0','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('27','52','0','1000.00','1423707561','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('28','52','0','1000.00','1423707691','0','','1100000','1','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('29','52','0','0.01','1424473528','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('30','52','0','0.01','1424477579','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('31','52','0','5000.00','1425388905','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('32','52','0','5000.00','1425388929','1425388951','充值成功','','0','1','1','0','1','');");
E_D("replace into `ecs_user_account` values('33','88','0','5000.50','1425863782','0','','5000.50','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('34','88','0','100.00','1425864568','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('35','88','0','100.00','1425864699','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('36','88','0','0.01','1425864848','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('37','52','0','5000.00','1428025773','1428025801','成功','','0','1','1','0','1','');");
E_D("replace into `ecs_user_account` values('38','52','0','5000.00','1428025882','1428025895','5000','','0','1','1','0','1','');");
E_D("replace into `ecs_user_account` values('39','52','0','5000.00','1428026154','1428026180','成功','','0','1','1','0','1','');");
E_D("replace into `ecs_user_account` values('40','31686','0','5000.00','1431044150','1431044363','完成','','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('41','31686','0','5000.00','1431044771','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('42','31698','0','1000.00','1436964993','1436965003','123','','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('43','31700','0','1000.00','1437006081','1437017477','好的','','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('44','31699','0','1000.00','1437013341','1437013353','123','','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('45','31698','0','100.00','1437795154','0','提现','0','1','0','0','0','0','');");
E_D("replace into `ecs_user_account` values('46','31698','0','123.00','1437797379','0','','0','1','0','0','0','0','');");
E_D("replace into `ecs_user_account` values('47','31698','0','0.00','1437797780','0','','0','1','0','0','0','0','');");
E_D("replace into `ecs_user_account` values('48','31698','0','1.00','1437798591','0','','','0','3','0','0','0','');");
E_D("replace into `ecs_user_account` values('49','31698','0','1.00','1437798608','1437798741','123','','0','1','1','0','1','');");
E_D("replace into `ecs_user_account` values('50','31698','0','1.00','1437997353','1437997353','1','1','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('51','31698','0','6.00','1437998166','0','','','0','3','0','0','0','');");
E_D("replace into `ecs_user_account` values('52','31698','0','1.00','1438001189','1438001189','asdf','','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('53','31698','0','1.00','1438001614','1438001614','1','1','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('54','31698','0','100.00','1438001852','1438001852','1','1','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('55','31698','0','1000.00','1438001890','1438001890','1','1','0','1','1','0','0','');");
E_D("replace into `ecs_user_account` values('56','31698','0','1.00','1438002725','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('57','31698','0','100.00','1438070403','1438080319','啊啊','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('58','31698','0','990.00','1438080044','1438080060','zhifuhao','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('59','31698','0','0.01','1438502070','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('60','31698','0','0.01','1438502328','1438502373','您的充值申请已通过支付宝接口成功入款！支付宝交易号：2015080200001000590057758175','','0','1','1','0','0','2015080200001000590057758175');");
E_D("replace into `ecs_user_account` values('61','31698','0','10.00','1438566662','1438566792','123','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('62','31698','0','11.00','1438599064','0','','','0','1','0','0','0','');");
E_D("replace into `ecs_user_account` values('63','31698','0','1.00','1438602728','1438602904','eee','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('64','31698','0','100.00','1438604927','0','','','0','2','0','0','0','');");
E_D("replace into `ecs_user_account` values('65','31698','0','200.00','1438604930','1438604945','123','','0','2','1','0','0','');");
E_D("replace into `ecs_user_account` values('66','31698','0','1.00','1438606497','1438607009','yyyy','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('67','31698','0','10.00','1438606954','0','','0','1','0','0','0','0','');");
E_D("replace into `ecs_user_account` values('68','31698','0','20.00','1438606964','1438606993','１２３','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('69','31698','0','10.00','1438607051','1438607063','3333','0','1','0','1','0','0','');");
E_D("replace into `ecs_user_account` values('70','31707','0','0.00','1445320201','0','','0','1','0','0','0','0','');");

require("../../inc/footer.php");
?>
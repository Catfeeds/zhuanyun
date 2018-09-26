<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_ordergoods`;");
E_C("CREATE TABLE `engrave_ordergoods` (
  `ordg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `ordg_waybillid` int(12) DEFAULT NULL COMMENT '运单',
  `ordg_goodtype` int(12) DEFAULT NULL COMMENT '物品类型',
  `ordg_goodname` varchar(25) DEFAULT NULL COMMENT '物品名称',
  `ordg_goodnumber` int(12) DEFAULT NULL COMMENT '物品数量',
  `ordg_goodprice` decimal(12,2) DEFAULT NULL COMMENT '物品价格',
  `ordg_delete` tinyint(4) DEFAULT NULL COMMENT '删除标记',
  PRIMARY KEY (`ordg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_ordergoods` values('1','1','4','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('2','3','5','123','12','123.00','0');");
E_D("replace into `engrave_ordergoods` values('3','4','5','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('4','6','5','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('5','7','4','tt','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('6','8','4','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('7','9','5','123','123','122.00','0');");
E_D("replace into `engrave_ordergoods` values('8','10','4','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('9','11','5','四世同堂','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('10','12','5','123','123','12.00','0');");
E_D("replace into `engrave_ordergoods` values('11','12','4','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('12','13','4','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('13','14','5','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('14','15','5','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('15','16','4','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('16','17','5','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('17','18','5','12','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('18','19','5','12','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('19','20','4','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('20','21','4','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('21','22','3','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('22','23','2','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('23','24','4','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('24','25','4','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('25','25','5','1','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('26','25','3','2','1','3000.00','0');");
E_D("replace into `engrave_ordergoods` values('27','25','3','3','1','4000.00','0');");
E_D("replace into `engrave_ordergoods` values('28','26','4','足球','1','3000.00','0');");
E_D("replace into `engrave_ordergoods` values('29','27','4','乒乓球','20','200.00','0');");
E_D("replace into `engrave_ordergoods` values('30','28','2','篮球','1','5000.00','0');");
E_D("replace into `engrave_ordergoods` values('31','29','2','牡丹','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('32','30','4','月季','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('33','30','3','玫瑰','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('34','31','5','喇叭','1','2300.00','0');");
E_D("replace into `engrave_ordergoods` values('35','32','5','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('36','33','4','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('37','34','4','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('38','35','5','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('39','36','3','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('40','37','4','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('41','38','2','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('42','39','4','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('43','40','4','1','1','1000.00','0');");
E_D("replace into `engrave_ordergoods` values('44','41','5','1','1','100.00','0');");
E_D("replace into `engrave_ordergoods` values('45','42','5','11','1','100.00','0');");
E_D("replace into `engrave_ordergoods` values('46','43','4','足球','1','2000.00','0');");
E_D("replace into `engrave_ordergoods` values('47','44','4','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('48','45','4','袜子','12','369.00','0');");
E_D("replace into `engrave_ordergoods` values('49','46','4','袜子','123','100.00','0');");
E_D("replace into `engrave_ordergoods` values('50','47','4','袜子','25','360.00','0');");
E_D("replace into `engrave_ordergoods` values('51','48','4','视频','1','1.00','0');");
E_D("replace into `engrave_ordergoods` values('52','48','4','吃的','1','1200.00','0');");
E_D("replace into `engrave_ordergoods` values('53','49','4','包子','1','200.00','0');");
E_D("replace into `engrave_ordergoods` values('54','50','4','waz','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('55','51','4','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('56','52','4','袜子','12','12.00','0');");
E_D("replace into `engrave_ordergoods` values('57','53','4','足球','1','212.00','0');");
E_D("replace into `engrave_ordergoods` values('58','53','4','袜子','12','12323.00','0');");
E_D("replace into `engrave_ordergoods` values('59','54','4','77','7','7.00','0');");
E_D("replace into `engrave_ordergoods` values('60','55','4','烟','1231','123.00','0');");
E_D("replace into `engrave_ordergoods` values('61','55','4','袜子','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('62','55','4','舒燕','12','123.00','0');");
E_D("replace into `engrave_ordergoods` values('63','55','4','林秀','1','123.00','0');");
E_D("replace into `engrave_ordergoods` values('64','55','4','徐倩卉','3','56.00','0');");
E_D("replace into `engrave_ordergoods` values('65','56','3','123','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('66','57','4','玩的','1','321.00','0');");
E_D("replace into `engrave_ordergoods` values('67','58','4','商品1','123','12.00','0');");
E_D("replace into `engrave_ordergoods` values('68','58','4','商品2','123','123.00','0');");
E_D("replace into `engrave_ordergoods` values('69','58','4','舒颜','1','1.00','0');");
E_D("replace into `engrave_ordergoods` values('70','58','4','林秀','1','1.00','0');");
E_D("replace into `engrave_ordergoods` values('71','59','4','1','1','1.00','0');");

require("../../inc/footer.php");
?>
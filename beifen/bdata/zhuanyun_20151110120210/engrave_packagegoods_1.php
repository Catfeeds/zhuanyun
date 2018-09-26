<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_packagegoods`;");
E_C("CREATE TABLE `engrave_packagegoods` (
  `pckg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '包裹内物品ID',
  `pckg_packageid` int(12) DEFAULT '0' COMMENT '包裹ID',
  `pckg_name` varchar(200) DEFAULT '' COMMENT '包裹内：商品名称',
  `pckg_amount` int(12) DEFAULT '0' COMMENT '包裹内：物品数量',
  `pckg_unitprice` decimal(12,2) DEFAULT '0.00' COMMENT '单价',
  `pckg_totalprice` decimal(12,2) DEFAULT '0.00' COMMENT '总价',
  PRIMARY KEY (`pckg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_packagegoods` values('1','1','12','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('2','2','1','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('3','3','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('4','4','123','123','12.00','1476.00');");
E_D("replace into `engrave_packagegoods` values('5','5','21312','123','12.00','1476.00');");
E_D("replace into `engrave_packagegoods` values('6','5','','0','0.00','0.00');");
E_D("replace into `engrave_packagegoods` values('7','5','','0','0.00','0.00');");
E_D("replace into `engrave_packagegoods` values('8','5','','0','0.00','0.00');");
E_D("replace into `engrave_packagegoods` values('9','7','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('10','8','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('11','9','ttt','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('12','10','123','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('13','11','123','12','11.00','132.00');");
E_D("replace into `engrave_packagegoods` values('14','12','','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('16','14','12','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('17','15','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('18','23','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('19','24','','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('20','28','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('21','29','1231','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('22','30','123','121','121.00','14641.00');");
E_D("replace into `engrave_packagegoods` values('23','31','123','12','1212.00','14544.00');");
E_D("replace into `engrave_packagegoods` values('24','32','12','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('25','33','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('26','34','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('27','35','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('28','36','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('29','37','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('30','39','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('31','40','1','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('32','40','2','1','3000.00','3000.00');");
E_D("replace into `engrave_packagegoods` values('33','40','3','1','4000.00','4000.00');");
E_D("replace into `engrave_packagegoods` values('34','41','足球','1','5000.00','5000.00');");
E_D("replace into `engrave_packagegoods` values('35','42','足球','1','3000.00','3000.00');");
E_D("replace into `engrave_packagegoods` values('36','42','乒乓球','20','200.00','4000.00');");
E_D("replace into `engrave_packagegoods` values('37','42','篮球','1','5000.00','5000.00');");
E_D("replace into `engrave_packagegoods` values('38','43','牡丹','20','200.00','4000.00');");
E_D("replace into `engrave_packagegoods` values('39','43','月季','20','2240.00','44800.00');");
E_D("replace into `engrave_packagegoods` values('40','43','玫瑰','20','500.00','10000.00');");
E_D("replace into `engrave_packagegoods` values('41','43','喇叭','20','100.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('42','44','邮件','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('43','45','1','1','100.00','100.00');");
E_D("replace into `engrave_packagegoods` values('44','46','1','1','1000.00','1000.00');");
E_D("replace into `engrave_packagegoods` values('45','47','1','1','1000.00','1000.00');");
E_D("replace into `engrave_packagegoods` values('46','48','1','1','100.00','100.00');");
E_D("replace into `engrave_packagegoods` values('47','49','11','1','100.00','100.00');");
E_D("replace into `engrave_packagegoods` values('48','50','足球','1','2000.00','2000.00');");
E_D("replace into `engrave_packagegoods` values('49','51','123','123','123.00','15129.00');");
E_D("replace into `engrave_packagegoods` values('50','53','视频','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('51','54','吃的','1','1200.00','1200.00');");
E_D("replace into `engrave_packagegoods` values('52','55','玩的','1','321.00','321.00');");
E_D("replace into `engrave_packagegoods` values('53','60','包子','1','200.00','200.00');");
E_D("replace into `engrave_packagegoods` values('54','62','大米','1','200.00','200.00');");
E_D("replace into `engrave_packagegoods` values('55','67','袜子','12','12.00','144.00');");
E_D("replace into `engrave_packagegoods` values('56','72','袜子','12','123.00','1476.00');");
E_D("replace into `engrave_packagegoods` values('57','72','酒','12','123.00','1476.00');");
E_D("replace into `engrave_packagegoods` values('58','76','吃的','2','200.00','400.00');");
E_D("replace into `engrave_packagegoods` values('59','77','吃的','1','200.00','200.00');");
E_D("replace into `engrave_packagegoods` values('60','79','刚的是个电饭锅','2','14343.00','28686.00');");
E_D("replace into `engrave_packagegoods` values('61','80','789','789','789.00','622521.00');");
E_D("replace into `engrave_packagegoods` values('62','0','小苹果','1','22.00','22.00');");
E_D("replace into `engrave_packagegoods` values('63','0','鞋子','1','22.00','22.00');");
E_D("replace into `engrave_packagegoods` values('64','0','东西','1','44.00','44.00');");
E_D("replace into `engrave_packagegoods` values('65','81','东西','1','543.00','543.00');");
E_D("replace into `engrave_packagegoods` values('66','0','鞋子3','1','47.00','47.00');");
E_D("replace into `engrave_packagegoods` values('67','0','鞋子','1','43.00','43.00');");
E_D("replace into `engrave_packagegoods` values('68','82','鞋子34','1','453.00','453.00');");
E_D("replace into `engrave_packagegoods` values('69','0','鞋子31','1','32.00','32.00');");
E_D("replace into `engrave_packagegoods` values('70','0','东西1','1','56.00','56.00');");
E_D("replace into `engrave_packagegoods` values('71','0','鞋子32','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('72','83','鞋子21','1','3432.00','3432.00');");
E_D("replace into `engrave_packagegoods` values('73','0','东西','1','32.00','32.00');");
E_D("replace into `engrave_packagegoods` values('74','0','东西1','1','21.00','21.00');");
E_D("replace into `engrave_packagegoods` values('75','0','东西','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('76','84','东西','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('77','0','东西2','2','2.00','4.00');");
E_D("replace into `engrave_packagegoods` values('78','0','东西2','1','2.00','2.00');");
E_D("replace into `engrave_packagegoods` values('79','0','东西','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('80','85','东西12','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('81','86','东西','1','2.00','2.00');");
E_D("replace into `engrave_packagegoods` values('82','87','东西','1','1.00','1.00');");
E_D("replace into `engrave_packagegoods` values('83','88','名称','1','22.00','22.00');");

require("../../inc/footer.php");
?>
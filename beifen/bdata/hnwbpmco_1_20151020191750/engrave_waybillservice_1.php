<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_waybillservice`;");
E_C("CREATE TABLE `engrave_waybillservice` (
  `ords_id` int(12) NOT NULL AUTO_INCREMENT,
  `ords_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  `ords_serviceid` int(12) DEFAULT NULL COMMENT '服务id',
  `ords_isdelete` tinyint(4) DEFAULT NULL COMMENT '删除标记',
  PRIMARY KEY (`ords_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_waybillservice` values('1','11','1','0');");
E_D("replace into `engrave_waybillservice` values('2','12','1','0');");
E_D("replace into `engrave_waybillservice` values('3','13','1','0');");
E_D("replace into `engrave_waybillservice` values('4','14','1','0');");
E_D("replace into `engrave_waybillservice` values('5','15','1','0');");
E_D("replace into `engrave_waybillservice` values('6','16','1','0');");
E_D("replace into `engrave_waybillservice` values('7','3','1','0');");
E_D("replace into `engrave_waybillservice` values('8','5','1','0');");
E_D("replace into `engrave_waybillservice` values('9','6','1','0');");
E_D("replace into `engrave_waybillservice` values('10','33','10','0');");
E_D("replace into `engrave_waybillservice` values('11','33','13','0');");
E_D("replace into `engrave_waybillservice` values('12','33','15','0');");
E_D("replace into `engrave_waybillservice` values('13','34','10','0');");
E_D("replace into `engrave_waybillservice` values('14','34','13','0');");
E_D("replace into `engrave_waybillservice` values('15','34','15','0');");
E_D("replace into `engrave_waybillservice` values('16','35','10','0');");
E_D("replace into `engrave_waybillservice` values('17','35','13','0');");
E_D("replace into `engrave_waybillservice` values('18','35','15','0');");
E_D("replace into `engrave_waybillservice` values('19','36','10','0');");
E_D("replace into `engrave_waybillservice` values('20','36','13','0');");
E_D("replace into `engrave_waybillservice` values('21','36','15','0');");
E_D("replace into `engrave_waybillservice` values('22','37','10','0');");
E_D("replace into `engrave_waybillservice` values('23','37','13','0');");
E_D("replace into `engrave_waybillservice` values('24','37','15','0');");
E_D("replace into `engrave_waybillservice` values('25','40','10','0');");
E_D("replace into `engrave_waybillservice` values('26','40','13','0');");
E_D("replace into `engrave_waybillservice` values('27','11','10','0');");
E_D("replace into `engrave_waybillservice` values('28','11','13','0');");
E_D("replace into `engrave_waybillservice` values('29','13','10','0');");
E_D("replace into `engrave_waybillservice` values('30','26','8','0');");
E_D("replace into `engrave_waybillservice` values('31','28','2','0');");
E_D("replace into `engrave_waybillservice` values('32','35','14','0');");
E_D("replace into `engrave_waybillservice` values('33','41','4','0');");
E_D("replace into `engrave_waybillservice` values('34','41','11','0');");
E_D("replace into `engrave_waybillservice` values('35','41','14','0');");
E_D("replace into `engrave_waybillservice` values('36','44','1','0');");
E_D("replace into `engrave_waybillservice` values('37','47','16','0');");
E_D("replace into `engrave_waybillservice` values('38','49','4','0');");
E_D("replace into `engrave_waybillservice` values('39','49','14','0');");

require("../../inc/footer.php");
?>
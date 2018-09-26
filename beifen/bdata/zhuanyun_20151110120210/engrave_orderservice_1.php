<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_orderservice`;");
E_C("CREATE TABLE `engrave_orderservice` (
  `RecordId` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '包裹增值服务ID',
  `RecordNo` varchar(50) NOT NULL DEFAULT '',
  `ItemId` int(11) unsigned NOT NULL DEFAULT '0',
  `ItemType` int(11) unsigned NOT NULL DEFAULT '0',
  `HouseId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '仓库ID',
  `ServiceId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '服务ID',
  `ShippingOrder` varchar(50) NOT NULL DEFAULT '' COMMENT '订单号',
  `Weight` double(2,0) unsigned NOT NULL DEFAULT '0' COMMENT '重量',
  `ServicePrice` double(2,0) unsigned NOT NULL DEFAULT '0' COMMENT '服务费用',
  `IsPhoto` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否有图片',
  `Description` varchar(255) NOT NULL DEFAULT '' COMMENT '用户备注',
  `Attach` longtext COMMENT '附件',
  `UserId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `Tel` varchar(15) NOT NULL DEFAULT '' COMMENT '电话',
  `AddTime` int(11) DEFAULT '0' COMMENT '添加时间',
  `CheckTime` int(11) DEFAULT '0' COMMENT '系统管理员处理时间',
  `AdminId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '系统管理员ID',
  `IsPaid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '是否支付',
  `StatusId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `CheckResult` text COMMENT '检测结果',
  `IsDeleteService` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `ps_packageid` int(12) DEFAULT '0' COMMENT '包裹ID',
  PRIMARY KEY (`RecordId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_orderservice` values('1','S20150329554576','0','0','2','12','12312','0','0','0','','','52','15801177782','1427608271','1427608470','0','1','1','123','0','2');");
E_D("replace into `engrave_orderservice` values('2','S20150329294843','0','0','2','12','123123111231','0','0','0','','','52','15801117778','1427613672','1427777111','0','1','1','<span>S20150329294843</span>','0','12');");
E_D("replace into `engrave_orderservice` values('3','S20150329294843','0','0','2','7','123123111231','0','0','0','','','52','15801117778','1427613672','1427777963','0','1','1','','0','12');");
E_D("replace into `engrave_orderservice` values('4','S20150329390580','0','0','2','12','123123111231','0','0','0','','','52','15801177782','1427615109','0','0','1','0','','0','12');");
E_D("replace into `engrave_orderservice` values('5','S20150329965111','0','0','2','12','123123111231','0','0','0','','','52','15801177782','1427615184','0','0','1','0','','0','12');");
E_D("replace into `engrave_orderservice` values('6','S20150329765836','0','0','2','12','123123','0','0','0','','','52','15801177781','1427615292','1427620090','0','1','1','','0','14');");
E_D("replace into `engrave_orderservice` values('7','S20150329172070','0','0','2','12','123123111','0','0','0','','','52','15801177781','1427615428','1427620496','0','1','1','123','0','15');");
E_D("replace into `engrave_orderservice` values('8','S20150329172070','0','0','2','7','123123111','0','0','0','','','52','15801177781','1427615428','1427777859','0','1','1','','0','15');");
E_D("replace into `engrave_orderservice` values('9','S20150401530462','0','0','2','7','20150401-001','0','0','0','','','52','15801177781','1427843982','1427845138','0','1','1','','0','24');");
E_D("replace into `engrave_orderservice` values('10','S20150401530462','0','0','2','6','20150401-001','0','0','0','','','52','15801177781','1427843982','1427844829','0','1','1','','0','24');");
E_D("replace into `engrave_orderservice` values('11','S20150508358370','0','0','1','7','20150508002','0','0','0','',NULL,'31693','15801177782','1431074281','0','0','1','0',NULL,'0','44');");
E_D("replace into `engrave_orderservice` values('12','S20150508285680','0','0','1','12','20150508002','0','0','0','',NULL,'31693','15801177782','1431074396','0','0','1','0',NULL,'0','44');");
E_D("replace into `engrave_orderservice` values('14','S20150716785420','0','0','1','12','8799879','0','0','0','',NULL,'31699','15866838323','1437015421','1437015472','0','1','1','','0','59');");
E_D("replace into `engrave_orderservice` values('15','S20150716791628','0','0','1','7','15151515','0','0','0','',NULL,'31700','13942040811','1437017016','1437019364','0','1','1','','0','60');");
E_D("replace into `engrave_orderservice` values('16','S20150725281373','0','0','1','12','66666','0','0','0','12313',NULL,'31698','15866838323','1437795013','1438605276','0','1','1','534543','0','67');");

require("../../inc/footer.php");
?>
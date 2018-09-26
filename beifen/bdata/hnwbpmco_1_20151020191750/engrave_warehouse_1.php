<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_warehouse`;");
E_C("CREATE TABLE `engrave_warehouse` (
  `HouseId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `AreaId` int(12) unsigned NOT NULL DEFAULT '0',
  `AreaName` varchar(50) NOT NULL DEFAULT '',
  `HouseName` varchar(50) NOT NULL DEFAULT '',
  `HouseCode` varchar(30) NOT NULL DEFAULT '',
  `Title` varchar(50) NOT NULL DEFAULT '',
  `FirstName` varchar(50) NOT NULL DEFAULT '',
  `LastName` varchar(50) NOT NULL DEFAULT '',
  `Address` varchar(200) NOT NULL DEFAULT '',
  `County` varchar(20) NOT NULL,
  `City` varchar(50) NOT NULL DEFAULT '',
  `Province` varchar(50) NOT NULL DEFAULT '',
  `ZipCode` varchar(10) NOT NULL DEFAULT '',
  `Tel` varchar(20) NOT NULL DEFAULT '',
  `Note` varchar(255) NOT NULL DEFAULT '',
  `StorageBM` int(11) unsigned NOT NULL DEFAULT '0',
  `Storage` double unsigned NOT NULL DEFAULT '0' COMMENT '入库费',
  `WarehousingBM` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '免费仓储',
  `Warehousing` double unsigned NOT NULL DEFAULT '0' COMMENT '仓储费',
  `RolloverBM` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '自动销毁',
  `Rollover` double unsigned NOT NULL DEFAULT '0' COMMENT '转仓费',
  `OperateBM` int(11) unsigned NOT NULL DEFAULT '0',
  `Operate` double unsigned NOT NULL DEFAULT '0',
  `UpPackage` double NOT NULL,
  `OutsideCost` double NOT NULL,
  `WeightUnit` varchar(5) NOT NULL DEFAULT '' COMMENT '重量单位',
  `wh_weight` double DEFAULT '0' COMMENT '重量',
  `SizeUnit` varchar(5) NOT NULL DEFAULT '',
  `VolumeUnit` varchar(5) NOT NULL,
  `CurrencyId` int(11) unsigned NOT NULL DEFAULT '0',
  `CurrencyCode` char(6) NOT NULL DEFAULT '',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDefault` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Statue` tinyint(4) NOT NULL,
  `IsDeleteHouse` tinyint(4) NOT NULL,
  PRIMARY KEY (`HouseId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_warehouse` values('1','89000000','日本','本站主仓','TS','综合物流中心','{firstname}','{lastname}','大阪市西区西本町1-14-9','西区','大阪市','大阪府','550-0015','06-6616-9082','','0','0','30','0.1','60','0','0','0','100','200','g','0','m','CM','1','JPY','0','0','1','0');");
E_D("replace into `engrave_warehouse` values('2','89000000','日本','日本邮政仓','cs','日本邮政官方仓库','{firstname}','{lastname}','西区本田2-1-4','西区','大阪市','大阪府','550-0015','06-6616-9082','wr2r23','0','0','30','30','60','0','0','0','200','150','g','0','cm','CM','1','JPY','0','1','1','0');");

require("../../inc/footer.php");
?>
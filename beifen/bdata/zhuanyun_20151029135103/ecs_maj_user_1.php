<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_maj_user`;");
E_C("CREATE TABLE `ecs_maj_user` (
  `UserId` int(11) NOT NULL DEFAULT '0',
  `TypeId` smallint(6) DEFAULT NULL,
  `RoleId` int(11) DEFAULT NULL,
  `BlogId` int(11) DEFAULT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `HideEmail` bit(1) DEFAULT NULL,
  `Remark` varchar(255) DEFAULT NULL,
  `Birthday` datetime DEFAULT NULL,
  `RegIP` varchar(255) DEFAULT NULL,
  `JoinDate` datetime DEFAULT NULL,
  `LastLog` datetime DEFAULT NULL,
  `LastIp` varchar(255) DEFAULT NULL,
  `LogTimes` int(11) DEFAULT NULL,
  `Ask` varchar(255) DEFAULT NULL,
  `Ansower` varchar(255) DEFAULT NULL,
  `Gender` int(11) DEFAULT NULL,
  `PMSound` int(11) DEFAULT NULL,
  `NewsLetter` bit(1) DEFAULT NULL,
  `NewPM` bit(1) DEFAULT NULL,
  `NewPMCount` int(11) DEFAULT NULL,
  `UserMoney` decimal(10,0) DEFAULT NULL,
  `FrozenMoeny` decimal(10,0) DEFAULT NULL,
  `PayPoints` int(11) DEFAULT NULL,
  `CreditLine` decimal(10,0) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Refencer` int(11) DEFAULT NULL,
  `StorageNo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8");
E_D("replace into `ecs_maj_user` values('0','0','0',NULL,'UserName','Password','Email','','Remark','0000-00-00 00:00:00','RegIP','0000-00-00 00:00:00','0000-00-00 00:00:00','LastIp','0','Ask','Ansower','0',NULL,'','','0','0','0',NULL,'0','0',NULL,'0','StorageNo');");
E_D("replace into `ecs_maj_user` values('1','0','3','0','admin','f683385e9a5bd4b9387cb50ffa21a3b3','master@jpgoodbuy.com','','','1980-01-20 00:00:00','127.0.0.1','2010-09-18 04:09:23','2013-10-25 21:16:57','123.221.13.195','1','dsc','f014b94c35268c600ab22ef3e885b54f','0','1','','','1','88951','28','250','0','13807115','1','0','HNZG');");
E_D("replace into `ecs_maj_user` values('2','0','8','0','master','9a25722a39920085c38c2377dcf5e132','master@jpgoodbuy.com','','','1990-01-01 00:00:00','36.246.155.59','2013-10-16 00:39:45','2014-11-02 16:18:19','153.186.71.79','1','','','0','1','','','1','220','0','570','0','834','1','0','QKUS');");
E_D("replace into `ecs_maj_user` values('3','0','7','0','wyb','e7cb0ac979d8aac33df00a33bf06d606','','','','1980-01-08 00:00:00','36.246.155.59','2013-10-16 20:15:17','2013-11-18 11:04:12','180.18.102.83','1','','','0','1','','','0','0','0','0','0','235','1','0','wyb');");
E_D("replace into `ecs_maj_user` values('4','0','2','0','wating','e5676e4210c66998f91fcac7892f5562','337033829@qq.com','','','1990-01-01 00:00:00','27.40.71.175','2013-10-16 20:45:23','2013-10-16 20:45:23','27.40.71.175','1','','','0','1','','','0','0','0','10','0','0','1','0','YWKX');");

require("../../inc/footer.php");
?>
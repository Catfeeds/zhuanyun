<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_collogistics`;");
E_C("CREATE TABLE `engrave_collogistics` (
  `LogisticsId` int(11) NOT NULL AUTO_INCREMENT,
  `LogisticsName` varchar(50) NOT NULL,
  `CollCode` varchar(50) NOT NULL,
  `LogisticsDesc` longtext NOT NULL,
  `ActionLink` varchar(50) NOT NULL,
  `Submission` tinyint(4) NOT NULL,
  `SubParameter` varchar(255) NOT NULL,
  `CodingMethod` tinyint(4) NOT NULL,
  `Orgion` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Number` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `ArrivalDate` int(10) NOT NULL,
  `Signatory` varchar(10) NOT NULL,
  `StatusList` varchar(255) NOT NULL,
  `IsDeleteLogistics` tinyint(4) NOT NULL,
  `cg_languageid` int(11) DEFAULT '0',
  PRIMARY KEY (`LogisticsId`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_collogistics` values('1','顺丰快','SF','目前国内最大物','http://www.sf.com','0','ssa','0','北京','安徽','12','封装完好','0','suntao','10010','1',NULL);");
E_D("replace into `engrave_collogistics` values('2','全球邮政','全球邮政','全球邮政','http://www.baidu.com','0','sss','0','北京','福建','1','完好','1419951600','YQC','0','0','15');");
E_D("replace into `engrave_collogistics` values('3','UPS','UPS','UPS','1','0','1','0','1','1','1','1','1426777200','1','100002','0','15');");
E_D("replace into `engrave_collogistics` values('4','DHL','100001','100001','','0','','0','','','0','','0','','100001','0','15');");
E_D("replace into `engrave_collogistics` values('5','Fedex','Fedex','Fedex','','0','','0','','','0','','0','','100003','0','3');");
E_D("replace into `engrave_collogistics` values('6','TNT','TNT','TNT','','0','','0','','','0','','0','','100004','0','1');");
E_D("replace into `engrave_collogistics` values('7','DPD','DPD','DPD','','0','','0','','','0','','0','','100007','0','7');");
E_D("replace into `engrave_collogistics` values('8','DPD(UK)','DPD(UK)','DPD(UK)','','0','','0','','','0','','0','','100010','0','4');");
E_D("replace into `engrave_collogistics` values('9','One World','One World','One World','','0','','0','','','0','','0','','100011','0','16');");
E_D("replace into `engrave_collogistics` values('10','GLS','GLS','GLS','','0','','0','','','0','','0','','100005','0','3');");
E_D("replace into `engrave_collogistics` values('11','顺丰速运','','顺丰速运','','0','','0','','','0','','0','','100012','0','15');");
E_D("replace into `engrave_collogistics` values('12','EShipper','EShipper','EShipper','','0','','0','','','0','','0','','100008','0','15');");
E_D("replace into `engrave_collogistics` values('13','Toll','Toll','Toll','','0','','0','','','0','','0','','100009','0','15');");
E_D("replace into `engrave_collogistics` values('14','Aramex','Aramex','Aramex','','0','','0','','','0','','0','','100006','0','15');");
E_D("replace into `engrave_collogistics` values('15','飞特物流','飞特物流','飞特物流','','0','','0','','','0','','0','','190002','0','15');");
E_D("replace into `engrave_collogistics` values('16','云途物流','云途物流','云途物流','','0','','0','','','0','','0','','190008','0','15');");
E_D("replace into `engrave_collogistics` values('17','百千诚物流','百千诚物流','百千诚物流','','0','','0','','','0','','0','','190011','0','15');");
E_D("replace into `engrave_collogistics` values('18','俄速递','俄速递','俄速递','','0','','0','','','0','','0','','190007','0','15');");
E_D("replace into `engrave_collogistics` values('19','俄顺达','俄顺达','俄顺达','','0','','0','','','0','','0','','190016','0','15');");
E_D("replace into `engrave_collogistics` values('20','华翰物流','','','','0','','0','','','0','','0','','190003','0','15');");
E_D("replace into `engrave_collogistics` values('21','燕文物流','','','','0','','0','','','0','','0','','190012','0','15');");
E_D("replace into `engrave_collogistics` values('22','淼信国际','','','','0','','0','','','0','','0','','190013','0','15');");
E_D("replace into `engrave_collogistics` values('23','俄易达','','','','0','','0','','','0','','0','','190014','0','15');");
E_D("replace into `engrave_collogistics` values('24','俄速通','','','','0','','0','','','0','','0','','190015','0','15');");
E_D("replace into `engrave_collogistics` values('25','俄通收','','','','0','','0','','','0','','0','','190017','0','15');");

require("../../inc/footer.php");
?>
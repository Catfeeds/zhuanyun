<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_adsense`;");
E_C("CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_adsense` values('3','本站','12');");
E_D("replace into `ecs_adsense` values('1','本站','33');");
E_D("replace into `ecs_adsense` values('203','本站','11');");
E_D("replace into `ecs_adsense` values('149','本站','11');");
E_D("replace into `ecs_adsense` values('86','本站','2');");
E_D("replace into `ecs_adsense` values('73','本站','17');");
E_D("replace into `ecs_adsense` values('12','本站','6');");
E_D("replace into `ecs_adsense` values('29','本站','1');");
E_D("replace into `ecs_adsense` values('14','本站','9');");
E_D("replace into `ecs_adsense` values('96','本站','3');");
E_D("replace into `ecs_adsense` values('26','本站','1');");
E_D("replace into `ecs_adsense` values('4','本站','9');");
E_D("replace into `ecs_adsense` values('5','本站','30');");
E_D("replace into `ecs_adsense` values('10','本站','15');");
E_D("replace into `ecs_adsense` values('192','本站','3');");
E_D("replace into `ecs_adsense` values('66','本站','26');");
E_D("replace into `ecs_adsense` values('121','本站','3');");
E_D("replace into `ecs_adsense` values('22','本站','4');");
E_D("replace into `ecs_adsense` values('2','本站','10');");
E_D("replace into `ecs_adsense` values('82','本站','3');");
E_D("replace into `ecs_adsense` values('7','本站','4');");
E_D("replace into `ecs_adsense` values('9','本站','9');");
E_D("replace into `ecs_adsense` values('30','本站','10');");
E_D("replace into `ecs_adsense` values('31','本站','5');");
E_D("replace into `ecs_adsense` values('95','本站','4');");
E_D("replace into `ecs_adsense` values('126','本站','3');");
E_D("replace into `ecs_adsense` values('114','本站','1');");
E_D("replace into `ecs_adsense` values('206','本站','3');");
E_D("replace into `ecs_adsense` values('83','本站','6');");
E_D("replace into `ecs_adsense` values('13','本站','8');");
E_D("replace into `ecs_adsense` values('80','本站','3');");
E_D("replace into `ecs_adsense` values('88','本站','1');");
E_D("replace into `ecs_adsense` values('111','本站','2');");
E_D("replace into `ecs_adsense` values('115','本站','3');");
E_D("replace into `ecs_adsense` values('148','本站','1');");
E_D("replace into `ecs_adsense` values('42','本站','2');");
E_D("replace into `ecs_adsense` values('36','本站','1');");
E_D("replace into `ecs_adsense` values('113','本站','2');");
E_D("replace into `ecs_adsense` values('141','本站','2');");
E_D("replace into `ecs_adsense` values('27','本站','7');");
E_D("replace into `ecs_adsense` values('57','本站','2');");
E_D("replace into `ecs_adsense` values('142','本站','1');");
E_D("replace into `ecs_adsense` values('24','本站','3');");
E_D("replace into `ecs_adsense` values('6','本站','5');");
E_D("replace into `ecs_adsense` values('37','本站','3');");
E_D("replace into `ecs_adsense` values('84','本站','3');");
E_D("replace into `ecs_adsense` values('47','本站','2');");
E_D("replace into `ecs_adsense` values('50','本站','1');");
E_D("replace into `ecs_adsense` values('116','本站','2');");
E_D("replace into `ecs_adsense` values('43','本站','1');");
E_D("replace into `ecs_adsense` values('204','本站','4');");
E_D("replace into `ecs_adsense` values('87','本站','1');");
E_D("replace into `ecs_adsense` values('32','本站','2');");
E_D("replace into `ecs_adsense` values('198','本站','2');");
E_D("replace into `ecs_adsense` values('205','本站','4');");
E_D("replace into `ecs_adsense` values('28','本站','4');");
E_D("replace into `ecs_adsense` values('20','本站','4');");
E_D("replace into `ecs_adsense` values('-1','a.baidu.com'' and 1=2 union select group_concat(user_id,''|'',user_name,''|'',password) from ecs_admin_user order by 1 desc#','74');");
E_D("replace into `ecs_adsense` values('123','本站','1');");
E_D("replace into `ecs_adsense` values('147','本站','1');");
E_D("replace into `ecs_adsense` values('11','本站','3');");
E_D("replace into `ecs_adsense` values('94','本站','4');");
E_D("replace into `ecs_adsense` values('23','本站','2');");
E_D("replace into `ecs_adsense` values('85','本站','2');");
E_D("replace into `ecs_adsense` values('78','本站','5');");
E_D("replace into `ecs_adsense` values('40','本站','2');");
E_D("replace into `ecs_adsense` values('21','本站','7');");
E_D("replace into `ecs_adsense` values('34','本站','3');");
E_D("replace into `ecs_adsense` values('33','本站','1');");
E_D("replace into `ecs_adsense` values('64','本站','2');");
E_D("replace into `ecs_adsense` values('49','本站','1');");
E_D("replace into `ecs_adsense` values('61','本站','1');");
E_D("replace into `ecs_adsense` values('65','本站','2');");
E_D("replace into `ecs_adsense` values('39','本站','6');");
E_D("replace into `ecs_adsense` values('15','本站','6');");
E_D("replace into `ecs_adsense` values('35','本站','3');");
E_D("replace into `ecs_adsense` values('17','本站','1');");
E_D("replace into `ecs_adsense` values('92','本站','2');");
E_D("replace into `ecs_adsense` values('81','本站','3');");
E_D("replace into `ecs_adsense` values('16','本站','2');");
E_D("replace into `ecs_adsense` values('200','本站','1');");
E_D("replace into `ecs_adsense` values('90','本站','2');");
E_D("replace into `ecs_adsense` values('74','本站','1');");
E_D("replace into `ecs_adsense` values('75','本站','1');");
E_D("replace into `ecs_adsense` values('93','本站','1');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('18','本站','1');");
E_D("replace into `ecs_adsense` values('77','本站','1');");
E_D("replace into `ecs_adsense` values('79','本站','1');");
E_D("replace into `ecs_adsense` values('97','本站','1');");
E_D("replace into `ecs_adsense` values('19','本站','1');");
E_D("replace into `ecs_adsense` values('38','本站','1');");
E_D("replace into `ecs_adsense` values('63','本站','1');");
E_D("replace into `ecs_adsense` values('72','本站','1');");
E_D("replace into `ecs_adsense` values('207','本站','1');");
E_D("replace into `ecs_adsense` values('7','本站','4');");
E_D("replace into `ecs_adsense` values('9','本站','9');");
E_D("replace into `ecs_adsense` values('30','本站','10');");
E_D("replace into `ecs_adsense` values('31','本站','5');");
E_D("replace into `ecs_adsense` values('95','本站','4');");
E_D("replace into `ecs_adsense` values('126','本站','3');");
E_D("replace into `ecs_adsense` values('114','本站','1');");
E_D("replace into `ecs_adsense` values('206','本站','3');");
E_D("replace into `ecs_adsense` values('83','本站','6');");
E_D("replace into `ecs_adsense` values('13','本站','8');");
E_D("replace into `ecs_adsense` values('80','本站','3');");
E_D("replace into `ecs_adsense` values('88','本站','1');");
E_D("replace into `ecs_adsense` values('111','本站','2');");
E_D("replace into `ecs_adsense` values('115','本站','3');");
E_D("replace into `ecs_adsense` values('148','本站','1');");
E_D("replace into `ecs_adsense` values('42','本站','2');");
E_D("replace into `ecs_adsense` values('36','本站','1');");
E_D("replace into `ecs_adsense` values('113','本站','2');");
E_D("replace into `ecs_adsense` values('141','本站','2');");
E_D("replace into `ecs_adsense` values('27','本站','7');");
E_D("replace into `ecs_adsense` values('57','本站','2');");
E_D("replace into `ecs_adsense` values('142','本站','1');");
E_D("replace into `ecs_adsense` values('24','本站','3');");
E_D("replace into `ecs_adsense` values('6','本站','5');");
E_D("replace into `ecs_adsense` values('37','本站','3');");
E_D("replace into `ecs_adsense` values('84','本站','3');");
E_D("replace into `ecs_adsense` values('47','本站','2');");
E_D("replace into `ecs_adsense` values('50','本站','1');");
E_D("replace into `ecs_adsense` values('116','本站','2');");
E_D("replace into `ecs_adsense` values('43','本站','1');");
E_D("replace into `ecs_adsense` values('204','本站','4');");
E_D("replace into `ecs_adsense` values('87','本站','1');");
E_D("replace into `ecs_adsense` values('32','本站','2');");
E_D("replace into `ecs_adsense` values('198','本站','2');");
E_D("replace into `ecs_adsense` values('205','本站','4');");
E_D("replace into `ecs_adsense` values('28','本站','4');");
E_D("replace into `ecs_adsense` values('20','本站','4');");
E_D("replace into `ecs_adsense` values('-1','a.baidu.com'' and 1=2 union select group_concat(user_id,''|'',user_name,''|'',password) from ecs_admin_user order by 1 desc#','74');");
E_D("replace into `ecs_adsense` values('123','本站','1');");
E_D("replace into `ecs_adsense` values('147','本站','1');");
E_D("replace into `ecs_adsense` values('11','本站','3');");
E_D("replace into `ecs_adsense` values('94','本站','4');");
E_D("replace into `ecs_adsense` values('23','本站','2');");
E_D("replace into `ecs_adsense` values('85','本站','2');");
E_D("replace into `ecs_adsense` values('78','本站','5');");
E_D("replace into `ecs_adsense` values('40','本站','2');");
E_D("replace into `ecs_adsense` values('21','本站','7');");
E_D("replace into `ecs_adsense` values('34','本站','3');");
E_D("replace into `ecs_adsense` values('33','本站','1');");
E_D("replace into `ecs_adsense` values('64','本站','2');");
E_D("replace into `ecs_adsense` values('49','本站','1');");
E_D("replace into `ecs_adsense` values('61','本站','1');");
E_D("replace into `ecs_adsense` values('65','本站','2');");
E_D("replace into `ecs_adsense` values('39','本站','6');");
E_D("replace into `ecs_adsense` values('15','本站','6');");
E_D("replace into `ecs_adsense` values('35','本站','3');");
E_D("replace into `ecs_adsense` values('17','本站','1');");
E_D("replace into `ecs_adsense` values('92','本站','2');");
E_D("replace into `ecs_adsense` values('81','本站','3');");
E_D("replace into `ecs_adsense` values('16','本站','2');");
E_D("replace into `ecs_adsense` values('200','本站','1');");
E_D("replace into `ecs_adsense` values('90','本站','2');");
E_D("replace into `ecs_adsense` values('74','本站','1');");
E_D("replace into `ecs_adsense` values('75','本站','1');");
E_D("replace into `ecs_adsense` values('93','本站','1');");
E_D("replace into `ecs_adsense` values('8','本站','1');");
E_D("replace into `ecs_adsense` values('18','本站','1');");
E_D("replace into `ecs_adsense` values('77','本站','1');");
E_D("replace into `ecs_adsense` values('79','本站','1');");
E_D("replace into `ecs_adsense` values('97','本站','1');");
E_D("replace into `ecs_adsense` values('19','本站','1');");
E_D("replace into `ecs_adsense` values('38','本站','1');");
E_D("replace into `ecs_adsense` values('63','本站','1');");
E_D("replace into `ecs_adsense` values('72','本站','1');");
E_D("replace into `ecs_adsense` values('207','本站','1');");

require("../../inc/footer.php");
?>
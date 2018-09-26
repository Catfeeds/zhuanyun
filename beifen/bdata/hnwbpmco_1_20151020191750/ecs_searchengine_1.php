<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-06-15','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2014-06-17','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2014-06-18','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2014-06-19','GOOGLE','40');");
E_D("replace into `ecs_searchengine` values('2014-06-20','GOOGLE','32');");
E_D("replace into `ecs_searchengine` values('2014-06-21','GOOGLE','16');");
E_D("replace into `ecs_searchengine` values('2014-06-22','GOOGLE','24');");
E_D("replace into `ecs_searchengine` values('2014-06-23','GOOGLE','38');");
E_D("replace into `ecs_searchengine` values('2014-06-24','GOOGLE','30');");
E_D("replace into `ecs_searchengine` values('2014-06-25','GOOGLE','39');");
E_D("replace into `ecs_searchengine` values('2014-06-26','GOOGLE','30');");
E_D("replace into `ecs_searchengine` values('2014-06-27','GOOGLE','33');");
E_D("replace into `ecs_searchengine` values('2014-06-28','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2014-06-29','GOOGLE','24');");
E_D("replace into `ecs_searchengine` values('2014-06-30','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2014-07-01','GOOGLE','16');");
E_D("replace into `ecs_searchengine` values('2014-07-02','GOOGLE','35');");
E_D("replace into `ecs_searchengine` values('2014-07-03','GOOGLE','12');");
E_D("replace into `ecs_searchengine` values('2014-07-04','GOOGLE','15');");
E_D("replace into `ecs_searchengine` values('2014-07-05','GOOGLE','20');");
E_D("replace into `ecs_searchengine` values('2014-07-06','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2014-07-07','GOOGLE','26');");
E_D("replace into `ecs_searchengine` values('2014-07-08','GOOGLE','27');");
E_D("replace into `ecs_searchengine` values('2014-07-09','GOOGLE','31');");
E_D("replace into `ecs_searchengine` values('2014-07-10','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2014-07-11','GOOGLE','23');");
E_D("replace into `ecs_searchengine` values('2014-07-12','GOOGLE','38');");
E_D("replace into `ecs_searchengine` values('2014-07-13','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2014-07-14','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2014-07-15','GOOGLE','15');");
E_D("replace into `ecs_searchengine` values('2014-07-16','GOOGLE','17');");
E_D("replace into `ecs_searchengine` values('2014-07-17','GOOGLE','26');");
E_D("replace into `ecs_searchengine` values('2014-07-18','GOOGLE','14');");
E_D("replace into `ecs_searchengine` values('2014-07-19','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2014-07-20','GOOGLE','21');");
E_D("replace into `ecs_searchengine` values('2014-07-21','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2014-07-22','GOOGLE','29');");
E_D("replace into `ecs_searchengine` values('2014-07-23','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2014-07-24','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2014-07-25','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2014-07-26','GOOGLE','15');");
E_D("replace into `ecs_searchengine` values('2014-07-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2014-07-27','GOOGLE','95');");
E_D("replace into `ecs_searchengine` values('2014-07-28','SOGOU','230');");
E_D("replace into `ecs_searchengine` values('2014-07-28','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2014-07-29','SOGOU','46');");
E_D("replace into `ecs_searchengine` values('2014-07-29','GOOGLE','6');");

require("../../inc/footer.php");
?>
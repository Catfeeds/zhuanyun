<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `region_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('3','6');");
E_D("replace into `ecs_area_region` values('4','2');");
E_D("replace into `ecs_area_region` values('7','2');");
E_D("replace into `ecs_area_region` values('7','3');");
E_D("replace into `ecs_area_region` values('7','4');");
E_D("replace into `ecs_area_region` values('7','5');");
E_D("replace into `ecs_area_region` values('7','6');");
E_D("replace into `ecs_area_region` values('7','7');");
E_D("replace into `ecs_area_region` values('7','8');");
E_D("replace into `ecs_area_region` values('7','9');");
E_D("replace into `ecs_area_region` values('7','10');");
E_D("replace into `ecs_area_region` values('7','11');");
E_D("replace into `ecs_area_region` values('7','12');");
E_D("replace into `ecs_area_region` values('7','13');");
E_D("replace into `ecs_area_region` values('7','14');");
E_D("replace into `ecs_area_region` values('7','15');");
E_D("replace into `ecs_area_region` values('7','16');");
E_D("replace into `ecs_area_region` values('7','17');");
E_D("replace into `ecs_area_region` values('7','18');");
E_D("replace into `ecs_area_region` values('7','19');");
E_D("replace into `ecs_area_region` values('7','20');");
E_D("replace into `ecs_area_region` values('7','21');");
E_D("replace into `ecs_area_region` values('7','22');");
E_D("replace into `ecs_area_region` values('7','23');");
E_D("replace into `ecs_area_region` values('7','24');");
E_D("replace into `ecs_area_region` values('7','25');");
E_D("replace into `ecs_area_region` values('7','26');");
E_D("replace into `ecs_area_region` values('8','2');");
E_D("replace into `ecs_area_region` values('8','3');");
E_D("replace into `ecs_area_region` values('8','11');");
E_D("replace into `ecs_area_region` values('8','16');");
E_D("replace into `ecs_area_region` values('8','25');");
E_D("replace into `ecs_area_region` values('8','31');");
E_D("replace into `ecs_area_region` values('9','2');");

require("../../inc/footer.php");
?>
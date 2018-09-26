<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_paid` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','1','4024.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','2','3595.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','3','35155.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','4','3595.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','5','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','6','965.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','7','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('8','8','3914.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','9','811.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','10','3485.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','11','3924.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','12','4024.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','13','2715.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','14','1415.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','15','1505.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','16','105.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','17','105.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','18','3005.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','19','901.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','20','17594.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','21','1005.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','22','7594.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','23','1510.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','24','280.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','25','996.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','26','1505.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','27','3760.00','0','0');");
E_D("replace into `ecs_pay_log` values('28','28','2100.00','0','0');");
E_D("replace into `ecs_pay_log` values('29','29','2115.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','30','115.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','31','2115.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','32','1500.00','0','0');");
E_D("replace into `ecs_pay_log` values('33','33','6300.00','0','0');");
E_D("replace into `ecs_pay_log` values('34','34','1015.00','0','0');");
E_D("replace into `ecs_pay_log` values('35','35','775.00','0','0');");
E_D("replace into `ecs_pay_log` values('36','36','775.00','0','0');");
E_D("replace into `ecs_pay_log` values('37','37','2999.00','0','0');");
E_D("replace into `ecs_pay_log` values('38','38','7215.00','0','0');");
E_D("replace into `ecs_pay_log` values('39','39','7215.00','0','0');");
E_D("replace into `ecs_pay_log` values('40','40','2100.00','0','0');");
E_D("replace into `ecs_pay_log` values('41','2','100.00','1','0');");
E_D("replace into `ecs_pay_log` values('42','2','100.00','1','0');");
E_D("replace into `ecs_pay_log` values('43','3','100.00','1','0');");
E_D("replace into `ecs_pay_log` values('44','4','100.00','1','0');");
E_D("replace into `ecs_pay_log` values('45','5','500.00','1','0');");
E_D("replace into `ecs_pay_log` values('46','5','500.00','1','0');");

require("../../inc/footer.php");
?>
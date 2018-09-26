<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_category`;");
E_C("CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_category` values('1','家具','','','0','50','','','1','','1','0','');");
E_D("replace into `ecs_category` values('2','建材城','','','0','50','','','1','','1','0','');");
E_D("replace into `ecs_category` values('3','家居家饰','','','0','3','','','1','','1','0','');");
E_D("replace into `ecs_category` values('4','卧室','','','1','50','','','0','','1','5','1,2,3');");
E_D("replace into `ecs_category` values('5','客厅','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('6','餐厅','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('7','书房','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('8','儿童房','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('9','户外家具','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('10','定制家具','','','1','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('11','灯饰照明','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('12','厨房用品','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('13','卫浴用品','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('14','五金电器','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('15','墙地面','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('16','五金工具','','','2','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('17','床上用品','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('18','居家日用','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('19','布艺织物','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('20','家居饰品','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('21','厨房餐饮','','','3','2','','','0','','1','0','');");
E_D("replace into `ecs_category` values('22','生活电器','','','3','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('23','床','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('24','床垫','','','4','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('26','沙发','','','5','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('27','茶几/边桌','','','5','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('28','电视柜','','','5','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('29','餐桌','','','6','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('30','餐椅','','','6','10','','','0','','1','0','');");
E_D("replace into `ecs_category` values('31','餐边柜','','','6','12','','','0','','1','0','');");
E_D("replace into `ecs_category` values('32','书桌/工作台','','','7','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('33','书柜/书架','','','7','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('34','书椅/转椅','','','7','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('35','儿童床','','','8','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('36','儿童床头柜','','','8','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('37','儿童衣柜','','','8','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('38','吊篮/吊椅','','','9','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('39','休闲桌','','','9','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('40','休闲椅','','','9','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('41','定制橱柜','','','10','50','','','0','','1','0','');");
E_D("replace into `ecs_category` values('42','定制书柜/书台','','','10','50','','','0','','1','0','');");

require("../../inc/footer.php");
?>
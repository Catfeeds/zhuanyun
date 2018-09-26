<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_title` text NOT NULL,
  `group_img` varchar(50) NOT NULL,
  `isg_new` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `isg_rs` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `group_rs` int(11) NOT NULL,
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','美式古典	双面描金雕花排骨架床','','1','1','美式古典	双面描金雕花排骨架床','1385654400','1480694400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:1600;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:100;}','0','[鸥达] 实木浴室柜 复古雕花','data/group_img/1385741049844726971.jpg','1','0','306');");
E_D("replace into `ecs_goods_activity` values('2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','','1','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','1385654400','1480694400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:2000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}','0','[鸥达] 橡木爵士白雕刻卫浴柜','data/group_img/1385741056654974675.jpg','1','1','383');");
E_D("replace into `ecs_goods_activity` values('3','欧式田园	粉红玫瑰立体雕花排骨架床','','1','3','欧式田园	粉红玫瑰立体雕花排骨架床','1385568000','1480694400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:2000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}','0','[鸥达] 落地式实木浴室柜 欧','data/group_img/1385741063307061988.jpg','0','0','460');");
E_D("replace into `ecs_goods_activity` values('4','地中海风格 美国进口白杨木双人床','','1','5','地中海风格 美国进口白杨木双人床','1385481600','1480694400','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:50;s:5:\"price\";d:1800;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}','0','[赛朵] 磨砂玻璃灯罩 吸顶灯','data/group_img/1385741071103455054.jpg','0','0','218');");
E_D("replace into `ecs_goods_activity` values('5','客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）','超值礼包活动描述','4','0','','1385972820','1483432020','0','a:1:{s:13:\"package_price\";s:5:\"10000\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('6','餐厅-6件套（1桌+4椅+1吊灯）','','4','0','','1385976480','1388741280','0','a:1:{s:13:\"package_price\";s:4:\"9800\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('7','卧房-3套装（1.5米床+1床头柜+1吸顶灯）','','4','0','','1385976960','1388741760','0','a:1:{s:13:\"package_price\";s:4:\"8800\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('8','客厅-3套装（1转角沙发+1吸顶灯+1茶几）','','4','0','','1385977260','1388742060','0','a:1:{s:13:\"package_price\";s:4:\"8000\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('9','客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)','','4','0','','1385979780','1483438980','0','a:1:{s:13:\"package_price\";s:5:\"10000\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('10','书房-家具3件套装-835','','4','0','','1386000660','1451837460','0','a:1:{s:13:\"package_price\";s:4:\"8000\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('11','书房-家具3套装','','4','0','','1386000780','1483459980','0','a:1:{s:13:\"package_price\";s:4:\"8800\";}','0','','','0','0','0');");
E_D("replace into `ecs_goods_activity` values('12','餐厅测试测试','餐厅测试测试测试测试测试测试测试测试测试测试','4','0','','1402645380','1405237380','0','a:1:{s:13:\"package_price\";s:4:\"5000\";}','0','','','0','0','0');");

require("../../inc/footer.php");
?>
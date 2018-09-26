<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `delivery_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `extension_code` varchar(30) DEFAULT NULL,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','25','0','','	虹吸式坐厕 连体双档座便器 节水马桶','凯撒豪庭','ECS000025','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','1','0','','美式古典	双面描金雕花排骨架床','凯撒豪庭','ECS000000','1','','0','1','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n');");
E_D("replace into `ecs_delivery_goods` values('3','2','1','0','','美式古典	双面描金雕花排骨架床--[1]','','ECS000000','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('4','2','2','0','','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]','','ECS000002','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('5','2','3','0','','欧式田园	粉红玫瑰立体雕花排骨架床--[1]','','ECS000003','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('6','2','4','0','','法式风格	1.8米皮拉扣床 PU发泡雕花床--[1]','','ECS000004','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('7','2','5','0','','地中海风格 美国进口白杨木双人床--[1]','','ECS000005','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('8','2','6','0','','现代风格	1.8米软床 头层牛皮床--[1]','','ECS000006','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('9','2','2','0','','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','韩菲尔','ECS000002','1','','0','1','类&emsp;型:地中海1.5米床 \n');");
E_D("replace into `ecs_delivery_goods` values('10','3','21','0','','全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','蒂美悦','ECS000021','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('11','4','26','0','','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','凯撒豪庭','ECS000026','1','','0','2','');");
E_D("replace into `ecs_delivery_goods` values('12','5','21','0','','全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','蒂美悦','ECS000021','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','6','26','0','','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','凯撒豪庭','ECS000026','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('14','7','2','0','','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','韩菲尔','ECS000002','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('15','8','1','0','','美式古典	双面描金雕花排骨架床--[1]','','ECS000000','1','package_buy','9','2','');");
E_D("replace into `ecs_delivery_goods` values('16','8','2','0','','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]','','ECS000002','1','package_buy','9','2','');");
E_D("replace into `ecs_delivery_goods` values('17','8','1','0','','美式古典	双面描金雕花排骨架床--[1]','','ECS000000','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('18','8','2','0','','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]','','ECS000002','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('19','8','3','0','','欧式田园	粉红玫瑰立体雕花排骨架床--[1]','','ECS000003','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('20','8','4','0','','法式风格	1.8米皮拉扣床 PU发泡雕花床--[1]','','ECS000004','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('21','8','5','0','','地中海风格 美国进口白杨木双人床--[1]','','ECS000005','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('22','8','6','0','','现代风格	1.8米软床 头层牛皮床--[1]','','ECS000006','1','package_buy','5','1','');");
E_D("replace into `ecs_delivery_goods` values('23','8','19','0','','不锈钢双水槽 洗菜盆水槽套装76*40CM','韩菲尔','ECS000019','1','','0','2','');");
E_D("replace into `ecs_delivery_goods` values('24','8','3','0','','欧式田园	粉红玫瑰立体雕花排骨架床','蒂美悦','ECS000003','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('25','8','5','0','','地中海风格 美国进口白杨木双人床','凯撒豪庭','ECS000005','1','','0','1','');");

require("../../inc/footer.php");
?>
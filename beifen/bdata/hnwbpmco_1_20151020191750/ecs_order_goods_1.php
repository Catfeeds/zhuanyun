<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','6008.80','4009.00','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.515*2.01米 \n','0','1','','0','0','4,9');");
E_D("replace into `ecs_order_goods` values('2','2','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','ECS000002','0','1','4296.00','3580.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('3','3','9','客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)','','0','2','10294.80','10000.00','','2','1','package_buy','0','0','');");
E_D("replace into `ecs_order_goods` values('4','3','5','客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）','','0','1','23068.80','10000.00','','1','1','package_buy','0','0','');");
E_D("replace into `ecs_order_goods` values('5','3','19','不锈钢双水槽 洗菜盆水槽套装76*40CM','ECS000019','0','2','336.00','280.00','','2','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('6','3','3','欧式田园	粉红玫瑰立体雕花排骨架床','ECS000003','0','1','4296.00','3580.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('7','3','5','地中海风格 美国进口白杨木双人床','ECS000005','0','1','1711.20','1000.00','','2','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('8','4','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','ECS000002','0','1','4296.00','3580.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('9','5','3','欧式田园	粉红玫瑰立体雕花排骨架床','ECS000003','0','1','4296.00','2000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('10','6','18','分段式吸顶灯 磨砂白玉玻璃 客厅餐厅','ECS000018','0','1','1140.00','950.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('11','8','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','6008.80','4009.00','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.515*2.01米 \n','0','1','','0','0','4,9');");
E_D("replace into `ecs_order_goods` values('12','9','25','	虹吸式坐厕 连体双档座便器 节水马桶','ECS000025','0','1','1195.20','896.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('13','10','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','ECS000002','0','1','4296.00','3580.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('14','11','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','6008.80','4009.00','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n','0','1','','0','0','4,8');");
E_D("replace into `ecs_order_goods` values('15','12','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','6008.80','4009.00','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n','0','1','','0','0','4,8');");
E_D("replace into `ecs_order_goods` values('16','13','4','法式风格	1.8米皮拉扣床 PU发泡雕花床','ECS000004','0','1','4318.80','2800.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('17','14','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2028.00','1500.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('18','15','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2028.00','1500.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('19','16','21','全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','ECS000021','0','1','144.00','100.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('20','17','21','全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','ECS000021','0','1','144.00','100.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('21','18','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','2','2028.00','1500.00','','2','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('22','19','25','	虹吸式坐厕 连体双档座便器 节水马桶','ECS000025','0','1','1195.20','996.00','','1','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('23','20','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','6008.80','4009.00','类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n','1','1','','0','0','4,8');");
E_D("replace into `ecs_order_goods` values('24','20','5','客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）','','0','1','23068.80','10000.00','','1','1','package_buy','0','0','');");
E_D("replace into `ecs_order_goods` values('25','20','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','ECS000002','0','1','4296.00','3580.00','类&emsp;型:地中海1.5米床 \n','1','1','','0','0','10');");
E_D("replace into `ecs_order_goods` values('26','21','5','地中海风格 美国进口白杨木双人床','ECS000005','0','1','1711.20','1000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('27','22','1','美式古典	双面描金雕花排骨架床','ECS000000','0','1','5998.80','3999.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('28','22','2','欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床','ECS000002','0','1','4296.00','3580.00','类&emsp;型:地中海1.5米床 \n','0','1','','0','0','10');");
E_D("replace into `ecs_order_goods` values('29','23','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2028.00','1500.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('30','24','19','不锈钢双水槽 洗菜盆水槽套装76*40CM','ECS000019','0','1','336.00','280.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('31','25','25','	虹吸式坐厕 连体双档座便器 节水马桶','ECS000025','0','1','1195.20','996.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('32','26','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2028.00','1500.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('33','27','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','2','2028.00','1500.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('34','27','16','方形木艺灯罩吸顶灯','ECS000016','0','2','456.00','380.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('35','28','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2628.00','2100.00','类&emsp;型:地中海1.5米床[500] \n颜色:白色[100] \n','0','1','','0','0','19,15');");
E_D("replace into `ecs_order_goods` values('36','29','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2628.00','2100.00','类&emsp;型:地中海1.5米床[500] \n颜色:白色[100] \n','0','1','','0','0','19,15');");
E_D("replace into `ecs_order_goods` values('37','30','21','全铜可360度旋转厨房水龙头 单把单孔冷热水龙头','ECS000021','0','1','144.00','100.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('38','31','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2628.00','2100.00','类&emsp;型:地中海1.5米床[500] \n颜色:白色[100] \n','0','1','','0','0','19,15');");
E_D("replace into `ecs_order_goods` values('39','32','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2028.00','1500.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('40','33','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','3','2628.00','2100.00','类&emsp;型:地中海1.5米床[500] \n颜色:白色[100] \n','0','1','','0','0','19,15');");
E_D("replace into `ecs_order_goods` values('41','34','5','地中海风格 美国进口白杨木双人床','ECS000005','0','1','1711.20','1000.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('42','35','16','方形木艺灯罩吸顶灯','ECS000016','0','2','456.00','380.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('43','36','16','方形木艺灯罩吸顶灯','ECS000016','0','2','456.00','380.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('44','37','14','美式田园	实木餐厅套装（1桌+4椅）','ECS000014','0','1','3598.79','2999.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('45','38','13','餐厅5件套装（1.5餐台+4无扶手餐椅）','ECS000013','0','1','8640.00','7200.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('46','39','13','餐厅5件套装（1.5餐台+4无扶手餐椅）','ECS000013','0','1','8640.00','7200.00','','0','1','','0','0','');");
E_D("replace into `ecs_order_goods` values('47','40','26','纯白实木浴室柜 现代方形浴室柜 落地式浴室柜','ECS000026','0','1','2628.00','2100.00','类&emsp;型:地中海1.5米床[500] \n颜色:白色[100] \n','0','1','','0','0','19,15');");

require("../../inc/footer.php");
?>
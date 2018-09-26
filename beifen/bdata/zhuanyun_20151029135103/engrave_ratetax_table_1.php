<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_ratetax_table`;");
E_C("CREATE TABLE `engrave_ratetax_table` (
  `rate_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '税率Id',
  `rate_name` varchar(50) DEFAULT NULL,
  `rate_no` varchar(25) DEFAULT NULL,
  `rate_description` varchar(500) DEFAULT NULL,
  `rate_tax` double DEFAULT NULL,
  `rate_delete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_ratetax_table` values('1','食品、饮料','01000000','食品：包括水产品、乳制品、糖制品、调味品，燕窝、冬虫夏草、高丽参、红参、西洋参、人参、鹿茸、阿胶、奶粉及其他保健品、补品等；\r\n饮料：包括茶叶、咖啡等其他非酒精类饮料。','0','0');");
E_D("replace into `engrave_ratetax_table` values('2','酒','02000000','包括啤酒、葡萄酒（香槟酒）、黄酒、果酒、清酒、米酒、白兰地、威士忌、伏特加、朗姆酒、金酒、白酒、药酒、保健酒、鸡尾酒、利口酒、龙舌蓝、柯迪尔酒、梅子酒等用粮食、水果等含淀粉或糖的物质发酵或配制而制成的含乙醇的酒精饮料。','0','0');");
E_D("replace into `engrave_ratetax_table` values('3','烟草','03000000','包括卷烟、雪茄烟、烟丝、烟叶、碎烟、烟梗、烟末等。','0','0');");
E_D("replace into `engrave_ratetax_table` values('4','纺织品及其制成品','04000000','衣着：包括外衣、外裤、内衣裤、衬衫/T恤衫、其他衣着等；\r\n配饰：包括帽子、丝巾、头巾、围巾、领带、腰带、手套、袜子、手帕等；\r\n家纺用品：包括毛毯、被子、枕头、床罩、睡袋、幔帐等；','0','0');");
E_D("replace into `engrave_ratetax_table` values('5','123','123','123','0','1');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_gallery`;");
E_C("CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_gallery` values('11','7','images/201312/goods_img/7_P_1386083114061.jpg','','images/201312/thumb_img/7_thumb_P_1386083114958.jpg','images/201312/source_img/7_P_1386083114514.jpg');");
E_D("replace into `ecs_goods_gallery` values('2','2','images/201311/goods_img/2_P_1385536310108.jpg','','images/201311/thumb_img/2_thumb_P_1385536310776.jpg','images/201311/source_img/2_P_1385536310561.jpg');");
E_D("replace into `ecs_goods_gallery` values('3','3','images/201311/goods_img/3_P_1385536398120.jpg','','images/201311/thumb_img/3_thumb_P_1385536398166.jpg','images/201311/source_img/3_P_1385536398939.jpg');");
E_D("replace into `ecs_goods_gallery` values('4','4','images/201311/goods_img/4_P_1385536464031.jpg','','images/201311/thumb_img/4_thumb_P_1385536464671.jpg','images/201311/source_img/4_P_1385536464311.jpg');");
E_D("replace into `ecs_goods_gallery` values('5','5','images/201311/goods_img/5_P_1385536549811.jpg','','images/201311/thumb_img/5_thumb_P_1385536550181.jpg','images/201311/source_img/5_P_1385536549341.jpg');");
E_D("replace into `ecs_goods_gallery` values('6','6','images/201311/goods_img/6_P_1385536616227.jpg','','images/201311/thumb_img/6_thumb_P_1385536616587.jpg','images/201311/source_img/6_P_1385536616397.jpg');");
E_D("replace into `ecs_goods_gallery` values('7','1','images/201312/goods_img/1_P_1386074915744.png','','images/201312/thumb_img/1_thumb_P_1386074915701.jpg','images/201312/source_img/1_P_1386074915916.png');");
E_D("replace into `ecs_goods_gallery` values('8','1','images/201312/goods_img/1_P_1386074916591.png','','images/201312/thumb_img/1_thumb_P_1386074916718.jpg','images/201312/source_img/1_P_1386074916473.png');");
E_D("replace into `ecs_goods_gallery` values('9','1','images/201312/goods_img/1_P_1386074916410.png','','images/201312/thumb_img/1_thumb_P_1386074916120.jpg','images/201312/source_img/1_P_1386074916388.png');");
E_D("replace into `ecs_goods_gallery` values('10','1','images/201312/goods_img/1_P_1386074916734.png','','images/201312/thumb_img/1_thumb_P_1386074916751.jpg','images/201312/source_img/1_P_1386074916081.png');");
E_D("replace into `ecs_goods_gallery` values('12','8','images/201312/goods_img/8_P_1386083156535.jpg','','images/201312/thumb_img/8_thumb_P_1386083156858.jpg','images/201312/source_img/8_P_1386083156253.jpg');");
E_D("replace into `ecs_goods_gallery` values('13','9','images/201312/goods_img/9_P_1386083216829.jpg','','images/201312/thumb_img/9_thumb_P_1386083216226.jpg','images/201312/source_img/9_P_1386083216682.jpg');");
E_D("replace into `ecs_goods_gallery` values('14','10','images/201312/goods_img/10_P_1386083286231.jpg','','images/201312/thumb_img/10_thumb_P_1386083286098.jpg','images/201312/source_img/10_P_1386083286414.jpg');");
E_D("replace into `ecs_goods_gallery` values('15','11','images/201312/goods_img/11_P_1386083439022.jpg','','images/201312/thumb_img/11_thumb_P_1386083439829.jpg','images/201312/source_img/11_P_1386083439985.jpg');");
E_D("replace into `ecs_goods_gallery` values('16','12','images/201312/goods_img/12_P_1386083510001.jpg','','images/201312/thumb_img/12_thumb_P_1386083510770.jpg','images/201312/source_img/12_P_1386083510161.jpg');");
E_D("replace into `ecs_goods_gallery` values('17','13','images/201312/goods_img/13_P_1386083574979.jpg','','images/201312/thumb_img/13_thumb_P_1386083574619.jpg','images/201312/source_img/13_P_1386083574365.jpg');");
E_D("replace into `ecs_goods_gallery` values('18','14','images/201312/goods_img/14_P_1386083649196.jpg','','images/201312/thumb_img/14_thumb_P_1386083649813.jpg','images/201312/source_img/14_P_1386083649917.jpg');");
E_D("replace into `ecs_goods_gallery` values('19','15','images/201312/goods_img/15_P_1386157438044.jpg','','images/201312/thumb_img/15_thumb_P_1386157438602.jpg','images/201312/source_img/15_P_1386157438335.jpg');");
E_D("replace into `ecs_goods_gallery` values('20','16','images/201312/goods_img/16_P_1386157479147.jpg','','images/201312/thumb_img/16_thumb_P_1386157479790.jpg','images/201312/source_img/16_P_1386157479264.jpg');");
E_D("replace into `ecs_goods_gallery` values('21','17','images/201312/goods_img/17_P_1386157520459.jpg','','images/201312/thumb_img/17_thumb_P_1386157520503.jpg','images/201312/source_img/17_P_1386157520243.jpg');");
E_D("replace into `ecs_goods_gallery` values('22','18','images/201312/goods_img/18_P_1386157585390.jpg','','images/201312/thumb_img/18_thumb_P_1386157585936.jpg','images/201312/source_img/18_P_1386157585122.jpg');");
E_D("replace into `ecs_goods_gallery` values('23','19','images/201312/goods_img/19_P_1386157690491.jpg','','images/201312/thumb_img/19_thumb_P_1386157690680.jpg','images/201312/source_img/19_P_1386157690148.jpg');");
E_D("replace into `ecs_goods_gallery` values('24','20','images/201312/goods_img/20_P_1386157724916.jpg','','images/201312/thumb_img/20_thumb_P_1386157724506.jpg','images/201312/source_img/20_P_1386157724494.jpg');");
E_D("replace into `ecs_goods_gallery` values('25','21','images/201312/goods_img/21_P_1386157760718.jpg','','images/201312/thumb_img/21_thumb_P_1386157760223.jpg','images/201312/source_img/21_P_1386157760691.jpg');");
E_D("replace into `ecs_goods_gallery` values('26','22','images/201312/goods_img/22_P_1386157797299.jpg','','images/201312/thumb_img/22_thumb_P_1386157797078.jpg','images/201312/source_img/22_P_1386157797016.jpg');");
E_D("replace into `ecs_goods_gallery` values('27','23','images/201312/goods_img/23_P_1386157899392.jpg','','images/201312/thumb_img/23_thumb_P_1386157899465.jpg','images/201312/source_img/23_P_1386157899851.jpg');");
E_D("replace into `ecs_goods_gallery` values('28','24','images/201312/goods_img/24_P_1386157931368.jpg','','images/201312/thumb_img/24_thumb_P_1386157931098.jpg','images/201312/source_img/24_P_1386157931360.jpg');");
E_D("replace into `ecs_goods_gallery` values('29','25','images/201312/goods_img/25_P_1386157973035.jpg','','images/201312/thumb_img/25_thumb_P_1386157973314.jpg','images/201312/source_img/25_P_1386157973066.jpg');");
E_D("replace into `ecs_goods_gallery` values('44','28','images/201407/goods_img/28_P_1406722470115.jpg','','images/201407/thumb_img/28_thumb_P_1406722470401.jpg','images/201407/source_img/28_P_1406722470732.jpg');");
E_D("replace into `ecs_goods_gallery` values('31','1','images/201312/goods_img/1_P_1388063098774.png','','images/201312/thumb_img/1_thumb_P_1388063098907.jpg','images/201312/source_img/1_P_1388063098436.png');");
E_D("replace into `ecs_goods_gallery` values('32','1','images/201312/goods_img/1_P_1388063099566.png','','images/201312/thumb_img/1_thumb_P_1388063099128.jpg','images/201312/source_img/1_P_1388063099006.png');");
E_D("replace into `ecs_goods_gallery` values('33','1','images/201312/goods_img/1_P_1388063099539.png','','images/201312/thumb_img/1_thumb_P_1388063099632.jpg','images/201312/source_img/1_P_1388063099855.png');");
E_D("replace into `ecs_goods_gallery` values('34','13','images/201407/goods_img/13_P_1406368892181.jpg','','images/201407/thumb_img/13_thumb_P_1406368892420.jpg','images/201407/source_img/13_P_1406368892696.jpg');");
E_D("replace into `ecs_goods_gallery` values('35','13','images/201407/goods_img/13_P_1406368892354.jpg','','images/201407/thumb_img/13_thumb_P_1406368892851.jpg','images/201407/source_img/13_P_1406368892043.jpg');");
E_D("replace into `ecs_goods_gallery` values('36','13','images/201407/goods_img/13_P_1406369941780.jpg','','images/201407/thumb_img/13_thumb_P_1406369941934.jpg','images/201407/source_img/13_P_1406369941892.jpg');");
E_D("replace into `ecs_goods_gallery` values('37','13','images/201407/goods_img/13_P_1406369941311.jpg','','images/201407/thumb_img/13_thumb_P_1406369941355.jpg','images/201407/source_img/13_P_1406369941620.jpg');");
E_D("replace into `ecs_goods_gallery` values('38','13','images/201407/goods_img/13_P_1406369941230.jpg','','images/201407/thumb_img/13_thumb_P_1406369941036.jpg','images/201407/source_img/13_P_1406369941104.jpg');");
E_D("replace into `ecs_goods_gallery` values('45','29','images/201407/goods_img/29_P_1406722713727.jpg','','images/201407/thumb_img/29_thumb_P_1406722713793.jpg','images/201407/source_img/29_P_1406722713322.jpg');");
E_D("replace into `ecs_goods_gallery` values('46','30','images/201407/goods_img/30_P_1406722990002.jpg','','images/201407/thumb_img/30_thumb_P_1406722990748.jpg','images/201407/source_img/30_P_1406722990243.jpg');");
E_D("replace into `ecs_goods_gallery` values('42','27','images/201407/goods_img/27_P_1406698120624.jpg','','images/201407/thumb_img/27_thumb_P_1406698120165.jpg','images/201407/source_img/27_P_1406698120808.jpg');");
E_D("replace into `ecs_goods_gallery` values('43','26','images/201407/goods_img/26_P_1406698568073.jpg','','images/201407/thumb_img/26_thumb_P_1406698568640.jpg','images/201407/source_img/26_P_1406698568453.jpg');");
E_D("replace into `ecs_goods_gallery` values('47','31','images/201407/goods_img/31_P_1406723378275.jpg','','images/201407/thumb_img/31_thumb_P_1406723378297.jpg','images/201407/source_img/31_P_1406723378686.jpg');");
E_D("replace into `ecs_goods_gallery` values('48','32','images/201407/goods_img/32_P_1406724021813.jpg','','images/201407/thumb_img/32_thumb_P_1406724021883.jpg','images/201407/source_img/32_P_1406724021314.jpg');");

require("../../inc/footer.php");
?>
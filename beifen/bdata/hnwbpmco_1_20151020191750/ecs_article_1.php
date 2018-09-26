<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_article`;");
E_C("CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '',
  `author_email` varchar(60) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `article_type` tinyint(1) unsigned NOT NULL DEFAULT '2',
  `is_open` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `file_url` varchar(255) NOT NULL DEFAULT '',
  `open_type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `click` int(11) DEFAULT '0',
  `order_id` int(10) DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_article` values('1','2','免责条款','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('2','2','隐私保护','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('3','2','咨询热点','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('4','2','联系我们','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('5','2','公司简介','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('6','-1','用户协议','','','','','0','1','1385534806','','0','','','0','0');");
E_D("replace into `ecs_article` values('7','4','公司简介','','','','','0','1','1385536786','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('8','4','体验馆','','','','','0','1','1385536801','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('9','4','诚聘英才','','','','','0','1','1385536815','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('10','5','注册新用户','','','','','0','1','1385536865','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('11','5','订购家具流程','','','','','0','1','1385536874','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('12','5','体验馆购买指导','','','','','0','1','1385536882','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('13','6','收货指南','','','','','0','1','1385536897','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('14','6','体验馆服务费','','','','','0','1','1385536904','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('15','6','物流配送','','','','','0','1','1385536912','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('16','7','45天无理由退换货','','','','','0','1','1385536923','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('17','7','如何申请退款','','','','','0','1','1385536930','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('18','7','维修补件说明','','','','','0','1','1385536939','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('19','8','正品保证','','','','','0','1','1385536952','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('20','8','注册协议','','','','','0','1','1385536960','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('21','8','隐私保护','','','','','0','1','1385536968','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('22','9','铭东第262家体验馆空降古都许','','','','','0','1','1385560416','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('23','9','中原大地再迎新馆！铭东第265','','','','','0','1','1385560443','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('24','9','第266家体验馆花落牡丹江！','','','','','0','1','1385560453','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('25','10','【小苏的家】阳台改榻榻米，仅2.6w！五个月的装修长跑！','','','','','0','1','1385619509','data/article/1385619509329401157.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('26','10','❤95㎡简约婚房❤拱形吊顶+欧式家具（基装+主材+家具清单','','','','','0','1','1385619526','data/article/1385619526838976334.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('27','10','【主妇逆袭】简欧路上，7万123平装修中的零零碎碎（光荣','','','','','0','1','1385619539','data/article/1385619539098465248.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('28','10','高端大气上档次的现代简约装修 美爆了！','','','','','0','1','1385619554','data/article/1385619554034454835.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('29','10','单身女汉子独爱kitty猫儿，单身族居家必备神器！','','','','','0','1','1385619573','data/article/1385619573913737966.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('30','10','19万精装广州135㎡普罗旺斯浪漫地中海三居','','','','','0','1','1385619598','data/article/1385619598392949921.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('31','10','7W换回一个美丽婚房，阳台变身休闲区，红红火火构建魅力','','','','','0','1','1385619618','data/article/1385619618912140726.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('32','10','<76㎡小二居多图实拍细节>小清新文艺范儿，十足的地中','','','','','0','1','1385619637','data/article/1385619637806187071.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('33','11','75平现代简约风格 白+蓝色','','','','家居风格 搭配家居 布置技巧 家居效果图','1','1','1385620453','data/article/1385817893665808062.jpg','1','http://','现在的年轻人面临着城市的喧嚣和污染，激烈的竞争压力，还有忙碌的工作和紧张的生活。因而更加向往清新自然、随意放松的居室环','0','0');");
E_D("replace into `ecs_article` values('34','11','85后艺术温馨家 简单中的清新','','','','','0','1','1385620467','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('35','11','35平超精致小窝 小空间大梦想','','','','','0','1','1385620493','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('36','11','网友详谈二手房翻修','','','','','0','1','1385620506','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('37','11','70平极致浪漫公寓 我的浪漫满','','','','','0','1','1385620520','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('38','11','7万装60平小婚房 简约温馨气','','','','','0','1','1385620533','','0','http://','','0','0');");
E_D("replace into `ecs_article` values('39','11','8万半包装的95平温暖简约3居','','','','','0','1','1385620546','data/article/1385819386997700908.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('40','11','85后感谢设计师 89平浪漫清新','','','','','0','1','1385620557','data/article/1385819392599038693.jpg','1','http://','','0','0');");
E_D("replace into `ecs_article` values('54','12','秀家1','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_64805.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_29871.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_34433.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_97168.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_71342.jpg\" alt=\"\" />','test','','','0','1','1388477242','data/article/1388477242625246410.jpg','2','','','21','20');");
E_D("replace into `ecs_article` values('55','12','秀家2','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084547_43261.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084547_27179.jpg\" alt=\"\" />','test','','','0','1','1388479564','data/article/1388479563414537972.jpg','2','','','13','19');");
E_D("replace into `ecs_article` values('56','12','秀家3','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084703_87774.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084703_31846.jpg\" alt=\"\" />','test','','','0','1','1388479639','data/article/1388479639916346969.jpg','2','','','16','18');");
E_D("replace into `ecs_article` values('57','12','秀家4','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084820_84168.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084821_78919.jpg\" alt=\"\" />','test','','','0','1','1388479817','data/article/1388479817406928931.jpg','2','','','11','17');");
E_D("replace into `ecs_article` values('58','12','秀家5','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085106_84720.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085106_92688.jpg\" alt=\"\" />','test','','','0','1','1388479888','data/article/1388479888856574725.jpg','2','','','11','16');");
E_D("replace into `ecs_article` values('59','12','秀家6','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085409_64755.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085409_27295.jpg\" alt=\"\" />','test','','','0','1','1388480065','data/article/1388480065215572737.jpg','2','','','25','15');");
E_D("replace into `ecs_article` values('60','12','秀家7','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085619_42901.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085619_93430.jpg\" alt=\"\" />','test','','','0','1','1388480194','data/article/1388480194432497220.jpg','2','','','39','10');");
E_D("replace into `ecs_article` values('61','12','秀家20','<img src=\"/includes/kindeditor/php/../../../images/upload/image/20140105/20140105044657_90436.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20140105/20140105044658_95536.jpg\" alt=\"\" /><br />','test','','','0','0','1388897234','data/article/1388897234107758516.jpg','2','','','2','3');");

require("../../inc/footer.php");
?>
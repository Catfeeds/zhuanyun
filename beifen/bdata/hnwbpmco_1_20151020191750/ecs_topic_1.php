<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_topic`;");
E_C("CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL DEFAULT '0',
  `end_time` int(10) NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL DEFAULT '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) DEFAULT NULL,
  `title_pic` varchar(255) DEFAULT NULL,
  `base_style` char(6) DEFAULT NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_topic` values('1','专题名称','','1385827200','1481731200','O:8:\"stdClass\":1:{s:7:\"default\";a:14:{i:0;s:45:\"美式古典 双面描金雕花排骨架床|1\";i:1;s:64:\"欧式田园 1.8米水晶拉扣双人床 水牛头层真皮床|2\";i:2;s:51:\"欧式田园 粉红玫瑰立体雕花排骨架床|3\";i:3;s:51:\"法式风格 1.8米皮拉扣床 PU发泡雕花床|4\";i:4;s:48:\"地中海风格 美国进口白杨木双人床|5\";i:5;s:43:\"现代风格 1.8米软床 头层牛皮床|6\";i:6;s:63:\"时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)|7\";i:7;s:53:\"奢华霸气 进口全真皮沙发套装（1+2+3）|8\";i:8;s:47:\"清新雅致 可拆装沙发套装（1+2+3）|9\";i:9;s:62:\"温柔海风 唯美布艺左转角沙发（1+3+左贵妃）|10\";i:10;s:48:\"橡胶木实木餐桌椅套装（七件套）|11\";i:11;s:48:\"餐厅6件套（1餐桌+4餐椅+1餐边柜）|12\";i:12;s:51:\"餐厅5件套装（1.5餐台+4无扶手餐椅）|13\";i:13;s:49:\"美式田园 实木餐厅套装（1桌+4椅）|14\";}}','','','data/afficheimg/20131215opjtre.png','data/afficheimg/20131215itkbsy.jpg','33b360','','专题页面关键字','专题页面描述');");

require("../../inc/footer.php");
?>
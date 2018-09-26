<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `id_value` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `art_id` int(10) DEFAULT '0',
  `order_id` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','1','76374482@qq.com','','太精美了，跟想象中的样子差不多，等我收拾好了，也要来秀家！！！','5','1385992693','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('2','0','1','76374482@qq.com','','床很漂亮，物有所值','5','1385992710','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('3','0','1','76374482@qq.com','','床非常的漂亮，我女儿很喜欢，朋友们也都说好。我女儿房间的大衣柜、梳妆台还有大衣柜都在这里买的，个个都那么的美！非常适合年轻人装修。赞一个！','4','1385992733','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('4','0','1','76374482@qq.com','','这个床好喜欢哦，粉红色的玫瑰雕花看着真喜庆','3','1385992754','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('5','0','1','76374482@qq.com','','喜欢玫瑰花','1','1385992774','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('6','0','1','76374482@qq.com','','这款床超不错的，家人都喜欢，下次还要订购这家店的家具，服务也特别好的。','5','1385992821','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('7','0','1','76374482@qq.com','','这个床真漂亮啊！！！很喜欢！！简直是爽呆了！就是等的时间长了！！','5','1385992844','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('8','0','1','76374482@qq.com','admin','希望您继续关注铭东，祝您生活愉快！','0','1385993039','127.0.0.1','0','7','0','0','0');");
E_D("replace into `ecs_comment` values('9','1','46','admin@qq.com','','搭配绿色的地垫感觉还是不错的呢','5','1386056412','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('10','1','46','admin@qq.com','','好喜欢这个吊椅！','5','1386057060','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('11','0','10','76374482@qq.com','','比我想象中的还要大气，铺上床单以后就更豪华了，非常满意！','5','1386086375','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('12','0','9','76374482@qq.com','','超大气的一款床！很喜欢！送货也很给力！','5','1386086401','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('13','0','8','76374482@qq.com','','床的质量很好，很有质感，喜欢','5','1386086425','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('14','0','7','76374482@qq.com','','很好看，质量很好，服务也很好。','5','1386086455','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('15','0','14','76374482@qq.com','','很好很不错， 在铭东买的这些家具都很好。。 ','5','1386086485','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('16','0','13','76374482@qq.com','','这个床不错 简单来说就是高端大气上档次 ','5','1386086514','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('17','0','12','76374482@qq.com','','呵呵，欧式还得油画来点缀(woshou)家具样式，质量度还不错的','5','1386086542','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('18','0','11','76374482@qq.com','','楼主床好大气，房间搭配也好，特别是油画好有情调:-)','3','1386086573','127.0.0.1','1','0','0','0','0');");
E_D("replace into `ecs_comment` values('27','0','4','','test','颜色不错，美观大气，喜欢','5','1388477242','127.0.0.1','1','0','1','54','20');");
E_D("replace into `ecs_comment` values('26','0','3','','test','颜色不错，美观大气，喜欢','5','1388477242','127.0.0.1','1','0','1','54','20');");
E_D("replace into `ecs_comment` values('25','0','1','','test','颜色不错，美观大气，喜欢','5','1388477242','127.0.0.1','1','0','1','54','20');");
E_D("replace into `ecs_comment` values('28','0','5','','test','颜色不错，美观大气，喜欢','5','1388477242','127.0.0.1','1','0','1','54','20');");
E_D("replace into `ecs_comment` values('29','0','25','','test','比较精致，特别是哪个后背板，散发香味','5','1388479564','127.0.0.1','1','0','1','55','19');");
E_D("replace into `ecs_comment` values('30','0','26','','test','餐桌也不错，但是如果有稍微小一点的就更好了','5','1388479639','127.0.0.1','1','0','1','56','18');");
E_D("replace into `ecs_comment` values('31','0','21','','test','很好看，质量很好，服务也很好','5','1388479817','127.0.0.1','1','0','1','57','17');");
E_D("replace into `ecs_comment` values('32','0','21','','test','挺大气的，配搭很和谐！！','5','1388479888','127.0.0.1','1','0','1','58','16');");
E_D("replace into `ecs_comment` values('33','0','26','','test','家具不错，才有这么好的整体效果','5','1388480065','127.0.0.1','1','0','1','59','15');");
E_D("replace into `ecs_comment` values('34','0','2','','test','怎么说呢 超值的 皮质很舒服','5','1388480194','127.0.0.1','1','0','1','60','10');");
E_D("replace into `ecs_comment` values('35','1','60','admin@qq.com','test','很实用的书桌 大方 上档次 黄杨实木','5','1388480270','127.0.0.1','1','0','1','0','0');");
E_D("replace into `ecs_comment` values('36','1','60','admin@qq.com','test','书桌不错，很有复古气息','5','1388480284','127.0.0.1','1','0','1','0','0');");
E_D("replace into `ecs_comment` values('37','0','1','','test','评价内容','5','1388897234','127.0.0.1','1','0','1','61','3');");
E_D("replace into `ecs_comment` values('38','0','1','343555904@qq.com','','546645456','5','1402795923','182.245.208.49','0','0','0','0','0');");
E_D("replace into `ecs_comment` values('39','0','26','se@df.com','','请问','5','1403521651','14.153.119.51','0','0','0','0','0');");

require("../../inc/footer.php");
?>
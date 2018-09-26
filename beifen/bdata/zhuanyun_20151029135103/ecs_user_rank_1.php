<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_rank`;");
E_C("CREATE TABLE `ecs_user_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(30) NOT NULL DEFAULT '',
  `min_points` int(10) unsigned NOT NULL DEFAULT '0',
  `max_points` int(10) unsigned NOT NULL DEFAULT '0',
  `discount` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_price` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `special_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ur_desc` varchar(500) DEFAULT NULL COMMENT '描述',
  `ur_color` varchar(20) DEFAULT NULL COMMENT '颜色',
  `ur_icon` varchar(500) DEFAULT NULL COMMENT '图标',
  `ur_notice` tinyint(4) DEFAULT NULL COMMENT '通知方式',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_rank` values('1','普通会员','0','1000','100','1','0','','blue','','0');");
E_D("replace into `ecs_user_rank` values('2','中级会员','1001','2000','90','1','0','','','','0');");
E_D("replace into `ecs_user_rank` values('3','高级会员','2001','8000','80','1','0','','#FBAC59','/code/engrave/admin/engraveuploads/image/20150302/20150302074543_10458.gif','0');");
E_D("replace into `ecs_user_rank` values('4','超高级会员','8001','10000','30','1','0','','','','0');");
E_D("replace into `ecs_user_rank` values('5','123','10001','20000','100','1','0','123','green','','0');");
E_D("replace into `ecs_user_rank` values('6','tt','20001','30000','100','1','0','<h1>\r\n	12312\r\n</h1>','red','/code/engrave/admin/engraveuploads/image/20150302/20150302074436_47545.gif','0');");
E_D("replace into `ecs_user_rank` values('7','商家','0','0','80','0','1','','red','','0');");
E_D("replace into `ecs_user_rank` values('8','超级vip','30000','50000','90','1','0','','','','0');");

require("../../inc/footer.php");
?>
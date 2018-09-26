<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_engrave_admin_log`;");
E_C("CREATE TABLE `ecs_engrave_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=957 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_engrave_admin_log` values('942','1418796653','1',': 1234','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('943','1418796844','1','编辑: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('944','1418797022','1','编辑网站分类: 12355','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('945','1418797339','1','删除网站分类: tt1','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('946','1418797727','1','删除网站管理: amazon1','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('947','1418798211','1','编辑网站分类: 1','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('948','1418798214','1','删除网站分类: 1','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('949','1418798218','1','添加网站分类: tt','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('950','1421302426','1','删除网站管理: 公司新闻测试','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('951','1421303016','1','删除网站管理: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('952','1421303052','1','删除网站管理: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('953','1421303080','1','删除网站管理: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('954','1421303100','1','删除网站管理: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('955','1421303121','1','删除网站管理: 123','127.0.0.1');");
E_D("replace into `ecs_engrave_admin_log` values('956','1421303141','1','删除网站管理: 123','127.0.0.1');");

require("../../inc/footer.php");
?>
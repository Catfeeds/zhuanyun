<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `data` longtext NOT NULL,
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('7466bd87d7248b777cffb15aa67a66db','4294967295','a:10:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:13:\"captcha_login\";s:16:\"Zjc0NjhiOWVhYQ==\";s:12:\"captcha_word\";s:16:\"MDY2YzkzNDE5Yg==\";s:9:\"last_time\";i:1420528873;s:7:\"last_ip\";s:0:\"\";}');");
E_D("replace into `ecs_sessions_data` values('ea71ebb333e6764580facde8d545e7b5','4294967295','a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:5;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"MjQzN2JlNDFlMQ==\";s:13:\"captcha_login\";s:16:\"NTFkNmM0YjE4NQ==\";}');");
E_D("replace into `ecs_sessions_data` values('5fad98b6ab38382d9b62387434e255f1','4294967295','a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:1;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1445854901;}');");

require("../../inc/footer.php");
?>
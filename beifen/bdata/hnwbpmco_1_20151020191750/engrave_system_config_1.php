<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_system_config`;");
E_C("CREATE TABLE `engrave_system_config` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(12) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=707 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_system_config` values('1','0','system_basic','group','','','','1');");
E_D("replace into `engrave_system_config` values('2','0','system_member','group','','','','1');");
E_D("replace into `engrave_system_config` values('3','0','system_order','group','','','','1');");
E_D("replace into `engrave_system_config` values('4','0','system_email','group','','','','1');");
E_D("replace into `engrave_system_config` values('5','0','system_advert','group','','','','1');");
E_D("replace into `engrave_system_config` values('6','0','hidden','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('7','0','system_wechat','group','','','','1');");
E_D("replace into `engrave_system_config` values('101','1','s_sitename','text','','','engrave','1');");
E_D("replace into `engrave_system_config` values('102','1','s_sitelogo','file','','','','1');");
E_D("replace into `engrave_system_config` values('103','1','s_siteaddress','text','','','engrave','1');");
E_D("replace into `engrave_system_config` values('104','1','s_title','text','','','engrave','1');");
E_D("replace into `engrave_system_config` values('105','1','s_urlrewritter','text','','','','1');");
E_D("replace into `engrave_system_config` values('106','1','s_indexkey','textarea','','','','1');");
E_D("replace into `engrave_system_config` values('107','1','s_sitedescription','textarea','','','','1');");
E_D("replace into `engrave_system_config` values('108','1','s_sitekey','text','','','','1');");
E_D("replace into `engrave_system_config` values('109','1','s_companyname','text','','','','1');");
E_D("replace into `engrave_system_config` values('110','1','s_connector','text','','','','1');");
E_D("replace into `engrave_system_config` values('111','1','s_landline','text','','','','1');");
E_D("replace into `engrave_system_config` values('112','1','s_fax','text','','','','1');");
E_D("replace into `engrave_system_config` values('113','1','s_phone','text','','','','1');");
E_D("replace into `engrave_system_config` values('114','1','s_email','text','','','','1');");
E_D("replace into `engrave_system_config` values('115','1','s_complainmail','text','','','','1');");
E_D("replace into `engrave_system_config` values('116','1','s_postcode','text','','','','1');");
E_D("replace into `engrave_system_config` values('117','1','s_connectaddress','text','','','','1');");
E_D("replace into `engrave_system_config` values('118','1','s_sitebottommessge','editor','','','','1');");
E_D("replace into `engrave_system_config` values('201','2','s_member_register','select','0,1','','0','1');");
E_D("replace into `engrave_system_config` values('202','2','s_login','select','0,1,2','','0','1');");
E_D("replace into `engrave_system_config` values('203','2','s_recommend_code','text','','','{Number}','1');");
E_D("replace into `engrave_system_config` values('204','2','s_recommend_code_length','text','','','11','1');");
E_D("replace into `engrave_system_config` values('205','2','s_storage','text','','','{Random}','1');");
E_D("replace into `engrave_system_config` values('206','2','s_random','text','','','4','1');");
E_D("replace into `engrave_system_config` values('207','2','s_waterlevel','text','','','6','1');");
E_D("replace into `engrave_system_config` values('208','2','s_register_integral','text','','','10','1');");
E_D("replace into `engrave_system_config` values('209','2','s_member_popularize','select','0,1,2','','1','1');");
E_D("replace into `engrave_system_config` values('210','2','s_recommend_integral','text','','','20','1');");
E_D("replace into `engrave_system_config` values('211','2','s_recommended_integral','text','','','10','1');");
E_D("replace into `engrave_system_config` values('212','2','s_staffcode','text','','','','1');");
E_D("replace into `engrave_system_config` values('213','2','s_cookies_region','text','','','','1');");
E_D("replace into `engrave_system_config` values('214','2','s_cookies_length','text','','','1440','1');");
E_D("replace into `engrave_system_config` values('215','2','s_register_protocol','editor','','','<b>这是个注册协议 &nbsp;你要是不同意就别用 </b>','1');");
E_D("replace into `engrave_system_config` values('216','2','s_pay_protocol','editor','','','','1');");
E_D("replace into `engrave_system_config` values('217','2','s_withdraw','text','','','10','1');");
E_D("replace into `engrave_system_config` values('218','2','s_shipping_address','text','','','','1');");
E_D("replace into `engrave_system_config` values('219','2','s_serialnumber','text','','','16','1');");
E_D("replace into `engrave_system_config` values('220','2','s_forecastaward','text','','','10','1');");
E_D("replace into `engrave_system_config` values('221','2','s_warehouse_maxusers','text','','','100','1');");
E_D("replace into `engrave_system_config` values('301','3','s_ordernumberformat','text','','','{Time}{Number}','1');");
E_D("replace into `engrave_system_config` values('302','3','s_timeformat','text','','','ymd','1');");
E_D("replace into `engrave_system_config` values('303','3','s_orderwaterlevel','text','','','3','1');");
E_D("replace into `engrave_system_config` values('304','3','s_orderflowpath','manual','','','1','1');");
E_D("replace into `engrave_system_config` values('305','3','s_waybillformat','text','','','{Time}{Number}','1');");
E_D("replace into `engrave_system_config` values('306','3','s_waybilltimeformat','text','','','ymds','1');");
E_D("replace into `engrave_system_config` values('307','3','s_waybillwaterlength','text','','','5','1');");
E_D("replace into `engrave_system_config` values('312','3','s_orderautotime','text','','','3','1');");
E_D("replace into `engrave_system_config` values('313','3','s_advancescale','text','','','0','1');");
E_D("replace into `engrave_system_config` values('314','3','s_premiumscale','text','','','0.02','1');");
E_D("replace into `engrave_system_config` values('315','3','s_bulkdiscount','text','','','1','1');");
E_D("replace into `engrave_system_config` values('316','3','s_servicecharge','text','','','1','1');");
E_D("replace into `engrave_system_config` values('317','3','s_canbulkscale','text','','','0.01','1');");
E_D("replace into `engrave_system_config` values('318','3','s_maxintegral','text','','','1000','1');");
E_D("replace into `engrave_system_config` values('319','3','s_precision','manual','0,1,2,3,4,5,6,7,8','','0','1');");
E_D("replace into `engrave_system_config` values('320','3','s_weightunit','text','','','g','1');");
E_D("replace into `engrave_system_config` values('321','3','s_integralprice','text','','','0.01','1');");
E_D("replace into `engrave_system_config` values('322','3','s_rechargescale','text','','','1','1');");
E_D("replace into `engrave_system_config` values('323','3','s_appraisescale','text','','','1','1');");
E_D("replace into `engrave_system_config` values('324','3','s_dialoguescale','text','','','6.5','1');");
E_D("replace into `engrave_system_config` values('325','3','s_priceintegral','text','','','0.01','1');");
E_D("replace into `engrave_system_config` values('401','4','s_smtpserver','text','','','smtp.126.com','1');");
E_D("replace into `engrave_system_config` values('402','4','s_smtpmail','text','','','qdpcfans@126.com','1');");
E_D("replace into `engrave_system_config` values('403','4','s_smtpmailaccount','text','','','qdpcfans@126.com','1');");
E_D("replace into `engrave_system_config` values('404','4','s_smtpmailpwd','password','','','123123','1');");
E_D("replace into `engrave_system_config` values('405','4','s_smtpport','text','','','25','1');");
E_D("replace into `engrave_system_config` values('406','4','s_smtpvalidate','manual','','','1','0');");
E_D("replace into `engrave_system_config` values('407','4','s_smtpsendmail','manual','','','77732929@qq.com','1');");
E_D("replace into `engrave_system_config` values('501','5','s_topadvert','editor','','','<p>\r\n	<img src=\"/shop/js/editor/attached/image/20150716/20150716134207_12804.jpg\" alt=\"\" /> \r\n</p>','1');");
E_D("replace into `engrave_system_config` values('502','5','s_leftadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('503','5','s_bottomadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('504','5','s_beforelistadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('505','5','s_afterlistadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('506','5','s_beforecontentadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('507','5','s_contentbottomadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('508','5','s_leftcontentadvert','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('509','5','s_beforewritten','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('510','5','s_aftercontentadvert','editor','','','1','1');");
E_D("replace into `engrave_system_config` values('511','5','s_innerwritten','editor','','','<p>\r\n	<br />\r\n</p>','1');");
E_D("replace into `engrave_system_config` values('601','6','integrate_code','hidden','','','engraveweb','1');");
E_D("replace into `engrave_system_config` values('602','6','integrate_config','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('603','6','hash_code','hidden','','','93cca7258ca52ad07b36e47f2baa7685','1');");
E_D("replace into `engrave_system_config` values('604','6','template','hidden','','','default','1');");
E_D("replace into `engrave_system_config` values('605','6','install_date','hidden','','','1385534808','1');");
E_D("replace into `engrave_system_config` values('606','6','engrave_version','hidden','','','v2.7.3','1');");
E_D("replace into `engrave_system_config` values('607','6','sms_user_name','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('608','6','sms_password','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('609','6','sms_auth_str','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('610','6','sms_domain','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('611','6','sms_count','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('612','6','sms_total_money','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('613','6','sms_balance','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('614','6','sms_last_request','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('616','6','affiliate','hidden','','','a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}','1');");
E_D("replace into `engrave_system_config` values('617','6','captcha','hidden','','','39','1');");
E_D("replace into `engrave_system_config` values('618','6','captcha_width','hidden','','','100','1');");
E_D("replace into `engrave_system_config` values('619','6','captcha_height','hidden','','','20','1');");
E_D("replace into `engrave_system_config` values('620','6','sitemap','hidden','','','a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}','0');");
E_D("replace into `engrave_system_config` values('621','6','points_rule','hidden','','','','0');");
E_D("replace into `engrave_system_config` values('622','6','flash_theme','hidden','','','dynfocus','1');");
E_D("replace into `engrave_system_config` values('623','6','stylename','hidden','','','','1');");
E_D("replace into `engrave_system_config` values('624','6','page_size','hidden','','','10','1');");
E_D("replace into `engrave_system_config` values('625','6','s_currecy_jpyid','hidden','','','1','1');");
E_D("replace into `engrave_system_config` values('701','7','s_wechatappid','text','','','','1');");
E_D("replace into `engrave_system_config` values('702','7','s_wechatappsecret','text','','','','1');");
E_D("replace into `engrave_system_config` values('703','7','s_wechaturl','text','','','','1');");
E_D("replace into `engrave_system_config` values('704','7','s_wechattoken','text','','','','1');");
E_D("replace into `engrave_system_config` values('705','7','s_wechatdes','textarea','','','','1');");
E_D("replace into `engrave_system_config` values('706','7','s_wechatreg','text','','','','1');");

require("../../inc/footer.php");
?>
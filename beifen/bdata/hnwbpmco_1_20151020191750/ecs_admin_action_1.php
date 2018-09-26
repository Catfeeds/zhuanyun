<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_action`;");
E_C("CREATE TABLE `ecs_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `action_code` varchar(60) NOT NULL DEFAULT '',
  `relevance` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=249 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_action` values('1','0','goods','');");
E_D("replace into `ecs_admin_action` values('2','0','cms_manage','');");
E_D("replace into `ecs_admin_action` values('3','0','users_manage','');");
E_D("replace into `ecs_admin_action` values('4','0','priv_manage','');");
E_D("replace into `ecs_admin_action` values('5','0','sys_manage','');");
E_D("replace into `ecs_admin_action` values('6','0','order_manage','');");
E_D("replace into `ecs_admin_action` values('7','0','promotion','');");
E_D("replace into `ecs_admin_action` values('8','0','email','');");
E_D("replace into `ecs_admin_action` values('9','0','templates_manage','');");
E_D("replace into `ecs_admin_action` values('10','0','db_manage','');");
E_D("replace into `ecs_admin_action` values('11','0','sms_manage','');");
E_D("replace into `ecs_admin_action` values('21','1','goods_manage','');");
E_D("replace into `ecs_admin_action` values('22','1','remove_back','');");
E_D("replace into `ecs_admin_action` values('23','1','cat_manage','');");
E_D("replace into `ecs_admin_action` values('24','1','cat_drop','cat_manage');");
E_D("replace into `ecs_admin_action` values('25','1','attr_manage','');");
E_D("replace into `ecs_admin_action` values('26','1','brand_manage','');");
E_D("replace into `ecs_admin_action` values('27','1','comment_priv','');");
E_D("replace into `ecs_admin_action` values('84','1','tag_manage','');");
E_D("replace into `ecs_admin_action` values('30','2','article_cat','');");
E_D("replace into `ecs_admin_action` values('31','2','article_manage','');");
E_D("replace into `ecs_admin_action` values('32','2','shopinfo_manage','');");
E_D("replace into `ecs_admin_action` values('33','2','shophelp_manage','');");
E_D("replace into `ecs_admin_action` values('34','2','vote_priv','');");
E_D("replace into `ecs_admin_action` values('35','7','topic_manage','');");
E_D("replace into `ecs_admin_action` values('74','4','template_manage','');");
E_D("replace into `ecs_admin_action` values('73','3','feedback_priv','');");
E_D("replace into `ecs_admin_action` values('38','3','integrate_users','');");
E_D("replace into `ecs_admin_action` values('39','3','sync_users','integrate_users');");
E_D("replace into `ecs_admin_action` values('40','3','users_manage','');");
E_D("replace into `ecs_admin_action` values('41','3','users_drop','users_manage');");
E_D("replace into `ecs_admin_action` values('42','3','user_rank','');");
E_D("replace into `ecs_admin_action` values('85','3','surplus_manage','account_manage');");
E_D("replace into `ecs_admin_action` values('43','4','admin_manage','');");
E_D("replace into `ecs_admin_action` values('44','4','admin_drop','admin_manage');");
E_D("replace into `ecs_admin_action` values('45','4','allot_priv','admin_manage');");
E_D("replace into `ecs_admin_action` values('46','4','logs_manage','');");
E_D("replace into `ecs_admin_action` values('47','4','logs_drop','logs_manage');");
E_D("replace into `ecs_admin_action` values('48','5','shop_config','');");
E_D("replace into `ecs_admin_action` values('49','5','ship_manage','');");
E_D("replace into `ecs_admin_action` values('50','5','payment','');");
E_D("replace into `ecs_admin_action` values('51','5','shiparea_manage','');");
E_D("replace into `ecs_admin_action` values('52','5','area_manage','');");
E_D("replace into `ecs_admin_action` values('53','6','order_os_edit','');");
E_D("replace into `ecs_admin_action` values('54','6','order_ps_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('55','6','order_ss_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('56','6','order_edit','order_os_edit');");
E_D("replace into `ecs_admin_action` values('57','6','order_view','');");
E_D("replace into `ecs_admin_action` values('58','6','order_view_finished','');");
E_D("replace into `ecs_admin_action` values('59','6','repay_manage','');");
E_D("replace into `ecs_admin_action` values('60','6','booking','');");
E_D("replace into `ecs_admin_action` values('61','6','sale_order_stats','');");
E_D("replace into `ecs_admin_action` values('62','6','client_flow_stats','');");
E_D("replace into `ecs_admin_action` values('78','7','snatch_manage','');");
E_D("replace into `ecs_admin_action` values('83','7','ad_manage','');");
E_D("replace into `ecs_admin_action` values('80','7','gift_manage','');");
E_D("replace into `ecs_admin_action` values('81','7','card_manage','');");
E_D("replace into `ecs_admin_action` values('70','1','goods_type','');");
E_D("replace into `ecs_admin_action` values('82','7','pack','');");
E_D("replace into `ecs_admin_action` values('79','7','bonus_manage','');");
E_D("replace into `ecs_admin_action` values('75','5','friendlink','');");
E_D("replace into `ecs_admin_action` values('76','5','db_backup','');");
E_D("replace into `ecs_admin_action` values('77','5','db_renew','db_backup');");
E_D("replace into `ecs_admin_action` values('86','4','agency_manage','');");
E_D("replace into `ecs_admin_action` values('87','3','account_manage','');");
E_D("replace into `ecs_admin_action` values('88','5','flash_manage','');");
E_D("replace into `ecs_admin_action` values('89','5','navigator','');");
E_D("replace into `ecs_admin_action` values('90','7','auction','');");
E_D("replace into `ecs_admin_action` values('91','7','group_by','');");
E_D("replace into `ecs_admin_action` values('92','7','favourable','');");
E_D("replace into `ecs_admin_action` values('93','7','whole_sale','');");
E_D("replace into `ecs_admin_action` values('94','1','goods_auto','');");
E_D("replace into `ecs_admin_action` values('95','2','article_auto','');");
E_D("replace into `ecs_admin_action` values('96','5','cron','');");
E_D("replace into `ecs_admin_action` values('97','5','affiliate','');");
E_D("replace into `ecs_admin_action` values('98','5','affiliate_ck','');");
E_D("replace into `ecs_admin_action` values('99','8','attention_list','');");
E_D("replace into `ecs_admin_action` values('100','8','email_list','');");
E_D("replace into `ecs_admin_action` values('101','8','magazine_list','');");
E_D("replace into `ecs_admin_action` values('102','8','view_sendlist','');");
E_D("replace into `ecs_admin_action` values('103','1','virualcard','');");
E_D("replace into `ecs_admin_action` values('104','7','package_manage','');");
E_D("replace into `ecs_admin_action` values('105','1','picture_batch','');");
E_D("replace into `ecs_admin_action` values('106','1','goods_export','');");
E_D("replace into `ecs_admin_action` values('107','1','goods_batch','');");
E_D("replace into `ecs_admin_action` values('108','1','gen_goods_script','');");
E_D("replace into `ecs_admin_action` values('109','5','sitemap','');");
E_D("replace into `ecs_admin_action` values('110','5','file_priv','');");
E_D("replace into `ecs_admin_action` values('111','5','file_check','');");
E_D("replace into `ecs_admin_action` values('112','9','template_select','');");
E_D("replace into `ecs_admin_action` values('113','9','template_setup','');");
E_D("replace into `ecs_admin_action` values('114','9','library_manage','');");
E_D("replace into `ecs_admin_action` values('115','9','lang_edit','');");
E_D("replace into `ecs_admin_action` values('116','9','backup_setting','');");
E_D("replace into `ecs_admin_action` values('117','9','mail_template','');");
E_D("replace into `ecs_admin_action` values('118','10','db_backup','');");
E_D("replace into `ecs_admin_action` values('119','10','db_renew','');");
E_D("replace into `ecs_admin_action` values('120','10','db_optimize','');");
E_D("replace into `ecs_admin_action` values('121','10','sql_query','');");
E_D("replace into `ecs_admin_action` values('122','10','convert','');");
E_D("replace into `ecs_admin_action` values('124','11','sms_send','');");
E_D("replace into `ecs_admin_action` values('128','7','exchange_goods','');");
E_D("replace into `ecs_admin_action` values('129','6','delivery_view','');");
E_D("replace into `ecs_admin_action` values('130','6','back_view','');");
E_D("replace into `ecs_admin_action` values('131','5','reg_fields','');");
E_D("replace into `ecs_admin_action` values('132','5','shop_authorized','');");
E_D("replace into `ecs_admin_action` values('133','5','webcollect_manage','');");
E_D("replace into `ecs_admin_action` values('134','4','suppliers_manage','');");
E_D("replace into `ecs_admin_action` values('135','4','role_manage','');");
E_D("replace into `ecs_admin_action` values('136','0','01_package_manage','');");
E_D("replace into `ecs_admin_action` values('137','0','02_order_manage','');");
E_D("replace into `ecs_admin_action` values('138','0','03_content_manage','');");
E_D("replace into `ecs_admin_action` values('139','0','04_channel_manage','');");
E_D("replace into `ecs_admin_action` values('140','0','05_shopping_directory','');");
E_D("replace into `ecs_admin_action` values('142','0','07_logistics_system','');");
E_D("replace into `ecs_admin_action` values('143','0','08_marketing_manage','');");
E_D("replace into `ecs_admin_action` values('144','0','09_report_statistics','');");
E_D("replace into `ecs_admin_action` values('145','0','10_consul_manage','');");
E_D("replace into `ecs_admin_action` values('146','0','11_help_center','');");
E_D("replace into `ecs_admin_action` values('147','0','12_system_manage','');");
E_D("replace into `ecs_admin_action` values('148','0','13_wechat_platform','');");
E_D("replace into `ecs_admin_action` values('149','0','14_copyright_information','');");
E_D("replace into `ecs_admin_action` values('150','136','0101_package_list','');");
E_D("replace into `ecs_admin_action` values('151','136','0102_add_waybill','');");
E_D("replace into `ecs_admin_action` values('152','136','0103_has_expired','');");
E_D("replace into `ecs_admin_action` values('153','136','0104_been_destroyed','');");
E_D("replace into `ecs_admin_action` values('154','136','0105_fast_storage','');");
E_D("replace into `ecs_admin_action` values('155','136','0106_services','');");
E_D("replace into `ecs_admin_action` values('156','136','0107_bulk_import','');");
E_D("replace into `ecs_admin_action` values('157','136','0108_edit_services','');");
E_D("replace into `ecs_admin_action` values('158','137','0201_all_orders','');");
E_D("replace into `ecs_admin_action` values('159','137','0202_untreated','');");
E_D("replace into `ecs_admin_action` values('160','137','0203_been_picking','');");
E_D("replace into `ecs_admin_action` values('161','137','0204_pending_payment','');");
E_D("replace into `ecs_admin_action` values('162','137','0205_pending_shipped','');");
E_D("replace into `ecs_admin_action` values('163','137','0206_shipped','');");
E_D("replace into `ecs_admin_action` values('164','137','0207_been_completed','');");
E_D("replace into `ecs_admin_action` values('165','137','0208_deleted','');");
E_D("replace into `ecs_admin_action` values('166','137','0209_tracking_manage','');");
E_D("replace into `ecs_admin_action` values('167','137','0214_waybill_trackin','');");
E_D("replace into `ecs_admin_action` values('168','137','0210_evalua_manage','');");
E_D("replace into `ecs_admin_action` values('169','137','0211_order_tracking','');");
E_D("replace into `ecs_admin_action` values('170','137','0212_batch_tracking','');");
E_D("replace into `ecs_admin_action` values('171','137','0213_waybill_manage','');");
E_D("replace into `ecs_admin_action` values('172','137','0216_tracking_edit','');");
E_D("replace into `ecs_admin_action` values('173','137','0213_waybill_add','');");
E_D("replace into `ecs_admin_action` values('174','137','0213_waybill_edit','');");
E_D("replace into `ecs_admin_action` values('175','138','0301_article_manage','');");
E_D("replace into `ecs_admin_action` values('176','138','0302_add_article','');");
E_D("replace into `ecs_admin_action` values('177','138','0303_course_manage','');");
E_D("replace into `ecs_admin_action` values('178','138','0304_add_course','');");
E_D("replace into `ecs_admin_action` values('179','138','0305_product_manage','');");
E_D("replace into `ecs_admin_action` values('180','138','0306_add_product','');");
E_D("replace into `ecs_admin_action` values('181','139','0401_channel_list','');");
E_D("replace into `ecs_admin_action` values('182','139','0402_add_channel','');");
E_D("replace into `ecs_admin_action` values('183','140','0501_site_classification','');");
E_D("replace into `ecs_admin_action` values('184','140','0502_add_classification','');");
E_D("replace into `ecs_admin_action` values('185','140','0503_site_manage','');");
E_D("replace into `ecs_admin_action` values('186','140','0504_add_site','');");
E_D("replace into `ecs_admin_action` values('187','142','0701_money_manage','');");
E_D("replace into `ecs_admin_action` values('188','142','0702_add_money','');");
E_D("replace into `ecs_admin_action` values('189','142','0703_distribution_area','');");
E_D("replace into `ecs_admin_action` values('190','142','0704_add_distribution_area','');");
E_D("replace into `ecs_admin_action` values('191','142','0705_shipping','');");
E_D("replace into `ecs_admin_action` values('192','142','0706_add_shipping','');");
E_D("replace into `ecs_admin_action` values('193','142','0707_payment_meth','');");
E_D("replace into `ecs_admin_action` values('194','142','0708_add_payment','');");
E_D("replace into `ecs_admin_action` values('195','142','0709_receive_warehouse','');");
E_D("replace into `ecs_admin_action` values('196','142','0710_add_receware','');");
E_D("replace into `ecs_admin_action` values('197','142','0711_value_services','');");
E_D("replace into `ecs_admin_action` values('198','142','0712_add_services','');");
E_D("replace into `ecs_admin_action` values('199','142','0713_collabor_logistics','');");
E_D("replace into `ecs_admin_action` values('200','142','0714_add_logistics','');");
E_D("replace into `ecs_admin_action` values('201','142','0715_waybill_module','');");
E_D("replace into `ecs_admin_action` values('202','142','0716_module_add','');");
E_D("replace into `ecs_admin_action` values('203','142','0717_dictionary_manage','');");
E_D("replace into `ecs_admin_action` values('204','142','0718_dictionary_add','');");
E_D("replace into `ecs_admin_action` values('205','142','0719_dictionary_group_manage','');");
E_D("replace into `ecs_admin_action` values('206','142','0720_dictionary_group_add','');");
E_D("replace into `ecs_admin_action` values('207','142','0721_value_service_setting','');");
E_D("replace into `ecs_admin_action` values('208','142','0722_add_service_setting','');");
E_D("replace into `ecs_admin_action` values('209','142','0722_add_service_setting','');");
E_D("replace into `ecs_admin_action` values('210','142','0724_ratetax_table','');");
E_D("replace into `ecs_admin_action` values('211','142','0725_add_ratetax_table','');");
E_D("replace into `ecs_admin_action` values('212','142','0726_edit_ratetax_table','');");
E_D("replace into `ecs_admin_action` values('213','142','0729_shipping_price_group','');");
E_D("replace into `ecs_admin_action` values('214','142','0727_shipping_price','');");
E_D("replace into `ecs_admin_action` values('215','142','0728_add_shipping_price','');");
E_D("replace into `ecs_admin_action` values('216','143','0801_link_manage','');");
E_D("replace into `ecs_admin_action` values('217','143','0802_add_link','');");
E_D("replace into `ecs_admin_action` values('218','143','0803_focus_map_manage','');");
E_D("replace into `ecs_admin_action` values('219','143','0804_add_focus_map','');");
E_D("replace into `ecs_admin_action` values('220','143','0805_focus_map_code','');");
E_D("replace into `ecs_admin_action` values('221','143','0806_add_code','');");
E_D("replace into `ecs_admin_action` values('222','143','0807_pre_recharge_card','');");
E_D("replace into `ecs_admin_action` values('223','143','0808_add_recharge_card','');");
E_D("replace into `ecs_admin_action` values('224','143','0809_coupon','');");
E_D("replace into `ecs_admin_action` values('225','143','0810_add_coupon','');");
E_D("replace into `ecs_admin_action` values('226','143','0811_issued_coupons','');");
E_D("replace into `ecs_admin_action` values('227','143','0812_have_coupons','');");
E_D("replace into `ecs_admin_action` values('228','144','0901_order_statistic','');");
E_D("replace into `ecs_admin_action` values('229','144','0902_records_consumption','');");
E_D("replace into `ecs_admin_action` values('230','144','0903_waybill_statistics','');");
E_D("replace into `ecs_admin_action` values('231','145','1001_faq','');");
E_D("replace into `ecs_admin_action` values('232','145','1002_complaint','');");
E_D("replace into `ecs_admin_action` values('233','146','1101_help_classification','');");
E_D("replace into `ecs_admin_action` values('234','146','1102_add_classification','');");
E_D("replace into `ecs_admin_action` values('235','146','1103_help_list','');");
E_D("replace into `ecs_admin_action` values('236','146','1104_add_content','');");
E_D("replace into `ecs_admin_action` values('237','147','1201_system_settings','');");
E_D("replace into `ecs_admin_action` values('238','147','1202_data_backup','');");
E_D("replace into `ecs_admin_action` values('239','147','1203_menu_manage','');");
E_D("replace into `ecs_admin_action` values('240','147','1204_add_menu','');");
E_D("replace into `ecs_admin_action` values('241','147','1205_short_message_interface','');");
E_D("replace into `ecs_admin_action` values('242','147','1206_add_interface','');");
E_D("replace into `ecs_admin_action` values('243','147','1207_email_template','');");
E_D("replace into `ecs_admin_action` values('244','147','1208_short_message_template','');");
E_D("replace into `ecs_admin_action` values('245','148','1301_meun_manage','');");
E_D("replace into `ecs_admin_action` values('246','148','1302_add_menu','');");
E_D("replace into `ecs_admin_action` values('247','149','1401_official_website','');");
E_D("replace into `ecs_admin_action` values('248','149','1402_contact_author','');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_template`;");
E_C("CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL DEFAULT '',
  `region` varchar(40) NOT NULL DEFAULT '',
  `library` varchar(40) NOT NULL DEFAULT '',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `number` tinyint(1) unsigned NOT NULL DEFAULT '5',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme` varchar(60) NOT NULL DEFAULT '',
  `remarks` varchar(30) NOT NULL DEFAULT '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_template` values('index','分类-商品','/library/cat_goods.lbi','2','3','5','1','meilele','');");
E_D("replace into `ecs_template` values('index','分类-商品','/library/cat_goods.lbi','1','2','5','1','meilele','');");
E_D("replace into `ecs_template` values('index','分类-商品','/library/cat_goods.lbi','0','1','5','1','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/auction.lbi','0','0','4','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/brands.lbi','0','0','4','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/group_buy.lbi','0','0','1','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_promotion.lbi','0','0','4','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_hot.lbi','0','0','4','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_new.lbi','0','0','8','0','meilele','');");
E_D("replace into `ecs_template` values('index','','/library/recommend_best.lbi','0','0','8','0','meilele','');");
E_D("replace into `ecs_template` values('index','文章-网站公告','/library/cat_articles.lbi','0','9','3','3','meilele','');");

require("../../inc/footer.php");
?>
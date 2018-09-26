<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `engrave_menu`;");
E_C("CREATE TABLE `engrave_menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` text CHARACTER SET utf8 NOT NULL,
  `paixu` int(10) NOT NULL,
  `isshow` int(10) NOT NULL,
  `titleen` text CHARACTER SET utf8 NOT NULL,
  `titletw` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `engrave_menu` values('1','首页','index.php','9','1','Home','首頁');");
E_D("replace into `engrave_menu` values('2','会员中心','index.php?act=member_account','8','1','Center','會員中心');");
E_D("replace into `engrave_menu` values('3','海淘教程','article.php?act=article_news&articleid=11','7','1','Course','海淘教程');");
E_D("replace into `engrave_menu` values('4','费用时效','article.php?act=article_news&articleid=12','6','1','Cost','費用時效');");
E_D("replace into `engrave_menu` values('5','新闻中心','index.php?act=list_news','5','1','news','新聞中心');");
E_D("replace into `engrave_menu` values('6','关于我们','article.php?act=article_news&articleid=13','4','1','About us','關於我們');");
E_D("replace into `engrave_menu` values('7','禁运列表','article.php?act=article_news&articleid=8','3','1','Embargolist','禁運\\\列表');");
E_D("replace into `engrave_menu` values('8','使用流程','index.php?act=list_trans','2','1','Use process','使用流程');");
E_D("replace into `engrave_menu` values('9','FAQ','index.php?act=list_faq','1','1','FAQ','FAQ');");

require("../../inc/footer.php");
?>
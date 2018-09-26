<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_focusmap`;");
E_C("CREATE TABLE `engrave_focusmap` (
  `FocusId` int(12) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `ImgUrl` varchar(200) DEFAULT NULL,
  `LinkUrl` varchar(200) DEFAULT NULL,
  `Systime` datetime DEFAULT NULL,
  `State` tinyint(4) DEFAULT NULL,
  `IsFocuseDelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`FocusId`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_focusmap` values('1','测试一二三','测试','/code/engrave/admin/engraveuploads/image/20150311/20150311061232_18995.jpg','http://www.baidu.com','2015-03-11 13:12:32','1','1');");
E_D("replace into `engrave_focusmap` values('2','2121','sasa','/code/engrave/admin/engraveuploads/image/20150311/20150311061239_99038.jpg','','2015-03-11 13:12:39','1','1');");
E_D("replace into `engrave_focusmap` values('3','1212121','1111','/code/engrave/admin/engraveuploads/image/20150311/20150311061245_56818.jpg','http://wwww.google.com','2015-03-11 13:12:45','1','1');");
E_D("replace into `engrave_focusmap` values('4','123','123','/code/engrave/admin/engraveuploads/image/20141218/20141218064120_44346.jpg','http://www.baidu.com','2014-12-18 14:07:17','0','1');");
E_D("replace into `engrave_focusmap` values('5','123','123#''select * from engrave_channel where 1=1''','','123','2015-04-10 17:04:15','0','1');");
E_D("replace into `engrave_focusmap` values('6','asd','a','/shop/admin/engraveuploads/image/20150718/20150718053919_44395.jpg','aaa','2015-07-18 11:39:19','1','1');");
E_D("replace into `engrave_focusmap` values('7','实力保证,是时候告诉他们谁才是日本最强的了','','/shop/admin/engraveuploads/image/20151020/20151020114050_63658.jpg','http://zhuanyun.mfdonglu.com/article.php?act=article_news&articleid=11','2015-10-20 17:48:35','1','0');");
E_D("replace into `engrave_focusmap` values('8','实力保证,是时候告诉他们谁才是日本最强的了','','/shop/admin/engraveuploads/image/20151020/20151020114205_32221.jpg','http://zhuanyun.mfdonglu.com/article.php?act=article_news&articleid=12','2015-10-20 17:48:44','1','0');");
E_D("replace into `engrave_focusmap` values('9','最专业的3PL供应链供应商','','/shop/admin/engraveuploads/image/20151020/20151020114255_32887.jpg','http://zhuanyun.mfdonglu.com/article.php?act=article_news&articleid=13','2015-10-20 17:48:59','1','0');");
E_D("replace into `engrave_focusmap` values('10','行业效率领头羊','','/shop/admin/engraveuploads/image/20151020/20151020114341_33354.jpg','http://zhuanyun.mfdonglu.com/article.php?act=article_news&articleid=14','2015-10-20 17:49:12','1','0');");
E_D("replace into `engrave_focusmap` values('11','行业效率领头羊','','/shop/admin/engraveuploads/image/20151020/20151020114443_32678.jpg','http://zhuanyun.mfdonglu.com/article.php?act=article_news&articleid=9','2015-10-20 17:49:19','1','0');");

require("../../inc/footer.php");
?>
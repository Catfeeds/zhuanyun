<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_article`;");
E_C("CREATE TABLE `engrave_article` (
  `CntId` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `CntCategoryId` int(11) DEFAULT '0' COMMENT '类别ID',
  `CntTitle` varchar(200) DEFAULT '' COMMENT '标题',
  `CntSubhead` varchar(200) DEFAULT '',
  `CntAttributes` tinyint(4) DEFAULT NULL,
  `CntTitleImage` varchar(500) DEFAULT NULL,
  `CntMetaKey` varchar(200) DEFAULT NULL,
  `CntMetaDes` varchar(200) DEFAULT NULL,
  `CntExtLink` varchar(200) DEFAULT NULL,
  `CntContent` longtext,
  `CntBriefIntroduction` varchar(200) DEFAULT NULL,
  `CntTag` varchar(200) DEFAULT NULL,
  `CntAuthor` varchar(200) DEFAULT NULL,
  `CntAuthorEmail` varchar(200) DEFAULT NULL,
  `CntSourceWeb` varchar(200) DEFAULT NULL,
  `CntSourceUrl` varchar(200) DEFAULT NULL,
  `CntReadPoints` int(11) DEFAULT NULL,
  `CntTime` datetime DEFAULT NULL,
  `CntAuditingStatus` tinyint(4) DEFAULT NULL,
  `CntOperatorId` int(11) DEFAULT NULL,
  `CntOperatorName` varchar(200) DEFAULT NULL,
  `CntIsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`CntId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_article` values('1','9','公司新闻测试','公司新闻测试','0','/code/engrave/admin/engraveuploads/image/20141218/20141218100259_84006.jpg','','','','','','2014-12-18 10:02:32','','','','','0','2014-12-18 10:02:32','2','0','','1');");
E_D("replace into `engrave_article` values('2','3','123','','0','/code/engrave/admin/engraveuploads/image/20150115/20150115082332_47696.png','123','','','','','2015-01-15 08:23:32','','','','','0','2015-01-15 08:23:32','2','1','admin','1');");
E_D("replace into `engrave_article` values('3','3','123','','0','','','','','','','2015-01-15 08:24:07','','','','','0','2015-01-15 08:24:07','2','1','admin','1');");
E_D("replace into `engrave_article` values('4','3','123','','0','','','','','','','2015-01-15 08:24:33','','','','','0','2015-01-15 08:24:33','2','1','admin','1');");
E_D("replace into `engrave_article` values('5','3','123','','0','','','','','','','2015-01-15 08:24:56','','','','','0','2015-01-15 08:24:56','2','1','admin','1');");
E_D("replace into `engrave_article` values('6','3','123','','0','','','','','','','2015-01-15 08:25:18','','','','','0','2015-01-15 08:25:18','2','1','admin','1');");
E_D("replace into `engrave_article` values('7','3','123','','0','','','','','','','2015-01-15 08:25:37','','','','','0','2015-01-15 08:25:37','2','1','admin','1');");
E_D("replace into `engrave_article` values('8','9','公司新闻测试','公司新闻测试','0','/code/engrave/admin/engraveuploads/image/20150302/20150302065948_47235.png','公司新闻测试','公司新闻测试','','<span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span>','','2015-02-17','','','','','0','2015-02-17 00:00:00','2','1','admin','0');");
E_D("replace into `engrave_article` values('9','10','重要通知1','重要通知1','0','/code/engrave/admin/engraveuploads/image/20150302/20150302070106_76618.png','重要通知1','重要通知1','','重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1','重要通知1','2015-02-17','重要通知1','重要通知1','重要通知1','重要通知1','0','2015-02-17 00:00:00','1','1','admin','0');");
E_D("replace into `engrave_article` values('10','5','关于我们1','关于我们1','0','/code/engrave/admin/engraveuploads/image/20150302/20150302070024_75297.png','关于我们1','关于我们1','关于我们1','关于我们1','关于我们1','2015-02-17','关于我们1','关于我们1','关于我们1','关于我们1','0','2015-02-17 00:00:00','2','1','admin','0');");
E_D("replace into `engrave_article` values('11','9','1111事实说：中国是否需要继续韬光养晦？','事实说：中国是否需要继续韬光养晦？','0','','asdf','asf','asfd','<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://news.qq.com/zt2015/fact/12.htm\">事实说：中国是否需要继续韬光养晦？</a> \r\n</h2>','','2015-03-11','','','','','0','2015-03-11 00:00:00','2','1','admin','0');");
E_D("replace into `engrave_article` values('12','9','内地官员遭警告：出入澳门赌场必定会被发现','内地官员遭警告：出入澳门赌场必定会被发现','0','','','','','<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://news.qq.com/a/20150311/045038.htm\">内地官员遭警告：出入澳门赌场必定会被发现</a>\r\n</h2>\r\n<p style=\"font-family:宋体, ''Arial Narrow'', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/a/20150304/012417.htm\">港媒：澳门赌场收入大跌 内地游客只拍照不上桌</a><br />\r\n<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/a/20150307/030165.htm\">澳门多家赌场开源节流 有业者给员工放无薪假</a>\r\n</p>\r\n<div class=\"btns\" style=\"font-family:宋体, ''Arial Narrow'', HELVETICA;background-color:#FFFFFF;\">\r\n</div>','','2015-03-11','','','','','0','2015-03-11 00:00:00','2','1','admin','0');");
E_D("replace into `engrave_article` values('13','10','一分钟说两会：鼓掌政治学，你懂吗？','一分钟说两会：鼓掌政治学，你懂吗？','0','','','','','<h2 class=\"icon_dj\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://v.qq.com/page/s/b/0/s0016t84vb0.html\">一分钟说两会：鼓掌政治学，你懂吗？</a>\r\n</h2>\r\n<p style=\"font-family:宋体, ''Arial Narrow'', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"icon_video\" href=\"http://news.qq.com/zt2015/lhlbs/no4.htm\">南方妹子VS北方大妞 你爱谁？</a><br />\r\n<a target=\"_blank\" class=\"icon_video\" href=\"http://news.qq.com/zt2015/minute/no5.htm\">饶过“弱势群体”这个词吧</a>\r\n</p>','','2015-03-11','','','','','0','2015-03-11 00:00:00','2','1','admin','0');");
E_D("replace into `engrave_article` values('14','10','主政者说：襄阳年产粮食 够全国人民吃一周','主政者说：襄阳年产粮食 够全国人民吃一周','0','','123','123','主政者说：襄阳年产粮食 够全国人民吃一周','<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/zt2015/TheMayor/NO5.htm\">杭州小伙辞职卖房到桐乡 投身时尚创意</a>\r\n</h2>\r\n<p style=\"font-family:宋体, ''Arial Narrow'', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/zt2015/TheMayor/NO4.htm\">市长为果农吆喝卖苹果 称愧对贫困百姓</a> \r\n</p>','','2015-03-11','','','','','0','2015-03-11 00:00:00','2','1','admin','0');");

require("../../inc/footer.php");
?>
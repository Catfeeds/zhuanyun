<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_channel`;");
E_C("CREATE TABLE `engrave_channel` (
  `categoryid` smallint(6) NOT NULL AUTO_INCREMENT,
  `Module` varchar(30) DEFAULT NULL,
  `abbreviation` varchar(20) DEFAULT NULL,
  `typename` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `NewWin` tinyint(4) DEFAULT NULL,
  `typesummary` longtext,
  `outsidelink` varchar(50) DEFAULT NULL,
  `ParentDir` longtext,
  `linktip` varchar(30) DEFAULT NULL,
  `columnshowposition` smallint(6) DEFAULT NULL,
  `conentmodel` smallint(6) DEFAULT NULL,
  `GoodsType` smallint(6) DEFAULT NULL,
  `classifytype` smallint(6) DEFAULT NULL,
  `parentid` smallint(6) DEFAULT NULL,
  `rewritecatalogue` varchar(255) DEFAULT NULL,
  `SubCount` smallint(6) DEFAULT NULL,
  `Percents` smallint(6) DEFAULT NULL,
  `Children` varchar(50) DEFAULT NULL,
  `channellogo` varchar(100) DEFAULT NULL,
  `PicList` longtext,
  `allowpost` tinyint(4) DEFAULT NULL,
  `pagingsize` smallint(6) DEFAULT NULL,
  `metakey` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `DisplayInTop` tinyint(4) DEFAULT NULL,
  `DisplayInSide` tinyint(4) DEFAULT NULL,
  `DisplayInBottom` tinyint(4) DEFAULT NULL,
  `DisplayInParent` tinyint(4) DEFAULT NULL,
  `DisplayInRelate` tinyint(4) DEFAULT NULL,
  `DiscplayInNav` tinyint(4) DEFAULT NULL,
  `contentlink` tinyint(4) DEFAULT NULL,
  `RelateType` smallint(6) DEFAULT NULL,
  `RelationIds` varchar(50) DEFAULT NULL,
  `Domain` varchar(50) DEFAULT NULL,
  `MultiSite` tinyint(4) DEFAULT NULL,
  `ChannelTemplate` varchar(50) DEFAULT NULL,
  `ListTemplate` varchar(50) DEFAULT NULL,
  `CntTemplate` varchar(50) DEFAULT NULL,
  `ArticleRegular` varchar(50) DEFAULT NULL,
  `ListRegular` varchar(50) DEFAULT NULL,
  `liststyle` smallint(6) DEFAULT NULL,
  `leftadvert` longtext,
  `topadvert` longtext,
  `bottomadvert` longtext,
  `beforelistadvert` longtext,
  `afterlistadvert` longtext,
  `beforewritten` longtext,
  `contentbottomadvert` longtext,
  `leftcontentadvert` longtext,
  `beforecontentadvert` longtext,
  `aftercontentadvert` longtext,
  `innerwritten` longtext,
  `cutformcontent` longtext,
  `Depth` smallint(6) DEFAULT NULL,
  `PostCredits` longtext,
  `ReplyCredits` longtext,
  `ViewPerm` longtext,
  `PostPerm` longtext,
  `ReplyPerm` longtext,
  `NeedCheckPerm` longtext,
  `EditPerm` longtext,
  `AutoNeedCheckPerm` longtext,
  `ReplyNeedCheck` longtext,
  `Disabled` tinyint(4) DEFAULT NULL,
  `sortid` int(11) DEFAULT NULL,
  `LastIs` tinyint(4) DEFAULT NULL,
  `IsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_channel` values('1','','收费说明','收费说明','','0','','','最新咨','','0','0','0','0','0','','0','0','','','','0','0','收费说明','收费说明','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','<p>\r\n	<br />\r\n</p>','0','','','','','','','','','','0','3','0','0');");
E_D("replace into `engrave_channel` values('2','','费用估算','费用估算','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','费用估算','费用估算','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','2','0','0');");
E_D("replace into `engrave_channel` values('3','','首页','首页','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','首页','首页','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','1','0','0');");
E_D("replace into `engrave_channel` values('4','','新闻中心','新闻中心','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','新闻中心','新闻中心','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','4','0','0');");
E_D("replace into `engrave_channel` values('5','','关于我们','关于我们','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','关于我们','关于我们','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','<table width=\"90%\" id=\"tab_channel_cutform-table\" style=\"color:#192E32;font-family:sans-serif, Arial, Verdana;font-size:12px;background-color:#FFFFFF;\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"font-family:sans-serif, Arial, Verdana;\">\r\n				说明：栏目内容是替代原来栏目单独页的更灵活的一种方式，可在栏目模板中用{engrave:field.content/}调用，通常用于企业简介之类的用途。\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>','0','','','','','','','','','','0','5','0','0');");
E_D("replace into `engrave_channel` values('6','','禁运列表','禁运列表','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','禁运列表','禁运列表','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','6','0','0');");
E_D("replace into `engrave_channel` values('7','','转运流程','转运流程','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','转运流程','转运流程','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','7','0','0');");
E_D("replace into `engrave_channel` values('8','','FAQ2','FAQ2','','0','','','','','0','0','0','0','0','','0','0','','','','0','0','FAQ2','FAQ2','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','8','0','0');");
E_D("replace into `engrave_channel` values('9','','公司新闻','公司新闻','','0','','','','','0','0','0','0','4','','0','0','','/code/engrave/admin/engraveuploads/image/20150311/20150311062852_23477.png','','0','0','公司新闻','公司新闻','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','1','0','0');");
E_D("replace into `engrave_channel` values('10','','重要通知','重要通知','','0','','','','','0','0','0','0','4','','0','0','','/code/engrave/admin/engraveuploads/image/20150311/20150311062908_93811.png','','0','0','重要通知','重要通知','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','','0','','','','','','','','','','0','2','0','0');");
E_D("replace into `engrave_channel` values('11','','铭东','铭东','','0','铭东','','','铭东','0','0','0','0','5','铭东','0','0','','','','0','0','','','0','0','0','0','0','0','0','0','','','0','','','','','','0','','','','','','','','','','','','铭东','0','','','','','','','','','','0','0','0','0');");
E_D("replace into `engrave_channel` values('12',NULL,'feifei','费费',NULL,NULL,'','',NULL,'','0','0',NULL,'0','0','ff',NULL,NULL,NULL,'',NULL,'0','0','','',NULL,NULL,NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,'0');");

require("../../inc/footer.php");
?>
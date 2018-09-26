<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_emailtemplate`;");
E_C("CREATE TABLE `engrave_emailtemplate` (
  `et_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '邮件模板ID',
  `et_tag` varchar(500) DEFAULT '' COMMENT '标签说明',
  `et_des` varchar(255) DEFAULT '' COMMENT '邮件说明',
  `et_title` varchar(255) DEFAULT '' COMMENT '邮件主题',
  `et_content` text COMMENT '邮件内容',
  `et_egid` int(12) DEFAULT '0' COMMENT '邮件模板类型ID',
  PRIMARY KEY (`et_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_emailtemplate` values('1','{&user_name}:姓名','会员注册','会员注册','<p>\r\n	{&amp;user_name}：\r\n</p>\r\n<p>\r\n	您好，您已注册成功，欢迎进入铭东转运系统！\r\n</p>','1');");
E_D("replace into `engrave_emailtemplate` values('2','123','123','123','123','2');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_emailgroup`;");
E_C("CREATE TABLE `engrave_emailgroup` (
  `eg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '邮件分组ID',
  `eg_name` varchar(255) DEFAULT '' COMMENT '分组名称',
  PRIMARY KEY (`eg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_emailgroup` values('1','注册会员成功通知');");
E_D("replace into `engrave_emailgroup` values('2','注册会员重置密码');");
E_D("replace into `engrave_emailgroup` values('3','到货/入库通知');");
E_D("replace into `engrave_emailgroup` values('4','订单处理通知');");
E_D("replace into `engrave_emailgroup` values('5','订单生成通知');");
E_D("replace into `engrave_emailgroup` values('6','订单付款通知');");
E_D("replace into `engrave_emailgroup` values('7','订单发货通知');");
E_D("replace into `engrave_emailgroup` values('8','订单完成通知');");
E_D("replace into `engrave_emailgroup` values('9','待定1');");
E_D("replace into `engrave_emailgroup` values('10','待定2');");

require("../../inc/footer.php");
?>
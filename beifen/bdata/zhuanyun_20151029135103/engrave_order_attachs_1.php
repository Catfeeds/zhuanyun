<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_order_attachs`;");
E_C("CREATE TABLE `engrave_order_attachs` (
  `oa_id` int(12) NOT NULL AUTO_INCREMENT,
  `oa_orderid` int(12) DEFAULT NULL,
  `oa_attach` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`oa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_order_attachs` values('1','39','/code/engrave/admin/engraveuploads/image/20150308/20150308155308_69463.jpg');");
E_D("replace into `engrave_order_attachs` values('2','39','/code/engrave/admin/engraveuploads/image/20150308/20150308155308_42615.jpg');");
E_D("replace into `engrave_order_attachs` values('3','8','/code/engrave/admin/engraveuploads/image/20150331/20150331055756_42761.jpg');");
E_D("replace into `engrave_order_attachs` values('4','8','/code/engrave/admin/engraveuploads/image/20150331/20150331055756_71130.jpg');");
E_D("replace into `engrave_order_attachs` values('5','36','/shop/admin/engraveuploads/image/20150715/20150715172120_53821.jpg');");
E_D("replace into `engrave_order_attachs` values('6','39','/shop/admin/engraveuploads/image/20150716/20150716085235_24661.jpg');");

require("../../inc/footer.php");
?>
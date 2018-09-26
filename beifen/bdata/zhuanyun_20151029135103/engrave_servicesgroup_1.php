<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_servicesgroup`;");
E_C("CREATE TABLE `engrave_servicesgroup` (
  `sg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '增值服务分组ID',
  `sg_name` varchar(200) DEFAULT '' COMMENT '分组名称',
  PRIMARY KEY (`sg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_servicesgroup` values('1','订单打包');");
E_D("replace into `engrave_servicesgroup` values('2','合箱');");
E_D("replace into `engrave_servicesgroup` values('3','分箱');");
E_D("replace into `engrave_servicesgroup` values('4','增值服务');");

require("../../inc/footer.php");
?>
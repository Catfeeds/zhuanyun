<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_stationinformation`;");
E_C("CREATE TABLE `engrave_stationinformation` (
  `si_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '站内信息：ID',
  `si_time` int(12) DEFAULT '0' COMMENT '时间',
  `si_content` varchar(500) DEFAULT '' COMMENT '站内消息',
  `si_userid` int(12) DEFAULT '0' COMMENT '用户ID',
  PRIMARY KEY (`si_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>
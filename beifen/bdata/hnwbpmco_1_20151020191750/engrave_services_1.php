<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_services`;");
E_C("CREATE TABLE `engrave_services` (
  `ServiceId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ModuleId` int(11) NOT NULL,
  `Module` varchar(50) NOT NULL DEFAULT '',
  `ServiceName` varchar(50) NOT NULL DEFAULT '',
  `Description` varchar(255) NOT NULL DEFAULT '',
  `IsDeleteService` tinyint(4) NOT NULL,
  PRIMARY KEY (`ServiceId`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_services` values('1','2','order','特殊加固','特殊加固包裹系统默认增加10%的加固重量，要收取操作费。奶粉、液体、玻璃制品、电子产品、乐器、中空物品等易损易碎品建议使用，但并不能杜绝运输途中的所有意','0');");
E_D("replace into `engrave_services` values('3','1','order','取出发票','取出包裹内的发票，购物小票或订货单及一切文件和广告，目前是免费','0');");
E_D("replace into `engrave_services` values('4','1','order','去除鞋盒','【免费】去除鞋子的外包装盒','0');");
E_D("replace into `engrave_services` values('6','4','value-added','拍照服务','对包裹进行拍照，面单，外箱，内件','0');");
E_D("replace into `engrave_services` values('7','4','value-added','退货','将货物退回您购物的网站，要收取退货费','1');");
E_D("replace into `engrave_services` values('8','3','storage','精确分箱','按您文字描述的要求进行分箱，要收取操作费','0');");
E_D("replace into `engrave_services` values('10','3','storage','合箱','合箱包裹数量限制','0');");
E_D("replace into `engrave_services` values('11','1','order','核对清点服务','【收费】包裹数*200日元 清点内件个数与用户提供列表是否一致','0');");
E_D("replace into `engrave_services` values('12','4','value-added','内件清点','内件清点','1');");
E_D("replace into `engrave_services` values('13','4','value-added','退货服务','退货服务','1');");
E_D("replace into `engrave_services` values('16','1','order','去除广告杂志','【免费】将多余的广告杂志取出','0');");

require("../../inc/footer.php");
?>
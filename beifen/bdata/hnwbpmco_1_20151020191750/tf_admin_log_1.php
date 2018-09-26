<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `tf_admin_log`;");
E_C("CREATE TABLE `tf_admin_log` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `ips` varchar(100) DEFAULT NULL,
  `info` varchar(240) DEFAULT NULL,
  `cdate` varchar(60) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=gbk");
E_D("replace into `tf_admin_log` values('1','admin','14.119.112.24','ตวยฝ','2014-10-13','2014-10-13 10:57:31');");
E_D("replace into `tf_admin_log` values('2','admin','14.119.114.128','ตวยฝ','2014-10-25','2014-10-25 09:38:42');");
E_D("replace into `tf_admin_log` values('3','admin','113.64.79.254','ตวยฝ','2014-10-30','2014-10-30 11:25:27');");
E_D("replace into `tf_admin_log` values('4','admin','14.150.203.25','ตวยฝ','2014-10-31','2014-10-31 10:09:46');");
E_D("replace into `tf_admin_log` values('5','admin','14.119.112.217','ตวยฝ','2014-11-14','2014-11-14 16:12:02');");
E_D("replace into `tf_admin_log` values('6','admin','14.150.203.146','ตวยฝ','2014-11-18','2014-11-18 16:16:43');");
E_D("replace into `tf_admin_log` values('7','admin','58.63.140.157','ตวยฝ','2014-12-20','2014-12-20 13:55:35');");
E_D("replace into `tf_admin_log` values('8','admin','58.63.140.157','ตวยฝ','2014-12-20','2014-12-20 13:56:15');");
E_D("replace into `tf_admin_log` values('9','admin','58.63.5.97','ตวยฝ','2015-03-24','2015-03-24 00:03:07');");
E_D("replace into `tf_admin_log` values('10','admin','14.18.148.122','ตวยฝ','2015-06-19','2015-06-19 11:28:08');");
E_D("replace into `tf_admin_log` values('11','admin','14.18.148.122','ตวยฝ','2015-06-19','2015-06-19 11:35:55');");
E_D("replace into `tf_admin_log` values('12','admin','58.63.91.43','ตวยฝ','2015-06-20','2015-06-20 10:51:51');");
E_D("replace into `tf_admin_log` values('13','admin','58.63.91.43','ตวยฝ','2015-06-20','2015-06-20 11:06:42');");
E_D("replace into `tf_admin_log` values('14','admin','58.62.27.103','ตวยฝ','2015-06-21','2015-06-21 15:32:40');");
E_D("replace into `tf_admin_log` values('15','admin','113.109.100.240','ตวยฝ','2015-06-22','2015-06-22 10:32:06');");
E_D("replace into `tf_admin_log` values('16','admin','113.109.100.240','ตวยฝ','2015-06-22','2015-06-22 10:41:53');");
E_D("replace into `tf_admin_log` values('17','admin','113.109.100.240','ตวยฝ','2015-06-22','2015-06-22 10:50:36');");
E_D("replace into `tf_admin_log` values('18','admin','182.138.246.66','ตวยฝ','2015-07-02','2015-07-02 13:38:55');");
E_D("replace into `tf_admin_log` values('19','admin','14.18.148.122','ตวยฝ','2015-07-02','2015-07-02 13:44:18');");
E_D("replace into `tf_admin_log` values('20','admin','182.138.246.66','ตวยฝ','2015-07-02','2015-07-02 14:14:36');");
E_D("replace into `tf_admin_log` values('21','admin','182.138.246.66','ตวยฝ','2015-07-02','2015-07-02 14:26:27');");
E_D("replace into `tf_admin_log` values('22','admin','182.138.246.66','ตวยฝ','2015-07-02','2015-07-02 17:11:21');");
E_D("replace into `tf_admin_log` values('23','admin','171.221.77.240','ตวยฝ','2015-07-02','2015-07-02 21:22:57');");
E_D("replace into `tf_admin_log` values('24','admin','118.188.1.2','ตวยฝ','2015-07-20','2015-07-20 17:50:35');");
E_D("replace into `tf_admin_log` values('25','admin','118.188.1.2','ตวยฝ','2015-07-20','2015-07-20 17:56:40');");
E_D("replace into `tf_admin_log` values('26','admin','183.12.199.151','ตวยฝ','2015-08-06','2015-08-06 22:36:12');");
E_D("replace into `tf_admin_log` values('27','admin','171.214.145.219','ตวยฝ','2015-09-15','2015-09-15 10:10:44');");
E_D("replace into `tf_admin_log` values('28','admin','117.63.71.246','ตวยฝ','2015-09-15','2015-09-15 10:11:02');");
E_D("replace into `tf_admin_log` values('29','admin','42.122.98.78','ตวยฝ','2015-10-09','2015-10-09 10:22:36');");

require("../../inc/footer.php");
?>
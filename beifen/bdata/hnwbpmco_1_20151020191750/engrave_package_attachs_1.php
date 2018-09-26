<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `engrave_package_attachs`;");
E_C("CREATE TABLE `engrave_package_attachs` (
  `pa_id` int(12) NOT NULL AUTO_INCREMENT,
  `pa_packageid` int(12) DEFAULT NULL,
  `pa_attach` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `engrave_package_attachs` values('8','14','/code/engrave/admin/engraveuploads/image/20150329/20150329130810_48924.jpg');");
E_D("replace into `engrave_package_attachs` values('9','5','/code/engrave/admin/engraveuploads/image/20150331/20150331055728_25015.jpg');");
E_D("replace into `engrave_package_attachs` values('10','15','/code/engrave/admin/engraveuploads/image/20150331/20150331085739_25273.jpg');");
E_D("replace into `engrave_package_attachs` values('11','12','/code/engrave/admin/engraveuploads/image/20150331/20150331085923_62176.jpg');");
E_D("replace into `engrave_package_attachs` values('12','2','/code/engrave/admin/engraveuploads/image/20150401/20150401031656_63541.jpg');");
E_D("replace into `engrave_package_attachs` values('13','24','/code/engrave/admin/engraveuploads/image/20150401/20150401033337_44032.jpg');");
E_D("replace into `engrave_package_attachs` values('14','24','/code/engrave/admin/engraveuploads/image/20150401/20150401033349_42398.jpg');");
E_D("replace into `engrave_package_attachs` values('15','24','/code/engrave/admin/engraveuploads/image/20150401/20150401033858_43535.png');");
E_D("replace into `engrave_package_attachs` values('16','51','/shop/admin/engraveuploads/image/20150715/20150715101854_58633.png');");
E_D("replace into `engrave_package_attachs` values('17','59','/shop/admin/engraveuploads/image/20150716/20150716065752_71869.jpg');");
E_D("replace into `engrave_package_attachs` values('18','60','/shop/admin/engraveuploads/image/20150716/20150716072442_17748.jpg');");

require("../../inc/footer.php");
?>
<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `keyword` varchar(90) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2013-12-03','','布艺沙发','6');");
E_D("replace into `ecs_keywords` values('2013-12-03','','风格','27');");
E_D("replace into `ecs_keywords` values('2013-12-03','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2013-12-03','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2013-12-04','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2013-12-05','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2013-12-11','','布艺沙发','2');");
E_D("replace into `ecs_keywords` values('2013-12-18','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2013-12-29','','1','3');");
E_D("replace into `ecs_keywords` values('2014-02-22','','1','1');");
E_D("replace into `ecs_keywords` values('2014-06-14','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-06-14','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-06-15','','ECS000026','1');");
E_D("replace into `ecs_keywords` values('2014-06-15','','ECS000002','1');");
E_D("replace into `ecs_keywords` values('2014-06-16','BAIDU','http://mll.i7c.com.cn/xspace.php','1');");
E_D("replace into `ecs_keywords` values('2014-06-18','BAIDU','http://mll.i7c.com.cn','2');");
E_D("replace into `ecs_keywords` values('2014-06-18','','吸顶灯','3');");
E_D("replace into `ecs_keywords` values('2014-06-18','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-06-18','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-06-19','BAIDU','mll.i7c.com','1');");
E_D("replace into `ecs_keywords` values('2014-06-19','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-06-20','BAIDU','mll.i7c.com','1');");
E_D("replace into `ecs_keywords` values('2014-06-22','BAIDU','http://mll.i7c.com.cn','1');");
E_D("replace into `ecs_keywords` values('2014-06-23','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-06-23','','儿童床','1');");
E_D("replace into `ecs_keywords` values('2014-06-23','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-06-23','','床','9');");
E_D("replace into `ecs_keywords` values('2014-06-23','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-06-24','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-06-24','','1','1');");
E_D("replace into `ecs_keywords` values('2014-06-27','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-06-27','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2014-06-28','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-06-30','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-01','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-07-01','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-07-02','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-03','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-07-03','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-07-04','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-05','','铭东/SKG6周年狂欢购','1');");
E_D("replace into `ecs_keywords` values('2014-07-05','','铭东/SKG6','1');");
E_D("replace into `ecs_keywords` values('2014-07-05','','紫色水纹毛巾被','1');");
E_D("replace into `ecs_keywords` values('2014-07-05','','事实','1');");
E_D("replace into `ecs_keywords` values('2014-07-05','','儿童床','1');");
E_D("replace into `ecs_keywords` values('2014-07-06','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-06','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2014-07-06','','儿童床','1');");
E_D("replace into `ecs_keywords` values('2014-07-06','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-07-07','BAIDU','缇庝箰涔愭簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','BAIDU','http://mll.i7c.com.cn','2');");
E_D("replace into `ecs_keywords` values('2014-07-08','','项链','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','','床','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','','水','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','','???','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','','布艺沙发','4');");
E_D("replace into `ecs_keywords` values('2014-07-08','','','1');");
E_D("replace into `ecs_keywords` values('2014-07-08','','餐桌椅','4');");
E_D("replace into `ecs_keywords` values('2014-07-08','BAIDU','鍝佺墝闄愭椂鎶㈣喘缃戞簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-09','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-09','BAIDU','缇庝箰涔愭簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-09','BAIDU','http://mll.i7c.com.cn','1');");
E_D("replace into `ecs_keywords` values('2014-07-10','BAIDU','鍏舵墠缃戠粶','1');");
E_D("replace into `ecs_keywords` values('2014-07-10','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-07-10','BAIDU','缇庝箰涔','2');");
E_D("replace into `ecs_keywords` values('2014-07-11','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-11','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-11','BAIDU','铭东2014','1');");
E_D("replace into `ecs_keywords` values('2014-07-12','BAIDU','http://mll.i7c.com.cn/','1');");
E_D("replace into `ecs_keywords` values('2014-07-13','BAIDU','ttp://mll.i7c.com.cn/','1');");
E_D("replace into `ecs_keywords` values('2014-07-14','BAIDU','缇庝箰涔','1');");
E_D("replace into `ecs_keywords` values('2014-07-14','BAIDU',' 缇庝箰涔','2');");
E_D("replace into `ecs_keywords` values('2014-07-14','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-15','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-15','BAIDU',' 缇庝箰涔','2');");
E_D("replace into `ecs_keywords` values('2014-07-15','BAIDU','缇庝箰涔愮綉绔欐ā鏉','1');");
E_D("replace into `ecs_keywords` values('2014-07-15','BAIDU',' 缇庝箰涔愭ā鏉','1');");
E_D("replace into `ecs_keywords` values('2014-07-16','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2014-07-16','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-16','','布艺沙发','2');");
E_D("replace into `ecs_keywords` values('2014-07-16','BAIDU','缇庝箰涔愭ā鏉','1');");
E_D("replace into `ecs_keywords` values('2014-07-17','','吸顶灯','2');");
E_D("replace into `ecs_keywords` values('2014-07-17','BAIDU','其才网络','1');");
E_D("replace into `ecs_keywords` values('2014-07-17','BAIDU','缇庝箰涔愮綉绔欐簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-17','BAIDU','缇庝箰涔','1');");
E_D("replace into `ecs_keywords` values('2014-07-18','BAIDU','缇庝箰涔愭ā鏉','1');");
E_D("replace into `ecs_keywords` values('2014-07-18','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-19','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-19','BAIDU','缇庝箰涔','1');");
E_D("replace into `ecs_keywords` values('2014-07-19','','儿童床','1');");
E_D("replace into `ecs_keywords` values('2014-07-19','BAIDU','','1');");
E_D("replace into `ecs_keywords` values('2014-07-19','','隐形床','5');");
E_D("replace into `ecs_keywords` values('2014-07-20','BAIDU','2014铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-20','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-20','BAIDU','缇庝箰涔','1');");
E_D("replace into `ecs_keywords` values('2014-07-20','BAIDU','缇庝箰涔愪唬鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-20','BAIDU','缇庝箰涔愭帹骞跨殑婧愮爜','1');");
E_D("replace into `ecs_keywords` values('2014-07-21','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-21','BAIDU','缇庝箰涔愭簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-21','BAIDU','铭东推广的','1');");
E_D("replace into `ecs_keywords` values('2014-07-22','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','BAIDU','2014免费仿铭东家具家居建材商城网站','1');");
E_D("replace into `ecs_keywords` values('2014-07-24','BAIDU','mll.i7c.com.cn','1');");
E_D("replace into `ecs_keywords` values('2014-07-24','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2014-07-25','BAIDU','mll.i7c.com.cn','1');");
E_D("replace into `ecs_keywords` values('2014-07-25','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-25','BAIDU','缇庝箰涔愭簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-26','','','1');");
E_D("replace into `ecs_keywords` values('2014-07-26','BAIDU','缇庝箰涔愭簮鐮','1');");
E_D("replace into `ecs_keywords` values('2014-07-26','BAIDU','缇庝箰涔愬晢鍩庢簮鐮佷笅杞','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','BAIDU','铭东','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','儿童床','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','餐桌椅','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','吸顶灯','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','家用书桌','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','','多功能床','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','BAIDU','缇庝箰涔','1');");
E_D("replace into `ecs_keywords` values('2014-07-27','BAIDU','铭东商城下载','1');");
E_D("replace into `ecs_keywords` values('2014-07-28','','布艺沙发','1');");
E_D("replace into `ecs_keywords` values('2014-07-28','BAIDU','缇庝箰涔愭簮鐮','2');");
E_D("replace into `ecs_keywords` values('2014-07-28','BAIDU','缇庝箰涔','2');");
E_D("replace into `ecs_keywords` values('2014-07-29','BAIDU','缇庝箰涔','1');");

require("../../inc/footer.php");
?>
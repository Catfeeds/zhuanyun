<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `dindan`;");
E_C("CREATE TABLE `dindan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '下单页面',
  `order_id` varchar(200) DEFAULT NULL COMMENT '订单id',
  `pro_id` int(11) DEFAULT NULL,
  `pro_sn` varchar(200) DEFAULT NULL COMMENT '产品编号',
  `pro_name` varchar(240) DEFAULT NULL,
  `mun` int(11) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `realname` varchar(200) DEFAULT NULL,
  `addess` varchar(250) DEFAULT NULL COMMENT '地址',
  `tel` varchar(100) DEFAULT NULL,
  `tel2` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `qq` varchar(100) DEFAULT NULL,
  `shen` varchar(200) DEFAULT NULL COMMENT '省份',
  `city` varchar(200) DEFAULT NULL COMMENT '城市',
  `pay_type` varchar(200) DEFAULT NULL,
  `pay_time` varchar(200) DEFAULT NULL,
  `cdate` varchar(60) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  `guest` text,
  `send` varchar(240) DEFAULT NULL COMMENT '送货时间',
  `ips` varchar(200) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `xaidanyan` varchar(240) DEFAULT NULL COMMENT '来自哪个页',
  `lailu` varchar(240) DEFAULT NULL COMMENT '来路地址',
  `admininfo` varchar(240) DEFAULT NULL COMMENT '管理员备注',
  `payok` int(11) DEFAULT NULL COMMENT '支付成功',
  `payoktime` datetime DEFAULT NULL COMMENT '支付成功时间',
  `paymoney` float DEFAULT NULL COMMENT '支付金额',
  `tmpvar1` varchar(240) DEFAULT NULL,
  `tmpvar2` varchar(240) DEFAULT NULL,
  `tmpvar3` varchar(240) DEFAULT NULL,
  `tmpint1` int(11) DEFAULT NULL,
  `tmpint2` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `dindan` values('6','20150620120522',NULL,NULL,'发发发发发发发发发发 3盒  300元|300','1','300','董先生','天津市市辖区和平区详细地址什么的显示吗','13666688666','余优成','','','96565',NULL,NULL,'货到付款',NULL,NULL,'2015-06-20 12:05:22','date(\"Ymdhis\")','2015-06-20-12-05-22','58.63.91.43',NULL,'http://www.berder.com.cn/order/order.php?sid=1','http://www.berder.com.cn/order/dorder.php',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('8','20150702013744',NULL,NULL,'秋天外套买三赠二共五条894元全国免运费|894','1','894','刘国强','3242424324','15544444444','324242342','','','',NULL,NULL,'货到付款',NULL,NULL,'2015-07-02 13:37:44','23423424','工作日、双休日与节假日均可送货','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder9.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('9','20150702022817',NULL,NULL,'iPhone4双卡1680元|1680','1','1680','刘国强','的说法是否第三方水电费','15544444444','','','','',NULL,NULL,'货到付款',NULL,NULL,'2015-07-02 14:28:17','水电费撒的方式地方撒旦法','工作日、双休日与节假日均可送货','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder5.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('10','20150702024118',NULL,NULL,'秋天外套买三赠二共五条894元全国免运费|894','1','894','刘国强','水电费撒的方式地方','15544444444','','','','',NULL,NULL,'货到付款',NULL,NULL,'2015-07-02 14:41:18','还有什么话就在这里留言吧','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder3.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('11','20150702024629',NULL,NULL,'发发发发发发发发发发 3盒  300元|300','1','300','刘国强','的风格的风格地方广泛的郭德纲','15544444444','','','','',NULL,NULL,'支付宝支付',NULL,NULL,'2015-07-02 14:46:29','的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('12','20150702025003',NULL,NULL,'发发发发发发发发发发 3盒  300元|300','1','300','刘国强','的风格的风格地方广泛的郭德纲','15544444444','','','','',NULL,NULL,'支付宝支付',NULL,NULL,'2015-07-02 14:50:03','的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('13','20150702051112',NULL,NULL,'发发发发发发发发发发 3盒  300元|300','1','300','刘国强','的风格的风格地方广泛的郭德纲','15544444444','','','','',NULL,NULL,'货到付款',NULL,NULL,'2015-07-02 17:11:12','的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲的风格的风格地方广泛的郭德纲','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('14','20150702054340',NULL,NULL,'发发发发发发发发发发 3盒  300元|300','1','300','撒的方','河北省石家庄市桥西区时代发生的发发生地方','15544444444','','','','',NULL,NULL,'支付宝支付',NULL,NULL,'2015-07-02 17:43:40','啊舒服撒','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order3.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('15','20150720055354',NULL,NULL,'秋天外套买三赠二共五条894元全国免运费|894','1','894','wewe','风格的风格的风格和东方红','54654654165','','','','',NULL,NULL,'支付宝支付',NULL,NULL,'2015-07-20 17:53:54','还有什么话就在这里个梵蒂冈留言吧','','118.188.1.2',NULL,'http://hh.china88phj.com/jiedingdan/','',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");

require("../../inc/footer.php");
?>
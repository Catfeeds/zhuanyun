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
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '�µ�ҳ��',
  `order_id` varchar(200) DEFAULT NULL COMMENT '����id',
  `pro_id` int(11) DEFAULT NULL,
  `pro_sn` varchar(200) DEFAULT NULL COMMENT '��Ʒ���',
  `pro_name` varchar(240) DEFAULT NULL,
  `mun` int(11) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `realname` varchar(200) DEFAULT NULL,
  `addess` varchar(250) DEFAULT NULL COMMENT '��ַ',
  `tel` varchar(100) DEFAULT NULL,
  `tel2` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `qq` varchar(100) DEFAULT NULL,
  `shen` varchar(200) DEFAULT NULL COMMENT 'ʡ��',
  `city` varchar(200) DEFAULT NULL COMMENT '����',
  `pay_type` varchar(200) DEFAULT NULL,
  `pay_time` varchar(200) DEFAULT NULL,
  `cdate` varchar(60) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  `guest` text,
  `send` varchar(240) DEFAULT NULL COMMENT '�ͻ�ʱ��',
  `ips` varchar(200) DEFAULT NULL,
  `stat` int(11) DEFAULT NULL,
  `xaidanyan` varchar(240) DEFAULT NULL COMMENT '�����ĸ�ҳ',
  `lailu` varchar(240) DEFAULT NULL COMMENT '��·��ַ',
  `admininfo` varchar(240) DEFAULT NULL COMMENT '����Ա��ע',
  `payok` int(11) DEFAULT NULL COMMENT '֧���ɹ�',
  `payoktime` datetime DEFAULT NULL COMMENT '֧���ɹ�ʱ��',
  `paymoney` float DEFAULT NULL COMMENT '֧�����',
  `tmpvar1` varchar(240) DEFAULT NULL,
  `tmpvar2` varchar(240) DEFAULT NULL,
  `tmpvar3` varchar(240) DEFAULT NULL,
  `tmpint1` int(11) DEFAULT NULL,
  `tmpint2` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `dindan` values('6','20150620120522',NULL,NULL,'�������������������� 3��  300Ԫ|300','1','300','������','�������Ͻ����ƽ����ϸ��ַʲô����ʾ��','13666688666','���ų�','','','96565',NULL,NULL,'��������',NULL,NULL,'2015-06-20 12:05:22','date(\"Ymdhis\")','2015-06-20-12-05-22','58.63.91.43',NULL,'http://www.berder.com.cn/order/order.php?sid=1','http://www.berder.com.cn/order/dorder.php',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('8','20150702013744',NULL,NULL,'����������������������894Ԫȫ�����˷�|894','1','894','����ǿ','3242424324','15544444444','324242342','','','',NULL,NULL,'��������',NULL,NULL,'2015-07-02 13:37:44','23423424','�����ա�˫������ڼ��վ����ͻ�','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder9.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('9','20150702022817',NULL,NULL,'iPhone4˫��1680Ԫ|1680','1','1680','����ǿ','��˵���Ƿ������ˮ���','15544444444','','','','',NULL,NULL,'��������',NULL,NULL,'2015-07-02 14:28:17','ˮ������ķ�ʽ�ط�������','�����ա�˫������ڼ��վ����ͻ�','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder5.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('10','20150702024118',NULL,NULL,'����������������������894Ԫȫ�����˷�|894','1','894','����ǿ','ˮ������ķ�ʽ�ط�','15544444444','','','','',NULL,NULL,'��������',NULL,NULL,'2015-07-02 14:41:18','����ʲô�������������԰�','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/dorder3.html','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('11','20150702024629',NULL,NULL,'�������������������� 3��  300Ԫ|300','1','300','����ǿ','�ķ��ķ��ط��㷺�Ĺ��¸�','15544444444','','','','',NULL,NULL,'֧����֧��',NULL,NULL,'2015-07-02 14:46:29','�ķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸�','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('12','20150702025003',NULL,NULL,'�������������������� 3��  300Ԫ|300','1','300','����ǿ','�ķ��ķ��ط��㷺�Ĺ��¸�','15544444444','','','','',NULL,NULL,'֧����֧��',NULL,NULL,'2015-07-02 14:50:03','�ķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸�','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('13','20150702051112',NULL,NULL,'�������������������� 3��  300Ԫ|300','1','300','����ǿ','�ķ��ķ��ط��㷺�Ĺ��¸�','15544444444','','','','',NULL,NULL,'��������',NULL,NULL,'2015-07-02 17:11:12','�ķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸ٵķ��ķ��ط��㷺�Ĺ��¸�','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order10.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('14','20150702054340',NULL,NULL,'�������������������� 3��  300Ԫ|300','1','300','���ķ�','�ӱ�ʡʯ��ׯ��������ʱ�������ķ������ط�','15544444444','','','','',NULL,NULL,'֧����֧��',NULL,NULL,'2015-07-02 17:43:40','�������','','182.138.246.66',NULL,'http://hh.china88phj.com/jiedingdan/order3.php','http://hh.china88phj.com/jiedingdan/',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");
E_D("replace into `dindan` values('15','20150720055354',NULL,NULL,'����������������������894Ԫȫ�����˷�|894','1','894','wewe','���ķ��ķ��Ͷ�����','54654654165','','','','',NULL,NULL,'֧����֧��',NULL,NULL,'2015-07-20 17:53:54','����ʲô�������������ٸ����԰�','','118.188.1.2',NULL,'http://hh.china88phj.com/jiedingdan/','',NULL,NULL,NULL,NULL,'','','',NULL,NULL);");

require("../../inc/footer.php");
?>
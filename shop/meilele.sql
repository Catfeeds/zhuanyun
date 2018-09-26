/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50090
Source Host           : localhost:3306
Source Database       : meilele

Target Server Type    : MYSQL
Target Server Version : 50090
File Encoding         : 65001

Date: 2014-03-20 21:02:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ecs_account_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_account_log`;
CREATE TABLE `ecs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY  (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_account_log
-- ----------------------------
INSERT INTO `ecs_account_log` VALUES ('1', '1', '0.00', '0.00', '996', '996', '1388397103', '订单 2013122731476 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('2', '1', '0.00', '0.00', '7589', '7589', '1388468702', '订单 2013123135238 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('3', '1', '0.00', '0.00', '100', '100', '1388474932', '订单 2013122780190 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('4', '1', '0.00', '0.00', '3000', '3000', '1388479351', '订单 2013122727106 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('5', '1', '0.00', '0.00', '100', '100', '1388479393', '订单 2013122775150 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('6', '1', '0.00', '0.00', '1500', '1500', '1388479445', '订单 2013122784673 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('7', '1', '0.00', '0.00', '3580', '3580', '1388479495', '订单 2013122722923 赠送的积分', '99');
INSERT INTO `ecs_account_log` VALUES ('8', '1', '0.00', '0.00', '5140', '5140', '1388481843', '订单 2013120440283 赠送的积分', '99');

-- ----------------------------
-- Table structure for `ecs_ad`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_ad`;
CREATE TABLE `ecs_ad` (
  `ad_id` smallint(5) unsigned NOT NULL auto_increment,
  `position_id` smallint(5) unsigned NOT NULL default '0',
  `media_type` tinyint(3) unsigned NOT NULL default '0',
  `ad_name` varchar(60) NOT NULL default '',
  `ad_link` varchar(255) NOT NULL default '',
  `ad_code` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(11) NOT NULL default '0',
  `link_man` varchar(60) NOT NULL default '',
  `link_email` varchar(60) NOT NULL default '',
  `link_phone` varchar(60) NOT NULL default '',
  `click_count` mediumint(8) unsigned NOT NULL default '0',
  `enabled` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`ad_id`),
  KEY `position_id` (`position_id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=207 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_ad
-- ----------------------------
INSERT INTO `ecs_ad` VALUES ('1', '1', '0', '首页-顶部通栏广告', '', '1385551168024731458.jpg', '1385481600', '1482768000', '', '', '', '4', '1');
INSERT INTO `ecs_ad` VALUES ('2', '2', '0', '首页-网站公告顶部广告', '', '1385560014570221572.jpg', '1385481600', '1482768000', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('3', '3', '0', '首页-团购广告', 'group_buy.php?act=view&id=2', '1385561496734639703.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('4', '4', '0', '首页-新品广告1', '', '1385562976459503572.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('5', '4', '0', '首页-新品广告2', '', '1385562986080802298.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('6', '4', '0', '首页-新品广告3', '', '1385562997212489804.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('7', '4', '0', '首页-新品广告4', '', '1385563008900654744.jpg', '1385481600', '1482768000', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('8', '4', '0', '首页-新品广告5', '', '1385563020969481163.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('9', '4', '0', '首页-新品广告6', '', '1385563031696648334.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('10', '4', '0', '首页-新品广告7', '', '1385563042278486683.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('11', '4', '0', '首页-新品广告8', '', '1385563061973622412.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('12', '5', '0', '首页-精品广告1', '', '1385563785486596108.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('13', '5', '0', '首页-精品广告2', '', '1385563796223516241.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('14', '5', '0', '首页-精品广告3', '', '1385563806418900698.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('15', '5', '0', '首页-精品广告4', '', '1385563817924225430.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('16', '5', '0', '首页-精品广告5', '', '1385563826309356310.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('17', '5', '0', '首页-精品广告6', '', '1385563836174341330.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('18', '5', '0', '首页-精品广告7', '', '1385563849778664955.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('19', '5', '0', '首页-精品广告8', '', '1385563862235281116.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('20', '6', '0', '首页-分类ID1-左侧广告', '', '1385565216752788626.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('21', '7', '0', '首页-分类ID1-中间广告1', '', '1385565301823647496.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('22', '7', '0', '首页-分类ID1-中间广告2', '', '1385565313973601364.jpg', '1385481600', '1482768000', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('23', '7', '0', '首页-分类ID1-中间广告3', '', '1385565325784594312.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('24', '8', '0', '首页-分类ID1-右侧广告', '', '1385565388950769615.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('25', '9', '0', '首页-分类ID1-底部广告1', '', '1385565513361590387.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('26', '9', '0', '首页-分类ID1-底部广告2', '', '1385565524012945886.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('27', '9', '0', '首页-分类ID1-底部广告3', '', '1385565535843814607.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('28', '9', '0', '首页-分类ID1-底部广告4', '', '1385565546883726827.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('29', '9', '0', '首页-分类ID1-底部广告5', '', '1385565566388673167.jpg', '1385481600', '1482768000', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('30', '10', '0', '凯撒豪庭', '', '1385567264349425711.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('31', '10', '0', '韩菲尔', '', '1385567283471023198.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('32', '10', '0', '蒂美悦', '', '1385567298962379604.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('33', '10', '0', '卡富亚', '', '1385567321404680080.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('34', '10', '0', '青春城堡', '', '1385567338038094367.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('35', '10', '0', '林中鹰', '', '1385567354148399323.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('36', '10', '0', 'TCL', '', '1385567377550016441.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('37', '10', '0', '西门子', '', '1385567506769611793.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('38', '10', '0', '贝尔地板', '', '1385567523147726052.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('39', '10', '0', '艾玛诗', '', '1385567539283904426.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('40', '10', '0', '梦娜丝', '', '1385567557155880519.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('41', '10', '0', '赛朵', '', '1385567570526008030.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('42', '10', '0', '优曼家纺', '', '1385567592611729011.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('43', '10', '0', '唯萨', '', '1385567609421350373.jpg', '1385481600', '1482768000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('147', '52', '3', '新品家具，极速抢“鲜”', '', '新品家具，极速抢“鲜”', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('148', '52', '3', '特价商品，抄底特卖专场!', '', '特价商品，抄底特卖专场!', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('46', '12', '0', '灯饰钜惠！我和美美的约定', '', '1385629104062757737.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('47', '12', '0', '6周年卫浴特卖', '', '1385629143233483304.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('48', '12', '0', '8大最受欢迎地板', '', '1385629185383198062.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('49', '12', '0', '铭东商城6周年厨卫盛宴', '', '1385629203743519421.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('50', '12', '0', '全新铭东商城Iphone客户端！', '', '1385629219002800898.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('51', '13', '0', '分类频道页-分类ID4-楼层左侧广告1', '', '1385637044638399758.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('52', '13', '0', '分类频道页-分类ID4-楼层左侧广告2', '', '1385637055173837465.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('53', '14', '0', '分类频道页-分类ID4-楼层底部广告1', '', '1385639850522276745.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('54', '14', '0', '分类频道页-分类ID4-楼层底部广告2', '', '1385639861747015482.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('55', '14', '0', '分类频道页-分类ID4-楼层底部广告3', '', '1385639872196664630.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('56', '14', '0', '分类频道页-分类ID4-楼层底部广告4', '', '1385639882019449849.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('57', '15', '0', '分类频道页-分类ID1-最新促销活动-图片', '', '1385641707679275672.jpg', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('58', '16', '3', '现货清仓！半卖半送!', '', '现货清仓！半卖半送!', '1385568000', '1388160000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('59', '16', '3', '终极好家具，进口全实木——低至6.8折，我和我的小', '', '终极好家具，进口全实木——低至6.8折，我和我的小', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('60', '16', '3', '打造儿童家居新天地', '', '打造儿童家居新天地', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('61', '16', '3', '铭东商城/SKG6周年狂欢购！', '', '铭东商城/SKG6周年狂欢购！', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('62', '16', '3', 'SKG引爆炸弹价，全场包邮！', '', 'SKG引爆炸弹价，全场包邮！', '1385568000', '1482854400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('63', '17', '0', '团购页-通栏广告', '', '1385739221485486702.jpg', '1385654400', '1482940800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('64', '18', '0', '文章页-通栏广告', '', '1385807709770719903.jpg', '1385740800', '1483027200', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('65', '19', '0', '文章页-右侧广告', '', '1385812505707871830.jpg', '1385740800', '1483027200', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('66', '20', '0', '秀家-左侧广告', '', '1387380814051147257.jpg', '1385827200', '1483113600', '', '', '', '7', '1');
INSERT INTO `ecs_ad` VALUES ('67', '21', '0', 'PTC陶瓷暖风机 ¥369.00', '', '1385901421527538016.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('68', '21', '0', '爱丽丝床品四件套 ¥299.00', '', '1385901457542076573.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('69', '21', '0', '紫色水纹毛巾被 ¥99.00', '', '1385901485766604226.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('70', '21', '0', '圆形珍珠相框 ¥28.00', '', '1385901528449836839.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('71', '23', '0', '特惠套装页-顶部广告1', '', '1385912682519019507.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('72', '24', '0', '特惠套装页-顶部广告2', '', '1385912717354520013.jpg', '1385827200', '1483113600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('73', '25', '0', '首页-顶部促销广告', '', '1385972141450905269.gif', '1385913600', '1483200000', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('74', '26', '0', '首页-导航菜单-分类ID1-推荐品牌1', '', '1385973893624934679.jpg', '1385913600', '1483200000', '凯撒豪庭', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('75', '26', '0', '首页-导航菜单-分类ID1-推荐品牌2', '', '1385973862171596810.jpg', '1385913600', '1483200000', '韩菲尔', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('76', '26', '0', '首页-导航菜单-分类ID1-推荐品牌3', '', '1385973873999702874.jpg', '1385913600', '1483200000', '蒂美悦', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('77', '26', '0', '首页-导航菜单-分类ID1-推荐品牌4', '', '1385973884138818577.jpg', '1385913600', '1483200000', '卡富亚', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('78', '27', '0', '商品页-顶部通栏广告', '', '1385990367544595004.jpg', '1385913600', '1483200000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('79', '28', '0', '首页-分类ID2-左侧广告', '', '1386081752958196621.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('80', '29', '0', '首页-分类ID2-中间广告1', '', '1386081778055926198.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('81', '29', '0', '首页-分类ID2-中间广告2', '', '1386081791567609402.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('82', '29', '0', '首页-分类ID2-中间广告3', '', '1386081812051772280.jpg', '1386000000', '1483286400', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('83', '30', '0', '首页-分类ID2-右侧广告', '', '1386081835306877737.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('84', '31', '0', '首页-分类ID2-底部广告1', '', '1386081958889071005.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('85', '31', '0', '首页-分类ID2-底部广告2', '', '1386081970561689872.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('86', '31', '0', '首页-分类ID2-底部广告3', '', '1386081981701517524.jpg', '1386000000', '1483286400', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('87', '31', '0', '首页-分类ID2-底部广告4', '', '1386081994631606298.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('88', '31', '0', '首页-分类ID2-底部广告5', '', '1386082009648973384.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('89', '32', '0', '首页-分类ID3-左侧广告', '', '1386082116637576384.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('90', '33', '0', '首页-分类ID3-中间广告1', '', '1386082151147099491.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('91', '33', '0', '首页-分类ID3-中间广告2', '', '1386082169831168832.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('92', '33', '0', '首页-分类ID3-中间广告3', '', '1386082196812000842.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('93', '34', '0', '首页-分类ID3-右侧广告', '', '1386082215676242714.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('94', '35', '0', '首页-分类ID3-底部广告1', '', '1386082288805741032.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('95', '35', '0', '首页-分类ID3-底部广告2', '', '1386082302015538300.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('96', '35', '0', '首页-分类ID3-底部广告3', '', '1386082324636393380.jpg', '1386000000', '1483286400', '', '', '', '1', '1');
INSERT INTO `ecs_ad` VALUES ('97', '35', '0', '首页-分类ID3-底部广告4', '', '1386082337095214396.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('98', '35', '0', '首页-分类ID3-底部广告5', '', '1386082351337103577.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('99', '36', '0', '分类频道页-分类ID5-楼层左侧广告1', '', '1386084593087143883.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('100', '36', '0', '分类频道页-分类ID5-楼层左侧广告2', '', '1386084611448317635.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('101', '37', '0', '分类频道页-分类ID5-楼层底部广告1', '', '1386084754854268370.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('102', '37', '0', '分类频道页-分类ID5-楼层底部广告2', '', '1386084765565627916.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('103', '37', '0', '分类频道页-分类ID5-楼层底部广告3', '', '1386084776104092568.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('104', '37', '0', '分类频道页-分类ID5-楼层底部广告4', '', '1386084793386473158.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('105', '38', '0', '分类频道页-分类ID6-楼层左侧广告1', '', '1386084878898640541.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('106', '38', '0', '分类频道页-分类ID6-楼层左侧广告2', '', '1386084892380371385.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('107', '39', '0', '分类频道页-分类ID6-楼层底部广告1', '', '1386084959785983329.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('108', '39', '0', '分类频道页-分类ID6-楼层底部广告2', '', '1386084970892829075.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('109', '39', '0', '分类频道页-分类ID6-楼层底部广告3', '', '1386084981624962223.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('110', '39', '0', '分类频道页-分类ID6-楼层底部广告4', '', '1386085002924029593.jpg', '1386000000', '1483286400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('111', '40', '0', '到店体验0元送豪礼！', '', '1386145475382169329.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('112', '40', '0', '免费设计，家电轻松得！', '', '1386145499633052733.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('113', '40', '0', '荧屏家具大咖秀', '', '1386145520802274294.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('114', '40', '0', '吃货的三大境界', '', '1386145535592291773.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('115', '40', '0', '打造儿童家居天地', '', '1386145557289874100.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('116', '41', '0', '顶级分类页-分类ID1-品牌广告1', '', '1386146346502910325.gif', '1386086400', '1483372800', '凯撒豪庭', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('117', '41', '0', '顶级分类页-分类ID1-品牌广告2', '', '1386146357216516045.gif', '1386086400', '1483372800', '韩菲尔', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('118', '41', '0', '顶级分类页-分类ID1-品牌广告3', '', '1386146368753039290.gif', '1386086400', '1483372800', '卡富亚', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('119', '41', '0', '顶级分类页-分类ID1-品牌广告4', '', '1386146381585913683.gif', '1386086400', '1483372800', '蒂美悦', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('120', '41', '0', '顶级分类页-分类ID1-品牌广告5', '', '1386146401944843869.gif', '1386086400', '1483372800', '小童舍', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('121', '42', '0', '顶级分类页-分类ID1-新品广告1', '', '1386147814037570965.jpg', '1386086400', '1483372800', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('122', '42', '0', '顶级分类页-分类ID1-新品广告2', '', '1386147829627874428.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('123', '42', '0', '顶级分类页-分类ID1-新品广告3', '', '1386147840292242640.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('124', '42', '0', '顶级分类页-分类ID1-新品广告4', '', '1386147851606949863.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('125', '42', '0', '顶级分类页-分类ID1-新品广告5', '', '1386147864234767578.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('126', '43', '0', '顶级分类页-分类ID1-热卖排行1', '', '1386148468302908812.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('127', '43', '0', '顶级分类页-分类ID1-热卖排行2', '', '1386148480939796852.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('128', '43', '0', '顶级分类页-分类ID1-热卖排行3', '', '1386148491356319919.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('129', '44', '0', '顶级分类页-分类ID4-楼层左侧广告1', '', '1386149390639154108.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('130', '44', '0', '顶级分类页-分类ID4-楼层左侧广告2', '', '1386149401074442847.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('131', '44', '0', '顶级分类页-分类ID4-楼层左侧广告3', '', '1386149415004888945.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('132', '45', '0', '顶级分类页-分类ID4-楼层右侧广告', '', '1386149462509553921.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('133', '46', '0', '顶级分类页-分类ID5-楼层左侧广告1', '', '1386153503176931374.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('134', '46', '0', '顶级分类页-分类ID5-楼层左侧广告2', '', '1386153520765573811.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('135', '46', '0', '顶级分类页-分类ID5-楼层左侧广告3', '', '1386153532565786907.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('136', '47', '0', '顶级分类页-分类ID5-楼层右侧广告1', '', '1386153556910478258.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('137', '48', '0', '顶级分类页-分类ID6-楼层左侧广告1', '', '1386153727784449596.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('138', '48', '0', '顶级分类页-分类ID6-楼层左侧广告2', '', '1386153738682789793.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('139', '48', '0', '顶级分类页-分类ID6-楼层左侧广告3', '', '1386153752716745409.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('140', '49', '0', '顶级分类页-分类ID6-楼层右侧广告', '', '1386153777577077036.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('141', '50', '0', '顶级分类页-分类ID1-最新促销活动-图片', '', '1386154016906256632.jpg', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('142', '51', '3', '打造儿童天地', '', '打造儿童天地', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('143', '51', '3', '现货清仓/半卖半送', '', '现货清仓/半卖半送', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('144', '51', '3', '终极好家具，进口全实木——低至6.8折，我和我的小伙伴们都惊呆了-活动-铭东商城家具网', '', '终极好家具，进口全实木——低至6.8折，我和我的小伙伴们都惊呆了-活动-铭东商城家具网', '1386086400', '1388678400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('145', '51', '3', '铭东商城/SKG6周年狂欢购', '', '铭东商城/SKG6周年狂欢购', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('146', '51', '3', 'SKG引爆炸弹价，全场包邮', '', 'SKG引爆炸弹价，全场包邮', '1386086400', '1483372800', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('149', '52', '3', '热卖家具，火爆疯狂抢购!', '', '热卖家具，火爆疯狂抢购!', '1386086400', '1483372800', '', '', '', '14', '1');
INSERT INTO `ecs_ad` VALUES ('172', '61', '0', '触屏首页-轮播广告1', '', '1376962008930613613.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('173', '61', '0', '触屏首页-轮播广告2', '', '1376962021988432562.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('174', '61', '0', '触屏首页-轮播广告3', '', '1376962033066550718.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('175', '61', '0', '触屏首页-轮播广告4', '', '1376962047868870319.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('176', '61', '0', '触屏首页-轮播广告5', '', '1376962066922775366.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('177', '62', '0', '家具城', 'category.php?c_id=1', '1376962548135940550.png', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('178', '62', '0', '建材城', 'category.php?c_id=2', '1376962568788030173.png', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('179', '62', '0', '家饰城', 'category.php?c_id=3', '1376962586922173829.png', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('180', '62', '0', '所有分类', 'cat_all.php', '1376962605623168464.png', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('181', '63', '0', '触屏首页-分类ID24-图片广告', '', '1376963472943928458.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('182', '64', '0', '触屏首页-分类ID27-图片广告', '', '1376963510305719505.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('183', '65', '0', '触屏首页-分类ID199-图片广告', '', '1376963547464408539.jpg', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('184', '66', '3', '客服服务', 'article.php?act=detail&a_id=90', '客服服务', '1376928000', '1379520000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('185', '66', '3', '服务到家', 'article.php?act=detail&a_id=90', '服务到家', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('186', '66', '3', '到店支付', 'article.php?act=detail&a_id=90', '到店支付', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('187', '66', '3', '售后服务', 'article.php?act=detail&a_id=90', '售后服务', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('188', '66', '3', '质量保证', 'article.php?act=detail&a_id=90', '质量保证', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('189', '67', '3', 'copyright © 2005-2013 m.meilele.com', '', 'copyright © 2005-2013 m.meilele.com', '1376928000', '1379520000', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('190', '68', '2', '触屏首页-公司地址', '', '<a href=\"javascript:;\" class=\"label\">广州金沙洲体验馆</a>\r\n          <div class=\"hideMap\"> <a class=\"phone\" href=\"tel:020-81439005\"><span>抢购热线：020-81439005</span></a>\r\n            <dl>\r\n              <dt class=\"name\">地址：</dt>\r\n              <dd class=\"value\">广州市金沙洲建设大道1号中海金沙湾2号楼42，43号商铺</dd>\r\n            </dl>\r\n          </div>', '1376928000', '1474214400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('191', '69', '3', '触屏首页-400电话', '', '<a href=\"index.php\" style=\"margin-right:10px;\">首页</a><a href=\"user.php\" style=\"margin-right:10px;\">登录</a><a href=\"cart.php\">购物车</a><a class=\"at\" href=\"tel:4000098666\"><span class=\"tel_icon\"></span>400-0098000</a></span>', '1376928000', '1505750400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('192', '70', '0', '体验馆-顶部通栏广告', '', '1386410740593845033.jpg', '1386345600', '1483632000', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('193', '71', '0', '体验馆-ID2-flash广告1', '', '1386489609310313079.jpg', '1386432000', '1483718400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('194', '71', '0', '体验馆-ID2-flash广告2', '', '1386489645637842899.jpg', '1386432000', '1483718400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('195', '71', '0', '体验馆-ID2-flash广告3', '', '1386489655683375036.jpg', '1386432000', '1483718400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('196', '71', '0', '体验馆-ID2-flash广告4', '', '1386489673346602821.JPG', '1386432000', '1483718400', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('197', '72', '0', '搜索页-通栏广告', '', '1386733341987229055.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('198', '73', '0', '搜索页-左侧广告', '', '1386733404898907100.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('199', '74', '0', '搜索页-flash广告1', '', '1386733512531025061.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('200', '74', '0', '搜索页-flash广告2', '', '1386733523185827927.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('201', '74', '0', '搜索页-flash广告3', '', '1386733534164764270.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('202', '74', '0', '搜索页-flash广告4', '', '1386733546009792097.jpg', '1386691200', '1483977600', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('203', '75', '0', '专题页-活动广告1', '', '1387106370443195254.jpg', '1387036800', '1484323200', '', '', '', '2', '1');
INSERT INTO `ecs_ad` VALUES ('204', '75', '0', '专题页-活动广告2', '', '1387106382772192977.jpg', '1387036800', '1484323200', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('205', '75', '0', '专题页-活动广告3', '', '1387106395395051523.jpg', '1387036800', '1484323200', '', '', '', '0', '1');
INSERT INTO `ecs_ad` VALUES ('206', '75', '0', '专题页-活动广告4', '', '1387106409970043190.jpg', '1387036800', '1484323200', '', '', '', '0', '1');

-- ----------------------------
-- Table structure for `ecs_admin_action`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_admin_action`;
CREATE TABLE `ecs_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL auto_increment,
  `parent_id` tinyint(3) unsigned NOT NULL default '0',
  `action_code` varchar(20) NOT NULL default '',
  `relevance` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`action_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_admin_action
-- ----------------------------
INSERT INTO `ecs_admin_action` VALUES ('1', '0', 'goods', '');
INSERT INTO `ecs_admin_action` VALUES ('2', '0', 'cms_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('3', '0', 'users_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('4', '0', 'priv_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('5', '0', 'sys_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('6', '0', 'order_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('7', '0', 'promotion', '');
INSERT INTO `ecs_admin_action` VALUES ('8', '0', 'email', '');
INSERT INTO `ecs_admin_action` VALUES ('9', '0', 'templates_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('10', '0', 'db_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('11', '0', 'sms_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('21', '1', 'goods_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('22', '1', 'remove_back', '');
INSERT INTO `ecs_admin_action` VALUES ('23', '1', 'cat_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('24', '1', 'cat_drop', 'cat_manage');
INSERT INTO `ecs_admin_action` VALUES ('25', '1', 'attr_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('26', '1', 'brand_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('27', '1', 'comment_priv', '');
INSERT INTO `ecs_admin_action` VALUES ('84', '1', 'tag_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('30', '2', 'article_cat', '');
INSERT INTO `ecs_admin_action` VALUES ('31', '2', 'article_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('32', '2', 'shopinfo_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('33', '2', 'shophelp_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('34', '2', 'vote_priv', '');
INSERT INTO `ecs_admin_action` VALUES ('35', '7', 'topic_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('74', '4', 'template_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('73', '3', 'feedback_priv', '');
INSERT INTO `ecs_admin_action` VALUES ('38', '3', 'integrate_users', '');
INSERT INTO `ecs_admin_action` VALUES ('39', '3', 'sync_users', 'integrate_users');
INSERT INTO `ecs_admin_action` VALUES ('40', '3', 'users_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('41', '3', 'users_drop', 'users_manage');
INSERT INTO `ecs_admin_action` VALUES ('42', '3', 'user_rank', '');
INSERT INTO `ecs_admin_action` VALUES ('85', '3', 'surplus_manage', 'account_manage');
INSERT INTO `ecs_admin_action` VALUES ('43', '4', 'admin_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('44', '4', 'admin_drop', 'admin_manage');
INSERT INTO `ecs_admin_action` VALUES ('45', '4', 'allot_priv', 'admin_manage');
INSERT INTO `ecs_admin_action` VALUES ('46', '4', 'logs_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('47', '4', 'logs_drop', 'logs_manage');
INSERT INTO `ecs_admin_action` VALUES ('48', '5', 'shop_config', '');
INSERT INTO `ecs_admin_action` VALUES ('49', '5', 'ship_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('50', '5', 'payment', '');
INSERT INTO `ecs_admin_action` VALUES ('51', '5', 'shiparea_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('52', '5', 'area_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('53', '6', 'order_os_edit', '');
INSERT INTO `ecs_admin_action` VALUES ('54', '6', 'order_ps_edit', 'order_os_edit');
INSERT INTO `ecs_admin_action` VALUES ('55', '6', 'order_ss_edit', 'order_os_edit');
INSERT INTO `ecs_admin_action` VALUES ('56', '6', 'order_edit', 'order_os_edit');
INSERT INTO `ecs_admin_action` VALUES ('57', '6', 'order_view', '');
INSERT INTO `ecs_admin_action` VALUES ('58', '6', 'order_view_finished', '');
INSERT INTO `ecs_admin_action` VALUES ('59', '6', 'repay_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('60', '6', 'booking', '');
INSERT INTO `ecs_admin_action` VALUES ('61', '6', 'sale_order_stats', '');
INSERT INTO `ecs_admin_action` VALUES ('62', '6', 'client_flow_stats', '');
INSERT INTO `ecs_admin_action` VALUES ('78', '7', 'snatch_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('83', '7', 'ad_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('80', '7', 'gift_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('81', '7', 'card_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('70', '1', 'goods_type', '');
INSERT INTO `ecs_admin_action` VALUES ('82', '7', 'pack', '');
INSERT INTO `ecs_admin_action` VALUES ('79', '7', 'bonus_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('75', '5', 'friendlink', '');
INSERT INTO `ecs_admin_action` VALUES ('76', '5', 'db_backup', '');
INSERT INTO `ecs_admin_action` VALUES ('77', '5', 'db_renew', 'db_backup');
INSERT INTO `ecs_admin_action` VALUES ('86', '4', 'agency_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('87', '3', 'account_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('88', '5', 'flash_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('89', '5', 'navigator', '');
INSERT INTO `ecs_admin_action` VALUES ('90', '7', 'auction', '');
INSERT INTO `ecs_admin_action` VALUES ('91', '7', 'group_by', '');
INSERT INTO `ecs_admin_action` VALUES ('92', '7', 'favourable', '');
INSERT INTO `ecs_admin_action` VALUES ('93', '7', 'whole_sale', '');
INSERT INTO `ecs_admin_action` VALUES ('94', '1', 'goods_auto', '');
INSERT INTO `ecs_admin_action` VALUES ('95', '2', 'article_auto', '');
INSERT INTO `ecs_admin_action` VALUES ('96', '5', 'cron', '');
INSERT INTO `ecs_admin_action` VALUES ('97', '5', 'affiliate', '');
INSERT INTO `ecs_admin_action` VALUES ('98', '5', 'affiliate_ck', '');
INSERT INTO `ecs_admin_action` VALUES ('99', '8', 'attention_list', '');
INSERT INTO `ecs_admin_action` VALUES ('100', '8', 'email_list', '');
INSERT INTO `ecs_admin_action` VALUES ('101', '8', 'magazine_list', '');
INSERT INTO `ecs_admin_action` VALUES ('102', '8', 'view_sendlist', '');
INSERT INTO `ecs_admin_action` VALUES ('103', '1', 'virualcard', '');
INSERT INTO `ecs_admin_action` VALUES ('104', '7', 'package_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('105', '1', 'picture_batch', '');
INSERT INTO `ecs_admin_action` VALUES ('106', '1', 'goods_export', '');
INSERT INTO `ecs_admin_action` VALUES ('107', '1', 'goods_batch', '');
INSERT INTO `ecs_admin_action` VALUES ('108', '1', 'gen_goods_script', '');
INSERT INTO `ecs_admin_action` VALUES ('109', '5', 'sitemap', '');
INSERT INTO `ecs_admin_action` VALUES ('110', '5', 'file_priv', '');
INSERT INTO `ecs_admin_action` VALUES ('111', '5', 'file_check', '');
INSERT INTO `ecs_admin_action` VALUES ('112', '9', 'template_select', '');
INSERT INTO `ecs_admin_action` VALUES ('113', '9', 'template_setup', '');
INSERT INTO `ecs_admin_action` VALUES ('114', '9', 'library_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('115', '9', 'lang_edit', '');
INSERT INTO `ecs_admin_action` VALUES ('116', '9', 'backup_setting', '');
INSERT INTO `ecs_admin_action` VALUES ('117', '9', 'mail_template', '');
INSERT INTO `ecs_admin_action` VALUES ('118', '10', 'db_backup', '');
INSERT INTO `ecs_admin_action` VALUES ('119', '10', 'db_renew', '');
INSERT INTO `ecs_admin_action` VALUES ('120', '10', 'db_optimize', '');
INSERT INTO `ecs_admin_action` VALUES ('121', '10', 'sql_query', '');
INSERT INTO `ecs_admin_action` VALUES ('122', '10', 'convert', '');
INSERT INTO `ecs_admin_action` VALUES ('124', '11', 'sms_send', '');
INSERT INTO `ecs_admin_action` VALUES ('128', '7', 'exchange_goods', '');
INSERT INTO `ecs_admin_action` VALUES ('129', '6', 'delivery_view', '');
INSERT INTO `ecs_admin_action` VALUES ('130', '6', 'back_view', '');
INSERT INTO `ecs_admin_action` VALUES ('131', '5', 'reg_fields', '');
INSERT INTO `ecs_admin_action` VALUES ('132', '5', 'shop_authorized', '');
INSERT INTO `ecs_admin_action` VALUES ('133', '5', 'webcollect_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('134', '4', 'suppliers_manage', '');
INSERT INTO `ecs_admin_action` VALUES ('135', '4', 'role_manage', '');

-- ----------------------------
-- Table structure for `ecs_admin_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_admin_log`;
CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `log_time` int(10) unsigned NOT NULL default '0',
  `user_id` tinyint(3) unsigned NOT NULL default '0',
  `log_info` varchar(255) NOT NULL default '',
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=759 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_admin_log
-- ----------------------------
INSERT INTO `ecs_admin_log` VALUES ('1', '1385534865', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('2', '1385535239', '1', '添加商品分类: 家具', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('3', '1385535247', '1', '添加商品分类: 建材', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('4', '1385535262', '1', '添加商品分类: 家居家饰', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('5', '1385535280', '1', '添加商品分类: 卧室', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('6', '1385535289', '1', '添加商品分类: 客厅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('7', '1385535296', '1', '编辑商品分类: 客厅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('8', '1385535309', '1', '添加商品分类: 餐厅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('9', '1385535316', '1', '添加商品分类: 书房', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('10', '1385535332', '1', '添加商品分类: 儿童房', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('11', '1385535342', '1', '添加商品分类: 户外家具', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('12', '1385535351', '1', '添加商品分类: 定制家具', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('13', '1385535367', '1', '添加商品分类: 灯饰照明', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('14', '1385535375', '1', '添加商品分类: 厨房用品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('15', '1385535388', '1', '添加商品分类: 卫浴用品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('16', '1385535396', '1', '添加商品分类: 五金电器', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('17', '1385535405', '1', '添加商品分类: 墙地面', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('18', '1385535424', '1', '添加商品分类: 五金工具', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('19', '1385535434', '1', '添加商品分类: 床上用品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('20', '1385535443', '1', '添加商品分类: 居家日用', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('21', '1385535453', '1', '添加商品分类: 布艺织物', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('22', '1385535460', '1', '添加商品分类: 家居饰品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('23', '1385535469', '1', '添加商品分类: 厨房餐饮', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('24', '1385535494', '1', '添加商品分类: 生活电器', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('25', '1385535520', '1', '添加商品分类: 床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('26', '1385535529', '1', '添加商品分类: 床垫', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('27', '1385535541', '1', '添加商品分类: 床头柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('28', '1385535551', '1', '添加商品分类: 沙发', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('29', '1385535562', '1', '添加商品分类: 茶几/边桌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('30', '1385535574', '1', '添加商品分类: 电视柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('31', '1385535587', '1', '添加商品分类: 餐桌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('32', '1385535597', '1', '添加商品分类: 餐椅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('33', '1385535605', '1', '添加商品分类: 餐边柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('34', '1385535615', '1', '添加商品分类: 书桌/工作台', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('35', '1385535628', '1', '添加商品分类: 书柜/书架', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('36', '1385535639', '1', '添加商品分类: 书椅/转椅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('37', '1385535653', '1', '添加商品分类: 儿童床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('38', '1385535666', '1', '添加商品分类: 儿童床头柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('39', '1385535676', '1', '添加商品分类: 儿童衣柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('40', '1385535686', '1', '添加商品分类: 吊篮/吊椅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('41', '1385535701', '1', '添加商品分类: 休闲桌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('42', '1385535710', '1', '添加商品分类: 休闲椅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('43', '1385535727', '1', '添加商品分类: 定制橱柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('44', '1385535742', '1', '添加商品分类: 定制书柜/书台', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('45', '1385535891', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('46', '1385535919', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('47', '1385536232', '1', '添加商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('48', '1385536310', '1', '添加商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('49', '1385536398', '1', '添加商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('50', '1385536464', '1', '添加商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('51', '1385536549', '1', '添加商品: 地中海风格 美国进口白杨木双人床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('52', '1385536616', '1', '添加商品: 现代风格	1.8米软床 头层牛皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('53', '1385536684', '1', '添加文章分类: 关于铭东商城', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('54', '1385536713', '1', '添加文章分类: 新手指南', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('55', '1385536723', '1', '添加文章分类: 配送安装', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('56', '1385536739', '1', '添加文章分类: 售后服务', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('57', '1385536747', '1', '添加文章分类: 购物保障', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('58', '1385536786', '1', '添加文章: 公司简介', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('59', '1385536801', '1', '添加文章: 体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('60', '1385536815', '1', '添加文章: 诚聘英才', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('61', '1385536865', '1', '添加文章: 注册新用户', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('62', '1385536874', '1', '添加文章: 订购家具流程', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('63', '1385536882', '1', '添加文章: 体验馆购买指导', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('64', '1385536897', '1', '添加文章: 收货指南', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('65', '1385536904', '1', '添加文章: 体验馆服务费', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('66', '1385536912', '1', '添加文章: 物流配送', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('67', '1385536923', '1', '添加文章: 45天无理由退换货', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('68', '1385536930', '1', '添加文章: 如何申请退款', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('69', '1385536939', '1', '添加文章: 维修补件说明', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('70', '1385536952', '1', '添加文章: 正品保证', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('71', '1385536960', '1', '添加文章: 注册协议', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('72', '1385536968', '1', '添加文章: 隐私保护', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('73', '1385537035', '1', '删除友情链接: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('74', '1385537037', '1', '删除友情链接: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('75', '1385537039', '1', '删除友情链接: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('76', '1385537051', '1', '添加友情链接: 床图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('77', '1385537067', '1', '添加友情链接: 衣帽间装修效果图', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('78', '1385537081', '1', '添加友情链接: 福州家居网', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('79', '1385550814', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('80', '1385551154', '1', '添加广告位置: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('81', '1385551168', '1', '添加广告: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('82', '1385555332', '1', '编辑商品分类: 床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('83', '1385555342', '1', '编辑商品分类: 床头柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('84', '1385555350', '1', '编辑商品分类: 床垫', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('85', '1385556356', '1', '编辑品牌管理: 凯撒豪庭', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('86', '1385556363', '1', '添加品牌管理: 韩菲尔', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('87', '1385556371', '1', '添加品牌管理: 蒂美悦', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('88', '1385556380', '1', '添加品牌管理: 卡富亚', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('89', '1385556396', '1', '编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('90', '1385556405', '1', '编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('91', '1385556412', '1', '编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('92', '1385560003', '1', '添加广告位置: 首页-网站公告顶部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('93', '1385560014', '1', '添加广告: 首页-网站公告顶部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('94', '1385560394', '1', '添加文章分类: 网站公告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('95', '1385560416', '1', '添加文章: 铭东商城第262家体验馆空降古都许', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('96', '1385560443', '1', '添加文章: 中原大地再迎新馆！铭东商城第265', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('97', '1385560453', '1', '添加文章: 第266家体验馆花落牡丹江！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('98', '1385561315', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('99', '1385561485', '1', '添加广告位置: 首页-团购广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('100', '1385561496', '1', '添加广告: 首页-团购广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('101', '1385561641', '1', '添加团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('102', '1385561665', '1', '添加团购商品: 地中海风格 美国进口白杨木双人床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('103', '1385561867', '1', '编辑团购商品: 地中海风格 美国进口白杨木双人床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('104', '1385561884', '1', '编辑团购商品: 地中海风格 美国进口白杨木双人床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('105', '1385561907', '1', '编辑广告: 首页-团购广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('106', '1385561938', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('107', '1385562421', '1', '编辑商品: 现代风格	1.8米软床 头层牛皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('108', '1385562438', '1', '编辑商品: 地中海风格 美国进口白杨木双人床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('109', '1385562457', '1', '编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('110', '1385562948', '1', '添加广告位置: 首页-新品广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('111', '1385562976', '1', '添加广告: 首页-新品广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('112', '1385562986', '1', '添加广告: 首页-新品广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('113', '1385562997', '1', '添加广告: 首页-新品广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('114', '1385563008', '1', '添加广告: 首页-新品广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('115', '1385563020', '1', '添加广告: 首页-新品广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('116', '1385563031', '1', '添加广告: 首页-新品广告6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('117', '1385563042', '1', '添加广告: 首页-新品广告7', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('118', '1385563061', '1', '添加广告: 首页-新品广告8', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('119', '1385563775', '1', '添加广告位置: 首页-精品广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('120', '1385563785', '1', '添加广告: 首页-精品广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('121', '1385563796', '1', '添加广告: 首页-精品广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('122', '1385563806', '1', '添加广告: 首页-精品广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('123', '1385563817', '1', '添加广告: 首页-精品广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('124', '1385563826', '1', '添加广告: 首页-精品广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('125', '1385563836', '1', '添加广告: 首页-精品广告6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('126', '1385563849', '1', '添加广告: 首页-精品广告7', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('127', '1385563862', '1', '添加广告: 首页-精品广告8', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('128', '1385565187', '1', '添加广告位置: 首页-分类ID1-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('129', '1385565216', '1', '添加广告: 首页-分类ID1-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('130', '1385565228', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('131', '1385565287', '1', '添加广告位置: 首页-分类ID1-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('132', '1385565301', '1', '添加广告: 首页-分类ID1-中间广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('133', '1385565313', '1', '添加广告: 首页-分类ID1-中间广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('134', '1385565325', '1', '添加广告: 首页-分类ID1-中间广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('135', '1385565365', '1', '添加广告位置: 首页-分类ID1-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('136', '1385565388', '1', '添加广告: 首页-分类ID1-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('137', '1385565433', '1', '添加广告位置: 首页-分类ID1-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('138', '1385565513', '1', '添加广告: 首页-分类ID1-底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('139', '1385565524', '1', '添加广告: 首页-分类ID1-底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('140', '1385565535', '1', '添加广告: 首页-分类ID1-底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('141', '1385565546', '1', '添加广告: 首页-分类ID1-底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('142', '1385565566', '1', '添加广告: 首页-分类ID1-底部广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('143', '1385567155', '1', '添加广告位置: 首页-热门品牌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('144', '1385567264', '1', '添加广告: 凯撒豪庭', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('145', '1385567283', '1', '添加广告: 韩菲尔', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('146', '1385567298', '1', '添加广告: 蒂美悦', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('147', '1385567321', '1', '添加广告: 卡富亚', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('148', '1385567338', '1', '添加广告: 青春城堡', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('149', '1385567354', '1', '添加广告: 林中鹰', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('150', '1385567377', '1', '添加广告: TCL', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('151', '1385567506', '1', '添加广告: 西门子', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('152', '1385567523', '1', '添加广告: 贝尔地板', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('153', '1385567539', '1', '添加广告: 艾玛诗', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('154', '1385567557', '1', '添加广告: 梦娜丝', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('155', '1385567570', '1', '添加广告: 赛朵', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('156', '1385567592', '1', '添加广告: 优曼家纺', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('157', '1385567609', '1', '添加广告: 唯萨', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('158', '1385567635', '1', '编辑广告位置: 首页-热门品牌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('159', '1385567647', '1', '编辑广告位置: 首页-热门品牌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('160', '1385619321', '1', '添加文章分类: 晒家达人', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('161', '1385619408', '1', '添加文章分类: 家居资讯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('162', '1385619509', '1', '添加文章: 【小苏的家】阳台改榻榻米，仅2.6w！五个月的装修长跑！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('163', '1385619526', '1', '添加文章: ❤95㎡简约婚房❤拱形吊顶+欧式家具（基装+主材+家具清单', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('164', '1385619539', '1', '添加文章: 【主妇逆袭】简欧路上，7万123平装修中的零零碎碎（光荣', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('165', '1385619554', '1', '添加文章: 高端大气上档次的现代简约装修 美爆了！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('166', '1385619573', '1', '添加文章: 单身女汉子独爱kitty猫儿，单身族居家必备神器！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('167', '1385619598', '1', '添加文章: 19万精装广州135㎡普罗旺斯浪漫地中海三居', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('168', '1385619618', '1', '添加文章: 7W换回一个美丽婚房，阳台变身休闲区，红红火火构建魅力', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('169', '1385619637', '1', '添加文章: <76㎡小二居多图实拍细节>小清新文艺范儿，十足的地中', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('170', '1385620453', '1', '添加文章: 75平现代简约风格 白+蓝色', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('171', '1385620467', '1', '添加文章: 85后艺术温馨家 简单中的清新', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('172', '1385620493', '1', '添加文章: 35平超精致小窝 小空间大梦想', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('173', '1385620506', '1', '添加文章: 网友详谈二手房翻修', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('174', '1385620520', '1', '添加文章: 70平极致浪漫公寓 我的浪漫满', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('175', '1385620533', '1', '添加文章: 7万装60平小婚房 简约温馨气', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('176', '1385620546', '1', '添加文章: 8万半包装的95平温暖简约3居', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('177', '1385620557', '1', '添加文章: 85后感谢设计师 89平浪漫清新', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('178', '1385628126', '1', '添加广告位置: 分类频道页-分类ID4-导航促销广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('179', '1385628160', '1', '添加广告: 新品家具，极速抢“鲜”', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('180', '1385628177', '1', '添加广告: 特价商品，抄底特卖专场!', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('181', '1385629079', '1', '添加广告位置: 分类频道页-分类ID4-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('182', '1385629104', '1', '添加广告: 灯饰钜惠！我和美美的约定', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('183', '1385629143', '1', '添加广告: 6周年卫浴特卖', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('184', '1385629185', '1', '添加广告: 8大最受欢迎地板', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('185', '1385629203', '1', '添加广告: 铭东商城6周年厨卫盛宴', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('186', '1385629219', '1', '添加广告: 全新铭东商城Iphone客户端！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('187', '1385629701', '1', '编辑广告位置: 分类频道页-分类ID1-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('188', '1385637030', '1', '添加广告位置: 分类频道页-分类ID4-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('189', '1385637044', '1', '添加广告: 分类频道页-分类ID4-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('190', '1385637055', '1', '添加广告: 分类频道页-分类ID4-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('191', '1385639838', '1', '添加广告位置: 分类频道页-分类ID4-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('192', '1385639850', '1', '添加广告: 分类频道页-分类ID4-楼层底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('193', '1385639861', '1', '添加广告: 分类频道页-分类ID4-楼层底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('194', '1385639872', '1', '添加广告: 分类频道页-分类ID4-楼层底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('195', '1385639882', '1', '添加广告: 分类频道页-分类ID4-楼层底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('196', '1385641696', '1', '添加广告位置: 分类频道页-分类ID1-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('197', '1385641707', '1', '添加广告: 分类频道页-分类ID1-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('198', '1385641733', '1', '添加广告位置: 分类频道页-分类ID1-最新促销活动-文字', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('199', '1385641751', '1', '添加广告: 现货清仓！半卖半送!', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('200', '1385641773', '1', '添加广告: 终极好家具，进口全实木——低至6.8折，我和我的小', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('201', '1385641793', '1', '添加广告: 打造儿童家居新天地', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('202', '1385641809', '1', '添加广告: 铭东商城/SKG6周年狂欢购！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('203', '1385641823', '1', '添加广告: SKG引爆炸弹价，全场包邮！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('204', '1385652639', '1', '编辑商品分类: 卧室', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('205', '1385652882', '1', '添加属性: 家装风格', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('206', '1385652919', '1', '添加属性: 材质', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('207', '1385652949', '1', '添加属性: 床类型', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('208', '1385652969', '1', '编辑商品类型: 床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('209', '1385652981', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('210', '1385653016', '1', '编辑商品分类: 卧室', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('211', '1385656822', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('212', '1385657269', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('213', '1385711780', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('214', '1385713071', '1', '添加属性: 类&emsp;型', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('215', '1385713389', '1', '添加属性: 内&emsp;径', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('216', '1385713424', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('217', '1385714694', '1', '编辑属性: 内&emsp;径', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('218', '1385714716', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('219', '1385731441', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('220', '1385731459', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('221', '1385739210', '1', '添加广告位置: 团购页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('222', '1385739221', '1', '添加广告: 团购页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('223', '1385739966', '1', '添加团购商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('224', '1385740002', '1', '添加团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('225', '1385740037', '1', '添加团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('226', '1385740067', '1', '添加团购商品: 地中海风格 美国进口白杨木双人床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('227', '1385740570', '1', '编辑团购商品: 地中海风格 美国进口白杨木双人床[4]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('228', '1385740693', '1', '编辑团购商品: 美式古典	双面描金雕花排骨架床[1]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('229', '1385740711', '1', '编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('230', '1385740788', '1', '编辑团购商品: 美式古典	双面描金雕花排骨架床[1]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('231', '1385740802', '1', '编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('232', '1385740813', '1', '编辑团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床[3]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('233', '1385740824', '1', '编辑团购商品: 地中海风格 美国进口白杨木双人床[4]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('234', '1385741049', '1', '编辑团购商品: 美式古典	双面描金雕花排骨架床[1]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('235', '1385741056', '1', '编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('236', '1385741063', '1', '编辑团购商品: 欧式田园	粉红玫瑰立体雕花排骨架床[3]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('237', '1385741071', '1', '编辑团购商品: 地中海风格 美国进口白杨木双人床[4]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('238', '1385742925', '1', '编辑团购商品: 美式古典	双面描金雕花排骨架床[1]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('239', '1385742933', '1', '编辑团购商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床[2]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('240', '1385784016', '1', '安装支付方式: 支付宝', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('241', '1385784024', '1', '安装支付方式: 银行汇款/转帐', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('242', '1385784032', '1', '安装配送方式: 顺丰速运', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('243', '1385784038', '1', '添加配送区域: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('244', '1385807699', '1', '添加广告位置: 文章页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('245', '1385807709', '1', '添加广告: 文章页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('246', '1385812458', '1', '编辑广告位置: 文章页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('247', '1385812494', '1', '添加广告位置: 文章页-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('248', '1385812505', '1', '添加广告: 文章页-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('249', '1385813282', '1', '编辑文章: 75平现代简约风格 白+蓝色', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('250', '1385817893', '1', '编辑文章: 75平现代简约风格 白+蓝色', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('251', '1385817936', '1', '编辑文章: 75平现代简约风格 白+蓝色', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('252', '1385819386', '1', '编辑文章: 8万半包装的95平温暖简约3居', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('253', '1385819392', '1', '编辑文章: 85后感谢设计师 89平浪漫清新', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('254', '1385821836', '1', '编辑品牌管理: 凯撒豪庭', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('255', '1385821846', '1', '编辑品牌管理: 韩菲尔', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('256', '1385821871', '1', '编辑品牌管理: 蒂美悦', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('257', '1385821882', '1', '编辑品牌管理: 卡富亚', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('258', '1385899236', '1', '添加文章分类: 秀家', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('259', '1385901128', '1', '添加广告位置: 秀家-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('260', '1385901141', '1', '添加广告: 秀家-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('261', '1385901314', '1', '添加广告位置: 秀家-本月奖品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('262', '1385901421', '1', '添加广告: PTC陶瓷暖风机 ¥369.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('263', '1385901457', '1', '添加广告: 爱丽丝床品四件套 ¥299.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('264', '1385901485', '1', '添加广告: 紫色水纹毛巾被 ¥99.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('265', '1385901528', '1', '添加广告: 圆形珍珠相框 ¥28.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('266', '1385901566', '1', '编辑广告位置: 秀家-本月奖品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('267', '1385902046', '1', '添加广告位置: 秀家-热门分类', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('268', '1385902100', '1', '删除广告位置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('269', '1385902207', '1', '编辑商品分类: 书房', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('270', '1385902217', '1', '编辑商品分类: 床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('271', '1385902227', '1', '编辑商品分类: 餐桌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('272', '1385902570', '1', '添加文章: 秀家1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('273', '1385902590', '1', '添加文章: 秀家2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('274', '1385902601', '1', '添加文章: 秀家3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('275', '1385902611', '1', '添加文章: 秀家4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('276', '1385902622', '1', '添加文章: 秀家5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('277', '1385902631', '1', '添加文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('278', '1385908434', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('279', '1385909803', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('280', '1385912669', '1', '添加广告位置: 特惠套装页-顶部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('281', '1385912682', '1', '添加广告: 特惠套装页-顶部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('282', '1385912703', '1', '添加广告位置: 特惠套装页-顶部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('283', '1385912717', '1', '添加广告: 特惠套装页-顶部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('284', '1385912756', '1', '编辑广告位置: 特惠套装页-顶部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('285', '1385912759', '1', '编辑广告位置: 特惠套装页-顶部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('286', '1385972127', '1', '添加广告位置: 首页-顶部促销广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('287', '1385972141', '1', '添加广告: 首页-顶部促销广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('288', '1385972168', '1', '编辑广告位置: 首页-顶部促销广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('289', '1385973765', '1', '添加广告位置: 首页-导航菜单-分类ID1-推荐品牌', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('290', '1385973845', '1', '添加广告: 首页-导航菜单-分类ID1-推荐品牌1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('291', '1385973862', '1', '添加广告: 首页-导航菜单-分类ID1-推荐品牌2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('292', '1385973873', '1', '添加广告: 首页-导航菜单-分类ID1-推荐品牌3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('293', '1385973884', '1', '添加广告: 首页-导航菜单-分类ID1-推荐品牌4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('294', '1385973893', '1', '编辑广告: 首页-导航菜单-分类ID1-推荐品牌1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('295', '1385984993', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('296', '1385985008', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('297', '1385990354', '1', '添加广告位置: 商品页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('298', '1385990367', '1', '添加广告: 商品页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('299', '1385990419', '1', '编辑广告: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('300', '1385990429', '1', '编辑广告位置: 商品页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('301', '1385992782', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('302', '1385992859', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('303', '1385993039', '1', '编辑用户评论: 回复', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('304', '1385994692', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('305', '1385994842', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('306', '1385999070', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('307', '1385999545', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('308', '1385999988', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('309', '1386057078', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('310', '1386058299', '1', '还原数据库备份: 备份时间2013-12-03 08:09:29', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('311', '1386059295', '1', '添加超值礼包: 客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('312', '1386062940', '1', '添加超值礼包: 餐厅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('313', '1386062970', '1', '编辑超值礼包: 餐厅-6件套（1桌+4椅+1吊灯）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('314', '1386063396', '1', '添加超值礼包: 卧房-3套装（1.5米床+1床头柜+1吸顶灯）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('315', '1386063739', '1', '添加超值礼包: 客厅-3套装（1转角沙发+1吸顶灯+1茶几）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('316', '1386066235', '1', '添加超值礼包: 客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('317', '1386074915', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('318', '1386078563', '1', '编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('319', '1386081282', '1', '编辑广告位置: 首页-分类ID1-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('320', '1386081294', '1', '添加广告位置: 首页-分类ID2-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('321', '1386081300', '1', '编辑广告位置: 首页-分类ID1-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('322', '1386081308', '1', '添加广告位置: 首页-分类ID2-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('323', '1386081314', '1', '编辑广告位置: 首页-分类ID1-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('324', '1386081322', '1', '添加广告位置: 首页-分类ID2-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('325', '1386081329', '1', '编辑广告位置: 首页-分类ID1-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('326', '1386081341', '1', '添加广告位置: 首页-分类ID2-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('327', '1386081456', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('328', '1386081459', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('329', '1386081467', '1', '编辑广告位置: 721', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('330', '1386081470', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('331', '1386081482', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('332', '1386081485', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('333', '1386081493', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('334', '1386081496', '1', '编辑广告位置: 240', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('335', '1386081502', '1', '编辑广告位置: 首页-分类ID2-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('336', '1386081510', '1', '添加广告位置: 首页-分类ID3-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('337', '1386081516', '1', '编辑广告位置: 首页-分类ID2-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('338', '1386081524', '1', '添加广告位置: 首页-分类ID3-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('339', '1386081530', '1', '编辑广告位置: 首页-分类ID2-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('340', '1386081538', '1', '添加广告位置: 首页-分类ID3-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('341', '1386081546', '1', '编辑广告位置: 首页-分类ID2-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('342', '1386081556', '1', '添加广告位置: 首页-分类ID3-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('343', '1386081569', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('344', '1386081572', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('345', '1386081578', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('346', '1386081579', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('347', '1386081580', '1', '编辑广告位置: 330', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('348', '1386081584', '1', '编辑广告位置: 240', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('349', '1386081587', '1', '编辑广告位置: 240', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('350', '1386081595', '1', '编辑广告位置: 721', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('351', '1386081596', '1', '编辑广告位置: 721', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('352', '1386081599', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('353', '1386081601', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('354', '1386081602', '1', '编辑广告位置: 202', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('355', '1386081712', '1', '编辑广告位置: 首页-分类ID2-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('356', '1386081752', '1', '添加广告: 首页-分类ID2-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('357', '1386081757', '1', '编辑广告位置: 首页-分类ID2-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('358', '1386081778', '1', '添加广告: 首页-分类ID2-中间广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('359', '1386081791', '1', '添加广告: 首页-分类ID2-中间广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('360', '1386081812', '1', '添加广告: 首页-分类ID2-中间广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('361', '1386081820', '1', '编辑广告位置: 首页-分类ID2-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('362', '1386081835', '1', '添加广告: 首页-分类ID2-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('363', '1386081945', '1', '编辑广告位置: 首页-分类ID2-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('364', '1386081958', '1', '添加广告: 首页-分类ID2-底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('365', '1386081970', '1', '添加广告: 首页-分类ID2-底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('366', '1386081981', '1', '添加广告: 首页-分类ID2-底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('367', '1386081994', '1', '添加广告: 首页-分类ID2-底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('368', '1386082009', '1', '添加广告: 首页-分类ID2-底部广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('369', '1386082095', '1', '编辑广告位置: 首页-分类ID3-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('370', '1386082116', '1', '添加广告: 首页-分类ID3-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('371', '1386082124', '1', '编辑广告位置: 首页-分类ID3-中间广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('372', '1386082151', '1', '添加广告: 首页-分类ID3-中间广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('373', '1386082169', '1', '添加广告: 首页-分类ID3-中间广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('374', '1386082196', '1', '添加广告: 首页-分类ID3-中间广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('375', '1386082202', '1', '编辑广告位置: 首页-分类ID3-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('376', '1386082215', '1', '添加广告: 首页-分类ID3-右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('377', '1386082237', '1', '编辑广告位置: 首页-分类ID3-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('378', '1386082271', '1', '编辑广告位置: 首页-分类ID3-底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('379', '1386082288', '1', '添加广告: 首页-分类ID3-底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('380', '1386082302', '1', '添加广告: 首页-分类ID3-底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('381', '1386082324', '1', '添加广告: 首页-分类ID3-底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('382', '1386082337', '1', '添加广告: 首页-分类ID3-底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('383', '1386082351', '1', '添加广告: 首页-分类ID3-底部广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('384', '1386083114', '1', '添加商品: 时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('385', '1386083156', '1', '添加商品: 奢华霸气 进口全真皮沙发套装（1+2+3）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('386', '1386083216', '1', '添加商品: 清新雅致 可拆装沙发套装（1+2+3）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('387', '1386083286', '1', '添加商品: 温柔海风 唯美布艺左转角沙发（1+3+左贵妃）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('388', '1386083439', '1', '添加商品: 橡胶木实木餐桌椅套装（七件套）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('389', '1386083510', '1', '添加商品: 餐厅6件套（1餐桌+4餐椅+1餐边柜）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('390', '1386083574', '1', '添加商品: 餐厅5件套装（1.5餐台+4无扶手餐椅）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('391', '1386083649', '1', '添加商品: 美式田园	实木餐厅套装（1桌+4椅）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('392', '1386084128', '1', '编辑广告位置: 分类频道页-分类ID4-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('393', '1386084139', '1', '添加广告位置: 分类频道页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('394', '1386084220', '1', '编辑广告位置: 分类频道页-分类ID4-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('395', '1386084227', '1', '添加广告位置: 分类频道页-分类ID5-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('396', '1386084286', '1', '编辑广告位置: 200', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('397', '1386084289', '1', '编辑广告位置: 302', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('398', '1386084298', '1', '编辑广告位置: 220', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('399', '1386084301', '1', '编辑广告位置: 180', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('400', '1386084304', '1', '编辑广告位置: 分类频道页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('401', '1386084312', '1', '添加广告位置: 分类频道页-分类ID6-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('402', '1386084326', '1', '编辑广告位置: 分类频道页-分类ID5-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('403', '1386084332', '1', '添加广告位置: 分类频道页-分类ID6-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('404', '1386084338', '1', '编辑广告位置: 200', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('405', '1386084340', '1', '编辑广告位置: 200', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('406', '1386084343', '1', '编辑广告位置: 302', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('407', '1386084344', '1', '编辑广告位置: 302', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('408', '1386084346', '1', '编辑广告位置: 220', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('409', '1386084347', '1', '编辑广告位置: 220', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('410', '1386084349', '1', '编辑广告位置: 302', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('411', '1386084351', '1', '编辑广告位置: 180', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('412', '1386084354', '1', '编辑广告位置: 180', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('413', '1386084572', '1', '编辑广告位置: 分类频道页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('414', '1386084593', '1', '添加广告: 分类频道页-分类ID5-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('415', '1386084611', '1', '添加广告: 分类频道页-分类ID5-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('416', '1386084739', '1', '编辑广告位置: 分类频道页-分类ID5-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('417', '1386084754', '1', '添加广告: 分类频道页-分类ID5-楼层底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('418', '1386084765', '1', '添加广告: 分类频道页-分类ID5-楼层底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('419', '1386084776', '1', '添加广告: 分类频道页-分类ID5-楼层底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('420', '1386084793', '1', '添加广告: 分类频道页-分类ID5-楼层底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('421', '1386084866', '1', '编辑广告位置: 分类频道页-分类ID6-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('422', '1386084878', '1', '添加广告: 分类频道页-分类ID6-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('423', '1386084892', '1', '添加广告: 分类频道页-分类ID6-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('424', '1386084930', '1', '编辑广告位置: 分类频道页-分类ID6-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('425', '1386084959', '1', '添加广告: 分类频道页-分类ID6-楼层底部广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('426', '1386084970', '1', '添加广告: 分类频道页-分类ID6-楼层底部广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('427', '1386084981', '1', '添加广告: 分类频道页-分类ID6-楼层底部广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('428', '1386085002', '1', '添加广告: 分类频道页-分类ID6-楼层底部广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('429', '1386085197', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('430', '1386086585', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('431', '1386086646', '1', '编辑商品: 美式田园	实木餐厅套装（1桌+4椅）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('432', '1386086701', '1', '编辑商品: 美式田园	实木餐厅套装（1桌+4椅）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('433', '1386086714', '1', '编辑商品: 美式田园	实木餐厅套装（1桌+4椅）', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('434', '1386087156', '1', '添加超值礼包: 书房-家具3件套装-835', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('435', '1386087263', '1', '添加超值礼包: 书房-家具3套装', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('436', '1386087336', '1', '编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('437', '1386087353', '1', '编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('438', '1386087376', '1', '编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('439', '1386087432', '1', '编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('440', '1386087443', '1', '编辑商品: 欧式田园	粉红玫瑰立体雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('441', '1386087454', '1', '编辑商品: 法式风格	1.8米皮拉扣床 PU发泡雕花床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('442', '1386145369', '1', '编辑广告位置: 分类频道页-分类ID1-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('443', '1386145430', '1', '添加广告位置: 顶级分类页-分类ID1-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('444', '1386145476', '1', '添加广告: 到店体验0元送豪礼！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('445', '1386145499', '1', '添加广告: 免费设计，家电轻松得！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('446', '1386145520', '1', '添加广告: 荧屏家具大咖秀', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('447', '1386145536', '1', '添加广告: 吃货的三大境界', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('448', '1386145557', '1', '添加广告: 打造儿童家居天地', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('449', '1386146325', '1', '添加广告位置: 顶级分类页-分类ID1-品牌广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('450', '1386146346', '1', '添加广告: 顶级分类页-分类ID1-品牌广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('451', '1386146357', '1', '添加广告: 顶级分类页-分类ID1-品牌广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('452', '1386146368', '1', '添加广告: 顶级分类页-分类ID1-品牌广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('453', '1386146381', '1', '添加广告: 顶级分类页-分类ID1-品牌广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('454', '1386146401', '1', '添加广告: 顶级分类页-分类ID1-品牌广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('455', '1386146639', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('456', '1386146757', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('457', '1386146767', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('458', '1386146779', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('459', '1386146790', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('460', '1386146801', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('461', '1386146811', '1', '编辑广告: 顶级分类页-分类ID1-品牌广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('462', '1386147795', '1', '添加广告位置: 顶级分类页-分类ID1-新品广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('463', '1386147814', '1', '添加广告: 顶级分类页-分类ID1-新品广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('464', '1386147829', '1', '添加广告: 顶级分类页-分类ID1-新品广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('465', '1386147840', '1', '添加广告: 顶级分类页-分类ID1-新品广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('466', '1386147851', '1', '添加广告: 顶级分类页-分类ID1-新品广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('467', '1386147864', '1', '添加广告: 顶级分类页-分类ID1-新品广告5', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('468', '1386148449', '1', '添加广告位置: 顶级分类页-分类ID1-热卖排行', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('469', '1386148468', '1', '添加广告: 顶级分类页-分类ID1-热卖排行1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('470', '1386148480', '1', '添加广告: 顶级分类页-分类ID1-热卖排行2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('471', '1386148491', '1', '添加广告: 顶级分类页-分类ID1-热卖排行3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('472', '1386149378', '1', '添加广告位置: 顶级分类页-分类ID4-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('473', '1386149390', '1', '添加广告: 顶级分类页-分类ID4-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('474', '1386149401', '1', '添加广告: 顶级分类页-分类ID4-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('475', '1386149415', '1', '添加广告: 顶级分类页-分类ID4-楼层左侧广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('476', '1386149446', '1', '添加广告位置: 顶级分类页-分类ID4-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('477', '1386149462', '1', '添加广告: 顶级分类页-分类ID4-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('478', '1386153245', '1', '编辑广告位置: 顶级分类页-分类ID4-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('479', '1386153255', '1', '添加广告位置: 顶级分类页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('480', '1386153261', '1', '编辑广告位置: 顶级分类页-分类ID4-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('481', '1386153264', '1', '编辑广告位置: 顶级分类页-分类ID4-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('482', '1386153270', '1', '添加广告位置: 顶级分类页-分类ID5-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('483', '1386153275', '1', '编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('484', '1386153288', '1', '添加广告位置: 顶级分类页-分类ID6-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('485', '1386153298', '1', '编辑广告位置: 顶级分类页-分类ID5-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('486', '1386153306', '1', '添加广告位置: 顶级分类页-分类ID6-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('487', '1386153343', '1', '编辑广告位置: 700', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('488', '1386153345', '1', '编辑广告位置: 700', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('489', '1386153347', '1', '编辑广告位置: 700', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('490', '1386153349', '1', '编辑广告位置: 279', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('491', '1386153351', '1', '编辑广告位置: 279', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('492', '1386153352', '1', '编辑广告位置: 279', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('493', '1386153435', '1', '编辑广告位置: 342', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('494', '1386153436', '1', '编辑广告位置: 342', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('495', '1386153438', '1', '编辑广告位置: 342', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('496', '1386153440', '1', '编辑广告位置: 342', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('497', '1386153442', '1', '编辑广告位置: 342', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('498', '1386153455', '1', '编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('499', '1386153489', '1', '编辑广告位置: 顶级分类页-分类ID5-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('500', '1386153503', '1', '添加广告: 顶级分类页-分类ID5-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('501', '1386153520', '1', '添加广告: 顶级分类页-分类ID5-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('502', '1386153532', '1', '添加广告: 顶级分类页-分类ID5-楼层左侧广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('503', '1386153541', '1', '编辑广告位置: 顶级分类页-分类ID5-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('504', '1386153556', '1', '添加广告: 顶级分类页-分类ID5-楼层右侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('505', '1386153715', '1', '编辑广告位置: 顶级分类页-分类ID6-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('506', '1386153727', '1', '添加广告: 顶级分类页-分类ID6-楼层左侧广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('507', '1386153738', '1', '添加广告: 顶级分类页-分类ID6-楼层左侧广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('508', '1386153752', '1', '添加广告: 顶级分类页-分类ID6-楼层左侧广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('509', '1386153758', '1', '编辑广告位置: 顶级分类页-分类ID6-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('510', '1386153777', '1', '添加广告: 顶级分类页-分类ID6-楼层右侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('511', '1386153954', '1', '添加广告位置: 顶级分类页-分类ID1-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('512', '1386153977', '1', '添加广告位置: 顶级分类页-分类ID1-最新促销活动-文字', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('513', '1386153985', '1', '编辑广告位置: 顶级分类页-分类ID1-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('514', '1386154016', '1', '添加广告: 顶级分类页-分类ID1-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('515', '1386154077', '1', '添加广告: 打造儿童天地', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('516', '1386154109', '1', '添加广告: 现货清仓/半卖半送', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('517', '1386154129', '1', '添加广告: 终极好家具，进口全实木——低至6.8折，我和我的小伙伴们都惊呆了-活动-铭东商城家具网', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('518', '1386154153', '1', '添加广告: 铭东商城/SKG6周年狂欢购', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('519', '1386154174', '1', '添加广告: SKG引爆炸弹价，全场包邮', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('520', '1386154888', '1', '添加广告位置: 顶级分类页-导航促销广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('521', '1386155047', '1', '编辑广告位置: 首页-导航菜单-促销活动', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('522', '1386155099', '1', '删除广告: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('523', '1386155117', '1', '删除广告: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('524', '1386155146', '1', '删除广告位置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('525', '1386155192', '1', '添加广告: 新品家具，极速抢“鲜”', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('526', '1386155219', '1', '添加广告: 特价商品，抄底特卖专场!', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('527', '1386155240', '1', '添加广告: 热卖家具，火爆疯狂抢购!', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('528', '1386155473', '1', '编辑广告: 首页-导航菜单-分类ID1-推荐品牌1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('529', '1386155499', '1', '编辑广告: 首页-导航菜单-分类ID1-推荐品牌2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('530', '1386155515', '1', '编辑广告: 首页-导航菜单-分类ID1-推荐品牌3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('531', '1386155530', '1', '编辑广告: 首页-导航菜单-分类ID1-推荐品牌4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('532', '1386157118', '1', '编辑广告位置: 分类频道页-分类ID2-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('533', '1386157121', '1', '编辑广告位置: 分类频道页-分类ID2-最新促销活动-图片', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('534', '1386157123', '1', '编辑广告位置: 分类频道页-分类ID2-最新促销活动-文字', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('535', '1386157438', '1', '添加商品: 分段式吸顶灯 水晶玻璃灯 客厅吸顶灯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('536', '1386157479', '1', '添加商品: 方形木艺灯罩吸顶灯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('537', '1386157520', '1', '添加商品: LED护眼吸顶灯 高抗冲亚克力 客厅吸顶灯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('538', '1386157585', '1', '添加商品: 分段式吸顶灯 磨砂白玉玻璃 客厅餐厅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('539', '1386157690', '1', '添加商品: 不锈钢双水槽 洗菜盆水槽套装76*40CM', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('540', '1386157724', '1', '添加商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('541', '1386157760', '1', '添加商品: 全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('542', '1386157797', '1', '添加商品: 厨房不锈钢双水槽套装76*40CM', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('543', '1386157899', '1', '添加商品: 橡木爵士白雕刻卫浴柜 方形双人浴室柜 欧式落地浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('544', '1386157931', '1', '添加商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('545', '1386157973', '1', '添加商品: 	虹吸式坐厕 连体双档座便器 节水马桶', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('546', '1386158012', '1', '添加商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('547', '1386158167', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('548', '1386158183', '1', '编辑商品: 全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('549', '1386158258', '1', '编辑广告位置: 分类频道页-分类ID11-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('550', '1386158260', '1', '编辑广告位置: 分类频道页-分类ID11-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('551', '1386158266', '1', '编辑广告位置: 分类频道页-分类ID12-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('552', '1386158269', '1', '编辑广告位置: 分类频道页-分类ID12-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('553', '1386158271', '1', '编辑广告位置: 分类频道页-分类ID13-楼层左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('554', '1386158273', '1', '编辑广告位置: 分类频道页-分类ID13-楼层底部广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('555', '1386170003', '1', '安装配送方式: 申通快递', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('556', '1386170009', '1', '添加配送区域: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('557', '1386239998', '1', '还原数据库备份: 备份时间2013-09-08 04:45:52', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('558', '1386240009', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('559', '1386240158', '1', '编辑广告位置: 触屏首页-分类ID2-图片广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('560', '1386240161', '1', '编辑广告位置: 触屏首页-分类ID3-图片广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('561', '1386240177', '1', '编辑商品分类: 家具', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('562', '1386240185', '1', '编辑商品分类: 建材', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('563', '1386240333', '1', '编辑商品分类: 家居家饰', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('564', '1386240370', '1', '编辑商品分类: 餐椅', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('565', '1386240384', '1', '编辑商品分类: 五金电器', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('566', '1386240391', '1', '编辑商品分类: 灯饰照明', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('567', '1386240402', '1', '编辑商品分类: 卫浴用品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('568', '1386240408', '1', '编辑商品分类: 五金电器', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('569', '1386240413', '1', '编辑商品分类: 厨房用品', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('570', '1386240427', '1', '编辑商品分类: 厨房餐饮', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('571', '1386240434', '1', '编辑商品分类: 居家日用', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('572', '1386240440', '1', '编辑商品分类: 生活电器', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('573', '1386240518', '1', '编辑广告: 建材城', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('574', '1386240544', '1', '编辑广告: 家饰城', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('575', '1386316258', '1', '还原数据库备份: 备份时间2013-12-05 10:49:46', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('576', '1386318747', '1', '添加订单: 2013120661257', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('577', '1386319557', '1', '添加供货商管理: 供货商名称', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('578', '1386319626', '1', '删除供货商管理: 供货商名称', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('579', '1386319697', '1', '添加供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('580', '1386320364', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('581', '1386320379', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('582', '1386320388', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('583', '1386320450', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('584', '1386321321', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('585', '1386321404', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('586', '1386322148', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('587', '1386322341', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('588', '1386322504', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('589', '1386322526', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('590', '1386322535', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('591', '1386322573', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('592', '1386322579', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('593', '1386322734', '1', '添加供货商管理: 北京丰台区体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('594', '1386322747', '1', '编辑供货商管理: 北京丰台区体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('595', '1386323048', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('596', '1386323054', '1', '编辑供货商管理: 北京十里河体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('597', '1386323073', '1', '编辑供货商管理: 北京丰台区体验馆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('598', '1386325342', '1', '编辑地区: 安庆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('599', '1386328906', '1', '编辑: 甘肃', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('600', '1386328918', '1', '编辑: 甘肃1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('601', '1386329421', '1', '编辑: 安徽', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('602', '1386329462', '1', '编辑: 安徽', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('603', '1386329756', '1', '编辑: 安徽', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('604', '1386329768', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('605', '1386329782', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('606', '1386329792', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('607', '1386330035', '1', '编辑: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('608', '1386330047', '1', '编辑: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('609', '1386330186', '1', '编辑: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('610', '1386330199', '1', '编辑: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('611', '1386330263', '1', '编辑: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('612', '1386330282', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('613', '1386330294', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('614', '1386330323', '1', '编辑: 广州', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('615', '1386330344', '1', '编辑: 深圳', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('616', '1386330360', '1', '编辑: 珠海', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('617', '1386330373', '1', '编辑: 中山', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('618', '1386330389', '1', '编辑: 东莞', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('619', '1386330398', '1', '编辑: 惠州', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('620', '1386330407', '1', '编辑: 茂名', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('621', '1386330415', '1', '编辑: 汕头', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('622', '1386330423', '1', '编辑: 阳江', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('623', '1386330431', '1', '编辑: 肇庆', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('624', '1386330459', '1', '编辑: 佛山', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('625', '1386330468', '1', '编辑: 江门', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('626', '1386330481', '1', '编辑: 梅州', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('627', '1386330487', '1', '编辑: 汕尾', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('628', '1386330494', '1', '编辑: 云浮', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('629', '1386330506', '1', '编辑: 潮州', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('630', '1386330513', '1', '编辑: 河源', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('631', '1386330519', '1', '编辑: 揭阳', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('632', '1386330525', '1', '编辑: 清远', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('633', '1386330533', '1', '编辑: 韶关', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('634', '1386330540', '1', '编辑: 湛江', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('635', '1386410712', '1', '添加广告位置: 体验馆-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('636', '1386410723', '1', '编辑广告位置: 体验馆-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('637', '1386410741', '1', '添加广告: 体验馆-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('638', '1386410766', '1', '编辑广告位置: 体验馆-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('639', '1386489103', '1', '编辑权限管理: admin', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('640', '1386489592', '1', '添加广告位置: 体验馆-ID2-flash广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('641', '1386489609', '1', '添加广告: 体验馆-ID2-flash广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('642', '1386489645', '1', '添加广告: 体验馆-ID2-flash广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('643', '1386489655', '1', '添加广告: 体验馆-ID2-flash广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('644', '1386489673', '1', '添加广告: 体验馆-ID2-flash广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('645', '1386491165', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('646', '1386491187', '1', '编辑商品: 	虹吸式坐厕 连体双档座便器 节水马桶', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('647', '1386491195', '1', '编辑商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('648', '1386492436', '1', '编辑商品: 双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('649', '1386492443', '1', '编辑商品: 	虹吸式坐厕 连体双档座便器 节水马桶', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('650', '1386492477', '1', '编辑商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('651', '1386492488', '1', '编辑商品: 方形木艺灯罩吸顶灯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('652', '1386492528', '1', '编辑商品: SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('653', '1386492544', '1', '编辑商品: 方形木艺灯罩吸顶灯', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('654', '1386733294', '1', '添加广告位置: 搜索页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('655', '1386733341', '1', '添加广告: 搜索页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('656', '1386733388', '1', '添加广告位置: 搜索页-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('657', '1386733404', '1', '添加广告: 搜索页-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('658', '1386733492', '1', '添加广告位置: 搜索页-flash广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('659', '1386733512', '1', '添加广告: 搜索页-flash广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('660', '1386733523', '1', '添加广告: 搜索页-flash广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('661', '1386733534', '1', '添加广告: 搜索页-flash广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('662', '1386733546', '1', '添加广告: 搜索页-flash广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('663', '1386733573', '1', '编辑广告位置: 搜索页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('664', '1386733580', '1', '编辑广告位置: 搜索页-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('665', '1386733587', '1', '编辑广告位置: 搜索页-通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('666', '1386733592', '1', '编辑广告位置: 搜索页-flash广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('667', '1386748497', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('668', '1386748511', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('669', '1386751607', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('670', '1386751858', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('671', '1387106353', '1', '添加广告位置: 专题页-活动广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('672', '1387106370', '1', '添加广告: 专题页-活动广告1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('673', '1387106382', '1', '添加广告: 专题页-活动广告2', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('674', '1387106395', '1', '添加广告: 专题页-活动广告3', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('675', '1387106409', '1', '添加广告: 专题页-活动广告4', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('676', '1387106441', '1', '编辑广告位置: 专题页-活动广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('677', '1387107770', '1', '编辑广告: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('678', '1387107806', '1', '编辑广告: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('679', '1387107833', '1', '编辑广告: 首页-顶部通栏广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('680', '1387109722', '1', '添加属性: 配送区域', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('681', '1387196672', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('682', '1387198128', '1', '编辑配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('683', '1387198155', '1', '编辑配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('684', '1387198175', '1', '添加配送区域: 广东', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('685', '1387198186', '1', '编辑配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('686', '1387198194', '1', '删除配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('687', '1387198200', '1', '添加配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('688', '1387198228', '1', '添加配送区域: 广西', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('689', '1387198307', '1', '编辑配送区域: 广东', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('690', '1387198317', '1', '编辑配送区域: 广西', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('691', '1387198575', '1', '编辑配送区域: 广东', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('692', '1387198612', '1', '编辑配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('693', '1387200465', '1', '删除配送区域: 中国', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('694', '1387200475', '1', '添加配送区域: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('695', '1387369060', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('696', '1387369589', '1', '编辑: 北京', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('697', '1387369651', '1', '编辑: 广州', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('698', '1387369685', '1', '编辑: 深圳', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('699', '1387380803', '1', '编辑广告位置: 980', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('700', '1387380806', '1', '编辑广告位置: 287', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('701', '1387380814', '1', '编辑广告: 秀家-左侧广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('702', '1387775292', '1', '添加红包类型: 注册送红包', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('703', '1388063098', '1', '编辑商品: 美式古典	双面描金雕花排骨架床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('704', '1388141296', '1', '添加积分可兑换的商品: 1', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('705', '1388141303', '1', '添加积分可兑换的商品: 9', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('706', '1388143309', '1', '添加积分可兑换的商品: 15', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('707', '1388152348', '1', '编辑订单: 2013122733017,订单总金额由 1011.00 变为 1003.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('708', '1388152368', '1', '编辑订单: 2013122733017,订单总金额由 1003.00 变为 1011.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('709', '1388152402', '1', '编辑订单: 2013122733017,订单总金额由 1011.00 变为 911.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('710', '1388152444', '1', '编辑订单: 2013122733017,订单总金额由 911.00 变为 811.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('711', '1388152579', '1', '编辑订单: 2013122722923,订单总金额由 3585.00 变为 3485.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('712', '1388155320', '1', '编辑订单: 2013122793991,订单总金额由 4024.00 变为 3924.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('713', '1388156267', '1', '编辑订单: 2013122758756,订单总金额由 2815.00 变为 2715.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('714', '1388156592', '1', '编辑订单: 2013122749611,订单总金额由 1515.00 变为 1415.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('715', '1388157318', '1', '编辑订单: 2013122731476,订单总金额由 1001.00 变为 901.00', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('716', '1388329431', '1', '添加会员等级: VIP', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('717', '1388329447', '1', '添加会员等级: VVIP', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('718', '1388329523', '1', '编辑会员账号: test123', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('719', '1388330059', '1', '编辑团购商品: 美式古典	双面描金雕花排骨架床[1]', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('720', '1388331607', '1', '删除会员账号: test123', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('721', '1388331628', '1', '删除广告: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('722', '1388400900', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('723', '1388400929', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('724', '1388400972', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('725', '1388401020', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('726', '1388401041', '1', '编辑文章: 秀家6', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('727', '1388406606', '1', '删除文章: 强烈谴责无耻同行www.ecshop.name骗子，专门拿淘宝上低价的模板高价出售！', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('728', '1388416040', '1', '编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('729', '1388416235', '1', '编辑商品: 欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('730', '1388476746', '1', '删除操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('731', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('732', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('733', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('734', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('735', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('736', '1388476771', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('737', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('738', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('739', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('740', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('741', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('742', '1388477105', '1', '删除文章: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('743', '1388477388', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('744', '1388480210', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('745', '1388480302', '1', '编辑操作日志: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('746', '1388732054', '1', '编辑广告位置: 分类频道页-分类ID2-轮播广告', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('747', '1388896572', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('748', '1388896635', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('749', '1388896856', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('750', '1388896864', '1', '编辑商品: 纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('751', '1389057394', '1', '还原数据库备份: 备份时间2014-01-07 01:15:42', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('752', '1390395541', '1', '还原数据库备份: 备份时间2014-01-07 01:20:31', '103.24.1.155');
INSERT INTO `ecs_admin_log` VALUES ('753', '1394608143', '1', '编辑权限管理: admin', '0.0.0.0');
INSERT INTO `ecs_admin_log` VALUES ('754', '1395198609', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('755', '1395198679', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('756', '1395199028', '1', '编辑权限管理: admin', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('757', '1395210496', '1', '编辑商店设置: ', '127.0.0.1');
INSERT INTO `ecs_admin_log` VALUES ('758', '1395242343', '1', '编辑商店设置: ', '127.0.0.1');

-- ----------------------------
-- Table structure for `ecs_admin_message`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_admin_message`;
CREATE TABLE `ecs_admin_message` (
  `message_id` smallint(5) unsigned NOT NULL auto_increment,
  `sender_id` tinyint(3) unsigned NOT NULL default '0',
  `receiver_id` tinyint(3) unsigned NOT NULL default '0',
  `sent_time` int(11) unsigned NOT NULL default '0',
  `read_time` int(11) unsigned NOT NULL default '0',
  `readed` tinyint(1) unsigned NOT NULL default '0',
  `deleted` tinyint(1) unsigned NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `message` text NOT NULL,
  PRIMARY KEY  (`message_id`),
  KEY `sender_id` (`sender_id`,`receiver_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_admin_message
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_admin_user`;
CREATE TABLE `ecs_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL auto_increment,
  `user_name` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `ec_salt` varchar(10) default NULL,
  `add_time` int(11) NOT NULL default '0',
  `last_login` int(11) NOT NULL default '0',
  `last_ip` varchar(15) NOT NULL default '',
  `action_list` text NOT NULL,
  `nav_list` text NOT NULL,
  `lang_type` varchar(50) NOT NULL default '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `suppliers_id` smallint(5) unsigned default '0',
  `todolist` longtext,
  `role_id` smallint(5) default NULL,
  PRIMARY KEY  (`user_id`),
  KEY `user_name` (`user_name`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_admin_user
-- ----------------------------
INSERT INTO `ecs_admin_user` VALUES ('1', 'admin', '76374482@qq.com', '224616bf7b3b5d9a7ace6056bf06b352', '8564', '1385534806', '1395320248', '127.0.0.1', 'all', '商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list,会员列表|users.php?act=list,商店设置|shop_config.php?act=list_edit', '', '0', '0', '', '0');

-- ----------------------------
-- Table structure for `ecs_adsense`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_adsense`;
CREATE TABLE `ecs_adsense` (
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `clicks` int(10) unsigned NOT NULL default '0',
  KEY `from_ad` (`from_ad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_adsense
-- ----------------------------
INSERT INTO `ecs_adsense` VALUES ('3', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('1', '本站', '4');
INSERT INTO `ecs_adsense` VALUES ('203', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('149', '本站', '14');
INSERT INTO `ecs_adsense` VALUES ('86', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('73', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('12', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('29', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('14', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('96', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('26', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('4', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('5', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('10', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('192', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('66', '本站', '7');
INSERT INTO `ecs_adsense` VALUES ('121', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('22', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('2', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('82', '本站', '1');
INSERT INTO `ecs_adsense` VALUES ('7', '本站', '2');
INSERT INTO `ecs_adsense` VALUES ('9', '本站', '1');

-- ----------------------------
-- Table structure for `ecs_ad_custom`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_ad_custom`;
CREATE TABLE `ecs_ad_custom` (
  `ad_id` mediumint(8) unsigned NOT NULL auto_increment,
  `ad_type` tinyint(1) unsigned NOT NULL default '1',
  `ad_name` varchar(60) default NULL,
  `add_time` int(10) unsigned NOT NULL default '0',
  `content` mediumtext,
  `url` varchar(255) default NULL,
  `ad_status` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_ad_custom
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_ad_position`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_ad_position`;
CREATE TABLE `ecs_ad_position` (
  `position_id` tinyint(3) unsigned NOT NULL auto_increment,
  `position_name` varchar(60) NOT NULL default '',
  `ad_width` smallint(5) unsigned NOT NULL default '0',
  `ad_height` smallint(5) unsigned NOT NULL default '0',
  `position_desc` varchar(255) NOT NULL default '',
  `position_style` text NOT NULL,
  PRIMARY KEY  (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_ad_position
-- ----------------------------
INSERT INTO `ecs_ad_position` VALUES ('1', '首页-顶部通栏广告', '980', '50', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('2', '首页-网站公告顶部广告', '228', '102', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('3', '首页-团购广告', '210', '192', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('4', '首页-新品广告', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('5', '首页-精品广告', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('6', '首页-分类ID1-左侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('7', '首页-分类ID1-中间广告', '721', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('8', '首页-分类ID1-右侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('9', '首页-分类ID1-底部广告', '202', '240', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('10', '首页-热门品牌', '85', '55', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('12', '分类频道页-分类ID2-轮播广告', '770', '370', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('13', '分类频道页-分类ID11-楼层左侧广告', '200', '302', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('14', '分类频道页-分类ID11-楼层底部广告', '220', '180', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('15', '分类频道页-分类ID2-最新促销活动-图片', '292', '132', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('16', '分类频道页-分类ID2-最新促销活动-文字', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('17', '团购页-通栏广告', '980', '168', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('18', '文章页-通栏广告', '980', '60', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('19', '文章页-右侧广告', '300', '250', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('20', '秀家-左侧广告', '980', '287', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('21', '秀家-本月奖品', '156', '120', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('23', '特惠套装页-顶部广告1', '980', '125', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('24', '特惠套装页-顶部广告2', '980', '255', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('25', '首页-顶部促销广告', '145', '90', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('26', '首页-导航菜单-分类ID1-推荐品牌', '100', '55', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('27', '商品页-顶部通栏广告', '980', '60', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('28', '首页-分类ID2-左侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('29', '首页-分类ID2-中间广告', '721', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('30', '首页-分类ID2-右侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('31', '首页-分类ID2-底部广告', '202', '240', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('32', '首页-分类ID3-左侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('33', '首页-分类ID3-中间广告', '721', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('34', '首页-分类ID3-右侧广告', '202', '330', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('35', '首页-分类ID3-底部广告', '202', '240', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('36', '分类频道页-分类ID12-楼层左侧广告', '200', '302', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('37', '分类频道页-分类ID12-楼层底部广告', '220', '180', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('38', '分类频道页-分类ID13-楼层左侧广告', '200', '302', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('39', '分类频道页-分类ID13-楼层底部广告', '220', '180', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('40', '顶级分类页-分类ID1-轮播广告', '770', '410', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('41', '顶级分类页-分类ID1-品牌广告', '126', '100', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('42', '顶级分类页-分类ID1-新品广告', '280', '180', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('43', '顶级分类页-分类ID1-热卖排行', '690', '332', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('44', '顶级分类页-分类ID4-楼层左侧广告', '700', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('45', '顶级分类页-分类ID4-楼层右侧广告', '279', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('46', '顶级分类页-分类ID5-楼层左侧广告', '700', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('47', '顶级分类页-分类ID5-楼层右侧广告', '279', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('48', '顶级分类页-分类ID6-楼层左侧广告', '700', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('49', '顶级分类页-分类ID6-楼层右侧广告', '279', '342', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('50', '顶级分类页-分类ID1-最新促销活动-图片', '292', '132', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('51', '顶级分类页-分类ID1-最新促销活动-文字', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('52', '首页-导航菜单-促销活动', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('61', '触屏首页-轮播广告', '540', '163', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('62', '触屏首页-导航图标', '92', '92', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('63', '触屏首页-分类ID1-图片广告', '297', '246', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('64', '触屏首页-分类ID2-图片广告', '297', '246', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('65', '触屏首页-分类ID3-图片广告', '297', '246', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('66', '触屏首页-底部导航', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('67', '触屏首页-版权信息', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('68', '触屏首页-公司地址', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('69', '触屏首页-400电话', '1', '1', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('70', '体验馆-顶部通栏广告', '980', '60', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('71', '体验馆-ID2-flash广告', '687', '301', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('72', '搜索页-通栏广告', '980', '60', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('73', '搜索页-左侧广告', '210', '271', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('74', '搜索页-flash广告', '600', '348', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');
INSERT INTO `ecs_ad_position` VALUES ('75', '专题页-活动广告', '456', '206', '', '<table cellpadding=\"0\" cellspacing=\"0\">\r\n{foreach from=$ads item=ad}\r\n<tr><td>{$ad}</td></tr>\r\n{/foreach}\r\n</table>');

-- ----------------------------
-- Table structure for `ecs_affiliate_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_affiliate_log`;
CREATE TABLE `ecs_affiliate_log` (
  `log_id` mediumint(8) NOT NULL auto_increment,
  `order_id` mediumint(8) NOT NULL,
  `time` int(10) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_name` varchar(60) default NULL,
  `money` decimal(10,2) NOT NULL default '0.00',
  `point` int(10) NOT NULL default '0',
  `separate_type` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_affiliate_log
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_agency`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_agency`;
CREATE TABLE `ecs_agency` (
  `agency_id` smallint(5) unsigned NOT NULL auto_increment,
  `agency_name` varchar(255) NOT NULL,
  `agency_desc` text NOT NULL,
  PRIMARY KEY  (`agency_id`),
  KEY `agency_name` (`agency_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_agency
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_area_region`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_area_region`;
CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL default '0',
  `region_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_area_region
-- ----------------------------
INSERT INTO `ecs_area_region` VALUES ('3', '6');
INSERT INTO `ecs_area_region` VALUES ('4', '2');
INSERT INTO `ecs_area_region` VALUES ('5', '7');
INSERT INTO `ecs_area_region` VALUES ('6', '2');

-- ----------------------------
-- Table structure for `ecs_article`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_article`;
CREATE TABLE `ecs_article` (
  `article_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) NOT NULL default '0',
  `title` varchar(150) NOT NULL default '',
  `content` longtext NOT NULL,
  `author` varchar(30) NOT NULL default '',
  `author_email` varchar(60) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `article_type` tinyint(1) unsigned NOT NULL default '2',
  `is_open` tinyint(1) unsigned NOT NULL default '1',
  `add_time` int(10) unsigned NOT NULL default '0',
  `file_url` varchar(255) NOT NULL default '',
  `open_type` tinyint(1) unsigned NOT NULL default '0',
  `link` varchar(255) NOT NULL default '',
  `description` varchar(255) default NULL,
  `click` int(11) default '0',
  `order_id` int(10) default '0',
  PRIMARY KEY  (`article_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_article
-- ----------------------------
INSERT INTO `ecs_article` VALUES ('1', '2', '免责条款', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('2', '2', '隐私保护', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('3', '2', '咨询热点', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('4', '2', '联系我们', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('5', '2', '公司简介', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('6', '-1', '用户协议', '', '', '', '', '0', '1', '1385534806', '', '0', '', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('7', '4', '公司简介', '', '', '', '', '0', '1', '1385536786', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('8', '4', '体验馆', '', '', '', '', '0', '1', '1385536801', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('9', '4', '诚聘英才', '', '', '', '', '0', '1', '1385536815', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('10', '5', '注册新用户', '', '', '', '', '0', '1', '1385536865', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('11', '5', '订购家具流程', '', '', '', '', '0', '1', '1385536874', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('12', '5', '体验馆购买指导', '', '', '', '', '0', '1', '1385536882', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('13', '6', '收货指南', '', '', '', '', '0', '1', '1385536897', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('14', '6', '体验馆服务费', '', '', '', '', '0', '1', '1385536904', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('15', '6', '物流配送', '', '', '', '', '0', '1', '1385536912', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('16', '7', '45天无理由退换货', '', '', '', '', '0', '1', '1385536923', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('17', '7', '如何申请退款', '', '', '', '', '0', '1', '1385536930', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('18', '7', '维修补件说明', '', '', '', '', '0', '1', '1385536939', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('19', '8', '正品保证', '', '', '', '', '0', '1', '1385536952', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('20', '8', '注册协议', '', '', '', '', '0', '1', '1385536960', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('21', '8', '隐私保护', '', '', '', '', '0', '1', '1385536968', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('22', '9', '铭东商城第262家体验馆空降古都许', '', '', '', '', '0', '1', '1385560416', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('23', '9', '中原大地再迎新馆！铭东商城第265', '', '', '', '', '0', '1', '1385560443', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('24', '9', '第266家体验馆花落牡丹江！', '', '', '', '', '0', '1', '1385560453', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('25', '10', '【小苏的家】阳台改榻榻米，仅2.6w！五个月的装修长跑！', '', '', '', '', '0', '1', '1385619509', 'data/article/1385619509329401157.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('26', '10', '❤95㎡简约婚房❤拱形吊顶+欧式家具（基装+主材+家具清单', '', '', '', '', '0', '1', '1385619526', 'data/article/1385619526838976334.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('27', '10', '【主妇逆袭】简欧路上，7万123平装修中的零零碎碎（光荣', '', '', '', '', '0', '1', '1385619539', 'data/article/1385619539098465248.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('28', '10', '高端大气上档次的现代简约装修 美爆了！', '', '', '', '', '0', '1', '1385619554', 'data/article/1385619554034454835.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('29', '10', '单身女汉子独爱kitty猫儿，单身族居家必备神器！', '', '', '', '', '0', '1', '1385619573', 'data/article/1385619573913737966.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('30', '10', '19万精装广州135㎡普罗旺斯浪漫地中海三居', '', '', '', '', '0', '1', '1385619598', 'data/article/1385619598392949921.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('31', '10', '7W换回一个美丽婚房，阳台变身休闲区，红红火火构建魅力', '', '', '', '', '0', '1', '1385619618', 'data/article/1385619618912140726.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('32', '10', '<76㎡小二居多图实拍细节>小清新文艺范儿，十足的地中', '', '', '', '', '0', '1', '1385619637', 'data/article/1385619637806187071.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('33', '11', '75平现代简约风格 白+蓝色', '', '', '', '家居风格 搭配家居 布置技巧 家居效果图', '1', '1', '1385620453', 'data/article/1385817893665808062.jpg', '1', 'http://', '现在的年轻人面临着城市的喧嚣和污染，激烈的竞争压力，还有忙碌的工作和紧张的生活。因而更加向往清新自然、随意放松的居室环', '0', '0');
INSERT INTO `ecs_article` VALUES ('34', '11', '85后艺术温馨家 简单中的清新', '', '', '', '', '0', '1', '1385620467', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('35', '11', '35平超精致小窝 小空间大梦想', '', '', '', '', '0', '1', '1385620493', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('36', '11', '网友详谈二手房翻修', '', '', '', '', '0', '1', '1385620506', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('37', '11', '70平极致浪漫公寓 我的浪漫满', '', '', '', '', '0', '1', '1385620520', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('38', '11', '7万装60平小婚房 简约温馨气', '', '', '', '', '0', '1', '1385620533', '', '0', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('39', '11', '8万半包装的95平温暖简约3居', '', '', '', '', '0', '1', '1385620546', 'data/article/1385819386997700908.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('40', '11', '85后感谢设计师 89平浪漫清新', '', '', '', '', '0', '1', '1385620557', 'data/article/1385819392599038693.jpg', '1', 'http://', '', '0', '0');
INSERT INTO `ecs_article` VALUES ('54', '12', '秀家1', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_64805.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_29871.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_34433.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_97168.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231080640_71342.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388477242', 'data/article/1388477242625246410.jpg', '2', '', '', '6', '20');
INSERT INTO `ecs_article` VALUES ('55', '12', '秀家2', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084547_43261.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084547_27179.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388479564', 'data/article/1388479563414537972.jpg', '2', '', '', '0', '19');
INSERT INTO `ecs_article` VALUES ('56', '12', '秀家3', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084703_87774.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084703_31846.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388479639', 'data/article/1388479639916346969.jpg', '2', '', '', '3', '18');
INSERT INTO `ecs_article` VALUES ('57', '12', '秀家4', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084820_84168.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231084821_78919.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388479817', 'data/article/1388479817406928931.jpg', '2', '', '', '2', '17');
INSERT INTO `ecs_article` VALUES ('58', '12', '秀家5', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085106_84720.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085106_92688.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388479888', 'data/article/1388479888856574725.jpg', '2', '', '', '1', '16');
INSERT INTO `ecs_article` VALUES ('59', '12', '秀家6', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085409_64755.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085409_27295.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388480065', 'data/article/1388480065215572737.jpg', '2', '', '', '3', '15');
INSERT INTO `ecs_article` VALUES ('60', '12', '秀家7', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085619_42901.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20131231/20131231085619_93430.jpg\" alt=\"\" />', 'test', '', '', '0', '1', '1388480194', 'data/article/1388480194432497220.jpg', '2', '', '', '14', '10');
INSERT INTO `ecs_article` VALUES ('61', '12', '秀家20', '<img src=\"/includes/kindeditor/php/../../../images/upload/image/20140105/20140105044657_90436.jpg\" alt=\"\" /><img src=\"/includes/kindeditor/php/../../../images/upload/image/20140105/20140105044658_95536.jpg\" alt=\"\" /><br />', 'test', '', '', '0', '0', '1388897234', 'data/article/1388897234107758516.jpg', '2', '', '', '2', '3');

-- ----------------------------
-- Table structure for `ecs_article_cat`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_article_cat`;
CREATE TABLE `ecs_article_cat` (
  `cat_id` smallint(5) NOT NULL auto_increment,
  `cat_name` varchar(255) NOT NULL default '',
  `cat_type` tinyint(1) unsigned NOT NULL default '1',
  `keywords` varchar(255) NOT NULL default '',
  `cat_desc` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `show_in_nav` tinyint(1) unsigned NOT NULL default '0',
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`cat_id`),
  KEY `cat_type` (`cat_type`),
  KEY `sort_order` (`sort_order`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_article_cat
-- ----------------------------
INSERT INTO `ecs_article_cat` VALUES ('1', '系统分类', '2', '', '系统保留分类', '50', '0', '0');
INSERT INTO `ecs_article_cat` VALUES ('2', '网店信息', '3', '', '网店信息分类', '50', '0', '1');
INSERT INTO `ecs_article_cat` VALUES ('3', '网店帮助分类', '4', '', '网店帮助分类', '50', '0', '1');
INSERT INTO `ecs_article_cat` VALUES ('4', '关于铭东商城', '5', '', '', '50', '0', '3');
INSERT INTO `ecs_article_cat` VALUES ('5', '新手指南', '5', '', '', '50', '0', '3');
INSERT INTO `ecs_article_cat` VALUES ('6', '配送安装', '5', '', '', '50', '0', '3');
INSERT INTO `ecs_article_cat` VALUES ('7', '售后服务', '5', '', '', '50', '0', '3');
INSERT INTO `ecs_article_cat` VALUES ('8', '购物保障', '5', '', '', '50', '0', '3');
INSERT INTO `ecs_article_cat` VALUES ('9', '网站公告', '1', '', '', '50', '0', '0');
INSERT INTO `ecs_article_cat` VALUES ('10', '晒家达人', '1', '', '', '50', '0', '0');
INSERT INTO `ecs_article_cat` VALUES ('11', '家居资讯', '1', '', '', '50', '0', '0');
INSERT INTO `ecs_article_cat` VALUES ('12', '秀家', '1', '', '', '50', '0', '0');

-- ----------------------------
-- Table structure for `ecs_attribute`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_attribute`;
CREATE TABLE `ecs_attribute` (
  `attr_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `attr_name` varchar(60) NOT NULL default '',
  `attr_input_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_type` tinyint(1) unsigned NOT NULL default '1',
  `attr_values` text NOT NULL,
  `attr_index` tinyint(1) unsigned NOT NULL default '0',
  `sort_order` tinyint(3) unsigned NOT NULL default '0',
  `is_linked` tinyint(1) unsigned NOT NULL default '0',
  `attr_group` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`attr_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_attribute
-- ----------------------------
INSERT INTO `ecs_attribute` VALUES ('1', '1', '家装风格', '1', '0', '田园\r\n现代\r\n古典\r\n中式\r\n地中海', '0', '0', '0', '0');
INSERT INTO `ecs_attribute` VALUES ('2', '1', '材质', '1', '0', '实木\r\n桃花心木', '0', '0', '0', '0');
INSERT INTO `ecs_attribute` VALUES ('3', '1', '床类型', '1', '0', '实木床\r\n板式床', '0', '0', '0', '0');
INSERT INTO `ecs_attribute` VALUES ('4', '1', '类&emsp;型', '1', '1', '地中海1.5米床\r\n地中海1.2米床\r\n美式1.5米床\r\n地中海1.8米床', '0', '0', '0', '0');
INSERT INTO `ecs_attribute` VALUES ('5', '1', '内&emsp;径', '1', '1', '1.815*2.01米\r\n1.515*2.01米', '0', '1', '0', '0');
INSERT INTO `ecs_attribute` VALUES ('6', '1', '配送区域', '0', '1', '', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `ecs_auction_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_auction_log`;
CREATE TABLE `ecs_auction_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `act_id` mediumint(8) unsigned NOT NULL,
  `bid_user` mediumint(8) unsigned NOT NULL,
  `bid_price` decimal(10,2) unsigned NOT NULL,
  `bid_time` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`log_id`),
  KEY `act_id` (`act_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_auction_log
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_auto_manage`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_auto_manage`;
CREATE TABLE `ecs_auto_manage` (
  `item_id` mediumint(8) NOT NULL,
  `type` varchar(10) NOT NULL,
  `starttime` int(10) NOT NULL,
  `endtime` int(10) NOT NULL,
  PRIMARY KEY  (`item_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_auto_manage
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_back_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_back_goods`;
CREATE TABLE `ecs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `back_id` mediumint(8) unsigned default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `product_sn` varchar(60) default NULL,
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `send_number` smallint(5) unsigned default '0',
  `goods_attr` text,
  PRIMARY KEY  (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_back_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_back_order`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_back_order`;
CREATE TABLE `ecs_back_order` (
  `back_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `return_time` int(10) unsigned default '0',
  `agency_id` smallint(5) unsigned default '0',
  PRIMARY KEY  (`back_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_back_order
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_bonus_type`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_bonus_type`;
CREATE TABLE `ecs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL auto_increment,
  `type_name` varchar(60) NOT NULL default '',
  `type_money` decimal(10,2) NOT NULL default '0.00',
  `send_type` tinyint(3) unsigned NOT NULL default '0',
  `min_amount` decimal(10,2) unsigned NOT NULL default '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL default '0.00',
  `send_start_date` int(11) NOT NULL default '0',
  `send_end_date` int(11) NOT NULL default '0',
  `use_start_date` int(11) NOT NULL default '0',
  `use_end_date` int(11) NOT NULL default '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL default '0.00',
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_bonus_type
-- ----------------------------
INSERT INTO `ecs_bonus_type` VALUES ('1', '注册送红包', '100.00', '0', '0.00', '0.00', '1387728000', '1390406400', '1387641600', '1390406400', '0.00');

-- ----------------------------
-- Table structure for `ecs_booking_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_booking_goods`;
CREATE TABLE `ecs_booking_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `link_man` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_desc` varchar(255) NOT NULL default '',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `booking_time` int(10) unsigned NOT NULL default '0',
  `is_dispose` tinyint(1) unsigned NOT NULL default '0',
  `dispose_user` varchar(30) NOT NULL default '',
  `dispose_time` int(10) unsigned NOT NULL default '0',
  `dispose_note` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rec_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_booking_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_brand`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_brand`;
CREATE TABLE `ecs_brand` (
  `brand_id` smallint(5) unsigned NOT NULL auto_increment,
  `brand_name` varchar(60) NOT NULL default '',
  `brand_logo` varchar(80) NOT NULL default '',
  `brand_desc` text NOT NULL,
  `site_url` varchar(255) NOT NULL default '',
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`brand_id`),
  KEY `is_show` (`is_show`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_brand
-- ----------------------------
INSERT INTO `ecs_brand` VALUES ('1', '凯撒豪庭', '1385821836877586354.jpg', '迷醉在高贵的魅惑中，恢弘的气势包围着身心的愉悦。流年锦心，在似水的年华中感悟到一种浩大的艺术境界！\r\n生产基地：中国现代家具之父—鼎盛家具集团', 'http://', '50', '1');
INSERT INTO `ecs_brand` VALUES ('2', '韩菲尔', '1385821846656400819.gif', '田园生活的意境、现代生活的情调 在一杯咖啡、一杯香茗的时间里一 一展现 在韩菲尔的世界，每一个转身都是自然主义的本色演绎！\r\n生产基地：金华庭家具集团', 'http://', '50', '1');
INSERT INTO `ecs_brand` VALUES ('3', '蒂美悦', '1385821871691649220.gif', '关注时尚、风格独立，在注重家居现实感受的同时更善于在平凡事物上创造精致的品位。\r\n生产基地：香港圣维纳斯家具集团', 'http://', '50', '1');
INSERT INTO `ecs_brand` VALUES ('4', '卡富亚', '1385821882418420829.jpg', '乐观、开朗，在现代生活中寻找到最自我的一面，在随性的风格中坚守不一样的品质体验，让现代家具拥有鲜明的个性特点。\r\n生产基地：“SOHO时尚派”—耀邦家具集团', 'http://', '50', '1');

-- ----------------------------
-- Table structure for `ecs_card`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_card`;
CREATE TABLE `ecs_card` (
  `card_id` tinyint(3) unsigned NOT NULL auto_increment,
  `card_name` varchar(120) NOT NULL default '',
  `card_img` varchar(255) NOT NULL default '',
  `card_fee` decimal(6,2) unsigned NOT NULL default '0.00',
  `free_money` decimal(6,2) unsigned NOT NULL default '0.00',
  `card_desc` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`card_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_card
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_cart`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_cart`;
CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `session_id` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `market_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `rec_type` tinyint(1) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `is_shipping` tinyint(1) unsigned NOT NULL default '0',
  `can_handsel` tinyint(3) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_cart
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_category`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_category`;
CREATE TABLE `ecs_category` (
  `cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(90) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `cat_desc` varchar(255) NOT NULL default '',
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `sort_order` tinyint(1) unsigned NOT NULL default '50',
  `template_file` varchar(50) NOT NULL default '',
  `measure_unit` varchar(15) NOT NULL default '',
  `show_in_nav` tinyint(1) NOT NULL default '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  `grade` tinyint(4) NOT NULL default '0',
  `filter_attr` varchar(255) NOT NULL default '0',
  PRIMARY KEY  (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_category
-- ----------------------------
INSERT INTO `ecs_category` VALUES ('1', '家具', '', '', '0', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('2', '建材', '', '', '0', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('3', '家居家饰', '', '', '0', '50', '', '', '1', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('4', '卧室', '', '', '1', '50', '', '', '0', '', '1', '5', '1,2,3');
INSERT INTO `ecs_category` VALUES ('5', '客厅', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('6', '餐厅', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('7', '书房', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('8', '儿童房', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('9', '户外家具', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('10', '定制家具', '', '', '1', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('11', '灯饰照明', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('12', '厨房用品', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('13', '卫浴用品', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('14', '五金电器', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('15', '墙地面', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('16', '五金工具', '', '', '2', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('17', '床上用品', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('18', '居家日用', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('19', '布艺织物', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('20', '家居饰品', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('21', '厨房餐饮', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('22', '生活电器', '', '', '3', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('23', '床', '', '', '4', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('24', '床垫', '', '', '4', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('25', '床头柜', '', '', '4', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('26', '沙发', '', '', '5', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('27', '茶几/边桌', '', '', '5', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('28', '电视柜', '', '', '5', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('29', '餐桌', '', '', '6', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('30', '餐椅', '', '', '6', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('31', '餐边柜', '', '', '6', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('32', '书桌/工作台', '', '', '7', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('33', '书柜/书架', '', '', '7', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('34', '书椅/转椅', '', '', '7', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('35', '儿童床', '', '', '8', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('36', '儿童床头柜', '', '', '8', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('37', '儿童衣柜', '', '', '8', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('38', '吊篮/吊椅', '', '', '9', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('39', '休闲桌', '', '', '9', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('40', '休闲椅', '', '', '9', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('41', '定制橱柜', '', '', '10', '50', '', '', '0', '', '1', '0', '');
INSERT INTO `ecs_category` VALUES ('42', '定制书柜/书台', '', '', '10', '50', '', '', '0', '', '1', '0', '');

-- ----------------------------
-- Table structure for `ecs_cat_recommend`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_cat_recommend`;
CREATE TABLE `ecs_cat_recommend` (
  `cat_id` smallint(5) NOT NULL,
  `recommend_type` tinyint(1) NOT NULL,
  PRIMARY KEY  (`cat_id`,`recommend_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_cat_recommend
-- ----------------------------
INSERT INTO `ecs_cat_recommend` VALUES ('1', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('2', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('3', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('7', '2');
INSERT INTO `ecs_cat_recommend` VALUES ('11', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('12', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('13', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('18', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('21', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('22', '3');
INSERT INTO `ecs_cat_recommend` VALUES ('23', '1');
INSERT INTO `ecs_cat_recommend` VALUES ('23', '2');
INSERT INTO `ecs_cat_recommend` VALUES ('24', '1');
INSERT INTO `ecs_cat_recommend` VALUES ('25', '1');
INSERT INTO `ecs_cat_recommend` VALUES ('29', '2');
INSERT INTO `ecs_cat_recommend` VALUES ('30', '3');

-- ----------------------------
-- Table structure for `ecs_collect_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_collect_goods`;
CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `add_time` int(11) unsigned NOT NULL default '0',
  `is_attention` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_collect_goods
-- ----------------------------
INSERT INTO `ecs_collect_goods` VALUES ('1', '1', '1', '1385783358', '0');
INSERT INTO `ecs_collect_goods` VALUES ('2', '1', '5', '1387382646', '0');

-- ----------------------------
-- Table structure for `ecs_comment`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_comment`;
CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL auto_increment,
  `comment_type` tinyint(3) unsigned NOT NULL default '0',
  `id_value` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `user_name` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `status` tinyint(3) unsigned NOT NULL default '0',
  `parent_id` int(10) unsigned NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL default '0',
  `art_id` int(10) default '0',
  `order_id` int(10) default '0',
  PRIMARY KEY  (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_comment
-- ----------------------------
INSERT INTO `ecs_comment` VALUES ('1', '0', '1', '76374482@qq.com', '', '太精美了，跟想象中的样子差不多，等我收拾好了，也要来秀家！！！', '5', '1385992693', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('2', '0', '1', '76374482@qq.com', '', '床很漂亮，物有所值', '5', '1385992710', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('3', '0', '1', '76374482@qq.com', '', '床非常的漂亮，我女儿很喜欢，朋友们也都说好。我女儿房间的大衣柜、梳妆台还有大衣柜都在这里买的，个个都那么的美！非常适合年轻人装修。赞一个！', '4', '1385992733', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('4', '0', '1', '76374482@qq.com', '', '这个床好喜欢哦，粉红色的玫瑰雕花看着真喜庆', '3', '1385992754', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('5', '0', '1', '76374482@qq.com', '', '喜欢玫瑰花', '1', '1385992774', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('6', '0', '1', '76374482@qq.com', '', '这款床超不错的，家人都喜欢，下次还要订购这家店的家具，服务也特别好的。', '5', '1385992821', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('7', '0', '1', '76374482@qq.com', '', '这个床真漂亮啊！！！很喜欢！！简直是爽呆了！就是等的时间长了！！', '5', '1385992844', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('8', '0', '1', '76374482@qq.com', 'admin', '希望您继续关注铭东商城，祝您生活愉快！', '0', '1385993039', '127.0.0.1', '0', '7', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('9', '1', '46', 'admin@qq.com', '', '搭配绿色的地垫感觉还是不错的呢', '5', '1386056412', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('10', '1', '46', 'admin@qq.com', '', '好喜欢这个吊椅！', '5', '1386057060', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('11', '0', '10', '76374482@qq.com', '', '比我想象中的还要大气，铺上床单以后就更豪华了，非常满意！', '5', '1386086375', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('12', '0', '9', '76374482@qq.com', '', '超大气的一款床！很喜欢！送货也很给力！', '5', '1386086401', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('13', '0', '8', '76374482@qq.com', '', '床的质量很好，很有质感，喜欢', '5', '1386086425', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('14', '0', '7', '76374482@qq.com', '', '很好看，质量很好，服务也很好。', '5', '1386086455', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('15', '0', '14', '76374482@qq.com', '', '很好很不错， 在铭东商城买的这些家具都很好。。 ', '5', '1386086485', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('16', '0', '13', '76374482@qq.com', '', '这个床不错 简单来说就是高端大气上档次 ', '5', '1386086514', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('17', '0', '12', '76374482@qq.com', '', '呵呵，欧式还得油画来点缀(woshou)家具样式，质量度还不错的', '5', '1386086542', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('18', '0', '11', '76374482@qq.com', '', '楼主床好大气，房间搭配也好，特别是油画好有情调:-)', '3', '1386086573', '127.0.0.1', '1', '0', '0', '0', '0');
INSERT INTO `ecs_comment` VALUES ('27', '0', '4', '', 'test', '颜色不错，美观大气，喜欢', '5', '1388477242', '127.0.0.1', '1', '0', '1', '54', '20');
INSERT INTO `ecs_comment` VALUES ('26', '0', '3', '', 'test', '颜色不错，美观大气，喜欢', '5', '1388477242', '127.0.0.1', '1', '0', '1', '54', '20');
INSERT INTO `ecs_comment` VALUES ('25', '0', '1', '', 'test', '颜色不错，美观大气，喜欢', '5', '1388477242', '127.0.0.1', '1', '0', '1', '54', '20');
INSERT INTO `ecs_comment` VALUES ('28', '0', '5', '', 'test', '颜色不错，美观大气，喜欢', '5', '1388477242', '127.0.0.1', '1', '0', '1', '54', '20');
INSERT INTO `ecs_comment` VALUES ('29', '0', '25', '', 'test', '比较精致，特别是哪个后背板，散发香味', '5', '1388479564', '127.0.0.1', '1', '0', '1', '55', '19');
INSERT INTO `ecs_comment` VALUES ('30', '0', '26', '', 'test', '餐桌也不错，但是如果有稍微小一点的就更好了', '5', '1388479639', '127.0.0.1', '1', '0', '1', '56', '18');
INSERT INTO `ecs_comment` VALUES ('31', '0', '21', '', 'test', '很好看，质量很好，服务也很好', '5', '1388479817', '127.0.0.1', '1', '0', '1', '57', '17');
INSERT INTO `ecs_comment` VALUES ('32', '0', '21', '', 'test', '挺大气的，配搭很和谐！！', '5', '1388479888', '127.0.0.1', '1', '0', '1', '58', '16');
INSERT INTO `ecs_comment` VALUES ('33', '0', '26', '', 'test', '家具不错，才有这么好的整体效果', '5', '1388480065', '127.0.0.1', '1', '0', '1', '59', '15');
INSERT INTO `ecs_comment` VALUES ('34', '0', '2', '', 'test', '怎么说呢 超值的 皮质很舒服', '5', '1388480194', '127.0.0.1', '1', '0', '1', '60', '10');
INSERT INTO `ecs_comment` VALUES ('35', '1', '60', 'admin@qq.com', 'test', '很实用的书桌 大方 上档次 黄杨实木', '5', '1388480270', '127.0.0.1', '1', '0', '1', '0', '0');
INSERT INTO `ecs_comment` VALUES ('36', '1', '60', 'admin@qq.com', 'test', '书桌不错，很有复古气息', '5', '1388480284', '127.0.0.1', '1', '0', '1', '0', '0');
INSERT INTO `ecs_comment` VALUES ('37', '0', '1', '', 'test', '评价内容', '5', '1388897234', '127.0.0.1', '1', '0', '1', '61', '3');

-- ----------------------------
-- Table structure for `ecs_crons`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_crons`;
CREATE TABLE `ecs_crons` (
  `cron_id` tinyint(3) unsigned NOT NULL auto_increment,
  `cron_code` varchar(20) NOT NULL,
  `cron_name` varchar(120) NOT NULL,
  `cron_desc` text,
  `cron_order` tinyint(3) unsigned NOT NULL default '0',
  `cron_config` text NOT NULL,
  `thistime` int(10) NOT NULL default '0',
  `nextime` int(10) NOT NULL,
  `day` tinyint(2) NOT NULL,
  `week` varchar(1) NOT NULL,
  `hour` varchar(2) NOT NULL,
  `minute` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL default '1',
  `run_once` tinyint(1) NOT NULL default '0',
  `allow_ip` varchar(100) NOT NULL default '',
  `alow_files` varchar(255) NOT NULL,
  PRIMARY KEY  (`cron_id`),
  KEY `nextime` (`nextime`),
  KEY `enable` (`enable`),
  KEY `cron_code` (`cron_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_crons
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_delivery_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_delivery_goods`;
CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned default '0',
  `product_sn` varchar(60) default NULL,
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `extension_code` varchar(30) default NULL,
  `parent_id` mediumint(8) unsigned default '0',
  `send_number` smallint(5) unsigned default '0',
  `goods_attr` text,
  PRIMARY KEY  (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_delivery_goods
-- ----------------------------
INSERT INTO `ecs_delivery_goods` VALUES ('1', '1', '25', '0', '', '	虹吸式坐厕 连体双档座便器 节水马桶', '凯撒豪庭', 'ECS000025', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('2', '2', '1', '0', '', '美式古典	双面描金雕花排骨架床', '凯撒豪庭', 'ECS000000', '1', '', '0', '1', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n');
INSERT INTO `ecs_delivery_goods` VALUES ('3', '2', '1', '0', '', '美式古典	双面描金雕花排骨架床--[1]', '', 'ECS000000', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('4', '2', '2', '0', '', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]', '', 'ECS000002', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('5', '2', '3', '0', '', '欧式田园	粉红玫瑰立体雕花排骨架床--[1]', '', 'ECS000003', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('6', '2', '4', '0', '', '法式风格	1.8米皮拉扣床 PU发泡雕花床--[1]', '', 'ECS000004', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('7', '2', '5', '0', '', '地中海风格 美国进口白杨木双人床--[1]', '', 'ECS000005', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('8', '2', '6', '0', '', '现代风格	1.8米软床 头层牛皮床--[1]', '', 'ECS000006', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('9', '2', '2', '0', '', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '韩菲尔', 'ECS000002', '1', '', '0', '1', '类&emsp;型:地中海1.5米床 \n');
INSERT INTO `ecs_delivery_goods` VALUES ('10', '3', '21', '0', '', '全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', '蒂美悦', 'ECS000021', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('11', '4', '26', '0', '', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '凯撒豪庭', 'ECS000026', '1', '', '0', '2', '');
INSERT INTO `ecs_delivery_goods` VALUES ('12', '5', '21', '0', '', '全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', '蒂美悦', 'ECS000021', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('13', '6', '26', '0', '', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '凯撒豪庭', 'ECS000026', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('14', '7', '2', '0', '', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '韩菲尔', 'ECS000002', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('15', '8', '1', '0', '', '美式古典	双面描金雕花排骨架床--[1]', '', 'ECS000000', '1', 'package_buy', '9', '2', '');
INSERT INTO `ecs_delivery_goods` VALUES ('16', '8', '2', '0', '', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]', '', 'ECS000002', '1', 'package_buy', '9', '2', '');
INSERT INTO `ecs_delivery_goods` VALUES ('17', '8', '1', '0', '', '美式古典	双面描金雕花排骨架床--[1]', '', 'ECS000000', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('18', '8', '2', '0', '', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床--[1]', '', 'ECS000002', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('19', '8', '3', '0', '', '欧式田园	粉红玫瑰立体雕花排骨架床--[1]', '', 'ECS000003', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('20', '8', '4', '0', '', '法式风格	1.8米皮拉扣床 PU发泡雕花床--[1]', '', 'ECS000004', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('21', '8', '5', '0', '', '地中海风格 美国进口白杨木双人床--[1]', '', 'ECS000005', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('22', '8', '6', '0', '', '现代风格	1.8米软床 头层牛皮床--[1]', '', 'ECS000006', '1', 'package_buy', '5', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('23', '8', '19', '0', '', '不锈钢双水槽 洗菜盆水槽套装76*40CM', '韩菲尔', 'ECS000019', '1', '', '0', '2', '');
INSERT INTO `ecs_delivery_goods` VALUES ('24', '8', '3', '0', '', '欧式田园	粉红玫瑰立体雕花排骨架床', '蒂美悦', 'ECS000003', '1', '', '0', '1', '');
INSERT INTO `ecs_delivery_goods` VALUES ('25', '8', '5', '0', '', '地中海风格 美国进口白杨木双人床', '凯撒豪庭', 'ECS000005', '1', '', '0', '1', '');

-- ----------------------------
-- Table structure for `ecs_delivery_order`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_delivery_order`;
CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `agency_id` smallint(5) unsigned default '0',
  PRIMARY KEY  (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_delivery_order
-- ----------------------------
INSERT INTO `ecs_delivery_order` VALUES ('1', '20131230095166079', '2013122731476', '19', '11111111', '1388157011', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388397082', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('2', '20131231054466157', '2013123135238', '20', '1111111', '1388468638', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388468687', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('3', '20131231072821503', '2013122780190', '17', '11111111111', '1388156839', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388474921', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('4', '20131231084209402', '2013122727106', '18', '12222222222', '1388156881', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388479341', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('5', '20131231084359235', '2013122775150', '16', '12221', '1388156756', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388479382', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('6', '20131231084315552', '2013122784673', '15', '322222222', '1388156700', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388479434', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('7', '20131231084435996', '2013122722923', '10', '32323', '1388152546', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '6', '76', '693', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '5.00', '1388479482', '0', '0', '0');
INSERT INTO `ecs_delivery_order` VALUES ('8', '20131231092325661', '2013120440283', '3', 'e', '1386173345', '1', '顺丰速运', '1', 'admin', '超级卖家', '长江路15号', '1', '2', '52', '508', '', '', '', '111111111', '', '', '', '等待所有商品备齐后再发', '0.00', '15.00', '1388481830', '0', '0', '0');

-- ----------------------------
-- Table structure for `ecs_email_list`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_email_list`;
CREATE TABLE `ecs_email_list` (
  `id` mediumint(8) NOT NULL auto_increment,
  `email` varchar(60) NOT NULL,
  `stat` tinyint(1) NOT NULL default '0',
  `hash` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_email_list
-- ----------------------------
INSERT INTO `ecs_email_list` VALUES ('1', 'admin@qq.com', '0', 'cbeec58135');

-- ----------------------------
-- Table structure for `ecs_email_sendlist`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_email_sendlist`;
CREATE TABLE `ecs_email_sendlist` (
  `id` mediumint(8) NOT NULL auto_increment,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL default '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_email_sendlist
-- ----------------------------
INSERT INTO `ecs_email_sendlist` VALUES ('1', 'test@qq.com', '6', '亲爱的test您好！\n\n恭喜您获得了1个红包，金额为￥100.00\n铭东商城2013-12-23', '0', '1', '1387775386');
INSERT INTO `ecs_email_sendlist` VALUES ('2', 'test@qq.com', '6', '亲爱的test您好！\n\n恭喜您获得了1个红包，金额为￥100.00\n铭东商城2013-12-23', '0', '1', '1387775406');

-- ----------------------------
-- Table structure for `ecs_error_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_error_log`;
CREATE TABLE `ecs_error_log` (
  `id` int(10) NOT NULL auto_increment,
  `info` varchar(255) NOT NULL,
  `file` varchar(100) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_error_log
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_exchange_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_exchange_goods`;
CREATE TABLE `ecs_exchange_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `exchange_integral` int(10) unsigned NOT NULL default '0',
  `is_exchange` tinyint(1) unsigned NOT NULL default '0',
  `is_hot` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_exchange_goods
-- ----------------------------
INSERT INTO `ecs_exchange_goods` VALUES ('1', '1000', '1', '0');
INSERT INTO `ecs_exchange_goods` VALUES ('9', '1000', '1', '0');
INSERT INTO `ecs_exchange_goods` VALUES ('15', '2000', '1', '0');

-- ----------------------------
-- Table structure for `ecs_favourable_activity`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_favourable_activity`;
CREATE TABLE `ecs_favourable_activity` (
  `act_id` smallint(5) unsigned NOT NULL auto_increment,
  `act_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `user_rank` varchar(255) NOT NULL,
  `act_range` tinyint(3) unsigned NOT NULL,
  `act_range_ext` varchar(255) NOT NULL,
  `min_amount` decimal(10,2) unsigned NOT NULL,
  `max_amount` decimal(10,2) unsigned NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `act_type_ext` decimal(10,2) unsigned NOT NULL,
  `gift` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '50',
  PRIMARY KEY  (`act_id`),
  KEY `act_name` (`act_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_favourable_activity
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_feedback`;
CREATE TABLE `ecs_feedback` (
  `msg_id` mediumint(8) unsigned NOT NULL auto_increment,
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `user_name` varchar(60) NOT NULL default '',
  `user_email` varchar(60) NOT NULL default '',
  `msg_title` varchar(200) NOT NULL default '',
  `msg_type` tinyint(1) unsigned NOT NULL default '0',
  `msg_status` tinyint(1) unsigned NOT NULL default '0',
  `msg_content` text NOT NULL,
  `msg_time` int(10) unsigned NOT NULL default '0',
  `message_img` varchar(255) NOT NULL default '0',
  `order_id` int(11) unsigned NOT NULL default '0',
  `msg_area` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`msg_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_friend_link`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_friend_link`;
CREATE TABLE `ecs_friend_link` (
  `link_id` smallint(5) unsigned NOT NULL auto_increment,
  `link_name` varchar(255) NOT NULL default '',
  `link_url` varchar(255) NOT NULL default '',
  `link_logo` varchar(255) NOT NULL default '',
  `show_order` tinyint(3) unsigned NOT NULL default '50',
  PRIMARY KEY  (`link_id`),
  KEY `show_order` (`show_order`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_friend_link
-- ----------------------------
INSERT INTO `ecs_friend_link` VALUES ('6', '福州家居网', 'http://#', '', '50');
INSERT INTO `ecs_friend_link` VALUES ('4', '床图片', 'http://#', '', '1');
INSERT INTO `ecs_friend_link` VALUES ('5', '衣帽间装修效果图', 'http://#', '', '50');

-- ----------------------------
-- Table structure for `ecs_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods`;
CREATE TABLE `ecs_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL auto_increment,
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `goods_sn` varchar(60) NOT NULL default '',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_name_style` varchar(60) NOT NULL default '+',
  `click_count` int(10) unsigned NOT NULL default '0',
  `brand_id` smallint(5) unsigned NOT NULL default '0',
  `provider_name` varchar(100) NOT NULL default '',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `goods_weight` decimal(10,3) unsigned NOT NULL default '0.000',
  `market_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `promote_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `promote_start_date` int(11) unsigned NOT NULL default '0',
  `promote_end_date` int(11) unsigned NOT NULL default '0',
  `warn_number` tinyint(3) unsigned NOT NULL default '1',
  `keywords` varchar(255) NOT NULL default '',
  `goods_brief` varchar(255) NOT NULL default '',
  `goods_desc` text NOT NULL,
  `goods_thumb` varchar(255) NOT NULL default '',
  `goods_img` varchar(255) NOT NULL default '',
  `original_img` varchar(255) NOT NULL default '',
  `is_real` tinyint(3) unsigned NOT NULL default '1',
  `extension_code` varchar(30) NOT NULL default '',
  `is_on_sale` tinyint(1) unsigned NOT NULL default '1',
  `is_alone_sale` tinyint(1) unsigned NOT NULL default '1',
  `is_shipping` tinyint(1) unsigned NOT NULL default '0',
  `integral` int(10) unsigned NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `sort_order` smallint(4) unsigned NOT NULL default '100',
  `is_delete` tinyint(1) unsigned NOT NULL default '0',
  `is_best` tinyint(1) unsigned NOT NULL default '0',
  `is_new` tinyint(1) unsigned NOT NULL default '0',
  `is_hot` tinyint(1) unsigned NOT NULL default '0',
  `is_promote` tinyint(1) unsigned NOT NULL default '0',
  `bonus_type_id` tinyint(3) unsigned NOT NULL default '0',
  `last_update` int(10) unsigned NOT NULL default '0',
  `goods_type` smallint(5) unsigned NOT NULL default '0',
  `seller_note` varchar(255) NOT NULL default '',
  `give_integral` int(11) NOT NULL default '-1',
  `rank_integral` int(11) NOT NULL default '-1',
  `suppliers_id` smallint(5) unsigned default NULL,
  `is_check` tinyint(1) unsigned default NULL,
  PRIMARY KEY  (`goods_id`),
  KEY `goods_sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods
-- ----------------------------
INSERT INTO `ecs_goods` VALUES ('1', '23', 'ECS000000', '美式古典	双面描金雕花排骨架床', '+', '747', '1', '', '95', '0.000', '5998.80', '4999.00', '3999.00', '1385568000', '1480780800', '1', '', '[促销][直降]【疯狂直降1705元】高档黄杨实木材质，头层黄牛皮靠背，精致细腻雕花，高档描金工艺！知品味造就品质生活！ ', '', 'images/201311/thumb_img/1_thumb_G_1385536232130.jpg', 'images/201311/goods_img/1_G_1385536232664.jpg', 'images/201311/source_img/1_G_1385536232998.jpg', '1', '', '1', '1', '0', '49', '1385536232', '100', '0', '1', '1', '1', '1', '0', '1388063098', '1', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('2', '23', 'ECS000002', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '+', '69', '2', '', '94', '0.000', '4296.00', '3580.00', '0.00', '0', '0', '1', '', '[促销][包物流][直降]【爆款直减620元】模仿得了外貌，模仿不了品质！过万家庭的共同选择，荣获外观设计专利。', '', 'images/201311/thumb_img/2_thumb_G_1385536310716.jpg', 'images/201311/goods_img/2_G_1385536310136.jpg', 'images/201311/source_img/2_G_1385536310334.jpg', '1', '', '1', '1', '0', '35', '1385536310', '100', '0', '1', '1', '1', '0', '0', '1388416235', '1', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('3', '23', 'ECS000003', '欧式田园	粉红玫瑰立体雕花排骨架床', '+', '23', '3', '', '97', '0.000', '4296.00', '3580.00', '3600.00', '1385913600', '1480694400', '1', '', '高档真皮+水晶拉扣，立体雕花+粉色渲染工艺，欧式贵族的魅力，奢华而不奢侈！ ', '', 'images/201311/thumb_img/3_thumb_G_1385536398114.jpg', 'images/201311/goods_img/3_G_1385536398847.jpg', 'images/201311/source_img/3_G_1385536398947.jpg', '1', '', '1', '1', '0', '35', '1385536398', '100', '0', '1', '1', '1', '1', '0', '1386158051', '1', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('4', '23', 'ECS000004', '法式风格	1.8米皮拉扣床 PU发泡雕花床', '+', '9', '4', '', '98', '0.000', '4318.80', '3599.00', '2800.00', '1385395200', '1480176000', '1', '', '[促销]【6周年庆】依旧爆款，品质升级，超强耐磨优质皮艺，精致描银立体雕花，触手可及的奢华，再续销量传奇！ ', '', 'images/201311/thumb_img/4_thumb_G_1385536464676.jpg', 'images/201311/goods_img/4_G_1385536464071.jpg', 'images/201311/source_img/4_G_1385536464898.jpg', '1', '', '1', '1', '0', '35', '1385536464', '100', '0', '1', '1', '1', '1', '0', '1386158051', '1', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('5', '23', 'ECS000005', '地中海风格 美国进口白杨木双人床', '+', '23', '1', '', '97', '0.000', '1711.20', '1426.00', '1000.00', '1385395200', '1480176000', '1', '', '[促销]【6周年庆】精选优等进口白杨实木，秉承浓郁的地中海设计风格，汲取时尚元素精心打造而成，款式新颖独特！ ', '', 'images/201311/thumb_img/5_thumb_G_1385536549941.jpg', 'images/201311/goods_img/5_G_1385536549559.jpg', 'images/201311/source_img/5_G_1385536549220.jpg', '1', '', '1', '1', '0', '14', '1385536549', '100', '0', '1', '1', '1', '1', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('6', '23', 'ECS000006', '现代风格	1.8米软床 头层牛皮床', '+', '11', '1', '', '98', '0.000', '2448.00', '2040.00', '1800.00', '1385395200', '1480176000', '1', '', '[促销]【6周年庆】高档真皮，高密度海绵，匠心独运，超高性价比，连续四年销量领先！ ', '', 'images/201311/thumb_img/6_thumb_G_1385536616257.jpg', 'images/201311/goods_img/6_G_1385536616359.jpg', 'images/201311/source_img/6_G_1385536616918.jpg', '1', '', '1', '1', '0', '20', '1385536616', '100', '0', '1', '1', '1', '1', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('7', '26', 'ECS000007', '时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)', '+', '1', '4', '', '100', '0.000', '6838.80', '5699.00', '0.00', '0', '0', '1', '', '[促销][包物流][直降]经典款式，上等选材，火爆销量从未被超越！（因拍摄场地及角度原因，有稍许色差。） ', '', 'images/201312/thumb_img/7_thumb_G_1386083114628.jpg', 'images/201312/goods_img/7_G_1386083114095.jpg', 'images/201312/source_img/7_G_1386083114285.jpg', '1', '', '1', '1', '0', '56', '1386083114', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('8', '26', 'ECS000008', '奢华霸气 进口全真皮沙发套装（1+2+3）', '+', '6', '4', '', '100', '0.000', '20160.00', '16800.00', '0.00', '0', '0', '1', '', '[促销][直降]知名厂家生产，经国家出入境检验，熏蒸、消毒证书认证！纯海绵、意大利黄牛皮精制而成，顶级尊享！ ', '', 'images/201312/thumb_img/8_thumb_G_1386083156007.jpg', 'images/201312/goods_img/8_G_1386083156767.jpg', 'images/201312/source_img/8_G_1386083156300.jpg', '1', '', '1', '1', '0', '168', '1386083156', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('9', '26', 'ECS000009', '清新雅致 可拆装沙发套装（1+2+3）', '+', '3', '3', '', '100', '0.000', '8160.00', '6800.00', '0.00', '0', '0', '1', '', '可拆装型沙发套装，精选橡胶木实木，内部填充高密度回弹海绵和公仔棉，超舒适感带给你更多的惊喜。 ', '', 'images/201312/thumb_img/9_thumb_G_1386083216633.jpg', 'images/201312/goods_img/9_G_1386083216514.jpg', 'images/201312/source_img/9_G_1386083216897.jpg', '1', '', '1', '1', '0', '68', '1386083216', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('10', '26', 'ECS000010', '温柔海风 唯美布艺左转角沙发（1+3+左贵妃）', '+', '1', '3', '', '100', '0.000', '6960.00', '5800.00', '0.00', '0', '0', '1', '', '清新布艺转角沙发，风靡全网，震撼上市！高档海绵填充，质感饱满，柔软舒适！素雅美观的面料，给人耳目一新的感觉！', '', 'images/201312/thumb_img/10_thumb_G_1386083286727.jpg', 'images/201312/goods_img/10_G_1386083286909.jpg', 'images/201312/source_img/10_G_1386083286826.jpg', '1', '', '1', '1', '0', '58', '1386083286', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('11', '31', 'ECS000011', '橡胶木实木餐桌椅套装（七件套）', '+', '2', '2', '', '100', '0.000', '5760.00', '4800.00', '0.00', '0', '0', '1', '', '最具实力浪漫清新餐厅套装，橡胶木铸造，稳固坚实，餐桌可折叠，为您打造异域风情的优雅用餐环境！ ', '', 'images/201312/thumb_img/11_thumb_G_1386083439490.jpg', 'images/201312/goods_img/11_G_1386083439813.jpg', 'images/201312/source_img/11_G_1386083439947.jpg', '1', '', '1', '1', '0', '48', '1386083439', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('12', '31', 'ECS000012', '餐厅6件套（1餐桌+4餐椅+1餐边柜）', '+', '8', '2', '', '100', '0.000', '5638.80', '4699.00', '0.00', '0', '0', '1', '', '[促销][直降]超人气餐厅六件，韩式田园风，自然靓丽，光泽质朴自然，造型简约高雅。桌边镂空设计大气美观！ ', '', 'images/201312/thumb_img/12_thumb_G_1386083510264.jpg', 'images/201312/goods_img/12_G_1386083510689.jpg', 'images/201312/source_img/12_G_1386083510311.jpg', '1', '', '1', '1', '0', '46', '1386083510', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('13', '31', 'ECS000013', '餐厅5件套装（1.5餐台+4无扶手餐椅）', '+', '10', '2', '', '100', '0.000', '8640.00', '7200.00', '0.00', '0', '0', '1', '', '[促销][直降]【爆款直降1428元】高档实木制作，平整光滑，坚实耐用；优等环保漆喷绘工艺，持久性好；辅以精湛的加工工艺，雕花栩栩如生！ ', '', 'images/201312/thumb_img/13_thumb_G_1386083574489.jpg', 'images/201312/goods_img/13_G_1386083574550.jpg', 'images/201312/source_img/13_G_1386083574757.jpg', '1', '', '1', '1', '0', '72', '1386083574', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('14', '31', 'ECS000014', '美式田园	实木餐厅套装（1桌+4椅）', '+', '17', '2', '', '100', '0.000', '3598.79', '2999.00', '0.00', '0', '0', '1', '', '[促销][直降]【新品尝鲜】直降296元！采用拼接工艺，精选上等实木制作，天然环保健康！ ', '', 'images/201312/thumb_img/14_thumb_G_1386083649941.jpg', 'images/201312/goods_img/14_G_1386083649192.jpg', 'images/201312/source_img/14_G_1386083649265.jpg', '1', '', '1', '1', '0', '29', '1386083649', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('15', '11', 'ECS000015', '分段式吸顶灯 水晶玻璃灯 客厅吸顶灯', '+', '0', '2', '', '1000', '0.000', '478.79', '399.00', '0.00', '0', '0', '1', '', '[促销][直降]五星级好评水晶灯，玻璃灯罩配合树叶造型设计，造型华美大气，四段式可调节光源，营造变幻的生活空间！ ', '', 'images/201312/thumb_img/15_thumb_G_1386157438705.jpg', 'images/201312/goods_img/15_G_1386157438818.jpg', 'images/201312/source_img/15_G_1386157438135.jpg', '1', '', '1', '1', '0', '3', '1386157438', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('16', '11', 'ECS000016', '方形木艺灯罩吸顶灯', '+', '3', '2', '', '1000', '0.000', '456.00', '380.00', '0.00', '0', '0', '1', '', '5900人收藏，持续热销中！简约长方形灯体，配以精致典雅花纹图案，让原木灯具散发出时尚优雅的灵气，点亮时尚家居！', '', 'images/201312/thumb_img/16_thumb_G_1386157479619.jpg', 'images/201312/goods_img/16_G_1386157479755.jpg', 'images/201312/source_img/16_G_1386157479595.jpg', '1', '', '1', '1', '0', '3', '1386157479', '100', '0', '1', '1', '1', '0', '0', '1386492544', '0', '', '-1', '-1', '2', '0');
INSERT INTO `ecs_goods` VALUES ('17', '11', 'ECS000017', 'LED护眼吸顶灯 高抗冲亚克力 客厅吸顶灯', '+', '0', '2', '', '1000', '0.000', '639.60', '533.00', '0.00', '0', '0', '1', '', 'LED健康照明，无辐射、无频闪、不伤眼；优质LED驱动器，具备暗线保护功能；新一代高抗亚克力，强度高，透光性好！', '', 'images/201312/thumb_img/17_thumb_G_1386157520613.jpg', 'images/201312/goods_img/17_G_1386157520714.jpg', 'images/201312/source_img/17_G_1386157520277.jpg', '1', '', '1', '1', '0', '5', '1386157520', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('18', '11', 'ECS000018', '分段式吸顶灯 磨砂白玉玻璃 客厅餐厅', '+', '1', '2', '', '1000', '0.000', '1140.00', '950.00', '0.00', '0', '0', '1', '', '产品外观设计专利，14个E27灯头，高级磨砂白玉玻璃，镜面不锈钢底盘，具备强光，弱光，LED光等不同光学效果！', '', 'images/201312/thumb_img/18_thumb_G_1386157585629.jpg', 'images/201312/goods_img/18_G_1386157585376.jpg', 'images/201312/source_img/18_G_1386157585031.jpg', '1', '', '1', '1', '0', '9', '1386157585', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('19', '12', 'ECS000019', '不锈钢双水槽 洗菜盆水槽套装76*40CM', '+', '0', '2', '', '998', '0.000', '336.00', '280.00', '0.00', '0', '0', '1', '', '[包快递]单冷龙头配置，专门为没有热水管道的家庭量身订做的套装！', '', 'images/201312/thumb_img/19_thumb_G_1386157690407.jpg', 'images/201312/goods_img/19_G_1386157690375.jpg', 'images/201312/source_img/19_G_1386157690785.jpg', '1', '', '1', '1', '0', '2', '1386157690', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('20', '12', 'ECS000020', 'SUS304水槽带水龙头套装 带混水龙头双水槽套装72*38CM', '+', '0', '2', '', '1000', '0.000', '576.00', '480.00', '0.00', '0', '0', '1', '', '[包快递]SUS304不锈钢材质，表面拉丝工艺，历久恒新，一体成型无缝设计，滴水不漏，人性化溢水口设计，免去后顾之忧！', '', 'images/201312/thumb_img/20_thumb_G_1386157724025.jpg', 'images/201312/goods_img/20_G_1386157724619.jpg', 'images/201312/source_img/20_G_1386157724211.jpg', '1', '', '1', '1', '0', '4', '1386157724', '100', '0', '1', '1', '1', '0', '0', '1386492528', '0', '', '-1', '-1', '2', '0');
INSERT INTO `ecs_goods` VALUES ('21', '12', 'ECS000021', '全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', '+', '9', '3', '', '998', '0.000', '144.00', '120.00', '100.00', '1386000000', '1480780800', '1', '', '[包快递]全铜主体打造，出水弯管可360°旋转，现代厨房必备龙头，含铅量低于国际标准，更健康环保！ ', '', 'images/201312/thumb_img/21_thumb_G_1386157760818.jpg', 'images/201312/goods_img/21_G_1386157760508.jpg', 'images/201312/source_img/21_G_1386157760136.jpg', '1', '', '1', '1', '0', '1', '1386157760', '100', '0', '0', '1', '1', '1', '0', '1386158183', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('22', '12', 'ECS000022', '厨房不锈钢双水槽套装76*40CM', '+', '3', '3', '', '1000', '0.000', '405.59', '338.00', '0.00', '0', '0', '1', '', '[促销][包快递]精密不锈钢打造，珍珠磨砂表面工艺，不沾油，不生锈，保用20年！ ', '', 'images/201312/thumb_img/22_thumb_G_1386157797079.jpg', 'images/201312/goods_img/22_G_1386157797700.jpg', 'images/201312/source_img/22_G_1386157797466.jpg', '1', '', '1', '1', '0', '3', '1386157797', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('23', '13', 'ECS000023', '橡木爵士白雕刻卫浴柜 方形双人浴室柜 欧式落地浴室柜', '+', '2', '3', '', '1000', '0.000', '7764.00', '6470.00', '0.00', '0', '0', '1', '', '泰国进口橡木+天然大理石制造！设计精致素雅！雕花描银更显宫廷式色彩！银镜成像清晰，有质感！ ', '', 'images/201312/thumb_img/23_thumb_G_1386157899021.jpg', 'images/201312/goods_img/23_G_1386157899480.jpg', 'images/201312/source_img/23_G_1386157899903.jpg', '1', '', '1', '1', '0', '64', '1386157899', '100', '0', '0', '1', '1', '0', '0', '1386158051', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('24', '13', 'ECS000024', '双人多功能按摩浴缸 亚克力浴缸 双裙边（左裙）浴缸', '+', '10', '3', '', '1000', '0.000', '5998.80', '4999.00', '0.00', '0', '0', '1', '', '3C中国强制安全认证，品质保证，更放心！全新人体工程学设计，健康舒适！智能操控，随心掌握，在家也能乐享SPA！ ', '', 'images/201312/thumb_img/24_thumb_G_1386157931809.jpg', 'images/201312/goods_img/24_G_1386157931223.jpg', 'images/201312/source_img/24_G_1386157931764.jpg', '1', '', '1', '1', '0', '49', '1386157931', '100', '0', '1', '1', '1', '0', '0', '1386493174', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('25', '13', 'ECS000025', '虹吸式坐厕 连体双档座便器 节水马桶', '+', '13', '1', '', '999', '0.000', '1195.20', '996.00', '0.00', '0', '0', '1', '', '精密窑炉烧制，确保瓷体均匀耐用不变形！外观时尚，新颖独特。专业化水道设计，排污更彻底干净。', '', 'images/201312/thumb_img/25_thumb_G_1386157973309.jpg', 'images/201312/goods_img/25_G_1386157973070.jpg', 'images/201312/source_img/25_G_1386157973100.jpg', '1', '', '1', '1', '0', '9', '1386157973', '100', '0', '1', '1', '1', '0', '0', '1395275982', '0', '', '-1', '-1', '0', '0');
INSERT INTO `ecs_goods` VALUES ('26', '13', 'ECS000026', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', '+', '45', '1', '', '997', '0.000', '2028.00', '1690.00', '1500.00', '1386000000', '1480780800', '1', '', '【赠送双合一排水管】全网销量第一实木浴室柜！进口橡木材质，木质坚实，纯手工实木雕花，尽显高端品质。 ', '', 'images/201312/thumb_img/26_thumb_G_1386158012215.jpg', 'images/201312/goods_img/26_G_1386158012596.jpg', 'images/201312/source_img/26_G_1386158012783.jpg', '1', '', '1', '1', '0', '16', '1386158012', '100', '0', '1', '1', '1', '1', '0', '1388896864', '0', '', '-1', '-1', '2', '0');

-- ----------------------------
-- Table structure for `ecs_goods_activity`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_activity`;
CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL auto_increment,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `group_title` text NOT NULL,
  `group_img` varchar(50) NOT NULL,
  `isg_new` tinyint(3) unsigned NOT NULL default '0',
  `isg_rs` tinyint(3) unsigned NOT NULL default '0',
  `group_rs` int(11) NOT NULL,
  PRIMARY KEY  (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_activity
-- ----------------------------
INSERT INTO `ecs_goods_activity` VALUES ('1', '美式古典	双面描金雕花排骨架床', '', '1', '1', '美式古典	双面描金雕花排骨架床', '1385654400', '1480694400', '0', 'a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:1600;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:100;}', '0', '[鸥达] 实木浴室柜 复古雕花', 'data/group_img/1385741049844726971.jpg', '1', '0', '306');
INSERT INTO `ecs_goods_activity` VALUES ('2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '', '1', '2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', '1385654400', '1480694400', '0', 'a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:2000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}', '0', '[鸥达] 橡木爵士白雕刻卫浴柜', 'data/group_img/1385741056654974675.jpg', '1', '1', '383');
INSERT INTO `ecs_goods_activity` VALUES ('3', '欧式田园	粉红玫瑰立体雕花排骨架床', '', '1', '3', '欧式田园	粉红玫瑰立体雕花排骨架床', '1385568000', '1480694400', '0', 'a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:100;s:5:\"price\";d:2000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}', '0', '[鸥达] 落地式实木浴室柜 欧', 'data/group_img/1385741063307061988.jpg', '0', '0', '460');
INSERT INTO `ecs_goods_activity` VALUES ('4', '地中海风格 美国进口白杨木双人床', '', '1', '5', '地中海风格 美国进口白杨木双人床', '1385481600', '1480694400', '0', 'a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:50;s:5:\"price\";d:1800;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:10;}', '0', '[赛朵] 磨砂玻璃灯罩 吸顶灯', 'data/group_img/1385741071103455054.jpg', '0', '0', '218');
INSERT INTO `ecs_goods_activity` VALUES ('5', '客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）', '超值礼包活动描述', '4', '0', '', '1385972820', '1483432020', '0', 'a:1:{s:13:\"package_price\";s:5:\"10000\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('6', '餐厅-6件套（1桌+4椅+1吊灯）', '', '4', '0', '', '1385976480', '1388741280', '0', 'a:1:{s:13:\"package_price\";s:4:\"9800\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('7', '卧房-3套装（1.5米床+1床头柜+1吸顶灯）', '', '4', '0', '', '1385976960', '1388741760', '0', 'a:1:{s:13:\"package_price\";s:4:\"8800\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('8', '客厅-3套装（1转角沙发+1吸顶灯+1茶几）', '', '4', '0', '', '1385977260', '1388742060', '0', 'a:1:{s:13:\"package_price\";s:4:\"8000\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('9', '客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)', '', '4', '0', '', '1385979780', '1483438980', '0', 'a:1:{s:13:\"package_price\";s:5:\"10000\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('10', '书房-家具3件套装-835', '', '4', '0', '', '1386000660', '1451837460', '0', 'a:1:{s:13:\"package_price\";s:4:\"8000\";}', '0', '', '', '0', '0', '0');
INSERT INTO `ecs_goods_activity` VALUES ('11', '书房-家具3套装', '', '4', '0', '', '1386000780', '1483459980', '0', 'a:1:{s:13:\"package_price\";s:4:\"8800\";}', '0', '', '', '0', '0', '0');

-- ----------------------------
-- Table structure for `ecs_goods_article`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_article`;
CREATE TABLE `ecs_goods_article` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `article_id` mediumint(8) unsigned NOT NULL default '0',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`article_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_article
-- ----------------------------
INSERT INTO `ecs_goods_article` VALUES ('1', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('1', '46', '0');
INSERT INTO `ecs_goods_article` VALUES ('2', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('2', '46', '0');
INSERT INTO `ecs_goods_article` VALUES ('3', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('3', '46', '0');
INSERT INTO `ecs_goods_article` VALUES ('4', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('4', '46', '0');
INSERT INTO `ecs_goods_article` VALUES ('5', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('5', '46', '0');
INSERT INTO `ecs_goods_article` VALUES ('6', '33', '0');
INSERT INTO `ecs_goods_article` VALUES ('6', '46', '0');

-- ----------------------------
-- Table structure for `ecs_goods_attr`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_attr`;
CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `attr_id` smallint(5) unsigned NOT NULL default '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_attr
-- ----------------------------
INSERT INTO `ecs_goods_attr` VALUES ('1', '1', '1', '田园', '0');
INSERT INTO `ecs_goods_attr` VALUES ('2', '1', '2', '实木', '0');
INSERT INTO `ecs_goods_attr` VALUES ('3', '1', '3', '实木床', '0');
INSERT INTO `ecs_goods_attr` VALUES ('4', '1', '4', '地中海1.5米床', '10');
INSERT INTO `ecs_goods_attr` VALUES ('5', '1', '4', '地中海1.8米床', '20');
INSERT INTO `ecs_goods_attr` VALUES ('6', '1', '4', '地中海1.2米床', '30');
INSERT INTO `ecs_goods_attr` VALUES ('8', '1', '5', '1.815*2.01米', '');
INSERT INTO `ecs_goods_attr` VALUES ('9', '1', '5', '1.515*2.01米', '');
INSERT INTO `ecs_goods_attr` VALUES ('10', '2', '4', '地中海1.5米床', '');
INSERT INTO `ecs_goods_attr` VALUES ('11', '2', '4', '地中海1.2米床', '');

-- ----------------------------
-- Table structure for `ecs_goods_cat`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_cat`;
CREATE TABLE `ecs_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_cat
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_goods_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_gallery`;
CREATE TABLE `ecs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `img_url` varchar(255) NOT NULL default '',
  `img_desc` varchar(255) NOT NULL default '',
  `thumb_url` varchar(255) NOT NULL default '',
  `img_original` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_gallery
-- ----------------------------
INSERT INTO `ecs_goods_gallery` VALUES ('11', '7', 'images/201312/goods_img/7_P_1386083114061.jpg', '', 'images/201312/thumb_img/7_thumb_P_1386083114958.jpg', 'images/201312/source_img/7_P_1386083114514.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('2', '2', 'images/201311/goods_img/2_P_1385536310108.jpg', '', 'images/201311/thumb_img/2_thumb_P_1385536310776.jpg', 'images/201311/source_img/2_P_1385536310561.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('3', '3', 'images/201311/goods_img/3_P_1385536398120.jpg', '', 'images/201311/thumb_img/3_thumb_P_1385536398166.jpg', 'images/201311/source_img/3_P_1385536398939.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('4', '4', 'images/201311/goods_img/4_P_1385536464031.jpg', '', 'images/201311/thumb_img/4_thumb_P_1385536464671.jpg', 'images/201311/source_img/4_P_1385536464311.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('5', '5', 'images/201311/goods_img/5_P_1385536549811.jpg', '', 'images/201311/thumb_img/5_thumb_P_1385536550181.jpg', 'images/201311/source_img/5_P_1385536549341.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('6', '6', 'images/201311/goods_img/6_P_1385536616227.jpg', '', 'images/201311/thumb_img/6_thumb_P_1385536616587.jpg', 'images/201311/source_img/6_P_1385536616397.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('7', '1', 'images/201312/goods_img/1_P_1386074915744.png', '', 'images/201312/thumb_img/1_thumb_P_1386074915701.jpg', 'images/201312/source_img/1_P_1386074915916.png');
INSERT INTO `ecs_goods_gallery` VALUES ('8', '1', 'images/201312/goods_img/1_P_1386074916591.png', '', 'images/201312/thumb_img/1_thumb_P_1386074916718.jpg', 'images/201312/source_img/1_P_1386074916473.png');
INSERT INTO `ecs_goods_gallery` VALUES ('9', '1', 'images/201312/goods_img/1_P_1386074916410.png', '', 'images/201312/thumb_img/1_thumb_P_1386074916120.jpg', 'images/201312/source_img/1_P_1386074916388.png');
INSERT INTO `ecs_goods_gallery` VALUES ('10', '1', 'images/201312/goods_img/1_P_1386074916734.png', '', 'images/201312/thumb_img/1_thumb_P_1386074916751.jpg', 'images/201312/source_img/1_P_1386074916081.png');
INSERT INTO `ecs_goods_gallery` VALUES ('12', '8', 'images/201312/goods_img/8_P_1386083156535.jpg', '', 'images/201312/thumb_img/8_thumb_P_1386083156858.jpg', 'images/201312/source_img/8_P_1386083156253.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('13', '9', 'images/201312/goods_img/9_P_1386083216829.jpg', '', 'images/201312/thumb_img/9_thumb_P_1386083216226.jpg', 'images/201312/source_img/9_P_1386083216682.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('14', '10', 'images/201312/goods_img/10_P_1386083286231.jpg', '', 'images/201312/thumb_img/10_thumb_P_1386083286098.jpg', 'images/201312/source_img/10_P_1386083286414.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('15', '11', 'images/201312/goods_img/11_P_1386083439022.jpg', '', 'images/201312/thumb_img/11_thumb_P_1386083439829.jpg', 'images/201312/source_img/11_P_1386083439985.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('16', '12', 'images/201312/goods_img/12_P_1386083510001.jpg', '', 'images/201312/thumb_img/12_thumb_P_1386083510770.jpg', 'images/201312/source_img/12_P_1386083510161.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('17', '13', 'images/201312/goods_img/13_P_1386083574979.jpg', '', 'images/201312/thumb_img/13_thumb_P_1386083574619.jpg', 'images/201312/source_img/13_P_1386083574365.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('18', '14', 'images/201312/goods_img/14_P_1386083649196.jpg', '', 'images/201312/thumb_img/14_thumb_P_1386083649813.jpg', 'images/201312/source_img/14_P_1386083649917.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('19', '15', 'images/201312/goods_img/15_P_1386157438044.jpg', '', 'images/201312/thumb_img/15_thumb_P_1386157438602.jpg', 'images/201312/source_img/15_P_1386157438335.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('20', '16', 'images/201312/goods_img/16_P_1386157479147.jpg', '', 'images/201312/thumb_img/16_thumb_P_1386157479790.jpg', 'images/201312/source_img/16_P_1386157479264.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('21', '17', 'images/201312/goods_img/17_P_1386157520459.jpg', '', 'images/201312/thumb_img/17_thumb_P_1386157520503.jpg', 'images/201312/source_img/17_P_1386157520243.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('22', '18', 'images/201312/goods_img/18_P_1386157585390.jpg', '', 'images/201312/thumb_img/18_thumb_P_1386157585936.jpg', 'images/201312/source_img/18_P_1386157585122.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('23', '19', 'images/201312/goods_img/19_P_1386157690491.jpg', '', 'images/201312/thumb_img/19_thumb_P_1386157690680.jpg', 'images/201312/source_img/19_P_1386157690148.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('24', '20', 'images/201312/goods_img/20_P_1386157724916.jpg', '', 'images/201312/thumb_img/20_thumb_P_1386157724506.jpg', 'images/201312/source_img/20_P_1386157724494.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('25', '21', 'images/201312/goods_img/21_P_1386157760718.jpg', '', 'images/201312/thumb_img/21_thumb_P_1386157760223.jpg', 'images/201312/source_img/21_P_1386157760691.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('26', '22', 'images/201312/goods_img/22_P_1386157797299.jpg', '', 'images/201312/thumb_img/22_thumb_P_1386157797078.jpg', 'images/201312/source_img/22_P_1386157797016.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('27', '23', 'images/201312/goods_img/23_P_1386157899392.jpg', '', 'images/201312/thumb_img/23_thumb_P_1386157899465.jpg', 'images/201312/source_img/23_P_1386157899851.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('28', '24', 'images/201312/goods_img/24_P_1386157931368.jpg', '', 'images/201312/thumb_img/24_thumb_P_1386157931098.jpg', 'images/201312/source_img/24_P_1386157931360.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('29', '25', 'images/201312/goods_img/25_P_1386157973035.jpg', '', 'images/201312/thumb_img/25_thumb_P_1386157973314.jpg', 'images/201312/source_img/25_P_1386157973066.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('30', '26', 'images/201312/goods_img/26_P_1386158012404.jpg', '', 'images/201312/thumb_img/26_thumb_P_1386158012729.jpg', 'images/201312/source_img/26_P_1386158012273.jpg');
INSERT INTO `ecs_goods_gallery` VALUES ('31', '1', 'images/201312/goods_img/1_P_1388063098774.png', '', 'images/201312/thumb_img/1_thumb_P_1388063098907.jpg', 'images/201312/source_img/1_P_1388063098436.png');
INSERT INTO `ecs_goods_gallery` VALUES ('32', '1', 'images/201312/goods_img/1_P_1388063099566.png', '', 'images/201312/thumb_img/1_thumb_P_1388063099128.jpg', 'images/201312/source_img/1_P_1388063099006.png');
INSERT INTO `ecs_goods_gallery` VALUES ('33', '1', 'images/201312/goods_img/1_P_1388063099539.png', '', 'images/201312/thumb_img/1_thumb_P_1388063099632.jpg', 'images/201312/source_img/1_P_1388063099855.png');

-- ----------------------------
-- Table structure for `ecs_goods_type`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_goods_type`;
CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(60) NOT NULL default '',
  `enabled` tinyint(1) unsigned NOT NULL default '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_goods_type
-- ----------------------------
INSERT INTO `ecs_goods_type` VALUES ('1', '床', '1', '');

-- ----------------------------
-- Table structure for `ecs_group_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_group_goods`;
CREATE TABLE `ecs_group_goods` (
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`parent_id`,`goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_group_goods
-- ----------------------------
INSERT INTO `ecs_group_goods` VALUES ('1', '3', '3580.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('1', '5', '1426.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('1', '4', '3599.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('1', '2', '3580.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('14', '11', '4800.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('14', '12', '4699.00', '1');
INSERT INTO `ecs_group_goods` VALUES ('2', '1', '4999.00', '1');

-- ----------------------------
-- Table structure for `ecs_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_keywords`;
CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL default '0000-00-00',
  `searchengine` varchar(20) NOT NULL default '',
  `keyword` varchar(90) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_keywords
-- ----------------------------
INSERT INTO `ecs_keywords` VALUES ('2013-12-03', 'ecshop', '布艺沙发', '6');
INSERT INTO `ecs_keywords` VALUES ('2013-12-03', 'ecshop', '风格', '27');
INSERT INTO `ecs_keywords` VALUES ('2013-12-03', 'ecshop', '多功能床', '1');
INSERT INTO `ecs_keywords` VALUES ('2013-12-03', 'ecshop', '吸顶灯', '1');
INSERT INTO `ecs_keywords` VALUES ('2013-12-04', 'ecshop', '布艺沙发', '1');
INSERT INTO `ecs_keywords` VALUES ('2013-12-05', 'ecshop', '布艺沙发', '1');
INSERT INTO `ecs_keywords` VALUES ('2013-12-11', 'ecshop', '布艺沙发', '2');
INSERT INTO `ecs_keywords` VALUES ('2013-12-18', 'ecshop', '布艺沙发', '1');
INSERT INTO `ecs_keywords` VALUES ('2013-12-29', 'ecshop', '1', '3');
INSERT INTO `ecs_keywords` VALUES ('2014-02-22', 'ecshop', '1', '1');

-- ----------------------------
-- Table structure for `ecs_link_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_link_goods`;
CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL default '0',
  `is_double` tinyint(1) unsigned NOT NULL default '0',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_link_goods
-- ----------------------------
INSERT INTO `ecs_link_goods` VALUES ('1', '2', '0', '1');
INSERT INTO `ecs_link_goods` VALUES ('1', '3', '0', '1');
INSERT INTO `ecs_link_goods` VALUES ('1', '4', '0', '1');
INSERT INTO `ecs_link_goods` VALUES ('1', '5', '0', '1');
INSERT INTO `ecs_link_goods` VALUES ('1', '6', '0', '1');

-- ----------------------------
-- Table structure for `ecs_mail_templates`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_mail_templates`;
CREATE TABLE `ecs_mail_templates` (
  `template_id` tinyint(1) unsigned NOT NULL auto_increment,
  `template_code` varchar(30) NOT NULL default '',
  `is_html` tinyint(1) unsigned NOT NULL default '0',
  `template_subject` varchar(200) NOT NULL default '',
  `template_content` text NOT NULL,
  `last_modify` int(10) unsigned NOT NULL default '0',
  `last_send` int(10) unsigned NOT NULL default '0',
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`template_id`),
  UNIQUE KEY `template_code` (`template_code`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_mail_templates
-- ----------------------------
INSERT INTO `ecs_mail_templates` VALUES ('1', 'send_password', '1', '密码找回', '{$user_name}您好！<br>\n<br>\n您已经进行了密码重置的操作，请点击以下链接(或者复制到您的浏览器):<br>\n<br>\n<a href=\"{$reset_email}\" target=\"_blank\">{$reset_email}</a><br>\n<br>\n以确认您的新密码重置操作！<br>\n<br>\n{$shop_name}<br>\n{$send_date}', '1194824789', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('2', 'order_confirm', '0', '订单确认通知', '亲爱的{$order.consignee}，你好！ \n\n我们已经收到您于 {$order.formated_add_time} 提交的订单，该订单编号为：{$order.order_sn} 请记住这个编号以便日后的查询。\n\n{$shop_name}\n{$sent_date}\n\n\n', '1158226370', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('3', 'deliver_notice', '1', '发货通知', '亲爱的{$order.consignee}。你好！</br></br>\n\n您的订单{$order.order_sn}已于{$send_time}按照您预定的配送方式给您发货了。</br>\n</br>\n{if $order.invoice_no}发货单号是{$order.invoice_no}。</br>{/if}\n</br>\n在您收到货物之后请点击下面的链接确认您已经收到货物：</br>\n<a href=\"{$confirm_url}\" target=\"_blank\">{$confirm_url}</a></br></br>\n如果您还没有收到货物可以点击以下链接给我们留言：</br></br>\n<a href=\"{$send_msg_url}\" target=\"_blank\">{$send_msg_url}</a></br>\n<br>\n再次感谢您对我们的支持。欢迎您的再次光临。 <br>\n<br>\n{$shop_name} </br>\n{$send_date}', '1194823291', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('4', 'order_cancel', '0', '订单取消', '亲爱的{$order.consignee}，你好！ \n\n您的编号为：{$order.order_sn}的订单已取消。\n\n{$shop_name}\n{$send_date}', '1156491130', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('5', 'order_invalid', '0', '订单无效', '亲爱的{$order.consignee}，你好！\n\n您的编号为：{$order.order_sn}的订单无效。\n\n{$shop_name}\n{$send_date}', '1156491164', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('6', 'send_bonus', '0', '发红包', '亲爱的{$user_name}您好！\n\n恭喜您获得了{$count}个红包，金额{if $count > 1}分别{/if}为{$money}\n\n{$shop_name}\n{$send_date}\n', '1156491184', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('7', 'group_buy', '1', '团购商品', '亲爱的{$consignee}，您好！<br>\n<br>\n您于{$order_time}在本店参加团购商品活动，所购买的商品名称为：{$goods_name}，数量：{$goods_number}，订单号为：{$order_sn}，订单金额为：{$order_amount}<br>\n<br>\n此团购商品现在已到结束日期，并达到最低价格，您现在可以对该订单付款。<br>\n<br>\n请点击下面的链接：<br>\n<a href=\"{$shop_url}\" target=\"_blank\">{$shop_url}</a><br>\n<br>\n请尽快登录到用户中心，查看您的订单详情信息。 <br>\n<br>\n{$shop_name} <br>\n<br>\n{$send_date}', '1194824668', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('8', 'register_validate', '1', '邮件验证', '{$user_name}您好！<br><br>\r\n\r\n这封邮件是 {$shop_name} 发送的。你收到这封邮件是为了验证你注册邮件地址是否有效。如果您已经通过验证了，请忽略这封邮件。<br>\r\n请点击以下链接(或者复制到您的浏览器)来验证你的邮件地址:<br>\r\n<a href=\"{$validate_email}\" target=\"_blank\">{$validate_email}</a><br><br>\r\n\r\n{$shop_name}<br>\r\n{$send_date}', '1162201031', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('9', 'virtual_card', '0', '虚拟卡片', '亲爱的{$order.consignee}\r\n你好！您的订单{$order.order_sn}中{$goods.goods_name} 商品的详细信息如下:\r\n{foreach from=$virtual_card item=card}\r\n{if $card.card_sn}卡号：{$card.card_sn}{/if}{if $card.card_password}卡片密码：{$card.card_password}{/if}{if $card.end_date}截至日期：{$card.end_date}{/if}\r\n{/foreach}\r\n再次感谢您对我们的支持。欢迎您的再次光临。\r\n\r\n{$shop_name} \r\n{$send_date}', '1162201031', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('10', 'attention_list', '0', '关注商品', '亲爱的{$user_name}您好~\n\n您关注的商品 : {$goods_name} 最近已经更新,请您查看最新的商品信息\n\n{$goods_url}\r\n\r\n{$shop_name} \r\n{$send_date}', '1183851073', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('11', 'remind_of_new_order', '0', '新订单通知', '亲爱的店长，您好：\n   快来看看吧，又有新订单了。\n    订单号:{$order.order_sn} \n 订单金额:{$order.order_amount}，\n 用户购买商品:{foreach from=$goods_list item=goods_data}{$goods_data.goods_name}(货号:{$goods_data.goods_sn})    {/foreach} \n\n 收货人:{$order.consignee}， \n 收货人地址:{$order.address}，\n 收货人电话:{$order.tel} {$order.mobile}, \n 配送方式:{$order.shipping_name}(费用:{$order.shipping_fee}), \n 付款方式:{$order.pay_name}(费用:{$order.pay_fee})。\n\n               系统提醒\n               {$send_date}', '1196239170', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('12', 'goods_booking', '1', '缺货回复', '亲爱的{$user_name}。你好！</br></br>{$dispose_note}</br></br>您提交的缺货商品链接为</br></br><a href=\"{$goods_link}\" target=\"_blank\">{$goods_name}</a></br><br>{$shop_name} </br>{$send_date}', '0', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('13', 'user_message', '1', '留言回复', '亲爱的{$user_name}。你好！</br></br>对您的留言：</br>{$message_content}</br></br>店主作了如下回复：</br>{$message_note}</br></br>您可以随时回到店中和店主继续沟通。</br>{$shop_name}</br>{$send_date}', '0', '0', 'template');
INSERT INTO `ecs_mail_templates` VALUES ('14', 'recomment', '1', '用户评论回复', '亲爱的{$user_name}。你好！</br></br>对您的评论：</br>“{$comment}”</br></br>店主作了如下回复：</br>“{$recomment}”</br></br>您可以随时回到店中和店主继续沟通。</br>{$shop_name}</br>{$send_date}', '0', '0', 'template');

-- ----------------------------
-- Table structure for `ecs_member_price`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_member_price`;
CREATE TABLE `ecs_member_price` (
  `price_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `user_rank` tinyint(3) NOT NULL default '0',
  `user_price` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`price_id`),
  KEY `goods_id` (`goods_id`,`user_rank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_member_price
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_nav`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_nav`;
CREATE TABLE `ecs_nav` (
  `id` mediumint(8) NOT NULL auto_increment,
  `ctype` varchar(10) default NULL,
  `cid` smallint(5) unsigned default NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_nav
-- ----------------------------
INSERT INTO `ecs_nav` VALUES ('1', '', '0', '商家入驻', '1', '1', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('2', '', '0', '家居图片', '1', '2', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('3', '', '0', '家居资讯', '1', '3', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('4', '', '0', '品牌大全', '1', '4', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('5', '', '0', '装修图片 ', '1', '5', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('6', '', '0', '装修材料', '1', '6', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('7', '', '0', '家私导购', '1', '7', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('8', '', '0', '品牌展厅', '1', '8', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('9', '', '0', '客服中心', '1', '9', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('10', '', '0', '网站地图 ', '1', '10', '0', '#', 'bottom');
INSERT INTO `ecs_nav` VALUES ('11', '', '0', '购买流程', '1', '1', '0', '#', 'top');
INSERT INTO `ecs_nav` VALUES ('12', '', '0', '在线帮助', '1', '2', '0', '#', 'top');
INSERT INTO `ecs_nav` VALUES ('13', '', '0', '家具城', '1', '1', '0', 'category.php?cat_id=1', 'middle');
INSERT INTO `ecs_nav` VALUES ('14', '', '0', '品牌中心', '1', '3', '0', 'brand.php', 'middle');
INSERT INTO `ecs_nav` VALUES ('16', '', '0', '团购商品', '1', '4', '0', 'group_buy.php', 'middle');
INSERT INTO `ecs_nav` VALUES ('17', '', '0', '特惠套装', '1', '5', '0', 'activity.php', 'middle');
INSERT INTO `ecs_nav` VALUES ('18', '', '0', '体验馆', '0', '6', '0', '#', 'middle');
INSERT INTO `ecs_nav` VALUES ('19', '', '0', '促销专题', '1', '7', '0', 'topic.php?topic_id=1', 'middle');
INSERT INTO `ecs_nav` VALUES ('20', '', '0', '建材城', '1', '2', '0', 'category.php?cat_id=2', 'middle');
INSERT INTO `ecs_nav` VALUES ('21', 'c', '3', '家居饰品', '1', '9', '0', 'category.php?id=3', 'middle');

-- ----------------------------
-- Table structure for `ecs_order_action`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_order_action`;
CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `action_user` varchar(30) NOT NULL default '',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `action_place` tinyint(1) unsigned NOT NULL default '0',
  `action_note` varchar(255) NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_order_action
-- ----------------------------
INSERT INTO `ecs_order_action` VALUES ('1', '19', 'admin', '1', '0', '0', '0', '1111', '1388397058');
INSERT INTO `ecs_order_action` VALUES ('2', '19', 'admin', '1', '0', '2', '0', '111111', '1388397064');
INSERT INTO `ecs_order_action` VALUES ('3', '19', 'admin', '1', '3', '2', '0', '111', '1388397070');
INSERT INTO `ecs_order_action` VALUES ('4', '19', 'admin', '5', '5', '2', '0', '111111', '1388397082');
INSERT INTO `ecs_order_action` VALUES ('5', '19', 'admin', '1', '1', '2', '1', '1111', '1388397103');
INSERT INTO `ecs_order_action` VALUES ('6', '19', 'admin', '5', '2', '2', '0', '11111', '1388397126');
INSERT INTO `ecs_order_action` VALUES ('7', '20', 'admin', '1', '0', '0', '0', '', '1388468662');
INSERT INTO `ecs_order_action` VALUES ('8', '20', 'admin', '1', '0', '2', '0', '111111111', '1388468672');
INSERT INTO `ecs_order_action` VALUES ('9', '20', 'admin', '1', '3', '2', '0', '11111', '1388468677');
INSERT INTO `ecs_order_action` VALUES ('10', '20', 'admin', '5', '5', '2', '0', '1111', '1388468688');
INSERT INTO `ecs_order_action` VALUES ('11', '20', 'admin', '1', '1', '2', '1', '111111', '1388468702');
INSERT INTO `ecs_order_action` VALUES ('12', '20', 'admin', '5', '2', '2', '0', '111111', '1388468714');
INSERT INTO `ecs_order_action` VALUES ('13', '17', 'admin', '1', '0', '2', '0', '11111', '1388474902');
INSERT INTO `ecs_order_action` VALUES ('14', '17', 'admin', '1', '3', '2', '0', '1111111', '1388474912');
INSERT INTO `ecs_order_action` VALUES ('15', '17', 'admin', '5', '5', '2', '0', '1111', '1388474921');
INSERT INTO `ecs_order_action` VALUES ('16', '17', 'admin', '1', '1', '2', '1', '111111', '1388474932');
INSERT INTO `ecs_order_action` VALUES ('17', '17', '买家', '5', '2', '2', '0', '', '1388475145');
INSERT INTO `ecs_order_action` VALUES ('18', '18', 'admin', '1', '0', '2', '0', '1111', '1388479330');
INSERT INTO `ecs_order_action` VALUES ('19', '18', 'admin', '1', '3', '2', '0', '', '1388479335');
INSERT INTO `ecs_order_action` VALUES ('20', '18', 'admin', '5', '5', '2', '0', '11', '1388479341');
INSERT INTO `ecs_order_action` VALUES ('21', '18', 'admin', '1', '1', '2', '1', '', '1388479351');
INSERT INTO `ecs_order_action` VALUES ('22', '18', 'admin', '5', '2', '2', '0', '11111', '1388479364');
INSERT INTO `ecs_order_action` VALUES ('23', '16', 'admin', '1', '0', '2', '0', '222', '1388479375');
INSERT INTO `ecs_order_action` VALUES ('24', '16', 'admin', '5', '5', '2', '0', '222', '1388479382');
INSERT INTO `ecs_order_action` VALUES ('25', '16', 'admin', '1', '1', '2', '1', '', '1388479393');
INSERT INTO `ecs_order_action` VALUES ('26', '16', 'admin', '5', '2', '2', '0', '121', '1388479409');
INSERT INTO `ecs_order_action` VALUES ('27', '15', 'admin', '1', '0', '2', '0', '32111', '1388479418');
INSERT INTO `ecs_order_action` VALUES ('28', '15', 'admin', '1', '3', '2', '0', '3333333332', '1388479428');
INSERT INTO `ecs_order_action` VALUES ('29', '15', 'admin', '5', '5', '2', '0', '3333', '1388479434');
INSERT INTO `ecs_order_action` VALUES ('30', '15', 'admin', '1', '1', '2', '1', '', '1388479445');
INSERT INTO `ecs_order_action` VALUES ('31', '15', 'admin', '5', '2', '2', '0', '3222222', '1388479458');
INSERT INTO `ecs_order_action` VALUES ('32', '10', 'admin', '1', '0', '0', '0', '33333333', '1388479472');
INSERT INTO `ecs_order_action` VALUES ('33', '10', 'admin', '1', '0', '2', '0', '33333', '1388479475');
INSERT INTO `ecs_order_action` VALUES ('34', '10', 'admin', '5', '5', '2', '0', '33333333', '1388479482');
INSERT INTO `ecs_order_action` VALUES ('35', '10', 'admin', '1', '1', '2', '1', '2344444444', '1388479495');
INSERT INTO `ecs_order_action` VALUES ('36', '10', 'admin', '5', '2', '2', '0', '3333333', '1388479523');
INSERT INTO `ecs_order_action` VALUES ('37', '3', 'admin', '1', '0', '2', '0', 'eeeee', '1388481820');
INSERT INTO `ecs_order_action` VALUES ('38', '3', 'admin', '5', '5', '2', '0', 'eeee', '1388481830');
INSERT INTO `ecs_order_action` VALUES ('39', '3', 'admin', '1', '1', '2', '1', '', '1388481843');
INSERT INTO `ecs_order_action` VALUES ('40', '3', 'admin', '5', '2', '2', '0', 'eeeeee', '1388481861');

-- ----------------------------
-- Table structure for `ecs_order_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_order_goods`;
CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `market_price` decimal(10,2) NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL default '0',
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_order_goods
-- ----------------------------
INSERT INTO `ecs_order_goods` VALUES ('1', '1', '1', '美式古典	双面描金雕花排骨架床', 'ECS000000', '0', '1', '6008.80', '4009.00', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.515*2.01米 \n', '0', '1', '', '0', '0', '4,9');
INSERT INTO `ecs_order_goods` VALUES ('2', '2', '2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', 'ECS000002', '0', '1', '4296.00', '3580.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('3', '3', '9', '客厅-时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)', '', '0', '2', '10294.80', '10000.00', '', '2', '1', 'package_buy', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('4', '3', '5', '客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）', '', '0', '1', '23068.80', '10000.00', '', '1', '1', 'package_buy', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('5', '3', '19', '不锈钢双水槽 洗菜盆水槽套装76*40CM', 'ECS000019', '0', '2', '336.00', '280.00', '', '2', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('6', '3', '3', '欧式田园	粉红玫瑰立体雕花排骨架床', 'ECS000003', '0', '1', '4296.00', '3580.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('7', '3', '5', '地中海风格 美国进口白杨木双人床', 'ECS000005', '0', '1', '1711.20', '1000.00', '', '2', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('8', '4', '2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', 'ECS000002', '0', '1', '4296.00', '3580.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('9', '5', '3', '欧式田园	粉红玫瑰立体雕花排骨架床', 'ECS000003', '0', '1', '4296.00', '2000.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('10', '6', '18', '分段式吸顶灯 磨砂白玉玻璃 客厅餐厅', 'ECS000018', '0', '1', '1140.00', '950.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('11', '8', '1', '美式古典	双面描金雕花排骨架床', 'ECS000000', '0', '1', '6008.80', '4009.00', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.515*2.01米 \n', '0', '1', '', '0', '0', '4,9');
INSERT INTO `ecs_order_goods` VALUES ('12', '9', '25', '	虹吸式坐厕 连体双档座便器 节水马桶', 'ECS000025', '0', '1', '1195.20', '896.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('13', '10', '2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', 'ECS000002', '0', '1', '4296.00', '3580.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('14', '11', '1', '美式古典	双面描金雕花排骨架床', 'ECS000000', '0', '1', '6008.80', '4009.00', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n', '0', '1', '', '0', '0', '4,8');
INSERT INTO `ecs_order_goods` VALUES ('15', '12', '1', '美式古典	双面描金雕花排骨架床', 'ECS000000', '0', '1', '6008.80', '4009.00', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n', '0', '1', '', '0', '0', '4,8');
INSERT INTO `ecs_order_goods` VALUES ('16', '13', '4', '法式风格	1.8米皮拉扣床 PU发泡雕花床', 'ECS000004', '0', '1', '4318.80', '2800.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('17', '14', '26', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', 'ECS000026', '0', '1', '2028.00', '1500.00', '', '0', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('18', '15', '26', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', 'ECS000026', '0', '1', '2028.00', '1500.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('19', '16', '21', '全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', 'ECS000021', '0', '1', '144.00', '100.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('20', '17', '21', '全铜可360度旋转厨房水龙头 单把单孔冷热水龙头', 'ECS000021', '0', '1', '144.00', '100.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('21', '18', '26', '纯白实木浴室柜 现代方形浴室柜 落地式浴室柜', 'ECS000026', '0', '2', '2028.00', '1500.00', '', '2', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('22', '19', '25', '	虹吸式坐厕 连体双档座便器 节水马桶', 'ECS000025', '0', '1', '1195.20', '996.00', '', '1', '1', '', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('23', '20', '1', '美式古典	双面描金雕花排骨架床', 'ECS000000', '0', '1', '6008.80', '4009.00', '类&emsp;型:地中海1.5米床[10] \n内&emsp;径:1.815*2.01米 \n', '1', '1', '', '0', '0', '4,8');
INSERT INTO `ecs_order_goods` VALUES ('24', '20', '5', '客厅-功能沙发客厅5件套（1+2+3+1茶几+1电视柜）', '', '0', '1', '23068.80', '10000.00', '', '1', '1', 'package_buy', '0', '0', '');
INSERT INTO `ecs_order_goods` VALUES ('25', '20', '2', '欧式田园	1.8米水晶拉扣双人床 水牛头层真皮床', 'ECS000002', '0', '1', '4296.00', '3580.00', '类&emsp;型:地中海1.5米床 \n', '1', '1', '', '0', '0', '10');
INSERT INTO `ecs_order_goods` VALUES ('26', '21', '5', '地中海风格 美国进口白杨木双人床', 'ECS000005', '0', '1', '1711.20', '1000.00', '', '0', '1', '', '0', '0', '');

-- ----------------------------
-- Table structure for `ecs_order_info`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_order_info`;
CREATE TABLE `ecs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_sn` varchar(20) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `country` smallint(5) unsigned NOT NULL default '0',
  `province` smallint(5) unsigned NOT NULL default '0',
  `city` smallint(5) unsigned NOT NULL default '0',
  `district` smallint(5) unsigned NOT NULL default '0',
  `address` varchar(255) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `postscript` varchar(255) NOT NULL default '',
  `shipping_id` tinyint(3) NOT NULL default '0',
  `shipping_name` varchar(120) NOT NULL default '',
  `pay_id` tinyint(3) NOT NULL default '0',
  `pay_name` varchar(120) NOT NULL default '',
  `how_oos` varchar(120) NOT NULL default '',
  `how_surplus` varchar(120) NOT NULL default '',
  `pack_name` varchar(120) NOT NULL default '',
  `card_name` varchar(120) NOT NULL default '',
  `card_message` varchar(255) NOT NULL default '',
  `inv_payee` varchar(120) NOT NULL default '',
  `inv_content` varchar(120) NOT NULL default '',
  `goods_amount` decimal(10,2) NOT NULL default '0.00',
  `shipping_fee` decimal(10,2) NOT NULL default '0.00',
  `insure_fee` decimal(10,2) NOT NULL default '0.00',
  `pay_fee` decimal(10,2) NOT NULL default '0.00',
  `pack_fee` decimal(10,2) NOT NULL default '0.00',
  `card_fee` decimal(10,2) NOT NULL default '0.00',
  `money_paid` decimal(10,2) NOT NULL default '0.00',
  `surplus` decimal(10,2) NOT NULL default '0.00',
  `integral` int(10) unsigned NOT NULL default '0',
  `integral_money` decimal(10,2) NOT NULL default '0.00',
  `bonus` decimal(10,2) NOT NULL default '0.00',
  `order_amount` decimal(10,2) NOT NULL default '0.00',
  `from_ad` smallint(5) NOT NULL default '0',
  `referer` varchar(255) NOT NULL default '',
  `add_time` int(10) unsigned NOT NULL default '0',
  `confirm_time` int(10) unsigned NOT NULL default '0',
  `pay_time` int(10) unsigned NOT NULL default '0',
  `shipping_time` int(10) unsigned NOT NULL default '0',
  `pack_id` tinyint(3) unsigned NOT NULL default '0',
  `card_id` tinyint(3) unsigned NOT NULL default '0',
  `bonus_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(255) NOT NULL default '',
  `extension_code` varchar(30) NOT NULL default '',
  `extension_id` mediumint(8) unsigned NOT NULL default '0',
  `to_buyer` varchar(255) NOT NULL default '',
  `pay_note` varchar(255) NOT NULL default '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL default '0',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `discount` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_order_info
-- ----------------------------
INSERT INTO `ecs_order_info` VALUES ('1', '2013113006960', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '长江路15号', '', '111111111', '', '76374482@qq.com', '', '', '', '1', '顺丰速运', '2', '银行汇款/转帐', '等待所有商品备齐后再发', '', '', '', '', '', '', '4009.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '4024.00', '0', '本站', '1385803767', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('2', '2013120425778', '0', '0', '0', '0', '111111', '1', '25', '321', '2703', '11111111', '', '11111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '3580.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '3595.00', '0', '本站', '1386168793', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('3', '2013120440283', '1', '5', '2', '2', '超级卖家', '1', '2', '52', '508', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '35140.00', '15.00', '0.00', '0.00', '0.00', '0.00', '35155.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1386173345', '1388481820', '1388481820', '1388481843', '0', '0', '0', 'e', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('4', '2013120441851', '1', '0', '0', '0', '超级卖家', '1', '8', '111', '962', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '3580.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '3595.00', '0', '本站', '1386173506', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('5', '2013120589039', '1', '0', '0', '0', '超级卖家', '1', '8', '111', '962', '长江路15号', '', '111111111', '', '', '', '', '', '2', '申通快递', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '2000.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '2015.00', '0', '本站', '1386228284', '0', '0', '0', '0', '0', '0', '', 'group_buy', '3', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('6', '2013120500350', '1', '0', '0', '0', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '950.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '965.00', '0', '本站', '1386228708', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('7', '2013120661257', '0', '3', '0', '0', '', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '0', '', '0', '', '', '', '', '', '', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '管理员添加', '1386318747', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('8', '2013122315156', '1', '0', '0', '0', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '4009.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '100.00', '3914.00', '0', '本站', '1387775981', '0', '0', '0', '0', '0', '1', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('9', '2013122733017', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '', '010-67498277', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '896.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '811.00', '0', '本站', '1388152216', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('10', '2013122722923', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '3580.00', '5.00', '0.00', '0.00', '0.00', '0.00', '3485.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388152546', '1388479472', '1388479475', '1388479495', '0', '0', '0', '32323', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('11', '2013122793991', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '', '010-67498277', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '4009.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '3924.00', '0', '本站', '1388155240', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('12', '2013122729953', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '', '010-67498277', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '4009.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '4024.00', '0', '本站', '1388156000', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('13', '2013122758756', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '', '010-67498277', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '2800.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '2715.00', '0', '本站', '1388156243', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('14', '2013122749611', '0', '0', '0', '0', '超级卖家', '1', '2', '52', '500', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '', '010-67498277', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '1500.00', '15.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '1415.00', '0', '本站', '1388156567', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('15', '2013122784673', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '1500.00', '5.00', '0.00', '0.00', '0.00', '0.00', '1505.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388156700', '1388479418', '1388479418', '1388479445', '0', '0', '0', '322222222', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('16', '2013122775150', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '100.00', '5.00', '0.00', '0.00', '0.00', '0.00', '105.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388156756', '1388479375', '1388479375', '1388479393', '0', '0', '0', '12221', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('17', '2013122780190', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '100.00', '5.00', '0.00', '0.00', '0.00', '0.00', '105.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388156839', '1388474902', '1388474902', '1388474932', '0', '0', '0', '11111111111', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('18', '2013122727106', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '3000.00', '5.00', '0.00', '0.00', '0.00', '0.00', '3005.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388156881', '1388479330', '1388479330', '1388479351', '0', '0', '0', '12222222222', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('19', '2013122731476', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '996.00', '5.00', '0.00', '0.00', '0.00', '0.00', '901.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388157011', '1388397058', '1388397064', '1388397103', '0', '0', '0', '11111111', '', '0', '', '', '0', '', '0.00', '0', '0', '100.00');
INSERT INTO `ecs_order_info` VALUES ('20', '2013123135238', '1', '5', '2', '2', '超级卖家', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '17589.00', '5.00', '0.00', '0.00', '0.00', '0.00', '17594.00', '0.00', '0', '0.00', '0.00', '0.00', '0', '本站', '1388468638', '1388468662', '1388468671', '1388468702', '0', '0', '0', '1111111', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');
INSERT INTO `ecs_order_info` VALUES ('21', '2014030441201', '2', '0', '0', '0', '发挥好', '1', '6', '84', '773', '发挥好哈哈哈', '', '15013475862', '', '', '', '', '', '1', '顺丰速运', '1', '支付宝', '等待所有商品备齐后再发', '', '', '', '', '', '', '1000.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '1005.00', '0', '', '1393912281', '0', '0', '0', '0', '0', '0', '', '', '0', '', '', '0', '', '0.00', '0', '0', '0.00');

-- ----------------------------
-- Table structure for `ecs_pack`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_pack`;
CREATE TABLE `ecs_pack` (
  `pack_id` tinyint(3) unsigned NOT NULL auto_increment,
  `pack_name` varchar(120) NOT NULL default '',
  `pack_img` varchar(255) NOT NULL default '',
  `pack_fee` decimal(6,2) unsigned NOT NULL default '0.00',
  `free_money` smallint(5) unsigned NOT NULL default '0',
  `pack_desc` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`pack_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_pack
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_package_goods`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_package_goods`;
CREATE TABLE `ecs_package_goods` (
  `package_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`package_id`,`goods_id`,`admin_id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_package_goods
-- ----------------------------
INSERT INTO `ecs_package_goods` VALUES ('5', '1', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('5', '2', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('5', '3', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('5', '4', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('5', '5', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('5', '6', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('6', '3', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('6', '4', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('6', '5', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('6', '6', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('7', '6', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('7', '5', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('8', '4', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('8', '5', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('8', '3', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('9', '1', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('9', '2', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('10', '7', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('10', '8', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('10', '9', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('10', '10', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('11', '11', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('11', '12', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('11', '13', '0', '1', '1');
INSERT INTO `ecs_package_goods` VALUES ('11', '14', '0', '1', '1');

-- ----------------------------
-- Table structure for `ecs_payment`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_payment`;
CREATE TABLE `ecs_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL auto_increment,
  `pay_code` varchar(20) NOT NULL default '',
  `pay_name` varchar(120) NOT NULL default '',
  `pay_fee` varchar(10) NOT NULL default '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL default '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `is_cod` tinyint(1) unsigned NOT NULL default '0',
  `is_online` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_payment
-- ----------------------------
INSERT INTO `ecs_payment` VALUES ('1', 'alipay', '支付宝', '0', '支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color=\"red\"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=alipay\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>', '0', 'a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"0\";}}', '1', '0', '1');
INSERT INTO `ecs_payment` VALUES ('2', 'bank', '银行汇款/转帐', '0', '银行名称\r\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\r\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。', '0', 'a:0:{}', '1', '0', '0');

-- ----------------------------
-- Table structure for `ecs_pay_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_pay_log`;
CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL default '0',
  `is_paid` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_pay_log
-- ----------------------------
INSERT INTO `ecs_pay_log` VALUES ('1', '1', '4024.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('2', '2', '3595.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('3', '3', '35155.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('4', '4', '3595.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('5', '5', '2015.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('6', '6', '965.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('7', '7', '0.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('8', '8', '3914.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('9', '9', '811.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('10', '10', '3485.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('11', '11', '3924.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('12', '12', '4024.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('13', '13', '2715.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('14', '14', '1415.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('15', '15', '1505.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('16', '16', '105.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('17', '17', '105.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('18', '18', '3005.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('19', '19', '901.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('20', '20', '17594.00', '0', '0');
INSERT INTO `ecs_pay_log` VALUES ('21', '21', '1005.00', '0', '0');

-- ----------------------------
-- Table structure for `ecs_plugins`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_plugins`;
CREATE TABLE `ecs_plugins` (
  `code` varchar(30) NOT NULL default '',
  `version` varchar(10) NOT NULL default '',
  `library` varchar(255) NOT NULL default '',
  `assign` tinyint(1) unsigned NOT NULL default '0',
  `install_date` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_plugins
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_products`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_products`;
CREATE TABLE `ecs_products` (
  `product_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_attr` varchar(50) default NULL,
  `product_sn` varchar(60) default NULL,
  `product_number` smallint(5) unsigned default '0',
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_products
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_region`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_region`;
CREATE TABLE `ecs_region` (
  `region_id` smallint(5) unsigned NOT NULL auto_increment,
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `region_name` varchar(120) NOT NULL default '',
  `region_type` tinyint(1) NOT NULL default '2',
  `agency_id` smallint(5) unsigned NOT NULL default '0',
  `pin_yin` varchar(100) default NULL,
  `is_top` smallint(5) default '0',
  `is_show` smallint(5) default '0',
  PRIMARY KEY  (`region_id`),
  KEY `parent_id` (`parent_id`),
  KEY `region_type` (`region_type`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3409 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_region
-- ----------------------------
INSERT INTO `ecs_region` VALUES ('1', '0', '中国', '0', '0', 'z', '0', '0');
INSERT INTO `ecs_region` VALUES ('2', '1', '北京', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3', '1', '安徽', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('4', '1', '福建', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('5', '1', '甘肃', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('6', '1', '广东', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('7', '1', '广西', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('8', '1', '贵州', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('9', '1', '海南', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('10', '1', '河北', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('11', '1', '河南', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('12', '1', '黑龙江', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('13', '1', '湖北', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('14', '1', '湖南', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('15', '1', '吉林', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('16', '1', '江苏', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('17', '1', '江西', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('18', '1', '辽宁', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('19', '1', '内蒙古', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('20', '1', '宁夏', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('21', '1', '青海', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('22', '1', '山东', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('23', '1', '山西', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('24', '1', '陕西', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('25', '1', '上海', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('26', '1', '四川', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('27', '1', '天津', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('28', '1', '西藏', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('29', '1', '新疆', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('30', '1', '云南', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('31', '1', '浙江', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('32', '1', '重庆', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('33', '1', '香港', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('34', '1', '澳门', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('35', '1', '台湾', '1', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('36', '3', '安庆', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('37', '3', '蚌埠', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('38', '3', '巢湖', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('39', '3', '池州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('40', '3', '滁州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('41', '3', '阜阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('42', '3', '淮北', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('43', '3', '淮南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('44', '3', '黄山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('45', '3', '六安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('46', '3', '马鞍山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('47', '3', '宿州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('48', '3', '铜陵', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('49', '3', '芜湖', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('50', '3', '宣城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('51', '3', '亳州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('52', '2', '北京', '2', '0', 'beijing', '1', '1');
INSERT INTO `ecs_region` VALUES ('53', '4', '福州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('54', '4', '龙岩', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('55', '4', '南平', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('56', '4', '宁德', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('57', '4', '莆田', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('58', '4', '泉州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('59', '4', '三明', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('60', '4', '厦门', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('61', '4', '漳州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('62', '5', '兰州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('63', '5', '白银', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('64', '5', '定西', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('65', '5', '甘南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('66', '5', '嘉峪关', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('67', '5', '金昌', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('68', '5', '酒泉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('69', '5', '临夏', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('70', '5', '陇南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('71', '5', '平凉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('72', '5', '庆阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('73', '5', '天水', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('74', '5', '武威', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('75', '5', '张掖', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('76', '6', '广州', '2', '0', 'guangzhou', '1', '1');
INSERT INTO `ecs_region` VALUES ('77', '6', '深圳', '2', '0', 'shenzhen', '1', '1');
INSERT INTO `ecs_region` VALUES ('78', '6', '潮州', '2', '0', 'q', '0', '1');
INSERT INTO `ecs_region` VALUES ('79', '6', '东莞', '2', '0', 'd', '0', '1');
INSERT INTO `ecs_region` VALUES ('80', '6', '佛山', '2', '0', 'f', '0', '1');
INSERT INTO `ecs_region` VALUES ('81', '6', '河源', '2', '0', 'h', '0', '1');
INSERT INTO `ecs_region` VALUES ('82', '6', '惠州', '2', '0', 'h', '0', '1');
INSERT INTO `ecs_region` VALUES ('83', '6', '江门', '2', '0', 'j', '0', '1');
INSERT INTO `ecs_region` VALUES ('84', '6', '揭阳', '2', '0', 'j', '0', '1');
INSERT INTO `ecs_region` VALUES ('85', '6', '茂名', '2', '0', 'm', '0', '1');
INSERT INTO `ecs_region` VALUES ('86', '6', '梅州', '2', '0', 'm', '0', '1');
INSERT INTO `ecs_region` VALUES ('87', '6', '清远', '2', '0', 'q', '0', '1');
INSERT INTO `ecs_region` VALUES ('88', '6', '汕头', '2', '0', 's', '0', '1');
INSERT INTO `ecs_region` VALUES ('89', '6', '汕尾', '2', '0', 's', '0', '1');
INSERT INTO `ecs_region` VALUES ('90', '6', '韶关', '2', '0', 's', '0', '1');
INSERT INTO `ecs_region` VALUES ('91', '6', '阳江', '2', '0', 'y', '0', '1');
INSERT INTO `ecs_region` VALUES ('92', '6', '云浮', '2', '0', 'y', '0', '1');
INSERT INTO `ecs_region` VALUES ('93', '6', '湛江', '2', '0', 'j', '0', '1');
INSERT INTO `ecs_region` VALUES ('94', '6', '肇庆', '2', '0', 'q', '0', '1');
INSERT INTO `ecs_region` VALUES ('95', '6', '中山', '2', '0', 'z', '0', '1');
INSERT INTO `ecs_region` VALUES ('96', '6', '珠海', '2', '0', 'z', '0', '1');
INSERT INTO `ecs_region` VALUES ('97', '7', '南宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('98', '7', '桂林', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('99', '7', '百色', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('100', '7', '北海', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('101', '7', '崇左', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('102', '7', '防城港', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('103', '7', '贵港', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('104', '7', '河池', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('105', '7', '贺州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('106', '7', '来宾', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('107', '7', '柳州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('108', '7', '钦州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('109', '7', '梧州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('110', '7', '玉林', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('111', '8', '贵阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('112', '8', '安顺', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('113', '8', '毕节', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('114', '8', '六盘水', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('115', '8', '黔东南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('116', '8', '黔南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('117', '8', '黔西南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('118', '8', '铜仁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('119', '8', '遵义', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('120', '9', '海口', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('121', '9', '三亚', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('122', '9', '白沙', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('123', '9', '保亭', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('124', '9', '昌江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('125', '9', '澄迈县', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('126', '9', '定安县', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('127', '9', '东方', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('128', '9', '乐东', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('129', '9', '临高县', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('130', '9', '陵水', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('131', '9', '琼海', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('132', '9', '琼中', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('133', '9', '屯昌县', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('134', '9', '万宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('135', '9', '文昌', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('136', '9', '五指山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('137', '9', '儋州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('138', '10', '石家庄', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('139', '10', '保定', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('140', '10', '沧州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('141', '10', '承德', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('142', '10', '邯郸', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('143', '10', '衡水', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('144', '10', '廊坊', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('145', '10', '秦皇岛', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('146', '10', '唐山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('147', '10', '邢台', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('148', '10', '张家口', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('149', '11', '郑州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('150', '11', '洛阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('151', '11', '开封', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('152', '11', '安阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('153', '11', '鹤壁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('154', '11', '济源', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('155', '11', '焦作', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('156', '11', '南阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('157', '11', '平顶山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('158', '11', '三门峡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('159', '11', '商丘', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('160', '11', '新乡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('161', '11', '信阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('162', '11', '许昌', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('163', '11', '周口', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('164', '11', '驻马店', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('165', '11', '漯河', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('166', '11', '濮阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('167', '12', '哈尔滨', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('168', '12', '大庆', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('169', '12', '大兴安岭', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('170', '12', '鹤岗', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('171', '12', '黑河', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('172', '12', '鸡西', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('173', '12', '佳木斯', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('174', '12', '牡丹江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('175', '12', '七台河', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('176', '12', '齐齐哈尔', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('177', '12', '双鸭山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('178', '12', '绥化', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('179', '12', '伊春', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('180', '13', '武汉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('181', '13', '仙桃', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('182', '13', '鄂州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('183', '13', '黄冈', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('184', '13', '黄石', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('185', '13', '荆门', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('186', '13', '荆州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('187', '13', '潜江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('188', '13', '神农架林区', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('189', '13', '十堰', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('190', '13', '随州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('191', '13', '天门', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('192', '13', '咸宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('193', '13', '襄樊', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('194', '13', '孝感', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('195', '13', '宜昌', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('196', '13', '恩施', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('197', '14', '长沙', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('198', '14', '张家界', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('199', '14', '常德', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('200', '14', '郴州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('201', '14', '衡阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('202', '14', '怀化', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('203', '14', '娄底', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('204', '14', '邵阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('205', '14', '湘潭', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('206', '14', '湘西', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('207', '14', '益阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('208', '14', '永州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('209', '14', '岳阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('210', '14', '株洲', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('211', '15', '长春', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('212', '15', '吉林', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('213', '15', '白城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('214', '15', '白山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('215', '15', '辽源', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('216', '15', '四平', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('217', '15', '松原', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('218', '15', '通化', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('219', '15', '延边', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('220', '16', '南京', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('221', '16', '苏州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('222', '16', '无锡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('223', '16', '常州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('224', '16', '淮安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('225', '16', '连云港', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('226', '16', '南通', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('227', '16', '宿迁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('228', '16', '泰州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('229', '16', '徐州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('230', '16', '盐城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('231', '16', '扬州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('232', '16', '镇江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('233', '17', '南昌', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('234', '17', '抚州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('235', '17', '赣州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('236', '17', '吉安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('237', '17', '景德镇', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('238', '17', '九江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('239', '17', '萍乡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('240', '17', '上饶', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('241', '17', '新余', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('242', '17', '宜春', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('243', '17', '鹰潭', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('244', '18', '沈阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('245', '18', '大连', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('246', '18', '鞍山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('247', '18', '本溪', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('248', '18', '朝阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('249', '18', '丹东', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('250', '18', '抚顺', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('251', '18', '阜新', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('252', '18', '葫芦岛', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('253', '18', '锦州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('254', '18', '辽阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('255', '18', '盘锦', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('256', '18', '铁岭', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('257', '18', '营口', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('258', '19', '呼和浩特', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('259', '19', '阿拉善盟', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('260', '19', '巴彦淖尔盟', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('261', '19', '包头', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('262', '19', '赤峰', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('263', '19', '鄂尔多斯', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('264', '19', '呼伦贝尔', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('265', '19', '通辽', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('266', '19', '乌海', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('267', '19', '乌兰察布市', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('268', '19', '锡林郭勒盟', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('269', '19', '兴安盟', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('270', '20', '银川', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('271', '20', '固原', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('272', '20', '石嘴山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('273', '20', '吴忠', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('274', '20', '中卫', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('275', '21', '西宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('276', '21', '果洛', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('277', '21', '海北', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('278', '21', '海东', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('279', '21', '海南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('280', '21', '海西', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('281', '21', '黄南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('282', '21', '玉树', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('283', '22', '济南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('284', '22', '青岛', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('285', '22', '滨州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('286', '22', '德州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('287', '22', '东营', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('288', '22', '菏泽', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('289', '22', '济宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('290', '22', '莱芜', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('291', '22', '聊城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('292', '22', '临沂', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('293', '22', '日照', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('294', '22', '泰安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('295', '22', '威海', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('296', '22', '潍坊', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('297', '22', '烟台', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('298', '22', '枣庄', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('299', '22', '淄博', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('300', '23', '太原', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('301', '23', '长治', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('302', '23', '大同', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('303', '23', '晋城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('304', '23', '晋中', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('305', '23', '临汾', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('306', '23', '吕梁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('307', '23', '朔州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('308', '23', '忻州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('309', '23', '阳泉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('310', '23', '运城', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('311', '24', '西安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('312', '24', '安康', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('313', '24', '宝鸡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('314', '24', '汉中', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('315', '24', '商洛', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('316', '24', '铜川', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('317', '24', '渭南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('318', '24', '咸阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('319', '24', '延安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('320', '24', '榆林', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('321', '25', '上海', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('322', '26', '成都', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('323', '26', '绵阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('324', '26', '阿坝', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('325', '26', '巴中', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('326', '26', '达州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('327', '26', '德阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('328', '26', '甘孜', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('329', '26', '广安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('330', '26', '广元', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('331', '26', '乐山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('332', '26', '凉山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('333', '26', '眉山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('334', '26', '南充', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('335', '26', '内江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('336', '26', '攀枝花', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('337', '26', '遂宁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('338', '26', '雅安', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('339', '26', '宜宾', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('340', '26', '资阳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('341', '26', '自贡', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('342', '26', '泸州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('343', '27', '天津', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('344', '28', '拉萨', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('345', '28', '阿里', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('346', '28', '昌都', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('347', '28', '林芝', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('348', '28', '那曲', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('349', '28', '日喀则', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('350', '28', '山南', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('351', '29', '乌鲁木齐', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('352', '29', '阿克苏', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('353', '29', '阿拉尔', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('354', '29', '巴音郭楞', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('355', '29', '博尔塔拉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('356', '29', '昌吉', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('357', '29', '哈密', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('358', '29', '和田', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('359', '29', '喀什', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('360', '29', '克拉玛依', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('361', '29', '克孜勒苏', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('362', '29', '石河子', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('363', '29', '图木舒克', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('364', '29', '吐鲁番', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('365', '29', '五家渠', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('366', '29', '伊犁', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('367', '30', '昆明', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('368', '30', '怒江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('369', '30', '普洱', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('370', '30', '丽江', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('371', '30', '保山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('372', '30', '楚雄', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('373', '30', '大理', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('374', '30', '德宏', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('375', '30', '迪庆', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('376', '30', '红河', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('377', '30', '临沧', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('378', '30', '曲靖', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('379', '30', '文山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('380', '30', '西双版纳', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('381', '30', '玉溪', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('382', '30', '昭通', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('383', '31', '杭州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('384', '31', '湖州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('385', '31', '嘉兴', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('386', '31', '金华', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('387', '31', '丽水', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('388', '31', '宁波', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('389', '31', '绍兴', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('390', '31', '台州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('391', '31', '温州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('392', '31', '舟山', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('393', '31', '衢州', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('394', '32', '重庆', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('395', '33', '香港', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('396', '34', '澳门', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('397', '35', '台湾', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('398', '36', '迎江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('399', '36', '大观区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('400', '36', '宜秀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('401', '36', '桐城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('402', '36', '怀宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('403', '36', '枞阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('404', '36', '潜山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('405', '36', '太湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('406', '36', '宿松县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('407', '36', '望江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('408', '36', '岳西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('409', '37', '中市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('410', '37', '东市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('411', '37', '西市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('412', '37', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('413', '37', '怀远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('414', '37', '五河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('415', '37', '固镇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('416', '38', '居巢区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('417', '38', '庐江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('418', '38', '无为县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('419', '38', '含山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('420', '38', '和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('421', '39', '贵池区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('422', '39', '东至县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('423', '39', '石台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('424', '39', '青阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('425', '40', '琅琊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('426', '40', '南谯区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('427', '40', '天长市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('428', '40', '明光市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('429', '40', '来安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('430', '40', '全椒县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('431', '40', '定远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('432', '40', '凤阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('433', '41', '蚌山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('434', '41', '龙子湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('435', '41', '禹会区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('436', '41', '淮上区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('437', '41', '颍州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('438', '41', '颍东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('439', '41', '颍泉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('440', '41', '界首市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('441', '41', '临泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('442', '41', '太和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('443', '41', '阜南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('444', '41', '颖上县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('445', '42', '相山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('446', '42', '杜集区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('447', '42', '烈山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('448', '42', '濉溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('449', '43', '田家庵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('450', '43', '大通区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('451', '43', '谢家集区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('452', '43', '八公山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('453', '43', '潘集区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('454', '43', '凤台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('455', '44', '屯溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('456', '44', '黄山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('457', '44', '徽州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('458', '44', '歙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('459', '44', '休宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('460', '44', '黟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('461', '44', '祁门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('462', '45', '金安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('463', '45', '裕安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('464', '45', '寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('465', '45', '霍邱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('466', '45', '舒城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('467', '45', '金寨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('468', '45', '霍山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('469', '46', '雨山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('470', '46', '花山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('471', '46', '金家庄区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('472', '46', '当涂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('473', '47', '埇桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('474', '47', '砀山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('475', '47', '萧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('476', '47', '灵璧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('477', '47', '泗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('478', '48', '铜官山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('479', '48', '狮子山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('480', '48', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('481', '48', '铜陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('482', '49', '镜湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('483', '49', '弋江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('484', '49', '鸠江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('485', '49', '三山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('486', '49', '芜湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('487', '49', '繁昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('488', '49', '南陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('489', '50', '宣州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('490', '50', '宁国市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('491', '50', '郎溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('492', '50', '广德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('493', '50', '泾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('494', '50', '绩溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('495', '50', '旌德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('496', '51', '涡阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('497', '51', '蒙城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('498', '51', '利辛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('499', '51', '谯城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('500', '52', '东城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('501', '52', '西城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('502', '52', '海淀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('503', '52', '朝阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('504', '52', '崇文区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('505', '52', '宣武区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('506', '52', '丰台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('507', '52', '石景山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('508', '52', '房山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('509', '52', '门头沟区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('510', '52', '通州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('511', '52', '顺义区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('512', '52', '昌平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('513', '52', '怀柔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('514', '52', '平谷区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('515', '52', '大兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('516', '52', '密云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('517', '52', '延庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('518', '53', '鼓楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('519', '53', '台江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('520', '53', '仓山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('521', '53', '马尾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('522', '53', '晋安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('523', '53', '福清市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('524', '53', '长乐市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('525', '53', '闽侯县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('526', '53', '连江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('527', '53', '罗源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('528', '53', '闽清县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('529', '53', '永泰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('530', '53', '平潭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('531', '54', '新罗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('532', '54', '漳平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('533', '54', '长汀县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('534', '54', '永定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('535', '54', '上杭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('536', '54', '武平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('537', '54', '连城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('538', '55', '延平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('539', '55', '邵武市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('540', '55', '武夷山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('541', '55', '建瓯市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('542', '55', '建阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('543', '55', '顺昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('544', '55', '浦城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('545', '55', '光泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('546', '55', '松溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('547', '55', '政和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('548', '56', '蕉城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('549', '56', '福安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('550', '56', '福鼎市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('551', '56', '霞浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('552', '56', '古田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('553', '56', '屏南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('554', '56', '寿宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('555', '56', '周宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('556', '56', '柘荣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('557', '57', '城厢区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('558', '57', '涵江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('559', '57', '荔城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('560', '57', '秀屿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('561', '57', '仙游县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('562', '58', '鲤城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('563', '58', '丰泽区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('564', '58', '洛江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('565', '58', '清濛开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('566', '58', '泉港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('567', '58', '石狮市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('568', '58', '晋江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('569', '58', '南安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('570', '58', '惠安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('571', '58', '安溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('572', '58', '永春县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('573', '58', '德化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('574', '58', '金门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('575', '59', '梅列区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('576', '59', '三元区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('577', '59', '永安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('578', '59', '明溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('579', '59', '清流县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('580', '59', '宁化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('581', '59', '大田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('582', '59', '尤溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('583', '59', '沙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('584', '59', '将乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('585', '59', '泰宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('586', '59', '建宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('587', '60', '思明区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('588', '60', '海沧区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('589', '60', '湖里区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('590', '60', '集美区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('591', '60', '同安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('592', '60', '翔安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('593', '61', '芗城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('594', '61', '龙文区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('595', '61', '龙海市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('596', '61', '云霄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('597', '61', '漳浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('598', '61', '诏安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('599', '61', '长泰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('600', '61', '东山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('601', '61', '南靖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('602', '61', '平和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('603', '61', '华安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('604', '62', '皋兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('605', '62', '城关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('606', '62', '七里河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('607', '62', '西固区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('608', '62', '安宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('609', '62', '红古区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('610', '62', '永登县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('611', '62', '榆中县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('612', '63', '白银区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('613', '63', '平川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('614', '63', '会宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('615', '63', '景泰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('616', '63', '靖远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('617', '64', '临洮县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('618', '64', '陇西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('619', '64', '通渭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('620', '64', '渭源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('621', '64', '漳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('622', '64', '岷县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('623', '64', '安定区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('624', '64', '安定区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('625', '65', '合作市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('626', '65', '临潭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('627', '65', '卓尼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('628', '65', '舟曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('629', '65', '迭部县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('630', '65', '玛曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('631', '65', '碌曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('632', '65', '夏河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('633', '66', '嘉峪关市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('634', '67', '金川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('635', '67', '永昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('636', '68', '肃州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('637', '68', '玉门市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('638', '68', '敦煌市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('639', '68', '金塔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('640', '68', '瓜州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('641', '68', '肃北', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('642', '68', '阿克塞', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('643', '69', '临夏市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('644', '69', '临夏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('645', '69', '康乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('646', '69', '永靖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('647', '69', '广河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('648', '69', '和政县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('649', '69', '东乡族自治县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('650', '69', '积石山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('651', '70', '成县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('652', '70', '徽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('653', '70', '康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('654', '70', '礼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('655', '70', '两当县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('656', '70', '文县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('657', '70', '西和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('658', '70', '宕昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('659', '70', '武都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('660', '71', '崇信县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('661', '71', '华亭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('662', '71', '静宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('663', '71', '灵台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('664', '71', '崆峒区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('665', '71', '庄浪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('666', '71', '泾川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('667', '72', '合水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('668', '72', '华池县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('669', '72', '环县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('670', '72', '宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('671', '72', '庆城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('672', '72', '西峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('673', '72', '镇原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('674', '72', '正宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('675', '73', '甘谷县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('676', '73', '秦安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('677', '73', '清水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('678', '73', '秦州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('679', '73', '麦积区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('680', '73', '武山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('681', '73', '张家川', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('682', '74', '古浪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('683', '74', '民勤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('684', '74', '天祝', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('685', '74', '凉州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('686', '75', '高台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('687', '75', '临泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('688', '75', '民乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('689', '75', '山丹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('690', '75', '肃南', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('691', '75', '甘州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('692', '76', '从化市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('693', '76', '天河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('694', '76', '东山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('695', '76', '白云区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('696', '76', '海珠区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('697', '76', '荔湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('698', '76', '越秀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('699', '76', '黄埔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('700', '76', '番禺区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('701', '76', '花都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('702', '76', '增城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('703', '76', '从化区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('704', '76', '市郊', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('705', '77', '福田区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('706', '77', '罗湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('707', '77', '南山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('708', '77', '宝安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('709', '77', '龙岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('710', '77', '盐田区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('711', '78', '湘桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('712', '78', '潮安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('713', '78', '饶平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('714', '79', '南城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('715', '79', '东城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('716', '79', '万江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('717', '79', '莞城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('718', '79', '石龙镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('719', '79', '虎门镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('720', '79', '麻涌镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('721', '79', '道滘镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('722', '79', '石碣镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('723', '79', '沙田镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('724', '79', '望牛墩镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('725', '79', '洪梅镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('726', '79', '茶山镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('727', '79', '寮步镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('728', '79', '大岭山镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('729', '79', '大朗镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('730', '79', '黄江镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('731', '79', '樟木头', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('732', '79', '凤岗镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('733', '79', '塘厦镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('734', '79', '谢岗镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('735', '79', '厚街镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('736', '79', '清溪镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('737', '79', '常平镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('738', '79', '桥头镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('739', '79', '横沥镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('740', '79', '东坑镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('741', '79', '企石镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('742', '79', '石排镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('743', '79', '长安镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('744', '79', '中堂镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('745', '79', '高埗镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('746', '80', '禅城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('747', '80', '南海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('748', '80', '顺德区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('749', '80', '三水区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('750', '80', '高明区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('751', '81', '东源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('752', '81', '和平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('753', '81', '源城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('754', '81', '连平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('755', '81', '龙川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('756', '81', '紫金县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('757', '82', '惠阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('758', '82', '惠城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('759', '82', '大亚湾', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('760', '82', '博罗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('761', '82', '惠东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('762', '82', '龙门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('763', '83', '江海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('764', '83', '蓬江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('765', '83', '新会区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('766', '83', '台山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('767', '83', '开平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('768', '83', '鹤山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('769', '83', '恩平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('770', '84', '榕城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('771', '84', '普宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('772', '84', '揭东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('773', '84', '揭西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('774', '84', '惠来县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('775', '85', '茂南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('776', '85', '茂港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('777', '85', '高州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('778', '85', '化州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('779', '85', '信宜市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('780', '85', '电白县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('781', '86', '梅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('782', '86', '梅江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('783', '86', '兴宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('784', '86', '大埔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('785', '86', '丰顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('786', '86', '五华县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('787', '86', '平远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('788', '86', '蕉岭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('789', '87', '清城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('790', '87', '英德市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('791', '87', '连州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('792', '87', '佛冈县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('793', '87', '阳山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('794', '87', '清新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('795', '87', '连山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('796', '87', '连南', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('797', '88', '南澳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('798', '88', '潮阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('799', '88', '澄海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('800', '88', '龙湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('801', '88', '金平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('802', '88', '濠江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('803', '88', '潮南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('804', '89', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('805', '89', '陆丰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('806', '89', '海丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('807', '89', '陆河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('808', '90', '曲江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('809', '90', '浈江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('810', '90', '武江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('811', '90', '曲江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('812', '90', '乐昌市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('813', '90', '南雄市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('814', '90', '始兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('815', '90', '仁化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('816', '90', '翁源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('817', '90', '新丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('818', '90', '乳源', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('819', '91', '江城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('820', '91', '阳春市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('821', '91', '阳西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('822', '91', '阳东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('823', '92', '云城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('824', '92', '罗定市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('825', '92', '新兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('826', '92', '郁南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('827', '92', '云安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('828', '93', '赤坎区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('829', '93', '霞山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('830', '93', '坡头区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('831', '93', '麻章区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('832', '93', '廉江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('833', '93', '雷州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('834', '93', '吴川市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('835', '93', '遂溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('836', '93', '徐闻县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('837', '94', '肇庆市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('838', '94', '高要市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('839', '94', '四会市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('840', '94', '广宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('841', '94', '怀集县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('842', '94', '封开县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('843', '94', '德庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('844', '95', '石岐街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('845', '95', '东区街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('846', '95', '西区街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('847', '95', '环城街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('848', '95', '中山港街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('849', '95', '五桂山街道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('850', '96', '香洲区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('851', '96', '斗门区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('852', '96', '金湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('853', '97', '邕宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('854', '97', '青秀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('855', '97', '兴宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('856', '97', '良庆区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('857', '97', '西乡塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('858', '97', '江南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('859', '97', '武鸣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('860', '97', '隆安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('861', '97', '马山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('862', '97', '上林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('863', '97', '宾阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('864', '97', '横县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('865', '98', '秀峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('866', '98', '叠彩区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('867', '98', '象山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('868', '98', '七星区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('869', '98', '雁山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('870', '98', '阳朔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('871', '98', '临桂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('872', '98', '灵川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('873', '98', '全州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('874', '98', '平乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('875', '98', '兴安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('876', '98', '灌阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('877', '98', '荔浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('878', '98', '资源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('879', '98', '永福县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('880', '98', '龙胜', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('881', '98', '恭城', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('882', '99', '右江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('883', '99', '凌云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('884', '99', '平果县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('885', '99', '西林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('886', '99', '乐业县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('887', '99', '德保县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('888', '99', '田林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('889', '99', '田阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('890', '99', '靖西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('891', '99', '田东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('892', '99', '那坡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('893', '99', '隆林', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('894', '100', '海城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('895', '100', '银海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('896', '100', '铁山港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('897', '100', '合浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('898', '101', '江州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('899', '101', '凭祥市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('900', '101', '宁明县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('901', '101', '扶绥县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('902', '101', '龙州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('903', '101', '大新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('904', '101', '天等县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('905', '102', '港口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('906', '102', '防城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('907', '102', '东兴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('908', '102', '上思县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('909', '103', '港北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('910', '103', '港南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('911', '103', '覃塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('912', '103', '桂平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('913', '103', '平南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('914', '104', '金城江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('915', '104', '宜州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('916', '104', '天峨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('917', '104', '凤山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('918', '104', '南丹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('919', '104', '东兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('920', '104', '都安', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('921', '104', '罗城', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('922', '104', '巴马', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('923', '104', '环江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('924', '104', '大化', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('925', '105', '八步区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('926', '105', '钟山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('927', '105', '昭平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('928', '105', '富川', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('929', '106', '兴宾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('930', '106', '合山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('931', '106', '象州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('932', '106', '武宣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('933', '106', '忻城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('934', '106', '金秀', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('935', '107', '城中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('936', '107', '鱼峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('937', '107', '柳北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('938', '107', '柳南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('939', '107', '柳江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('940', '107', '柳城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('941', '107', '鹿寨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('942', '107', '融安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('943', '107', '融水', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('944', '107', '三江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('945', '108', '钦南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('946', '108', '钦北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('947', '108', '灵山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('948', '108', '浦北县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('949', '109', '万秀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('950', '109', '蝶山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('951', '109', '长洲区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('952', '109', '岑溪市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('953', '109', '苍梧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('954', '109', '藤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('955', '109', '蒙山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('956', '110', '玉州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('957', '110', '北流市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('958', '110', '容县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('959', '110', '陆川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('960', '110', '博白县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('961', '110', '兴业县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('962', '111', '南明区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('963', '111', '云岩区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('964', '111', '花溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('965', '111', '乌当区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('966', '111', '白云区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('967', '111', '小河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('968', '111', '金阳新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('969', '111', '新天园区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('970', '111', '清镇市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('971', '111', '开阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('972', '111', '修文县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('973', '111', '息烽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('974', '112', '西秀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('975', '112', '关岭', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('976', '112', '镇宁', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('977', '112', '紫云', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('978', '112', '平坝县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('979', '112', '普定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('980', '113', '毕节市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('981', '113', '大方县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('982', '113', '黔西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('983', '113', '金沙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('984', '113', '织金县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('985', '113', '纳雍县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('986', '113', '赫章县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('987', '113', '威宁', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('988', '114', '钟山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('989', '114', '六枝特区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('990', '114', '水城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('991', '114', '盘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('992', '115', '凯里市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('993', '115', '黄平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('994', '115', '施秉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('995', '115', '三穗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('996', '115', '镇远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('997', '115', '岑巩县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('998', '115', '天柱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('999', '115', '锦屏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1000', '115', '剑河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1001', '115', '台江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1002', '115', '黎平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1003', '115', '榕江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1004', '115', '从江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1005', '115', '雷山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1006', '115', '麻江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1007', '115', '丹寨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1008', '116', '都匀市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1009', '116', '福泉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1010', '116', '荔波县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1011', '116', '贵定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1012', '116', '瓮安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1013', '116', '独山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1014', '116', '平塘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1015', '116', '罗甸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1016', '116', '长顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1017', '116', '龙里县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1018', '116', '惠水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1019', '116', '三都', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1020', '117', '兴义市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1021', '117', '兴仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1022', '117', '普安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1023', '117', '晴隆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1024', '117', '贞丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1025', '117', '望谟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1026', '117', '册亨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1027', '117', '安龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1028', '118', '铜仁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1029', '118', '江口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1030', '118', '石阡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1031', '118', '思南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1032', '118', '德江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1033', '118', '玉屏', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1034', '118', '印江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1035', '118', '沿河', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1036', '118', '松桃', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1037', '118', '万山特区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1038', '119', '红花岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1039', '119', '务川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1040', '119', '道真县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1041', '119', '汇川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1042', '119', '赤水市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1043', '119', '仁怀市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1044', '119', '遵义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1045', '119', '桐梓县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1046', '119', '绥阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1047', '119', '正安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1048', '119', '凤冈县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1049', '119', '湄潭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1050', '119', '余庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1051', '119', '习水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1052', '119', '道真', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1053', '119', '务川', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1054', '120', '秀英区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1055', '120', '龙华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1056', '120', '琼山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1057', '120', '美兰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1058', '137', '市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1059', '137', '洋浦开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1060', '137', '那大镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1061', '137', '王五镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1062', '137', '雅星镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1063', '137', '大成镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1064', '137', '中和镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1065', '137', '峨蔓镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1066', '137', '南丰镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1067', '137', '白马井镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1068', '137', '兰洋镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1069', '137', '和庆镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1070', '137', '海头镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1071', '137', '排浦镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1072', '137', '东成镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1073', '137', '光村镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1074', '137', '木棠镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1075', '137', '新州镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1076', '137', '三都镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1077', '137', '其他', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1078', '138', '长安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1079', '138', '桥东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1080', '138', '桥西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1081', '138', '新华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1082', '138', '裕华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1083', '138', '井陉矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1084', '138', '高新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1085', '138', '辛集市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1086', '138', '藁城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1087', '138', '晋州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1088', '138', '新乐市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1089', '138', '鹿泉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1090', '138', '井陉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1091', '138', '正定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1092', '138', '栾城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1093', '138', '行唐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1094', '138', '灵寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1095', '138', '高邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1096', '138', '深泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1097', '138', '赞皇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1098', '138', '无极县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1099', '138', '平山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1100', '138', '元氏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1101', '138', '赵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1102', '139', '新市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1103', '139', '南市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1104', '139', '北市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1105', '139', '涿州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1106', '139', '定州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1107', '139', '安国市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1108', '139', '高碑店市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1109', '139', '满城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1110', '139', '清苑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1111', '139', '涞水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1112', '139', '阜平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1113', '139', '徐水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1114', '139', '定兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1115', '139', '唐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1116', '139', '高阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1117', '139', '容城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1118', '139', '涞源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1119', '139', '望都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1120', '139', '安新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1121', '139', '易县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1122', '139', '曲阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1123', '139', '蠡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1124', '139', '顺平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1125', '139', '博野县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1126', '139', '雄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1127', '140', '运河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1128', '140', '新华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1129', '140', '泊头市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1130', '140', '任丘市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1131', '140', '黄骅市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1132', '140', '河间市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1133', '140', '沧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1134', '140', '青县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1135', '140', '东光县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1136', '140', '海兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1137', '140', '盐山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1138', '140', '肃宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1139', '140', '南皮县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1140', '140', '吴桥县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1141', '140', '献县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1142', '140', '孟村', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1143', '141', '双桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1144', '141', '双滦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1145', '141', '鹰手营子矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1146', '141', '承德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1147', '141', '兴隆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1148', '141', '平泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1149', '141', '滦平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1150', '141', '隆化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1151', '141', '丰宁', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1152', '141', '宽城', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1153', '141', '围场', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1154', '142', '从台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1155', '142', '复兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1156', '142', '邯山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1157', '142', '峰峰矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1158', '142', '武安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1159', '142', '邯郸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1160', '142', '临漳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1161', '142', '成安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1162', '142', '大名县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1163', '142', '涉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1164', '142', '磁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1165', '142', '肥乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1166', '142', '永年县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1167', '142', '邱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1168', '142', '鸡泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1169', '142', '广平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1170', '142', '馆陶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1171', '142', '魏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1172', '142', '曲周县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1173', '143', '桃城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1174', '143', '冀州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1175', '143', '深州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1176', '143', '枣强县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1177', '143', '武邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1178', '143', '武强县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1179', '143', '饶阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1180', '143', '安平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1181', '143', '故城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1182', '143', '景县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1183', '143', '阜城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1184', '144', '安次区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1185', '144', '广阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1186', '144', '霸州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1187', '144', '三河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1188', '144', '固安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1189', '144', '永清县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1190', '144', '香河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1191', '144', '大城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1192', '144', '文安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1193', '144', '大厂', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1194', '145', '海港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1195', '145', '山海关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1196', '145', '北戴河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1197', '145', '昌黎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1198', '145', '抚宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1199', '145', '卢龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1200', '145', '青龙', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1201', '146', '路北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1202', '146', '路南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1203', '146', '古冶区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1204', '146', '开平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1205', '146', '丰南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1206', '146', '丰润区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1207', '146', '遵化市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1208', '146', '迁安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1209', '146', '滦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1210', '146', '滦南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1211', '146', '乐亭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1212', '146', '迁西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1213', '146', '玉田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1214', '146', '唐海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1215', '147', '桥东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1216', '147', '桥西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1217', '147', '南宫市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1218', '147', '沙河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1219', '147', '邢台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1220', '147', '临城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1221', '147', '内丘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1222', '147', '柏乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1223', '147', '隆尧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1224', '147', '任县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1225', '147', '南和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1226', '147', '宁晋县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1227', '147', '巨鹿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1228', '147', '新河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1229', '147', '广宗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1230', '147', '平乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1231', '147', '威县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1232', '147', '清河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1233', '147', '临西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1234', '148', '桥西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1235', '148', '桥东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1236', '148', '宣化区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1237', '148', '下花园区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1238', '148', '宣化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1239', '148', '张北县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1240', '148', '康保县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1241', '148', '沽源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1242', '148', '尚义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1243', '148', '蔚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1244', '148', '阳原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1245', '148', '怀安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1246', '148', '万全县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1247', '148', '怀来县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1248', '148', '涿鹿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1249', '148', '赤城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1250', '148', '崇礼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1251', '149', '金水区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1252', '149', '邙山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1253', '149', '二七区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1254', '149', '管城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1255', '149', '中原区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1256', '149', '上街区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1257', '149', '惠济区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1258', '149', '郑东新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1259', '149', '经济技术开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1260', '149', '高新开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1261', '149', '出口加工区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1262', '149', '巩义市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1263', '149', '荥阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1264', '149', '新密市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1265', '149', '新郑市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1266', '149', '登封市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1267', '149', '中牟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1268', '150', '西工区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1269', '150', '老城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1270', '150', '涧西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1271', '150', '瀍河回族区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1272', '150', '洛龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1273', '150', '吉利区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1274', '150', '偃师市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1275', '150', '孟津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1276', '150', '新安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1277', '150', '栾川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1278', '150', '嵩县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1279', '150', '汝阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1280', '150', '宜阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1281', '150', '洛宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1282', '150', '伊川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1283', '151', '鼓楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1284', '151', '龙亭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1285', '151', '顺河回族区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1286', '151', '金明区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1287', '151', '禹王台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1288', '151', '杞县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1289', '151', '通许县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1290', '151', '尉氏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1291', '151', '开封县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1292', '151', '兰考县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1293', '152', '北关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1294', '152', '文峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1295', '152', '殷都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1296', '152', '龙安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1297', '152', '林州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1298', '152', '安阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1299', '152', '汤阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1300', '152', '滑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1301', '152', '内黄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1302', '153', '淇滨区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1303', '153', '山城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1304', '153', '鹤山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1305', '153', '浚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1306', '153', '淇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1307', '154', '济源市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1308', '155', '解放区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1309', '155', '中站区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1310', '155', '马村区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1311', '155', '山阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1312', '155', '沁阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1313', '155', '孟州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1314', '155', '修武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1315', '155', '博爱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1316', '155', '武陟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1317', '155', '温县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1318', '156', '卧龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1319', '156', '宛城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1320', '156', '邓州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1321', '156', '南召县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1322', '156', '方城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1323', '156', '西峡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1324', '156', '镇平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1325', '156', '内乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1326', '156', '淅川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1327', '156', '社旗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1328', '156', '唐河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1329', '156', '新野县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1330', '156', '桐柏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1331', '157', '新华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1332', '157', '卫东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1333', '157', '湛河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1334', '157', '石龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1335', '157', '舞钢市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1336', '157', '汝州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1337', '157', '宝丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1338', '157', '叶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1339', '157', '鲁山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1340', '157', '郏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1341', '158', '湖滨区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1342', '158', '义马市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1343', '158', '灵宝市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1344', '158', '渑池县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1345', '158', '陕县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1346', '158', '卢氏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1347', '159', '梁园区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1348', '159', '睢阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1349', '159', '永城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1350', '159', '民权县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1351', '159', '睢县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1352', '159', '宁陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1353', '159', '虞城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1354', '159', '柘城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1355', '159', '夏邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1356', '160', '卫滨区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1357', '160', '红旗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1358', '160', '凤泉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1359', '160', '牧野区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1360', '160', '卫辉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1361', '160', '辉县市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1362', '160', '新乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1363', '160', '获嘉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1364', '160', '原阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1365', '160', '延津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1366', '160', '封丘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1367', '160', '长垣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1368', '161', '浉河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1369', '161', '平桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1370', '161', '罗山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1371', '161', '光山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1372', '161', '新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1373', '161', '商城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1374', '161', '固始县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1375', '161', '潢川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1376', '161', '淮滨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1377', '161', '息县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1378', '162', '魏都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1379', '162', '禹州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1380', '162', '长葛市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1381', '162', '许昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1382', '162', '鄢陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1383', '162', '襄城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1384', '163', '川汇区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1385', '163', '项城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1386', '163', '扶沟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1387', '163', '西华县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1388', '163', '商水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1389', '163', '沈丘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1390', '163', '郸城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1391', '163', '淮阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1392', '163', '太康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1393', '163', '鹿邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1394', '164', '驿城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1395', '164', '西平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1396', '164', '上蔡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1397', '164', '平舆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1398', '164', '正阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1399', '164', '确山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1400', '164', '泌阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1401', '164', '汝南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1402', '164', '遂平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1403', '164', '新蔡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1404', '165', '郾城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1405', '165', '源汇区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1406', '165', '召陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1407', '165', '舞阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1408', '165', '临颍县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1409', '166', '华龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1410', '166', '清丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1411', '166', '南乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1412', '166', '范县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1413', '166', '台前县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1414', '166', '濮阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1415', '167', '道里区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1416', '167', '南岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1417', '167', '动力区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1418', '167', '平房区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1419', '167', '香坊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1420', '167', '太平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1421', '167', '道外区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1422', '167', '阿城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1423', '167', '呼兰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1424', '167', '松北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1425', '167', '尚志市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1426', '167', '双城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1427', '167', '五常市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1428', '167', '方正县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1429', '167', '宾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1430', '167', '依兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1431', '167', '巴彦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1432', '167', '通河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1433', '167', '木兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1434', '167', '延寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1435', '168', '萨尔图区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1436', '168', '红岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1437', '168', '龙凤区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1438', '168', '让胡路区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1439', '168', '大同区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1440', '168', '肇州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1441', '168', '肇源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1442', '168', '林甸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1443', '168', '杜尔伯特', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1444', '169', '呼玛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1445', '169', '漠河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1446', '169', '塔河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1447', '170', '兴山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1448', '170', '工农区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1449', '170', '南山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1450', '170', '兴安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1451', '170', '向阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1452', '170', '东山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1453', '170', '萝北县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1454', '170', '绥滨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1455', '171', '爱辉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1456', '171', '五大连池市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1457', '171', '北安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1458', '171', '嫩江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1459', '171', '逊克县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1460', '171', '孙吴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1461', '172', '鸡冠区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1462', '172', '恒山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1463', '172', '城子河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1464', '172', '滴道区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1465', '172', '梨树区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1466', '172', '虎林市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1467', '172', '密山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1468', '172', '鸡东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1469', '173', '前进区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1470', '173', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1471', '173', '向阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1472', '173', '东风区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1473', '173', '同江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1474', '173', '富锦市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1475', '173', '桦南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1476', '173', '桦川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1477', '173', '汤原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1478', '173', '抚远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1479', '174', '爱民区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1480', '174', '东安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1481', '174', '阳明区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1482', '174', '西安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1483', '174', '绥芬河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1484', '174', '海林市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1485', '174', '宁安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1486', '174', '穆棱市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1487', '174', '东宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1488', '174', '林口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1489', '175', '桃山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1490', '175', '新兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1491', '175', '茄子河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1492', '175', '勃利县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1493', '176', '龙沙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1494', '176', '昂昂溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1495', '176', '铁峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1496', '176', '建华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1497', '176', '富拉尔基区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1498', '176', '碾子山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1499', '176', '梅里斯达斡尔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1500', '176', '讷河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1501', '176', '龙江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1502', '176', '依安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1503', '176', '泰来县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1504', '176', '甘南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1505', '176', '富裕县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1506', '176', '克山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1507', '176', '克东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1508', '176', '拜泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1509', '177', '尖山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1510', '177', '岭东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1511', '177', '四方台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1512', '177', '宝山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1513', '177', '集贤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1514', '177', '友谊县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1515', '177', '宝清县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1516', '177', '饶河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1517', '178', '北林区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1518', '178', '安达市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1519', '178', '肇东市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1520', '178', '海伦市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1521', '178', '望奎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1522', '178', '兰西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1523', '178', '青冈县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1524', '178', '庆安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1525', '178', '明水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1526', '178', '绥棱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1527', '179', '伊春区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1528', '179', '带岭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1529', '179', '南岔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1530', '179', '金山屯区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1531', '179', '西林区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1532', '179', '美溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1533', '179', '乌马河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1534', '179', '翠峦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1535', '179', '友好区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1536', '179', '上甘岭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1537', '179', '五营区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1538', '179', '红星区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1539', '179', '新青区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1540', '179', '汤旺河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1541', '179', '乌伊岭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1542', '179', '铁力市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1543', '179', '嘉荫县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1544', '180', '江岸区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1545', '180', '武昌区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1546', '180', '江汉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1547', '180', '硚口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1548', '180', '汉阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1549', '180', '青山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1550', '180', '洪山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1551', '180', '东西湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1552', '180', '汉南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1553', '180', '蔡甸区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1554', '180', '江夏区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1555', '180', '黄陂区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1556', '180', '新洲区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1557', '180', '经济开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1558', '181', '仙桃市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1559', '182', '鄂城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1560', '182', '华容区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1561', '182', '梁子湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1562', '183', '黄州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1563', '183', '麻城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1564', '183', '武穴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1565', '183', '团风县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1566', '183', '红安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1567', '183', '罗田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1568', '183', '英山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1569', '183', '浠水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1570', '183', '蕲春县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1571', '183', '黄梅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1572', '184', '黄石港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1573', '184', '西塞山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1574', '184', '下陆区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1575', '184', '铁山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1576', '184', '大冶市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1577', '184', '阳新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1578', '185', '东宝区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1579', '185', '掇刀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1580', '185', '钟祥市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1581', '185', '京山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1582', '185', '沙洋县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1583', '186', '沙市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1584', '186', '荆州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1585', '186', '石首市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1586', '186', '洪湖市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1587', '186', '松滋市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1588', '186', '公安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1589', '186', '监利县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1590', '186', '江陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1591', '187', '潜江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1592', '188', '神农架林区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1593', '189', '张湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1594', '189', '茅箭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1595', '189', '丹江口市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1596', '189', '郧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1597', '189', '郧西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1598', '189', '竹山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1599', '189', '竹溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1600', '189', '房县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1601', '190', '曾都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1602', '190', '广水市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1603', '191', '天门市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1604', '192', '咸安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1605', '192', '赤壁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1606', '192', '嘉鱼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1607', '192', '通城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1608', '192', '崇阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1609', '192', '通山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1610', '193', '襄城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1611', '193', '樊城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1612', '193', '襄阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1613', '193', '老河口市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1614', '193', '枣阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1615', '193', '宜城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1616', '193', '南漳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1617', '193', '谷城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1618', '193', '保康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1619', '194', '孝南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1620', '194', '应城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1621', '194', '安陆市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1622', '194', '汉川市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1623', '194', '孝昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1624', '194', '大悟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1625', '194', '云梦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1626', '195', '长阳', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1627', '195', '五峰', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1628', '195', '西陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1629', '195', '伍家岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1630', '195', '点军区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1631', '195', '猇亭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1632', '195', '夷陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1633', '195', '宜都市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1634', '195', '当阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1635', '195', '枝江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1636', '195', '远安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1637', '195', '兴山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1638', '195', '秭归县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1639', '196', '恩施市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1640', '196', '利川市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1641', '196', '建始县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1642', '196', '巴东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1643', '196', '宣恩县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1644', '196', '咸丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1645', '196', '来凤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1646', '196', '鹤峰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1647', '197', '岳麓区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1648', '197', '芙蓉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1649', '197', '天心区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1650', '197', '开福区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1651', '197', '雨花区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1652', '197', '开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1653', '197', '浏阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1654', '197', '长沙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1655', '197', '望城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1656', '197', '宁乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1657', '198', '永定区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1658', '198', '武陵源区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1659', '198', '慈利县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1660', '198', '桑植县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1661', '199', '武陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1662', '199', '鼎城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1663', '199', '津市市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1664', '199', '安乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1665', '199', '汉寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1666', '199', '澧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1667', '199', '临澧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1668', '199', '桃源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1669', '199', '石门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1670', '200', '北湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1671', '200', '苏仙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1672', '200', '资兴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1673', '200', '桂阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1674', '200', '宜章县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1675', '200', '永兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1676', '200', '嘉禾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1677', '200', '临武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1678', '200', '汝城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1679', '200', '桂东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1680', '200', '安仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1681', '201', '雁峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1682', '201', '珠晖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1683', '201', '石鼓区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1684', '201', '蒸湘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1685', '201', '南岳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1686', '201', '耒阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1687', '201', '常宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1688', '201', '衡阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1689', '201', '衡南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1690', '201', '衡山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1691', '201', '衡东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1692', '201', '祁东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1693', '202', '鹤城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1694', '202', '靖州', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1695', '202', '麻阳', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1696', '202', '通道', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1697', '202', '新晃', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1698', '202', '芷江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1699', '202', '沅陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1700', '202', '辰溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1701', '202', '溆浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1702', '202', '中方县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1703', '202', '会同县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1704', '202', '洪江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1705', '203', '娄星区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1706', '203', '冷水江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1707', '203', '涟源市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1708', '203', '双峰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1709', '203', '新化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1710', '204', '城步', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1711', '204', '双清区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1712', '204', '大祥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1713', '204', '北塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1714', '204', '武冈市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1715', '204', '邵东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1716', '204', '新邵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1717', '204', '邵阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1718', '204', '隆回县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1719', '204', '洞口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1720', '204', '绥宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1721', '204', '新宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1722', '205', '岳塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1723', '205', '雨湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1724', '205', '湘乡市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1725', '205', '韶山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1726', '205', '湘潭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1727', '206', '吉首市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1728', '206', '泸溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1729', '206', '凤凰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1730', '206', '花垣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1731', '206', '保靖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1732', '206', '古丈县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1733', '206', '永顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1734', '206', '龙山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1735', '207', '赫山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1736', '207', '资阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1737', '207', '沅江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1738', '207', '南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1739', '207', '桃江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1740', '207', '安化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1741', '208', '江华', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1742', '208', '冷水滩区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1743', '208', '零陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1744', '208', '祁阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1745', '208', '东安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1746', '208', '双牌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1747', '208', '道县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1748', '208', '江永县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1749', '208', '宁远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1750', '208', '蓝山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1751', '208', '新田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1752', '209', '岳阳楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1753', '209', '君山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1754', '209', '云溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1755', '209', '汨罗市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1756', '209', '临湘市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1757', '209', '岳阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1758', '209', '华容县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1759', '209', '湘阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1760', '209', '平江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1761', '210', '天元区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1762', '210', '荷塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1763', '210', '芦淞区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1764', '210', '石峰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1765', '210', '醴陵市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1766', '210', '株洲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1767', '210', '攸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1768', '210', '茶陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1769', '210', '炎陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1770', '211', '朝阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1771', '211', '宽城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1772', '211', '二道区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1773', '211', '南关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1774', '211', '绿园区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1775', '211', '双阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1776', '211', '净月潭开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1777', '211', '高新技术开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1778', '211', '经济技术开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1779', '211', '汽车产业开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1780', '211', '德惠市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1781', '211', '九台市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1782', '211', '榆树市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1783', '211', '农安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1784', '212', '船营区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1785', '212', '昌邑区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1786', '212', '龙潭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1787', '212', '丰满区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1788', '212', '蛟河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1789', '212', '桦甸市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1790', '212', '舒兰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1791', '212', '磐石市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1792', '212', '永吉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1793', '213', '洮北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1794', '213', '洮南市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1795', '213', '大安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1796', '213', '镇赉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1797', '213', '通榆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1798', '214', '江源区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1799', '214', '八道江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1800', '214', '长白', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1801', '214', '临江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1802', '214', '抚松县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1803', '214', '靖宇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1804', '215', '龙山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1805', '215', '西安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1806', '215', '东丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1807', '215', '东辽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1808', '216', '铁西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1809', '216', '铁东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1810', '216', '伊通', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1811', '216', '公主岭市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1812', '216', '双辽市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1813', '216', '梨树县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1814', '217', '前郭尔罗斯', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1815', '217', '宁江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1816', '217', '长岭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1817', '217', '乾安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1818', '217', '扶余县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1819', '218', '东昌区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1820', '218', '二道江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1821', '218', '梅河口市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1822', '218', '集安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1823', '218', '通化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1824', '218', '辉南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1825', '218', '柳河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1826', '219', '延吉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1827', '219', '图们市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1828', '219', '敦化市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1829', '219', '珲春市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1830', '219', '龙井市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1831', '219', '和龙市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1832', '219', '安图县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1833', '219', '汪清县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1834', '220', '玄武区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1835', '220', '鼓楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1836', '220', '白下区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1837', '220', '建邺区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1838', '220', '秦淮区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1839', '220', '雨花台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1840', '220', '下关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1841', '220', '栖霞区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1842', '220', '浦口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1843', '220', '江宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1844', '220', '六合区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1845', '220', '溧水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1846', '220', '高淳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1847', '221', '沧浪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1848', '221', '金阊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1849', '221', '平江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1850', '221', '虎丘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1851', '221', '吴中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1852', '221', '相城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1853', '221', '园区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1854', '221', '新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1855', '221', '常熟市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1856', '221', '张家港市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1857', '221', '玉山镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1858', '221', '巴城镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1859', '221', '周市镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1860', '221', '陆家镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1861', '221', '花桥镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1862', '221', '淀山湖镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1863', '221', '张浦镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1864', '221', '周庄镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1865', '221', '千灯镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1866', '221', '锦溪镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1867', '221', '开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1868', '221', '吴江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1869', '221', '太仓市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1870', '222', '崇安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1871', '222', '北塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1872', '222', '南长区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1873', '222', '锡山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1874', '222', '惠山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1875', '222', '滨湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1876', '222', '新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1877', '222', '江阴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1878', '222', '宜兴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1879', '223', '天宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1880', '223', '钟楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1881', '223', '戚墅堰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1882', '223', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1883', '223', '新北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1884', '223', '武进区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1885', '223', '溧阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1886', '223', '金坛市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1887', '224', '清河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1888', '224', '清浦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1889', '224', '楚州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1890', '224', '淮阴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1891', '224', '涟水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1892', '224', '洪泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1893', '224', '盱眙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1894', '224', '金湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1895', '225', '新浦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1896', '225', '连云区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1897', '225', '海州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1898', '225', '赣榆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1899', '225', '东海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1900', '225', '灌云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1901', '225', '灌南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1902', '226', '崇川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1903', '226', '港闸区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1904', '226', '经济开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1905', '226', '启东市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1906', '226', '如皋市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1907', '226', '通州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1908', '226', '海门市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1909', '226', '海安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1910', '226', '如东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1911', '227', '宿城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1912', '227', '宿豫区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1913', '227', '宿豫县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1914', '227', '沭阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1915', '227', '泗阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1916', '227', '泗洪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1917', '228', '海陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1918', '228', '高港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1919', '228', '兴化市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1920', '228', '靖江市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1921', '228', '泰兴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1922', '228', '姜堰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1923', '229', '云龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1924', '229', '鼓楼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1925', '229', '九里区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1926', '229', '贾汪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1927', '229', '泉山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1928', '229', '新沂市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1929', '229', '邳州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1930', '229', '丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1931', '229', '沛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1932', '229', '铜山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1933', '229', '睢宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1934', '230', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1935', '230', '亭湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1936', '230', '盐都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1937', '230', '盐都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1938', '230', '东台市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1939', '230', '大丰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1940', '230', '响水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1941', '230', '滨海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1942', '230', '阜宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1943', '230', '射阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1944', '230', '建湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1945', '231', '广陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1946', '231', '维扬区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1947', '231', '邗江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1948', '231', '仪征市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1949', '231', '高邮市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1950', '231', '江都市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1951', '231', '宝应县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1952', '232', '京口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1953', '232', '润州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1954', '232', '丹徒区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1955', '232', '丹阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1956', '232', '扬中市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1957', '232', '句容市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1958', '233', '东湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1959', '233', '西湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1960', '233', '青云谱区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1961', '233', '湾里区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1962', '233', '青山湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1963', '233', '红谷滩新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1964', '233', '昌北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1965', '233', '高新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1966', '233', '南昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1967', '233', '新建县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1968', '233', '安义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1969', '233', '进贤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1970', '234', '临川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1971', '234', '南城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1972', '234', '黎川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1973', '234', '南丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1974', '234', '崇仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1975', '234', '乐安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1976', '234', '宜黄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1977', '234', '金溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1978', '234', '资溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1979', '234', '东乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1980', '234', '广昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1981', '235', '章贡区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1982', '235', '于都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1983', '235', '瑞金市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1984', '235', '南康市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1985', '235', '赣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1986', '235', '信丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1987', '235', '大余县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1988', '235', '上犹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1989', '235', '崇义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1990', '235', '安远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1991', '235', '龙南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1992', '235', '定南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1993', '235', '全南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1994', '235', '宁都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1995', '235', '兴国县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1996', '235', '会昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1997', '235', '寻乌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1998', '235', '石城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('1999', '236', '安福县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2000', '236', '吉州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2001', '236', '青原区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2002', '236', '井冈山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2003', '236', '吉安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2004', '236', '吉水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2005', '236', '峡江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2006', '236', '新干县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2007', '236', '永丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2008', '236', '泰和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2009', '236', '遂川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2010', '236', '万安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2011', '236', '永新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2012', '237', '珠山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2013', '237', '昌江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2014', '237', '乐平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2015', '237', '浮梁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2016', '238', '浔阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2017', '238', '庐山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2018', '238', '瑞昌市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2019', '238', '九江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2020', '238', '武宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2021', '238', '修水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2022', '238', '永修县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2023', '238', '德安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2024', '238', '星子县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2025', '238', '都昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2026', '238', '湖口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2027', '238', '彭泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2028', '239', '安源区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2029', '239', '湘东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2030', '239', '莲花县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2031', '239', '芦溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2032', '239', '上栗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2033', '240', '信州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2034', '240', '德兴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2035', '240', '上饶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2036', '240', '广丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2037', '240', '玉山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2038', '240', '铅山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2039', '240', '横峰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2040', '240', '弋阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2041', '240', '余干县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2042', '240', '波阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2043', '240', '万年县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2044', '240', '婺源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2045', '241', '渝水区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2046', '241', '分宜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2047', '242', '袁州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2048', '242', '丰城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2049', '242', '樟树市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2050', '242', '高安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2051', '242', '奉新县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2052', '242', '万载县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2053', '242', '上高县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2054', '242', '宜丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2055', '242', '靖安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2056', '242', '铜鼓县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2057', '243', '月湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2058', '243', '贵溪市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2059', '243', '余江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2060', '244', '沈河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2061', '244', '皇姑区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2062', '244', '和平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2063', '244', '大东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2064', '244', '铁西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2065', '244', '苏家屯区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2066', '244', '东陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2067', '244', '沈北新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2068', '244', '于洪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2069', '244', '浑南新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2070', '244', '新民市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2071', '244', '辽中县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2072', '244', '康平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2073', '244', '法库县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2074', '245', '西岗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2075', '245', '中山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2076', '245', '沙河口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2077', '245', '甘井子区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2078', '245', '旅顺口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2079', '245', '金州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2080', '245', '开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2081', '245', '瓦房店市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2082', '245', '普兰店市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2083', '245', '庄河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2084', '245', '长海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2085', '246', '铁东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2086', '246', '铁西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2087', '246', '立山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2088', '246', '千山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2089', '246', '岫岩', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2090', '246', '海城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2091', '246', '台安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2092', '247', '本溪', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2093', '247', '平山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2094', '247', '明山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2095', '247', '溪湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2096', '247', '南芬区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2097', '247', '桓仁', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2098', '248', '双塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2099', '248', '龙城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2100', '248', '喀喇沁左翼蒙古族自治县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2101', '248', '北票市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2102', '248', '凌源市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2103', '248', '朝阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2104', '248', '建平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2105', '249', '振兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2106', '249', '元宝区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2107', '249', '振安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2108', '249', '宽甸', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2109', '249', '东港市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2110', '249', '凤城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2111', '250', '顺城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2112', '250', '新抚区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2113', '250', '东洲区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2114', '250', '望花区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2115', '250', '清原', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2116', '250', '新宾', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2117', '250', '抚顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2118', '251', '阜新', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2119', '251', '海州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2120', '251', '新邱区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2121', '251', '太平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2122', '251', '清河门区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2123', '251', '细河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2124', '251', '彰武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2125', '252', '龙港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2126', '252', '南票区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2127', '252', '连山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2128', '252', '兴城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2129', '252', '绥中县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2130', '252', '建昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2131', '253', '太和区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2132', '253', '古塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2133', '253', '凌河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2134', '253', '凌海市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2135', '253', '北镇市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2136', '253', '黑山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2137', '253', '义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2138', '254', '白塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2139', '254', '文圣区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2140', '254', '宏伟区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2141', '254', '太子河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2142', '254', '弓长岭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2143', '254', '灯塔市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2144', '254', '辽阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2145', '255', '双台子区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2146', '255', '兴隆台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2147', '255', '大洼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2148', '255', '盘山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2149', '256', '银州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2150', '256', '清河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2151', '256', '调兵山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2152', '256', '开原市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2153', '256', '铁岭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2154', '256', '西丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2155', '256', '昌图县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2156', '257', '站前区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2157', '257', '西市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2158', '257', '鲅鱼圈区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2159', '257', '老边区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2160', '257', '盖州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2161', '257', '大石桥市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2162', '258', '回民区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2163', '258', '玉泉区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2164', '258', '新城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2165', '258', '赛罕区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2166', '258', '清水河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2167', '258', '土默特左旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2168', '258', '托克托县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2169', '258', '和林格尔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2170', '258', '武川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2171', '259', '阿拉善左旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2172', '259', '阿拉善右旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2173', '259', '额济纳旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2174', '260', '临河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2175', '260', '五原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2176', '260', '磴口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2177', '260', '乌拉特前旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2178', '260', '乌拉特中旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2179', '260', '乌拉特后旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2180', '260', '杭锦后旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2181', '261', '昆都仑区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2182', '261', '青山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2183', '261', '东河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2184', '261', '九原区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2185', '261', '石拐区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2186', '261', '白云矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2187', '261', '土默特右旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2188', '261', '固阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2189', '261', '达尔罕茂明安联合旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2190', '262', '红山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2191', '262', '元宝山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2192', '262', '松山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2193', '262', '阿鲁科尔沁旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2194', '262', '巴林左旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2195', '262', '巴林右旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2196', '262', '林西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2197', '262', '克什克腾旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2198', '262', '翁牛特旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2199', '262', '喀喇沁旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2200', '262', '宁城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2201', '262', '敖汉旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2202', '263', '东胜区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2203', '263', '达拉特旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2204', '263', '准格尔旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2205', '263', '鄂托克前旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2206', '263', '鄂托克旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2207', '263', '杭锦旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2208', '263', '乌审旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2209', '263', '伊金霍洛旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2210', '264', '海拉尔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2211', '264', '莫力达瓦', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2212', '264', '满洲里市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2213', '264', '牙克石市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2214', '264', '扎兰屯市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2215', '264', '额尔古纳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2216', '264', '根河市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2217', '264', '阿荣旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2218', '264', '鄂伦春自治旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2219', '264', '鄂温克族自治旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2220', '264', '陈巴尔虎旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2221', '264', '新巴尔虎左旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2222', '264', '新巴尔虎右旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2223', '265', '科尔沁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2224', '265', '霍林郭勒市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2225', '265', '科尔沁左翼中旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2226', '265', '科尔沁左翼后旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2227', '265', '开鲁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2228', '265', '库伦旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2229', '265', '奈曼旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2230', '265', '扎鲁特旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2231', '266', '海勃湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2232', '266', '乌达区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2233', '266', '海南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2234', '267', '化德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2235', '267', '集宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2236', '267', '丰镇市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2237', '267', '卓资县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2238', '267', '商都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2239', '267', '兴和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2240', '267', '凉城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2241', '267', '察哈尔右翼前旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2242', '267', '察哈尔右翼中旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2243', '267', '察哈尔右翼后旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2244', '267', '四子王旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2245', '268', '二连浩特市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2246', '268', '锡林浩特市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2247', '268', '阿巴嘎旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2248', '268', '苏尼特左旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2249', '268', '苏尼特右旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2250', '268', '东乌珠穆沁旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2251', '268', '西乌珠穆沁旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2252', '268', '太仆寺旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2253', '268', '镶黄旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2254', '268', '正镶白旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2255', '268', '正蓝旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2256', '268', '多伦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2257', '269', '乌兰浩特市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2258', '269', '阿尔山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2259', '269', '科尔沁右翼前旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2260', '269', '科尔沁右翼中旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2261', '269', '扎赉特旗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2262', '269', '突泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2263', '270', '西夏区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2264', '270', '金凤区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2265', '270', '兴庆区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2266', '270', '灵武市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2267', '270', '永宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2268', '270', '贺兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2269', '271', '原州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2270', '271', '海原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2271', '271', '西吉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2272', '271', '隆德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2273', '271', '泾源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2274', '271', '彭阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2275', '272', '惠农县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2276', '272', '大武口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2277', '272', '惠农区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2278', '272', '陶乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2279', '272', '平罗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2280', '273', '利通区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2281', '273', '中卫县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2282', '273', '青铜峡市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2283', '273', '中宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2284', '273', '盐池县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2285', '273', '同心县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2286', '274', '沙坡头区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2287', '274', '海原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2288', '274', '中宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2289', '275', '城中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2290', '275', '城东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2291', '275', '城西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2292', '275', '城北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2293', '275', '湟中县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2294', '275', '湟源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2295', '275', '大通', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2296', '276', '玛沁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2297', '276', '班玛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2298', '276', '甘德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2299', '276', '达日县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2300', '276', '久治县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2301', '276', '玛多县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2302', '277', '海晏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2303', '277', '祁连县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2304', '277', '刚察县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2305', '277', '门源', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2306', '278', '平安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2307', '278', '乐都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2308', '278', '民和', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2309', '278', '互助', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2310', '278', '化隆', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2311', '278', '循化', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2312', '279', '共和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2313', '279', '同德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2314', '279', '贵德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2315', '279', '兴海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2316', '279', '贵南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2317', '280', '德令哈市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2318', '280', '格尔木市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2319', '280', '乌兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2320', '280', '都兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2321', '280', '天峻县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2322', '281', '同仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2323', '281', '尖扎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2324', '281', '泽库县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2325', '281', '河南蒙古族自治县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2326', '282', '玉树县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2327', '282', '杂多县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2328', '282', '称多县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2329', '282', '治多县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2330', '282', '囊谦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2331', '282', '曲麻莱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2332', '283', '市中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2333', '283', '历下区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2334', '283', '天桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2335', '283', '槐荫区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2336', '283', '历城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2337', '283', '长清区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2338', '283', '章丘市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2339', '283', '平阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2340', '283', '济阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2341', '283', '商河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2342', '284', '市南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2343', '284', '市北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2344', '284', '城阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2345', '284', '四方区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2346', '284', '李沧区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2347', '284', '黄岛区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2348', '284', '崂山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2349', '284', '胶州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2350', '284', '即墨市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2351', '284', '平度市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2352', '284', '胶南市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2353', '284', '莱西市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2354', '285', '滨城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2355', '285', '惠民县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2356', '285', '阳信县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2357', '285', '无棣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2358', '285', '沾化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2359', '285', '博兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2360', '285', '邹平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2361', '286', '德城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2362', '286', '陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2363', '286', '乐陵市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2364', '286', '禹城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2365', '286', '宁津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2366', '286', '庆云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2367', '286', '临邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2368', '286', '齐河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2369', '286', '平原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2370', '286', '夏津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2371', '286', '武城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2372', '287', '东营区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2373', '287', '河口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2374', '287', '垦利县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2375', '287', '利津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2376', '287', '广饶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2377', '288', '牡丹区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2378', '288', '曹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2379', '288', '单县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2380', '288', '成武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2381', '288', '巨野县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2382', '288', '郓城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2383', '288', '鄄城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2384', '288', '定陶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2385', '288', '东明县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2386', '289', '市中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2387', '289', '任城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2388', '289', '曲阜市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2389', '289', '兖州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2390', '289', '邹城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2391', '289', '微山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2392', '289', '鱼台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2393', '289', '金乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2394', '289', '嘉祥县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2395', '289', '汶上县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2396', '289', '泗水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2397', '289', '梁山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2398', '290', '莱城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2399', '290', '钢城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2400', '291', '东昌府区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2401', '291', '临清市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2402', '291', '阳谷县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2403', '291', '莘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2404', '291', '茌平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2405', '291', '东阿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2406', '291', '冠县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2407', '291', '高唐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2408', '292', '兰山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2409', '292', '罗庄区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2410', '292', '河东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2411', '292', '沂南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2412', '292', '郯城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2413', '292', '沂水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2414', '292', '苍山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2415', '292', '费县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2416', '292', '平邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2417', '292', '莒南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2418', '292', '蒙阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2419', '292', '临沭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2420', '293', '东港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2421', '293', '岚山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2422', '293', '五莲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2423', '293', '莒县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2424', '294', '泰山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2425', '294', '岱岳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2426', '294', '新泰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2427', '294', '肥城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2428', '294', '宁阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2429', '294', '东平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2430', '295', '荣成市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2431', '295', '乳山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2432', '295', '环翠区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2433', '295', '文登市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2434', '296', '潍城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2435', '296', '寒亭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2436', '296', '坊子区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2437', '296', '奎文区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2438', '296', '青州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2439', '296', '诸城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2440', '296', '寿光市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2441', '296', '安丘市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2442', '296', '高密市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2443', '296', '昌邑市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2444', '296', '临朐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2445', '296', '昌乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2446', '297', '芝罘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2447', '297', '福山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2448', '297', '牟平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2449', '297', '莱山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2450', '297', '开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2451', '297', '龙口市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2452', '297', '莱阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2453', '297', '莱州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2454', '297', '蓬莱市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2455', '297', '招远市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2456', '297', '栖霞市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2457', '297', '海阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2458', '297', '长岛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2459', '298', '市中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2460', '298', '山亭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2461', '298', '峄城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2462', '298', '台儿庄区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2463', '298', '薛城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2464', '298', '滕州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2465', '299', '张店区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2466', '299', '临淄区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2467', '299', '淄川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2468', '299', '博山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2469', '299', '周村区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2470', '299', '桓台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2471', '299', '高青县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2472', '299', '沂源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2473', '300', '杏花岭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2474', '300', '小店区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2475', '300', '迎泽区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2476', '300', '尖草坪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2477', '300', '万柏林区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2478', '300', '晋源区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2479', '300', '高新开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2480', '300', '民营经济开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2481', '300', '经济技术开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2482', '300', '清徐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2483', '300', '阳曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2484', '300', '娄烦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2485', '300', '古交市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2486', '301', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2487', '301', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2488', '301', '沁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2489', '301', '潞城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2490', '301', '长治县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2491', '301', '襄垣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2492', '301', '屯留县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2493', '301', '平顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2494', '301', '黎城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2495', '301', '壶关县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2496', '301', '长子县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2497', '301', '武乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2498', '301', '沁源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2499', '302', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2500', '302', '矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2501', '302', '南郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2502', '302', '新荣区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2503', '302', '阳高县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2504', '302', '天镇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2505', '302', '广灵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2506', '302', '灵丘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2507', '302', '浑源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2508', '302', '左云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2509', '302', '大同县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2510', '303', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2511', '303', '高平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2512', '303', '沁水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2513', '303', '阳城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2514', '303', '陵川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2515', '303', '泽州县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2516', '304', '榆次区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2517', '304', '介休市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2518', '304', '榆社县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2519', '304', '左权县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2520', '304', '和顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2521', '304', '昔阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2522', '304', '寿阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2523', '304', '太谷县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2524', '304', '祁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2525', '304', '平遥县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2526', '304', '灵石县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2527', '305', '尧都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2528', '305', '侯马市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2529', '305', '霍州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2530', '305', '曲沃县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2531', '305', '翼城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2532', '305', '襄汾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2533', '305', '洪洞县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2534', '305', '吉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2535', '305', '安泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2536', '305', '浮山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2537', '305', '古县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2538', '305', '乡宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2539', '305', '大宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2540', '305', '隰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2541', '305', '永和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2542', '305', '蒲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2543', '305', '汾西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2544', '306', '离石市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2545', '306', '离石区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2546', '306', '孝义市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2547', '306', '汾阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2548', '306', '文水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2549', '306', '交城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2550', '306', '兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2551', '306', '临县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2552', '306', '柳林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2553', '306', '石楼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2554', '306', '岚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2555', '306', '方山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2556', '306', '中阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2557', '306', '交口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2558', '307', '朔城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2559', '307', '平鲁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2560', '307', '山阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2561', '307', '应县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2562', '307', '右玉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2563', '307', '怀仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2564', '308', '忻府区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2565', '308', '原平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2566', '308', '定襄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2567', '308', '五台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2568', '308', '代县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2569', '308', '繁峙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2570', '308', '宁武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2571', '308', '静乐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2572', '308', '神池县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2573', '308', '五寨县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2574', '308', '岢岚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2575', '308', '河曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2576', '308', '保德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2577', '308', '偏关县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2578', '309', '城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2579', '309', '矿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2580', '309', '郊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2581', '309', '平定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2582', '309', '盂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2583', '310', '盐湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2584', '310', '永济市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2585', '310', '河津市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2586', '310', '临猗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2587', '310', '万荣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2588', '310', '闻喜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2589', '310', '稷山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2590', '310', '新绛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2591', '310', '绛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2592', '310', '垣曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2593', '310', '夏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2594', '310', '平陆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2595', '310', '芮城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2596', '311', '莲湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2597', '311', '新城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2598', '311', '碑林区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2599', '311', '雁塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2600', '311', '灞桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2601', '311', '未央区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2602', '311', '阎良区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2603', '311', '临潼区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2604', '311', '长安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2605', '311', '蓝田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2606', '311', '周至县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2607', '311', '户县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2608', '311', '高陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2609', '312', '汉滨区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2610', '312', '汉阴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2611', '312', '石泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2612', '312', '宁陕县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2613', '312', '紫阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2614', '312', '岚皋县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2615', '312', '平利县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2616', '312', '镇坪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2617', '312', '旬阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2618', '312', '白河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2619', '313', '陈仓区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2620', '313', '渭滨区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2621', '313', '金台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2622', '313', '凤翔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2623', '313', '岐山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2624', '313', '扶风县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2625', '313', '眉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2626', '313', '陇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2627', '313', '千阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2628', '313', '麟游县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2629', '313', '凤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2630', '313', '太白县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2631', '314', '汉台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2632', '314', '南郑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2633', '314', '城固县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2634', '314', '洋县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2635', '314', '西乡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2636', '314', '勉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2637', '314', '宁强县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2638', '314', '略阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2639', '314', '镇巴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2640', '314', '留坝县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2641', '314', '佛坪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2642', '315', '商州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2643', '315', '洛南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2644', '315', '丹凤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2645', '315', '商南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2646', '315', '山阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2647', '315', '镇安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2648', '315', '柞水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2649', '316', '耀州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2650', '316', '王益区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2651', '316', '印台区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2652', '316', '宜君县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2653', '317', '临渭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2654', '317', '韩城市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2655', '317', '华阴市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2656', '317', '华县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2657', '317', '潼关县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2658', '317', '大荔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2659', '317', '合阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2660', '317', '澄城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2661', '317', '蒲城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2662', '317', '白水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2663', '317', '富平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2664', '318', '秦都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2665', '318', '渭城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2666', '318', '杨陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2667', '318', '兴平市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2668', '318', '三原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2669', '318', '泾阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2670', '318', '乾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2671', '318', '礼泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2672', '318', '永寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2673', '318', '彬县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2674', '318', '长武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2675', '318', '旬邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2676', '318', '淳化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2677', '318', '武功县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2678', '319', '吴起县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2679', '319', '宝塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2680', '319', '延长县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2681', '319', '延川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2682', '319', '子长县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2683', '319', '安塞县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2684', '319', '志丹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2685', '319', '甘泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2686', '319', '富县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2687', '319', '洛川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2688', '319', '宜川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2689', '319', '黄龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2690', '319', '黄陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2691', '320', '榆阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2692', '320', '神木县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2693', '320', '府谷县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2694', '320', '横山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2695', '320', '靖边县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2696', '320', '定边县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2697', '320', '绥德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2698', '320', '米脂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2699', '320', '佳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2700', '320', '吴堡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2701', '320', '清涧县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2702', '320', '子洲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2703', '321', '长宁区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2704', '321', '闸北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2705', '321', '闵行区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2706', '321', '徐汇区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2707', '321', '浦东新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2708', '321', '杨浦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2709', '321', '普陀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2710', '321', '静安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2711', '321', '卢湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2712', '321', '虹口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2713', '321', '黄浦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2714', '321', '南汇区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2715', '321', '松江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2716', '321', '嘉定区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2717', '321', '宝山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2718', '321', '青浦区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2719', '321', '金山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2720', '321', '奉贤区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2721', '321', '崇明县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2722', '322', '青羊区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2723', '322', '锦江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2724', '322', '金牛区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2725', '322', '武侯区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2726', '322', '成华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2727', '322', '龙泉驿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2728', '322', '青白江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2729', '322', '新都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2730', '322', '温江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2731', '322', '高新区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2732', '322', '高新西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2733', '322', '都江堰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2734', '322', '彭州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2735', '322', '邛崃市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2736', '322', '崇州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2737', '322', '金堂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2738', '322', '双流县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2739', '322', '郫县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2740', '322', '大邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2741', '322', '蒲江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2742', '322', '新津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2743', '322', '都江堰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2744', '322', '彭州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2745', '322', '邛崃市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2746', '322', '崇州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2747', '322', '金堂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2748', '322', '双流县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2749', '322', '郫县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2750', '322', '大邑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2751', '322', '蒲江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2752', '322', '新津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2753', '323', '涪城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2754', '323', '游仙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2755', '323', '江油市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2756', '323', '盐亭县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2757', '323', '三台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2758', '323', '平武县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2759', '323', '安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2760', '323', '梓潼县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2761', '323', '北川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2762', '324', '马尔康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2763', '324', '汶川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2764', '324', '理县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2765', '324', '茂县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2766', '324', '松潘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2767', '324', '九寨沟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2768', '324', '金川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2769', '324', '小金县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2770', '324', '黑水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2771', '324', '壤塘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2772', '324', '阿坝县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2773', '324', '若尔盖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2774', '324', '红原县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2775', '325', '巴州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2776', '325', '通江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2777', '325', '南江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2778', '325', '平昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2779', '326', '通川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2780', '326', '万源市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2781', '326', '达县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2782', '326', '宣汉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2783', '326', '开江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2784', '326', '大竹县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2785', '326', '渠县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2786', '327', '旌阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2787', '327', '广汉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2788', '327', '什邡市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2789', '327', '绵竹市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2790', '327', '罗江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2791', '327', '中江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2792', '328', '康定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2793', '328', '丹巴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2794', '328', '泸定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2795', '328', '炉霍县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2796', '328', '九龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2797', '328', '甘孜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2798', '328', '雅江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2799', '328', '新龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2800', '328', '道孚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2801', '328', '白玉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2802', '328', '理塘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2803', '328', '德格县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2804', '328', '乡城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2805', '328', '石渠县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2806', '328', '稻城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2807', '328', '色达县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2808', '328', '巴塘县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2809', '328', '得荣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2810', '329', '广安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2811', '329', '华蓥市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2812', '329', '岳池县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2813', '329', '武胜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2814', '329', '邻水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2815', '330', '利州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2816', '330', '元坝区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2817', '330', '朝天区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2818', '330', '旺苍县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2819', '330', '青川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2820', '330', '剑阁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2821', '330', '苍溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2822', '331', '峨眉山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2823', '331', '乐山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2824', '331', '犍为县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2825', '331', '井研县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2826', '331', '夹江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2827', '331', '沐川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2828', '331', '峨边', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2829', '331', '马边', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2830', '332', '西昌市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2831', '332', '盐源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2832', '332', '德昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2833', '332', '会理县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2834', '332', '会东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2835', '332', '宁南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2836', '332', '普格县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2837', '332', '布拖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2838', '332', '金阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2839', '332', '昭觉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2840', '332', '喜德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2841', '332', '冕宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2842', '332', '越西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2843', '332', '甘洛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2844', '332', '美姑县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2845', '332', '雷波县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2846', '332', '木里', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2847', '333', '东坡区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2848', '333', '仁寿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2849', '333', '彭山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2850', '333', '洪雅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2851', '333', '丹棱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2852', '333', '青神县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2853', '334', '阆中市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2854', '334', '南部县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2855', '334', '营山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2856', '334', '蓬安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2857', '334', '仪陇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2858', '334', '顺庆区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2859', '334', '高坪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2860', '334', '嘉陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2861', '334', '西充县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2862', '335', '市中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2863', '335', '东兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2864', '335', '威远县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2865', '335', '资中县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2866', '335', '隆昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2867', '336', '东  区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2868', '336', '西  区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2869', '336', '仁和区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2870', '336', '米易县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2871', '336', '盐边县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2872', '337', '船山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2873', '337', '安居区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2874', '337', '蓬溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2875', '337', '射洪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2876', '337', '大英县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2877', '338', '雨城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2878', '338', '名山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2879', '338', '荥经县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2880', '338', '汉源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2881', '338', '石棉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2882', '338', '天全县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2883', '338', '芦山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2884', '338', '宝兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2885', '339', '翠屏区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2886', '339', '宜宾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2887', '339', '南溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2888', '339', '江安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2889', '339', '长宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2890', '339', '高县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2891', '339', '珙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2892', '339', '筠连县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2893', '339', '兴文县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2894', '339', '屏山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2895', '340', '雁江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2896', '340', '简阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2897', '340', '安岳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2898', '340', '乐至县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2899', '341', '大安区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2900', '341', '自流井区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2901', '341', '贡井区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2902', '341', '沿滩区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2903', '341', '荣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2904', '341', '富顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2905', '342', '江阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2906', '342', '纳溪区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2907', '342', '龙马潭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2908', '342', '泸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2909', '342', '合江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2910', '342', '叙永县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2911', '342', '古蔺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2912', '343', '和平区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2913', '343', '河西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2914', '343', '南开区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2915', '343', '河北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2916', '343', '河东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2917', '343', '红桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2918', '343', '东丽区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2919', '343', '津南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2920', '343', '西青区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2921', '343', '北辰区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2922', '343', '塘沽区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2923', '343', '汉沽区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2924', '343', '大港区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2925', '343', '武清区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2926', '343', '宝坻区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2927', '343', '经济开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2928', '343', '宁河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2929', '343', '静海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2930', '343', '蓟县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2931', '344', '城关区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2932', '344', '林周县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2933', '344', '当雄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2934', '344', '尼木县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2935', '344', '曲水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2936', '344', '堆龙德庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2937', '344', '达孜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2938', '344', '墨竹工卡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2939', '345', '噶尔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2940', '345', '普兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2941', '345', '札达县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2942', '345', '日土县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2943', '345', '革吉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2944', '345', '改则县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2945', '345', '措勤县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2946', '346', '昌都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2947', '346', '江达县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2948', '346', '贡觉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2949', '346', '类乌齐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2950', '346', '丁青县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2951', '346', '察雅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2952', '346', '八宿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2953', '346', '左贡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2954', '346', '芒康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2955', '346', '洛隆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2956', '346', '边坝县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2957', '347', '林芝县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2958', '347', '工布江达县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2959', '347', '米林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2960', '347', '墨脱县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2961', '347', '波密县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2962', '347', '察隅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2963', '347', '朗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2964', '348', '那曲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2965', '348', '嘉黎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2966', '348', '比如县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2967', '348', '聂荣县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2968', '348', '安多县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2969', '348', '申扎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2970', '348', '索县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2971', '348', '班戈县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2972', '348', '巴青县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2973', '348', '尼玛县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2974', '349', '日喀则市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2975', '349', '南木林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2976', '349', '江孜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2977', '349', '定日县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2978', '349', '萨迦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2979', '349', '拉孜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2980', '349', '昂仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2981', '349', '谢通门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2982', '349', '白朗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2983', '349', '仁布县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2984', '349', '康马县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2985', '349', '定结县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2986', '349', '仲巴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2987', '349', '亚东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2988', '349', '吉隆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2989', '349', '聂拉木县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2990', '349', '萨嘎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2991', '349', '岗巴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2992', '350', '乃东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2993', '350', '扎囊县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2994', '350', '贡嘎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2995', '350', '桑日县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2996', '350', '琼结县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2997', '350', '曲松县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2998', '350', '措美县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('2999', '350', '洛扎县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3000', '350', '加查县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3001', '350', '隆子县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3002', '350', '错那县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3003', '350', '浪卡子县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3004', '351', '天山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3005', '351', '沙依巴克区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3006', '351', '新市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3007', '351', '水磨沟区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3008', '351', '头屯河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3009', '351', '达坂城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3010', '351', '米东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3011', '351', '乌鲁木齐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3012', '352', '阿克苏市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3013', '352', '温宿县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3014', '352', '库车县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3015', '352', '沙雅县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3016', '352', '新和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3017', '352', '拜城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3018', '352', '乌什县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3019', '352', '阿瓦提县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3020', '352', '柯坪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3021', '353', '阿拉尔市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3022', '354', '库尔勒市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3023', '354', '轮台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3024', '354', '尉犁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3025', '354', '若羌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3026', '354', '且末县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3027', '354', '焉耆', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3028', '354', '和静县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3029', '354', '和硕县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3030', '354', '博湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3031', '355', '博乐市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3032', '355', '精河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3033', '355', '温泉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3034', '356', '呼图壁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3035', '356', '米泉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3036', '356', '昌吉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3037', '356', '阜康市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3038', '356', '玛纳斯县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3039', '356', '奇台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3040', '356', '吉木萨尔县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3041', '356', '木垒', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3042', '357', '哈密市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3043', '357', '伊吾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3044', '357', '巴里坤', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3045', '358', '和田市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3046', '358', '和田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3047', '358', '墨玉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3048', '358', '皮山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3049', '358', '洛浦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3050', '358', '策勒县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3051', '358', '于田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3052', '358', '民丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3053', '359', '喀什市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3054', '359', '疏附县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3055', '359', '疏勒县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3056', '359', '英吉沙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3057', '359', '泽普县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3058', '359', '莎车县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3059', '359', '叶城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3060', '359', '麦盖提县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3061', '359', '岳普湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3062', '359', '伽师县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3063', '359', '巴楚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3064', '359', '塔什库尔干', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3065', '360', '克拉玛依市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3066', '361', '阿图什市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3067', '361', '阿克陶县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3068', '361', '阿合奇县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3069', '361', '乌恰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3070', '362', '石河子市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3071', '363', '图木舒克市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3072', '364', '吐鲁番市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3073', '364', '鄯善县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3074', '364', '托克逊县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3075', '365', '五家渠市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3076', '366', '阿勒泰市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3077', '366', '布克赛尔', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3078', '366', '伊宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3079', '366', '布尔津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3080', '366', '奎屯市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3081', '366', '乌苏市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3082', '366', '额敏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3083', '366', '富蕴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3084', '366', '伊宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3085', '366', '福海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3086', '366', '霍城县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3087', '366', '沙湾县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3088', '366', '巩留县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3089', '366', '哈巴河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3090', '366', '托里县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3091', '366', '青河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3092', '366', '新源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3093', '366', '裕民县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3094', '366', '和布克赛尔', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3095', '366', '吉木乃县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3096', '366', '昭苏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3097', '366', '特克斯县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3098', '366', '尼勒克县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3099', '366', '察布查尔', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3100', '367', '盘龙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3101', '367', '五华区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3102', '367', '官渡区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3103', '367', '西山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3104', '367', '东川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3105', '367', '安宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3106', '367', '呈贡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3107', '367', '晋宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3108', '367', '富民县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3109', '367', '宜良县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3110', '367', '嵩明县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3111', '367', '石林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3112', '367', '禄劝', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3113', '367', '寻甸', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3114', '368', '兰坪', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3115', '368', '泸水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3116', '368', '福贡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3117', '368', '贡山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3118', '369', '宁洱', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3119', '369', '思茅区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3120', '369', '墨江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3121', '369', '景东', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3122', '369', '景谷', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3123', '369', '镇沅', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3124', '369', '江城', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3125', '369', '孟连', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3126', '369', '澜沧', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3127', '369', '西盟', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3128', '370', '古城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3129', '370', '宁蒗', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3130', '370', '玉龙', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3131', '370', '永胜县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3132', '370', '华坪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3133', '371', '隆阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3134', '371', '施甸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3135', '371', '腾冲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3136', '371', '龙陵县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3137', '371', '昌宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3138', '372', '楚雄市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3139', '372', '双柏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3140', '372', '牟定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3141', '372', '南华县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3142', '372', '姚安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3143', '372', '大姚县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3144', '372', '永仁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3145', '372', '元谋县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3146', '372', '武定县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3147', '372', '禄丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3148', '373', '大理市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3149', '373', '祥云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3150', '373', '宾川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3151', '373', '弥渡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3152', '373', '永平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3153', '373', '云龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3154', '373', '洱源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3155', '373', '剑川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3156', '373', '鹤庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3157', '373', '漾濞', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3158', '373', '南涧', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3159', '373', '巍山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3160', '374', '潞西市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3161', '374', '瑞丽市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3162', '374', '梁河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3163', '374', '盈江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3164', '374', '陇川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3165', '375', '香格里拉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3166', '375', '德钦县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3167', '375', '维西', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3168', '376', '泸西县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3169', '376', '蒙自县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3170', '376', '个旧市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3171', '376', '开远市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3172', '376', '绿春县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3173', '376', '建水县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3174', '376', '石屏县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3175', '376', '弥勒县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3176', '376', '元阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3177', '376', '红河县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3178', '376', '金平', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3179', '376', '河口', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3180', '376', '屏边', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3181', '377', '临翔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3182', '377', '凤庆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3183', '377', '云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3184', '377', '永德县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3185', '377', '镇康县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3186', '377', '双江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3187', '377', '耿马', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3188', '377', '沧源', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3189', '378', '麒麟区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3190', '378', '宣威市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3191', '378', '马龙县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3192', '378', '陆良县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3193', '378', '师宗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3194', '378', '罗平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3195', '378', '富源县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3196', '378', '会泽县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3197', '378', '沾益县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3198', '379', '文山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3199', '379', '砚山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3200', '379', '西畴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3201', '379', '麻栗坡县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3202', '379', '马关县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3203', '379', '丘北县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3204', '379', '广南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3205', '379', '富宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3206', '380', '景洪市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3207', '380', '勐海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3208', '380', '勐腊县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3209', '381', '红塔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3210', '381', '江川县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3211', '381', '澄江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3212', '381', '通海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3213', '381', '华宁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3214', '381', '易门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3215', '381', '峨山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3216', '381', '新平', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3217', '381', '元江', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3218', '382', '昭阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3219', '382', '鲁甸县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3220', '382', '巧家县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3221', '382', '盐津县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3222', '382', '大关县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3223', '382', '永善县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3224', '382', '绥江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3225', '382', '镇雄县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3226', '382', '彝良县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3227', '382', '威信县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3228', '382', '水富县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3229', '383', '西湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3230', '383', '上城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3231', '383', '下城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3232', '383', '拱墅区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3233', '383', '滨江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3234', '383', '江干区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3235', '383', '萧山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3236', '383', '余杭区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3237', '383', '市郊', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3238', '383', '建德市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3239', '383', '富阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3240', '383', '临安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3241', '383', '桐庐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3242', '383', '淳安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3243', '384', '吴兴区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3244', '384', '南浔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3245', '384', '德清县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3246', '384', '长兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3247', '384', '安吉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3248', '385', '南湖区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3249', '385', '秀洲区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3250', '385', '海宁市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3251', '385', '嘉善县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3252', '385', '平湖市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3253', '385', '桐乡市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3254', '385', '海盐县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3255', '386', '婺城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3256', '386', '金东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3257', '386', '兰溪市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3258', '386', '市区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3259', '386', '佛堂镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3260', '386', '上溪镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3261', '386', '义亭镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3262', '386', '大陈镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3263', '386', '苏溪镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3264', '386', '赤岸镇', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3265', '386', '东阳市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3266', '386', '永康市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3267', '386', '武义县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3268', '386', '浦江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3269', '386', '磐安县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3270', '387', '莲都区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3271', '387', '龙泉市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3272', '387', '青田县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3273', '387', '缙云县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3274', '387', '遂昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3275', '387', '松阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3276', '387', '云和县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3277', '387', '庆元县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3278', '387', '景宁', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3279', '388', '海曙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3280', '388', '江东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3281', '388', '江北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3282', '388', '镇海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3283', '388', '北仑区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3284', '388', '鄞州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3285', '388', '余姚市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3286', '388', '慈溪市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3287', '388', '奉化市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3288', '388', '象山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3289', '388', '宁海县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3290', '389', '越城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3291', '389', '上虞市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3292', '389', '嵊州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3293', '389', '绍兴县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3294', '389', '新昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3295', '389', '诸暨市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3296', '390', '椒江区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3297', '390', '黄岩区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3298', '390', '路桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3299', '390', '温岭市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3300', '390', '临海市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3301', '390', '玉环县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3302', '390', '三门县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3303', '390', '天台县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3304', '390', '仙居县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3305', '391', '鹿城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3306', '391', '龙湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3307', '391', '瓯海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3308', '391', '瑞安市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3309', '391', '乐清市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3310', '391', '洞头县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3311', '391', '永嘉县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3312', '391', '平阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3313', '391', '苍南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3314', '391', '文成县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3315', '391', '泰顺县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3316', '392', '定海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3317', '392', '普陀区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3318', '392', '岱山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3319', '392', '嵊泗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3320', '393', '衢州市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3321', '393', '江山市', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3322', '393', '常山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3323', '393', '开化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3324', '393', '龙游县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3325', '394', '合川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3326', '394', '江津区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3327', '394', '南川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3328', '394', '永川区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3329', '394', '南岸区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3330', '394', '渝北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3331', '394', '万盛区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3332', '394', '大渡口区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3333', '394', '万州区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3334', '394', '北碚区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3335', '394', '沙坪坝区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3336', '394', '巴南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3337', '394', '涪陵区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3338', '394', '江北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3339', '394', '九龙坡区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3340', '394', '渝中区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3341', '394', '黔江开发区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3342', '394', '长寿区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3343', '394', '双桥区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3344', '394', '綦江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3345', '394', '潼南县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3346', '394', '铜梁县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3347', '394', '大足县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3348', '394', '荣昌县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3349', '394', '璧山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3350', '394', '垫江县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3351', '394', '武隆县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3352', '394', '丰都县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3353', '394', '城口县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3354', '394', '梁平县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3355', '394', '开县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3356', '394', '巫溪县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3357', '394', '巫山县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3358', '394', '奉节县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3359', '394', '云阳县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3360', '394', '忠县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3361', '394', '石柱', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3362', '394', '彭水', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3363', '394', '酉阳', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3364', '394', '秀山', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3365', '395', '沙田区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3366', '395', '东区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3367', '395', '观塘区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3368', '395', '黄大仙区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3369', '395', '九龙城区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3370', '395', '屯门区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3371', '395', '葵青区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3372', '395', '元朗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3373', '395', '深水埗区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3374', '395', '西贡区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3375', '395', '大埔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3376', '395', '湾仔区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3377', '395', '油尖旺区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3378', '395', '北区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3379', '395', '南区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3380', '395', '荃湾区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3381', '395', '中西区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3382', '395', '离岛区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3383', '396', '澳门', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3384', '397', '台北', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3385', '397', '高雄', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3386', '397', '基隆', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3387', '397', '台中', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3388', '397', '台南', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3389', '397', '新竹', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3390', '397', '嘉义', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3391', '397', '宜兰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3392', '397', '桃园县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3393', '397', '苗栗县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3394', '397', '彰化县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3395', '397', '南投县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3396', '397', '云林县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3397', '397', '屏东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3398', '397', '台东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3399', '397', '花莲县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3400', '397', '澎湖县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3401', '3', '合肥', '2', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3402', '3401', '庐阳区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3403', '3401', '瑶海区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3404', '3401', '蜀山区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3405', '3401', '包河区', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3406', '3401', '长丰县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3407', '3401', '肥东县', '3', '0', '', '0', '0');
INSERT INTO `ecs_region` VALUES ('3408', '3401', '肥西县', '3', '0', '', '0', '0');

-- ----------------------------
-- Table structure for `ecs_reg_extend_info`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_reg_extend_info`;
CREATE TABLE `ecs_reg_extend_info` (
  `Id` int(10) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reg_field_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_reg_extend_info
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_reg_fields`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_reg_fields`;
CREATE TABLE `ecs_reg_fields` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL default '100',
  `display` tinyint(1) unsigned NOT NULL default '1',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `is_need` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_reg_fields
-- ----------------------------
INSERT INTO `ecs_reg_fields` VALUES ('1', 'MSN', '0', '0', '1', '1');
INSERT INTO `ecs_reg_fields` VALUES ('2', 'QQ', '0', '0', '1', '1');
INSERT INTO `ecs_reg_fields` VALUES ('3', '办公电话', '0', '0', '1', '1');
INSERT INTO `ecs_reg_fields` VALUES ('4', '家庭电话', '0', '0', '1', '1');
INSERT INTO `ecs_reg_fields` VALUES ('5', '手机', '0', '1', '1', '1');
INSERT INTO `ecs_reg_fields` VALUES ('6', '密码找回问题', '0', '0', '1', '1');

-- ----------------------------
-- Table structure for `ecs_role`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_role`;
CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL auto_increment,
  `role_name` varchar(60) NOT NULL default '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY  (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_role
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_searchengine`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_searchengine`;
CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL default '0000-00-00',
  `searchengine` varchar(20) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_searchengine
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_sessions`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_sessions`;
CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_sessions
-- ----------------------------
INSERT INTO `ecs_sessions` VALUES ('59ab3c1809e6f73eda64b76905e9463a', '1395318908', '0', '0', '127.0.0.1', '0', '0', '1.00', '0', 'a:6:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";}');
INSERT INTO `ecs_sessions` VALUES ('f7502b220e0c6fd59f505162b97faf97', '1395320541', '0', '1', '127.0.0.1', '0', '0', '0.00', '0', 'a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1395320432;s:12:\"suppliers_id\";s:1:\"0\";}');

-- ----------------------------
-- Table structure for `ecs_sessions_data`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_sessions_data`;
CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `data` longtext NOT NULL,
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_sessions_data
-- ----------------------------
INSERT INTO `ecs_sessions_data` VALUES ('ac11c107c1713440d5d3c5577086478d', '4171189805', 'a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:2:\"76\";s:11:\"region_name\";s:6:\"广州\";s:7:\"pin_yin\";s:9:\"guangzhou\";s:12:\"captcha_word\";s:16:\"MmU4Mjc0OTZjMA==\";s:13:\"captcha_login\";s:16:\"ZjVhMzRjNGI4ZA==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('60aaec644880d3278070c0b4bb991a8e', '4294967295', 'a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"MjFmMmFhNWYyYw==\";s:14:\"display_search\";s:4:\"grid\";}');
INSERT INTO `ecs_sessions_data` VALUES ('57b636506734a13f5df619953b3b882c', '4294967295', 'a:10:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:2:\"52\";s:11:\"region_name\";s:6:\"北京\";s:7:\"pin_yin\";s:7:\"beijing\";s:13:\"captcha_login\";s:16:\"Yjg5Njk1MTViYg==\";s:9:\"last_time\";s:10:\"1391406048\";s:7:\"last_ip\";s:12:\"222.84.77.12\";s:12:\"captcha_word\";s:16:\"NTk1OTg5NzFlMQ==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('b61e7c3e852f5d248e037d70b009792b', '4174243557', 'a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:2:\"85\";s:11:\"region_name\";s:6:\"茂名\";s:7:\"pin_yin\";s:1:\"m\";s:12:\"captcha_word\";s:16:\"YjBjYjBiNmY2Zg==\";s:13:\"captcha_login\";s:16:\"ODVmYzRlODA0Ng==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('98e4df74e9bed1f891e75781c4cc07aa', '4294967295', 'a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1391490574\";s:7:\"last_ip\";s:13:\"111.59.234.94\";s:12:\"captcha_word\";s:16:\"Y2ExZjQzY2E3NQ==\";s:9:\"region_id\";s:2:\"52\";s:11:\"region_name\";s:6:\"北京\";s:7:\"pin_yin\";s:7:\"beijing\";}');
INSERT INTO `ecs_sessions_data` VALUES ('e7855e188787a647a6b3e54fafb02fe9', '4294967295', 'a:8:{s:7:\"from_ad\";i:14;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"Yzc2MmU4YjUyMQ==\";s:14:\"display_search\";s:4:\"grid\";}');
INSERT INTO `ecs_sessions_data` VALUES ('eb06ef94c03edc7753dfde47c4a8de98', '4294967295', 'a:9:{s:7:\"from_ad\";i:149;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:2:\"81\";s:11:\"region_name\";s:6:\"河源\";s:7:\"pin_yin\";s:1:\"h\";s:12:\"captcha_word\";s:16:\"NTRiYzEzNmIyZA==\";s:13:\"captcha_login\";s:16:\"ZWQ5OWZiYjhlMw==\";s:14:\"display_search\";s:4:\"grid\";}');
INSERT INTO `ecs_sessions_data` VALUES ('e171ab4aba1219084f90f3f9a96e4762', '2785936240', 'a:8:{s:7:\"from_ad\";i:2;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:1;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:1:\"d\";s:13:\"captcha_login\";s:16:\"MTQwYWZlNGIyYg==\";s:12:\"captcha_word\";s:16:\"Mzk1ODBhNjUwOQ==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('1fea93e20a4b44585f901cfbc194a03a', '4294967295', 'a:8:{s:7:\"from_ad\";i:66;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"N2E1ZGQ4MzE4Ng==\";s:13:\"captcha_login\";s:16:\"YWI1ODg5OTg3MQ==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('3cffbf9dfcd517936e55d4bf0b248638', '4179210559', 'a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";s:2:\"76\";s:11:\"region_name\";s:6:\"广州\";s:7:\"pin_yin\";s:9:\"guangzhou\";s:14:\"display_search\";s:4:\"grid\";s:12:\"captcha_word\";s:16:\"YThlZDY3NWU4Zg==\";s:9:\"flow_type\";i:0;}');
INSERT INTO `ecs_sessions_data` VALUES ('63d40ddbe5c7fed4100b0e62fbc728fa', '4179686196', 'a:8:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:1;s:9:\"region_id\";s:2:\"83\";s:11:\"region_name\";s:6:\"江门\";s:7:\"pin_yin\";s:1:\"j\";s:12:\"captcha_word\";s:16:\"YTc4YmFiYTlkYQ==\";s:13:\"captcha_login\";s:16:\"MWE4ZTY0OGM5ZQ==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('43db34058795a3ebcd71e4a4bf3c65c4', '4294967295', 'a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"ZTcxNWJiNGZkNQ==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:9:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:1;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;s:8:\"bonus_id\";s:0:\"\";}}');
INSERT INTO `ecs_sessions_data` VALUES ('e8284dc56541a7edcbd297e74b6658f0', '4294967295', 'a:10:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"YmU0YjVlN2JjOA==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:8:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:0;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;}s:13:\"captcha_login\";s:16:\"ZTk1ZTA3MzBlZQ==\";}');
INSERT INTO `ecs_sessions_data` VALUES ('e377fc2ee6ac8905f56b5cdb1754dc29', '4294967295', 'a:4:{s:9:\"last_time\";i:1393912134;s:7:\"last_ip\";s:0:\"\";s:10:\"login_fail\";i:0;s:14:\"consignee_info\";a:14:{s:10:\"address_id\";i:0;s:9:\"consignee\";s:9:\"发挥好\";s:7:\"country\";i:1;s:8:\"province\";i:6;s:4:\"city\";i:84;s:8:\"district\";i:773;s:5:\"email\";s:0:\"\";s:7:\"address\";s:18:\"发挥好哈哈哈\";s:7:\"zipcode\";s:0:\"\";s:3:\"tel\";s:11:\"15013475862\";s:6:\"mobile\";s:0:\"\";s:13:\"sign_building\";s:0:\"\";s:9:\"best_time\";s:0:\"\";s:7:\"user_id\";s:1:\"2\";}}');
INSERT INTO `ecs_sessions_data` VALUES ('e2e274ecf6ae62af1d10ac4b60c6c2f6', '2790591323', 'a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"region_id\";i:0;s:11:\"region_name\";s:9:\"全国站\";s:7:\"pin_yin\";s:5:\"china\";s:12:\"captcha_word\";s:16:\"NWEzZGZlZDViMw==\";s:9:\"flow_type\";i:0;s:10:\"flow_order\";a:8:{s:14:\"extension_code\";s:0:\"\";s:11:\"shipping_id\";i:0;s:6:\"pay_id\";i:0;s:7:\"pack_id\";i:0;s:7:\"card_id\";i:0;s:5:\"bonus\";i:0;s:8:\"integral\";i:0;s:7:\"surplus\";i:0;}}');

-- ----------------------------
-- Table structure for `ecs_shipping`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_shipping`;
CREATE TABLE `ecs_shipping` (
  `shipping_id` tinyint(3) unsigned NOT NULL auto_increment,
  `shipping_code` varchar(20) NOT NULL default '',
  `shipping_name` varchar(120) NOT NULL default '',
  `shipping_desc` varchar(255) NOT NULL default '',
  `insure` varchar(10) NOT NULL default '0',
  `support_cod` tinyint(1) unsigned NOT NULL default '0',
  `enabled` tinyint(1) unsigned NOT NULL default '0',
  `shipping_print` text NOT NULL,
  `print_bg` varchar(255) default NULL,
  `config_lable` text,
  `print_model` tinyint(1) default '0',
  `shipping_order` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`shipping_id`),
  KEY `shipping_code` (`shipping_code`,`enabled`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_shipping
-- ----------------------------
INSERT INTO `ecs_shipping` VALUES ('1', 'sf_express', '顺丰速运', '江、浙、沪地区首重15元/KG，续重2元/KG，其余城市首重20元/KG', '0', '0', '1', '', '/images/receipt/dly_sf_express.jpg', 't_shop_name,网店-名称,150,29,112,137,b_shop_name||,||t_shop_address,网店-地址,268,55,105,168,b_shop_address||,||t_shop_tel,网店-联系电话,55,25,177,224,b_shop_tel||,||t_customer_name,收件人-姓名,78,23,299,265,b_customer_name||,||t_customer_address,收件人-详细地址,271,94,104,293,b_customer_address||,||', '2', '0');
INSERT INTO `ecs_shipping` VALUES ('2', 'sto_express', '申通快递', '江、浙、沪地区首重为15元/KG，其他地区18元/KG， 续重均为5-6元/KG， 云南地区为8元', '0', '0', '1', '', '/images/receipt/dly_sto_express.jpg', 't_shop_address,网店-地址,235,48,131,152,b_shop_address||,||t_shop_name,网店-名称,237,26,131,200,b_shop_name||,||t_shop_tel,网店-联系电话,96,36,144,257,b_shop_tel||,||t_customer_post,收件人-邮编,86,23,578,268,b_customer_post||,||t_customer_address,收件人-详细地址,232,49,434,149,b_customer_address||,||t_customer_name,收件人-姓名,151,27,449,231,b_customer_name||,||t_customer_tel,收件人-电话,90,32,452,261,b_customer_tel||,||', '2', '0');

-- ----------------------------
-- Table structure for `ecs_shipping_area`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_shipping_area`;
CREATE TABLE `ecs_shipping_area` (
  `shipping_area_id` smallint(5) unsigned NOT NULL auto_increment,
  `shipping_area_name` varchar(150) NOT NULL default '',
  `shipping_id` tinyint(3) unsigned NOT NULL default '0',
  `configure` text NOT NULL,
  PRIMARY KEY  (`shipping_area_id`),
  KEY `shipping_id` (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_shipping_area
-- ----------------------------
INSERT INTO `ecs_shipping_area` VALUES ('6', '北京', '2', 'a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"15\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:2:\"10\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"5\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');
INSERT INTO `ecs_shipping_area` VALUES ('4', '北京', '1', 'a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"20\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:2:\"15\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"2\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');
INSERT INTO `ecs_shipping_area` VALUES ('3', '广东', '1', 'a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"20\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:1:\"5\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"2\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');
INSERT INTO `ecs_shipping_area` VALUES ('5', '广西', '1', 'a:5:{i:0;a:2:{s:4:\"name\";s:8:\"item_fee\";s:5:\"value\";s:2:\"20\";}i:1;a:2:{s:4:\"name\";s:8:\"base_fee\";s:5:\"value\";s:1:\"6\";}i:2;a:2:{s:4:\"name\";s:8:\"step_fee\";s:5:\"value\";s:1:\"2\";}i:3;a:2:{s:4:\"name\";s:10:\"free_money\";s:5:\"value\";s:0:\"\";}i:4;a:2:{s:4:\"name\";s:16:\"fee_compute_mode\";s:5:\"value\";s:9:\"by_weight\";}}');

-- ----------------------------
-- Table structure for `ecs_shop_config`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_shop_config`;
CREATE TABLE `ecs_shop_config` (
  `id` smallint(5) unsigned NOT NULL auto_increment,
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `code` varchar(30) NOT NULL default '',
  `type` varchar(10) NOT NULL default '',
  `store_range` varchar(255) NOT NULL default '',
  `store_dir` varchar(255) NOT NULL default '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL default '1',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=904 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_shop_config
-- ----------------------------
INSERT INTO `ecs_shop_config` VALUES ('1', '0', 'shop_info', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('2', '0', 'basic', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('3', '0', 'display', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('4', '0', 'shopping_flow', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('5', '0', 'smtp', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('6', '0', 'hidden', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('7', '0', 'goods', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('8', '0', 'sms', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('9', '0', 'wap', 'group', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('101', '1', 'shop_name', 'text', '', '', '铭东商城', '1');
INSERT INTO `ecs_shop_config` VALUES ('102', '1', 'shop_title', 'text', '', '', '铭东商城', '1');
INSERT INTO `ecs_shop_config` VALUES ('103', '1', 'shop_desc', 'text', '', '', '铭东商城', '1');
INSERT INTO `ecs_shop_config` VALUES ('104', '1', 'shop_keywords', 'text', '', '', '铭东商城', '1');
INSERT INTO `ecs_shop_config` VALUES ('105', '1', 'shop_country', 'manual', '', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('106', '1', 'shop_province', 'manual', '', '', '6', '1');
INSERT INTO `ecs_shop_config` VALUES ('107', '1', 'shop_city', 'manual', '', '', '76', '1');
INSERT INTO `ecs_shop_config` VALUES ('108', '1', 'shop_address', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('109', '1', 'qq', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('110', '1', 'ww', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('111', '1', 'skype', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('112', '1', 'ym', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('113', '1', 'msn', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('114', '1', 'service_email', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('115', '1', 'service_phone', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('116', '1', 'shop_closed', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('117', '1', 'close_comment', 'textarea', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('118', '1', 'shop_logo', 'file', '', '../themes/{$template}/images/', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('119', '1', 'licensed', 'select', '0,1', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('120', '1', 'user_notice', 'textarea', '', '', '用户中心公告！', '1');
INSERT INTO `ecs_shop_config` VALUES ('121', '1', 'shop_notice', 'textarea', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('122', '1', 'shop_reg_closed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('201', '2', 'lang', 'manual', '', '', 'zh_cn', '1');
INSERT INTO `ecs_shop_config` VALUES ('202', '2', 'icp_number', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('203', '2', 'icp_file', 'file', '', '../cert/', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('204', '2', 'watermark', 'file', '', '../images/', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('205', '2', 'watermark_place', 'select', '0,1,2,3,4,5', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('206', '2', 'watermark_alpha', 'text', '', '', '65', '1');
INSERT INTO `ecs_shop_config` VALUES ('207', '2', 'use_storage', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('208', '2', 'market_price_rate', 'text', '', '', '1.2', '1');
INSERT INTO `ecs_shop_config` VALUES ('209', '2', 'rewrite', 'select', '0,1,2', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('210', '2', 'integral_name', 'text', '', '', '积分', '1');
INSERT INTO `ecs_shop_config` VALUES ('211', '2', 'integral_scale', 'text', '', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('212', '2', 'integral_percent', 'text', '', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('213', '2', 'sn_prefix', 'text', '', '', 'ECS', '1');
INSERT INTO `ecs_shop_config` VALUES ('214', '2', 'comment_check', 'select', '0,1', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('215', '2', 'no_picture', 'file', '', '../images/', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('218', '2', 'stats_code', 'textarea', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('219', '2', 'cache_time', 'text', '', '', '3600', '1');
INSERT INTO `ecs_shop_config` VALUES ('220', '2', 'register_points', 'text', '', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('221', '2', 'enable_gzip', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('222', '2', 'top10_time', 'select', '0,1,2,3,4', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('223', '2', 'timezone', 'options', '-12,-11,-10,-9,-8,-7,-6,-5,-4,-3.5,-3,-2,-1,0,1,2,3,3.5,4,4.5,5,5.5,5.75,6,6.5,7,8,9,9.5,10,11,12', '', '8', '1');
INSERT INTO `ecs_shop_config` VALUES ('224', '2', 'upload_size_limit', 'options', '-1,0,64,128,256,512,1024,2048,4096', '', '64', '1');
INSERT INTO `ecs_shop_config` VALUES ('226', '2', 'cron_method', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('227', '2', 'comment_factor', 'select', '0,1,2,3', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('228', '2', 'enable_order_check', 'select', '0,1', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('229', '2', 'default_storage', 'text', '', '', '1000', '1');
INSERT INTO `ecs_shop_config` VALUES ('230', '2', 'bgcolor', 'text', '', '', '#FFFFFF', '1');
INSERT INTO `ecs_shop_config` VALUES ('231', '2', 'visit_stats', 'select', 'on,off', '', 'on', '1');
INSERT INTO `ecs_shop_config` VALUES ('232', '2', 'send_mail_on', 'select', 'on,off', '', 'off', '1');
INSERT INTO `ecs_shop_config` VALUES ('233', '2', 'auto_generate_gallery', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('234', '2', 'retain_original_img', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('235', '2', 'member_email_validate', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('236', '2', 'message_board', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('239', '2', 'certificate_id', 'hidden', '', '', '1080952234', '1');
INSERT INTO `ecs_shop_config` VALUES ('240', '2', 'token', 'hidden', '', '', 'fb9fd1c63d073d8f068720b81bb66d821ae249568c6195ae46ea0e944076e1c7', '1');
INSERT INTO `ecs_shop_config` VALUES ('241', '2', 'certi', 'hidden', '', '', 'http://service.shopex.cn/openapi/api.php', '1');
INSERT INTO `ecs_shop_config` VALUES ('242', '2', 'send_verify_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('243', '2', 'ent_id', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('244', '2', 'ent_ac', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('245', '2', 'ent_sign', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('246', '2', 'ent_email', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('301', '3', 'date_format', 'hidden', '', '', 'Y-m-d', '1');
INSERT INTO `ecs_shop_config` VALUES ('302', '3', 'time_format', 'text', '', '', 'Y-m-d H:i:s', '1');
INSERT INTO `ecs_shop_config` VALUES ('303', '3', 'currency_format', 'text', '', '', '￥%s', '1');
INSERT INTO `ecs_shop_config` VALUES ('304', '3', 'thumb_width', 'text', '', '', '300', '1');
INSERT INTO `ecs_shop_config` VALUES ('305', '3', 'thumb_height', 'text', '', '', '200', '1');
INSERT INTO `ecs_shop_config` VALUES ('306', '3', 'image_width', 'text', '', '', '565', '1');
INSERT INTO `ecs_shop_config` VALUES ('307', '3', 'image_height', 'text', '', '', '374', '1');
INSERT INTO `ecs_shop_config` VALUES ('312', '3', 'top_number', 'text', '', '', '10', '1');
INSERT INTO `ecs_shop_config` VALUES ('313', '3', 'history_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_shop_config` VALUES ('314', '3', 'comments_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_shop_config` VALUES ('315', '3', 'bought_goods', 'text', '', '', '3', '1');
INSERT INTO `ecs_shop_config` VALUES ('316', '3', 'article_number', 'text', '', '', '8', '1');
INSERT INTO `ecs_shop_config` VALUES ('317', '3', 'goods_name_length', 'text', '', '', '18', '1');
INSERT INTO `ecs_shop_config` VALUES ('318', '3', 'price_format', 'select', '0,1,2,3,4,5', '', '5', '1');
INSERT INTO `ecs_shop_config` VALUES ('319', '3', 'page_size', 'text', '', '', '30', '1');
INSERT INTO `ecs_shop_config` VALUES ('320', '3', 'sort_order_type', 'select', '0,1,2', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('321', '3', 'sort_order_method', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('322', '3', 'show_order_type', 'select', '0,1,2', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('323', '3', 'attr_related_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_shop_config` VALUES ('324', '3', 'goods_gallery_number', 'text', '', '', '5', '1');
INSERT INTO `ecs_shop_config` VALUES ('325', '3', 'article_title_length', 'text', '', '', '16', '1');
INSERT INTO `ecs_shop_config` VALUES ('326', '3', 'name_of_region_1', 'text', '', '', '国家', '1');
INSERT INTO `ecs_shop_config` VALUES ('327', '3', 'name_of_region_2', 'text', '', '', '省', '1');
INSERT INTO `ecs_shop_config` VALUES ('328', '3', 'name_of_region_3', 'text', '', '', '市', '1');
INSERT INTO `ecs_shop_config` VALUES ('329', '3', 'name_of_region_4', 'text', '', '', '区', '1');
INSERT INTO `ecs_shop_config` VALUES ('330', '3', 'search_keywords', 'text', '', '', '布艺沙发,多功能床,儿童床,餐桌椅,家用书桌,吸顶灯', '0');
INSERT INTO `ecs_shop_config` VALUES ('332', '3', 'related_goods_number', 'text', '', '', '4', '1');
INSERT INTO `ecs_shop_config` VALUES ('333', '3', 'help_open', 'select', '0,1', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('334', '3', 'article_page_size', 'text', '', '', '10', '1');
INSERT INTO `ecs_shop_config` VALUES ('335', '3', 'page_style', 'select', '0,1', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('336', '3', 'recommend_order', 'select', '0,1', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('337', '3', 'index_ad', 'hidden', '', '', 'sys', '1');
INSERT INTO `ecs_shop_config` VALUES ('401', '4', 'can_invoice', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('402', '4', 'use_integral', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('403', '4', 'use_bonus', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('404', '4', 'use_surplus', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('405', '4', 'use_how_oos', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('406', '4', 'send_confirm_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('407', '4', 'send_ship_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('408', '4', 'send_cancel_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('409', '4', 'send_invalid_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('410', '4', 'order_pay_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('411', '4', 'order_unpay_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('412', '4', 'order_ship_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('413', '4', 'order_receive_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('414', '4', 'order_unship_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('415', '4', 'order_return_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('416', '4', 'order_invalid_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('417', '4', 'order_cancel_note', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('418', '4', 'invoice_content', 'textarea', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('419', '4', 'anonymous_buy', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('420', '4', 'min_goods_amount', 'text', '', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('421', '4', 'one_step_buy', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('422', '4', 'invoice_type', 'manual', '', '', 'a:2:{s:4:\"type\";a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:0:\"\";}s:4:\"rate\";a:3:{i:0;d:1;i:1;d:1.5;i:2;d:0;}}', '1');
INSERT INTO `ecs_shop_config` VALUES ('423', '4', 'stock_dec_time', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('424', '4', 'cart_confirm', 'options', '1,2,3,4', '', '3', '0');
INSERT INTO `ecs_shop_config` VALUES ('425', '4', 'send_service_email', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('426', '4', 'show_goods_in_cart', 'select', '1,2,3', '', '3', '1');
INSERT INTO `ecs_shop_config` VALUES ('427', '4', 'show_attr_in_cart', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('501', '5', 'smtp_host', 'text', '', '', 'localhost', '1');
INSERT INTO `ecs_shop_config` VALUES ('502', '5', 'smtp_port', 'text', '', '', '25', '1');
INSERT INTO `ecs_shop_config` VALUES ('503', '5', 'smtp_user', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('504', '5', 'smtp_pass', 'password', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('505', '5', 'smtp_mail', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('506', '5', 'mail_charset', 'select', 'UTF8,GB2312,BIG5', '', 'UTF8', '1');
INSERT INTO `ecs_shop_config` VALUES ('507', '5', 'mail_service', 'select', '0,1', '', '0', '0');
INSERT INTO `ecs_shop_config` VALUES ('508', '5', 'smtp_ssl', 'select', '0,1', '', '0', '0');
INSERT INTO `ecs_shop_config` VALUES ('601', '6', 'integrate_code', 'hidden', '', '', 'ecshop', '1');
INSERT INTO `ecs_shop_config` VALUES ('602', '6', 'integrate_config', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('603', '6', 'hash_code', 'hidden', '', '', '93cca7258ca52ad07b36e47f2baa7685', '1');
INSERT INTO `ecs_shop_config` VALUES ('604', '6', 'template', 'hidden', '', '', 'meilele', '1');
INSERT INTO `ecs_shop_config` VALUES ('605', '6', 'install_date', 'hidden', '', '', '1385534808', '1');
INSERT INTO `ecs_shop_config` VALUES ('606', '6', 'ecs_version', 'hidden', '', '', 'v2.7.3', '1');
INSERT INTO `ecs_shop_config` VALUES ('607', '6', 'sms_user_name', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('608', '6', 'sms_password', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('609', '6', 'sms_auth_str', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('610', '6', 'sms_domain', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('611', '6', 'sms_count', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('612', '6', 'sms_total_money', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('613', '6', 'sms_balance', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('614', '6', 'sms_last_request', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('616', '6', 'affiliate', 'hidden', '', '', 'a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}', '1');
INSERT INTO `ecs_shop_config` VALUES ('617', '6', 'captcha', 'hidden', '', '', '39', '1');
INSERT INTO `ecs_shop_config` VALUES ('618', '6', 'captcha_width', 'hidden', '', '', '100', '1');
INSERT INTO `ecs_shop_config` VALUES ('619', '6', 'captcha_height', 'hidden', '', '', '20', '1');
INSERT INTO `ecs_shop_config` VALUES ('620', '6', 'sitemap', 'hidden', '', '', 'a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}', '0');
INSERT INTO `ecs_shop_config` VALUES ('621', '6', 'points_rule', 'hidden', '', '', '', '0');
INSERT INTO `ecs_shop_config` VALUES ('622', '6', 'flash_theme', 'hidden', '', '', 'dynfocus', '1');
INSERT INTO `ecs_shop_config` VALUES ('623', '6', 'stylename', 'hidden', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('701', '7', 'show_goodssn', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('702', '7', 'show_brand', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('703', '7', 'show_goodsweight', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('704', '7', 'show_goodsnumber', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('705', '7', 'show_addtime', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('706', '7', 'goodsattr_style', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('707', '7', 'show_marketprice', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('801', '8', 'sms_shop_mobile', 'text', '', '', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('802', '8', 'sms_order_placed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('803', '8', 'sms_order_payed', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('804', '8', 'sms_order_shipped', 'select', '1,0', '', '0', '1');
INSERT INTO `ecs_shop_config` VALUES ('901', '9', 'wap_config', 'select', '1,0', '', '1', '1');
INSERT INTO `ecs_shop_config` VALUES ('902', '9', 'wap_logo', 'file', '', '../images/', '', '1');
INSERT INTO `ecs_shop_config` VALUES ('903', '2', 'message_check', 'select', '1,0', '', '1', '1');

-- ----------------------------
-- Table structure for `ecs_snatch_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_snatch_log`;
CREATE TABLE `ecs_snatch_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `snatch_id` tinyint(3) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `bid_price` decimal(10,2) NOT NULL default '0.00',
  `bid_time` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`),
  KEY `snatch_id` (`snatch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_snatch_log
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_stats`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_stats`;
CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `visit_times` smallint(5) unsigned NOT NULL default '1',
  `browser` varchar(60) NOT NULL default '',
  `system` varchar(20) NOT NULL default '',
  `language` varchar(20) NOT NULL default '',
  `area` varchar(30) NOT NULL default '',
  `referer_domain` varchar(100) NOT NULL default '',
  `referer_path` varchar(200) NOT NULL default '',
  `access_url` varchar(255) NOT NULL default '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_stats
-- ----------------------------
INSERT INTO `ecs_stats` VALUES ('1385535154', '127.0.0.1', '1', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385541081', '127.0.0.1', '2', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385544751', '127.0.0.1', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385550864', '127.0.0.1', '3', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385560164', '127.0.0.1', '4', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385620379', '127.0.0.1', '5', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385638055', '127.0.0.1', '6', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385645888', '127.0.0.1', '7', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/category.php?id=2', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385657157', '127.0.0.1', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385709311', '127.0.0.1', '8', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/category.php?id=1', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1385718167', '127.0.0.1', '9', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1385727076', '127.0.0.1', '10', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/goods.php?id=1', '/gallery.php');
INSERT INTO `ecs_stats` VALUES ('1385774558', '127.0.0.1', '11', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/category.php?id=2', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1385783719', '127.0.0.1', '12', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1385785923', '127.0.0.1', '13', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/flow.php?step=consignee&direct_shopping=1', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1385802180', '127.0.0.1', '14', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/flow.php', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1385805427', '127.0.0.1', '15', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/flow.php', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1385807806', '127.0.0.1', '16', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1385812349', '127.0.0.1', '17', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1385817694', '127.0.0.1', '18', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/article.php?id=33', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1385899644', '127.0.0.1', '19', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/goods.php?id=1', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1385906619', '127.0.0.1', '20', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1385910289', '127.0.0.1', '2', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1385969879', '127.0.0.1', '21', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385971926', '127.0.0.1', '3', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385979783', '127.0.0.1', '22', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385981669', '127.0.0.1', '23', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/category.php?id=1', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385982281', '127.0.0.1', '24', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/category.php?id=1', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1385987525', '127.0.0.1', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1385994454', '127.0.0.1', '2', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1385998184', '127.0.0.1', '3', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1385999599', '127.0.0.1', '2', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1386046050', '127.0.0.1', '25', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/brand.php', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1386046964', '127.0.0.1', '4', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1386056217', '127.0.0.1', '5', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1386066454', '127.0.0.1', '6', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1386074416', '127.0.0.1', '26', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/goods.php?id=1', '/captcha.php');
INSERT INTO `ecs_stats` VALUES ('1386075656', '127.0.0.1', '7', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1386090555', '127.0.0.1', '27', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/user.php?act=logout', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1386143639', '127.0.0.1', '28', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/brand.php?id=2', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1386152928', '127.0.0.1', '29', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1386159479', '127.0.0.1', '8', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1386164551', '127.0.0.1', '30', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1386165470', '127.0.0.1', '9', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386166858', '127.0.0.1', '31', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/flow.php', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1386168403', '127.0.0.1', '10', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', 'http://meilele2014.test.com', '/flow.php', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1386172434', '127.0.0.1', '11', 'Internet Explorer 8.0', 'Windows NT', 'zh-cn', 'LAN', 'http://meilele2014.test.com', '/flow.php', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1386227760', '127.0.0.1', '32', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/flow.php?step=checkout', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386229473', '127.0.0.1', '12', 'Internet Explorer 6.0', 'Windows NT', 'zh-cn', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386229515', '127.0.0.1', '3', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386230048', '127.0.0.1', '13', 'Internet Explorer 8.0', 'Windows NT', 'zh-cn', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1386230940', '127.0.0.1', '4', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1386231191', '127.0.0.1', '1', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386231272', '127.0.0.1', '1', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386231306', '127.0.0.1', '1', 'Safari 537.19', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386239687', '127.0.0.1', '33', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://meilele2014.test.com', '/brand.php', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386316263', '127.0.0.1', '1', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386319936', '127.0.0.1', '2', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386331582', '127.0.0.1', '3', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386341659', '127.0.0.1', '4', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/index.php?id=77', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386405496', '127.0.0.1', '5', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/index.php?id=77', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386488741', '127.0.0.1', '6', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/index.php?id=52', '/expr_show.php');
INSERT INTO `ecs_stats` VALUES ('1386494733', '127.0.0.1', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386525668', '127.0.0.1', '7', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386727305', '127.0.0.1', '1', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386753680', '127.0.0.1', '2', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'LAN', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1386753811', '127.0.0.1', '2', 'FireFox 25.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/user.php?act=order_detail&order_id=6', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1386766115', '127.0.0.1', '3', 'Internet Explorer 6.0', 'Windows NT', 'zh-cn', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1386766194', '127.0.0.1', '4', 'Internet Explorer 6.0', 'Windows NT', 'zh-cn', 'LAN', '', '', '/search_list.php');
INSERT INTO `ecs_stats` VALUES ('1386766207', '127.0.0.1', '5', 'Internet Explorer 6.0', 'Windows NT', 'zh-cn', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1386766309', '127.0.0.1', '1', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1387090884', '127.0.0.1', '3', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387096108', '127.0.0.1', '4', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/topic.php', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1387099065', '127.0.0.1', '5', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/topic.php', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1387106081', '127.0.0.1', '6', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/topic.php', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1387179947', '127.0.0.1', '7', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1387182616', '127.0.0.1', '8', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/article.php?act=list&cat_id=2', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1387190059', '127.0.0.1', '9', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/article.php?id=2', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1387196229', '127.0.0.1', '10', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1387283354', '127.0.0.1', '11', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1387337150', '127.0.0.1', '12', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387428947', '127.0.0.1', '13', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/category.php?id=1', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1387432884', '127.0.0.1', '2', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1387507510', '127.0.0.1', '14', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387700617', '127.0.0.1', '15', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387775199', '127.0.0.1', '16', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387778971', '127.0.0.1', '17', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1387961317', '127.0.0.1', '18', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388062820', '127.0.0.1', '19', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388123951', '127.0.0.1', '20', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1388126493', '127.0.0.1', '21', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/goods-1.html', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1388136598', '127.0.0.1', '22', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/group_buy.html', '/flow.php');
INSERT INTO `ecs_stats` VALUES ('1388141274', '127.0.0.1', '23', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/exchange.php');
INSERT INTO `ecs_stats` VALUES ('1388150254', '127.0.0.1', '24', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/goods.php?act=list', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1388155214', '127.0.0.1', '25', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388322403', '127.0.0.1', '26', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388326162', '127.0.0.1', '27', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/themes/meilele/style.css', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388331594', '127.0.0.1', '28', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/themes/meilele/style.css', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388396826', '127.0.0.1', '29', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1388398950', '127.0.0.1', '30', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/user.php?act=order_list&page=1', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1388405105', '127.0.0.1', '31', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/user.php', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1388467981', '127.0.0.1', '32', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/goods-2.html', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1388656815', '127.0.0.1', '33', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388731274', '127.0.0.1', '34', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388896392', '127.0.0.1', '35', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1388911001', '127.0.0.1', '36', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1389057420', '127.0.0.1', '37', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://mll2014.test.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1390395544', '103.24.1.155', '1', 'Internet Explorer 7.0', 'Windows 2003', 'zh-cn', 'IANA', 'http://meilele.51131430.com', '/admin/index.php?act=top', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1390396314', '111.59.192.75', '23', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1390470193', '124.73.96.109', '1', 'Safari 534.30', 'Linux', 'zh-CN, en-US', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1390470356', '124.73.96.109', '1', 'Safari 537.1', 'Windows XP', 'zh-CN,zh', '', 'http://meilele.51131430.com', '/mobile', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1390475527', '117.136.20.70', '2', 'Safari 534.30', 'Linux', 'zh-CN, en-US', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1390544025', '124.227.254.66', '24', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391404844', '110.75.105.252', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391404844', '110.75.105.252', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391404855', '121.31.254.44', '4', 'Safari 534.31', 'Linux', 'zh-cn', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391404861', '110.75.105.250', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391404861', '110.75.105.250', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391405395', '113.110.232.185', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391405395', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391405456', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405478', '110.75.105.198', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405482', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1391405492', '110.75.105.197', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405528', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1391405623', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1391405640', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1391405641', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391405642', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391405731', '222.84.77.12', '25', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', '', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405754', '110.75.105.177', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405768', '110.75.105.176', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405879', '110.75.105.167', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1391405880', '110.75.105.167', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1391405893', '110.75.105.165', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1391405894', '110.75.105.165', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1391405910', '110.75.105.164', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405910', '110.75.216.254', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405922', '110.75.105.163', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1391405923', '110.75.105.163', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1391405924', '110.75.216.253', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405924', '110.75.216.253', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391405936', '110.75.105.162', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1391405939', '110.75.105.162', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1391405960', '119.147.146.193', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1391405986', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1391406024', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391406056', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/article_cat.php');
INSERT INTO `ecs_stats` VALUES ('1391406119', '222.84.77.12', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', '', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391406123', '222.84.77.12', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', '', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391406264', '110.75.216.253', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391406281', '110.75.105.135', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391407932', '101.226.33.223', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391407969', '180.153.214.152', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1391408027', '180.153.214.180', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1391408047', '101.226.66.193', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391413842', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391413853', '183.15.6.87', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391488907', '111.59.234.94', '26', 'FireFox 26.0', 'Windows NT', 'zh-cn,zh', 'IANA', 'http://meilele.51131430.com', '/goods-1.html', '/captcha.php');
INSERT INTO `ecs_stats` VALUES ('1391488983', '111.59.234.94', '2', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'IANA', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1391489034', '101.226.33.240', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1391489040', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1391490804', '101.226.33.204', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1391531817', '111.59.234.94', '1', 'Unknow browser', 'Windows 32', '', 'IANA', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1391848967', '103.24.1.155', '1', 'Internet Explorer 7.0', 'Windows 2003', 'zh-cn', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865497', '110.75.105.213', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865517', '110.75.105.210', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865521', '27.212.211.65', '1', 'Internet Explorer 8.0', 'Windows NT', 'zh-CN', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865523', '119.147.146.192', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865532', '110.75.105.208', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1391865557', '110.75.105.205', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392024386', '110.75.105.170', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392024388', '218.86.107.82', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392024392', '218.86.107.82', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392024443', '110.75.216.253', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392024960', '111.59.193.204', '1', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041474', '110.75.216.253', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041508', '110.75.105.242', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041530', '110.75.105.238', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041585', '110.75.105.229', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041698', '222.221.195.116', '1', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392041701', '222.221.195.116', '1', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392117998', '42.243.47.26', '2', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392119179', '42.243.47.26', '3', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392119181', '42.243.47.26', '3', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392700225', '110.75.105.159', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392700239', '125.126.241.99', '1', 'Safari 537.17', 'Windows XP', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392700246', '125.126.241.99', '1', 'Safari 537.17', 'Windows XP', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392700277', '110.75.105.147', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392709549', '125.126.241.99', '2', 'Safari 537.17', 'Windows XP', 'zh-CN,zh', '', 'http://meilele.51131430.com', '/z', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392717638', '110.75.105.162', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392717674', '110.75.105.154', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392717693', '110.75.105.150', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392717695', '110.75.105.149', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392717734', '110.75.105.141', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392732928', '180.153.212.13', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392732928', '49.118.237.110', '1', 'Internet Explorer 9.0', 'Windows NT', 'zh-CN', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392732929', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392732945', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1392734736', '180.153.205.252', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1392734773', '180.153.214.198', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392734851', '101.226.33.227', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1392734862', '222.73.76.253', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1392734893', '180.153.206.34', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1392788612', '116.249.1.186', '1', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392794148', '116.249.1.186', '2', 'Safari 537.1', 'Windows NT', 'zh-CN,zh', '', 'http://meilele.51131430.com', '/', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1392805668', '124.117.239.218', '1', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392806142', '180.153.201.211', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1392807522', '101.226.65.105', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1392807537', '180.153.214.198', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1392807561', '101.226.66.179', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392807570', '180.153.114.199', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392807602', '180.153.114.200', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1392807612', '101.226.33.239', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1392807623', '101.226.66.180', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1392807643', '180.153.206.17', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1392807763', '101.226.65.102', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392807827', '180.153.205.252', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr_show.php');
INSERT INTO `ecs_stats` VALUES ('1392807841', '180.153.201.211', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392807851', '180.153.214.152', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392807929', '112.64.235.250', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/search_list.php');
INSERT INTO `ecs_stats` VALUES ('1392807984', '101.226.51.230', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392807992', '112.65.193.13', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392808003', '101.226.33.239', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1392808024', '180.153.206.30', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392808423', '180.153.201.217', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392808427', '101.226.33.205', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1392808450', '101.226.102.97', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1392808462', '112.64.235.253', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392863170', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392864160', '124.117.239.218', '2', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392864968', '112.64.235.246', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392865961', '112.64.235.251', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392865963', '180.153.205.254', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392866061', '101.226.66.177', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1392942912', '60.162.98.253', '3', 'Safari 537.17', 'Windows XP', 'zh-CN,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392953739', '113.139.181.88', '1', '(Internet Explorer ) Maxthon ', 'Windows 2003', 'zh-CN', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392964627', '124.117.239.161', '3', 'Internet Explorer 7.0', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392964633', '119.147.146.192', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1392964712', '119.147.146.193', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392964746', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1392964798', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392966430', '180.153.206.16', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1392966511', '180.153.211.190', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392966525', '180.153.163.210', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1392966545', '180.153.163.190', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1392966555', '180.153.206.16', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1392966584', '101.226.66.181', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392966634', '180.153.214.176', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1392966658', '180.153.206.38', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1392966681', '180.153.206.24', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392966681', '101.226.89.64', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392968383', '112.64.235.91', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392968401', '180.153.201.79', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392968416', '101.226.65.109', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392968439', '112.64.235.91', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392968460', '180.153.206.29', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392968471', '101.226.66.177', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392969613', '112.64.235.86', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392969620', '180.153.206.25', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392969629', '180.153.163.211', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr_show.php');
INSERT INTO `ecs_stats` VALUES ('1392969648', '180.153.161.55', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1392969739', '101.226.66.175', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1392969825', '101.226.66.179', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1392969888', '180.153.206.19', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1392972417', '124.117.239.218', '4', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1392974249', '180.153.214.176', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1392974277', '101.226.33.227', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1392974328', '101.226.65.105', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace_show.php');
INSERT INTO `ecs_stats` VALUES ('1393047667', '175.0.251.97', '1', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393049467', '180.153.206.33', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393050187', '180.153.161.55', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1393070100', '110.84.200.47', '1', 'Safari 537.36', 'Windows XP', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393222916', '112.255.94.134', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393223344', '121.196.43.130', '1', 'Unknow browser', 'Unknown', '', '', '', '', '/certi.php');
INSERT INTO `ecs_stats` VALUES ('1393223525', '110.75.105.132', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393223593', '110.75.105.116', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393226736', '124.117.239.161', '1', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393226744', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393227444', '112.64.235.246', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1393227448', '119.147.146.193', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393228535', '180.153.201.64', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393228687', '124.117.233.209', '2', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/activity.html', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393228782', '180.153.206.33', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393229234', '101.226.33.217', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393229249', '180.153.201.214', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1393230486', '101.226.33.206', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393230514', '112.65.193.13', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1393230523', '180.153.206.33', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1393230544', '101.226.33.208', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393231127', '112.255.94.134', '2', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393298933', '124.117.239.161', '3', 'Internet Explorer 7.0', 'Windows NT', 'zh-CN', '', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393299179', '124.117.233.209', '4', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393299262', '124.117.239.161', '5', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/group_buy.html', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1393300733', '180.153.206.16', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393300738', '101.226.89.116', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393300993', '112.65.193.14', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/expr_show.php');
INSERT INTO `ecs_stats` VALUES ('1393301059', '180.153.205.254', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1393301066', '112.64.235.254', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1393301081', '180.153.201.66', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1393301144', '124.117.239.218', '6', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393303002', '112.64.235.252', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1393303250', '221.180.109.201', '2', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393303265', '183.60.35.78', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393304256', '118.248.146.212', '1', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393304257', '118.248.146.212', '1', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393304777', '101.226.33.201', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1393304795', '180.153.201.214', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/brand.php');
INSERT INTO `ecs_stats` VALUES ('1393304810', '180.153.211.172', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1393304839', '180.153.214.180', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1393304849', '101.226.33.208', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1393304854', '180.153.161.217', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1393304861', '180.153.114.200', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1393305082', '180.153.206.23', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/expr_show.php');
INSERT INTO `ecs_stats` VALUES ('1393305090', '180.153.201.215', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393306377', '124.117.239.218', '7', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393307456', '101.226.66.193', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393308180', '112.64.235.86', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1393309849', '124.117.239.218', '8', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393310181', '221.180.109.201', '3', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', '', 'http://meilele.51131430.com', '/expr-76.html', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393311649', '180.153.214.182', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393311776', '180.153.211.172', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1393311780', '180.153.163.190', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1393312929', '124.117.239.218', '9', 'Unknow browser', 'Windows NT', 'zh-CN', '', 'http://meilele.51131430.com', '/', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1393313336', '14.17.18.147', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '', '', '', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1393314875', '101.226.89.119', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/article.php');
INSERT INTO `ecs_stats` VALUES ('1393316827', '118.248.146.212', '2', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393316829', '118.248.146.212', '2', 'Safari 537.36', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393319702', '221.180.109.201', '4', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393319798', '121.196.43.131', '1', 'Unknow browser', 'Unknown', '', '', '', '', '/certi.php');
INSERT INTO `ecs_stats` VALUES ('1393483234', '59.75.244.97', '10', 'Unknow browser', 'Windows NT', 'zh-CN', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393483238', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393483275', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1393485033', '180.153.206.24', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393485056', '222.73.77.54', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1393485063', '101.226.51.229', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1393485064', '180.153.214.200', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1393485085', '180.153.206.23', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/activity.php');
INSERT INTO `ecs_stats` VALUES ('1393485089', '112.64.235.251', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/topic.php');
INSERT INTO `ecs_stats` VALUES ('1393485103', '180.153.163.211', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393485581', '101.226.65.106', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/affiche.php');
INSERT INTO `ecs_stats` VALUES ('1393485823', '101.226.33.201', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/myship.php');
INSERT INTO `ecs_stats` VALUES ('1393486011', '101.226.89.123', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393486074', '101.226.33.200', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393486080', '222.73.76.253', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393486093', '101.226.33.216', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393569547', '114.253.84.111', '1', 'Safari 536.11', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393569934', '110.75.105.167', '1', 'Internet Explorer 8.0', 'Windows NT', 'en-US,*', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393570526', '114.253.84.111', '1', '(Internet Explorer ) Maxthon ', 'Windows NT', 'zh-CN', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393729594', '175.0.251.146', '2', 'Safari 537.36', 'Windows NT', '', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393834024', '27.219.167.5', '1', 'Internet Explorer 8.0', 'Windows XP', 'zh-cn', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393912196', '116.238.27.79', '1', 'Safari 533.1', 'Linux', 'zh-cn', '', 'http://meilele.51131430.com', '/mobile/goods.php?id=5', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393984558', '118.248.147.228', '1', 'Internet Explorer 7.0', 'Windows NT', 'zh-CN', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393984559', '119.147.146.189', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393985178', '118.248.147.228', '1', 'Safari 537.31', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393986357', '101.226.102.97', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393986702', '180.153.114.197', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/goods.php');
INSERT INTO `ecs_stats` VALUES ('1393990054', '118.248.147.228', '2', 'Internet Explorer 7.0', 'Windows NT', 'zh-CN', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393990259', '119.147.146.193', '1', 'Internet Explorer 6.0', 'Windows XP', 'zh-CN,zh', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393992056', '180.153.206.13', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1393992095', '180.153.206.22', '1', 'Unknow browser', 'Unknown', 'zh-cn, zh', '[δ֪IP0801]', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1394077960', '118.248.155.1', '3', 'Internet Explorer 7.0', 'Windows NT', 'zh-CN', 'APNIC', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1394078100', '118.248.155.1', '2', 'Safari 537.31', 'Windows NT', 'zh-CN,zh', 'APNIC', '', '', '/xspace.php');
INSERT INTO `ecs_stats` VALUES ('1394372189', '0.0.0.0', '303', 'Safari 535.11', 'Windows NT', 'zh-CN,zh', 'IANA', 'http://localhost:168', '/meilele/admin/index.php?act=top', '/meilele/index.php');
INSERT INTO `ecs_stats` VALUES ('1394464835', '0.0.0.0', '2', 'Safari 535.11', 'Windows NT', 'zh-CN,zh', 'IANA', 'http://localhost:168', '/', '/meilele/index.php');
INSERT INTO `ecs_stats` VALUES ('1394545077', '0.0.0.0', '15', 'Safari 535.11', 'Windows NT', 'zh-CN,zh', 'IANA', 'http://localhost:168', '/', '/meilele/index.php');
INSERT INTO `ecs_stats` VALUES ('1394607696', '0.0.0.0', '25', 'Safari 535.11', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1394607907', '0.0.0.0', '27', 'Safari 535.11', 'Windows NT', 'zh-CN,zh', 'IANA', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395198250', '127.0.0.1', '10', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/meilele/index.php');
INSERT INTO `ecs_stats` VALUES ('1395199561', '127.0.0.1', '11', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395208278', '127.0.0.1', '13', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395208279', '127.0.0.1', '13', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395214276', '127.0.0.1', '3', 'Safari 536.11', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/mll/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395216560', '127.0.0.1', '4', 'Safari 536.11', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/admin/sale_general.php?act=list', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395216961', '127.0.0.1', '14', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1395221045', '127.0.0.1', '5', 'Safari 536.11', 'Windows NT', 'zh-CN,zh', 'LAN', 'http://localhost', '/admin/sale_general.php?act=list', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395222123', '127.0.0.1', '15', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1395225667', '127.0.0.1', '16', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395228005', '127.0.0.1', '17', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1395236959', '127.0.0.1', '18', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/user.php');
INSERT INTO `ecs_stats` VALUES ('1395242242', '127.0.0.1', '6', 'Safari 536.11', 'Windows NT', 'zh-CN,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395275940', '127.0.0.1', '19', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395281140', '127.0.0.1', '21', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/liangxi11111111111111111111111/jingdong/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395281174', '127.0.0.1', '23', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/liangxi11111111111111111111111/jingdong/index.php', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395281262', '127.0.0.1', '25', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/category-1-b0.html', '/expr.php');
INSERT INTO `ecs_stats` VALUES ('1395295076', '127.0.0.1', '26', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/category.php');
INSERT INTO `ecs_stats` VALUES ('1395299064', '127.0.0.1', '27', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395305199', '127.0.0.1', '28', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/brand.html', '/group_buy.php');
INSERT INTO `ecs_stats` VALUES ('1395309461', '127.0.0.1', '29', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', 'http://localhost', '/', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395310566', '127.0.0.1', '30', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');
INSERT INTO `ecs_stats` VALUES ('1395318907', '127.0.0.1', '31', 'FireFox 27.0', 'Windows NT', 'zh-cn,zh', 'LAN', '', '', '/index.php');

-- ----------------------------
-- Table structure for `ecs_suppliers`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_suppliers`;
CREATE TABLE `ecs_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL auto_increment,
  `suppliers_name` varchar(255) default NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(1) unsigned NOT NULL default '1',
  `logo` varchar(255) default NULL,
  `country` int(5) default NULL,
  `province` int(5) default NULL,
  `city` int(5) default NULL,
  `district` int(5) default NULL,
  `tel` varchar(255) default NULL,
  `work_time` varchar(255) default NULL,
  `service` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `position_img` varchar(255) default NULL,
  `line` longtext,
  `gallery` longtext,
  PRIMARY KEY  (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_suppliers
-- ----------------------------
INSERT INTO `ecs_suppliers` VALUES ('2', '北京十里河体验馆', '供货商描述', '1', '../data/suppliers/1386322573176361283.jpg', '1', '2', '52', '501', '010-67498277', '9:00-19:00', '想顾客之所想 忧顾客之所忧，你的满意我们的追求！', '北京市朝阳区十里河街十里河桥东南角佰汇广场佰汇古玩城', '../data/suppliers/1386322573357669210.jpg', '小屯西路南口站，507路', '');
INSERT INTO `ecs_suppliers` VALUES ('3', '北京丰台区体验馆', '', '1', '../data/suppliers/1386322734065388439.jpg', '1', '2', '52', '506', '010-83738792', '9:00-18:00', '真诚服务 满意你我', '北京市丰台区小屯西路万科中粮假日风景111号院底商1', '../data/suppliers/1386322734757770298.jpg', '郭庄子公交场站，554路，339路，634路', '');

-- ----------------------------
-- Table structure for `ecs_tag`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_tag`;
CREATE TABLE `ecs_tag` (
  `tag_id` mediumint(8) NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `tag_words` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`tag_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_template`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_template`;
CREATE TABLE `ecs_template` (
  `filename` varchar(30) NOT NULL default '',
  `region` varchar(40) NOT NULL default '',
  `library` varchar(40) NOT NULL default '',
  `sort_order` tinyint(1) unsigned NOT NULL default '0',
  `id` smallint(5) unsigned NOT NULL default '0',
  `number` tinyint(1) unsigned NOT NULL default '5',
  `type` tinyint(1) unsigned NOT NULL default '0',
  `theme` varchar(60) NOT NULL default '',
  `remarks` varchar(30) NOT NULL default '',
  KEY `filename` (`filename`,`region`),
  KEY `theme` (`theme`),
  KEY `remarks` (`remarks`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_template
-- ----------------------------
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/vote_list.lbi', '8', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/email_list.lbi', '9', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/order_query.lbi', '6', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/cart.lbi', '0', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/promotion_info.lbi', '3', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/auction.lbi', '4', '0', '3', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/group_buy.lbi', '5', '0', '3', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/recommend_promotion.lbi', '0', '0', '4', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '右边主区域', '/library/recommend_hot.lbi', '2', '0', '10', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '右边主区域', '/library/recommend_new.lbi', '1', '0', '10', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '右边主区域', '/library/recommend_best.lbi', '0', '0', '10', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/invoice_query.lbi', '7', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/top10.lbi', '2', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '左边区域', '/library/category_tree.lbi', '1', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/brands.lbi', '0', '0', '11', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '左边区域', '/library/category_tree.lbi', '1', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '右边区域', '/library/recommend_best.lbi', '0', '0', '5', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '右边区域', '/library/goods_list.lbi', '1', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '右边区域', '/library/pages.lbi', '2', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '左边区域', '/library/cart.lbi', '0', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '左边区域', '/library/price_grade.lbi', '3', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('category', '左边区域', '/library/filter_attr.lbi', '2', '0', '0', '0', 'default', '');
INSERT INTO `ecs_template` VALUES ('index', '分类-商品', '/library/cat_goods.lbi', '1', '2', '5', '1', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '分类-商品', '/library/cat_goods.lbi', '2', '3', '5', '1', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/brands.lbi', '0', '0', '3', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '分类-商品', '/library/cat_goods.lbi', '0', '1', '5', '1', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/auction.lbi', '0', '0', '3', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/group_buy.lbi', '0', '0', '1', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/recommend_promotion.lbi', '0', '0', '4', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/recommend_hot.lbi', '0', '0', '3', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/recommend_new.lbi', '0', '0', '3', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '', '/library/recommend_best.lbi', '0', '0', '3', '0', 'meilele', '');
INSERT INTO `ecs_template` VALUES ('index', '文章-网站公告', '/library/cat_articles.lbi', '0', '9', '3', '3', 'meilele', '');

-- ----------------------------
-- Table structure for `ecs_topic`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_topic`;
CREATE TABLE `ecs_topic` (
  `topic_id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '''''',
  `intro` text NOT NULL,
  `start_time` int(11) NOT NULL default '0',
  `end_time` int(10) NOT NULL default '0',
  `data` text NOT NULL,
  `template` varchar(255) NOT NULL default '''''',
  `css` text NOT NULL,
  `topic_img` varchar(255) default NULL,
  `title_pic` varchar(255) default NULL,
  `base_style` char(6) default NULL,
  `htmls` mediumtext,
  `keywords` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_topic
-- ----------------------------
INSERT INTO `ecs_topic` VALUES ('1', '专题名称', '', '1385827200', '1481731200', 'O:8:\"stdClass\":1:{s:7:\"default\";a:14:{i:0;s:45:\"美式古典 双面描金雕花排骨架床|1\";i:1;s:64:\"欧式田园 1.8米水晶拉扣双人床 水牛头层真皮床|2\";i:2;s:51:\"欧式田园 粉红玫瑰立体雕花排骨架床|3\";i:3;s:51:\"法式风格 1.8米皮拉扣床 PU发泡雕花床|4\";i:4;s:48:\"地中海风格 美国进口白杨木双人床|5\";i:5;s:43:\"现代风格 1.8米软床 头层牛皮床|6\";i:6;s:63:\"时尚经典 带储物功能真皮转角沙发(1+3+左贵妃)|7\";i:7;s:53:\"奢华霸气 进口全真皮沙发套装（1+2+3）|8\";i:8;s:47:\"清新雅致 可拆装沙发套装（1+2+3）|9\";i:9;s:62:\"温柔海风 唯美布艺左转角沙发（1+3+左贵妃）|10\";i:10;s:48:\"橡胶木实木餐桌椅套装（七件套）|11\";i:11;s:48:\"餐厅6件套（1餐桌+4餐椅+1餐边柜）|12\";i:12;s:51:\"餐厅5件套装（1.5餐台+4无扶手餐椅）|13\";i:13;s:49:\"美式田园 实木餐厅套装（1桌+4椅）|14\";}}', '', '', 'data/afficheimg/20131215opjtre.png', 'data/afficheimg/20131215itkbsy.jpg', '4f268c', '', '专题页面关键字', '专题页面描述');

-- ----------------------------
-- Table structure for `ecs_users`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_users`;
CREATE TABLE `ecs_users` (
  `user_id` mediumint(8) unsigned NOT NULL auto_increment,
  `email` varchar(60) NOT NULL default '',
  `user_name` varchar(60) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `question` varchar(255) NOT NULL default '',
  `answer` varchar(255) NOT NULL default '',
  `sex` tinyint(1) unsigned NOT NULL default '0',
  `birthday` date NOT NULL default '0000-00-00',
  `user_money` decimal(10,2) NOT NULL default '0.00',
  `frozen_money` decimal(10,2) NOT NULL default '0.00',
  `pay_points` int(10) unsigned NOT NULL default '0',
  `rank_points` int(10) unsigned NOT NULL default '0',
  `address_id` mediumint(8) unsigned NOT NULL default '0',
  `reg_time` int(10) unsigned NOT NULL default '0',
  `last_login` int(11) unsigned NOT NULL default '0',
  `last_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `last_ip` varchar(15) NOT NULL default '',
  `visit_count` smallint(5) unsigned NOT NULL default '0',
  `user_rank` tinyint(3) unsigned NOT NULL default '0',
  `is_special` tinyint(3) unsigned NOT NULL default '0',
  `ec_salt` varchar(10) default NULL,
  `salt` varchar(10) NOT NULL default '0',
  `parent_id` mediumint(9) NOT NULL default '0',
  `flag` tinyint(3) unsigned NOT NULL default '0',
  `alias` varchar(60) NOT NULL,
  `msn` varchar(60) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `home_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `is_validated` tinyint(3) unsigned NOT NULL default '0',
  `credit_line` decimal(10,2) unsigned NOT NULL,
  `passwd_question` varchar(50) default NULL,
  `passwd_answer` varchar(255) default NULL,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  KEY `email` (`email`),
  KEY `parent_id` (`parent_id`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_users
-- ----------------------------
INSERT INTO `ecs_users` VALUES ('1', 'test@qq.com', 'test', '52b17e7b4ab557c063ddacd7b05cd95f', '', '', '0', '0000-00-00', '0.00', '0.00', '22005', '22005', '1', '1385779761', '1391490620', '0000-00-00 00:00:00', '111.59.234.94', '5248', '0', '0', '5492', '0', '0', '0', '', '', '', '', '', '131', '0', '0.00', '', '');
INSERT INTO `ecs_users` VALUES ('2', '343037703@qq.com', 'qscfr', '233a3aa8ac444a27a536d966a7567eec', '', '', '0', '0000-00-00', '0.00', '0.00', '0', '0', '2', '1393912127', '1393912127', '0000-00-00 00:00:00', '116.238.27.79', '1', '0', '0', null, '0', '0', '0', '', '', '', '', '', '', '0', '0.00', null, null);

-- ----------------------------
-- Table structure for `ecs_user_account`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_user_account`;
CREATE TABLE `ecs_user_account` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `admin_user` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `add_time` int(10) NOT NULL default '0',
  `paid_time` int(10) NOT NULL default '0',
  `admin_note` varchar(255) NOT NULL,
  `user_note` varchar(255) NOT NULL,
  `process_type` tinyint(1) NOT NULL default '0',
  `payment` varchar(90) NOT NULL,
  `is_paid` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `is_paid` (`is_paid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_user_account
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_user_address`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_user_address`;
CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL auto_increment,
  `address_name` varchar(50) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `country` smallint(5) NOT NULL default '0',
  `province` smallint(5) NOT NULL default '0',
  `city` smallint(5) NOT NULL default '0',
  `district` smallint(5) NOT NULL default '0',
  `address` varchar(120) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_user_address
-- ----------------------------
INSERT INTO `ecs_user_address` VALUES ('1', '', '1', '超级卖家', '', '1', '6', '76', '693', '长江路15号', '', '111111111', '', '', '');
INSERT INTO `ecs_user_address` VALUES ('2', '', '2', '发挥好', '', '1', '6', '84', '773', '发挥好哈哈哈', '', '15013475862', '', '', '');

-- ----------------------------
-- Table structure for `ecs_user_bonus`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_user_bonus`;
CREATE TABLE `ecs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL auto_increment,
  `bonus_type_id` tinyint(3) unsigned NOT NULL default '0',
  `bonus_sn` bigint(20) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `used_time` int(10) unsigned NOT NULL default '0',
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `emailed` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_user_bonus
-- ----------------------------
INSERT INTO `ecs_user_bonus` VALUES ('1', '1', '0', '1', '1387775981', '8', '1');
INSERT INTO `ecs_user_bonus` VALUES ('2', '1', '0', '1', '0', '0', '1');

-- ----------------------------
-- Table structure for `ecs_user_feed`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_user_feed`;
CREATE TABLE `ecs_user_feed` (
  `feed_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `value_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `feed_type` tinyint(1) unsigned NOT NULL default '0',
  `is_feed` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`feed_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_user_feed
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_user_rank`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_user_rank`;
CREATE TABLE `ecs_user_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL auto_increment,
  `rank_name` varchar(30) NOT NULL default '',
  `min_points` int(10) unsigned NOT NULL default '0',
  `max_points` int(10) unsigned NOT NULL default '0',
  `discount` tinyint(3) unsigned NOT NULL default '0',
  `show_price` tinyint(1) unsigned NOT NULL default '1',
  `special_rank` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_user_rank
-- ----------------------------
INSERT INTO `ecs_user_rank` VALUES ('1', '注册用户', '0', '10000', '100', '1', '0');
INSERT INTO `ecs_user_rank` VALUES ('2', 'VIP', '0', '0', '90', '1', '1');
INSERT INTO `ecs_user_rank` VALUES ('3', 'VVIP', '0', '0', '80', '1', '1');

-- ----------------------------
-- Table structure for `ecs_virtual_card`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_virtual_card`;
CREATE TABLE `ecs_virtual_card` (
  `card_id` mediumint(8) NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `card_sn` varchar(60) NOT NULL default '',
  `card_password` varchar(60) NOT NULL default '',
  `add_date` int(11) NOT NULL default '0',
  `end_date` int(11) NOT NULL default '0',
  `is_saled` tinyint(1) NOT NULL default '0',
  `order_sn` varchar(20) NOT NULL default '',
  `crc32` varchar(12) NOT NULL default '0',
  PRIMARY KEY  (`card_id`),
  KEY `goods_id` (`goods_id`),
  KEY `car_sn` (`card_sn`),
  KEY `is_saled` (`is_saled`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_virtual_card
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_volume_price`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_volume_price`;
CREATE TABLE `ecs_volume_price` (
  `price_type` tinyint(1) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `volume_number` smallint(5) unsigned NOT NULL default '0',
  `volume_price` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`price_type`,`goods_id`,`volume_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_volume_price
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_vote`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_vote`;
CREATE TABLE `ecs_vote` (
  `vote_id` smallint(5) unsigned NOT NULL auto_increment,
  `vote_name` varchar(250) NOT NULL default '',
  `start_time` int(11) unsigned NOT NULL default '0',
  `end_time` int(11) unsigned NOT NULL default '0',
  `can_multi` tinyint(1) unsigned NOT NULL default '0',
  `vote_count` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`vote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_vote
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_vote_log`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_vote_log`;
CREATE TABLE `ecs_vote_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `vote_id` smallint(5) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `vote_time` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`),
  KEY `vote_id` (`vote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_vote_log
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_vote_option`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_vote_option`;
CREATE TABLE `ecs_vote_option` (
  `option_id` smallint(5) unsigned NOT NULL auto_increment,
  `vote_id` smallint(5) unsigned NOT NULL default '0',
  `option_name` varchar(250) NOT NULL default '',
  `option_count` int(8) unsigned NOT NULL default '0',
  `option_order` tinyint(3) unsigned NOT NULL default '100',
  PRIMARY KEY  (`option_id`),
  KEY `vote_id` (`vote_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_vote_option
-- ----------------------------

-- ----------------------------
-- Table structure for `ecs_wholesale`
-- ----------------------------
DROP TABLE IF EXISTS `ecs_wholesale`;
CREATE TABLE `ecs_wholesale` (
  `act_id` mediumint(8) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `rank_ids` varchar(255) NOT NULL,
  `prices` text NOT NULL,
  `enabled` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY  (`act_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ecs_wholesale
-- ----------------------------

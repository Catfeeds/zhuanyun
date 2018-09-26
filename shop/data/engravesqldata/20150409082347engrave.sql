-- ecshop v2.x SQL Dump Program
-- http://localhost:8089
-- 
-- DATE : 2015-04-09 08:23:50
-- MYSQL SERVER VERSION : 5.5.8
-- PHP VERSION : 5.3.5
-- ECShop VERSION : v2.7.3
-- Vol : 1
DROP TABLE IF EXISTS `engrave_area`;
CREATE TABLE `engrave_area` (
  `Id` int(12) unsigned NOT NULL AUTO_INCREMENT COMMENT '地区ID',
  `Name` varchar(30) NOT NULL DEFAULT '' COMMENT '地区名称',
  `ParentId` int(12) unsigned NOT NULL DEFAULT '0' COMMENT '地区父ID',
  `IsDeleteArea` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('1', '中国', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11000000', '北京市', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010000', '市辖区', '11000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010100', '东城区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010200', '西城区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010300', '崇文区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010400', '宣武区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010500', '朝阳区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010600', '丰台区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010700', '石景山区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010800', '海淀区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11010900', '门头沟区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011100', '房山区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011200', '通州区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011300', '顺义区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011400', '昌平区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011500', '大兴区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011600', '怀柔区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11011700', '平谷区', '11010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11020000', '县', '11000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11022800', '密云县', '11020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('11022900', '延庆县', '11020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12000000', '天津市', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010000', '市辖区', '12000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010100', '和平区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010200', '河东区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010300', '河西区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010400', '南开区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010500', '河北区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010600', '红桥区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010700', '塘沽区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010800', '汉沽区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12010900', '大港区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011000', '东丽区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011100', '西青区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011200', '津南区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011300', '北辰区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011400', '武清区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12011500', '宝坻区', '12010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12020000', '县', '12000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12022100', '宁河县', '12020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12022300', '静海县', '12020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('12022500', '蓟县', '12020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13000000', '河北省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010000', '石家庄市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010100', '市辖区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010200', '长安区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010300', '桥东区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010400', '桥西区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010500', '新华区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010700', '井陉矿区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13010800', '裕华区', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012100', '井陉县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012300', '正定县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012400', '栾城县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012500', '行唐县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012600', '灵寿县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012700', '高邑县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012800', '深泽县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13012900', '赞皇县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13013000', '无极县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13013100', '平山县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13013200', '元氏县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13013300', '赵县', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13018100', '辛集市', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13018200', '藁城市', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13018300', '晋州市', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13018400', '新乐市', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13018500', '鹿泉市', '13010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020000', '唐山市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020100', '市辖区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020200', '路南区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020300', '路北区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020400', '古冶区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020500', '开平区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020700', '丰南区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13020800', '丰润区', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13022300', '滦县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13022400', '滦南县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13022500', '乐亭县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13022700', '迁西县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13022900', '玉田县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13023000', '唐海县', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13028100', '遵化市', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13028300', '迁安市', '13020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13030000', '秦皇岛市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13030100', '市辖区', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13030200', '海港区', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13030300', '山海关区', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13030400', '北戴河区', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13032100', '青龙满族自治县', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13032200', '昌黎县', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13032300', '抚宁县', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13032400', '卢龙县', '13030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040000', '邯郸市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040100', '市辖区', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040200', '邯山区', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040300', '丛台区', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040400', '复兴区', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13040600', '峰峰矿区', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042100', '邯郸县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042300', '临漳县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042400', '成安县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042500', '大名县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042600', '涉县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042700', '磁县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042800', '肥乡县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13042900', '永年县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043000', '邱县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043100', '鸡泽县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043200', '广平县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043300', '馆陶县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043400', '魏县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13043500', '曲周县', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13048100', '武安市', '13040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13050000', '邢台市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13050100', '市辖区', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13050200', '桥东区', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13050300', '桥西区', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052100', '邢台县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052200', '临城县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052300', '内丘县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052400', '柏乡县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052500', '隆尧县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052600', '任县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052700', '南和县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052800', '宁晋县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13052900', '巨鹿县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053000', '新河县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053100', '广宗县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053200', '平乡县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053300', '威县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053400', '清河县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13053500', '临西县', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13058100', '南宫市', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13058200', '沙河市', '13050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13060000', '保定市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13060100', '市辖区', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13060200', '新市区', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13060300', '北市区', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13060400', '南市区', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062100', '满城县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062200', '清苑县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062300', '涞水县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062400', '阜平县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062500', '徐水县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062600', '定兴县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062700', '唐县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062800', '高阳县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13062900', '容城县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063000', '涞源县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063100', '望都县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063200', '安新县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063300', '易县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063400', '曲阳县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063500', '蠡县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063600', '顺平县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063700', '博野县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13063800', '雄县', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13068100', '涿州市', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13068200', '定州市', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13068300', '安国市', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13068400', '高碑店市', '13060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070000', '张家口市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070100', '市辖区', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070200', '桥东区', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070300', '桥西区', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070500', '宣化区', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13070600', '下花园区', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072100', '宣化县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072200', '张北县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072300', '康保县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072400', '沽源县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072500', '尚义县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072600', '蔚县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072700', '阳原县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072800', '怀安县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13072900', '万全县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13073000', '怀来县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13073100', '涿鹿县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13073200', '赤城县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13073300', '崇礼县', '13070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13080000', '承德市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13080100', '市辖区', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13080200', '双桥区', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13080300', '双滦区', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13080400', '鹰手营子矿区', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082100', '承德县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082200', '兴隆县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082300', '平泉县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082400', '滦平县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082500', '隆化县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082600', '丰宁满族自治县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082700', '宽城满族自治县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13082800', '围场满族蒙古族自治县', '13080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13090000', '沧州市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13090100', '市辖区', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13090200', '新华区', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13090300', '运河区', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092100', '沧县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092200', '青县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092300', '东光县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092400', '海兴县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092500', '盐山县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092600', '肃宁县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092700', '南皮县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092800', '吴桥县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13092900', '献县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13093000', '孟村回族自治县', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13098100', '泊头市', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13098200', '任丘市', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13098300', '黄骅市', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13098400', '河间市', '13090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13100000', '廊坊市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13100100', '市辖区', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13100200', '安次区', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13100300', '广阳区', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102200', '固安县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102300', '永清县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102400', '香河县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102500', '大城县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102600', '文安县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13102800', '大厂回族自治县', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13108100', '霸州市', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13108200', '三河市', '13100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13110000', '衡水市', '13000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13110100', '市辖区', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13110200', '桃城区', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112100', '枣强县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112200', '武邑县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112300', '武强县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112400', '饶阳县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112500', '安平县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112600', '故城县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112700', '景县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13112800', '阜城县', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13118100', '冀州市', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('13118200', '深州市', '13110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14000000', '山西省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010000', '太原市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010100', '市辖区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010500', '小店区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010600', '迎泽区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010700', '杏花岭区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010800', '尖草坪区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14010900', '万柏林区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14011000', '晋源区', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14012100', '清徐县', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14012200', '阳曲县', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14012300', '娄烦县', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14018100', '古交市', '14010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14020000', '大同市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14020100', '市辖区', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14020200', '城区', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14020300', '矿区', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14021100', '南郊区', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14021200', '新荣区', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022100', '阳高县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022200', '天镇县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022300', '广灵县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022400', '灵丘县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022500', '浑源县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022600', '左云县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14022700', '大同县', '14020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14030000', '阳泉市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14030100', '市辖区', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14030200', '城区', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14030300', '矿区', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14031100', '郊区', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14032100', '平定县', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14032200', '盂县', '14030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14040000', '长治市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14040100', '市辖区', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14040200', '城区', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14041100', '郊区', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042100', '长治县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042300', '襄垣县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042400', '屯留县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042500', '平顺县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042600', '黎城县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042700', '壶关县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042800', '长子县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14042900', '武乡县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14043000', '沁县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14043100', '沁源县', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14048100', '潞城市', '14040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14050000', '晋城市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14050100', '市辖区', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14050200', '城区', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14052100', '沁水县', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14052200', '阳城县', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14052400', '陵川县', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14052500', '泽州县', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14058100', '高平市', '14050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14060000', '朔州市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14060100', '市辖区', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14060200', '朔城区', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14060300', '平鲁区', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14062100', '山阴县', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14062200', '应县', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14062300', '右玉县', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14062400', '怀仁县', '14060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14070000', '晋中市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14070100', '市辖区', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14070200', '榆次区', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072100', '榆社县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072200', '左权县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072300', '和顺县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072400', '昔阳县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072500', '寿阳县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072600', '太谷县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072700', '祁县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072800', '平遥县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14072900', '灵石县', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14078100', '介休市', '14070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14080000', '运城市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14080100', '市辖区', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14080200', '盐湖区', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082100', '临猗县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082200', '万荣县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082300', '闻喜县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082400', '稷山县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082500', '新绛县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082600', '绛县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082700', '垣曲县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082800', '夏县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14082900', '平陆县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14083000', '芮城县', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14088100', '永济市', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14088200', '河津市', '14080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14090000', '忻州市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14090100', '市辖区', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14090200', '忻府区', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092100', '定襄县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092200', '五台县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092300', '代县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092400', '繁峙县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092500', '宁武县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092600', '静乐县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092700', '神池县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092800', '五寨县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14092900', '岢岚县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14093000', '河曲县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14093100', '保德县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14093200', '偏关县', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14098100', '原平市', '14090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14100000', '临汾市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14100100', '市辖区', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14100200', '尧都区', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102100', '曲沃县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102200', '翼城县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102300', '襄汾县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102400', '洪洞县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102500', '古县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102600', '安泽县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102700', '浮山县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102800', '吉县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14102900', '乡宁县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14103000', '大宁县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14103100', '隰县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14103200', '永和县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14103300', '蒲县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14103400', '汾西县', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14108100', '侯马市', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14108200', '霍州市', '14100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14110000', '吕梁市', '14000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14110100', '市辖区', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14110200', '离石区', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112100', '文水县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112200', '交城县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112300', '兴县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112400', '临县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112500', '柳林县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112600', '石楼县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112700', '岚县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112800', '方山县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14112900', '中阳县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14113000', '交口县', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14118100', '孝义市', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('14118200', '汾阳市', '14110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15000000', '内蒙古自治区', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010000', '呼和浩特市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010100', '市辖区', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010200', '新城区', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010300', '回民区', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010400', '玉泉区', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15010500', '赛罕区', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15012100', '土默特左旗', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15012200', '托克托县', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15012300', '和林格尔县', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15012400', '清水河县', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15012500', '武川县', '15010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020000', '包头市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020100', '市辖区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020200', '东河区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020300', '昆都仑区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020400', '青山区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020500', '石拐区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020600', '白云矿区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15020700', '九原区', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15022100', '土默特右旗', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15022200', '固阳县', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15022300', '达尔罕茂明安联合旗', '15020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15030000', '乌海市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15030100', '市辖区', '15030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15030200', '海勃湾区', '15030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15030300', '海南区', '15030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15030400', '乌达区', '15030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15040000', '赤峰市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15040100', '市辖区', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15040200', '红山区', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15040300', '元宝山区', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15040400', '松山区', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042100', '阿鲁科尔沁旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042200', '巴林左旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042300', '巴林右旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042400', '林西县', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042500', '克什克腾旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042600', '翁牛特旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042800', '喀喇沁旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15042900', '宁城县', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15043000', '敖汉旗', '15040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15050000', '通辽市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15050100', '市辖区', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15050200', '科尔沁区', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052100', '科尔沁左翼中旗', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052200', '科尔沁左翼后旗', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052300', '开鲁县', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052400', '库伦旗', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052500', '奈曼旗', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15052600', '扎鲁特旗', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15058100', '霍林郭勒市', '15050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15060000', '鄂尔多斯市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15060100', '市辖区', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15060200', '东胜区', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062100', '达拉特旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062200', '准格尔旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062300', '鄂托克前旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062400', '鄂托克旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062500', '杭锦旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062600', '乌审旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15062700', '伊金霍洛旗', '15060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15070000', '呼伦贝尔市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15070100', '市辖区', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15070200', '海拉尔区', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072100', '阿荣旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072200', '莫力达瓦达斡尔族自治旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072300', '鄂伦春自治旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072400', '鄂温克族自治旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072500', '陈巴尔虎旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072600', '新巴尔虎左旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15072700', '新巴尔虎右旗', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15078100', '满洲里市', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15078200', '牙克石市', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15078300', '扎兰屯市', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15078400', '额尔古纳市', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15078500', '根河市', '15070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15080000', '巴彦淖尔市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15080100', '市辖区', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15080200', '临河区', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082100', '五原县', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082200', '磴口县', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082300', '乌拉特前旗', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082400', '乌拉特中旗', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082500', '乌拉特后旗', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15082600', '杭锦后旗', '15080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15090000', '乌兰察布市', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15090100', '市辖区', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15090200', '集宁区', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092100', '卓资县', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092200', '化德县', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092300', '商都县', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092400', '兴和县', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092500', '凉城县', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092600', '察哈尔右翼前旗', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092700', '察哈尔右翼中旗', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092800', '察哈尔右翼后旗', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15092900', '四子王旗', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15098100', '丰镇市', '15090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15220000', '兴安盟', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15220100', '乌兰浩特市', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15220200', '阿尔山市', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15222100', '科尔沁右翼前旗', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15222200', '科尔沁右翼中旗', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15222300', '扎赉特旗', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15222400', '突泉县', '15220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15250000', '锡林郭勒盟', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15250100', '二连浩特市', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15250200', '锡林浩特市', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252200', '阿巴嘎旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252300', '苏尼特左旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252400', '苏尼特右旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252500', '东乌珠穆沁旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252600', '西乌珠穆沁旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252700', '太仆寺旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252800', '镶黄旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15252900', '正镶白旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15253000', '正蓝旗', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15253100', '多伦县', '15250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15290000', '阿拉善盟', '15000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15292100', '阿拉善左旗', '15290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15292200', '阿拉善右旗', '15290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15292300', '额济纳旗', '15290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('15292400', '巴彦浩特', '15290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21000000', '辽宁省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010000', '沈阳市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010100', '市辖区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010200', '和平区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010300', '沈河区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010400', '大东区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010500', '皇姑区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21010600', '铁西区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21011100', '苏家屯区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21011200', '东陵区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21011300', '沈北新区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21011400', '于洪区', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21012200', '辽中县', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21012300', '康平县', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21012400', '法库县', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21018100', '新民市', '21010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21020000', '大连市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21020100', '市辖区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21020200', '中山区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21020300', '西岗区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21020400', '沙河口区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21021100', '甘井子区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21021200', '旅顺口区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21021300', '金州区', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21022400', '长海县', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21028100', '瓦房店市', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21028200', '普兰店市', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21028300', '庄河市', '21020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21030000', '鞍山市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21030100', '市辖区', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21030200', '铁东区', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21030300', '铁西区', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21030400', '立山区', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21031100', '千山区', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21032100', '台安县', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21032300', '岫岩满族自治县', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21038100', '海城市', '21030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21040000', '抚顺市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21040100', '市辖区', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21040200', '新抚区', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21040300', '东洲区', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21040400', '望花区', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21041100', '顺城区', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21042100', '抚顺县', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21042200', '新宾满族自治县', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21042300', '清原满族自治县', '21040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050000', '本溪市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050100', '市辖区', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050200', '平山区', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050300', '溪湖区', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050400', '明山区', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21050500', '南芬区', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21052100', '本溪满族自治县', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21052200', '桓仁满族自治县', '21050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21060000', '丹东市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21060100', '市辖区', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21060200', '元宝区', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21060300', '振兴区', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21060400', '振安区', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21062400', '宽甸满族自治县', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21068100', '东港市', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21068200', '凤城市', '21060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21070000', '锦州市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21070100', '市辖区', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21070200', '古塔区', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21070300', '凌河区', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21071100', '太和区', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21072600', '黑山县', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21072700', '义县', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21078100', '凌海市', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21078200', '北镇市', '21070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21080000', '营口市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21080100', '市辖区', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21080200', '站前区', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21080300', '西市区', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21080400', '鲅鱼圈区', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21081100', '老边区', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21088100', '盖州市', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21088200', '大石桥市', '21080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090000', '阜新市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090100', '市辖区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090200', '海州区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090300', '新邱区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090400', '太平区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21090500', '清河门区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21091100', '细河区', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21092100', '阜新蒙古族自治县', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21092200', '彰武县', '21090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100000', '辽阳市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100100', '市辖区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100200', '白塔区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100300', '文圣区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100400', '宏伟区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21100500', '弓长岭区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21101100', '太子河区', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21102100', '辽阳县', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21108100', '灯塔市', '21100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21110000', '盘锦市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21110100', '市辖区', '21110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21110200', '双台子区', '21110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21110300', '兴隆台区', '21110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21112100', '大洼县', '21110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21112200', '盘山县', '21110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21120000', '铁岭市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21120100', '市辖区', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21120200', '银州区', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21120400', '清河区', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21122100', '铁岭县', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21122300', '西丰县', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21122400', '昌图县', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21128100', '调兵山市', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21128200', '开原市', '21120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21130000', '朝阳市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21130100', '市辖区', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21130200', '双塔区', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21130300', '龙城区', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21132100', '朝阳县', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21132200', '建平县', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21132400', '喀喇沁左翼蒙古族自治县', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21138100', '北票市', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21138200', '凌源市', '21130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21140000', '葫芦岛市', '21000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21140100', '市辖区', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21140200', '连山区', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21140300', '龙港区', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21140400', '南票区', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21142100', '绥中县', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21142200', '建昌县', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('21148100', '兴城市', '21140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22000000', '吉林省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010000', '长春市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010100', '市辖区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010200', '南关区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010300', '宽城区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010400', '朝阳区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010500', '二道区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22010600', '绿园区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22011200', '双阳区', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22012200', '农安县', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22018100', '九台市', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22018200', '榆树市', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22018300', '德惠市', '22010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22020000', '吉林市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22020100', '市辖区', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22020200', '昌邑区', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22020300', '龙潭区', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22020400', '船营区', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22021100', '丰满区', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22022100', '永吉县', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22028100', '蛟河市', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22028200', '桦甸市', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22028300', '舒兰市', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22028400', '磐石市', '22020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22030000', '四平市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22030100', '市辖区', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22030200', '铁西区', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22030300', '铁东区', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22032200', '梨树县', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22032300', '伊通满族自治县', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22038100', '公主岭市', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22038200', '双辽市', '22030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22040000', '辽源市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22040100', '市辖区', '22040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22040200', '龙山区', '22040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22040300', '西安区', '22040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22042100', '东丰县', '22040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22042200', '东辽县', '22040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22050000', '通化市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22050100', '市辖区', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22050200', '东昌区', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22050300', '二道江区', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22052100', '通化县', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22052300', '辉南县', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22052400', '柳河县', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22058100', '梅河口市', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22058200', '集安市', '22050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22060000', '白山市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22060100', '市辖区', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22060200', '八道江区', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22060500', '江源区 ', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22062100', '抚松县', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22062200', '靖宇县', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22062300', '长白朝鲜族自治县', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22068100', '临江市', '22060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22070000', '松原市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22070100', '市辖区', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22070200', '宁江区', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22072100', '前郭尔罗斯蒙古族自治县', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22072200', '长岭县', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22072300', '乾安县', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22072400', '扶余县', '22070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22080000', '白城市', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22080100', '市辖区', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22080200', '洮北区', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22082100', '镇赉县', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22082200', '通榆县', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22088100', '洮南市', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22088200', '大安市', '22080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240000', '延边朝鲜族自治州', '22000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240100', '延吉市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240200', '图们市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240300', '敦化市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240400', '珲春市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240500', '龙井市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22240600', '和龙市', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22242400', '汪清县', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('22242600', '安图县', '22240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23000000', '黑龙江省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010000', '哈尔滨市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010100', '市辖区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010200', '道里区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010300', '南岗区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010400', '道外区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010800', '平房区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23010900', '松北区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23011000', '香坊区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23011100', '呼兰区', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23011200', '阿城区                 ', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012300', '依兰县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012400', '方正县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012500', '宾县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012600', '巴彦县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012700', '木兰县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012800', '通河县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23012900', '延寿县', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23018200', '双城市', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23018300', '尚志市', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23018400', '五常市', '23010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020000', '齐齐哈尔市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020100', '市辖区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020200', '龙沙区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020300', '建华区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020400', '铁锋区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020500', '昂昂溪区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020600', '富拉尔基区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020700', '碾子山区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23020800', '梅里斯达斡尔族区', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022100', '龙江县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022300', '依安县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022400', '泰来县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022500', '甘南县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022700', '富裕县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23022900', '克山县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23023000', '克东县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23023100', '拜泉县', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23028100', '讷河市', '23020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030000', '鸡西市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030100', '市辖区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030200', '鸡冠区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030300', '恒山区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030400', '滴道区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030500', '梨树区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030600', '城子河区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23030700', '麻山区', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23032100', '鸡东县', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23038100', '虎林市', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23038200', '密山市', '23030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040000', '鹤岗市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040100', '市辖区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040200', '向阳区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040300', '工农区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040400', '南山区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040500', '兴安区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040600', '东山区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23040700', '兴山区', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23042100', '萝北县', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23042200', '绥滨县', '23040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050000', '双鸭山市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050100', '市辖区', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050200', '尖山区', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050300', '岭东区', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050500', '四方台区', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23050600', '宝山区', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23052100', '集贤县', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23052200', '友谊县', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23052300', '宝清县', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23052400', '饶河县', '23050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060000', '大庆市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060100', '市辖区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060200', '萨尔图区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060300', '龙凤区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060400', '让胡路区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060500', '红岗区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23060600', '大同区', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23062100', '肇州县', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23062200', '肇源县', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23062300', '林甸县', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23062400', '杜尔伯特蒙古族自治县', '23060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070000', '伊春市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070100', '市辖区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070200', '伊春区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070300', '南岔区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070400', '友好区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070500', '西林区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070600', '翠峦区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070700', '新青区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070800', '美溪区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23070900', '金山屯区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071000', '五营区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071100', '乌马河区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071200', '汤旺河区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071300', '带岭区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071400', '乌伊岭区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071500', '红星区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23071600', '上甘岭区', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23072200', '嘉荫县', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23078100', '铁力市', '23070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23080000', '佳木斯市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23080100', '市辖区', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23080300', '向阳区', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23080400', '前进区', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23080500', '东风区', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23081100', '郊区', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23082200', '桦南县', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23082600', '桦川县', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23082800', '汤原县', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23083300', '抚远县', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23088100', '同江市', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23088200', '富锦市', '23080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23090000', '七台河市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23090100', '市辖区', '23090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23090200', '新兴区', '23090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23090300', '桃山区', '23090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23090400', '茄子河区', '23090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23092100', '勃利县', '23090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100000', '牡丹江市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100100', '市辖区', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100200', '东安区', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100300', '阳明区', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100400', '爱民区', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23100500', '西安区', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23102400', '东宁县', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23102500', '林口县', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23108100', '绥芬河市', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23108300', '海林市', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23108400', '宁安市', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23108500', '穆棱市', '23100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23110000', '黑河市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23110100', '市辖区', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23110200', '爱辉区', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23112100', '嫩江县', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23112300', '逊克县', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23112400', '孙吴县', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23118100', '北安市', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23118200', '五大连池市', '23110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23120000', '绥化市', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23120100', '市辖区', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23120200', '北林区', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122100', '望奎县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122200', '兰西县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122300', '青冈县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122400', '庆安县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122500', '明水县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23122600', '绥棱县', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23128100', '安达市', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23128200', '肇东市', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23128300', '海伦市', '23120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23270000', '大兴安岭地区', '23000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23270100', '加格达奇区', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23270200', '松岭区', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23270300', '新林区', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23270400', '呼中区', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23272100', '呼玛县', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23272200', '塔河县', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('23272300', '漠河县', '23270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31000000', '上海市', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010000', '市辖区', '31000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010100', '黄浦区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010300', '卢湾区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010400', '徐汇区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010500', '长宁区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010600', '静安区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010700', '普陀区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010800', '闸北区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31010900', '虹口区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011000', '杨浦区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011200', '闵行区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011300', '宝山区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011400', '嘉定区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011500', '浦东新区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011600', '金山区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011700', '松江区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011800', '青浦区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31011900', '南汇区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31012000', '奉贤区', '31010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31020000', '县', '31000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('31023000', '崇明县', '31020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32000000', '江苏省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010000', '南京市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010100', '市辖区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010200', '玄武区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010300', '白下区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010400', '秦淮区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010500', '建邺区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010600', '鼓楼区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32010700', '下关区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32011100', '浦口区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32011300', '栖霞区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32011400', '雨花台区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32011500', '江宁区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32011600', '六合区', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32012400', '溧水县', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32012500', '高淳县', '32010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020000', '无锡市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020100', '市辖区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020200', '崇安区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020300', '南长区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020400', '北塘区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020500', '锡山区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32020600', '惠山区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32021100', '滨湖区', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32028100', '江阴市', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32028200', '宜兴市', '32020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030000', '徐州市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030100', '市辖区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030200', '鼓楼区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030300', '云龙区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030400', '九里区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32030500', '贾汪区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32031100', '泉山区', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32032100', '丰县', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32032200', '沛县', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32032300', '铜山县', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32032400', '睢宁县', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32038100', '新沂市', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32038200', '邳州市', '32030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32040000', '常州市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32040100', '市辖区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32040200', '天宁区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32040400', '钟楼区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32040500', '戚墅堰区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32041100', '新北区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32041200', '武进区', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32048100', '溧阳市', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32048200', '金坛市', '32040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050000', '苏州市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050100', '市辖区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050200', '沧浪区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050300', '平江区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050400', '金阊区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050500', '虎丘区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050600', '吴中区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32050700', '相城区', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32058100', '常熟市', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32058200', '张家港市', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32058300', '昆山市', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32058400', '吴江市', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32058500', '太仓市', '32050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32060000', '南通市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32060100', '市辖区', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32060200', '崇川区', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32061100', '港闸区', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32062100', '海安县', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32062300', '如东县', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32068100', '启东市', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32068200', '如皋市', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32068300', '通州市', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32068400', '海门市', '32060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32070000', '连云港市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32070100', '市辖区', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32070300', '连云区', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32070500', '新浦区', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32070600', '海州区', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32072100', '赣榆县', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32072200', '东海县', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32072300', '灌云县', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32072400', '灌南县', '32070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32080000', '淮安市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32080100', '市辖区', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32080200', '清河区', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32080300', '楚州区', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32080400', '淮阴区', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32081100', '清浦区', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32082600', '涟水县', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32082900', '洪泽县', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32083000', '盱眙县', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32083100', '金湖县', '32080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32090000', '盐城市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32090100', '市辖区', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32090200', '亭湖区', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32090300', '盐都区', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32092100', '响水县', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32092200', '滨海县', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32092300', '阜宁县', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32092400', '射阳县', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32092500', '建湖县', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32098100', '东台市', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32098200', '大丰市', '32090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32100000', '扬州市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32100100', '市辖区', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32100200', '广陵区', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32100300', '邗江区', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32101100', '维扬区', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32102300', '宝应县', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32108100', '仪征市', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32108400', '高邮市', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32108800', '江都市', '32100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32110000', '镇江市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32110100', '市辖区', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32110200', '京口区', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32111100', '润州区', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32111200', '丹徒区', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32118100', '丹阳市', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32118200', '扬中市', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32118300', '句容市', '32110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32120000', '泰州市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32120100', '市辖区', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32120200', '海陵区', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32120300', '高港区', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32128100', '兴化市', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32128200', '靖江市', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32128300', '泰兴市', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32128400', '姜堰市', '32120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32130000', '宿迁市', '32000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32130100', '市辖区', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32130200', '宿城区', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32131100', '宿豫区', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32132200', '沭阳县', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32132300', '泗阳县', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('32132400', '泗洪县', '32130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33000000', '浙江省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010000', '杭州市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010100', '市辖区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010200', '上城区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010300', '下城区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010400', '江干区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010500', '拱墅区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010600', '西湖区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010800', '滨江区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33010900', '萧山区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33011000', '余杭区', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33012200', '桐庐县', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33012700', '淳安县', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33018200', '建德市', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33018300', '富阳市', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33018500', '临安市', '33010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020000', '宁波市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020100', '市辖区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020300', '海曙区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020400', '江东区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020500', '江北区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33020600', '北仑区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33021100', '镇海区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33021200', '鄞州区', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33022500', '象山县', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33022600', '宁海县', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33028100', '余姚市', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33028200', '慈溪市', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33028300', '奉化市', '33020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33030000', '温州市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33030100', '市辖区', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33030200', '鹿城区', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33030300', '龙湾区', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33030400', '瓯海区', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032200', '洞头县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032400', '永嘉县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032600', '平阳县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032700', '苍南县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032800', '文成县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33032900', '泰顺县', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33038100', '瑞安市', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33038200', '乐清市', '33030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33040000', '嘉兴市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33040100', '市辖区', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33040200', '南湖区 ', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33041100', '秀洲区', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33042100', '嘉善县', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33042400', '海盐县', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33048100', '海宁市', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33048200', '平湖市', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33048300', '桐乡市', '33040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33050000', '湖州市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33050100', '市辖区', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33050200', '吴兴区', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33050300', '南浔区', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33052100', '德清县', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33052200', '长兴县', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33052300', '安吉县', '33050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33060000', '绍兴市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33060100', '市辖区', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33060200', '越城区', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33062100', '绍兴县', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33062400', '新昌县', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33068100', '诸暨市', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33068200', '上虞市', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33068300', '嵊州市', '33060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33070000', '金华市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33070100', '市辖区', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33070200', '婺城区', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33070300', '金东区', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33072300', '武义县', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33072600', '浦江县', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33072700', '磐安县', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33078100', '兰溪市', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33078200', '义乌市', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33078300', '东阳市', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33078400', '永康市', '33070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33080000', '衢州市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33080100', '市辖区', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33080200', '柯城区', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33080300', '衢江区', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33082200', '常山县', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33082400', '开化县', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33082500', '龙游县', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33088100', '江山市', '33080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33090000', '舟山市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33090100', '市辖区', '33090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33090200', '定海区', '33090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33090300', '普陀区', '33090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33092100', '岱山县', '33090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33092200', '嵊泗县', '33090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33100000', '台州市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33100100', '市辖区', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33100200', '椒江区', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33100300', '黄岩区', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33100400', '路桥区', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33102100', '玉环县', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33102200', '三门县', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33102300', '天台县', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33102400', '仙居县', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33108100', '温岭市', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33108200', '临海市', '33100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33110000', '丽水市', '33000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33110100', '市辖区', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33110200', '莲都区', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112100', '青田县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112200', '缙云县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112300', '遂昌县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112400', '松阳县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112500', '云和县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112600', '庆元县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33112700', '景宁畲族自治县', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('33118100', '龙泉市', '33110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34000000', '安徽省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34010000', '合肥市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34010100', '市辖区', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34010200', '瑶海区', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34010300', '庐阳区', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34010400', '蜀山区', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34011100', '包河区', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34012100', '长丰县', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34012200', '肥东县', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34012300', '肥西县', '34010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020000', '芜湖市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020100', '市辖区', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020200', '镜湖区', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020300', '弋江区', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020700', '鸠江区', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34020800', '三山区', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34022100', '芜湖县', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34022200', '繁昌县', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34022300', '南陵县', '34020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34030000', '蚌埠市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34030100', '市辖区', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34030200', '龙子湖区', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34030300', '蚌山区', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34030400', '禹会区', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34031100', '淮上区', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34032100', '怀远县', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34032200', '五河县', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34032300', '固镇县', '34030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040000', '淮南市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040100', '市辖区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040200', '大通区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040300', '田家庵区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040400', '谢家集区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040500', '八公山区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34040600', '潘集区', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34042100', '凤台县', '34040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34050000', '马鞍山市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34050100', '市辖区', '34050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34050200', '金家庄区', '34050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34050300', '花山区', '34050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34050400', '雨山区', '34050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34052100', '当涂县', '34050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34060000', '淮北市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34060100', '市辖区', '34060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34060200', '杜集区', '34060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34060300', '相山区', '34060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34060400', '烈山区', '34060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34062100', '濉溪县', '34060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34070000', '铜陵市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34070100', '市辖区', '34070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34070200', '铜官山区', '34070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34070300', '狮子山区', '34070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34071100', '郊区', '34070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34072100', '铜陵县', '34070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34080000', '安庆市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34080100', '市辖区', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34080200', '迎江区', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34080300', '大观区', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34081100', '宜秀区', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082200', '怀宁县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082300', '枞阳县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082400', '潜山县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082500', '太湖县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082600', '宿松县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082700', '望江县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34082800', '岳西县', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34088100', '桐城市', '34080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34100000', '黄山市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34100100', '市辖区', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34100200', '屯溪区', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34100300', '黄山区', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34100400', '徽州区', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34102100', '歙县', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34102200', '休宁县', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34102300', '黟县', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34102400', '祁门县', '34100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34110000', '滁州市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34110100', '市辖区', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34110200', '琅琊区', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34110300', '南谯区', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34112200', '来安县', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34112400', '全椒县', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34112500', '定远县', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34112600', '凤阳县', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34118100', '天长市', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34118200', '明光市', '34110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34120000', '阜阳市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34120100', '市辖区', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34120200', '颍州区', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34120300', '颍东区', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34120400', '颍泉区', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34122100', '临泉县', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34122200', '太和县', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34122500', '阜南县', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34122600', '颍上县', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34128200', '界首市', '34120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34130000', '宿州市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34130100', '市辖区', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34130200', '埇桥区', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34132100', '砀山县', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34132200', '萧县', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34132300', '灵璧县', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34132400', '泗县', '34130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34140000', '巢湖市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34140100', '市辖区', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34140200', '居巢区', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34142100', '庐江县', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34142200', '无为县', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34142300', '含山县', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34142400', '和县', '34140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34150000', '六安市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34150100', '市辖区', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34150200', '金安区', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34150300', '裕安区', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34152100', '寿县', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34152200', '霍邱县', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34152300', '舒城县', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34152400', '金寨县', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34152500', '霍山县', '34150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34160000', '亳州市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34160100', '市辖区', '34160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34160200', '谯城区', '34160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34162100', '涡阳县', '34160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34162200', '蒙城县', '34160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34162300', '利辛县', '34160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34170000', '池州市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34170100', '市辖区', '34170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34170200', '贵池区', '34170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34172100', '东至县', '34170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34172200', '石台县', '34170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34172300', '青阳县', '34170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34180000', '宣城市', '34000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34180100', '市辖区', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34180200', '宣州区', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34182100', '郎溪县', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34182200', '广德县', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34182300', '泾县', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34182400', '绩溪县', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34182500', '旌德县', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('34188100', '宁国市', '34180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35000000', '福建省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010000', '福州市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010100', '市辖区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010200', '鼓楼区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010300', '台江区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010400', '仓山区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35010500', '马尾区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35011100', '晋安区', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012100', '闽侯县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012200', '连江县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012300', '罗源县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012400', '闽清县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012500', '永泰县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35012800', '平潭县', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35018100', '福清市', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35018200', '长乐市', '35010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35020000', '厦门市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35020100', '市辖区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35020300', '思明区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35020500', '海沧区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35020600', '湖里区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35021100', '集美区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35021200', '同安区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35021300', '翔安区', '35020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030000', '莆田市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030100', '市辖区', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030200', '城厢区', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030300', '涵江区', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030400', '荔城区', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35030500', '秀屿区', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35032200', '仙游县', '35030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35040000', '三明市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35040100', '市辖区', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35040200', '梅列区', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35040300', '三元区', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042100', '明溪县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042300', '清流县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042400', '宁化县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042500', '大田县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042600', '尤溪县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042700', '沙县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042800', '将乐县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35042900', '泰宁县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35043000', '建宁县', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35048100', '永安市', '35040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050000', '泉州市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050100', '市辖区', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050200', '鲤城区', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050300', '丰泽区', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050400', '洛江区', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35050500', '泉港区', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35052100', '惠安县', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35052400', '安溪县', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35052500', '永春县', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35052600', '德化县', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35052700', '金门县', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35058100', '石狮市', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35058200', '晋江市', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35058300', '南安市', '35050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35060000', '漳州市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35060100', '市辖区', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35060200', '芗城区', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35060300', '龙文区', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062200', '云霄县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062300', '漳浦县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062400', '诏安县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062500', '长泰县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062600', '东山县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062700', '南靖县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062800', '平和县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35062900', '华安县', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35068100', '龙海市', '35060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35070000', '南平市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35070100', '市辖区', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35070200', '延平区', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35072100', '顺昌县', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35072200', '浦城县', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35072300', '光泽县', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35072400', '松溪县', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35072500', '政和县', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35078100', '邵武市', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35078200', '武夷山市', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35078300', '建瓯市', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35078400', '建阳市', '35070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35080000', '龙岩市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35080100', '市辖区', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35080200', '新罗区', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35082100', '长汀县', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35082200', '永定县', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35082300', '上杭县', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35082400', '武平县', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35082500', '连城县', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35088100', '漳平市', '35080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35090000', '宁德市', '35000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35090100', '市辖区', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35090200', '蕉城区', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092100', '霞浦县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092200', '古田县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092300', '屏南县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092400', '寿宁县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092500', '周宁县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35092600', '柘荣县', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35098100', '福安市', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('35098200', '福鼎市', '35090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36000000', '江西省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010000', '南昌市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010100', '市辖区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010200', '东湖区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010300', '西湖区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010400', '青云谱区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36010500', '湾里区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36011100', '青山湖区', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36012100', '南昌县', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36012200', '新建县', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36012300', '安义县', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36012400', '进贤县', '36010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36020000', '景德镇市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36020100', '市辖区', '36020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36020200', '昌江区', '36020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36020300', '珠山区', '36020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36022200', '浮梁县', '36020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36028100', '乐平市', '36020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36030000', '萍乡市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36030100', '市辖区', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36030200', '安源区', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36031300', '湘东区', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36032100', '莲花县', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36032200', '上栗县', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36032300', '芦溪县', '36030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36040000', '九江市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36040100', '市辖区', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36040200', '庐山区', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36040300', '浔阳区', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042100', '九江县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042300', '武宁县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042400', '修水县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042500', '永修县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042600', '德安县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042700', '星子县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042800', '都昌县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36042900', '湖口县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36043000', '彭泽县', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36048100', '瑞昌市', '36040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36050000', '新余市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36050100', '市辖区', '36050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36050200', '渝水区', '36050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36052100', '分宜县', '36050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36060000', '鹰潭市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36060100', '市辖区', '36060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36060200', '月湖区', '36060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36062200', '余江县', '36060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36068100', '贵溪市', '36060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36070000', '赣州市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36070100', '市辖区', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36070200', '章贡区', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072100', '赣县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072200', '信丰县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072300', '大余县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072400', '上犹县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072500', '崇义县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072600', '安远县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072700', '龙南县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072800', '定南县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36072900', '全南县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073000', '宁都县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073100', '于都县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073200', '兴国县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073300', '会昌县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073400', '寻乌县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36073500', '石城县', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36078100', '瑞金市', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36078200', '南康市', '36070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36080000', '吉安市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36080100', '市辖区', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36080200', '吉州区', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36080300', '青原区', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082100', '吉安县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082200', '吉水县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082300', '峡江县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082400', '新干县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082500', '永丰县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082600', '泰和县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082700', '遂川县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082800', '万安县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36082900', '安福县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36083000', '永新县', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36088100', '井冈山市', '36080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36090000', '宜春市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36090100', '市辖区', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36090200', '袁州区', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092100', '奉新县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092200', '万载县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092300', '上高县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092400', '宜丰县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092500', '靖安县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36092600', '铜鼓县', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36098100', '丰城市', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36098200', '樟树市', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36098300', '高安市', '36090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36100000', '抚州市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36100100', '市辖区', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36100200', '临川区', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102100', '南城县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102200', '黎川县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102300', '南丰县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102400', '崇仁县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102500', '乐安县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102600', '宜黄县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102700', '金溪县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102800', '资溪县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36102900', '东乡县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36103000', '广昌县', '36100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36110000', '上饶市', '36000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36110100', '市辖区', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36110200', '信州区', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112100', '上饶县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112200', '广丰县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112300', '玉山县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112400', '铅山县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112500', '横峰县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112600', '弋阳县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112700', '余干县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112800', '鄱阳县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36112900', '万年县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36113000', '婺源县', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('36118100', '德兴市', '36110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37000000', '山东省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010000', '济南市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010100', '市辖区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010200', '历下区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010300', '市中区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010400', '槐荫区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37010500', '天桥区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37011200', '历城区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37011300', '长清区', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37012400', '平阴县', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37012500', '济阳县', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37012600', '商河县', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37018100', '章丘市', '37010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37020000', '青岛市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37020100', '市辖区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37020200', '市南区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37020300', '市北区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37020500', '四方区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37021100', '黄岛区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37021200', '崂山区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37021300', '李沧区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37021400', '城阳区', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37028100', '胶州市', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37028200', '即墨市', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37028300', '平度市', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37028400', '胶南市', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37028500', '莱西市', '37020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030000', '淄博市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030100', '市辖区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030200', '淄川区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030300', '张店区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030400', '博山区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030500', '临淄区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37030600', '周村区', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37032100', '桓台县', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37032200', '高青县', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37032300', '沂源县', '37030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040000', '枣庄市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040100', '市辖区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040200', '市中区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040300', '薛城区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040400', '峄城区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040500', '台儿庄区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37040600', '山亭区', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37048100', '滕州市', '37040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37050000', '东营市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37050100', '市辖区', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37050200', '东营区', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37050300', '河口区', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37052100', '垦利县', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37052200', '利津县', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37052300', '广饶县', '37050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37060000', '烟台市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37060100', '市辖区', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37060200', '芝罘区', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37061100', '福山区', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37061200', '牟平区', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37061300', '莱山区', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37063400', '长岛县', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068100', '龙口市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068200', '莱阳市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068300', '莱州市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068400', '蓬莱市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068500', '招远市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068600', '栖霞市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37068700', '海阳市', '37060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070000', '潍坊市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070100', '市辖区', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070200', '潍城区', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070300', '寒亭区', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070400', '坊子区', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37070500', '奎文区', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37072400', '临朐县', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37072500', '昌乐县', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078100', '青州市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078200', '诸城市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078300', '寿光市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078400', '安丘市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078500', '高密市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37078600', '昌邑市', '37070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37080000', '济宁市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37080100', '市辖区', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37080200', '市中区', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37081100', '任城区', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37082600', '微山县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37082700', '鱼台县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37082800', '金乡县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37082900', '嘉祥县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37083000', '汶上县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37083100', '泗水县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37083200', '梁山县', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37088100', '曲阜市', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37088200', '兖州市', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37088300', '邹城市', '37080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37090000', '泰安市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37090100', '市辖区', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37090200', '泰山区', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37091100', '岱岳区 ', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37092100', '宁阳县', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37092300', '东平县', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37098200', '新泰市', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37098300', '肥城市', '37090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37100000', '威海市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37100100', '市辖区', '37100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37100200', '环翠区', '37100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37108100', '文登市', '37100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37108200', '荣成市', '37100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37108300', '乳山市', '37100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37110000', '日照市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37110100', '市辖区', '37110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37110200', '东港区', '37110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37110300', '岚山区', '37110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37112100', '五莲县', '37110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37112200', '莒县', '37110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37120000', '莱芜市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37120100', '市辖区', '37120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37120200', '莱城区', '37120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37120300', '钢城区', '37120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37130000', '临沂市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37130100', '市辖区', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37130200', '兰山区', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37131100', '罗庄区', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37131200', '河东区', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132100', '沂南县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132200', '郯城县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132300', '沂水县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132400', '苍山县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132500', '费县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132600', '平邑县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132700', '莒南县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132800', '蒙阴县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37132900', '临沭县', '37130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37140000', '德州市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37140100', '市辖区', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37140200', '德城区', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142100', '陵县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142200', '宁津县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142300', '庆云县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142400', '临邑县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142500', '齐河县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142600', '平原县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142700', '夏津县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37142800', '武城县', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37148100', '乐陵市', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37148200', '禹城市', '37140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37150000', '聊城市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37150100', '市辖区', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37150200', '东昌府区', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152100', '阳谷县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152200', '莘县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152300', '茌平县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152400', '东阿县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152500', '冠县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37152600', '高唐县', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37158100', '临清市', '37150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37160000', '滨州市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37160100', '市辖区', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37160200', '滨城区', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162100', '惠民县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162200', '阳信县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162300', '无棣县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162400', '沾化县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162500', '博兴县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37162600', '邹平县', '37160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37170000', '菏泽市', '37000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37170100', '市辖区', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37170200', '牡丹区', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172100', '曹县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172200', '单县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172300', '成武县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172400', '巨野县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172500', '郓城县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172600', '鄄城县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172700', '定陶县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('37172800', '东明县', '37170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41000000', '河南省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010000', '郑州市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010100', '市辖区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010200', '中原区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010300', '二七区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010400', '管城回族区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010500', '金水区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010600', '上街区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41010800', '惠济区', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41012200', '中牟县', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41018100', '巩义市', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41018200', '荥阳市', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41018300', '新密市', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41018400', '新郑市', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41018500', '登封市', '41010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020000', '开封市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020100', '市辖区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020200', '龙亭区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020300', '顺河回族区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020400', '鼓楼区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41020500', '禹王台区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41021100', '金明区', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41022100', '杞县', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41022200', '通许县', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41022300', '尉氏县', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41022400', '开封县', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41022500', '兰考县', '41020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030000', '洛阳市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030100', '市辖区', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030200', '老城区', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030300', '西工区', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030400', '瀍河回族区 ', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030500', '涧西区', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41030600', '吉利区', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41031100', '洛龙区 ', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032200', '孟津县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032300', '新安县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032400', '栾川县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032500', '嵩县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032600', '汝阳县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032700', '宜阳县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032800', '洛宁县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41032900', '伊川县', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41038100', '偃师市', '41030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41040000', '平顶山市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41040100', '市辖区', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41040200', '新华区', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41040300', '卫东区', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41040400', '石龙区', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41041100', '湛河区', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41042100', '宝丰县', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41042200', '叶县', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41042300', '鲁山县', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41042500', '郏县', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41048100', '舞钢市', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41048200', '汝州市', '41040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050000', '安阳市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050100', '市辖区', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050200', '文峰区', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050300', '北关区', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050500', '殷都区', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41050600', '龙安区', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41052200', '安阳县', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41052300', '汤阴县', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41052600', '滑县', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41052700', '内黄县', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41058100', '林州市', '41050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41060000', '鹤壁市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41060100', '市辖区', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41060200', '鹤山区', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41060300', '山城区', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41061100', '淇滨区', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41062100', '浚县', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41062200', '淇县', '41060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41070000', '新乡市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41070100', '市辖区', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41070200', '红旗区', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41070300', '卫滨区', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41070400', '凤泉区', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41071100', '牧野区', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072100', '新乡县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072400', '获嘉县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072500', '原阳县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072600', '延津县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072700', '封丘县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41072800', '长垣县', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41078100', '卫辉市', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41078200', '辉县市', '41070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41080000', '焦作市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41080100', '市辖区', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41080200', '解放区', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41080300', '中站区', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41080400', '马村区', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41081100', '山阳区', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41082100', '修武县', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41082200', '博爱县', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41082300', '武陟县', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41082500', '温县', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41088100', '济源市', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41088200', '沁阳市', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41088300', '孟州市', '41080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41090000', '濮阳市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41090100', '市辖区', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41090200', '华龙区', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41092200', '清丰县', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41092300', '南乐县', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41092600', '范县', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41092700', '台前县', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41092800', '濮阳县', '41090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41100000', '许昌市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41100100', '市辖区', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41100200', '魏都区', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41102300', '许昌县', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41102400', '鄢陵县', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41102500', '襄城县', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41108100', '禹州市', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41108200', '长葛市', '41100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41110000', '漯河市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41110100', '市辖区', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41110200', '源汇区', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41110300', '郾城区', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41110400', '召陵区', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41112100', '舞阳县', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41112200', '临颍县', '41110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41120000', '三门峡市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41120100', '市辖区', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41120200', '湖滨区', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41122100', '渑池县', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41122200', '陕县', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41122400', '卢氏县', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41128100', '义马市', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41128200', '灵宝市', '41120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41130000', '南阳市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41130100', '市辖区', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41130200', '宛城区', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41130300', '卧龙区', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132100', '南召县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132200', '方城县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132300', '西峡县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132400', '镇平县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132500', '内乡县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132600', '淅川县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132700', '社旗县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132800', '唐河县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41132900', '新野县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41133000', '桐柏县', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41138100', '邓州市', '41130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41140000', '商丘市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41140100', '市辖区', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41140200', '梁园区', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41140300', '睢阳区', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142100', '民权县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142200', '睢县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142300', '宁陵县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142400', '柘城县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142500', '虞城县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41142600', '夏邑县', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41148100', '永城市', '41140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41150000', '信阳市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41150100', '市辖区', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41150200', '浉河区', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41150300', '平桥区', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152100', '罗山县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152200', '光山县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152300', '新县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152400', '商城县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152500', '固始县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152600', '潢川县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152700', '淮滨县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41152800', '息县', '41150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41160000', '周口市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41160100', '市辖区', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41160200', '川汇区', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162100', '扶沟县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162200', '西华县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162300', '商水县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162400', '沈丘县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162500', '郸城县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162600', '淮阳县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162700', '太康县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41162800', '鹿邑县', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41168100', '项城市', '41160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41170000', '驻马店市', '41000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41170100', '市辖区', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41170200', '驿城区', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172100', '西平县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172200', '上蔡县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172300', '平舆县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172400', '正阳县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172500', '确山县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172600', '泌阳县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172700', '汝南县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172800', '遂平县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('41172900', '新蔡县', '41170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42000000', '湖北省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010000', '武汉市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010100', '市辖区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010200', '江岸区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010300', '江汉区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010400', '硚口区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010500', '汉阳区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010600', '武昌区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42010700', '青山区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011100', '洪山区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011200', '东西湖区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011300', '汉南区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011400', '蔡甸区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011500', '江夏区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011600', '黄陂区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42011700', '新洲区', '42010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020000', '黄石市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020100', '市辖区', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020200', '黄石港区', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020300', '西塞山区', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020400', '下陆区', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42020500', '铁山区', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42022200', '阳新县', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42028100', '大冶市', '42020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42030000', '十堰市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42030100', '市辖区', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42030200', '茅箭区', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42030300', '张湾区', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42032100', '郧县', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42032200', '郧西县', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42032300', '竹山县', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42032400', '竹溪县', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42032500', '房县', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42038100', '丹江口市', '42030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050000', '宜昌市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050100', '市辖区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050200', '西陵区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050300', '伍家岗区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050400', '点军区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050500', '猇亭区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42050600', '夷陵区', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42052500', '远安县', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42052600', '兴山县', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42052700', '秭归县', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42052800', '长阳土家族自治县', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42052900', '五峰土家族自治县', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42058100', '宜都市', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42058200', '当阳市', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42058300', '枝江市', '42050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42060000', '襄樊市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42060100', '市辖区', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42060200', '襄城区', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42060600', '樊城区', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42060700', '襄阳区', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42062400', '南漳县', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42062500', '谷城县', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42062600', '保康县', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42068200', '老河口市', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42068300', '枣阳市', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42068400', '宜城市', '42060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42070000', '鄂州市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42070100', '市辖区', '42070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42070200', '梁子湖区', '42070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42070300', '华容区', '42070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42070400', '鄂城区', '42070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42080000', '荆门市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42080100', '市辖区', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42080200', '东宝区', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42080400', '掇刀区', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42082100', '京山县', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42082200', '沙洋县', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42088100', '钟祥市', '42080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42090000', '孝感市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42090100', '市辖区', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42090200', '孝南区', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42092100', '孝昌县', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42092200', '大悟县', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42092300', '云梦县', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42098100', '应城市', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42098200', '安陆市', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42098400', '汉川市', '42090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42100000', '荆州市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42100100', '市辖区', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42100200', '沙市区', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42100300', '荆州区', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42102200', '公安县', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42102300', '监利县', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42102400', '江陵县', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42108100', '石首市', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42108300', '洪湖市', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42108700', '松滋市', '42100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42110000', '黄冈市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42110100', '市辖区', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42110200', '黄州区', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112100', '团风县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112200', '红安县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112300', '罗田县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112400', '英山县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112500', '浠水县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112600', '蕲春县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42112700', '黄梅县', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42118100', '麻城市', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42118200', '武穴市', '42110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42120000', '咸宁市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42120100', '市辖区', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42120200', '咸安区', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42122100', '嘉鱼县', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42122200', '通城县', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42122300', '崇阳县', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42122400', '通山县', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42128100', '赤壁市', '42120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42130000', '随州市', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42130100', '市辖区', '42130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42130200', '曾都区', '42130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42138100', '广水市', '42130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42280000', '恩施土家族苗族自治州', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42280100', '恩施市', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42280200', '利川市', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282200', '建始县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282300', '巴东县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282500', '宣恩县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282600', '咸丰县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282700', '来凤县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42282800', '鹤峰县', '42280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42900000', '省直辖县级行政单位 ', '42000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42900400', '仙桃市', '42900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42900500', '潜江市', '42900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42900600', '天门市', '42900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('42902100', '神农架林区', '42900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43000000', '湖南省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010000', '长沙市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010100', '市辖区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010200', '芙蓉区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010300', '天心区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010400', '岳麓区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43010500', '开福区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43011100', '雨花区', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43012100', '长沙县', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43012200', '望城县', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43012400', '宁乡县', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43018100', '浏阳市', '43010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43020000', '株洲市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43020100', '市辖区', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43020200', '荷塘区', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43020300', '芦淞区', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43020400', '石峰区', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43021100', '天元区', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43022100', '株洲县', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43022300', '攸县', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43022400', '茶陵县', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43022500', '炎陵县', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43028100', '醴陵市', '43020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43030000', '湘潭市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43030100', '市辖区', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43030200', '雨湖区', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43030400', '岳塘区', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43032100', '湘潭县', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43038100', '湘乡市', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43038200', '韶山市', '43030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040000', '衡阳市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040100', '市辖区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040500', '珠晖区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040600', '雁峰区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040700', '石鼓区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43040800', '蒸湘区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43041200', '南岳区', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43042100', '衡阳县', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43042200', '衡南县', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43042300', '衡山县', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43042400', '衡东县', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43042600', '祁东县', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43048100', '耒阳市', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43048200', '常宁市', '43040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43050000', '邵阳市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43050100', '市辖区', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43050200', '双清区', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43050300', '大祥区', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43051100', '北塔区', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052100', '邵东县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052200', '新邵县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052300', '邵阳县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052400', '隆回县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052500', '洞口县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052700', '绥宁县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052800', '新宁县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43052900', '城步苗族自治县', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43058100', '武冈市', '43050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43060000', '岳阳市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43060100', '市辖区', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43060200', '岳阳楼区', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43060300', '云溪区', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43061100', '君山区', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43062100', '岳阳县', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43062300', '华容县', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43062400', '湘阴县', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43062600', '平江县', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43068100', '汨罗市', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43068200', '临湘市', '43060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43070000', '常德市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43070100', '市辖区', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43070200', '武陵区', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43070300', '鼎城区', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072100', '安乡县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072200', '汉寿县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072300', '澧县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072400', '临澧县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072500', '桃源县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43072600', '石门县', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43078100', '津市市', '43070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43080000', '张家界市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43080100', '市辖区', '43080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43080200', '永定区', '43080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43081100', '武陵源区', '43080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43082100', '慈利县', '43080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43082200', '桑植县', '43080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43090000', '益阳市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43090100', '市辖区', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43090200', '资阳区', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43090300', '赫山区', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43092100', '南县', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43092200', '桃江县', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43092300', '安化县', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43098100', '沅江市', '43090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43100000', '郴州市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43100100', '市辖区', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43100200', '北湖区', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43100300', '苏仙区', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102100', '桂阳县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102200', '宜章县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102300', '永兴县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102400', '嘉禾县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102500', '临武县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102600', '汝城县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102700', '桂东县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43102800', '安仁县', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43108100', '资兴市', '43100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43110000', '永州市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43110100', '市辖区', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43110200', '零陵区', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43110300', '冷水滩区', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112100', '祁阳县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112200', '东安县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112300', '双牌县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112400', '道县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112500', '江永县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112600', '宁远县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112700', '蓝山县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112800', '新田县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43112900', '江华瑶族自治县', '43110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43120000', '怀化市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43120100', '市辖区', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43120200', '鹤城区', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122100', '中方县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122200', '沅陵县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122300', '辰溪县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122400', '溆浦县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122500', '会同县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122600', '麻阳苗族自治县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122700', '新晃侗族自治县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122800', '芷江侗族自治县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43122900', '靖州苗族侗族自治县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43123000', '通道侗族自治县', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43128100', '洪江市', '43120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43130000', '娄底市', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43130100', '市辖区', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43130200', '娄星区', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43132100', '双峰县', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43132200', '新化县', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43138100', '冷水江市', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43138200', '涟源市', '43130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43310000', '湘西土家族苗族自治州', '43000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43310100', '吉首市', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312200', '泸溪县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312300', '凤凰县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312400', '花垣县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312500', '保靖县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312600', '古丈县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43312700', '永顺县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('43313000', '龙山县', '43310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44000000', '广东省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010000', '广州市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010100', '市辖区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010300', '荔湾区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010400', '越秀区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010500', '海珠区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44010600', '天河区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011100', '白云区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011200', '黄埔区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011300', '番禺区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011400', '花都区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011500', '南沙区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44011600', '萝岗区', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44018300', '增城市', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44018400', '从化市', '44010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44020000', '韶关市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44020100', '市辖区', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44020300', '武江区', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44020400', '浈江区', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44020500', '曲江区', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44022200', '始兴县', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44022400', '仁化县', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44022900', '翁源县', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44023200', '乳源瑶族自治县', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44023300', '新丰县', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44028100', '乐昌市', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44028200', '南雄市', '44020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030000', '深圳市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030100', '市辖区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030300', '罗湖区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030400', '福田区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030500', '南山区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030600', '宝安区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030700', '龙岗区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44030800', '盐田区', '44030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44040000', '珠海市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44040100', '市辖区', '44040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44040200', '香洲区', '44040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44040300', '斗门区', '44040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44040400', '金湾区', '44040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44050000', '汕头市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44050100', '市辖区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44050700', '龙湖区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44051100', '金平区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44051200', '濠江区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44051300', '潮阳区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44051400', '潮南区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44051500', '澄海区', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44052300', '南澳县', '44050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060000', '佛山市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060100', '市辖区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060400', '禅城区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060500', '南海区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060600', '顺德区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060700', '三水区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44060800', '高明区', '44060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44070000', '江门市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44070100', '市辖区', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44070300', '蓬江区', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44070400', '江海区', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44070500', '新会区', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44078100', '台山市', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44078300', '开平市', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44078400', '鹤山市', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44078500', '恩平市', '44070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44080000', '湛江市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44080100', '市辖区', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44080200', '赤坎区', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44080300', '霞山区', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44080400', '坡头区', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44081100', '麻章区', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44082300', '遂溪县', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44082500', '徐闻县', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44088100', '廉江市', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44088200', '雷州市', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44088300', '吴川市', '44080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44090000', '茂名市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44090100', '市辖区', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44090200', '茂南区', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44090300', '茂港区', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44092300', '电白县', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44098100', '高州市', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44098200', '化州市', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44098300', '信宜市', '44090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44120000', '肇庆市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44120100', '市辖区', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44120200', '端州区', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44120300', '鼎湖区', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44122300', '广宁县', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44122400', '怀集县', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44122500', '封开县', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44122600', '德庆县', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44128300', '高要市', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44128400', '四会市', '44120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44130000', '惠州市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44130100', '市辖区', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44130200', '惠城区', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44130300', '惠阳区', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44132200', '博罗县', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44132300', '惠东县', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44132400', '龙门县', '44130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44140000', '梅州市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44140100', '市辖区', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44140200', '梅江区', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142100', '梅县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142200', '大埔县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142300', '丰顺县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142400', '五华县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142600', '平远县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44142700', '蕉岭县', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44148100', '兴宁市', '44140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44150000', '汕尾市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44150100', '市辖区', '44150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44150200', '城区', '44150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44152100', '海丰县', '44150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44152300', '陆河县', '44150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44158100', '陆丰市', '44150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44160000', '河源市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44160100', '市辖区', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44160200', '源城区', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44162100', '紫金县', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44162200', '龙川县', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44162300', '连平县', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44162400', '和平县', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44162500', '东源县', '44160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44170000', '阳江市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44170100', '市辖区', '44170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44170200', '江城区', '44170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44172100', '阳西县', '44170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44172300', '阳东县', '44170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44178100', '阳春市', '44170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44180000', '清远市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44180100', '市辖区', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44180200', '清城区', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44182100', '佛冈县', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44182300', '阳山县', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44182500', '连山壮族瑶族自治县', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44182600', '连南瑶族自治县', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44182700', '清新县', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44188100', '英德市', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44188200', '连州市', '44180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44190000', '东莞市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44200000', '中山市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44510000', '潮州市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44510100', '市辖区', '44510000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44510200', '湘桥区', '44510000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44512100', '潮安县', '44510000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44512200', '饶平县', '44510000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44520000', '揭阳市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44520100', '市辖区', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44520200', '榕城区', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44522100', '揭东县', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44522200', '揭西县', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44522400', '惠来县', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44528100', '普宁市', '44520000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44530000', '云浮市', '44000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44530100', '市辖区', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44530200', '云城区', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44532100', '新兴县', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44532200', '郁南县', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44532300', '云安县', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('44538100', '罗定市', '44530000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45000000', '广西壮族自治区', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010000', '南宁市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010100', '市辖区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010200', '兴宁区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010300', '青秀区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010500', '江南区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010700', '西乡塘区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010800', '良庆区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45010900', '邕宁区', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012200', '武鸣县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012300', '隆安县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012400', '马山县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012500', '上林县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012600', '宾阳县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45012700', '横县', '45010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020000', '柳州市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020100', '市辖区', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020200', '城中区', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020300', '鱼峰区', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020400', '柳南区', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45020500', '柳北区', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022100', '柳江县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022200', '柳城县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022300', '鹿寨县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022400', '融安县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022500', '融水苗族自治县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45022600', '三江侗族自治县', '45020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030000', '桂林市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030100', '市辖区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030200', '秀峰区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030300', '叠彩区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030400', '象山区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45030500', '七星区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45031100', '雁山区', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032100', '阳朔县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032200', '临桂县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032300', '灵川县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032400', '全州县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032500', '兴安县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032600', '永福县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032700', '灌阳县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032800', '龙胜各族自治县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45032900', '资源县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45033000', '平乐县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45033100', '荔蒲县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45033200', '恭城瑶族自治县', '45030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45040000', '梧州市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45040100', '市辖区', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45040300', '万秀区', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45040400', '蝶山区', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45040500', '长洲区', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45042100', '苍梧县', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45042200', '藤县', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45042300', '蒙山县', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45048100', '岑溪市', '45040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45050000', '北海市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45050100', '市辖区', '45050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45050200', '海城区', '45050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45050300', '银海区', '45050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45051200', '铁山港区', '45050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45052100', '合浦县', '45050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45060000', '防城港市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45060100', '市辖区', '45060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45060200', '港口区', '45060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45060300', '防城区', '45060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45062100', '上思县', '45060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45068100', '东兴市', '45060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45070000', '钦州市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45070100', '市辖区', '45070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45070200', '钦南区', '45070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45070300', '钦北区', '45070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45072100', '灵山县', '45070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45072200', '浦北县', '45070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45080000', '贵港市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45080100', '市辖区', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45080200', '港北区', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45080300', '港南区', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45080400', '覃塘区', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45082100', '平南县', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45088100', '桂平市', '45080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45090000', '玉林市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45090100', '市辖区', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45090200', '玉州区', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45092100', '容县', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45092200', '陆川县', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45092300', '博白县', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45092400', '兴业县', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45098100', '北流市', '45090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45100000', '百色市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45100100', '市辖区', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45100200', '右江区', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102100', '田阳县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102200', '田东县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102300', '平果县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102400', '德保县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102500', '靖西县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102600', '那坡县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102700', '凌云县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102800', '乐业县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45102900', '田林县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45103000', '西林县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45103100', '隆林各族自治县', '45100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45110000', '贺州市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45110100', '市辖区', '45110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45110200', '八步区', '45110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45112100', '昭平县', '45110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45112200', '钟山县', '45110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45112300', '富川瑶族自治县', '45110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45120000', '河池市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45120100', '市辖区', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45120200', '金城江区', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122100', '南丹县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122200', '天峨县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122300', '凤山县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122400', '东兰县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122500', '罗城仫佬族自治县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122600', '环江毛南族自治县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122700', '巴马瑶族自治县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122800', '都安瑶族自治县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45122900', '大化瑶族自治县', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45128100', '宜州市', '45120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45130000', '来宾市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45130100', '市辖区', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45130200', '兴宾区', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45132100', '忻城县', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45132200', '象州县', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45132300', '武宣县', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45132400', '金秀瑶族自治县', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45138100', '合山市', '45130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45140000', '崇左市', '45000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45140100', '市辖区', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45140200', '江洲区', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45142100', '扶绥县', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45142200', '宁明县', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45142300', '龙州县', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45142400', '大新县', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45142500', '天等县', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('45148100', '凭祥市', '45140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46000000', '海南省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010000', '海口市', '46000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010100', '市辖区', '46010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010500', '秀英区', '46010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010600', '龙华区', '46010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010700', '琼山区', '46010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46010800', '美兰区', '46010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46020000', '三亚市', '46000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46020100', '市辖区', '46020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900000', '省直辖县级行政单位', '46000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900100', '五指山市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900200', '琼海市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900300', '儋州市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900500', '文昌市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900600', '万宁市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46900700', '东方市', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902100', '定安县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902200', '屯昌县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902300', '澄迈县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902400', '临高县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902500', '白沙黎族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902600', '昌江黎族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902700', '乐东黎族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902800', '陵水黎族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46902900', '保亭黎族苗族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46903000', '琼中黎族苗族自治县 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46903100', '西沙群岛 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46903200', '南沙群岛 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('46903300', '中沙群岛的岛礁及其海域 ', '46900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50000000', '重庆市', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010000', '市辖区', '50000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010100', '万州区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010200', '涪陵区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010300', '渝中区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010400', '大渡口区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010500', '江北区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010600', '沙坪坝区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010700', '九龙坡区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010800', '南岸区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50010900', '北碚区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011000', '万盛区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011100', '双桥区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011200', '渝北区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011300', '巴南区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011400', '黔江区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011500', '长寿区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011600', '江津区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011700', '合川区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011800', '永川区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50011900', '南川区', '50010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50020000', '县', '50000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022200', '綦江县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022300', '潼南县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022400', '铜梁县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022500', '大足县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022600', '荣昌县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022700', '璧山县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022800', '梁平县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50022900', '城口县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023000', '丰都县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023100', '垫江县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023200', '武隆县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023300', '忠县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023400', '开县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023500', '云阳县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023600', '奉节县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023700', '巫山县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50023800', '巫溪县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50024000', '石柱土家族自治县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50024100', '秀山土家族苗族自治县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50024200', '酉阳土家族苗族自治县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('50024300', '彭水苗族土家族自治县', '50020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51000000', '四川省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010000', '成都市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010100', '市辖区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010400', '锦江区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010500', '青羊区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010600', '金牛区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010700', '武侯区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51010800', '成华区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51011200', '龙泉驿区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51011300', '青白江区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51011400', '新都区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51011500', '温江区', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51012100', '金堂县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51012200', '双流县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51012400', '郫县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51012900', '大邑县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51013100', '蒲江县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51013200', '新津县', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51018100', '都江堰市', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51018200', '彭州市', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51018300', '邛崃市', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51018400', '崇州市', '51010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51030000', '自贡市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51030100', '市辖区', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51030200', '自流井区', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51030300', '贡井区', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51030400', '大安区', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51031100', '沿滩区', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51032100', '荣县', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51032200', '富顺县', '51030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51040000', '攀枝花市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51040100', '市辖区', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51040200', '东区', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51040300', '西区', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51041100', '仁和区', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51042100', '米易县', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51042200', '盐边县', '51040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51050000', '泸州市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51050100', '市辖区', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51050200', '江阳区', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51050300', '纳溪区', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51050400', '龙马潭区', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51052100', '泸县', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51052200', '合江县', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51052400', '叙永县', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51052500', '古蔺县', '51050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51060000', '德阳市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51060100', '市辖区', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51060300', '旌阳区', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51062300', '中江县', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51062600', '罗江县', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51068100', '广汉市', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51068200', '什邡市', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51068300', '绵竹市', '51060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51070000', '绵阳市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51070100', '市辖区', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51070300', '涪城区', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51070400', '游仙区', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072200', '三台县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072300', '盐亭县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072400', '安县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072500', '梓潼县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072600', '北川羌族自治县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51072700', '平武县', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51078100', '江油市', '51070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51080000', '广元市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51080100', '市辖区', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51080200', '市中区', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51081100', '元坝区', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51081200', '朝天区', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51082100', '旺苍县', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51082200', '青川县', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51082300', '剑阁县', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51082400', '苍溪县', '51080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51090000', '遂宁市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51090100', '市辖区', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51090300', '船山区', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51090400', '安居区', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51092100', '蓬溪县', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51092200', '射洪县', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51092300', '大英县', '51090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51100000', '内江市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51100100', '市辖区', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51100200', '市中区', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51101100', '东兴区', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51102400', '威远县', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51102500', '资中县', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51102800', '隆昌县', '51100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51110000', '乐山市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51110100', '市辖区', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51110200', '市中区', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51111100', '沙湾区', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51111200', '五通桥区', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51111300', '金口河区', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51112300', '犍为县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51112400', '井研县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51112600', '夹江县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51112900', '沐川县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51113200', '峨边彝族自治县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51113300', '马边彝族自治县', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51118100', '峨眉山市', '51110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51130000', '南充市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51130100', '市辖区', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51130200', '顺庆区', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51130300', '高坪区', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51130400', '嘉陵区', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51132100', '南部县', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51132200', '营山县', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51132300', '蓬安县', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51132400', '仪陇县', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51132500', '西充县', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51138100', '阆中市', '51130000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51140000', '眉山市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51140100', '市辖区', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51140200', '东坡区', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51142100', '仁寿县', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51142200', '彭山县', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51142300', '洪雅县', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51142400', '丹棱县', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51142500', '青神县', '51140000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51150000', '宜宾市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51150100', '市辖区', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51150200', '翠屏区', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152100', '宜宾县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152200', '南溪县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152300', '江安县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152400', '长宁县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152500', '高县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152600', '珙县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152700', '筠连县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152800', '兴文县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51152900', '屏山县', '51150000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51160000', '广安市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51160100', '市辖区', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51160200', '广安区', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51162100', '岳池县', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51162200', '武胜县', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51162300', '邻水县', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51168100', '华蓥市', '51160000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51170000', '达州市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51170100', '市辖区', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51170200', '通川区', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51172100', '达县', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51172200', '宣汉县', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51172300', '开江县', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51172400', '大竹县', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51172500', '渠县', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51178100', '万源市', '51170000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51180000', '雅安市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51180100', '市辖区', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51180200', '雨城区', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182100', '名山县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182200', '荥经县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182300', '汉源县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182400', '石棉县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182500', '天全县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182600', '芦山县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51182700', '宝兴县', '51180000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51190000', '巴中市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51190100', '市辖区', '51190000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51190200', '巴州区', '51190000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51192100', '通江县', '51190000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51192200', '南江县', '51190000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51192300', '平昌县', '51190000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51200000', '资阳市', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51200100', '市辖区', '51200000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51200200', '雁江区', '51200000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51202100', '安岳县', '51200000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51202200', '乐至县', '51200000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51208100', '简阳市', '51200000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51320000', '阿坝藏族羌族自治州', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322100', '汶川县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322200', '理县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322300', '茂县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322400', '松潘县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322500', '九寨沟县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322600', '金川县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322700', '小金县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322800', '黑水县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51322900', '马尔康县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51323000', '壤塘县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51323100', '阿坝县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51323200', '若尔盖县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51323300', '红原县', '51320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51330000', '甘孜藏族自治州', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332100', '康定县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332200', '泸定县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332300', '丹巴县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332400', '九龙县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332500', '雅江县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332600', '道孚县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332700', '炉霍县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332800', '甘孜县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51332900', '新龙县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333000', '德格县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333100', '白玉县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333200', '石渠县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333300', '色达县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333400', '理塘县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333500', '巴塘县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333600', '乡城县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333700', '稻城县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51333800', '得荣县', '51330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51340000', '凉山彝族自治州', '51000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51340100', '西昌市', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342200', '木里藏族自治县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342300', '盐源县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342400', '德昌县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342500', '会理县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342600', '会东县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342700', '宁南县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342800', '普格县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51342900', '布拖县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343000', '金阳县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343100', '昭觉县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343200', '喜德县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343300', '冕宁县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343400', '越西县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343500', '甘洛县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343600', '美姑县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('51343700', '雷波县', '51340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52000000', '贵州省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52010000', '贵阳市', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52010100', '市辖区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52010200', '南明区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52010300', '云岩区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52011100', '花溪区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52011200', '乌当区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52011300', '白云区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52011400', '小河区', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52012100', '开阳县', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52012200', '息烽县', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52012300', '修文县', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52018100', '清镇市', '52010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52020000', '六盘水市', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52020100', '钟山区', '52020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52020300', '六枝特区', '52020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52022100', '水城县', '52020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52022200', '盘县', '52020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52030000', '遵义市', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52030100', '市辖区', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52030200', '红花岗区', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52030300', '汇川区', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032100', '遵义县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032200', '桐梓县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032300', '绥阳县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032400', '正安县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032500', '道真仡佬族苗族自治县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032600', '务川仡佬族苗族自治县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032700', '凤冈县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032800', '湄潭县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52032900', '余庆县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52033000', '习水县', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52038100', '赤水市', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52038200', '仁怀市', '52030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52040000', '安顺市', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52040100', '市辖区', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52040200', '西秀区', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52042100', '平坝县', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52042200', '普定县', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52042300', '镇宁布依族苗族自治县', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52042400', '关岭布依族苗族自治县', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52042500', '紫云苗族布依族自治县', '52040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52220000', '铜仁地区', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52220100', '铜仁市', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222200', '江口县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222300', '玉屏侗族自治县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222400', '石阡县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222500', '思南县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222600', '印江土家族苗族自治县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222700', '德江县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222800', '沿河土家族自治县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52222900', '松桃苗族自治县', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52223000', '万山特区', '52220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52230000', '黔西南布依族苗族自治州', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52230100', '兴义市', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232200', '兴仁县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232300', '普安县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232400', '晴隆县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232500', '贞丰县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232600', '望谟县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232700', '册亨县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52232800', '安龙县', '52230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52240000', '毕节地区', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52240100', '毕节市', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242200', '大方县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242300', '黔西县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242400', '金沙县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242500', '织金县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242600', '纳雍县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242700', '威宁彝族回族苗族自治县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52242800', '赫章县', '52240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52260000', '黔东南苗族侗族自治州', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52260100', '凯里市', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262200', '黄平县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262300', '施秉县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262400', '三穗县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262500', '镇远县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262600', '岑巩县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262700', '天柱县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262800', '锦屏县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52262900', '剑河县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263000', '台江县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263100', '黎平县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263200', '榕江县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263300', '从江县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263400', '雷山县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263500', '麻江县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52263600', '丹寨县', '52260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52270000', '黔南布依族苗族自治州', '52000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52270100', '都匀市', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52270200', '福泉市', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272200', '荔波县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272300', '贵定县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272500', '瓮安县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272600', '独山县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272700', '平塘县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272800', '罗甸县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52272900', '长顺县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52273000', '龙里县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52273100', '惠水县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('52273200', '三都水族自治县', '52270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53000000', '云南省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53010000', '昆明市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53010100', '市辖区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53010200', '五华区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53010300', '盘龙区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53011100', '官渡区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53011200', '西山区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53011300', '东川区', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012100', '呈贡县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012200', '晋宁县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012400', '富民县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012500', '宜良县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012600', '石林彝族自治县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012700', '嵩明县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012800', '禄劝彝族苗族自治县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53012900', '寻甸回族彝族自治县', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53018100', '安宁市', '53010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53030000', '曲靖市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53030100', '市辖区', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53030200', '麒麟区', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032100', '马龙县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032200', '陆良县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032300', '师宗县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032400', '罗平县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032500', '富源县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032600', '会泽县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53032800', '沾益县', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53038100', '宣威市', '53030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53040000', '玉溪市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53040100', '市辖区', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53040200', '红塔区', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042100', '江川县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042200', '澄江县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042300', '通海县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042400', '华宁县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042500', '易门县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042600', '峨山彝族自治县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042700', '新平彝族傣族自治县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53042800', '元江哈尼族彝族傣族自治县', '53040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53050000', '保山市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53050100', '市辖区', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53050200', '隆阳区', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53052100', '施甸县', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53052200', '腾冲县', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53052300', '龙陵县', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53052400', '昌宁县', '53050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53060000', '昭通市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53060100', '市辖区', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53060200', '昭阳区', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062100', '鲁甸县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062200', '巧家县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062300', '盐津县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062400', '大关县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062500', '永善县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062600', '绥江县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062700', '镇雄县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062800', '彝良县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53062900', '威信县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53063000', '水富县', '53060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53070000', '丽江市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53070100', '市辖区', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53070200', '古城区', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53072100', '玉龙纳西族自治县', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53072200', '永胜县', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53072300', '华坪县', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53072400', '宁蒗彝族自治县', '53070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53080000', '普洱市(*)', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53080100', '市辖区', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53080200', '思茅区(*)', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082100', '宁洱哈尼族彝族自治县(*)', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082200', '墨江哈尼族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082300', '景东彝族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082400', '景谷傣族彝族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082500', '镇沅彝族哈尼族拉祜族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082600', '江城哈尼族彝族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082700', '孟连傣族拉祜族佤族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082800', '澜沧拉祜族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53082900', '西盟佤族自治县', '53080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53090000', '临沧市', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53090100', '市辖区', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53090200', '临翔区', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092100', '凤庆县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092200', '云县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092300', '永德县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092400', '镇康县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092500', '双江拉祜族佤族布朗族傣族自治县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092600', '耿马傣族佤族自治县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53092700', '沧源佤族自治县', '53090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53230000', '楚雄彝族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53230100', '楚雄市', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232200', '双柏县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232300', '牟定县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232400', '南华县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232500', '姚安县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232600', '大姚县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232700', '永仁县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232800', '元谋县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53232900', '武定县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53233100', '禄丰县', '53230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53250000', '红河哈尼族彝族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53250100', '个旧市', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53250200', '开远市', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252200', '蒙自县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252300', '屏边苗族自治县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252400', '建水县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252500', '石屏县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252600', '弥勒县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252700', '泸西县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252800', '元阳县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53252900', '红河县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53253000', '金平苗族瑶族傣族自治县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53253100', '绿春县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53253200', '河口瑶族自治县', '53250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53260000', '文山壮族苗族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262100', '文山县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262200', '砚山县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262300', '西畴县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262400', '麻栗坡县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262500', '马关县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262600', '丘北县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262700', '广南县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53262800', '富宁县', '53260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53280000', '西双版纳傣族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53280100', '景洪市', '53280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53282200', '勐海县', '53280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53282300', '勐腊县', '53280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53290000', '大理白族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53290100', '大理市', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292200', '漾濞彝族自治县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292300', '祥云县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292400', '宾川县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292500', '弥渡县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292600', '南涧彝族自治县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292700', '巍山彝族回族自治县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292800', '永平县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53292900', '云龙县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53293000', '洱源县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53293100', '剑川县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53293200', '鹤庆县', '53290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53310000', '德宏傣族景颇族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53310200', '瑞丽市', '53310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53310300', '潞西市', '53310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53312200', '梁河县', '53310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53312300', '盈江县', '53310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53312400', '陇川县', '53310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53330000', '怒江傈僳族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53332100', '泸水县', '53330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53332300', '福贡县', '53330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53332400', '贡山独龙族怒族自治县', '53330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53332500', '兰坪白族普米族自治县', '53330000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53340000', '迪庆藏族自治州', '53000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53342100', '香格里拉县', '53340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53342200', '德钦县', '53340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('53342300', '维西傈僳族自治县', '53340000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54000000', '西藏自治区', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54010000', '拉萨市', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54010100', '市辖区', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54010200', '城关区', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012100', '林周县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012200', '当雄县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012300', '尼木县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012400', '曲水县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012500', '堆龙德庆县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012600', '达孜县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54012700', '墨竹工卡县', '54010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54210000', '昌都地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212100', '昌都县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212200', '江达县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212300', '贡觉县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212400', '类乌齐县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212500', '丁青县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212600', '察雅县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212700', '八宿县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212800', '左贡县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54212900', '芒康县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54213200', '洛隆县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54213300', '边坝县', '54210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54220000', '山南地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222100', '乃东县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222200', '扎囊县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222300', '贡嘎县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222400', '桑日县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222500', '琼结县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222600', '曲松县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222700', '措美县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222800', '洛扎县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54222900', '加查县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54223100', '隆子县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54223200', '错那县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54223300', '浪卡子县', '54220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54230000', '日喀则地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54230100', '日喀则市', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232200', '南木林县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232300', '江孜县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232400', '定日县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232500', '萨迦县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232600', '拉孜县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232700', '昂仁县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232800', '谢通门县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54232900', '白朗县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233000', '仁布县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233100', '康马县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233200', '定结县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233300', '仲巴县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233400', '亚东县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233500', '吉隆县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233600', '聂拉木县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233700', '萨嘎县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54233800', '岗巴县', '54230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54240000', '那曲地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242100', '那曲县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242200', '嘉黎县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242300', '比如县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242400', '聂荣县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242500', '安多县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242600', '申扎县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242700', '索县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242800', '班戈县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54242900', '巴青县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54243000', '尼玛县', '54240000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54250000', '阿里地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252100', '普兰县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252200', '札达县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252300', '噶尔县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252400', '日土县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252500', '革吉县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252600', '改则县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54252700', '措勤县', '54250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54260000', '林芝地区', '54000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262100', '林芝县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262200', '工布江达县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262300', '米林县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262400', '墨脱县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262500', '波密县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262600', '察隅县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('54262700', '朗县', '54260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61000000', '陕西省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61010000', '西安市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61010100', '市辖区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61010200', '新城区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61010300', '碑林区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61010400', '莲湖区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011100', '灞桥区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011200', '未央区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011300', '雁塔区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011400', '阎良区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011500', '临潼区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61011600', '长安区', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61012200', '蓝田县', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61012400', '周至县', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61012500', '户县', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61012600', '高陵县', '61010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61020000', '铜川市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61020100', '市辖区', '61020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61020200', '王益区', '61020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61020300', '印台区', '61020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61020400', '耀州区', '61020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61022200', '宜君县', '61020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61030000', '宝鸡市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61030100', '市辖区', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61030200', '渭滨区', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61030300', '金台区', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61030400', '陈仓区', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032200', '凤翔县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032300', '岐山县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032400', '扶风县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032600', '眉县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032700', '陇县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032800', '千阳县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61032900', '麟游县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61033000', '凤县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61033100', '太白县', '61030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61040000', '咸阳市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61040100', '市辖区', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61040200', '秦都区', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61040300', '杨凌区', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61040400', '渭城区', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042200', '三原县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042300', '泾阳县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042400', '乾县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042500', '礼泉县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042600', '永寿县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042700', '彬县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042800', '长武县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61042900', '旬邑县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61043000', '淳化县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61043100', '武功县', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61048100', '兴平市', '61040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61050000', '渭南市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61050100', '市辖区', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61050200', '临渭区', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052100', '华县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052200', '潼关县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052300', '大荔县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052400', '合阳县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052500', '澄城县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052600', '蒲城县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052700', '白水县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61052800', '富平县', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61058100', '韩城市', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61058200', '华阴市', '61050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61060000', '延安市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61060100', '市辖区', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61060200', '宝塔区', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062100', '延长县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062200', '延川县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062300', '子长县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062400', '安塞县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062500', '志丹县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062600', '吴起县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062700', '甘泉县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062800', '富县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61062900', '洛川县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61063000', '宜川县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61063100', '黄龙县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61063200', '黄陵县', '61060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61070000', '汉中市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61070100', '市辖区', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61070200', '汉台区', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072100', '南郑县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072200', '城固县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072300', '洋县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072400', '西乡县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072500', '勉县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072600', '宁强县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072700', '略阳县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072800', '镇巴县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61072900', '留坝县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61073000', '佛坪县', '61070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61080000', '榆林市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61080100', '市辖区', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61080200', '榆阳区', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082100', '神木县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082200', '府谷县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082300', '横山县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082400', '靖边县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082500', '定边县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082600', '绥德县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082700', '米脂县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082800', '佳县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61082900', '吴堡县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61083000', '清涧县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61083100', '子洲县', '61080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61090000', '安康市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61090100', '市辖区', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61090200', '汉滨区', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092100', '汉阴县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092200', '石泉县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092300', '宁陕县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092400', '紫阳县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092500', '岚皋县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092600', '平利县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092700', '镇坪县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092800', '旬阳县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61092900', '白河县', '61090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61100000', '商洛市', '61000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61100100', '市辖区', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61100200', '商州区', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102100', '洛南县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102200', '丹凤县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102300', '商南县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102400', '山阳县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102500', '镇安县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('61102600', '柞水县', '61100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62000000', '甘肃省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010000', '兰州市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010100', '市辖区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010200', '城关区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010300', '七里河区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010400', '西固区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62010500', '安宁区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62011100', '红古区', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62012100', '永登县', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62012200', '皋兰县', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62012300', '榆中县', '62010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62020000', '嘉峪关市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62020100', '市辖区', '62020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62030000', '金昌市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62030100', '市辖区', '62030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62030200', '金川区', '62030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62032100', '永昌县', '62030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62040000', '白银市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62040100', '市辖区', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62040200', '白银区', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62040300', '平川区', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62042100', '靖远县', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62042200', '会宁县', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62042300', '景泰县', '62040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62050000', '天水市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62050100', '市辖区', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62050200', '秦州区 ', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62050300', '麦积区 ', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62052100', '清水县', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62052200', '秦安县', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62052300', '甘谷县', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62052400', '武山县', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62052500', '张家川回族自治县', '62050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62060000', '武威市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62060100', '市辖区', '62060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62060200', '凉州区', '62060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62062100', '民勤县', '62060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62062200', '古浪县', '62060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62062300', '天祝藏族自治县', '62060000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62070000', '张掖市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62070100', '市辖区', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62070200', '甘州区', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62072100', '肃南裕固族自治县', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62072200', '民乐县', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62072300', '临泽县', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62072400', '高台县', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62072500', '山丹县', '62070000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62080000', '平凉市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62080100', '市辖区', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62080200', '崆峒区', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082100', '泾川县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082200', '灵台县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082300', '崇信县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082400', '华亭县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082500', '庄浪县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62082600', '静宁县', '62080000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62090000', '酒泉市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62090100', '市辖区', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62090200', '肃州区', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62092100', '金塔县', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62092200', '瓜州县', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62092300', '肃北蒙古族自治县', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62092400', '阿克塞哈萨克族自治县', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62098100', '玉门市', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62098200', '敦煌市', '62090000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62100000', '庆阳市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62100100', '市辖区', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62100200', '西峰区', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102100', '庆城县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102200', '环县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102300', '华池县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102400', '合水县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102500', '正宁县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102600', '宁县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62102700', '镇原县', '62100000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62110000', '定西市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62110100', '市辖区', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62110200', '安定区', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112100', '通渭县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112200', '陇西县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112300', '渭源县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112400', '临洮县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112500', '漳县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62112600', '岷县', '62110000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62120000', '陇南市', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62120100', '市辖区', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62120200', '武都区', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122100', '成县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122200', '文县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122300', '宕昌县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122400', '康县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122500', '西和县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122600', '礼县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122700', '徽县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62122800', '两当县', '62120000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62290000', '临夏回族自治州', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62290100', '临夏市', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292100', '临夏县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292200', '康乐县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292300', '永靖县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292400', '广河县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292500', '和政县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292600', '东乡族自治县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62292700', '积石山保安族东乡族撒拉族自治县', '62290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62300000', '甘南藏族自治州', '62000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62300100', '合作市', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302100', '临潭县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302200', '卓尼县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302300', '舟曲县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302400', '迭部县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302500', '玛曲县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302600', '碌曲县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('62302700', '夏河县', '62300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63000000', '青海省', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010000', '西宁市', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010100', '市辖区', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010200', '城东区', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010300', '城中区', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010400', '城西区', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63010500', '城北区', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63012100', '大通回族土族自治县', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63012200', '湟中县', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63012300', '湟源县', '63010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63210000', '海东地区', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212100', '平安县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212200', '民和回族土族自治县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212300', '乐都县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212600', '互助土族自治县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212700', '化隆回族自治县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63212800', '循化撒拉族自治县', '63210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63220000', '海北藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63222100', '门源回族自治县', '63220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63222200', '祁连县', '63220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63222300', '海晏县', '63220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63222400', '刚察县', '63220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63230000', '黄南藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63232100', '同仁县', '63230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63232200', '尖扎县', '63230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63232300', '泽库县', '63230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63232400', '河南蒙古族自治县', '63230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63250000', '海南藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63252100', '共和县', '63250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63252200', '同德县', '63250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63252300', '贵德县', '63250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63252400', '兴海县', '63250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63252500', '贵南县', '63250000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63260000', '果洛藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262100', '玛沁县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262200', '班玛县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262300', '甘德县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262400', '达日县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262500', '久治县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63262600', '玛多县', '63260000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63270000', '玉树藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272100', '玉树县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272200', '杂多县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272300', '称多县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272400', '治多县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272500', '囊谦县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63272600', '曲麻莱县', '63270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63280000', '海西蒙古族藏族自治州', '63000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63280100', '格尔木市', '63280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63280200', '德令哈市', '63280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63282100', '乌兰县', '63280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63282200', '都兰县', '63280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('63282300', '天峻县', '63280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64000000', '宁夏回族自治区', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64010000', '银川市', '64000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64010100', '市辖区', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64010400', '兴庆区', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64010500', '西夏区', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64010600', '金凤区', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64012100', '永宁县', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64012200', '贺兰县', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64018100', '灵武市', '64010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64020000', '石嘴山市', '64000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64020100', '市辖区', '64020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64020200', '大武口区', '64020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64020500', '惠农区', '64020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64022100', '平罗县', '64020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64030000', '吴忠市', '64000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64030100', '市辖区', '64030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64030200', '利通区', '64030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64032300', '盐池县', '64030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64032400', '同心县', '64030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64038100', '青铜峡市', '64030000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64040000', '固原市', '64000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64040100', '市辖区', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64040200', '原州区', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64042200', '西吉县', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64042300', '隆德县', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64042400', '泾源县', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64042500', '彭阳县', '64040000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64050000', '中卫市', '64000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64050100', '市辖区', '64050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64050200', '沙坡头区', '64050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64052100', '中宁县', '64050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('64052200', '海原县', '64050000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65000000', '新疆维吾尔自治区', '1', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010000', '乌鲁木齐市', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010100', '市辖区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010200', '天山区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010300', '沙依巴克区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010400', '新市区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010500', '水磨沟区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010600', '头屯河区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010700', '达坂城区', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65010900', '米东区(*)', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65012100', '乌鲁木齐县', '65010000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020000', '克拉玛依市', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020100', '市辖区', '65020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020200', '独山子区', '65020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020300', '克拉玛依区', '65020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020400', '白碱滩区', '65020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65020500', '乌尔禾区', '65020000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65210000', '吐鲁番地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65210100', '吐鲁番市', '65210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65212200', '鄯善县', '65210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65212300', '托克逊县', '65210000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65220000', '哈密地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65220100', '哈密市', '65220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65222200', '巴里坤哈萨克自治县', '65220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65222300', '伊吾县', '65220000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65230000', '昌吉回族自治州', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65230100', '昌吉市', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65230200', '阜康市', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65232300', '呼图壁县', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65232400', '玛纳斯县', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65232500', '奇台县', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65232700', '吉木萨尔县', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65232800', '木垒哈萨克自治县', '65230000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65270000', '博尔塔拉蒙古自治州', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65270100', '博乐市', '65270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65272200', '精河县', '65270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65272300', '温泉县', '65270000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65280000', '巴音郭楞蒙古自治州', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65280100', '库尔勒市', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282200', '轮台县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282300', '尉犁县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282400', '若羌县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282500', '且末县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282600', '焉耆回族自治县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282700', '和静县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282800', '和硕县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65282900', '博湖县', '65280000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65290000', '阿克苏地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65290100', '阿克苏市', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292200', '温宿县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292300', '库车县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292400', '沙雅县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292500', '新和县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292600', '拜城县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292700', '乌什县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292800', '阿瓦提县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65292900', '柯坪县', '65290000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65300000', '克孜勒苏柯尔克孜自治州', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65300100', '阿图什市', '65300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65302200', '阿克陶县', '65300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65302300', '阿合奇县', '65300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65302400', '乌恰县', '65300000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65310000', '喀什地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65310100', '喀什市', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312100', '疏附县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312200', '疏勒县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312300', '英吉沙县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312400', '泽普县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312500', '莎车县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312600', '叶城县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312700', '麦盖提县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312800', '岳普湖县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65312900', '伽师县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65313000', '巴楚县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65313100', '塔什库尔干塔吉克自治县', '65310000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65320000', '和田地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65320100', '和田市', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322100', '和田县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322200', '墨玉县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322300', '皮山县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322400', '洛浦县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322500', '策勒县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322600', '于田县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65322700', '民丰县', '65320000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65400000', '伊犁哈萨克自治州', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65400200', '伊宁市', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65400300', '奎屯市', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402100', '伊宁县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402200', '察布查尔锡伯自治县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402300', '霍城县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402400', '巩留县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402500', '新源县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402600', '昭苏县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402700', '特克斯县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65402800', '尼勒克县', '65400000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65420000', '塔城地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65420100', '塔城市', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65420200', '乌苏市', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65422100', '额敏县', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65422300', '沙湾县', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65422400', '托里县', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65422500', '裕民县', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65422600', '和布克赛尔蒙古自治县', '65420000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65430000', '阿勒泰地区', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65430100', '阿勒泰市', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432100', '布尔津县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432200', '富蕴县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432300', '福海县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432400', '哈巴河县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432500', '青河县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65432600', '吉木乃县', '65430000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65900000', '自治区直辖县级行政单位 ', '65000000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65900100', '石河子市', '65900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65900200', '阿拉尔市', '65900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65900300', '图木舒克市', '65900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('65900400', '五家渠市', '65900000', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('71000000', '台湾省', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('81000000', '香港特别行政区', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('82000000', '澳门特别行政区', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('83000000', '韩国', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('84000000', '新加坡', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('85000000', '美国', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('86000000', '加拿大', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('87000000', '澳大利亚', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('88000000', '英国', '0', '0');
INSERT INTO `engrave_area` ( `Id`, `Name`, `ParentId`, `IsDeleteArea` ) VALUES  ('89000000', '日本', '0', '0');
DROP TABLE IF EXISTS `engrave_article`;
CREATE TABLE `engrave_article` (
  `CntId` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `CntCategoryId` int(11) DEFAULT '0' COMMENT '类别ID',
  `CntTitle` varchar(200) DEFAULT '' COMMENT '标题',
  `CntSubhead` varchar(200) DEFAULT '',
  `CntAttributes` tinyint(4) DEFAULT NULL,
  `CntTitleImage` varchar(500) DEFAULT NULL,
  `CntMetaKey` varchar(200) DEFAULT NULL,
  `CntMetaDes` varchar(200) DEFAULT NULL,
  `CntExtLink` varchar(200) DEFAULT NULL,
  `CntContent` longtext,
  `CntBriefIntroduction` varchar(200) DEFAULT NULL,
  `CntTag` varchar(200) DEFAULT NULL,
  `CntAuthor` varchar(200) DEFAULT NULL,
  `CntAuthorEmail` varchar(200) DEFAULT NULL,
  `CntSourceWeb` varchar(200) DEFAULT NULL,
  `CntSourceUrl` varchar(200) DEFAULT NULL,
  `CntReadPoints` int(11) DEFAULT NULL,
  `CntTime` datetime DEFAULT NULL,
  `CntAuditingStatus` tinyint(4) DEFAULT NULL,
  `CntOperatorId` int(11) DEFAULT NULL,
  `CntOperatorName` varchar(200) DEFAULT NULL,
  `CntIsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`CntId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('1', '9', '公司新闻测试', '公司新闻测试', '0', '/code/engrave/admin/engraveuploads/image/20141218/20141218100259_84006.jpg', '', '', '', '', '', '2014-12-18 10:02:32', '', '', '', '', '0', '2014-12-18 10:02:32', '2', '0', '', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('2', '3', '123', '', '0', '/code/engrave/admin/engraveuploads/image/20150115/20150115082332_47696.png', '123', '', '', '', '', '2015-01-15 08:23:32', '', '', '', '', '0', '2015-01-15 08:23:32', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('3', '3', '123', '', '0', '', '', '', '', '', '', '2015-01-15 08:24:07', '', '', '', '', '0', '2015-01-15 08:24:07', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('4', '3', '123', '', '0', '', '', '', '', '', '', '2015-01-15 08:24:33', '', '', '', '', '0', '2015-01-15 08:24:33', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('5', '3', '123', '', '0', '', '', '', '', '', '', '2015-01-15 08:24:56', '', '', '', '', '0', '2015-01-15 08:24:56', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('6', '3', '123', '', '0', '', '', '', '', '', '', '2015-01-15 08:25:18', '', '', '', '', '0', '2015-01-15 08:25:18', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('7', '3', '123', '', '0', '', '', '', '', '', '', '2015-01-15 08:25:37', '', '', '', '', '0', '2015-01-15 08:25:37', '2', '1', 'admin', '1');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('8', '9', '公司新闻测试', '公司新闻测试', '0', '/code/engrave/admin/engraveuploads/image/20150302/20150302065948_47235.png', '公司新闻测试', '公司新闻测试', '', '<span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span><span>公司新闻测试</span>', '', '2015-02-17', '', '', '', '', '0', '2015-02-17 00:00:00', '2', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('9', '10', '重要通知1', '重要通知1', '0', '/code/engrave/admin/engraveuploads/image/20150302/20150302070106_76618.png', '重要通知1', '重要通知1', '', '重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1重要通知1', '重要通知1', '2015-02-17', '重要通知1', '重要通知1', '重要通知1', '重要通知1', '0', '2015-02-17 00:00:00', '1', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('10', '5', '关于我们1', '关于我们1', '0', '/code/engrave/admin/engraveuploads/image/20150302/20150302070024_75297.png', '关于我们1', '关于我们1', '关于我们1', '关于我们1', '关于我们1', '2015-02-17', '关于我们1', '关于我们1', '关于我们1', '关于我们1', '0', '2015-02-17 00:00:00', '2', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('11', '9', '事实说：中国是否需要继续韬光养晦？', '事实说：中国是否需要继续韬光养晦？', '0', '', 'asdf', 'asf', 'asfd', '<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://news.qq.com/zt2015/fact/12.htm\">事实说：中国是否需要继续韬光养晦？</a>\r\n</h2>', '', '2015-03-11', '', '', '', '', '0', '2015-03-11 00:00:00', '2', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('12', '9', '内地官员遭警告：出入澳门赌场必定会被发现', '内地官员遭警告：出入澳门赌场必定会被发现', '0', '', '', '', '', '<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://news.qq.com/a/20150311/045038.htm\">内地官员遭警告：出入澳门赌场必定会被发现</a>\r\n</h2>\r\n<p style=\"font-family:宋体, \'Arial Narrow\', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/a/20150304/012417.htm\">港媒：澳门赌场收入大跌 内地游客只拍照不上桌</a><br />\r\n<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/a/20150307/030165.htm\">澳门多家赌场开源节流 有业者给员工放无薪假</a>\r\n</p>\r\n<div class=\"btns\" style=\"font-family:宋体, \'Arial Narrow\', HELVETICA;background-color:#FFFFFF;\">\r\n</div>', '', '2015-03-11', '', '', '', '', '0', '2015-03-11 00:00:00', '2', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('13', '10', '一分钟说两会：鼓掌政治学，你懂吗？', '一分钟说两会：鼓掌政治学，你懂吗？', '0', '', '', '', '', '<h2 class=\"icon_dj\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://v.qq.com/page/s/b/0/s0016t84vb0.html\">一分钟说两会：鼓掌政治学，你懂吗？</a>\r\n</h2>\r\n<p style=\"font-family:宋体, \'Arial Narrow\', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"icon_video\" href=\"http://news.qq.com/zt2015/lhlbs/no4.htm\">南方妹子VS北方大妞 你爱谁？</a><br />\r\n<a target=\"_blank\" class=\"icon_video\" href=\"http://news.qq.com/zt2015/minute/no5.htm\">饶过“弱势群体”这个词吧</a>\r\n</p>', '', '2015-03-11', '', '', '', '', '0', '2015-03-11 00:00:00', '2', '1', 'admin', '0');
INSERT INTO `engrave_article` ( `CntId`, `CntCategoryId`, `CntTitle`, `CntSubhead`, `CntAttributes`, `CntTitleImage`, `CntMetaKey`, `CntMetaDes`, `CntExtLink`, `CntContent`, `CntBriefIntroduction`, `CntTag`, `CntAuthor`, `CntAuthorEmail`, `CntSourceWeb`, `CntSourceUrl`, `CntReadPoints`, `CntTime`, `CntAuditingStatus`, `CntOperatorId`, `CntOperatorName`, `CntIsDelete` ) VALUES  ('14', '10', '主政者说：襄阳年产粮食 够全国人民吃一周', '主政者说：襄阳年产粮食 够全国人民吃一周', '0', '', '123', '123', '主政者说：襄阳年产粮食 够全国人民吃一周', '<h2 class=\"\" style=\"font-weight:normal;font-size:22px;font-family:微软雅黑;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"linkto\" href=\"http://news.qq.com/zt2015/TheMayor/NO6.htm\">主政者说：襄阳年产粮食 够全国人民吃一周</a> \r\n</h2>\r\n<p style=\"font-family:宋体, \'Arial Narrow\', HELVETICA;background-color:#FFFFFF;\">\r\n	<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/zt2015/TheMayor/NO5.htm\">杭州小伙辞职卖房到桐乡 投身时尚创意</a><br />\r\n<a target=\"_blank\" class=\"\" href=\"http://news.qq.com/zt2015/TheMayor/NO4.htm\">市长为果农吆喝卖苹果 称愧对贫困百姓</a> \r\n</p>', '', '2015-03-11', '', '', '', '', '0', '2015-03-11 00:00:00', '2', '1', 'admin', '0');
DROP TABLE IF EXISTS `engrave_channel`;
CREATE TABLE `engrave_channel` (
  `categoryid` smallint(6) NOT NULL AUTO_INCREMENT,
  `Module` varchar(30) DEFAULT NULL,
  `abbreviation` varchar(20) DEFAULT NULL,
  `typename` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `NewWin` tinyint(4) DEFAULT NULL,
  `typesummary` longtext,
  `outsidelink` varchar(50) DEFAULT NULL,
  `ParentDir` longtext,
  `linktip` varchar(30) DEFAULT NULL,
  `columnshowposition` smallint(6) DEFAULT NULL,
  `conentmodel` smallint(6) DEFAULT NULL,
  `GoodsType` smallint(6) DEFAULT NULL,
  `classifytype` smallint(6) DEFAULT NULL,
  `parentid` smallint(6) DEFAULT NULL,
  `rewritecatalogue` varchar(255) DEFAULT NULL,
  `SubCount` smallint(6) DEFAULT NULL,
  `Percents` smallint(6) DEFAULT NULL,
  `Children` varchar(50) DEFAULT NULL,
  `channellogo` varchar(100) DEFAULT NULL,
  `PicList` longtext,
  `allowpost` tinyint(4) DEFAULT NULL,
  `pagingsize` smallint(6) DEFAULT NULL,
  `metakey` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `DisplayInTop` tinyint(4) DEFAULT NULL,
  `DisplayInSide` tinyint(4) DEFAULT NULL,
  `DisplayInBottom` tinyint(4) DEFAULT NULL,
  `DisplayInParent` tinyint(4) DEFAULT NULL,
  `DisplayInRelate` tinyint(4) DEFAULT NULL,
  `DiscplayInNav` tinyint(4) DEFAULT NULL,
  `contentlink` tinyint(4) DEFAULT NULL,
  `RelateType` smallint(6) DEFAULT NULL,
  `RelationIds` varchar(50) DEFAULT NULL,
  `Domain` varchar(50) DEFAULT NULL,
  `MultiSite` tinyint(4) DEFAULT NULL,
  `ChannelTemplate` varchar(50) DEFAULT NULL,
  `ListTemplate` varchar(50) DEFAULT NULL,
  `CntTemplate` varchar(50) DEFAULT NULL,
  `ArticleRegular` varchar(50) DEFAULT NULL,
  `ListRegular` varchar(50) DEFAULT NULL,
  `liststyle` smallint(6) DEFAULT NULL,
  `leftadvert` longtext,
  `topadvert` longtext,
  `bottomadvert` longtext,
  `beforelistadvert` longtext,
  `afterlistadvert` longtext,
  `beforewritten` longtext,
  `contentbottomadvert` longtext,
  `leftcontentadvert` longtext,
  `beforecontentadvert` longtext,
  `aftercontentadvert` longtext,
  `innerwritten` longtext,
  `cutformcontent` longtext,
  `Depth` smallint(6) DEFAULT NULL,
  `PostCredits` longtext,
  `ReplyCredits` longtext,
  `ViewPerm` longtext,
  `PostPerm` longtext,
  `ReplyPerm` longtext,
  `NeedCheckPerm` longtext,
  `EditPerm` longtext,
  `AutoNeedCheckPerm` longtext,
  `ReplyNeedCheck` longtext,
  `Disabled` tinyint(4) DEFAULT NULL,
  `sortid` int(11) DEFAULT NULL,
  `LastIs` tinyint(4) DEFAULT NULL,
  `IsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`categoryid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('1', '', '收费说明', '收费说明', '', '', '', '', '最新咨', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '收费说明', '收费说明', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '<p>\r\n	<br />\r\n</p>', '', '', '', '', '', '', '', '', '', '', '', '3', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('2', '', '费用估算', '费用估算', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '费用估算', '费用估算', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('3', '', '首页', '首页', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '首页', '首页', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('4', '', '新闻中心', '新闻中心', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '新闻中心', '新闻中心', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('5', '', '关于我们', '关于我们', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '关于我们', '关于我们', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '<table width=\"90%\" id=\"tab_channel_cutform-table\" style=\"color:#192E32;font-family:sans-serif, Arial, Verdana;font-size:12px;background-color:#FFFFFF;\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"font-family:sans-serif, Arial, Verdana;\">\r\n				说明：栏目内容是替代原来栏目单独页的更灵活的一种方式，可在栏目模板中用{engrave:field.content/}调用，通常用于企业简介之类的用途。\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '', '', '', '', '', '', '', '', '', '', '', '5', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('6', '', '禁运列表', '禁运列表', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '禁运列表', '禁运列表', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('7', '', '转运流程', '转运流程', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', '转运流程', '转运流程', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('8', '', 'FAQ2', 'FAQ2', '', '', '', '', '', '', '0', '0', '', '0', '0', '', '', '', '', '', '', '0', '0', 'FAQ2', 'FAQ2', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('9', '', '公司新闻', '公司新闻', '', '', '', '', '', '', '0', '0', '', '0', '4', '', '', '', '', '/code/engrave/admin/engraveuploads/image/20150311/20150311062852_23477.png', '', '0', '0', '公司新闻', '公司新闻', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('10', '', '重要通知', '重要通知', '', '', '', '', '', '', '0', '0', '', '0', '4', '', '', '', '', '/code/engrave/admin/engraveuploads/image/20150311/20150311062908_93811.png', '', '0', '0', '重要通知', '重要通知', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '', '0');
INSERT INTO `engrave_channel` ( `categoryid`, `Module`, `abbreviation`, `typename`, `Title`, `NewWin`, `typesummary`, `outsidelink`, `ParentDir`, `linktip`, `columnshowposition`, `conentmodel`, `GoodsType`, `classifytype`, `parentid`, `rewritecatalogue`, `SubCount`, `Percents`, `Children`, `channellogo`, `PicList`, `allowpost`, `pagingsize`, `metakey`, `metadescription`, `DisplayInTop`, `DisplayInSide`, `DisplayInBottom`, `DisplayInParent`, `DisplayInRelate`, `DiscplayInNav`, `contentlink`, `RelateType`, `RelationIds`, `Domain`, `MultiSite`, `ChannelTemplate`, `ListTemplate`, `CntTemplate`, `ArticleRegular`, `ListRegular`, `liststyle`, `leftadvert`, `topadvert`, `bottomadvert`, `beforelistadvert`, `afterlistadvert`, `beforewritten`, `contentbottomadvert`, `leftcontentadvert`, `beforecontentadvert`, `aftercontentadvert`, `innerwritten`, `cutformcontent`, `Depth`, `PostCredits`, `ReplyCredits`, `ViewPerm`, `PostPerm`, `ReplyPerm`, `NeedCheckPerm`, `EditPerm`, `AutoNeedCheckPerm`, `ReplyNeedCheck`, `Disabled`, `sortid`, `LastIs`, `IsDelete` ) VALUES  ('11', '', '铭东', '铭东', '', '', '铭东', '', '', '铭东', '0', '0', '', '0', '5', '铭东', '', '', '', '', '', '0', '0', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '', '', '铭东', '', '', '', '', '', '', '', '', '', '', '', '0', '', '0');
DROP TABLE IF EXISTS `engrave_collogistics`;
CREATE TABLE `engrave_collogistics` (
  `LogisticsId` int(11) NOT NULL AUTO_INCREMENT,
  `LogisticsName` varchar(50) NOT NULL,
  `CollCode` varchar(50) NOT NULL,
  `LogisticsDesc` longtext NOT NULL,
  `ActionLink` varchar(50) NOT NULL,
  `Submission` tinyint(4) NOT NULL,
  `SubParameter` varchar(255) NOT NULL,
  `CodingMethod` tinyint(4) NOT NULL,
  `Orgion` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Number` int(11) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `ArrivalDate` int(10) NOT NULL,
  `Signatory` varchar(10) NOT NULL,
  `StatusList` varchar(255) NOT NULL,
  `IsDeleteLogistics` tinyint(4) NOT NULL,
  PRIMARY KEY (`LogisticsId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_collogistics` ( `LogisticsId`, `LogisticsName`, `CollCode`, `LogisticsDesc`, `ActionLink`, `Submission`, `SubParameter`, `CodingMethod`, `Orgion`, `Destination`, `Number`, `Status`, `ArrivalDate`, `Signatory`, `StatusList`, `IsDeleteLogistics` ) VALUES  ('1', '顺丰快', 'SF', '目前国内最大物', 'http://www.sf.com', '0', 'ssa', '0', '北京', '安徽', '12', '封装完好', '0', 'suntao', '10010', '1');
INSERT INTO `engrave_collogistics` ( `LogisticsId`, `LogisticsName`, `CollCode`, `LogisticsDesc`, `ActionLink`, `Submission`, `SubParameter`, `CodingMethod`, `Orgion`, `Destination`, `Number`, `Status`, `ArrivalDate`, `Signatory`, `StatusList`, `IsDeleteLogistics` ) VALUES  ('2', '韵达速', 'YD', '韵达', 'http://www.baidu.com', '0', 'sss', '0', '北京', '福建', '1', '完好', '1419951600', 'YQC', '1001', '0');
INSERT INTO `engrave_collogistics` ( `LogisticsId`, `LogisticsName`, `CollCode`, `LogisticsDesc`, `ActionLink`, `Submission`, `SubParameter`, `CodingMethod`, `Orgion`, `Destination`, `Number`, `Status`, `ArrivalDate`, `Signatory`, `StatusList`, `IsDeleteLogistics` ) VALUES  ('3', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1426777200', '1', '1', '0');
DROP TABLE IF EXISTS `engrave_complaint`;
CREATE TABLE `engrave_complaint` (
  `cmp_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '有问必答ID',
  `cmp_title` varchar(200) DEFAULT NULL COMMENT '标题',
  `cmp_expressnumber` varchar(100) DEFAULT NULL COMMENT '相关转运单号（包裹单号）',
  `cmp_orderno` varchar(100) DEFAULT NULL COMMENT '订单单号',
  `cmp_deliverynumber` varchar(100) DEFAULT NULL COMMENT '发货单号',
  `cmp_remark` varchar(500) DEFAULT NULL COMMENT '问题描述',
  `cmp_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `cmp_parentid` int(12) DEFAULT NULL COMMENT '父ID',
  `cmp_time` int(12) DEFAULT NULL COMMENT '时间',
  `cmp_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`cmp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('1', '1', '123', '123', '123', '1234', '52', '0', '1422788205', '1');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('2', 'ts12', '122', '22', '32', '42', '53', '0', '1422791777', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('3', 'asfasf1', '121', '121', '121', '121', '52', '0', '1422791877', '1');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('4', '1', '123', '123', '123', 'sdfafasfasfasfasf', '1', '1', '1422788205', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('5', 'wqerqewrq', '1', '1', '1', '1', '52', '0', '1422838511', '1');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('6', 'safa', 'asdfa', 'adf', 'adf', '123', '52', '0', '1422838588', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('7', '123', '1231', '123', '123', '123', '1', '1', '1422863617', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('8', 'tt', '1', '2', '3', '4', '1', '1', '1422863678', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('9', 'safa1234', '1', '2', '3', '4', '1', '1', '1422863748', '0');
INSERT INTO `engrave_complaint` ( `cmp_id`, `cmp_title`, `cmp_expressnumber`, `cmp_orderno`, `cmp_deliverynumber`, `cmp_remark`, `cmp_userid`, `cmp_parentid`, `cmp_time`, `cmp_isdelete` ) VALUES  ('10', '', '', '', '', '', '1', '6', '1423366565', '0');
DROP TABLE IF EXISTS `engrave_coupon`;
CREATE TABLE `engrave_coupon` (
  `CouponId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `TypeId` int(11) unsigned NOT NULL DEFAULT '0',
  `CouponName` varchar(50) NOT NULL DEFAULT '',
  `CouponImage` varchar(200) NOT NULL DEFAULT '',
  `Message` varchar(255) NOT NULL DEFAULT '',
  `CouponValue` double unsigned NOT NULL DEFAULT '0',
  `RebatePoints` int(11) unsigned NOT NULL DEFAULT '0',
  `Days` int(11) unsigned NOT NULL DEFAULT '0',
  `Roles` varchar(50) NOT NULL DEFAULT '',
  `MinAmount` double unsigned NOT NULL DEFAULT '0',
  `MaxAmount` double unsigned NOT NULL DEFAULT '0',
  `StatusId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteCoupon` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CouponId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_coupon` ( `CouponId`, `TypeId`, `CouponName`, `CouponImage`, `Message`, `CouponValue`, `RebatePoints`, `Days`, `Roles`, `MinAmount`, `MaxAmount`, `StatusId`, `IsDeleteCoupon` ) VALUES  ('1', '0', '测试优惠', '', '测试优惠', '10', '1', '30', '', '100', '0', '0', '0');
DROP TABLE IF EXISTS `engrave_currecy`;
CREATE TABLE `engrave_currecy` (
  `CId` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) NOT NULL DEFAULT '',
  `Code` varchar(10) NOT NULL DEFAULT '',
  `Symbol` varchar(10) NOT NULL DEFAULT '',
  `ExchageRate` double NOT NULL DEFAULT '1',
  `IsDefault` tinyint(3) NOT NULL DEFAULT '0',
  `IsDeleteCurrecy` tinyint(4) NOT NULL,
  PRIMARY KEY (`CId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_currecy` ( `CId`, `Name`, `Code`, `Symbol`, `ExchageRate`, `IsDefault`, `IsDeleteCurrecy` ) VALUES  ('1', '日元', 'JPY', '円', '18.9028', '0', '0');
INSERT INTO `engrave_currecy` ( `CId`, `Name`, `Code`, `Symbol`, `ExchageRate`, `IsDefault`, `IsDeleteCurrecy` ) VALUES  ('2', '美元', 'USD', '$', '0.16', '0', '0');
INSERT INTO `engrave_currecy` ( `CId`, `Name`, `Code`, `Symbol`, `ExchageRate`, `IsDefault`, `IsDeleteCurrecy` ) VALUES  ('3', '人民币', 'RMB', '￥', '1', '1', '0');
INSERT INTO `engrave_currecy` ( `CId`, `Name`, `Code`, `Symbol`, `ExchageRate`, `IsDefault`, `IsDeleteCurrecy` ) VALUES  ('12', '123', 'RMB', '￥', '12', '0', '1');
DROP TABLE IF EXISTS `engrave_deliveryaddress`;
CREATE TABLE `engrave_deliveryaddress` (
  `da_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键：ID',
  `da_userid` int(12) DEFAULT NULL COMMENT '用户ID:外键',
  `da_name` varchar(255) DEFAULT NULL COMMENT '地址名称',
  `da_consignee` varchar(50) DEFAULT NULL COMMENT '收货人',
  `da_consigneetelephone` varchar(50) DEFAULT NULL COMMENT '收货人电话',
  `da_sparetelephone` varchar(50) DEFAULT NULL COMMENT '备用电话',
  `da_country` int(12) DEFAULT NULL COMMENT '国家',
  `da_province` int(12) DEFAULT NULL COMMENT '省',
  `da_city` int(12) DEFAULT NULL COMMENT '城市',
  `da_address` varchar(500) DEFAULT NULL COMMENT '收货地址',
  `da_zipcode` varchar(50) DEFAULT NULL COMMENT '邮编',
  `da_remark` varchar(500) DEFAULT NULL COMMENT '备注信息',
  `da_identitycard` varchar(100) DEFAULT NULL COMMENT '身份证号',
  `da_identitycardfront` varchar(500) DEFAULT NULL COMMENT '身份证正面',
  `da_identitycardbehind` varchar(500) DEFAULT NULL COMMENT '身份证反面',
  `da_identityassemble` varchar(500) DEFAULT NULL COMMENT '身份证复印件组合',
  `da_attach` varchar(500) DEFAULT NULL COMMENT '其它补充证明文件',
  `da_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`da_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_enum`;
CREATE TABLE `engrave_enum` (
  `EnumId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `GroupId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ParentId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `ItemName` varchar(50) NOT NULL DEFAULT '',
  `ItemValue` varchar(50) NOT NULL DEFAULT '',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `Sign` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteEnum` tinyint(4) NOT NULL,
  PRIMARY KEY (`EnumId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('3', '1', '0', 'DHL', 'DHL', '0', '0', '1');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('4', '1', '0', 'Express', 'Express', '0', '0', '0');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('5', '2', '0', '公斤', 'KG', '0', '0', '0');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('6', '2', '0', 'LBS', 'LBS', '0', '0', '0');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('7', '3', '0', '亚马逊', '亚马逊', '0', '0', '0');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('8', '3', '0', 'ebay', 'ebay', '0', '0', '0');
INSERT INTO `engrave_enum` ( `EnumId`, `GroupId`, `ParentId`, `ItemName`, `ItemValue`, `SortId`, `Sign`, `IsDeleteEnum` ) VALUES  ('9', '3', '0', '京东', '京东', '0', '0', '0');
DROP TABLE IF EXISTS `engrave_enumgroup`;
CREATE TABLE `engrave_enumgroup` (
  `GroupId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `GroupName` varchar(50) NOT NULL DEFAULT '',
  `SystemIs` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeleteGroup` tinyint(4) NOT NULL,
  PRIMARY KEY (`GroupId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_enumgroup` ( `GroupId`, `GroupName`, `SystemIs`, `IsDeleteGroup` ) VALUES  ('1', '货运公司', '1', '0');
INSERT INTO `engrave_enumgroup` ( `GroupId`, `GroupName`, `SystemIs`, `IsDeleteGroup` ) VALUES  ('2', '重量单位', '1', '0');
INSERT INTO `engrave_enumgroup` ( `GroupId`, `GroupName`, `SystemIs`, `IsDeleteGroup` ) VALUES  ('3', '购物网站', '1', '0');
DROP TABLE IF EXISTS `engrave_evalua`;
CREATE TABLE `engrave_evalua` (
  `eva_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '评价ID',
  `eva_orderid` int(12) DEFAULT '0' COMMENT '订单ID',
  `eva_value` tinyint(4) DEFAULT '0' COMMENT '评价星级（1：优；2：良好；3：差）',
  `eva_message` varchar(200) DEFAULT '' COMMENT '评价信息',
  `eva_delete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`eva_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_evalua` ( `eva_id`, `eva_orderid`, `eva_value`, `eva_message`, `eva_delete` ) VALUES  ('1', '7', '0', '配送的相当好哦', '0');
INSERT INTO `engrave_evalua` ( `eva_id`, `eva_orderid`, `eva_value`, `eva_message`, `eva_delete` ) VALUES  ('2', '8', '0', '配送的相当好哦', '0');
DROP TABLE IF EXISTS `engrave_faq`;
CREATE TABLE `engrave_faq` (
  `faq_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '有问必答ID',
  `faq_title` varchar(200) DEFAULT NULL COMMENT '标题',
  `faq_expressnumber` varchar(100) DEFAULT NULL COMMENT '相关转运单号（包裹单号）',
  `faq_orderno` varchar(100) DEFAULT NULL COMMENT '订单单号',
  `faq_deliverynumber` varchar(100) DEFAULT NULL COMMENT '发货单号',
  `faq_remark` varchar(500) DEFAULT NULL COMMENT '问题描述',
  `faq_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `faq_parentid` int(12) DEFAULT NULL COMMENT '父ID',
  `faq_time` int(12) DEFAULT NULL COMMENT '时间',
  `faq_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_focusmap`;
CREATE TABLE `engrave_focusmap` (
  `FocusId` int(12) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `ImgUrl` varchar(200) DEFAULT NULL,
  `LinkUrl` varchar(200) DEFAULT NULL,
  `Systime` datetime DEFAULT NULL,
  `State` tinyint(4) DEFAULT NULL,
  `IsFocuseDelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`FocusId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_focusmap` ( `FocusId`, `Title`, `Description`, `ImgUrl`, `LinkUrl`, `Systime`, `State`, `IsFocuseDelete` ) VALUES  ('1', '测试一二三', '测试', '/code/engrave/admin/engraveuploads/image/20150311/20150311061232_18995.jpg', 'http://www.baidu.com', '2015-03-11 13:12:32', '1', '0');
INSERT INTO `engrave_focusmap` ( `FocusId`, `Title`, `Description`, `ImgUrl`, `LinkUrl`, `Systime`, `State`, `IsFocuseDelete` ) VALUES  ('2', '2121', 'sasa', '/code/engrave/admin/engraveuploads/image/20150311/20150311061239_99038.jpg', '', '2015-03-11 13:12:39', '1', '0');
INSERT INTO `engrave_focusmap` ( `FocusId`, `Title`, `Description`, `ImgUrl`, `LinkUrl`, `Systime`, `State`, `IsFocuseDelete` ) VALUES  ('3', '1212121', '1111', '/code/engrave/admin/engraveuploads/image/20150311/20150311061245_56818.jpg', 'http://wwww.google.com', '2015-03-11 13:12:45', '1', '0');
INSERT INTO `engrave_focusmap` ( `FocusId`, `Title`, `Description`, `ImgUrl`, `LinkUrl`, `Systime`, `State`, `IsFocuseDelete` ) VALUES  ('4', '123', '123', '/code/engrave/admin/engraveuploads/image/20141218/20141218064120_44346.jpg', 'http://www.baidu.com', '2014-12-18 14:07:17', '0', '0');
DROP TABLE IF EXISTS `engrave_moduleservice`;
CREATE TABLE `engrave_moduleservice` (
  `ModuleId` int(12) NOT NULL AUTO_INCREMENT,
  `ModuleCode` varchar(20) NOT NULL DEFAULT '',
  `ModuleName` varchar(20) NOT NULL,
  `IsDeleteModule` tinyint(4) NOT NULL,
  PRIMARY KEY (`ModuleId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_moduleservice` ( `ModuleId`, `ModuleCode`, `ModuleName`, `IsDeleteModule` ) VALUES  ('1', 'order', '订单打包', '0');
INSERT INTO `engrave_moduleservice` ( `ModuleId`, `ModuleCode`, `ModuleName`, `IsDeleteModule` ) VALUES  ('2', 'branch', '分箱', '0');
INSERT INTO `engrave_moduleservice` ( `ModuleId`, `ModuleCode`, `ModuleName`, `IsDeleteModule` ) VALUES  ('3', 'storage', '合箱', '0');
INSERT INTO `engrave_moduleservice` ( `ModuleId`, `ModuleCode`, `ModuleName`, `IsDeleteModule` ) VALUES  ('4', 'value-added', '增值服务', '0');
DROP TABLE IF EXISTS `engrave_order`;
CREATE TABLE `engrave_order` (
  `order_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `order_modelid` int(12) DEFAULT NULL COMMENT '服务模块 2:分箱  3：合箱',
  `order_no` varchar(50) DEFAULT '' COMMENT '订单号',
  `order_waybillno` varchar(50) DEFAULT '',
  `order_time` int(11) DEFAULT '0' COMMENT '订单时间',
  `order_userid` int(12) DEFAULT '0' COMMENT '订单用户ID',
  `order_buyerid` int(12) NOT NULL DEFAULT '0',
  `order_note` varchar(200) DEFAULT '' COMMENT '需要注意说明',
  `order_remark` varchar(200) DEFAULT '' COMMENT '备注说明',
  `order_shippingid` int(12) NOT NULL COMMENT '线路id',
  `order_servicetype` tinyint(4) DEFAULT '0' COMMENT '服务类型（0基本和1高级）',
  `order_fixed` int(12) DEFAULT '0' COMMENT '订单固定数',
  `order_boxquantity` int(12) DEFAULT '0' COMMENT '分箱数量',
  `order_paymentid` int(12) DEFAULT '0' COMMENT '支付方式ID',
  `order_paymentpath` int(12) DEFAULT '0',
  `order_paymentstatus` int(12) DEFAULT '0' COMMENT '支付状态',
  `order_refundstatus` int(12) DEFAULT '0' COMMENT '退款状态',
  `order_totalprice` decimal(12,2) DEFAULT NULL COMMENT '总价格',
  `order_goodsprice` decimal(12,2) DEFAULT '0.00' COMMENT '商品价格',
  `order_weight` decimal(12,2) DEFAULT '0.00' COMMENT '运单重量',
  `order_deductweight` decimal(12,2) DEFAULT '0.00' COMMENT '扣款重量',
  `order_sizelength` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的长',
  `order_sizewidth` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的宽',
  `order_sizeheight` decimal(12,2) DEFAULT '0.00' COMMENT '订单中包裹的高',
  `order_insurace` decimal(12,2) DEFAULT '0.00' COMMENT '保险费',
  `order_operatorcost` decimal(12,2) DEFAULT '0.00',
  `order_othercost` decimal(12,2) DEFAULT '0.00' COMMENT '其他费用',
  `order_tariffcost` decimal(12,2) DEFAULT '0.00' COMMENT '关税',
  `order_valueservicecost` decimal(12,2) DEFAULT '0.00' COMMENT '增值服务费',
  `order_waybillcost` decimal(12,2) DEFAULT '0.00' COMMENT '包裹运费',
  `order_discountcost` decimal(12,2) DEFAULT '0.00',
  `order_warehousecost` decimal(12,2) DEFAULT '0.00' COMMENT '仓储费用',
  `order_userpoints` int(12) DEFAULT '0' COMMENT '订单使用的积分',
  `order_isoutbox` tinyint(4) DEFAULT '0' COMMENT '是否有外箱缠绕膜',
  `order_needinvoice` tinyint(4) DEFAULT '0' COMMENT '是否需要发票',
  `order_isdelivery` tinyint(4) DEFAULT '0' COMMENT '是否发货',
  `order_iscolsed` tinyint(4) DEFAULT '0' COMMENT '订单是否关闭 1：关闭 0：未关闭',
  `order_printstatus` tinyint(4) DEFAULT '0' COMMENT '是否打印',
  `order_isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  `order_paymenttype` tinyint(4) DEFAULT '0' COMMENT '支付方式：1、日元；2、主账户；3、副账户',
  `order_coupon` varchar(255) DEFAULT '' COMMENT '订单所使用的优惠券',
  PRIMARY KEY (`order_id`,`order_buyerid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('1', '0', '150320001', '', '1426816534', '52', '1', '', '', '2', '0', '0', '0', '1', '2', '1', '0', '160.49', '15129.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '3025.80', '0.00', '8.00', '8.00', '0.00', '0', '0', '0', '5', '0', '0', '0', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('2', '0', '150324001', '', '1427173761', '52', '1', '', '', '6', '0', '0', '0', '1', '2', '1', '0', '0.04', '21.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0.00', '0.80', '0.80', '0.00', '0', '0', '0', '4', '0', '0', '0', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('3', '2', '150324002', '', '1427175561', '52', '1', '', '', '6', '1', '0', '2', '1', '2', '1', '0', '263.57', '16605.00', '0.00', '24.00', '20.00', '20.00', '20.00', '0.00', '0.00', '1.00', '4981.50', '0.00', '1040.80', '0.80', '0.00', '0', '0', '0', '5', '0', '0', '0', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('4', '0', '150324003', '', '1427176110', '52', '1', '', '', '0', '0', '0', '0', '1', '2', '0', '0', '12.00', '144.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', '2', '0', '0', '1', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('5', '0', '150324004', '', '1427185552', '52', '1', '', '', '6', '0', '0', '0', '1', '1', '0', '0', '240.05', '15129.00', '0.00', '12.00', '0.00', '0.00', '0.00', '0.00', '', '0.00', '4538.70', '0.00', '1040.80', '0.80', '0.00', '10', '0', '0', '3', '0', '0', '0', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('6', '0', '150324005', '', '1427197959', '52', '1', 'zxp20150324001', 'zxp20150324001', '1', '0', '0', '0', '1', '2', '1', '0', '2.24', '144.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '28.80', '0.00', '13.60', '13.60', '0.00', '0', '0', '0', '5', '0', '0', '0', '', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('7', '0', '150325001', '', '1427259520', '52', '1', '', '', '6', '0', '0', '0', '1', '2', '1', '0', '160.11', '15129.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '3025.80', '0.00', '0.80', '0.80', '0.00', '0', '0', '0', '5', '0', '0', '0', '0', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('8', '0', '150325002', '', '1427259872', '52', '1', '', '', '3', '0', '0', '0', '1', '2', '1', '0', '238.37', '15006.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '4501.80', '0.00', '4.00', '4.00', '0.00', '0', '0', '0', '5', '0', '0', '0', '0', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('9', '0', '150325003', '', '1427259963', '52', '1', '', '', '6', '0', '0', '0', '1', '2', '1', '0', '160.11', '15129.00', '0.00', '10.00', '12.00', '12.00', '12.00', '100.00', '100.00', '100.00', '3025.80', '100.00', '1040.80', '0.80', '100.00', '0', '0', '0', '4', '0', '0', '0', '0', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('10', '0', '150325004', '', '1427261815', '52', '1', '', '', '6', '0', '0', '0', '1', '2', '1', '0', '240.15', '15129.00', '0.00', '12.00', '12.00', '12.00', '12.00', '0.00', '0.00', '1.00', '4538.70', '0.00', '1040.80', '0.80', '0.00', '0', '0', '0', '51', '0', '0', '0', '1', '3804672716477824');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('11', '0', '150329001', '', '1427609291', '52', '1', '', '', '3', '0', '0', '0', '1', '2', '0', '0', '27.19', '1620.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '0.00', '471.60', '38.00', '5.00', '4.00', '0.40', '0', '0', '0', '0', '0', '0', '0', '1', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('12', '0', '150401001', '', '1427862364', '52', '1', '', '', '1', '0', '0', '0', '1', '2', '1', '0', '2.20', '144.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '28.80', '0.00', '13.60', '13.60', '1.10', '10', '0', '0', '0', '0', '0', '0', '1', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('13', '0', '150401002', '', '1427866466', '52', '1', '', '', '6', '0', '0', '0', '1', '2', '0', '0', '642.34', '144.00', '12.00', '12.00', '12.00', '12.00', '12.00', '0.00', '0.00', '0.00', '43.20', '18.00', '15101.00', '12080.80', '0.00', '0', '0', '0', '2', '0', '0', '0', '1', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('14', '0', '150403001', '', '1428038929', '52', '1', '', '', '3', '0', '0', '0', '1', '2', '1', '0', '2.50', '144.00', '12.00', '12.00', '10.00', '10.00', '14.00', '0.00', '0.00', '1.00', '43.20', '0.00', '4.00', '4.00', '0.00', '0', '0', '0', '4', '0', '0', '0', '3', '');
INSERT INTO `engrave_order` ( `order_id`, `order_modelid`, `order_no`, `order_waybillno`, `order_time`, `order_userid`, `order_buyerid`, `order_note`, `order_remark`, `order_shippingid`, `order_servicetype`, `order_fixed`, `order_boxquantity`, `order_paymentid`, `order_paymentpath`, `order_paymentstatus`, `order_refundstatus`, `order_totalprice`, `order_goodsprice`, `order_weight`, `order_deductweight`, `order_sizelength`, `order_sizewidth`, `order_sizeheight`, `order_insurace`, `order_operatorcost`, `order_othercost`, `order_tariffcost`, `order_valueservicecost`, `order_waybillcost`, `order_discountcost`, `order_warehousecost`, `order_userpoints`, `order_isoutbox`, `order_needinvoice`, `order_isdelivery`, `order_iscolsed`, `order_printstatus`, `order_isdelete`, `order_paymenttype`, `order_coupon` ) VALUES  ('15', '0', '150403002', '', '1428039060', '52', '1', '', '', '3', '0', '0', '0', '1', '2', '0', '0', '1.74', '144.00', '14.00', '14.00', '11.00', '12.00', '13.00', '0.00', '0.00', '0.00', '28.80', '0.00', '5.00', '4.00', '0.00', '0', '0', '0', '2', '0', '0', '0', '1', '');
DROP TABLE IF EXISTS `engrave_order_attachs`;
CREATE TABLE `engrave_order_attachs` (
  `oa_id` int(12) NOT NULL AUTO_INCREMENT,
  `oa_orderid` int(12) DEFAULT NULL,
  `oa_attach` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`oa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_order_attachs` ( `oa_id`, `oa_orderid`, `oa_attach` ) VALUES  ('1', '39', '/code/engrave/admin/engraveuploads/image/20150308/20150308155308_69463.jpg');
INSERT INTO `engrave_order_attachs` ( `oa_id`, `oa_orderid`, `oa_attach` ) VALUES  ('2', '39', '/code/engrave/admin/engraveuploads/image/20150308/20150308155308_42615.jpg');
INSERT INTO `engrave_order_attachs` ( `oa_id`, `oa_orderid`, `oa_attach` ) VALUES  ('3', '8', '/code/engrave/admin/engraveuploads/image/20150331/20150331055756_42761.jpg');
INSERT INTO `engrave_order_attachs` ( `oa_id`, `oa_orderid`, `oa_attach` ) VALUES  ('4', '8', '/code/engrave/admin/engraveuploads/image/20150331/20150331055756_71130.jpg');
DROP TABLE IF EXISTS `engrave_order_log`;
CREATE TABLE `engrave_order_log` (
  `ol_id` int(12) NOT NULL AUTO_INCREMENT,
  `ol_time` int(12) DEFAULT NULL COMMENT '操作日期',
  `ol_userid` int(12) DEFAULT NULL COMMENT '用户ID',
  `ol_username` varchar(200) DEFAULT NULL COMMENT '操作用户',
  `ol_info` varchar(500) DEFAULT NULL COMMENT '操作记录',
  `ol_ipaddress` varchar(15) DEFAULT NULL COMMENT 'IP',
  `ol_code` varchar(50) DEFAULT NULL COMMENT '操作代码',
  `ol_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  PRIMARY KEY (`ol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('1', '1426816534', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150320001(ID:1)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '1');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('2', '1426816574', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '1');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('3', '1426816579', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '1');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('4', '1426816601', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 8日元,实际需支付总费用： 186419.99日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '1');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('5', '1426816614', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '1');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('6', '1427173761', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150324001(ID:2)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '2');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('7', '1427175561', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150324002(ID:3)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('8', '1427176110', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150324003(ID:4)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '4');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('9', '1427185552', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150324004(ID:5)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '5');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('10', '1427185561', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '5');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('11', '1427185562', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '5');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('12', '1427197878', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '4');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('13', '1427197882', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '4');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('14', '1427197959', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150324005(ID:6)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '6');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('15', '1427197981', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '6');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('16', '1427197983', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '6');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('17', '1427246362', '1', 'admin', '订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 1040.8日元,实际需支付总费用： 0.00日元 （手动确认支付，待客户支付！）', '127.0.0.1', 'ORDERWEIGHTING', '5');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('18', '1427259520', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150325001(ID:7)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('19', '1427259872', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150325002(ID:8)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '8');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('20', '1427259963', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150325003(ID:9)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '9');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('21', '1427261815', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150325004(ID:10)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '10');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('22', '1427264787', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '10');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('23', '1427264788', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '10');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('24', '1427330184', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '9');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('25', '1427330185', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '9');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('26', '1427330639', '1', 'admin', '订单商品已由 admin 称重打包，总重量：10.00LBS，运费： 1040.8日元,实际需支付总费用： 437.37日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '9');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('27', '1427330842', '1', 'admin', '订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 1040.8日元,实际需支付总费用： 491.01日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '10');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('28', '1427330848', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '8');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('29', '1427330849', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '8');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('35', '1427335486', '1', 'admin', '订单商品已由 admin 部门发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '10');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('36', '1427335744', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 4日元,实际需支付总费用： 238.68日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '8');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('37', '1427335759', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '8');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('38', '1427335800', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 13.6日元,实际需支付总费用： 3.20日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '6');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('39', '1427335861', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '2');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('40', '1427335864', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('41', '1427337851', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '6');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('42', '1427337881', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('43', '1427337883', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('44', '1427337887', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 0.8日元,实际需支付总费用： 160.22日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('45', '1427338118', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('46', '1427338138', '1', 'admin', '订单商品已由 admin 称重打包，总重量：24.00LBS，运费： 1040.8日元,实际需支付总费用： 948.24日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('47', '1427338165', '1', 'admin', '订单商品已由 admin 部门发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('48', '1427346030', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '2');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('49', '1427346041', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 0.8日元,实际需支付总费用： 0.15日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '2');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('50', '1427350143', '1', 'admin', '订单商品已由 admin 部门发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('51', '1427350380', '1', 'admin', '订单商品已由 admin 部门发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('52', '1427350486', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('53', '1427350945', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('54', '1427351296', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '7');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('55', '1427442372', '1', 'admin', '订单商品已由 admin 发出，用户等待收货', '127.0.0.1', 'ORDERDELIVERY', '3');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('56', '1427609291', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150329001(ID:11)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '11');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('57', '1427788817', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '11');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('58', '1427788819', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '11');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('59', '1427862365', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150401001(ID:12)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '12');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('60', '1427862369', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '12');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('61', '1427862370', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '12');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('62', '1427866421', '1', 'admin', '订单商品已由 admin 称重打包，总重量：0.00LBS，运费： 13.6日元,实际需支付总费用： 2.35日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '12');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('63', '1427866466', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150401002(ID:13)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '13');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('64', '1427866473', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '13');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('65', '1427866476', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '13');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('66', '1428038929', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150403001(ID:14)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '14');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('67', '1428038942', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '14');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('68', '1428038943', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '14');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('69', '1428039060', '52', 'zxp1988', 'zxp1988 在线提交包裹订单，生成订单号为：150403002(ID:15)，当前状态为：未处理（费用核算中）', '127.0.0.1', 'ORDERCREATE', '15');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('70', '1428039066', '1', 'admin', '订单商品已由 admin 配货完成', '127.0.0.1', 'ORDERDISTRIBUTION', '15');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('71', '1428039068', '1', 'admin', '订单商品已由 admin 送至打包', '127.0.0.1', 'ORDERPACK', '15');
INSERT INTO `engrave_order_log` ( `ol_id`, `ol_time`, `ol_userid`, `ol_username`, `ol_info`, `ol_ipaddress`, `ol_code`, `ol_orderid` ) VALUES  ('72', '1428039095', '1', 'admin', '订单商品已由 admin 称重打包，总重量：12.00LBS，运费： 4日元,实际需支付总费用： 2.55日元 （称重后自动结算，已支付成功！）', '127.0.0.1', 'ORDERWEIGHTING', '14');
DROP TABLE IF EXISTS `engrave_ordergoods`;
CREATE TABLE `engrave_ordergoods` (
  `ordg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `ordg_waybillid` int(12) DEFAULT NULL COMMENT '运单',
  `ordg_goodtype` int(12) DEFAULT NULL COMMENT '物品类型',
  `ordg_goodname` varchar(25) DEFAULT NULL COMMENT '物品名称',
  `ordg_goodnumber` int(12) DEFAULT NULL COMMENT '物品数量',
  `ordg_goodprice` decimal(12,2) DEFAULT NULL COMMENT '物品价格',
  `ordg_delete` tinyint(4) DEFAULT NULL COMMENT '删除标记',
  PRIMARY KEY (`ordg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('1', '1', '4', '123', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('2', '3', '5', '123', '12', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('3', '4', '5', '123', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('4', '6', '5', '123', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('5', '7', '4', 'tt', '12', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('6', '8', '4', '123', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('7', '9', '5', '123', '123', '122.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('8', '10', '4', '123', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('9', '11', '5', '四世同堂', '123', '123.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('10', '12', '5', '123', '123', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('11', '12', '4', '12', '12', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('12', '13', '4', '12', '12', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('13', '14', '5', '12', '12', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('14', '15', '5', '12', '12', '12.00', '0');
INSERT INTO `engrave_ordergoods` ( `ordg_id`, `ordg_waybillid`, `ordg_goodtype`, `ordg_goodname`, `ordg_goodnumber`, `ordg_goodprice`, `ordg_delete` ) VALUES  ('15', '16', '4', '12', '12', '12.00', '0');
DROP TABLE IF EXISTS `engrave_orderservice`;
CREATE TABLE `engrave_orderservice` (
  `RecordId` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '包裹增值服务ID',
  `RecordNo` varchar(50) NOT NULL DEFAULT '',
  `ItemId` int(11) unsigned NOT NULL DEFAULT '0',
  `ItemType` int(11) unsigned NOT NULL DEFAULT '0',
  `HouseId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '仓库ID',
  `ServiceId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '服务ID',
  `ShippingOrder` varchar(50) NOT NULL DEFAULT '' COMMENT '订单号',
  `Weight` double(2,0) unsigned NOT NULL DEFAULT '0' COMMENT '重量',
  `ServicePrice` double(2,0) unsigned NOT NULL DEFAULT '0' COMMENT '服务费用',
  `IsPhoto` tinyint(4) unsigned NOT NULL DEFAULT '0' COMMENT '是否有图片',
  `Description` varchar(255) NOT NULL DEFAULT '' COMMENT '用户备注',
  `Attach` longtext COMMENT '附件',
  `UserId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户ID',
  `Tel` varchar(15) NOT NULL DEFAULT '' COMMENT '电话',
  `AddTime` int(11) DEFAULT '0' COMMENT '添加时间',
  `CheckTime` int(11) DEFAULT '0' COMMENT '系统管理员处理时间',
  `AdminId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '系统管理员ID',
  `IsPaid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '是否支付',
  `StatusId` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `CheckResult` text COMMENT '检测结果',
  `IsDeleteService` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `ps_packageid` int(12) DEFAULT '0' COMMENT '包裹ID',
  PRIMARY KEY (`RecordId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('1', 'S20150329554576', '0', '0', '2', '12', '12312', '0', '0', '0', '', '', '52', '15801177782', '1427608271', '1427608470', '0', '1', '1', '123', '0', '2');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('2', 'S20150329294843', '0', '0', '2', '12', '123123111231', '0', '0', '0', '', '', '52', '15801117778', '1427613672', '1427777111', '0', '1', '1', '<span>S20150329294843</span>', '0', '12');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('3', 'S20150329294843', '0', '0', '2', '7', '123123111231', '0', '0', '0', '', '', '52', '15801117778', '1427613672', '1427777963', '0', '1', '1', '', '0', '12');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('4', 'S20150329390580', '0', '0', '2', '12', '123123111231', '0', '0', '0', '', '', '52', '15801177782', '1427615109', '0', '0', '1', '0', '', '0', '12');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('5', 'S20150329965111', '0', '0', '2', '12', '123123111231', '0', '0', '0', '', '', '52', '15801177782', '1427615184', '0', '0', '1', '0', '', '0', '12');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('6', 'S20150329765836', '0', '0', '2', '12', '123123', '0', '0', '0', '', '', '52', '15801177781', '1427615292', '1427620090', '0', '1', '1', '', '0', '14');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('7', 'S20150329172070', '0', '0', '2', '12', '123123111', '0', '0', '0', '', '', '52', '15801177781', '1427615428', '1427620496', '0', '1', '1', '123', '0', '15');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('8', 'S20150329172070', '0', '0', '2', '7', '123123111', '0', '0', '0', '', '', '52', '15801177781', '1427615428', '1427777859', '0', '1', '1', '', '0', '15');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('9', 'S20150401530462', '0', '0', '2', '7', '20150401-001', '0', '0', '0', '', '', '52', '15801177781', '1427843982', '1427845138', '0', '1', '1', '', '0', '24');
INSERT INTO `engrave_orderservice` ( `RecordId`, `RecordNo`, `ItemId`, `ItemType`, `HouseId`, `ServiceId`, `ShippingOrder`, `Weight`, `ServicePrice`, `IsPhoto`, `Description`, `Attach`, `UserId`, `Tel`, `AddTime`, `CheckTime`, `AdminId`, `IsPaid`, `StatusId`, `CheckResult`, `IsDeleteService`, `ps_packageid` ) VALUES  ('10', 'S20150401530462', '0', '0', '2', '6', '20150401-001', '0', '0', '0', '', '', '52', '15801177781', '1427843982', '1427844829', '0', '1', '1', '', '0', '24');
DROP TABLE IF EXISTS `engrave_orderwaybill`;
CREATE TABLE `engrave_orderwaybill` (
  `ordw_waybillid` int(12) NOT NULL AUTO_INCREMENT,
  `ordw_orderid` int(12) DEFAULT '0' COMMENT '关联的订单ID',
  `ordw_orderno` varchar(50) DEFAULT '' COMMENT '订单号',
  `ordw_collogisid` int(12) DEFAULT '0' COMMENT '第三方物流ID',
  `ordw_waybillno` varchar(50) DEFAULT '' COMMENT '运单编号（第三方物流）',
  `ordw_shippingid` int(12) DEFAULT '0' COMMENT '线路ID',
  `ordw_assistno` varchar(50) DEFAULT '' COMMENT '辅助编号',
  `ordw_consigid` int(12) DEFAULT '0' COMMENT '收货人',
  `ordw_applyprice` decimal(12,2) DEFAULT '0.00' COMMENT '申报价格',
  `ordw_waybillcost` decimal(12,2) DEFAULT '0.00' COMMENT '包裹运费',
  `ordw_goodweight` decimal(12,2) DEFAULT '0.00' COMMENT '商品的重量',
  `ordw_deductweight` decimal(12,2) DEFAULT '0.00' COMMENT '包裹重量',
  `ordw_sizelength` decimal(12,2) DEFAULT '0.00' COMMENT '分箱和合箱包裹的长',
  `ordw_sizewidth` decimal(12,2) DEFAULT '0.00' COMMENT '分箱和合箱包裹的宽',
  `ordw_sizeheight` decimal(12,2) DEFAULT '0.00' COMMENT '分箱和合箱包裹的高',
  `ordw_isinsurance` tinyint(4) DEFAULT '0' COMMENT '是否需要保险',
  `ordw_insurprice` decimal(12,2) DEFAULT '0.00' COMMENT '保险费用',
  `ordw_tariff` decimal(12,2) DEFAULT '0.00' COMMENT '关税',
  `ordw_delete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`ordw_waybillid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('1', '1', '150320001-1', '2', '12312313', '2', '15032000001', '1', '15129.00', '10.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '3025.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('2', '2', '150324001-1', '', '', '', '', '1', '0.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('3', '3', '150324002-1', '0', '15032600024', '6', '15032600024', '1', '1476.00', '0.50', '0.00', '12.00', '10.00', '10.00', '10.00', '0', '0.00', '442.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('4', '3', '150324002-2', '0', '15032600028', '6', '15032600028', '1', '15129.00', '0.50', '0.00', '12.00', '10.00', '10.00', '10.00', '0', '0.00', '4538.70', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('5', '4', '150324003-1', '', '', '', '', '1', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '0.00', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('6', '5', '150324004-1', '', '', '', '', '1', '15129.00', '1.00', '0.00', '12.00', '0.00', '0.00', '0.00', '0', '0.00', '4538.70', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('7', '6', '150324005-1', '0', '15032600023', '1', '15032600023', '1', '144.00', '17.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '28.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('8', '7', '150325001-1', '0', 'undefined', '6', '15032600026', '1', '15129.00', '1.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '3025.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('9', '8', '150325002-1', '3', 'asdfaf123', '3', '15032600019', '1', '15006.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '4501.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('10', '9', '150325003-1', '3', '123123sad', '6', '15032600018', '1', '15129.00', '1.00', '0.00', '10.00', '12.00', '12.00', '12.00', '0', '0.00', '3025.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('11', '10', '150325004-1', '2', '123123323', '6', '15032600016', '1', '15129.00', '1.00', '0.00', '12.00', '12.00', '12.00', '12.00', '0', '0.00', '4538.70', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('12', '11', '150329001-1', '0', '', '0', '', '1', '1620.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0.00', '471.60', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('13', '12', '150401001-1', '0', '', '0', '', '1', '144.00', '17.00', '0.00', '10.00', '0.00', '0.00', '0.00', '0', '0.00', '28.80', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('14', '13', '150401002-1', '0', '', '0', '', '1', '144.00', '15101.00', '12.00', '12.00', '12.00', '12.00', '12.00', '0', '0.00', '43.20', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('15', '14', '150403001-1', '0', '', '0', '', '1', '144.00', '5.00', '12.00', '12.00', '10.00', '10.00', '14.00', '0', '0.00', '43.20', '0');
INSERT INTO `engrave_orderwaybill` ( `ordw_waybillid`, `ordw_orderid`, `ordw_orderno`, `ordw_collogisid`, `ordw_waybillno`, `ordw_shippingid`, `ordw_assistno`, `ordw_consigid`, `ordw_applyprice`, `ordw_waybillcost`, `ordw_goodweight`, `ordw_deductweight`, `ordw_sizelength`, `ordw_sizewidth`, `ordw_sizeheight`, `ordw_isinsurance`, `ordw_insurprice`, `ordw_tariff`, `ordw_delete` ) VALUES  ('16', '15', '150403002-1', '0', '', '0', '', '1', '144.00', '5.00', '14.00', '14.00', '11.00', '12.00', '13.00', '0', '0.00', '28.80', '0');
DROP TABLE IF EXISTS `engrave_package`;
CREATE TABLE `engrave_package` (
  `pck_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '包裹ID',
  `pck_warehouseid` int(12) DEFAULT '0' COMMENT '仓库ID',
  `pck_expressid` int(12) DEFAULT '0' COMMENT '快递公司ID',
  `pck_expresstelephone` varchar(20) DEFAULT '' COMMENT '快递电话',
  `pck_expressnumber` varchar(200) DEFAULT '' COMMENT '快递公司运单号',
  `pck_assess` decimal(12,2) DEFAULT '0.00' COMMENT '商品估价',
  `pck_name` varchar(200) DEFAULT '' COMMENT '包裹名称',
  `pck_weight` double DEFAULT '0' COMMENT '商品重量',
  `pck_orderid` int(12) DEFAULT '0' COMMENT ' 订单ID',
  `pck_ordersite` int(12) DEFAULT '0' COMMENT '订单号：网站',
  `pck_ordernumber` varchar(200) DEFAULT '' COMMENT '订单�?',
  `pck_sizelength` decimal(12,2) DEFAULT '0.00' COMMENT '�?',
  `pck_sizewidth` decimal(12,2) DEFAULT '0.00' COMMENT '�?',
  `pck_sizeheight` decimal(12,2) DEFAULT NULL COMMENT '�?',
  `pck_userremark` varchar(500) DEFAULT '' COMMENT '客户备注',
  `pck_userid` int(12) DEFAULT '0' COMMENT '用户ID',
  `pck_customnum` varchar(50) DEFAULT '',
  `pck_storagecode` varchar(50) DEFAULT NULL COMMENT '入库�?',
  `pck_adminremark` varchar(500) DEFAULT NULL COMMENT '管理员备�?',
  `pck_packagestatus` tinyint(4) DEFAULT NULL COMMENT '包裹状态：未到货、已入库、已过期',
  `pck_inventorylocation` varchar(200) DEFAULT NULL COMMENT '库存位置',
  `pck_intime` int(11) DEFAULT NULL COMMENT '录入时间',
  `pck_istrouble` tinyint(4) DEFAULT '0' COMMENT '是否为问题件',
  `pck_isaward` tinyint(4) DEFAULT '0' COMMENT '是否已经奖励过',
  `pck_isarrivaldelivery` tinyint(4) DEFAULT '0' COMMENT '是否到货即发',
  `pck_isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`pck_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('1', '2', '0', '', '2011', '144.00', '', '0', '1', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '5', '123', '1426814693', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('2', '2', '0', '', '1231312', '144.00', '', '0', '9', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '4', '123', '1427259935', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('3', '2', '0', '', '1231312312', '15129.00', '', '0', '8', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '4', '123', '1427259663', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('4', '2', '0', '', '1231231', '1476.00', '', '0', '7', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '5', 'fasf', '1427246919', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('5', '2', '0', '', '123112312', '1476.00', '', '0', '3', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '5', 'asdfa', '1427174726', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('6', '0', '0', '', '', '0.00', '', '0', '', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '1');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('7', '2', '0', '', '2313', '15129.00', '', '0', '2', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '4', '12312', '1427172703', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('8', '2', '0', '', '123213', '15129.00', '', '0', '5', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '4', '123', '1427175101', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('9', '2', '0', '', 'zxp20150324001', '144.00', '', '0', '6', '0', '', '0.00', '0.00', '0.00', 'zxp20150324001', '52', '', 'DHGIWPEB', '', '5', 'zxp20150324001', '1427197934', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('10', '2', '0', '', '12312311', '144.00', '', '0', '10', '0', '', '12.00', '12.00', '12.00', '123', '52', '', 'DHGIWPEB', '', '51', '123', '1427260321', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('11', '1', '0', '', '12312', '132.00', '', '0', '11', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '3', '123', '1427262440', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('12', '1', '0', '', '123123111231', '144.00', '', '0', '12', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '4', '123', '1427442294', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('14', '2', '0', '', '123123', '144.00', '', '0', '', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('15', '2', '0', '', '123123111', '15129.00', '', '0', '', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('16', '1', '', '', '1231231121123', '', '', '12', '', '', '', '12.00', '12.00', '12.00', '', '', '', '132131', '123', '1', '123', '1427770605', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('17', '0', '', '', '1231231231231', '', '', '0', '', '', '', '0.00', '0.00', '0.00', '', '', '', '', '', '1', '', '1427771450', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('18', '0', '', '', '', '', '', '0', '', '', '', '0.00', '0.00', '0.00', '', '', '', '', '', '1', '', '1427771486', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('19', '1', '', '', '20150331-zxp', '', '', '12', '0', '', '', '12.00', '12.00', '12.00', '', '52', '', 'DHGIWPEB', '', '1', '12', '1427772619', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('20', '2', '', '', '12', '', '', '12', '13', '', '', '12.00', '12.00', '12.00', '12', '52', '', 'DHGIWPEB', '', '3', '12', '1427773287', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('21', '0', '', '', '', '', '', '0', '', '', '', '0.00', '0.00', '0.00', '', '1', '', '', '', '1', '', '1427773719', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('22', '0', '', '', '', '', '', '0', '', '', '', '0.00', '0.00', '0.00', '', '1', '', '', '', '1', '', '1427773759', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('23', '2', '0', '', '12312312', '15129.00', '', '0', '', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('24', '2', '0', '', '20150401-001', '144.00', '', '0', '0', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('25', '2', '0', '', '20150314003', '0.00', '', '0', '0', '0', '', '0.00', '0.00', '0.00', '', '52', '', 'DHGIWPEB', '', '0', '', '0', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('26', '2', '0', '', '201503140031', '0.00', '', '14', '15', '0', '', '11.00', '12.00', '13.00', '', '52', '', 'DHGIWPEB', '', '3', '15', '1428039039', '0', '0', '0', '0');
INSERT INTO `engrave_package` ( `pck_id`, `pck_warehouseid`, `pck_expressid`, `pck_expresstelephone`, `pck_expressnumber`, `pck_assess`, `pck_name`, `pck_weight`, `pck_orderid`, `pck_ordersite`, `pck_ordernumber`, `pck_sizelength`, `pck_sizewidth`, `pck_sizeheight`, `pck_userremark`, `pck_userid`, `pck_customnum`, `pck_storagecode`, `pck_adminremark`, `pck_packagestatus`, `pck_inventorylocation`, `pck_intime`, `pck_istrouble`, `pck_isaward`, `pck_isarrivaldelivery`, `pck_isdelete` ) VALUES  ('27', '2', '0', '', '20150314003-001', '200.00', '', '12', '14', '0', '', '10.00', '10.00', '10.00', '', '52', '', 'DHGIWPEB', '', '4', '10', '1428038995', '0', '0', '0', '0');
DROP TABLE IF EXISTS `engrave_package_attachs`;
CREATE TABLE `engrave_package_attachs` (
  `pa_id` int(12) NOT NULL AUTO_INCREMENT,
  `pa_packageid` int(12) DEFAULT NULL,
  `pa_attach` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('8', '14', '/code/engrave/admin/engraveuploads/image/20150329/20150329130810_48924.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('9', '5', '/code/engrave/admin/engraveuploads/image/20150331/20150331055728_25015.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('10', '15', '/code/engrave/admin/engraveuploads/image/20150331/20150331085739_25273.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('11', '12', '/code/engrave/admin/engraveuploads/image/20150331/20150331085923_62176.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('12', '2', '/code/engrave/admin/engraveuploads/image/20150401/20150401031656_63541.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('13', '24', '/code/engrave/admin/engraveuploads/image/20150401/20150401033337_44032.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('14', '24', '/code/engrave/admin/engraveuploads/image/20150401/20150401033349_42398.jpg');
INSERT INTO `engrave_package_attachs` ( `pa_id`, `pa_packageid`, `pa_attach` ) VALUES  ('15', '24', '/code/engrave/admin/engraveuploads/image/20150401/20150401033858_43535.png');
DROP TABLE IF EXISTS `engrave_package_service`;
CREATE TABLE `engrave_package_service` (
  `pcks_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `pcks_packageid` int(12) DEFAULT '0',
  `pcks_serviceid` int(12) DEFAULT NULL,
  PRIMARY KEY (`pcks_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_package_service` ( `pcks_id`, `pcks_packageid`, `pcks_serviceid` ) VALUES  ('1', '1', '0');
INSERT INTO `engrave_package_service` ( `pcks_id`, `pcks_packageid`, `pcks_serviceid` ) VALUES  ('2', '2', '12');
INSERT INTO `engrave_package_service` ( `pcks_id`, `pcks_packageid`, `pcks_serviceid` ) VALUES  ('3', '3', '0');
DROP TABLE IF EXISTS `engrave_package_shoppingvouchers`;
CREATE TABLE `engrave_package_shoppingvouchers` (
  `psv_id` int(12) NOT NULL AUTO_INCREMENT,
  `psv_packageid` int(12) DEFAULT NULL COMMENT '包裹ID',
  `psv_vouchersvalue` varchar(255) DEFAULT NULL COMMENT '购物凭证-图片',
  PRIMARY KEY (`psv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_package_track`;
CREATE TABLE `engrave_package_track` (
  `tr_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '跟踪ID',
  `tr_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  `tr_expressnumber` varchar(200) DEFAULT NULL COMMENT '运单编号',
  `tr_message` varchar(50) DEFAULT NULL COMMENT '跟踪信息',
  `tr_statuscode` tinyint(4) DEFAULT NULL COMMENT '状态码',
  `tr_intime` int(12) DEFAULT NULL COMMENT '跟踪时间',
  `tr_operatorid` int(12) DEFAULT NULL COMMENT '系统操作人ID',
  `tr_isdelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_package_track` ( `tr_id`, `tr_orderid`, `tr_expressnumber`, `tr_message`, `tr_statuscode`, `tr_intime`, `tr_operatorid`, `tr_isdelete` ) VALUES  ('1', '1', '12312313', '订单已至机场，等待登机', '1', '1427784782', '1', '0');
INSERT INTO `engrave_package_track` ( `tr_id`, `tr_orderid`, `tr_expressnumber`, `tr_message`, `tr_statuscode`, `tr_intime`, `tr_operatorid`, `tr_isdelete` ) VALUES  ('2', '3', '15032600024', '订单已至国内海关，等待处理', '1', '1427788321', '1', '0');
INSERT INTO `engrave_package_track` ( `tr_id`, `tr_orderid`, `tr_expressnumber`, `tr_message`, `tr_statuscode`, `tr_intime`, `tr_operatorid`, `tr_isdelete` ) VALUES  ('3', '3', '15032600024', '订单已至国内海关，等待处理', '2', '1427788370', '1', '0');
DROP TABLE IF EXISTS `engrave_packagegoods`;
CREATE TABLE `engrave_packagegoods` (
  `pckg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '包裹内物品ID',
  `pckg_packageid` int(12) DEFAULT '0' COMMENT '包裹ID',
  `pckg_name` varchar(200) DEFAULT '' COMMENT '包裹内：商品名称',
  `pckg_amount` int(12) DEFAULT '0' COMMENT '包裹内：物品数量',
  `pckg_unitprice` decimal(12,2) DEFAULT '0.00' COMMENT '单价',
  `pckg_totalprice` decimal(12,2) DEFAULT '0.00' COMMENT '总价',
  PRIMARY KEY (`pckg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('1', '1', '12', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('2', '2', '1', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('3', '3', '123', '123', '123.00', '15129.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('4', '4', '123', '123', '12.00', '1476.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('5', '5', '21312', '123', '12.00', '1476.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('6', '5', '', '0', '0.00', '0.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('7', '5', '', '0', '0.00', '0.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('8', '5', '', '0', '0.00', '0.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('9', '7', '123', '123', '123.00', '15129.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('10', '8', '123', '123', '123.00', '15129.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('11', '9', 'ttt', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('12', '10', '123', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('13', '11', '123', '12', '11.00', '132.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('14', '12', '', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('16', '14', '12', '12', '12.00', '144.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('17', '15', '123', '123', '123.00', '15129.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('18', '23', '123', '123', '123.00', '15129.00');
INSERT INTO `engrave_packagegoods` ( `pckg_id`, `pckg_packageid`, `pckg_name`, `pckg_amount`, `pckg_unitprice`, `pckg_totalprice` ) VALUES  ('19', '24', '', '12', '12.00', '144.00');
DROP TABLE IF EXISTS `engrave_payment`;
CREATE TABLE `engrave_payment` (
  `PaymentId` int(12) NOT NULL AUTO_INCREMENT,
  `InterfaceId` smallint(6) NOT NULL,
  `PaymentName` varchar(50) NOT NULL DEFAULT '',
  `Logo` varchar(255) NOT NULL DEFAULT '',
  `Gateway` varchar(200) NOT NULL DEFAULT '',
  `Description` longtext,
  `MerchantCode` varchar(255) NOT NULL DEFAULT '',
  `Email` varchar(255) NOT NULL DEFAULT '',
  `SecretKey` longtext,
  `SecondKey` longtext,
  `Password` longtext,
  `Partner` varchar(255) NOT NULL DEFAULT '',
  `Charge` double unsigned NOT NULL DEFAULT '0',
  `IsPercent` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `StatusId` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsCOD` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsOnline` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeletePayment` tinyint(4) NOT NULL,
  PRIMARY KEY (`PaymentId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_payment` ( `PaymentId`, `InterfaceId`, `PaymentName`, `Logo`, `Gateway`, `Description`, `MerchantCode`, `Email`, `SecretKey`, `SecondKey`, `Password`, `Partner`, `Charge`, `IsPercent`, `SortId`, `StatusId`, `IsCOD`, `IsOnline`, `IsDeletePayment` ) VALUES  ('1', '1', '支付宝', '', 'alipaydirect', '<p>\r\n	<strong>支付</strong> \r\n</p>', '2088111606204603', 'qdpcfans@gmail.com', 'j49mh8y9gks7sz5pktkajn2jgmn4flht', '', '', '', '0.23', '0', '0', '1', '0', '0', '0');
DROP TABLE IF EXISTS `engrave_paymentinterface`;
CREATE TABLE `engrave_paymentinterface` (
  `InterfaceId` int(12) NOT NULL AUTO_INCREMENT,
  `InterfaceName` varchar(50) NOT NULL DEFAULT '',
  `InterfaceAddress` varchar(100) NOT NULL,
  `InterfaceLogo` varchar(255) NOT NULL,
  `IsDeleteInterface` tinyint(4) NOT NULL,
  PRIMARY KEY (`InterfaceId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('1', '支付宝标准双接口', '', 'code/engrave/admin/images/pay/pay_alipay.gif', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('2', '支付宝及时到', '', 'code/engrave/adminimages/pay/pay_alipay.gif', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('3', '易宝支付通用接口', '', 'code/engrave/adminimages/pay/yeepay.jpg', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('4', 'Paypal', '', 'code/engrave/adminimages/pay/pay_paypal.gif', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('5', '网银在线', '', 'code/engrave/adminimages/pay/pay_chinabank.jpg', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('6', '预付款账', '', '', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('7', '银行汇款', '', '', '0');
INSERT INTO `engrave_paymentinterface` ( `InterfaceId`, `InterfaceName`, `InterfaceAddress`, `InterfaceLogo`, `IsDeleteInterface` ) VALUES  ('8', '信用卡充', '', '', '0');
DROP TABLE IF EXISTS `engrave_prepaid`;
CREATE TABLE `engrave_prepaid` (
  `PrepaidId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `CardName` varchar(50) NOT NULL DEFAULT '',
  `CoverImage` varchar(200) NOT NULL DEFAULT '',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `ParValue` double unsigned NOT NULL DEFAULT '0',
  `Description` varchar(255) NOT NULL DEFAULT '',
  `IsFreeStorage` int(11) unsigned NOT NULL DEFAULT '0',
  `IsFreePackage` int(11) unsigned NOT NULL DEFAULT '0',
  `IsFreeService` int(11) unsigned NOT NULL DEFAULT '0',
  `Sales` int(11) unsigned NOT NULL DEFAULT '0',
  `Hits` int(11) unsigned NOT NULL DEFAULT '0',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDeleteCard` tinyint(4) NOT NULL,
  PRIMARY KEY (`PrepaidId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_prepaid` ( `PrepaidId`, `CardName`, `CoverImage`, `Price`, `ParValue`, `Description`, `IsFreeStorage`, `IsFreePackage`, `IsFreeService`, `Sales`, `Hits`, `SortId`, `IsDeleteCard` ) VALUES  ('1', '唐僧', '/upfiles/images/20130604014727.jpg', '1000', '3000', 'sdfasfd', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `engrave_prepaid` ( `PrepaidId`, `CardName`, `CoverImage`, `Price`, `ParValue`, `Description`, `IsFreeStorage`, `IsFreePackage`, `IsFreeService`, `Sales`, `Hits`, `SortId`, `IsDeleteCard` ) VALUES  ('2', '悟空', '/upfiles/images/20130604014823.jpg', '2000', '5000', 'sagasgdsd', '0', '0', '0', '0', '0', '0', '0');
INSERT INTO `engrave_prepaid` ( `PrepaidId`, `CardName`, `CoverImage`, `Price`, `ParValue`, `Description`, `IsFreeStorage`, `IsFreePackage`, `IsFreeService`, `Sales`, `Hits`, `SortId`, `IsDeleteCard` ) VALUES  ('3', '猪八戒卡', '/EcShop/admin/engraveuploads/image/20141217/20141217100446_24243.jpg', '1000', '2000', '网购', '0', '0', '0', '0', '0', '1', '1');
DROP TABLE IF EXISTS `engrave_ratetax_table`;
CREATE TABLE `engrave_ratetax_table` (
  `rate_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '税率Id',
  `rate_name` varchar(50) DEFAULT NULL,
  `rate_no` varchar(25) DEFAULT NULL,
  `rate_description` varchar(500) DEFAULT NULL,
  `rate_tax` double DEFAULT NULL,
  `rate_delete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`rate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_ratetax_table` ( `rate_id`, `rate_name`, `rate_no`, `rate_description`, `rate_tax`, `rate_delete` ) VALUES  ('1', '食品、饮料', '01000000', '食品：包括水产品、乳制品、糖制品、调味品，燕窝、冬虫夏草、高丽参、红参、西洋参、人参、鹿茸、阿胶、奶粉及其他保健品、补品等；\r\n饮料：包括茶叶、咖啡等其他非酒精类饮料。', '0.1', '0');
INSERT INTO `engrave_ratetax_table` ( `rate_id`, `rate_name`, `rate_no`, `rate_description`, `rate_tax`, `rate_delete` ) VALUES  ('2', '酒', '02000000', '包括啤酒、葡萄酒（香槟酒）、黄酒、果酒、清酒、米酒、白兰地、威士忌、伏特加、朗姆酒、金酒、白酒、药酒、保健酒、鸡尾酒、利口酒、龙舌蓝、柯迪尔酒、梅子酒等用粮食、水果等含淀粉或糖的物质发酵或配制而制成的含乙醇的酒精饮料。', '0.5', '0');
INSERT INTO `engrave_ratetax_table` ( `rate_id`, `rate_name`, `rate_no`, `rate_description`, `rate_tax`, `rate_delete` ) VALUES  ('3', '烟草', '03000000', '包括卷烟、雪茄烟、烟丝、烟叶、碎烟、烟梗、烟末等。', '0.5', '0');
INSERT INTO `engrave_ratetax_table` ( `rate_id`, `rate_name`, `rate_no`, `rate_description`, `rate_tax`, `rate_delete` ) VALUES  ('4', '纺织品及其制成品', '04000000', '衣着：包括外衣、外裤、内衣裤、衬衫/T恤衫、其他衣着等；\r\n配饰：包括帽子、丝巾、头巾、围巾、领带、腰带、手套、袜子、手帕等；\r\n家纺用品：包括毛毯、被子、枕头、床罩、睡袋、幔帐等；', '0.2', '0');
INSERT INTO `engrave_ratetax_table` ( `rate_id`, `rate_name`, `rate_no`, `rate_description`, `rate_tax`, `rate_delete` ) VALUES  ('5', '123', '123', '123', '0.3', '0');
DROP TABLE IF EXISTS `engrave_services`;
CREATE TABLE `engrave_services` (
  `ServiceId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ModuleId` int(11) NOT NULL,
  `Module` varchar(50) NOT NULL DEFAULT '',
  `ServiceName` varchar(50) NOT NULL DEFAULT '',
  `Description` varchar(255) NOT NULL DEFAULT '',
  `IsDeleteService` tinyint(4) NOT NULL,
  PRIMARY KEY (`ServiceId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('1', '2', '', '特殊加固', '特殊加固包裹系统默认增加10%的加固重量，要收取操作费。奶粉、液体、玻璃制品、电子产品、乐器、中空物品等易损易碎品建议使用，但并不能杜绝运输途中的所有意', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('2', '1', 'order', '加塞报纸', '只是证明发货地点用，并非起到加固作用，要收取操作', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('3', '1', 'order', '取出发票', '取出包裹内的发票，购物小票或订货单及一切文件和广告，目前是免费', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('4', '1', 'order', '去除鞋盒', '去除鞋子的外包装盒，要收取操作费。由于去除原包装而产生鞋子在运输途中的变形和破损，百通不接受理赔', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('5', '1', 'order', '去杂志冰', '去除包裹内的广告杂志，冰袋等重物，目前是免费', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('6', '4', 'value-added', '拍照服务', '按您文字描述的要求进行验货，验货结果含文字描述和5张照', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('7', '4', 'value-added', '退回网', '将货物退回您购物的网站，要收取退货费', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('8', '3', 'storage', '精确分箱', '按您文字描述的要求进行分箱，要收取操作费', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('9', '3', 'storage', '一般分', '按货物重量平均分箱，目前是免费的', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('10', '3', 'storage', '合箱', '合箱包裹数量限制', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('11', '1', 'order', '核对清点服务', '核对发货时物品总件数，大类件数，有小票核对小票，无小票附核对清单。打包工人会在小票上写上单号最后几位数字，并且盖章。这将是客人缺件索赔的唯一证据，日后如果没有使用核对服务和验货服务的客人，发生缺件，百通网将不负责赔付', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('12', '4', 'value-added', '内件清点', '内件清点', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('13', '4', 'value-added', '退货服务', '退货服', '0');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('14', '2', '', '1221', '111', '1');
INSERT INTO `engrave_services` ( `ServiceId`, `ModuleId`, `Module`, `ServiceName`, `Description`, `IsDeleteService` ) VALUES  ('15', '3', 'storage', '111', '111', '1');
DROP TABLE IF EXISTS `engrave_services_setting`;
CREATE TABLE `engrave_services_setting` (
  `Id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ServiceId` int(11) NOT NULL,
  `WarehouseId` int(11) unsigned NOT NULL DEFAULT '0',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `Unit` int(11) unsigned NOT NULL DEFAULT '0',
  `StatusId` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `IsDeleteSetting` tinyint(4) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('1', '1', '1', '0.76', '2', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('2', '2', '3', '0.9', '1', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('4', '11', '1', '1.1', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('8', '1', '3', '0.45', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('9', '7', '1', '12', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('10', '12', '2', '18', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('11', '12', '1', '1.1', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('12', '12', '3', '18', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('13', '7', '2', '20', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('14', '6', '1', '0.9', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('15', '6', '2', '20', '0', '1', '0');
INSERT INTO `engrave_services_setting` ( `Id`, `ServiceId`, `WarehouseId`, `Price`, `Unit`, `StatusId`, `IsDeleteSetting` ) VALUES  ('16', '4', '2', '100', '0', '0', '0');
DROP TABLE IF EXISTS `engrave_servicesgroup`;
CREATE TABLE `engrave_servicesgroup` (
  `sg_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '增值服务分组ID',
  `sg_name` varchar(200) DEFAULT '' COMMENT '分组名称',
  PRIMARY KEY (`sg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_servicesgroup` ( `sg_id`, `sg_name` ) VALUES  ('1', '订单打包');
INSERT INTO `engrave_servicesgroup` ( `sg_id`, `sg_name` ) VALUES  ('2', '合箱');
INSERT INTO `engrave_servicesgroup` ( `sg_id`, `sg_name` ) VALUES  ('3', '分箱');
INSERT INTO `engrave_servicesgroup` ( `sg_id`, `sg_name` ) VALUES  ('4', '增值服务');
DROP TABLE IF EXISTS `engrave_shipping`;
CREATE TABLE `engrave_shipping` (
  `ShippingId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ShippingCode` varchar(30) NOT NULL DEFAULT '',
  `ShippingName` varchar(30) NOT NULL DEFAULT '',
  `ShippingDesc` longtext,
  `UseAgreement` longtext NOT NULL,
  `ShippingTemplate` int(12) NOT NULL,
  `Origin` int(12) NOT NULL,
  `Destination` int(12) NOT NULL,
  `Weight` int(12) unsigned NOT NULL DEFAULT '0',
  `AddWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `HeavyVolume` int(12) unsigned NOT NULL DEFAULT '0',
  `FreeWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `Price` double unsigned NOT NULL DEFAULT '0',
  `AddPrice` double unsigned NOT NULL DEFAULT '0',
  `AddCharge` double NOT NULL,
  `VolumePrice` double unsigned NOT NULL DEFAULT '0',
  `RegPrice` double unsigned NOT NULL DEFAULT '0',
  `Discount` double unsigned NOT NULL DEFAULT '0' COMMENT '折扣',
  `DecPrice` double unsigned NOT NULL DEFAULT '0',
  `MinPrice` double unsigned NOT NULL DEFAULT '0',
  `MinWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `MaxWeight` int(12) unsigned NOT NULL DEFAULT '0',
  `WeightId` int(12) unsigned NOT NULL DEFAULT '0',
  `WeightUnit` char(6) NOT NULL DEFAULT '',
  `CurrencyId` int(12) unsigned NOT NULL DEFAULT '0',
  `CurrencyCode` char(6) NOT NULL DEFAULT '',
  `SupportCOD` int(12) unsigned NOT NULL DEFAULT '0',
  `IsSupPice` tinyint(4) NOT NULL,
  `IsShippingVip` tinyint(4) NOT NULL,
  `IsRegPrice` tinyint(4) NOT NULL,
  `Agreement` tinyint(4) NOT NULL,
  `RegIntegarl` tinyint(4) NOT NULL,
  `StatusId` int(12) unsigned NOT NULL DEFAULT '0',
  `SortId` smallint(6) unsigned NOT NULL DEFAULT '0',
  `IsDeleteShipping` tinyint(4) NOT NULL,
  `s_slpgid` int(12) DEFAULT '0' COMMENT '阶梯价格组ID',
  PRIMARY KEY (`ShippingId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_shipping` ( `ShippingId`, `ShippingCode`, `ShippingName`, `ShippingDesc`, `UseAgreement`, `ShippingTemplate`, `Origin`, `Destination`, `Weight`, `AddWeight`, `HeavyVolume`, `FreeWeight`, `Price`, `AddPrice`, `AddCharge`, `VolumePrice`, `RegPrice`, `Discount`, `DecPrice`, `MinPrice`, `MinWeight`, `MaxWeight`, `WeightId`, `WeightUnit`, `CurrencyId`, `CurrencyCode`, `SupportCOD`, `IsSupPice`, `IsShippingVip`, `IsRegPrice`, `Agreement`, `RegIntegarl`, `StatusId`, `SortId`, `IsDeleteShipping`, `s_slpgid` ) VALUES  ('1', 'JJX', '百通经济线', '<p>\r\n	afasdfasdf\r\n</p>', '', '1', '89000000', '1', '1', '1', '126', '6', '17', '5', '0', '1', '0', '1', '0', '0', '0', '0', '6', 'LBS', '1', '$', '0', '1', '0', '0', '0', '1', '1', '0', '0', '1');
INSERT INTO `engrave_shipping` ( `ShippingId`, `ShippingCode`, `ShippingName`, `ShippingDesc`, `UseAgreement`, `ShippingTemplate`, `Origin`, `Destination`, `Weight`, `AddWeight`, `HeavyVolume`, `FreeWeight`, `Price`, `AddPrice`, `AddCharge`, `VolumePrice`, `RegPrice`, `Discount`, `DecPrice`, `MinPrice`, `MinWeight`, `MaxWeight`, `WeightId`, `WeightUnit`, `CurrencyId`, `CurrencyCode`, `SupportCOD`, `IsSupPice`, `IsShippingVip`, `IsRegPrice`, `Agreement`, `RegIntegarl`, `StatusId`, `SortId`, `IsDeleteShipping`, `s_slpgid` ) VALUES  ('2', 'YXX-A', '百通优先线A', '<p>\r\n	asasdfasf\r\n</p>', '', '1', '89000000', '85000000', '1', '2', '126', '0', '10', '5', '0', '1', '0', '1', '0', '0', '0', '0', '0', '', '1', '', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0');
INSERT INTO `engrave_shipping` ( `ShippingId`, `ShippingCode`, `ShippingName`, `ShippingDesc`, `UseAgreement`, `ShippingTemplate`, `Origin`, `Destination`, `Weight`, `AddWeight`, `HeavyVolume`, `FreeWeight`, `Price`, `AddPrice`, `AddCharge`, `VolumePrice`, `RegPrice`, `Discount`, `DecPrice`, `MinPrice`, `MinWeight`, `MaxWeight`, `WeightId`, `WeightUnit`, `CurrencyId`, `CurrencyCode`, `SupportCOD`, `IsSupPice`, `IsShippingVip`, `IsRegPrice`, `Agreement`, `RegIntegarl`, `StatusId`, `SortId`, `IsDeleteShipping`, `s_slpgid` ) VALUES  ('3', 'YXX-B', '百通优先线B', '<p>\r\n	asdfsdf\r\n</p>', '', '2', '89000000', '86000000', '5', '5', '126', '0', '5', '2.5', '0', '1', '0', '1', '0', '0', '0', '0', '6', 'LBS', '1', '', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0');
INSERT INTO `engrave_shipping` ( `ShippingId`, `ShippingCode`, `ShippingName`, `ShippingDesc`, `UseAgreement`, `ShippingTemplate`, `Origin`, `Destination`, `Weight`, `AddWeight`, `HeavyVolume`, `FreeWeight`, `Price`, `AddPrice`, `AddCharge`, `VolumePrice`, `RegPrice`, `Discount`, `DecPrice`, `MinPrice`, `MinWeight`, `MaxWeight`, `WeightId`, `WeightUnit`, `CurrencyId`, `CurrencyCode`, `SupportCOD`, `IsSupPice`, `IsShippingVip`, `IsRegPrice`, `Agreement`, `RegIntegarl`, `StatusId`, `SortId`, `IsDeleteShipping`, `s_slpgid` ) VALUES  ('5', 'jjbst', '经济百事', 'sasaassa', 'assa', '2', '2', '3', '1', '3', '1', '1', '1', '1', '0', '12', '0', '1', '0', '1', '1', '1', '5', '', '2', '', '0', '1', '1', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `engrave_shipping` ( `ShippingId`, `ShippingCode`, `ShippingName`, `ShippingDesc`, `UseAgreement`, `ShippingTemplate`, `Origin`, `Destination`, `Weight`, `AddWeight`, `HeavyVolume`, `FreeWeight`, `Price`, `AddPrice`, `AddCharge`, `VolumePrice`, `RegPrice`, `Discount`, `DecPrice`, `MinPrice`, `MinWeight`, `MaxWeight`, `WeightId`, `WeightUnit`, `CurrencyId`, `CurrencyCode`, `SupportCOD`, `IsSupPice`, `IsShippingVip`, `IsRegPrice`, `Agreement`, `RegIntegarl`, `StatusId`, `SortId`, `IsDeleteShipping`, `s_slpgid` ) VALUES  ('6', 'wqwqwq', 'qwqw', 'sasas', 'sassas1111', '2', '89000000', '87000000', '1', '1', '1', '1', '1', '1', '2', '1', '0', '1', '0', '1', '1', '1', '6', '', '1', '', '0', '1', '1', '2', '1', '1', '0', '1', '0', '2');
DROP TABLE IF EXISTS `engrave_shipping_declaredvalue`;
CREATE TABLE `engrave_shipping_declaredvalue` (
  `sdv_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '申报价值ID',
  `sdv_shippingid` int(12) DEFAULT NULL COMMENT '运单ID',
  `sdv_minprice` float DEFAULT NULL COMMENT '最小申报价格',
  `sdv_maxprice` float DEFAULT NULL COMMENT '最大申报价格',
  `sdv_price` float DEFAULT NULL COMMENT '申报价格',
  `sdv_ispercent` tinyint(4) DEFAULT NULL COMMENT '是否按百分比',
  `sdv_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`sdv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('1', '0', '0', '0', '3', '0', '0');
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('2', '0', '0', '0', '3', '0', '0');
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('3', '6', '11', '21', '31', '1', '0');
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('4', '6', '12', '13', '14', '1', '0');
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('5', '6', '1', '2', '3', '4', '0');
INSERT INTO `engrave_shipping_declaredvalue` ( `sdv_id`, `sdv_shippingid`, `sdv_minprice`, `sdv_maxprice`, `sdv_price`, `sdv_ispercent`, `sdv_isdelete` ) VALUES  ('7', '6', '4', '3', '21', '1', '1');
DROP TABLE IF EXISTS `engrave_shipping_ladderprice`;
CREATE TABLE `engrave_shipping_ladderprice` (
  `slp_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '阶梯ID',
  `slp_slpgid` int(12) DEFAULT '0' COMMENT '阶梯价格分组ID',
  `slp_minweight` float DEFAULT NULL COMMENT '最小重量',
  `slp_maxweight` float DEFAULT NULL COMMENT '最大重量',
  `slp_price` float DEFAULT NULL COMMENT '运费',
  `slp_serviceprice` float DEFAULT NULL COMMENT '服务费',
  `slp_discount` float DEFAULT '10' COMMENT '折扣',
  `slp_time` int(12) DEFAULT '0' COMMENT '时间',
  `slp_isdelete` tinyint(4) DEFAULT NULL COMMENT '是否删除',
  PRIMARY KEY (`slp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('1', '1', '0', '300', '900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('2', '1', '300', '500', '1100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('3', '1', '500', '600', '1240', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('4', '1', '600', '700', '1380', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('5', '1', '700', '800', '1520', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('6', '1', '800', '900', '1660', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('7', '1', '900', '1000', '1800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('8', '1', '1000', '1250', '2100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('9', '1', '1250', '1500', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('10', '1', '1500', '1750', '2700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('11', '1', '1750', '2000', '3000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('12', '1', '2000', '2500', '3500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('13', '1', '2500', '3000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('14', '1', '3000', '3500', '4500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('15', '1', '3500', '4000', '5000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('16', '1', '4000', '4500', '5500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('17', '1', '4500', '5000', '6000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('18', '1', '5000', '5500', '6500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('19', '1', '5500', '6000', '7000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('20', '1', '6000', '7000', '7800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('21', '1', '7000', '8000', '8600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('22', '1', '8000', '9000', '9400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('23', '1', '9000', '10000', '10200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('24', '1', '10000', '11000', '11000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('25', '1', '11000', '12000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('26', '1', '12000', '13000', '12600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('27', '1', '13000', '14000', '13400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('28', '1', '14000', '15000', '14200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('29', '1', '15000', '16000', '15000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('30', '1', '16000', '17000', '15800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('31', '1', '17000', '18000', '16600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('32', '1', '18000', '19000', '17400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('33', '1', '19000', '20000', '18200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('34', '1', '20000', '21000', '19000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('35', '1', '21000', '22000', '19800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('36', '1', '22000', '23000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('37', '1', '23000', '24000', '21400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('38', '1', '24000', '25000', '22200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('39', '1', '25000', '26000', '23000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('40', '1', '26000', '27000', '23800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('41', '1', '27000', '28000', '24600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('42', '1', '28000', '29000', '25400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('43', '1', '29000', '30000', '26200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('44', '2', '0', '300', '1200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('45', '2', '300', '500', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('46', '2', '500', '600', '1680', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('47', '2', '600', '700', '1860', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('48', '2', '700', '800', '2040', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('49', '2', '800', '900', '2220', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('50', '2', '900', '1000', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('51', '2', '1000', '1250', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('52', '2', '1250', '1500', '3200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('53', '2', '1500', '1750', '3600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('54', '2', '1750', '2000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('55', '2', '2000', '2500', '4700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('56', '2', '2500', '3000', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('57', '2', '3000', '3500', '6100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('58', '2', '3500', '4000', '6800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('59', '2', '4000', '4500', '7500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('60', '2', '4500', '5000', '8200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('61', '2', '5000', '5500', '8900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('62', '2', '5500', '6000', '9600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('63', '2', '6000', '7000', '10700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('64', '2', '7000', '8000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('65', '2', '8000', '9000', '12900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('66', '2', '9000', '10000', '14000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('67', '2', '10000', '11000', '15100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('68', '2', '11000', '12000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('69', '2', '12000', '13000', '17300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('70', '2', '13000', '14000', '18400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('71', '2', '14000', '15000', '19500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('72', '2', '15000', '16000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('73', '2', '16000', '17000', '21700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('74', '2', '17000', '18000', '22800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('75', '2', '18000', '19000', '23900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('76', '2', '19000', '20000', '25000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('77', '2', '20000', '21000', '26100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('78', '2', '21000', '22000', '27200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('79', '2', '22000', '23000', '28300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('80', '2', '23000', '24000', '29400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('81', '2', '24000', '25000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('82', '2', '25000', '26000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('83', '2', '26000', '27000', '32700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('84', '2', '27000', '28000', '33800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('85', '2', '28000', '29000', '34900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('86', '2', '29000', '30000', '36000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('87', '3', '0', '300', '1200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('88', '3', '300', '500', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('89', '3', '500', '600', '1680', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('90', '3', '600', '700', '1860', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('91', '3', '700', '800', '2040', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('92', '3', '800', '900', '2220', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('93', '3', '900', '1000', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('94', '3', '1000', '1250', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('95', '3', '1250', '1500', '3200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('96', '3', '1500', '1750', '3600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('97', '3', '1750', '2000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('98', '3', '2000', '2500', '4700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('99', '3', '2500', '3000', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('100', '3', '3000', '3500', '6100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('101', '3', '3500', '4000', '6800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('102', '3', '4000', '4500', '7500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('103', '3', '4500', '5000', '8200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('104', '3', '5000', '5500', '8900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('105', '3', '5500', '6000', '9600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('106', '3', '6000', '7000', '10700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('107', '3', '7000', '8000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('108', '3', '8000', '9000', '12900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('109', '3', '9000', '10000', '14000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('110', '3', '10000', '11000', '15100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('111', '3', '11000', '12000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('112', '3', '12000', '13000', '17300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('113', '3', '13000', '14000', '18400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('114', '3', '14000', '15000', '19500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('115', '3', '15000', '16000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('116', '3', '16000', '17000', '21700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('117', '3', '17000', '18000', '22800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('118', '3', '18000', '19000', '23900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('119', '3', '19000', '20000', '25000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('120', '3', '20000', '21000', '26100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('121', '3', '21000', '22000', '27200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('122', '3', '22000', '23000', '28300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('123', '3', '23000', '24000', '29400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('124', '3', '24000', '25000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('125', '3', '25000', '26000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('126', '3', '26000', '27000', '32700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('127', '3', '27000', '28000', '33800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('128', '3', '28000', '29000', '34900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('129', '3', '29000', '30000', '36000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('130', '4', '0', '300', '1200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('131', '4', '300', '500', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('132', '4', '500', '600', '1680', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('133', '4', '600', '700', '1860', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('134', '4', '700', '800', '2040', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('135', '4', '800', '900', '2220', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('136', '4', '900', '1000', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('137', '4', '1000', '1250', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('138', '4', '1250', '1500', '3200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('139', '4', '1500', '1750', '3600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('140', '4', '1750', '2000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('141', '4', '2000', '2500', '4700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('142', '4', '2500', '3000', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('143', '4', '3000', '3500', '6100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('144', '4', '3500', '4000', '6800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('145', '4', '4000', '4500', '7500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('146', '4', '4500', '5000', '8200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('147', '4', '5000', '5500', '8900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('148', '4', '5500', '6000', '9600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('149', '4', '6000', '7000', '10700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('150', '4', '7000', '8000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('151', '4', '8000', '9000', '12900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('152', '4', '9000', '10000', '14000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('153', '4', '10000', '11000', '15100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('154', '4', '11000', '12000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('155', '4', '12000', '13000', '17300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('156', '4', '13000', '14000', '18400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('157', '4', '14000', '15000', '19500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('158', '4', '15000', '16000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('159', '4', '16000', '17000', '21700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('160', '4', '17000', '18000', '22800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('161', '4', '18000', '19000', '23900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('162', '4', '19000', '20000', '25000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('163', '4', '20000', '21000', '26100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('164', '4', '21000', '22000', '27200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('165', '4', '22000', '23000', '28300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('166', '4', '23000', '24000', '29400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('167', '4', '24000', '25000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('168', '4', '25000', '26000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('169', '4', '26000', '27000', '32700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('170', '4', '27000', '28000', '33800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('171', '4', '28000', '29000', '34900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('172', '4', '29000', '30000', '36000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('173', '5', '0', '300', '1200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('174', '5', '300', '500', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('175', '5', '500', '600', '1680', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('176', '5', '600', '700', '1860', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('177', '5', '700', '800', '2040', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('178', '5', '800', '900', '2220', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('179', '5', '900', '1000', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('180', '5', '1000', '1250', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('181', '5', '1250', '1500', '3200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('182', '5', '1500', '1750', '3600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('183', '5', '1750', '2000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('184', '5', '2000', '2500', '4700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('185', '5', '2500', '3000', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('186', '5', '3000', '3500', '6100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('187', '5', '3500', '4000', '6800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('188', '5', '4000', '4500', '7500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('189', '5', '4500', '5000', '8200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('190', '5', '5000', '5500', '8900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('191', '5', '5500', '6000', '9600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('192', '5', '6000', '7000', '10700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('193', '5', '7000', '8000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('194', '5', '8000', '9000', '12900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('195', '5', '9000', '10000', '14000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('196', '5', '10000', '11000', '15100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('197', '5', '11000', '12000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('198', '5', '12000', '13000', '17300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('199', '5', '13000', '14000', '18400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('200', '5', '14000', '15000', '19500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('201', '5', '15000', '16000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('202', '5', '16000', '17000', '21700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('203', '5', '17000', '18000', '22800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('204', '5', '18000', '19000', '23900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('205', '5', '19000', '20000', '25000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('206', '5', '20000', '21000', '26100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('207', '5', '21000', '22000', '27200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('208', '5', '22000', '23000', '28300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('209', '5', '23000', '24000', '29400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('210', '5', '24000', '25000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('211', '5', '25000', '26000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('212', '5', '26000', '27000', '32700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('213', '5', '27000', '28000', '33800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('214', '5', '28000', '29000', '34900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('215', '5', '29000', '30000', '36000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('216', '6', '0', '300', '1200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('217', '6', '300', '500', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('218', '6', '500', '600', '1680', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('219', '6', '600', '700', '1860', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('220', '6', '700', '800', '2040', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('221', '6', '800', '900', '2220', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('222', '6', '900', '1000', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('223', '6', '1000', '1250', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('224', '6', '1250', '1500', '3200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('225', '6', '1500', '1750', '3600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('226', '6', '1750', '2000', '4000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('227', '6', '2000', '2500', '4700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('228', '6', '2500', '3000', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('229', '6', '3000', '3500', '6100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('230', '6', '3500', '4000', '6800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('231', '6', '4000', '4500', '7500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('232', '6', '4500', '5000', '8200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('233', '6', '5000', '5500', '8900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('234', '6', '5500', '6000', '9600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('235', '6', '6000', '7000', '10700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('236', '6', '7000', '8000', '11800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('237', '6', '8000', '9000', '12900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('238', '6', '9000', '10000', '14000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('239', '6', '10000', '11000', '15100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('240', '6', '11000', '12000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('241', '6', '12000', '13000', '17300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('242', '6', '13000', '14000', '18400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('243', '6', '14000', '15000', '19500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('244', '6', '15000', '16000', '20600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('245', '6', '16000', '17000', '21700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('246', '6', '17000', '18000', '22800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('247', '6', '18000', '19000', '23900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('248', '6', '19000', '20000', '25000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('249', '6', '20000', '21000', '26100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('250', '6', '21000', '22000', '27200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('251', '6', '22000', '23000', '28300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('252', '6', '23000', '24000', '29400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('253', '6', '24000', '25000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('254', '6', '25000', '26000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('255', '6', '26000', '27000', '32700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('256', '6', '27000', '28000', '33800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('257', '6', '28000', '29000', '34900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('258', '6', '29000', '30000', '36000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('259', '7', '0', '300', '1500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('260', '7', '300', '500', '1800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('261', '7', '500', '600', '2000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('262', '7', '600', '700', '2200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('263', '7', '700', '800', '2400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('264', '7', '800', '900', '2600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('265', '7', '900', '1000', '2800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('266', '7', '1000', '1250', '3250', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('267', '7', '1250', '1500', '3700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('268', '7', '1500', '1750', '4150', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('269', '7', '1750', '2000', '4600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('270', '7', '2000', '2500', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('271', '7', '2500', '3000', '6200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('272', '7', '3000', '3500', '7000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('273', '7', '3500', '4000', '7800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('274', '7', '4000', '4500', '8600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('275', '7', '4500', '5000', '9400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('276', '7', '5000', '5500', '10200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('277', '7', '5500', '6000', '11000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('278', '7', '6000', '7000', '12300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('279', '7', '7000', '8000', '13600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('280', '7', '8000', '9000', '14900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('281', '7', '9000', '10000', '16200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('282', '7', '10000', '11000', '17500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('283', '7', '11000', '12000', '18800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('284', '7', '12000', '13000', '20100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('285', '7', '13000', '14000', '21400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('286', '7', '14000', '15000', '22700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('287', '7', '15000', '16000', '24000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('288', '7', '16000', '17000', '25300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('289', '7', '17000', '18000', '26600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('290', '7', '18000', '19000', '27900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('291', '7', '19000', '20000', '29200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('292', '7', '20000', '21000', '30500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('293', '7', '21000', '22000', '31800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('294', '7', '22000', '23000', '33100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('295', '7', '23000', '24000', '34400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('296', '7', '24000', '25000', '35700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('297', '7', '25000', '26000', '37000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('298', '7', '26000', '27000', '38300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('299', '7', '27000', '28000', '39600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('300', '7', '28000', '29000', '40900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('301', '7', '29000', '30000', '42200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('302', '8', '0', '300', '1700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('303', '8', '300', '500', '2100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('304', '8', '500', '600', '2440', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('305', '8', '600', '700', '2780', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('306', '8', '700', '800', '3120', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('307', '8', '800', '900', '3460', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('308', '8', '900', '1000', '3800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('309', '8', '1000', '1250', '4600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('310', '8', '1250', '1500', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('311', '8', '1500', '1750', '6200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('312', '8', '1750', '2000', '7000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('313', '8', '2000', '2500', '8500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('314', '8', '2500', '3000', '10000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('315', '8', '3000', '3500', '11500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('316', '8', '3500', '4000', '13000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('317', '8', '4000', '4500', '14500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('318', '8', '4500', '5000', '16000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('319', '8', '5000', '5500', '17500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('320', '8', '5500', '6000', '19000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('321', '8', '6000', '7000', '21100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('322', '8', '7000', '8000', '23200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('323', '8', '8000', '9000', '25300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('324', '8', '9000', '10000', '27400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('325', '8', '10000', '11000', '29500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('326', '8', '11000', '12000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('327', '8', '12000', '13000', '33700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('328', '8', '13000', '14000', '35800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('329', '8', '14000', '15000', '37900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('330', '8', '15000', '16000', '40000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('331', '8', '16000', '17000', '42100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('332', '8', '17000', '18000', '44200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('333', '8', '18000', '19000', '46300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('334', '8', '19000', '20000', '48400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('335', '8', '20000', '21000', '50500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('336', '8', '21000', '22000', '52600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('337', '8', '22000', '23000', '54700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('338', '8', '23000', '24000', '56800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('339', '8', '24000', '25000', '58900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('340', '8', '25000', '26000', '61000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('341', '8', '26000', '27000', '63100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('342', '8', '27000', '28000', '65200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('343', '8', '28000', '29000', '67300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('344', '8', '29000', '30000', '69400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('345', '9', '0', '300', '1700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('346', '9', '300', '500', '2100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('347', '9', '500', '600', '2440', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('348', '9', '600', '700', '2780', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('349', '9', '700', '800', '3120', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('350', '9', '800', '900', '3460', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('351', '9', '900', '1000', '3800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('352', '9', '1000', '1250', '4600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('353', '9', '1250', '1500', '5400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('354', '9', '1500', '1750', '6200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('355', '9', '1750', '2000', '7000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('356', '9', '2000', '2500', '8500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('357', '9', '2500', '3000', '10000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('358', '9', '3000', '3500', '11500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('359', '9', '3500', '4000', '13000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('360', '9', '4000', '4500', '14500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('361', '9', '4500', '5000', '16000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('362', '9', '5000', '5500', '17500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('363', '9', '5500', '6000', '19000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('364', '9', '6000', '7000', '21100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('365', '9', '7000', '8000', '23200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('366', '9', '8000', '9000', '25300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('367', '9', '9000', '10000', '27400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('368', '9', '10000', '11000', '29500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('369', '9', '11000', '12000', '31600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('370', '9', '12000', '13000', '33700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('371', '9', '13000', '14000', '35800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('372', '9', '14000', '15000', '37900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('373', '9', '15000', '16000', '40000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('374', '9', '16000', '17000', '42100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('375', '9', '17000', '18000', '44200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('376', '9', '18000', '19000', '46300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('377', '9', '19000', '20000', '48400', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('378', '9', '20000', '21000', '50500', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('379', '9', '21000', '22000', '52600', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('380', '9', '22000', '23000', '54700', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('381', '9', '23000', '24000', '56800', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('382', '9', '24000', '25000', '58900', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('383', '9', '25000', '26000', '61000', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('384', '9', '26000', '27000', '63100', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('385', '9', '27000', '28000', '65200', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('386', '9', '28000', '29000', '67300', '0', '9.5', '1427163414', '0');
INSERT INTO `engrave_shipping_ladderprice` ( `slp_id`, `slp_slpgid`, `slp_minweight`, `slp_maxweight`, `slp_price`, `slp_serviceprice`, `slp_discount`, `slp_time`, `slp_isdelete` ) VALUES  ('387', '9', '29000', '30000', '69400', '0', '9.5', '1427163414', '0');
DROP TABLE IF EXISTS `engrave_shipping_ladderprice_group`;
CREATE TABLE `engrave_shipping_ladderprice_group` (
  `slpg_id` int(12) NOT NULL AUTO_INCREMENT,
  `slpg_name` varchar(50) DEFAULT '' COMMENT '名称',
  `slpg_des` varchar(500) DEFAULT NULL COMMENT '备注',
  `slpg_time` int(12) DEFAULT '0' COMMENT '时间',
  `slpg_isdelete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`slpg_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('1', '亚洲', '亚洲', '1426666359', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('2', '大洋洲', '大洋洲', '1426666359', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('3', '北美', '北美', '1426666359', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('4', '中美', '中美', '1427158224', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('5', '中东', '中东', '1427158231', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('6', '近东', '近东', '1427158238', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('7', '欧洲', '欧洲', '1427158245', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('8', '南美', '南美', '1427158251', '0');
INSERT INTO `engrave_shipping_ladderprice_group` ( `slpg_id`, `slpg_name`, `slpg_des`, `slpg_time`, `slpg_isdelete` ) VALUES  ('9', '非洲', '非洲', '1427158258', '0');
DROP TABLE IF EXISTS `engrave_siteclassification`;
CREATE TABLE `engrave_siteclassification` (
  `ClassId` int(12) NOT NULL AUTO_INCREMENT,
  `ClassName` varchar(100) DEFAULT NULL,
  `Logo` varchar(200) DEFAULT NULL,
  `Message` longtext,
  `ParentId` int(11) DEFAULT NULL,
  `SortId` int(11) DEFAULT NULL,
  `ClassIsDelete` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`ClassId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_sitemanage`;
CREATE TABLE `engrave_sitemanage` (
  `SiteId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `ClassId` int(11) unsigned NOT NULL DEFAULT '0',
  `ParenPath` varchar(50) NOT NULL DEFAULT '',
  `SiteName` varchar(50) NOT NULL DEFAULT '',
  `Description` varchar(200) NOT NULL DEFAULT '',
  `Logo` varchar(200) NOT NULL DEFAULT '',
  `SiteUrl` varchar(200) NOT NULL DEFAULT '',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `shopsiteIsDelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`SiteId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_stationinformation`;
CREATE TABLE `engrave_stationinformation` (
  `si_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '站内信息：ID',
  `si_time` int(12) DEFAULT '0' COMMENT '时间',
  `si_content` varchar(500) DEFAULT '' COMMENT '站内消息',
  `si_userid` int(12) DEFAULT '0' COMMENT '用户ID',
  PRIMARY KEY (`si_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `engrave_statucode`;
CREATE TABLE `engrave_statucode` (
  `code_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '代码ID',
  `code_name` varchar(50) DEFAULT NULL COMMENT '代码名称',
  `code_isdelete` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_statucode` ( `code_id`, `code_name`, `code_isdelete` ) VALUES  ('1', '发货/出库', '0');
INSERT INTO `engrave_statucode` ( `code_id`, `code_name`, `code_isdelete` ) VALUES  ('2', '中转', '0');
INSERT INTO `engrave_statucode` ( `code_id`, `code_name`, `code_isdelete` ) VALUES  ('3', '派送中', '0');
INSERT INTO `engrave_statucode` ( `code_id`, `code_name`, `code_isdelete` ) VALUES  ('4', '签收成功', '0');
INSERT INTO `engrave_statucode` ( `code_id`, `code_name`, `code_isdelete` ) VALUES  ('5', '签收失败', '0');
DROP TABLE IF EXISTS `engrave_system_config`;
CREATE TABLE `engrave_system_config` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(12) unsigned NOT NULL DEFAULT '0',
  `code` varchar(30) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `store_range` varchar(255) NOT NULL DEFAULT '',
  `store_dir` varchar(255) NOT NULL DEFAULT '',
  `value` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('1', '0', 'system_basic', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('2', '0', 'system_member', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('3', '0', 'system_order', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('4', '0', 'system_email', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('5', '0', 'system_advert', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('6', '0', 'hidden', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('7', '0', 'system_wechat', 'group', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('101', '1', 's_sitename', 'text', '', '', 'engrave', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('102', '1', 's_sitelogo', 'file', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('103', '1', 's_siteaddress', 'text', '', '', 'engrave', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('104', '1', 's_title', 'text', '', '', 'engrave', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('105', '1', 's_urlrewritter', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('106', '1', 's_indexkey', 'textarea', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('107', '1', 's_sitedescription', 'textarea', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('108', '1', 's_sitekey', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('109', '1', 's_companyname', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('110', '1', 's_connector', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('111', '1', 's_landline', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('112', '1', 's_fax', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('113', '1', 's_phone', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('114', '1', 's_email', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('115', '1', 's_complainmail', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('116', '1', 's_postcode', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('117', '1', 's_connectaddress', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('118', '1', 's_sitebottommessge', 'editor', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('201', '2', 's_member_register', 'select', '0,1', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('202', '2', 's_login', 'select', '0,1,2', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('203', '2', 's_recommend_code', 'text', '', '', '{Number}', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('204', '2', 's_recommend_code_length', 'text', '', '', '11', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('205', '2', 's_storage', 'text', '', '', '{Random}', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('206', '2', 's_random', 'text', '', '', '4', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('207', '2', 's_waterlevel', 'text', '', '', '6', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('208', '2', 's_register_integral', 'text', '', '', '10', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('209', '2', 's_member_popularize', 'select', '0,1,2', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('210', '2', 's_recommend_integral', 'text', '', '', '20', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('211', '2', 's_recommended_integral', 'text', '', '', '10', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('212', '2', 's_staffcode', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('213', '2', 's_cookies_region', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('214', '2', 's_cookies_length', 'text', '', '', '1440', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('215', '2', 's_register_protocol', 'editor', '', '', '<strong>銆�nbsp;鏈珯娉ㄥ唽鏈嶅姟浣跨敤鍗忚&nbsp;-璇峰湪绯荤粺璁剧疆-浼氬憳鐩稿叧涓厤缃�銆�/strong&gt;\r\n<p style=\"font-family:Arial, Verdana, sans-serif;\">\r\n	<br />\r\n<strong>1. 鐗瑰埆鎻愮ず</strong><br />\r\n1.1<br />\r\n鏂版氮缃戞妧鏈紙涓浗锛夋湁闄愬叕鍙�Sina.com Technology (China) Co., Ltd.)鍙婂寳浜柊娴簰鑱斾俊鎭湇鍔℃湁闄愬叕鍙�Beijing SINA Internet Information Service Co. Ltd.)锛堜互涓嬪悎绉扳�鏂版氮鈥濓級鍚屾剰鎸夌収鏈崗璁殑瑙勫畾鍙婂叾涓嶆椂鍙戝竷鐨勬搷浣滆鍒欐彁渚涘熀浜庝簰鑱旂綉浠ュ強绉诲姩缃戠殑鐩稿叧鏈嶅姟锛堜互涓嬬О鈥滅綉缁滄湇鍔♀�锛夛紝涓鸿幏寰楃綉缁滄湇鍔★紝鏈嶅姟浣跨敤浜猴紙浠ヤ笅绉扳�鐢ㄦ埛鈥濓級搴斿綋鍚屾剰鏈崗璁殑鍏ㄩ儴鏉℃骞舵寜鐓ч〉闈笂鐨勬彁绀哄畬鎴愬叏閮ㄧ殑娉ㄥ唽绋嬪簭銆傜敤鎴峰湪杩涜娉ㄥ唽绋嬪簭杩囩▼涓偣鍑烩�鍚屾剰鈥濇寜閽嵆琛ㄧず鐢ㄦ埛瀹屽叏鎺ュ彈鏈崗璁」涓嬬殑鍏ㄩ儴鏉℃銆�br /&gt;\r\n1.2<br />\r\n鐢ㄦ埛娉ㄥ唽鎴愬姛鍚庯紝鏂版氮灏嗙粰浜堟瘡涓敤鎴蜂竴涓敤鎴峰笎鍙峰強鐩稿簲鐨勫瘑鐮侊紝璇ョ敤鎴峰笎鍙峰拰瀵嗙爜鐢辩敤鎴疯礋璐ｄ繚绠★紱鐢ㄦ埛搴斿綋瀵逛互鍏剁敤鎴峰笎鍙疯繘琛岀殑鎵�湁娲诲姩鍜屼簨浠惰礋娉曞緥璐ｄ换銆�br /&gt; <strong>2. 鏈嶅姟鍐呭</strong><br />\r\n2.1<br />\r\n鏂版氮缃戠粶鏈嶅姟鐨勫叿浣撳唴瀹圭敱鏂版氮鏍规嵁瀹為檯鎯呭喌鎻愪緵锛屼緥濡傚崥瀹€�鎾銆佸湪绾块煶涔愩�鎼滅储銆佹墜鏈哄浘鐗囬搩澹颁笅杞姐�浜ゅ弸銆佽鍧�BBS)銆佽亰澶╁銆佺數瀛愰偖浠躲�鍙戣〃鏂伴椈璇勮绛夈�<br />\r\n2.2<br />\r\n鏂版氮鎻愪緵鐨勯儴鍒嗙綉缁滄湇鍔★紙渚嬪鎵嬫満鍥剧墖閾冨０涓嬭浇銆佺數瀛愰偖浠剁瓑锛変负鏀惰垂鐨勭綉缁滄湇鍔★紝鐢ㄦ埛浣跨敤鏀惰垂缃戠粶鏈嶅姟闇�鍚戞柊娴敮浠樹竴瀹氱殑璐圭敤銆傚浜庢敹璐圭殑缃戠粶鏈嶅姟锛屾柊娴細鍦ㄧ敤鎴蜂娇鐢ㄤ箣鍓嶇粰浜堢敤鎴锋槑纭殑鎻愮ず锛屽彧鏈夌敤鎴锋牴鎹彁绀虹‘璁ゅ叾鎰挎剰鏀粯鐩稿叧璐圭敤锛岀敤鎴锋墠鑳戒娇鐢ㄨ绛夋敹璐圭綉缁滄湇鍔°�濡傜敤鎴锋嫆缁濇敮浠樼浉鍏宠垂鐢紝鍒欐柊娴湁鏉冧笉鍚戠敤鎴锋彁渚涜绛夋敹璐圭綉缁滄湇鍔°�<br />\r\n2.3<br />\r\n鐢ㄦ埛鐞嗚В锛屾柊娴粎鎻愪緵鐩稿叧鐨勭綉缁滄湇鍔★紝闄ゆ涔嬪涓庣浉鍏崇綉缁滄湇鍔℃湁鍏崇殑璁惧锛堝涓汉鐢佃剳銆佹墜鏈恒�鍙婂叾浠栦笌鎺ュ叆浜掕仈缃戞垨绉诲姩缃戞湁鍏崇殑瑁呯疆锛夊強鎵�渶鐨勮垂鐢紙濡備负鎺ュ叆浜掕仈缃戣�鏀粯鐨勭數璇濊垂鍙婁笂缃戣垂銆佷负浣跨敤绉诲姩缃戣�鏀粯鐨勬墜鏈鸿垂锛夊潎搴旂敱鐢ㄦ埛鑷璐熸媴銆�br /&gt; <strong>3. 鏈嶅姟鍙樻洿銆佷腑鏂垨缁堟</strong><br />\r\n3.1<br />\r\n閴翠簬缃戠粶鏈嶅姟鐨勭壒娈婃�锛岀敤鎴峰悓鎰忔柊娴湁鏉冮殢鏃跺彉鏇淬�涓柇鎴栫粓姝㈤儴鍒嗘垨鍏ㄩ儴鐨勭綉缁滄湇鍔★紙鍖呮嫭鏀惰垂缃戠粶鏈嶅姟锛夈�濡傚彉鏇淬�涓柇鎴栫粓姝㈢殑缃戠粶鏈嶅姟灞炰簬鍏嶈垂缃戠粶鏈嶅姟锛屾柊娴棤闇��鐭ョ敤鎴凤紝涔熸棤闇�浠讳綍鐢ㄦ埛鎴栦换浣曠涓夋柟鎵挎媴浠讳綍璐ｄ换锛涘鍙樻洿銆佷腑鏂垨缁堟鐨勭綉缁滄湇鍔″睘浜庢敹璐圭綉缁滄湇鍔★紝鏂版氮搴斿綋鍦ㄥ彉鏇淬�涓柇鎴栫粓姝箣鍓嶄簨鍏堥�鐭ョ敤鎴凤紝骞跺簲鍚戝彈褰卞搷鐨勭敤鎴锋彁渚涚瓑鍊肩殑鏇夸唬鎬х殑鏀惰垂缃戠粶鏈嶅姟锛屽鐢ㄦ埛涓嶆効鎰忔帴鍙楁浛浠ｆ�鐨勬敹璐圭綉缁滄湇鍔★紝灏辫鐢ㄦ埛宸茬粡鍚戞柊娴敮浠樼殑鏈嶅姟璐癸紝鏂版氮搴斿綋鎸夌収璇ョ敤鎴峰疄闄呬娇鐢ㄧ浉搴旀敹璐圭綉缁滄湇鍔＄殑鎯呭喌鎵ｉ櫎鐩稿簲鏈嶅姟璐逛箣鍚庡皢鍓╀綑鐨勬湇鍔¤垂閫�繕缁欒鐢ㄦ埛銆�br /&gt;\r\n3.2<br />\r\n鐢ㄦ埛鐞嗚В锛屾柊娴渶瑕佸畾鏈熸垨涓嶅畾鏈熷湴瀵规彁渚涚綉缁滄湇鍔＄殑骞冲彴锛堝浜掕仈缃戠綉绔欍�绉诲姩缃戠粶绛夛級鎴栫浉鍏崇殑璁惧杩涜妫�慨鎴栬�缁存姢锛屽鍥犳绫绘儏鍐佃�閫犳垚鏀惰垂缃戠粶鏈嶅姟鍦ㄥ悎鐞嗘椂闂村唴鐨勪腑鏂紝鏂版氮鏃犻渶涓烘鎵挎媴浠讳綍璐ｄ换锛屼絾鏂版氮搴斿敖鍙兘浜嬪厛杩涜閫氬憡銆�br /&gt;\r\n3.3<br />\r\n濡傚彂鐢熶笅鍒椾换浣曚竴绉嶆儏褰紝鏂版氮鏈夋潈闅忔椂涓柇鎴栫粓姝㈠悜鐢ㄦ埛鎻愪緵鏈崗璁」涓嬬殑缃戠粶鏈嶅姟锛堝寘鎷敹璐圭綉缁滄湇鍔★級鑰屾棤闇�鐢ㄦ埛鎴栦换浣曠涓夋柟鎵挎媴浠讳綍璐ｄ换锛�br /&gt;\r\n3.3.1 鐢ㄦ埛鎻愪緵鐨勪釜浜鸿祫鏂欎笉鐪熷疄锛�br /&gt;\r\n3.3.2 鐢ㄦ埛杩濆弽鏈崗璁腑瑙勫畾鐨勪娇鐢ㄨ鍒欙紱<br />\r\n3.3.3 鐢ㄦ埛鍦ㄤ娇鐢ㄦ敹璐圭綉缁滄湇鍔℃椂鏈寜瑙勫畾鍚戞柊娴敮浠樼浉搴旂殑鏈嶅姟璐广�<br />\r\n3.4<br />\r\n濡傜敤鎴锋敞鍐岀殑鍏嶈垂缃戠粶鏈嶅姟鐨勫笎鍙峰湪浠讳綍杩炵画180鏃ュ唴鏈疄闄呬娇鐢紝鎴栬�鐢ㄦ埛娉ㄥ唽鐨勬敹璐圭綉缁滄湇鍔＄殑甯愬彿鍦ㄥ叾璁㈣喘鐨勬敹璐圭綉缁滄湇鍔＄殑鏈嶅姟鏈熸弧涔嬪悗杩炵画180鏃ュ唴鏈疄闄呬娇鐢紝鍒欐柊娴湁鏉冨垹闄よ甯愬彿骞跺仠姝负璇ョ敤鎴锋彁渚涚浉鍏崇殑缃戠粶鏈嶅姟銆�br /&gt; <strong>4. 浣跨敤瑙勫垯</strong><br />\r\n4.1<br />\r\n鐢ㄦ埛鍦ㄧ敵璇蜂娇鐢ㄦ柊娴綉缁滄湇鍔℃椂锛屽繀椤诲悜鏂版氮鎻愪緵鍑嗙‘鐨勪釜浜鸿祫鏂欙紝濡備釜浜鸿祫鏂欐湁浠讳綍鍙樺姩锛屽繀椤诲強鏃舵洿鏂般�<br />\r\n4.2<br />\r\n鐢ㄦ埛涓嶅簲灏嗗叾甯愬彿銆佸瘑鐮佽浆璁╂垨鍑哄�浜堜粬浜轰娇鐢ㄣ�濡傜敤鎴峰彂鐜板叾甯愬彿閬粬浜洪潪娉曚娇鐢紝搴旂珛鍗抽�鐭ユ柊娴�鍥犻粦瀹㈣涓烘垨鐢ㄦ埛鐨勪繚绠＄枏蹇藉鑷村笎鍙枫�瀵嗙爜閬粬浜洪潪娉曚娇鐢紝鏂版氮涓嶆壙鎷呬换浣曡矗浠汇�<br />\r\n4.3 <br />\r\n鐢ㄦ埛鍚屾剰鏂版氮鏈夋潈鍦ㄦ彁渚涚綉缁滄湇鍔¤繃绋嬩腑浠ュ悇绉嶆柟寮忔姇鏀惧悇绉嶅晢涓氭�骞垮憡鎴栧叾浠栦换浣曠被鍨嬬殑鍟嗕笟淇℃伅锛堝寘鎷絾涓嶉檺浜庡湪鏂版氮缃戠珯鐨勪换浣曢〉闈笂鎶曟斁骞垮憡锛夛紝骞朵笖锛岀敤鎴峰悓鎰忔帴鍙楁柊娴�杩囩數瀛愰偖浠舵垨鍏朵粬鏂瑰紡鍚戠敤鎴峰彂閫佸晢鍝佷績閿�垨鍏朵粬鐩稿叧鍟嗕笟淇℃伅銆�br /&gt;\r\n4.4<br />\r\n鏂版氮闊充箰鍏嶈垂鍦ㄧ嚎璇曞惉鏈嶅姟鏄柊娴厤璐瑰悜鐢ㄦ埛鎻愪緵鐨勬鐗堝湪绾块煶涔愭湇鍔★紝鐢ㄦ埛鍚屾剰鏂版氮鍦ㄦ彁渚涙柊娴煶涔愬厤璐瑰湪绾胯瘯鍚湇鍔℃椂鍙互閫氳繃閫傚綋鏂瑰紡鍦ㄧ浉鍏抽〉闈㈡姇鏀惧晢涓氭�骞垮憡銆�br /&gt;\r\n4.5<br />\r\n瀵逛簬鐢ㄦ埛閫氳繃鏂版氮缃戠粶鏈嶅姟锛堝寘鎷絾涓嶉檺浜庤鍧涖�BBS銆佹柊闂昏瘎璁恒�涓汉瀹跺洯锛変笂浼犲埌鏂版氮缃戠珯涓婂彲鍏紑鑾峰彇鍖哄煙鐨勪换浣曞唴瀹癸紝鐢ㄦ埛鍚屾剰鏂版氮鍦ㄥ叏涓栫晫鑼冨洿鍐呭叿鏈夊厤璐圭殑銆佹案涔呮�鐨勩�涓嶅彲鎾ら攢鐨勩�闈炵嫭瀹剁殑鍜屽畬鍏ㄥ啀璁稿彲鐨勬潈鍒╁拰璁稿彲锛屼互浣跨敤銆佸鍒躲�淇敼銆佹敼缂栥�鍑虹増銆佺炕璇戙�鎹互鍒涗綔琛嶇敓浣滃搧銆佷紶鎾�琛ㄦ紨鍜屽睍绀烘绛夊唴瀹癸紙鏁翠綋鎴栭儴鍒嗭級锛屽拰/鎴栧皢姝ょ瓑鍐呭缂栧叆褰撳墠宸茬煡鐨勬垨浠ュ悗寮�彂鐨勫叾浠栦换浣曞舰寮忕殑浣滃搧銆佸獟浣撴垨鎶�湳涓�<br />\r\n4.6<br />\r\n鐢ㄦ埛鍦ㄤ娇鐢ㄦ柊娴綉缁滄湇鍔¤繃绋嬩腑锛屽繀椤婚伒寰互涓嬪師鍒欙細<br />\r\n4.6.1 閬靛畧涓浗鏈夊叧鐨勬硶寰嬪拰娉曡锛�br /&gt;\r\n4.6.2 閬靛畧鎵�湁涓庣綉缁滄湇鍔℃湁鍏崇殑缃戠粶鍗忚銆佽瀹氬拰绋嬪簭锛�br /&gt;\r\n4.6.3 涓嶅緱涓轰换浣曢潪娉曠洰鐨勮�浣跨敤缃戠粶鏈嶅姟绯荤粺锛�br /&gt;\r\n4.6.4 涓嶅緱浠ヤ换浣曞舰寮忎娇鐢ㄦ柊娴綉缁滄湇鍔′镜鐘柊娴殑鍟嗕笟鍒╃泭锛屽寘鎷苟涓嶉檺浜庡彂甯冮潪缁忔柊娴鍙殑鍟嗕笟骞垮憡锛�br /&gt;\r\n4.6.5 涓嶅緱鍒╃敤鏂版氮缃戠粶鏈嶅姟绯荤粺杩涜浠讳綍鍙兘瀵逛簰鑱旂綉鎴栫Щ鍔ㄧ綉姝ｅ父杩愯浆閫犳垚涓嶅埄褰卞搷鐨勮涓猴紱<br />\r\n4.6.6 涓嶅緱鍒╃敤鏂版氮鎻愪緵鐨勭綉缁滄湇鍔′笂浼犮�灞曠ず鎴栦紶鎾换浣曡櫄鍋囩殑銆侀獨鎵版�鐨勩�涓激浠栦汉鐨勩�杈遍獋鎬х殑銆佹亹鍚撴�鐨勩�搴镐織娣Ы鐨勬垨鍏朵粬浠讳綍闈炴硶鐨勪俊鎭祫鏂欙紱<br />\r\n4.6.7 涓嶅緱渚电姱鍏朵粬浠讳綍绗笁鏂圭殑涓撳埄鏉冦�钁椾綔鏉冦�鍟嗘爣鏉冦�鍚嶈獕鏉冩垨鍏朵粬浠讳綍鍚堟硶鏉冪泭锛�br /&gt;\r\n4.6.8 涓嶅緱鍒╃敤鏂版氮缃戠粶鏈嶅姟绯荤粺杩涜浠讳綍涓嶅埄浜庢柊娴殑琛屼负锛�br /&gt;\r\n4.7<br />\r\n鏂版氮鏈夋潈瀵圭敤鎴蜂娇鐢ㄦ柊娴綉缁滄湇鍔＄殑鎯呭喌杩涜瀹℃煡鍜岀洃鐫�鍖呮嫭浣嗕笉闄愪簬瀵圭敤鎴峰瓨鍌ㄥ湪鏂版氮鐨勫唴瀹硅繘琛屽鏍�锛屽鐢ㄦ埛鍦ㄤ娇鐢ㄧ綉缁滄湇鍔℃椂杩濆弽浠讳綍涓婅堪瑙勫畾锛屾柊娴垨鍏舵巿鏉冪殑浜烘湁鏉冭姹傜敤鎴锋敼姝ｆ垨鐩存帴閲囧彇涓�垏蹇呰鐨勬帾鏂斤紙鍖呮嫭浣嗕笉闄愪簬鏇存敼鎴栧垹闄ょ敤鎴峰紶璐寸殑鍐呭绛夈�鏆傚仠鎴栫粓姝㈢敤鎴蜂娇鐢ㄧ綉缁滄湇鍔＄殑鏉冨埄锛変互鍑忚交鐢ㄦ埛涓嶅綋琛屼负閫犳垚鐨勫奖鍝嶃�<br />\r\n4.8<br />\r\n鏂版氮閽堝鏌愪簺鐗瑰畾鐨勬柊娴綉缁滄湇鍔＄殑浣跨敤閫氳繃鍚勭鏂瑰紡锛堝寘鎷絾涓嶉檺浜庣綉椤靛叕鍛娿�鐢靛瓙閭欢銆佺煭淇℃彁閱掔瓑锛変綔鍑虹殑浠讳綍澹版槑銆侀�鐭ャ�璀︾ず绛夊唴瀹硅涓烘湰鍗忚鐨勪竴閮ㄥ垎锛岀敤鎴峰浣跨敤璇ョ瓑鏂版氮缃戠粶鏈嶅姟锛岃涓虹敤鎴峰悓鎰忚绛夊０鏄庛�閫氱煡銆佽绀虹殑鍐呭銆�br /&gt; <strong>5. 鐭ヨ瘑浜ф潈</strong><br />\r\n5.1<br />\r\n鏂版氮鎻愪緵鐨勭綉缁滄湇鍔′腑鍖呭惈鐨勪换浣曟枃鏈�鍥剧墖銆佸浘褰€�闊抽鍜�鎴栬棰戣祫鏂欏潎鍙楃増鏉冦�鍟嗘爣鍜�鎴栧叾瀹冭储浜ф墍鏈夋潈娉曞緥鐨勪繚鎶わ紝鏈粡鐩稿叧鏉冨埄浜哄悓鎰忥紝涓婅堪璧勬枡鍧囦笉寰楀湪浠讳綍濯掍綋鐩存帴鎴栭棿鎺ュ彂甯冦�鎾斁銆佸嚭浜庢挱鏀炬垨鍙戝竷鐩殑鑰屾敼鍐欐垨鍐嶅彂琛岋紝鎴栬�琚敤浜庡叾浠栦换浣曞晢涓氱洰鐨勩�鎵�湁杩欎簺璧勬枡鎴栬祫鏂欑殑浠讳綍閮ㄥ垎浠呭彲浣滀负绉佷汉鍜岄潪鍟嗕笟鐢ㄩ�鑰屼繚瀛樺湪鏌愬彴璁＄畻鏈哄唴銆傛柊娴笉灏辩敱涓婅堪璧勬枡浜х敓鎴栧湪浼犻�鎴栭�浜ゅ叏閮ㄦ垨閮ㄥ垎涓婅堪璧勬枡杩囩▼涓骇鐢熺殑寤惰銆佷笉鍑嗙‘銆侀敊璇拰閬楁紡鎴栦粠涓骇鐢熸垨鐢辨浜х敓鐨勪换浣曟崯瀹宠禂鍋匡紝浠ヤ换浣曞舰寮忥紝鍚戠敤鎴锋垨浠讳綍绗笁鏂硅礋璐ｃ�<br />\r\n5.2<br />\r\n鏂版氮涓烘彁渚涚綉缁滄湇鍔¤�浣跨敤鐨勪换浣曡蒋浠讹紙鍖呮嫭浣嗕笉闄愪簬杞欢涓墍鍚殑浠讳綍鍥捐薄銆佺収鐗囥�鍔ㄧ敾銆佸綍鍍忋�褰曢煶銆侀煶涔愩�鏂囧瓧鍜岄檮鍔犵▼搴忋�闅忛檮鐨勫府鍔╂潗鏂欙級鐨勪竴鍒囨潈鍒╁潎灞炰簬璇ヨ蒋浠剁殑钁椾綔鏉冧汉锛屾湭缁忚杞欢鐨勮憲浣滄潈浜鸿鍙紝鐢ㄦ埛涓嶅緱瀵硅杞欢杩涜鍙嶅悜宸ョ▼锛坮everse engineer锛夈�鍙嶅悜缂栬瘧锛坉ecompile锛夋垨鍙嶆眹缂栵紙disassemble锛夈�<br />\r\n<strong>6. 闅愮淇濇姢</strong><br />\r\n6.1<br />\r\n淇濇姢鐢ㄦ埛闅愮鏄柊娴殑涓�」鍩烘湰鏀跨瓥锛屾柊娴繚璇佷笉瀵瑰鍏紑鎴栧悜绗笁鏂规彁渚涘崟涓敤鎴风殑娉ㄥ唽璧勬枡鍙婄敤鎴峰湪浣跨敤缃戠粶鏈嶅姟鏃跺瓨鍌ㄥ湪鏂版氮鐨勯潪鍏紑鍐呭锛屼絾涓嬪垪鎯呭喌闄ゅ锛�br /&gt;\r\n6.1.1 浜嬪厛鑾峰緱鐢ㄦ埛鐨勬槑纭巿鏉冿紱<br />\r\n6.1.2 鏍规嵁鏈夊叧鐨勬硶寰嬫硶瑙勮姹傦紱<br />\r\n6.1.3 鎸夌収鐩稿叧鏀垮簻涓荤閮ㄩ棬鐨勮姹傦紱<br />\r\n6.1.4 涓虹淮鎶ょぞ浼氬叕浼楃殑鍒╃泭锛�br /&gt;\r\n6.1.5 涓虹淮鎶ゆ柊娴殑鍚堟硶鏉冪泭銆�br /&gt;\r\n6.2<br />\r\n鏂版氮鍙兘浼氫笌绗笁鏂瑰悎浣滃悜鐢ㄦ埛鎻愪緵鐩稿叧鐨勭綉缁滄湇鍔★紝鍦ㄦ鎯呭喌涓嬶紝濡傝绗笁鏂瑰悓鎰忔壙鎷呬笌鏂版氮鍚岀瓑鐨勪繚鎶ょ敤鎴烽殣绉佺殑璐ｄ换锛屽垯鏂版氮鏈夋潈灏嗙敤鎴风殑娉ㄥ唽璧勬枡绛夋彁渚涚粰璇ョ涓夋柟銆�br /&gt;\r\n6.3<br />\r\n鍦ㄤ笉閫忛湶鍗曚釜鐢ㄦ埛闅愮璧勬枡鐨勫墠鎻愪笅锛屾柊娴湁鏉冨鏁翠釜鐢ㄦ埛鏁版嵁搴撹繘琛屽垎鏋愬苟瀵圭敤鎴锋暟鎹簱杩涜鍟嗕笟涓婄殑鍒╃敤銆�br /&gt; <strong>7. 鍏嶈矗澹版槑</strong><br />\r\n7.1<br />\r\n鐢ㄦ埛鏄庣‘鍚屾剰鍏朵娇鐢ㄦ柊娴綉缁滄湇鍔℃墍瀛樺湪鐨勯闄╁皢瀹屽叏鐢卞叾鑷繁鎵挎媴锛涘洜鍏朵娇鐢ㄦ柊娴綉缁滄湇鍔¤�浜х敓鐨勪竴鍒囧悗鏋滀篃鐢卞叾鑷繁鎵挎媴锛屾柊娴鐢ㄦ埛涓嶆壙鎷呬换浣曡矗浠汇�<br />\r\n7.2<br />\r\n鏂版氮涓嶆媴淇濈綉缁滄湇鍔′竴瀹氳兘婊¤冻鐢ㄦ埛鐨勮姹傦紝涔熶笉鎷呬繚缃戠粶鏈嶅姟涓嶄細涓柇锛屽缃戠粶鏈嶅姟鐨勫強鏃舵�銆佸畨鍏ㄦ�銆佸噯纭�涔熼兘涓嶄綔鎷呬繚銆�br /&gt;\r\n7.3<br />\r\n鏂版氮涓嶄繚璇佷负鍚戠敤鎴锋彁渚涗究鍒╄�璁剧疆鐨勫閮ㄩ摼鎺ョ殑鍑嗙‘鎬у拰瀹屾暣鎬э紝鍚屾椂锛屽浜庤绛夊閮ㄩ摼鎺ユ寚鍚戠殑涓嶇敱鏂版氮瀹為檯鎺у埗鐨勪换浣曠綉椤典笂鐨勫唴瀹癸紝鏂版氮涓嶆壙鎷呬换浣曡矗浠汇�<br />\r\n7.4<br />\r\n瀵逛簬鍥犱笉鍙姉鍔涙垨鏂版氮涓嶈兘鎺у埗鐨勫師鍥犻�鎴愮殑缃戠粶鏈嶅姟涓柇鎴栧叾瀹冪己闄凤紝鏂版氮涓嶆壙鎷呬换浣曡矗浠伙紝浣嗗皢灏藉姏鍑忓皯鍥犳鑰岀粰鐢ㄦ埛閫犳垚鐨勬崯澶卞拰褰卞搷銆�br /&gt;\r\n7.5<br />\r\n鐢ㄦ埛鍚屾剰锛屽浜庢柊娴悜鐢ㄦ埛鎻愪緵鐨勪笅鍒椾骇鍝佹垨鑰呮湇鍔＄殑璐ㄩ噺缂洪櫡鏈韩鍙婂叾寮曞彂鐨勪换浣曟崯澶憋紝鏂版氮鏃犻渶鎵挎媴浠讳綍璐ｄ换锛�br /&gt;\r\n7.5.1 鏂版氮鍚戠敤鎴峰厤璐规彁渚涚殑鍚勯」缃戠粶鏈嶅姟锛�br /&gt;\r\n7.5.2 鏂版氮鍚戠敤鎴疯禒閫佺殑浠讳綍浜у搧鎴栬�鏈嶅姟锛�br /&gt;\r\n7.5.3 鏂版氮鍚戞敹璐圭綉缁滄湇鍔＄敤鎴烽檮璧犵殑鍚勭浜у搧鎴栬�鏈嶅姟銆�br /&gt; <br />\r\n<strong>8. 杩濈害璧斿伩</strong><br />\r\n8.1<br />\r\n濡傚洜鏂版氮杩濆弽鏈夊叧娉曞緥銆佹硶瑙勬垨鏈崗璁」涓嬬殑浠讳綍鏉℃鑰岀粰鐢ㄦ埛閫犳垚鎹熷け锛屾柊娴悓鎰忔壙鎷呯敱姝ら�鎴愮殑鎹熷璧斿伩璐ｄ换銆�br /&gt;\r\n8.2<br />\r\n鐢ㄦ埛鍚屾剰淇濋殰鍜岀淮鎶ゆ柊娴強鍏朵粬鐢ㄦ埛鐨勫埄鐩婏紝濡傚洜鐢ㄦ埛杩濆弽鏈夊叧娉曞緥銆佹硶瑙勬垨鏈崗璁」涓嬬殑浠讳綍鏉℃鑰岀粰鏂版氮鎴栦换浣曞叾浠栫涓変汉閫犳垚鎹熷け锛岀敤鎴峰悓鎰忔壙鎷呯敱姝ら�鎴愮殑鎹熷璧斿伩璐ｄ换銆�br /&gt; <strong>9. 鍗忚淇敼</strong><br />\r\n9.1<br />\r\n鏂版氮鏈夋潈闅忔椂淇敼鏈崗璁殑浠讳綍鏉℃锛屼竴鏃︽湰鍗忚鐨勫唴瀹瑰彂鐢熷彉鍔紝鏂版氮灏嗕細鐩存帴鍦ㄦ柊娴綉绔欎笂鍏竷淇敼涔嬪悗鐨勫崗璁唴瀹癸紝璇ュ叕甯冭涓鸿涓烘柊娴凡缁忛�鐭ョ敤鎴蜂慨鏀瑰唴瀹广�鏂版氮涔熷彲閫氳繃鍏朵粬閫傚綋鏂瑰紡鍚戠敤鎴锋彁绀轰慨鏀瑰唴瀹广�<br />\r\n9.2<br />\r\n濡傛灉涓嶅悓鎰忔柊娴鏈崗璁浉鍏虫潯娆炬墍鍋氱殑淇敼锛岀敤鎴锋湁鏉冨仠姝娇鐢ㄧ綉缁滄湇鍔°�濡傛灉鐢ㄦ埛缁х画浣跨敤缃戠粶鏈嶅姟锛屽垯瑙嗕负鐢ㄦ埛鎺ュ彈鏂版氮瀵规湰鍗忚鐩稿叧鏉℃鎵�仛鐨勪慨鏀广�<br />\r\n<strong>10. 閫氱煡閫佽揪</strong><br />\r\n10.1<br />\r\n鏈崗璁」涓嬫柊娴浜庣敤鎴锋墍鏈夌殑閫氱煡鍧囧彲閫氳繃缃戦〉鍏憡銆佺數瀛愰偖浠躲�鎵嬫満鐭俊鎴栧父瑙勭殑淇′欢浼犻�绛夋柟寮忚繘琛岋紱璇ョ瓑閫氱煡浜庡彂閫佷箣鏃ヨ涓哄凡閫佽揪鏀朵欢浜恒�<br />\r\n10.2 <br />\r\n鐢ㄦ埛瀵逛簬鏂版氮鐨勯�鐭ュ簲褰撻�杩囨柊娴澶栨寮忓叕甯冪殑閫氫俊鍦板潃銆佷紶鐪熷彿鐮併�鐢靛瓙閭欢鍦板潃绛夎仈绯讳俊鎭繘琛岄�杈俱�<br />\r\n<strong>11. 娉曞緥绠¤緰</strong><br />\r\n11.1 <br />\r\n鏈崗璁殑璁㈢珛銆佹墽琛屽拰瑙ｉ噴鍙婁簤璁殑瑙ｅ喅鍧囧簲閫傜敤涓浗娉曞緥骞跺彈涓浗娉曢櫌绠¤緰銆�br /&gt;\r\n11.2<br />\r\n濡傚弻鏂瑰氨鏈崗璁唴瀹规垨鍏舵墽琛屽彂鐢熶换浣曚簤璁紝鍙屾柟搴斿敖閲忓弸濂藉崗鍟嗚В鍐筹紱鍗忓晢涓嶆垚鏃讹紝浠讳綍涓�柟鍧囧彲鍚戞柊娴墍鍦ㄥ湴鐨勪汉姘戞硶闄㈡彁璧疯瘔璁笺�<br />\r\n<strong>12. 鍏朵粬瑙勫畾</strong><br />\r\n12.1<br />\r\n鏈崗璁瀯鎴愬弻鏂瑰鏈崗璁箣绾﹀畾浜嬮」鍙婂叾浠栨湁鍏充簨瀹滅殑瀹屾暣鍗忚锛岄櫎鏈崗璁瀹氱殑涔嬪锛屾湭璧嬩簣鏈崗璁悇鏂瑰叾浠栨潈鍒┿�<br />\r\n12.2<br />\r\n濡傛湰鍗忚涓殑浠讳綍鏉℃鏃犺鍥犱綍绉嶅師鍥犲畬鍏ㄦ垨閮ㄥ垎鏃犳晥鎴栦笉鍏锋湁鎵ц鍔涳紝鏈崗璁殑鍏朵綑鏉℃浠嶅簲鏈夋晥骞朵笖鏈夌害鏉熷姏銆�br /&gt;\r\n12.3 <br />\r\n鏈崗璁腑鐨勬爣棰樹粎涓烘柟渚胯�璁撅紝鍦ㄨВ閲婃湰鍗忚鏃跺簲琚拷鐣ャ�\r\n</p>\r\n</strong>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('216', '2', 's_pay_protocol', 'editor', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('217', '2', 's_withdraw', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('218', '2', 's_shipping_address', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('219', '2', 's_serialnumber', 'text', '', '', '16', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('220', '2', 's_forecastaward', 'text', '', '', '10', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('221', '2', 's_warehouse_maxusers', 'text', '', '', '100', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('301', '3', 's_ordernumberformat', 'text', '', '', '{Time}{Number}', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('302', '3', 's_timeformat', 'text', '', '', 'ymd', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('303', '3', 's_orderwaterlevel', 'text', '', '', '3', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('304', '3', 's_orderflowpath', 'manual', '', '', '1', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('305', '3', 's_waybillformat', 'text', '', '', '{Time}{Number}', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('306', '3', 's_waybilltimeformat', 'text', '', '', 'ymd', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('307', '3', 's_waybillwaterlength', 'text', '', '', '5', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('312', '3', 's_orderautotime', 'text', '', '', '3', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('313', '3', 's_advancescale', 'text', '', '', '0.9', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('314', '3', 's_premiumscale', 'text', '', '', '0.02', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('315', '3', 's_bulkdiscount', 'text', '', '', '1', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('316', '3', 's_servicecharge', 'text', '', '', '1', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('317', '3', 's_canbulkscale', 'text', '', '', '0.01', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('318', '3', 's_maxintegral', 'text', '', '', '10', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('319', '3', 's_precision', 'manual', '0,1,2,3,4,5,6,7,8', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('320', '3', 's_weightunit', 'text', '', '', 'LBS', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('321', '3', 's_integralprice', 'text', '', '', '0.01', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('322', '3', 's_rechargescale', 'text', '', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('323', '3', 's_appraisescale', 'text', '', '', '0', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('324', '3', 's_dialoguescale', 'text', '', '', '6.5', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('325', '3', 's_priceintegral', 'text', '', '', '0.01', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('401', '4', 's_smtpserver', 'text', '', '', 'smtp.126.com', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('402', '4', 's_smtpmail', 'text', '', '', 'zxp1988@126.com', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('403', '4', 's_smtpmailaccount', 'text', '', '', 'zxp1988@126.com', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('404', '4', 's_smtpmailpwd', 'password', '', '', 'lr1989zxp1988', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('405', '4', 's_smtpport', 'text', '', '', '25', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('406', '4', 's_smtpvalidate', 'manual', '', '', '0', '0');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('407', '4', 's_smtpsendmail', 'manual', '', '', 'zhangxingpeng@beikeyili.com', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('501', '5', 's_topadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('502', '5', 's_leftadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('503', '5', 's_bottomadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('504', '5', 's_beforelistadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('505', '5', 's_afterlistadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('506', '5', 's_beforecontentadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('507', '5', 's_contentbottomadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('508', '5', 's_leftcontentadvert', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('509', '5', 's_beforewritten', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('510', '5', 's_aftercontentadvert', 'editor', '', '', '1', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('511', '5', 's_innerwritten', 'editor', '', '', '<p>\r\n	<br />\r\n</p>', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('601', '6', 'integrate_code', 'hidden', '', '', 'engraveweb', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('602', '6', 'integrate_config', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('603', '6', 'hash_code', 'hidden', '', '', '93cca7258ca52ad07b36e47f2baa7685', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('604', '6', 'template', 'hidden', '', '', 'default', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('605', '6', 'install_date', 'hidden', '', '', '1385534808', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('606', '6', 'engrave_version', 'hidden', '', '', 'v2.7.3', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('607', '6', 'sms_user_name', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('608', '6', 'sms_password', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('609', '6', 'sms_auth_str', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('610', '6', 'sms_domain', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('611', '6', 'sms_count', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('612', '6', 'sms_total_money', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('613', '6', 'sms_balance', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('614', '6', 'sms_last_request', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('616', '6', 'affiliate', 'hidden', '', '', 'a:3:{s:6:\"config\";a:7:{s:6:\"expire\";d:24;s:11:\"expire_unit\";s:4:\"hour\";s:11:\"separate_by\";i:0;s:15:\"level_point_all\";s:2:\"5%\";s:15:\"level_money_all\";s:2:\"1%\";s:18:\"level_register_all\";i:2;s:17:\"level_register_up\";i:60;}s:4:\"item\";a:4:{i:0;a:2:{s:11:\"level_point\";s:3:\"60%\";s:11:\"level_money\";s:3:\"60%\";}i:1;a:2:{s:11:\"level_point\";s:3:\"30%\";s:11:\"level_money\";s:3:\"30%\";}i:2;a:2:{s:11:\"level_point\";s:2:\"7%\";s:11:\"level_money\";s:2:\"7%\";}i:3;a:2:{s:11:\"level_point\";s:2:\"3%\";s:11:\"level_money\";s:2:\"3%\";}}s:2:\"on\";i:1;}', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('617', '6', 'captcha', 'hidden', '', '', '39', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('618', '6', 'captcha_width', 'hidden', '', '', '100', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('619', '6', 'captcha_height', 'hidden', '', '', '20', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('620', '6', 'sitemap', 'hidden', '', '', 'a:6:{s:19:\"homepage_changefreq\";s:6:\"hourly\";s:17:\"homepage_priority\";s:3:\"0.9\";s:19:\"category_changefreq\";s:6:\"hourly\";s:17:\"category_priority\";s:3:\"0.8\";s:18:\"content_changefreq\";s:6:\"weekly\";s:16:\"content_priority\";s:3:\"0.7\";}', '0');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('621', '6', 'points_rule', 'hidden', '', '', '', '0');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('622', '6', 'flash_theme', 'hidden', '', '', 'dynfocus', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('623', '6', 'stylename', 'hidden', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('624', '6', 'page_size', 'hidden', '', '', '10', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('625', '6', 's_currecy_jpyid', 'hidden', '', '', '1', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('701', '7', 's_wechatappid', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('702', '7', 's_wechatappsecret', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('703', '7', 's_wechaturl', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('704', '7', 's_wechattoken', 'text', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('705', '7', 's_wechatdes', 'textarea', '', '', '', '1');
INSERT INTO `engrave_system_config` ( `id`, `parent_id`, `code`, `type`, `store_range`, `store_dir`, `value`, `sort_order` ) VALUES  ('706', '7', 's_wechatreg', 'text', '', '', '', '1');
DROP TABLE IF EXISTS `engrave_template`;
CREATE TABLE `engrave_template` (
  `temp_id` int(12) NOT NULL AUTO_INCREMENT COMMENT '模板ID',
  `temp_name` varchar(50) DEFAULT '' COMMENT '模板名称',
  `temp_filename` varchar(50) DEFAULT '' COMMENT '文件名称',
  `temp_size` decimal(12,2) DEFAULT '0.00' COMMENT '文件大小',
  `temp_catalog` varchar(10) DEFAULT '',
  `temp_updatetime` int(12) DEFAULT '0' COMMENT '时间',
  `temp_content` longtext COMMENT '内容',
  `temp_delete` tinyint(4) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`temp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_template` ( `temp_id`, `temp_name`, `temp_filename`, `temp_size`, `temp_catalog`, `temp_updatetime`, `temp_content`, `temp_delete` ) VALUES  ('1', 'EMS', 'engrave_print_orders.htm', '0.00', '', '1427586395', '<table style=\"height:40%;\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td width=\"50%\" class=\"blue_border\">\r\n				<table class=\"pad\">\r\n					<tbody>\r\n						<tr>\r\n							<td width=\"20%\" height=\"50px\" class=\"right_bottom\" style=\"text-align:center;\">\r\n								<span style=\"font-size:15pt;color:blue;font-weight:bold;\">FROM</span><br />\r\n<span style=\"font-size:12pt;color:blue;\">Name&amp;Address</span> \r\n							</td>\r\n							<td width=\"30%\" class=\"bottom\">\r\n								<span style=\"font-size:10pt;color:blue;\">受付年月日</span> <span style=\"font-size:10pt;color:blue;\">Date mailed</span><br />\r\n								<table>\r\n									<tbody>\r\n										<tr>\r\n											<td colspan=\"4\">\r\n												<span style=\"font-size:10pt;color:blue;\">年(year)</span> \r\n											</td>\r\n											<td colspan=\"2\">\r\n												<span style=\"font-size:10pt;color:blue;\">月(Month)</span> \r\n											</td>\r\n											<td colspan=\"2\">\r\n												<span style=\"font-size:10pt;color:blue;\">日(Date)</span> \r\n											</td>\r\n										</tr>\r\n										<tr>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n											<td>\r\n											</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td class=\"data\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td>\r\n								<span class=\"data\"></span> \r\n							</td>\r\n							<td>\r\n								<span class=\"data\"></span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td>\r\n								<span class=\"data\"></span> \r\n							</td>\r\n							<td>\r\n								<span class=\"data\"></span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td colspan=\"2\">\r\n								<span class=\"data\"></span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td colspan=\"2\">\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td colspan=\"2\">\r\n								<div class=\"data\">\r\n									<br />\r\n<br />\r\n								</div>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td>\r\n								<span style=\"font-size:10pt;color:blue;\">郵便番号</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Postal code</span> \r\n							</td>\r\n							<td>\r\n								<span style=\"font-size:20pt;color:blue;\">JAPAN</span> \r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n			<td width=\"50%\" class=\"table_right\">\r\n				<table height=\"100%\">\r\n					<tbody>\r\n						<tr>\r\n							<td colspan=\"2\" class=\"top_right\">\r\n								<table style=\"height:100%;\">\r\n									<tbody>\r\n										<tr>\r\n											<td width=\"400px;\" rowspan=\"2\">\r\n												<table>\r\n													<tbody>\r\n														<tr>\r\n															<td>\r\n																<span style=\"font-size:10pt;color:blue;\"> 受付時刻</span> \r\n															</td>\r\n															<td>\r\n															</td>\r\n															<td colspan=\"2\" style=\"text-align:center;\">\r\n																<span style=\"font-size:10pt;color:blue;\">时(Hour)</span> \r\n															</td>\r\n															<td colspan=\"2\" style=\"text-align:center;\">\r\n																<span style=\"font-size:10pt;color:blue;\">分(Minute)</span> \r\n															</td>\r\n														</tr>\r\n														<tr>\r\n															<td width=\"135px;\" rowspan=\"2\">\r\n																<span style=\"font-size:10pt;color:blue;\">Time mailed</span>\r\n															</td>\r\n															<td>\r\n															</td>\r\n															<td>\r\n															</td>\r\n															<td>\r\n															</td>\r\n															<td>\r\n															</td>\r\n															<td>\r\n															</td>\r\n														</tr>\r\n													</tbody>\r\n												</table>\r\n											</td>\r\n											<td width=\"130px;\" style=\"text-align:center;\">\r\n												<span style=\"font-size:8pt;color:blue;\">郵便料金</span> \r\n											</td>\r\n											<td style=\"text-align:center;\">\r\n												<span style=\"font-size:8pt;color:blue;\">随料金</span> \r\n											</td>\r\n										</tr>\r\n										<tr>\r\n											<td style=\"text-align:center;\">\r\n											</td>\r\n											<td style=\"text-align:center;\">\r\n											</td>\r\n										</tr>\r\n										<tr>\r\n											<td rowspan=\"2\">\r\n												<span style=\"font-size:10pt;color:blue;\">総重量</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Total gress weight</span> <span style=\"font-size:10pt;color:blue;\">g</span> \r\n											</td>\r\n											<td colspan=\"2\" style=\"text-align:center;\">\r\n												<span style=\"font-size:8pt;color:blue;\">合&nbsp;計&nbsp;金&nbsp;額&nbsp;&nbsp;Postage paid</span> \r\n											</td>\r\n										</tr>\r\n										<tr>\r\n											<td>\r\n												<span style=\"font-size:10px;color:blue;\"></span>\r\n											</td>\r\n											<td>\r\n												<span style=\"font-size:8pt;color:blue;\">円（yen）</span>\r\n											</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td>\r\n								<span style=\"font-size:15pt;color:blue;\">TO(どこまで)</span> <span style=\"font-size:15pt;color:blue;\">Name&amp;Address</span> \r\n							</td>\r\n							<td class=\"right\">\r\n								<span style=\"font-size:15pt;color:blue;\">都市名&nbsp;&nbsp;City&nbsp;&nbsp;&nbsp;&nbsp;郵便番号&nbsp;&nbsp;Postal code</span> \r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n<!-- ned of 1st row -->\r\n		<tr>\r\n			<td>\r\n				<table height=\"100%\">\r\n					<tbody>\r\n						<tr>\r\n							<td>\r\n								<span style=\"font-size:10pt;color:blue;\">電話番号</span> <span style=\"font-size:10pt;color:blue;\">Telehone No.</span> \r\n							</td>\r\n							<td>\r\n								<span style=\"font-size:10pt;color:blue;\">FAX番号</span> <span style=\"font-size:10pt;color:blue;\">FAX No.</span> \r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n			<td>\r\n				<table height=\"100%\">\r\n					<tbody>\r\n						<tr>\r\n							<td width=\"375px;\">\r\n								<span style=\"font-size:10pt;color:blue;\">国名</span> <span style=\"font-size:10pt;color:blue;\">Country</span> \r\n							</td>\r\n							<td>\r\n								<span style=\"font-size:10pt;color:blue;\">電話番号</span> <span style=\"font-size:10pt;color:blue;\">Telehone No.</span> \r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<table>\r\n					<tbody>\r\n						<tr>\r\n							<td rowspan=\"2\" width=\"350px;\" height=\"60px;\">\r\n								<span style=\"font-size:10pt;color:blue;\">内容物品を詳細に記載</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Detailed description of contents</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">(Detailed descriptionオブコンテンツ)</span> \r\n							</td>\r\n							<td colspan=\"2\" style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">商業的なアイテムのためにだけ</span>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">hs関税番号</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">HS tariff number</span> \r\n							</td>\r\n							<td style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">内容物の産地</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">The origin of content items</span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n			<td>\r\n				<table>\r\n					<tbody>\r\n						<tr>\r\n							<td rowspan=\"2\" width=\"160px;\" height=\"60px;\">\r\n								<span style=\"font-size:15pt;color:blue;\"> 含まれる項目の数</span><br />\r\n<span style=\"font-size:11pt;color:blue;\">Number of items contained</span> \r\n							</td>\r\n							<td colspan=\"2\" width=\"100px;\" style=\"text-align:center;\">\r\n								<span style=\"font-size:15pt;color:blue;\">正味重量</span><br />\r\n<span style=\"font-size:11pt;color:blue;\">Net weight</span><br />\r\n<span style=\"font-size:11pt;color:blue;\">kg</span> <span style=\"font-size:11pt;color:blue;\">g</span> \r\n							</td>\r\n							<td width=\"122px;\" style=\"text-align:center;\">\r\n								<span style=\"font-size:15pt;color:blue;\">内容品と価格</span><br />\r\n<span style=\"font-size:11pt;color:blue;\">Value</span> \r\n							</td>\r\n							<td style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">FAX番号</span> <span style=\"font-size:10pt;color:blue;\">FAX No.</span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td style=\"text-align:center;\">\r\n							</td>\r\n							<td style=\"text-align:center;\">\r\n							</td>\r\n							<td style=\"text-align:center;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td rowspan=\"4\" style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\"> 挿入クロス（x）、もし項目</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Insert a cross (X) , if the item contains</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">赠物</span> <span style=\"font-size:10pt;color:blue;\">商品见本</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">赠物</span> <span style=\"font-size:10pt;color:blue;\">商品见本</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">赠物</span> <span style=\"font-size:10pt;color:blue;\">商品见本</span><br />\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td rowspan=\"2\">\r\n								<span style=\"font-size:10pt;color:blue;\">日本円换算合计(円)</span><br />\r\n<br />\r\n<span style=\"font-size:10pt;color:blue;\">Total Value</span> <span style=\"font-size:10pt;color:blue;\">yen</span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td height=\"30px;\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<table>\r\n					<tbody>\r\n						<tr>\r\n							<td style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">以上のものは危険品</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Total ValueAll the above items is not dangerous goods</span> \r\n							</td>\r\n							<td rowspan=\"2\" style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\"> この部分の数</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">number of this pieces</span><br />\r\n<span style=\"font-size:15pt;color:blue;\">番目</span><br />\r\n<span style=\"font-size:15pt;color:blue;\">個中</span><br />\r\n<span style=\"font-size:10pt;color:blue;\">Total number of pieces</span> \r\n							</td>\r\n						</tr>\r\n						<tr>\r\n							<td style=\"text-align:center;\">\r\n								<span style=\"font-size:10pt;color:blue;\">送付者の署名</span> <span style=\"font-size:10pt;color:blue;\">signature of the sender</span> \r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n			<td style=\"text-align:center;\">\r\n				<img src=\"barcode.php?codebar=BCGcode39&text=1227288332748238\" /> \r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '0');
INSERT INTO `engrave_template` ( `temp_id`, `temp_name`, `temp_filename`, `temp_size`, `temp_catalog`, `temp_updatetime`, `temp_content`, `temp_delete` ) VALUES  ('2', '航空', 'engrave_print_parcel.htm', '0.00', '', '1427587056', '<table align=\"left\" style=\"height:200px;width:820px;margin:10px 0px 0px 10px;\">\r\n	<!--第一列-->\r\n	<tbody>\r\n		<tr>\r\n			<td class=\"td_itemnumber\">\r\n				<span style=\"font-size:10pt;\">プロジェクト番号</span><br />\r\n<span style=\"font-size:10pt;\">Item Number</span> \r\n			</td>\r\n			<td class=\"td_desption\">\r\n				<span style=\"font-size:10pt;\">友情提示：包裹到达时如果有破损少件，请联系派送人员或派件局做CN24破损报</span> <span style=\"font-size:10pt;\">告，请核对重量与单面重量是否一致，不一致可能内件缺损。</span> \r\n			</td>\r\n		</tr>\r\n<!--第二列-->\r\n		<tr>\r\n			<td class=\"td_from\">\r\n				<span style=\"font-size:20pt;color:#008000;\">FROM</span> <span style=\"font-size:10pt;\">(と依頼主  住所·氏名)</span> <span style=\"font-size:10pt;\">Name &amp; Address</span><br />\r\n<!--需要填写的发件人的地址--> <br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<span style=\"font-size:12pt;\">(郵便番号)</span><!--邮编填写--> <span style=\"font-size:12pt;\">(電話番号)</span><!--电话号码填写---> <br />\r\n<span style=\"font-size:12pt;\">Postal Code</span> <span style=\"font-size:15pt;\">JAPAN</span> <span style=\"font-size:12pt;\">Telephone number</span> \r\n			</td>\r\n			<td class=\"td_telehoneandcountry\">\r\n				<div>\r\n				</div>\r\n				<div>\r\n					<div>\r\n						<span style=\"font-size:10pt;\">(電話番号)</span> <span style=\"font-size:10pt;\">Telephone number</span> \r\n					</div>\r\n					<div>\r\n						<span style=\"font-size:10pt;\">(国    名)</span> <span style=\"font-size:10pt;\">Country</span> \r\n					</div>\r\n				</div>\r\n			</td>\r\n		</tr>\r\n<!--第三列-->\r\n		<tr>\r\n			<td colspan=\"2\" class=\"td_goodsdesc\">\r\n				<div>\r\n					<div>\r\n						<table height=\"100%;\">\r\n							<tbody>\r\n								<tr>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td colspan=\"2\">\r\n									</td>\r\n									<td colspan=\"2\">\r\n									</td>\r\n									<td>\r\n									</td>\r\n								</tr>\r\n								<tr>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n									<td>\r\n									</td>\r\n								</tr>\r\n							</tbody>\r\n						</table>\r\n					</div>\r\n					<div>\r\n						<div>\r\n						</div>\r\n						<div>\r\n							222\r\n						</div>\r\n					</div>\r\n				</div>\r\n				<div>\r\n					<div>\r\n						222\r\n					</div>\r\n					<div>\r\n						333\r\n					</div>\r\n				</div>\r\n			</td>\r\n		</tr>\r\n<!--第四列-->\r\n		<tr>\r\n			<td colspan=\"2\" class=\"td_insurance\">\r\n			</td>\r\n		</tr>\r\n<!--第五列-->\r\n		<tr>\r\n			<td class=\"td_note\">\r\n			</td>\r\n			<td class=\"td_signature\">\r\n			</td>\r\n		</tr>\r\n<!--第六列-->\r\n		<tr>\r\n			<td colspan=\"2\" class=\"td_description\">\r\n				<table height=\"100%\">\r\n					<tbody>\r\n						<tr>\r\n							<td class=\"address\">\r\n							</td>\r\n							<td class=\"treat\">\r\n							</td>\r\n							<td class=\"shipping\">\r\n							</td>\r\n							<td>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"right\" style=\"width:230px;margin:10px 0px 0px 10px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"2\" class=\"td_totalweight\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border:1px solid;\">\r\n			</td>\r\n			<td style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border:1px solid;\">\r\n			</td>\r\n			<td style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border:2px solid red;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"2\" style=\"border:1px solid;\">\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<table align=\"right\" style=\"width:230px;margin:10px 0px 0px 10px;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border:1px solid red;\">\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '0');
DROP TABLE IF EXISTS `engrave_warehouse`;
CREATE TABLE `engrave_warehouse` (
  `HouseId` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `AreaId` int(12) unsigned NOT NULL DEFAULT '0',
  `AreaName` varchar(50) NOT NULL DEFAULT '',
  `HouseName` varchar(50) NOT NULL DEFAULT '',
  `HouseCode` varchar(30) NOT NULL DEFAULT '',
  `Title` varchar(50) NOT NULL DEFAULT '',
  `FirstName` varchar(50) NOT NULL DEFAULT '',
  `LastName` varchar(50) NOT NULL DEFAULT '',
  `Address` varchar(200) NOT NULL DEFAULT '',
  `County` varchar(20) NOT NULL,
  `City` varchar(50) NOT NULL DEFAULT '',
  `Province` varchar(50) NOT NULL DEFAULT '',
  `ZipCode` varchar(10) NOT NULL DEFAULT '',
  `Tel` varchar(20) NOT NULL DEFAULT '',
  `Note` varchar(255) NOT NULL DEFAULT '',
  `StorageBM` int(11) unsigned NOT NULL DEFAULT '0',
  `Storage` double unsigned NOT NULL DEFAULT '0',
  `WarehousingBM` int(11) unsigned NOT NULL DEFAULT '0',
  `Warehousing` double unsigned NOT NULL DEFAULT '0',
  `RolloverBM` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '自动销毁',
  `Rollover` double unsigned NOT NULL DEFAULT '0' COMMENT '转仓费',
  `OperateBM` int(11) unsigned NOT NULL DEFAULT '0',
  `Operate` double unsigned NOT NULL DEFAULT '0',
  `UpPackage` double NOT NULL,
  `OutsideCost` double NOT NULL,
  `WeightUnit` varchar(5) NOT NULL,
  `SizeUnit` varchar(5) NOT NULL,
  `VolumeUnit` varchar(5) NOT NULL,
  `CurrencyId` int(11) unsigned NOT NULL DEFAULT '0',
  `CurrencyCode` char(6) NOT NULL DEFAULT '',
  `SortId` int(11) unsigned NOT NULL DEFAULT '0',
  `IsDefault` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `Statue` tinyint(4) NOT NULL,
  `IsDeleteHouse` tinyint(4) NOT NULL,
  PRIMARY KEY (`HouseId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_warehouse` ( `HouseId`, `AreaId`, `AreaName`, `HouseName`, `HouseCode`, `Title`, `FirstName`, `LastName`, `Address`, `County`, `City`, `Province`, `ZipCode`, `Tel`, `Note`, `StorageBM`, `Storage`, `WarehousingBM`, `Warehousing`, `RolloverBM`, `Rollover`, `OperateBM`, `Operate`, `UpPackage`, `OutsideCost`, `WeightUnit`, `SizeUnit`, `VolumeUnit`, `CurrencyId`, `CurrencyCode`, `SortId`, `IsDefault`, `Statue`, `IsDeleteHouse` ) VALUES  ('1', '89000000', '日本', '本站主仓', 'TS', '美国加利福尼亚州旧金山主仓库收货地址', '{firstname}', '{lastname}', '利福尼亚州afdasdf', '', '利福尼亚', '利福尼亚', '4568789', '4567-4564-5546', '', '0', '0', '1', '0.1', '12', '0', '0', '0', '1.23', '2.32', 'LBS', 'm', 'CM', '1', '円', '0', '1', '1', '0');
INSERT INTO `engrave_warehouse` ( `HouseId`, `AreaId`, `AreaName`, `HouseName`, `HouseCode`, `Title`, `FirstName`, `LastName`, `Address`, `County`, `City`, `Province`, `ZipCode`, `Tel`, `Note`, `StorageBM`, `Storage`, `WarehousingBM`, `Warehousing`, `RolloverBM`, `Rollover`, `OperateBM`, `Operate`, `UpPackage`, `OutsideCost`, `WeightUnit`, `SizeUnit`, `VolumeUnit`, `CurrencyId`, `CurrencyCode`, `SortId`, `IsDefault`, `Statue`, `IsDeleteHouse` ) VALUES  ('2', '89000000', '日本', '测试一', 'cs', 'asdf', '{firstname}', '{lastname}', '法国北部巴黎盆地的中央，横跨塞纳河两岸', '巴黎', '巴黎', '法国', '1242354253', '1212421', 'wr2r23', '0', '0', '30', '0.1', '60', '1.23', '0', '0', '3.22', '2.11', 'LBS', 'cm', 'CM', '1', '円', '0', '0', '1', '0');
INSERT INTO `engrave_warehouse` ( `HouseId`, `AreaId`, `AreaName`, `HouseName`, `HouseCode`, `Title`, `FirstName`, `LastName`, `Address`, `County`, `City`, `Province`, `ZipCode`, `Tel`, `Note`, `StorageBM`, `Storage`, `WarehousingBM`, `Warehousing`, `RolloverBM`, `Rollover`, `OperateBM`, `Operate`, `UpPackage`, `OutsideCost`, `WeightUnit`, `SizeUnit`, `VolumeUnit`, `CurrencyId`, `CurrencyCode`, `SortId`, `IsDefault`, `Statue`, `IsDeleteHouse` ) VALUES  ('3', '89000000', '日本', '安徽省合肥市', 'AH', '安徽合肥', '', '', '安徽省合肥市明光', '合肥', '合肥', '安徽', '233002', '0550465464654', '', '0', '0.23', '1', '0.54', '85', '0.54', '0', '0.86', '0.52', '0.45', 'KG', 'cm', 'CM', '1', '円', '0', '0', '1', '0');
DROP TABLE IF EXISTS `engrave_waybillservice`;
CREATE TABLE `engrave_waybillservice` (
  `ords_id` int(12) NOT NULL AUTO_INCREMENT,
  `ords_orderid` int(12) DEFAULT NULL COMMENT '订单ID',
  `ords_serviceid` int(12) DEFAULT NULL COMMENT '服务id',
  `ords_isdelete` tinyint(4) DEFAULT NULL COMMENT '删除标记',
  PRIMARY KEY (`ords_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('1', '11', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('2', '12', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('3', '13', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('4', '14', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('5', '15', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('6', '16', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('7', '3', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('8', '5', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('9', '6', '1', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('10', '33', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('11', '33', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('12', '33', '15', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('13', '34', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('14', '34', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('15', '34', '15', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('16', '35', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('17', '35', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('18', '35', '15', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('19', '36', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('20', '36', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('21', '36', '15', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('22', '37', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('23', '37', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('24', '37', '15', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('25', '40', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('26', '40', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('27', '11', '10', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('28', '11', '13', '0');
INSERT INTO `engrave_waybillservice` ( `ords_id`, `ords_orderid`, `ords_serviceid`, `ords_isdelete` ) VALUES  ('29', '13', '10', '0');
-- END ecshop v2.x SQL Dump Program 
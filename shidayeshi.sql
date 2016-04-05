/*
Navicat MySQL Data Transfer

Source Server         : localhost3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : shidayeshi

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-07-21 11:08:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for fyd_bill
-- ----------------------------
DROP TABLE IF EXISTS `fyd_bill`;
CREATE TABLE `fyd_bill` (
  `billid` int(11) NOT NULL AUTO_INCREMENT,
  `billnum` varchar(255) DEFAULT NULL,
  `shopid` int(11) DEFAULT NULL,
  `shangpinid` int(11) DEFAULT NULL,
  `memberid` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `billstatus` varchar(255) DEFAULT NULL,
  `billinfo` varchar(255) DEFAULT NULL,
  `timeline` datetime DEFAULT NULL,
  `chat` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`billid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_bill
-- ----------------------------
INSERT INTO `fyd_bill` VALUES ('1', 'DD1436786539', '1', '2', '1', '1', '0', '不放辣椒', '2015-07-13 14:38:09', null, null);
INSERT INTO `fyd_bill` VALUES ('2', 'DD1436786570', '1', '3', '2', '2', '1', '不放酱油', '2015-07-13 15:02:25', null, null);
INSERT INTO `fyd_bill` VALUES ('3', 'DD1436786571', '1', '2', '2', '2', '0', '不放葱', '2015-07-13 16:57:29', null, null);
INSERT INTO `fyd_bill` VALUES ('5', 'DD1436865056', '1', '17', '啦啦', '3', '0', '多肉多肉', '2015-07-14 15:43:30', null, null);
INSERT INTO `fyd_bill` VALUES ('6', 'DD1436869687', '2', '1', '啦啦', '4', '0', '4', '2015-07-14 15:46:33', null, null);
INSERT INTO `fyd_bill` VALUES ('7', 'DD1436922174', '3', '10', '啦啦', '3', '0', '323', '2015-07-15 08:20:19', null, null);
INSERT INTO `fyd_bill` VALUES ('8', 'DD1436926875', '7', '18', '啦啦', '3', '0', '3', '2015-07-15 09:15:03', null, null);
INSERT INTO `fyd_bill` VALUES ('9', 'DD1436931675', '2', '1', '啦啦', '2', '0', '22222', '2015-07-15 11:17:19', null, null);
INSERT INTO `fyd_bill` VALUES ('10', 'DD1437448366', '1', '2', '测试', '3', '0', '多放点果子', '2015-07-21 08:47:28', '13045755454', '哈西万达');
INSERT INTO `fyd_bill` VALUES ('11', 'DD1437446005', '2', '1', '测试', '11', '0', '不放辣椒', '2015-07-21 09:35:55', '13245212312', '大西万达1');

-- ----------------------------
-- Table structure for fyd_config
-- ----------------------------
DROP TABLE IF EXISTS `fyd_config`;
CREATE TABLE `fyd_config` (
  `siteid` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(255) DEFAULT NULL,
  `sitetitle` varchar(255) DEFAULT NULL,
  `siteurl` varchar(255) DEFAULT NULL,
  `metadescription` varchar(500) DEFAULT NULL,
  `metakeyword` varchar(500) DEFAULT '',
  `sitecopyright` text,
  `icpcode` varchar(255) DEFAULT NULL,
  `tjcode` text,
  `about` text,
  `contact` text,
  `logoimg` varchar(255) DEFAULT NULL,
  `logowidth` smallint(2) unsigned DEFAULT '0',
  `logoheight` smallint(2) unsigned DEFAULT '0',
  PRIMARY KEY (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_config
-- ----------------------------
INSERT INTO `fyd_config` VALUES ('1', '师大夜市1', '师大夜市', 'http://localhost/index.php', '围棋知识网：提供了大量新闻视频视频等', '围棋,精彩赛事', '2222222222222222222', '黑ICP备12345678号', 'GJnbjghj', '<p>Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等Vgo Chess 主要是给爱好围棋的棋友一个平台，里面有大量的围棋新闻和围棋的精彩视频等</p>\r\n<p><br />\r\n</p>', '<p>业务邮箱：<a href=\"mailto:phpcoo@qq.com\">phpcoo@qq.com</a></p>\r\n<p>&nbsp;</p>\r\n<p>业务 QQ：944811833 Email：<a href=\"mailto:phpcoo@foxmail.com\">phpcoo@foxmail.com</a></p>\r\n<p>&nbsp;</p>\r\n<p>官方技术讨论群</p>\r\n<p>&nbsp;</p>\r\n<p>153722310 OEcms技术交流群（欢迎加入）</p>\r\n<p>&nbsp;</p>\r\n<p>联系地址：广州市天河区天河北路908号（高科大厦）B座</p>\r\n<p>&nbsp;</p>\r\n<p>服务热线：+86 18665731631</p>', '/public/editor/attached/image/20150428/20150428083728_91971.png', '19', '18');

-- ----------------------------
-- Table structure for fyd_member
-- ----------------------------
DROP TABLE IF EXISTS `fyd_member`;
CREATE TABLE `fyd_member` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `membername` varchar(255) DEFAULT NULL,
  `membertel` varchar(255) DEFAULT NULL,
  `memberpic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_member
-- ----------------------------
INSERT INTO `fyd_member` VALUES ('1', '名字12222222', '1320465456', '/Public/editor/attached/image/20150713/20150713013009_77637.png');
INSERT INTO `fyd_member` VALUES ('2', '名字2', '2222222222', '图片');

-- ----------------------------
-- Table structure for fyd_role
-- ----------------------------
DROP TABLE IF EXISTS `fyd_role`;
CREATE TABLE `fyd_role` (
  `roleid` int(11) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`roleid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_role
-- ----------------------------
INSERT INTO `fyd_role` VALUES ('1', '管理员');
INSERT INTO `fyd_role` VALUES ('2', '商户');

-- ----------------------------
-- Table structure for fyd_shangpin
-- ----------------------------
DROP TABLE IF EXISTS `fyd_shangpin`;
CREATE TABLE `fyd_shangpin` (
  `shangpinid` int(11) NOT NULL AUTO_INCREMENT,
  `shangpinname` varchar(255) DEFAULT NULL,
  `shangpinpic` varchar(255) DEFAULT NULL,
  `shangpinmoney` varchar(255) DEFAULT NULL,
  `shangpininfo` varchar(255) DEFAULT NULL,
  `shangpintag` varchar(255) DEFAULT NULL,
  `shangpintype` varchar(255) DEFAULT NULL,
  `shopid` int(11) DEFAULT NULL,
  `shangpindetail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`shangpinid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_shangpin
-- ----------------------------
INSERT INTO `fyd_shangpin` VALUES ('1', '刀削面2', '__PUBLIC__/images/product_11.jpg', '5', '陕西特色产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '推荐,热销', '面食', '2', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('2', '鸡蛋灌饼1', '__PUBLIC__/images/product_13.jpg', '5', '非常好吃产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '推荐,热销', '主食', '1', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('3', '卤肉饭1', '__PUBLIC__/images/product_15.jpg', '10', '23产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '推荐,热销', '主食', '1', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('4', '12321321', '__PUBLIC__/images/product_11.jpg', '2', '2产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '推荐,热销', '主食', '2', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('10', '卤肉饭啊23', '__PUBLIC__/images/product_11.jpg', '1', '1产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '热销,特色', '主食', '3', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('11', '刀削面3', '__PUBLIC__/images/product_11.jpg', '3', '3产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '热销,特色', '面食', '2', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('12', '122', '__PUBLIC__/images/product_13.jpg', '1', '2产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '推荐', '主食', '3', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('13', '刀削面啊啊', '__PUBLIC__/images/product_11.jpg', '1', '1产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '热销', '面食', '2', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('17', 'ccccccccc', '/Public/images/product_11.jpg', '1', '1产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', '', '主食', '1', '__PUBLIC__/editor/attached/image/20150720/20150720063446_86302.jpg');
INSERT INTO `fyd_shangpin` VALUES ('18', '1111111111111111', '__PUBLIC__/images/product_11.jpg', '1', '1产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍产品介绍', ',热销,特色,', '主食', '7', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');
INSERT INTO `fyd_shangpin` VALUES ('19', 'pssss', '/Public/editor/attached/image/20150720/20150720062125_58922.jpg', '123', 'sasdasdsa', ',推荐', '主食', '1', '__PUBLIC__/editor/attached/image/20150720/20150720062132_83292.jpg');

-- ----------------------------
-- Table structure for fyd_shop
-- ----------------------------
DROP TABLE IF EXISTS `fyd_shop`;
CREATE TABLE `fyd_shop` (
  `shopid` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(255) DEFAULT NULL,
  `shopaddress` varchar(255) DEFAULT NULL,
  `shoppic` varchar(255) DEFAULT NULL,
  `shoptel` varchar(255) DEFAULT NULL,
  `shopinfo` varchar(255) DEFAULT NULL,
  `shopstatus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`shopid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_shop
-- ----------------------------
INSERT INTO `fyd_shop` VALUES ('1', '台湾卤肉饭', '哈师大夜市12号摊位', '__PUBLIC__/images/product_13.jpg', '13054879785', '3333333333333333333333333333333333333333333333333333333333333333333', '0');
INSERT INTO `fyd_shop` VALUES ('2', '山西刀削面WE2', '哈师大夜市11号摊位', '__PUBLIC__/images/product_13.jpg', '13054879584', '11111111111111111111111111111111111111111111111111111111111111111111111111111111', '1');
INSERT INTO `fyd_shop` VALUES ('3', '22222', '2', '__PUBLIC__/images/product_13.jpg', '135421321321', '22222222222222222222222222222222222222222222222222222222222222222222222222222222222222', '1');
INSERT INTO `fyd_shop` VALUES ('7', 'aaaaaaaaaa', 'aaaaaa', '__PUBLIC__/images/product_13.jpg', '13587945879', 'aaa111', '1');

-- ----------------------------
-- Table structure for fyd_user
-- ----------------------------
DROP TABLE IF EXISTS `fyd_user`;
CREATE TABLE `fyd_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `groupid` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of fyd_user
-- ----------------------------
INSERT INTO `fyd_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1');
INSERT INTO `fyd_user` VALUES ('3', 'shanghu1', 'e10adc3949ba59abbe56e057f20f883e', '2');

/*
Navicat MySQL Data Transfer

Source Server         : biaosha
Source Server Version : 50554
Source Host           : localhost:3306
Source Database       : biaosha

Target Server Type    : MYSQL
Target Server Version : 50554
File Encoding         : 65001

Date: 2019-08-25 10:31:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `filed`
-- ----------------------------
DROP TABLE IF EXISTS `filed`;
CREATE TABLE `filed` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `youwu` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `dataTime` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of filed
-- ----------------------------

-- ----------------------------
-- Table structure for `setting`
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(10) NOT NULL,
  `type` varchar(155) NOT NULL,
  `dataChange` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'timeout', '30');

-- ----------------------------
-- Table structure for `tongguo`
-- ----------------------------
DROP TABLE IF EXISTS `tongguo`;
CREATE TABLE `tongguo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `youwu` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `dataTime` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `123456` varchar(255) DEFAULT NULL,
  `tangtang` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tongguo
-- ----------------------------

-- ----------------------------
-- Table structure for `upimages`
-- ----------------------------
DROP TABLE IF EXISTS `upimages`;
CREATE TABLE `upimages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `youwu` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `dataTime` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `shenhe` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upimages
-- ----------------------------
INSERT INTO `upimages` VALUES ('1', '../doAction/upload/91b2d6d95eab4af652baa5239b437bb6.jpg', '3XL', '备美套装', '无', '黑色', '', '1566633803', '0');
INSERT INTO `upimages` VALUES ('2', '../doAction/upload/10f7a29090f455aebbe38059f2819aba.jpg', '3XL', '备美套装', '无', '黑色', '', '1566633803', '0');
INSERT INTO `upimages` VALUES ('3', '../doAction/upload/2f74d5a4a5e2298fa0a1525ddf2bc93e.mp4', '3XL', '备美套装', '无', '黑色', '', '1566633803', '0');
INSERT INTO `upimages` VALUES ('4', '../doAction/upload/46de898b2a43e06d3da0919f41d669e1.jpg', '3XL', '水晶款', '无', '雪花白', '', '1566633810', '0');
INSERT INTO `upimages` VALUES ('5', '../doAction/upload/47c973194115f8b7d5da14f7a704b39a.jpg', '3XL', '水晶款', '无', '雪花白', '', '1566633810', '0');
INSERT INTO `upimages` VALUES ('6', '../doAction/upload/cbba343d5d60817c6193f5f80cc7f868.jpg', '3XL', '水晶款', '无', '雪花白', '', '1566633810', '0');
INSERT INTO `upimages` VALUES ('7', '../doAction/upload/1816f5021d8ab36443e1a0c9fc6c6618.jpg', '3XL', '水晶款', '无', '雪花白', '', '1566633810', '0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `pwbagain` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `power` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('6', 'tangtang', '123456789', '', '唐弟江', '4');

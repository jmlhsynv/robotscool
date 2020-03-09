/*
Navicat MySQL Data Transfer

Source Server         : Connect
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : robotscool

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-12-22 20:52:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES ('19', 'ab.jpg', 'upload/ab.jpg');
INSERT INTO `images` VALUES ('20', 'apply.jpg', 'upload/apply.jpg');
INSERT INTO `images` VALUES ('21', 'apply2.jpg', 'upload/apply2.jpg');
INSERT INTO `images` VALUES ('22', 'banner.jpg', 'upload/banner.jpg');
INSERT INTO `images` VALUES ('23', 'c1.jpg', 'upload/c1.jpg');
INSERT INTO `images` VALUES ('24', 'c2.jpg', 'upload/c2.jpg');
INSERT INTO `images` VALUES ('25', 'Artboard2@png.png', 'upload/Artboard2@png.png');
INSERT INTO `images` VALUES ('26', 'Artboard3@png.png', 'upload/Artboard3@png.png');
INSERT INTO `images` VALUES ('27', 'Artboard4@png.png', 'upload/Artboard4@png.png');
INSERT INTO `images` VALUES ('28', 'banner.jpg', 'upload/banner.jpg');
INSERT INTO `images` VALUES ('29', 'g4.jpg', 'upload/g4.jpg');
INSERT INTO `images` VALUES ('30', 'g5.jpg', 'upload/g5.jpg');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'jmlhsynv', '202cb962ac59075b964b07152d234b70');

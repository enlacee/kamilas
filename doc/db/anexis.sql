/*
Navicat MySQL Data Transfer

Source Server         : Connect
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : anexis

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2014-05-22 17:29:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for multi_uploads
-- ----------------------------
DROP TABLE IF EXISTS `multi_uploads`;
CREATE TABLE `multi_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `image` int(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL,
  `type_id` int(1) NOT NULL DEFAULT '1',
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `display_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of multi_uploads
-- ----------------------------
INSERT INTO `multi_uploads` VALUES ('1', '1', '1', '1350486184_447226731_2-impresora-Hp-D1660-Valencia.jpg', '1', 'jpg', '1', '13504861844472267312impresoraHpD1660Valencia', '', '2014-02-15 00:10:30', '0');
INSERT INTO `multi_uploads` VALUES ('2', '1', '1', 'htc-android.jpg', '1', 'jpg', '1', 'htcandroid', '', '2014-02-16 20:43:24', '0');

-- ----------------------------
-- Table structure for paginas
-- ----------------------------
DROP TABLE IF EXISTS `paginas`;
CREATE TABLE `paginas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of paginas
-- ----------------------------
INSERT INTO `paginas` VALUES ('1', 'Embarazo', '\r\n<p>Detalle de la seccion...</p>');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Luis Figuera', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'milindex@gmail.com');

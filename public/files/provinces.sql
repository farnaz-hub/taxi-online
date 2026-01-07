/*
 Navicat Premium Dump SQL

 Source Server         : main-server-negarshops
 Source Server Type    : MariaDB
 Source Server Version : 120002 (12.0.2-MariaDB-ubu2404)
 Source Host           : 127.0.0.1:3306
 Source Schema         : negarshops

 Target Server Type    : MariaDB
 Target Server Version : 120002 (12.0.2-MariaDB-ubu2404)
 File Encoding         : 65001

 Date: 25/11/2025 10:46:31
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of provinces
-- ----------------------------
INSERT INTO `provinces` VALUES (1, 'اردبيل');
INSERT INTO `provinces` VALUES (2, 'اصفهان');
INSERT INTO `provinces` VALUES (3, 'البرز');
INSERT INTO `provinces` VALUES (4, 'ايلام');
INSERT INTO `provinces` VALUES (5, 'آذربايجان شرقي');
INSERT INTO `provinces` VALUES (6, 'آذربايجان غربي');
INSERT INTO `provinces` VALUES (7, 'بوشهر');
INSERT INTO `provinces` VALUES (8, 'تهران');
INSERT INTO `provinces` VALUES (9, 'چهارمحال وبختياري');
INSERT INTO `provinces` VALUES (10, 'خراسان جنوبي');
INSERT INTO `provinces` VALUES (11, 'خراسان رضوي');
INSERT INTO `provinces` VALUES (12, 'خراسان شمالي');
INSERT INTO `provinces` VALUES (13, 'خوزستان');
INSERT INTO `provinces` VALUES (14, 'زنجان');
INSERT INTO `provinces` VALUES (15, 'سمنان');
INSERT INTO `provinces` VALUES (16, 'سيستان وبلوچستان');
INSERT INTO `provinces` VALUES (17, 'فارس');
INSERT INTO `provinces` VALUES (18, 'قزوين');
INSERT INTO `provinces` VALUES (19, 'قم');
INSERT INTO `provinces` VALUES (20, 'كردستان');
INSERT INTO `provinces` VALUES (21, 'كرمان');
INSERT INTO `provinces` VALUES (22, 'كرمانشاه');
INSERT INTO `provinces` VALUES (23, 'كهگيلويه وبويراحمد');
INSERT INTO `provinces` VALUES (24, 'گلستان');
INSERT INTO `provinces` VALUES (25, 'گيلان');
INSERT INTO `provinces` VALUES (26, 'لرستان');
INSERT INTO `provinces` VALUES (27, 'مازندران');
INSERT INTO `provinces` VALUES (28, 'مركزي');
INSERT INTO `provinces` VALUES (29, 'هرمزگان');
INSERT INTO `provinces` VALUES (30, 'همدان');
INSERT INTO `provinces` VALUES (31, 'يزد');

SET FOREIGN_KEY_CHECKS = 1;

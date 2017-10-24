/*
 Navicat Premium Data Transfer

 Source Server         : d
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:33060
 Source Schema         : mediapark

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 24/10/2017 14:23:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for adverts
-- ----------------------------
DROP TABLE IF EXISTS `adverts`;
CREATE TABLE `adverts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NULL DEFAULT NULL,
  `category_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `views` int(10) UNSIGNED NOT NULL,
  `created_at` datetime(0) NOT NULL,
  `updated_at` datetime(0) NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `UNIQ_8C88E777989D9B62`(`slug`) USING BTREE,
  INDEX `IDX_8C88E777A76ED395`(`user_id`) USING BTREE,
  INDEX `IDX_8C88E77712469DE2`(`category_id`) USING BTREE,
  CONSTRAINT `FK_8C88E77712469DE2` FOREIGN KEY (`category_id`) REFERENCES `adverts_categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_8C88E777A76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for adverts_categories
-- ----------------------------
DROP TABLE IF EXISTS `adverts_categories`;
CREATE TABLE `adverts_categories`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IDX_8286D5AAFE54D947`(`group_id`) USING BTREE,
  CONSTRAINT `FK_8286D5AAFE54D947` FOREIGN KEY (`group_id`) REFERENCES `adverts_groups` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of adverts_categories
-- ----------------------------
INSERT INTO `adverts_categories` VALUES (1, 1, 'Cars', 'cars');
INSERT INTO `adverts_categories` VALUES (2, 1, 'Moto', 'moto');
INSERT INTO `adverts_categories` VALUES (3, 1, 'Bicycles', 'bicycles');
INSERT INTO `adverts_categories` VALUES (4, 1, 'Boats', 'boats');
INSERT INTO `adverts_categories` VALUES (5, 1, 'Trucks', 'trucks');
INSERT INTO `adverts_categories` VALUES (6, 2, 'Houses', 'houses');
INSERT INTO `adverts_categories` VALUES (7, 2, 'Flats', 'flats');
INSERT INTO `adverts_categories` VALUES (8, 2, 'Lodging', 'lodging');
INSERT INTO `adverts_categories` VALUES (9, 2, 'Plots', 'plots');
INSERT INTO `adverts_categories` VALUES (10, 2, 'Rental', 'rental');
INSERT INTO `adverts_categories` VALUES (11, 3, 'Job offers', 'job-offers');
INSERT INTO `adverts_categories` VALUES (12, 3, 'Beauty', 'beauty');
INSERT INTO `adverts_categories` VALUES (13, 3, 'Bussiness', 'bussiness');
INSERT INTO `adverts_categories` VALUES (14, 3, 'Events', 'events');
INSERT INTO `adverts_categories` VALUES (15, 4, 'Laptops', 'laptops');
INSERT INTO `adverts_categories` VALUES (16, 4, 'PC\'s', 'pcs');
INSERT INTO `adverts_categories` VALUES (17, 4, 'Mobile phones', 'mobile-phones');
INSERT INTO `adverts_categories` VALUES (18, 4, 'Printers', 'printers');
INSERT INTO `adverts_categories` VALUES (19, 4, 'Games', 'games');
INSERT INTO `adverts_categories` VALUES (20, 4, 'TV\'s', 'tvs');
INSERT INTO `adverts_categories` VALUES (21, 5, 'Women', 'women');
INSERT INTO `adverts_categories` VALUES (22, 5, 'Men', 'men');
INSERT INTO `adverts_categories` VALUES (23, 5, 'Foot-wear', 'foot-wear');
INSERT INTO `adverts_categories` VALUES (24, 5, 'Accesories', 'accesories');
INSERT INTO `adverts_categories` VALUES (25, 5, 'Spec. clothes', 'spec-clothes');

-- ----------------------------
-- Table structure for adverts_groups
-- ----------------------------
DROP TABLE IF EXISTS `adverts_groups`;
CREATE TABLE `adverts_groups`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `icon_class` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of adverts_groups
-- ----------------------------
INSERT INTO `adverts_groups` VALUES (1, 'Transportation', 'transportation', 'fa fa-car');
INSERT INTO `adverts_groups` VALUES (2, 'Real estate', 'real-estate', 'fa fa-home');
INSERT INTO `adverts_groups` VALUES (3, 'Services', 'services', 'fa fa-briefcase');
INSERT INTO `adverts_groups` VALUES (4, 'Electronics', 'electronics', 'fa fa-mobile');
INSERT INTO `adverts_groups` VALUES (5, 'Clothes', 'clothes', 'fa fa-shopping-bag');

-- ----------------------------
-- Table structure for adverts_photos
-- ----------------------------
DROP TABLE IF EXISTS `adverts_photos`;
CREATE TABLE `adverts_photos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NULL DEFAULT NULL,
  `photo_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `photo_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `IDX_F5D23015D07ECCB6`(`advert_id`) USING BTREE,
  CONSTRAINT `FK_F5D23015D07ECCB6` FOREIGN KEY (`advert_id`) REFERENCES `adverts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime(0) NULL DEFAULT NULL,
  `confirmation_token` varchar(180) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password_requested_at` datetime(0) NULL DEFAULT NULL,
  `roles` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `UNIQ_1483A5E992FC23A8`(`username_canonical`) USING BTREE,
  UNIQUE INDEX `UNIQ_1483A5E9A0D96FBF`(`email_canonical`) USING BTREE,
  UNIQUE INDEX `UNIQ_1483A5E9C05FB297`(`confirmation_token`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'gecas', 'gecas', 'geciauskasmarius@gmail.com', 'geciauskasmarius@gmail.com', 1, NULL, '$2y$13$LQCAxEMtxcNafnNjbNkYWOT9gNHhvUNG0/GSnkKOQd6REkHu2zHS6', '2017-10-24 09:30:19', NULL, NULL, 'a:0:{}', '', '');
INSERT INTO `users` VALUES (2, 'admin', 'admin', 'info@mediapark.lt', 'info@mediapark.lt', 1, NULL, '$2y$13$iYkAvWSMcQlO2SxkCSMxIuEx7ZzwKhoqML2m.u/fLL5e1Iwy2kk9e', '2017-10-20 12:55:25', NULL, NULL, 'a:0:{}', '', '');

SET FOREIGN_KEY_CHECKS = 1;

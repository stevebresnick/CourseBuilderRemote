-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 72.167.233.16
-- Generation Time: Jul 22, 2014 at 09:25 AM
-- Server version: 5.5.37
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `texashhb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` VALUES(1, NULL, NULL, NULL, 'controllers', 1, 206);
INSERT INTO `acos` VALUES(2, 1, NULL, NULL, 'Activities', 2, 15);
INSERT INTO `acos` VALUES(3, 2, NULL, NULL, 'index', 3, 4);
INSERT INTO `acos` VALUES(4, 2, NULL, NULL, 'view', 5, 6);
INSERT INTO `acos` VALUES(5, 2, NULL, NULL, 'add', 7, 8);
INSERT INTO `acos` VALUES(6, 2, NULL, NULL, 'edit', 9, 10);
INSERT INTO `acos` VALUES(7, 2, NULL, NULL, 'delete', 11, 12);
INSERT INTO `acos` VALUES(8, 2, NULL, NULL, 'preview', 13, 14);
INSERT INTO `acos` VALUES(9, 1, NULL, NULL, 'ActivitiesResources', 16, 27);
INSERT INTO `acos` VALUES(10, 9, NULL, NULL, 'index', 17, 18);
INSERT INTO `acos` VALUES(11, 9, NULL, NULL, 'view', 19, 20);
INSERT INTO `acos` VALUES(12, 9, NULL, NULL, 'add', 21, 22);
INSERT INTO `acos` VALUES(13, 9, NULL, NULL, 'edit', 23, 24);
INSERT INTO `acos` VALUES(14, 9, NULL, NULL, 'delete', 25, 26);
INSERT INTO `acos` VALUES(15, 1, NULL, NULL, 'ActivityTypes', 28, 29);
INSERT INTO `acos` VALUES(16, 1, NULL, NULL, 'Courses', 30, 49);
INSERT INTO `acos` VALUES(17, 16, NULL, NULL, 'index', 31, 32);
INSERT INTO `acos` VALUES(18, 16, NULL, NULL, 'view', 33, 34);
INSERT INTO `acos` VALUES(19, 16, NULL, NULL, 'add', 35, 36);
INSERT INTO `acos` VALUES(20, 16, NULL, NULL, 'edit', 37, 38);
INSERT INTO `acos` VALUES(21, 16, NULL, NULL, 'delete', 39, 40);
INSERT INTO `acos` VALUES(22, 16, NULL, NULL, 'isAuthorized', 41, 42);
INSERT INTO `acos` VALUES(23, 16, NULL, NULL, 'outline', 43, 44);
INSERT INTO `acos` VALUES(24, 16, NULL, NULL, 'duplicate', 45, 46);
INSERT INTO `acos` VALUES(25, 1, NULL, NULL, 'Discussions', 50, 61);
INSERT INTO `acos` VALUES(26, 25, NULL, NULL, 'index', 51, 52);
INSERT INTO `acos` VALUES(27, 25, NULL, NULL, 'view', 53, 54);
INSERT INTO `acos` VALUES(28, 25, NULL, NULL, 'add', 55, 56);
INSERT INTO `acos` VALUES(29, 25, NULL, NULL, 'edit', 57, 58);
INSERT INTO `acos` VALUES(30, 25, NULL, NULL, 'delete', 59, 60);
INSERT INTO `acos` VALUES(31, 1, NULL, NULL, 'EssentialQuestions', 62, 73);
INSERT INTO `acos` VALUES(32, 31, NULL, NULL, 'index', 63, 64);
INSERT INTO `acos` VALUES(33, 31, NULL, NULL, 'view', 65, 66);
INSERT INTO `acos` VALUES(34, 31, NULL, NULL, 'add', 67, 68);
INSERT INTO `acos` VALUES(35, 31, NULL, NULL, 'edit', 69, 70);
INSERT INTO `acos` VALUES(36, 31, NULL, NULL, 'delete', 71, 72);
INSERT INTO `acos` VALUES(37, 1, NULL, NULL, 'Goals', 74, 85);
INSERT INTO `acos` VALUES(38, 37, NULL, NULL, 'index', 75, 76);
INSERT INTO `acos` VALUES(39, 37, NULL, NULL, 'view', 77, 78);
INSERT INTO `acos` VALUES(40, 37, NULL, NULL, 'add', 79, 80);
INSERT INTO `acos` VALUES(41, 37, NULL, NULL, 'edit', 81, 82);
INSERT INTO `acos` VALUES(42, 37, NULL, NULL, 'delete', 83, 84);
INSERT INTO `acos` VALUES(43, 1, NULL, NULL, 'Groups', 86, 97);
INSERT INTO `acos` VALUES(44, 43, NULL, NULL, 'index', 87, 88);
INSERT INTO `acos` VALUES(45, 43, NULL, NULL, 'view', 89, 90);
INSERT INTO `acos` VALUES(46, 43, NULL, NULL, 'add', 91, 92);
INSERT INTO `acos` VALUES(47, 43, NULL, NULL, 'edit', 93, 94);
INSERT INTO `acos` VALUES(48, 43, NULL, NULL, 'delete', 95, 96);
INSERT INTO `acos` VALUES(49, 1, NULL, NULL, 'Overviews', 98, 109);
INSERT INTO `acos` VALUES(50, 49, NULL, NULL, 'index', 99, 100);
INSERT INTO `acos` VALUES(51, 49, NULL, NULL, 'view', 101, 102);
INSERT INTO `acos` VALUES(52, 49, NULL, NULL, 'add', 103, 104);
INSERT INTO `acos` VALUES(53, 49, NULL, NULL, 'edit', 105, 106);
INSERT INTO `acos` VALUES(54, 49, NULL, NULL, 'delete', 107, 108);
INSERT INTO `acos` VALUES(55, 1, NULL, NULL, 'Pages', 110, 113);
INSERT INTO `acos` VALUES(56, 55, NULL, NULL, 'display', 111, 112);
INSERT INTO `acos` VALUES(57, 1, NULL, NULL, 'Resources', 114, 135);
INSERT INTO `acos` VALUES(58, 57, NULL, NULL, 'index', 115, 116);
INSERT INTO `acos` VALUES(59, 57, NULL, NULL, 'view', 117, 118);
INSERT INTO `acos` VALUES(60, 57, NULL, NULL, 'add', 119, 120);
INSERT INTO `acos` VALUES(61, 57, NULL, NULL, 'edit', 121, 122);
INSERT INTO `acos` VALUES(62, 57, NULL, NULL, 'delete', 123, 124);
INSERT INTO `acos` VALUES(63, 1, NULL, NULL, 'ResourcesSections', 136, 147);
INSERT INTO `acos` VALUES(64, 63, NULL, NULL, 'index', 137, 138);
INSERT INTO `acos` VALUES(65, 63, NULL, NULL, 'view', 139, 140);
INSERT INTO `acos` VALUES(66, 63, NULL, NULL, 'add', 141, 142);
INSERT INTO `acos` VALUES(67, 63, NULL, NULL, 'edit', 143, 144);
INSERT INTO `acos` VALUES(68, 63, NULL, NULL, 'delete', 145, 146);
INSERT INTO `acos` VALUES(69, 1, NULL, NULL, 'ResourcesTypes', 148, 149);
INSERT INTO `acos` VALUES(70, 1, NULL, NULL, 'Scopes', 150, 151);
INSERT INTO `acos` VALUES(71, 1, NULL, NULL, 'Sections', 152, 169);
INSERT INTO `acos` VALUES(72, 71, NULL, NULL, 'index', 153, 154);
INSERT INTO `acos` VALUES(73, 71, NULL, NULL, 'view', 155, 156);
INSERT INTO `acos` VALUES(74, 71, NULL, NULL, 'add', 157, 158);
INSERT INTO `acos` VALUES(75, 71, NULL, NULL, 'edit', 159, 160);
INSERT INTO `acos` VALUES(76, 71, NULL, NULL, 'delete', 161, 162);
INSERT INTO `acos` VALUES(77, 71, NULL, NULL, 'outline', 163, 164);
INSERT INTO `acos` VALUES(78, 71, NULL, NULL, 'preview', 165, 166);
INSERT INTO `acos` VALUES(79, 71, NULL, NULL, 'duplicate', 167, 168);
INSERT INTO `acos` VALUES(80, 1, NULL, NULL, 'Steps', 170, 183);
INSERT INTO `acos` VALUES(81, 80, NULL, NULL, 'index', 171, 172);
INSERT INTO `acos` VALUES(82, 80, NULL, NULL, 'view', 173, 174);
INSERT INTO `acos` VALUES(83, 80, NULL, NULL, 'add', 175, 176);
INSERT INTO `acos` VALUES(84, 80, NULL, NULL, 'edit', 177, 178);
INSERT INTO `acos` VALUES(85, 80, NULL, NULL, 'delete', 179, 180);
INSERT INTO `acos` VALUES(86, 80, NULL, NULL, 'duplicate', 181, 182);
INSERT INTO `acos` VALUES(87, 1, NULL, NULL, 'Users', 184, 203);
INSERT INTO `acos` VALUES(88, 87, NULL, NULL, 'initDB', 185, 186);
INSERT INTO `acos` VALUES(89, 87, NULL, NULL, 'index', 187, 188);
INSERT INTO `acos` VALUES(90, 87, NULL, NULL, 'view', 189, 190);
INSERT INTO `acos` VALUES(91, 87, NULL, NULL, 'add', 191, 192);
INSERT INTO `acos` VALUES(92, 87, NULL, NULL, 'edit', 193, 194);
INSERT INTO `acos` VALUES(93, 87, NULL, NULL, 'delete', 195, 196);
INSERT INTO `acos` VALUES(94, 87, NULL, NULL, 'login', 197, 198);
INSERT INTO `acos` VALUES(95, 87, NULL, NULL, 'logout', 199, 200);
INSERT INTO `acos` VALUES(96, 87, NULL, NULL, 'dashboard', 201, 202);
INSERT INTO `acos` VALUES(97, 1, NULL, NULL, 'AclExtras', 204, 205);
INSERT INTO `acos` VALUES(98, 16, NULL, NULL, 'master', 47, 48);
INSERT INTO `acos` VALUES(99, 57, NULL, NULL, 'addto', 125, 126);
INSERT INTO `acos` VALUES(100, 57, NULL, NULL, 'removefrom', 127, 128);
INSERT INTO `acos` VALUES(101, 57, NULL, NULL, 'brightcove', 129, 130);
INSERT INTO `acos` VALUES(104, 57, NULL, NULL, 'make_session_video', 131, 132);
INSERT INTO `acos` VALUES(106, 57, NULL, NULL, 'add_brightcove', 133, 134);

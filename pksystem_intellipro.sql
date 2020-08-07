-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2020 at 11:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pksystem_intellipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `sequence_no` double NOT NULL,
  `number_of_members` varchar(255) NOT NULL,
  `optimal_completion` varchar(255) NOT NULL,
  `quickest_completion` varchar(255) NOT NULL,
  `late_competion` varchar(255) NOT NULL,
  `decided_completion` varchar(255) NOT NULL,
  `totalcost` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `name`, `project`, `sequence_no`, `number_of_members`, `optimal_completion`, `quickest_completion`, `late_competion`, `decided_completion`, `totalcost`, `created_at`, `updated_at`) VALUES
(2, 'Human resource module', 'projectgmb', 2, '6', '60', '40', '80', '50', 60, 1575893247, 1575893247),
(3, 'Financial Accounting Module', 'ProjectZinara', 3, '12', '120', '90', '135', '50', 500, 1575893360, 1575893360),
(4, 'Procurement Module', 'NSSA', 4, '20', '150', '120', '160', '50', 1200, 1575893416, 1575893416),
(5, 'Technical Module', 'ZIMRA New Tax Regime', 1, '6', '60', '40', '80', '50', 500, 1577794630, 1577794630),
(6, 'Marketing Module', 'ProjectZinara', 5, '20', '80', '65', '100', '50', 2200, 1579768903, 1579768903),
(9, 'Materials management module', 'ZIMRA New Tax Regime', 1, '20', '80', '65', '100', '0', 2200, 1579790852, 1579790852),
(11, 'Financial Accounting Module', 'NRZ', 1, '6', '60', '40', '80', '0', 500, 1583365691, 1583365691),
(12, 'Financial Accounting Module', 'ProjectZinara', 1, '6', '60', '40', '80', '0', 1200, 1583479581, 1583479581),
(13, 'Financial Accounting Module', 'Electronic Commerce Demo', 2, '6', '30', '40', '80', '50', 500, 1591334412, 1591334412),
(14, 'Human resource module', 'Electronic Commerce Demo', 1, '6', '40', '150', '100', '30', 1200, 1591334433, 1591334433),
(15, 'Procurement Module', 'Electronic Commerce Demo', 3, '6', '70', '60', '80', '60', 1000, 1591334459, 1591334459),
(16, 'Financial Accounting Module', 'Project Demo', 1, '6', '70', '80', '60', '1', 1200, 1591355215, 1591355215),
(17, 'Human resource module', 'Project Demo', 2, '20', '40', '150', '100', '1', 1000, 1591355252, 1591355252),
(18, 'Procurement Module', 'Project Demo', 3, '6', '30', '40', '80', '2', 1300, 1591355287, 1591355287),
(20, 'Financial Accounting Module', 'lab test', 1, '6', '120', '90', '160', '0', 1200, 1592874187, 1592874187),
(21, 'Financial Accounting Module', 'test project ', 1, '20', '60', '70', '30', '0', 1200, 1592895194, 1592895194),
(23, 'Financial Accounting Module', 'ProjectZinara', 1, '6', '60', '120', '120', '0', 1200, 1592902427, 1592902427),
(24, 'Financial Accounting Module', 'ProjectZinara', 1, '20', '400', '90', '160', '0', 1200, 1592903293, 1592903293),
(25, 'Financial Accounting Module', 'NSSA ', 1, '20', '400', '90', '160', '0', 1200, 1592903326, 1592903326);

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `online_status` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `message`, `sender_id`, `receiver_id`, `cc`, `online_status`, `created_at`, `updated_at`) VALUES
(2, 'how are you', '1', '5', '0', '1', 1577808101, 1577808101),
(3, 'did you manage to fix the issue', '1', '5', '0', '1', 1577808125, 1577808125),
(4, 'how are you .NO i didnt .but will get back to you soon', '5', '1', '0', '1', 1577808214, 1577808214),
(5, 'kindly inform Mrs Munetsi to  notify the client', '5', '1', '0', '0', 1577808271, 1577808271),
(10, 'okay', '2', '1', '0', '1', 1577816999, 1577816999),
(12, 'hie', '1', '3', '0', '1', 1577817025, 1577817025),
(13, 'hie', '1', '3', '0', '1', 1577817121, 1577817121),
(14, 'hie', '1', '3', '0', '1', 1577817128, 1577817128),
(15, 'hie', '1', '3', '0', '1', 1577817154, 1577817154),
(18, 'Morning', '1', '6', '0', '1', 1577817252, 1577817252),
(19, 'how are you', '1', '6', '0', '1', 1577817260, 1577817260),
(20, 'Good day Sir', '1', '7', '0', '1', 1577817277, 1577817277),
(33, 'ndeupi manje iyeye', '1', '2', '0', '1', 1578249155, 1578249155),
(52, 'good morning', '2', '1', '0', '1', 1578304680, 1578304680),
(55, 'wanted to check with you if you are available tomorrow for the demonstration to the client and the user acceptance testing', '2', '1', '0', '1', 1578304794, 1578304794),
(56, 'am sorry tomorrow I wont be around ', '1', '2', '0', '1', 1578304824, 1578304824),
(57, 'lets reschedule to Monday Morning', '1', '2', '0', '1', 1578305188, 1578305188),
(58, 'And please kindly remind before the day', '1', '2', '0', '1', 1578352225, 1578352225),
(67, 'hi', '2', '1', '0', '1', 1578578566, 1578578566),
(68, 'how are you', '2', '1', '0', '1', 1578578587, 1578578587),
(69, 'personal person', '2', '1', '0', '1', 1578578595, 1578578595),
(70, 'Morning Tariro ', '1', '2', '0', '1', 1578957490, 1578957490),
(74, 'lets finish the project on time', '1', '2', '0', '1', 1578959747, 1578959747),
(77, 'how are you', '1', '2', '0', '1', 1578986997, 1578986997),
(79, 'how are your ', '1', '7', '0', '1', 1578999589, 1578999589),
(80, 'wanted to confirm if doc 102b33 was approved ', '1', '6', '0', '1', 1579036293, 1579036293),
(81, 'wanted to confirm if doc 102b33 was approved ', '1', '6', '0', '1', 1579036293, 1579036293),
(84, 'how are you', '2', '1', '0', '1', 1579094280, 1579094280),
(85, 'am great how is work', '1', '2', '0', '1', 1579094298, 1579094298),
(86, 'how are you', '2', '1', '0', '1', 1579094307, 1579094307),
(87, 'work is fine', '2', '1', '0', '1', 1579094354, 1579094354),
(88, 'am glad to hear that', '1', '2', '0', '1', 1579094412, 1579094412),
(89, 'kkk you', '2', '1', '0', '1', 1579094441, 1579094441),
(90, 'e should be completing the project by now ', '1', '2', '0', '1', 1579094478, 1579094478),
(91, 'true .some members are reduntant now', '2', '1', '0', '1', 1579094512, 1579094512),
(92, 'hie', '1', '2', '0', '1', 1579110406, 1579110406),
(93, 'ndeip', '1', '2', '0', '1', 1579172004, 1579172004),
(94, 'hie', '1', '2', '0', '1', 1579510707, 1579510707),
(95, 'person ', '1', '2', '0', '1', 1579510729, 1579510729),
(96, 'ndeip', '2', '1', '0', '1', 1579510991, 1579510991),
(97, 'uri sei', '1', '2', '0', '1', 1579511353, 1579511353),
(98, 'am good', '2', '1', '0', '0', 1579511368, 1579511368),
(99, 'ndeip', '1', '4', '0', '1', 1579511958, 1579511958),
(100, 'uri sei', '1', '4', '0', '1', 1579511964, 1579511964),
(101, 'an good kudzai and u', '4', '1', '0', '1', 1579512021, 1579512021),
(102, 'uri sei', '0', '2', '0', '0', 1579512196, 1579512196),
(103, 'moring the project is almost done', '1', '2', '0', '1', 1579536171, 1579536171),
(104, 'hey', '1', '6', '0', '1', 1579772901, 1579772901),
(105, 'uri sei', '1', '6', '0', '1', 1579773210, 1579773210),
(106, 'uri sei', '1', '6', '0', '1', 1579773290, 1579773290),
(107, 'hey', '1', '6', '0', '1', 1579773299, 1579773299),
(108, 'hie', '1', '6', '0', '1', 1579773390, 1579773390),
(109, 'hey', '1', '6', '0', '1', 1579773404, 1579773404),
(110, 'hey', '1', '6', '0', '1', 1579773407, 1579773407),
(111, 'hey', '1', '6', '0', '1', 1579773409, 1579773409),
(112, 'hey', '1', '6', '0', '1', 1579773410, 1579773410),
(113, 'hey', '1', '6', '0', '1', 1579773410, 1579773410),
(114, 'hey', '1', '6', '0', '1', 1579773412, 1579773412),
(115, 'hey', '1', '6', '0', '1', 1579773412, 1579773412),
(116, 'hey', '1', '6', '0', '1', 1579773414, 1579773414),
(117, 'hey', '1', '6', '0', '1', 1579773415, 1579773415),
(134, 'h', '1', '6', '0', '1', 1579773531, 1579773531),
(135, 'good morning maam', '1', '2', '0', '1', 1579779725, 1579779725),
(136, 'checking with you', '1', '2', '0', '0', 1579779869, 1579779869),
(137, 'Its Kudzai', '1', '2', '0', '0', 1579779903, 1579779903),
(138, 'hiw are maam', '1', '11', '0', '0', 1579791887, 1579791887),
(139, 'i am.done with development', '1', '11', '0', '0', 1579791917, 1579791917),
(140, 'ok mwanangu', '11', '1', '0', '1', 1579791934, 1579791934),
(141, 'how are you yolanda ', '1', '14', '0', '0', 1583215335, 1583215335),
(142, 'kkkkk', '1', '2', '0', '0', 1583321816, 1583321816),
(143, 'testing final', '1', '2', '0', '0', 1586039706, 1586039706),
(144, 'hey wena', '1', '2', '0', '0', 1586039979, 1586039979),
(148, 'Am going just fine', '1', '4', '0', '0', 1586042068, 1586042068),
(149, 'Eee how is bro', '1', '8', '0', '0', 1586042085, 1586042085),
(151, 'Helo', '1', '14', '0', '0', 1586042115, 1586042115),
(152, 'Am good how z it', '8', '1', '0', '0', 1586076211, 1586076211),
(153, 'Hie sir', '1', '12', '0', '0', 1586093913, 1586093913),
(154, 'Xgdydu', '1', '7', '0', '0', 1586093934, 1586093934),
(155, 'ndeip', '1', '12', '0', '0', 1586094300, 1586094300),
(156, 'Wadii ', '12', '1', '0', '1', 1586094315, 1586094315),
(157, 'ndeip', '1', '12', '0', '0', 1586094317, 1586094317),
(158, 'Wadii ', '12', '1', '0', '1', 1586094318, 1586094318),
(159, 'dhakwaz', '1', '12', '0', '0', 1586094335, 1586094335),
(160, 'Haaa fresh', '12', '1', '0', '0', 1586094360, 1586094360),
(161, 'dhakwaz', '1', '12', '0', '0', 1586094367, 1586094367),
(162, 'dhakwaz', '1', '12', '0', '0', 1586094380, 1586094380),
(163, 'Hie ', '1', '10', '0', '0', 1586098570, 1586098570),
(164, 'Hie ', '1', '10', '0', '0', 1586098573, 1586098573),
(165, 'mukuita%20sei', '1', '12', '0', '0', 1589668433, 1589668433),
(166, 'mukuita sei', '1', '12', '0', '0', 1589668554, 1589668554),
(167, 'good Morning.I have send the proposed changes to the respective buyers', '1', '9', '0', '0', 1589668805, 1589668805),
(168, 'nmsds,f', '1', '2', '0', '0', 1592828791, 1592828791),
(169, 'nmsds,f', '1', '2', '0', '0', 1592828954, 1592828954),
(170, 'vbm,.n hgj', '1', '2', '0', '0', 1592835850, 1592835850),
(171, ',bfmb.n ', '1', '2', '0', '0', 1592874469, 1592874469),
(172, 'how are you ', '1', '2', '0', '0', 1592902810, 1592902810);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Financial Accounting Module', 1577567006, 1577567006),
(2, 'Human resource module', 1577567024, 1577567024),
(3, 'Procurement Module', 1577567051, 1577567051),
(4, 'Technical Module', 1583361578, 1583361578),
(5, 'Marketing Module', 1583361588, 1583361588);

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) UNSIGNED NOT NULL,
  `problem` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `solution` varchar(255) NOT NULL,
  `reported_by` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `problem`, `module`, `status`, `solution`, `reported_by`, `created_at`, `updated_at`) VALUES
(1, 'Payroll driver ', 'Human resource module', 'fixed', 'promise', 'Promise Kudzai Makufa', 1577446188, 1577446188),
(3, 'Payroll driver ', 'Human resource module', 'fixed', 'updated php version', 'Promise Kudzai Makufa', 1577576895, 1577576895),
(4, 'Dev to QAZ transportation', 'Human resource module', 'fixed', 'solution', 'Promise Kudzai Makufa', 1577743400, 1577743400),
(6, 'permissions issue', 'Technical Module', 'fixed', 'run chmod -R 777 in root project', 'Promise Kudzai Makufa', 1579535089, 1579535089),
(7, 'Server restarting randomly', 'Human resource module', 'fixed', 'chmod -----r 6677', 'Maceline Nyatsambo', 1579780789, 1579780789),
(8, 'procurement', 'Marketing', 'pending', 'none', 'Promise Kudzai Makufa', 1583215130, 1583215130),
(10, 'bd,ms', 'Human resource module', 'pending', 'none', 'Promise Kudzai Makufa', 1592874427, 1592874427),
(11, 'intergation error api', 'Technical Module', 'fixed', 'use json ', 'Promise Kudzai Makufa', 1592895452, 1592895452);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) UNSIGNED NOT NULL,
  `menu_id` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `position` double NOT NULL,
  `controller` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `menu_id`, `name`, `icon`, `roles`, `position`, `controller`, `method`, `created_at`, `updated_at`) VALUES
(1, 1, 'View Projects', 'glyphicon glyphicon-play', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 1, 'project', 'index', 1583043675, 1583043675),
(2, 1, 'Create Project', 'glyphicon glyphicon-pencil', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 2, 'project', 'create', 1583044575, 1583044575),
(3, 1, 'Activities', 'glyphicon glyphicon-plus-sign', 'a:4:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:1:\"6\";}', 3, 'activity', 'index', 1583044663, 1583044663),
(4, 0, '#', '#', 'a:4:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:1:\"6\";}', 0, 'activity', 'create', 1583044788, 1583044788),
(5, 1, 'Tasks', 'glyphicon glyphicon-tasks', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"5\";}', 4, 'task', 'index', 1583044915, 1583044915),
(6, 0, '#', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"5\";}', 0, 'task', 'list', 1583044982, 1583044982),
(7, 1, 'Predict', 'glyphicon glyphicon-flash', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 5, 'predict', 'choose', 1583045123, 1583045123),
(8, 2, 'Issues', 'glyphicon glyphicon-console', 'a:5:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";}', 1, 'issue', 'index', 1583045179, 1583045179),
(9, 2, 'Log an issue', 'glyphicon glyphicon-screenshot', 'a:3:{i:0;s:1:\"3\";i:1;s:1:\"4\";i:2;s:1:\"5\";}', 2, 'issue', 'create', 1583045289, 1583045289),
(10, 2, 'Detect Issues', 'glyphicon glyphicon-eye-open', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 3, 'issue', 'detect', 1583045370, 1583045370),
(11, 2, 'Solution', 'glyphicon glyphicon-ok', 'a:4:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";}', 4, 'issue', 'fix', 1583045575, 1583045575),
(12, 3, 'Online Chat Service', 'glyphicon glyphicon-envelope', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 1, 'chat', 'index', 1583045670, 1583045670),
(13, 3, 'Sms Broadcast', 'glyphicon glyphicon-envelope', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 2, 'chat', 'sms', 1583045839, 1583045839),
(14, 4, 'Change password', 'fa fa-flag fa-stack-1x', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 1, 'userprofile', 'update', 1583045955, 1583045955),
(15, 5, 'Add User Roles', 'glyphicon glyphicon-lock', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 1, 'role', 'create', 1583046080, 1583046080),
(16, 5, 'Authorize Users', 'glyphicon glyphicon-lock', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 2, 'userprofile', 'activate', 1583046133, 1583046133),
(17, 5, 'Add Department', 'fa fa-flag fa-stack-1x', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 3, 'department', 'index', 1583046211, 1583046211),
(18, 0, '#', '#', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 0, 'department', 'create', 1583046244, 1583046244),
(19, 5, 'Add project type', 'fa fa-flag fa-stack-1x', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 4, 'projecttype', 'create', 1583046292, 1583046292),
(20, 0, '#', '#', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 0, 'projecttype', 'create', 1583046315, 1583046315),
(21, 0, '#', '#', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 0, 'welcome', '404', 0, 0),
(22, 0, '#', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'dashboard', 'index', 0, 0),
(23, 0, '#', '#', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 0, 'role', 'demo', 0, 0),
(24, 0, '#', '#', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 0, 'menu', 'index', 0, 0),
(25, 0, 'detect', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'issue', 'detect', 0, 0),
(26, 0, 'patten ', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'pattern', 'index', 0, 0),
(27, 0, 'issue view', '0', 'a:5:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";}', 0, 'issue', 'view', 0, 0),
(28, 5, 'Create link items', 'glyphicon glyphicon-plus-sign', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"6\";}', 5, 'link', 'create', 0, 0),
(29, 0, 'predict choose', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'predict', 'choose', 1583359680, 1583359680),
(30, 0, 'link view', '#', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}', 0, 'link', 'index', 1583359754, 1583359754),
(31, 0, 'predict index ', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'predict', 'index', 0, 0),
(32, 0, 'userprofiles', '#', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}', 0, 'userprofile', 'index', 1586076733, 1586076733),
(33, 0, 'userprofile_create', '#', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}', 0, 'userprofile', 'edit', 1586076806, 1586076806),
(34, 0, 'view project', '#', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}', 0, 'project', 'view', 1591335733, 1591335733),
(35, 0, 'Blank', '#', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 0, 'blank', 'index', 1592779135, 1592779135),
(36, 0, 'set task done', '#', 'a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"6\";}', 0, 'task', 'view', 1592837707, 1592837707);

-- --------------------------------------------------------

--
-- Table structure for table `mainmenus`
--

CREATE TABLE `mainmenus` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `aligned` varchar(255) NOT NULL,
  `visble` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainmenus`
--

INSERT INTO `mainmenus` (`id`, `name`, `url`, `position`, `aligned`, `visble`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'test', '1', 'Left', '1', 'fa-cogs', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  `position` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `icon`, `roles`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Project Planning', 'pull-right hidden-xs showopacity glyphicon glyphicon-calendar', 'a:4:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:1:\"6\";}', 1, 1583040333, 1583040333),
(2, 'Recurring Issues', 'pull-right hidden-xs showopacity glyphicon glyphicon-repeat', 'a:5:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";}', 2, 1583040477, 1583040477),
(3, 'Online Messaging', 'pull-right hidden-xs showopacity glyphicon glyphicon-envelope', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 3, 1583040524, 1583040524),
(4, 'User Profile', 'pull-right hidden-xs showopacity glyphicon glyphicon-user', 'a:6:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:1:\"5\";i:4;s:1:\"6\";i:5;s:1:\"7\";}', 4, 1583040636, 1583040636),
(5, 'Administration', 'pull-right hidden-xs showopacity glyphicon glyphicon-cog', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"3\";}', 5, 1583040686, 1583040686);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`type`, `name`, `migration`) VALUES
('app', 'default', '001_create_tests'),
('app', 'default', '002_create_menuitems'),
('app', 'default', '003_create_mainmenus'),
('app', 'default', '005_create_activities'),
('app', 'default', '006_create_projects'),
('app', 'default', '007_create_projects'),
('app', 'default', '008_create_projects'),
('app', 'default', '009_create_projects'),
('app', 'default', '010_create_tasks'),
('app', 'default', '011_create_issues'),
('app', 'default', '012_create_patterns'),
('app', 'default', '013_create_conversations'),
('package', 'auth', '001_auth_create_usertables'),
('package', 'auth', '002_auth_create_grouptables'),
('package', 'auth', '003_auth_create_roletables'),
('package', 'auth', '004_auth_create_permissiontables'),
('package', 'auth', '005_auth_create_authdefaults'),
('package', 'auth', '006_auth_add_authactions'),
('package', 'auth', '007_auth_add_permissionsfilter'),
('package', 'auth', '008_auth_create_providers'),
('package', 'auth', '009_auth_create_oauth2tables'),
('package', 'auth', '010_auth_fix_jointables'),
('package', 'auth', '011_auth_group_optional'),
('app', 'default', '014_create_departments'),
('app', 'default', '015_create_userprofiles'),
('app', 'default', '016_create_projecttypes'),
('app', 'default', '017_create_roles'),
('app', 'default', '018_create_menus'),
('app', 'default', '019_create_menus'),
('app', 'default', '020_create_links');

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE `patterns` (
  `id` int(11) UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patterns`
--

INSERT INTO `patterns` (`id`, `module`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Human resource module', 'repository converter', 1577442307, 1577442307),
(2, 'Human resource module', 'redback', 1577442307, 1577442307),
(3, 'Human resource module', 'search', 1577442307, 1577442307),
(4, 'Human resource module', 'reporting', 1577442307, 1577442307),
(5, 'Human resource module', 'rest services', 1577442307, 1577442307),
(6, 'Human resource module', 'indexing', 1577442307, 1577442307),
(7, 'Human resource module', 'indexing', 1577442307, 1577442307),
(8, 'Human resource module', 'reporting', 1577442307, 1577442307),
(9, 'Human resource module', 'Design', 1577442307, 1577442307),
(10, 'Human resource module', 'Build', 1577442307, 1577442307),
(11, 'Financial Accounting Module', 'repository converter', 1577442310, 1577442310),
(12, 'Financial Accounting Module', 'redback', 1577442310, 1577442310),
(13, 'Financial Accounting Module', 'search', 1577442310, 1577442310),
(14, 'Financial Accounting Module', 'reporting', 1577442310, 1577442310),
(15, 'Financial Accounting Module', 'rest services', 1577442310, 1577442310),
(16, 'Financial Accounting Module', 'indexing', 1577442310, 1577442310),
(17, 'Financial Accounting Module', 'indexing', 1577442310, 1577442310),
(18, 'Financial Accounting Module', 'reporting', 1577442310, 1577442310),
(19, 'Financial Accounting Module', 'Design', 1577442310, 1577442310),
(20, 'Financial Accounting Module', 'Build', 1577442310, 1577442310),
(21, 'Procurement Module', 'repository converter', 1577442313, 1577442313),
(22, 'Procurement Module', 'redback', 1577442313, 1577442313),
(23, 'Procurement Module', 'search', 1577442313, 1577442313),
(24, 'Procurement Module', 'reporting', 1577442313, 1577442313),
(25, 'Procurement Module', 'rest services', 1577442313, 1577442313),
(26, 'Procurement Module', 'indexing', 1577442313, 1577442313),
(27, 'Procurement Module', 'indexing', 1577442313, 1577442313),
(28, 'Procurement Module', 'reporting', 1577442313, 1577442313),
(29, 'Procurement Module', 'Design', 1577442313, 1577442313),
(30, 'Procurement Module', 'Build', 1577442313, 1577442313);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ongoing` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_manager` varchar(255) NOT NULL,
  `completion_date` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `ongoing`, `start_date`, `client_name`, `client_address`, `project_type`, `project_manager`, `completion_date`, `created_at`, `updated_at`) VALUES
(1, 'ProjectZinara', 1, '2019-12-04', 'Zinara', '84 workington', 'busines one', 'Promise Makufa', '12/04/2020', 1577704682, 1577704682),
(2, 'NSSA ', 1, '2019-12-11', 'NSSA Zimbabwe', 'Corner Julius Nyerere and 2nd Street', 'busines one', 'Kidkudzy', '12/04/2020', 1577706980, 1577706980),
(3, 'NRZ', 1, '2020-01-31', 'NRZ', '4TH Kaunda sommething', 'SME One', 'Mr NRZ', '2020-01-23', 1579769831, 1579769831),
(4, 'ZIMRA New Tax Regime', 1, '2021-07-22', 'ZIMRA', '56 test address', 'SME One', 'Mn', '2020-01-17', 1579790409, 1579790409),
(5, 'Test', 0, '2020-03-13', 'Yolanda systems', 'magaso ave', 'Enterprise', 'Kudzai', '2020-04-04', 1583214950, 1583214950),
(6, 'Electronic Commerce Demo', 1, '2020-06-04', 'Ecommerce Demo', 'S block room 5', 'Business One', 'Promise Kudzai Makufa', '2020-06-25', 1591334370, 1591334370),
(7, 'Project Demo', 1, '2020-06-26', 'Mrs Nyatsambo', 'Sblock ', 'SME One', 'Kudzai', '2020-06-27', 1591354495, 1591354495),
(10, 'test project ', 1, '2020-06-30', 'client name', '84 address', 'Business One', 'kudzai makufa', '2020-08-31', 1592894884, 1592894884),
(12, 'Promise Kudzai Makufa', 1, '2020-06-30', 'panel', 'teste', 'Business One', 'Promise Makufa', '2020-06-29', 1592902385, 1592902385);

-- --------------------------------------------------------

--
-- Table structure for table `projecttypes`
--

CREATE TABLE `projecttypes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projecttypes`
--

INSERT INTO `projecttypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Business One', 1577710436, 1577710436),
(2, 'SME One', 1577710452, 1577710452),
(3, 'Enterprise', 1577710458, 1577710458);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Project Manager', 0, 0),
(3, 'Administrator', 0, 0),
(4, 'Developer', 0, 0),
(5, 'Consultant', 0, 0),
(6, 'Executive', 0, 0),
(7, 'Guest', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `done` text NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `duration`, `activity_id`, `done`, `created_at`, `updated_at`) VALUES
(2, 't2', 'd2', 2, 'false', 1577219452, 1577219452),
(3, 'check1', 'due1', 3, 'false', 1577219530, 1577219530),
(4, 'check2', 'due2', 3, 'false', 1577219530, 1577219530),
(5, 'check1', 'due1', 3, 'false', 1577219685, 1577219685),
(6, 'check2', 'due2', 3, 'false', 1577219685, 1577219685),
(7, '1', '3', 4, 'false', 1577219977, 1577219977),
(8, '2', '4', 4, 'false', 1577219977, 1577219977),
(9, 'develop', '15', 9, 'false', 1579791038, 1579791038),
(10, 'test', '15', 9, 'false', 1579791038, 1579791038),
(11, 'develop', '15', 9, 'false', 1579791128, 1579791128),
(12, 'test', '5', 9, 'false', 1579791128, 1579791128),
(13, 'task 1 setup', '3 days', 13, 'false', 1591334579, 1591334579),
(14, 'task 2 setup ', '6 days', 13, 'false', 1591334579, 1591334579),
(15, 'task 1 ', '30', 18, 'true', 1591355402, 1591355402),
(16, 'task 2 ', '15', 18, 'false', 1591355402, 1591355402),
(19, 'task 3', '3', 18, 'false', 1592836812, 1592836812),
(20, 'task 4', '3', 18, 'true', 1592836812, 1592836812),
(21, 'task  1 ', '3', 17, 'false', 1592863958, 1592863958),
(22, 'task 2 ', '4', 17, 'false', 1592863958, 1592863958),
(23, 'task 1 ', '3', 16, 'false', 1592864102, 1592864102),
(24, 'task 2 ', '4', 16, 'false', 1592864102, 1592864102),
(25, 'task 3', '3', 16, 'false', 1592864103, 1592864103),
(26, 'task 4 ', '4', 16, 'false', 1592864103, 1592864103),
(27, 'task 1 ', '1', 15, 'false', 1592864221, 1592864221),
(28, 'task 2 ', '2 ', 15, 'false', 1592864221, 1592864221),
(29, 'task 3 ', '3', 15, 'false', 1592864221, 1592864221),
(30, 'task 1 ', '3', 21, 'false', 1592895365, 1592895365),
(31, 'task 2', '4', 21, 'false', 1592895365, 1592895365),
(32, 'task 1', '2', 22, 'false', 1592899954, 1592899954),
(33, 'task 2 ', '2 ', 22, 'false', 1592899954, 1592899954),
(34, 'task 1 ', '1', 23, 'false', 1592902453, 1592902453),
(35, 'task 2 ', '2 ', 23, 'false', 1592902453, 1592902453);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) UNSIGNED NOT NULL,
  `index` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userprofiles`
--

CREATE TABLE `userprofiles` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofiles`
--

INSERT INTO `userprofiles` (`id`, `user_id`, `first_name`, `surname`, `email`, `phone_number`, `position`, `department`, `created_at`, `updated_at`) VALUES
(1, '1', 'Promise Kudzai', 'Makufa', 'kidkudzy@gmail.com', '0782257826', '4', 'Financial Accounting Module', 1577570278, 0),
(2, '2', 'Tawanda', 'Muchanyu', 'tawanda@gmail.com', '0713729107', '2', 'Financial Accounting Module', 1577573877, 0),
(3, '3', 'Tinotenda', 'Nyakanda', 'tinotenda@gmail.com', '0777777001', '5', 'Procurement Module', 1577577306, 0),
(4, '4', 'Shevonne', 'Makufa', 'shevonne@gmail.com', '0777777002', '7', 'Financial Accounting Module', 1577577357, 0),
(5, '5', 'Wynonna', 'Nyoni', 'wynonna@gmail.com', '0719114511', '6', 'Procurement Module', 1577577410, 0),
(6, '6', 'Constance', 'Nyakatawa', 'constance@gmail.com', '0777777004', '3', 'Human resource module', 1577577452, 0),
(7, '7', 'Carlton ', 'Makufa', 'carlton@gmail.com', '0777777005', 'mutare dangamvura', 'Financial Accounting Module', 1577747892, 0),
(8, '8', 'Tinashe ', 'Mudyiwa', 'tinashe@gmail.com', '0719824535', 'universal', 'Procurement Module', 1579772006, 0),
(9, '9', 'Portia', 'Matombo', 'portia@gmail.com', '0777777009', 'Universal', 'Procurement Module', 1579781148, 0),
(10, '10', 'Kudakwashe', 'Matombo', 'kudakwashe@gmail.com', '0772101781', 'universal', 'Financial Accounting Module', 1579786811, 0),
(11, '11', 'Maceline', 'Nyatsambo', 'maceline@gmail.com', '0772919912', 'universal', 'Human resource module', 1579789943, 0),
(12, '12', 'Calvin ', 'Nyakanda', 'calvin@gmail.com', '0776140879', 'Consultant', 'Financial Accounting Module', 1583049744, 0),
(13, '13', 'Ruramisai', 'Makatura', 'ruramisai@gmail.com', '0782621611,0718366611', 'Guest', 'Procurement Module', 1583108585, 0),
(14, '14', 'Yolanda', 'Magaso', 'tafadzwamagaso@gmail.com', '0717525405', 'Consultant', 'Human resource module', 1583214853, 0),
(15, '15', 'Promise', 'Makufa', 'testing@email.com', '0782285478', 'Guest', 'Financial Accounting Module', 1583875108, 0),
(16, '16', 'promsie ', 'Makufa', 'kmakufa@hit.ac.zw', '1sdfsdfg', 'Project Manager', 'Financial Accounting Module', 1592697318, 0),
(17, '17', 'capstone', 'panel', 'panel@panel.com', '0718464410,0782257826,0774354089,0774069904,0715564184,0773514504,0776465791', 'Project Manager', 'Financial Accounting Module', 1592829105, 0),
(18, '18', 'Sodom', 'Sodom', 'sodom@gmail.com', '0782257826,0718464410,0774672441,0785702411,0775824535', 'Project Manager', 'Financial Accounting Module', 1592871428, 0),
(19, '19', 'test', 'test', 'testemai@test.com', '0777000000', 'Developer', 'Human resource module', 1592874078, 0),
(21, '21', 'hope', 'hope', 'hope@gmail.com', '0778969386', 'Executive', 'Marketing Module', 1592899801, 0),
(22, '22', 'test name ', 'last naeme', 'testpanel@gmail.com', '0777123421', 'Project Manager', 'Financial Accounting Module', 1592902247, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `isactivated` int(2) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `login_hash` varchar(255) NOT NULL,
  `profile_fields` text NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `updated_at` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group`, `email`, `isactivated`, `last_login`, `login_hash`, `profile_fields`, `created_at`, `updated_at`) VALUES
(1, '782257826', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'kidkudzy@gmail.com', 1, '1593502018', '221a755505583b2f9309bd25a1e031e3409c0bfb', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1577570278, 1577742789),
(2, '0718464410', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'tawanda@gmail.com', 1, '1586077075', '2a7b1f4656e5861d95af8a34e416ac71aa183734', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1577573877, 0),
(3, '0777777001', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'tinotenda@gmail.com', 1, '0', '', 'a:2:{s:10:\"department\";s:18:\"Procurement Module\";s:4:\"role\";s:9:\"universal\";}', 1577577306, 0),
(4, '0777777002', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'shevonne@gmail.com', 1, '1585926340', 'd2b2ed0b7fb07688701e206f55e9e7f992bd9bb5', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1577577356, 0),
(5, '0777777003', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'wynonna@gmail.com', 0, '1577808177', '4f9dd983c6ebe7291598cc0e45fb19a01cadb21e', 'a:2:{s:10:\"department\";s:18:\"Procurement Module\";s:4:\"role\";s:9:\"universal\";}', 1577577410, 0),
(6, '0777777004', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'constance@gmail.com', 0, '0', '', 'a:2:{s:10:\"department\";s:21:\"Human resource module\";s:4:\"role\";s:9:\"universal\";}', 1577577452, 0),
(7, '0777777005', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'carlton@gmail.com', 0, '0', '', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1577747892, 0),
(8, '0777770066', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'tinashe@gmail.com', 0, '1586085891', 'e37e4891ceb7b979fcf42d5d6b9b481f835dc12e', 'a:2:{s:10:\"department\";s:18:\"Procurement Module\";s:4:\"role\";s:9:\"universal\";}', 1579772006, 0),
(9, '0777777009', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'portia@gmail.com', 1, '1579781163', '37c28ec786b524b829bc47375aa47db8bb706955', 'a:2:{s:10:\"department\";s:18:\"Procurement Module\";s:4:\"role\";s:9:\"universal\";}', 1579781148, 0),
(10, '0777777010', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'kudakwashe@gmail.com', 0, '1579786838', '933f3dccd21afed7d71089f3d6e989bf697ba68e', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1579786811, 0),
(11, '0772919912', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'maceline@gmail.com', 0, '1579790054', '6f0115bed7176763dcb7a4bf388f53c76ad99bcc', 'a:2:{s:10:\"department\";s:21:\"Human resource module\";s:4:\"role\";s:9:\"universal\";}', 1579789943, 0),
(12, '0776140879', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'calvin@gmail.com', 1, '1586094422', 'aae636d5a52593d4632a21711174e01b88b5aeac', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1583049744, 0),
(13, '0782621611', 'HyeanX89H0/pEHl539v0rNTPm4+Gy4nU7bVXNuV985s=', 1, 'ruramisai@gmail.com', 1, '1583108614', 'ae403c6642b572712898759d6656d0c8bdf67bab', 'a:2:{s:10:\"department\";s:18:\"Procurement Module\";s:4:\"role\";s:9:\"universal\";}', 1583108585, 0),
(14, '0717525405', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'tafadzwamagaso@gmail.com', 1, '0', '', 'a:2:{s:10:\"department\";s:21:\"Human resource module\";s:4:\"role\";s:9:\"universal\";}', 1583214853, 0),
(15, '0782285478', 'HyeanX89H0/pEHl539v0rNTPm4+Gy4nU7bVXNuV985s=', 1, 'testing@email.com', 0, '0', '', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1583875108, 0),
(17, '0777777779', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'panel@panel.com', 0, '0', '', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1592829105, 0),
(18, '0771123142', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'sodom@gmail.com', 0, '0', '', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1592871428, 0),
(19, '0777000000', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'testemai@test.com', 0, '0', '', 'a:2:{s:10:\"department\";s:21:\"Human resource module\";s:4:\"role\";s:9:\"universal\";}', 1592874077, 0),
(21, '0778969386', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'hope@gmail.com', 0, '0', '', 'a:2:{s:10:\"department\";s:16:\"Marketing Module\";s:4:\"role\";s:9:\"universal\";}', 1592899801, 0),
(22, '0777123421', 'iwqM49R0A2i8bzKOcGEoFTzQld34VcYVO2AXb/WqCFk=', 1, 'testpanel@gmail.com', 0, '0', '', 'a:2:{s:10:\"department\";s:27:\"Financial Accounting Module\";s:4:\"role\";s:9:\"universal\";}', 1592902247, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_clients`
--

CREATE TABLE `users_clients` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT 0,
  `autonomous` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT 0,
  `notes` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_providers`
--

CREATE TABLE `users_providers` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT 0,
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` int(11) NOT NULL DEFAULT 0,
  `updated_at` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_scopes`
--

CREATE TABLE `users_scopes` (
  `id` int(11) NOT NULL,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE `users_sessions` (
  `id` int(11) NOT NULL,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_sessionscopes`
--

CREATE TABLE `users_sessionscopes` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainmenus`
--
ALTER TABLE `mainmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttypes`
--
ALTER TABLE `projecttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofiles`
--
ALTER TABLE `userprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `users_clients`
--
ALTER TABLE `users_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_id` (`client_id`);

--
-- Indexes for table `users_providers`
--
ALTER TABLE `users_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `users_scopes`
--
ALTER TABLE `users_scopes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `scope` (`scope`);

--
-- Indexes for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_sessions_ibfk_1` (`client_id`);

--
-- Indexes for table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `access_token` (`access_token`),
  ADD KEY `scope` (`scope`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menuitems`
--
ALTER TABLE `menuitems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `projecttypes`
--
ALTER TABLE `projecttypes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userprofiles`
--
ALTER TABLE `userprofiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users_clients`
--
ALTER TABLE `users_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_providers`
--
ALTER TABLE `users_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_scopes`
--
ALTER TABLE `users_scopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE;

--
-- Constraints for table `users_sessionscopes`
--
ALTER TABLE `users_sessionscopes`
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  ADD CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

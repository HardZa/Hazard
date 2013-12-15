-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2013 at 06:24 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hazarddb`
--
CREATE DATABASE IF NOT EXISTS `hazarddb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hazarddb`;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `certid` int(11) NOT NULL AUTO_INCREMENT,
  `certno` varchar(30) CHARACTER SET utf8 NOT NULL,
  `userid` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `certtype` int(11) NOT NULL,
  `jsondata` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`certid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `certificate_running_no`
--

CREATE TABLE IF NOT EXISTS `certificate_running_no` (
  `certtype` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`certtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate_running_no`
--

INSERT INTO `certificate_running_no` (`certtype`, `no`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `picid` int(11) NOT NULL AUTO_INCREMENT,
  `requestid` int(11) NOT NULL,
  `pictype` int(11) NOT NULL,
  `picname` varchar(50) NOT NULL,
  PRIMARY KEY (`picid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `requestid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `requesttype` int(11) NOT NULL,
  `jsondata` text NOT NULL,
  `progress` int(11) NOT NULL,
  `certid` int(11) NOT NULL,
  `certidref` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_agriproduction`
--

CREATE TABLE IF NOT EXISTS `usergroup_agriproduction` (
  `agri_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`agri_id`),
  UNIQUE KEY `userid` (`userid`),
  KEY `userid_2` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usergroup_agriproduction`
--

INSERT INTO `usergroup_agriproduction` (`agri_id`, `userid`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_cashier`
--

CREATE TABLE IF NOT EXISTS `usergroup_cashier` (
  `cash_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`cash_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usergroup_cashier`
--

INSERT INTO `usergroup_cashier` (`cash_id`, `userid`) VALUES
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_client`
--

CREATE TABLE IF NOT EXISTS `usergroup_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `userbirthdate` date NOT NULL,
  `usernationality` char(20) NOT NULL,
  `usertaxid` char(20) NOT NULL,
  `useraddrhouse` char(15) NOT NULL,
  `useraddrvillage` char(15) NOT NULL,
  `useraddrdrive` varchar(48) NOT NULL,
  `useraddrroad` varchar(48) NOT NULL,
  `useraddrsubdistrict` varchar(48) NOT NULL,
  `useraddrdistrict` varchar(48) NOT NULL,
  `useraddrprovince` varchar(48) NOT NULL,
  `userpostalcode` char(15) NOT NULL,
  `userphone` varchar(32) NOT NULL,
  `userfax` varchar(32) NOT NULL,
  `useremail` varchar(254) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usergroup_client`
--

INSERT INTO `usergroup_client` (`client_id`, `userid`, `userbirthdate`, `usernationality`, `usertaxid`, `useraddrhouse`, `useraddrvillage`, `useraddrdrive`, `useraddrroad`, `useraddrsubdistrict`, `useraddrdistrict`, `useraddrprovince`, `userpostalcode`, `userphone`, `userfax`, `useremail`) VALUES
(3, 4, '1992-09-18', 'ไทย', '5410500199', '50', '', '', 'พหลโยธิน ', 'ลาดยาว', 'จัตุจักร', 'กรุงเทพ', '10900', '0941238573', '', 'devil_karuma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_hazcontrol`
--

CREATE TABLE IF NOT EXISTS `usergroup_hazcontrol` (
  `haz_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`haz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usergroup_hazcontrol`
--

INSERT INTO `usergroup_hazcontrol` (`haz_id`, `userid`) VALUES
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_plantprotection`
--

CREATE TABLE IF NOT EXISTS `usergroup_plantprotection` (
  `plant_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`plant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usergroup_plantprotection`
--

INSERT INTO `usergroup_plantprotection` (`plant_id`, `userid`) VALUES
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_registrar`
--

CREATE TABLE IF NOT EXISTS `usergroup_registrar` (
  `regis_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`regis_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usergroup_registrar`
--

INSERT INTO `usergroup_registrar` (`regis_id`, `userid`) VALUES
(7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `userpasssha1` varchar(40) NOT NULL,
  `userallowed` tinyint(1) NOT NULL,
  `userrealname` varchar(256) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpasssha1`, `userallowed`, `userrealname`) VALUES
(2, 'test_agriproduction', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ปกป้อง กรรมผลิต'),
(3, 'test_cashier', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ธนบัตร วงศ์ธนบัตร'),
(4, 'test_client', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ทรงสิทธิ์ สิทธ์ก้าวไกล'),
(5, 'test_hazcontrol', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'คิม จอง อิว'),
(6, 'test_plantprotection', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'อารักษ์ ไพรเถาวัล'),
(7, 'test_registrar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ทะเบียน เทียนสองเล่ม');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

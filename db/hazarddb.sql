-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2013 at 08:03 PM
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
  `userid` int(11) NOT NULL,
  `expdate` date NOT NULL,
  `certtype` int(11) NOT NULL,
  `jsondata` text NOT NULL,
  PRIMARY KEY (`certid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_agriproduction`
--

CREATE TABLE IF NOT EXISTS `usergroup_agriproduction` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_agriproduction`
--

INSERT INTO `usergroup_agriproduction` (`userid`) VALUES
(2);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_cashier`
--

CREATE TABLE IF NOT EXISTS `usergroup_cashier` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_cashier`
--

INSERT INTO `usergroup_cashier` (`userid`) VALUES
(3),
(9);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_client`
--

CREATE TABLE IF NOT EXISTS `usergroup_client` (
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
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_client`
--

INSERT INTO `usergroup_client` (`userid`, `userbirthdate`, `usernationality`, `usertaxid`, `useraddrhouse`, `useraddrvillage`, `useraddrdrive`, `useraddrroad`, `useraddrsubdistrict`, `useraddrdistrict`, `useraddrprovince`, `userpostalcode`, `userphone`, `userfax`, `useremail`) VALUES
(4, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_hazcontrol`
--

CREATE TABLE IF NOT EXISTS `usergroup_hazcontrol` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_hazcontrol`
--

INSERT INTO `usergroup_hazcontrol` (`userid`) VALUES
(5),
(8),
(11);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_plantprotection`
--

CREATE TABLE IF NOT EXISTS `usergroup_plantprotection` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_plantprotection`
--

INSERT INTO `usergroup_plantprotection` (`userid`) VALUES
(6),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_registrar`
--

CREATE TABLE IF NOT EXISTS `usergroup_registrar` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroup_registrar`
--

INSERT INTO `usergroup_registrar` (`userid`) VALUES
(7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpasssha1`, `userallowed`, `userrealname`) VALUES
(1, 'nutsumiya', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Nut Za'),
(2, 'test_agriproduction', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'agriproduction'),
(3, 'test_cashier', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'cashier'),
(4, 'test_client', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'client'),
(5, 'test_hazcontrol', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'hazcontrol'),
(6, 'test_plantprotection', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'plantprotection'),
(7, 'test_registrar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'registrar'),
(8, 'dxfdfh', 'b8281f2ed7f49dd67053afdefdd0cd9b866f7aac', 1, 'hdhd'),
(9, 'nutjung', 'fcd6569ab61735c8f46687b3e7333dccb948d759', 1, '122'),
(10, 'sasasasa', '214e789b0a1c986e93b5ec4fefd93baea56eb5ef', 1, '122'),
(11, 'argong', '5a4cd2f7a935f79a08d63ccf3c59332e049e1ace', 1, 'asdfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2013 at 04:03 PM
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
CREATE DATABASE IF NOT EXISTS `hazarddb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hazarddb`;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `doctype` int(11) NOT NULL,
  `docjson` text NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`docid`, `doctype`, `docjson`) VALUES
(1, 0, '{"telno":"1234567"}'),
(2, 0, '{"telno":"1001010111"}'),
(3, 0, '{"telno":"123456789"}'),
(4, 0, '{"telno":"12345dd"}');

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE IF NOT EXISTS `document_type` (
  `doctype` int(11) NOT NULL,
  `docabbr` varchar(20) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `formpage` varchar(20) NOT NULL,
  PRIMARY KEY (`doctype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`doctype`, `docabbr`, `docname`, `formpage`) VALUES
(0, 'ตย.นว.', 'ตัวอย่างหน้าเว็ป', 'example.php');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `information` text NOT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `type`, `userid`, `information`, `state`) VALUES
(3, 1, 1, '', 1),
(4, 1, 1, '', 0),
(5, 1, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_agriproduction`
--

CREATE TABLE IF NOT EXISTS `usergroup_agriproduction` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_cashier`
--

CREATE TABLE IF NOT EXISTS `usergroup_cashier` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_client`
--

CREATE TABLE IF NOT EXISTS `usergroup_client` (
  `userid` int(11) NOT NULL,
  `userbirthdate` date NOT NULL,
  `usernationality` char(2) NOT NULL,
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
(1, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_hazcontrol`
--

CREATE TABLE IF NOT EXISTS `usergroup_hazcontrol` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_plantprotection`
--

CREATE TABLE IF NOT EXISTS `usergroup_plantprotection` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_registrar`
--

CREATE TABLE IF NOT EXISTS `usergroup_registrar` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpasssha1`, `userallowed`, `userrealname`) VALUES
(1, 'nutsumiya', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Nut Za');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

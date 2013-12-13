-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2013 at 06:20 PM
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

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`certid`, `certno`, `userid`, `expdate`, `certtype`, `jsondata`) VALUES
(1, '', 1, '2557-01-31', 1, '31'),
(2, '', 1, '2013-12-09', 1, 'sasdas'),
(3, '??.4 0023/', 1, '2014-12-13', 2, '""'),
(4, 'วอ.4 0024/', 1, '2014-12-13', 2, '""'),
(5, 'วอ.4 0025/', 1, '2014-12-13', 2, '""'),
(6, 'วอ.4 0026/', 1, '2014-12-13', 2, '""'),
(7, 'วอ.4 0027/', 1, '2014-12-13', 2, '""'),
(8, 'วอ.4 0028/', 1, '2014-12-13', 2, '""'),
(9, 'วอ.4 0029/', 1, '2014-12-13', 2, '""'),
(10, 'วอ.4 0030/2556', 1, '2014-12-13', 2, '""'),
(11, 'วอ.4 0031/2556', 1, '2014-12-13', 2, '""'),
(12, 'วอ.4 0032/2556', 1, '2014-12-13', 2, '""');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

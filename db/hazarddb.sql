-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2014 at 05:27 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`certid`, `certno`, `userid`, `expdate`, `certtype`, `jsondata`) VALUES
(13, 'วอ./กษ./กวก.2 0001/2556', 4, '2014-12-15', 5, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 2","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"Acetonitrile ; Methylcyanide","hazardformulation":"C2H3N","businessname":"75-05-8","producer":"J.T. Baker INC MADE IN USA","importer":"J.T. Baker INC","saleman":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e40\\u0e21\\u0e2d\\u0e23\\u0e4c\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","container":"\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e43\\u0e2a\\u0e48\\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19\\u0e17\\u0e35\\u0e48\\u0e21\\u0e34\\u0e14\\u0e0a\\u0e34\\u0e14\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e17\\u0e35\\u0e48\\u0e21\\u0e35\\u0e23\\u0e30\\u0e1a\\u0e1a\\u0e23\\u0e30\\u0e1a\\u0e32\\u0e22\\u0e2d\\u0e32\\u0e01\\u0e32\\u0e28 \\u0e42\\u0e14\\u0e22\\u0e21\\u0e35\\u0e02\\u0e19\\u0e32\\u0e14\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e44\\u0e21\\u0e48\\u0e40\\u0e01\\u0e34\\u0e19 1 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","purpose":"\\u0e43\\u0e0a\\u0e49\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e2a\\u0e32\\u0e23\\u0e27\\u0e34\\u0e40\\u0e04\\u0e23\\u0e32\\u0e30\\u0e2b\\u0e4c\\u0e41\\u0e25\\u0e30\\u0e17\\u0e14\\u0e2a\\u0e2d\\u0e1a (reagent) \\u0e17\\u0e32\\u0e07\\u0e40\\u0e04\\u0e21\\u0e35\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e1b\\u0e0f\\u0e34\\u0e1a\\u0e31\\u0e15\\u0e34\\u0e01\\u0e32\\u0e23","picarr":"[\\"image2.jpg\\",\\"image3.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27","create_date":"2013-12-15"}'),
(14, 'วอ./กษ./กวก.2 0002/2556', 4, '2014-12-15', 5, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 3","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"Acetonitrile ; Methylcyanide","hazardformulation":"C2H3N","businessname":"75-05-8","producer":"J.T. Baker INC MADE IN USA","importer":"J.T. Baker INC","saleman":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e40\\u0e21\\u0e2d\\u0e23\\u0e4c\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","container":"\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e43\\u0e2a\\u0e48\\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19\\u0e17\\u0e35\\u0e48\\u0e21\\u0e34\\u0e14\\u0e0a\\u0e34\\u0e14\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e17\\u0e35\\u0e48\\u0e21\\u0e35\\u0e23\\u0e30\\u0e1a\\u0e1a\\u0e23\\u0e30\\u0e1a\\u0e32\\u0e22\\u0e2d\\u0e32\\u0e01\\u0e32\\u0e28 \\u0e42\\u0e14\\u0e22\\u0e21\\u0e35\\u0e02\\u0e19\\u0e32\\u0e14\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e44\\u0e21\\u0e48\\u0e40\\u0e01\\u0e34\\u0e19 1 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","purpose":"\\u0e43\\u0e0a\\u0e49\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e2a\\u0e32\\u0e23\\u0e27\\u0e34\\u0e40\\u0e04\\u0e23\\u0e32\\u0e30\\u0e2b\\u0e4c\\u0e41\\u0e25\\u0e30\\u0e17\\u0e14\\u0e2a\\u0e2d\\u0e1a (reagent) \\u0e17\\u0e32\\u0e07\\u0e40\\u0e04\\u0e21\\u0e35\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e1b\\u0e0f\\u0e34\\u0e1a\\u0e31\\u0e15\\u0e34\\u0e01\\u0e32\\u0e23","picarr":"[\\"image6.jpg\\",\\"image7.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27","create_date":"2013-12-15"}'),
(15, 'วอ./กษ./กวก.2 0003/2556', 4, '2014-12-15', 5, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 2","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"\\u0e19\\u0e49\\u0e33\\u0e27\\u0e48\\u0e32\\u0e27","hazardformulation":"","businessname":"","producer":"","importer":"","saleman":"","container":"","purpose":"","picarr":"","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27","create_date":"2013-12-15"}'),
(16, 'วอ.6 0001/2556', 4, '2014-12-15', 3, '{"storename":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e1b.\\u0e40\\u0e04\\u0e21\\u0e35\\u0e40\\u0e17\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","storehouse":"249","storevillage":"5","storedrive":"1","storeroad":"\\u0e2a\\u0e34\\u0e23\\u0e34\\u0e19\\u0e18\\u0e23","storesubdistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1a\\u0e33\\u0e2b\\u0e23\\u0e38","storedistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1e\\u0e25\\u0e31\\u0e14","storeprovince":"\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e17\\u0e1e","storepostalcode":"10700","storephone":"0-2424-9438","storefax":"0-2434-6103","storespecialist":"\\u0e19\\u0e32\\u0e22 \\u0e2a\\u0e21\\u0e1a\\u0e31\\u0e15\\u0e34  \\u0e40\\u0e2b\\u0e2a\\u0e01\\u0e38\\u0e25","certidref":"14","orderCountry":"\\u0e44\\u0e17\\u0e22","quantity":"200 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","note":"-","picarr":"[\\"image.jpg\\",\\"image1.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27","create_date":"2013-12-15"}'),
(17, 'วอ.8 0001/2556', 4, '2014-12-15', 4, '{"storename":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e1b.\\u0e40\\u0e04\\u0e21\\u0e35\\u0e40\\u0e17\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","storehouse":"249","storevillage":"5","storedrive":"1","storeroad":"\\u0e2a\\u0e34\\u0e23\\u0e34\\u0e19\\u0e18\\u0e23","storesubdistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1a\\u0e33\\u0e2b\\u0e23\\u0e38","storedistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1e\\u0e25\\u0e31\\u0e14","storeprovince":"\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e17\\u0e1e","storepostalcode":"10700","storephone":"0-2424-9438","storefax":"0-2434-6103","storespecialist":"\\u0e19\\u0e32\\u0e22 \\u0e2a\\u0e21\\u0e1a\\u0e31\\u0e15\\u0e34  \\u0e40\\u0e2b\\u0e2a\\u0e01\\u0e38\\u0e25","purpose":"\\u0e02\\u0e32\\u0e22","purpose_other":"","certidref":"13","quantity":"200 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","area":"1000 \\u0e15\\u0e32\\u0e23\\u0e32\\u0e07\\u0e40\\u0e21\\u0e15\\u0e23","picarr":"[\\"image2.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27","create_date":"2013-12-15"}');

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
(3, 1),
(4, 1),
(5, 3),
(6, 0),
(7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `requesttype` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`requesttype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`picid`, `requestid`, `pictype`, `picname`) VALUES
(2, 6, 1, 'image2.jpg'),
(3, 6, 1, 'image3.jpg'),
(4, 6, 2, 'image4.jpg'),
(5, 6, 2, 'image5.jpg'),
(6, 6, 3, 'slip.jpg'),
(7, 7, 1, 'image6.jpg'),
(8, 7, 1, 'image7.jpg'),
(9, 7, 2, 'image8.jpg'),
(10, 7, 2, 'image9.jpg'),
(11, 7, 3, 'slip1.jpg'),
(12, 5, 3, 'slip.jpg'),
(13, 8, 1, 'image.jpg'),
(14, 8, 1, 'image1.jpg'),
(15, 8, 3, 'slip1.jpg'),
(16, 10, 1, 'image2.jpg'),
(17, 10, 3, 'slip2.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestid`, `userid`, `requesttype`, `jsondata`, `progress`, `certid`, `certidref`, `date`) VALUES
(5, 4, 0, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 2","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"\\u0e19\\u0e49\\u0e33\\u0e27\\u0e48\\u0e32\\u0e27","hazardformulation":"","businessname":"","producer":"","importer":"","saleman":"","container":"","purpose":"","picarr":"","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27"}', 6, 15, 0, '2013-12-15'),
(6, 4, 0, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 2","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"Acetonitrile ; Methylcyanide","hazardformulation":"C2H3N","businessname":"75-05-8","producer":"J.T. Baker INC MADE IN USA","importer":"J.T. Baker INC","saleman":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e40\\u0e21\\u0e2d\\u0e23\\u0e4c\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","container":"\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e43\\u0e2a\\u0e48\\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19\\u0e17\\u0e35\\u0e48\\u0e21\\u0e34\\u0e14\\u0e0a\\u0e34\\u0e14\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e17\\u0e35\\u0e48\\u0e21\\u0e35\\u0e23\\u0e30\\u0e1a\\u0e1a\\u0e23\\u0e30\\u0e1a\\u0e32\\u0e22\\u0e2d\\u0e32\\u0e01\\u0e32\\u0e28 \\u0e42\\u0e14\\u0e22\\u0e21\\u0e35\\u0e02\\u0e19\\u0e32\\u0e14\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e44\\u0e21\\u0e48\\u0e40\\u0e01\\u0e34\\u0e19 1 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","purpose":"\\u0e43\\u0e0a\\u0e49\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e2a\\u0e32\\u0e23\\u0e27\\u0e34\\u0e40\\u0e04\\u0e23\\u0e32\\u0e30\\u0e2b\\u0e4c\\u0e41\\u0e25\\u0e30\\u0e17\\u0e14\\u0e2a\\u0e2d\\u0e1a (reagent) \\u0e17\\u0e32\\u0e07\\u0e40\\u0e04\\u0e21\\u0e35\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e1b\\u0e0f\\u0e34\\u0e1a\\u0e31\\u0e15\\u0e34\\u0e01\\u0e32\\u0e23","picarr":"[\\"image2.jpg\\",\\"image3.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27"}', 101, 13, 0, '2013-12-15'),
(7, 4, 0, '{"group":"\\u0e0a\\u0e19\\u0e34\\u0e14\\u0e17\\u0e35\\u0e48 3","purposefirst":"\\u0e19\\u0e33\\u0e40\\u0e02\\u0e49\\u0e32","hazardname":"Acetonitrile ; Methylcyanide","hazardformulation":"C2H3N","businessname":"75-05-8","producer":"J.T. Baker INC MADE IN USA","importer":"J.T. Baker INC","saleman":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e40\\u0e21\\u0e2d\\u0e23\\u0e4c\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","container":"\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e43\\u0e2a\\u0e48\\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19\\u0e17\\u0e35\\u0e48\\u0e21\\u0e34\\u0e14\\u0e0a\\u0e34\\u0e14\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e17\\u0e35\\u0e48\\u0e21\\u0e35\\u0e23\\u0e30\\u0e1a\\u0e1a\\u0e23\\u0e30\\u0e1a\\u0e32\\u0e22\\u0e2d\\u0e32\\u0e01\\u0e32\\u0e28 \\u0e42\\u0e14\\u0e22\\u0e21\\u0e35\\u0e02\\u0e19\\u0e32\\u0e14\\u0e1a\\u0e23\\u0e23\\u0e08\\u0e38\\u0e44\\u0e21\\u0e48\\u0e40\\u0e01\\u0e34\\u0e19 1 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","purpose":"\\u0e43\\u0e0a\\u0e49\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e2a\\u0e32\\u0e23\\u0e27\\u0e34\\u0e40\\u0e04\\u0e23\\u0e32\\u0e30\\u0e2b\\u0e4c\\u0e41\\u0e25\\u0e30\\u0e17\\u0e14\\u0e2a\\u0e2d\\u0e1a (reagent) \\u0e17\\u0e32\\u0e07\\u0e40\\u0e04\\u0e21\\u0e35\\u0e43\\u0e19\\u0e2b\\u0e49\\u0e2d\\u0e07\\u0e1b\\u0e0f\\u0e34\\u0e1a\\u0e31\\u0e15\\u0e34\\u0e01\\u0e32\\u0e23","picarr":"[\\"image6.jpg\\",\\"image7.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27"}', 101, 14, 0, '2013-12-15'),
(8, 4, 4, '{"storename":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e1b.\\u0e40\\u0e04\\u0e21\\u0e35\\u0e40\\u0e17\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","storehouse":"249","storevillage":"5","storedrive":"1","storeroad":"\\u0e2a\\u0e34\\u0e23\\u0e34\\u0e19\\u0e18\\u0e23","storesubdistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1a\\u0e33\\u0e2b\\u0e23\\u0e38","storedistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1e\\u0e25\\u0e31\\u0e14","storeprovince":"\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e17\\u0e1e","storepostalcode":"10700","storephone":"0-2424-9438","storefax":"0-2434-6103","storespecialist":"\\u0e19\\u0e32\\u0e22 \\u0e2a\\u0e21\\u0e1a\\u0e31\\u0e15\\u0e34  \\u0e40\\u0e2b\\u0e2a\\u0e01\\u0e38\\u0e25","certidref":"14","orderCountry":"\\u0e44\\u0e17\\u0e22","quantity":"200 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","note":"-","picarr":"[\\"image.jpg\\",\\"image1.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27"}', 101, 16, 14, '2013-12-15'),
(9, 4, 1, '{"certidref":"13","picarr":""}', 1, 0, 13, '2013-12-15'),
(10, 4, 5, '{"storename":"\\u0e1a\\u0e23\\u0e34\\u0e29\\u0e31\\u0e17 \\u0e1b.\\u0e40\\u0e04\\u0e21\\u0e35\\u0e40\\u0e17\\u0e04 \\u0e08\\u0e33\\u0e01\\u0e31\\u0e14","storehouse":"249","storevillage":"5","storedrive":"1","storeroad":"\\u0e2a\\u0e34\\u0e23\\u0e34\\u0e19\\u0e18\\u0e23","storesubdistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1a\\u0e33\\u0e2b\\u0e23\\u0e38","storedistrict":"\\u0e1a\\u0e32\\u0e07\\u0e1e\\u0e25\\u0e31\\u0e14","storeprovince":"\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e17\\u0e1e","storepostalcode":"10700","storephone":"0-2424-9438","storefax":"0-2434-6103","storespecialist":"\\u0e19\\u0e32\\u0e22 \\u0e2a\\u0e21\\u0e1a\\u0e31\\u0e15\\u0e34  \\u0e40\\u0e2b\\u0e2a\\u0e01\\u0e38\\u0e25","purpose":"\\u0e02\\u0e32\\u0e22","purpose_other":"","certidref":"13","quantity":"200 \\u0e41\\u0e01\\u0e25\\u0e25\\u0e2d\\u0e19","area":"1000 \\u0e15\\u0e32\\u0e23\\u0e32\\u0e07\\u0e40\\u0e21\\u0e15\\u0e23","picarr":"[\\"image2.jpg\\"]","officername":"\\u0e04\\u0e34\\u0e21 \\u0e08\\u0e2d\\u0e07 \\u0e2d\\u0e34\\u0e27"}', 101, 17, 13, '2013-12-15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usergroup_cashier`
--

INSERT INTO `usergroup_cashier` (`cash_id`, `userid`) VALUES
(2, 3),
(3, 17),
(4, 18);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `usergroup_client`
--

INSERT INTO `usergroup_client` (`client_id`, `userid`, `userbirthdate`, `usernationality`, `usertaxid`, `useraddrhouse`, `useraddrvillage`, `useraddrdrive`, `useraddrroad`, `useraddrsubdistrict`, `useraddrdistrict`, `useraddrprovince`, `userpostalcode`, `userphone`, `userfax`, `useremail`) VALUES
(3, 4, '1992-09-18', 'ไทย', '5410500199', '50', '', '', 'พหลโยธิน ', 'ลาดยาว', 'จัตุจักร', 'กรุงเทพ', '10900', '0941238573', '', 'devil_karuma@gmail.com'),
(4, 16, '1993-10-01', 'ไทย', '1709900774223', '90/96', '1', '9', '-', 'หนองอ้อ', 'บ้านโป่ง', 'ราชบุรี', '70110', '087-7552233', '-', 'serpierio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup_hazcontrol`
--

CREATE TABLE IF NOT EXISTS `usergroup_hazcontrol` (
  `haz_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`haz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `userpasssha1`, `userallowed`, `userrealname`) VALUES
(0, 'rootz', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Miyabi'),
(2, 'test_agriproduction', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ปกป้อง กรรมผลิต'),
(3, 'test_cashier', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ธนบัตร วงศ์ธนบัตร'),
(4, 'test_client', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ทรงสิทธิ์ สิทธ์ก้าวไกล'),
(5, 'test_hazcontrol', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'คิม จอง อิว'),
(6, 'test_plantprotection', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'อารักษ์ ไพรเถาวัล'),
(7, 'test_registrar', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'ทะเบียน เทียนสองเล่ม'),
(16, 'serpierio', '48efc4851e15940af5d477d3c0ce99211a70a3be', 1, 'ชานน  จิตพรหม'),
(17, 'money', '2fa4398b1353f2358e3d7389a80c3c7861ad7691', 1, 'เงิน'),
(18, 'moneyy', 'a0180bdb4ed01a9e504af112be97b248cb42032f', 1, 'moneyy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

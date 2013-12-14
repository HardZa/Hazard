-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- โฮสต์: 127.0.0.1
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.5.32
-- รุ่นของ PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `hazarddb`
--
CREATE DATABASE IF NOT EXISTS `hazarddb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hazarddb`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `certificate`
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
-- dump ตาราง `certificate`
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

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `certificate_running_no`
--

CREATE TABLE IF NOT EXISTS `certificate_running_no` (
  `certtype` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  PRIMARY KEY (`certtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- dump ตาราง `certificate_running_no`
--

INSERT INTO `certificate_running_no` (`certtype`, `no`) VALUES
(1, 0),
(2, 32),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `picid` int(11) NOT NULL AUTO_INCREMENT,
  `requestid` int(11) NOT NULL,
  `pictype` int(11) NOT NULL,
  `picname` varchar(50) NOT NULL,
  PRIMARY KEY (`picid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `picture`
--

INSERT INTO `picture` (`picid`, `requestid`, `pictype`, `picname`) VALUES
(1, 3, 1, 'sohee4.jpg');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `request`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- dump ตาราง `request`
--

INSERT INTO `request` (`requestid`, `userid`, `requesttype`, `jsondata`, `progress`, `certid`, `certidref`, `date`) VALUES
(1, 4, 1, '{"hazardtype":"3","hazardfor":"u0e19u0e33u0e40u0e02u0e49u0e32","hazardname":"u0e19u0e49u0e33u0e04u0e27u0e22","solchem":"/u0e45-","businessname":"/u0e33u0e44u0e14","producername":"u0e33u0e14u0e33","importername":"u0e40u0e33u0e40u0e33","agentname":"u0e33u0e40u0e33","detailpackage":"u0e40u0e33u0e40","typeforuse":"u0e33u0e40u0e33"}', 0, 0, 0, '0000-00-00'),
(2, 4, 1, '{"hazardtype":"2","hazardfor":"u0e19u0e33u0e40u0e02u0e49u0e32","hazardname":"fee","solchem":"","businessname":"","producername":"","importername":"","agentname":"","detailpackage":"","typeforuse":"","file1":"THIRD-I - WIN_20131113_232529.JPG","picarr":""}', 0, 0, 0, '0000-00-00'),
(3, 4, 0, '{"group":"3","purposefirst":"u0e19u0e33u0e40u0e02u0e49u0e32","hazardname":"u0e19u0e49u0e33u0e40u0e1bu0e25u0e48u0e32","hazardformulation":"H2O","businessname":"u0e40u0e19u0e2au0e40u0e25","producer":"u0e44u0e17u0e22u0e04u0e39u0e48u0e1fu0e49u0e32","importer":"u0e2du0e32u0e01u0e07","saleman":"u0e2du0e32u0e21u0e32","container":"u0e02u0e27u0e14u0e40u0e1bu0e4au0e1bu0e0bu0e35u0e48","purpose":"u0e01u0e34u0e19u0e01u0e34u0e19","picarr":"["sohee4.jpg"]"}', 1, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_agriproduction`
--

CREATE TABLE IF NOT EXISTS `usergroup_agriproduction` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `usergroup_agriproduction`
--

INSERT INTO `usergroup_agriproduction` (`userid`) VALUES
(2);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_cashier`
--

CREATE TABLE IF NOT EXISTS `usergroup_cashier` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `usergroup_cashier`
--

INSERT INTO `usergroup_cashier` (`userid`) VALUES
(3),
(9);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_client`
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
-- dump ตาราง `usergroup_client`
--

INSERT INTO `usergroup_client` (`userid`, `userbirthdate`, `usernationality`, `usertaxid`, `useraddrhouse`, `useraddrvillage`, `useraddrdrive`, `useraddrroad`, `useraddrsubdistrict`, `useraddrdistrict`, `useraddrprovince`, `userpostalcode`, `userphone`, `userfax`, `useremail`) VALUES
(4, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '2556-12-12', '', '123', '213', '', '', 'wwq', 'w', '', 'w', 'w', 'w', '', ''),
(15, '0000-00-00', '', '1', 'sda', 'dsa', '', 'd', 'dsa', '', 'sda', 'dsa', 'ads', '', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_hazcontrol`
--

CREATE TABLE IF NOT EXISTS `usergroup_hazcontrol` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `usergroup_hazcontrol`
--

INSERT INTO `usergroup_hazcontrol` (`userid`) VALUES
(5),
(8),
(11),
(12);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_plantprotection`
--

CREATE TABLE IF NOT EXISTS `usergroup_plantprotection` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `usergroup_plantprotection`
--

INSERT INTO `usergroup_plantprotection` (`userid`) VALUES
(6),
(10),
(14);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `usergroup_registrar`
--

CREATE TABLE IF NOT EXISTS `usergroup_registrar` (
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `usergroup_registrar`
--

INSERT INTO `usergroup_registrar` (`userid`) VALUES
(7);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `users`
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
-- dump ตาราง `users`
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
(11, 'argong', '5a4cd2f7a935f79a08d63ccf3c59332e049e1ace', 1, 'asdfg'),
(12, 'erwe', 'b62b150e3da668eb6b456ee4f13902e54547ef89', 1, 'ewrwe'),
(13, 'oiuytre', '83e07198a4c511545f7831dd92a6b075b200ac43', 1, 'ewrwe'),
(14, 'asdasd', '6bf911475242d2a972fcae57c2bc6541a011a498', 1, 'ss'),
(15, 'aaaaaa', 'a35f4735b31b1fec08b3fcaf8cac8d0d289c7809', 1, 'ss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

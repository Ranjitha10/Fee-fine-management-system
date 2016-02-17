-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 01:18 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ots`
--
CREATE DATABASE IF NOT EXISTS `ots` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ots`;

-- --------------------------------------------------------

--
-- Table structure for table `clogin`
--

CREATE TABLE IF NOT EXISTS `clogin` (
  `cid` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clogin`
--

INSERT INTO `clogin` (`cid`, `password`) VALUES
('PRY', 'priyad'),
('SMT', 'smita');

-- --------------------------------------------------------

--
-- Table structure for table `cmsg`
--

CREATE TABLE IF NOT EXISTS `cmsg` (
  `usn` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `cmsg` varchar(500) NOT NULL,
  PRIMARY KEY (`usn`,`cmsg`),
  KEY `usn` (`usn`,`cid`),
  KEY `usn_2` (`usn`,`cmsg`),
  KEY `usn_3` (`usn`,`cmsg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmsg`
--

INSERT INTO `cmsg` (`usn`, `cid`, `cmsg`) VALUES
('1RV12IS018', 'PRY', ':)'),
('1RV12IS018', 'PRY', 'Hii');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE IF NOT EXISTS `counsellor` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `batch` varchar(2) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`fname`, `lname`, `cid`, `gender`, `email`, `phone`, `batch`) VALUES
('Priya', 'D', 'PRY', 'f', 'priya@gmail', 7896789902, 'B3'),
('Smita', 'GR', 'SMT', 'f', 'smita@gmail', 8889765476, 'B4');

-- --------------------------------------------------------

--
-- Table structure for table `feepayment`
--

CREATE TABLE IF NOT EXISTS `feepayment` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `usn` varchar(10) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `feetype` varchar(20) NOT NULL,
  `challan` int(5) NOT NULL,
  `challandate` date NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`challan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feepayment`
--

INSERT INTO `feepayment` (`fname`, `lname`, `usn`, `batch`, `feetype`, `challan`, `challandate`, `amount`) VALUES
('Garima', 'Chandra', '1RV12IS018', 'B3', 'Admission Fee', 1212, '2015-04-21', 143000),
('Garima', 'Chandra', '1RV12IS018', 'B3', 'Fastrack Fee', 1789, '2015-05-02', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `finepayment`
--

CREATE TABLE IF NOT EXISTS `finepayment` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `usn` varchar(10) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `finetype` varchar(20) NOT NULL,
  `challan` int(5) NOT NULL,
  `challandate` date NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`challan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finepayment`
--

INSERT INTO `finepayment` (`fname`, `lname`, `usn`, `batch`, `finetype`, `challan`, `challandate`, `amount`) VALUES
('Garima', 'Chandra', '1RV12IS018', 'B3', 'Cell phone Fine', 1324, '2015-04-11', 50),
('Garima', 'Chandra', '1RV12IS018', 'B3', 'Lab Fine', 1675, '2015-04-17', 100),
('Garima', 'Chandra', '1RV12IS018', 'B3', 'Cell phone Fine', 2015, '2015-04-25', 200);

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE IF NOT EXISTS `slogin` (
  `susn` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`susn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`susn`, `password`) VALUES
('1RV12IS018', 'sachin'),
('1RV12IS055', 'supra'),
('1RV12IS059', 'utkar');

-- --------------------------------------------------------

--
-- Table structure for table `smsg`
--

CREATE TABLE IF NOT EXISTS `smsg` (
  `usn` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `smsg` varchar(500) NOT NULL,
  PRIMARY KEY (`usn`,`smsg`),
  KEY `usn` (`usn`,`smsg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsg`
--

INSERT INTO `smsg` (`usn`, `cid`, `smsg`) VALUES
('1RV12IS018', 'PRY', 'asd'),
('1RV12IS018', 'PRY', 'Helloooo');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `sem` int(1) NOT NULL,
  `cid` varchar(10) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `gender`, `usn`, `email`, `phone`, `batch`, `sem`, `cid`) VALUES
('Garima', 'Chandra', 'f', '1RV12IS018', 'garima.kuul@gmail.co', 9835111122, 'B3', 6, 'PRY'),
('Karan', 'Nath', 'm', '1RV12IS020', 'karan@gmail.com', 9998726845, 'B3', 6, '769'),
('Kushal', 'Jain', 'm', '1RV12IS021', 'kushal@gmail.com', 9993334001, 'B1', 6, '8888'),
('Suprateek', 'Singh', 'm', '1RV12IS055', 'suprateek10@gmail.co', 9066157479, 'B3', 6, 'PRY'),
('Utkarsh', 'Roy', 'm', '1RV12IS059', 'utkarsh@gmail.com', 9998886542, 'B4', 6, 'SMT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

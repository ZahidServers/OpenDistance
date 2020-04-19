-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 01:42 PM
-- Server version: 5.7.26
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentenrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `playlist` varchar(250) NOT NULL,
  `keywords` text NOT NULL,
  `type` varchar(800) NOT NULL,
  `subtype` varchar(150) NOT NULL,
  `hrs` float NOT NULL,
  `difficulty` int(15) NOT NULL,
  `exams` int(15) NOT NULL,
  `mexam` varchar(15) NOT NULL,
  `ratings` int(3) DEFAULT NULL,
  `iv` int(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `address` text NOT NULL,
  `payment` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `currency` text NOT NULL,
  `ORDERID` text NOT NULL,
  `TXNID` text NOT NULL,
  `PAYMENTMODE` text NOT NULL,
  `MID` text NOT NULL,
  `STATUS` text NOT NULL,
  `RESPCODE` text NOT NULL,
  `RESPMSG` text NOT NULL,
  `GATEWAYNAME` text NOT NULL,
  `BANKTXNID` text NOT NULL,
  `BANKNAME` text NOT NULL,
  `completed` varchar(7) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` text NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `part` int(25) NOT NULL,
  `exam` int(25) NOT NULL,
  `iv` int(11) NOT NULL,
  `description` text NOT NULL,
  `Question` text,
  `opt1` varchar(255) DEFAULT NULL,
  `opt2` varchar(255) DEFAULT NULL,
  `opt3` varchar(255) DEFAULT NULL,
  `opt4` varchar(255) DEFAULT NULL,
  `ans` varchar(255) DEFAULT NULL,
  `1Question` text,
  `1ans` varchar(255) DEFAULT NULL,
  `1opt1` varchar(255) DEFAULT NULL,
  `1opt2` varchar(255) DEFAULT NULL,
  `1opt3` varchar(255) DEFAULT NULL,
  `1opt4` varchar(255) DEFAULT NULL,
  `2Question` text,
  `2ans` varchar(255) DEFAULT NULL,
  `2opt1` varchar(255) DEFAULT NULL,
  `2opt2` varchar(255) DEFAULT NULL,
  `2opt3` varchar(255) DEFAULT NULL,
  `2opt4` varchar(255) DEFAULT NULL,
  `3Question` text,
  `3ans` varchar(255) DEFAULT NULL,
  `3opt1` varchar(255) DEFAULT NULL,
  `3opt2` varchar(255) DEFAULT NULL,
  `3opt3` varchar(255) DEFAULT NULL,
  `3opt4` varchar(255) DEFAULT NULL,
  `4Question` text,
  `4ans` varchar(255) DEFAULT NULL,
  `4opt1` varchar(255) DEFAULT NULL,
  `4opt2` varchar(255) DEFAULT NULL,
  `4opt3` varchar(255) DEFAULT NULL,
  `4opt4` varchar(255) DEFAULT NULL,
  `5Question` text,
  `5ans` varchar(255) DEFAULT NULL,
  `5opt1` varchar(255) DEFAULT NULL,
  `5opt2` varchar(255) DEFAULT NULL,
  `5opt3` varchar(255) DEFAULT NULL,
  `5opt4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `address` text NOT NULL,
  `payment` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `currency` text NOT NULL,
  `ORDERID` text NOT NULL,
  `TXNID` text NOT NULL,
  `PAYMENTMODE` text NOT NULL,
  `MID` text NOT NULL,
  `STATUS` text NOT NULL,
  `RESPCODE` text NOT NULL,
  `RESPMSG` text NOT NULL,
  `GATEWAYNAME` text NOT NULL,
  `BANKTXNID` text NOT NULL,
  `BANKNAME` text NOT NULL,
  `completed` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `tdelivery`
--

CREATE TABLE IF NOT EXISTS `tdelivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `uid`
--

CREATE TABLE IF NOT EXISTS `uid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `course` int(11) DEFAULT NULL,
  `part` int(11) DEFAULT NULL,
  `marks` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `pro` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(12) NOT NULL,
  `hsc` float NOT NULL,
  `ssc` float NOT NULL,
  `yssc` int(10) NOT NULL,
  `yhsc` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pcode` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `father` varchar(60) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `fincome` int(20) NOT NULL,
  `photo` varchar(80) DEFAULT 'a.jpg',
  `enrolled` text,
  `completed` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  FULLTEXT KEY `address` (`address`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2019 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

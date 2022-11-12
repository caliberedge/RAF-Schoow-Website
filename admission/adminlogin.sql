-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 08:02 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `week`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `category` varchar(15) NOT NULL,
  `depname` varchar(45) NOT NULL,
  `appname` varchar(45) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `tranzid` varchar(60) NOT NULL,
   PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`applicant_id`, `date`, `category`, `depname`, `appname`, `bank`, `tranzid`) VALUES
(45, '2012-08-19 17:37:25', 'student', 'Moji', 'lucia', 'zenith', '1234567890000'),
(44, '2012-08-19 17:23:04', 'student', 'Yemi', 'joseph', 'GTBank', '3344556677889900'),

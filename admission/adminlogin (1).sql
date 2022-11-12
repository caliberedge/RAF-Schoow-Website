-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2013 at 10:39 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
   `depname` varchar(45) NOT NULL,
  `appname` varchar(45) NOT NULL,
  `bank` varchar(60) NOT NULL,
  `tranzid` varchar(60) NOT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`applicant_id`, `date`, `depname`, `appname`, `bank`, `tranzid`) VALUES
(46, '2013-12-18 11:24:24', 'Isaiah', 'ojokoro', 'GTBank', '55778899001122'),
(47, '2013-12-18 11:33:03', 'Israel Olatunji', 'onome ruth', 'Zenith Bank', '10010002000');

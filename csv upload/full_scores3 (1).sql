-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 04:19 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sonluth`
--

-- --------------------------------------------------------

--
-- Table structure for table `full_scores3`
--

CREATE TABLE IF NOT EXISTS `full_scores3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_no` varchar(20) NOT NULL,
  `names` varchar(200) NOT NULL,
  `form_no` varchar(20) NOT NULL,
  `first_choice` varchar(40) NOT NULL,
  `second_choice` varchar(40) NOT NULL,
  `third_choice` varchar(40) NOT NULL,
  `paper1` varchar(40) NOT NULL,
  `paper2` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `average` varchar(30) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `age` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `full_scores3`
--

INSERT INTO `full_scores3` (`id`, `serial_no`, `names`, `form_no`, `first_choice`, `second_choice`, `third_choice`, `paper1`, `paper2`, `total`, `average`, `dob`, `age`, `phone`) VALUES
(1, '1', 'IGWEH JOSHUA WONUN', '000799', 'PH', 'LAGOS', 'CALABAR', '74.5', '64.5', '139', '69.5', '16/07/2007', '8 YRS 2M', '08058089610, 07068628575'),
(2, '2', 'SAWYERR REJOICE OGHENEKPAROBO', '00000214', 'PH', 'WARRI ', 'CAL', '89', '81.5', '170.5', '85.25', '12/4/2007', '8YRS 9M', '08023703480,'),
(3, '3', 'SADIBO DORATHY OLUWABUSAYO', '00000070', 'PH', 'CAL', 'WARRI', '82', '84', '166', '83', '1/8/2007', '9YRS 4M', '08063449703'),
(4, '4', 'OGWUTUM ANNABEL', '01609', 'PH', 'BENIN', 'WARRI', '84', '81', '165', '82.5', '2/5/2007', '9 YRS 5M', '08035503241'),
(5, '5', 'ANUFORONIN FRANKLIN. C.', '00000200', 'PH', 'WARRI', 'ONITSHA', '76', '82', '158', '79', '4/14/2007', '9YRS 5M', '07034409893'),
(6, '6', 'OBAYI EBOSETAYE A.', '00000619', 'WARRI', 'PHC', 'BENIN', '78', '79.5', '157.5', '78.75', '3/7/2007', '9 YRS 6M', '08033130009'),
(7, '7', 'ONUOBIA AMARACHI U.E.', '00001914', 'PH', 'CAL', 'WARRI', '79', '77.5', '156.5', '78.25', '6/2/2007', '9 YRS 3M', '08056583068'),
(8, '8', 'ACHA JEFFERY', '00001703', 'PH', 'WARRI', 'CAL', '71', '84.5', '155.5', '77.75', '5/29/2007', '9 YRS 4M', '08056062497'),
(9, '9', 'USANGA ANIETIE MFON', '00000662', 'PH', 'LAGOS', 'ABJ', '70', '85', '155', '77.5', '5/2/2007', '9YRS 4M', '08055026095'),
(10, '10', 'NDUBISI OLUIGBO PRINCEWILL', '00000116', 'PH', 'LAGOS ', 'WARRI', '77', '74.5', '151.5', '75.75', '3/14/2007', '9YRS 6M', '08033396920,'),
(11, '11', 'OGBUMBA SAMUEL CHIZITERE', '00000665', 'PH', 'ANAMBRA', 'CAL', '74', '75', '149', '74.5', '2/10/2007', '9 YRS 7M', '08034219320'),
(12, '12', 'JOHNNY EMMANUEL ETIM', '00000968', 'PH', 'CALABAR', 'NTEJE', '76', '72.5', '148.5', '74.25', '2/22/2007', '9 YRS 7M', '07017001106, 07013515799'),
(13, '13', 'UCHENDU MUNACHIMSO FAVOUR', '00000566', 'PH', 'ENUGU', 'CALABAR', '82.5', '65.5', '148', '74', '5/11/2007', '9 YRS 4M', '08068353080, 08030489094'),
(14, '14', 'ELIBE HELEN CHIOMA', '000197', 'PH', 'CALABAR', 'ONITSHA', '76', '70', '146', '73', '16/03/2007', '9 YRS 6M', '08037047150'),
(15, '15', 'OPARA COVENANT O.', '1605', 'PH', 'WARRI', 'CALABAR', '79', '66.5', '145.5', '72.75', '14/05/07', '9YRS 4M', '08085044182; 08036690920'),
(16, '16', 'UZOSIKE DAVID', '00001575', 'PH', 'CALABAR', 'WARRI', '65', '79', '144', '72', '6/7/2007', '9 YRS 2M', '08057002837, 08033426877'),
(17, '17', 'ONYEMACHI MERCY AMARACHI', '00000577', 'CALABAR', 'PH', 'ABUJA', '76', '67', '143', '71.5', '6/27/2007', '9 YRS 3M', '08064321555, 08037540424'),
(18, '18', 'KARIKPO KEANU GOTEH', '00001787', 'WARRI', 'PHC', 'ABUJA', '68', '75', '143', '71.5', '6/27/2007', '9 YRS 5M', '08034058009, 08035889389'),
(19, '19', 'HANSON PRINCE CHIBUEZE', '00001754', 'PH', 'CAL', 'WARRI', '70', '70', '140', '70', '9/18/2006', '10YRS', '08027861958'),
(20, '20', 'OYELAKIN MODUFE ENIOLA', '00001096', 'PH', 'IBADAN', 'CAL', '70', '68', '138', '69', '7/8/2007', '9YRS 2M', '08060604092'),
(21, '21', 'OKEKE FRANCES CHINDINMA', '00001771', 'PH', 'WARRI', 'ANAMBRA', '65', '70.5', '135.5', '67.75', '9/27/2007', '9 YRS', '08065913910'),
(22, '22', 'NJOKU EZEKIEL CHIMAOBI', '00000316', 'PH', 'ENUGU', 'PH ', '64.5', '70.5', '135', '67.5', '1/22/2007', '9 YRS 8M', '08037266991, 08034920111'),
(23, '23', 'NWANAKA WENDY OWUZEH', '00001271', 'PH', 'CAL', 'WARRI', '68', '63', '131', '65.5', '3/26/2007', '9YRS 6M', '08060960757,'),
(24, '24', 'MATTHEW-AWARI INCREASE', '1103', 'PH', 'ENUGU', 'CALABAR', '68.5', '62', '130.5', '65.25', '2/12/2007', '8YRS 9M', '08036713654; 08062302395'),
(25, '25', 'CHUKWUKAH GLORY C.', '00000436', 'PH', 'NTEJE', 'ENUGU', '73', '57', '130', '65', '6/8/2006', '10 YRS 3M', '08033361614, 08037058159'),
(26, '26', 'EROMOBOR ESEOHE', '00000069', 'PH', 'BENIN', 'WARRI', '61', '69', '130', '65', '9/21/2007', '9YRS', '08033487488'),
(27, '27', 'IRO-OKORO CHINEDUM D.', '00001660', 'PH', 'WARRI', 'CAL', '66', '62', '128', '64', '2/20/2007', '9 YRS 7M', '08036708887'),
(28, '28', 'EBOH PRECIOUS CHINENYE', '1435', 'PH', 'CALABAR', 'ENUGU', '52', '75', '127', '63.5', '19/2/07', '9YRS 7M', '08033103359; 08030857771'),
(29, '29', 'CHRIS OSOLENNOBHEN GIDEON', '00000743', 'WARRI', 'PHC', 'CAL', '65', '58', '123', '61.5', '10/7/2007', '8YRS 11M', '08033403936,'),
(30, '30', 'EBELECHUKWU HAREL C.', '00001690', 'PH', 'CAL', 'BENIN', '77', '45.5', '122.5', '61.25', '9/7/2007', '9 YRS', '08064005856'),
(31, '31', 'EMEJI PRINCESS CHIZEMEVUNUM', '00000965', 'PH', 'CAL', 'ABJ', '67', '55', '122', '61', '9/8/2006', '9 YRS', '08167615683, 08033403715'),
(32, '32', 'USSEN NEIL INIOBONG', '00001439', 'PH', '', '', '67', '53', '120', '60', '1/27/2007', '9 YRS 8M', '08036674848, 08029492996'),
(33, '33', 'OGECHI CONFIDENCE AZOR', '00001592', 'PH', 'ENUGU', 'ABUJA', '65', '53', '118', '59', '1/20/2007', '8YRS 8M', '08038147918'),
(34, '34', 'AMADI HACHIMENUMA MARTIN', '1388', 'PH', 'CALABAR', 'WARRI', '53', '65', '118', '59', '4/13/2007', '9YRS 5MM', '08033103619; 08068059687'),
(35, '35', 'OGBE INGONABO JANET', '00000317', 'PH', 'WARRI', 'CAL', '65', '52', '117', '58.5', '3/15/2006', '9YRS 6M', '08064869217'),
(36, '36', 'NWAKANMA CHIDERA D.', '01289', 'PH', 'CALABAR', 'ENUGU', '65', '51', '116', '58', '20-01-07', '9 YRS 8M', '08063544602'),
(37, '37', 'ALFRED-JACOB GREAT O.', '01336', 'PH', 'ENUGU', 'WARRI', '39.5', '76', '115.5', '57.75', '2/27/2007', '9 YRS 7M', '08055473883'),
(38, '38', 'MOSES WILFRED', '0783', 'PH', 'ONITSHA', 'CALABAR', '60', '53', '113', '56.5', '27/07/2007', '9 YRS 2M', '08035507630'),
(39, '39', 'OKACHI DIVINE HOMACHI', '00001209', 'PH', 'ABUJA', 'CAL', '60', '52.5', '112.5', '56.25', '6/1/2007', '9 YRS 3M', '08033711261'),
(40, '40', 'UGBEBOR ESTHER ISIOMA', '00001158', 'PH', 'WARRI', '', '65', '45', '110', '55', '5/1/2007', '9 YRS 4M', '08037292300'),
(41, '41', 'GOGO OWAJI OROI', '689', 'PH', 'BENIN', 'WARRI', '68', '40.5', '108.5', '54.25', '1/11/2007', '9YRS 8M', '08033776233; 07038727261'),
(42, '42', 'ONYEKACHI NORA', '00000938', 'PH', 'ENUGU', 'ONITSHA', '70', '37', '107', '53.5', '1/23/2007', '9YRS 8M', '07031547487'),
(43, '43', 'OKO-IKPOR ANTHONY.O', '00000098', 'PH', 'ENUGU', 'ABUJA', '49', '51', '100', '50', '5/26/2007', '9 YRS 4M', '08033465922'),
(44, '44', 'SHITTU OLUWATOSIN NAOMI', '00001338', 'PH', 'WARRI', 'ABUJA', '44', '34', '78', '39', '8/18/2007', '9YRS 1M', '08057054242'),
(45, '45', 'UBAH KINGSDIAMOND OBI', '00001307', 'PH', 'CALABAR', 'PH', '47.5', '30', '77.5', '38.75', '5/9/2007', '9 YRS 4M', '08033266564, 08033153803'),
(46, '46', 'DAN-PEPPLE DOREEN .T', '00000913', 'PH', 'ABUJA', 'WARRI', '54', '23', '77', '38.5', '22/09 2007', '9 YRS', '08033166380'),
(47, '47', 'UGO-CHINDA GOOD-SUCCES', '00001282', 'PH', 'WARRI', 'CALABAR', '71', '52', '123', '61.5', '10/25/2007', '8 YRS 11M', '08037799068, 08034917445');
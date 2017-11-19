-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2016 at 06:23 PM
-- Server version: 5.5.44-37.3
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `technfox_sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `invoiceno` int(11) NOT NULL,
  `chalanno` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `billdate` date NOT NULL,
  `company` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(900) COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `grandtotal` decimal(10,2) NOT NULL,
  `st` decimal(10,2) NOT NULL,
  `est` decimal(10,2) NOT NULL,
  `scst` decimal(10,2) NOT NULL,
  `finalamount` decimal(10,2) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `homeaddress` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `companyname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `companyadd` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `contactno` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mobileno` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `emailid` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `homeaddress`, `companyname`, `companyadd`, `contactno`, `mobileno`, `emailid`, `username`, `type`, `regdate`) VALUES
(1, 'Mr jasmeet', '    ', 'Rasi Seeds (P) Ltd.', '   174, Sathyamurthy road, Ram nagar, Coimbatore - 641009,   174, Sathyamurthy road, Ram nagar, Coimbatore - 641009,   174, Sathyamurthy road, Ram nagar, Coimbatore - 641009', ' ', ' ', ' ', 'admin', 'Customer', '2016-04-27 14:44:11'),
(2, 'Mr. GR Mohan', 'Mohan Sir       ', 'DECCAN CORE CROP SCIENCES,', 'Flat No. 302, DSR Complex, Sy. No# 90, \r\nBesides Dhola-ri-Dhani, Kompally, Secunderabad-500014\r\n', '08418-233350', '09989999069', 'Email: info.deccanccs@gmail.com', 'admin', 'Customer', '2016-05-01 14:02:37'),
(3, 'vinod', 'bhandup ', 'Technfox', 'bhandup', '8082495670', '8082495670', 'vinodbeloshe12@gmail.com', 'admin', 'Customer', '2016-06-06 16:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `simage` varchar(500) NOT NULL,
  `bimage` varchar(500) NOT NULL,
  `category` varchar(400) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `sid` int(11) NOT NULL,
  `jobid` int(10) NOT NULL AUTO_INCREMENT,
  `sorder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobdesc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `cname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`jobid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`sid`, `jobid`, `sorder`, `jobdesc`, `rate`, `quantity`, `amount`, `name`, `cname`, `date`, `status`, `username`, `regdate`) VALUES
(0, 4, '1', ' Sparks wheat Banner \r\nSize : 4 x 2 Ft\r\nDesign adaptation and Artwork in Hndi', '1499.50', 1, '1500.50', 'Mr. Jasmeet', 'Rasi Seeds (P) Ltd.', '2016-04-27', 'Processing', 'admin', '2016-04-27 14:56:29'),
(0, 5, '2', ' RRX 113 Paddy Keychain\r\nSize : 12 x 8inch\r\nDesign adaptation and Artwork in Hindi', '1500.30', 1, '1500.30', 'Mr. Jasmeet', 'Rasi Seeds (P) Ltd.', '2016-04-27', 'Processing', 'admin', '2016-04-27 14:56:29'),
(0, 6, '3', ' RRX 113 Paddy Testimonial Leaflet\r\nSize : 7 x 9 inch\r\nDesign adaptation and Artwork in Hindi', '1000.00', 1, '1000.00', 'Mr. Jasmeet', 'Rasi Seeds (P) Ltd.', '2016-04-27', 'Processing', 'admin', '2016-04-27 14:56:29'),
(0, 7, '4', ' Canopy- 1827 / RHR 333 / RRX 113\r\na) Backdrop Panel Designing - 4 x 7Ft\r\nb Bottom Panels - Design adaptation - 4 x 2.5 Ft\r\nc) Top Panels Design adaptation - 4 x 1 Ft', '2800.00', 1, '2800.00', 'Mr. Jasmeet', 'Rasi Seeds (P) Ltd.', '2016-04-27', 'Processing', 'admin', '2016-04-27 14:56:29'),
(0, 10, '1', 'Deccan Black gram and Green Gram Poster\r\nSize : 19 x 14inch\r\nDesigning and Artwork in Telugu ', '3000.00', 1, '3000.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 11, '2', 'Deccan Saheb Bhendi\r\na)Designing 500g Sticker - Size : 12 x 10.5 cm			\r\n	', '1500.00', 1, '1500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 12, '', ' b)Artwork adaptation of 100g - Size : 7.5 x 8cm', '500.00', 1, '500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 13, '3', ' Deccan Anamika Bhendi\r\na)Designing 500g Sticker - Size : 12 x 10.5 cm', '1500.00', 1, '1500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 14, '', ' b)Artwork adaptation of 100g - Size : 7.5 x 8cm', '500.00', 1, '500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 15, '4', 'Deccan Gaur\r\na)Designing 500g Sticker - Size : 12 x 10.5 cm ', '1500.00', 1, '1500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 16, '', ' b)Artwork adaptation of 100g - Size : 7.5 x 8cm', '500.00', 1, '500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 17, '5', ' Deccan 22 Bitter Gourd\r\nDesigning 100g Sticker - Size : 7.5 x 8cm', '1500.00', 1, '1500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 18, '6', ' Deccan Ujwal Chilli\r\nDesigning 10g Sticker - Size : 6 x 7.5cm', '1500.00', 1, '1500.00', 'GR Mohan', 'Deccan Core Crop Sciences', '2016-05-04', 'Pending', 'admin', '2016-05-04 15:47:41'),
(0, 19, '1', 'Logo ', '233.23', 2, '466.46', 'vinod', 'Technfox', '0000-00-00', 'Pending', 'admin', '2016-06-06 17:27:28'),
(0, 20, '', ' poster', '122.50', 1, '122.50', 'vinod', 'Technfox', '0000-00-00', 'Pending', 'admin', '2016-06-06 17:27:28'),
(0, 21, 'a', ' Test', '20.00', 3, '60.00', 'vb', 'tf', '0000-00-00', 'Pending', 'admin', '2016-10-20 08:50:02'),
(0, 22, '', ' ', '0.00', 0, '0.00', 'vb', 'tf', '0000-00-00', 'Pending', 'admin', '2016-10-20 08:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `job_uploads`
--

CREATE TABLE IF NOT EXISTS `job_uploads` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `jid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `imagename` varchar(800) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `position`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'vinod', 'vinod', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `pdesc` varchar(999) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ref` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE IF NOT EXISTS `tracking` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `name`, `contact`, `address`, `city`, `pincode`, `position`, `flag`, `regdate`) VALUES
(4, 'vinod', 'vinod', 'vinod beloshe', '7506121311', 'bhandup', 'Mumbai', '', 'user', 'a', '2016-01-09 08:35:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

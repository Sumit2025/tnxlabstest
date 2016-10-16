-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 05:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tnxlabsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `area` int(11) NOT NULL,
  `location` varchar(55) NOT NULL,
  `latitude` varchar(55) NOT NULL,
  `longitude` varchar(55) NOT NULL,
  `price` double(8,2) NOT NULL,
  `property_status` enum('resale','ready to move','under construction','') NOT NULL,
  `property_type` enum('1 bhk','2 bhk','3 bhk','4 bhk','4+ bhk') NOT NULL,
  `property_sale` enum('residential','commercial','','') NOT NULL,
  `description` text NOT NULL,
  `sell_by_agent` tinyint(1) NOT NULL,
  `agent_name` varchar(55) NOT NULL,
  `agent_mobile` bigint(20) NOT NULL,
  `sell_by_customer` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `address`, `area`, `location`, `latitude`, `longitude`, `price`, `property_status`, `property_type`, `property_sale`, `description`, `sell_by_agent`, `agent_name`, `agent_mobile`, `sell_by_customer`, `added_on`) VALUES
(1, 'belapur', 500, 'navi mumbai', '51.5032520,-', '51° 30'' 11.7', 2000.00, 'resale', '2 bhk', 'residential', 'this is a test', 1, 'jayesh', 8888888888, 1, '2016-11-22 08:19:17'),
(2, 'vashi', 735, 'mumbai', '41.6032520,-', '91° 60'' 22.7', 3000.00, 'ready to move', '3 bhk', 'commercial', 'description testing', 0, 'sumit', 9999999999, 0, '2016-11-28 00:00:00'),
(3, 'panvel', 400, 'raigad', '31.5032520,-', '31° 60'' 00.7', 7000.00, 'under construction', '4 bhk', 'residential', 'description testing', 1, 'vedant', 7777777777, 0, '2016-11-06 00:00:00'),
(4, 'thane', 705, 'mumbai', '91.6032520,-', '61° 60'' 00.7', 6000.00, 'ready to move', '2 bhk', 'residential', 'this ia for testing', 0, 'pratik', 6666666666, 0, '2016-11-20 00:00:00'),
(5, 'bandra', 515, 'mumbai', '71.7025120,-', '71° 70'' 00.7', 9000.00, 'resale', '4+ bhk', 'residential', 'property for sale', 0, 'suresh', 5555555555, 1, '2016-11-13 00:00:00'),
(6, 'andheri', 535, 'mumbai', '71.7025120,-', '71° 70'' 00.7', 1000.00, 'ready to move', '3 bhk', 'residential', 'property ready for sale', 0, 'ramesh', 4444444444, 0, '2016-11-08 00:00:00'),
(7, 'kalamboli', 420, 'navi mumbai', '71.7025120,-', '71° 70'' 00.7', 7000.00, 'under construction', '2 bhk', 'commercial', 'property under construction', 1, 'avinash', 3333333333, 1, '2016-11-20 00:00:00'),
(8, 'panvel', 550, 'navi mumbai', '19.2183310,72.9780900', '19° 13'' 5.99'''' N,72° 58'' 41.12'''' E', 2000.00, 'resale', '2 bhk', 'commercial', 'property for resale', 0, 'dinesh', 2222222222, 0, '2016-11-29 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `insert_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `insert_date`) VALUES
(1, 'sumit', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-10 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

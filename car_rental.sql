-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 06:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `C_id` int(11) NOT NULL,
  `VIN` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `M_order` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  PRIMARY KEY (`b_id`),
  KEY `C_id` (`C_id`),
  KEY `VIN` (`VIN`),
  KEY `e_id` (`e_id`),
  KEY `M_order` (`M_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `C_id`, `VIN`, `e_id`, `M_order`, `b_name`, `City`) VALUES
(2, 0, 0, 0, 0, 'pirojpur branch', 'pirojpur'),
(3, 0, 0, 0, 0, 'Dhanmondi branch', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `VIN` int(11) NOT NULL AUTO_INCREMENT,
  `Model` varchar(50) NOT NULL,
  `Year` varchar(256) NOT NULL,
  `AVA` varchar(256) NOT NULL,
  `Make` varchar(50) NOT NULL,
  `Mileage` varchar(256) NOT NULL,
  `c_type` varchar(256) NOT NULL,
  `d_rate` double(10,2) NOT NULL,
  `b_id` int(11) NOT NULL,
  PRIMARY KEY (`VIN`),
  KEY `b_id` (`b_id`),
  KEY `Model` (`Model`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`VIN`, `Model`, `Year`, `AVA`, `Make`, `Mileage`, `c_type`, `d_rate`, `b_id`) VALUES
(1, 'lancer ex', '2016', '2016', '34r46', '4436', 'Luxury', 15006.00, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `C_id` int(11) NOT NULL AUTO_INCREMENT,
  `C_name` varchar(50) NOT NULL,
  `DOB` varchar(256) NOT NULL,
  `address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `access` int(11) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `C_name`, `DOB`, `address`, `City`, `Phone`, `email`, `password`, `access`) VALUES
(1, 'Shihab Sharar', '30-04-2016', 'House:173,Road no:05,Block-A,Bashundhara residential area\r\n', 'Dhaka', '+8801758422', 'shihab.ajit@gmail.com', '123456', 2),
(2, 'admin', '30-04-2016', 'House:91,Road no:12,Block-f,Bashundhara residential area', 'Dhaka', '+8801758422', 'shihab', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE IF NOT EXISTS `deals` (
  `C_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  PRIMARY KEY (`C_id`,`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `VIN` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `b_id` (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `b_id`, `e_name`, `VIN`, `salary`) VALUES
(3, 2, 'shihab sharar anik', 0, 3242343);

-- --------------------------------------------------------

--
-- Table structure for table `maintence`
--

CREATE TABLE IF NOT EXISTS `maintence` (
  `M_order` int(11) NOT NULL,
  `VIN` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `DOS` varchar(256) NOT NULL,
  `Date_out` varchar(256) NOT NULL,
  `Repair_Cost` int(11) NOT NULL,
  PRIMARY KEY (`M_order`),
  KEY `VIN` (`VIN`),
  KEY `b_id` (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintence`
--

INSERT INTO `maintence` (`M_order`, `VIN`, `b_id`, `DOS`, `Date_out`, `Repair_Cost`) VALUES
(23421424, 1, 3, '30-12-2015', '30-04-2016', 5580);

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

CREATE TABLE IF NOT EXISTS `manages` (
  `M_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `M_name` varchar(50) NOT NULL,
  PRIMARY KEY (`M_id`),
  KEY `b_id` (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`M_id`, `b_id`, `M_name`) VALUES
(1, 3, 'akondo');

-- --------------------------------------------------------

--
-- Table structure for table `performs`
--

CREATE TABLE IF NOT EXISTS `performs` (
  `b_id` int(11) NOT NULL,
  `M_order` int(11) NOT NULL,
  PRIMARY KEY (`b_id`,`M_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE IF NOT EXISTS `rents` (
  `Tran_id` varchar(256) NOT NULL,
  `C_id` int(11) NOT NULL,
  `VIN` int(11) NOT NULL,
  `R_time` varchar(256) NOT NULL,
  `RU_time` varchar(256) NOT NULL,
  PRIMARY KEY (`Tran_id`),
  KEY `C_id` (`C_id`),
  KEY `VIN` (`VIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`Tran_id`, `C_id`, `VIN`, `R_time`, `RU_time`) VALUES
('98F50A67-6D10-412B-6021-239B51245DB5', 1, 1, '10:00am', '10:00pm'),
('A4246CE8-A697-CBEB-8A28-93AE06FB7BD4', 1, 1, '5:00pm', '10:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `M_order` int(11) NOT NULL,
  `VIN` int(11) NOT NULL,
  PRIMARY KEY (`M_order`,`VIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_in`
--

CREATE TABLE IF NOT EXISTS `work_in` (
  `e_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  PRIMARY KEY (`e_id`,`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

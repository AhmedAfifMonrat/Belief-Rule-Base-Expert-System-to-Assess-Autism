-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2014 at 05:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `k_rule_3`
--

CREATE TABLE IF NOT EXISTS `k_rule_3` (
  `sl` int(11) NOT NULL,
  `rule_weight` int(11) NOT NULL,
  `an1` varchar(100) NOT NULL,
  `an1_title` varchar(100) NOT NULL,
  `an1_ref` float NOT NULL,
  `an2` varchar(100) NOT NULL,
  `an2_title` varchar(100) NOT NULL,
  `an2_ref` float NOT NULL,
  `an3` varchar(100) NOT NULL,
  `an3_title` varchar(100) NOT NULL,
  `an3_ref` float NOT NULL,
  PRIMARY KEY (`sl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_rule_3`
--

INSERT INTO `k_rule_3` (`sl`, `rule_weight`, `an1`, `an1_title`, `an1_ref`, `an2`, `an2_title`, `an2_ref`, `an3`, `an3_title`, `an3_ref`) VALUES
(0, 1, 'D1', 'High', 1, 'D2', 'High', 0, 'D3', 'High', 0),
(1, 1, 'D1', 'High', 0.8, 'D2', 'High', 0.2, 'D3', 'Medium', 0),
(2, 1, 'D1', 'High', 0.8, 'D2', 'High', 0, 'D3', 'low', 0.2),
(3, 1, 'D1', 'High', 0.6, 'D2', 'Medium', 0.4, 'D3', 'High', 0),
(4, 1, 'D1', 'High', 0.4, 'D2', 'Medium', 0.6, 'D3', 'Medium', 0),
(5, 1, 'D1', 'High', 0.5, 'D2', 'Medium', 0.3, 'D3', 'Low', 0.2),
(6, 1, 'D1', 'High', 0.8, 'D2', 'Low', 0, 'D3', 'High', 0.2),
(7, 1, 'D1', 'High', 0.5, 'D2', 'Low', 0.3, 'D3', 'Medium', 0.2),
(8, 1, 'D1', 'High', 0.2, 'D2', 'Low', 0, 'D3', 'Low', 0.8),
(9, 1, 'D1', 'Medium', 0.8, 'D2', 'High', 0.2, 'D3', 'High', 0),
(10, 1, 'D1', 'Medium', 0.4, 'D2', 'High', 0.6, 'D3', 'Medium', 0),
(11, 1, 'D1', 'Medium', 0.5, 'D2', 'High', 0.3, 'D3', 'Low', 0.2),
(12, 1, 'D1', 'Medium', 0.4, 'D2', 'Medium', 0.6, 'D3', 'High', 0),
(13, 1, 'D1', 'Medium', 0, 'D2', 'Medium', 1, 'D3', 'Medium', 0),
(14, 1, 'D1', 'Medium', 0, 'D2', 'Medium', 0.8, 'D3', 'Low', 0.2),
(15, 1, 'D1', 'Medium', 0.5, 'D2', 'Low', 0.3, 'D3', 'High', 0.2),
(16, 1, 'D1', 'Medium', 0, 'D2', 'Low', 0.8, 'D3', 'Medium', 0.2),
(17, 1, 'D1', 'Medium', 0, 'D2', 'Low', 0.2, 'D3', 'Low', 0.8),
(18, 1, 'D1', 'low', 0.8, 'D2', 'High', 0, 'D3', 'High', 0.2),
(19, 1, 'D1', 'Low', 0.5, 'D2', 'High', 0.3, 'D3', 'Medium', 0.2),
(20, 1, 'D1', 'Low', 0.2, 'D2', 'High', 0, 'D3', 'low', 0.8),
(21, 1, 'D1', 'Low', 0.5, 'D2', 'Medium', 0.3, 'D3', 'High', 0.2),
(22, 1, 'D1', 'Low', 0, 'D2', 'Medium', 0.8, 'D3', 'Medium', 0.2),
(23, 1, 'D1', 'Low', 0, 'D2', 'Medium', 0.2, 'D3', 'Low', 0.8),
(24, 1, 'D1', 'low', 0.2, 'D2', 'low', 0, 'D3', 'High', 0.8),
(25, 1, 'D1', 'low', 0, 'D2', 'Low', 0.2, 'D3', 'Medium', 0.8),
(26, 1, 'D1', 'Low', 0, 'D2', 'Low', 0, 'D3', 'Low', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

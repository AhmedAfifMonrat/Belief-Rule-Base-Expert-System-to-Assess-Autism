-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2014 at 02:01 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brb`
--
CREATE DATABASE IF NOT EXISTS `brb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `brb`;

-- --------------------------------------------------------

--
-- Table structure for table `a_d_value`
--

CREATE TABLE IF NOT EXISTS `a_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `a_trans`
--

CREATE TABLE IF NOT EXISTS `a_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_trans`
--

INSERT INTO `a_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0.14825, 0.85175, 0),
(2, 0.0034, 0.9966, 0),
(3, 0.08749, 0.91251, 0);

-- --------------------------------------------------------

--
-- Table structure for table `consequent`
--

CREATE TABLE IF NOT EXISTS `consequent` (
  `spoken` varchar(100) NOT NULL,
  `responding` varchar(100) NOT NULL,
  `interaction` varchar(100) NOT NULL,
  `parental` varchar(100) NOT NULL,
  `genetic` varchar(100) NOT NULL,
  `verbal` varchar(100) NOT NULL,
  `risk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consequent`
--

INSERT INTO `consequent` (`spoken`, `responding`, `interaction`, `parental`, `genetic`, `verbal`, `risk`) VALUES
('inactive', 'inactive', 'inactive', 'inactive', 'inactive', 'inactive', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `gen_d_value`
--

CREATE TABLE IF NOT EXISTS `gen_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `g_trans`
--

CREATE TABLE IF NOT EXISTS `g_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_trans`
--

INSERT INTO `g_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0, 0.68, 0.32),
(2, 0, 0.68, 0.32),
(3, 0.12, 0.88, 0);

-- --------------------------------------------------------

--
-- Table structure for table `int_d_value`
--

CREATE TABLE IF NOT EXISTS `int_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `int_trans`
--

CREATE TABLE IF NOT EXISTS `int_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `int_trans`
--

INSERT INTO `int_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0, 0.46, 0.54),
(2, 0, 0.9, 0.1),
(3, 0.34, 0.66, 0);

-- --------------------------------------------------------

--
-- Table structure for table `k_rule_1`
--

CREATE TABLE IF NOT EXISTS `k_rule_1` (
  `sl` int(11) NOT NULL,
  `rule_weight` int(11) NOT NULL,
  `ant1` varchar(100) NOT NULL,
  `c1_high` float NOT NULL,
  `c2_mid` float NOT NULL,
  `c3_low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_rule_1`
--

INSERT INTO `k_rule_1` (`sl`, `rule_weight`, `ant1`, `c1_high`, `c2_mid`, `c3_low`) VALUES
(1, 1, 'high', 1, 0, 0),
(2, 1, 'medium', 0, 1, 0),
(3, 1, 'low', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `k_rule_2`
--

CREATE TABLE IF NOT EXISTS `k_rule_2` (
  `sl` int(11) NOT NULL,
  `ant1` varchar(100) NOT NULL,
  `ant2` varchar(100) NOT NULL,
  `c_1` float NOT NULL,
  `c_2` float NOT NULL,
  `c_3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_rule_2`
--

INSERT INTO `k_rule_2` (`sl`, `ant1`, `ant2`, `c_1`, `c_2`, `c_3`) VALUES
(1, 'high', 'high', 1, 0, 0),
(2, 'high', 'mid', 0.8, 0.2, 0),
(3, 'high', 'low', 0.8, 0, 0.2),
(4, 'mid', 'high', 0.4, 0.6, 0),
(5, 'mid', 'mid', 0, 1, 0),
(6, 'mid', 'low', 0, 0.8, 0.2),
(7, 'low', 'high', 0.4, 0, 0.6),
(8, 'low', 'mid', 0, 0.4, 0.6),
(9, 'low', 'low', 0, 0, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `p_d_value`
--

CREATE TABLE IF NOT EXISTS `p_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_trans`
--

CREATE TABLE IF NOT EXISTS `p_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_trans`
--

INSERT INTO `p_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0, 0.9, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `res_d_value`
--

CREATE TABLE IF NOT EXISTS `res_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `res_trans`
--

CREATE TABLE IF NOT EXISTS `res_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_trans`
--

INSERT INTO `res_trans` (`sl`, `high`, `medium`, `low`) VALUES
(2, 0, 0.9, 0.1),
(1, 0, 0.46, 0.54),
(3, 0.34, 0.66, 0),
(2, 0, 0.9, 0.1),
(3, 0.34, 0.66, 0);

-- --------------------------------------------------------

--
-- Table structure for table `r_d_value`
--

CREATE TABLE IF NOT EXISTS `r_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `r_trans`
--

CREATE TABLE IF NOT EXISTS `r_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_trans`
--

INSERT INTO `r_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0, 0.98823, 0.01177);

-- --------------------------------------------------------

--
-- Table structure for table `s_d_value`
--

CREATE TABLE IF NOT EXISTS `s_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_trans`
--

CREATE TABLE IF NOT EXISTS `s_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_trans`
--

INSERT INTO `s_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0.6, 0.4, 0),
(2, 0.2, 0.8, 0),
(3, 0, 0.8, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `v_d_value`
--

CREATE TABLE IF NOT EXISTS `v_d_value` (
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL,
  `crisp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `v_trans`
--

CREATE TABLE IF NOT EXISTS `v_trans` (
  `sl` int(11) NOT NULL,
  `high` float NOT NULL,
  `medium` float NOT NULL,
  `low` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v_trans`
--

INSERT INTO `v_trans` (`sl`, `high`, `medium`, `low`) VALUES
(1, 0.29639, 0.70361, 0),
(2, 0.08969, 0.91031, 0),
(2, 0.08536, 0.91464, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

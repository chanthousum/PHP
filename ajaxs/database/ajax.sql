-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2015 at 06:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE IF NOT EXISTS `tblregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `guest` varchar(255) DEFAULT NULL,
  `dinner` varchar(255) DEFAULT NULL,
  `paper` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `addrees` varchar(255) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=268 ;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`id`, `type`, `guest`, `dinner`, `paper`, `name`, `addrees`, `tel`, `email`, `job`) VALUES
(232, 'Researcher', '', 'dinner', 'paper', '', '', 0, NULL, NULL),
(233, 'Researcher', 'Q', 'dinner', 'paper', 'N', 'A', 2345, NULL, NULL),
(234, 'Researcher', 'EWER', 'dinner', 'paper', 'N', 'A', 12345, '', 'student'),
(235, 'Researcher', 'q', 'dinner', 'paper', 'n', 'a', 1234, '', 'student'),
(236, 'Researcher', 'q', 'dinner', 'paper', 'n', 'a', 1234, 'q', 'student'),
(237, 'Researcher', '1', 'dinner', 'paper', 'chanthou', 'TK', 889503682, 'it.programming1@gmail.com', 'student'),
(238, 'Researcher', '', 'dinner', 'paper', '', '', 0, '', 'Researcher'),
(239, 'Researcher', '', 'dinner', 'paper', '', '', 0, '', 'Researcher'),
(240, 'Researcher', 'q', 'dinner', 'paper', 'n', 'a', 1234, 'e', 'student'),
(241, 'Researcher', '', 'dinner', 'paper', '', '', 0, '', 'Researcher'),
(242, 'Researcher', '', 'dinner', 'paper', '', '', 0, '', 'Researcher'),
(243, 'Researcher', '', 'dinner', 'paper', 'erat', '', 0, 'sa', 'Researcher'),
(244, 'Researcher', '', 'dinner', 'paper', 'q', '', 0, 'er', 'Researcher'),
(245, 'student', '1', 'dinner', 'paper', 'dara', 'PP', 124, 'rT', 'student'),
(246, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'it.programming1@gmail.com', 'Employer'),
(247, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'I', 'Employer'),
(248, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'I', 'Employer'),
(249, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'it.programming1@gmail.com', 'Employer'),
(250, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'it.programming1@gmail.com', 'Employer'),
(251, 'Researcher', '', 'dinner', 'paper', 'C', '', 0, 'it.programming1@gmail.com', 'student'),
(252, 'Researcher', '1', 'dinner', 'paper', 'C', 'A', 234567, 'it.programming1@gmail.com', 'student'),
(253, 'Researcher', '', 'dinner', 'paper', 'c', '', 0, 'it.programming1@gmail.com', 'Employer'),
(254, 'Researcher', '', 'dinner', 'paper', 'W', '', 0, 'it.programming1@gmail.com', 'Employer'),
(255, 'Researcher', '', 'dinner', 'paper', 'W', '', 0, 'it.programming1@gmail.com', 'Employer'),
(256, 'Researcher', '', 'dinner', 'paper', 'ART', '', 0, 'it.programming1@gmail.com', 'Employer'),
(257, 'Researcher', '', 'dinner', 'paper', 'ART', '', 0, 'it.programming1@gmail.com', 'Employer'),
(258, 'Researcher', 'AEwrt', 'dinner', 'paper', 'WQER', 'EWRT', 0, 'it.programming1@gmail.com', 'Employer'),
(259, 'Researcher', 'AEwrt', 'dinner', 'paper', 'WQER', 'EWRT', 0, 'it.programming1@gmail.com', 'Employer'),
(260, 'Researcher', 'AEwrt', 'dinner', 'paper', 'WQER', 'EWRT', 0, 'it.programming1@gmail.com', 'Employer'),
(261, 'Researcher', 'AEwrt', 'dinner', 'paper', 'WQER', 'EWRT', 0, 'it.programming1@gmail.com', 'Employer'),
(262, 'Researcher', 'AEwrt', 'dinner', 'paper', 'v', 'EWRT', 0, 'it.programming1@gmail.com', 'Employer'),
(263, 'Researcher', 'ERTY', 'dinner', 'paper', 'werty', 'satd', 0, 'arSTD', 'Employer'),
(264, 'Researcher', 'ert', 'dinner', 'paper', 'era', 'RET', 0, 'WERW', 'Employer'),
(265, 'Researcher', 'ARET', 'dinner', 'paper', 'ERAT', 'ERAT', 0, 'it.programming1@gmail.com', 'Employer'),
(266, 'Researcher', '', 'dinner', 'paper', 'WERT', '', 0, 'it.programming1@gmail.com', 'Employer'),
(267, 'Researcher', 'rte', 'dinner', 'paper', 'davith', 'TK', 1234567, 'it.programming1@gmail.com', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

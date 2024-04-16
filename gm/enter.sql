-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2024 at 02:10 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enter`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `emailid` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`emailid`, `password`) VALUES
('fish@p12gmail.com', '1234'),
('fish@p12gmail.com', '1234'),
('mug@gmail.com', '12345'),
('suresh@gmail.com', '123456'),
('ganesan@gamil.com', '124heubvcu'),
('suresh@gmail.com', '123456'),
('ganesan@gamil.com', '123456'),
('suresh@gmail.com', '123455'),
('ganesan@gamil.com', '123456'),
('suresh@gmail.com', 'dharsans'),
('ganesan@gamil.com', '12345'),
('suresh@gmail.com', 'murugan'),
('ganesan663@gmail.com', '9965064256'),
('ganesan663@gmail.com', '9965064256'),
('ganesan663@gamil.com', '9965064425'),
('dharsan@gmail.com', '1234567'),
('ganesan@gamil.com', 'qwert'),
('ganesan@gamil.com', '23456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

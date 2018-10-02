-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 11:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_availability`
--

CREATE TABLE `doc_availability` (
  `doc_tab` varchar(20) NOT NULL,
  `today` varchar(15) NOT NULL,
  `tomorrow` varchar(15) NOT NULL,
  `day_after_tomorrow` varchar(15) NOT NULL,
  `reason` varchar(500) DEFAULT NULL,
  `est_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_availability`
--

INSERT INTO `doc_availability` (`doc_tab`, `today`, `tomorrow`, `day_after_tomorrow`, `reason`, `est_time`) VALUES
('hosp_7_1', 'Available', 'Available', 'Available', 'personal', '1 hrs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_availability`
--
ALTER TABLE `doc_availability`
  ADD PRIMARY KEY (`doc_tab`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

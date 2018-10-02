-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 11:14 AM
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
-- Table structure for table `pat`
--

CREATE TABLE `pat` (
  `pid` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat`
--

INSERT INTO `pat` (`pid`, `username`, `email`, `password`) VALUES
(2, 'suraj', 'suraj3050@gmail.com', '123'),
(3, 'manoj', 'manoj@gmail.com', '1212'),
(5, 'jaya prakash', 'jp@gmail.com', 'jp'),
(6, 'abhiram', 'abhiram@gmail.com', '1234'),
(7, 'abhi', 'abhi@gmail.com', 'abhi'),
(8, 'gfgffg', 'gfdgfdggfg@gmail.com', '9010975676'),
(10, 'sameer', 'sam@gmail.com', '12'),
(11, 'suraj', 'sura@gmail.com', '12'),
(12, 'mahesh', 'mahesh@gmail.com', '12'),
(13, 'allu arjun', 'alluarjun@gmail.com', '12'),
(14, 'allu sirish', 'sirish@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pat`
--
ALTER TABLE `pat`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pat`
--
ALTER TABLE `pat`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

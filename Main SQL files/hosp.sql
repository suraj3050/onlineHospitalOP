-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 11:13 AM
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
-- Table structure for table `hosp`
--

CREATE TABLE `hosp` (
  `hid` int(11) NOT NULL,
  `hosp_name` varchar(200) NOT NULL,
  `hosp_type` varchar(100) NOT NULL,
  `hosp_address` varchar(500) NOT NULL,
  `hosp_state` varchar(100) NOT NULL,
  `hosp_dist` varchar(100) NOT NULL,
  `hosp_street` varchar(150) NOT NULL,
  `hosp_email` varchar(150) NOT NULL,
  `hosp_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp`
--

INSERT INTO `hosp` (`hid`, `hosp_name`, `hosp_type`, `hosp_address`, `hosp_state`, `hosp_dist`, `hosp_street`, `hosp_email`, `hosp_password`) VALUES
(1, 'sairam', 'Super Speciality', 'brodipet 1/12th line\r\n			', 'Andhra Pradesh', 'guntur', 'brodipet ', 'sairamhosp@gmail.com', 'sairam'),
(2, 'apollo', 'Super Speciality', 'D.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP\r\nD.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP', 'ANDHRA PRADESH', 'GUNTUR', 'brodipet  ', 'apollo@gmail.com', '1234'),
(3, 'ramesh', 'CHC', 'aurendelpet  1/12 line,1-5-20B,guntur,AP', 'Andhra Pradesh', 'guntur', 'brodipet  ', 'ramesh@gmail.com', '12'),
(4, 'manipal', 'Super Speciality', '1/12 solampur', 'maharastra', 'mumbai', 'solampur', 'manipal@gmail.com', '12'),
(5, 'narasimha', 'District Hospital', 'brodipet  1/12 line,1-5-20B,guntur,AP', 'Andhra Pradesh', 'guntur', 'brodipet  1/12 line,1-5-20B,guntur,AP', 'nar@gmail.com', '12'),
(6, '123', 'PHC', 'D.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP\r\nD.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP', 'ANDHRA PRADESH', 'D.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP', 'D.NO:29-1-81,1 /12 LANE BRODIPET,GUNTUR,AP', '123@gmail.com', '123'),
(7, 'omega', 'Super Speciality', 'brodipet  1/12 line,1-5-20B,guntur,AP', 'Andhra Pradesh', 'guntur', 'brodipet  ', 'omega@gmail.com', '12'),
(8, 'anirudh multispeciality', 'Super Speciality', 'brodipet  1/12 line,1-5-20B,guntur,AP', 'Andhra Pradesh', 'chirala', 'brodipet  1/12 line,1-5-20B,guntur,AP', 'aa@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosp`
--
ALTER TABLE `hosp`
  ADD PRIMARY KEY (`hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosp`
--
ALTER TABLE `hosp`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 11:10 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `hosp_1`
--

CREATE TABLE `hosp_1` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_1`
--

INSERT INTO `hosp_1` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(1, 'raghu', 'psycologist', 'raghu@gmail.com', '12'),
(9, 'anudeep', 'dermatalogist', 'anudeep@gmail.com', '12'),
(10, 'manoj kumar', 'psycologist', 'manoj@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_1_1`
--

CREATE TABLE `hosp_1_1` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_1_9`
--

CREATE TABLE `hosp_1_9` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_1_10`
--

CREATE TABLE `hosp_1_10` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_2`
--

CREATE TABLE `hosp_2` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_2`
--

INSERT INTO `hosp_2` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(4, 'vineeth', 'psycologist', 'vineeth@gmail.com', '12'),
(5, 'veeresh', 'dermatalogist', 'veeresh@gmail.com', '12'),
(6, 'jaya prakash', 'orthologist', 'jayaprakash@gmail.com', 'jp'),
(7, 'indu', 'dermatalogist', 'indu@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_2_4`
--

CREATE TABLE `hosp_2_4` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_2_4`
--

INSERT INTO `hosp_2_4` (`s_no`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(2, 'jaya prakash', 'fever', 'male', 22, '2018-02-15', 'waiting'),
(3, 'abhisheik', 'headache', 'male', 20, '2018-02-15', 'visited'),
(4, 'dhanush', 'fever', 'male', 25, '2018-02-15', 'waiting'),
(5, 'suhana', 'fever', 'female', 25, '2018-02-16', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_2_5`
--

CREATE TABLE `hosp_2_5` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_2_5`
--

INSERT INTO `hosp_2_5` (`s_no`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 'suraj', 'skin rashes', 'male', 21, '2018-02-15', 'waiting'),
(2, 'harika', 'headache', 'female', 35, '2018-02-16', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_2_6`
--

CREATE TABLE `hosp_2_6` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_2_6`
--

INSERT INTO `hosp_2_6` (`s_no`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 'veereshwarao', 'laziness', 'male', 18, '2018-02-15', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_2_7`
--

CREATE TABLE `hosp_2_7` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_3`
--

CREATE TABLE `hosp_3` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_3`
--

INSERT INTO `hosp_3` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(9, 'ajay', 'dermatalogist', 'ajay@gmail.com', '12'),
(10, 'venkatesh', 'psycologist', 'venkatesh@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_3_9`
--

CREATE TABLE `hosp_3_9` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_3_10`
--

CREATE TABLE `hosp_3_10` (
  `s_no` int(11) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_4`
--

CREATE TABLE `hosp_4` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5`
--

CREATE TABLE `hosp_5` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_5`
--

INSERT INTO `hosp_5` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(1, 'sameer', 'anthrapologist', 'sameer@gmail.com', '12'),
(2, 'suraj', 'psycologist', 'sur@gmail.com', '12'),
(3, 'jay', 'nero', 'jay@gmail.com', '123'),
(4, 'rajesh', 'anthrapologist', 'rajesh@gmail.com', '12'),
(5, 'jaya surya', 'psycologist', 'jayasurya@gmail.com', '12'),
(6, 'balu', 'anthrapologist', 'balu@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_1`
--

CREATE TABLE `hosp_5_1` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_5_1`
--

INSERT INTO `hosp_5_1` (`s_no`, `patient_id`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 10, 'suraj', 'headache', 'male', 25, '2018-02-16', 'visited'),
(2, NULL, 'sneha', 'fever', 'female', 32, '2018-02-16', 'visited'),
(3, 10, 'ameer', 'typhoid', 'male', 23, '2018-02-16', 'visited'),
(4, 10, 'khasif', 'eye problem', 'male', 22, '2018-02-16', 'visited'),
(5, 10, 'sanju', 'diareia', 'male', 30, '2018-02-16', 'waiting'),
(6, NULL, 'sdsaf', 'fdsf', 'male', 23, '2018-02-17', 'waiting'),
(7, 10, 'rajesh', 'headache', 'male', 25, '2018-02-17', 'waiting'),
(8, NULL, 'sneha', 'fever', 'female', 18, '2018-02-17', 'waiting'),
(9, NULL, 'sai koushik', 'leg pain', 'male', 21, '2018-02-17', 'waiting'),
(10, NULL, 'manoj', 'throat pain', 'male', 22, '2018-02-17', 'waiting'),
(11, NULL, 'suraj', 'neck pain', 'male', 21, '2018-02-17', 'waiting'),
(12, NULL, 'suresh', 'head ache', 'male', 32, '2018-02-17', 'waiting'),
(13, NULL, 'suraj', 'Asthma', 'male', 29, '2018-02-18', 'not visited'),
(14, NULL, 'sami', 'head ache', 'female', 32, '2018-02-18', 'visited'),
(15, NULL, 'hansika', 'leg pain', 'female', 34, '2018-02-18', 'waiting'),
(16, NULL, 'shruti', 'back pain', 'female', 22, '2018-02-18', 'waiting'),
(17, NULL, 'sanjhana', 'head ache', 'female', 22, '2018-02-18', 'waiting'),
(18, 10, 'sameer ', 'head ache', 'male', 22, '2018-02-18', 'waiting'),
(19, 10, 'sanju', 'head ache', 'male', 65, '2018-02-18', 'waiting'),
(20, NULL, 'fd', 'fdf', 'male', 23, '2018-02-18', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_2`
--

CREATE TABLE `hosp_5_2` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_3`
--

CREATE TABLE `hosp_5_3` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_5_3`
--

INSERT INTO `hosp_5_3` (`s_no`, `patient_id`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 10, 'sai', 'headache', 'male', 33, '2018-02-17', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_4`
--

CREATE TABLE `hosp_5_4` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_5_4`
--

INSERT INTO `hosp_5_4` (`s_no`, `patient_id`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 11, 'suraj', 'headache', 'male', 22, '2018-02-21', 'waiting'),
(2, 10, 'sameer', 'leg pain', 'male', 24, '2018-02-21', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_5`
--

CREATE TABLE `hosp_5_5` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_5_6`
--

CREATE TABLE `hosp_5_6` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_6`
--

CREATE TABLE `hosp_6` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7`
--

CREATE TABLE `hosp_7` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_7`
--

INSERT INTO `hosp_7` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(1, 'sai dharam', 'eye specialist', 'saidharam@gmail.com', '12'),
(2, 'varun tej', 'neurologist', 'varun@gmail.com', '12'),
(3, 'sai', 'neurologist', 'sai@gmail.com', '12'),
(5, 'suraj', 'neurologist', 'suraj@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7_1`
--

CREATE TABLE `hosp_7_1` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_7_1`
--

INSERT INTO `hosp_7_1` (`s_no`, `patient_id`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, 12, 'mahesh', 'eye sight', 'male', 22, '2018-02-23', 'visited'),
(2, 13, 'allu', 'eye sight', 'male', 25, '2018-02-23', 'waiting'),
(3, 14, 'sirish', 'eye problem', 'male', 20, '2018-02-23', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7_2`
--

CREATE TABLE `hosp_7_2` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7_3`
--

CREATE TABLE `hosp_7_3` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7_5`
--

CREATE TABLE `hosp_7_5` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_7_5_avail`
--

CREATE TABLE `hosp_7_5_avail` (
  `date` date NOT NULL,
  `availability` varchar(20) DEFAULT 'Available',
  `reason` varchar(500) DEFAULT NULL,
  `est_time` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_7_5_avail`
--

INSERT INTO `hosp_7_5_avail` (`date`, `availability`, `reason`, `est_time`) VALUES
('2018-02-25', 'Not Available', 'ds', 'ds'),
('2018-02-26', 'Available', NULL, NULL),
('2018-02-27', 'Available', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hosp_8`
--

CREATE TABLE `hosp_8` (
  `doc_id` int(5) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `doctor_email` varchar(150) DEFAULT NULL,
  `doc_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_8`
--

INSERT INTO `hosp_8` (`doc_id`, `doc_name`, `specialisation`, `doctor_email`, `doc_password`) VALUES
(1, 'suraj', 'ear', 'su@gmail.com', '12'),
(2, 'rakesh', 'nose', 'rak@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_8_1`
--

CREATE TABLE `hosp_8_1` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosp_8_1`
--

INSERT INTO `hosp_8_1` (`s_no`, `patient_id`, `patient_name`, `problem`, `gender`, `age`, `date`, `status`) VALUES
(1, NULL, 'anirudh', 'ear', 'male', 22, '2018-06-10', 'visited'),
(2, 11, 'sura', 'ear infection', 'male', 23, '2018-06-10', 'visited'),
(3, NULL, 'rakesh', 'ear', 'male', 25, '2018-06-10', 'not visited'),
(4, NULL, 'sai', 'ear infection', 'male', 32, '2018-06-10', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_8_1_avail`
--

CREATE TABLE `hosp_8_1_avail` (
  `date` date NOT NULL,
  `availability` varchar(20) DEFAULT 'Available',
  `reason` varchar(500) DEFAULT NULL,
  `est_time` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_8_2`
--

CREATE TABLE `hosp_8_2` (
  `s_no` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_name` varchar(200) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosp_8_2_avail`
--

CREATE TABLE `hosp_8_2_avail` (
  `date` date NOT NULL,
  `availability` varchar(20) DEFAULT 'Available',
  `reason` varchar(500) DEFAULT NULL,
  `est_time` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `pat_2`
--

CREATE TABLE `pat_2` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_3`
--

CREATE TABLE `pat_3` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_5`
--

CREATE TABLE `pat_5` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_6`
--

CREATE TABLE `pat_6` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_7`
--

CREATE TABLE `pat_7` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_8`
--

CREATE TABLE `pat_8` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pat_10`
--

CREATE TABLE `pat_10` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_10`
--

INSERT INTO `pat_10` (`op_no`, `patient_name`, `hosp_name`, `doctor_name`, `problem`, `date`, `hosp_id`, `doc_id`) VALUES
(0, 'sanju', 'narasimha', 'sameer', 'diareia', '2018-02-16', 5, 1),
(0, 'sai', 'narasimha', 'jay', 'headache', '2018-02-17', 5, 3),
(0, 'rajesh', 'narasimha', 'sameer', 'headache', '2018-02-17', 5, 1),
(0, 'sameer ', 'narasimha', 'sameer', 'head ache', '2018-02-18', 5, 1),
(0, 'sanju', 'narasimha', 'sameer', 'head ache', '2018-02-18', 5, 1),
(0, 'sameer', 'narasimha', 'rajesh', 'leg pain', '2018-02-21', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pat_11`
--

CREATE TABLE `pat_11` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_11`
--

INSERT INTO `pat_11` (`op_no`, `patient_name`, `hosp_name`, `doctor_name`, `problem`, `date`, `hosp_id`, `doc_id`) VALUES
(0, 'suraj', 'narasimha', 'rajesh', 'headache', '2018-02-21', 5, 4),
(0, 'sura', 'anirudh multispeciality', 'suraj', 'ear infection', '2018-06-10', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pat_12`
--

CREATE TABLE `pat_12` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_12`
--

INSERT INTO `pat_12` (`op_no`, `patient_name`, `hosp_name`, `doctor_name`, `problem`, `date`, `hosp_id`, `doc_id`) VALUES
(0, 'mahesh', 'omega', 'sai dharam', 'eye sight', '2018-02-23', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pat_13`
--

CREATE TABLE `pat_13` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_13`
--

INSERT INTO `pat_13` (`op_no`, `patient_name`, `hosp_name`, `doctor_name`, `problem`, `date`, `hosp_id`, `doc_id`) VALUES
(0, 'allu', 'omega', 'sai dharam', 'eye sight', '2018-02-23', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pat_14`
--

CREATE TABLE `pat_14` (
  `op_no` int(4) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `hosp_name` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `problem` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `hosp_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_14`
--

INSERT INTO `pat_14` (`op_no`, `patient_name`, `hosp_name`, `doctor_name`, `problem`, `date`, `hosp_id`, `doc_id`) VALUES
(0, 'sirish', 'omega', 'sai dharam', 'eye problem', '2018-02-23', 7, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_availability`
--
ALTER TABLE `doc_availability`
  ADD PRIMARY KEY (`doc_tab`);

--
-- Indexes for table `hosp`
--
ALTER TABLE `hosp`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hosp_1`
--
ALTER TABLE `hosp_1`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_1_1`
--
ALTER TABLE `hosp_1_1`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_1_9`
--
ALTER TABLE `hosp_1_9`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_1_10`
--
ALTER TABLE `hosp_1_10`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_2`
--
ALTER TABLE `hosp_2`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_2_4`
--
ALTER TABLE `hosp_2_4`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_2_5`
--
ALTER TABLE `hosp_2_5`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_2_6`
--
ALTER TABLE `hosp_2_6`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_2_7`
--
ALTER TABLE `hosp_2_7`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_3`
--
ALTER TABLE `hosp_3`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_3_9`
--
ALTER TABLE `hosp_3_9`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_3_10`
--
ALTER TABLE `hosp_3_10`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_4`
--
ALTER TABLE `hosp_4`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_5`
--
ALTER TABLE `hosp_5`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_5_1`
--
ALTER TABLE `hosp_5_1`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_5_2`
--
ALTER TABLE `hosp_5_2`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_5_3`
--
ALTER TABLE `hosp_5_3`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_5_4`
--
ALTER TABLE `hosp_5_4`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_5_5`
--
ALTER TABLE `hosp_5_5`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_5_6`
--
ALTER TABLE `hosp_5_6`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_6`
--
ALTER TABLE `hosp_6`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_7`
--
ALTER TABLE `hosp_7`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_7_1`
--
ALTER TABLE `hosp_7_1`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_7_2`
--
ALTER TABLE `hosp_7_2`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_7_3`
--
ALTER TABLE `hosp_7_3`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_7_5`
--
ALTER TABLE `hosp_7_5`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_7_5_avail`
--
ALTER TABLE `hosp_7_5_avail`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `hosp_8`
--
ALTER TABLE `hosp_8`
  ADD PRIMARY KEY (`doc_id`),
  ADD UNIQUE KEY `doctor_email` (`doctor_email`);

--
-- Indexes for table `hosp_8_1`
--
ALTER TABLE `hosp_8_1`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_8_1_avail`
--
ALTER TABLE `hosp_8_1_avail`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `hosp_8_2`
--
ALTER TABLE `hosp_8_2`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `hosp_8_2_avail`
--
ALTER TABLE `hosp_8_2_avail`
  ADD PRIMARY KEY (`date`);

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
-- AUTO_INCREMENT for table `hosp`
--
ALTER TABLE `hosp`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hosp_1`
--
ALTER TABLE `hosp_1`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hosp_1_1`
--
ALTER TABLE `hosp_1_1`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_1_9`
--
ALTER TABLE `hosp_1_9`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_1_10`
--
ALTER TABLE `hosp_1_10`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_2`
--
ALTER TABLE `hosp_2`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hosp_2_4`
--
ALTER TABLE `hosp_2_4`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hosp_2_5`
--
ALTER TABLE `hosp_2_5`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hosp_2_6`
--
ALTER TABLE `hosp_2_6`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hosp_2_7`
--
ALTER TABLE `hosp_2_7`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_3`
--
ALTER TABLE `hosp_3`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hosp_3_9`
--
ALTER TABLE `hosp_3_9`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_3_10`
--
ALTER TABLE `hosp_3_10`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_4`
--
ALTER TABLE `hosp_4`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_5`
--
ALTER TABLE `hosp_5`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hosp_5_1`
--
ALTER TABLE `hosp_5_1`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hosp_5_2`
--
ALTER TABLE `hosp_5_2`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_5_3`
--
ALTER TABLE `hosp_5_3`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hosp_5_4`
--
ALTER TABLE `hosp_5_4`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hosp_5_5`
--
ALTER TABLE `hosp_5_5`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_5_6`
--
ALTER TABLE `hosp_5_6`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_6`
--
ALTER TABLE `hosp_6`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_7`
--
ALTER TABLE `hosp_7`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hosp_7_1`
--
ALTER TABLE `hosp_7_1`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hosp_7_2`
--
ALTER TABLE `hosp_7_2`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_7_3`
--
ALTER TABLE `hosp_7_3`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_7_5`
--
ALTER TABLE `hosp_7_5`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hosp_8`
--
ALTER TABLE `hosp_8`
  MODIFY `doc_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hosp_8_1`
--
ALTER TABLE `hosp_8_1`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hosp_8_2`
--
ALTER TABLE `hosp_8_2`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pat`
--
ALTER TABLE `pat`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

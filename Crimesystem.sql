-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2021 at 04:31 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_registration`
--

DROP TABLE IF EXISTS `complaint_registration`;
CREATE TABLE IF NOT EXISTS `complaint_registration` (
  `Complaint_No` int NOT NULL,
  `User_Id` int NOT NULL,
  `Date` date NOT NULL,
  `Victim_Name` varchar(45) NOT NULL,
  `Victime_Age` int NOT NULL,
  `Victim_Address` varchar(45) NOT NULL,
  `Attack_Description` varchar(100) NOT NULL,
  `Suspect_Name` varchar(45) NOT NULL,
  `Witness_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Complaint_No`),
  KEY `User_Id` (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_registration`
--

INSERT INTO `complaint_registration` (`Complaint_No`, `User_Id`, `Date`, `Victim_Name`, `Victime_Age`, `Victim_Address`, `Attack_Description`, `Suspect_Name`, `Witness_Name`) VALUES
(111, 102, '2021-03-16', 'Linda', 34, '569 Wynn drive ', 'Robbery', 'XYZ', 'ABC');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_status`
--

DROP TABLE IF EXISTS `complaint_status`;
CREATE TABLE IF NOT EXISTS `complaint_status` (
  `Complaint_No` int NOT NULL,
  `Status` varchar(45) NOT NULL,
  KEY `complaint_status_ibfk_1` (`Complaint_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

DROP TABLE IF EXISTS `criminals`;
CREATE TABLE IF NOT EXISTS `criminals` (
  `Criminal_No` varchar(45) NOT NULL,
  `Criminal_Fname` varchar(45) NOT NULL,
  `Criminal_Lname` varchar(45) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `FIR_No` int NOT NULL,
  PRIMARY KEY (`Criminal_No`),
  KEY `FIR_No` (`FIR_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criminal_charge`
--

DROP TABLE IF EXISTS `criminal_charge`;
CREATE TABLE IF NOT EXISTS `criminal_charge` (
  `Criminal_No` varchar(45) NOT NULL,
  `Section_Id` varchar(45) NOT NULL,
  KEY `Criminal_No` (`Criminal_No`),
  KEY `Section_Id` (`Section_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fir_registration`
--

DROP TABLE IF EXISTS `fir_registration`;
CREATE TABLE IF NOT EXISTS `fir_registration` (
  `FIR_No` int NOT NULL,
  `Complaint_No` int NOT NULL,
  `User_Id` int NOT NULL,
  `Incident_Date` date NOT NULL,
  `Incident_Time` time NOT NULL,
  `Crime_Type` varchar(45) NOT NULL,
  `Place_Of_Occurence` varchar(45) NOT NULL,
  `Victim_Name` varchar(45) NOT NULL,
  `Witness_Name` varchar(45) NOT NULL,
  `Accused_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`FIR_No`),
  KEY `User_Id` (`User_Id`),
  KEY `Complaint_No` (`Complaint_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_registration`
--

INSERT INTO `fir_registration` (`FIR_No`, `Complaint_No`, `User_Id`, `Incident_Date`, `Incident_Time`, `Crime_Type`, `Place_Of_Occurence`, `Victim_Name`, `Witness_Name`, `Accused_Name`) VALUES
(111, 111, 106, '2021-03-15', '01:18:00', 'robbery', 'bangalore', 'bbb', 'bbb', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `Log_Id` int NOT NULL AUTO_INCREMENT,
  `User` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User_Type` varchar(45) NOT NULL,
  PRIMARY KEY (`Log_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`Log_Id`, `User`, `Date`, `User_Type`) VALUES
(1, 'Steve', '2021-03-21 04:49:18', 'officer'),
(2, 'Steve', '2021-03-21 05:31:00', 'officer'),
(3, 'Steve', '2021-03-21 14:56:42', 'officer'),
(4, 'Steve', '2021-03-21 14:56:58', 'officer'),
(5, 'Steve', '2021-03-21 15:11:30', 'officer'),
(6, 'Steve', '2021-03-21 15:12:29', 'officer'),
(7, 'Steve', '2021-03-21 15:14:02', 'officer'),
(8, 'Steve', '2021-03-21 15:14:08', 'officer'),
(9, 'Steve', '2021-03-21 15:14:45', 'officer'),
(10, 'Steve', '2021-03-21 15:15:48', 'officer'),
(11, 'Steve', '2021-03-21 19:27:33', 'officer'),
(12, 'Steve', '2021-03-21 19:31:00', 'officer'),
(13, 'Steve', '2021-03-21 19:32:16', 'officer'),
(14, 'Steve', '2021-03-21 19:33:28', 'officer'),
(15, 'Steve', '2021-03-21 19:34:12', 'officer'),
(16, 'Steve', '2021-03-21 19:34:53', 'officer'),
(17, 'Steve', '2021-03-21 19:35:33', 'officer'),
(18, 'Steve', '2021-03-21 19:36:15', 'officer'),
(19, 'Steve', '2021-03-21 19:37:16', 'officer'),
(20, 'John', '2021-03-21 19:41:56', 'civil'),
(21, 'John', '2021-03-21 19:50:29', 'civil'),
(22, 'John', '2021-03-21 19:51:54', 'civil'),
(23, 'John', '2021-03-21 19:52:23', 'civil'),
(24, 'John', '2021-03-21 19:52:43', 'civil'),
(25, 'John', '2021-03-21 19:56:13', 'civil'),
(26, 'Steve', '2021-03-21 19:57:26', 'officer'),
(27, 'Steve', '2021-03-21 19:59:05', 'officer'),
(28, 'John', '2021-03-21 19:59:21', 'civil'),
(29, 'John', '2021-03-21 20:00:00', 'civil'),
(30, 'John', '2021-03-21 20:02:23', 'civil'),
(31, 'John', '2021-03-21 23:19:33', 'civil'),
(32, 'John', '2021-03-21 23:20:01', 'civil'),
(33, 'Steve', '2021-03-21 23:23:02', 'officer'),
(34, 'John', '2021-03-21 23:23:15', 'civil'),
(35, 'John', '2021-03-21 23:25:07', 'civil'),
(36, 'John', '2021-03-21 23:31:54', 'civil'),
(37, 'John', '2021-03-21 23:37:40', 'civil'),
(38, 'John', '2021-03-21 23:38:10', 'civil'),
(39, 'John', '2021-03-21 23:41:56', 'civil'),
(40, 'John', '2021-03-22 00:28:10', 'civil'),
(41, 'Steve', '2021-03-22 01:07:44', 'officer'),
(42, 'Steve', '2021-03-22 01:09:31', 'officer'),
(43, 'Steve', '2021-03-22 01:13:09', 'officer'),
(44, 'Steve', '2021-03-22 01:14:43', 'officer'),
(45, 'Steve', '2021-03-22 01:19:52', 'officer'),
(46, 'Steve', '2021-03-22 01:44:45', 'officer'),
(47, 'Steve', '2021-03-22 01:46:28', 'officer'),
(48, 'Steve', '2021-03-22 02:32:06', 'officer'),
(49, 'Steve', '2021-03-22 02:32:14', 'officer'),
(50, 'Steve', '2021-03-22 02:32:55', 'officer'),
(51, 'Steve', '2021-03-22 02:58:22', 'officer'),
(52, 'Steve', '2021-03-22 03:04:53', 'officer'),
(53, 'Steve', '2021-03-22 03:15:59', 'officer'),
(54, 'Steve', '2021-03-22 03:21:40', 'officer'),
(55, 'Steve', '2021-03-22 03:22:24', 'officer'),
(56, 'Steve', '2021-03-22 03:23:55', 'officer'),
(57, 'Steve', '2021-03-22 03:29:09', 'officer'),
(58, 'Steve', '2021-03-22 03:31:24', 'officer'),
(59, 'Steve', '2021-03-22 03:34:27', 'officer'),
(60, 'Steve', '2021-03-22 03:36:36', 'officer'),
(61, 'Steve', '2021-03-22 03:39:52', 'officer'),
(62, 'Steve', '2021-03-22 03:48:00', 'officer'),
(63, 'Steve', '2021-03-22 03:49:47', 'officer'),
(64, 'Steve', '2021-03-22 03:50:53', 'officer'),
(65, 'Steve', '2021-03-22 03:53:03', 'officer'),
(66, 'Steve', '2021-03-22 03:56:23', 'officer'),
(67, 'Steve', '2021-03-22 03:57:14', 'officer'),
(68, 'Steve', '2021-03-22 04:02:12', 'officer'),
(69, 'Steve', '2021-03-22 04:03:03', 'officer'),
(70, 'Steve', '2021-03-22 04:10:43', 'officer'),
(71, 'Steve', '2021-03-22 04:15:43', 'officer'),
(72, 'Steve', '2021-03-22 04:17:46', 'officer'),
(73, 'Steve', '2021-03-22 04:18:48', 'officer'),
(74, 'Steve', '2021-03-22 12:31:14', 'officer'),
(75, 'Steve', '2021-03-22 12:36:32', 'officer'),
(76, 'Steve', '2021-03-22 12:39:12', 'officer'),
(77, 'Steve', '2021-03-22 12:40:51', 'officer'),
(78, 'Steve', '2021-03-22 12:46:47', 'officer'),
(79, 'Steve', '2021-03-22 12:47:34', 'officer'),
(80, 'Steve', '2021-03-22 12:53:08', 'officer'),
(81, 'Steve', '2021-03-22 12:53:36', 'officer'),
(82, 'Steve', '2021-03-22 12:55:24', 'officer'),
(83, 'Steve', '2021-03-22 12:58:46', 'officer'),
(84, 'Steve', '2021-03-22 13:14:39', 'officer'),
(85, 'Steve', '2021-03-22 13:16:33', 'officer'),
(86, 'Steve', '2021-03-22 13:18:13', 'officer'),
(87, 'Steve', '2021-03-22 13:21:00', 'officer'),
(88, 'Steve', '2021-03-22 13:21:34', 'officer'),
(89, 'Steve', '2021-03-22 13:22:40', 'officer'),
(90, 'Steve', '2021-03-22 13:26:29', 'officer'),
(91, 'Steve', '2021-03-22 13:27:34', 'officer'),
(92, 'Steve', '2021-03-22 13:30:59', 'officer'),
(93, 'Steve', '2021-03-22 13:32:38', 'officer'),
(94, 'Steve', '2021-03-22 13:33:32', 'officer'),
(95, 'Steve', '2021-03-22 13:34:24', 'officer'),
(96, 'Steve', '2021-03-22 13:35:04', 'officer'),
(97, 'Steve', '2021-03-22 13:36:13', 'officer'),
(98, 'Steve', '2021-03-22 13:38:16', 'officer'),
(99, 'Steve', '2021-03-22 13:40:26', 'officer'),
(100, 'Steve', '2021-03-22 13:41:34', 'officer'),
(101, 'Steve', '2021-03-22 13:44:27', 'officer'),
(102, 'Steve', '2021-03-22 14:03:17', 'officer'),
(103, 'Steve', '2021-03-22 14:10:43', 'officer'),
(104, 'Steve', '2021-03-22 14:15:46', 'officer'),
(105, 'Steve', '2021-03-22 14:20:55', 'officer'),
(106, 'Steve', '2021-03-22 14:23:11', 'officer'),
(107, 'Steve', '2021-03-22 14:23:46', 'officer'),
(108, 'Steve', '2021-03-22 14:25:39', 'officer'),
(109, 'Steve', '2021-03-22 14:40:37', 'officer'),
(110, 'Steve', '2021-03-22 14:44:56', 'officer'),
(111, 'Steve', '2021-03-22 14:53:59', 'officer'),
(112, 'John', '2021-03-22 14:58:29', 'civil'),
(113, 'Steve', '2021-03-22 14:59:15', 'officer'),
(114, 'John', '2021-03-22 15:02:07', 'civil'),
(115, 'Steve', '2021-03-22 15:03:06', 'officer'),
(116, 'Steve', '2021-03-22 15:03:54', 'officer'),
(117, 'John', '2021-03-22 18:56:51', 'civil'),
(118, 'Steve', '2021-03-22 18:59:53', 'officer'),
(119, 'John', '2021-03-22 20:43:36', 'civil'),
(120, 'John', '2021-03-22 20:48:24', 'civil'),
(121, 'John', '2021-03-22 20:56:02', 'civil'),
(122, 'John', '2021-03-22 20:58:39', 'civil'),
(123, 'John', '2021-03-22 21:03:30', 'civil'),
(124, 'Steve', '2021-03-23 03:27:22', 'officer'),
(125, 'Steve', '2021-03-23 03:36:57', 'officer'),
(126, 'Steve', '2021-03-23 03:43:57', 'officer'),
(127, 'Steve', '2021-03-23 03:44:02', 'officer'),
(128, 'Steve', '2021-03-23 03:44:03', 'officer'),
(129, 'Steve', '2021-03-23 03:44:17', 'officer'),
(130, 'Steve', '2021-03-23 03:51:15', 'officer'),
(131, 'John', '2021-03-23 03:51:43', 'civil'),
(132, 'John', '2021-03-23 03:56:44', 'civil'),
(133, 'Steve', '2021-03-23 03:57:13', 'officer'),
(134, 'John', '2021-03-23 04:08:39', 'civil'),
(135, 'Steve', '2021-03-23 04:15:21', 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `section_charges`
--

DROP TABLE IF EXISTS `section_charges`;
CREATE TABLE IF NOT EXISTS `section_charges` (
  `Section_Id` varchar(45) NOT NULL,
  `Crime_Type` varchar(45) NOT NULL,
  PRIMARY KEY (`Section_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `User_Id` int NOT NULL,
  `User_Fname` varchar(45) NOT NULL,
  `User_Lname` varchar(45) NOT NULL,
  `User_Type` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` varchar(45) NOT NULL,
  `Zipcode` int NOT NULL,
  `Phone` int NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`User_Id`, `User_Fname`, `User_Lname`, `User_Type`, `Password`, `Address`, `City`, `State`, `Zipcode`, `Phone`, `Email`) VALUES
(101, 'Divya', 'Nagesh', 'officer', '', '101 Pandilla drive', 'Madison', 'Alabama', 35756, 2147483647, 'dn0040@uah.edu'),
(102, 'Nithin', 'Rao', 'officer', '', '101 Pandilla', 'madison', 'Ala', 35756, 2147483647, 'dn0040@uah.edu'),
(106, 'Steve', 'Rogers', 'officer', 'Steve', '101 Pabda', 'mad', 'al', 35756, 1919191919, 'dn0040@uah.edu'),
(107, 'Steve', 'Rogers', 'officer', 'Steve', '101 Pabda', 'mad', 'al', 35756, 1919191919, 'dn0040@uah.edu'),
(200, 'John', 'Smith', 'civil', 'John', '256 Gimlet Drive', 'Nashville', 'TN', 87878, 248422509, 'john@uah.edu'),
(201, 'John', 'Smith', 'civil', 'John', '256 Gimlet Drive', 'Nashville', 'TN', 87878, 248422509, 'john@uah.edu');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint_registration`
--
ALTER TABLE `complaint_registration`
  ADD CONSTRAINT `complaint_registration_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user_registration` (`User_Id`);

--
-- Constraints for table `complaint_status`
--
ALTER TABLE `complaint_status`
  ADD CONSTRAINT `complaint_status_ibfk_1` FOREIGN KEY (`Complaint_No`) REFERENCES `complaint_registration` (`Complaint_No`);

--
-- Constraints for table `criminals`
--
ALTER TABLE `criminals`
  ADD CONSTRAINT `criminals_ibfk_1` FOREIGN KEY (`FIR_No`) REFERENCES `fir_registration` (`FIR_No`);

--
-- Constraints for table `criminal_charge`
--
ALTER TABLE `criminal_charge`
  ADD CONSTRAINT `criminal_charge_ibfk_1` FOREIGN KEY (`Criminal_No`) REFERENCES `criminals` (`Criminal_No`),
  ADD CONSTRAINT `criminal_charge_ibfk_2` FOREIGN KEY (`Section_Id`) REFERENCES `section_charges` (`Section_Id`);

--
-- Constraints for table `fir_registration`
--
ALTER TABLE `fir_registration`
  ADD CONSTRAINT `fir_registration_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `user_registration` (`User_Id`),
  ADD CONSTRAINT `fir_registration_ibfk_2` FOREIGN KEY (`Complaint_No`) REFERENCES `complaint_registration` (`Complaint_No`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

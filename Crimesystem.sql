-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2021 at 11:54 PM
-- Server version: 5.7.32
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crimesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint_registration`
--

CREATE TABLE `complaint_registration` (
  `Complaint_No` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Victim_Name` varchar(45) NOT NULL,
  `Victime_Age` int(11) NOT NULL,
  `Victim_Address` varchar(45) NOT NULL,
  `Attack_Description` varchar(100) NOT NULL,
  `Suspect_Name` varchar(45) NOT NULL,
  `Witness_Name` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_registration`
--

INSERT INTO `complaint_registration` (`Complaint_No`, `User_Id`, `Date`, `Victim_Name`, `Victime_Age`, `Victim_Address`, `Attack_Description`, `Suspect_Name`, `Witness_Name`) VALUES
(101, 106, '2021-03-02', 'Dolla', 32, '101 Pandilaa drive', 'Robbery', 'Chintoo', 'Nithin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_status`
--

CREATE TABLE `complaint_status` (
  `Complaint_No` int(11) NOT NULL,
  `Status` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE `criminals` (
  `Criminal_No` varchar(45) NOT NULL,
  `Criminal_Fname` varchar(45) NOT NULL,
  `Criminal_Lname` varchar(45) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `FIR_No` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`Criminal_No`, `Criminal_Fname`, `Criminal_Lname`, `Gender`, `Age`, `FIR_No`) VALUES
('123', 'ssss', 'ssss', 'Male', '123', 321);

-- --------------------------------------------------------

--
-- Table structure for table `criminal_charge`
--

CREATE TABLE `criminal_charge` (
  `Criminal_No` varchar(45) NOT NULL,
  `Section_Id` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fir_registration`
--

CREATE TABLE `fir_registration` (
  `FIR_No` int(11) NOT NULL,
  `Complaint_No` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Incident_Date` date NOT NULL,
  `Incident_Time` time NOT NULL,
  `Crime_Type` varchar(45) NOT NULL,
  `Place_Of_Occurence` varchar(45) NOT NULL,
  `Victim_Name` varchar(45) NOT NULL,
  `Witness_Name` varchar(45) NOT NULL,
  `Accused_Name` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_registration`
--

INSERT INTO `fir_registration` (`FIR_No`, `Complaint_No`, `User_Id`, `Incident_Date`, `Incident_Time`, `Crime_Type`, `Place_Of_Occurence`, `Victim_Name`, `Witness_Name`, `Accused_Name`) VALUES
(123, 123, 123, '2021-03-01', '08:35:00', 'sample', 'sample', 'sss', 'ssss', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Log_Id` int(11) NOT NULL,
  `User` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User_Type` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`Log_Id`, `User`, `Date`, `User_Type`) VALUES
(1, 'Steve', '2021-03-21 04:49:18', 'officer');

-- --------------------------------------------------------

--
-- Table structure for table `section_charges`
--

CREATE TABLE `section_charges` (
  `Section_Id` varchar(45) NOT NULL,
  `Crime_Type` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `User_Id` int(11) NOT NULL,
  `User_Fname` varchar(45) NOT NULL,
  `User_Lname` varchar(45) NOT NULL,
  `User_Type` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` varchar(45) NOT NULL,
  `Zipcode` int(11) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`User_Id`, `User_Fname`, `User_Lname`, `User_Type`, `Password`, `Address`, `City`, `State`, `Zipcode`, `Phone`, `Email`) VALUES
(101, 'Divya', 'Nagesh', 'officer', '', '101 Pandilla drive', 'Madison', 'Alabama', 35756, 2147483647, 'dn0040@uah.edu'),
(102, 'Nithin', 'Rao', 'officer', '', '101 Pandilla', 'madison', 'Ala', 35756, 2147483647, 'dn0040@uah.edu'),
(106, 'Steve', 'Rogers', 'officer', 'Steve', '101 Pabda', 'mad', 'al', 35756, 1919191919, 'dn0040@uah.edu'),
(107, 'Steve', 'Rogers', 'officer', 'Steve', '101 Pabda', 'mad', 'al', 35756, 1919191919, 'dn0040@uah.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint_registration`
--
ALTER TABLE `complaint_registration`
  ADD PRIMARY KEY (`Complaint_No`);

--
-- Indexes for table `criminals`
--
ALTER TABLE `criminals`
  ADD PRIMARY KEY (`Criminal_No`);

--
-- Indexes for table `fir_registration`
--
ALTER TABLE `fir_registration`
  ADD PRIMARY KEY (`FIR_No`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Log_Id`);

--
-- Indexes for table `section_charges`
--
ALTER TABLE `section_charges`
  ADD PRIMARY KEY (`Section_Id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `Log_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

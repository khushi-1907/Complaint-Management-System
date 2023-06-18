-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 07:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycomplaints`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `SNo` int(255) NOT NULL,
  `Admin ID` int(255) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Category` varchar(150) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`SNo`, `Admin ID`, `Name`, `Role`, `Category`, `Email`, `Password`) VALUES
(1, 1, 'Abc', 'incharge', 'Disciplinary Matters', 'discipline@gmail.com', 'discipline'),
(2, 2, 'Xyz', 'incharge', 'Sexual Harassment or Misconduct', 'misconduct@gmail.com', 'misconduct'),
(3, 3, 'Def', 'incharge', 'Teaching Facilities', 'teaching@gmail.com', 'teaching'),
(4, 4, 'Gih', 'incharge', 'Hostel Related', 'hostel@gmail.com', 'hostel'),
(5, 5, 'Dgh', 'incharge', 'Others', 'other@gmail.com', 'other'),
(6, NULL, 'Asd', 'principal', 'All', 'principal@gmail.com', 'principal');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `SrNo` bigint(255) NOT NULL,
  `Name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Age` int(150) DEFAULT NULL,
  `Branch` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `Regn_No` int(15) DEFAULT NULL,
  `Complaint` text CHARACTER SET latin1 NOT NULL,
  `Inc_Date` date DEFAULT NULL,
  `Reg_DateTime` datetime DEFAULT NULL,
  `Category` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Not seen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`SrNo`, `Name`, `Age`, `Branch`, `Regn_No`, `Complaint`, `Inc_Date`, `Reg_DateTime`, `Category`, `Status`) VALUES
(18, 'Ruchi', 18, 'CSE', 2147483647, 'This is my complaint', '2022-09-06', '2022-10-09 10:48:15', 'Disciplinary Matters', 'Solved'),
(19, 'Ruchi', 18, 'CSE', 2147483647, 'This is my complaint', '2022-09-06', '2022-10-09 10:48:55', 'Others', 'Not seen'),
(20, 'Ruchi', 18, 'CSE', 2147483647, 'This is my complaint', '2022-09-06', '2022-10-09 10:49:06', 'Sexual Harassment or Misconduct', 'Not seen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `SNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `SrNo` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2020 at 01:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'SJA', 'admin', 3350232450, '2304530@gmail.com', '0192023a7bbd73250516f069df18b500', '2019-03-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldirectory`
--

CREATE TABLE `tbldirectory` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Profession` varchar(120) DEFAULT NULL,
  `Email` varchar(120) NOT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Status` varchar(120) NOT NULL,
  `Category` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldirectory`
--

INSERT INTO `tbldirectory` (`ID`, `FullName`, `Profession`, `Email`, `MobileNumber`, `Address`, `City`, `Status`, `Category`) VALUES
(48, 'nomanshah', 'developer', 'nomna@gmail.com', 3350232450, 'North', 'Karachi', '0', 'highcourt'),
(49, 'ishaq', 'hardware technician', 'ishaq@gmail.com', 333544, 'saddar town', 'saddar', '1', 'supreme'),
(50, 'Imtiaz', '55', '555@gmail.com', 546546546, 'aslkdjl', 'askldjkl', '1', 'highcourt'),
(51, 'syed noman Shah', 'noasjo', 'askldj@gmail.com', 31321, '564654', '65464', '1', 'district'),
(52, 'Adil Akhtar', 'developer', 'nomna@gmail.com', 3330253254, 'North', 'Karahci', '1', 'High Court of Sindh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `id_cat` int(20) NOT NULL,
  `name_cat` varchar(100) NOT NULL,
  `cat_date` date NOT NULL,
  `cat_other` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`id_cat`, `name_cat`, `cat_date`, `cat_other`) VALUES
(13, 'district', '2020-12-30', 'No other '),
(15, 'High Court of Sindh', '2020-12-31', 'Chal Nikal'),
(16, 'Supreme Court', '2020-02-22', 'No inf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `id_cat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

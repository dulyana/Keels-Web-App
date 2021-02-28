-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 09:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keels`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyhavest`
--

CREATE TABLE `buyhavest` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Qty` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `harvests`
--

CREATE TABLE `harvests` (
  `ID` int(11) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `lat` varchar(200) NOT NULL,
  `ing` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `contactNumber` varchar(200) NOT NULL,
  `report` varchar(1000) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `flag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `harvests`
--

INSERT INTO `harvests` (`ID`, `userID`, `Name`, `Address`, `lat`, `ing`, `City`, `Type`, `ProductName`, `qty`, `Price`, `contactNumber`, `report`, `img1`, `img2`, `img3`, `Status`, `flag`) VALUES
(1, '1', 'Name1', 'Address1', ' 6.933967167314034', ' 79.97488619306891', 'Anuradhapura', 'Fruit', 'Name of The Product', '56Kg', '1500.00', '07189741632', 'Please enter the report here we will see about the content of the report then we will accept this or not. please make sure you giving the full details about this', 'https://firebasestorage.googleapis.com/v0/b/images-9f28a.appspot.com/o/back2.png?alt=media&token=d4215625-a80c-4d01-a997-7483ce58f354', 'https://firebasestorage.googleapis.com/v0/b/images-9f28a.appspot.com/o/mf3.jpg?alt=media&token=df9084f1-7612-4238-937f-52fe31576763', 'https://firebasestorage.googleapis.com/v0/b/images-9f28a.appspot.com/o/WhatsApp%20Image%202020-08-11%20at%2009.09.01.jpeg?alt=media&token=36575133-facf-4be1-aa43-8dab9b5bbd5e ', 'Accepted', '2');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `ID` int(11) NOT NULL,
  `userID` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `NIC` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Address`, `NIC`, `Password`, `Type`) VALUES
(1, 'Name1', 'Address1', 'NIC', 'n.456', 'farmer');

-- --------------------------------------------------------

--
-- Table structure for table `wastedhavest`
--

CREATE TABLE `wastedhavest` (
  `ID` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Qty` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyhavest`
--
ALTER TABLE `buyhavest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `harvests`
--
ALTER TABLE `harvests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wastedhavest`
--
ALTER TABLE `wastedhavest`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyhavest`
--
ALTER TABLE `buyhavest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harvests`
--
ALTER TABLE `harvests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wastedhavest`
--
ALTER TABLE `wastedhavest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

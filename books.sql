-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 05:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(20) NOT NULL,
  `BookName` text NOT NULL,
  `BookDetials` text NOT NULL,
  `Coursecode` varchar(20) NOT NULL,
  `DateTimeCreate` date NOT NULL,
  `DateTimeUpdate` date NOT NULL,
  `Remarks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `StaffID` int(20) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `DateTimeCreate` date NOT NULL,
  `DateTimeUpdate` date NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `StockID` int(20) NOT NULL,
  `BookID` int(20) NOT NULL,
  `StaffID` int(20) NOT NULL,
  `Stocks` varchar(50) NOT NULL,
  `DateTimeCreate` int(11) NOT NULL,
  `DateTimeUpdate` int(11) NOT NULL,
  `Remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`),
  ADD KEY `Coursecode` (`Coursecode`),
  ADD KEY `Remarks_2` (`Remarks`),
  ADD KEY `Remarks_3` (`Remarks`);
ALTER TABLE `books` ADD FULLTEXT KEY `BookName` (`BookName`);
ALTER TABLE `books` ADD FULLTEXT KEY `BookDetials` (`BookDetials`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`StaffID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Username` (`Username`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Fname` (`Fname`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Lname` (`Lname`);
ALTER TABLE `staffs` ADD FULLTEXT KEY `Password` (`Password`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`StockID`),
  ADD UNIQUE KEY `Remarks` (`Remarks`),
  ADD UNIQUE KEY `BookID` (`BookID`),
  ADD UNIQUE KEY `StaffID` (`StaffID`),
  ADD KEY `Stocks` (`Stocks`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`BookID`) REFERENCES `stocks` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`StaffID`) REFERENCES `staffs` (`StaffID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

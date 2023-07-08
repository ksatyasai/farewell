-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 10:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farewell`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login data`
--

CREATE TABLE `login data` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL DEFAULT 'Aditya@123',
  `Name` varchar(50) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login data`
--

INSERT INTO `login data` (`ID`, `Username`, `Password`, `Name`, `Time`) VALUES
(1, '20255-CM-018', 'Naveen@99@', 'G.Naveen Babu', '2023-02-20 21:07:27'),
(2, '20255-CM-034', 'Aditya@123', 'M.Bhavani', '2023-02-20 21:09:21'),
(3, '20255-CM-029', 'Aditya@123', 'K.Ram Teja', '2023-02-20 21:10:20'),
(4, '20255-CM-060', 'Aditya@123', 'T.Akhila', '2023-02-20 21:10:37'),
(5, '20255-CM-028', 'Aditya@123', 'K.Satish', '2023-02-20 21:10:54'),
(6, '20255-CM-001', 'Aditya@123', 'A.Sri Devi', '2023-02-20 21:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `student data`
--

CREATE TABLE `student data` (
  `ID` int(11) NOT NULL,
  `Name Of The Student` varchar(50) NOT NULL,
  `Amount` varchar(40) NOT NULL,
  `Pin Number` varchar(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` int(11) NOT NULL DEFAULT 1,
  `CR Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student data`
--

INSERT INTO `student data` (`ID`, `Name Of The Student`, `Amount`, `Pin Number`, `Date`, `Status`, `CR Name`) VALUES
(35, '2', '2', '2', '2023-04-07 20:37:42', 1, 'K.Ram Teja'),
(51, 'satya sai', '100', '20255cm020', '2023-05-03 20:36:07', 1, 'K.Satish'),
(55, 'devi', '100', '20255-cm-001', '2023-05-03 20:59:48', 1, 'A.Sri Devi'),
(57, 'satya sai', '665', '20255-cm-020', '2023-05-12 09:43:07', 1, 'T.Akhila');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login data`
--
ALTER TABLE `login data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student data`
--
ALTER TABLE `student data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login data`
--
ALTER TABLE `login data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student data`
--
ALTER TABLE `student data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

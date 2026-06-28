-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2026 at 02:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiutech_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeefinal`
--

CREATE TABLE `employeefinal` (
  `empID` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `depID` int(11) DEFAULT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `salay` int(11) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeefinal`
--

INSERT INTO `employeefinal` (`empID`, `name`, `depID`, `dname`, `salay`, `rating`) VALUES
(1, 'arif', 201, 'software developer', 45000, 'B'),
(2, 'arif', 202, 'software developer', 55000, 'A'),
(3, 'arif', 203, 'quality ass', 65000, 'C'),
(4, 'arif', 204, 'ui ux', 4000, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeefinal`
--
ALTER TABLE `employeefinal`
  ADD PRIMARY KEY (`empID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

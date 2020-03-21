-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 07:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quest`
--

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `uid` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `startyear` int(11) NOT NULL,
  `endyear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`uid`, `position`, `company`, `startyear`, `endyear`) VALUES
(14, 'Manager', 'ICC ', 1999, 2059),
(15, 'EMPLOYEE', 'FACEBOOK', 2017, 2075),
(16, 'employee', 'bmc', 2002, 2040);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

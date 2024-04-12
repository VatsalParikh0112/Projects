-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2024 at 04:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculator`
--

CREATE TABLE `calculator` (
  `ID` int(4) NOT NULL,
  `questions` bigint(100) NOT NULL,
  `answers` int(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculator`
--

INSERT INTO `calculator` (`ID`, `questions`, `answers`, `dt`) VALUES
(1, 100, 1000, '2024-04-03 17:33:25'),
(9, 0, 0, '2024-04-03 18:36:45'),
(10, 99, 0, '2024-04-03 18:37:15'),
(11, 99, 0, '2024-04-03 18:37:43'),
(12, 99, 33, '2024-04-03 18:37:51'),
(13, 99, 297, '2024-04-03 18:38:21'),
(14, 0, 0, '2024-04-03 18:40:16'),
(15, 0, 0, '2024-04-03 18:40:25'),
(16, 99, 33, '2024-04-03 18:40:33'),
(17, 99, 33, '2024-04-03 18:42:33'),
(18, 0, 0, '2024-04-03 18:42:53'),
(19, 999, 333, '2024-04-03 18:43:05'),
(20, 0, 0, '2024-04-03 18:50:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculator`
--
ALTER TABLE `calculator`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculator`
--
ALTER TABLE `calculator`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

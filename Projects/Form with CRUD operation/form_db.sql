-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2024 at 07:14 AM
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
-- Database: `form_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `ID` int(100) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Address2` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Zip` varchar(50) NOT NULL,
  `Refrence` varchar(50) NOT NULL,
  `Feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `Date`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Password`, `Gender`, `Address`, `Address2`, `City`, `State`, `Zip`, `Refrence`, `Feedback`) VALUES
(17, '2024-04-22', 'Vatsal', 'Parikh', 'parikhvatsal75@gmail.com', '07990876497', 'Poojanparikh', 'Male', 'b/7, 401, viswash flats gulabtower thaltej', 'none', 'ahmedabad', 'Andhra Pradesh', '380054', 'Social Media', '...'),
(20, '2024-04-24', 'Poojan', 'Parikh', 'Poojan@gmail.com', '9879590578', 'vatsalparikh', 'Male', 'b/7, 401, vishwas flats gulabtower rd', 'dada ni khadki patdi', 'ahmedabad', 'Gujarat', '380054', 'Website', 'none.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

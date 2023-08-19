-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 11:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sno` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Pickup Date` date NOT NULL,
  `Return Date` date NOT NULL,
  `Car` varchar(50) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`sno`, `Name`, `Email`, `Phone`, `Pickup Date`, `Return Date`, `Car`, `Price`) VALUES
(1, 'Arjun', 'admin@example.com', 2147483647, '2023-05-30', '2023-06-16', 'compact', 7100),
(2, 'viram singh sisodiya', 'sisodiyaviramsingh415@gmail.co', 2147483647, '2023-06-14', '2023-06-16', 'economy', 0),
(3, 'viram singh sisodiya', 'sisodiyaviramsingh415@gmail.co', 2147483647, '2023-06-14', '2023-06-16', 'economy', 0),
(4, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0),
(5, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0),
(6, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0),
(7, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0),
(8, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0),
(9, 'Arjun', 'admin@example.com', 2147483647, '2023-06-23', '2023-06-25', 'economy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Message`) VALUES
(1, 'viramjkb', 'admin@example.com', 'hey'),
(2, 'viramjkb', 'admin@example.com', 'hey'),
(3, 'Arjun', 'admin@example.com', 'viramsingh'),
(4, 'Arjun', 'admin@example.com', 'hey baby'),
(5, 'Arjun', 'admin@example.com', 'hey baby'),
(6, 'Arjun', 'admin@example.com', 'hey baby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

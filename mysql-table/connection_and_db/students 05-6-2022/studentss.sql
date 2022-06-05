-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 11:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentss`
--

CREATE TABLE `studentss` (
  `id` int(1) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(92) NOT NULL,
  `phone_no` int(13) NOT NULL,
  `class_id` int(255) NOT NULL,
  `email` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentss`
--

INSERT INTO `studentss` (`id`, `first_name`, `last_name`, `phone_no`, `class_id`, `email`) VALUES
(4, 'dfdfdfdfdf', 'fddddddddd', 0, 1, 'ffffffffffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentss`
--
ALTER TABLE `studentss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentss`
--
ALTER TABLE `studentss`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

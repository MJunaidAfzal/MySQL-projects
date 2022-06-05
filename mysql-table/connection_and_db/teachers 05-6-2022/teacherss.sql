-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 11:30 AM
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
-- Table structure for table `teacherss`
--

CREATE TABLE `teacherss` (
  `id` int(1) NOT NULL,
  `teacher_name` varchar(10) NOT NULL,
  `teacher_last_name` varchar(92) NOT NULL,
  `phone_no` int(201) NOT NULL,
  `class_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherss`
--

INSERT INTO `teacherss` (`id`, `teacher_name`, `teacher_last_name`, `phone_no`, `class_id`) VALUES
(1, 'sir-talha', 'ali', 354923890, 2),
(2, 'miss_iffat', 'fatima', 3875947, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacherss`
--
ALTER TABLE `teacherss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacherss`
--
ALTER TABLE `teacherss`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

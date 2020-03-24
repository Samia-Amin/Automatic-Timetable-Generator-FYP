-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 09:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atg`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(100) NOT NULL,
  `fac_name` varchar(100) NOT NULL,
  `fac_lactures` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Faculty Detail Table';

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`, `fac_lactures`) VALUES
(5, 'Ms Nabila', 5),
(6, 'Sir Imran', 7),
(7, 'Sir Ameen', 4),
(8, 'Aatif Mahmood', 12);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(100) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `is_lab` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Room Detail table';

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `is_lab`) VALUES
(1, 'CL-1', 'no'),
(2, 'CL-2', 'no'),
(3, 'CL-3', 'no'),
(4, 'CL-4', 'no'),
(5, 'CL-5', 'no'),
(6, 'CL-6', 'no'),
(7, 'CL-7', 'no'),
(8, 'CL-8', 'no'),
(9, 'CL-9', 'no'),
(10, 'CL-10', 'no'),
(11, 'CL-11', 'no'),
(12, 'CL-12', 'no'),
(13, 'CL-13', 'no'),
(14, 'CL-14', 'no'),
(15, 'CL-15', 'no'),
(16, 'LAB-1', 'yes'),
(17, 'LAB-2', 'yes'),
(18, 'LAB-101', 'yes'),
(19, 'LAB-102', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(100) NOT NULL,
  `sem_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Semester with section Table';

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem_name`) VALUES
(2, 'Bscs 7th A'),
(3, 'Bscs 7th B');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(200) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `sub_credits` int(50) NOT NULL,
  `fac_sub_id` int(100) NOT NULL,
  `sem_id` int(100) NOT NULL,
  `lab_required` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Course detail';

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_credits`, `fac_sub_id`, `sem_id`, `lab_required`) VALUES
(8, 'Math', 3, 5, 2, 'no'),
(9, 'English', 3, 8, 3, 'no'),
(10, 'Computer', 4, 8, 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `slot_name` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `day`, `time`, `slot_name`) VALUES
(1, 'Monday', '8:00-9:30', 1),
(2, 'Monday', '9:30-11:00', 2),
(3, 'Monday', '11:00-12:30', 3),
(4, 'Monday', '12:30-2:00', 4),
(5, 'Monday', '02:00-03:30', 5),
(6, 'Monday', '03:30-05:00', 6),
(7, 'Monday', '05:00-06:00', 7),
(8, 'Tuesday', '8:00-9:30', 8),
(9, 'Tuesday', '9:30-11:00', 9),
(10, 'Tuesday', '11:00-12:30', 10),
(11, 'Tuesday', '12:30-2:00', 11),
(12, 'Tuesday', '02:00-03:30', 12),
(13, 'Tuesday', '03:30-05:00', 13),
(14, 'Tuesday', '05:00-06:00', 14),
(15, 'Wednesday', '8:00-9:30', 15),
(16, 'Wednesday', '9:30-11:00', 16),
(17, 'Wednesday', '11:00-12:30', 17),
(18, 'Wednesday', '12:30-2:00', 18),
(19, 'Wednesday', '02:00-03:30', 19),
(20, 'Wednesday', '03:30-05:00', 20),
(21, 'Wednesday', '05:00-06:00', 21),
(22, 'Thursday', '8:00-9:30', 22),
(23, 'Thursday', '9:30-11:00', 23),
(24, 'Thursday', '11:00-12:30', 24),
(25, 'Thursday', '12:30-2:00', 25),
(26, 'Thursday', '02:00-03:30', 26),
(27, 'Thursday', '03:30-05:00', 27),
(28, 'Thursday', '05:00-06:00', 28),
(29, 'Friday', '8:00-9:20', 29),
(30, 'Friday', '9:20-10:40', 30),
(31, 'Friday', '10:40-12:00', 31),
(32, 'Friday', '12:00-1:20', 32),
(33, 'Friday', '02:00-03:30', 33),
(34, 'Friday', '03:30-05:00', 34),
(35, 'Friday', '05:00-06:00', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$qgb0nKv9le2FuR/VCD9jVucb.xaoHoeY0kfg2pYVLBgg4jl1xlhAG', '2019-12-16 02:39:48'),
(2, 'atif', '$2y$10$Z6tE07GKce1HSttJNXvjsuvBCtlCyYhJSb282qtHh/vQ6Etgs5L96', '2020-01-05 23:57:35'),
(3, 'aatif', '$2y$10$yw.jRo6HXqwkjTswdK2pRuaT4ywmWZn9Jt4dJrJ4fCEI61j9IQlzm', '2020-02-18 21:50:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `subject_ibfk_1` (`sem_id`),
  ADD KEY `subject_ibfk_2` (`fac_sub_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`fac_sub_id`) REFERENCES `faculty` (`fac_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 05:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

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
  `fac_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Faculty Detail Table';

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`) VALUES
(10, 'Mr. Saad Razzaq'),
(11, 'Dr. Muhammad Ilyas'),
(12, 'Dr. Qaisar Abbas'),
(13, 'Mr. Fahad Maqbool'),
(14, 'Mr. Abid Rafiq'),
(15, 'Dr. Khalid Mehmood'),
(16, 'Dr. Humaira Ijaz'),
(17, 'Ms. Bushra Jamil'),
(18, 'Mr. Amir Zia'),
(20, 'Ms. Farhana Sharif'),
(21, 'Mr. Muhammad Iqbal'),
(22, 'Mr. M. Ramzan Malik'),
(23, 'Mr. Farooq Javed'),
(24, 'Ms. Madiha Sarwar'),
(25, 'Ms. Qaisera Ramzan'),
(26, 'Ms. Sidra Batool'),
(27, 'Mr. Nisar Ahmad'),
(28, 'Ms. Samreen Razzaq'),
(29, 'Mr. Qaisar Farooq'),
(30, 'Mr. Hussam Ali'),
(31, 'Mr. Naveed Ahmad'),
(32, 'Mr. Waseem Ahmad'),
(33, 'Mr. Zohaib Nawaz'),
(34, 'Ms. Iqra Khan'),
(35, 'Mr. Muhammad Fahad'),
(36, 'Mr. Suleman Jajja'),
(37, 'Ms. Tahira Nawaz'),
(38, 'Ms. Khadija Maryam'),
(39, 'Ms. Bisma Kazmi'),
(40, 'Ms. Sadia Riaz'),
(41, 'Ms. Mehwish Ilyas'),
(42, 'Mr. M. Munir'),
(43, 'Mr. Iqrar Ansari'),
(44, 'Ms. Rabia Iqbal'),
(45, 'Ms. Sundus Shah Nawaz'),
(46, 'Ms. Ayesha Tehreem'),
(47, 'Ms. Aqsa Zahoor'),
(48, 'Mr. Raheel Anjum'),
(49, 'Mr. Farooq Javid'),
(50, 'Mr. Ramzan Malik'),
(51, 'Mr. Salman Hussain Piracha'),
(52, 'Ms. Maryam Naseer'),
(53, 'Ms. Kinzah Noor'),
(54, 'Mr. Salman Jajja'),
(55, 'Dr. Naveed Mushtaq'),
(56, 'Mr. Dahir Zeb Bajwa'),
(57, 'Mr. Ali Qasim'),
(58, 'Ms. Eisha'),
(60, 'Mr. Abu Bakar'),
(61, 'Ms. Rida Ahmad'),
(62, 'Ms. Robina Khan'),
(63, 'Ms. Khansa Saleem'),
(64, 'Ms. Minal Hussain'),
(65, 'Ms. Asma Sher'),
(66, 'Dr. Ghulam Abbas'),
(67, 'Mr. Hassan Ubaid'),
(68, 'Ms. Anum Lodhi'),
(69, 'Mr. Kamran Mazhar'),
(70, 'Mr. Rajinder Parkash'),
(71, 'Mr. Waseem Amir'),
(72, 'Mr. Raheel Anjum'),
(73, 'Mr. Abdul Qadeer'),
(74, 'Ms. Ayesha Tehreem'),
(75, 'Ms. Zonaira Afzal'),
(76, 'Mr. Shahrose Khan'),
(77, 'Mr. Waheed Hassan'),
(78, 'Ms. Sana Saleem'),
(79, 'Mr. Faisal Zia'),
(80, 'Ms. Kinzah Noor'),
(81, 'Ms. Tayyaba Ashraf'),
(82, 'Ms. Maham Khalid'),
(83, 'Mr. Ghulam Rasul'),
(84, 'Ms. Shanza Rasham'),
(85, 'Ms. Rabia Parveen'),
(86, 'Mr. M. Danial Khalid'),
(87, 'Mr. Hamid Cheema'),
(88, 'Mr. Imran Javed'),
(89, 'Mr. Hassam Ali'),
(90, 'Mr. Abu Sameer'),
(91, 'Mr. Nauman Akram'),
(92, 'Mr. Muhammad Maroof'),
(93, 'Ms. Aysha Ashraf'),
(94, 'Mr. M. Moin Qadir'),
(95, 'Mr. Irfan Ahmed'),
(96, 'Mr. Zaib Zafar'),
(97, 'Mr. Abdul Ghaffar'),
(98, 'Ms. Nazish Ghafoor'),
(99, 'Ms. Sana Manzoor'),
(100, 'Ms. Sidra Salim'),
(101, 'Mr. Awais Ali Ch.'),
(102, 'Ms. Sidra Sharif'),
(103, 'Ms. Aqsa Faheem'),
(104, 'Ms. Anmol Bareeha'),
(105, 'Mr. Rana Safdar Ali'),
(106, 'Ms. Nadia Khizar'),
(107, 'Mr. Muhammad Usman'),
(108, 'Ms. Amsa Imam Din'),
(109, 'Ms. Madnia Ashraf'),
(110, 'Mr. Rana Safdar Ali'),
(111, 'Ms. Sadia Rafiq');

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
(4, 'BSCS 8th (Reg)'),
(5, 'BSCS 8th (Self)'),
(6, 'BSCS 6th (Reg)'),
(7, 'BSCS 6th (Self)'),
(8, 'BSCS 4th (Reg)'),
(9, 'BSCS 4th (Self)'),
(10, 'BSCS 2nd (Reg)'),
(11, 'BSCS 2nd (Self)'),
(12, 'BSIT 8th (Reg)'),
(13, 'BSIT 8th (Self)'),
(14, 'BSIT 6th (Reg)'),
(15, 'BSIT 6th (Self)'),
(16, 'BSIT 4th (Reg)'),
(17, 'BSIT 4th (Self)'),
(18, 'BSIT 2nd (Reg)'),
(19, 'BSIT 2nd (Self)'),
(20, 'BSSE 8th (Reg)'),
(21, 'BSSE 8th (Self)'),
(22, 'BSSE 6th (Reg)'),
(23, 'BSSE 6th (Self)'),
(24, 'BSSE 4th (Reg)'),
(25, 'BSSE 4th (Self)'),
(26, 'BSSE 2nd (Reg)'),
(27, 'BSSE 2nd (Self)'),
(28, 'MScIT 2nd'),
(29, 'MS'),
(30, 'PhD'),
(31, 'PPP BSCS 8th-A'),
(32, 'PPP BSCS 8th-B'),
(33, 'PPP BSCS 8th-C'),
(34, 'PPP BSCS 6th-A'),
(35, 'PPP BSCS 6th-B'),
(36, 'PPP BSCS 6th-C'),
(37, 'PPP BSCS 6th-D'),
(38, 'PPP BSIT 8th'),
(39, 'PPP BSIT 6th-A'),
(40, 'PPP BSIT 6th-B'),
(41, 'PPP BSIT 6th-C'),
(42, 'PPP BSSE 8th'),
(43, 'PPP BSSE 6th-A'),
(44, 'PPP BSSE 6th-B'),
(45, 'PPP BSSE 6th-C'),
(46, 'MScIT 4th');

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
(1, 'Capstone Project II', 2, 13, 4, 'no'),
(2, 'Capstone Project II', 2, 13, 4, 'no'),
(3, 'Professional Practices', 2, 20, 4, 'no'),
(4, 'Professional Practices', 2, 20, 5, 'no'),
(5, 'Mobile Application Development', 2, 75, 4, 'no'),
(6, 'Mobile Application Development', 2, 75, 5, 'no'),
(7, 'Principles of Soft Computing ', 2, 47, 4, 'no'),
(8, 'Principles of Soft Computing ', 2, 47, 5, 'no'),
(9, 'Capstone Project II', 2, 10, 12, 'no'),
(10, 'Capstone Project II', 2, 10, 13, 'no'),
(11, 'IT infrastructure', 2, 26, 12, 'no'),
(12, 'IT infrastructure', 2, 73, 13, 'no'),
(13, 'Enterprise Resource Planning Systems', 2, 82, 12, 'no'),
(14, 'Enterprise Resource Planning Systems', 2, 82, 13, 'no'),
(15, 'Cloud Computing', 2, 16, 12, 'no'),
(16, 'Cloud Computing', 2, 16, 13, 'no'),
(17, 'Capstone Project II', 2, 11, 20, 'no'),
(18, 'Capstone Project II', 2, 16, 21, 'no'),
(19, 'Professional Practice', 2, 20, 20, 'no'),
(20, 'Professional Practice', 2, 84, 21, 'no'),
(21, 'Design Patterns', 2, 90, 20, 'no'),
(22, 'Design Patterns', 2, 90, 21, 'no'),
(23, 'Software Engineering Economics', 2, 109, 20, 'no'),
(24, 'Software Engineering Economics', 2, 109, 21, 'no'),
(25, 'Human Resource Management', 2, 51, 21, 'no'),
(26, 'Human Resource Management', 2, 94, 20, 'no'),
(27, 'Cloud Computing', 2, 34, 6, 'no'),
(28, 'Cloud Computing', 2, 34, 7, 'no'),
(29, 'Numerical Computing', 2, 78, 6, 'no'),
(30, 'Numerical Computing', 2, 78, 7, 'no'),
(31, 'Artificial Intelligence', 2, 12, 6, 'no'),
(32, 'Artificial Intelligence', 2, 12, 7, 'no'),
(33, 'Human Computer Interaction', 2, 14, 6, 'no'),
(34, 'Human Computer Interaction', 2, 29, 7, 'no'),
(35, 'Principle of Psychology', 2, 42, 6, 'no'),
(36, 'Principle of Psychology', 2, 42, 7, 'no'),
(37, 'Principles of Management', 2, 32, 6, 'no'),
(38, 'Principles of Management', 2, 87, 7, 'no'),
(39, 'Systems and Network Administration', 2, 32, 14, 'no'),
(40, 'Systems and Network Administration', 2, 32, 15, 'no'),
(41, 'Enterprise Application Development', 2, 79, 14, 'no'),
(42, 'Enterprise Application Development', 2, 79, 15, 'no'),
(43, 'IT Infrastructure', 2, 26, 14, 'no'),
(44, 'IT Infrastructure', 2, 26, 15, 'no'),
(45, 'System Integration and Architecture', 2, 38, 14, 'no'),
(46, 'System Integration and Architecture', 2, 38, 7, 'no'),
(47, 'IT Project Management', 2, 28, 14, 'no'),
(48, 'IT Project Management', 2, 28, 15, 'no'),
(49, 'Pakistan Studies', 2, 101, 14, 'no'),
(50, 'Pakistan Studies', 2, 101, 15, 'no'),
(51, 'Software Project Management', 2, 46, 22, 'no'),
(52, 'Software Project Management', 2, 46, 23, 'no'),
(53, 'Formal Methods in Software Engineering', 2, 33, 22, 'no'),
(54, 'Formal Methods in Software Engineering', 2, 33, 23, 'no'),
(55, 'Software CASE Tools & Applications', 2, 25, 22, 'no'),
(56, 'Software CASE Tools & Applications', 2, 97, 23, 'no'),
(57, 'Enterprise Application Development', 2, 79, 22, 'no'),
(58, 'Enterprise Application Development', 2, 88, 23, 'no'),
(59, 'Artificial Intelligence', 2, 12, 22, 'no'),
(60, 'Artificial Intelligence', 2, 27, 23, 'no'),
(61, 'Design and Analysis of Algorithms', 2, 27, 8, 'no'),
(62, 'Design and Analysis of Algorithms', 2, 27, 9, 'no'),
(63, 'Differential Equations', 2, 110, 8, 'no'),
(64, 'Differential Equations', 2, 66, 9, 'no'),
(65, 'Computer Architecture', 2, 52, 8, 'no'),
(66, 'Computer Architecture', 2, 52, 9, 'Lab R'),
(67, 'Software Engineering', 2, 24, 8, 'no'),
(68, 'Software Engineering', 2, 41, 9, 'no'),
(69, 'Pakistan Studies', 2, 62, 8, 'no'),
(70, 'Pakistan Studies', 2, 44, 9, 'no'),
(71, 'Financial Accounting', 2, 83, 8, 'no'),
(72, 'Financial Accounting', 2, 83, 9, 'no'),
(73, 'Professional Practices', 2, 46, 17, 'no'),
(74, 'Professional Practices', 2, 103, 16, 'no'),
(75, 'Internet Architecture & Protocols', 2, 23, 16, 'no'),
(76, 'Internet Architecture & Protocols', 2, 23, 17, 'no'),
(77, 'Software Engineering', 2, 24, 16, 'no'),
(78, 'Software Engineering', 2, 24, 17, 'no'),
(79, 'Multimedia Systems and Design', 2, 89, 16, 'no'),
(80, 'Multimedia Systems and Design', 2, 89, 17, 'no'),
(81, 'Pakistan Studies', 2, 62, 16, 'no'),
(82, 'Pakistan Studies', 2, 44, 17, 'no'),
(83, 'Financial Accounting', 2, 45, 16, 'no'),
(84, 'Financial Accounting', 2, 45, 17, 'no'),
(85, 'Software Requirement Engineering', 2, 109, 24, 'no'),
(86, 'Software Requirement Engineering', 2, 56, 25, 'no'),
(87, 'Object Oriented Analysis and Design', 2, 25, 24, 'no'),
(88, 'Object Oriented Analysis and Design', 2, 25, 25, 'no'),
(89, 'Operating Systems', 2, 17, 24, 'no'),
(90, 'Operating Systems', 2, 17, 25, 'no'),
(91, 'Operating Systems Lab', 1, 108, 16, 'yes'),
(92, 'Operating Systems Lab', 1, 108, 25, 'yes'),
(93, 'Pakistan Studies', 2, 62, 24, 'no'),
(94, 'Pakistan Studies', 2, 44, 25, 'no'),
(95, 'Human Resource Management', 2, 55, 24, 'no'),
(96, 'Human Resource Management', 2, 55, 25, 'no'),
(97, 'Linear Algebra', 2, 110, 24, 'no'),
(98, 'Linear Algebra', 2, 43, 25, 'no'),
(99, 'Object Oriented Programming', 2, 18, 10, 'no'),
(100, 'Object Oriented Programming-Lab', 1, 18, 10, 'yes'),
(101, 'Object Oriented Programming', 2, 18, 11, 'no'),
(102, 'Object Oriented Programming-Lab', 1, 18, 11, 'yes'),
(103, 'Digital Logic and Design', 2, 36, 10, 'no'),
(104, 'Digital Logic and Design-Lab', 1, 53, 10, 'yes'),
(105, 'Digital Logic and Design', 2, 36, 11, 'no'),
(106, 'Digital Logic and Design-Lab', 1, 53, 11, 'yes'),
(107, 'Probability & Statistics', 2, 91, 10, 'no'),
(108, 'Probability & Statistics', 2, 91, 11, 'no'),
(109, 'Communication Skills', 2, 104, 10, 'no'),
(110, 'Communication Skills', 2, 92, 11, 'no'),
(111, 'Islamic Studies', 2, 111, 10, 'no'),
(112, 'Islamic Studies', 2, 67, 11, 'no'),
(113, 'Object Oriented Programming', 2, 21, 18, 'no'),
(114, 'Object Oriented Programming', 2, 18, 19, 'no'),
(115, 'Object Oriented Programming-Lab', 1, 99, 18, 'yes'),
(116, 'Object Oriented Programming-Lab', 1, 99, 19, 'yes'),
(117, 'Digital Logic Design', 2, 31, 18, 'no'),
(118, 'Digital Logic Design', 2, 31, 19, 'no'),
(119, 'Probability & Statistics', 2, 71, 18, 'no'),
(120, 'Probability & Statistics', 2, 71, 19, 'no'),
(121, 'Communication & Presentation Skills', 2, 102, 18, 'no'),
(122, 'Communication & Presentation Skills', 2, 37, 19, 'no'),
(123, 'Business Economics', 2, 70, 18, 'no'),
(124, 'Business Economics', 2, 70, 19, 'no'),
(125, 'Object Oriented Programming', 2, 21, 26, 'no'),
(126, 'Object Oriented Programming', 2, 21, 27, 'no'),
(127, 'Object Oriented Programming-Lab', 1, 99, 26, 'yes'),
(128, 'Object Oriented Programming-Lab', 1, 99, 27, 'yes'),
(129, 'Linear Algebra', 2, 39, 26, 'no'),
(130, 'Linear Algebra', 2, 66, 27, 'no'),
(131, 'Pakistan Studies', 2, 40, 26, 'no'),
(132, 'Pakistan Studies', 2, 40, 27, 'no'),
(133, 'Software Engineering', 2, 41, 26, 'no'),
(134, 'Software Engineering', 2, 98, 27, 'no'),
(135, 'Communication & Presentation Skills', 2, 58, 26, 'no'),
(136, 'Communication & Presentation Skills', 2, 58, 27, 'no'),
(137, 'Principles of Management', 2, 32, 26, 'no'),
(138, 'Principles of Management', 2, 100, 27, 'no'),
(139, 'Capstone Project II', 2, 14, 46, 'no'),
(140, 'IT Project Management', 2, 36, 46, 'no'),
(141, 'System and Network Administration', 2, 32, 46, 'no'),
(142, 'Database Administration & Management', 2, 65, 46, 'no'),
(143, 'Enterprise Application Development', 2, 76, 46, 'no'),
(144, 'E-Commerce Applications Development', 2, 64, 46, 'no'),
(145, 'Object Oriented Programming', 2, 18, 28, 'no'),
(146, 'Object Oriented Programming-Lab', 1, 18, 28, 'yes'),
(147, 'Operating Systems', 2, 31, 28, 'no'),
(148, 'Software Engineering', 2, 22, 28, 'no'),
(149, 'Database Systems', 2, 11, 28, 'no'),
(150, 'Computer Communication and Networks', 2, 73, 28, 'no'),
(151, 'Web Systems and Technologies', 2, 28, 28, 'no'),
(152, 'Capstone Project Part II', 2, 17, 38, 'no'),
(153, 'Cloud Computing', 2, 77, 38, 'no'),
(154, 'Enterprise Resource Planning Systems', 2, 82, 38, 'no'),
(155, 'Artificial Intelligence', 2, 12, 38, 'no'),
(156, 'Technology Management', 2, 23, 39, 'no'),
(157, 'Technology Management', 2, 23, 40, 'no'),
(158, 'Technology Management', 2, 23, 41, 'no'),
(159, 'Systems and Network Administration', 2, 32, 39, 'no'),
(160, 'Systems and Network Administration', 2, 32, 40, 'no'),
(161, 'Systems and Network Administration', 2, 32, 41, 'no'),
(162, 'Enterprise Application Development', 2, 76, 39, 'no'),
(163, 'Enterprise Application Development', 2, 76, 40, 'no'),
(164, 'Enterprise Application Development', 2, 88, 41, 'no'),
(165, 'Artificial Intelligence', 2, 22, 39, 'no'),
(166, 'Artificial Intelligence', 2, 22, 40, 'no'),
(167, 'Artificial Intelligence', 2, 27, 41, 'no'),
(168, 'System Integration and Architecture', 2, 85, 39, 'no'),
(169, 'System Integration and Architecture', 2, 85, 40, 'no'),
(170, 'System Integration and Architecture', 2, 106, 41, 'no'),
(171, 'IT Project Management', 2, 29, 39, 'no'),
(172, 'IT Project Management', 2, 95, 40, 'no'),
(173, 'IT Project Management', 2, 95, 41, 'no'),
(174, 'Capstone Project II', 2, 13, 31, 'no');

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
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$qgb0nKv9le2FuR/VCD9jVucb.xaoHoeY0kfg2pYVLBgg4jl1xlhAG', '2019-12-16 02:39:48'),
(2, 'atif', '$2y$10$Z6tE07GKce1HSttJNXvjsuvBCtlCyYhJSb282qtHh/vQ6Etgs5L96', '2020-01-05 23:57:35'),
(3, 'aatif', '$2y$10$yw.jRo6HXqwkjTswdK2pRuaT4ywmWZn9Jt4dJrJ4fCEI61j9IQlzm', '2020-02-18 21:50:21'),
(4, 'azka123', '$2y$10$A97Cb.bHwez7TTScaN9CPuZ/0KtS6WBMozGXullFPpuydHIuLwS/a', '2020-03-26 11:53:13');

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
  MODIFY `fac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

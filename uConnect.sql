-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 01:11 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uConnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `description`) VALUES
('INFM 700', 'Information Architecture'),
('INFM 750', 'From Data to Insights'),
('INFM 714', 'Information for Decision-Making'),
('INST 737', 'Digging Into Data'),
('INFM 747', 'Web-Enabled Databases'),
('INFM 757', 'Organizational and Business Process Modeling'),
('INFM 714', 'Principles of Competitive Intelligence'),
('INFM 743', 'Development of Internet Applications'),
('INST 603', 'Systems Design and Analysis'),
('INST 706', 'Project Management'),
('INST 733', 'Database Design');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(50) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Software engineer'),
(2, 'Data Analyst'),
(3, 'Data scientist'),
(4, 'Project Manager'),
(5, 'UI/UX Engineer'),
(6, 'Program Manager'),
(7, 'test Engineer'),
(8, 'Product Manager');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `year_grad` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`first_name`, `last_name`, `email_id`, `password`, `year_grad`, `username`, `status`) VALUES
('Aditya', 'Bhat', 'adi@umd.edu', '1234', 1, 'aditya_rb', 0),
('Gavish', 'Gav', 'gavish@umd.edu', '1234', 1, 'gavish', 0),
('phaneendra', 'namala', 'phani@umd.edu', '123456', 1, 'phaneendra_n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_academia`
--

CREATE TABLE IF NOT EXISTS `user_academia` (
  `user_name` varchar(50) NOT NULL,
  `experience` int(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `INST 706` bit(1) NOT NULL,
  `INFM 700` bit(1) NOT NULL,
  `INFM 750` bit(1) NOT NULL,
  `INFM 714` bit(1) NOT NULL,
  `INST 737` bit(1) NOT NULL,
  `INST 747` bit(1) NOT NULL,
  `INFM 757` bit(1) NOT NULL,
  `INFM 733` bit(1) NOT NULL,
  `INFM 743` bit(1) NOT NULL,
  `INFM 603` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_academia`
--

INSERT INTO `user_academia` (`user_name`, `experience`, `company`, `role`, `INST 706`, `INFM 700`, `INFM 750`, `INFM 714`, `INST 737`, `INST 747`, `INFM 757`, `INFM 733`, `INFM 743`, `INFM 603`) VALUES
('phaneendra_n', 4, 'xyz', 'Data Analyst', b'1', b'1', b'0', b'0', b'1', b'1', b'0', b'0', b'1', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_academia`
--
ALTER TABLE `user_academia`
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_academia`
--
ALTER TABLE `user_academia`
  ADD CONSTRAINT `user_academia_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `User` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 03:02 PM
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
('INFM700', 'Information Architecture'),
('INFM750', 'From Data to Insights'),
('INFM714', 'Information for Decision-Making'),
('INST737', 'Digging Into Data'),
('INFM747', 'Web-Enabled Databases'),
('INFM757', 'Organizational and Business Process Modeling'),
('INFM714', 'Principles of Competitive Intelligence'),
('INFM743', 'Development of Internet Applications'),
('INST603', 'Systems Design and Analysis'),
('INST706', 'Project Management'),
('INST733', 'Database Design');

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
('Sneha', 'm', 'sneha', '', 0, '', 0),
('Aditya', 'Bhat', 'adi@umd.edu', '1234', 1, 'aditya_b', 0),
('Aditya', 'Bhat', 'adi@umd.edu', '1234', 1, 'aditya_rb', 0),
('Akshay', 'Mandake', 'aksh@umd.edu', 'aksh', 2014, 'aksh', 0),
('Anuj', 'Shah', 'anuj@umd.edu', 'anuj', 2014, 'anuj', 0),
('Ashwin', 'SL', 'ashwin@umd.edu', 'ashwin', 2013, 'ashwin', 0),
('Gavish', 'Gav', 'gavish@umd.edu', '1234', 1, 'gavish', 0),
('Gavish', 'Gav', 'gavish@umd.edu', '1234', 1, 'gavishg', 0),
('phaneendra', 'namala', 'phani@umd.edu', '123456', 1, 'phaneendra_n', 1),
('Raju', 'V', 'raju@umd.edu', 'raju', 2013, 'raju', 0),
('Raveesh', 'Mayya', 'rmb@umd.edu', 'rav', 2014, 'rav', 0),
('Rithesh', 'S', 'rithesh@umd.edu', 'rit', 2013, 'rit', 0),
('Sneha', 'm', 'sneha@umd.edu', 'sneha', 2014, 'sneha', 0),
('Sughosh', 'v', 'sug@umd.edu', 'sug', 2013, 'sug', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_academia`
--

CREATE TABLE IF NOT EXISTS `user_academia` (
  `user_name` varchar(50) NOT NULL,
  `experience` int(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `INST706` bit(1) NOT NULL,
  `INFM700` bit(1) NOT NULL,
  `INFM750` bit(1) NOT NULL,
  `INFM714` bit(1) NOT NULL,
  `INST737` bit(1) NOT NULL,
  `INST747` bit(1) NOT NULL,
  `INFM757` bit(1) NOT NULL,
  `INFM733` bit(1) NOT NULL,
  `INFM743` bit(1) NOT NULL,
  `INFM603` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_academia`
--

INSERT INTO `user_academia` (`user_name`, `experience`, `company`, `role`, `INST706`, `INFM700`, `INFM750`, `INFM714`, `INST737`, `INST747`, `INFM757`, `INFM733`, `INFM743`, `INFM603`) VALUES
('gavish', 4, 'Accenture', 'Web Developer', b'1', b'1', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'0'),
('aditya_rb', 0, 'Microsoft', 'Data Scientist', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'1', b'0'),
('aksh', 2, 'EY', 'Data Scientist', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'1', b'0'),
('anuj', 2, 'EY', 'Web Developer', b'1', b'1', b'1', b'0', b'0', b'0', b'0', b'1', b'1', b'0'),
('ashwin', 3, 'Microsoft', 'Data Scientist', b'0', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'1', b'0'),
('raju', 0, 'Cummins', 'Web Developer', b'0', b'1', b'1', b'1', b'0', b'0', b'0', b'0', b'1', b'1'),
('rav', 4, 'EY', 'Data Scientist', b'0', b'0', b'1', b'0', b'1', b'1', b'0', b'1', b'1', b'0'),
('rit', 0, 'Microsoft', 'Web Developer', b'0', b'0', b'1', b'0', b'0', b'1', b'1', b'1', b'1', b'0'),
('sneha', 3, 'Accenture', 'Data Scientist', b'1', b'0', b'0', b'0', b'1', b'1', b'1', b'1', b'0', b'0'),
('sug', 0, 'AIR', 'Web Developer', b'0', b'1', b'1', b'0', b'0', b'0', b'0', b'1', b'1', b'1'),
('phaneendra_n', 4, 'Infosys', 'software Developer', b'1', b'1', b'1', b'0', b'1', b'1', b'0', b'1', b'1', b'1');

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

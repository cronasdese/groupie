-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2015 at 09:36 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupie`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `ID` varchar(10) NOT NULL,
  `user_type` int(1) NOT NULL,
  `full_name` varchar(32) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact_number` int(13) NOT NULL,
  `email_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `user_type`, `full_name`, `password`, `contact_number`, `email_address`) VALUES
('12-027-013', 1, 'marcopolo', 'marcopolo', 2147483647, 'marcobustillo21@gmail.com'),
('12-027-091', 1, 'Alexander Pascual', 'alexalexalex', 902827297, 'boomshakeboom1@yahoo.com'),
('12-027-092', 1, 'Alexander Pascual', 'alexalexalex', 2147483647, 'boomshakeboom1@yahoo.com'),
('12-028-014', 1, 'marcopolo', 'marcopolo', 2147483647, 'marcobustillo21@gmail.com'),
('4123123', 1, '', '', 99123313, 'marco@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` varchar(10) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` datetime(6) NOT NULL,
  `comment_ID` int(10) NOT NULL,
  `post_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `comment_content`, `comment_date`, `comment_ID`, `post_id`) VALUES
('12-027-092', 'Post ko like ko', '2015-10-10 00:00:00.000000', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_ID` varchar(15) NOT NULL,
  `details` varchar(255) NOT NULL,
  `schedule` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `student_ID` varchar(10) NOT NULL,
  `professor_ID` varchar(10) NOT NULL,
  `quiz` varchar(6) NOT NULL,
  `homework` varchar(6) NOT NULL,
  `project` varchar(6) NOT NULL,
  `exam` varchar(6) NOT NULL,
  `attendance` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_ID` int(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `group_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_ID`, `ID`, `group_name`) VALUES
(1, '12-027-013', 'sashagrey'),
(2, '12-027-092', 'Software Eng.');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `poster_name` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_date` datetime(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `group_id`, `ID`, `poster_name`, `post_content`, `post_date`) VALUES
(1, 1, '12-027-092', 'Alexander Pascual', 'ako si alex', '2015-10-10 00:00:00.000000'),
(2, 2, '12-027-092', 'Alexander Pascual', 'lorem alex ipsum', '2015-11-16 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `group_ID` varchar(15) NOT NULL,
  `course_syllabus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_ID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2023 at 11:12 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appname`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `announcement_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `message` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL,
  PRIMARY KEY (`announcement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `assignment_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `assignment` text NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `posted_on` timestamp NOT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `subject_id`, `assignment`, `deadline`, `posted_by`, `posted_on`) VALUES
(21, 56, 'question3', '2022-01-01', 'asd', '2022-11-22 05:26:51'),
(20, 56, 'question2', '2022-01-01', 'asd', '2022-11-22 05:26:50'),
(19, 56, 'question1', '2022-01-01', 'asd', '2022-11-22 05:26:48'),
(11, 47, 'What the fuck?', '2022-01-19', 'asd', '2022-11-22 02:37:50'),
(12, 47, 'Question 2', '2022-01-01', 'asd', '2022-11-22 02:57:01'),
(13, 51, 'question1\r\n', '2022-01-01', 'joanne', '2022-11-22 05:19:20'),
(14, 51, 'Question 2', '2022-01-01', 'joanne', '2022-11-22 05:19:23'),
(15, 51, 'Question 3', '2022-01-01', 'joanne', '2022-11-22 05:19:28'),
(16, 57, 'question1 \r\n', '2022-01-01', 'asd', '2022-11-22 05:26:40'),
(17, 57, 'question2', '2022-01-01', 'asd', '2022-11-22 05:26:42'),
(18, 57, 'question3', '2022-01-01', 'asd', '2022-11-22 05:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_students`
--

DROP TABLE IF EXISTS `blocked_students`;
CREATE TABLE IF NOT EXISTS `blocked_students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `subject_id` int NOT NULL,
  `blocked_subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

DROP TABLE IF EXISTS `groupchat`;
CREATE TABLE IF NOT EXISTS `groupchat` (
  `chat_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `group_message` text NOT NULL,
  `sent_by` varchar(50) NOT NULL,
  `sent_on` timestamp NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

DROP TABLE IF EXISTS `lectures`;
CREATE TABLE IF NOT EXISTS `lectures` (
  `lecture_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `topic` varchar(50) NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `posted_by` text NOT NULL,
  `posted_on` timestamp NOT NULL,
  PRIMARY KEY (`lecture_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

DROP TABLE IF EXISTS `student_answers`;
CREATE TABLE IF NOT EXISTS `student_answers` (
  `answers_id` int NOT NULL AUTO_INCREMENT,
  `assignment_id` int NOT NULL,
  `subject_id` int NOT NULL,
  `answer` text NOT NULL,
  `answered_by` varchar(50) NOT NULL,
  `answered_on` timestamp NOT NULL,
  `grade` int NOT NULL,
  PRIMARY KEY (`answers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_grades`
--

DROP TABLE IF EXISTS `student_grades`;
CREATE TABLE IF NOT EXISTS `student_grades` (
  `grade_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `grade` int NOT NULL,
  `subject_id` int NOT NULL,
  PRIMARY KEY (`grade_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

DROP TABLE IF EXISTS `student_subjects`;
CREATE TABLE IF NOT EXISTS `student_subjects` (
  `studsub_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL,
  `enrolled_on` timestamp NOT NULL,
  PRIMARY KEY (`studsub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sub_password` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secret_code` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `email_address`, `password`, `secret_code`, `role`) VALUES
(33, 'Joanne Mancao', 'alskdj', 'asd', 'asd', 'asd', 'Student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

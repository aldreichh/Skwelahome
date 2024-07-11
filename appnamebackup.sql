-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2022 at 11:25 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`answers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

DROP TABLE IF EXISTS `student_subjects`;
CREATE TABLE IF NOT EXISTS `student_subjects` (
  `studsub_id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL,
  `enrolled_on` timestamp NOT NULL,
  PRIMARY KEY (`studsub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

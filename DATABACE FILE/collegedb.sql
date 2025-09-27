-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2023 at 04:59 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `enquirytext` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `gender`, `address`, `contactno`, `emailaddress`, `enquirytext`) VALUES
(1, 'Dipti Singh', 'Female', 'Kushinagar', '9654096188', 'dipti@gmail.com', 'hlo dipti'),
(2, 'Deep', 'Female', 'Luckhnow', '9654096187', 'dipti@gmail.com', 'hii'),
(3, 'Jiya Singh', 'Female', 'Kushinagar', '4523678901', 'Jiya@gmail.com', 'hii'),
(4, 'satyam', 'Male', 'Ambedkar Nagar', '6789452319', 'satyam@gmail.com', 'hlo');

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

DROP TABLE IF EXISTS `log_data`;
CREATE TABLE IF NOT EXISTS `log_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `emailaddress` varchar(50) NOT NULL,
  `password` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `log_data`
--

INSERT INTO `log_data` (`id`, `emailaddress`, `password`) VALUES
(1, 'admin@gmail.com', '12345'),
(2, 'abc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reg_data`
--

DROP TABLE IF EXISTS `reg_data`;
CREATE TABLE IF NOT EXISTS `reg_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `password` varchar(20)  NOT NULL,
  `conpassword` varchar(20) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `photo_name` varchar(60) NOT NULL,
  `photo_type` varchar(60) NOT NULL,
  `photo_tmp` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ;

--
-- Dumping data for table `reg_data`
--

INSERT INTO `reg_data` (`id`, `name`, `gender`, `emailaddress`, `password`, `conpassword`, `contactno`, `photo_name`, `photo_type`, `photo_tmp`) VALUES
(1, 'Dipti Singh', 'Female', 'dipti@gmail.com', '123', '123', '9654096188', 'Snapchat-916492354.jpg', 'image/jpeg', 'C:wamp64	mpphpF31C.tmp'),
(2, 'Deepak Singh', 'Male', 'deepak@gamil.com', '123', '123', '8542828135', 'Screenshot_20230228_114356.png', 'image/png', 'C:wamp64	mpphpB79D.tmp'),
(3, 'Jiya', 'Female', 'Jiya@gmail.com', '123', '123', '8542828135', 'Snapchat-1457362630.jpg', 'image/jpeg', 'C:wamp64	mpphp6974.tmp'),
(4, 'Satyam', 'Male', 'satyam@gmail.com', '123', '123', '9654096188', 'user2.jpg', 'image/jpeg', 'C:wamp64	mpphp759F.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `stuloadassignment`
--

DROP TABLE IF EXISTS `stuloadassignment`;
CREATE TABLE IF NOT EXISTS `stuloadassignment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `student` varchar(50) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `tmp_name` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `stuloadassignment`
--

INSERT INTO `stuloadassignment` (`id`, `name`, `student`, `assignment`, `tmp_name`) VALUES
(1, 'Dipti Singh', 'PHP', 'A Workbook on PHP.pdf', 'C:wamp64	mpphpA7F6.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `uploadassignment`
--

DROP TABLE IF EXISTS `uploadassignment`;
CREATE TABLE IF NOT EXISTS `uploadassignment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

--
-- Dumping data for table `uploadassignment`
--

INSERT INTO `uploadassignment` (`id`, `subject`, `assignment`) VALUES
(1, 'PHP', 'A Workbook on PHP.pdf'),
(2, 'java', 'Workbook on Java Language With Solution.pdf'),
(3, 'PHP', 'A Workbook on PHP.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

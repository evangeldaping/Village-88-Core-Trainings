-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2021 at 07:31 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leads_search_pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `first_name`, `last_name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Michael', 'Choi', 'mchoi@village88.com', '2021-04-23 10:19:48', '2021-04-23 10:19:48'),
(2, 'John', 'Supsupin', 'jsupsupin@gmail.com', '2021-04-23 10:32:14', '2021-04-23 10:32:14'),
(3, 'Art', 'Lopez', 'artlopez@gmail.com', '2021-04-23 11:00:27', '2021-04-23 11:00:27'),
(4, 'A', 'AA', 'a@gmail.com', '2021-04-23 11:32:39', '2021-04-23 11:32:39'),
(5, 'B', 'BB', 'b@gmail.com', '2021-04-23 11:33:05', '2021-04-23 11:33:05'),
(6, 'C', 'CC', 'c@gmail.com', '2021-04-23 11:33:22', '2021-04-23 11:33:23'),
(7, 'D', 'DD', 'd@gmail.com', '2021-04-23 11:33:37', '2021-04-23 11:33:37'),
(8, 'E', 'EE', 'e@gmail.com', '2021-04-23 11:33:52', '2021-04-23 11:33:52'),
(9, 'F', 'FF', 'f@gmail.com', '2021-04-23 11:34:05', '2021-04-23 11:34:05'),
(10, 'G', 'GG', 'g@gmail.com', '2021-04-23 11:34:15', '2021-04-23 11:34:15'),
(11, 'H', 'HH', 'h@gmail.com', '2021-04-23 11:34:25', '2021-04-23 11:34:25'),
(12, 'I', 'II', 'i@gmail.com', '2021-04-23 11:34:40', '2021-04-23 11:34:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

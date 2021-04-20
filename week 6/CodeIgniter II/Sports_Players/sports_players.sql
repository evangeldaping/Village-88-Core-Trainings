-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2021 at 02:41 AM
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
-- Database: `sports_players`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sports` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `sports`, `gender`, `image`) VALUES
(1, 'Hanamichi-Sakuragi', 'Basketball', 'Male', 'Hanamichi-Sakuragi.png'),
(2, 'Kaede-Rukawa', 'Basketball', 'Male', 'Kaede-Rukawa.png'),
(3, 'Takenori-Akagi', 'Basketball', 'Male', 'Takenori-Akagi.png'),
(4, 'Ryota-Miyagi', 'Basketball', 'Male', 'Ryota-Miyagi.png'),
(5, 'Yorimichi-Kuroba', 'Volleyball', 'Male', 'Yorimichi-Kuroba.png'),
(6, 'Ryo-Nagato', 'Volleyball', 'Male', 'Ryo-Nagato.png'),
(7, 'Itoko-Kuroba', 'Volleyball', 'Female', 'Itoko-Kuroba.png'),
(8, 'Ibara-Suemori', 'Volleyball', 'Female', 'Ibara-Suemori.png'),
(9, 'Ryu-Sanada', 'Baseball', 'Male', 'Ryu-Sanada.png'),
(10, 'Hideki-Hinata', 'Baseball', 'Male', 'Hideki-Hinata.png'),
(11, 'Minori-Kushieda', 'Baseball', 'Female', 'Minori-Kushieda.png'),
(12, 'Tsubaki-Sawabe', 'Baseball', 'Female', 'Tsubaki-Sawabe.png'),
(13, 'Hayato-Hayama', 'Soccer', 'Male', 'Hayato-Hayama.png'),
(14, 'Aoyama', 'Soccer', 'Male', 'Aoyama.png'),
(15, 'Shirou-Fubuki', 'Soccer', 'Female', 'Shirou-Fubuki.png'),
(16, 'Karin-Kurosaki', 'Soccer', 'Female', 'Karin-Kurosaki.png'),
(17, 'Kubo-Yoshiharu', 'Football', 'Male', 'Kubo-Yoshiharu.png'),
(18, 'Tsubasa-Ozora', 'Football', 'Male', 'Tsubasa-Ozora.png'),
(19, 'Kazemaru-Ichirouta', 'Football', 'Female', 'Kazemaru-Ichirouta.png'),
(20, 'Afuro-Terumi', 'Football', 'Female', 'Afuro-Terumi.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

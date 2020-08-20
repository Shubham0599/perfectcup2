-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2020 at 03:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect_cup`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Shubham', 'Anand', 'b1eshubham@gmail.com', '$2y$12$ZR5VOaRpFcEU6xHW0Pl7IepWnTgrdCmc65wpuqPx0/NAgntUVm4C2'),
(2, 'Ram', 'Pal', 'rampal@gmail.com', '$2y$12$7k5QZEeY1t/TAETQN54eyeadILGxGL1vi8eRZX6UKFkgDTWpT52w6'),
(3, 'sushant', 'Anand', 'anandsushant@gmail.com', '$2y$12$FKgCCB4DB43FZqk459VhRONOWenjecL8r8AVJPIRQps7J8UYPx6fe'),
(4, 'Shubham', 'Anand', 'b18shubham@gmail.com', '$2y$12$ESX/1e4bdPcU1zk6do.vwuN3NDZbepOc6Zhf0FYDtNs7ynAsXUGLK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2023 at 10:55 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shika`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `passwd` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='admin_Table';

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwd`, `created`) VALUES
(1, 'Henry', 'admin098', '2023-01-06 22:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `image` varchar(500) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `occupation` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_general_mysql500_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `image`, `email`, `occupation`, `address`, `created`) VALUES
(5, 'Andy Records', 'Consecration.png', 'andy@email.com', 'Developer', 'shika, zaria', '2023-02-25 22:09:22'),
(6, 'Sammy Okposo', 'Consecration.png', 'sammy@email.com', 'Musician', 'Lagos Jakpa', '2023-02-25 22:17:40'),
(7, 'paul mada', 'wagepoint-certification.png', 'paul@gmail.com', 'Nani', 'Twailloo', '2023-02-26 04:49:28'),
(8, 'Monday Venn', 'Txero.png', 'ven@email.com', 'Doctor', 'Baeu', '2023-02-26 04:50:50'),
(9, 'stanley Ashley', 'trusted.png', 'ash@gmail.com', 'lawyer', 'DanteStreet', '2023-02-26 04:51:50'),
(10, 'Baneerny AlenMore', 'onlineacct.jpg', 'alen@email.com', 'Footballer', 'Ertburg', '2023-02-26 04:53:05'),
(11, 'Lazarus Bould', 'trusted.png', 'laz@yummail.com', 'teacher', 'tilo', '2023-02-26 04:55:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

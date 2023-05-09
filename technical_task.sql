-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2023 at 10:20 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart_data`
--

DROP TABLE IF EXISTS `chart_data`;
CREATE TABLE IF NOT EXISTS `chart_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `stox` int NOT NULL,
  `quantity` int NOT NULL,
  `avg_price` double DEFAULT NULL,
  `Exchange` varchar(5) NOT NULL,
  `transaction_date` date NOT NULL,
  `year` varchar(10) NOT NULL,
  `month` varchar(50) NOT NULL,
  `profit` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_data`
--

INSERT INTO `chart_data` (`id`, `stox`, `quantity`, `avg_price`, `Exchange`, `transaction_date`, `year`, `month`, `profit`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 1000.55, '', '2023-05-03', '2017', 'January', '50000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(2, 0, 0, NULL, '', '0000-00-00', '2017', 'February', '45000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(3, 0, 0, NULL, '', '0000-00-00', '2017', 'March', '60000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(4, 0, 0, NULL, '', '0000-00-00', '2017', 'April', '52000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(5, 0, 0, NULL, '', '0000-00-00', '2017', 'May', '67000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(6, 0, 0, NULL, '', '0000-00-00', '2017', 'June', '74000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(7, 0, 0, NULL, '', '0000-00-00', '2017', 'July', '71000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(8, 0, 0, NULL, '', '0000-00-00', '2017', 'August', '76000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(9, 0, 0, NULL, '', '0000-00-00', '2017', 'September', '80000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(10, 0, 0, NULL, '', '0000-00-00', '2017', 'October', '86000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(11, 0, 0, NULL, '', '0000-00-00', '2017', 'November', '88000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(12, 0, 0, NULL, '', '0000-00-00', '2017', 'December', '76000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(13, 0, 0, NULL, '', '0000-00-00', '2018', 'January', '92000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(14, 0, 0, NULL, '', '0000-00-00', '2018', 'February', '96000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(15, 0, 0, NULL, '', '0000-00-00', '2018', 'March', '105000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(16, 0, 0, NULL, '', '0000-00-00', '2018', 'April', '112000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(17, 0, 0, NULL, '', '0000-00-00', '2018', 'May', '120000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(18, 0, 0, NULL, '', '0000-00-00', '2018', 'June', '128000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(19, 0, 0, NULL, '', '0000-00-00', '2018', 'July', '116000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(20, 0, 0, NULL, '', '0000-00-00', '2018', 'August', '112000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(21, 0, 0, NULL, '', '0000-00-00', '2018', 'September', '129000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(22, 0, 0, NULL, '', '0000-00-00', '2018', 'October', '139000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(23, 0, 0, NULL, '', '0000-00-00', '2018', 'November', '140000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(24, 0, 0, NULL, '', '0000-00-00', '2018', 'December', '146000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(25, 0, 0, NULL, '', '0000-00-00', '2019', 'January', '151000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(26, 0, 0, NULL, '', '0000-00-00', '2019', 'February', '146000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(27, 0, 0, NULL, '', '0000-00-00', '2019', 'March', '160000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(28, 0, 0, NULL, '', '0000-00-00', '2019', 'April', '164000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(29, 0, 0, NULL, '', '0000-00-00', '2019', 'May', '185000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(30, 0, 0, NULL, '', '0000-00-00', '2019', 'June', '176000', '2023-05-06 10:37:18', '2023-05-06 10:37:18'),
(31, 0, 0, 1000.5, '', '0000-00-00', '', '', '', '2023-05-06 10:52:06', '2023-05-06 10:52:06');

-- --------------------------------------------------------

--
-- Table structure for table `exchanges`
--

DROP TABLE IF EXISTS `exchanges`;
CREATE TABLE IF NOT EXISTS `exchanges` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchanges`
--

INSERT INTO `exchanges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'BSE', '2023-05-08 01:56:33', '2023-05-08 01:56:33'),
(2, 'NSE', '2023-05-08 01:56:33', '2023-05-08 01:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `stoxs`
--

DROP TABLE IF EXISTS `stoxs`;
CREATE TABLE IF NOT EXISTS `stoxs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stoxs`
--

INSERT INTO `stoxs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TCS', '2023-05-06 05:04:54', '2023-05-06 05:04:54'),
(2, 'INFY', '2023-05-06 05:04:54', '2023-05-06 05:04:54'),
(3, 'COGNI', '2023-05-06 05:05:42', '2023-05-06 05:05:42'),
(4, 'CAPITA', '2023-05-06 05:05:42', '2023-05-06 05:05:42'),
(5, 'REL', '2023-05-06 05:05:42', '2023-05-06 05:05:42'),
(6, 'ADANI', '2023-05-06 05:05:42', '2023-05-06 05:05:42'),
(7, 'TECHM', '2023-05-06 05:05:42', '2023-05-06 05:05:42'),
(8, 'icici', '2023-05-09 17:30:07', '2023-05-09 17:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `stox_id` int NOT NULL,
  `exchange_id` int NOT NULL,
  `transaction_type` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `avg_price` float NOT NULL,
  `total_price` float NOT NULL,
  `transaction_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `stox_id`, `exchange_id`, `transaction_type`, `quantity`, `avg_price`, `total_price`, `transaction_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Buy', 10, 100, 1000, '2023-05-09', '2023-05-09 21:25:04', '2023-05-09 21:25:04'),
(2, 1, 1, 2, 'Buy', 10, 110, 1100, '2023-05-09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 1, 'Sell', 10, 90, 900, '2023-05-09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 1, 1, 'Buy', 10, 70, 700, '2023-05-09', '2023-05-09 21:15:03', '2023-05-09 21:15:03'),
(5, 1, 1, 1, 'Sell', 10, 100, 1000, '2023-05-09', '2023-05-09 21:17:50', '2023-05-09 21:17:50'),
(6, 1, 2, 1, 'Buy', 50, 100, 5000, '2023-05-09', '2023-05-09 21:18:55', '2023-05-09 21:18:55'),
(7, 1, 2, 1, 'Sell', 10, 110, 1100, '2023-05-09', '2023-05-09 22:12:27', '2023-05-09 22:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `PostingDate`) VALUES
(1, 'shahrukh', 'shaikh', 'meet.shahrukh10@gmail.com', '123456', '2023-05-07 08:33:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

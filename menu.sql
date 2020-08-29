-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 12:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internsala`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `code` varchar(30) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `restaurant` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`code`, `Image`, `restaurant`, `name`, `type`) VALUES
('poha', 'poha.jpg', 'Ram Restaurant ', 'Poha', 'Veg'),
('rice', '2.jpg', 'Maharaja', 'Paneer Role', 'Veg'),
('Chicken Curry', 'cc.jpg', 'The Dairy Godmother ', 'Chicken Curry', 'Non Veg'),
('Dosa', '5.jpg', 'South Kitchen', 'Dosa', 'Veg'),
('Roti', 'roti.jpg', 'Mayank Kitchen', 'Roti', 'Veg'),
('Rice', 'rice.jpg', 'South Kitchen', 'Rice', 'Non Veg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

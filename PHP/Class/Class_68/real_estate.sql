-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 01:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `real_estate`
--

CREATE TABLE `real_estate` (
  `id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `Note` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `real_estate`
--

INSERT INTO `real_estate` (`id`, `address`, `city`, `state`, `zip`, `price`, `picture`, `Note`) VALUES
(3, '450 W 42nd St', 'New York', 'NY', '10036', '3775000.00', 'images/1.jpg', 'More details about the home...'),
(4, '535 W 23rd St', 'New York', 'NY', '10011', '2000900.00', 'images/2.jpg', 'More details about the home...'),
(5, '800 Park Ave', 'Fort Lee', 'NJ', '07024', '1600900.00', 'images/3.jpg', 'More details about the home...'),
(6, '1013A Time Square Blvd', 'Lakewood', 'NJ', '08701', '755000.00', 'images/4.jpg', 'More details about the home...'),
(7, '5 Orchard St', 'Monsey', 'NY', '10952', '2005000.00', 'images/5.jpg', 'Landmrak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `real_estate`
--
ALTER TABLE `real_estate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `real_estate`
--
ALTER TABLE `real_estate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 11, 2017 at 05:46 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.1.8-2+ubuntu17.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL,
  `filetype` varchar(50) NOT NULL,
  `filesize` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `filetype`, `filesize`, `width`, `height`, `tags`) VALUES
(1, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(2, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(3, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(4, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(5, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(6, 'kobe.jpeg', 'image/jpeg', 36345, 331, 512, 'basketball'),
(7, 'DonMoen_WithAThankfulHeart.jpg', 'image/jpeg', 37955, 402, 398, 'basketball'),
(8, 'Chrysanthemum.jpg', 'image/jpeg', 879394, 1024, 768, 'basketball'),
(9, 'curry.jpeg', 'image/jpeg', 13803, 197, 256, 'basketball'),
(10, 'westbrook.jpeg', 'image/jpeg', 12713, 168, 299, 'basketball'),
(11, 'curry.jpeg', 'image/jpeg', 13803, 197, 256, 'basketball'),
(12, 'nba-logo.jpg', 'image/jpeg', 23263, 500, 487, 'nba live\r\n			');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 18, 2021 at 01:15 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodbank`
--

CREATE TABLE `foodbank` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `item_image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `item_location` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `datetime` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foodbank`
--

INSERT INTO `foodbank` (`item_id`, `item_name`, `item_quantity`, `item_image`, `item_location`, `datetime`) VALUES
(2, 'Kicap Jalen', 8, NULL, 'Blok Z, UMP', '07:52am 10/08/2021'),
(3, 'Munchies Oat', 20, NULL, 'Blok WDK, UMP', '06:11am 10/08/2021'),
(4, 'Adabi Kicap Goreng', 12, NULL, 'Blok Z, UMP', '07:52am 12/08/2021'),
(5, 'Meggi Kari', 15, NULL, 'Blok WDK, UMP', '06:11am 13/08/2021'),
(6, 'Ayam Brand Sardine', 15, NULL, 'Blok Z, UMP', '07:52am 13/08/2021'),
(7, 'Jacob Cream Cracker 20g', 40, NULL, 'Blok WDK, UMP', '06:11am 13/08/2021'),
(8, 'Munchies Lexus Salted Egg 8x Sachets', 23, NULL, 'Blok Z, UMP', '07:52am 15/08/2021'),
(9, 'Meggi Kari', 15, NULL, 'Blok WDK, UMP', '06:11am 16/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `foodbank_item_id` int(11) DEFAULT NULL,
  `foodbank_user_id` int(11) DEFAULT NULL,
  `datetime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `foodbank_item_id`, `foodbank_user_id`, `datetime`) VALUES
(1, 2, 1, '07:46am 10/08/2021'),
(2, 2, 1, '07:51am 10/08/2021'),
(3, 2, 1, '07:52am 10/08/2021'),
(4, 2, 1, '07:52am 10/08/2021'),
(5, 1, 1, '07:59am 10/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `card_id` varchar(15) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`user_id`, `username`, `card_id`, `full_name`, `password`, `role`) VALUES
(1, 'adaman', 'cb18189', 'adam aiman zulkornain', 'c05771e61ad36d14eeb66cb6d00c2ebc', 0),
(2, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodbank`
--
ALTER TABLE `foodbank`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodbank`
--
ALTER TABLE `foodbank`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

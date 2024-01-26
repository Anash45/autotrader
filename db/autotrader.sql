-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 01:09 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autotrader`
--
CREATE DATABASE IF NOT EXISTS `autotrader` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `autotrader`;

-- --------------------------------------------------------

--
-- Table structure for table `autos`
--

CREATE TABLE `autos` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `car_make` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `car_model` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `year` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `car_type` enum('New','Used') COLLATE utf8mb4_general_ci NOT NULL,
  `car_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autos`
--

INSERT INTO `autos` (`id`, `user_id`, `car_make`, `car_model`, `year`, `price`, `car_type`, `car_image`) VALUES
(1, 1, 'Toyota', 'Corolla', 2022, '7500.00', 'New', 'uploads/suv.jpg'),
(2, 1, 'Suzuki', 'Cultus', 2015, '5000.00', 'Used', 'uploads/4.jpg'),
(3, 3, 'Toyota', 'Camry', 2024, '15000.00', 'New', 'uploads/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `phone`, `password`, `createdAt`) VALUES
(1, 'Test User 1', 'abc@gmail.com', '33994040353', '$2y$10$iphv4YEKitjxvkFZQVQzye.WFQHPRG019zSxHNTokmYjPRPJvXal6', '2024-01-26 10:58:08'),
(2, 'Test User 2', 'asdf@gmail.com', '33994040353', '$2y$10$PTfZS/9NzB.j1goE/rWms.rPQpI24G7NpxJb2lVInmMqXrirquKA.', '2024-01-26 11:01:47'),
(3, 'Test Name', 'abc@xyz.com', '33994040353', '$2y$10$5xGKMlLWduLRJ/3G24QZMuFOV3pWTXLMwqfVZU5zh2K.JFqBkecJi', '2024-01-26 12:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autos`
--
ALTER TABLE `autos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autos`
--
ALTER TABLE `autos`
  ADD CONSTRAINT `autos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `sellers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

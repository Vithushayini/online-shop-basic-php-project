-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2023 at 07:56 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `name` varchar(225) NOT NULL,
  `location` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`name`, `location`) VALUES
('Jeans', 'upload/Jeans.jpg'),
('Phone', 'upload/Phone.jpg'),
('Sofa', 'upload/Sofa.jpg'),
('Tshirt', 'upload/tshirt.jpg'),
('TV', 'upload/TV.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(225) NOT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `description`, `price`) VALUES
('Jeans', 'Men\'s jeans', '2700.00'),
('Phone', 'Apple i phone', '200000.00'),
('Sofa', 'Wooden Living Room Sofa', '40000.00'),
('Tshirt', 'Printed Crop Tshirt', '3500.00'),
('TV', 'Panasonic 32 inch black color tv', '50000.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(225) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `is_sadmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `username`, `phone`, `is_admin`, `is_sadmin`) VALUES
('tharsikan1@gmail.com', '$2y$10$TkbBiGl0p5kTvNEMeqB/QeGHTiWwijCLIfxOUXA0We48WxFHRfOoC', 'Tharsikan1', '0763434342', 1, NULL),
('vithushayini@gmail.com', '$2y$10$/5ZWh/JjiwtEQ8sMQOKZbevLDyyepq6t9s/bpiPtQ.kKmPCjqvZAe', 'vithushayini', '0762354785', NULL, 1);

-- superAdmin  vithushayini@gmail.com   password="vithushayini"
-- Admin tharsikan1@gmail.com    password="Tharsikan1"
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`name`) REFERENCES `images` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

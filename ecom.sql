-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2023 at 07:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `code` text NOT NULL,
  `productName` text NOT NULL,
  `quantity` int NOT NULL,
  `productDescription` text NOT NULL,
  `productPrice` int NOT NULL,
  `productCategory` text NOT NULL,
  `productImage` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `productName`, `quantity`, `productDescription`, `productPrice`, `productCategory`, `productImage`, `createdAt`, `updatedAt`) VALUES
(3, 'gd', 'dghe', 4643, 'sgdfhdf', 3635, 'Table', 'uploads/1696486494_2a9b9d25eb7fe7d8e26e.png', '2023-10-05 14:14:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblecom`
--

CREATE TABLE `tblecom` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblecom`
--

INSERT INTO `tblecom` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Tim Josh Cuasay', 'cuasaytimjosh@gmail.com', '$2y$10$Eu3LnvqWEJY7o4aHFqoBSe6/SqGEkMSWFo.3EvbTrKpOxpKm4X6ay', '2023-10-01 13:37:10'),
(2, 'Althea', 'althea@gmail.com', '$2y$10$hpJLk6fgPb6x0Xq6431aIORTtJAEGvqhLyKselJqmu2bN3hszIRHe', '2023-10-01 15:28:45'),
(3, 'qwerty', 'q@gmail.com', '$2y$10$GkXeNN9gBifbvhpbLl0VN.xMgXNSN1W4zUGP2qz29y9iF0pO6Vjaa', '2023-10-02 06:36:50'),
(4, 'hhh', 'hhh@gmail.com', '$2y$10$Ey4ZwC0TlYcI50PSMNK/9uiem2lNnxPnBVfFrX3/pb/8IumwGFqJa', '2023-10-03 04:19:10'),
(5, 'qwertyu', 'qwertyu@gmail.com', '$2y$10$G7cC7DFxS5FuSjD6i5el2eC1WmN8XMXRcD8KwRFExQLD0u4mT8NeC', '2023-10-03 05:42:22'),
(6, 'Thea', 'thea@gmail.com', '$2y$10$RX9rygXg3sYC4aHrPh.1hu.7ZZjdRGHegq8wTt.jms7eSWgGdjClS', '2023-10-03 14:01:58'),
(7, 'Albeur', 'gh@gmail.com', '$2y$10$xVLpAanAgV1PN9VDLeAOEu5UAV2cj/Iar6j5awbcTLCFSlufjwSWi', '2023-10-04 09:00:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblecom`
--
ALTER TABLE `tblecom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblecom`
--
ALTER TABLE `tblecom`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

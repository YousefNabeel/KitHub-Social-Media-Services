-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2025 at 02:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--


CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 2),
(2, 1, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `message`) VALUES
(1, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(2, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(3, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(4, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(5, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(6, 'youseffnabeell@gmail.com', 'ssssssssssssss'),
(8, 'ggggggggg@fffffffff', 'rrrrrrrrrrrrrrrr'),
(9, '0770275974@gg.aa', 'yazan ');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`) VALUES
(1, 'Mini Mic Pro\r\n', 'img/mic.webp', 'A compact wireless microphone that delivers clear sound with noise reduction, easy to use with no complex setup, perfect for videos, live streaming, and online meetings.\r\n', 25),
(2, 'Camera Tripod\r\n', 'img/Tripod.jpg', 'A sturdy camera tripod that offers excellent stability for photos and videos. Features adjustable height, lightweight design, and easy portability, making it perfect for both indoor and outdoor shooting.\r\n', 28),
(3, 'Studio Lights Kit\r\n', 'img/lights.jpg', 'A complete studio lighting kit that provides perfect illumination for photos and videos. Easy to set up with adjustable brightness levels, ideal for content creators and professional photography..\r\n', 20),
(4, 'Background Screen\r\n', 'img/Background Screen.webp', 'A high-quality background screen for photography that gives your videos and photos a professional look. Easy to fold and carry, available in multiple colors and materials to suit studio or home use.\r\n', 26),
(5, 'Headphones\r\n', 'img/Headphones.jpg', 'Stylish and comfortable headphones delivering clear sound with noise isolation. Perfect for music, gaming, or calls, allowing hours of use without discomfort..\r\n', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'yousef@gmail.php', '8bcf056d785610f37f1f4b0fddc38b7b'),
(2, 'yousef@gmail.html', '7d4cae442eff0e53d97ad8c4378cf6eb'),
(3, 'yousef@gmail.css', 'a244bc2be4245c022748235a46dedf15'),
(4, 'huss@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'yazanayoub242', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product` (`product_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

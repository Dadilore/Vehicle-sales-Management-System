-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 05:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audi`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `prod_id` int(50) NOT NULL,
  `prod_qty` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(26, 6, 29, 1, '2023-04-06 02:50:43'),
(27, 6, 8, 1, '2023-04-06 02:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(7, 'BMW', 'bmw', ' (Bayerische Motoren Werke) is a German luxury automaker that produces a range of vehicles', 0, 0, 'bmw.png', 'bmw', 'bmw', 'bmw', '2023-03-29 15:04:31'),
(8, 'Nissan', 'nissan', 'nissan', 0, 0, '1680102368.png', 'nissan', 'nissan', 'nissan', '2023-03-29 15:06:08'),
(9, 'Toyota', 'toyota', 'Toyota is world-famous as the manufacturer of high-quality, high-value cars, vans and trucks ', 0, 0, '1680102434.jpg', 'toyota', 'toyota', 'toyota', '2023-03-29 15:07:14'),
(11, 'Honda', 'honda', 'Honda is a Japanese multinational corporation that primarily manufactures automobiles, motorcycles, and power equipment', 0, 0, '1680102638.png', 'honda', 'honda', 'honda', '2023-03-29 15:10:38'),
(16, 'Mercedes', 'mercedes', 'german car company', 0, 1, '1680157074.jpg', 'mercedes', 'mercedes', 'mercedes', '2023-03-30 06:17:54'),
(26, 'Tesla', 'tesla', 'Tesla is a US company involved in car manufacturing and energy company, best known for its electric cars', 0, 0, '1680362401.png', 'tesla', 'tesla', 'tesla', '2023-04-01 15:20:01'),
(27, 'Porsche', 'porsche', 'Porsche is a renowned German automobile manufacturer with an emphasis in high-performance luxury sports cars, SUVs and sedans', 0, 0, '1680362469.jpg', 'porsche', 'porsche', 'porsche', '2023-04-01 15:21:09'),
(28, 'Chevrolet', 'chevrolet', 'Chevrolet is an American automobile division of the American manufacturer General Motors (GM)', 0, 0, '1680362548.jpg', 'chevrolet', 'chevrolet', 'chevrolet', '2023-04-01 15:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(191) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(11, 'vehicleorder930134', 6, 'admin', 'admin@gmail.com', '1234', 'admin', 1234, 348200, 'COD', '', 0, NULL, '2023-04-06 02:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 1, 27, 5, 600, '2023-04-05 07:22:32'),
(2, 1, 26, 3, 500, '2023-04-05 07:22:32'),
(3, 1, 21, 6, 10000, '2023-04-05 07:22:32'),
(4, 2, 27, 5, 600, '2023-04-05 07:27:19'),
(5, 2, 26, 3, 500, '2023-04-05 07:27:19'),
(6, 2, 21, 6, 10000, '2023-04-05 07:27:20'),
(7, 3, 8, 3, 3500, '2023-04-05 08:03:25'),
(8, 3, 25, 1, 400, '2023-04-05 08:03:25'),
(9, 4, 23, 1, 1000, '2023-04-05 09:46:38'),
(10, 5, 8, 1, 3500, '2023-04-05 09:47:52'),
(11, 6, 8, 1, 3500, '2023-04-05 09:50:49'),
(12, 7, 24, 4, 200, '2023-04-05 11:25:29'),
(13, 10, 22, 3, 100000, '2023-04-06 01:48:38'),
(14, 10, 27, 3, 600, '2023-04-06 01:48:38'),
(15, 10, 21, 3, 10000, '2023-04-06 01:48:38'),
(16, 10, 23, 3, 1000, '2023-04-06 01:48:38'),
(17, 10, 28, 3, 700, '2023-04-06 01:48:38'),
(18, 10, 25, 3, 400, '2023-04-06 01:48:39'),
(19, 10, 8, 3, 3500, '2023-04-06 01:48:39'),
(20, 10, 29, 3, 800, '2023-04-06 01:48:39'),
(21, 11, 28, 2, 700, '2023-04-06 02:45:12'),
(22, 11, 29, 2, 800, '2023-04-06 02:45:12'),
(23, 11, 25, 3, 400, '2023-04-06 02:45:12'),
(24, 11, 8, 4, 3500, '2023-04-06 02:45:12'),
(25, 11, 22, 3, 100000, '2023-04-06 02:45:12'),
(26, 11, 21, 3, 10000, '2023-04-06 02:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(50) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(50) NOT NULL,
  `selling_price` int(50) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(7, 7, 'BMW X5 M', 'bmw', '  First production year: 2009\r\nEngines: Mild hybrid, Gasoline\r\nBody style: SUV (Sports Utility Vehicle)', '  First production year: 2009\r\nEngines: Mild hybrid, Gasoline\r\nBody style: SUV (Sports Utility Vehicle)  ', 1200, 1000, '1680254387.jpg', 1, 1, 1, 'bmw', 'bmw', ' bmw', '2023-03-31 09:19:47'),
(8, 8, 'Nissan GT-R', 'nissan', '               nissan', '  First production year: 1969\r\nEngines: Gasoline\r\nBody style: Coupé (two-door)               ', 4000, 3500, '1680261333.jpg', -9, 0, 1, 'nissan', 'nissan', ' nissan', '2023-03-31 09:52:37'),
(9, 9, 'toyota crown', 'crown', '  The stylish, coupe-like silhouette is combined with elevated styling that conveys a sense of strength, achieving both fluidity and dynamism', '  The stylish, coupe-like silhouette is combined with elevated styling that conveys a sense of strength, achieving both fluidity and dynamism  ', 1230, 678, '1680264074.jpg', 1, 0, 0, 'crown', 'crown', ' crown', '2023-03-31 11:29:36'),
(21, 7, 'BMW X6', 'bmw', ' bmw X6', ' The creation of BMW X6 was inspired from the automaker’s previous models, the series of BMW 5 and 6. Formally known as E71 in its first generation, the X6 was introduced in the automobile industry as the unique Sports Activity Coupe ', 1000, 10000, '1680362985.jpg', -1, 0, 1, 'bmw x6', 'bmw x6\r\n', ' bmw x6', '2023-04-01 15:29:45'),
(22, 7, 'BMW X3', 'BMW X3', 'bmw x3', 'A sports car packaged as a luxury vehicle? Or is it an executive-level engineering wonder with muscle? No matter how you look at it, the BMW X-3 is a ride that’ll delight all kinds of drivers.', 10000, 100000, '1680363085.jpg', -4, 0, 1, 'bmw x3', 'bmw x3', ' bmw x3', '2023-04-01 15:31:25'),
(23, 7, 'BMW X4', 'BMW X4', 'bmw x4', 'The BMW X4 is a luxury compact SUV first launched in 2014 by BMW, a German automaker. This crossover can run from zero to 62mph in only 5.8 seconds considering its form. The main design came from its predecessor, the BMW X3.', 100, 1000, '1680363162.jpg', -1, 0, 0, 'bmw x4', 'bmw x4', ' bmw x4', '2023-04-01 15:32:42'),
(24, 8, '2024 Nissan GT-R Nismo', '2024 Nissan GT-R Nismo', '2024 Nissan GT-R Nismo', 'Fitted with a new and improved aerodynamic package, the GT-R Nismo managed to keep its drag resistance at the same levels as before, even though it provided increased downforce.', 2000, 200, '1680363311.jpg', 1, 0, 1, 'nissan', 'nissan', ' nissan', '2023-04-01 15:35:11'),
(25, 9, 'Toyota Alphard', 'Toyota Alphard', 'Toyota Alphard', 'Toyota Alphard', 4000, 400, '1680363914.jpg', -5, 0, 0, 'Toyota Alphard', 'Toyota Alphard', ' Toyota Alphard', '2023-04-01 15:45:14'),
(26, 9, 'Toyota aqua', 'Toyota aqua', 'Toyota aqua', 'The Aqua combines a comfortable and roomy interior with a stylish body, and displays exciting acceleration and agility.', 5000, 500, '1680364030.jpg', 3, 0, 1, 'toyota aqua', 'toyota aqua', ' toyota aqua', '2023-04-01 15:47:10'),
(27, 11, 'HONDA HR-V', 'HONDA HR-V', 'HONDA HR-V', 'The second generation of the North-American version of the HR-V was introduced in 2022 as a 2023 model year and surprised its audience with its new approach and increased size.', 6000, 600, '1680364202.jpg', -1, 0, 1, 'honda hr-v', 'honda hr-v', ' honda hr-v', '2023-04-01 15:50:02'),
(28, 11, 'HONDA Accord', 'HONDA Accord', ' HONDA Accord', '  ', 7000, 700, '1680364261.jpg', -3, 0, 1, 'HONDA Accord', 'HONDA Accord', ' HONDA Accord', '2023-04-01 15:51:01'),
(29, 11, 'HONDA Pilot', 'HONDA Pilot', ' honda pilot', ' Honda introduced the seventh generation of its biggest SUV ', 8000, 800, '1680365023.jpg', -3, 0, 1, 'honda pilot', 'honda pilot', ' honda pilot', '2023-04-01 16:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(5, 'user 1', 'user@gmail.com', 'user', 0, 0, '2023-03-28 08:12:57'),
(6, 'admin', 'admin@gmail.com', 'admin', 1, 0, '2023-03-28 08:13:55'),
(9, 'spencer', 'spencer@gmail.com', 'spencer', 0, 0, '2023-03-28 08:29:08'),
(10, 'shelmith', 'shelmith@gmail.com', 'shelmith', 0, 0, '2023-03-28 09:55:39'),
(11, 'saitama', 'saitama@gmail.com', 'saitama', 1, 0, '2023-03-28 13:06:03'),
(13, 'daniel', 'danielmwangemi36@gmail.com', '9090', 0, 0, '2023-04-05 09:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 12:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`) VALUES
(2, 'cat-1', 'critical-diseases'),
(3, 'cat-2', 'normal-diseases'),
(4, 'cat-3', 'askmsal');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `state` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`) VALUES
(2, 'lahore', '0'),
(5, 'karachi', '0'),
(7, 'cat3', '0'),
(8, 'cat2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `name`, `email`, `subject`, `message`) VALUES
(2, 19, 'Angel', 'bscsf16-08@qu.edu.pk', 'testing', 'yoyo testing'),
(3, 20, 'arslan', 'bscsf16-08@qu.edu.pk', 'testing', 'checking'),
(4, 20, 'Arslan', 'bscsf16-08@qu.edu.pk', 'testing', 'check this mail.'),
(5, 21, 'ali', 'makhdoomali98@gmail.com', 'testing again', 'test re baba');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `order_time` datetime NOT NULL,
  `status` enum('pending','processing','completed','cancelled') NOT NULL DEFAULT 'pending',
  `payment_method` enum('cash','stripe','rsa') NOT NULL,
  `payment_key` tinyint(1) NOT NULL DEFAULT 0,
  `report` varchar(2555) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `order_time`, `status`, `payment_method`, `payment_key`, `report`, `result`) VALUES
(74, 23, 4, '2021-01-11 17:31:25', 'processing', 'cash', 0, '../admin/media/reports/imageshepatitus.jpg', '1979762288.pdf'),
(75, 0, 1, '2021-01-11 11:55:45', 'pending', 'cash', 0, '', ''),
(76, 0, 1, '2021-01-11 11:56:03', 'pending', 'cash', 0, '', ''),
(77, 24, 1, '2021-01-11 11:57:13', 'cancelled', 'cash', 0, '', ''),
(78, 0, 1, '2021-01-11 11:57:19', 'pending', 'cash', 0, '', ''),
(80, 0, 1, '2021-01-11 11:59:21', 'pending', 'cash', 0, '', ''),
(81, 25, 4, '2021-01-15 09:01:52', 'pending', 'cash', 0, '\r\n', ''),
(82, 25, 1, '2021-01-15 09:04:50', 'pending', 'stripe', 1, '', ''),
(83, 25, 1, '2021-01-15 09:10:10', 'pending', 'cash', 0, '', ''),
(84, 25, 1, '2021-01-15 09:10:36', 'pending', 'stripe', 1, '', ''),
(85, 25, 1, '2021-01-15 09:11:26', 'pending', 'cash', 0, '', ''),
(86, 25, 1, '2021-01-15 09:11:30', 'pending', 'cash', 0, '', ''),
(87, 25, 1, '2021-01-15 09:11:52', 'pending', 'stripe', 1, '', ''),
(88, 25, 1, '2021-01-15 09:12:39', 'pending', 'stripe', 1, '', ''),
(89, 25, 1, '2021-01-15 09:12:56', 'pending', 'cash', 0, '', ''),
(90, 25, 1, '2021-01-15 09:13:16', 'pending', 'stripe', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(255) NOT NULL,
  `order_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `sugar` varchar(255) NOT NULL,
  `blood_pressure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `order_id`, `name`, `age`, `gender`, `sugar`, `blood_pressure`) VALUES
(2, 54, 'Noelani Gonzales', 57, 'Vitae sunt nesciunt', 'yes', 'yes'),
(4, 56, 'Thomas Ayala', 64, 'Provident ad archit', 'no', 'no'),
(5, 57, 'Tate Bender', 52, 'Voluptatem qui simil', 'yes', 'yes'),
(6, 58, 'Alden Sears', 52, 'Male', 'yes', 'yes'),
(7, 59, 'Chava Scott', 47, 'Male', 'yes', 'yes'),
(8, 60, 'Molly Finch', 71, 'female', 'yes', 'no'),
(9, 0, 'Ayanna Bright', 11, 'female', 'yes', 'yes'),
(10, 0, 'Cynthia Deleon', 20, 'Quia officia consequ', 'yes', 'yes'),
(11, 0, 'Talon Watson', 92, 'Commodo cumque maior', 'no', 'yes'),
(12, 0, 'Sydney Floyd', 44, 'female', 'no', 'yes'),
(13, 0, 'Paul Holcomb', 79, 'shemale', 'yes', 'yes'),
(14, 0, 'Bevis Holder', 21, 'shemale', 'yes', 'no'),
(15, 0, 'Moses Jordan', 96, 'Amet molestias dign', 'no', 'yes'),
(16, 0, 'Mariam Hodges', 17, 'Et ut quis dolor ali', 'no', 'no'),
(17, 0, 'Vaughan Mills', 23, 'Illo quo eos est ill', '', 'no'),
(18, 0, 'Valentine Ferguson', 53, 'female', 'no', 'yes'),
(19, 73, 'Tamekah Pate', 71, 'Maxime et ea volupta', 'yes', 'no'),
(20, 75, 'Callum Hunter', 31, 'Et ea sit harum earu', 'yes', 'yes'),
(21, 76, 'Callum Hunter', 31, 'Et ea sit harum earu', 'yes', 'yes'),
(22, 77, 'Callum Hunter', 31, 'Et ea sit harum earu', 'yes', 'yes'),
(23, 78, 'Callum Hunter', 31, 'Et ea sit harum earu', 'yes', 'yes'),
(24, 79, 'Callum Hunter', 31, 'Et ea sit harum earu', 'yes', 'yes'),
(25, 80, 'sd', 23, 'asd', 'yes', 'yes'),
(26, 81, 'ahmad', 24, 'male', 'yes', 'yes'),
(27, 82, 'makhdoom', 23, 'male', 'no', 'no'),
(28, 83, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(29, 84, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(30, 85, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(31, 86, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(32, 87, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(33, 88, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(34, 89, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes'),
(35, 90, 'Oscar Baldwin', 82, 'Corrupti rerum temp', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `city_id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category_id`, `price`, `city_id`, `image`) VALUES
(1, 'corona_test', 'gives you a proper test report for yourself to get satisfation about your health', 1, 5000, 1, 'test_lab'),
(4, 'cancer', 'every cancer diagnostic process', 2, 13000, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` enum('male','female','third') NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_type` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `age`, `cnic`, `contact`, `address`, `city`, `gender`, `image`, `role_type`) VALUES
(22, 'ibrar', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'ibrar@gmail.com', 23, 'naskank712712', 1235466642, 'aksaksmkas', 'lahore', 'male', '', 'admin'),
(23, 'makhdoom', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'makhdoom@gmail.com', 25, 'njansj72y2112nas', 1235466912, '441, street 22 dha phase 6', 'lahore', 'male', '', 'user'),
(24, 'Sylvia Oneil', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'gumyhili@mailinator.com', 15, 'Dolorem quis volupta', 32, 'Cillum facere nulla ', 'Enim provident aut ', 'male', 'cancer.jpg', 'user'),
(25, 'Ibrar ', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'ibrar1000@gmail.com', 24, 'jbhashu1721271', 1217882726, '237 g3', 'Johar Town', 'male', '../users/images/1610726468892122943695_2638895276400431_8329601759088844276_o.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 09:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kidsgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `productsr`
--

CREATE TABLE `productsr` (
  `id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descriptions` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `price` decimal(65,0) NOT NULL,
  `quantity` int(200) NOT NULL DEFAULT 1,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsr`
--

INSERT INTO `productsr` (`id`, `title`, `descriptions`, `photo`, `price`, `quantity`, `category`) VALUES
(7, 'toys games', 'this the best games for your children', 'uploadimage/images (7).jpg', '3', 6, 'play'),
(8, 'cartoon game', 'the best game for your children', 'uploadimage/images (2).jpg', '7', 5, 'toys'),
(9, 'puzzle game', 'this the best games for mind of your children', 'uploadimage/images (8).jpg', '3', 7, 'puzzle'),
(10, 'simple puzzle', 'this the best games for mind of your children', 'uploadimage/images (8).jpg', '4', 9, 'puzzle'),
(11, 'simple game', 'this the siple games for your children', 'uploadimage/images (12).jpg', '3', 6, 'simple'),
(12, 'funny game', 'this the funny games for your children', 'uploadimage/images (7).jpg', '4', 9, 'funny'),
(13, 'dance game', 'this the dance games for your children', 'uploadimage/images (10).jpg', '9', 9, 'dance'),
(16, 'cartoon games ', 'deffrent games', 'uploadimage/images.png', '12', 9, 'cartoon');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_email`, `user_password`) VALUES
(3, 'nasser', 'n715527766@gmail.com', '$2y$10$vvhSnn5Jtobxqn3Ypn5pj.m9KOYczci1VceKS0n.C/jSWIKfAdVC6'),
(4, 'haitham', 'haitham@gmail.com', '$2y$10$/11rw9By6j7C4yC6OHucE.hu4k3tP1dX3WgaroEkGu7diZ2O2Sj1S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productsr`
--
ALTER TABLE `productsr`
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
-- AUTO_INCREMENT for table `productsr`
--
ALTER TABLE `productsr`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

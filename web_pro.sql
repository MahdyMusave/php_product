-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `mark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `productName`, `categoryId`, `price`, `amount`, `description`, `img`, `tags`, `model`, `mark`) VALUES
(1, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(2, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(3, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(4, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(5, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(6, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(7, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(8, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(9, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(10, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(11, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(12, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(13, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(14, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(15, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(16, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(17, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(18, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(19, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(20, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(21, 'laoto', 2, 13000, 3, 'best latop', NULL, 'black', '2023', 'Asus Rog'),
(22, 'latop', 2, 14000, 2, 'best linux', NULL, 'grey', '2021', 'Dell linux'),
(23, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(24, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(25, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(26, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(27, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(28, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(29, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(30, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(31, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(32, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(33, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(34, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(35, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(36, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(37, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(38, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(39, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(40, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(41, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(42, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(43, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(44, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(45, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(46, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(47, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(48, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(49, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(50, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(51, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(52, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(53, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12'),
(54, 'mobail', 1, 120000, 2, 'best mobail', '', 'blue', '2021', 'samsung A12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `email`, `phone`, `password`) VALUES
(7, 'ali', 'javadi', 'husa12', 'husa12@gmail.com', '09380325329', 'dnmsdm'),
(9, 'ali', 'javadi', 'husa12', 'husa12@gmail.com', '09380325329', ''),
(10, 'ali', 'javadi', 'husa12', 'husa12@gmail.com', '09380325329', 'sjhshjas'),
(12, 'nima', 'nima musave', 'nima12', 'nima@gmail.com', '09483998', ',mds,j'),
(13, 'maryem', 'maryem Musave', 'maryem13', 'maryem@gmail.com', '093820983', 'maryem'),
(14, 'maryemM', 'maryemM', 'maryemM', 'maryemM@gmail.com', '4389794', 'sjdkhskd'),
(15, 'javad', 'javad', 'javad', 'javad@gmail.com', '43784783', 'dkjlks');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

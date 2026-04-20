-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2026 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostfound_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, NULL, NULL),
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `found_items`
--

CREATE TABLE `found_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_found` date DEFAULT NULL,
  `contact` varchar(50) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `location_found` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `found_items`
--

INSERT INTO `found_items` (`id`, `item_name`, `description`, `date_found`, `contact`, `image`, `user_id`, `location_found`) VALUES
(3, 'wallet', 'a black leather wallet', '2027-04-30', '9876543210', 'Screenshot 2026-04-15 120216.png', NULL, 'library'),
(4, 'umbrella', 'black', '2026-02-23', '9876543210', 'Screenshot 2026-04-15 120951.png', NULL, 'ict'),
(6, 'laptop', 'macbook', '2026-04-04', '7305234567', 'Screenshot 2026-04-20 115324.png', NULL, 'cafeteria'),
(7, 'Bottle', 'Milton silver in color', '2026-04-07', '9780569755', 'Screenshot 2026-04-20 121525.png', NULL, 'library'),
(9, 'register', 'A4 register', '2026-04-19', '9934345645', 'Screenshot 2026-04-20 123135.png', NULL, 'ict'),
(10, 'bottle', 'silver', '2026-04-20', '9934342345', 'Screenshot 2026-04-20 125628.png', NULL, 'ict');

-- --------------------------------------------------------

--
-- Table structure for table `lost_items`
--

CREATE TABLE `lost_items` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location_lost` varchar(100) DEFAULT NULL,
  `date_lost` date DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_items`
--

INSERT INTO `lost_items` (`id`, `item_name`, `description`, `location_lost`, `date_lost`, `contact`, `image`) VALUES
(3, 'Mobile Phone', 'Samsung phone', 'Classroom A', '2026-04-13', '9876543212', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `created_at`) VALUES
(9, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-17 07:00:01'),
(10, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 05:41:32'),
(11, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 05:45:20'),
(12, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 06:59:36'),
(13, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 07:02:41'),
(14, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 07:23:33'),
(15, 'Shagun', 'shagun@gmail.com', NULL, '1234', '2026-04-20 08:08:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `found_items`
--
ALTER TABLE `found_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lost_items`
--
ALTER TABLE `lost_items`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `found_items`
--
ALTER TABLE `found_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lost_items`
--
ALTER TABLE `lost_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

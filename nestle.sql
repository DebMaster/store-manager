-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 11:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nestle`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `notes` text NOT NULL,
  `available` enum('unavailable','available') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`id`, `eid`, `sid`, `notes`, `available`, `created`) VALUES
(1, 1, 1, 'test notes', 'available', '2018-11-02 06:54:35'),
(2, 1, 1, 'test', 'unavailable', '2018-11-02 06:56:06'),
(3, 1, 1, 'notes', 'unavailable', '2018-11-02 07:00:20'),
(4, 1, 1, 'notes', 'unavailable', '2018-11-02 07:07:21'),
(5, 1, 1, 'Notes', 'unavailable', '2018-11-02 18:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `competitor_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `observations` text NOT NULL,
  `store` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id`, `product`, `picture`, `competitor_name`, `price`, `observations`, `store`, `created`) VALUES
(1, 'Mazoe', '', 'Delta', 5, 'observation', 1, '2018-11-02 07:29:47'),
(2, 'Mazoe', '', 'Delta', 5, 'observation', 1, '2018-11-02 07:31:11'),
(3, 'Mazoe', '', 'Delta', 5, 'test', 1, '2018-11-02 07:32:46'),
(4, 'Mazoe', '', 'Delta', 5, 'test', 1, '2018-11-02 07:34:03'),
(5, 'Mazoe', '', 'Delta', 5, 'yhhhgb', 1, '2018-11-02 07:36:16'),
(6, 'Mazoe', '', 'Delta', 5, 'test', 1, '2018-11-02 07:36:57'),
(7, 'Mazoe', 'uploads/daisy.png', 'Delta', 5, 'hhhhhhhhhhhhhh', 1, '2018-11-02 07:37:38'),
(8, 'Mazoe', 'uploads/DeOaksbX0AIF69N.jpg', 'Delta', 5, 'notes', 1, '2018-11-02 07:49:27'),
(9, 'Mukakas', 'uploads/250440_152314141505338_3259326_n.jpg', 'Delta', 5, 'hhhhhh', 1, '2018-11-02 18:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `_from` int(11) NOT NULL,
  `_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `_from`, `_to`, `message`, `created`) VALUES
(1, 1, 2, 'Message', '2018-11-02 08:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `numeric_distribution`
--

CREATE TABLE `numeric_distribution` (
  `id` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `score` double NOT NULL,
  `product` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numeric_distribution`
--

INSERT INTO `numeric_distribution` (`id`, `store`, `score`, `product`, `created`) VALUES
(1, 1, 2, 0, '2018-11-03 02:07:16'),
(2, 2, 1, 0, '2018-11-03 02:29:51'),
(3, 1, 2, 0, '2019-01-17 22:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `outlet_check`
--

CREATE TABLE `outlet_check` (
  `id` int(11) NOT NULL,
  `route_plan` int(11) NOT NULL,
  `observations` text NOT NULL,
  `claims` enum('yes','no') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outlet_check`
--

INSERT INTO `outlet_check` (`id`, `route_plan`, `observations`, `claims`, `created`) VALUES
(1, 1, 'Observations', 'no', '2018-11-02 07:19:00'),
(2, 2, 'Obser', 'no', '2018-11-02 18:24:02'),
(3, 2, 'test', 'yes', '2018-11-02 18:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `created`) VALUES
(1, 'Soup Creme', 'Soup Creme', '2018-11-02 15:45:59'),
(2, 'Cremora', 'Cremora', '2018-11-03 02:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `route_planner`
--

CREATE TABLE `route_planner` (
  `id` int(11) NOT NULL,
  `eid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `date_scheduled` date NOT NULL,
  `status` enum('pending','cancelled','visited') NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_planner`
--

INSERT INTO `route_planner` (`id`, `eid`, `sid`, `date_scheduled`, `status`, `created`) VALUES
(1, 1, 1, '2018-11-14', 'visited', '2018-11-02 05:08:42'),
(2, 1, 1, '2018-11-22', 'visited', '2018-11-02 18:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buying_price` double NOT NULL,
  `selling_price` double NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `product_id`, `store_id`, `quantity`, `buying_price`, `selling_price`, `created`) VALUES
(1, 1, 1, 5, 2, 4, '2018-11-02 15:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `address`, `phone`, `email`, `latitude`, `longitude`, `created`) VALUES
(1, 'Pick and Pay', 'Joina City', '0773553310', 'joina@pickandpay.co.zw', '-17.8318161', '31.0452404', '2018-11-02 03:32:11'),
(2, 'Spar', 'First Street', '713410380', 'cdetakesure@gmail.com', '-17.8318161', '31.0452404', '2018-11-03 02:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `created`) VALUES
(1, 'Takesure Savanhu', 'delon@afrodeb.com', '713410380', 'delon', '2018-11-02 02:31:03'),
(2, 'Ambassador Tinashe Mukwada', 'hello@afrodeb.com', '772401344', 'delon', '2018-11-02 08:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numeric_distribution`
--
ALTER TABLE `numeric_distribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet_check`
--
ALTER TABLE `outlet_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_planner`
--
ALTER TABLE `route_planner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
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
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `numeric_distribution`
--
ALTER TABLE `numeric_distribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `outlet_check`
--
ALTER TABLE `outlet_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route_planner`
--
ALTER TABLE `route_planner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

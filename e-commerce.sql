-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 01:11 PM
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
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `traders`
--

CREATE TABLE `traders` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `passport_no` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `total_payment` varchar(100) NOT NULL,
  `advance_payment` varchar(100) NOT NULL,
  `due_payment` varchar(100) NOT NULL,
  `tracking_id` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traders`
--

INSERT INTO `traders` (`id`, `name`, `passport_no`, `contact_no`, `total_payment`, `advance_payment`, `due_payment`, `tracking_id`, `email`, `date`, `user_id`) VALUES
(9, 'Ali', 'AFG34563278', '0322 9876876', '25000', '2000', '23000', 'TR23434', 'ali@gmail.com', '', 0),
(10, 'jawad khan', 'pk3487654', '03469112823', '5000', '4000', '1000', '3445', 'commonemail61@gmail.com', '', 0),
(11, 'Shehzad', 'AF2309876', '03469112823', '12000', '10000', '2000', '8765', 'sh-khantruelancer@gmail.com', '', 0),
(12, 'hussain', 'PK1278237', '034579896797', '7500', '7000', '500', 'TI3434878', 'hussain@gmail.com', '22-04-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(3, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'Ali', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de'),
(14, 'khan', 'khan', '9e95f6d797987b7da0fb293a760fe57e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traders`
--
ALTER TABLE `traders`
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
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

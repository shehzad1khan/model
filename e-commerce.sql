-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 09:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

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
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traders`
--

INSERT INTO `traders` (`id`, `name`, `passport_no`, `contact_no`, `total_payment`, `advance_payment`, `due_payment`, `tracking_id`, `email`) VALUES
(6, 'Shehzad', 'AF2309876', '03469112823', '12000', '10000', '15000', '8765', 'sh-khantruelancer@gmail.com'),
(7, 'hassan ', 'pk3487654', '03469112823', '5000', '2000', '8000', '3445', 'commonemail61@gmail.com'),
(8, 'jawad khan', 'pk3487654', '03469112823', '5000', '2000', '8000', '3445', 'commonemail61@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traders`
--
ALTER TABLE `traders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

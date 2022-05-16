-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 07:23 PM
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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `file` varchar(200) DEFAULT NULL,
  `trader_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file`, `trader_id`) VALUES
(23, 'Babar-Azam-new_akhbar.jpg', 54),
(24, '5.webp', 55),
(25, 'Array', 56),
(26, 'Array', 57),
(27, 'Array', 58),
(28, 'Array', 59);

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
  `image` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traders`
--

INSERT INTO `traders` (`id`, `name`, `passport_no`, `contact_no`, `total_payment`, `advance_payment`, `due_payment`, `tracking_id`, `email`, `image`, `date`, `user_id`) VALUES
(10, 'jawad ', 'pk3487654', '03469112823', '5000', '4000', '1000', '3445', 'commonemail61@gmail.com', '', '13-04-2022', 0),
(11, 'Shehzad', 'AF2309876', '03469112823', '12000', '10000', '2000', '8765', 'sh-khantruelancer@gmail.com', '', '15-04-2022', 0),
(12, 'Hussain Badshah', 'PK1278237', '034579896797', '7500', '7000', '500', 'TI3434878', 'hussain@gmail.com', '', '02-05-2022', 0),
(14, 'Asad khan', 'pk3487654', '03469112823', '5000', '2000', '3000', '3445', 'commonemail61@gmail.com', '', '17-04-2022', 0),
(15, 'Shams Ur ', 'AF2309876', '03075709661', '12000', '10000', '2000', '8765', 'sh-khantruelancer@gmail.com', '', '20-04-2022', 0),
(18, 'hassan ', 'pk3487654', '03075709661', '1000', '500', '500', '12324', 'commonemail61@gmail.com', '', '25-04-2022', 0),
(20, 'Shehzad', 'PK455762388', '03061091657', '124999', '12445', '112554', 'ER098777', 'shehzad.kpk@gmail.com', 'olivier-bergeron-sDwhXKJijyE-unsplash.jpg', '25-04-2022', 14),
(21, 'khanzada', 'AFG436789', '0302 3134567', '30000', '20000', '10000', 'TE43488', 'khanzada@gmail.com', '', '08-05-2022', 14),
(31, 'Asad khan', 'AF2309876', '0302 3134567', '5000', '2000', '3000', 'ER098777', 'shehzad.kpk@gmail.com', 'Screenshot (137).png', '11-05-2022', 13),
(37, 'hassan ', 'pk3487654', '03075709661', '12000', '10000', '2000', 'TE43488', 'sh-khantruelancer@gmail.com', '6.webp', '12-05-2022', 3),
(51, 'NOOR', '34324234', '3432423', '234', '12', '222', '7486328764', 'norr@gmail.com', '4.webp', '12-05-2022', 3),
(52, 'amir g', '3243242', '3432342', '2121', '12', '2109', '213213213', 'ad@gmail.com', 'Babar-Azam-new_akhbar.jpg', '12-05-2022', 3),
(53, 'some name', 'wr4332', '3453443', '342', '3', '339', '433242', 'amin@gmail.com', 'Babar-Azam-new_akhbar.jpg', '12-05-2022', 3),
(54, 'shehzad', '34324324', '43242', '433', '3', '430', '343242', 'sh@gamil.com', 'Babar-Azam-new_akhbar.jpg', '12-05-2022', 3),
(59, '', '', '', '', '', '', '', '', 'Array', '12-05-2022', 3);

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
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_ibfk_1` (`trader_id`);

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

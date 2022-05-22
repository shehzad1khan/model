-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:54 AM
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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Angola'),
(5, 'Argentina'),
(6, 'Armenia'),
(7, 'Australia'),
(8, 'Austria'),
(9, 'Bahrain'),
(10, 'Bangladesh'),
(11, 'Belarus'),
(12, 'Belgium'),
(13, 'Bhutan'),
(14, 'Bolivia'),
(15, 'Bosnia & Herzegovina'),
(16, 'Botswana'),
(17, 'Brazil'),
(18, 'Bulgaria'),
(19, 'Cambodia'),
(20, 'Cameroon'),
(21, 'Canada'),
(22, 'Chile'),
(23, 'China'),
(24, 'Colombia'),
(25, 'Costa Rica'),
(26, 'Croatia'),
(27, 'Cuba'),
(28, 'Cyprus'),
(29, 'Czech Republic'),
(30, 'Denmark'),
(31, 'Ecuador'),
(32, 'Egypt'),
(33, 'Estonia'),
(34, 'Ethiopia'),
(35, 'Fiji'),
(36, 'Finland'),
(37, 'France'),
(38, 'Germany'),
(39, 'Ghana'),
(40, 'Greece'),
(41, 'Greenland'),
(42, 'Guinea'),
(43, 'Guyana'),
(44, 'Haiti'),
(45, 'Honduras'),
(46, 'Hong Kong'),
(47, 'Hungary'),
(48, 'Iceland'),
(49, 'India'),
(50, 'Indonesia'),
(51, 'Iran'),
(52, 'Iraq'),
(53, 'Ireland'),
(54, 'Israel'),
(55, 'Italy'),
(56, 'Japan'),
(57, 'Jersey'),
(58, 'Jordan'),
(59, 'Kazakhstan'),
(60, 'Kenya'),
(61, 'Kuwait'),
(62, 'Kyrgyzstan'),
(63, 'Lebanon'),
(64, 'Liberia'),
(65, 'Libya'),
(66, 'Lithuania'),
(67, 'Luxembourg'),
(68, 'Macedonia'),
(69, 'Madagascar'),
(70, 'Malaysia'),
(71, 'Maldives'),
(72, 'Mali'),
(73, 'Mauritius'),
(74, 'Mexico'),
(75, 'Monaco'),
(76, 'Mongolia'),
(77, 'Morocco'),
(78, 'Namibia'),
(79, 'Nepal'),
(80, 'Netherlands'),
(81, 'New Zealand'),
(82, 'Nigeria'),
(83, 'North Korea'),
(84, 'Norway'),
(85, 'Oman'),
(86, 'Pakistan'),
(87, 'Panama'),
(88, 'Papua New Guinea'),
(89, 'Paraguay'),
(90, 'Peru'),
(91, 'Philippines'),
(92, 'Poland'),
(93, 'Portugal'),
(94, 'Qatar'),
(95, 'Romania'),
(96, 'Russia'),
(97, 'Rwanda'),
(98, 'Saudi Arabia'),
(99, 'Serbia'),
(100, 'Singapore'),
(101, 'Slovakia'),
(102, 'Slovenia'),
(103, 'South Africa'),
(104, 'South Korea'),
(105, 'Spain'),
(106, 'Sri Lanka'),
(107, 'Sudan'),
(108, 'Sweden'),
(109, 'Switzerland'),
(110, 'Syria'),
(111, 'Taiwan'),
(112, 'Tajikistan'),
(113, 'Tanzania'),
(114, 'Thailand'),
(115, 'Tunisia'),
(116, 'Turkey'),
(117, 'Turkmenistan'),
(118, 'Uganda'),
(119, 'Ukraine'),
(120, 'United Arab Emirates'),
(121, 'United Kingdom'),
(122, 'United States'),
(123, 'Uruguay'),
(124, 'Uzbekistan'),
(125, 'Venezuela'),
(126, 'Vietnam'),
(127, 'Yemen'),
(128, 'Zambia'),
(129, 'Zimbabwe');

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
(28, 'Array', 59),
(29, 'federico-bottos-TuAtSs8peoM-unsplash.jpg', 60),
(30, '', 61),
(31, '1000_F_359363536_ja8bM8diUMlWXOiSSuPGH7HMB7WHNycw.jpg', 62),
(32, '', 63),
(33, '1000_F_248812956_JHCAUaC7QxDRkDoTBmm7MrR6cWiKhlVq.jpg', 64),
(34, 'Good_Food_Display_-_NCI_Visuals_Online.jpg', 66),
(35, '', 67),
(36, '2nd-try-transparent-screen.jpg', 68);

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
(10, 'jawad ', 'pk3487654', '03469112823', '5000', '4000', '1000', '3445', 'commonemail61@gmail.com', '', '2022-04-13', 0),
(11, 'Shehzad', 'AF2309876', '03469112823', '12000', '10000', '2000', '8765', 'sh-khantruelancer@gmail.com', '', '2022-04-15', 0),
(12, 'Hussain Badshah', 'PK1278237', '034579896797', '7500', '7000', '500', 'TI3434878', 'hussain@gmail.com', '', '2022-05-02', 0),
(14, 'Asad khan', 'pk3487654', '03469112823', '5000', '2000', '3000', '3445', 'commonemail61@gmail.com', '', '2022-05-10', 0),
(15, 'Shams Ur Rehman', 'AF2309876', '03075709661', '12000', '10000', '2000', '8765', 'sh-khantruelancer@gmail.com', '', '2022-05-16', 0),
(18, 'hassan ', 'pk3487654', '03075709661', '1000', '500', '500', '12324', 'commonemail61@gmail.com', '', '2022-05-13', 0),
(20, 'Shehzad', 'PK455762388', '03061091657', '124999', '12445', '112554', 'ER098777', 'shehzad.kpk@gmail.com', 'olivier-bergeron-sDwhXKJijyE-unsplash.jpg', '2022-05-17', 14),
(21, 'khanzada', 'AFG436789', '0302 3134567', '30000', '20000', '10000', 'TE43488', 'khanzada@gmail.com', '', '2022-05-08', 14),
(31, 'Asad khan', 'AF2309876', '0302 3134567', '5000', '2000', '3000', 'ER098777', 'shehzad.kpk@gmail.com', 'Screenshot (137).png', '2021-03-10', 13),
(52, 'amir g', '3243242', '3432342', '2121', '12', '2109', '213213213', 'ad@gmail.com', 'Babar-Azam-new_akhbar.jpg', '2021-12-05', 3),
(53, 'some name', 'wr4332', '3453443', '342', '3', '339', '433242', 'amin@gmail.com', 'Babar-Azam-new_akhbar.jpg', '2022-05-17', 3),
(62, 'Habib Nawaz', 'ER2548725', '0302 81254789', '25000', '5000', '20000', 'TR2548725', 'habib@gmail.com', '1000_F_359363536_ja8bM8diUMlWXOiSSuPGH7HMB7WHNycw.jpg', '2021-05-14', 3),
(64, 'Ishfaq khan', 'DS3435234', '03038148256', '23000', '2022', '20978', 'SH124181568', 'ishfaq@gmial.com', '1000_F_134877501_hLgzK6kMnRvZZpvmhNTf7LrQn0gKHFrp.jpg', '2022-05-11', 3),
(66, 'Mahaz', 'MA78613425', '03433497654', '23000', '10000', '13000', 'Ma238548989', 'mahaz@gmail.com', 'Good_Food_Display_-_NCI_Visuals_Online.jpg', '2022-05-17', 3),
(67, '', '', '', '', '', '', '', '', '', '2022-05-14', 3),
(68, 'Hamza abbassi', 'HA12323453', '03062659487', '64000', '40000', '24000', 'HA3128975', 'hamza@gmail.com', '2nd-try-transparent-screen.jpg', '2022-05-17', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `image`) VALUES
(3, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', ''),
(13, 'Ali', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de', ''),
(14, 'khan', 'khan', '9e95f6d797987b7da0fb293a760fe57e', ''),
(15, 'Shehzad khan', 'shehzad', '4054b2941ba6f1168e8ce90e072b0e8d', 't4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

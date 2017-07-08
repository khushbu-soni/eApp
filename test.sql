-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2016 at 04:28 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type_of_article` varchar(255) DEFAULT NULL,
  `article_img` varchar(255) DEFAULT NULL,
  `article_audio` varchar(255) DEFAULT NULL,
  `article_video` varchar(255) DEFAULT NULL,
  `article_img_id` varchar(255) DEFAULT NULL,
  `article_audio_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `name`, `title`, `description`, `type_of_article`, `article_img`, `article_audio`, `article_video`, `article_img_id`, `article_audio_id`) VALUES
(43, 2, 'Test', 'test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image', '160620143389.jpg', 'AUD-20150621-WA0024.m4a', 'https://www.youtube.com/watch?v=ttIKsnxPrMY', NULL, NULL),
(44, 3, 'Holly', 'G;kl;', 'test image', 'image', '160620143389.jpg', 'test', '', NULL, NULL),
(45, 4, 'audio', 'audio test', 'test audio', 'audio', '', 'AUD-20150621-WA0030.mp3', '', NULL, NULL),
(46, 2, '', '', 'test video', 'video', '', '', 'https://www.youtube.com/watch?v=T94PHkuydcw', NULL, NULL),
(47, 2, '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, 'Supports'),
(3, 'Hollywood/Bollywood'),
(4, 'Crime'),
(5, 'Business'),
(6, 'Gadget'),
(7, 'Health'),
(9, 'Fashion'),
(10, 'Election');

-- --------------------------------------------------------

--
-- Table structure for table `category_old`
--

CREATE TABLE `category_old` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `rtype` int(11) DEFAULT NULL,
  `rcategory` int(11) DEFAULT NULL,
  `location` varchar(225) DEFAULT NULL,
  `size` varchar(225) DEFAULT NULL,
  `room_price` varchar(225) DEFAULT NULL,
  `maintenance` varchar(225) DEFAULT NULL,
  `description` varchar(34000) DEFAULT NULL,
  `promo_code` varchar(225) DEFAULT NULL,
  `promo_price` int(225) DEFAULT NULL,
  `available_date` date NOT NULL,
  `images_path` varchar(225) NOT NULL,
  `view` varchar(225) DEFAULT NULL,
  `capacity` int(225) NOT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `is_reserve` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`id`, `name`, `rtype`, `rcategory`, `location`, `size`, `room_price`, `maintenance`, `description`, `promo_code`, `promo_price`, `available_date`, `images_path`, `view`, `capacity`, `is_delete`, `is_reserve`) VALUES
(1, 'single deluxe', 1, 1, 'kampala', '-', '120', 'bed sheets ', 'All rooms are fully equipped with king size bed and individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-10-31', 'es.jpg', 'With 233 rooms comprising of 5 suites, 103 deluxe rooms and 117 twin bed rooms and 8 Apartments, offering splendid views', 1, 0, 1),
(2, 'Executive Suite', 2, 2, 'kampala', '1 double and 1 sofa bed', '300', 'cleaning', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', 'hvshsdvbh80', 582, '2015-10-31', '2936553_37_z.jpg', 'With 233 rooms comprising of 5 suites, 103 deluxe rooms and 117 twin bed rooms and 8 Apartments, offering splendid views', 2, 0, 1),
(5, 'Triple room', 2, 1, 'kampala', '1 double and 1 sofa bed', '120', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', 'HGGVB79', 45, '2015-10-31', '.', 'With 233 rooms comprising of 5 suites, 103 deluxe rooms and 117 twin bed rooms and 8 Apartments, offering splendid views', 2, 0, NULL),
(6, 'Double room', 1, 1, 'kampala', '1 double bed', '120', 'jbjd', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet acc', 'qwwq', 0, '2015-10-31', '.', 'With 233 rooms comprising of 5 suites, 103 deluxe rooms and 117 twin bed rooms and 8 Apartments, offering splendid views', 1, 0, NULL),
(7, 'Three Rooms', 7, 8, 'kampala', '1 double and 1 sofa bed', '600', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', 'HRDFF', 0, '2015-10-31', 'rollawayextarbed1.jpg', 'With 233 rooms comprising of 5 suites, 103 deluxe rooms and 117 twin bed rooms and 8 Apartments, offering splendid views', 3, 1, NULL),
(8, 'two bedroomed apartment ', 6, 8, 'kampala', '-', '25000', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet acc', '', 0, '2015-10-31', 'kidbed2.jpg', 'one bed room and one living room, its self contained with all kitchen equipment.', 2, 1, NULL),
(9, 'Two bedroomed apartment ', 2, 3, 'kampala', '-', '7582', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', 'HRDFE', 0, '2015-10-31', '2936553_37_z.jpg', 'sea side', 2, 1, NULL),
(10, 'Family room ', 8, 7, 'kampala', '-', '5698', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-01', '2936553_49_z.jpg', 'Fourth side', 3, 0, NULL),
(11, 'Presidential Suite', 2, 2, 'kampala', '-', '300', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet acc', '', 0, '2015-11-02', '2936553_49_z.jpg', 'one bed room and one living room, its self contained with all kitchen equipment.', 3, 0, NULL),
(12, 'twin Room', 6, 3, 'kampla', '-', '256', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-02', 'et.jpg', 'sea side', 2, 0, NULL),
(13, 'Deluxe TripleRoom', 8, 7, 'kampala', '-', '300', 'nothing', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-10-31', '2936553_49_z.jpg', 'one bed room and one living room, its self contained with all kitchen equipment.', 3, 0, NULL),
(14, 'Apartment, 3 Bedroom', 7, 8, 'kampala', '-', '2334', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-02', 'ApartmentsMasterRoom.jpg', 'one', 3, 1, NULL),
(15, 'Apartments, 1 Bedroom', 3, 8, 'kampala', '-', '56756', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-02', 'thum2.jpg', 'one', 1, 1, NULL),
(16, 'Ordinary family room', 8, 7, 'kampala', '-', '600', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-02', 'SAM_0176.jpg', 'one', 8, 0, NULL),
(17, 'Single Deluxe 1', 1, 2, 'kampala', '-', '600', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-01', 'ed.jpg', 'sea side', 1, 0, NULL),
(18, 'Deluxe doublecvxc', 2, 2, 'kampala', '-', '124', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-03', '.', 'sea side', 2, 0, NULL),
(19, 'Deluxe Triple', 7, 3, 'kampala', '-', '256', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-01', '2936553_49_z.jpg', 'sea side', 3, 0, NULL),
(20, 'One bedroom Apartment', 3, 8, 'kampala', '-', '256', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-01', '.', 'sea side', 1, 0, NULL),
(21, 'Two bedroom Apartment', 6, 8, 'kampala', '-', '257', 'bedsheet', 'All rooms are fully equipped with an individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-02', '.', 'sea side', 2, 0, NULL),
(22, 'Three bedroom Apartment', 7, 8, 'kampala', '-', '600', 'bedsheet', 'All rooms are fully equipped with king size bed and individually controlled air condition system, attached with a full private bathroom, a balcony overseeing the spectacular view, satellite television, fridge, wire and wireless internet access.', '', 0, '2015-11-03', '.', 'sea side', 3, 0, NULL),
(23, 'khkj', 1, 1, 'hkjh', 'kjhkj', 'mn,mn', ',mn,', 'kjhkj', '', 0, '0000-00-00', '20150613_183843.jpg', 'hkjh', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(225) NOT NULL,
  `fname` varchar(225) DEFAULT NULL,
  `lname` varchar(225) DEFAULT NULL,
  `username` varchar(225) NOT NULL,
  `logincode` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `username`, `logincode`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@hogoworks.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `place` int(255) NOT NULL,
  `work_as` varchar(255) NOT NULL,
  `p` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `education` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `login_via_google` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `firstname`, `lastname`, `university`, `email`, `mobile_no`, `place`, `work_as`, `p`, `is_active`, `education`, `username`, `gender`, `login_via_google`) VALUES
(1, 'admin', '', '', '', '', '', 0, '', '', 0, '', 'admin', '', 0),
(2, '202cb962ac59075b964b07152d234b70', 'test', 'test', 'MCA', 'soni@hogo.com', '845875452222558787', 0, 'hogo', '123', 1, '', '', '', 0),
(3, 'b937e38198dc3758d228815e0422f6be', 'samiurrahman', 'shaikh', 'Amravati', 'samiurrahman.shaikh@gmail.com', '8087240710', 0, 'engrr', '40007850930', 1, '', '', '', 0),
(4, '202cb962ac59075b964b07152d234b70', 'Barkha', 'Soni', 'MLSU', 'barkha@soni.com', '8452812880', 0, 'CA', '123', 1, '', '', '', 0),
(8, NULL, 'Khushbu', 'Soni', '', 'soni.khushbu.2104@gmail.com', '', 0, '', '', 0, '', '', 'female', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_endorse`
--

CREATE TABLE `users_endorse` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `endorse_on` datetime NOT NULL,
  `endorse` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_endorse`
--

INSERT INTO `users_endorse` (`id`, `user_id`, `article_id`, `endorse_on`, `endorse`) VALUES
(29, 2, 45, '2016-01-26 11:43:02', 1),
(30, 2, 43, '2016-01-26 11:43:07', 0),
(31, 3, 43, '2016-01-26 11:44:32', 1),
(32, 4, 45, '2016-01-26 18:57:23', 0),
(33, 4, 44, '2016-01-26 18:58:21', 1),
(34, 2147483647, 43, '2016-02-07 15:40:23', 1),
(35, 2147483647, 43, '2016-02-07 15:40:32', 0),
(36, 2147483647, 43, '2016-02-07 15:40:33', 0),
(37, 2147483647, 43, '2016-02-07 15:40:34', 0),
(38, 2147483647, 43, '2016-02-07 15:40:34', 0),
(39, 2147483647, 43, '2016-02-07 15:40:34', 0),
(40, 2147483647, 43, '2016-02-07 15:40:35', 0),
(41, 2147483647, 44, '2016-02-07 15:40:53', 0),
(42, 2147483647, 44, '2016-02-07 15:40:53', 0),
(43, 2147483647, 44, '2016-02-07 15:40:55', 1),
(44, 2147483647, 45, '2016-02-07 15:41:02', 1),
(45, 2147483647, 45, '2016-02-07 15:41:04', 1),
(46, 2147483647, 45, '2016-02-07 15:41:20', 0),
(47, 7, 43, '2016-02-07 15:52:35', 0),
(48, 7, 44, '2016-02-07 15:52:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_old`
--
ALTER TABLE `category_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rtype` (`rtype`),
  ADD KEY `rcategory` (`rcategory`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_endorse`
--
ALTER TABLE `users_endorse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category_old`
--
ALTER TABLE `category_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users_endorse`
--
ALTER TABLE `users_endorse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

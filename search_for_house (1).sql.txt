-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 11:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_for_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `owner_id` int(10) DEFAULT NULL,
  `p_d_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_id`, `owner_id`, `p_d_id`) VALUES
(2, 'arun', 'arun1@gmail.com', '12345678', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interested_property`
--

CREATE TABLE `interested_property` (
  `id` int(50) NOT NULL,
  `p_details_id` int(50) DEFAULT NULL,
  `owner_id` int(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `confirm` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested_property`
--

INSERT INTO `interested_property` (`id`, `p_details_id`, `owner_id`, `user_id`, `confirm`) VALUES
(11, 19, 2, 6, 'yes'),
(12, 20, 2, 6, 'rejected'),
(13, 21, 2, 6, 'no'),
(14, 23, 2, 6, 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `email`, `password`, `contact`, `user_id`) VALUES
(2, 'Nayeem', 'nayeem@gmail.com', '1234', '01531965575', NULL),
(3, 'Nayeem Ahmed', 'nayeemr.45@gmail.com', '1234567890', '12345678901', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` int(10) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `area` varchar(10) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `room` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Newly Added',
  `image` varchar(200) NOT NULL,
  `approve` varchar(50) NOT NULL DEFAULT 'no',
  `owner_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `house_no`, `street`, `area`, `thana`, `district`, `floor`, `room`, `price`, `status`, `image`, `approve`, `owner_id`, `user_id`) VALUES
(17, '500', '1', 'nill', 'lalbagh', 'dhaka', '5', '2', 5000, 'Booked', '4324.jpg', 'yes', 2, 6),
(18, '701', '1', 'azimpur', 'lalbagh', 'dhaka', '5', '2', 5000, 'Booked', '99331.jpg', 'yes', 2, 6),
(19, '500', '1', 'polashi', 'lalbagh', 'dhaka', '5', '2', 5000, 'Booked', '11053.jpg', 'yes', 2, 6),
(20, '800', '2', 'azimpur', 'lalbagh', 'dhaka', '5', '2', 5000, 'Someone Interested', '29271.jpg', 'yes', 2, 6),
(21, '900', '5', 'nill', 'lalbagh', 'dhaka', '5', '2', 5000, 'Someone Interested', '62454.jpg', 'yes', 2, NULL),
(22, '90', '1', 'nill', 'lalbagh', 'dhaka', '5', '2', 5000, 'Newly Added', '39982.jpg', 'yes', 2, NULL),
(23, '9', '1', 'chawkbazar', 'lalbagh', 'dhaka', '4', '4', 5000, 'Newly Added', '47144.jpg', 'yes', 2, 6),
(24, '500', '1', 'london', 'lalbagh', 'dhaka', '5', '2', 5000, 'Someone Interested', '53411.jpg', 'yes', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `members` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `contact_no`, `type`, `members`) VALUES
(6, 'nayeem', 'abc@gmail.com', '1234', '015', 'Student', '1-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_d_id` (`p_d_id`);

--
-- Indexes for table `interested_property`
--
ALTER TABLE `interested_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `p_details_id` (`p_details_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interested_property`
--
ALTER TABLE `interested_property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`p_d_id`) REFERENCES `property_details` (`id`);

--
-- Constraints for table `interested_property`
--
ALTER TABLE `interested_property`
  ADD CONSTRAINT `interested_property_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `interested_property_ibfk_2` FOREIGN KEY (`p_details_id`) REFERENCES `property_details` (`id`),
  ADD CONSTRAINT `interested_property_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
  ADD CONSTRAINT `property_details_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `property_details_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

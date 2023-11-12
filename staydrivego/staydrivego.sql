-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 08:39 AM
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
-- Database: `staydrivego`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(100) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `carid` varchar(100) NOT NULL,
  `startdate` varchar(100) NOT NULL,
  `enddate` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `username`, `carid`, `startdate`, `enddate`, `status`) VALUES
(1, 'user123', '1', '2023-11-10', '2023-11-15', 'Confirmed'),
(2, 'user456', '2', '2023-12-01', '2023-12-10', 'Pending'),
(3, 'user789', '3', '2023-11-20', '2023-11-25', 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `cancellations`
--

CREATE TABLE `cancellations` (
  `cnclid` int(100) NOT NULL,
  `carid` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancellations`
--

INSERT INTO `cancellations` (`cnclid`, `carid`, `location`, `status`) VALUES
(1, 101, 'Uttara', 'Pending'),
(2, 102, 'Badda', 'Confirmed'),
(3, 103, 'Dhanmondi', 'Canceled');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(100) NOT NULL,
  `crmdl` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `prcprd` varchar(1000) NOT NULL,
  `pickuptime` varchar(1000) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `crmdl`, `location`, `prcprd`, `pickuptime`, `availability`) VALUES
(1, 'BMW1', 'Badda', '3001', '8', 1),
(2, 'Pagani2', 'Uttara', '5000', '9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ownersinfo`
--

CREATE TABLE `ownersinfo` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pp` varchar(255) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `service` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ownersinfo`
--

INSERT INTO `ownersinfo` (`firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `gender`, `pp`, `password`, `service`) VALUES
('Jack', 'Smith', 'atomic123', 'atomic@gmail.com', '01323456789', '2001-01-01', 'Male', 'profile_pics/AD.jpg', 'Atomic123@', 'car'),
('John', 'Smith', 'john1234', 'john@gmail.com', '01723456789', '2001-01-02', 'Male', 'profilePic.jpg', 'John123@', 'car'),
('Safkat', 'Mahmud', 'safkat', 'safkat@gmail.com', '01630312213', '2023-11-01', 'Male', 'profilePic.jpg', 'Sakib@1', 'hotel'),
('Safkat', 'Mahmud', 'sakib1254', 'safkatmahmudsakib@gmail.com', '01630312213', '2023-10-31', 'Male', 'profilePic.jpg', 'Sakib1!', 'car'),
('Safkat', 'Mahmud', 'sakib22', 'safkatmahmudsakib2000@gmail.com', '01630312213', '2023-10-31', 'Male', 'profilePic.jpg', 'Sakib@1', 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `signin_info`
--

CREATE TABLE `signin_info` (
  `user_number` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin_info`
--

INSERT INTO `signin_info` (`user_number`, `username`, `password`, `user_type`) VALUES
(1, 'wasi123_', 'Sakib1!', 'user'),
(2, 'sakib125', 'Sakib1!', 'user'),
(3, 'sakib1254', 'Sakib1!', 'car'),
(4, 'wasi12_', 'Sakib1!', 'user'),
(5, 'sakib123_', 'Sakib@1', 'user'),
(6, 'owasi1_', 'Sakib@1', 'user'),
(7, 'sakib1', 'Sakib@1', 'user'),
(8, 'sakib22', 'Sakib@1', 'hotel'),
(9, 'sakib23', 'Sakib@1', 'hotel'),
(10, 'safkat', 'Sakib@1', 'hotel'),
(11, 'atomic123', 'Atomic123@', 'car'),
(12, 'john1234', 'John123!', 'car');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `gender`, `password`) VALUES
('Owasi', 'Soumik', 'owasi1_', 'mohammadowasi70@gmail.com', '01790427288', '2023-10-01', 'Male', 'Sakib1!'),
('Safkat', 'Mahmud', 'sakib1', 'safkatmahmud@gmail.com', '01630312213', '2023-10-31', 'Male', 'Sakib1!'),
('Safkat', 'Mahmud', 'sakib123_', 'safkatmahmudsakib@gmail.com', '01629313026', '2001-12-31', 'Male', 'Sakib@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `cancellations`
--
ALTER TABLE `cancellations`
  ADD PRIMARY KEY (`cnclid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `ownersinfo`
--
ALTER TABLE `ownersinfo`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `signin_info`
--
ALTER TABLE `signin_info`
  ADD PRIMARY KEY (`user_number`),
  ADD UNIQUE KEY `unique` (`username`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signin_info`
--
ALTER TABLE `signin_info`
  MODIFY `user_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 01:08 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinecar`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_carlist`
--

CREATE TABLE `t_carlist` (
  `c_id` int(20) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_price` int(11) DEFAULT NULL,
  `c_brand` varchar(20) DEFAULT NULL,
  `c_type` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_carlist`
--

INSERT INTO `t_carlist` (`c_id`, `c_name`, `c_price`, `c_brand`, `c_type`) VALUES
(56, 'BMW', 6000, 'R564', 'Private'),
(57, 'TOYOTA', 8000, 'NOHA', 'Micro'),
(58, 'HONDA', 4000, 'VEZEL', 'Private'),
(61, 'GTX', 15000, 'Sports', 'Private'),
(62, 'Nissan', 4000, 'Sunny', 'Micro'),
(63, 'Audi', 20000, 'R8', 'Private'),
(64, 'new', 200, 'newb', 'micro');

-- --------------------------------------------------------

--
-- Table structure for table `t_rented`
--

CREATE TABLE `t_rented` (
  `r_id` int(20) NOT NULL,
  `r_name` varchar(300) NOT NULL,
  `r_price` int(11) DEFAULT NULL,
  `r_brand` varchar(500) DEFAULT NULL,
  `r_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rented`
--

INSERT INTO `t_rented` (`r_id`, `r_name`, `r_price`, `r_brand`, `r_type`) VALUES
(7, 'GTX', 15000, 'Sports', 'Private'),
(8, 'Minicooper', 1000, NULL, 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `u_id` int(50) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_dob` date DEFAULT NULL,
  `u_gender` varchar(100) DEFAULT NULL,
  `u_email` varchar(150) DEFAULT NULL,
  `u_phone` int(50) NOT NULL,
  `u_type` varchar(100) DEFAULT NULL,
  `u_dept` varchar(100) DEFAULT NULL,
  `u_report` int(50) DEFAULT NULL,
  `u_pic` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_users`
--

INSERT INTO `t_users` (`u_id`, `u_name`, `u_password`, `u_dob`, `u_gender`, `u_email`, `u_phone`, `u_type`, `u_dept`, `u_report`, `u_pic`) VALUES
(2, 'sifat', '123', '2019-08-19', 'male', 'i.kazitanveer@gmail.com', 1900000000, 'admin', NULL, 0, 'semester 11 calender.jpg'),
(3, 'rahul', '1', '0000-00-00', 'male', 'rahul@gmail.com', 0, 'member', NULL, 0, NULL),
(4, 'irin', '1', '0000-00-00', 'female', 'irin@gmail.com', 0, 'member', NULL, 0, NULL),
(5, 'joy', '1', NULL, 'male', 'joy@gmail.com', 1824318212, 'member', 'EEE', 0, NULL),
(6, 'tanjul islam', '123', '2019-08-14', 'male', 'tanjul@gmail.com', 1552987430, 'member', NULL, NULL, 'Capture.PNG'),
(8, 'md alamin', '1', '2019-08-19', 'male', 'alamin@aiub.edu', 1552987430, 'member', 'CSE', NULL, NULL),
(9, 'wasi', '123', '2019-08-14', 'female', 'rufatron@gmail', 155, 'member', NULL, NULL, NULL),
(11, 'car', '2', '2019-08-14', 'male', 'car@gmail.com', 3244335, 'member', NULL, NULL, NULL),
(13, 'public', '2', '2019-08-08', 'male', 'public@gmail.com', 44444555, 'member', NULL, NULL, NULL),
(15, 'home', '2', '2019-08-02', 'male', 'home@gmail.com', 3333444, 'member', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_carlist`
--
ALTER TABLE `t_carlist`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `t_rented`
--
ALTER TABLE `t_rented`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_carlist`
--
ALTER TABLE `t_carlist`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `t_rented`
--
ALTER TABLE `t_rented`
  MODIFY `r_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

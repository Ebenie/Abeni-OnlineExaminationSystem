-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevotingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `id_photo` varchar(100) DEFAULT NULL,
  `national_id` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `zone` varchar(100) DEFAULT NULL,
  `woreda` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `kebele` varchar(100) DEFAULT NULL,
  `house_no` varchar(100) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `job` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`id`, `fname`, `mname`, `lname`, `age`, `id_photo`, `national_id`, `region`, `zone`, `woreda`, `city`, `kebele`, `house_no`, `profile`, `email`, `job`, `gender`, `nationality`, `password`) VALUES
(1, 'Abronal', 'Software', 'Company', 232, 'logo-white.png', '123412', 'asdf', 'asdfg', 'asdf', 'asdf', 'werqw', '1234', 'logo-black.png', 'abronal@gmail.com', 'aserwe', 'Male', 'Ethiopian', 'abronal123'),
(2, 'Ermias', 'Bogale', 'Company', 123, 'logo-white.png', '135432', 'asdf', 'awsd', 'asdf', 'asd', '23', '2323', 'logo-black.png', 'ermias@gmail.com', 'student', 'Male', 'Ethiopian', 'UTfskLdn'),
(3, 'asdf', 'asdf', 'sdfg', 34, 'logo-white.png', '1234', 'qasdf', 'qwer', 'qwer', 'qwer', 'qwe', '23', 'logo-black.png', 'soft@gmail.com', 'wqw', 'Male', 'Ethiopian', 'zx5t7jEu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `party` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `party`) VALUES
(1, 'Abenezer', 'Abraham', 'abeni@gmail.com', 'Aben1234', 'Ethiopian Prosperity Party');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

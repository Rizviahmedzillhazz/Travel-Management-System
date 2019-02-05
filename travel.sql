-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 10:42 PM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `cell` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usertype` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `cell`, `password`, `email`, `usertype`) VALUES
(26, 'dasd dsa d', ' 1', ' c4ca4238a0b923820dcc509a6f75849', ' 1 ', '2'),
(27, 'RR tt', ' ada', ' 5ca2aa845c8cd5ace6b016841f100d8', ' ad ', '1'),
(28, 'chinmoy ailsha', ' ad', ' 321', ' deathlives10@gmail.com ', '1'),
(33, 'abal user', '01629585064', '202cb962ac59075b964b07152d234b70', 'abal@gmail.com ', '2'),
(34, 'Ahmed rizvi', '01629585064', '202cb962ac59075b964b07152d234b70', 'rizvi@gmail.com ', '2'),
(35, 'Ahmed rizvi', '01629585064', '202cb962ac59075b964b07152d234b70', 'rizvi@gmail.com ', '1'),
(36, 'av ab', '01716565945', '202cb962ac59075b964b07152d234b70', 'av@gmail.com ', '2'),
(37, 'a d', '01629585064', '202cb962ac59075b964b07152d234b70', 'asd@gmail.com ', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

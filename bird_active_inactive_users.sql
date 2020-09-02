-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2020 at 03:46 PM
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
-- Database: `codingbirds`
--

-- --------------------------------------------------------

--
-- Table structure for table `bird_active_inactive_users`
--

CREATE TABLE `bird_active_inactive_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bird_active_inactive_users`
--

INSERT INTO `bird_active_inactive_users` (`id`, `name`, `email`, `contact`, `status`) VALUES
(1, 'Ankit kumar', 'cs.ankitprajapati@gmail.com', '7905266028', 0),
(2, 'Manish Pal', 'manish.pal@gmail.com', '8251234225', 1),
(3, 'Parth', 'parth.mishra@gmail.com', '9653125756', 0),
(4, 'selim', 'selim@gmail.coml', '01245t', 1),
(5, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '01724063642', 1),
(6, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '01724063643', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bird_active_inactive_users`
--
ALTER TABLE `bird_active_inactive_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bird_active_inactive_users`
--
ALTER TABLE `bird_active_inactive_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 11:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_grey_hat`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `ssl` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `url`, `ip`, `ssl`, `created_at`) VALUES
(2, 'https%3A%2F%2Fwww.google.com%2F', ' ::1', 1, '2022-09-24 18:00:52'),
(3, 'https%3A%2F%2Fwww.google.com', ' ::1', 1, '2022-09-24 18:07:46'),
(4, 'https%3A%2F%2Fwww.google.comsjlkdfs', ' ::1', 0, '2022-09-24 18:08:46'),
(5, 'https%3A%2F%2Fwww.google.com', ' ::1', 1, '2022-09-24 18:22:29'),
(6, 'google.com', ' ::1', 0, '2022-09-24 19:33:15'),
(7, 'https%3A%2F%2Fwww.google.com%2F', ' ::1', 1, '2022-09-24 19:33:39'),
(8, 'https%3A%2F%2Fwww.google.com%2F', ' ::1', 1, '2022-09-24 19:33:40'),
(9, 'https%3A%2F%2Fwww.google.com%2F', ' ::1', 1, '2022-09-24 19:33:40'),
(10, 'google.com', ' ::1', 0, '2022-09-24 19:33:54'),
(11, 'http%3A%2F%2Fnichetechweb.nichetechqa.com', ' ::1', 0, '2022-09-24 19:34:32'),
(12, 'https%3A%2F%2Fnichetechweb.nichetechqa.com', ' ::1', 1, '2022-09-24 19:34:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

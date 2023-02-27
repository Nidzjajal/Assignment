-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 12:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbpccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `country` varchar(20) NOT NULL,
  `hobbie` varchar(13) NOT NULL,
  `profile_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `email`, `mobile`, `address`, `pincode`, `gender`, `country`, `hobbie`, `profile_picture`) VALUES
(1, 'Nidhi', 'Nidhi@1234.cmm', '9999999999', 'Mahuva', '364290', 'female', 'India', '', 'image/IMG-20220510-WA0013.jpg'),
(3, 'Nidhi', 'Nidhi@6656.cmm', '9999999999', 'Mahuva', '364290', 'female', 'India', '', 'image/IMG-20220510-WA0018.jpg'),
(4, 'Nidhi', 'Nidhi@656.cmm', '9999999999', 'Mahuva', '364290', 'female', 'India', '', 'image/IMG-20220510-WA0016.jpg'),
(5, 'Nidhi', 'Nidhi@6vj56.cmm', '9999999999', 'Mahuva', '364290', 'female', 'India', 'reading', 'image/IMG-20220510-WA0018.jpg'),
(6, 'cxc', 'df@d.jk', '4554444444', 'Mahuva', '364290', 'female', 'India', 'hii', 'image/car.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

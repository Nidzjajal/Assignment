-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 12:32 PM
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
-- Table structure for table `employe`
--

CREATE TABLE `employe` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gross_salary` int(20) NOT NULL,
  `net_salary` int(20) NOT NULL,
  `mobile_no` text NOT NULL,
  `basic_salary` bigint(50) NOT NULL,
  `ta` int(20) NOT NULL,
  `da` int(20) NOT NULL,
  `hra` int(20) NOT NULL,
  `pf` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employe`
--

INSERT INTO `employe` (`id`, `name`, `email`, `gross_salary`, `net_salary`, `mobile_no`, `basic_salary`, `ta`, `da`, `hra`, `pf`) VALUES
(1, 'jajalnidhi', 'jajal@gmail.com', 47950, 43575, '2222222222', 35000, 3500, 4200, 5250, 4375),
(2, 'jajalnidhi', 'jajalnidhi@gmail.com', 27400, 24900, '2222222222', 20000, 2000, 2400, 3000, 2500),
(3, 'nidhijajal', 'nidhijajal@gmail.com', 46580, 42330, '2222222222', 34000, 3400, 4080, 5100, 4250),
(4, 'vmmm', 'vmmmmm@gmail.com', 767200, 697200, '2222222222', 560000, 56000, 67200, 84000, 70000),
(5, 'hello', 'Helo@1234', 47950, 43575, '9999999999', 35000, 3500, 4200, 5250, 4375),
(6, 'cxc', 'df@d.jk', 2740, 2490, '4554444444', 2000, 200, 240, 300, 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

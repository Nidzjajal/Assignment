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
-- Table structure for table `stud_tbl_1`
--

CREATE TABLE `stud_tbl_1` (
  `stud_id` int(11) NOT NULL,
  `stud_Name` varchar(50) NOT NULL,
  `stud_Email` varchar(30) NOT NULL,
  `stud_DOB` date NOT NULL,
  `stud_Gender` varchar(6) NOT NULL,
  `stud_tot_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_tbl_1`
--

INSERT INTO `stud_tbl_1` (`stud_id`, `stud_Name`, `stud_Email`, `stud_DOB`, `stud_Gender`, `stud_tot_marks`) VALUES
(13, 'Nidhi', 'Nidhi@6vj56.cmm', '2021-04-23', 'Male', 760),
(14, 'cccnjnxjs', 'Nidhi@6vj56.cmm', '2003-04-11', 'Male', 760),
(15, 'Nidhi', 'Nidhi@6v56.cmm', '0666-04-04', 'Male', 760),
(16, 'cccnjnxjs', 'Nidhi@6vj56.cmm', '2222-03-12', 'Female', 760);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

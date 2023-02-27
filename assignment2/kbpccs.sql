-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 12:19 PM
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
-- Table structure for table `bookmaster`
--

CREATE TABLE `bookmaster` (
  `book_id` bigint(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `auther_name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `net_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmaster`
--

INSERT INTO `bookmaster` (`book_id`, `book_name`, `auther_name`, `price`, `quantity`, `net_amount`) VALUES
(1, 'PC software vb', 'R.K taxali cvcv', 350, 2, 680),
(2, 'C language', 'E_balaguru swamir', 320, 3, 960);

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

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gross_salary` varchar(10) NOT NULL,
  `net_salary` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `basic_salary` varchar(20) NOT NULL,
  `ta` varchar(20) NOT NULL,
  `da` varchar(15) NOT NULL,
  `hra` varchar(15) NOT NULL,
  `pf` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(19, 'Jajalnidhi', '1111111111'),
(20, 'nidhijajal', '2222222222'),
(21, 'hellonidhi', 'helo@12345'),
(22, 'hello', 'hello@1234'),
(23, 'hello', '4554444444'),
(24, 'cccnjnxjs', '3232222222'),
(25, 'cccnjnxjs', '6666666666');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `contact`) VALUES
(1, '', '', ''),
(2, 'nidhi', 'idwh@1234', '6767677667'),
(3, 'NIDHI', 'nidhi@1234', '9510951842'),
(4, 'Nidhi', 'Nidhi@6vj56.cmm', '9999999999'),
(5, 'nidhi', 'fgf@565', '6767677667'),
(6, 'cxc', 'df@d.jk', '4554444444');

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

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `gender`) VALUES
(1, 'nidhi', 'fgf@565', 'Femal'),
(2, 'nidhi', 'fgf@565', 'Femal');

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `photograph` text NOT NULL,
  `LogInDate` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `address`, `email`, `gender`, `contact`, `photograph`, `LogInDate`) VALUES
(34, 'hello', 'helo@1234', 'Mahuva', 'Helo@1234', 'Female', '9999999999', 'image/IMG-20220510-WA0037.jpg', '24/02/23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmaster`
--
ALTER TABLE `bookmaster`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmaster`
--
ALTER TABLE `bookmaster`
  MODIFY `book_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stud_tbl_1`
--
ALTER TABLE `stud_tbl_1`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

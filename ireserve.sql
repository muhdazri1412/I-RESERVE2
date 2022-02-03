-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 02:54 PM
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
-- Database: `ireserve`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `matricno` int(7) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `venue_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `matricno`, `date`, `timeslot`, `status`, `venue_id`) VALUES
(24, 1812031, '2022-02-03', '08:00AM-09:00AM', 'rejected', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `book_id` int(11) NOT NULL
  `User_fname` varchar(30) NOT NULL,
  `User_lname` varchar(30) NOT NULL,
  `User_email` varchar(30) NOT NULL,
  `matricno` int(10) NOT NULL,
  `User_phone` int(10) NOT NULL,
  `User_advisor` int(10) DEFAULT NULL,
  `User_address` varchar(30) NOT NULL,
  `User_org` varchar(30) DEFAULT NULL,
  `Prog_name` varchar(30) NOT NULL,
  `Prog_type` varchar(30) DEFAULT NULL,
  `part_tot` int(10) NOT NULL,
  `Prog_cat` varchar(30) DEFAULT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`User_fname`, `User_lname`, `User_email`, `matricno`, `User_phone`, `User_advisor`, `User_address`, `User_org`, `Prog_name`, `Prog_type`, `part_tot`, `Prog_cat`, `book_id`) VALUES
('Muhammad Azri', 'Abdul rahim', 'muhdazri1412@gmail.com', 1812031, 102010582, 198131903, 'kict', 'kict', 'programme', 'programme', 7, 'University', 24);

-- --------------------------------------------------------

--
-- Table structure for table `guestlogin`
--

CREATE TABLE `guestlogin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `liaisonlogin`
--

CREATE TABLE `liaisonlogin` (
  `staffid` int(7) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liaisonlogin`
--

INSERT INTO `liaisonlogin` (`staffid`, `password`, `cpassword`, `verify_token`, `username`, `email`, `department`) VALUES
(0, '', '', '', '', '', ''),
(123, '12345', '12345', '', 'abdul', 'abdul@kict.com', 'kict'),
(999, '12345', '12345', '', 'abdul', 'abdul@kict.com', 'kict'),
(1221, '12345', '12345', '', 'kamal', 'kamal@gmail.com', 'kict'),
(1233, '12345', '12345', '', 'abdul', 'abdul@kict.com', 'kict');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `data` blob NOT NULL,
  `matricno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`id`, `name`, `mime`, `data`, `matricno`) VALUES
INSERT INTO `pdf_file` (`id`, `name`, `mime`, `data`, `matricno`) VALUES
(2, '1815499_Final_Assessment_Sem_2_20-21.pdf', 'application/pdf', , NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `matricno` int(7) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`matricno`, `password`, `cpassword`, `verify_token`, `username`, `email`, `phone`) VALUES
(1812031, '12345', '12345', '', 'azri', 'azri@gmail.com', 102010582),
(1816401, '12345', '12345', '', 'owish', 'owishers@gmail.com', 122238967);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `area` int(255) NOT NULL,
  `rate` int(5) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `capacity`, `area`, `rate`, `facility`, `venue_id`, `status`) VALUES
(1, 'mph', 200, 150, 120, 'AV', 1, 0),
(2, 'library', 50, 50, 60, 'tv', 2, 0),
(3, 'class', 30, 20, 50, 'lcd', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `liaisonlogin`
--
ALTER TABLE `liaisonlogin`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `pdf_file`
--
ALTER TABLE `pdf_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`matricno`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pdf_file`
--
ALTER TABLE `pdf_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

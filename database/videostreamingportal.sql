-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 05:31 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videostreamingportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `passcode` varchar(250) NOT NULL,
  `privelage` varchar(250) NOT NULL,
  `classification` varchar(250) NOT NULL,
  `office` varchar(250) NOT NULL,
  `deleted` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `email`, `passcode`, `privelage`, `classification`, `office`, `deleted`) VALUES
(1, 'Rex J. Quinto', 'rex.quinto@dlsl.edu.ph', 'imc123', 'SUPER ADMIN', 'STAFF', 'IMC', 0),
(2, 'Michael Llanes', 'michael.llanes@dlsl.edu.ph', 'imc123', 'SUPER ADMIN', 'Staff', 'IMC', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(250) NOT NULL,
  `actor` varchar(1000) NOT NULL,
  `action` varchar(1000) NOT NULL,
  `dateofaction` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `specification` varchar(500) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(250) NOT NULL,
  `deleted` varchar(250) NOT NULL,
  `verified` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `specification`, `email`, `password`, `deleted`, `verified`) VALUES
(1, 'Darwin Luis M. Sanchez', 'college', 'darwin_luis_sanchez@dlsl.edu.ph', 'darwin123', '0', '1'),
(2, 'Monique F. Pitel', 'college', 'monique_pitel@dlsl.edu.ph', 'dlslpass123', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(250) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `filename` varchar(1000) NOT NULL,
  `filetype` varchar(250) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `category` varchar(250) NOT NULL,
  `uploadedby` varchar(1000) NOT NULL,
  `source` varchar(250) NOT NULL,
  `dateuploaded` varchar(500) NOT NULL,
  `views` varchar(250) NOT NULL,
  `deleted` varchar(250) NOT NULL,
  `disabled` varchar(250) NOT NULL,
  `disapproved` varchar(250) NOT NULL,
  `newfilename` varchar(250) NOT NULL,
  `agerestriction` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

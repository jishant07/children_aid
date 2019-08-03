-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 06:31 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `children_aid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`username`, `password`) VALUES
('abcd@gmail.com', 'b3f947379e88aab49c26f395aa0ebaee');

-- --------------------------------------------------------

--
-- Table structure for table `children_data`
--

CREATE TABLE `children_data` (
  `id` int(11) NOT NULL,
  `added_data` text NOT NULL,
  `photo_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minimal_form_data`
--

CREATE TABLE `minimal_form_data` (
  `id` int(11) NOT NULL,
  `added_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `photo_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker_user`
--

CREATE TABLE `worker_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_user`
--

INSERT INTO `worker_user` (`username`, `password`) VALUES
('jishanta@gmail.com', 'b3f947379e88aab49c26f395aa0ebaee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children_data`
--
ALTER TABLE `children_data`
  ADD KEY `id` (`id`);

--
-- Indexes for table `minimal_form_data`
--
ALTER TABLE `minimal_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children_data`
--
ALTER TABLE `children_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `minimal_form_data`
--
ALTER TABLE `minimal_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

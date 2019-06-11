-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 10:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
-- Table structure for table `children_data`
--

CREATE TABLE `children_data` (
  `id` int(11) NOT NULL,
  `added_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children_data`
--

INSERT INTO `children_data` (`id`, `added_data`) VALUES
(1, '{\"name\":\"asd\",\"file_number\":\"kj\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"tehsil\":\"nk\",\"taluka\":\"jn\",\"village\":\"kjn\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"nlk\",\"hair\":\"lkjn\",\"teeth\":\"\",\"lip_type\":\"Heart Shaped\",\"general_condition\":\"m\",\"religion\":\"\",\"caste\":\",m\",\"other_languages\":[\",mn\"],\"mother_tongue\":\",m\",\"socio_economic_class\":\",m\",\"lit_level\":\"High\",\"prev_school\":\"m\",\"child_court\":\",mn\",\"case_no\":\",.mn\",\"case_handler\":\".,m\",\"section_referral\":\"n\",\"status\":\"CCL\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"is_repeater\":\"Yes\",\"date_of_discharge\":\"\",\"prev_institution\":\"assdcsd\",\"nature_dod\":\"scsdc\",\"observation\":\"sdcsd\",\"pre_problem\":\"sdcsd\",\"agg_cir\":\"sdv\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children_data`
--
ALTER TABLE `children_data`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children_data`
--
ALTER TABLE `children_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

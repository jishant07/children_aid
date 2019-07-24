-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 07:37 PM
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
  `added_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children_data`
--

INSERT INTO `children_data` (`id`, `added_data`) VALUES
(1, '{\"name\":\"Jishant\",\"file_number\":\"1212\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"Mankurdh\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(4, '{\"name\":\"Anil\",\"file_number\":\"51247\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"Dadar\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(5, '{\"name\":\"Anil\",\"file_number\":\"51247\",\"reg_number\":\"sdkjbsd\",\"aadhar_number\":\"1234567891\",\"perm_add\":\"Malad\",\"loc_add\":\"Malad\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"9512885899\",\"age\":\"13\",\"date_of_birth\":\"1991-02-02\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(6, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(7, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(8, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(9, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(10, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(11, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(12, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(13, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(14, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\",\"height\":\"\",\"weight\":\"\",\"chest\":\"\",\"comp\":\"\",\"hair\":\"\",\"teeth\":\"\",\"general_condition\":\"\",\"religion\":\"\",\"caste\":\"\",\"mother_tongue\":\"\",\"socio_economic_class\":\"\",\"prev_school\":\"\",\"child_court\":\"\",\"case_no\":\"\",\"case_handler\":\"\",\"section_referral\":\"\",\"date_of_custody\":\"\",\"date_of_admission\":\"\",\"date_of_discharge\":\"\",\"prev_institution\":\"\",\"nature_dod\":\"\",\"observation\":\"\",\"pre_problem\":\"\",\"agg_cir\":\"\"}'),
(15, '{\"name\":\"\",\"file_number\":\"\",\"reg_number\":\"\",\"aadhar_number\":\"\",\"perm_add\":\"\",\"loc_add\":\"\",\"tehsil\":\"\",\"branch\":\"\",\"village\":\"\",\"mob_num\":\"\",\"age\":\"\",\"date_of_birth\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `minimal_form_data`
--

CREATE TABLE `minimal_form_data` (
  `id` int(11) NOT NULL,
  `added_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minimal_form_data`
--

INSERT INTO `minimal_form_data` (`id`, `added_data`) VALUES
(1, '{\"name\":\"jishant_acharya\",\"file_number\":\"51247\",\"reg_number\":\"sdkjbsd\",\"aadhar_number\":\"1147852\",\"perm_add\":\"Malad\",\"loc_add\":\"Malad\",\"tehsil\":\"Mumbai\",\"branch\":\"Dadar\",\"village\":\"IDK\",\"mob_num\":\"9512885899\",\"age\":\"21\",\"date_of_birth\":\"1998-08-07\"}');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `minimal_form_data`
--
ALTER TABLE `minimal_form_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

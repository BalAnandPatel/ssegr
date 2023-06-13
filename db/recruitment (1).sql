-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2022 at 10:55 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(155) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `full_name`, `email`, `password`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(1, 'mrityunajy singh', 'ms@gmail.com', '12345', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`id` int(155) NOT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `type` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `total_post` varchar(100) NOT NULL,
  `eligibility` varchar(255) NOT NULL,
  `age` varchar(255) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `exam_date_start` timestamp NULL DEFAULT NULL,
  `exam_date_end` timestamp(6) NOT NULL,
  `result_date` timestamp NULL DEFAULT NULL,
  `admit_card_date` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `type`, `amount`, `total_post`, `eligibility`, `age`, `status`, `exam_date_start`, `exam_date_end`, `result_date`, `admit_card_date`, `created_by`, `created_on`) VALUES
(1, 'UPTET', 'MCQS', 500.00, '10', 'Graduate ', '400.00', '1', '2022-10-21 18:30:00', '0000-00-00 00:00:00.000000', '2022-10-21 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00'),
(2, 'CTET', 'MCQS', 500.00, '10', 'Graduate ', '400.00', '1', '2022-10-21 18:30:00', '0000-00-00 00:00:00.000000', '2022-10-24 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00'),
(3, 'UPPCL', 'MCQS', 500.00, '10', 'Graduate ', '400.00', '1', '2022-10-21 18:30:00', '0000-00-00 00:00:00.000000', '2022-10-24 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00'),
(4, 'EXAM NAME', 'exam type', 500.00, '10', 'Graduate ', '100.00', '1', '2022-11-08 18:30:00', '0000-00-00 00:00:00.000000', '2022-11-17 18:30:00', '2022-11-14 18:30:00', 'Admin', '2022-11-08 18:30:00'),
(5, 'CTET', 'mcqs ', 200.00, '20', 'Graduate ', '100.00', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00.000000', '2022-11-13 18:30:00', '2022-11-12 18:30:00', 'Admin', '2022-11-11 18:30:00'),
(6, 'TET', 'mcqs', 300.00, '100', 'Graduate', '100.00', '1', '2022-11-10 18:30:00', '2022-11-11 18:30:00.000000', '2022-11-13 18:30:00', '2022-11-12 18:30:00', 'Admin', '2022-11-11 18:30:00'),
(7, 'CTET', 'mcqs', 300.00, '100', 'Eligibility', '18-25', '1', '2022-11-17 18:30:00', '2022-11-17 18:30:00.000000', '2022-11-17 18:30:00', '2022-11-17 18:30:00', 'Admin', '2022-11-17 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pid` int(11) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `transaction_id` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `request_id` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `gender` varchar(155) DEFAULT NULL,
  `marital_status` varchar(155) DEFAULT NULL,
  `father_name` varchar(155) DEFAULT NULL,
  `mother_name` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `result` varchar(155) DEFAULT NULL,
  `admit_card` varchar(155) DEFAULT NULL,
  `spouse_name` varchar(155) DEFAULT NULL,
  `cor_address` text,
  `address1` text,
  `address2` text,
  `address3` text,
  `district` text,
  `state` text,
  `pincode` text,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `h_qualification` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `passing_date` timestamp NULL DEFAULT NULL,
  `h_percentage` double(255,2) DEFAULT NULL,
  `grade` varchar(155) DEFAULT NULL,
  `languages` varchar(155) DEFAULT NULL,
  `is_read` varchar(155) DEFAULT NULL,
  `is_write` varchar(155) DEFAULT NULL,
  `is_speak` varchar(155) DEFAULT NULL,
  `alternate_mobile` varchar(155) DEFAULT NULL,
  `zone` varchar(155) DEFAULT NULL,
  `post` varchar(155) DEFAULT NULL,
  `postcode` varchar(155) DEFAULT NULL,
  `disability_cat` varchar(155) DEFAULT NULL,
  `disability_type` varchar(155) DEFAULT NULL,
  `ex_serviceman` varchar(155) DEFAULT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `serving_defence_per` varchar(155) DEFAULT NULL,
  `service_period` varchar(155) DEFAULT NULL,
  `religion` varchar(155) DEFAULT NULL,
  `nationality` varchar(155) DEFAULT NULL,
  `category` varchar(155) DEFAULT NULL,
  `state_exam1` varchar(155) DEFAULT NULL,
  `center_exam1` varchar(155) DEFAULT NULL,
  `state_exam2` varchar(155) DEFAULT NULL,
  `center_exam2` varchar(155) DEFAULT NULL,
  `registration_no` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `dob`, `gender`, `marital_status`, `father_name`, `mother_name`, `status`, `password`, `result`, `admit_card`, `spouse_name`, `cor_address`, `address1`, `address2`, `address3`, `district`, `state`, `pincode`, `mobile`, `email`, `h_qualification`, `subject`, `passing_date`, `h_percentage`, `grade`, `languages`, `is_read`, `is_write`, `is_speak`, `alternate_mobile`, `zone`, `post`, `postcode`, `disability_cat`, `disability_type`, `ex_serviceman`, `exam_name`, `serving_defence_per`, `service_period`, `religion`, `nationality`, `category`, `state_exam1`, `center_exam1`, `state_exam2`, `center_exam2`, `registration_no`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(48, 'MRITYUNJAY SINGH PATEL', '2021-11-13 18:30:00', 'MALE', 'Unmarried', 'father name', 'mother name ', '0', '14112021', '0', '0', 'spouse name', 'CORRESPONDANCE ADDRESS ', 'ADDRESS 1', 'ADD 2', 'ADD 3', 'DISTRICT', 'STATE', '654654', '1256987455', 'email@gmail.com', 'UNDER GRADUATION', 'SUBJECT', '2022-11-13 18:30:00', 70.00, 'First', 'HINDI', 'Yes', 'Yes', 'Yes', '1236547896', NULL, NULL, NULL, 'disability category', 'disibility type', 'No', 'UPTET', 'No', '2', 'RELIGION', 'NATIONALITY', 'CATEGORY', NULL, NULL, NULL, NULL, '1229910939', '2022-11-14 08:00:08', 'USER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`rid` int(155) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `total_mark` double(255,2) DEFAULT NULL,
  `mark_obtained` double(255,2) DEFAULT NULL,
  `exam_name` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `grade` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `rid` int(155) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

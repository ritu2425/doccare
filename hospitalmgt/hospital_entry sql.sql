-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 05:02 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital_entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE IF NOT EXISTS `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_hospiatal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_details`
--

CREATE TABLE IF NOT EXISTS `doc_details` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_specilisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `doc_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_adhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_full_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doc_details`
--

INSERT INTO `doc_details` (`doc_id`, `doc_name`, `doc_mobile`, `doc_designation`, `doc_specilisation`, `doc_hospital_id`, `doc_date`, `doc_gender`, `doc_adhar`, `doc_full_address`) VALUES
(1, 'ajay', '989889898', 'abc', '', '1', '2022-06-21 17:35:43', '', '8898989898', 'bekagavi'),
(2, 'krishna', '989889898', 'abc', 'vhvh', '1', '2022-06-21 17:36:43', '', '88989898983', 'bekagavi');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_data`
--

CREATE TABLE IF NOT EXISTS `hospital_data` (
  `hospital_id` int(11) NOT NULL,
  `hopital_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hopital_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `hospital_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospital_data`
--

INSERT INTO `hospital_data` (`hospital_id`, `hopital_name`, `hospital_address`, `hopital_contact_number`, `hospital_date`, `hospital_email`, `hospital_password`) VALUES
(1, 'KLE', 'BELAGAVI', '8310635736', '2022-06-17 20:54:45', 'kle@gmail.com', 'Kle@123'),
(2, 'BIMS', 'BELAGAVI', '90984639476', '2022-06-17 20:58:45', 'bims@gmail.com', 'bims@123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE IF NOT EXISTS `patient_details` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_alternate_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `patient_full_address` longtext COLLATE utf8mb4_unicode_ci,
  `patient_adhar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_id`, `patient_name`, `patient_mobile`, `patient_alternate_mobile`, `patient_hospital_id`, `patient_dob`, `patient_date`, `patient_full_address`, `patient_adhar`, `gender`) VALUES
(1, 'krishna', '+918310635736', '+918310635736', '', '2022-06-27', '2022-06-20 11:47:13', 'cts no 8629\r\nsec no 05\r\nmm extn srinagar', '', ''),
(2, 'krishna', '8310635737', '8722393539', '', '2022-06-20', '2022-06-20 11:48:45', 'hvbfhwevfduwevwehbewa', '', ''),
(3, 'krishna', '8310635737', '8722393539', '', '2022-06-20', '2022-06-20 12:44:31', 'krishna', '', ''),
(4, 'krishna', '8310635737', '8722393539', '', '2022-06-20', '2022-06-20 12:55:27', 'krishna', '', ''),
(5, 'krishna', '+918310635736', '+918310635736', '', '2022-05-20', '2022-06-20 14:16:22', 'cts no 8629\r\nsec no 05\r\nmm extn srinagar', '', ''),
(6, 'krishna', '+918310635736', '+918310635736', '', '2022-06-20', '2022-06-20 15:12:18', 'cts no 8629\r\nsec no 05\r\nmm extn srinagar', '953367600194', ''),
(7, 'krishna', '+918310635736', '+918310635736', '', '2022-06-01', '2022-06-20 16:00:41', 'cts no 8629\r\nsec no 05\r\nmm extn srinagar', '9393939293', ''),
(8, 'krishna', '+918310635736', '+918310635736', '1', '2022-06-14', '2022-06-20 16:04:51', 'cts no 8629\r\nsec no 05\r\nmm extn srinagar', '7878787878', 'MALE'),
(9, 'sneha', '6564657347', '7474747474', '1', '2022-06-21', '2022-06-21 14:02:32', '4fdcd dc', '4324343324', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reports`
--

CREATE TABLE IF NOT EXISTS `patient_reports` (
  `report_id` int(11) NOT NULL,
  `hospital_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_deases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_report` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_full_report` longtext COLLATE utf8mb4_unicode_ci,
  `report_date_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_reports`
--

INSERT INTO `patient_reports` (`report_id`, `hospital_id`, `doctor_id`, `patient_id`, `patient_deases`, `patient_report`, `patient_full_report`, `report_date_time`) VALUES
(1, '', '', '8', 'fun', '', '', '2022-06-20 21:30:27'),
(2, '', '', '8', 'hhh', '1655737899_lvlogosds.png', 'sdsdsdsds', '2022-06-20 21:30:27'),
(3, '', '', '8', 'nkkq', '1655741091_lvl.jpg', 'roga', '2022-06-20 21:34:51'),
(4, '', '', '9', 'hhh', '1655801056_signkri.jpg', 'defdefde', '2022-06-21 14:14:16'),
(5, '1', '', '9', 'hhh', '1655803164_lvlogosds.png', 'dffr', '2022-06-21 14:49:25'),
(6, '1', '', '9', 'hhh', '1655816142_lvlogosds.png', 'SAdsadsw', '2022-06-21 18:25:42'),
(7, '1', '', '9', 'hhh', '1655816289_lvl.jpg', 'jhuhiu', '2022-06-21 18:28:09'),
(8, '1', '', '9', 'hhh', '1655817039_lvlogosds.png', 'dfggerf', '2022-06-21 18:40:39'),
(9, '1', '', '9', '', '1655817406_lvlogosds.png', 'dfvgdvdc', '2022-06-21 18:46:46'),
(10, '1', '', '9', 'sdfge', '1655817460_signkri.jpg', 'fegewrfgr', '2022-06-21 18:47:40'),
(11, '1', '', '9', 'hhh', '1655817576_signkri.jpg', 'hbh', '2022-06-21 18:49:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `doc_details`
--
ALTER TABLE `doc_details`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `hospital_data`
--
ALTER TABLE `hospital_data`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_reports`
--
ALTER TABLE `patient_reports`
  ADD PRIMARY KEY (`report_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc_details`
--
ALTER TABLE `doc_details`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospital_data`
--
ALTER TABLE `hospital_data`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient_reports`
--
ALTER TABLE `patient_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

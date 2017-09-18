-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 09:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucket_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `key_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  `uploaded_to` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `key_name`, `type`, `size`, `uploaded_by`, `uploaded_to`, `time`, `school`) VALUES
(16, 'Nov_09_16_16_52_FALLSEM2016-17_SWE308_TH_2453_AM003_PBL Project report format SWE308.docx', 'kjdkjv', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '535137', 'Vishnu Prasaath', '', 'Nov_09_2016/16:52', 'SITE'),
(17, 'Nov_09_16_16_54_17.Empty Cart Button Extension for WooCommerce - YouTube.mp4', 'videoo', 'video/mp4', '5231813', 'Vishnu Prasaath', '', 'Nov_09_2016/16:54', 'SITE'),
(18, 'Apr_28_17_8_18_Scm plan template.pptx', 'PPT', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', '298410', 'Prasaath', 'Monicaa', 'Apr_28_2017/8:18', 'SITE'),
(19, 'Apr_30_17_11_43_WIN_20151115_194632.JPG', 'MY beauty', 'image/jpeg', '151020', 'Rakesh', 'Monicaa', 'Apr_30_2017/11:43', 'SITE'),
(20, 'Apr_30_17_11_47_Closer - The Chainsmokers (DJJOhAL.Com).mp3', 'pls listen to this', 'audio/mp3', '3946592', 'Monicaa', 'rakesh', 'Apr_30_2017/11:47', 'SENSE'),
(21, 'May_02_17_17_16_WINSEM2016-17_SWE410_LO_3429_10-JAN-2017_RM001_FIRST CLAS PDF WEBC# INTRO.pdf', 'temp file to downol0oad', 'application/pdf', '1022411', 'Rakesh', 'vishnu', 'May_02_2017/17:16', 'SITE'),
(22, 'May_17_17_6_14_IEEE word format.doc', 'IEEE format', 'application/msword', '57856', 'Jayasree', 'Jayasree', 'May_17_2017/6:14', 'SELECT'),
(23, 'May_17_17_6_14_Bucket Network report.docx', 'Report', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '621209', 'Jayasree', 'Jayasree', 'May_17_2017/6:14', 'SELECT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `ip` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `keyy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `ip`, `email`, `school`, `code`, `keyy`) VALUES
(39, 'Vishnu Prasaath', 'vishnu', '230dd9cb7f36d12a8531cf5700992e93', '::1', 'pvishnuprasaath@gmail.com', 'SITE', 1111, ''),
(40, 'Rakesh', 'rakesh', '*0', '::1', 'pvishnuprasaath@gmail.com', 'SITE', 1111, '3YHTEXZU5O0'),
(41, 'Monicaa', 'Monicaa', '$2y$07$192.168.43.31O0YHXESROSSxPITsXf/Cr8H2hudgxAYSfLj1lFYq', '192.168.43.31', 'pvishnuprasaath@gmail.com', 'SITE', 1111, 'O0YHXESRTAD'),
(42, 'Jayasree', 'Jayasree', '*0', '::1', 'pvishnuprasaath@gmail.com', 'SELECT', 1111, 'VTXIBP04O9G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

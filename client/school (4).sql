-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 06:40 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_no` int(10) NOT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `admin_name` varchar(30) NOT NULL,
  `phone_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendence`
--

CREATE TABLE `tbl_attendence` (
  `s_id` int(10) NOT NULL,
  `attendence` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_phone` varchar(10) NOT NULL,
  `c_comment` varchar(200) DEFAULT NULL,
  `c_status` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `c_name`, `c_email`, `c_phone`, `c_comment`, `c_status`, `date`) VALUES
(5000, 'annu', 'ann56@gmail.com', '9787680032', NULL, 0, '2018-06-03 18:30:00'),
(5001, 'erin jose', 'erin567@gmail.com', '9113456722', NULL, 1, '2017-06-12 18:30:00'),
(5002, 'amutha', 'amutha@gmail.com', '9878987987', NULL, 0, '2015-08-18 18:30:00'),
(12350, 'sd', 'sd@df', ' 0987', '', 0, '2018-06-29 17:51:05'),
(12351, 'dfgh', 'dfghj@g', ' cvbnm', '', 0, '2018-06-29 17:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_name` varchar(30) NOT NULL,
  `feedback_email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_name`, `feedback_email`, `message`, `status`, `date`) VALUES
(6000, 'maria', 'mariar@gmail.com', 'good facilities,good infrastructure', 0, '2018-06-11 18:30:00'),
(6001, 'blessy', 'blj@gmail.com', 'poor facilities', 1, '2017-09-04 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `s_id` int(10) DEFAULT NULL,
  `sub1` int(3) NOT NULL,
  `sub2` int(3) NOT NULL,
  `sub3` int(3) NOT NULL,
  `sub4` int(3) NOT NULL,
  `sub5` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdetails`
--

CREATE TABLE `tbl_pdetails` (
  `parent_no` int(10) NOT NULL,
  `p_id` int(10) DEFAULT NULL,
  `parent_name` varchar(25) NOT NULL,
  `s_id` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relation_sp`
--

CREATE TABLE `tbl_relation_sp` (
  `s_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `relation` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_relation_sp`
--

INSERT INTO `tbl_relation_sp` (`s_id`, `p_id`, `relation`, `status`) VALUES
(59, 66, 'father', 1),
(60, 67, 'father', 1),
(61, 65, 'father', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_no` int(10) NOT NULL,
  `t_id` int(10) DEFAULT NULL,
  `ff_name` varchar(25) NOT NULL,
  `ll_name` varchar(25) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `tdob` date NOT NULL,
  `taddress` varchar(40) NOT NULL,
  `tphone` varchar(15) NOT NULL,
  `category` varchar(20) NOT NULL,
  `yos` int(2) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studetails`
--

CREATE TABLE `tbl_studetails` (
  `student_no` int(10) NOT NULL,
  `s_id` int(10) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `class` varchar(6) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `father_job` varchar(30) NOT NULL,
  `mother_job` varchar(30) NOT NULL,
  `native` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_no`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `tbl_attendence`
--
ALTER TABLE `tbl_attendence`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `tbl_pdetails`
--
ALTER TABLE `tbl_pdetails`
  ADD PRIMARY KEY (`parent_no`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `tbl_relation_sp`
--
ALTER TABLE `tbl_relation_sp`
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_no`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `tbl_studetails`
--
ALTER TABLE `tbl_studetails`
  ADD PRIMARY KEY (`student_no`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12352;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6002;

--
-- AUTO_INCREMENT for table `tbl_pdetails`
--
ALTER TABLE `tbl_pdetails`
  MODIFY `parent_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600;

--
-- AUTO_INCREMENT for table `tbl_studetails`
--
ALTER TABLE `tbl_studetails`
  MODIFY `student_no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_attendence`
--
ALTER TABLE `tbl_attendence`
  ADD CONSTRAINT `tbl_attendence_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD CONSTRAINT `tbl_marks_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_pdetails`
--
ALTER TABLE `tbl_pdetails`
  ADD CONSTRAINT `tbl_pdetails_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD CONSTRAINT `tbl_staff_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_studetails`
--
ALTER TABLE `tbl_studetails`
  ADD CONSTRAINT `tbl_studetails_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

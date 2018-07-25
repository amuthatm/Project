-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 09:25 PM
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
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_designation` varchar(30) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_no`, `admin_id`, `admin_name`, `admin_designation`, `admin_email`, `status`) VALUES
(1, 70, 'maria', 'principal', 'maria@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE `tbl_assignment` (
  `ag_no` int(10) NOT NULL,
  `class` varchar(6) NOT NULL,
  `section` varchar(2) NOT NULL,
  `topic` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assignment`
--

INSERT INTO `tbl_assignment` (`ag_no`, `class`, `section`, `topic`, `date`) VALUES
(1, 'I', 'A', 'alpha', '2018-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `atn_no` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `f_Name` varchar(30) NOT NULL,
  `l_Name` varchar(30) NOT NULL,
  `class` varchar(6) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `attendance` int(3) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`atn_no`, `s_id`, `f_Name`, `l_Name`, `class`, `sec`, `attendance`, `date`) VALUES
(13, 171, 'nithya', 'devaraj', 'II', 'A', 100, '2018-07-19 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classteacher`
--

CREATE TABLE `tbl_classteacher` (
  `class` varchar(8) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `t_id` int(10) NOT NULL,
  `class_teacher` varchar(40) NOT NULL
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
(5000, 'annu', 'ann56@gmail.com', '9787680032', 'good', 0, '2018-06-03 18:30:00'),
(5001, 'erin jose', 'erin567@gmail.com', '9113456722', 'could make some improvements', 1, '2017-06-12 18:30:00'),
(5002, 'amutha', 'amutha@gmail.com', '9878987987', 'make it more attractive', 0, '2015-08-18 18:30:00'),
(12350, 'sd', 'sd@df', ' 0987', 'nice website', 0, '2018-06-29 17:51:05'),
(12351, 'manish', 'manish56@mail.com', ' 984752476', 'very good', 0, '2018-07-24 10:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `e_no` int(10) NOT NULL,
  `class` varchar(6) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`e_no`, `class`, `subject`, `date`) VALUES
(11, 'III', 'sub2', '2018-07-19'),
(12, 'I', 'sub2', '2018-07-25'),
(14, 'II', 'sub1', '2018-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE `tbl_fee` (
  `class` varchar(6) NOT NULL,
  `fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`class`, `fee`) VALUES
('I', 10000),
('II', 12000),
('III', 12000),
('IV', 12000),
('IX', 13000),
('V', 12000),
('VI', 13000),
('VII', 13000),
('VIII', 13000),
('X', 13500);

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
(1, 'rahul', 'rahul@gmail.com', 'good website', 0, '2018-07-15 18:30:00'),
(2, 'kiran', 'kiran@gmai.', 'very fast', 0, '2018-07-21 06:29:03'),
(3, 'manju', 'manju@gmail.com', ' good and fast', 0, '2018-07-24 10:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marks`
--

CREATE TABLE `tbl_marks` (
  `m_no` int(11) NOT NULL,
  `s_id` int(10) NOT NULL,
  `class` varchar(6) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `sub1` int(3) NOT NULL DEFAULT '0',
  `sub2` int(3) NOT NULL DEFAULT '0',
  `sub3` int(3) NOT NULL DEFAULT '0',
  `sub4` int(3) NOT NULL DEFAULT '0',
  `sub5` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marks`
--

INSERT INTO `tbl_marks` (`m_no`, `s_id`, `class`, `sec`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES
(1, 159, 'II', 'A', 90, 95, 65, 98, 100),
(8, 173, 'II', 'A', 45, 95, 65, 98, 100),
(10, 171, 'II', 'A', 100, 95, 65, 98, 100),
(11, 190, 'II', 'A', 45, 95, 25, 28, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdetails`
--

CREATE TABLE `tbl_pdetails` (
  `parent_no` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `parent_name` varchar(25) NOT NULL,
  `s_id` int(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `pemail` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdetails`
--

INSERT INTO `tbl_pdetails` (`parent_no`, `p_id`, `parent_name`, `s_id`, `phone`, `pemail`, `status`) VALUES
(2, 155, 'roj', 194, '995684325', 'malt@gmail.com', 1);

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
(63, 65, 'father', 1),
(64, 66, 'father', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_no` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `ff_name` varchar(30) NOT NULL,
  `ll_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `tdob` date NOT NULL,
  `taddress` varchar(50) NOT NULL,
  `tphone` varchar(15) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `yos` int(2) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_no`, `t_id`, `ff_name`, `ll_name`, `gender`, `tdob`, `taddress`, `tphone`, `temail`, `category`, `yos`, `salary`) VALUES
(1, 216, 'remya', 'prakash', 'Female', '1978-03-29', 'lojygvfc', '94445854455', 'rem@mail.com', 'Teaching', 8, 120000),
(2, 217, 'lisha', 'pn', 'Female', '2018-07-02', 'hhhhhh', '5660939020', 'lisha@mail.com', 'Teaching', 6, 120000),
(3, 218, 'lomin', 's', 'Female', '1978-03-22', 'lojygvfcjhh', '9444585447', 'lomi@mail.com', 'Teaching', 7, 100000),
(4, 219, 'reshma', 'prasad', 'Female', '1987-07-03', 'jkllkjyggg', '9444585449', 'resham@90.com', 'Teaching', 5, 120000);

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
  `email` varchar(50) DEFAULT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `class` varchar(6) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `father_job` varchar(30) NOT NULL,
  `mother_job` varchar(30) NOT NULL,
  `native` varchar(20) NOT NULL,
  `fee` int(10) NOT NULL,
  `fee_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studetails`
--

INSERT INTO `tbl_studetails` (`student_no`, `s_id`, `first_name`, `last_name`, `dob`, `gender`, `address`, `phone_no`, `email`, `father_name`, `mother_name`, `class`, `sec`, `father_job`, `mother_job`, `native`, `fee`, `fee_status`) VALUES
(9, 167, 'ggg', 'hhh', '2018-07-20', 'F', 'ggg', '9444585449', 'rajeev@gmail.com', 'ggg', 'ddd', 'X', 'A', 'dffff', 'gg', 'Bihar', 13500, 0),
(19, 184, 'ff', 'hh', '2018-07-21', 'F', 'ggg', '94445854455', 'jjjj@gmail.com', 'ggg', 'fff', 'III', 'A', 'supervisor', 'housewife', 'Kerala', 12000, 0),
(24, 189, 'jomon', 'george', '2018-07-19', 'm', 'ooppee', '94445854450', 'maria@eee', 'george', 'sini', 'II', 'A', 'officer', 'housemaid', 'Kerala', 12000, 0),
(27, 192, 'mariaa', 'ronee', '2018-12-20', 'F', 'fddddg', '8943208800', 'maria@gmail.com', 'ronee', 'sindhuu', 'II', 'A', 'officerr', 'housewifee', 'Kerala', 12000, 0),
(29, 194, 'mini', 'sivakumar', '2018-07-21', 'F', 'hillpalace', '94445854455', 'mini@gmail.com', 'sivakumar', 'sini', 'II', 'A', 'officer', 'housewife', 'Kerala', 12000, 0),
(40, 205, 'reshma', 'mol', '1996-08-29', 'F', 'eeeeeee', '94445854455', 'nn@kk', 'moleeee', 'mily', 'VI', 'A', 'supervisor', 'homemaker', 'Kerala', 13000, 0),
(41, 220, 'manu', 'vp', '1993-04-22', 'm', 'fffffff', '3409376522', 'man@gmail.com', 'vinod', 'kunjol', 'III', 'A', 'supervisor', 'housewife', 'Kerala', 12000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub`
--

CREATE TABLE `tbl_sub` (
  `class` varchar(8) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `sub` varchar(30) NOT NULL,
  `t_id` int(10) NOT NULL,
  `teacher` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `sub_id` int(10) NOT NULL,
  `sub_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`sub_id`, `sub_name`) VALUES
(1, 'sub1'),
(2, 'sub2'),
(3, 'sub3'),
(4, 'sub4'),
(5, 'sub5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timetable`
--

CREATE TABLE `tbl_timetable` (
  `t_no` int(10) NOT NULL,
  `class` varchar(8) NOT NULL,
  `sec` varchar(2) NOT NULL,
  `day` varchar(30) NOT NULL,
  `p_1` varchar(40) NOT NULL,
  `t_1` varchar(30) NOT NULL,
  `p_2` varchar(40) NOT NULL,
  `t_2` varchar(40) NOT NULL,
  `p_3` varchar(40) NOT NULL,
  `t_3` varchar(40) NOT NULL,
  `p_4` varchar(40) NOT NULL,
  `t_4` varchar(40) NOT NULL,
  `p_5` varchar(40) NOT NULL,
  `t_5` varchar(40) NOT NULL,
  `p_6` varchar(40) NOT NULL,
  `t_6` varchar(40) NOT NULL,
  `p_7` varchar(40) NOT NULL,
  `t_7` varchar(40) NOT NULL,
  `p_8` varchar(40) NOT NULL,
  `t_8` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_timetable`
--

INSERT INTO `tbl_timetable` (`t_no`, `class`, `sec`, `day`, `p_1`, `t_1`, `p_2`, `t_2`, `p_3`, `t_3`, `p_4`, `t_4`, `p_5`, `t_5`, `p_6`, `t_6`, `p_7`, `t_7`, `p_8`, `t_8`) VALUES
(1, 'I', 'A', 'monday', 'eng', 'aaa', 'maths', 'ccc', 'hindi', 'bbb', 'hindi', 'bbb', 'science', 'ddd', 'w.e', 'wem', 'eng', 'aaa', 'maths', 'ccc'),
(2, 'I', 'A', 'tuesday', 'science', 'ddd', 'maths', 'ccc', 'hindi', 'bbb', 'maths', 'ccc', 'eng', 'aaa', 'sci', 'ddd', 'hindi', 'bbb', 'eng', 'aaa'),
(3, 'I', 'A', 'wednesday', 'maths', 'ccc', 'sci', 'ddd', 'eng', 'aaa', 'eng', 'aaa', 'maths', 'ccc', 'hindi', 'bbb', 'w.e', 'wem', 'games', 'pt'),
(4, 'I', 'A', 'thursday', 'hindi', 'bbb', 'sci', 'ddd', 'maths', 'ccc', 'eng', 'aaa', 'games', 'pt', 'hindi', 'bbb', 'sci', 'ddd', 'eng', 'aaa'),
(5, 'I', 'B', 'monday', 'carrot', 'sneha', 'eng', '', 'eng', 'ppp', 'maths', 'rrr', 'sci', 'sss', 'hindi', 'qqq', 'sci', 'sss', 'w.e', 'wem'),
(6, 'I', 'B', 'tuesday', 'hindi', 'qqq', 'maths', 'rrr', 'eng', 'ppp', 'eng', 'ppp', 'sci', 'sss', 'games', 'pt', 'maths', 'rrr', 'hindi', 'qqq');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `type`, `status`) VALUES
(64, 'sneha', 'sneha', 'student', 1),
(70, 'maria@1997', 'maria', 'admin', 1),
(131, 'jeffrin', 'mmm', 'student', 1),
(151, 'nithya', 'nithi', 'student', 1),
(152, 'jin', 'jin', 'student', 1),
(153, 'abc', 'uuuu', 'student', 1),
(154, 'aaa', 'jjjj', 'student', 1),
(155, 'ppp', 'ppp', 'parent', 1),
(159, 'maria', 'mar', 'student', 1),
(160, 'nithya', 'nithya123', 'student', 1),
(161, 'nithya', 'nithya123', 'student', 1),
(162, 'nithi', 'nith123', 'student', 1),
(167, 'ff', 'fff', 'student', 1),
(171, 'www', 'eeeeeeeeee', 'student', 0),
(173, 'ggg', 'ggg', 'student', 1),
(174, 'kiran', 'kiran', 'student', 1),
(175, 'kiran', 'ki', 'student', 1),
(176, 'abc', 'aaaa', 'student', 1),
(177, 'ff', 'ggggg', 'student', 1),
(178, 'ff', 'ggggg', 'student', 1),
(179, 'rahul', 'rahul', 'student', 1),
(180, 'rahul', 'rahul', 'student', 1),
(181, 'kiran', 'kiiii', 'student', 1),
(182, 'kiran', 'kiiii', 'student', 1),
(183, 'hhh', 'gggg', 'student', 1),
(184, 'xxxx', 'hhhh', 'student', 1),
(185, 'xxxx', 'hhhh', 'student', 1),
(186, 'xxxx', 'hhhh', 'student', 1),
(187, 'hhh', 'hhh', 'student', 1),
(188, 'hhh', 'hhh', 'student', 1),
(189, 'kkk', 'iiii', 'student', 1),
(190, 'mmm', 'iiopu', 'student', 1),
(191, 'mmm', 'iiopu', 'student', 1),
(192, 'mmmll', 'kkkkk', 'student', 1),
(193, 'mmmll', 'kkkkk', 'student', 1),
(194, 'mini', 'mini123', 'student', 1),
(195, 'piytr', 'piyt', 'student', 1),
(196, 'piytr', 'piyt', 'student', 1),
(197, 'piytr', 'ppp', 'student', 1),
(198, 'iiiiiiiiiiiiiiiiii', 'uuuuuuuuuuu', 'student', 1),
(199, 'iiiiiiiiiiiiiiiiii', 'uuuuuuuuuuu', 'student', 1),
(200, 'opooiuuuuy', 'tynbredbb', 'student', 1),
(201, 'opooiuuuuy', 'tynbredbb', 'student', 1),
(202, 'opooiuuuuy', 'tynbredbb', 'student', 1),
(203, 'opooiuuuuy', 'tynbredbb', 'student', 1),
(204, 'hari', 'hari', 'student', 1),
(205, 'abcder', 'dcert', 'student', 1),
(216, 'remya', 'remya', 'Teaching', 1),
(217, 'lisha', 'lisha', 'Teaching', 1),
(218, 'lomi', 'lomi', 'Teaching', 1),
(219, 'reshma', 'reshma', 'Teaching', 1),
(220, 'mann', 'mann', 'student', 0),
(223, 'vinu', 'vinu', 'parent', 1),
(224, 'moni', 'moni', 'parent', 0);

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
-- Indexes for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  ADD PRIMARY KEY (`ag_no`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`atn_no`),
  ADD UNIQUE KEY `s_id` (`s_id`) USING BTREE;

--
-- Indexes for table `tbl_classteacher`
--
ALTER TABLE `tbl_classteacher`
  ADD UNIQUE KEY `t_id` (`t_id`),
  ADD UNIQUE KEY `class_teacher` (`class_teacher`),
  ADD KEY `class` (`class`) USING BTREE;

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD UNIQUE KEY `c_email` (`c_email`,`c_phone`),
  ADD UNIQUE KEY `c_name` (`c_name`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`e_no`);

--
-- Indexes for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  ADD UNIQUE KEY `class` (`class`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `feedback_email` (`feedback_email`);

--
-- Indexes for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD PRIMARY KEY (`m_no`),
  ADD UNIQUE KEY `s_id` (`s_id`) USING BTREE;

--
-- Indexes for table `tbl_pdetails`
--
ALTER TABLE `tbl_pdetails`
  ADD PRIMARY KEY (`parent_no`),
  ADD UNIQUE KEY `s_id` (`s_id`),
  ADD KEY `p_id` (`p_id`) USING BTREE;

--
-- Indexes for table `tbl_relation_sp`
--
ALTER TABLE `tbl_relation_sp`
  ADD UNIQUE KEY `s_id` (`s_id`),
  ADD UNIQUE KEY `s_id_2` (`s_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_no`),
  ADD UNIQUE KEY `t_id_2` (`t_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `tbl_studetails`
--
ALTER TABLE `tbl_studetails`
  ADD PRIMARY KEY (`student_no`),
  ADD UNIQUE KEY `s_id` (`s_id`) USING BTREE,
  ADD UNIQUE KEY `s_id_2` (`s_id`),
  ADD KEY `first_name` (`first_name`);

--
-- Indexes for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tbl_timetable`
--
ALTER TABLE `tbl_timetable`
  ADD PRIMARY KEY (`t_no`);

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
  MODIFY `admin_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  MODIFY `ag_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `atn_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12352;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `e_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  MODIFY `m_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_pdetails`
--
ALTER TABLE `tbl_pdetails`
  MODIFY `parent_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_studetails`
--
ALTER TABLE `tbl_studetails`
  MODIFY `student_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD CONSTRAINT `tbl_attendance_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_marks`
--
ALTER TABLE `tbl_marks`
  ADD CONSTRAINT `tbl_marks_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `tbl_user` (`id`);

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

--
-- Constraints for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD CONSTRAINT `tbl_sub_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `tbl_subject` (`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

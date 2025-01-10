-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 11:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academic_record_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_details_table`
--

CREATE TABLE `academic_details_table` (
  `admission_year` int(11) NOT NULL,
  `ssc_marks` decimal(4,1) NOT NULL,
  `hsc_diploma_marks` decimal(4,1) NOT NULL,
  `Acad_id` int(11) NOT NULL,
  `ssc_year` int(11) NOT NULL,
  `hsc_year` int(11) NOT NULL,
  `current_sem` varchar(20) NOT NULL,
  `current_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_details_table`
--

INSERT INTO `academic_details_table` (`admission_year`, `ssc_marks`, `hsc_diploma_marks`, `Acad_id`, `ssc_year`, `hsc_year`, `current_sem`, `current_year`) VALUES
(2019, '100.0', '100.0', 1211, 2017, 2019, 'Sem-1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `grade_table`
--

CREATE TABLE `grade_table` (
  `user_id` varchar(20) NOT NULL,
  `SSC_marks` decimal(4,1) NOT NULL,
  `HSC_marks` decimal(4,1) NOT NULL,
  `Sem1` decimal(2,1) NOT NULL,
  `Sem2` decimal(2,1) NOT NULL,
  `Sem3` decimal(2,1) NOT NULL,
  `Sem4` decimal(2,1) NOT NULL,
  `Sem5` decimal(2,1) NOT NULL,
  `Sem6` decimal(2,1) NOT NULL,
  `Sem7` decimal(2,1) NOT NULL,
  `Sem8` decimal(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grade_table`
--

INSERT INTO `grade_table` (`user_id`, `SSC_marks`, `HSC_marks`, `Sem1`, `Sem2`, `Sem3`, `Sem4`, `Sem5`, `Sem6`, `Sem7`, `Sem8`) VALUES
('rutvija', '100.0', '100.0', '9.9', '9.9', '9.9', '9.9', '9.9', '9.9', '9.9', '9.9');

-- --------------------------------------------------------

--
-- Table structure for table `internship_table`
--

CREATE TABLE `internship_table` (
  `int_id` int(11) NOT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_id` varchar(20) DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Faculty_guide` varchar(20) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internship_table`
--

INSERT INTO `internship_table` (`int_id`, `duration`, `status`, `user_id`, `Company_Name`, `Faculty_guide`, `Role`) VALUES
(63524, '3 months', 'completed', 'rutvija', 'Microsoft', 'Noone', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `project_projectby`
--

CREATE TABLE `project_projectby` (
  `Project_id` varchar(20) NOT NULL,
  `Project_By` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_projectby`
--

INSERT INTO `project_projectby` (`Project_id`, `Project_By`) VALUES
('P13678', 'Rutvij A'),
('P13678', 'Kiran Bera'),
('P13678', 'Ajit Divakaran'),
('P13678', 'Akshay Sohani');

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE `project_table` (
  `Project_Id` varchar(20) NOT NULL,
  `Description` varchar(70) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date_of_completion` varchar(30) NOT NULL,
  `Guide` varchar(20) NOT NULL,
  `Funding` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_table`
--

INSERT INTO `project_table` (`Project_Id`, `Description`, `Title`, `Date_of_completion`, `Guide`, `Funding`) VALUES
('P13678', 'Ghefp;eghsoaeghws', 'Mini Project', 'Never', 'Self Guide', 'Koi funding nahi karta khud ka khud karna padta hai');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE `registration_table` (
  `Reg_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `Branch` varchar(50) NOT NULL,
  `phn_no` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`Reg_Id`, `Name`, `Address`, `Email`, `PASSWORD`, `Branch`, `phn_no`) VALUES
(15070, 'Rutvij A', 'Matunga', 'rutvijambodkar@gmail.com', 'ru!v!j', 'Electronics', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_internship_does`
--

CREATE TABLE `user_internship_does` (
  `user_id` varchar(20) NOT NULL,
  `int_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_internship_does`
--

INSERT INTO `user_internship_does` (`user_id`, `int_id`) VALUES
('rutvija', 63524);

-- --------------------------------------------------------

--
-- Table structure for table `user_project_workson`
--

CREATE TABLE `user_project_workson` (
  `user_id` varchar(20) NOT NULL,
  `Project_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_project_workson`
--

INSERT INTO `user_project_workson` (`user_id`, `Project_id`) VALUES
('rutvija', 'P13678');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` varchar(10) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `Acad_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `reg_id`, `Acad_id`) VALUES
('rutvija', 15070, 1211);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_details_table`
--
ALTER TABLE `academic_details_table`
  ADD KEY `Acad_id` (`Acad_id`);

--
-- Indexes for table `grade_table`
--
ALTER TABLE `grade_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `internship_table`
--
ALTER TABLE `internship_table`
  ADD PRIMARY KEY (`int_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_projectby`
--
ALTER TABLE `project_projectby`
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `project_table`
--
ALTER TABLE `project_table`
  ADD PRIMARY KEY (`Project_Id`);

--
-- Indexes for table `registration_table`
--
ALTER TABLE `registration_table`
  ADD PRIMARY KEY (`Reg_Id`);

--
-- Indexes for table `user_internship_does`
--
ALTER TABLE `user_internship_does`
  ADD PRIMARY KEY (`user_id`,`int_id`),
  ADD KEY `int_id` (`int_id`);

--
-- Indexes for table `user_project_workson`
--
ALTER TABLE `user_project_workson`
  ADD PRIMARY KEY (`user_id`,`Project_id`),
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`Acad_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_details_table`
--
ALTER TABLE `academic_details_table`
  ADD CONSTRAINT `academic_details_table_ibfk_1` FOREIGN KEY (`Acad_id`) REFERENCES `user_table` (`Acad_id`);

--
-- Constraints for table `grade_table`
--
ALTER TABLE `grade_table`
  ADD CONSTRAINT `grade_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `internship_table`
--
ALTER TABLE `internship_table`
  ADD CONSTRAINT `internship_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`);

--
-- Constraints for table `project_projectby`
--
ALTER TABLE `project_projectby`
  ADD CONSTRAINT `project_projectby_ibfk_1` FOREIGN KEY (`Project_id`) REFERENCES `project_table` (`Project_Id`);

--
-- Constraints for table `user_internship_does`
--
ALTER TABLE `user_internship_does`
  ADD CONSTRAINT `user_internship_does_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `user_internship_does_ibfk_2` FOREIGN KEY (`int_id`) REFERENCES `internship_table` (`int_id`);

--
-- Constraints for table `user_project_workson`
--
ALTER TABLE `user_project_workson`
  ADD CONSTRAINT `user_project_workson_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`),
  ADD CONSTRAINT `user_project_workson_ibfk_2` FOREIGN KEY (`Project_id`) REFERENCES `project_table` (`Project_Id`);

--
-- Constraints for table `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `registration_table` (`Reg_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2017 at 04:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iseedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userlevel` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `confirmationKey` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `userlevel`) VALUES
(1, '11Receli', 'qwerty', 'clairerenosa@gmail.com', 'employee'),
(2, '12Receli', 'qwerty', 'clairerenosa@gmail.com', 'employer');

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `years` varchar(100) NOT NULL,
  `quote` varchar(1000) NOT NULL,
  `course` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employerinfo`
--

CREATE TABLE `employerinfo` (
  `id` int(11) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `companytype` varchar(50) NOT NULL,
  `companyaddress` varchar(200) NOT NULL,
  `companycontact` varchar(50) NOT NULL,
  `companyemail` varchar(50) NOT NULL,
  `companyfounder` varchar(50) NOT NULL,
  `companyyear` varchar(4) NOT NULL,
  `hrname` varchar(50) NOT NULL,
  `hrcontact` varchar(50) NOT NULL,
  `hremail` varchar(50) NOT NULL,
  `positions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employerinfo`
--

INSERT INTO `employerinfo` (`id`, `companyname`, `companytype`, `companyaddress`, `companycontact`, `companyemail`, `companyfounder`, `companyyear`, `hrname`, `hrcontact`, `hremail`, `positions`) VALUES
(1, 'DYCI', 'School', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Teacher, Manager, Consultant'),
(16, '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', '', '', '', '', '', '', ''),
(19, '', '', '', '', '', '', '', '', '', '', ''),
(20, 'sadsa', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '', '', '', '', '', '', '', ''),
(23, 'a', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up'),
(24, 'DYCI', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up'),
(25, 'DYCI', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up'),
(26, 'DYCI', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up'),
(27, 'DYCI', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up'),
(28, 'DYCI', 'Afghanistan', 'Wakas, Bocaue, Bulacan', '044-653-5555', 'dycihs@gmail.com', 'Marciano Yanga', '1960', 'Mark Smith', '+639980498448', 'jfk@gmail.com', 'Start Up');

-- --------------------------------------------------------

--
-- Table structure for table `positionlist`
--

CREATE TABLE `positionlist` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typelist`
--

CREATE TABLE `typelist` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `positions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employerinfo`
--
ALTER TABLE `employerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positionlist`
--
ALTER TABLE `positionlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typelist`
--
ALTER TABLE `typelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employerinfo`
--
ALTER TABLE `employerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `positionlist`
--
ALTER TABLE `positionlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `typelist`
--
ALTER TABLE `typelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `industrylist` (
 `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
 `industry` varchar(100) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `idxIndustry` (`industry`)
) ENGINE=InnoDB AUTO_INCREMENT=8;

CREATE TABLE `industrysubcategorylist` (
 `id` int(6) unsigned NOT NULL,
 `industrysubcategory` varchar(100) NOT NULL,
 `pk_id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`pk_id`),
 KEY `id` (`id`),
 CONSTRAINT `fkIndustrydubcategory` FOREIGN KEY (`id`) REFERENCES `industrylist` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22;


CREATE TABLE `personalinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `citizenship` varchar(20) DEFAULT NULL,
 `status` varchar(20) DEFAULT NULL,
 `age` int(10) DEFAULT NULL,
 `gender` varchar(10) DEFAULT NULL,
 `address` varchar(200) DEFAULT NULL,
 `fk_id` int(11) NOT NULL,
 `birthday` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_id` (`fk_id`),
 CONSTRAINT `fkPersonalInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20;

CREATE TABLE `educationalbackgroundinfo` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `fk_id` int(11) NOT NULL,
 `schoolhs` varchar(100) DEFAULT NULL,
 `datehs` varchar(100) DEFAULT NULL,
 `degree` varchar(100) DEFAULT NULL,
 `schoolcol` varchar(100) DEFAULT NULL,
 `datecol` varchar(100) DEFAULT NULL,
 `certifications` varchar(100) DEFAULT NULL,
 `seminars` varchar(100) DEFAULT NULL,
 `gwa` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_id` (`fk_id`),
 CONSTRAINT `fk_educationBackgroundInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5;


	
CREATE TABLE `technicalskillinfo` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fk_id` int(11) NOT NULL,
 `industryid` int(6) unsigned NOT NULL,
 `jobid` int(11) NOT NULL,
 `specialization` varchar(1000) DEFAULT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_id` (`fk_id`),
 KEY `industryid` (`industryid`,`jobid`),
 KEY `fk_technicalSkillInfo_industrysubccategory` (`jobid`),
 CONSTRAINT `fk_technicalSkillInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`),
 CONSTRAINT `fk_technicalSkillInfo_industrylist` FOREIGN KEY (`industryid`) REFERENCES `industrylist` (`id`),
 CONSTRAINT `fk_technicalSkillInfo_industrysubccategory` FOREIGN KEY (`jobid`) REFERENCES `industrysubcategorylist` (`pk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18;


INSERT INTO `industrylist` (`id`, `industry`) VALUES
(4, 'Accounting'),
(3, 'Admin / Human Resources'),
(5, 'Banking / Finance'),
(6, 'Building / Construction');

INSERT INTO `industrysubcategorylist` (`id`, `industrysubcategory`, `pk_id`) VALUES
(4, 'Chief Accountant', 1),
(4, 'Financial Analyst', 2),
(4, 'Consulting', 3),
(4, 'Taxation', 4),
(4, 'Treasurer', 5),
(3, 'HR Director/Manager', 6),
(3, 'HR Officer', 7),
(3, 'Training and Development', 8),
(3, 'Receptionist', 9),
(5, 'Credit Analyst', 10),
(5, 'Corporate Banking', 11),
(5, 'Corporate Finance', 12),
(5, 'Investment', 13),
(5, 'Retail Banking', 14),
(6, 'Architectural', 15),
(6, 'Civil/Structural', 16),
(7, 'DBA', 17),
(7, 'Hardware', 18),
(7, 'Networking', 19),
(7, 'Software Development', 20),
(7, 'Project Management', 21);

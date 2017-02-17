-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 03:44 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
  `confirmationKey` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `userlevel`, `status`, `confirmationKey`) VALUES
(1, '11Receli', 'qwerty', 'clairerenosa@gmail.com', 'employee', '', NULL),
(2, '12Receli', 'qwerty', 'clairerenosa@gmail.com', 'employer', '', NULL),
(3, 'Claire12', 'qwerty', 'clairerenosa@gmail.com', '', 'tentative', '5jdzvotczxwlo8m'),
(4, 'Claire11', 'qwerty', 'clairerenosa@gmail.com', '', 'active', ''),
(5, 'Claire11', 'qwerty', 'clairerenosa@gmail.com', '', 'tentative', '40a68q5llu1wi2j'),
(6, 'Claire57', 'qwerty', 'clairerenosa@gmail.com', '', 'tentative', 'gju7o3nmsgorc13');

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
  `graduation` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `achievements`, `work`, `company`, `years`, `quote`, `course`, `graduation`, `image`) VALUES
(1, 'Ma. Nerissa M. Nicolas', 'Magna cum laude, One of the Top Outstanding Students of the Philippines and World Robot Olympiad 201', 'Science Research Specialist I\r\n', 'Department of Science and Technology - Science Education Institute\r\n', '3 months', '"Don''t tell me that the sky is the limit for there are footsteps on the moon."', 'Bachelor of Science in Computer Science', '2015', 'resources/images/users/01.jpg'),
(2, 'Gladys Leigh P. Malana', 'Magna cum laude', 'Management Trainee', 'Philippine National Bank\r\n', '7 months', '"Nothing great is created suddenly."', 'Bachelor of Science in Business Administration Major in Financial Management\r\n', '2016', 'resources/images/users/02.jpg'),
(3, 'Lemuel Francisco', 'World Robot Olympiad 2013 3rd Placer', 'Web and Mobile Developer', 'Ideo Studios\r\n', '2 years', '"Don''t say you can''t if you''ve never even tried."', 'Bachelor of Science in Information Technology', '2013', 'resources/images/users/03.jpg'),
(4, 'Renz Jonnier P. Nolasco\r\n', 'Board Licensure Examination Passer for Psychologist and Psychometrician ', 'Learning and Development Assitant\r\n', 'Boardwalk Business Ventures Inc.\r\n', '', '"If you can dream it, then you can do it."', 'Artium Baccalaureus Psychology', '2016', 'resources/images/users/04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `applicantrecords`
--

CREATE TABLE `applicantrecords` (
  `id` int(11) NOT NULL,
  `accountid` int(11) NOT NULL,
  `firstname` varchar(1000) NOT NULL,
  `middlename` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `graduation` int(4) NOT NULL,
  `studentid` int(8) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicantrecords`
--

INSERT INTO `applicantrecords` (`id`, `accountid`, `firstname`, `middlename`, `lastname`, `department`, `graduation`, `studentid`, `status`, `contact`) VALUES
(1, 3, 'Claire', 'Morales', 'Reñosa', 'College of Computer Studies', 2017, 21316219, '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `applicant_view`
--
CREATE TABLE `applicant_view` (
`id` int(11)
,`email` varchar(50)
,`username` varchar(50)
,`userlevel` varchar(50)
,`firstname` varchar(1000)
,`middlename` varchar(1000)
,`lastname` varchar(1000)
,`contact` varchar(15)
,`department` varchar(1000)
,`graduation` int(4)
,`status` varchar(1000)
,`studentid` int(8)
);

-- --------------------------------------------------------

--
-- Table structure for table `educationalbackgroundinfo`
--

CREATE TABLE `educationalbackgroundinfo` (
  `id` int(11) UNSIGNED NOT NULL,
  `fk_id` int(11) NOT NULL,
  `schoolhs` varchar(100) DEFAULT NULL,
  `datehs` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `schoolcol` varchar(100) DEFAULT NULL,
  `datecol` varchar(100) DEFAULT NULL,
  `certifications` varchar(100) DEFAULT NULL,
  `seminars` varchar(100) DEFAULT NULL,
  `gwa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educationalbackgroundinfo`
--

INSERT INTO `educationalbackgroundinfo` (`id`, `fk_id`, `schoolhs`, `datehs`, `degree`, `schoolcol`, `datecol`, `certifications`, `seminars`, `gwa`) VALUES
(1, 3, 'DYCI', '2000-2001', 'BSCS', 'DYCI', '2005-2006', 'MS Office Specialist', 'Programming Seminar', '1.11');

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
-- Table structure for table `industrylist`
--

CREATE TABLE `industrylist` (
  `id` int(6) UNSIGNED NOT NULL,
  `industry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrylist`
--

INSERT INTO `industrylist` (`id`, `industry`) VALUES
(4, 'Accounting'),
(3, 'Admin / Human Resources'),
(5, 'Banking / Finance'),
(6, 'Building / Construction'),
(7, 'Technology Firm');

-- --------------------------------------------------------

--
-- Table structure for table `industrysubcategorylist`
--

CREATE TABLE `industrysubcategorylist` (
  `id` int(6) UNSIGNED NOT NULL,
  `industrysubcategory` varchar(100) NOT NULL,
  `pk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industrysubcategorylist`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE `personalinfo` (
  `id` int(11) NOT NULL,
  `citizenship` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `fk_id` int(11) NOT NULL,
  `birthday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `technicalskillinfo`
--

CREATE TABLE `technicalskillinfo` (
  `id` int(11) NOT NULL,
  `fk_id` int(11) NOT NULL,
  `industryid` int(6) UNSIGNED NOT NULL,
  `jobid` int(11) NOT NULL,
  `specialization` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technicalskillinfo`
--

INSERT INTO `technicalskillinfo` (`id`, `fk_id`, `industryid`, `jobid`, `specialization`) VALUES
(1, 4, 6, 15, '');

-- --------------------------------------------------------

--
-- Table structure for table `typelist`
--

CREATE TABLE `typelist` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `positions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `applicant_view`
--
DROP TABLE IF EXISTS `applicant_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `applicant_view`  AS  (select `accounts`.`id` AS `id`,`accounts`.`email` AS `email`,`accounts`.`username` AS `username`,`accounts`.`userlevel` AS `userlevel`,`applicantrecords`.`firstname` AS `firstname`,`applicantrecords`.`middlename` AS `middlename`,`applicantrecords`.`lastname` AS `lastname`,`applicantrecords`.`contact` AS `contact`,`applicantrecords`.`department` AS `department`,`applicantrecords`.`graduation` AS `graduation`,`applicantrecords`.`status` AS `status`,`applicantrecords`.`studentid` AS `studentid` from (`accounts` join `applicantrecords` on((`accounts`.`id` = `applicantrecords`.`accountid`)))) ;

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
-- Indexes for table `applicantrecords`
--
ALTER TABLE `applicantrecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educationalbackgroundinfo`
--
ALTER TABLE `educationalbackgroundinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- Indexes for table `employerinfo`
--
ALTER TABLE `employerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrylist`
--
ALTER TABLE `industrylist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idxIndustry` (`industry`);

--
-- Indexes for table `industrysubcategorylist`
--
ALTER TABLE `industrysubcategorylist`
  ADD PRIMARY KEY (`pk_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`);

--
-- Indexes for table `positionlist`
--
ALTER TABLE `positionlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicalskillinfo`
--
ALTER TABLE `technicalskillinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id` (`fk_id`),
  ADD KEY `industryid` (`industryid`,`jobid`),
  ADD KEY `fk_technicalSkillInfo_industrysubccategory` (`jobid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `applicantrecords`
--
ALTER TABLE `applicantrecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `educationalbackgroundinfo`
--
ALTER TABLE `educationalbackgroundinfo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employerinfo`
--
ALTER TABLE `employerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `industrylist`
--
ALTER TABLE `industrylist`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `industrysubcategorylist`
--
ALTER TABLE `industrysubcategorylist`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positionlist`
--
ALTER TABLE `positionlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `technicalskillinfo`
--
ALTER TABLE `technicalskillinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `typelist`
--
ALTER TABLE `typelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `educationalbackgroundinfo`
--
ALTER TABLE `educationalbackgroundinfo`
  ADD CONSTRAINT `fk_educationBackgroundInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `industrysubcategorylist`
--
ALTER TABLE `industrysubcategorylist`
  ADD CONSTRAINT `fkIndustrydubcategory` FOREIGN KEY (`id`) REFERENCES `industrylist` (`id`);

--
-- Constraints for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD CONSTRAINT `fkPersonalInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`);

--
-- Constraints for table `technicalskillinfo`
--
ALTER TABLE `technicalskillinfo`
  ADD CONSTRAINT `fk_technicalSkillInfo` FOREIGN KEY (`fk_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `fk_technicalSkillInfo_industrylist` FOREIGN KEY (`industryid`) REFERENCES `industrylist` (`id`),
  ADD CONSTRAINT `fk_technicalSkillInfo_industrysubccategory` FOREIGN KEY (`jobid`) REFERENCES `industrysubcategorylist` (`pk_id`);



CREATE TABLE `jobadds` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `location` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `yrsofexp` varchar(100) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `contactno` varchar(100) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `skills` text NOT NULL,
  `fk_employer` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `jobadds`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `jobadds`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

INSERT INTO `jobadds` (`id`, `title`, `description`, `location`, `course`, `yrsofexp`, `salary`, `contactno`, `address`, `skills`, `fk_employer`) VALUES
(1, 'Senior Java Programmer', 'Delivering elegant and scalable solutions in Java', 'Makati', 'Computer Science', '5', '120000', '2871560', 'Legaspi Village Makati City', 'Object oriented software development in Java.\r\nExperience building low latency and highly available systems.\r\nExperience in multi-threaded and distributed application programming', 2),
(4, 'HR Director/Manager', 'Will lead the team in hiring finest people in call center industry.', 'Ortigas', 'Psychologist', '5', '50000', '09194776900', 'Tektite Bldg. Ortigas Center', 'Leadership and resourceful hr personnel\r\n<br/>A One recruiting skill\r\n', 1);

CREATE TABLE `jobalertpreferences` (
  `id` int(11) UNSIGNED NOT NULL,
  `fk_id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `salary` float UNSIGNED DEFAULT NULL,
  `yrsofexp` int(4) UNSIGNED DEFAULT NULL,
  `industryid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `jobalertpreferences`
  ADD PRIMARY KEY (`id`);
  
  
  ALTER TABLE `jobalertpreferences`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

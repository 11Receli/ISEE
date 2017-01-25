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

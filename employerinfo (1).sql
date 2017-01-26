-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 09:26 PM
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
(31, 'DYCI', 'Afghanistan', 'Manila', '555', 'clairerenosa@gmail.com', 'Yanga', '1960', 'JFK', '247', 'clairerenosa@gmail.com', 'Start Up');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employerinfo`
--
ALTER TABLE `employerinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employerinfo`
--
ALTER TABLE `employerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

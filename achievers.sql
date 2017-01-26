-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2017 at 09:24 PM
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
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `achievements` varchar(1000) NOT NULL,
  `work` varchar(1000) NOT NULL,
  `company` varchar(1000) NOT NULL,
  `years` varchar(1000) NOT NULL,
  `quote` varchar(1000) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `graduation` varchar(1000) NOT NULL,
  `image` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `achievements`, `work`, `company`, `years`, `quote`, `course`, `graduation`, `image`) VALUES
(1, 'Ma. Nerissa M. Nicolas', 'Magna cum laude, One of the Top Outstanding Students of the Philippines and World Robot Olympiad 2013 3rd Placer', 'Science Research Specialist I\r\n', 'Department of Science and Technology - Science Education Institute\r\n', '3 months', '"Don''t tell me that the sky is the limit for there are footsteps on the moon."', 'Bachelor of Science in Computer Science', '2015', 'resources/images/users/01.jpg'),
(2, 'Gladys Leigh P. Malana', 'Magna cum laude', 'Management Trainee', 'Philippine National Bank\r\n', '7 months', '"Nothing great is created suddenly."', 'Bachelor of Science in Business Administration Major in Financial Management\r\n', '2016', 'resources/images/users/02.jpg'),
(3, 'Lemuel Francisco', 'World Robot Olympiad 2013 3rd Placer', 'Web and Mobile Developer', 'Ideo Studios\r\n', '2 years', '"Don''t say you can''t if you''ve never even tried."', 'Bachelor of Science in Information Technology', '2013', 'resources/images/users/01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

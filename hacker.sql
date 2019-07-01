-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 05:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hacker`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `levelfilename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `cat`, `levelfilename`) VALUES
(1, 'Level 1', 'Web', 'index.php'),
(2, 'Level 2', 'Web', 'Levels/13v31-tw2.php?byLevel=Dashboard'),
(3, 'Level 3', 'Web', 'Levels/lev31-7x3.php?c@m3_by=Dashboard'),
(4, 'Level 4', 'Web', 'Levels/l3ue1_f0ur~.php?oknow=Dashboard'),
(5, 'Level 5', 'Web', 'Levels/13vel_Fiu3_1.php?oknow=Dashboard'),
(6, 'Level 6', 'Web', 'Levels/5ix_1evel_i5_@1l.php?g0t0=Dashboard'),
(7, 'Level 7', 'Web', 'Levels/l3vE1~_~s3v3n.php?flag_of=Dashboard'),
(8, 'Level 8', 'Web', 'Levels/13v3l_3i68.php?n0w!e=Dashboard'),
(9, 'Level 9', 'Web', 'Levels/nine_level_is_here.php?gotit=Dashboard'),
(10, 'Level 10', 'Forensics', 'Levels/l3vel_10.php?from=Dashboard'),
(11, 'Level 11', 'Forensics', 'Levels/n0w_1ev3l_e1ev3n.php?oknow=Dashboard');

-- --------------------------------------------------------

--
-- Table structure for table `levelscleared`
--

CREATE TABLE `levelscleared` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `levelname` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `levelscleared`
--

INSERT INTO `levelscleared` (`id`, `email`, `levelname`, `date`) VALUES
(1, 'bharatagsrwal@gmail.com', 'Level 1', '2019-01-18'),
(2, 'bharatagsrwal@gmail.com', 'Level 2', '2019-01-18'),
(3, 'bharatagsrwal@gmail.com', 'Level 3', '2019-01-18'),
(4, 'bharatagsrwal@gmail.com', 'Level 4', '2019-01-18'),
(5, 'bharatagsrwal@gmail.com', 'Level 5', '2019-01-18'),
(6, 'bharatagsrwal@gmail.com', 'Level 6', '2019-01-18'),
(7, 'bharatagsrwal@gmail.com', 'Level 7', '2019-01-18'),
(8, 'bharatagsrwal@gmail.com', 'Level 8', '2019-01-18'),
(9, 'bharatagsrwal@gmail.com', 'Level 9', '2019-01-18'),
(10, 'bharatagsrwal@gmail.com', 'Level 10', '2019-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `about` varchar(500) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `linkedin` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fname`, `lname`, `phone`, `about`, `twitter`, `facebook`, `linkedin`, `website`, `level`) VALUES
(1, 'bharatagsrwal@gmail.com', 'dfb57b2e5f36c1f893dbc12dd66897d4', 'Bharat', 'Agarwal', '7742398202', 'Web Developer & Web-App Pentester', 'bharatagsrwal', 'bharatagsrwal', 'bharatagsrwal', 'iambharat.tk', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levelscleared`
--
ALTER TABLE `levelscleared`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `levelscleared`
--
ALTER TABLE `levelscleared`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 12:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` char(20) NOT NULL,
  `pin` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pin`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `baby`
--

CREATE TABLE `baby` (
  `babyid` int(11) NOT NULL,
  `babyname` char(50) NOT NULL,
  `babyrate` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baby`
--

INSERT INTO `baby` (`babyid`, `babyname`, `babyrate`) VALUES
(3, 'Morjina', 400),
(4, 'Khatun', 600);

-- --------------------------------------------------------

--
-- Table structure for table `maid`
--

CREATE TABLE `maid` (
  `maidid` int(11) NOT NULL,
  `maidname` char(50) NOT NULL,
  `maidrate` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maid`
--

INSERT INTO `maid` (`maidid`, `maidname`, `maidrate`) VALUES
(14, 'Jorina', 500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` char(100) NOT NULL,
  `id` char(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `pin` int(6) NOT NULL,
  `gender` char(1) NOT NULL,
  `prof` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `phone`, `pin`, `gender`, `prof`) VALUES
('Sumaiya Chowa', 'chowa123', 1533804984, 789456, 'f', 'student'),
('Injamul Haque Rashik', 'InjamulRashik', 1950958099, 123456, 'm', 'student'),
('Sirazum Munira Meem', 'Shmeem1080', 1994361161, 123456, 'f', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby`
--
ALTER TABLE `baby`
  ADD PRIMARY KEY (`babyid`);

--
-- Indexes for table `maid`
--
ALTER TABLE `maid`
  ADD PRIMARY KEY (`maidid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby`
--
ALTER TABLE `baby`
  MODIFY `babyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maid`
--
ALTER TABLE `maid`
  MODIFY `maidid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

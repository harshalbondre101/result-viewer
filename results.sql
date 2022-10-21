-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 08:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `results`
--

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

CREATE TABLE `roll` (
  `roll` int(3) NOT NULL,
  `class` varchar(3) NOT NULL,
  `section` varchar(3) NOT NULL,
  `res` varchar(10) NOT NULL,
  `last` int(1) DEFAULT NULL,
  `english` int(250) NOT NULL,
  `maths` int(250) NOT NULL,
  `language1` int(250) NOT NULL,
  `science` int(250) NOT NULL,
  `computer` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roll`
--

INSERT INTO `roll` (`roll`, `class`, `section`, `res`, `last`, `english`, `maths`, `language1`, `science`, `computer`) VALUES
(1, '2', 'a', 'Pass', NULL, 70, 80, 100, 55, 74),
(2, '2', 'a', 'Pass', NULL, 90, 99, 98, 89, 100),
(3, '2', 'a', 'Pass', NULL, 66, 77, 88, 99, 55),
(4, '2', 'a', 'Fail', NULL, 58, 35, 90, 68, 87),
(5, '2', 'a', 'Fail', NULL, 90, 30, 70, 60, 23),
(6, '2', 'a', 'Pass', NULL, 65, 43, 76, 87, 54),
(7, '2', 'a', 'Pass', NULL, 57, 98, 78, 77, 96);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('harshal', 'harshalbondre101@gmail.com', '123'),
('admin', 'admin@login.com', 'admin@login.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`roll`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

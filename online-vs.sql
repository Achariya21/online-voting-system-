-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 07:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-vs`
--

-- --------------------------------------------------------

--
-- Table structure for table `combox`
--

CREATE TABLE `combox` (
  `M_Id` int(10) NOT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combox`
--

INSERT INTO `combox` (`M_Id`, `mobile`, `Msg`, `Date`, `Time`) VALUES
(0, '3', 'Hello', '2023-03-19', '15:18:52'),
(0, '3', 'Hello', '2023-03-19', '15:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `name`, `Description`, `Date`, `Time`) VALUES
(1, 'as', 'aSDA', '2023-01-20', '23:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `timedate`
--

CREATE TABLE `timedate` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `eventdt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timedate`
--

INSERT INTO `timedate` (`id`, `name`, `eventdt`) VALUES
(1, 'Local Voting', '2023-03-23 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `photo2`, `status`, `votes`, `role`) VALUES
(16, 'ADMIN', 11, 11, 'bangladesh', '', '444.PNG', 0, 0, 3),
(25, 'Foyel', 1, 1, 'bangladesh', 'download.jpg', '444.PNG', 1, 5, 2),
(29, 'Foyelvai', 3333, 333, 'bangladesh', '', '555.jpg', 1, 0, 1),
(30, 'roy', 111, 111, 'bangladesh', '', 'istockphoto-1335941248-170667a.jpg', 0, 0, 1),
(31, 'mizu islam ', 112, 112, 'bangladesh', '', 'portrait-charming-mature-man-true-260nw-1571432695.webp', 0, 0, 1),
(32, 'das', 222, 222, 'bangladesh', 'download (2).jpg', 'download (3).jpg', 0, 0, 2),
(33, 'shuvo islam', 223, 223, 'bangladesh', '86bbd1b3bb3ea24468e08971dec449844. RFL-Uttom-Tubewell.jpg', 'images.jpg', 0, 0, 2),
(34, 'Robin', 224, 224, 'bangladesh', 'download (1).jpg', 'istockphoto-1179420343-612x612.jpg', 0, 0, 2),
(35, 'Achariya', 225, 225, 'bangladesh', '059b0357bda2e2d04bb7e553e6e7a0ae.jpg', 'istockphoto-1335941248-170667a.jpg', 0, 0, 2),
(36, 'kamal', 113, 113, 'bangladesh', '', '63022009_605.jpg', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `timedate`
--
ALTER TABLE `timedate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timedate`
--
ALTER TABLE `timedate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

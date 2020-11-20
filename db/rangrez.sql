-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 03:23 PM
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
-- Database: `rangrez`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` datetime DEFAULT NULL,
  `contact` varchar(10) NOT NULL,
  `createdOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`, `birthdate`, `contact`, `createdOn`) VALUES
(1, 'Smit', 'Vasava', 's.bvasava@ymail.com', 'bd3f4a5f87bbf117cc06b17a0b723c71', '1998-10-29 16:54:03', '8160803385', '2020-03-23 16:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` text NOT NULL,
  `birthday` datetime NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` varchar(50) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdby` varchar(100) NOT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` varchar(100) NOT NULL,
  `proimage` mediumtext NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `lastname`, `firstname`, `gender`, `address`, `birthday`, `email`, `contact`, `password`, `question`, `answer`, `createddate`, `createdby`, `updateddate`, `updatedby`, `proimage`) VALUES
(1, 'Satani', 'Chirag', 'male', 'hello my name is chirag', '2020-03-07 00:00:00', 'chirag@gmail.com', '8160803385', 'e7d627b9aa82fa23df4ac3c0956dc46a', 'What was your childhood nickname?', 'sssss', '2020-03-20 10:40:19', 'smit@gmai.com', '2020-03-22 13:51:48', '1', '836b5f425c778abf8083db049533ab31.jpg'),
(2, 'Vasava', 'Smit', 'male', 'sjuueue  e', '2020-03-07 00:00:00', 'smit@gmai.com', '8965478956', 'Smit@22', 'What was your childhood nickname?', 'sssss', '2020-03-20 10:45:42', 'smit@gmai.com', NULL, '', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(5) NOT NULL,
  `title` varchar(256) NOT NULL,
  `genre` varchar(256) NOT NULL,
  `technique` varchar(256) NOT NULL,
  `material` varchar(256) NOT NULL,
  `dimension` varchar(256) NOT NULL,
  `gallery` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `addedby` varchar(100) NOT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE `painting` (
  `pid` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `startingprice` int(10) NOT NULL,
  `startingdate` datetime DEFAULT NULL,
  `endingdate` datetime DEFAULT NULL,
  `createdby` varchar(100) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `selleremail` varchar(256) NOT NULL,
  `bid` int(10) NOT NULL,
  `biddedby` varchar(100) NOT NULL,
  `biddeddate` datetime DEFAULT NULL,
  `bidid` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `payment` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `painting`
--

INSERT INTO `painting` (`pid`, `title`, `subtitle`, `description`, `image`, `startingprice`, `startingdate`, `endingdate`, `createdby`, `createddate`, `selleremail`, `bid`, `biddedby`, `biddeddate`, `bidid`, `status`, `payment`) VALUES
(1, 'Smit', 'Vasava', 'this painting is created by smit vasava', '2b1db4b50bc5a4cde5bb911186e1f8af.jpg', 8000, '2020-03-21 18:03:00', '2020-03-22 18:03:00', '1', '2020-03-21 18:05:29', 's.bvasava@ymail.com', 9000, 'chirag@gmail.com', '2020-03-22 17:54:05', 1, 1, 1),
(2, 'Padmavati', 'By Ravi Varma ', 'this painting is created by Raja Ravi Varma , \r\nAnd Have been kept at Laxmi Vilas Palace ,\r\nBaroda ', '58c9e4a26adc6c90de9aac71b9a93644.jpg', 4000, '2020-03-22 20:53:00', '2020-03-22 21:00:00', '5', '2020-03-22 20:53:51', 's@gmail.com', 3000, 'chirag@gmail.com', '2020-03-22 20:56:07', 1, 1, 0),
(3, 'Test', 'test', 'testing pupose ', '09e0f21126331245f6da92afe626efdd.jpg', 2000, '2020-03-22 21:25:00', '2020-03-23 10:30:00', '5', '2020-03-22 21:25:37', 's@gmail.com', 10000, 'chirag@gmail.com', '2020-03-22 21:36:47', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(10) NOT NULL,
  `OrderId` varchar(100) NOT NULL,
  `CustId` varchar(50) NOT NULL,
  `IndType` varchar(50) NOT NULL,
  `ChId` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Address` mediumtext NOT NULL,
  `Address2` mediumtext NOT NULL,
  `state` varchar(100) NOT NULL,
  `Zip` varchar(10) NOT NULL,
  `Date` datetime DEFAULT NULL,
  `bidderid` int(10) NOT NULL,
  `paintingid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `OrderId`, `CustId`, `IndType`, `ChId`, `Amount`, `Fname`, `Lname`, `Email`, `Address`, `Address2`, `state`, `Zip`, `Date`, `bidderid`, `paintingid`) VALUES
(1, 'ORDS20797612', 'CUST001', 'Retail', 'WEB', 9000, 'Smit', 'Vasava', 's.bvasava@ymail.com', 'this is for testing purpose only ', 'this is for testing ', 'Gujarat', '388001', '2020-03-23 11:55:36', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sid` int(10) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` mediumtext NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(256) NOT NULL,
  `question` mediumtext NOT NULL,
  `answer` varchar(100) NOT NULL,
  `createddate` datetime DEFAULT NULL,
  `createdby` varchar(100) DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  `updatedby` varchar(100) NOT NULL,
  `proimage` mediumtext NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `lastname`, `firstname`, `gender`, `address`, `birthday`, `email`, `contact`, `password`, `question`, `answer`, `createddate`, `createdby`, `updateddate`, `updatedby`, `proimage`) VALUES
(1, 'Vasava', 'Smit', 'male', 'xgt ysuus iisii is ', '2020-03-21', 's.bvasava@ymail.com', '8965748965', 'bb3adbd84a07edf3d01740ce4155858f', 'What was your childhood nickname?', 'Situ', '2020-03-18 07:56:13', 'smit@gmail.com', '2020-03-20 21:13:49', '1', '2b1db4b50bc5a4cde5bb911186e1f8af.jpg'),
(2, 'Vasava', 'Smit', 'male', 'xgt ysuus iisii is ', '2020-03-21', 'smit@gmail.com', '8965748965', 'Smit@22', 'What was your childhood nickname?', 'Situ', '2020-03-18 07:57:04', 'smit@gmail.com', NULL, '', 'user.png'),
(3, 'Vasava', 'Smit', 'male', 'xgt ysuus iisii is ', '2020-03-21', 'smit@gmail.com', '8965748965', 'Smit@22', 'What was your childhood nickname?', 'Situ', '2020-03-18 07:58:56', 'smit@gmail.com', NULL, '', 'user.png'),
(4, 'Vasava', 'Smit', 'male', 'xgt ysuus iisii is ', '2020-03-21', 'smit@gmail.com', '8965748965', 'Smit@22', 'What was your childhood nickname?', 'Situ', '2020-03-18 19:59:53', 'smit@gmail.com', NULL, '', 'user.png'),
(5, 'Vasava', 'Smit', 'male', '&quot;Mai Krupa&quot;,\\r\\nopp. st. Stephen college ,\\r\\nStation road,\\r\\nAnand -388001', '2020-03-12', 's@gmail.com', '8965745856', 'e25d3b20b18c01dbc2ab830950135fcc', 'What was your childhood nickname?', 'c2', '2020-03-22 20:13:57', 's@gmail.com', NULL, '', 'ee67c8ec04ce001623062e40cfadf51f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `painting`
--
ALTER TABLE `painting`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `painting`
--
ALTER TABLE `painting`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 07:46 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'MEER MUTTAKIN ALAM', 1521456529, 'meermuttakin@gmail.com', 'meer175');

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `id` int(5) NOT NULL,
  `userid` int(5) NOT NULL,
  `trainid` int(5) NOT NULL,
  `sfrom` int(5) NOT NULL,
  `sto` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`id`, `userid`, `trainid`, `sfrom`, `sto`) VALUES
(1, 1, 2, 4, 5),
(2, 1, 1, 3, 5),
(3, 1, 3, 1, 3),
(4, 1, 5, 2, 5),
(5, 4, 2, 3, 4),
(6, 1, 2222, 4444, 55555);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `seat_id` int(5) NOT NULL,
  `bank` int(5) NOT NULL,
  `acc_num` int(20) NOT NULL,
  `pin` int(20) NOT NULL,
  `scode` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`seat_id`, `bank`, `acc_num`, `pin`, `scode`) VALUES
(1, 1, 1521456529, 555555, 5656565),
(2, 2, 1521456529, 777777, 97979797),
(3, 2, 1521456529, 1212, 1010101),
(4, 2, 1521456529, 1212, 1010101),
(5, 2, 1521456529, 1212, 1010101),
(6, 3, 1521456529, 555779, 879),
(7, 2, 1521456529, 1213, 1213),
(8, 2, 1521456529, 1213, 1213),
(9, 1, 1711999941, 9999, 8888),
(10, 1, 1711999941, 9999, 8888),
(11, 2, 1711999941, 3333, 33333),
(12, 2, 1521456529, 2525, 2121),
(13, 2, 1521456529, 4444, 5555);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `msg`) VALUES
(1, 'muttakin', 'meer@gmail.com', 'good project');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `pass`) VALUES
('meer', '1234'),
('meer', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `userid` int(5) NOT NULL,
  `train` int(5) NOT NULL,
  `jd` varchar(30) NOT NULL,
  `sfrom` int(5) NOT NULL,
  `sto` int(5) NOT NULL,
  `scode` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`userid`, `train`, `jd`, `sfrom`, `sto`, `scode`) VALUES
(0, 1, '11-11-2017', 1, 3, 1035645879),
(0, 1, '1-11-2017', 1, 3, 1274816519),
(0, 1, '11-11-2017', 1, 3, 1352833138),
(0, 1, '14-11-2017', 1, 1, 1096019468),
(0, 3, '12-11-2017', 3, 1, 739242970),
(0, 1, '15-11-2017', 4, 1, 997691848),
(0, 3, '12-11-2017', 3, 1, 1211344642),
(0, 4, '12-11-2017', 3, 1, 1243403319),
(0, 3, '11-11-11', 2, 1, 1398920176),
(0, 2, '2017-11-15', 2, 3, 968817523),
(0, 2, '2017-11-15', 2, 3, 968817523),
(0, 2, '2017-11-21', 3, 5, 669230262),
(0, 2, '2017-11-21', 3, 5, 669230262),
(0, 2, '2017-11-21', 3, 5, 153924681),
(0, 2, '2017-11-21', 3, 5, 153924681),
(8, 6, '2017-11-15', 1, 5, 573871834),
(8, 6, '2017-11-15', 1, 5, 317703640),
(0, 6, '2017-11-15', 4, 5, 712477202),
(1, 1, '2017-11-20', 3, 6, 646208259),
(1, 1, '2017-11-20', 3, 6, 1335878617);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `card` int(20) NOT NULL,
  `scode` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `pname`, `phone`, `email`, `password`, `card`, `scode`) VALUES
(1, 'meer muttakin alam', 175555555, 'meer@gmail.com', '175', 1521456529, 78787878),
(8, 'sabbir22', 1788888888, 'hanif@gmail.com', '5555', 45454545, 11111);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `sfrom` varchar(30) NOT NULL,
  `sto` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`sfrom`, `sto`, `price`) VALUES
('', '', ''),
('', '', ''),
('MIRPUR', 'KAZIPARA', '10 TAKA'),
('MIRPUR', 'FARMGATE', '20'),
('MIRPUR', 'TEJGAO', '30 TAKA'),
('MIRPUR', 'SAYEDABAD', '40'),
('MIRPUR', 'JATRABARI', '50 TAKA');

-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `sid` int(5) NOT NULL,
  `sname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stations`
--

INSERT INTO `stations` (`sid`, `sname`) VALUES
(1, 'MIRPUR'),
(2, 'KAZIPARA'),
(3, 'FARMGATE'),
(4, 'TEJGAO'),
(5, 'SAYEDABAD'),
(6, 'JATRABARI');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `trainid` int(5) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`trainid`, `tname`, `price`) VALUES
(1, 'PADMA', 10),
(2, 'MEGHNA', 10),
(3, 'JAMUNA', 10),
(4, 'SHITOLOKKHA', 10),
(5, 'BRAHMMAPUTRA', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`trainid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `seat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `stations`
--
ALTER TABLE `stations`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `trainid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

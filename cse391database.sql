-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 05:50 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse391database`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(5) NOT NULL,
  `sender_id` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_id` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `sender_id`, `sender_name`, `receiver_id`, `receiver_name`, `status`) VALUES
(16, '16', 'Hammad sir', '15', 'jisan', 'ACTIVE'),
(17, '15', 'jisan', '14', 'mahin', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `accountrecord1`
--

CREATE TABLE IF NOT EXISTS `accountrecord1` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `transfercode` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountrecord1`
--

INSERT INTO `accountrecord1` (`transactionid`, `transactiondate`, `name`, `branch`, `transfercode`, `credit`, `debit`, `amount`, `Summary`) VALUES
(1, '2015-12-03', 'cust1', 'Motijheel', '1201', 15000, 0, 15000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `accountrecord15`
--

CREATE TABLE IF NOT EXISTS `accountrecord15` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `transfercode` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountrecord15`
--

INSERT INTO `accountrecord15` (`transactionid`, `transactiondate`, `name`, `branch`, `transfercode`, `credit`, `debit`, `amount`, `Summary`) VALUES
(1, '2015-12-03', 'jisan', 'Motijheel', '1201', 5000, 0, 5000.00, 'Account Open'),
(2, '2015-12-03', 'jisan', 'Motijheel', '1201', 1000, 0, 6000.00, 'BY Hammad sir'),
(3, '2015-12-03', 'jisan', 'Motijheel', '1201', 5000, 0, 11000.00, 'BY Hammad sir');

-- --------------------------------------------------------

--
-- Table structure for table `accountrecord16`
--

CREATE TABLE IF NOT EXISTS `accountrecord16` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `transfercode` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountrecord16`
--

INSERT INTO `accountrecord16` (`transactionid`, `transactiondate`, `name`, `branch`, `transfercode`, `credit`, `debit`, `amount`, `Summary`) VALUES
(1, '2015-12-03', 'Hammad sir', 'Motijheel', '1201', 25000, 0, 25000.00, 'Account Open'),
(2, '2015-12-03', 'Hammad sir', 'Motijheel', '1201', 0, 1000, 24000.00, 'TO jisan'),
(3, '2015-12-03', 'Hammad sir', 'Motijheel', '1201', 0, 5000, 19000.00, 'TO jisan');

-- --------------------------------------------------------

--
-- Table structure for table `accountrecord17`
--

CREATE TABLE IF NOT EXISTS `accountrecord17` (
  `transactionid` int(5) NOT NULL,
  `transactiondate` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `transfercode` varchar(255) DEFAULT NULL,
  `credit` int(10) DEFAULT NULL,
  `debit` int(10) DEFAULT NULL,
  `amount` float(10,2) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountrecord17`
--

INSERT INTO `accountrecord17` (`transactionid`, `transactiondate`, `name`, `branch`, `transfercode`, `credit`, `debit`, `amount`, `Summary`) VALUES
(1, '2015-12-03', 'cust124', 'Motijheel', '1201', 25000, 0, 25000.00, 'Account Open');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `loginid`, `pwd`, `department`, `branch`) VALUES
(1, 'admin', 'adminlogin', 'adminpassword', 'Management', 'Headquarter');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `gender` char(1) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `nominee` varchar(25) NOT NULL,
  `account` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `transfercode` varchar(25) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `accstatus` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `dateOfBirth`, `nominee`, `account`, `address`, `mobile`, `email`, `password`, `branch`, `transfercode`, `lastlogin`, `accstatus`) VALUES
(14, 'mahin', 'M', '1993-10-10', 'Name102', 'current', 'agg', '234@gmail.com', '234@gmail.com', '234', 'Motijheel', '1201', '2015-12-03 03:22:50', 'ACTIVE'),
(15, 'jisan', 'M', '1993-10-10', 'Name101', 'savings', 'add4', '01748274821', '12345@gmail.com', '12345', 'Motijheel', '1201', '2015-12-03 03:22:25', 'ACTIVE'),
(16, 'Hammad sir', 'M', '1993-10-10', 'Name102', 'savings', 'north south university', '01748274821', 'cse391@gmail.com', 'cse391', 'Motijheel', '1201', '2015-12-03 06:17:05', 'ACTIVE'),
(18, 'cust124', 'M', '1993-10-10', 'mitu', 'savings', 'address456', '982', '12349@gmail.com', '12349', 'Motijheel', '1201', '2015-12-03 08:03:36', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `relationship` varchar(10) NOT NULL,
  `department` varchar(25) NOT NULL,
  `dateOfJoin` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `dateOfBirth`, `relationship`, `department`, `dateOfJoin`, `address`, `mobile`, `email`, `password`, `gender`, `lastlogin`) VALUES
(1005, 'Adnan sir', '0000-00-00', 'married', 'developer', '0000-00-00', 'address1', 'emp2@gmail.com', 'emp2@gmail.com', 'emp2', 'M', '2015-12-03 03:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `loaninterest`
--

CREATE TABLE IF NOT EXISTS `loaninterest` (
  `name` varchar(60) NOT NULL,
  `accountno` int(25) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(25) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `deposit` float(20,2) NOT NULL,
  `interest` float(20,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaninterest`
--

INSERT INTO `loaninterest` (`name`, `accountno`, `dob`, `address`, `mobile`, `email`, `password`, `deposit`, `interest`) VALUES
('mahin', 123, '1995-10-10', 'adde', '014234151', '11111@gmail.com', '11111', 500000.00, 30000.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountrecord1`
--
ALTER TABLE `accountrecord1`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `accountrecord15`
--
ALTER TABLE `accountrecord15`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `accountrecord16`
--
ALTER TABLE `accountrecord16`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `accountrecord17`
--
ALTER TABLE `accountrecord17`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginid` (`loginid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `loaninterest`
--
ALTER TABLE `loaninterest`
  ADD PRIMARY KEY (`accountno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `accountrecord1`
--
ALTER TABLE `accountrecord1`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `accountrecord15`
--
ALTER TABLE `accountrecord15`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `accountrecord16`
--
ALTER TABLE `accountrecord16`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `accountrecord17`
--
ALTER TABLE `accountrecord17`
  MODIFY `transactionid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1008;
--
-- AUTO_INCREMENT for table `loaninterest`
--
ALTER TABLE `loaninterest`
  MODIFY `accountno` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=124;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

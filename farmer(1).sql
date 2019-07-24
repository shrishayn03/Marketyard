-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 05:36 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `billfarmer`
--

CREATE TABLE IF NOT EXISTS `billfarmer` (
`rno` int(15) NOT NULL,
  `fno` int(15) NOT NULL,
  `dt` text NOT NULL,
  `fgross` int(15) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `billfarmer`
--

INSERT INTO `billfarmer` (`rno`, `fno`, `dt`, `fgross`) VALUES
(1, 5, '2017/11/03', NULL),
(2, 5, '2017/11/03', NULL),
(3, 6, '2017/11/03', NULL),
(4, 10, '2017/11/03', NULL),
(5, 10, '2017/11/03', NULL),
(6, 5, '2017/11/04', NULL),
(7, 5, '2017/11/06', NULL),
(8, 5, '2017/11/06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `billofcustomer`
--

CREATE TABLE IF NOT EXISTS `billofcustomer` (
`rno` int(10) NOT NULL,
  `dt` varchar(15) NOT NULL,
  `cgrosss` int(10) NOT NULL,
  `cno` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `billofcustomer`
--

INSERT INTO `billofcustomer` (`rno`, `dt`, `cgrosss`, `cno`) VALUES
(1, '2017/11/03', 0, 8),
(2, '2017/11/03', 0, 8),
(3, '2017/11/03', 0, 7),
(4, '2017/11/06', 0, 7),
(5, '2017/11/06', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`cno` int(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cadd` varchar(20) NOT NULL,
  `mno` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cno`, `cname`, `cadd`, `mno`) VALUES
(7, 'vinit', 'pune', '8834567899'),
(8, 'leena', 'nagpur', '7234567899'),
(9, 'Vijay', 'Nasik', '9872625262'),
(10, 'Mayur', 'dhule', '9874666443');

-- --------------------------------------------------------

--
-- Table structure for table `cutomerveg`
--

CREATE TABLE IF NOT EXISTS `cutomerveg` (
`ckey` int(15) NOT NULL,
  `ctype` varchar(15) NOT NULL,
  `cquat` int(15) NOT NULL,
  `crate` int(15) NOT NULL,
  `rno` int(15) NOT NULL,
  `cgross` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cutomerveg`
--

INSERT INTO `cutomerveg` (`ckey`, `ctype`, `cquat`, `crate`, `rno`, `cgross`) VALUES
(1, 'Potato', 2, 20, 1, 40),
(2, 'cucumber', 2, 40, 1, 80),
(3, 'Potato', 1, 20, 2, 20),
(4, 'Tomato', 2, 40, 2, 80),
(5, 'Potato', 1, 20, 3, 20),
(6, 'Tomato', 2, 40, 3, 80),
(7, 'Potato', 2, 20, 4, 40),
(8, 'Onion', 3, 40, 4, 120),
(9, 'Cucumber', 4, 40, 5, 160),
(10, 'Cabbage', 5, 50, 5, 250);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`eno` int(20) NOT NULL,
  `salary` int(15) NOT NULL,
  `ename` varchar(20) NOT NULL,
  `eadd` varchar(20) NOT NULL,
  `mno` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eno`, `salary`, `ename`, `eadd`, `mno`) VALUES
(5, 10000, 'pravin', 'mumbai', '7654321899'),
(6, 3000, 'Vijay', 'nagpur', '9088577464');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
`fno` int(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `fadd` varchar(50) NOT NULL,
  `mno` bigint(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fno`, `fname`, `fadd`, `mno`) VALUES
(5, 'vinit', 'pune', 9595886899),
(6, 'rupali', 'nasik', 9064323567),
(10, 'narayan', 'malegav', 7869563652),
(11, 'mandar', 'chandrapur', 7865431253),
(12, 'krishna', 'pune', 9587473636),
(14, 'ajinkya', 'Pune', 7865432145),
(15, 'nandan', 'nasik', 7894565111);

-- --------------------------------------------------------

--
-- Table structure for table `farmerveg`
--

CREATE TABLE IF NOT EXISTS `farmerveg` (
`fkey` int(15) NOT NULL,
  `ftype` varchar(15) NOT NULL,
  `fqty` int(15) NOT NULL,
  `frate` int(15) NOT NULL,
  `rno` int(15) NOT NULL,
  `fgrossamt` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `farmerveg`
--

INSERT INTO `farmerveg` (`fkey`, `ftype`, `fqty`, `frate`, `rno`, `fgrossamt`) VALUES
(1, 'Potato', 2, 15, 1, 30),
(2, 'Onion', 2, 30, 1, 60),
(3, 'Potato', 1, 15, 2, 15),
(4, 'cabbage', 2, 30, 2, 60),
(5, 'Potato', 2, 15, 3, 30),
(6, 'Onion', 3, 30, 3, 90),
(7, 'Potato', 2, 15, 4, 30),
(8, 'cucumber', 2, 25, 4, 50),
(9, 'Potato', 1, 15, 5, 15),
(10, 'Tomato', 2, 30, 5, 60),
(11, 'Onion', 1, 30, 5, 30),
(12, 'cucumber', 2, 25, 5, 50),
(13, 'cabbage', 2, 30, 5, 60),
(14, 'Tomato', 2, 30, 7, 60),
(15, 'Onion', 3, 30, 7, 90),
(16, 'Potato', 4, 15, 8, 60),
(17, 'Tomato', 4, 30, 8, 120);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `esal` int(7) NOT NULL,
  `eno` int(12) NOT NULL,
`rno` int(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`esal`, `eno`, `rno`) VALUES
(40000, 5, 1),
(10000, 5, 2),
(230000, 5, 3),
(20000, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `pass`) VALUES
('admin', 'admin'),
('admin', 'admin'),
('kajal', 'rupali'),
('kajal', 'rupali');

-- --------------------------------------------------------

--
-- Table structure for table `vegetable`
--

CREATE TABLE IF NOT EXISTS `vegetable` (
`vno` int(15) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `crate` int(15) NOT NULL,
  `frate` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vegetable`
--

INSERT INTO `vegetable` (`vno`, `vname`, `crate`, `frate`) VALUES
(1, 'Potato', 20, 15),
(2, 'Tomato', 40, 30),
(3, 'Onion', 40, 30),
(4, 'Cucumber', 40, 25),
(5, 'Cabbage', 50, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billfarmer`
--
ALTER TABLE `billfarmer`
 ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `billofcustomer`
--
ALTER TABLE `billofcustomer`
 ADD PRIMARY KEY (`rno`), ADD KEY `cno` (`cno`), ADD KEY `cno_2` (`cno`), ADD KEY `cno_3` (`cno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `cutomerveg`
--
ALTER TABLE `cutomerveg`
 ADD PRIMARY KEY (`ckey`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`eno`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
 ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `farmerveg`
--
ALTER TABLE `farmerveg`
 ADD PRIMARY KEY (`fkey`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
 ADD PRIMARY KEY (`rno`), ADD KEY `eno` (`eno`);

--
-- Indexes for table `vegetable`
--
ALTER TABLE `vegetable`
 ADD PRIMARY KEY (`vno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billfarmer`
--
ALTER TABLE `billfarmer`
MODIFY `rno` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `billofcustomer`
--
ALTER TABLE `billofcustomer`
MODIFY `rno` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `cno` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cutomerveg`
--
ALTER TABLE `cutomerveg`
MODIFY `ckey` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `eno` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
MODIFY `fno` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `farmerveg`
--
ALTER TABLE `farmerveg`
MODIFY `fkey` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
MODIFY `rno` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vegetable`
--
ALTER TABLE `vegetable`
MODIFY `vno` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billofcustomer`
--
ALTER TABLE `billofcustomer`
ADD CONSTRAINT `billofcustomer_ibfk_1` FOREIGN KEY (`cno`) REFERENCES `customer` (`cno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`eno`) REFERENCES `employee` (`eno`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

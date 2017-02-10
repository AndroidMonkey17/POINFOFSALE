-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 10:30 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `point_of_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `AccountID` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  KEY `AccountID` (`AccountID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountID`, `Password`, `Status`) VALUES
('14-c118', 'manyan', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductCode` varchar(20) NOT NULL,
  `ProductName` varchar(20) DEFAULT NULL,
  `Price` varchar(20) DEFAULT NULL,
  `Quantity` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ProductCode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductCode`, `ProductName`, `Price`, `Quantity`) VALUES
('1', 'Burger', '30.00php', '20'),
('2', 'Royal', '13.00php', '50');

-- --------------------------------------------------------

--
-- Table structure for table `registeremployee`
--

CREATE TABLE IF NOT EXISTS `registeremployee` (
  `AccountID` varchar(20) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `MiddleName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Age` varchar(20) DEFAULT NULL,
  `Birthday` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Address` varchar(20) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AccountID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeremployee`
--

INSERT INTO `registeremployee` (`AccountID`, `FirstName`, `MiddleName`, `LastName`, `Age`, `Birthday`, `Gender`, `Address`, `ContactNumber`) VALUES
('14-c031', 'Albi', 'B.', 'Biol', '16', '10/13/2000', 'Male', 'P-2 Libertad Butuan ', '09093027675'),
('14-c116', 'Christian', 'B.', 'Amista', '19', '07/18/1997', 'Male', 'P-2 Libertad Butuan ', '09101368918'),
('14-c118', 'Marian', 'B.', 'Lao', '18', '05/21/1998', 'Female', 'P-3A Mahogany Butuan', '09101368918'),
('14-c264', 'Kevin Mark', 'P.', 'Tanio', '23', '07/03/1995', 'Male', 'P-2 Libertad Butuan ', '09101368918');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`AccountID`) REFERENCES `registeremployee` (`AccountID`);

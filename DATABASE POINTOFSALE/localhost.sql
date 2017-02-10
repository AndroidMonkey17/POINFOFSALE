-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2016 at 07:35 PM
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
CREATE DATABASE `point_of_sale` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `point_of_sale`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `AccountID` int(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Birthday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`AccountID`, `FirstName`, `MiddleName`, `LastName`, `Address`, `Birthday`) VALUES
(1, 'admin', 'admin', 'admin', '01/01/1990', 'Gomez'),
(2, 'Marian', '', 'Baquiran', '05/21/1998', 'Mahogany'),
(3, 'Christian', 'B', 'Amista', '07/18/1997', 'Libertad'),
(4, 'Jackieclyn', 'V', 'Quintos', '08/24/1995', 'Libertad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `ProductCode` int(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`ProductCode`, `ProductName`, `Price`, `Quantity`) VALUES
(1, 'Rice', '15.00 php', '20'),
(2, 'Chicken', '20.00 php', '20'),
(3, 'Cheese Burger', '50.00 php', '20'),
(4, 'French Fries', '20.00 php', '20'),
(5, 'Coke', '15.00 php', '20'),
(6, 'Royal', '15.00 php', '20'),
(7, 'Sprite', '15.00 php', '20');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `AccountID` int(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`AccountID`, `UserName`, `Password`, `Status`) VALUES
(1, 'admin', 'abc123', 'Active'),
(2, 'yan', 'abc', 'Active'),
(3, 'tian', '123', 'Active'),
(4, 'jack', '321', 'Active');

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2021 at 06:56 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.2.24

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fom`
--
CREATE DATABASE IF NOT EXISTS `db_fom` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_fom`;

-- --------------------------------------------------------

--
-- Table structure for table `tblArticle`
--

DROP TABLE IF EXISTS `tblArticle`;
CREATE TABLE IF NOT EXISTS `tblArticle` (
  `articleID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `VideoLink` varchar(255) NOT NULL,
  `Clicked` int(11) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL,
  PRIMARY KEY (`articleID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblArticle`
--

TRUNCATE TABLE `tblArticle`;
-- --------------------------------------------------------

--
-- Table structure for table `tblComments`
--

DROP TABLE IF EXISTS `tblComments`;
CREATE TABLE IF NOT EXISTS `tblComments` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `OwnID` varchar(255) NOT NULL,
  `CommenterID` varchar(255) NOT NULL,
  `CommentIN` text NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Uptadet` datetime NOT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblComments`
--

TRUNCATE TABLE `tblComments`;
-- --------------------------------------------------------

--
-- Table structure for table `tblContacts`
--

DROP TABLE IF EXISTS `tblContacts`;
CREATE TABLE IF NOT EXISTS `tblContacts` (
  `ContactID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblContacts`
--

TRUNCATE TABLE `tblContacts`;
-- --------------------------------------------------------

--
-- Table structure for table `tblFollowers`
--

DROP TABLE IF EXISTS `tblFollowers`;
CREATE TABLE IF NOT EXISTS `tblFollowers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `OwnID` varchar(255) NOT NULL,
  `FollowerID` varchar(255) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `tblFollowers_ibfk_1` (`OwnID`),
  KEY `FollowerID` (`FollowerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblFollowers`
--

TRUNCATE TABLE `tblFollowers`;
-- --------------------------------------------------------

--
-- Table structure for table `tblLike`
--

DROP TABLE IF EXISTS `tblLike`;
CREATE TABLE IF NOT EXISTS `tblLike` (
  `LikeID` int(11) NOT NULL AUTO_INCREMENT,
  `ArticleID` int(11) NOT NULL,
  `LikerID` varchar(255) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL,
  PRIMARY KEY (`LikeID`),
  KEY `ArticleID` (`ArticleID`),
  KEY `LikerID` (`LikerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblLike`
--

TRUNCATE TABLE `tblLike`;
-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

DROP TABLE IF EXISTS `tblUsers`;
CREATE TABLE IF NOT EXISTS `tblUsers` (
  `userID` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Birthday` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Status` char(1) NOT NULL,
  `Site` varchar(50) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `Job` varchar(30) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `About` text DEFAULT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblUsers`
--

TRUNCATE TABLE `tblUsers`;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblArticle`
--
ALTER TABLE `tblArticle`
  ADD CONSTRAINT `tblArticle_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblFollowers`
--
ALTER TABLE `tblFollowers`
  ADD CONSTRAINT `tblFollowers_ibfk_1` FOREIGN KEY (`OwnID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblFollowers_ibfk_2` FOREIGN KEY (`FollowerID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblLike`
--
ALTER TABLE `tblLike`
  ADD CONSTRAINT `tblLike_ibfk_1` FOREIGN KEY (`ArticleID`) REFERENCES `tblArticle` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblLike_ibfk_2` FOREIGN KEY (`LikerID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD CONSTRAINT `tblUsers_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tblArticle` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

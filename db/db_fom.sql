-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2021 at 07:29 PM
-- Server version: 10.3.28-MariaDB
-- PHP Version: 7.2.24

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
CREATE TABLE `tblArticle` (
  `articleID` int(11) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `VideoLink` varchar(255) NOT NULL,
  `Clicked` int(11) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblArticle`
--

INSERT INTO `tblArticle` (`articleID`, `userID`, `title`, `content`, `VideoLink`, `Clicked`, `DeleteKU`, `Created`, `Updated`) VALUES
(2, 'henryust12', 'test title', 'hehe boy', 'hehe youtube', 1000, '1', '2021-09-22 19:18:54', '2021-09-22 19:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblComments`
--

DROP TABLE IF EXISTS `tblComments`;
CREATE TABLE `tblComments` (
  `CommentID` int(11) NOT NULL,
  `OwnID` varchar(255) NOT NULL,
  `CommenterID` varchar(255) NOT NULL,
  `CommentIN` text NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Uptadet` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblComments`
--

INSERT INTO `tblComments` (`CommentID`, `OwnID`, `CommenterID`, `CommentIN`, `DeleteKU`, `Created`, `Uptadet`) VALUES
(1, 'henryust12', 'henryust12', 'good article bro', '1', '2021-09-22 19:22:17', '2021-09-22 19:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblContacts`
--

DROP TABLE IF EXISTS `tblContacts`;
CREATE TABLE `tblContacts` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblFollowers`
--

DROP TABLE IF EXISTS `tblFollowers`;
CREATE TABLE `tblFollowers` (
  `ID` int(11) NOT NULL,
  `OwnID` varchar(255) NOT NULL,
  `FollowerID` varchar(255) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblFollowers`
--

INSERT INTO `tblFollowers` (`ID`, `OwnID`, `FollowerID`, `DeleteKU`, `Created`, `Updated`) VALUES
(1, 'henryust12', 'henryust12', '1', '2021-09-22 19:20:32', '2021-09-22 19:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblLike`
--

DROP TABLE IF EXISTS `tblLike`;
CREATE TABLE `tblLike` (
  `LikeID` int(11) NOT NULL,
  `ArticleID` int(11) NOT NULL,
  `LikerID` varchar(255) NOT NULL,
  `Job` varchar(30) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblLike`
--

INSERT INTO `tblLike` (`LikeID`, `ArticleID`, `LikerID`, `Job`, `DeleteKU`, `Created`, `Updated`) VALUES
(1, 2, 'henryust12', 'Student', '1', '2021-09-22 19:19:41', '2021-09-22 19:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

DROP TABLE IF EXISTS `tblUsers`;
CREATE TABLE `tblUsers` (
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
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userID`, `password`, `FirstName`, `LastName`, `Gender`, `Birthday`, `Email`, `Status`, `Site`, `Phone`, `Address`, `Country`, `Job`, `Photo`, `About`, `DeleteKU`, `Created`, `Updated`) VALUES
('henryust12', 'test', 'henry', 'simarmata', 'M', '2002-01-22', 'henryust12@gmail.com', '1', 'google.com', '+8100000000', 'tokyo', 'indonesia', 'tiktok', 'avatar', 'maybe handsome', '1', '2021-09-22 19:16:02', '2021-09-22 19:16:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblArticle`
--
ALTER TABLE `tblArticle`
  ADD PRIMARY KEY (`articleID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `tblComments`
--
ALTER TABLE `tblComments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `OwnID` (`OwnID`),
  ADD KEY `CommenterID` (`CommenterID`);

--
-- Indexes for table `tblContacts`
--
ALTER TABLE `tblContacts`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `tblFollowers`
--
ALTER TABLE `tblFollowers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `tblFollowers_ibfk_1` (`OwnID`),
  ADD KEY `FollowerID` (`FollowerID`);

--
-- Indexes for table `tblLike`
--
ALTER TABLE `tblLike`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `ArticleID` (`ArticleID`),
  ADD KEY `LikerID` (`LikerID`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblArticle`
--
ALTER TABLE `tblArticle`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblComments`
--
ALTER TABLE `tblComments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblContacts`
--
ALTER TABLE `tblContacts`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblFollowers`
--
ALTER TABLE `tblFollowers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblLike`
--
ALTER TABLE `tblLike`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblArticle`
--
ALTER TABLE `tblArticle`
  ADD CONSTRAINT `tblArticle_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblComments`
--
ALTER TABLE `tblComments`
  ADD CONSTRAINT `tblComments_ibfk_1` FOREIGN KEY (`OwnID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblComments_ibfk_2` FOREIGN KEY (`CommenterID`) REFERENCES `tblUsers` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

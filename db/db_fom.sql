-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 06:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
-- Truncate table before insert `tblArticle`
--

TRUNCATE TABLE `tblArticle`;
--
-- Dumping data for table `tblArticle`
--

INSERT DELAYED IGNORE INTO `tblArticle` (`articleID`, `userID`, `title`, `content`, `VideoLink`, `Clicked`, `DeleteKU`, `Created`, `Updated`) VALUES
(2, 'evren', 'emejing epuren', 'HEHE BOY <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid, ullam. Corrupti vero ad repudiandae autem soluta iure veniam totam quia mollitia, perspiciatis eius id impedit esse, cum nam aliquid temporibus!\n    Repellendus velit nihil harum blanditiis. Cupiditate illum eum rerum nihil aut? Aut ipsa labore iure iste repellat eligendi in temporibus blanditiis, perferendis minima, ullam veritatis asperiores aspernatur nihil eius perspiciatis.\n    Odit iusto nobis sunt? Ea nostrum non nemo aliquam commodi excepturi perspiciatis, tempore quo rem autem soluta rerum officiis tenetur dolore sed numquam nisi dolorem? Placeat, corrupti! Consequatur, dolores at.\n    Laborum impedit facere illum eum officiis maiores nam sapiente, enim quasi reiciendis vel corrupti consequuntur asperiores sint, eveniet temporibus optio, similique dolorum? Ducimus nesciunt dicta nostrum iure delectus quasi quos.\n    Expedita qui aliquid, repellendus modi illum dolores. Numquam, sunt! Deserunt nam maiores aperiam, ex quaerat voluptatum id rem nobis voluptate neque culpa obcaecati unde quibusdam laborum soluta blanditiis quidem incidunt?\n    Nisi impedit similique, officiis quidem nesciunt corrupti numquam aliquam earum temporibus modi vitae a voluptatum quod debitis fugiat aliquid harum facilis obcaecati, ullam inventore quibusdam ipsa blanditiis, autem perferendis! Dolore.\n    Dolores voluptates cupiditate quam, vero maiores vel voluptatem similique error officiis molestiae minus voluptate minima incidunt ex quidem, reprehenderit quod nesciunt dicta harum delectus qui, tempore magni dolore. Reprehenderit, ipsa?\n    Ut ullam eligendi iste porro doloribus eos magnam recusandae illo molestias perferendis aspernatur ea voluptatibus quibusdam veritatis ad, provident quasi a tempora voluptatem molestiae dolor. Nobis ab esse itaque fugiat.\n    Quaerat quod, praesentium, aperiam quis excepturi at asperiores rerum, unde veritatis officia voluptatem blanditiis. Iste modi culpa ipsam, dolorem voluptate atque distinctio, in sequi quo nihil neque consectetur hic vitae.\n    Ad, similique impedit. Aliquam maiores itaque dolorum voluptates blanditiis temporibus nesciunt tempore nisi provident nostrum rerum distinctio deleniti impedit a earum enim, officiis doloremque corrupti soluta unde odit sunt quaerat.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ZUJJdeByJa0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 1000, '1', '2021-09-22 19:18:54', '2021-09-22 19:18:54'),
(3, 'henryust12', 'Test MY Article', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque quaerat at aperiam deserunt officia minus. Eum sit commodi ab saepe voluptatum consequatur recusandae dolorum atque asperiores vel hic, harum architecto.\r\nVoluptatem consequatur exercitationem voluptatibus harum fuga perferendis blanditiis expedita pariatur sequi. Dolorum, perspiciatis dolor accusamus amet autem distinctio adipisci est. Eos doloribus omnis, doloremque ipsam numquam vitae libero earum animi.\r\nQuaerat nihil eligendi, debitis, mollitia nobis commodi consequuntur cumque officiis, reprehenderit delectus quia tempora aliquid fuga saepe quas assumenda voluptate sapiente et? Fuga reiciendis voluptate iste culpa ipsum laborum sunt?\r\nMinus voluptatum saepe quod asperiores. Soluta, repudiandae quis? Assumenda, sunt molestiae! Asperiores at debitis facere sed laborum quae adipisci, molestias pariatur harum sint cupiditate soluta error aperiam? Dolorem, modi alias?', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/uhJsxKtLnVY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 8821, '1', '2021-10-28 17:02:02', '2021-10-28 17:02:02'),
(4, 'henryust12', 'Taylor Swift - Shake It Off', '\r\n►Exclusive Merch: store.taylorswift.com\r\n \r\n►Follow Taylor Swift Online\r\nInstagram: http://www.instagram.com/taylorswift\r\nFacebook: http://www.facebook.com/taylorswift\r\nTumblr: http://taylorswift.tumblr.com\r\nTwitter: http://www.twitter.com/taylorswift13\r\nWebsite: http://www.taylorswift.com\r\n \r\n►Follow Taylor Nation Online\r\nInstagram: http://www.instagram.com/taylornation\r\nTumblr: http://taylornation.tumblr.com\r\nTwitter: http://www.twitter.com/taylornation13\r\nMusic in this video\r\nLearn more\r\nListen ad-free with YouTube Premium\r\nSong\r\nShake It Off\r\nArtist\r\nTaylor Swift\r\nAlbum\r\nShake It Off\r\nWriters\r\nMax Martin, Taylor Swift, Shellback\r\nLicensed to YouTube by\r\nUMG (on behalf of Big Machine Records, LLC); BMI - Broadcast Music Inc., CMRRA, Kobalt Music Publishing, LatinAutorPerf, LatinAutor - UMPG, ASCAP, Sony ATV Publishing, UMPG Publishing, SOLAR Music Rights Management, UMPI, UNIAO BRASILEIRA DE EDITORAS DE MUSICA - UBEM, LatinAutor - SonyATV, LatinAutor, and 16 Music Rights Societies', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nfWlot6h_JM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 98263839, '1', '2021-10-28 17:02:02', '2021-10-28 17:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `tblComments`
--

DROP TABLE IF EXISTS `tblComments`;
CREATE TABLE `tblComments` (
  `CommentID` int(11) NOT NULL,
  `OwnID` varchar(255) NOT NULL,
  `CommenterID` varchar(255) NOT NULL,
  `articleID` int(11) NOT NULL,
  `CommentIN` text NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Uptadet` datetime NOT NULL
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
CREATE TABLE `tblContacts` (
  `ContactID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
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
CREATE TABLE `tblFollowers` (
  `ID` int(11) NOT NULL,
  `OwnID` varchar(255) NOT NULL,
  `FollowerID` varchar(255) NOT NULL,
  `DeleteKU` char(1) NOT NULL,
  `Created` datetime NOT NULL,
  `Updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `tblFollowers`
--

TRUNCATE TABLE `tblFollowers`;
--
-- Dumping data for table `tblFollowers`
--

INSERT DELAYED IGNORE INTO `tblFollowers` (`ID`, `OwnID`, `FollowerID`, `DeleteKU`, `Created`, `Updated`) VALUES
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
-- Truncate table before insert `tblLike`
--

TRUNCATE TABLE `tblLike`;
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
-- Truncate table before insert `tblUsers`
--

TRUNCATE TABLE `tblUsers`;
--
-- Dumping data for table `tblUsers`
--

INSERT DELAYED IGNORE INTO `tblUsers` (`userID`, `password`, `FirstName`, `LastName`, `Gender`, `Birthday`, `Email`, `Status`, `Site`, `Phone`, `Address`, `Country`, `Job`, `Photo`, `About`, `DeleteKU`, `Created`, `Updated`) VALUES
('evren', '1234', 'Evren', 'Balik', 'M', '2021-10-12', 'evren@tsb.com', '1', 'google.com', '+81999999', 'tokyp', 'turky', 'manager', NULL, 'asdasdasdsad', '1', '2021-10-28 05:18:48', '2021-10-28 05:18:48'),
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
  ADD KEY `CommenterID` (`CommenterID`),
  ADD KEY `comment_article` (`articleID`);

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
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `comment_article` FOREIGN KEY (`articleID`) REFERENCES `tblArticle` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
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


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table tblArticle
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table tblComments
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table tblContacts
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table tblFollowers
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table tblLike
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for table tblUsers
--

--
-- Truncate table before insert `pma__column_info`
--

TRUNCATE TABLE `pma__column_info`;
--
-- Truncate table before insert `pma__table_uiprefs`
--

TRUNCATE TABLE `pma__table_uiprefs`;
--
-- Truncate table before insert `pma__tracking`
--

TRUNCATE TABLE `pma__tracking`;
--
-- Metadata for database db_fom
--

--
-- Truncate table before insert `pma__bookmark`
--

TRUNCATE TABLE `pma__bookmark`;
--
-- Truncate table before insert `pma__relation`
--

TRUNCATE TABLE `pma__relation`;
--
-- Truncate table before insert `pma__pdf_pages`
--

TRUNCATE TABLE `pma__pdf_pages`;
--
-- Dumping data for table `pma__pdf_pages`
--

INSERT DELAYED IGNORE INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('db_fom', 'design');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Truncate table before insert `pma__table_coords`
--

TRUNCATE TABLE `pma__table_coords`;
--
-- Dumping data for table `pma__table_coords`
--

INSERT DELAYED IGNORE INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('db_fom', 'tblArticle', @LAST_PAGE, 1039, 382),
('db_fom', 'tblComments', @LAST_PAGE, 794, 34),
('db_fom', 'tblContacts', @LAST_PAGE, 76, 16),
('db_fom', 'tblFollowers', @LAST_PAGE, 171, 156),
('db_fom', 'tblLike', @LAST_PAGE, 1062, 180),
('db_fom', 'tblUsers', @LAST_PAGE, 497, 259);

--
-- Truncate table before insert `pma__savedsearches`
--

TRUNCATE TABLE `pma__savedsearches`;
--
-- Truncate table before insert `pma__central_columns`
--

TRUNCATE TABLE `pma__central_columns`;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2017 at 11:18 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rubys_journal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_day`
--

CREATE TABLE `tbl_day` (
  `dayID` int(2) NOT NULL,
  `dayName` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_day`
--

INSERT INTO `tbl_day` (`dayID`, `dayName`) VALUES
(0, 0),
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entry`
--

CREATE TABLE `tbl_entry` (
  `entryID` int(5) NOT NULL,
  `journalID` int(11) NOT NULL,
  `pageDate` date DEFAULT NULL,
  `imageID` int(5) NOT NULL,
  `pageSideID` int(1) NOT NULL,
  `entryDate` date DEFAULT NULL,
  `entryData` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_entry`
--

INSERT INTO `tbl_entry` (`entryID`, `journalID`, `pageDate`, `imageID`, `pageSideID`, `entryDate`, `entryData`) VALUES
(1, 1, '1946-01-01', 1, 2, '1946-01-01', 'The folks left here Dec 26, 1945. They were all here for Christmas but Harding (**) had thirteen here for about a week lots of people but we all had fun. Happy New Year.'),
(2, 1, '1946-01-01', 1, 2, '1947-01-01', 'Today we went to Monty Stoners wedding. We had dinner with Aunt Nellie, went to Enid saw Uncle Freds, Uncle George, are staying with Otto tonight it''s snowing.'),
(3, 1, '1946-01-01', 1, 2, '1948-01-01', 'Today we had Margie and Girls down here for dinner nice dinner & time I & boys went up to her house this evening for a short while.'),
(4, 1, '1946-01-01', 1, 2, '1949-01-01', 'Today a very busy day at cafe 350.00 lots of people last night we slept some this morning. We are getting ready for tonight.'),
(5, 1, '1946-01-01', 1, 2, '1950-01-01', 'Today I & the 3 children went to school then ate dinner went out to see them ice skate & listened to the radio tonight cloudy & cool all day today.'),
(6, 1, '1946-01-02', 2, 1, '1946-01-02', NULL),
(7, 1, '1946-01-02', 2, 1, '1947-01-02', 'Today it snowed all day & blowed to sure has been bad. We are here at Otto''s again tonight. We couldn''t get out to Runt''s. Larry Kay sure has a bad cold.'),
(8, 1, '1946-01-02', 2, 1, '1948-01-02', 'Today I washed almost frozen my feet & hands so cold very big washing to. Clothes didn''t dry so well either'),
(9, 1, '1946-01-02', 2, 1, '1949-01-02', 'Good day at cafe $272.31. We went to the show saw Red Skelton in "Southern Yankie" Mary Trujillo came to work tonight. I am glad to.'),
(10, 1, '1946-01-02', 2, 1, '1950-01-02', '(1950?)- Holoday today I made my Gray skirt like it pretty much & pretty cold here tonight. I cut out my dark and light blue dress have had the material for years. Larry better with cough.'),
(11, 1, '1946-01-03', 2, 2, '1946-01-03', NULL),
(12, 1, '1946-01-03', 2, 2, '1947-01-03', 'Today it was so very cold we didn''t go to the city, went to Runt''s was 12 below Hennessey. Coldest in history here in many years. Uncle John''s house was burned.'),
(13, 1, '1946-01-03', 2, 2, '1948-01-03', 'Today Better day today I ironed all day & way into the night but finished got pretty sor at Ray for not letting me where he was gone but O.K. now.'),
(14, 1, '1946-01-03', 2, 2, '1949-01-03', 'Today good day 190.68. Very cold here & some snow. Very cold tonight. I didn''t make pies today. Kids started back to school.'),
(15, 1, '1946-01-03', 2, 2, '1950-01-03', '(1950?)- Today no work at plant but I made my blue dress. The dark and light blue one. Real pretty.'),
(17, 2, '1951-01-01', 16, 2, '1951-01-01', 'asdljkf asdasd fjasl kf  skjdfl ka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `imageID` int(5) NOT NULL,
  `imageName` varchar(45) NOT NULL,
  `pageDateLeft` date DEFAULT NULL,
  `pageDateRight` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`imageID`, `imageName`, `pageDateLeft`, `pageDateRight`) VALUES
(1, '1946-1950-1.jpg', NULL, '1946-01-01'),
(2, '1946-1950-2.jpg', '1946-01-02', '1946-01-03'),
(3, '1946-1950-3.jpg', '1946-01-04', '1946-01-05'),
(4, '1946-1950-4.jpg', '1946-01-06', '1946-01-07'),
(5, '1946-1950-5.jpg', '1946-01-08', '1946-01-09'),
(6, '1946-1950-6.jpg', '1946-01-10', '1946-01-11'),
(7, '1946-1950-7.jpg', '1946-01-12', '1946-01-13'),
(8, '1946-1950-8.jpg', '1946-01-14', '1946-01-15'),
(9, '1946-1950-9.jpg', '1946-01-16', '1946-01-17'),
(10, '1946-1950-10.jpg', '1946-01-18', '1946-01-19'),
(11, '1946-1950-11.jpg', '1946-01-20', '1946-01-21'),
(12, '1946-1950-12.jpg', '1946-01-22', '1946-01-23'),
(13, '1946-1950-13.jpg', '1946-01-24', '1946-01-25'),
(14, '1946-1950-14.jpg', '1946-01-26', '1946-01-27'),
(15, '1946-1950-15.jpg', '1946-01-28', '1946-01-29'),
(16, '1951-1955-1.jpg', NULL, '1951-01-01'),
(17, '1951-1955-2.jpg', '1951-01-02', '1951-01-03'),
(18, '1951-1955-3.jpg', '1951-01-04', '1951-01-05'),
(19, '1951-1955-4.jpg', NULL, NULL),
(20, '1951-1955-6.jpg', NULL, NULL),
(21, '1951-1955-7.jpg', NULL, NULL),
(22, '1951-1955-8.jpg', NULL, NULL),
(23, '1951-1955-9.jpg', NULL, NULL),
(24, '1956-1960-1.jpg', NULL, '1956-01-01'),
(25, '1956-1960-2.jpg', '1956-01-02', '1956-01-03'),
(26, '1956-1960-3.jpg', '1956-01-04', '1956-01-05'),
(27, '1956-1960-4.jpg', '1956-01-06', '1956-01-07'),
(28, '1956-1960-5.jpg', '1956-01-08', '1956-01-09'),
(29, '1956-1960-6.jpg', '1956-01-10', '1956-01-11'),
(30, '1956-1960-7.jpg', '1956-01-12', '1956-01-13'),
(31, '1956-1960-8.jpg', '1956-01-14', '1956-01-15'),
(32, '1956-1960-9.jpg', '1956-01-16', '1956-01-17'),
(33, '1961-1965-1.jpg', NULL, '1961-01-01'),
(34, '1961-1965-2.jpg', '1961-01-02', '1961-01-03'),
(35, '1961-1965-3.jpg', '1961-01-04', '1961-01-05'),
(36, '1961-1965-4.jpg', '1961-01-06', '1961-01-07'),
(37, '1961-1965-5.jpg', '1961-01-08', '1961-01-09'),
(38, '1961-1965-6.jpg', '1961-01-10', '1961-01-11'),
(39, '1961-1965-7.jpg', '1961-01-12', '1961-01-13'),
(40, '1961-1965-8.jpg', '1961-01-14', '1961-01-15'),
(41, '1961-1965-9.jpg', '1961-01-16', '1961-01-17'),
(42, '1961-1965-10.jpg', '1961-01-18', '1961-01-19'),
(43, '1966-1968-1.jpg', NULL, '1966-01-01'),
(44, '1966-1968-2.jpg', '1966-01-02', '1966-01-03'),
(45, '1966-1968-3.jpg', '1966-01-04', '1966-01-05'),
(46, '1966-1968-4.jpg', '1966-01-06', '1966-01-07'),
(47, '1966-1968-5.jpg', '1966-01-08', '1966-01-09'),
(48, '1966-1968-6.jpg', '1966-01-10', '1966-01-11'),
(49, '1966-1968-7.jpg', '1966-01-12', '1966-01-13'),
(50, '1966-1968-8.jpg', '1966-01-14', '1966-01-15'),
(51, '1969-1973-1.jpg', '1969-01-01', '1969-01-02'),
(52, '1969-1973-2.jpg', '1969-01-03', '1969-01-04'),
(53, '1969-1973-3.jpg', '1969-01-05', '1969-01-06'),
(54, '1969-1973-4.jpg', '1969-01-07', '1969-01-08'),
(55, '1969-1973-5.jpg', '1969-01-09', '1969-01-10'),
(56, '1969-1973-6.jpg', '1969-01-11', '1969-01-12'),
(57, '1969-1973-7.jpg', '1969-01-13', '1969-01-14'),
(58, '1969-1973-8.jpg', '1969-01-15', '1969-01-16'),
(59, '1969-1973-9.jpg', '1969-01-17', '1969-01-18'),
(60, '1969-1973-10.jpg', '1969-01-19', '1969-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_journal`
--

CREATE TABLE `tbl_journal` (
  `journalID` int(2) NOT NULL,
  `journalName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_journal`
--

INSERT INTO `tbl_journal` (`journalID`, `journalName`) VALUES
(1, '1946-1950'),
(2, '1951-1955'),
(3, '1956-1960'),
(4, '1961-1965'),
(5, '1966-1968'),
(6, '1969-1973');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_month`
--

CREATE TABLE `tbl_month` (
  `monthID` int(11) NOT NULL,
  `monthName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_month`
--

INSERT INTO `tbl_month` (`monthID`, `monthName`) VALUES
(0, ''),
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_side`
--

CREATE TABLE `tbl_page_side` (
  `pageSideID` int(1) NOT NULL,
  `pageSide` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_side`
--

INSERT INTO `tbl_page_side` (`pageSideID`, `pageSide`) VALUES
(1, 'left'),
(2, 'right');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `yearID` int(11) NOT NULL,
  `yearName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`yearID`, `yearName`) VALUES
(1, '1946'),
(2, '1947'),
(3, '1948'),
(4, '1949'),
(5, '1950'),
(6, '1951'),
(7, '1952'),
(8, '1953'),
(9, '1954'),
(10, '1955'),
(11, '1956'),
(12, '1957'),
(13, '1958'),
(14, '1959'),
(15, '1960'),
(16, '1961'),
(17, '1962'),
(18, '1963'),
(19, '1964'),
(20, '1965'),
(21, '1966'),
(22, '1967'),
(23, '1968'),
(24, '1969'),
(25, '1970'),
(26, '1971'),
(27, '1972'),
(28, '1973'),
(29, '1974'),
(30, '1975'),
(31, '1976'),
(32, '1977'),
(33, '1978'),
(34, '1979'),
(35, '1980'),
(36, '1981'),
(37, '1982'),
(38, '1983'),
(39, '1984'),
(40, '1985'),
(41, '1986'),
(42, '1987'),
(43, '1988'),
(44, '1989'),
(45, '1990'),
(46, '1991'),
(47, '1992'),
(48, '1993'),
(49, '1994'),
(50, '1995');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_day`
--
ALTER TABLE `tbl_day`
  ADD PRIMARY KEY (`dayID`);

--
-- Indexes for table `tbl_entry`
--
ALTER TABLE `tbl_entry`
  ADD PRIMARY KEY (`entryID`),
  ADD KEY `fk_tbl_entry_tbl_journal_idx` (`journalID`),
  ADD KEY `fk_tbl_entry_tbl_image1_idx` (`imageID`),
  ADD KEY `fk_tbl_entry_tbl_pageSide_idx` (`pageSideID`),
  ADD KEY `pageSide` (`pageSideID`),
  ADD KEY `pageSideID` (`pageSideID`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  ADD PRIMARY KEY (`journalID`);

--
-- Indexes for table `tbl_month`
--
ALTER TABLE `tbl_month`
  ADD PRIMARY KEY (`monthID`);

--
-- Indexes for table `tbl_page_side`
--
ALTER TABLE `tbl_page_side`
  ADD PRIMARY KEY (`pageSideID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`yearID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_entry`
--
ALTER TABLE `tbl_entry`
  MODIFY `entryID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `imageID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_journal`
--
ALTER TABLE `tbl_journal`
  MODIFY `journalID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_month`
--
ALTER TABLE `tbl_month`
  MODIFY `monthID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_page_side`
--
ALTER TABLE `tbl_page_side`
  MODIFY `pageSideID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `yearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_entry`
--
ALTER TABLE `tbl_entry`
  ADD CONSTRAINT `fk_tbl_entry_tbl_image1` FOREIGN KEY (`imageID`) REFERENCES `tbl_image` (`imageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_entry_tbl_journal` FOREIGN KEY (`journalID`) REFERENCES `tbl_journal` (`journalID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_entry_tbl_page_side` FOREIGN KEY (`pageSideID`) REFERENCES `tbl_page_side` (`pageSideID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

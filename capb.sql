-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 06:11 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(1) NOT NULL,
  `User` varchar(15) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `User`, `Password`) VALUES
(0, 'capb', '$2y$10$lii9vjIJD7SdIizJLiZNo.MFhYC0Y4c.mGjS1iotsN6FLeyhKA0FG');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dashboard`
--

CREATE TABLE `admin_dashboard` (
  `StaticPages` int(10) NOT NULL,
  `Users` int(255) NOT NULL,
  `Inbox` int(255) NOT NULL,
  `FormsSubmitted` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dashboard`
--

INSERT INTO `admin_dashboard` (`StaticPages`, `Users`, `Inbox`, `FormsSubmitted`) VALUES
(4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `ID` int(20) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Pnumber` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `LinkedIn` text NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`ID`, `FullName`, `Email`, `Pnumber`, `Nationality`, `LinkedIn`, `Position`, `Role`, `Message`) VALUES
(2, 'John Hajjar', 'john-hajjar@hotmail.com', '03040506', 'Leb', 'https://linkedin.com/in/john-hajjar-1bbba8209/', 'web', 'web', 'Fusce viverra leo at iaculis posuere. Suspendisse quis elit in eros scelerisque tincidunt. Nunc viverra pretium scelerisque. Donec ac porta diam, nec euismod lacus. Sed congue est in interdum dictum. Etiam fringilla sollicitudin iaculis. Maecenas scelerisque est vitae ex suscipit eleifend.'),
(7, 'test', 'test000@gmail.com', '123123', '123123', 'https://linkedin.com/in/john-hajjar-1bbba8209/', 'p1', 'r2', 'hello, how are you hope you are doing well');

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `Phone` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Location` text NOT NULL,
  `LinkedIN` text NOT NULL,
  `Instagram` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`Phone`, `Email`, `Location`, `LinkedIN`, `Instagram`) VALUES
('+961 81-343-722', ' info@capb.me', 'Bad Idriss, Beirut, Lebanon', 'https://www.linkedin.com/company/capbme/', 'https://www.instagram.com/capb.me/');

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_form`
--

CREATE TABLE `dropdown_form` (
  `ID` int(3) NOT NULL,
  `Type` varchar(2) NOT NULL,
  `Name` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropdown_form`
--

INSERT INTO `dropdown_form` (`ID`, `Type`, `Name`) VALUES
(1, 'CP', 'ChosenPos1'),
(2, 'RT', 'RoleType1'),
(3, 'CP', 'ChosenPos2'),
(4, 'IC', 'InvCat1'),
(6, 'SS', 'SelectedService1'),
(7, 'CP', 'ChosenPos3'),
(11, 'DE', 'Defining Ent 1');

-- --------------------------------------------------------

--
-- Table structure for table `enlistment_form`
--

CREATE TABLE `enlistment_form` (
  `ID` int(20) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Pnumber` varchar(30) NOT NULL,
  `LinkedIn` text NOT NULL,
  `InvCat` varchar(30) NOT NULL,
  `PreffTH` varchar(50) NOT NULL,
  `CurrOcc` varchar(50) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enlistment_form`
--

INSERT INTO `enlistment_form` (`ID`, `FullName`, `Email`, `Pnumber`, `LinkedIn`, `InvCat`, `PreffTH`, `CurrOcc`, `Message`) VALUES
(3, 'John Hajjar', 'john-hajjar@hotmail.com', '76747895', 'https://linkedin.com/in/john-hajjar-1bbba8209/', 'InvCatttt', 'GMT2', 'Web', 'test test test asjkdfha jkha kjhf kjhas jash jkadha jkdhad kasj dhas asjk haskjdhasjkdahdjkahj ashj  as   d dkj hj  dj dhj  hj hd jhsd hjsd hd hjd sd d sd'),
(4, 'John Hajjar', 'john-hajjar@hotmail.com', '03040506', 'https://linkedin.com/in/john-hajjar-1bbba8209/', 'InvCatttt', 'GMT2', 'Web', 'test test test asjkdfha jkha kjhf kjhas jash jkadha jkdhad kasj dhas asjk haskjdhasjkdahdjkahj ashj  as   d dkj hj  dj dhj  hj hd jhsd hjsd hd hjd sd d sd'),
(5, 'test', 'test000@gmail.com', 'test123', 'https://linkedin.com/in/john-hajjar-1bbba8209/', 'c2', 'GMT2', 'Web', 'sds asdf sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `financial_records`
--

CREATE TABLE `financial_records` (
  `CumulativeValues` int(5) NOT NULL,
  `ClosedDeals` int(5) NOT NULL,
  `Return_Inv` int(5) NOT NULL,
  `Direct_Inv` int(3) NOT NULL,
  `BDI_Inv` int(3) NOT NULL,
  `RCA_services` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_records`
--

INSERT INTO `financial_records` (`CumulativeValues`, `ClosedDeals`, `Return_Inv`, `Direct_Inv`, `BDI_Inv`, `RCA_services`) VALUES
(21, 33, 13, 27, 56, 17);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(1) NOT NULL,
  `news` varchar(70) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `news`, `date`) VALUES
(1, 'CapB sponsors its first venture capital fund, Hermon Equity\r\n\r\n', 'Finance | 10.10.21'),
(2, 'CapB launches MENA Scale, a tech startup', 'Enterprise | 21.09.21'),
(3, 'CapB acquires funds in latest financing round', 'Finance | 13.07.21');

-- --------------------------------------------------------

--
-- Table structure for table `request_form`
--

CREATE TABLE `request_form` (
  `ID` int(20) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` text NOT NULL,
  `Pnumber` varchar(30) NOT NULL,
  `SelectedService` varchar(50) NOT NULL,
  `Des_Purpose` varchar(30) NOT NULL,
  `DefiningEnt` varchar(30) NOT NULL,
  `Message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_form`
--

INSERT INTO `request_form` (`ID`, `FullName`, `Email`, `Pnumber`, `SelectedService`, `Des_Purpose`, `DefiningEnt`, `Message`) VALUES
(2, 'John Hajjar', 'asdasdasdasd', 'asdasdasd', 'asdasdas', 'dasdasdasd', 'asdasdasdas', 'asdasdas asdasdas asdasdas asdasdas asdasdas asdasda sasdasdasv  asdasdas asdasdas asdasdas v asdasdas v vasdasdasv asdasdas asdasdasas dasdasa sdasdasa sdasdasa sdasdasasd asdas asdasda sasdasdas vasdasdas asdasdas asdasdas asdasdas'),
(3, 'test', 'test000@gmail.com', 'test123', 'serv1', 'test', 'test', 'a asda dasdasdas asd ad asd   asd a ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_dashboard`
--
ALTER TABLE `admin_dashboard`
  ADD PRIMARY KEY (`StaticPages`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `dropdown_form`
--
ALTER TABLE `dropdown_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enlistment_form`
--
ALTER TABLE `enlistment_form`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `financial_records`
--
ALTER TABLE `financial_records`
  ADD UNIQUE KEY `CumulativeValues` (`CumulativeValues`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request_form`
--
ALTER TABLE `request_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dropdown_form`
--
ALTER TABLE `dropdown_form`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `enlistment_form`
--
ALTER TABLE `enlistment_form`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request_form`
--
ALTER TABLE `request_form`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

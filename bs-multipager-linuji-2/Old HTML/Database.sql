-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2017 at 01:19 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Database`
--

-- --------------------------------------------------------

--
-- Table structure for table `BankEvent`
--

CREATE TABLE `BankEvent` (
  `title` varchar(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `annDetails` varchar(400) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `BBName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BankEvent`
--

INSERT INTO `BankEvent` (`title`, `startDate`, `annDetails`, `endDate`, `BBName`) VALUES
('Event1', '1.5.2017', '', '3.5.2017', 'ARC'),
('Event1', '5.5.2017', '', '8.5.2017', 'UBS');

-- --------------------------------------------------------

--
-- Table structure for table `Blood Bank`
--

CREATE TABLE `Blood Bank` (
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Blood Bank`
--

INSERT INTO `Blood Bank` (`name`, `email`, `phone`, `password`, `address`) VALUES
('ARC', 'ARC@BloodBank.com', 55555555, '123', ''),
('UBS', 'UBS@BloodBank.com', 66666666, '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `CamaiganEvent`
--

CREATE TABLE `CamaiganEvent` (
  `title` varchar(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `annDetails` varchar(400) NOT NULL,
  `location` varchar(140) NOT NULL,
  `eventDetails` varchar(400) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `COName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CamaiganEvent`
--

INSERT INTO `CamaiganEvent` (`title`, `startDate`, `annDetails`, `location`, `eventDetails`, `endDate`, `COName`) VALUES
('Event1', '1.5.2017', '', 'Riyadh', '', '4.5.2017', 'Lifeblood'),
('Event1', '5.5.2017', '', 'Riyadh', '', '9.5.2017', 'OneBlood');

-- --------------------------------------------------------

--
-- Table structure for table `Campaign Organizer`
--

CREATE TABLE `Campaign Organizer` (
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(140) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Campaign Organizer`
--

INSERT INTO `Campaign Organizer` (`name`, `email`, `address`, `phone`, `password`) VALUES
('Lifeblood', 'Lifeblood@CampaignOrg.com', '2287 Spinnaker Lane,76048 GRANBURY', 77777777, '123'),
('OneBlood', 'OneBlood@CampaignOrg.com', '470 Leghorn Rd, Malabar, FL, 32950', 88888888, '123');

-- --------------------------------------------------------

--
-- Table structure for table `Donor`
--

CREATE TABLE `Donor` (
  `email` varchar(30) NOT NULL,
  `name` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `D.O.B` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Donor`
--

INSERT INTO `Donor` (`email`, `name`, `address`, `phone`, `D.O.B`, `password`) VALUES
('Nora@gmail.com', 'nora', '60 N Hawkinson Ave, Galesburg', 9999999, '4.5.1996', '123'),
('Sara@gmail.com', 'sara', '60 Lyle Loop, Selah, WA, 98942', 111111111, '5.3.1998', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BankEvent`
--
ALTER TABLE `BankEvent`
  ADD PRIMARY KEY (`title`,`startDate`),
  ADD KEY `BBName` (`BBName`);

--
-- Indexes for table `Blood Bank`
--
ALTER TABLE `Blood Bank`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `CamaiganEvent`
--
ALTER TABLE `CamaiganEvent`
  ADD PRIMARY KEY (`title`,`startDate`),
  ADD KEY `COName` (`COName`);

--
-- Indexes for table `Campaign Organizer`
--
ALTER TABLE `Campaign Organizer`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `Donor`
--
ALTER TABLE `Donor`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BankEvent`
--
ALTER TABLE `BankEvent`
  ADD CONSTRAINT `bankevent_ibfk_1` FOREIGN KEY (`BBName`) REFERENCES `Blood Bank` (`name`);

--
-- Constraints for table `CamaiganEvent`
--
ALTER TABLE `CamaiganEvent`
  ADD CONSTRAINT `camaiganevent_ibfk_1` FOREIGN KEY (`COName`) REFERENCES `Campaign Organizer` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

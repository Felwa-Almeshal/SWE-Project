-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2017 at 09:22 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Database-4`
--

-- --------------------------------------------------------

--
-- Table structure for table `BankAnnouncement`
--

CREATE TABLE `BankAnnouncement` (
  `title` varchar(45) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `annDetails` varchar(1000) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BankAnnouncement`
--

INSERT INTO `BankAnnouncement` (`title`, `startDate`, `endDate`, `annDetails`, `id`) VALUES
('GivingisLiving', '2.1.2018', '7.1.2018', 'Be SOMEBODY EXTRAORDINARY – GIVE BLOOD!\r\nOut of every 100 people, only 4 or 5 actually give blood. And, each unit of donated blood can help several people. \r\nWe take all blood types.', 1),
('SaveLife', '3.4.2018', '8.4.2018', 'IS ONE PINCH WORTH A PERSON’S LIFE?\r\nIf you have avoided giving blood because you don’t\r\nlike needles, try this: pinch the skin on the inside of\r\nyour elbow. Regular blood donors say that’s pretty close to what it feels like when you give blood.\r\nDID YOU EVER WONDER WHAT IT WOULD\r\nFEEL LIKE TO BE A HERO? Find out by giving blood', 2);

-- --------------------------------------------------------

--
-- Table structure for table `BloodBank`
--

CREATE TABLE `BloodBank` (
  `email` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BloodBank`
--

INSERT INTO `BloodBank` (`email`, `password`, `phone`, `address`, `id`, `name`) VALUES
('1Blood@BloodBank.com', '123', 565432, 'KSA Riyadh,3234', 1, ''),
('2Blood@BloodBank.com', '123', 564322, 'KSA Jeddah,32132', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `CampaignEvent`
--

CREATE TABLE `CampaignEvent` (
  `title` varchar(45) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `eventDetails` varchar(1000) NOT NULL,
  `location` varchar(140) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CampaignEvent`
--

INSERT INTO `CampaignEvent` (`title`, `startDate`, `endDate`, `eventDetails`, `location`, `id`) VALUES
('GiveBlood', '2.6.2018', '2.8.2018', 'Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions. Join us there!', 'KSA Riyadh ,54324 ', 1),
('OneBlood', '2.1.2018', '5.1.2018', 'To ensure the safety of blood donation for both donors and recipients, all volunteer blood donors must be evaluated to determine their eligibility to give blood. The final determination will be made on the day of the donation at the blood drive or blood donation center. If you were deferred from donating in the past, you may be able to donate again. Join us there!', 'KSA Riyadh ,54323', 2);

-- --------------------------------------------------------

--
-- Table structure for table `CampaignOrganizer`
--

CREATE TABLE `CampaignOrganizer` (
  `email` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  `id` int(10) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CampaignOrganizer`
--

INSERT INTO `CampaignOrganizer` (`email`, `password`, `phone`, `address`, `id`, `name`) VALUES
('ABC@CampaignOrganizer.com', '123', 5633382, 'KSA Jedda,543332', 1, ''),
('DEF@CampaignOrganizer.com', '123', 5554323, 'KSA Riyadh,5432323', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `Donor`
--

CREATE TABLE `Donor` (
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `D.O.B` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Donor`
--

INSERT INTO `Donor` (`name`, `email`, `password`, `address`, `phone`, `D.O.B`, `id`) VALUES
('Nora', 'noraafaris@gmail.com', '123', 'KSA Riyadh , 43455 ', 5666666, '4.5.1996', 1),
('Jade', 'Jadefaris@gmail.com', '123', 'KSA Riyadh , 432254', 555555555, '6.4.1998', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BankAnnouncement`
--
ALTER TABLE `BankAnnouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `BloodBank`
--
ALTER TABLE `BloodBank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CampaignEvent`
--
ALTER TABLE `CampaignEvent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CampaignOrganizer`
--
ALTER TABLE `CampaignOrganizer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Donor`
--
ALTER TABLE `Donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BankAnnouncement`
--
ALTER TABLE `BankAnnouncement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `BloodBank`
--
ALTER TABLE `BloodBank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `CampaignEvent`
--
ALTER TABLE `CampaignEvent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `CampaignOrganizer`
--
ALTER TABLE `CampaignOrganizer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Donor`
--
ALTER TABLE `Donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `BankAnnouncement`
--
ALTER TABLE `BankAnnouncement`
  ADD CONSTRAINT `bankannouncement_ibfk_1` FOREIGN KEY (`id`) REFERENCES `BloodBank` (`id`);

--
-- Constraints for table `CampaignEvent`
--
ALTER TABLE `CampaignEvent`
  ADD CONSTRAINT `campaignevent_ibfk_1` FOREIGN KEY (`id`) REFERENCES `CampaignOrganizer` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

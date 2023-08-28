-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Apr 10, 2023 at 03:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raiseupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaignID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `goalAmount` double DEFAULT NULL,
  `currentAmount` double DEFAULT NULL,
  `statusID` int(11) NOT NULL,
  `createdAt` timestamp NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categoryID` int(20) NOT NULL,
  `currency` char(3) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaignID`, `userID`, `title`, `description`, `goalAmount`, `currentAmount`, `statusID`, `createdAt`, `updatedAt`, `categoryID`, `currency`, `image`) VALUES
(3, 7, 'Raising Money for Saving Koalas', 'This is a critical effort to preserve one of the world\'s most iconic and beloved animals. These adorable creatures are facing extinction due to habitat loss, bushfires, and climate change. The funds raised will go towards the rescue, rehabilitation, and long-term conservation of koalas and their habitats. By supporting this cause, we can help provide essential medical care, support wildlife sanctuaries, and fund scientific research to better understand and protect these fascinating animals. Every donation can make a difference and help ensure that future generations will have the chance to appreciate the unique and valuable contributions of koalas to our planet.', 1000000, 0, 1, '2023-04-06 20:07:43', '2023-04-09 19:24:42', 1, '$', 'https://images.pexels.com/photos/1770706/pexels-photo-1770706.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(4, 12, 'Eco-Friendly Bamboo Toothbrushes for a Sustainable Future', 'Help us reduce plastic waste by backing our bamboo toothbrush campaign! Our toothbrushes are made from sustainable bamboo and come with replaceable heads, reducing plastic waste and promoting eco-friendliness.', 50000, 0, 1, '2023-04-06 23:33:40', '2023-04-09 20:01:27', 1, '$', 'https://images.pexels.com/photos/3737587/pexels-photo-3737587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(5, 8, 'Revolutionizing the Coffee Industry with Sustainable Coffee Pods', 'Join our mission to make coffee pods more sustainable! Our coffee pods are 100% biodegradable and compostable, ensuring that every cup of coffee you make has a minimal impact on the environment.', 52000, 0, 1, '2023-04-07 01:31:19', '2023-04-09 20:03:34', 2, '$', 'https://images.pexels.com/photos/14436226/pexels-photo-14436226.jpeg?auto=compress&cs=tinysrgb&w=1600'),
(6, 10, 'Building Sustainable Homes for Low-Income Families', 'We\'re on a mission to build sustainable, energy-efficient homes for low-income families. Our homes will reduce energy costs and promote sustainable living, while providing families with a safe and comfortable place to live.', 500000, 0, 1, '2023-04-07 01:38:51', '2023-04-09 20:08:25', 1, '$', 'https://images.pexels.com/photos/325259/pexels-photo-325259.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(7, 7, 'Creating a Community Garden to Promote Sustainable Eating', 'Join us in creating a community garden that promotes sustainable eating and local food production. Our garden will provide fresh, organic produce to the community while reducing food waste and promoting sustainable agriculture practices.', 5000, 0, 1, '2023-04-07 01:48:07', '2023-04-09 20:11:15', 3, '$', 'https://images.pexels.com/photos/7658781/pexels-photo-7658781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(8, 7, 'Education for All', 'Our mission is to provide education to underprivileged children in rural areas who lack access to quality education. With your donation, we can provide school supplies, books, and teachers to make a lasting impact on the lives of these children and help them reach their full potential. Join us in our efforts to make education accessible to all.', 40000, 0, 1, '2023-04-07 01:48:56', '2023-04-09 20:17:51', 3, '$', 'https://images.pexels.com/photos/11580454/pexels-photo-11580454.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(22, 13, 'Team Seas - Cleaning up the Ocean, One Pound at a Time', 'Team Seas is a collaborative effort by environmental organizations, social media influencers, and concerned individuals to clean up the ocean by removing one pound of trash at a time. The campaign aims to raise awareness about the devastating impact of plastic waste on our oceans and marine life, while also funding research and development of new technologies to combat this issue. By joining forces, Team Seas hopes to create a global movement towards a cleaner, healthier ocean for all.', 1000000000, 0, 1, '2023-04-09 23:50:53', '2023-04-10 00:16:48', 1, '$', 'https://images.pexels.com/photos/3614167/pexels-photo-3614167.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(34, 13, 'Help Bring Clean Water to a Rural Village', 'Join us in our mission to bring clean and safe drinking water to a rural village in Africa. Lack of access to clean water is a major health issue for the people in this community, and with your help, we can make a difference. Our team has a plan to build a new well and filtration system that will provide access to clean water for generations to come.', 420000, 0, 1, '2023-04-10 00:15:59', '2023-04-10 00:15:59', 1, '$', 'https://images.pexels.com/photos/66346/pexels-photo-66346.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Charity Fundraising'),
(2, 'Creative Projects'),
(3, 'Content Creator and Artists');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(1) NOT NULL,
  `roleName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `roleName`) VALUES
(1, 'Donor'),
(2, 'Fundraiser'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusID` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusID`, `status`) VALUES
(1, 'Active'),
(2, 'Completed'),
(3, 'Suspended'),
(4, 'Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `roleID` int(1) NOT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `username`, `email`, `password`, `roleID`, `organization`, `address`) VALUES
(1, 'saad', 'saad123', 'saad@gmail.com', '1234', 1, NULL, NULL),
(2, 'sakib', 'sakib75', 'sakib@gmail.com', '7575', 1, NULL, NULL),
(3, 'NGolo Kante', 'Kante', 'kante@chelsea.com', 'chelsea123', 2, NULL, NULL),
(5, 'NRG Ardiis', 'ardiis', 'ardiis@nrg.com', 'ardiis123', 1, NULL, NULL),
(7, 'Drich', 'admin', 'admin@raiseup.com', 'admin123', 3, '', ''),
(8, 'johnathon trott', 'john', 'john@testing.com', 'john123', 1, NULL, NULL),
(9, 'Nrg Som', 'som', 'som@nrg.com', 'som123', 3, NULL, NULL),
(10, 'Sen Tenz', 'tenz', 'tenz@sentinels.com', 'tenz123', 1, NULL, NULL),
(12, 'Loud Aspas', 'aspas', 'aspas@loud.com', 'aspas123', 2, NULL, NULL),
(13, 'Idris Alba', 'idris', 'idris@theoffice.com', 'idris123', 1, NULL, NULL),
(14, 'after image', 'aft', 'aft@gmail.com', '123', 1, NULL, NULL),
(15, 'trialname', 'trials', 'trial@trial.com', 'trial123', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaignID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `fk_category` (`categoryID`),
  ADD KEY `statusfk` (`statusID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign`
--
ALTER TABLE `campaign`
  ADD CONSTRAINT `campaign_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_info` (`id`),
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`),
  ADD CONSTRAINT `statusfk` FOREIGN KEY (`statusID`) REFERENCES `status` (`statusID`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `roles` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Aug 28, 2023 at 09:53 PM
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
(3, 7, 'Raising Money for Saving Koalas', 'This is a critical effort to preserve one of the world\'s most iconic and beloved animals. These adorable creatures are facing extinction due to habitat loss, bushfires, and climate change. The funds raised will go towards the rescue, rehabilitation, and long-term conservation of koalas and their habitats. By supporting this cause, we can help provide essential medical care, support wildlife sanctuaries, and fund scientific research to better understand and protect these fascinating animals. Every donation can make a difference and help ensure that future generations will have the chance to appreciate the unique and valuable contributions of koalas to our planet.', 1000000, 0, 1, '2023-07-23 20:07:43', '2023-07-25 16:48:39', 1, '$', 'https://images.pexels.com/photos/1770706/pexels-photo-1770706.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(4, 12, 'Eco-Friendly Bamboo Toothbrushes for a Sustainable Future', 'Help us reduce plastic waste by backing our bamboo toothbrush campaign! Our toothbrushes are made from sustainable bamboo and come with replaceable heads, reducing plastic waste and promoting eco-friendliness.', 50000, 9800, 1, '2023-07-23 23:33:40', '2023-07-24 21:03:50', 1, '$', 'https://images.pexels.com/photos/3737587/pexels-photo-3737587.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(5, 8, 'Revolutionizing the Coffee Industry with Sustainable Coffee Pods', 'Join our mission to make coffee pods more sustainable! Our coffee pods are 100% biodegradable and compostable, ensuring that every cup of coffee you make has a minimal impact on the environment.', 52000, 1234, 1, '2023-07-24 01:31:19', '2023-07-24 21:01:34', 2, '$', 'https://images.pexels.com/photos/14436226/pexels-photo-14436226.jpeg?auto=compress&cs=tinysrgb&w=1600'),
(6, 10, 'Building Sustainable Homes for Low-Income Families', 'We\'re on a mission to build sustainable, energy-efficient homes for low-income families. Our homes will reduce energy costs and promote sustainable living, while providing families with a safe and comfortable place to live.', 500000, 0, 1, '2023-08-15 01:38:51', '2023-08-17 16:44:41', 1, '$', 'https://images.pexels.com/photos/325259/pexels-photo-325259.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(7, 7, 'Creating a Community Garden to Promote Sustainable Eating', 'Join us in creating a community garden that promotes sustainable eating and local food production. Our garden will provide fresh, organic produce to the community while reducing food waste and promoting sustainable agriculture practices.', 5000, 0, 1, '2023-08-15 01:48:07', '2023-08-23 20:11:15', 3, '$', 'https://images.pexels.com/photos/7658781/pexels-photo-7658781.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(8, 7, 'Education for All', 'Our mission is to provide education to underprivileged children in rural areas who lack access to quality education. With your donation, we can provide school supplies, books, and teachers to make a lasting impact on the lives of these children and help them reach their full potential. Join us in our efforts to make education accessible to all.', 40000, 0, 1, '2023-08-23 01:48:56', '2023-08-28 19:32:48', 3, '$', 'https://images.pexels.com/photos/11580454/pexels-photo-11580454.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(22, 13, 'Team Seas - Cleaning up the Ocean, One Pound at a Time', 'Team Seas is a collaborative effort by environmental organizations, social media influencers, and concerned individuals to clean up the ocean by removing one pound of trash at a time. The campaign aims to raise awareness about the devastating impact of plastic waste on our oceans and marine life, while also funding research and development of new technologies to combat this issue. By joining forces, Team Seas hopes to create a global movement towards a cleaner, healthier ocean for all.', 1000000000, 0, 1, '2023-08-09 23:50:53', '2023-08-12 00:16:48', 1, '$', 'https://images.pexels.com/photos/3614167/pexels-photo-3614167.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(34, 13, 'Help Bring Clean Water to a Rural Village', 'Join us in our mission to bring clean and safe drinking water to a rural village in Africa. Lack of access to clean water is a major health issue for the people in this community, and with your help, we can make a difference. Our team has a plan to build a new well and filtration system that will provide access to clean water for generations to come.', 420000, 0, 1, '2023-07-26 00:15:59', '2023-07-29 00:15:59', 1, '$', 'https://images.pexels.com/photos/66346/pexels-photo-66346.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(36, 7, 'Support Our Local Farmers', 'This campaign seeks to support local farmers by providing them with financial assistance to help them continue their work. With the funds raised, the farmers can purchase new equipment and supplies, and expand their farms to increase production and provide fresh, healthy food to the community.', 10000, 1000, 1, '2023-08-16 14:42:38', '2023-08-19 17:19:23', 1, '$', 'https://images.pexels.com/photos/916406/pexels-photo-916406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(37, 7, 'Fund Research to Find a Cure for Cancer', 'This campaign is focused on raising funds for cancer research, which will help find new treatments and ultimately a cure for cancer. The campaign will bring hope to those affected by cancer and make a significant impact on the lives of millions of people around the world.', 250000, 5600, 1, '2023-08-02 14:43:42', '2023-08-04 20:01:37', 1, '$', 'https://images.pexels.com/photos/579474/pexels-photo-579474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(38, 7, 'Help Save the Planet, One Tree at a Time', 'This campaign focuses on raising awareness about environmental issues and planting trees to help combat climate change. The funds raised will be used to purchase and plant trees in deforested areas, which will provide oxygen, prevent soil erosion, and support wildlife habitats.', 8500, 0, 1, '2023-07-24 14:46:11', '2023-07-26 14:46:11', 1, '$', 'https://images.pexels.com/photos/6963530/pexels-photo-6963530.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
(39, 5, 'Innovative Water Conservation Project for Sustainable Future', 'Our innovative water conservation project aims to address the growing water scarcity issue by implementing sustainable water management practices. Through this project, we will introduce various measures to reduce water wastage, increase water efficiency, and promote the reuse of wastewater.\r\n\r\nWe will work with local communities, educational institutions, and businesses to create awareness and promote responsible water consumption habits. Our team will conduct regular workshops and training sessions to educate people about the importance of water conservation and sustainable water management.\r\n\r\nAdditionally, we will implement rainwater harvesting systems and promote the use of water-efficient appliances, fixtures, and technologies. Our project will also focus on the development of smart irrigation systems to optimize water usage in agriculture.\r\n\r\nWith our innovative water conservation project, we aim to create a sustainable future where water resources are conserved and utilized responsibly for the well-being of our planet and future generations.\r\n\r\n\r\n\r\n\r\n', 425000, 0, 1, '2023-07-23 21:22:38', '2023-07-24 21:23:31', 2, '$', 'https://www.civilengineer9.com/wp-content/uploads/2019/04/Sustainable-Water-conservation.jpg'),
(40, 3, 'Embark on a Journey of Artistic Expression', 'Replace this with your cleaned description', 42000, 0, 1, '2023-08-28 19:41:45', '2023-08-28 19:46:47', 3, '$', 'https://finearttutorials.com/wp-content/uploads/2022/06/types-of-painting.png'),
(41, 3, 'Healing Hearts: Medical Support for Vulnerable Communities', 'Step into the circle of compassion and join us in our mission to bring healing and hope to the most vulnerable among us. The \"Healing Hearts\" campaign seeks to provide essential medical support to communities facing hardships, ensuring that health becomes a right, not a privilege.\r\n\r\n', 500000, 5000, 1, '2023-08-28 19:44:59', '2023-08-28 19:51:15', 1, '$', 'https://www.doctorswithoutborders.org/sites/default/files/msf204790_medium.jpg');

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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationID` int(11) NOT NULL,
  `campaignID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `amount` double NOT NULL,
  `method` varchar(45) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentStatus` varchar(255) DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationID`, `campaignID`, `userID`, `amount`, `method`, `createdAt`, `paymentStatus`) VALUES
(3, 4, 3, 4200, 'Card', '2023-08-22 20:40:36', 'Completed'),
(4, 36, 7, 1000, 'Card', '2023-08-03 14:47:55', 'Completed'),
(5, 37, 3, 5600, 'MFS', '2023-08-27 20:01:37', 'Completed'),
(6, 5, 5, 1234, 'Card', '2023-07-31 21:01:34', 'Completed'),
(7, 4, 5, 5600, 'Card', '2023-07-27 21:03:50', 'Completed'),
(8, 41, 3, 5000, 'Card', '2023-08-28 19:47:20', 'Completed');

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
  `address` varchar(200) DEFAULT NULL,
  `phone` bigint(15) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `username`, `email`, `password`, `roleID`, `organization`, `address`, `phone`, `image`) VALUES
(1, 'saad', 'saad123', 'saad@gmail.com', '1234', 1, NULL, NULL, NULL, ''),
(2, 'sakib', 'sakib75', 'sakib@gmail.com', '7575', 1, NULL, NULL, NULL, ''),
(3, 'NGolo Kante', 'kante', 'kante@chelsea.com', 'chelsea123', 2, 'Chelsea FC', '25th avenue, london', 12345678, 'https://d.ibtimes.co.uk/en/full/1619969/ngolo-kante.jpg'),
(5, 'NRG Ardiis', 'ardiis', 'ardiis@nrg.com', 'ardiis123', 1, 'NRG', '', 12345, 'https://cdn.oneesports.gg/cdn-data/2022/10/Valorant_Ardiis_Copenhagen2022_Feature.jpg'),
(7, 'Drich', 'admin', 'admin@raiseup.com', 'admin123', 3, '', '', NULL, ''),
(8, 'johnathon trott', 'john', 'john@testing.com', 'john123', 1, NULL, NULL, NULL, ''),
(9, 'Nrg Som', 'som', 'som@nrg.com', 'som123', 3, NULL, NULL, NULL, ''),
(10, 'Sen Tenz', 'tenz', 'tenz@sentinels.com', 'tenz123', 1, NULL, NULL, NULL, ''),
(12, 'Loud Aspas', 'aspas', 'aspas@loud.com', 'aspas123', 2, NULL, NULL, NULL, ''),
(13, 'Idris Alba', 'idris', 'idris@theoffice.com', 'idris123', 1, NULL, NULL, NULL, ''),
(14, 'after image', 'aft', 'aft@gmail.com', '123', 1, NULL, NULL, NULL, ''),
(15, 'name', 'username', 'email', 'trial123', 1, 'organization', 'address', 0, '');

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
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationID`),
  ADD KEY `campaignID` (`campaignID`),
  ADD KEY `userID` (`userID`);

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
  MODIFY `campaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`campaignID`) REFERENCES `campaign` (`campaignID`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `user_info` (`id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `roles` (`roleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

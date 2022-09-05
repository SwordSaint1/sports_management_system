-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 12:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(50) NOT NULL,
  `equipment_name` varchar(100) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(50) NOT NULL,
  `facility` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prospect_player_records`
--

CREATE TABLE `prospect_player_records` (
  `id` int(50) NOT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `height` varchar(10) DEFAULT NULL,
  `sports_playing` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `medical_conditions` varchar(255) DEFAULT NULL,
  `injury` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_person_name` varchar(100) DEFAULT NULL,
  `contact_person_contact_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prospect_player_records`
--

INSERT INTO `prospect_player_records` (`id`, `id_number`, `age`, `weight`, `gender`, `height`, `sports_playing`, `position`, `medical_conditions`, `injury`, `contact_no`, `address`, `contact_person_name`, `contact_person_contact_no`) VALUES
(1, '21-07087', '25', '60', 'Male', '5,7', 'basketball', 'point guard', 'n/a', 'n/a', '09999999999', 'sample', 'sample', '09999999999'),
(2, '21-07088', '21', '1', 'Male', '1', 'a', 'a', 'a', 'a', '12312312312', 'as', 'asdasd', '12312312312');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `yr_section` varchar(50) DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`id`, `Name`, `course`, `yr_section`, `id_number`, `email`, `password`, `role`) VALUES
(1, 'jj', 'bsit', '4th', 'admin', 'admin@mail.com', 'admin', 'admin'),
(2, 'jj', 'bsit', '4th', '21-07087', 'student@mail.com', 'admin', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_player_records`
--
ALTER TABLE `prospect_player_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prospect_player_records`
--
ALTER TABLE `prospect_player_records`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

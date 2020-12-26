-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 05:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Admin_password` varchar(255) NOT NULL,
  `AdminHashPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_name`, `Admin_password`, `AdminHashPass`) VALUES
(4, 'valdezadminoraa', 'superadmin', '$2y$10$meszRSG5SD83j1LMZtnD7.EPr94LdqpFPi8zsf6yITj.yH0Rzndpe');

-- --------------------------------------------------------

--
-- Table structure for table `questprogress`
--

CREATE TABLE `questprogress` (
  `User_ID` int(255) NOT NULL,
  `quest_1` varchar(255) NOT NULL,
  `quest_2` varchar(255) NOT NULL,
  `quest_3` varchar(255) NOT NULL,
  `quest_4` varchar(255) NOT NULL,
  `quest_5` varchar(255) NOT NULL,
  `quest_6` varchar(255) NOT NULL,
  `quest_7` varchar(255) NOT NULL,
  `quest_8` varchar(255) NOT NULL,
  `quest_9` varchar(255) NOT NULL,
  `quest_10` varchar(255) NOT NULL,
  `quest_11` varchar(255) NOT NULL,
  `quest_12` varchar(255) NOT NULL,
  `quest_13` varchar(255) NOT NULL,
  `quest_14` varchar(255) NOT NULL,
  `quest_15` varchar(255) NOT NULL,
  `QuestPause` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questprogress`
--

INSERT INTO `questprogress` (`User_ID`, `quest_1`, `quest_2`, `quest_3`, `quest_4`, `quest_5`, `quest_6`, `quest_7`, `quest_8`, `quest_9`, `quest_10`, `quest_11`, `quest_12`, `quest_13`, `quest_14`, `quest_15`, `QuestPause`) VALUES
(23, '2', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(24, '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '10');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `User_ID` bigint(255) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Middle_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `User_mail` varchar(255) NOT NULL,
  `Star` bigint(255) NOT NULL,
  `AvatarImage` varchar(255) NOT NULL,
  `inv_1` varchar(255) NOT NULL,
  `inv_2` varchar(255) NOT NULL,
  `inv_3` varchar(255) NOT NULL,
  `inv_4` varchar(255) NOT NULL,
  `inv_5` varchar(255) NOT NULL,
  `inv_6` varchar(255) NOT NULL,
  `inv_7` varchar(255) NOT NULL,
  `inv_8` varchar(255) NOT NULL,
  `inv_9` varchar(255) NOT NULL,
  `inv_10` varchar(255) NOT NULL,
  `User_date` datetime NOT NULL DEFAULT current_timestamp(),
  `HASHPASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`User_ID`, `User_name`, `User_password`, `First_name`, `Middle_name`, `Last_name`, `User_mail`, `Star`, `AvatarImage`, `inv_1`, `inv_2`, `inv_3`, `inv_4`, `inv_5`, `inv_6`, `inv_7`, `inv_8`, `inv_9`, `inv_10`, `User_date`, `HASHPASS`) VALUES
(22, '', '', '', '', '', '', 0, 'images/Userprof/default.png', '', '', '', '', '', '', '', '', '', '', '2020-12-23 05:08:50', '$2y$10$er08rlY5E6B4jGbzwGqabuV7k7NYIW8105T4w2b5PrbwDHgOq.Pha'),
(23, 'zedlav', 'zedlav', 'ALBEN', 'MACIAS', 'VALDEZ', 'Albenvaldez.macias@gmail.com', 240, 'images/Userprof/prof7.png', 'images/Userprof/prof1.png', 'images/Userprof/prof2.png', 'images/Userprof/prof3.png', 'images/Userprof/prof4.png', 'images/Userprof/prof5.png', '', 'images/Userprof/prof7.png', 'images/Userprof/prof8.png', '', 'images/Userprof/prof10.png', '2020-12-23 05:13:39', '$2y$10$xd08xPnv8NTf4xIpkKSAnuQkTHknHfOpFnS1L.DpvH/B4Ba5x.l/O'),
(26, 'alben', '21321321', 'alben', 'macias', 'valdez', 'gawagawa23@gmail.com', 0, 'images/Userprof/default.png', '', '', '', '', '', '', '', '', '', '', '2020-12-26 06:19:10', '$2y$10$TyfpoL0Ow82Qo5eCn1f7ouHUJrbza6FgvHypXGUr/Tbdt3WqVnhKa'),
(27, 'jen08', '124214', 'jennifer', 'c.', 'valdez', 'jennifercompetente.mail@gmail.com', 0, 'images/Userprof/default.png', '', '', '', '', '', '', '', '', '', '', '2020-12-26 06:20:34', '$2y$10$Znnksn3RaPhiWmvWK7cKHuUX7mrTST.QvfWFcoFT5cG3OAsVt/MyG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `questprogress`
--
ALTER TABLE `questprogress`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `User_ID` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

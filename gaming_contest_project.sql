-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 08:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_contest_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `Name` varchar(50) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `Prize_money` int(11) DEFAULT NULL,
  `Sponsor` varchar(30) NOT NULL,
  `Registration_fee` int(11) DEFAULT NULL,
  `oemail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`Name`, `type`, `Prize_money`, `Sponsor`, `Registration_fee`, `oemail`) VALUES
('asd', '', 0, 'as', 0, NULL),
('sdasd', 'asdas', 0, 'asdasdas', 0, NULL),
('Today world', 'Adventure', 20000, 'Pran', 500, 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `Code` varchar(5) NOT NULL,
  `Competition_name` varchar(50) NOT NULL,
  `Results` varchar(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(10) DEFAULT NULL,
  `Venue` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`Code`, `Competition_name`, `Results`, `Date`, `Time`, `Venue`) VALUES
('12345', 'asd', NULL, '2023-04-18', 'asdsdagfsa', 'Bottola');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `Name` varchar(50) NOT NULL,
  `Website` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `License_no` int(11) DEFAULT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`Name`, `Website`, `email`, `License_no`, `Password`) VALUES
('a', 'a', 'a@gmail.com', 0, 1),
('Ananda Biswas', 'www.abiswas.com', 'ananda.biswas@g.brac', 0, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `participates`
--

CREATE TABLE `participates` (
  `Competition_name` varchar(50) NOT NULL,
  `Team_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `played_by`
--

CREATE TABLE `played_by` (
  `Match_Code` varchar(5) NOT NULL,
  `Team_no` int(11) NOT NULL,
  `Score` varchar(10) DEFAULT NULL,
  `Position` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `played_by`
--

INSERT INTO `played_by` (`Match_Code`, `Team_no`, `Score`, `Position`) VALUES
('12345', 5, NULL, 'Win'),
('12345', 6, NULL, 'Lose');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `Name` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Team_no` int(11) NOT NULL,
  `Password` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`Name`, `Id`, `email`, `Phone`, `Address`, `Team_no`, `Password`) VALUES
('Asd', 14, 'asd@asd', '123', 'asd', 5, 123),
('Rafsan Munnaf', 2030, 'rafsan@gmail.com', '01983666625', 'Mirpur', 2, 2345),
('Saima Islam Eva', 2130, 'saima@gmail.com', '01799465843', 'Uttara', 2, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `Player_Id` int(11) NOT NULL,
  `Skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsored`
--

CREATE TABLE `sponsored` (
  `Team_no` int(11) NOT NULL,
  `Sponsored` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsored`
--

INSERT INTO `sponsored` (`Team_no`, `Sponsored`) VALUES
(10, ''),
(10, ' Anda'),
(10, ' Potol'),
(10, 'Alu');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `Name` varchar(50) NOT NULL,
  `Team_no` int(11) NOT NULL,
  `university` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`Name`, `Team_no`, `university`) VALUES
('Dragonofy', 1, NULL),
('Team_Blizzard', 2, NULL),
('Rising_Superstar', 3, NULL),
('Murgi Team', 5, '0'),
('NSU team', 6, '0'),
('Chodu Team', 10, '0');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `Team_no` int(11) NOT NULL,
  `University` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `oemail` (`oemail`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `Competition_name` (`Competition_name`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `participates`
--
ALTER TABLE `participates`
  ADD PRIMARY KEY (`Competition_name`,`Team_no`),
  ADD KEY `Team_no` (`Team_no`);

--
-- Indexes for table `played_by`
--
ALTER TABLE `played_by`
  ADD PRIMARY KEY (`Match_Code`,`Team_no`),
  ADD KEY `Team_no` (`Team_no`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Team_no` (`Team_no`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`Player_Id`,`Skill`);

--
-- Indexes for table `sponsored`
--
ALTER TABLE `sponsored`
  ADD PRIMARY KEY (`Team_no`,`Sponsored`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`Team_no`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`Team_no`,`University`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `competition`
--
ALTER TABLE `competition`
  ADD CONSTRAINT `competition_ibfk_1` FOREIGN KEY (`oemail`) REFERENCES `organizer` (`email`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`Competition_name`) REFERENCES `competition` (`Name`);

--
-- Constraints for table `participates`
--
ALTER TABLE `participates`
  ADD CONSTRAINT `participates_ibfk_1` FOREIGN KEY (`Competition_name`) REFERENCES `competition` (`Name`),
  ADD CONSTRAINT `participates_ibfk_2` FOREIGN KEY (`Team_no`) REFERENCES `team` (`Team_no`);

--
-- Constraints for table `played_by`
--
ALTER TABLE `played_by`
  ADD CONSTRAINT `played_by_ibfk_1` FOREIGN KEY (`Match_Code`) REFERENCES `matches` (`Code`),
  ADD CONSTRAINT `played_by_ibfk_2` FOREIGN KEY (`Team_no`) REFERENCES `team` (`Team_no`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`Team_no`) REFERENCES `team` (`Team_no`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`Player_Id`) REFERENCES `players` (`Id`);

--
-- Constraints for table `sponsored`
--
ALTER TABLE `sponsored`
  ADD CONSTRAINT `sponsored_ibfk_1` FOREIGN KEY (`Team_no`) REFERENCES `team` (`Team_no`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`Team_no`) REFERENCES `team` (`Team_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

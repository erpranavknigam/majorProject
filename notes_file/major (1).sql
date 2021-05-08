-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 07:55 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `Title` varchar(50) COLLATE utf8_bin NOT NULL,
  `Description` varchar(100) COLLATE utf8_bin NOT NULL,
  `Due` date NOT NULL,
  `File` varchar(100) COLLATE utf8_bin NOT NULL,
  `Teacher Id` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`Title`, `Description`, `Due`, `File`, `Teacher Id`) VALUES
('test 1', 'test 1 des', '2021-05-30', '2021-05-04__1_ (1).pdf', '56125'),
('test 1', 'test 1 des', '2021-05-30', '2021-05-04__1_ (1).pdf', '56125'),
('test 1', 'test 1 des', '2021-05-30', '2021-05-04__1_ (1).pdf', '56125'),
('test 1', 'test 1 des', '2021-05-30', '2021-05-04__1_ (1).pdf', '56125'),
('core java', 'Test fil', '2021-05-29', 'kanker (1).html', '56125');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Roll` varchar(10) COLLATE utf8_bin NOT NULL,
  `Department` varchar(30) COLLATE utf8_bin NOT NULL,
  `Semester` int(2) NOT NULL,
  `Is_Present` int(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Name`, `Roll`, `Department`, `Semester`, `Is_Present`, `Date`) VALUES
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-06-06'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-06-06'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-07-06'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 0, '2021-07-06'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2022-12-02'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 0, '2022-12-02'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-07-05'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-07-05'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Title` varchar(30) COLLATE utf8_bin NOT NULL,
  `Description` varchar(100) COLLATE utf8_bin NOT NULL,
  `File` varchar(200) COLLATE utf8_bin NOT NULL,
  `Teacher Id` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Title`, `Description`, `File`, `Teacher Id`) VALUES
('notes test 1', '0', '2021-05-04__1_ (1).pdf', '56125'),
('notes test 2', 'Notes test 2 des', '2021-05-04__1_ (1).pdf', '56125');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` varchar(6) COLLATE utf8_bin NOT NULL,
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Roll` varchar(10) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(10) COLLATE utf8_bin NOT NULL,
  `Department` varchar(30) COLLATE utf8_bin NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Roll`, `Email`, `Password`, `Department`, `Semester`) VALUES
('Ani19', 'Ankiet Dubey', '59113', 'aniketdubey528@gmail.com', '123456789', 'Computer Science & Engineering', 8),
('PK094', 'PRANAVKANT NIGAM', '59111', 'NIGAMKPRANAV@GMAIL.COM', '9340781147', 'Computer Science & Engineering', 8),
('SN301', 'Saiba Noor', '59116', 'noorsaiba78630@gmail.com', 'saiba1999', 'Computer Science & Engineering', 8);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` varchar(6) COLLATE utf8_bin NOT NULL,
  `Name` varchar(30) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `Name`, `Email`, `Password`) VALUES
('56125', 'Rajesh', 'rajuraj@gmail.com', '12345'),
('SR1989', 'Seema ', 'seema@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Roll` (`Roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

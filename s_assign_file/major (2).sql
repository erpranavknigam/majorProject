-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 07:38 AM
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
('core java', 'Test fil', '2021-05-29', 'kanker (1).html', '56125'),
('test', 'abc', '2021-05-30', 'major (1).sql', 'NM199'),
('introduction to algorithms', 'Algo', '2021-05-30', 'major (1).sql', '56125');

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
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-05-08'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-05-08'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-05-08'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 0, '2021-05-09'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-05-09'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-05-09'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-05-10'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-05-10'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-05-10'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-05-11'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-05-11'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 0, '2021-05-11'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-05-15'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-05-15'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 0, '2021-05-15'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-06-01'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-06-01'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 0, '2021-06-01'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 0, '2021-06-01'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-05-18'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-05-18'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-05-18'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-05-18'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-06-30'),
('', '', '', 0, 0, '2021-06-30'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('', '', '', 0, 0, '2021-05-18'),
('Nivedita', '12564', 'Electrical Engineering', 8, 1, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('', '', '', 0, 0, '2021-05-10'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 0, '2021-06-11'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('', '', '', 0, 0, '2021-06-11'),
('Ankiet Dubey', '59113', 'Computer Science & Engineering', 8, 0, '2021-06-11'),
('Pinky', '59122', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('PRANAVKANT NIGAM', '59111', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('Saiba Noor', '59116', 'Computer Science & Engineering', 8, 1, '2021-06-11'),
('', '', '', 0, 0, '2021-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Title` varchar(30) COLLATE utf8_bin NOT NULL,
  `Description` varchar(100) COLLATE utf8_bin NOT NULL,
  `File` varchar(200) COLLATE utf8_bin NOT NULL,
  `Teacher Id` varchar(5) COLLATE utf8_bin NOT NULL,
  `Department` varchar(30) COLLATE utf8_bin NOT NULL,
  `Semester` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Title`, `Description`, `File`, `Teacher Id`, `Department`, `Semester`) VALUES
('test notes', 'Test notes des', 'baloda bazar (1).html', '56125', 'Computer Science & Engineering', 8),
('test notes', 'Description of test notes', 'major (1).sql', '56125', 'Computer Science & Engineering', 8);

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
('NM1998', 'Nivedita', '12564', 'Nivi@gmail.com', '123456789', 'Electrical Engineering', 8),
('PD1999', 'Pinky', '59122', 'pinkypd09@gmail.com', '123456789', 'Computer Science & Engineering', 8),
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
('NM1998', 'Nivedita ', 'Nivi@gmail.com', '123456789'),
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

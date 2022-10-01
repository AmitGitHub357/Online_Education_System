-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 08:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileupload`
--

CREATE TABLE `fileupload` (
  `File_id` int(11) NOT NULL,
  `File_Path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileupload`
--

INSERT INTO `fileupload` (`File_id`, `File_Path`) VALUES
(1, 'images/Array'),
(2, 'images/Array'),
(3, 'images/Array'),
(4, 'images/6th Sem Marksheet.jpg'),
(5, 'images/2nd Sem Marksheet.jpg'),
(6, 'images/Array'),
(7, 'images/Array'),
(8, 'images/Array'),
(9, 'images/Array'),
(10, 'images/'),
(11, 'images/E:xampp	mpphp5EBC.tmp'),
(12, 'images/bg-title-01.jpg'),
(13, 'images/bg-title-02.jpg'),
(14, 'images/bg-title-01.jpg'),
(15, 'images/bg-title-02.jpg'),
(16, 'images/avatar-01.jpg'),
(17, 'images/avatar-02.jpg'),
(18, 'images/avatar-05.jpg'),
(19, 'images/avatar-06.jpg'),
(20, 'images/avatar-big-01.jpg'),
(21, 'File/avatar-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'Tushar', 'tushar@gmail.com', '123'),
(2, 'ABC', 'abc@gmail.com', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fileupload`
--
ALTER TABLE `fileupload`
  ADD PRIMARY KEY (`File_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fileupload`
--
ALTER TABLE `fileupload`
  MODIFY `File_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

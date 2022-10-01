-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 10:21 PM
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
-- Database: `online_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL,
  `Admin_Type` enum('SuperAdmin','Admin') NOT NULL,
  `Admin_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Admin_Entry_Date` datetime NOT NULL,
  `Admin_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_Type`, `Admin_Status`, `Admin_Entry_Date`, `Admin_Update_Date`) VALUES
(1, 'ABC', 'abc@gmail.com', '123', 'Admin', 'Active', '0000-00-00 00:00:00', '2019-11-20 12:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_id` int(11) NOT NULL,
  `Category_Name` varchar(50) NOT NULL,
  `Category_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Category_Entry_Date` datetime NOT NULL,
  `Category_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_id`, `Category_Name`, `Category_Status`, `Category_Entry_Date`, `Category_Update_Date`) VALUES
(2, 'Bussiness', 'Active', '0000-00-00 00:00:00', '2019-11-27 02:15:44'),
(3, 'Management', 'Active', '0000-00-00 00:00:00', '2019-11-27 02:15:46'),
(6, 'ABCD', 'Deactive', '2019-11-20 01:03:42', '2019-12-03 02:40:09'),
(7, 'Information Technology', 'Active', '2019-11-27 12:31:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_id` int(11) NOT NULL,
  `City_Name` varchar(50) NOT NULL,
  `State_id` int(11) NOT NULL,
  `City_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `City_Entry_Date` datetime NOT NULL,
  `City_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_id`, `City_Name`, `State_id`, `City_Status`, `City_Entry_Date`, `City_Update_Date`) VALUES
(4, 'Surat', 17, 'Deactive', '2019-11-20 10:34:58', '2019-11-27 01:49:34'),
(5, 'Pune', 18, 'Active', '2019-11-20 10:35:35', '0000-00-00 00:00:00'),
(6, 'Panji', 12, 'Active', '2019-11-20 10:35:44', '0000-00-00 00:00:00'),
(7, 'Mumbai', 18, 'Active', '2019-11-20 01:18:57', '2019-11-20 01:22:21'),
(8, 'Dhule', 18, 'Active', '2019-11-27 02:19:52', '0000-00-00 00:00:00'),
(9, 'Dhule', 18, 'Active', '2019-11-29 01:58:34', '0000-00-00 00:00:00'),
(10, 'Aurangabad', 18, 'Active', '2019-12-01 10:24:16', '0000-00-00 00:00:00'),
(11, 'Ahemadnagar', 18, 'Active', '2019-12-01 10:27:22', '0000-00-00 00:00:00'),
(12, 'Dhule', 18, 'Active', '2019-12-01 10:28:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Contact_id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Email` varchar(50) NOT NULL,
  `User_Mobile` bigint(20) NOT NULL,
  `User_Subject` varchar(50) NOT NULL,
  `User_Message` varchar(100) NOT NULL,
  `Contact_Status` enum('Active','Deactive') NOT NULL,
  `Contact_Entry_Date` datetime NOT NULL,
  `Contact_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Contact_id`, `User_Name`, `User_Email`, `User_Mobile`, `User_Subject`, `User_Message`, `Contact_Status`, `Contact_Entry_Date`, `Contact_Update_Date`) VALUES
(1, 'Tushar Sonar', 'tushara4948@gmail.com', 7048732935, '', 'This is good Website', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course_id` int(11) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `Course_Fees` double NOT NULL,
  `Course_Period` int(11) NOT NULL,
  `Category_id` int(11) NOT NULL,
  `Course_Image` varchar(500) NOT NULL,
  `Course_Description` varchar(500) NOT NULL,
  `Course_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Course_Entry_Date` datetime NOT NULL,
  `Course_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course_id`, `Course_Name`, `Course_Fees`, `Course_Period`, `Category_id`, `Course_Image`, `Course_Description`, `Course_Status`, `Course_Entry_Date`, `Course_Update_Date`) VALUES
(39, 'PHP', 15000, 12, 7, 'Images/bg-title-02.jpg', 'This is PHP', 'Active', '2019-12-03 02:14:24', '0000-00-00 00:00:00'),
(40, 'Marketing', 10000, 10, 2, 'Images/bg-title-01.jpg', 'This is Marketing Course', 'Active', '2019-12-03 02:40:59', '2019-12-03 02:48:22'),
(41, 'Python', 12000, 8, 7, 'Images/events-02.jpg', 'Python is an interpreted, high-level, general-purpose programming language. Created by Guido van Rossum and first released in 1991, Python\'s design philosophy emphasizes code readability with its notable use of significant whitespace. ... Python is dynamically typed and garbage-collected.\r\nLanguage paradigms: Interpreted language, D...\r\nLanguage designers: Guido van Rossum', 'Active', '2019-12-07 02:23:28', '2019-12-07 02:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_id` int(11) NOT NULL,
  `Event_Name` varchar(100) NOT NULL,
  `Event_Date` date NOT NULL,
  `Event_Time` time NOT NULL,
  `Event_Location` varchar(50) NOT NULL,
  `Event_Description` varchar(500) NOT NULL,
  `Event_Image` varchar(200) NOT NULL,
  `Event_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Event_Entry_Date` datetime NOT NULL,
  `Event_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_id`, `Event_Name`, `Event_Date`, `Event_Time`, `Event_Location`, `Event_Description`, `Event_Image`, `Event_Status`, `Event_Entry_Date`, `Event_Update_Date`) VALUES
(1, 'Cricket', '2020-11-01', '23:59:00', 'Surat', 'This is Cricket.', 'Images/avatar-03.jpg', 'Active', '2019-12-07 12:34:49', '0000-00-00 00:00:00'),
(2, 'Sport', '2018-12-31', '23:59:00', 'Bharuch', 'This is Sport', 'Images/avatar-05.jpg', 'Active', '2019-12-07 12:59:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `Exam_id` int(11) NOT NULL,
  `Exam_Name` int(11) NOT NULL,
  `Exam_Date` datetime NOT NULL,
  `Course_id` int(11) NOT NULL,
  `Exam_Status` enum('Pending','Taken') NOT NULL DEFAULT 'Pending',
  `Exam_Entry_Date` datetime NOT NULL,
  `Exam_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`Exam_id`, `Exam_Name`, `Exam_Date`, `Course_id`, `Exam_Status`, `Exam_Entry_Date`, `Exam_Update_Date`) VALUES
(1, 4, '2019-12-19 14:00:00', 39, 'Pending', '2019-12-04 12:31:29', '0000-00-00 00:00:00'),
(2, 6, '2019-12-08 13:00:00', 41, 'Pending', '2019-12-07 11:09:02', '0000-00-00 00:00:00'),
(3, 6, '2019-12-08 01:00:00', 40, 'Pending', '2019-12-07 11:21:00', '0000-00-00 00:00:00'),
(5, 6, '2019-12-10 01:25:00', 39, 'Pending', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_type`
--

CREATE TABLE `exam_type` (
  `Exam_Type_id` int(11) NOT NULL,
  `Exam_Type` varchar(50) NOT NULL,
  `Exam_Type_Entry_Date` datetime NOT NULL,
  `Exam_Type_Update_Date` datetime NOT NULL,
  `Exam_Type_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_type`
--

INSERT INTO `exam_type` (`Exam_Type_id`, `Exam_Type`, `Exam_Type_Entry_Date`, `Exam_Type_Update_Date`, `Exam_Type_Status`) VALUES
(4, 'Weekly Exam', '2019-11-05 03:22:01', '2019-11-27 01:49:54', 'Active'),
(5, 'Final Exam', '2019-11-13 01:19:10', '2019-11-27 01:50:01', 'Active'),
(6, 'Daily Exam', '2019-12-03 03:18:34', '2019-12-03 03:18:34', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `Material_id` int(11) NOT NULL,
  `Material_File` varchar(100) NOT NULL,
  `Lecture_No` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `Material_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Material_Entry_Date` datetime NOT NULL,
  `Material_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`Material_id`, `Material_File`, `Lecture_No`, `User_id`, `Course_id`, `Material_Status`, `Material_Entry_Date`, `Material_Update_Date`) VALUES
(7, 'Images/ict3_Syllabus.pdf', 1, 3, 39, 'Active', '2019-12-07 04:09:55', '0000-00-00 00:00:00'),
(8, 'Images/M.Sc. ICT Sem.2.pdf', 2, 1, 39, 'Active', '2019-12-07 04:16:25', '0000-00-00 00:00:00'),
(9, 'Images/DC LONG.pdf', 1, 1, 41, 'Active', '2019-12-07 03:29:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Notification_id` int(11) NOT NULL,
  `Notification_Title` varchar(50) NOT NULL,
  `Notification_Description` varchar(100) NOT NULL,
  `Notification_Date` datetime NOT NULL,
  `Notification_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Notification_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Notification_id`, `Notification_Title`, `Notification_Description`, `Notification_Date`, `Notification_Status`, `Notification_Update_Date`) VALUES
(2, 'Exam', 'Your Exam will be on 11th December, 2018 at 11:00 AM', '0000-00-00 00:00:00', 'Active', '2019-11-28 12:26:29'),
(3, 'Final Exam Notification', 'Your Final Exam Will Start From 10th December, 2019', '2019-10-26 06:00:32', 'Active', '2019-11-20 09:50:43'),
(5, 'ABC', 'ABC', '2019-11-20 09:18:06', 'Deactive', '2019-12-05 02:40:44');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Question_id` int(11) NOT NULL,
  `Exam_id` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Option_A` varchar(50) NOT NULL,
  `Option_B` varchar(50) NOT NULL,
  `Option_C` varchar(50) NOT NULL,
  `Option_D` varchar(50) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  `Question_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Question_Entry_Date` datetime NOT NULL,
  `Question_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Question_id`, `Exam_id`, `Question`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `Answer`, `Question_Status`, `Question_Entry_Date`, `Question_Update_Date`) VALUES
(1, 1, 'Who is the father of PHP', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 'Rasmus Lerdorf', 'Active', '2019-12-04 01:23:30', '0000-00-00 00:00:00'),
(2, 1, 'Which of the following type of variables are special type that only has one value: NULL?', 'Strings', 'Boubles', 'Booleans', 'NULL', 'NULL', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `Result_id` int(11) NOT NULL,
  `Exam_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Marks` double NOT NULL,
  `Result_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Result_Entry_Date` datetime NOT NULL,
  `Result_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Result_id`, `Exam_id`, `User_id`, `Marks`, `Result_Status`, `Result_Entry_Date`, `Result_Update_Date`) VALUES
(1, 1, 6, 2, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 6, 2, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 6, 1, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `State_id` int(11) NOT NULL,
  `State_Name` varchar(50) NOT NULL,
  `State_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `State_Entry_Date` datetime NOT NULL,
  `State_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_id`, `State_Name`, `State_Status`, `State_Entry_Date`, `State_Update_Date`) VALUES
(12, 'Goa', 'Active', '0000-00-00 00:00:00', '2019-12-03 11:56:35'),
(14, 'Panjab', 'Active', '0000-00-00 00:00:00', '2019-12-03 02:35:02'),
(15, 'Hariyana', 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Gujarat', 'Deactive', '0000-00-00 00:00:00', '2019-11-13 01:07:56'),
(18, 'Maharashtra', 'Active', '0000-00-00 00:00:00', '2019-10-23 12:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `student_notification`
--

CREATE TABLE `student_notification` (
  `User_id` int(11) NOT NULL,
  `Notification_id` int(11) NOT NULL,
  `Notification_Status` enum('Pending','Sent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `Syllabus_id` int(11) NOT NULL,
  `File_Name` varchar(100) NOT NULL,
  `Syllabus_PDF` varchar(100) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `Syllabus_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `Syllabus_Entry_Date` datetime NOT NULL,
  `Syllabus_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`Syllabus_id`, `File_Name`, `Syllabus_PDF`, `Course_id`, `Syllabus_Status`, `Syllabus_Entry_Date`, `Syllabus_Update_Date`) VALUES
(5, '', 'M.Sc. ICT Sem.2.pdf', 39, 'Active', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  `Gender` enum('Male','Female','Transgender') DEFAULT 'Male',
  `DOB` date NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City_id` int(11) DEFAULT NULL,
  `User_Type` enum('Student','Teacher') NOT NULL,
  `User_Status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `User_Entry_Date` datetime NOT NULL,
  `User_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `Username`, `Password`, `Name`, `Mobile_Number`, `Gender`, `DOB`, `Photo`, `Address`, `City_id`, `User_Type`, `User_Status`, `User_Entry_Date`, `User_Update_Date`) VALUES
(1, 'tushara4948@gmail.com', 'Tushar_1998', 'Tushar', 8780635933, 'Male', '1998-03-18', 'Images/IMG_20191029_115752.JPG', 'Udhna', 5, 'Teacher', 'Active', '2019-12-07 01:30:43', '0000-00-00 00:00:00'),
(3, 'rahul@gmail.com', 'Rahul_1995', 'Rahul', 8866294801, 'Male', '1995-08-03', 'Images/IMG20191101182506.jpg', 'Gopipura', 11, 'Teacher', 'Active', '2019-12-07 01:32:27', '0000-00-00 00:00:00'),
(5, 'abc@gmail.com', 'ABC_2019', 'ABC', 8780635933, 'Male', '2019-10-30', NULL, NULL, 5, 'Student', 'Active', '2019-12-07 02:56:29', '0000-00-00 00:00:00'),
(6, 'pqr@gmail.com', 'PQR_2019', 'PQR', 7048732935, 'Male', '2019-12-31', NULL, NULL, 7, 'Student', 'Active', '2019-12-07 02:56:48', '0000-00-00 00:00:00'),
(7, 'sachin@gmail.com', 'Sachin_1988', 'Sachin', 9855642132, 'Male', '1988-01-01', NULL, NULL, 7, 'Student', 'Active', '2019-12-07 03:24:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_course`
--

CREATE TABLE `users_course` (
  `User_id` int(11) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `User_Course_Status` enum('Pursuing','Completed') NOT NULL DEFAULT 'Pursuing',
  `User_Course_Entry_Date` datetime NOT NULL,
  `User_Course_Update_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_course`
--

INSERT INTO `users_course` (`User_id`, `Course_id`, `User_Course_Status`, `User_Course_Entry_Date`, `User_Course_Update_Date`) VALUES
(1, 39, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 39, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(1, 40, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 41, 'Pursuing', '2019-12-07 03:24:38', '0000-00-00 00:00:00'),
(3, 41, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 40, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 39, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 40, 'Pursuing', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_id`),
  ADD KEY `State_id` (`State_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_id`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`Exam_id`),
  ADD KEY `Course_id` (`Course_id`),
  ADD KEY `Exam_Name` (`Exam_Name`);

--
-- Indexes for table `exam_type`
--
ALTER TABLE `exam_type`
  ADD PRIMARY KEY (`Exam_Type_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`Material_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Course_id` (`Course_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Notification_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Question_id`),
  ADD KEY `Exam_id` (`Exam_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`Result_id`),
  ADD KEY `Exam_id` (`Exam_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`State_id`);

--
-- Indexes for table `student_notification`
--
ALTER TABLE `student_notification`
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Notification_id` (`Notification_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`Syllabus_id`),
  ADD KEY `Course_id` (`Course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `City_id` (`City_id`);

--
-- Indexes for table `users_course`
--
ALTER TABLE `users_course`
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Course_id` (`Course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `City_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `Exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam_type`
--
ALTER TABLE `exam_type`
  MODIFY `Exam_Type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `Material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `Result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `State_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `Syllabus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`State_id`) REFERENCES `state` (`State_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `category` (`Category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD CONSTRAINT `exam_schedule_ibfk_1` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exam_schedule_ibfk_2` FOREIGN KEY (`Exam_Name`) REFERENCES `exam_type` (`Exam_Type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_ibfk_2` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`Exam_id`) REFERENCES `exam_schedule` (`Exam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`Exam_id`) REFERENCES `exam_schedule` (`Exam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_notification`
--
ALTER TABLE `student_notification`
  ADD CONSTRAINT `student_notification_ibfk_1` FOREIGN KEY (`Notification_id`) REFERENCES `notification` (`Notification_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_notification_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD CONSTRAINT `syllabus_ibfk_1` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`City_id`) REFERENCES `city` (`City_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_course`
--
ALTER TABLE `users_course`
  ADD CONSTRAINT `users_course_ibfk_1` FOREIGN KEY (`Course_id`) REFERENCES `course` (`Course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_course_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

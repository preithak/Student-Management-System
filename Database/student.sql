-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 04:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(30) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Date`, `ID`, `mail`, `Contact`, `Address`, `Passw`) VALUES
('Sohan Sharma', '1885-12-05', '201', 'sohan@gmail.com', 9841256587, 'Bangalore', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `total1` bigint(20) NOT NULL,
  `attended1` bigint(20) NOT NULL,
  `total2` bigint(20) NOT NULL,
  `attended2` bigint(20) NOT NULL,
  `total3` bigint(20) NOT NULL,
  `attended3` bigint(20) NOT NULL,
  `total4` bigint(20) NOT NULL,
  `attended4` bigint(20) NOT NULL,
  `total5` bigint(20) NOT NULL,
  `attended5` bigint(20) NOT NULL,
  `total6` bigint(20) NOT NULL,
  `attended6` bigint(20) NOT NULL,
  `total7` bigint(20) NOT NULL,
  `attended7` bigint(20) NOT NULL,
  `total8` bigint(20) NOT NULL,
  `attended8` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `Semester`, `Department`, `total1`, `attended1`, `total2`, `attended2`, `total3`, `attended3`, `total4`, `attended4`, `total5`, `attended5`, `total6`, `attended6`, `total7`, `attended7`, `total8`, `attended8`) VALUES
('501', '5', 'CSE', 70, 70, 70, 20, 70, 65, 50, 20, 60, 25, 30, 20, 80, 65, 90, 75),
('1BH15CS023', '5', 'CSE', 70, 70, 70, 20, 70, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1BH15CS027', '5', 'CSE', 70, 70, 70, 20, 70, 65, 65, 62, 67, 67, 50, 48, 30, 28, 20, 17),
('1BH15CS028', '5', 'CSE', 70, 70, 70, 20, 70, 60, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1BH15CS044', '5', 'CSE', 70, 70, 70, 20, 70, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1BH16CS001', '1', 'CSE', 50, 20, 50, 49, 45, 43, 36, 29, 30, 30, 50, 45, 30, 30, 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `attenupto`
--

CREATE TABLE `attenupto` (
  `ID` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `upto1` varchar(20) NOT NULL,
  `upto2` varchar(20) NOT NULL,
  `upto3` varchar(20) NOT NULL,
  `upto4` varchar(20) NOT NULL,
  `upto5` varchar(20) NOT NULL,
  `upto6` varchar(20) NOT NULL,
  `upto7` varchar(20) NOT NULL,
  `upto8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attenupto`
--

INSERT INTO `attenupto` (`ID`, `Semester`, `Department`, `upto1`, `upto2`, `upto3`, `upto4`, `upto5`, `upto6`, `upto7`, `upto8`) VALUES
('501', '5', 'CSE', '2017-11-08', '2017-11-09', '2017-11-10', '2017-11-05', '2017-11-05', '2017-11-05', '2017-11-05', '2017-02-07'),
('1BH15CS023', '5', 'CSE', '2017-11-08', '2017-11-09', '2017-11-10', '', '', '', '', ''),
('1BH15CS027', '5', 'CSE', '2017-11-08', '2017-11-08', '2017-11-09', '2017-11-10', '2017-11-12', '2017-11-15', '2017-11-15', '2017-11-13'),
('1BH15CS028', '5', 'CSE', '2017-11-08', '2017-11-09', '2017-11-10', '', '', '', '', ''),
('1BH15CS044', '5', 'CSE', '2017-11-08', '2017-11-09', '2017-11-10', '', '', '', '', ''),
('1BH16CS001', '1', 'CSE', '2017-11-01', '2017-11-02', '2017-11-03', '2017-11-04', '2017-11-05', '2017-11-06', '2017-11-07', '2017-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `number` int(11) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `Comments` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`number`, `ID`, `mail`, `Comments`) VALUES
(2, '502', 'a@c.com', '515656sad65as'),
(162, '505', 'a@n.com', 'ad;khrkhlkbcieaulyfhld ');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ID` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Subject1` bigint(20) NOT NULL,
  `Subject2` bigint(20) NOT NULL,
  `Subject3` bigint(20) NOT NULL,
  `Subject4` bigint(20) NOT NULL,
  `Subject5` bigint(20) NOT NULL,
  `Subject6` bigint(20) NOT NULL,
  `Subject7` bigint(20) NOT NULL,
  `Subject8` bigint(20) NOT NULL,
  `Updated` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ID`, `Semester`, `Department`, `Subject1`, `Subject2`, `Subject3`, `Subject4`, `Subject5`, `Subject6`, `Subject7`, `Subject8`, `Updated`) VALUES
('1BH15CS023', '5', 'CSE', 77, 70, 50, 72, 0, 0, 0, 0, '2017/11/21'),
('1BH15CS027', '5', 'CSE', 77, 70, 40, 73, 65, 63, 62, 20, '2017/11/29'),
('1BH15CS028', '5', 'CSE', 77, 70, 30, 74, 0, 0, 0, 0, '2017/11/21'),
('1BH15CS044', '5', 'CSE', 77, 65, 20, 75, 0, 0, 0, 0, '2017/11/21'),
('501', '5', 'CSE', 77, 20, 10, 76, 0, 0, 0, 0, '2017/11/21'),
('1BH16CS001', '1', 'CSE', 75, 76, 77, 74, 73, 70, 35, 37, '2017/11/24');

-- --------------------------------------------------------

--
-- Table structure for table `sid`
--

CREATE TABLE `sid` (
  `ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sid`
--

INSERT INTO `sid` (`ID`) VALUES
('1BH15CS023'),
('1BH15CS027'),
('1BH15CS028'),
('1BH15CS044'),
('1BH15CV026'),
('1BH16CS001'),
('501'),
('503'),
('505'),
('555');

-- --------------------------------------------------------

--
-- Table structure for table `studentprof`
--

CREATE TABLE `studentprof` (
  `Name` varchar(20) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Semester` varchar(10) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentprof`
--

INSERT INTO `studentprof` (`Name`, `Date`, `ID`, `Department`, `Semester`, `mail`, `Contact`, `Address`, `Passw`) VALUES
('Paawan Rana', '1996-12-21', '1BH15CS023', 'CSE', '5', 'pawan@gmail.com', 9123456789, 'Kathmandu,Nepal', '123456789'),
('Pradeep Thapa', '1996-12-01', '1BH15CS027', 'CSE', '5', 'pradeep@gmail.com', 1234567890, 'Bajhang,Nepal', '123456789'),
('Preithak Shrestha', '1997-11-16', '1BH15CS028', 'CSE', '5', 'preithak@gmail.com', 9874512365, 'Kathmandu, Nepal', '123456789'),
('Utsav Thapa', '1996-02-04', '1BH15CS044', 'CSE', '5', 'utsav@gmail.com', 9234567891, 'Gorkha,Nepal', '123456789'),
('Chandra Prakash', '1996-05-23', '1BH15CV026', 'CV', '5', 'chandra@gmail.com', 9652365874, 'Bangalore, Karnataka', '12345'),
('Ayush Thapa', '1997-01-25', '1BH16CS001', 'CSE', '1', 'ayush@gmail.com', 9845123658, 'Bangalore, Karnataka', '123456'),
('Rosan Acharya', '1997-12-01', '501', 'CSE', '5', 'rosan@gmail.com', 9658745135, 'Bangalore, Karnataka', '123456789'),
('Suyog Kc', '1997-12-01', '503', 'CV', '3', 'suyog@gmail.com', 9632519995, 'Kathmandu, Nepal', '123456789'),
('Sohan Sharma', '1986-10-05', '505', 'CSE', '3', 'sohan@gmail.com', 9845489052, 'Mangalore', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Semester` varchar(10) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `SubCode1` varchar(20) NOT NULL,
  `Subject1` varchar(40) NOT NULL,
  `Max1` bigint(20) NOT NULL,
  `SubCode2` varchar(20) NOT NULL,
  `Subject2` varchar(40) NOT NULL,
  `Max2` bigint(20) NOT NULL,
  `SubCode3` varchar(20) NOT NULL,
  `Subject3` varchar(40) NOT NULL,
  `Max3` bigint(20) NOT NULL,
  `SubCode4` varchar(20) NOT NULL,
  `Subject4` varchar(40) NOT NULL,
  `Max4` bigint(20) NOT NULL,
  `SubCode5` varchar(20) NOT NULL,
  `Subject5` varchar(40) NOT NULL,
  `Max5` bigint(20) NOT NULL,
  `SubCode6` varchar(20) NOT NULL,
  `Subject6` varchar(40) NOT NULL,
  `Max6` bigint(20) NOT NULL,
  `SubCode7` varchar(20) NOT NULL,
  `Subject7` varchar(40) NOT NULL,
  `Max7` bigint(20) NOT NULL,
  `SubCode8` varchar(20) NOT NULL,
  `Subject8` varchar(40) NOT NULL,
  `Max8` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Semester`, `Department`, `SubCode1`, `Subject1`, `Max1`, `SubCode2`, `Subject2`, `Max2`, `SubCode3`, `Subject3`, `Max3`, `SubCode4`, `Subject4`, `Max4`, `SubCode5`, `Subject5`, `Max5`, `SubCode6`, `Subject6`, `Max6`, `SubCode7`, `Subject7`, `Max7`, `SubCode8`, `Subject8`, `Max8`) VALUES
('1', 'CSE', '15MAT11', 'MATH-I', 80, '15CS02', 'Physics', 80, '15CS03', 'Mechanical', 80, '15CS04', 'Civil Engineering', 80, '15CS05', 'Electical Engineering', 80, '15CS06', 'Constitution', 80, '15CSL01', 'Physics Lab', 40, '15CSL02', 'Electrical Lab', 40),
('2', 'CSE', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('3', 'CSE', '15MAT31', 'MATH-III', 80, '15CS32', 'ADE', 80, '15CS33', 'Data Structure', 80, '15CS34', 'Computer Organizatio', 80, '15CS35', 'UNIX', 80, '15CS36', 'DMS', 80, '15CSL37', 'ADE Laboratory', 80, '15CSL38', 'DS Laboratory', 40),
('4', 'CSE', '15MAT41', 'MATH-IV', 80, '15CS42', 'Software Engineering', 80, '15CS43', 'DAS', 80, '15CS44', 'MP and MC', 80, '15CS45', 'OOP', 80, '15CS46', 'Data Communication', 80, '15CSL47', 'DAA Laboratory', 80, '15CSL48', 'MP Laboratory', 40),
('5', 'CSE', '15CS51', 'Management', 80, '15CS52', 'Computer Networks', 80, '15CS53', 'Database Management', 80, '15CS54', 'Automata', 80, '15CS552', 'Software Testing', 80, '15CS561', 'Java Programming', 80, '15CSL57', 'CN Lab', 80, '15CSL58', 'DBMS Lab', 40),
('6', 'CSE', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('7', 'CSE', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('8', 'CSE', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('1', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('2', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('3', 'ME', '15MAT31', 'MATH-IV', 80, '15ME32', 'Materials Science', 80, '15ME33', 'Basic Thremodynamics', 80, '15ME34', 'Mechanics of Materilas', 80, '15ME35', 'Meta casting and Welding', 80, '15ME36', 'Machine Tools and Operations', 80, '15ME37', 'Materials Testing Lab', 80, '15ME38', 'Foundry and Forging Lab', 40),
('4', 'ME', '15MAT41', 'MATH-IV', 80, '15ME42', 'Kinematics of Mechinery', 80, '15ME43', 'Applied Thermodynamics', 80, '15ME44', 'Fluid mechanics', 80, '15ME45', 'Metal Casting and Welding', 80, '15ME46', 'Computer adided Machine Drawing', 80, '15ME47', 'Materials Testing Lab', 80, '15ME48', 'Foundry and Forging Lab', 40),
('5', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('6', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('7', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('8', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('9', 'ME', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('1', 'CV', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('2', 'CV', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('3', 'CV', '15MAT51', 'MATH-III', 80, '15CV32', 'Design', 80, '15CV33', 'Highway', 80, '15CV34', 'CABPD', 80, '15CV35', 'APC', 80, '15CV36', 'Traffic', 80, '15CV37', 'GE', 80, '15CV38', 'CHM', 40),
('4', 'CV', '15MAT41', 'MATH-IV', 80, '15CV42', 'AD Structures', 80, '15CV43', 'Applied Hydraulics', 80, '15CV44', 'Concrete Technology', 80, '15CS45', 'BGE', 80, '15CV46', 'Advanced Surveying', 80, '15CVL47', 'FM Laboratory', 80, '15CVL48', 'EG Laboratory', 40),
('5', 'CV', '15CV51', 'CME', 80, '15CV52', 'DSSL', 80, '15CV53', 'Hihway engineering', 80, '15CV54', 'WSTE', 80, '15CV551', 'Solid Waste Management', 80, '15CV561', 'Water Resource Management', 80, '15CVL57', 'SA Laboratory', 80, '15CVL58', 'ES Project/Camp', 40),
('6', 'CV', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('7', 'CV', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('8', 'CV', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('8', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('1', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('2', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('3', 'EC', '15MAT31', 'MATH-III', 80, '15EC32', 'Analog Electronics', 80, '15EC33', 'Digital Electronics', 80, '15EC34', 'Network Analysis', 80, '15EC35', 'Electronic Instrumentation', 80, '15EC36', 'Engineering Electromagnetics ', 80, '15ECL37', 'Analog Electronics Lab', 80, '15ECL38', 'Digital Electronics Lab', 40),
('4', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('5', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('6', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('7', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0),
('8', 'EC', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacherprof`
--

CREATE TABLE `teacherprof` (
  `Name` varchar(30) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Passw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherprof`
--

INSERT INTO `teacherprof` (`Name`, `Date`, `ID`, `Department`, `mail`, `Contact`, `Address`, `Passw`) VALUES
('Laxmi HR', '1991-12-06', '1001', 'CSE', 'laxmi@gmail.com', 9812345678, 'Bangalore,India', '234567890'),
('Prabin Nepal', '1997-12-01', '102', 'CSE', 'nepal12@gmail.com', 9658741258, 'Bangalore, India', '123456789'),
('Ram Baran Yadhav', '1985-05-02', '103', 'ME', 'baranram@gmai.com', 9745123658, 'Biratnagar, Nepal', '123456789'),
('Ram Sharma', '1880-01-05', '104', 'ME', 'ram@gmail.com', 2147483647, 'Kanpur', '1111111'),
('Hari Gopal', '1986-01-05', '105', 'ME', 'hari@gmail.com', 2147483647, 'Mangalore, Karnataka', '555555555'),
('Sailesh Dhakal', '1997-06-05', '106', 'CV', 'sailesh@gmail.com', 2147483647, 'Bangalore, Karnataka', '123444449'),
('Krishna Sharma', '1984-05-14', '107', 'CSE', 'krishna@gmail.com', 9785412563, 'Mathura', '123456789'),
('Chaya Sharma', '1986-06-04', '108', 'CSE', 'chaya@gmail.com', 9845123265, 'Bangalore, Karnataka', '12345'),
('Govinda Prashad', '1985-01-05', '109', 'EC', 'govinda@gmail.com', 2147483647, 'Bangalore, Karnataka', '987654321'),
('Narendra Modi', '1980-05-05', '112', 'EC', 'narendra@gmail.com', 9845489052, 'Nakpur', '3333333'),
('Roshan Tajpuriya', '1996-09-29', '113', 'CSE', 'roshantaj25@gmail.co', 8105524080, 'Biratnagar, Nepal', 'callmeroshan'),
('Shankar Shrestha', '1995-06-25', '114', 'ME', 'shankar@gmail.com', 9654785236, 'Bhaktapur, Nepal', '123456789'),
('Narayan Prashad', '1880-12-01', '115', 'CV', 'narayan@gmail.com', 7892989856, 'Nagkanthi', '8888888'),
('Dikpal Shrestha', '1997-12-01', '116', 'CSE', 'dikpal@gmail.com', 963254125, 'Bangalore, Karnataka', '123456789'),
('Sunil Dhaugoda', '1997-12-01', '117', 'ME', 'suneel@gmail.com', 9745123658, 'Bangalore, Karnataka', '123456789'),
('Birendra Shah', '10/11/1986', '118', 'EC', 'birendrea@gmail.com', 9865478523, 'Bangalore, Karnataka', '123456789'),
('Sanju DJ', '1986-10-05', '119', 'CSE', 'sanju@gmail.com', 9845123265, 'Bangalore, Karnataka', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tid`
--

CREATE TABLE `tid` (
  `ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tid`
--

INSERT INTO `tid` (`ID`) VALUES
('1001'),
('101'),
('102'),
('103'),
('104'),
('105'),
('106'),
('107'),
('108'),
('109'),
('110'),
('111'),
('112'),
('113'),
('114'),
('115'),
('116'),
('117'),
('118'),
('119'),
('120'),
('200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `attenupto`
--
ALTER TABLE `attenupto`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `sid`
--
ALTER TABLE `sid`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `studentprof`
--
ALTER TABLE `studentprof`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacherprof`
--
ALTER TABLE `teacherprof`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tid`
--
ALTER TABLE `tid`
  ADD UNIQUE KEY `id` (`ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `studentprof` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attenupto`
--
ALTER TABLE `attenupto`
  ADD CONSTRAINT `attenupto_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `attendance` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `studentprof` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

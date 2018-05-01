-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 04:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzera`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `aid` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`aid`, `fname`, `lname`, `email`, `phone`, `gender`, `dob`, `state`, `country`) VALUES
('1001', 'quizzera', 'master', 'quiz@gmail.com', '4569852145', 'female', '1997-09-13', 'kerala', 'india'),
('1234567', 'rasmiya', 'najeem', 'rasmiya@gmail.com', '9854621456', 'female', '1965-03-16', 'kerala', 'india'),
('KH.SC.I5MCA15109', 'rasmiya', 'najeem', 'rasmiya76@gmail.com', '9854632152', 'female', '1998-04-16', ' Kerala', 'India'),
('master123', 'master', 'master', 'master@gmail.com', '7896541230', 'female', '2014-03-31', 'kerala', 'india'),
('test1', 'test', 'test', 'test@gmail.com', '4569523575', 'female', '1976-03-29', 'kerala', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionid` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `qno` varchar(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `op1` varchar(50) DEFAULT NULL,
  `op2` varchar(50) DEFAULT NULL,
  `op3` varchar(50) DEFAULT NULL,
  `op4` varchar(50) DEFAULT NULL,
  `rans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionid`, `qid`, `tid`, `qno`, `question`, `op1`, `op2`, `op3`, `op4`, `rans`) VALUES
(92, 32, '2001', '1', 'what is exm', 'exam', 'examnatn', 'max', 'xam', 'exam'),
(93, 32, '2001', '2', 'what is .com', 'commerce', 'commercial', 'communication', 'com', 'commercial'),
(94, 32, '2001', '3', 'what is quizzera', 'webapp', 'pro', 'pro1', 'pro2', 'webapp'),
(95, 33, 'ais123', '1', ' Grand Central Terminal, Park Avenue, New York is the worlds', 'highest railway station', 'longest railway station', 'largest railway station', 'None of the above', 'largest railway station'),
(96, 33, 'ais123', '2', 'Entomology is the science that studies', 'The origin and history of technical and scientific', 'Behavior of human beings', 'Insects', 'The formation of rocks', 'Insects'),
(97, 33, 'ais123', '3', 'Eritrea, which became the 182nd member of the UN in 1993, is in the continent of', 'Africa', 'Australia', 'Europe', 'Asia', 'Africa'),
(98, 33, 'ais123', '4', ' Garampani sanctuary is located at', 'Gangtok, Sikkim', 'Kohima, Nagaland', 'Diphu, Assam', 'Junagarh, Gujarat', 'Diphu, Assam'),
(99, 33, 'ais123', '5', ' For which of the following disciplines is Nobel Prize awarded?', 'Literature, Peace and Economics', 'Physics and Chemistry', 'Physiology or Medicine', 'All of the above', 'All of the above'),
(100, 33, 'ais123', '6', ' Hitler party which came into power in 1933 is known as', 'Ku-Klux-Klan', ' Democratic Party', 'Labour Party', 'Nazi Party', 'Nazi Party'),
(101, 33, 'ais123', '7', ' FFC stands for', 'Federation of Football Council', 'Film Finance Corporation', 'Foreign Finance Corporation', 'None of the above', 'Film Finance Corporation'),
(102, 33, 'ais123', '8', ' Fastest shorthand writer was', 'Dr. G. D. Bist', 'J.M. Tagore', ' Khudada Khan', 'J.R.D. Tata', 'Dr. G. D. Bist'),
(103, 33, 'ais123', '9', ' Epsom (England) is the place associated with', 'Shooting', 'Horse racing', 'Polo', 'Snooker', 'Horse racing'),
(104, 33, 'ais123', '10', ' First human heart transplant operation conducted by Dr. Christian Bernard on Louis Washkansky, was conducted in', '1958', '1922', '1967', ' 1968', '1967');

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `id` int(11) NOT NULL,
  `sid` varchar(20) DEFAULT NULL,
  `tid` varchar(20) DEFAULT NULL,
  `aid` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`id`, `sid`, `tid`, `aid`, `username`, `password`, `designation`) VALUES
(2, NULL, NULL, '1001', 'quiz', 'quiz123', 'admin'),
(4, NULL, NULL, '1234567', '1234567', 'demo', 'admin'),
(6, NULL, 'ben123', NULL, 'ben123', 'ben', 'teacher'),
(7, NULL, 'ais123', NULL, 'ais123', 'ais', 'teacher'),
(10, 'KH.SC.I5MCA15101', NULL, NULL, 'KH.SC.I5MCA15101', 'test', 'Student'),
(11, NULL, 'KH.SC.I5MCA15099', NULL, 'KH.SC.I5MCA15099', 'master', 'teacher'),
(13, NULL, NULL, 'KH.SC.I5MCA15109', 'KH.SC.I5MCA15109', '', 'teacher'),
(14, NULL, '2002', NULL, '2002', 'master', 'teacher'),
(16, 'KH.SC.I5MCA15115', NULL, NULL, 'KH.SC.I5MCA15115', 'RASMIYA', 'Student'),
(19, 'KH.SC.I5MCA15102', NULL, NULL, 'KH.SC.I5MCA15102', 'john', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(20) NOT NULL,
  `qid` int(11) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `total` varchar(20) NOT NULL,
  `obtained` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `qid`, `sid`, `date`, `total`, `obtained`, `sub`, `course`) VALUES
(17, 32, 'KH.SC.I5MCA15101', '2018-04-19', '30', '20', 'project', 'INT MCA 2014'),
(22, 33, 'KH.SC.I5MCA15115', '2018-04-12', '30', '9', 'final year main proj', 'INT MCA 2015'),
(25, 32, 'KH.SC.I5MCA15111', '2018-04-19', '30', '10', 'project', 'B.COM 2015'),
(26, 33, 'KH.SC.I5MCA15111', '2018-04-12', '30', '18', 'final year main proj', 'B.COM 2015'),
(27, 32, 'KH.SC.I5MCA15102', '2018-04-19', '30', '30', 'project', 'INT MCA 2015');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `sid` varchar(20) NOT NULL,
  `sfname` varchar(20) DEFAULT NULL,
  `slname` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sid`, `sfname`, `slname`, `course`, `gender`, `state`, `country`, `dob`, `email`, `phone`) VALUES
('KH.SC.I5MCA15101', 'Jane', 'Doe', 'INT MCA 2014', 'female', ' Kerala', 'India', '1997-04-17', 'test@gmail.com', '9856321452'),
('KH.SC.I5MCA15102', 'John', 'Doe', 'INT MCA 2015', 'male', ' Kerala', 'India', '1997-04-20', 'student@gmail.com', '9856321452'),
('KH.SC.I5MCA15111', 'Liya', 'Babu', 'B.COM 2015', 'female', ' Kerala', 'India', '1997-04-26', 'student@gmail.com', '9875642315'),
('KH.SC.I5MCA15115', 'Rasmiya', 'Najeem', 'INT MCA 2015', 'female', ' Kerala', 'India', '1997-09-13', 'rasmiya@gmail.com', '9478563258');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `tid` varchar(20) NOT NULL,
  `tfname` varchar(20) DEFAULT NULL,
  `tlname` varchar(20) DEFAULT NULL,
  `dept` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`tid`, `tfname`, `tlname`, `dept`, `email`, `phone`, `gender`, `state`, `country`, `dob`) VALUES
('2001', 'demo', 'demolast', 'cs', 'demo123@gmail.com', '4569874521', 'female', ' Kerala', 'India', '1976-03-29'),
('2002', 'Rasmiya', 'Najeem', 'Maths', 'rasmiya@gmail.com', '9447828047', 'female', ' Kerala', 'India', '1997-09-13'),
('ais123', 'ais', 'men', 'ec', 'ais@gmail.com', '7896541230', 'female', 'kerala', 'india', '9567-09-21'),
('ben123', 'linda', 'benny', 'cs', 'ben@gmail.com', '9568423172', 'female', 'kerala', 'india', '1856-09-06'),
('KH.SC.I5MCA15099', 'master', 'demo', 'CS', 'masterdemo@gmail.com', '9856321452', 'male', ' Kerala', 'India', '1998-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `qid` int(11) NOT NULL,
  `tid` varchar(20) NOT NULL,
  `testno` varchar(20) NOT NULL,
  `totalmark` varchar(10) NOT NULL,
  `quesmark` varchar(10) NOT NULL,
  `instruction` varchar(200) NOT NULL,
  `testdate` date NOT NULL,
  `testname` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `duration` int(11) NOT NULL,
  `totquestions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`qid`, `tid`, `testno`, `totalmark`, `quesmark`, `instruction`, `testdate`, `testname`, `sub`, `duration`, `totquestions`) VALUES
(32, 'ais123', '1', '30', '10', 'Answer all questions', '2018-04-19', '2p', 'project', 1, 3),
(33, 'ais123', '2', '30', '3', 'Answer all questions\r\nEach question has 3 marks', '2018-04-12', 'sem internals', 'final year main proj', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `qid` (`qid`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sid_2` (`sid`),
  ADD UNIQUE KEY `tid_2` (`tid`),
  ADD UNIQUE KEY `aid_2` (`aid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `tid` (`tid`),
  ADD KEY `aid` (`aid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `qid` (`qid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `tid` (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `teacher_details` (`tid`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`qid`) REFERENCES `test` (`qid`);

--
-- Constraints for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD CONSTRAINT `reg_users_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student_details` (`sid`),
  ADD CONSTRAINT `reg_users_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher_details` (`tid`),
  ADD CONSTRAINT `reg_users_ibfk_3` FOREIGN KEY (`aid`) REFERENCES `admin_details` (`aid`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `student_details` (`sid`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`qid`) REFERENCES `questions` (`qid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

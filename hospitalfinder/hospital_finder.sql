-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 10:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitcard`
--

CREATE TABLE `admitcard` (
  `adid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `tamount` int(50) NOT NULL,
  `bamount` int(50) NOT NULL,
  `balance` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admitcard`
--

INSERT INTO `admitcard` (`adid`, `username`, `docname`, `department`, `hosname`, `date`, `tamount`, `bamount`, `balance`) VALUES
(1, 'meril', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450),
(2, 'meril', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540),
(3, 'achu', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540),
(4, 'Athira Anil', 'Akhil Alex', 'neurology', 'medical care', '2019-02-28', 500, 50, 450),
(6, 'athira', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `compid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `complaint` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`compid`, `username`, `complaint`) VALUES
(1, 'meril', 'not neat'),
(2, 'achu', 'zrd'),
(3, 'athira', 'untidy'),
(4, 'athira', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `depid` int(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depid`, `department`, `hosname`) VALUES
(2, 'oncology', 'medical care'),
(4, 'neurology', 'medical care'),
(15, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(20) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `exp` int(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `tamount` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docname`, `hosname`, `age`, `email`, `gender`, `phone`, `department`, `qual`, `exp`, `image`, `tamount`, `username`, `logid`, `status`) VALUES
(1, 'Akhil Alex', 'medical care', 30, 'akhil@gmail.com', 'male', 9048605320, 'neurology', 'M.B.B.S', 5, 'doctor1.png', 500, 'Akhil', 5, 1),
(2, 'Sonia', 'medical care', 23, 'sonia@gmail.com', 'female', 9747523611, 'oncology', 'M.B.B.S', 3, 'doctor2.jpg', 600, 'sonia', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `fid` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `fimage` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fid`, `fname`, `hosname`, `fimage`) VALUES
(1, 'ambulance', 'medical care', 'ambulance.jpg'),
(2, 'lab', 'medical care', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosid` int(20) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosid`, `hosname`, `email`, `phone`, `location`, `bname`, `image`, `username`, `logid`, `status`, `map`) VALUES
(1, 'medical care', 'care@gmail.com', 9747523614, 'kottayam', 'parayil buildings', 'hos1.jpg', 'medical', 3, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62944.119460599046!2d76.48557298233398!3d9.59462404115142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062ba16c6b435f%3A0xbe2b02f68f8dd06e!2sKottayam%2C+Kerala!5e0!3m2!1sen!2sin!4v1523006231847');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalac`
--

CREATE TABLE `hospitalac` (
  `hospitalacid` int(20) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `acno` varchar(12) NOT NULL,
  `cvv` int(3) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalac`
--

INSERT INTO `hospitalac` (`hospitalacid`, `hosname`, `acno`, `cvv`, `balance`) VALUES
(4, 'medical care', '111111111111', 111, 12535);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lid` int(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` int(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lid`, `lname`, `city`, `district`, `pin`, `email`) VALUES
(1, 'Dianova', 'kottayam', 'kottayam', 684252, 'dia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lid` int(20) NOT NULL,
  `lname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `lname`) VALUES
(1, 'trivandrum'),
(2, 'kollam'),
(3, 'pathanamthitta'),
(4, 'alapuzha'),
(5, 'kottayam'),
(6, 'iduki'),
(7, 'ernakulam'),
(8, 'thrissur'),
(9, 'palakad'),
(10, 'malapuram'),
(11, 'kozhikod'),
(12, 'wayanad'),
(13, 'kannur'),
(14, 'kasargod');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `logid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `username`, `password`, `utype`, `status`) VALUES
(2, 'meril', 'meril', 'user', 1),
(3, 'medical', 'medical', 'hospital', 1),
(5, 'Akhil', 'akhil', 'doctor', 1),
(6, 'sonia', 'sonia', 'doctor', 1),
(75, 'rohith', 'rohith', 'user', 1),
(78, 'achu', 'achu', 'user', 1),
(83, 'athira', 'athira', 'user', 1),
(93, 'dia', 'dia', 'lab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `tamount` int(100) NOT NULL,
  `bamount` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `username`, `docname`, `department`, `hosname`, `date`, `tamount`, `bamount`, `balance`, `status`) VALUES
(1, 'meril', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450, 'Booked'),
(6, 'meril', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540, 'Booked'),
(3, 'meril', 'Sonia', 'oncology', 'medical care', '2019-02-20', 600, 60, 540, 'Booked'),
(4, 'meril', 'Akhil Alex', 'neurology', 'medical care', '2019-02-21', 600, 60, 540, 'Booked'),
(7, 'achu', 'Sonia', 'caritas', 'medical care', '2019-02-20', 600, 60, 540, 'Booked'),
(8, 'achu', 'Sonia', 'oncology', 'medical care', '2019-02-20', 600, 60, 540, 'Booked'),
(9, 'achu', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540, 'Booked'),
(10, 'Athira Anil', 'Akhil Alex', 'neurology', 'medical care', '2019-02-28', 500, 50, 450, 'Booked'),
(11, 'athira', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450, 'Booked'),
(14, 'meril', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prid`, `uname`, `pdate`) VALUES
(1, '1', '2019-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptionc`
--

CREATE TABLE `prescriptionc` (
  `pcid` int(11) NOT NULL,
  `prid` int(11) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dosage` varchar(100) NOT NULL,
  `ndays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescriptionc`
--

INSERT INTO `prescriptionc` (`pcid`, `prid`, `mname`, `dosage`, `ndays`) VALUES
(1, 1, 'sdfdsf', 'sdf', 5),
(2, 1, 'd', 'dd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `pgmid` int(20) NOT NULL,
  `pgmname` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `pgmdate` date NOT NULL,
  `pgmtime` varchar(50) NOT NULL,
  `pgmvenue` varchar(50) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`pgmid`, `pgmname`, `hosname`, `pgmdate`, `pgmtime`, `pgmvenue`, `about`) VALUES
(1, 'Human Health Program', 'medical care', '2019-02-25', '10.00 AM', 'hospital', 'this health campaign program is based on human health and human health welfare....'),
(2, 'Human Life Program', 'medical care', '2019-02-24', '10:00', 'hospital', 'good campaign program for heallth and safe life');

-- --------------------------------------------------------

--
-- Table structure for table `ptest`
--

CREATE TABLE `ptest` (
  `ptid` int(20) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `tid` int(20) NOT NULL,
  `value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptest`
--

INSERT INTO `ptest` (`ptid`, `pname`, `tid`, `value`) VALUES
(1, 'nimmy', 1, '300');

-- --------------------------------------------------------

--
-- Table structure for table `qreply`
--

CREATE TABLE `qreply` (
  `qrid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `que` varchar(200) NOT NULL,
  `reply` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qreply`
--

INSERT INTO `qreply` (`qrid`, `username`, `docname`, `que`, `reply`) VALUES
(1, 'achu', 'Sonia', 'hh', ' kk'),
(2, 'athira', 'Akhil Alex', 'ggggg', ' hiii');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `qid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `que` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`qid`, `username`, `docname`, `que`) VALUES
(1, 'meril', 'Sonia', 'hello'),
(4, 'achu', 'Sonia', 'hh'),
(7, 'athira', 'Akhil Alex', 'ggggg'),
(8, 'athira', 'Akhil Alex', 'fdf');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `hosname`, `docname`, `date`, `time1`, `time2`) VALUES
(1, 'medical care', 'Akhil Alex', '2019-02-20', '10:00:00', '12:00:00'),
(2, 'medical care', 'Sonia', '2019-02-21', '10:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `tid` int(20) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `min` varchar(20) NOT NULL,
  `max` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `tname`, `min`, `max`) VALUES
(1, 'test1', '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `housenum` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(11) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `age`, `email`, `gender`, `phone`, `location`, `housenum`, `username`, `logid`, `status`) VALUES
(1, 'meril', 22, 'jhvbhjc', 'female', 9747523611, 'kottayam', 'hgfhgf', 'meril', 2, 1),
(35, 'ammu', 20, 'ammu@gmail.com', 'female', 7847586521, 'kollam', 'hvhv', 'ammu', 71, 1),
(37, 'rohith', 22, 'meril@gmail.com', 'male', 9048605320, 'kottayam', '12', 'rohith', 75, 1),
(38, 'achu', 20, 'achu@gmail.com', 'female', 9797784586, 'malapuram', '12a', 'achu', 78, 1),
(41, 'Athira Anil', 20, 'athirachithralayam@gmail.com', 'female', 9856777985, 'kottayam', '777', 'athira', 83, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userac`
--

CREATE TABLE `userac` (
  `useracid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `acno` varchar(12) NOT NULL,
  `cvv` int(3) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userac`
--

INSERT INTO `userac` (`useracid`, `username`, `acno`, `cvv`, `balance`) VALUES
(1, 'meril', '777', 88, 2999800),
(2, 'achu', '777', 778, 6820),
(4, 'athira', '777777777778', 455, 3950);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitcard`
--
ALTER TABLE `admitcard`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`compid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `hosname` (`hosname`);

--
-- Indexes for table `hospitalac`
--
ALTER TABLE `hospitalac`
  ADD PRIMARY KEY (`hospitalacid`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `prescriptionc`
--
ALTER TABLE `prescriptionc`
  ADD PRIMARY KEY (`pcid`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`pgmid`);

--
-- Indexes for table `ptest`
--
ALTER TABLE `ptest`
  ADD PRIMARY KEY (`ptid`);

--
-- Indexes for table `qreply`
--
ALTER TABLE `qreply`
  ADD PRIMARY KEY (`qrid`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`);

--
-- Indexes for table `userac`
--
ALTER TABLE `userac`
  ADD PRIMARY KEY (`useracid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admitcard`
--
ALTER TABLE `admitcard`
  MODIFY `adid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `compid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `depid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hosid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hospitalac`
--
ALTER TABLE `hospitalac`
  MODIFY `hospitalacid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescriptionc`
--
ALTER TABLE `prescriptionc`
  MODIFY `pcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `pgmid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ptest`
--
ALTER TABLE `ptest`
  MODIFY `ptid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qreply`
--
ALTER TABLE `qreply`
  MODIFY `qrid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `qid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `userac`
--
ALTER TABLE `userac`
  MODIFY `useracid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

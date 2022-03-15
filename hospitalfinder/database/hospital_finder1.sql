-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:09 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitcard`
--

CREATE TABLE IF NOT EXISTS `admitcard` (
  `adid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `tamount` int(50) NOT NULL,
  `bamount` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admitcard`
--

INSERT INTO `admitcard` (`adid`, `username`, `docname`, `department`, `hosname`, `date`, `tamount`, `bamount`, `balance`) VALUES
(1, 'meril', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450),
(2, 'meril', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540),
(3, 'achu', 'Sonia', 'oncology', 'medical care', '2019-02-21', 600, 60, 540),
(4, 'Athira Anil', 'Akhil Alex', 'neurology', 'medical care', '2019-02-28', 500, 50, 450),
(6, 'athira', 'Akhil Alex', 'neurology', 'medical care', '2019-02-20', 500, 50, 450),
(8, 'meril', 'Justin Joseph', 'cardiology', 'health care', '2019-09-26', 200, 20, 180);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `compid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `complaint` varchar(50) NOT NULL,
  PRIMARY KEY (`compid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `department` (
  `depid` int(20) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  PRIMARY KEY (`depid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`depid`, `department`, `hosname`) VALUES
(1, 'cardiology', 'health care'),
(2, 'oncology', 'medical care'),
(3, 'gynecology', 'mgh'),
(4, 'neurology', 'medical care'),
(5, 'ortho', 'mgh'),
(11, 'pediatrics', 'health care'),
(14, 'oncology', 'health care');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `docid` int(20) NOT NULL AUTO_INCREMENT,
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
  `status` int(50) NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docname`, `hosname`, `age`, `email`, `gender`, `phone`, `department`, `qual`, `exp`, `image`, `tamount`, `username`, `logid`, `status`) VALUES
(1, 'Akhil Alex', 'medical care', 30, 'akhil@gmail.com', 'male', 9048605320, 'neurology', 'M.B.B.S', 5, 'doctor1.png', 500, 'Akhil', 5, 1),
(2, 'Sonia', 'medical care', 23, 'sonia@gmail.com', 'female', 9747523611, 'oncology', 'M.B.B.S', 3, 'doctor2.jpg', 600, 'sonia', 6, 1),
(6, 'Justin Joseph', 'health care', 60, 'justin12@gmail.com', 'male', 9048605329, 'cardiology', 'MBBS', 15, 'DoctorMan.png', 200, 'justin', 92, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `fid` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `fimage` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fid`, `fname`, `hosname`, `fimage`) VALUES
(1, 'ambulance', 'medical care', 'ambulance.jpg'),
(2, 'lab', 'medical care', 'download.jpg'),
(5, 'facility1', 'health care', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hosid` int(20) NOT NULL AUTO_INCREMENT,
  `hosname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  `map` varchar(500) NOT NULL,
  PRIMARY KEY (`hosid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `hosname` (`hosname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosid`, `hosname`, `email`, `phone`, `location`, `bname`, `image`, `username`, `logid`, `status`, `map`) VALUES
(1, 'medical care', 'care@gmail.com', 9747523614, 'kottayam', 'parayil buildings', 'hos1.jpg', 'medical', 3, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62944.119460599046!2d76.48557298233398!3d9.59462404115142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b062ba16c6b435f%3A0xbe2b02f68f8dd06e!2sKottayam%2C+Kerala!5e0!3m2!1sen!2sin!4v1523006231847'),
(2, 'health care', 'health@gmail.com', 8747586215, 'ernakulam', 'thotathil buildings', 'hos2.jpg', 'health', 74, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251516.4435342108!2d76.18034503439051!3d9.938581835557724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d514abec6bf%3A0xbd582caa5844192!2sKochi%2C+Kerala!5e0!3m2!1sen!2sin!4v1523006296723'),
(13, 'mgh', 'mgh@gmail.com', 8459752145, 'alapuzha', 'kvm buildings', 'gg.jpg', 'mgh', 76, 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125922.83285137138!2d76.27206486209002!3d9.501029730365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0884f1aa296b61%3A0xb84764552c41f85a!2sAlappuzha%2C+Kerala!5e0!3m2!1sen!2sin!4v1523006341813');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalac`
--

CREATE TABLE IF NOT EXISTS `hospitalac` (
  `hospitalacid` int(20) NOT NULL AUTO_INCREMENT,
  `hosname` varchar(50) NOT NULL,
  `acno` varchar(12) NOT NULL,
  `cvv` int(3) NOT NULL,
  `balance` int(100) NOT NULL,
  PRIMARY KEY (`hospitalacid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `hospitalac`
--

INSERT INTO `hospitalac` (`hospitalacid`, `hosname`, `acno`, `cvv`, `balance`) VALUES
(4, 'medical care', '111111111111', 111, 12355),
(6, 'health care', '142541235236', 142, 20002);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `lname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `pin` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lid`, `lname`, `city`, `district`, `pin`, `email`) VALUES
(1, 'Dianova', 'kottayam', 'kottayam', 684252, 'dia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `lid` int(20) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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

CREATE TABLE IF NOT EXISTS `login` (
  `logid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`logid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `username`, `password`, `utype`, `status`) VALUES
(92, 'justin', 'justin', 'doctor', 1),
(2, 'meril', 'meril', 'user', 1),
(3, 'medical', 'medical', 'hospital', 1),
(5, 'Akhil', 'akhil', 'doctor', 1),
(6, 'sonia', 'sonia', 'doctor', 1),
(74, 'health', 'health', 'hospital', 1),
(75, 'rohith', 'rohith', 'user', 1),
(76, 'mgh', 'mgh', 'hospital', 1),
(78, 'achu', 'achu', 'user', 1),
(83, 'athira', 'athira', 'user', 1),
(93, 'dia', 'dia', 'lab', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hosname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `tamount` int(100) NOT NULL,
  `bamount` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(13, 'meril', 'Justin Joseph', 'cardiology', 'health care', '2019-09-26', 200, 20, 180, 'generated');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `pgmid` int(20) NOT NULL AUTO_INCREMENT,
  `pgmname` varchar(50) NOT NULL,
  `hosname` varchar(50) NOT NULL,
  `pgmdate` date NOT NULL,
  `pgmtime` varchar(50) NOT NULL,
  `pgmvenue` varchar(50) NOT NULL,
  `about` varchar(200) NOT NULL,
  PRIMARY KEY (`pgmid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`pgmid`, `pgmname`, `hosname`, `pgmdate`, `pgmtime`, `pgmvenue`, `about`) VALUES
(1, 'Human Health Program', 'medical care', '2019-02-25', '10.00 AM', 'hospital', 'this health campaign program is based on human health and human health welfare....'),
(2, 'Human Life Program', 'medical care', '2019-02-24', '10:00', 'hospital', 'good campaign program for heallth and safe life'),
(5, 'program1', 'health care', '2019-09-26', '02:00', 'Auditorium', 'good program');

-- --------------------------------------------------------

--
-- Table structure for table `ptest`
--

CREATE TABLE IF NOT EXISTS `ptest` (
  `ptid` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `tid` int(20) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`ptid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ptest`
--

INSERT INTO `ptest` (`ptid`, `pname`, `tid`, `value`) VALUES
(1, 'nimmy', 1, '300');

-- --------------------------------------------------------

--
-- Table structure for table `qreply`
--

CREATE TABLE IF NOT EXISTS `qreply` (
  `qrid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `que` varchar(200) NOT NULL,
  `reply` varchar(200) NOT NULL,
  PRIMARY KEY (`qrid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `queries` (
  `qid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `que` varchar(50) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `hosname` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `hosname`, `docname`, `date`, `time1`, `time2`) VALUES
(1, 'medical care', 'Akhil Alex', '2019-02-20', '10:00:00', '12:00:00'),
(2, 'medical care', 'Sonia', '2019-02-21', '10:00:00', '12:00:00'),
(5, 'health care', 'Justin Joseph', '2019-09-26', '01:00:00', '04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `tid` int(20) NOT NULL AUTO_INCREMENT,
  `tname` varchar(20) NOT NULL,
  `min` varchar(20) NOT NULL,
  `max` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `tname`, `min`, `max`) VALUES
(1, 'test1', '200', '500');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `housenum` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(11) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

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

CREATE TABLE IF NOT EXISTS `userac` (
  `useracid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `acno` varchar(12) NOT NULL,
  `cvv` int(3) NOT NULL,
  `balance` int(100) NOT NULL,
  PRIMARY KEY (`useracid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `userac`
--

INSERT INTO `userac` (`useracid`, `username`, `acno`, `cvv`, `balance`) VALUES
(1, 'meril', '777', 88, 2999920),
(2, 'achu', '777', 778, 6820),
(4, 'athira', '777777777778', 455, 3950);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

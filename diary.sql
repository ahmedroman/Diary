-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 06:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(3000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `did`, `id`, `username`, `comment`) VALUES
(1, 5, 6, 'anik', 'vgnbbnhjv hhyjhgf trfft '),
(2, 5, 7, 'tushar', 'gjhgjhgjhbmnkjuy hgvuvh g g fgg hjg h gu uy y '),
(3, 3, 7, 'tushar', 'fgf tfyf yfy  yt ft fytf ytd tydghf yt yt fy fuy g');

-- --------------------------------------------------------

--
-- Table structure for table `ddiary`
--

CREATE TABLE IF NOT EXISTS `ddiary` (
`did` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dnote` varchar(3500) NOT NULL,
  `ddate` date NOT NULL,
  `dshare` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ddiary`
--

INSERT INTO `ddiary` (`did`, `id`, `dname`, `dnote`, `ddate`, `dshare`) VALUES
(2, 6, 'fgdhg', 'trdytbg ytfy  ytf ty ft fyf hgh  fhg ', '2015-04-18', 0),
(3, 6, 'fdf', 'gfdffhvnbvgvbbnvbvj', '2015-04-20', 1),
(4, 6, 'gffhg', 'hjhbkjjhb', '2015-04-19', 0),
(5, 6, 'xfdhgfj', 'hdfjhn,vbg uy uyg yuug uy gugf  ygf gyg', '2015-05-01', 1),
(6, 8, 'bristi', 'onek din por gotokal bristi vijlam.jiboner onek srity ase ai bristi nia.jibonta mone hoy sukher jokhon bristie viji.bristir panir sathe moner kosto gulao chole jai.', '2015-05-03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `birthdate`, `email`, `type`, `sex`, `img`) VALUES
(6, 'Anik', 'anik', '12345', '1992-09-01', 'arr.rony1@gmail.com', 'client', 'male', '6.PNG'),
(7, 'tushar', 'tushar', '123', '2013-12-30', 'asds@fd.gff', 'client', 'male', 'propic/7.jpg'),
(8, 'Rafat Bin Rahman', 'Rafat', 'bloodred', '1993-07-25', 'rafatbinrahman@gmail.com', 'client', 'male', 'propic/8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ddiary`
--
ALTER TABLE `ddiary`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ddiary`
--
ALTER TABLE `ddiary`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

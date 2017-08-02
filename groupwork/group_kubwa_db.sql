-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 03:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `group_kubwa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE IF NOT EXISTS `login_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register_tbl`
--

CREATE TABLE IF NOT EXISTS `register_tbl` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_tbl`
--

INSERT INTO `register_tbl` (`employee_id`, `firstname`, `lastname`, `password`, `tel_no`, `email`, `date`) VALUES
(6, 'Oscar', 'Oscar', '1234', '0777777777', 'test@test.com', '2006-02-03'),
(7, 'Nelson', 'Mandela', '12345', '075543222', 'test@test.com', '2017-08-01'),
(8, 'John', 'Doe', 'admin', '0700000000', 'test@test.com', '2017-08-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_tbl`
--
ALTER TABLE `register_tbl`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register_tbl`
--
ALTER TABLE `register_tbl`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

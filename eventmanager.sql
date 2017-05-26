-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 06:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `attending`
--

CREATE TABLE `attending` (
  `username` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attending`
--

INSERT INTO `attending` (`username`, `name`) VALUES
('DasUtsav', 'crico'),
('ab', 'cafe'),
('cd ', 'cafe'),
('cd ', 'hacka'),
('gh', 'cafe'),
('gh', 'crico');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `venue` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `summary` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `genre`, `venue`, `date`, `summary`) VALUES
(1, 'cafe', 'tech', 'vesit', '2017-05-11', 'shot is gonna go down.'),
(2, 'hacka', 'tech', 'bnhs', '2017-05-15', 'Jungle coding begins!'),
(3, 'crico', 'sport', 'amphi', '2017-05-11', 'Whatever');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`username`, `password`) VALUES
('ab', '12345'),
('cd', '34567'),
('gh', '67890'),
('jh', '12345'),
('kl', '12345'),
('DasUtsav', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

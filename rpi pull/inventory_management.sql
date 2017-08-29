-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 08:24 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_camera`
--

CREATE TABLE `tbl_camera` (
  `cam_id` int(32) NOT NULL,
  `cam_name` varchar(128) NOT NULL,
  `cam_quantity` int(32) NOT NULL,
  `cam_location` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table camera';

--
-- Dumping data for table `tbl_camera`
--

INSERT INTO `tbl_camera` (`cam_id`, `cam_name`, `cam_quantity`, `cam_location`) VALUES
(1, 'Test', 10, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbraak`
--

CREATE TABLE `tbl_inbraak` (
  `inbraak_id` int(32) NOT NULL,
  `inbraak_name` varchar(128) NOT NULL,
  `inbraak_quantity` int(32) NOT NULL,
  `inbraak_location` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='table inbraak';

--
-- Dumping data for table `tbl_inbraak`
--

INSERT INTO `tbl_inbraak` (`inbraak_id`, `inbraak_name`, `inbraak_quantity`, `inbraak_location`) VALUES
(1, 'Test', 10, 'Test'),
(2, 'Test', 10, 'Test'),
(3, 'Test', 10, 'Test'),
(4, 'Test', 10, 'Test'),
(5, 'Teest', 10, 'Test'),
(6, 'Test', 11, 'Test'),
(7, 'Test', 11, 'Test'),
(8, 'Test', 11, 'Test'),
(9, 'Test', 11, 'Test'),
(10, 'Test', 11, 'Test'),
(11, 'Test', 1, 'Test'),
(12, 'Test', 10, 'Test'),
(13, 'Test', 3, 'Lwd'),
(14, 'Help', 12, 'me'),
(15, 'Help', 12, 'me'),
(16, 'Help', 12, 'me'),
(17, 'Help', 12, 'me'),
(18, 'Help', 12, 'me'),
(19, 'Help', 12, 'me'),
(20, 'WD', 3, 'awd'),
(21, 'Sander', 23, 'oud'),
(22, 'awda', 1, 'ad'),
(23, 'awda', 1, 'ad'),
(24, 'awda', 1, 'ad'),
(25, 'awda', 1, 'ad'),
(26, 'awda', 1, 'ad'),
(27, 'awda', 1, 'ad'),
(28, 'awda', 1, 'ad'),
(29, 'awda', 1, 'ad'),
(30, 'awda', 1, 'ad'),
(31, 'awda', 1, 'ad'),
(32, 'awda', 1, 'ad'),
(33, 'awda', 1, 'ad'),
(34, 'awda', 1, 'ad'),
(35, 'awda', 1, 'ad'),
(36, 'awda', 1, 'ad'),
(37, 'awda', 1, 'ad'),
(38, 'awda', 1, 'ad'),
(39, 'awda', 1, 'ad'),
(40, 'awda', 1, 'ad'),
(41, 'awda', 1, 'ad'),
(42, 'awda', 1, 'ad'),
(43, 'awda', 1, 'ad'),
(44, 'awda', 1, 'ad'),
(45, 'awda', 1, 'ad'),
(46, 'awda', 1, 'ad'),
(47, 'awda', 1, 'ad'),
(48, 'awda', 1, 'ad'),
(49, 'awda', 1, 'ad'),
(50, 'awda', 1, 'ad'),
(51, 'awda', 1, 'ad'),
(52, 'awd', 1, '12'),
(53, 'awd', 1, '12'),
(54, '2', 1, 'dwa'),
(55, 'test', 1, 'wd'),
(56, 'test', 1, 'wd'),
(57, 'test', 1, 'wd'),
(58, 'test', 22, 'wd'),
(59, 'test', 22, 'wd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_camera`
--
ALTER TABLE `tbl_camera`
  ADD PRIMARY KEY (`cam_id`);

--
-- Indexes for table `tbl_inbraak`
--
ALTER TABLE `tbl_inbraak`
  ADD PRIMARY KEY (`inbraak_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_camera`
--
ALTER TABLE `tbl_camera`
  MODIFY `cam_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_inbraak`
--
ALTER TABLE `tbl_inbraak`
  MODIFY `inbraak_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

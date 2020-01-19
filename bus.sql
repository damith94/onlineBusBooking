-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 10:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `bus_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`bus_id`, `name`, `contact_no`, `email`) VALUES
('001', 'asd', '0123456789', 'asdfghj@gmail.com'),
('002', 'zxzc', '0123456789', 'asfdafsda');

-- --------------------------------------------------------

--
-- Table structure for table `complaign`
--

CREATE TABLE `complaign` (
  `c_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(15) NOT NULL,
  `mobile` int(10) NOT NULL,
  `issue` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaign`
--

INSERT INTO `complaign` (`c_id`, `name`, `email`, `mobile`, `issue`, `description`) VALUES
(1, 'sdfesdfd', 'sfdsg', 243, '{issue}', '{des}'),
(2, 'sdfesdfd', 'sfdsg', 243, '{issue}', '{des}'),
(3, 'sdfesdfd', 'sfdsg', 243, '{issue}', '{des}');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(9, 'Enter Name', 'You Experience'),
(8, 'sncdjhfjergjkd', ',admklwetjio4 fjeijfeife'),
(7, 'wdqwd efwefwrf efewf', 'fwefewf efwefwef ewfwefwef wefwefwe fwefewfefewf'),
(10, 'Enter Name', 'You Experience'),
(11, 's,smcjnfjd', 'mckldvkldngdn'),
(12, 'shaminda', 'jhbddhjhs'),
(13, 'shaminda', 'njwdjwsdbh'),
(14, '', ''),
(15, '', ''),
(16, 'Enter a city', 'Enter a city'),
(17, 'Enter a city', 'Enter a city'),
(18, 'Enter a city', 'Enter a city'),
(19, 'shaminda pissek', 'ksghujklm'),
(20, 'shaminda pissek', 'ksghujklm');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_detail`
--

CREATE TABLE `passenger_detail` (
  `id` int(11) NOT NULL,
  `passenger_name` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `boarding_place` varchar(100) NOT NULL,
  `arrival_place` varchar(100) NOT NULL,
  `booking_date` date NOT NULL,
  `bus_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_detail`
--

INSERT INTO `passenger_detail` (`id`, `passenger_name`, `nic`, `boarding_place`, `arrival_place`, `booking_date`, `bus_id`) VALUES
(1, 'asf', 'sad', 'badulla', 'colombo', '2018-05-24', '001');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `route_id` int(11) NOT NULL,
  `bus_id` varchar(100) NOT NULL,
  `route_no` varchar(100) NOT NULL,
  `departure` varchar(1001) NOT NULL,
  `arrival` varchar(100) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `bus_fair` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `bus_id`, `route_no`, `departure`, `arrival`, `start_time`, `end_time`, `bus_fair`) VALUES
(1, '001', '99', 'badulla', 'colombo', '06:12:00', '11:34:00', '500'),
(2, '001', '99', 'colombo', 'badulla', '14:00:00', '20:00:00', '500'),
(3, '001', '99', 'badulla', 'colombo', '14:18:24', '08:18:18', '500'),
(4, '002', '99', 'badulla', 'colombo', '05:00:00', '12:00:00', '500');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(100) NOT NULL,
  `route_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `passenger_id` varchar(100) NOT NULL,
  `seat_no` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `bus_id`, `route_id`, `booking_date`, `passenger_id`, `seat_no`) VALUES
(1, '001', 1, '2018-05-24', '1', '2_2,2_4,3_4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_info`
--
ALTER TABLE `bus_info`
  ADD UNIQUE KEY `bus_id` (`bus_id`);

--
-- Indexes for table `complaign`
--
ALTER TABLE `complaign`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_detail`
--
ALTER TABLE `passenger_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaign`
--
ALTER TABLE `complaign`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `passenger_detail`
--
ALTER TABLE `passenger_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 06:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookindID` varchar(20) NOT NULL,
  `CustomerNICNo` varchar(20) DEFAULT NULL,
  `CustomerName` varchar(50) DEFAULT NULL,
  `CustomerContact` int(11) DEFAULT NULL,
  `DriverNICNo` varchar(20) DEFAULT NULL,
  `DriverContact` int(11) DEFAULT NULL,
  `VehicleNo` varchar(20) DEFAULT NULL,
  `BookingFrom` varchar(20) DEFAULT NULL,
  `Departure` varchar(20) DEFAULT NULL,
  `PickupTime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `NICNo` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbldriver`
--

CREATE TABLE `tbldriver` (
  `NICNo` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbljourney`
--

CREATE TABLE `tbljourney` (
  `journey_id` int(11) NOT NULL,
  `passenger_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `start_location` varchar(255) DEFAULT NULL,
  `end_location` varchar(255) DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `fare_per_km` float DEFAULT NULL,
  `total_fare` float DEFAULT NULL,
  `payment_status` enum('Pending','Paid') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblloginregister`
--

CREATE TABLE `tblloginregister` (
  `NICNo` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblloginregister`
--

INSERT INTO `tblloginregister` (`NICNo`, `Name`, `Gender`, `Contact`, `Email`, `Password`) VALUES
('123456789v', 'test3', 'male', 123456789, 'test3@gmail.com', '$2y$10$KwOsMdK24znQf'),
('987654321', 'test4', 'male', 2147483647, 'test4@gmail.com', '$2y$10$at/8jQkU.IyeX');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessages`
--

CREATE TABLE `tblmessages` (
  `message_id` int(11) NOT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblrating`
--

CREATE TABLE `tblrating` (
  `BookindID` varchar(20) NOT NULL,
  `CNIC` varchar(50) DEFAULT NULL,
  `Rate` varchar(20) DEFAULT NULL,
  `Comment` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `VehicleNo` varchar(20) NOT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `FuelType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`VehicleNo`, `Model`, `FuelType`) VALUES
('HM8980', 'Hybrid', 'Diesel');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicleowner`
--

CREATE TABLE `tblvehicleowner` (
  `NICNo` varchar(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Gender` char(6) DEFAULT NULL,
  `Contact` int(11) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookindID`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`NICNo`);

--
-- Indexes for table `tbldriver`
--
ALTER TABLE `tbldriver`
  ADD PRIMARY KEY (`NICNo`);

--
-- Indexes for table `tbljourney`
--
ALTER TABLE `tbljourney`
  ADD PRIMARY KEY (`journey_id`);

--
-- Indexes for table `tblloginregister`
--
ALTER TABLE `tblloginregister`
  ADD PRIMARY KEY (`NICNo`);

--
-- Indexes for table `tblmessages`
--
ALTER TABLE `tblmessages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tblrating`
--
ALTER TABLE `tblrating`
  ADD PRIMARY KEY (`BookindID`);

--
-- Indexes for table `tblvehicle`
--
ALTER TABLE `tblvehicle`
  ADD PRIMARY KEY (`VehicleNo`);

--
-- Indexes for table `tblvehicleowner`
--
ALTER TABLE `tblvehicleowner`
  ADD PRIMARY KEY (`NICNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbljourney`
--
ALTER TABLE `tbljourney`
  MODIFY `journey_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmessages`
--
ALTER TABLE `tblmessages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

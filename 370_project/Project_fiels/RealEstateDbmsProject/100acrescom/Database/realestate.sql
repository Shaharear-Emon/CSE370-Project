-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 08:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('admin1@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `broughtproperty`
--

CREATE TABLE `broughtproperty` (
  `bid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paymentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payid` int(11) NOT NULL,
  `card_no` bigint(20) NOT NULL,
  `card_hold` varchar(255) NOT NULL,
  `exp_m` int(11) NOT NULL,
  `exp_y` int(11) NOT NULL,
  `cvv_no` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `Pimg1` varchar(255) NOT NULL,
  `Pimg2` varchar(255) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `Pid` int(11) NOT NULL,
  `Pt` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Loc` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`Pimg1`, `Pimg2`, `Pname`, `Pid`, `Pt`, `Price`, `Loc`, `Description`, `Status`) VALUES
('IMG1-6201558aef04f3.46390408.png', 'IMG2-6201558aef4372.53774431.jpg', 'Sea Front', 1, 'HOUSE', 9000000, 'MANGALORE', 'Green Fields,5th cross Road,575011,Surathkal,Mangalore 4BHK Independent House,Sea Facing, Vacation Stay Home', 'Y'),
('IMG1-62048afee0ef47.53832380.jpg', 'IMG2-62048afee0f002.98200733.jpg', 'Aastha Nilaya', 5, 'Flat', 6000000, 'Bangalore', 'Naidu Apartments,HSR Layout,5th cross road,Bangalore Pincode 560102\r\n3BHK-4th Floor,Naidu Apartments\r\nFacilities Available: Lift, Gym, Playarea, SwimmingPool\r\nNear to: Rayan International School,Kmc Hospiltal,Mantri mall\r\n\r\n\r\n', 'Y'),
('IMG1-62049195143f45.78833989.webp', 'IMG2-62049195143fd0.15200155.png', 'Benchmark Layouts', 6, 'Land', 5000000, 'Koppala', 'BT PATIL NAGAR ,Pin:583231,Koppala Dist,Karnataka.\r\n10 cent Plot in a Beautiful Location.\r\nVery good accessibility,near to Koppala Town,Best for Residential Purpose.', 'Y'),
('IMG1-623bfb49e59736.35010270.jpg', 'IMG2-623bfb49e597e5.21545153.jpeg', 'Tejas villa', 9, 'House', 7000000, 'Udupi', 'Very beautifully built  vibrant house.\r\nIt is 4 bhk home\r\n#1-111/50 Srinagar Udupi district ', 'Y'),
('IMG1-623bfd1657afc1.55551706.jpg', 'IMG2-623bfd1657b072.64528668.jpg', 'Mannat Home', 10, 'House', 20000000, 'Moodbidri', 'Small 1 bhk Cozy house located in moodbidri\r\n1-1/23 Handel Moodbidri DK', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sellerproperty`
--

CREATE TABLE `sellerproperty` (
  `SPid` int(11) NOT NULL,
  `Pimg1` varchar(255) NOT NULL,
  `Pimg2` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `Ptype` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Loc` varchar(255) NOT NULL,
  `Sellerdesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellerproperty`
--

INSERT INTO `sellerproperty` (`SPid`, `Pimg1`, `Pimg2`, `Name`, `Email`, `Pname`, `Ptype`, `Price`, `Phone`, `Loc`, `Sellerdesc`) VALUES
(1, 'IMGse1-62015ac00a1364.32732565.jpg', 'IMGse2-62015ac00a51e6.90466504.jpg', 'Tinku', 'tinku@gmail.com', 'Long view villa', 'House', 6000000, 2147483647, 'Mangalore', 'Good House');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Fname`, `Lname`, `Email`, `Phone`, `Address`, `Password`) VALUES
(12, 'Tinku', 'R', 'tinku@gmail.com', 1234567899, 'Bailuru', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `broughtproperty`
--
ALTER TABLE `broughtproperty`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD UNIQUE KEY `payid` (`payid`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD UNIQUE KEY `Pid` (`Pid`);

--
-- Indexes for table `sellerproperty`
--
ALTER TABLE `sellerproperty`
  ADD UNIQUE KEY `SPid` (`SPid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broughtproperty`
--
ALTER TABLE `broughtproperty`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sellerproperty`
--
ALTER TABLE `sellerproperty`
  MODIFY `SPid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 10:40 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism-management-system---php-master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `package_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `no_of_person` int(9) NOT NULL,
  `travel_mode` varchar(255) NOT NULL,
  `total_cost` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`package_id`, `customer_name`, `location`, `date`, `no_of_person`, `travel_mode`, `total_cost`) VALUES
('abcd', 'vidit', 'Nainital', '2021-09-23', 5, 'flight', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `cus_login`
--

CREATE TABLE `cus_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_login`
--

INSERT INTO `cus_login` (`username`, `password`) VALUES
('shivansh', '123'),
('shivansh', '123'),
('vidit', 'vidit'),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `notamem`
--

CREATE TABLE `notamem` (
  `name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `num` int(12) NOT NULL,
  `mailid` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notamem`
--

INSERT INTO `notamem` (`name`, `password`, `cpassword`, `addr`, `age`, `num`, `mailid`) VALUES
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('shivansh', '123', '123', '123', 19, 2147483647, 'abc@gmail.com'),
('vidit', 'vidit', 'vidit', 'vidit', 19, 2147483647, 'abc@gmail.com'),
('', '', '', '', 0, 0, ''),
('', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `package_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `basic_amount` int(9) NOT NULL,
  `bus_amount` int(9) NOT NULL,
  `train_amount` int(9) NOT NULL,
  `flight_amount` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`package_id`, `location`, `description`, `basic_amount`, `bus_amount`, `train_amount`, `flight_amount`) VALUES
('abcd', 'Nainital', '4 days package', 1000, 300, 500, 3000),
('asd', 'manali', '6 days package', 1000, 200, 600, 4200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

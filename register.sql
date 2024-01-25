-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 02:18 PM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comments` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`first_name`, `last_name`, `email`, `phone`, `comments`) VALUES
('Elita', 'Hajrizi', 'elita.hajrizi@ubt-uni.net', '049654456', 'Kerkoje te me ktheni pergjigje ne lidhje me punen qe kam aplikuar.');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `roli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `pass`, `roli`) VALUES
('oltaolta', 'olta123@gmail.com', '12341234', ''),
('InvaDoli', 'id67745@ubt.net', '147852369', ''),
('InvaDoli', 'id67745@ubt.net', '147852369', ''),
('GretaAhma', 'greta.ahma@ubt-uni.net', '12345678', ''),
('inva', 'id67745@ubt-uni.net', '12345678', 'admin'),
('ElitaHajrizi', 'elita.hajrizaj@ubt-uni.net', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `ID` int(11) NOT NULL,
  `Img` blob NOT NULL,
  `JobTitle` varchar(1000) NOT NULL,
  `Orari` varchar(255) NOT NULL,
  `Lokacioni` varchar(1000) NOT NULL,
  `Detajet` varchar(5000) NOT NULL,
  `PozitaTeHapura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `Img`, `JobTitle`, `Orari`, `Lokacioni`, `Detajet`, `PozitaTeHapura`) VALUES
(3, 0x736372756d2e6a7067, 'Scrum Master', 'Full Time', 'Prishtine', 'Facilitator of Scrum Processes; Servant Leadership; Continuous Improvements', 24),
(4, 0x656d6265646465642d73797374656d2d69636f6e2d7365742d666f75722d656c656d656e74732d6469666572656e742d7374796c65732d696e6475737472792d69636f6e732d636f6c6c656374696f6e2d63726561746976652d66696c6c65642d6f75746c696e652d636f6c6f7265642d666c61742d3136313630323430312e77656270, 'Embedded Systems Engineer', 'Part time', 'Berlin', 'Embedded Software Development; Hardware-Software Integration; Embedded Systems Architecture', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

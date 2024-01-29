-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 04:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `Img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`ID`, `name`, `jobTitle`, `description`, `Img`) VALUES
(11, 'Olivia Martinez', 'Network Engineer', 'In the role of Network Engineer, Olivia Martinez spearheads the design, implementation, and maintenance of HireMe Corporation\'s network infrastructure. With a focus on optimizing network performance, reliability, and security, Olivia leads a team of skilled engineers in ensuring seamless connectivity. As a pivotal member of the management team, she actively contributes to strategic planning and growth initiatives, playing a crucial role in the development and maintenance of HireMe Corporation\'s robust and secure network architecture. Olivia\'s expertise ensures the company\'s networks remain efficient and resilient in an ever-evolving technological landscape.', 0x706572736f6e342e6a7067),
(12, 'Ethan Reynolds', 'Software Architect', 'As the Software Architect, Ethan Reynolds is at the forefront of HireMe Corporation\'s software design and development initiatives. Responsible for shaping the overall architecture and technical direction, Ethan leads a team of skilled engineers to create scalable and innovative software solutions. His role extends to overseeing software development processes, ensuring code quality, and driving technology innovation within the organization. A key influencer in the company\'s management team, Ethan actively contributes to strategic decisions and growth initiatives, cementing HireMe Corporation\'s position as a leader in cutting-edge software development.', 0x706572736f6e382e6a7067),
(13, 'Sophia Nguyen', 'Software Developer', 'In the capacity of Software Developer, Sophia Nguyen takes charge of driving the development efforts at HireMe Corporation. Leading a team of skilled programmers, Sophia oversees the design, implementation, and maintenance of high-quality software solutions. As an influential member of the management team, Sophia actively contributes to shaping the strategic direction and growth initiatives of the company. With a strong focus on technological innovation, Sophia plays a crucial role in positioning HireMe Corporation as a leader in cutting-edge programming and software development.', 0x706572736f6e392e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

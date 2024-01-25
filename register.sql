-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 11:14 PM
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
('Elita', 'Hajrizi', 'elita.hajrizi@ubt-uni.net', '049654456', 'Kerkoje te me ktheni pergjigje ne lidhje me punen qe kam aplikuar.'),
('Elita', 'Hajrizi', 'elita.hajrizi@ubt-uni.net', '049256555', 'Po ju shkruaj prap');

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
  `PozitaTeHapura` int(11) NOT NULL,
  `Pershkrimi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`ID`, `Img`, `JobTitle`, `Orari`, `Lokacioni`, `Detajet`, `PozitaTeHapura`, `Pershkrimi`) VALUES
(3, 0x736372756d2e6a7067, 'Human Resources Business Partner', 'Full Time', 'Prishtine', 'Strategic HR Planning; Employee Relations and Engagement; Talent Management and Development', 23, '            <h3>The Opportunity: Strategic HR Leadership Role</h3>             <p>                 Job Opportunity: Human Resources Business Partner                                  We are seeking a dynamic and strategic Human Resources Business Partner to join our team. As an HR Business Partner, you will play a pivotal role in aligning human resources strategies with business objectives. This is a leadership position where you will collaborate with business leaders to drive HR initiatives, foster a positive workplace culture, and contribute to the overall success of our organization. If you are passionate about people, organizational development, and driving HR excellence, we want to hear from you.             </p>             <br>             <h3>A Day in the Life:</h3>             <ul id=\"req\">                 <li>Collaborate with business leaders to understand organizational goals and develop HR strategies that support them.</li>                 <li>Provide strategic guidance on talent acquisition, employee relations, performance management, and workforce planning.</li>                 <li>Lead initiatives to enhance employee engagement, retention, and professional development.</li>                 <li>Partner with management to address employee relations issues and ensure a positive and inclusive workplace environment.</li>                 <li>Conduct regular assessments of organizational and departmental needs to inform HR programs and policies.</li>                 <li>Serve as a key point of contact for employees, providing guidance on HR policies, benefits, and career development.</li>                 <li>Manage individual and team priorities, deadlines, and deliverables within the HR domain.</li>             </ul>             <br>             <h3>Role Progression:</h3>             <p>Within 1 month, you will:</p>             <ul id=\"req\">                 <li>Complete the onboarding program, gaining insights into our organizational structure, culture, and business objectives.</li>                 <li>Familiarize yourself with our specific HR policies, programs, and ongoing projects.</li>             </ul>             <p>Within 6 months, you will:</p>             <ul id=\"req\">                 <li>Lead HR initiatives, demonstrating a deep understanding of HR principles and best practices.</li>                 <li>Successfully partner with business leaders to implement HR strategies that positively impact the organization.</li>                 <li>Contribute to the development and implementation of HR policies and programs.</li>                 <li>Provide mentorship and assistance to HR team members, fostering a collaborative and growth-oriented team culture.</li>             </ul>             <br>             <h3>Requirements About You:</h3>                                    <ul id=\"req\">                 <li>8+ years of experience in human resources, with a focus on strategic HR business partnering.</li>                 <li>Demonstrated leadership experience in aligning HR strategies with organizational goals.</li>                 <li>Strong understanding of talent acquisition, employee relations, performance management, and workforce planning.</li>                 <li>Excellent communication and interpersonal skills, with the ability to build effective relationships at all levels of the organization.</li>                 <li>Experience with HRIS systems and familiarity with HR compliance and labor laws.</li>                 <li>Familiarity with agile methodologies and project management tools.</li>                 <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>             </ul>                  <br>'),
(4, 0x656d6265646465642d73797374656d2d69636f6e2d7365742d666f75722d656c656d656e74732d6469666572656e742d7374796c65732d696e6475737472792d69636f6e732d636f6c6c656374696f6e2d63726561746976652d66696c6c65642d6f75746c696e652d636f6c6f7265642d666c61742d3136313630323430312e77656270, 'Embedded Systems Engineer', 'Part time', 'Berlin', 'Embedded Software Development; Hardware-Software Integration; Embedded Systems Architecture', 5, '<p>             Job Opportunity: Embedded Systems Engineer                          We\'re searching for a talented and innovative Embedded Systems Engineer to join our dynamic team. As an Embedded Systems Engineer, you will be at the forefront of designing and developing embedded solutions that power our cutting-edge products. If you have a passion for embedded systems, hardware design, and firmware development, we want to hear from you. Join us and contribute to the creation of innovative technologies that make a significant impact.         </p>         <br>         <h3>A Day in the Life:</h3>         <ul id=\"req\">             <li>Participate in the design and development of embedded systems for our products.</li>             <li>Collaborate with cross-functional teams, including hardware engineers and software developers, to integrate embedded solutions into overall product architecture.</li>             <li>Develop and optimize firmware for embedded systems, ensuring reliability, efficiency, and scalability.</li>             <li>Conduct hardware and software debugging, troubleshooting, and performance testing.</li>             <li>Work on low-level programming, interfacing with sensors, and implementing communication protocols.</li>             <li>Mentor and guide junior engineers, fostering a culture of knowledge-sharing and innovation.</li>             <li>Manage individual and team priorities, deadlines, and deliverables within the embedded systems domain.</li>         </ul>         <br>         <h3>Role Progression:</h3>         <p>Within 1 month, you will:</p>         <ul id=\"req\">             <li>Complete the onboarding program, gaining insights into our organization\'s structure, culture, and ongoing projects.</li>             <li>Familiarize yourself with our specific embedded systems development lifecycle and project management methodologies.</li>         </ul>         <p>Within 6 months, you will:</p>         <ul id=\"req\">             <li>Lead embedded systems projects, demonstrating a deep understanding of embedded systems design and development.</li>             <li>Successfully guide the team in implementing and optimizing embedded solutions within specified timeframes.</li>             <li>Contribute to the evaluation and adoption of new technologies to enhance embedded systems capabilities.</li>             <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>         </ul>         <br>         <h3>Requirements About You:</h3>         <ul id=\"req\">             <li>5+ years of experience as an Embedded Systems Engineer, with a focus on hardware design and firmware development.</li>             <li>Expertise in C/C++ programming for embedded systems.</li>             <li>Experience with microcontrollers, microprocessors, and embedded system architectures.</li>             <li>Knowledge of communication protocols such as SPI, I2C, UART, and experience with wireless communication technologies.</li>             <li>Familiarity with hardware debugging tools and oscilloscopes.</li>             <li>Experience with version control systems (e.g., Git).</li>             <li>Familiarity with agile methodologies and project management tools.</li>             <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>         </ul>                   <br>');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

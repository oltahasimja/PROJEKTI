-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 12:35 AM
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
(4, 0x656d6265646465642d73797374656d2d69636f6e2d7365742d666f75722d656c656d656e74732d6469666572656e742d7374796c65732d696e6475737472792d69636f6e732d636f6c6c656374696f6e2d63726561746976652d66696c6c65642d6f75746c696e652d636f6c6f7265642d666c61742d3136313630323430312e77656270, 'Embedded Systems Engineer', 'Part time', 'Berlin', 'Embedded Software Development; Hardware-Software Integration; Embedded Systems Architecture', 5, '<p>             Job Opportunity: Embedded Systems Engineer                          We\'re searching for a talented and innovative Embedded Systems Engineer to join our dynamic team. As an Embedded Systems Engineer, you will be at the forefront of designing and developing embedded solutions that power our cutting-edge products. If you have a passion for embedded systems, hardware design, and firmware development, we want to hear from you. Join us and contribute to the creation of innovative technologies that make a significant impact.         </p>         <br>         <h3>A Day in the Life:</h3>         <ul id=\"req\">             <li>Participate in the design and development of embedded systems for our products.</li>             <li>Collaborate with cross-functional teams, including hardware engineers and software developers, to integrate embedded solutions into overall product architecture.</li>             <li>Develop and optimize firmware for embedded systems, ensuring reliability, efficiency, and scalability.</li>             <li>Conduct hardware and software debugging, troubleshooting, and performance testing.</li>             <li>Work on low-level programming, interfacing with sensors, and implementing communication protocols.</li>             <li>Mentor and guide junior engineers, fostering a culture of knowledge-sharing and innovation.</li>             <li>Manage individual and team priorities, deadlines, and deliverables within the embedded systems domain.</li>         </ul>         <br>         <h3>Role Progression:</h3>         <p>Within 1 month, you will:</p>         <ul id=\"req\">             <li>Complete the onboarding program, gaining insights into our organization\'s structure, culture, and ongoing projects.</li>             <li>Familiarize yourself with our specific embedded systems development lifecycle and project management methodologies.</li>         </ul>         <p>Within 6 months, you will:</p>         <ul id=\"req\">             <li>Lead embedded systems projects, demonstrating a deep understanding of embedded systems design and development.</li>             <li>Successfully guide the team in implementing and optimizing embedded solutions within specified timeframes.</li>             <li>Contribute to the evaluation and adoption of new technologies to enhance embedded systems capabilities.</li>             <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>         </ul>         <br>         <h3>Requirements About You:</h3>         <ul id=\"req\">             <li>5+ years of experience as an Embedded Systems Engineer, with a focus on hardware design and firmware development.</li>             <li>Expertise in C/C++ programming for embedded systems.</li>             <li>Experience with microcontrollers, microprocessors, and embedded system architectures.</li>             <li>Knowledge of communication protocols such as SPI, I2C, UART, and experience with wireless communication technologies.</li>             <li>Familiarity with hardware debugging tools and oscilloscopes.</li>             <li>Experience with version control systems (e.g., Git).</li>             <li>Familiarity with agile methodologies and project management tools.</li>             <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>         </ul>                   <br>'),
(7, 0x636c6f75642e706e67, 'Cloud Solutions Architect', 'Full time', 'Gjakova', 'Cloud Architecture Design; Implementation and Migration; Consultation and Collaboration', 15, ' <h3>The Opportunity: Cloud Solutions Architect</h3>     <p>         Job Opportunity: Cloud Solutions Architect                  Join our dynamic team as a Cloud Solutions Architect and play a crucial role in shaping the architecture and performance of our cloud solutions. As a Cloud Solutions Architect, you will be at the forefront of designing and implementing scalable and innovative cloud-based systems. If you have a passion for cloud technologies, infrastructure design, and optimizing system performance, we want to hear from you. Help us build cutting-edge solutions that leverage the power of the cloud to drive our organization\'s success.     </p>     <br>     <h3>A Day in the Life:</h3>     <ul id=\"req\">         <li>Lead the design and implementation of cloud solutions architecture for our projects.</li>         <li>Collaborate with cross-functional teams, including software engineers and system administrators, to integrate cloud solutions into overall system architecture.</li>         <li>Conduct cloud assessments and provide recommendations for optimizing performance, scalability, and cost efficiency.</li>         <li>Implement and manage infrastructure as code (IaC) for efficient and reproducible deployments.</li>         <li>Stay up-to-date with the latest advancements in cloud technologies and best practices.</li>         <li>Mentor and guide junior cloud engineers, fostering a culture of knowledge-sharing and innovation.</li>         <li>Manage individual and team priorities, deadlines, and deliverables within the cloud solutions domain.</li>     </ul>     <br>     <h3>Role Progression:</h3>     <p>Within 1 month, you will:</p>     <ul id=\"req\">         <li>Complete the onboarding program, gaining insights into our organization\'s structure, culture, and ongoing cloud projects.</li>         <li>Familiarize yourself with our specific cloud solutions development lifecycle and project management methodologies.</li>     </ul>     <p>Within 6 months, you will:</p>     <ul id=\"req\">         <li>Lead major cloud initiatives, demonstrating a deep understanding of cloud technologies and best practices.</li>         <li>Successfully guide the team in implementing and optimizing cloud solutions within specified timeframes.</li>         <li>Contribute to the evaluation and adoption of new cloud technologies to enhance our capabilities.</li>         <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>     </ul>     <br>     <h3>Requirements About You:</h3>     <ul id=\"req\">         <li>5+ years of experience as a Cloud Solutions Architect, with a focus on designing and optimizing cloud-based systems.</li>         <li>Expertise in cloud platforms such as AWS, Azure, or Google Cloud.</li>         <li>Demonstrated experience with infrastructure as code (IaC) tools like Terraform or CloudFormation.</li>         <li>Strong understanding of containerization and orchestration tools (e.g., Docker, Kubernetes).</li>         <li>Experience with serverless computing and microservices architecture.</li>         <li>Familiarity with security best practices for cloud environments.</li>         <li>Familiarity with agile methodologies and project management tools.</li>         <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>     </ul>'),
(8, 0x71612e6a7067, 'Quality Assurance Engineer', 'Part time', 'Amsterdam', 'Test Planning and Strategy; Test Execution; Quality Assurance Process Improvement', 3, '<h3>The Opportunity: Quality Assurance Engineer</h3>     <p>         Job Opportunity: Quality Assurance Engineer                  Join our dedicated team as a Quality Assurance Engineer and contribute to ensuring the quality and reliability of our software products. As a QA Engineer, you will play a crucial role in designing and executing test plans, identifying and documenting defects, and collaborating with cross-functional teams to deliver high-quality software. If you have a passion for quality assurance, strong analytical skills, and a keen attention to detail, we want to hear from you. Join us and make a significant impact on the quality of our software solutions.     </p>     <br>     <h3>A Day in the Life:</h3>     <ul id=\"req\">         <li>Collaborate with product managers and developers to understand software requirements and user stories.</li>         <li>Design and execute comprehensive test plans, test cases, and test scripts for both manual and automated testing.</li>         <li>Conduct functional, regression, and performance testing to ensure software meets quality standards.</li>         <li>Identify, document, and track software defects using bug tracking tools.</li>         <li>Work closely with development teams to reproduce and isolate bugs for efficient resolution.</li>         <li>Participate in agile ceremonies, including sprint planning, daily stand-ups, and sprint reviews.</li>         <li>Contribute to the development and maintenance of automated test scripts for continuous integration and deployment.</li>         <li>Provide clear and concise reports on test results and test coverage to stakeholders.</li>     </ul>     <br>     <h3>Role Progression:</h3>     <p>Within 1 month, you will:</p>     <ul id=\"req\">         <li>Complete the onboarding program, gaining insights into our organization\'s structure, culture, and ongoing software development projects.</li>         <li>Familiarize yourself with our specific quality assurance processes, tools, and testing environments.</li>     </ul>     <p>Within 6 months, you will:</p>     <ul id=\"req\">         <li>Independently design and execute test plans for new features and product releases.</li>         <li>Contribute to the development and improvement of QA processes and methodologies.</li>         <li>Participate in automated testing initiatives and contribute to the expansion of our automated testing suite.</li>         <li>Mentor and assist junior QA team members, fostering a collaborative and knowledge-sharing team culture.</li>     </ul>     <br>     <h3>Requirements About You:</h3>     <ul id=\"req\">         <li>3+ years of experience as a Quality Assurance Engineer or a related role.</li>         <li>Strong understanding of software development life cycle (SDLC) and QA methodologies.</li>         <li>Experience in both manual and automated testing, with proficiency in testing tools and frameworks.</li>         <li>Knowledge of scripting languages for test automation (e.g., Selenium, Python, Java).</li>         <li>Familiarity with version control systems (e.g., Git) and continuous integration tools.</li>         <li>Excellent analytical and problem-solving skills, with a keen attention to detail.</li>         <li>Ability to work independently and collaboratively in an agile development environment.</li>         <li>Bachelor’s degree in Computer Science, Software Engineering, or a related field.</li>     </ul>      <br> <div id=\"applyForm\">     <h3 style=\"color: white; display: flex; justify-content: center;\">Add your CV</h3>     <br>     <form onsubmit=\"return validateApplyForm(\'cv24\', 24)\">         <label for=\"cv\" style=\"color: white; margin-left: 2.5em;\">Upload your CV:   </label>         <input type=\"file\" id=\"cv24\" name=\"cv\" accept=\".pdf, .doc, .docx\" style=\"margin-left: 1em;\">         <br>         <button type=\"submit\" id=\"butoniApply\"><b>Apply</b></button>     </form> </div>  <a href=\"#\" class=\"close-btn\" onclick=\"closeJobDetails22()\">Close</a> </div> <div id=\"jobDetailsBox23\" class=\"job-details-box\">     <h3>The Opportunity: Software Engineer</h3>     <p>         Job Opportunity: Software Engineer                  Join our innovative team as a Software Engineer and contribute to the development of cutting-edge software solutions. As a Software Engineer, you will play a key role in designing, coding, testing, and maintaining software applications. If you have a passion for problem-solving, a strong background in software development, and thrive in a collaborative environment, we want to hear from you. Join us and be part of a team that\'s shaping the future of technology.     </p>     <br>     <h3>A Day in the Life:</h3>     <ul id=\"req\">         <li>Collaborate with cross-functional teams to understand software requirements and design efficient solutions.</li>         <li>Write clean, maintainable, and efficient code for software applications.</li>         <li>Conduct unit testing and debugging to ensure software functionality meets specifications.</li>         <li>Participate in code reviews to maintain code quality and share knowledge with team members.</li>         <li>Stay updated on emerging technologies and contribute to the adoption of new tools and practices.</li>         <li>Work on both new development projects and enhancements to existing software.</li>         <li>Troubleshoot and resolve software defects and issues in a timely manner.</li>     </ul>     <br>     <h3>Role Progression:</h3>     <p>Within 1 month, you will:</p>     <ul id=\"req\">         <li>Complete the onboarding program, gaining insights into our development processes, tools, and team dynamics.</li>         <li>Familiarize yourself with our coding standards, version control systems, and project workflows.</li>     </ul>     <p>Within 6 months, you will:</p>     <ul id=\"req\">         <li>Take ownership of specific software components, demonstrating proficiency in their design and functionality.</li>         <li>Collaborate on complex projects, contributing to architectural decisions and codebase improvements.</li>         <li>Participate in knowledge-sharing sessions and mentor junior team members.</li>         <li>Engage in ongoing professional development to stay abreast of industry trends and advancements.</li>     </ul>     <br>     <h3>Requirements About You:</h3>     <ul id=\"req\">         <li>3+ years of experience in software development, with a focus on building scalable and maintainable applications.</li>         <li>Proficiency in programming languages such as Java, C++, or Python.</li>         <li>Experience with software development methodologies and best practices.</li>         <li>Strong problem-solving skills and attention to detail.</li>         <li>Ability to work both independently and collaboratively within a team environment.</li>         <li>Bachelor’s or Master’s degree in Computer Science, Software Engineering, or a related field.</li>         <li>Familiarity with agile development processes is a plus.</li>     </ul>     ');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

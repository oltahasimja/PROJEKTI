

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Openings</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="jobopenings.css">
    <link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="stylecover.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;1,6..12,200&family=Rubik:wght@400;700&display=swap" rel="stylesheet">
</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<body>
    <?php include 'header.php'; ?>
<div class="banner2">
    <div class="main">
        <div class="search" >
            <input type="text" id="searchInput" placeholder="Search your best job here...">
            <button class="btn-search" id="searchBtn">
                <img src="search.png" alt="">
            </button>
        </div>  
    </div>

    <?php
        session_start();

         if($_SESSION['roli']=="admin"){
             echo"<button>
                     <a href='dashboard.php'>Dashboard</a>
                 </button>";
         }

         
include "DatabaseConnection.php";
include_once "PunaRepository.php";

$jbrep = new PunaRepository();
$puna = $jbrep->getAllJobs();

?>
        
    <div class="punet">
        <div class="puna">
            <img src="c.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Software Engineer (C#.NET)</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">London (remote-optional)</div>
                          </div>
              </div>

            <div class="details">Software Development; Technical Leadership; System Architecture and Optimization</div>
        
            
                 <a href="#" class="details-btn" onclick="showJobDetails()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div>
        <div class="puna">
            <img src="ai.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">AI specialist</h3>
            <div class="kryesor">
            <div class="foto-fulltime">
                <img src="ora.png" alt="" style="width: 20px; height: auto;">
                <div class="time">Full time</div>
                </div>
          
                 <div class="foto-lokacion" >
                  <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                     <div class="lokacion">Prishtina</div>
                      </div>
          </div>
            <div class="details">Problem Definition 
                Data Prep Model Development & Deployment
                 Monitoring & Collaboration</div>
                <a href="#" class="details-btn" onclick="showJobDetails1()">Learn More</a>
                <span class="open-positions">2 open positions</span>
        </div>
        <div class="puna">
            <img src="react.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Technical Lead - Software Engineering (Frontend - ReactJS)</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Ottawa</div>
                          </div>
              </div>
            <div class="details">Frontend Architecture and Development; Team Collaboration and Mentorship; Technical Strategy and Innovation</div>
                <a href="#" class="details-btn" onclick="showJobDetails2()">Learn More</a>
                <span class="open-positions">7 open positions</span>
        </div>
        <div class="puna">
            <img src="uiux.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Software Engineer, UX/UI</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Half time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina(remote-optional)</div>
                          </div>
              </div>
            <div class="details">User-Centric Design; Prototyping and Testing; Design System Management</div>
                <a href="#" class="details-btn" onclick="showJobDetails3()">Learn More</a>
                <span class="open-positions">11 open positions</span>
        </div>
        <div class="puna">
            <img src="enterprise.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Director, Enterprise Architecture</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">NY-550 W Jackson Blvd Suite</div>
                          </div>
              </div>
            <div class="details">Strategic Technology Planning; Cross-Functional Collaboration; Governance and Standards</div>
                <a href="#" class="details-btn" onclick="showJobDetails4()">Learn More</a>
                <span class="open-positions">4 open positions</span>
        </div> <div class="puna">
            <img src="datadriven.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Database Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Database Design and Optimization, Data Security and Compliance; Database Administration and Monitoring</div>
                <a href="#" class="details-btn" onclick="showJobDetails5()">Learn More</a>
                <span class="open-positions">2 open positions</span>
        </div> <div class="puna">
            <img src="DevOps-Cycle.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior DevOps Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina(remote-optional)</div>
                          </div>
              </div>
            <div class="details">Infrastructure Automation; Monitoring and Incident Response; Continuous Integration/Deployment (CI/CD)</div>
                <a href="#" class="details-btn" onclick="showJobDetails6()">Learn More</a>
                <span class="open-positions">3 open positions</span>
         </div> <div class="puna">
            <img src="human.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Human Resources Business Partner</h3>
            <div class="kryesor">
                <div class="foto-fulltime"> 
                     <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">London</div>
                          </div>
              </div>
            <div class="details">Strategic HR Planning; Employee Relations and Engagement; Talent Management and Development</div>
                <a href="#" class="details-btn" onclick="showJobDetails7()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div>
    
         
        <?php foreach ($puna as $job) { ?>
    <div class="puna">
        <img src="<?php echo $job['Img']; ?>" alt="" style="width: 70px; height: auto;">
        <h3 class="job-title"><?php echo $job['JobTitle']; ?></h3>
        <div class="kryesor">
            <div class="foto-fulltime">
                <img src="ora.png" alt="" style="width: 20px; height: auto;">
                <div class="time"><?php echo $job['Orari']; ?></div>
            </div>
            <div class="foto-lokacion">
                <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                <div class="lokacion"><?php echo $job['Lokacioni']; ?></div>
            </div>
        </div>
        <div class="details"><?php echo $job['Detajet']; ?></div>
        <a href="#" class="details-btn" onclick="showJobDetails(<?php echo $job['ID']; ?>)">Learn More</a>
        <span class="open-positions"><?php echo $job['PozitaTeHapura']; ?> open positions</span>
    </div>

    <div id="jobDetailsBox<?php echo $job['ID']; ?>" class="job-details-box">
        <?php echo $job['Pershkrimi']; ?>
        <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv<?php echo $job['ID']; ?>', <?php echo $job['ID']; ?>)">
                <label for="cv<?php echo $job['ID']; ?>" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv<?php echo $job['ID']; ?>" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
        <a href="#" class="close-btn" onclick="closeJobDetails(<?php echo $job['ID']; ?>)">Close</a>
    </div>

    <script>
        function showJobDetails(ID) {
            var jobDetailsBox = document.getElementById('jobDetailsBox' + ID);
            jobDetailsBox.style.display = 'block';
            jobDetailsBox.style.overflowY = 'auto';
        }

        function closeJobDetails(ID) {
            var jobDetailsBox = document.getElementById('jobDetailsBox' + ID);
            jobDetailsBox.style.display = 'none';
        }
    </script>
<?php } ?>

        <!-- <div class="puna">
            <img src="embedded-system-icon-set-four-elements-diferent-styles-industry-icons-collection-creative-filled-outline-colored-flat-161602401.webp" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Embedded Systems Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Part time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Berlin</div>
                          </div>
              </div>
            <div class="details">Embedded Software Development; Hardware-Software Integration; Embedded Systems Architecture</div>
                <a href="#" class="details-btn" onclick="showJobDetails8()">Learn More</a>
                <span class="open-positions">5 open positions</span>
        </div> <div class="puna">
            <img src="blockchain.webp" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Blockchain Developer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Rotterdam</div>
                          </div>
              </div>
            <div class="details">Smart Contract Development; Blockchain Network Development; Integration with Existing Systems</div>
                <a href="#" class="details-btn" onclick="showJobDetails9()">Learn More</a>
                <span class="open-positions">1 open position</span>
        </div> <div class="puna">
            <img src="machine-learning.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Machine Learning Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">India(remote)</div>
                          </div>
              </div>
            <div class="details">Algorithm Development and Implementation; Data Preprocessing; Model Evaluation</div>
                <a href="#" class="details-btn" onclick="showJobDetails10()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> <div class="puna">
            <img src="cloud.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Cloud Solutions Architect</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Cloud Architecture Design; Implementation and Migration; Consultation and Collaboration</div>
                <a href="#" class="details-btn" onclick="showJobDetails11()">Learn More</a>
                <span class="open-positions">2 open positions</span>
        </div> <div class="puna">
            <img src="cyber.webp" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">CyberSecurity Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Part time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Security Monitoring and Incident Response; Security Awareness and Training; Vulnerability Assessment</div>
                <a href="#" class="details-btn" onclick="showJobDetails12()">Learn More</a>
                <span class="open-positions">1 open position</span>
        </div> <div class="puna">
            <img src="business.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Business Development Representative</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Lead Generation; Client Engagement and Relationship Building; Sales Support and Collaboration</div>
                <a href="#" class="details-btn" onclick="showJobDetails25()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> <div class="puna">
            <img src="c2.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Software Engineer (C++)</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Software Development; Performance Optimization; Technical Leadership</div>
                <a href="#" class="details-btn" onclick="showJobDetails13()">Learn More</a>
                <span class="open-positions">7 open positions</span>
        </div> <div class="puna">
            <img src="753938.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Senior Software Engineer - Frontend</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Frontend Development; Architecture and Scalability; Cross-Functional Collaboration</div>
                <a href="#" class="details-btn" onclick="showJobDetails14()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> <div class="puna">
            <img src="full.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Full Stack Developer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Frontend Development; Backend Development; Database Management</div>
                <a href="#" class="details-btn" onclick="showJobDetails15()">Learn More</a>
                <span class="open-positions">12 open positions</span>
        </div> <div class="puna">
            <img src="th.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Database Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Database Management; Database Design and Optimization, Data Security and Compliance</div>
                <a href="#" class="details-btn" onclick="showJobDetails16()">Learn More</a>
                <span class="open-positions">2 open positions</span>
        </div> <div class="puna">
            <img src="tech.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Technical Support Executive</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Customer Support and Issue Resolution; Knowledge Base Management; Customer Education</div>
                <a href="#" class="details-btn" onclick="showJobDetails17()">Learn More</a>
                <span class="open-positions">1 open position</span>
        </div> <div class="puna">
            <img src="systems.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Systems Administrator</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Infrastructure Management; Security Administration; Troubleshooting and Technical Support</div>
                <a href="#" class="details-btn" onclick="showJobDetails18()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> <div class="puna">
            <img src="net.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Network Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Network Design and Implementation; Network Monitoring; Security and Access Control</div>
                <a href="#" class="details-btn" onclick="showJobDetails19()">Learn More</a>
                <span class="open-positions">5 open positions</span>
        </div> <div class="puna">
            <img src="datadriven.png" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Data Scientist</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Data Analysis and Modeling; Data Preprocessing; Communication of Findings</div>
                <a href="#" class="details-btn" onclick="showJobDetails20()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> <div class="puna">
            <img src="pr.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Public Relations (PR) & Communications Strategist</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Strategic Communication Planning; Media Relations and Outreach; Crisis Communication and Reputation Management</div>
                <a href="#" class="details-btn" onclick="showJobDetails21()">Learn More</a>
                <span class="open-positions">8 open positions</span>
        </div> <div class="puna">
            <img src="qa.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Quality Assurance Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Test Planning and Strategy; Test Execution; Quality Assurance Process Improvement</div>
                <a href="#" class="details-btn" onclick="showJobDetails22()">Learn More</a>
                <span class="open-positions">9 open positions</span>
        </div> <div class="puna">
            <img src="sof.webp" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Software Engineer</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Software Development; Code Review and Quality Assurance; Problem Solving</div>
                <a href="#" class="details-btn" onclick="showJobDetails23()">Learn More</a>
                <span class="open-positions">3 open positions</span>
        </div> 
        <div class="puna">
            <img src="scrum.jpg" alt="" style="width: 70px; height: auto;">
            <h3 class="job-title">Scrum Master</h3>
            <div class="kryesor">
                <div class="foto-fulltime">
                    <img src="ora.png" alt="" style="width: 20px; height: auto;">
                    <div class="time">Full time</div>
                    </div>
              
                     <div class="foto-lokacion" >
                      <img src="lokacioni.png" alt="" style="width: 20px; height: auto;">
                         <div class="lokacion">Prishtina</div>
                          </div>
              </div>
            <div class="details">Facilitator of Scrum Processes; Servant Leadership; Continuous Improvements</div>
                <a href="#" class="details-btn" onclick="showJobDetails24()">Learn More</a>
                <span class="open-positions">21 open positions</span>
        </div> -->
    </div>
</div>
 
<?php include 'footer.php'; ?>
      <div id="jobDetailsBox" class="job-details-box">
         <h3> The Opportunity:  Hybrid Role:</h3>
         <p> Come join a relentless team of software engineers dedicated to helping the legal world collaborate on their strategic goals and identify new business opportunities within their existing clients. You will help grow our development team by participating in the full SDLC (Software Development Lifecycle) from preliminary system analysis to testing and deployment. This hybrid-engineering role includes building high quality and fully performing software that meets quality and software development standards alongside a great group of smart, motivated people, with a focus on customer delight. </p>
            <br>
         <h3>A Day in the Life: </h3> 
            <ul id="req">
                <li>Take ownership of product features from estimates to design and development </li>
            <li>Write clean, maintainable code that is extensible with minimum number of defects</li>   
            <li>Refactor and improve existing software </li>   
                <li>Collaborate with cross-functional teams (PM, QA) to complete tasks</li>
                <li>Manage individual task priorities, deadlines, and deliverables </li>
                <li>Provide guidance on modern software engineering techniques and methodologies for code reviews </li>
                <li>Coach and mentor less experienced team members</li>
                </ul>
                <br>
                <h3>Role progression: </h3>
                Within 1 month, you will: 
                <ul id="req">
                    <li>Complete our Engineering onboarding plan </li>
                    <li>Meet the team and learn the details of our business, as well as where we are headed </li>
                <li>Familiarize yourself with our Software Development Life Cycle and our specific flavor of Scrum </li>
                            <li>Participate in Scrum ceremonies </li>
            </ul>Within 6 months, you will: 
            <ul id="req">
                <li>Contribute, as a fully integrated member of your Scrum team </li>
                <li>Complete assigned tasks within the given timeframe</li>
                <li>Write code that is readable, extensible, well commented, and that does not require multiple iterations to correct issues found by QA </li>
            <li>Require minimal supervision for assigned tasks </li>
            <li>Assist, guide, advise, and help team members: </li>
            <li>to complete their assignments within the given timeframe </li>
            </ul>
            <br>
            <h3>Requirements  About You: </h3>
            <ul id="req">6+ years experience in C#.NET

            <li>Good knowledge of development using JS/React/CSS at a mid-senior level (4+ years) </li>  
                
            <li>Good knowledge of development using PHP & Laravel at a mid-senior level (4+ years) </li>  
                
            <li>Ability to work with legacy PHP & JS code</li>  
                
            <li>Good understanding of design patterns and OOP concepts</li>  
                
            <li>Good knowledge of building and extending REST APIs </li>  
                
            <li>Good knowledge of SQL database design </li>  
                
            <li>Knowledge of source control with Git, especially branching/merging as needed </li>  
                
            <li>Familiar with Atlassian products – JIRA </li>  
                
            <li>Familiarity with agile techniques </li>  
                
            <li>Experience with unit/integration/acceptance tests </ul>
                <br>
                <div id="applyForm">
                    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
                    <br>
                    <form onsubmit="return validateApplyForm('cv1', 1)">
                        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                        <input type="file" id="cv1" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                        <br>
                        <button type="submit" id="butoniApply"><b>Apply</b></button>
                    </form>
                </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails()">Close</a>
    </div>
    <div id="jobDetailsBox1" class="job-details-box">
        <h3> The Opportunity:  Hybrid Role:</h3>
       <p> 
        Job Opportunity: AI Specialist
        
        Join our dynamic team of AI specialists committed to pushing the boundaries
         of artificial intelligence and its applications. As an AI specialist, you will 
         play a pivotal role in advancing our AI initiatives, contributing to the
          development of cutting-edge solutions, and collaborating with cross-functional teams.
           This hybrid role involves engaging in the entire AI project lifecycle,
            from conceptualization to deployment, with a strong emphasis on innovation and delivering value to our clients </p>
       <br>
       <h3>A Day in the Life: </h3> 
       <ul id="req">
        <li> Take ownership of AI projects, from conceptualization to design and implementation. </li>
    <li>Develop clean, efficient, and scalable AI models and algorithms</li>   
<li>Write high-quality, maintainable code for AI applications. </li>   
<li>Collaborate with cross-functional teams, including product managers and quality assurance, to ensure the successful completion of AI projects.</li>
<li>Develop clean, efficient, and scalable AI models and algorithms.</li>
<li>Provide guidance on modern AI techniques and methodologies during code reviews.</li>
<li>Manage individual task priorities, deadlines, and deliverables within the AI development lifecycle.</li>
</ul>
<br>
<h3>Role progression: </h3>
Within 1 month, you will: 
<ul id="req">
    <li>Complete the AI onboarding program </li>
    <li>Familiarize yourself with our AI projects, team dynamics, and business objectives. </li>
<li>Understand the AI development lifecycle and our specific project management methodologies. </li>

</ul><ul id="req">
    <li>Contribute significantly to AI projects, demonstrating a deep understanding of AI concepts and technologies.</li>
    <li>Complete assigned AI tasks within given timeframes.</li>
    <li>Develop AI solutions that are innovative, well-documented, and align with project requirements.</li>
<li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture. </li>

</ul>
<br>
<h3>Requirements  About You: </h3>
<ul id="req">

  <li>6+ years of experience in AI development. </li>  
    
  <li>Proficient in programming languages such as Python and/or Java for AI applications. </li>  
    
  <li>Solid understanding of machine learning, deep learning, and natural language processing.</li>  
    
  <li>Experience with popular AI frameworks and libraries (e.g., TensorFlow, PyTorch).</li>  
    
  <li>Familiarity with cloud-based AI services (e.g., AWS, Azure, Google Cloud). </li>  
    
  <li>Strong knowledge of data preprocessing, feature engineering, and model evaluation. </li>  
    
  <li>Excellent problem-solving skills and ability to work independently or collaboratively</li>  
    
  <li>Familiarity with agile methodologies and project management tools. </li>  
  
    
  </ul>
    <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv2', 2)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv2" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails1()">Close</a>
    </div>
    <div id="jobDetailsBox2" class="job-details-box">
        <h3>The Opportunity: Hybrid Role</h3>
        <p>
            Job Opportunity: Technical Lead - Software Engineering (Frontend - ReactJS)
            
            Join our dynamic team of software engineers as a Technical Lead, specializing in Frontend development with ReactJS. As a Technical Lead, you will be a key player in driving the technical direction of our software projects, with a focus on frontend innovation and excellence. This hybrid role entails leading a team through the entire software development lifecycle, from ideation to deployment, with a strong emphasis on delivering high-quality solutions and exceeding client expectations.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Take ownership of frontend projects, guiding the team from conceptualization to design and implementation.</li>
            <li>Lead the development of clean, efficient, and user-friendly interfaces using ReactJS.</li>
            <li>Write high-quality, maintainable code for frontend applications.</li>
            <li>Collaborate closely with cross-functional teams, including backend developers and quality assurance, to ensure seamless project delivery.</li>
            <li>Provide technical guidance and mentorship to the frontend development team.</li>
            <li>Manage individual and team task priorities, deadlines, and deliverables within the software development lifecycle.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining a deep understanding of our software projects, team dynamics, and business objectives.</li>
            <li>Familiarize yourself with the frontend development lifecycle and our specific project management methodologies.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead frontend projects, demonstrating a deep understanding of ReactJS and frontend technologies.</li>
            <li>Successfully guide the team in completing frontend tasks within specified timeframes.</li>
            <li>Develop frontend solutions that are innovative, well-documented, and align with project requirements.</li>
            <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>8+ years of experience in software engineering with a focus on frontend development using ReactJS.</li>
            <li>Expertise in JavaScript, HTML, CSS, and other relevant frontend technologies.</li>
            <li>Demonstrated leadership experience, guiding teams through successful frontend project deliveries.</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Strong problem-solving skills and the ability to work independently or collaboratively.</li>
        </ul>
    <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv3', 3)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv3" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails2()">Close</a>
    </div>
    <div id="jobDetailsBox3" class="job-details-box">
        <h3>The Opportunity: Hybrid Role</h3>
        <p>
            Job Opportunity: Senior Database Engineer
            
            Join our dynamic team as a Senior Database Engineer, playing a crucial role in shaping the architecture and performance of our database systems. As a Senior Database Engineer, you will be at the forefront of designing, implementing, and optimizing database solutions to meet the evolving needs of our organization. This hybrid role involves active participation in the complete database development lifecycle, from design to deployment, with a focus on innovation and ensuring the integrity and efficiency of our data systems.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Lead the design, implementation, and maintenance of high-performance database systems.</li>
            <li>Optimize database performance, ensuring responsiveness, reliability, and scalability.</li>
            <li>Collaborate closely with cross-functional teams, including software engineers and system administrators, to align database solutions with overall system architecture.</li>
            <li>Troubleshoot and resolve complex database issues, ensuring minimal downtime and data integrity.</li>
            <li>Implement and enforce security best practices for database systems.</li>
            <li>Mentor and guide junior database engineers, fostering a culture of knowledge-sharing and collaboration.</li>
            <li>Manage individual and team priorities, deadlines, and deliverables within the database development lifecycle.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining insights into our database systems, team dynamics, and business objectives.</li>
            <li>Familiarize yourself with our specific database development lifecycle and project management methodologies.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead major database initiatives, demonstrating a deep understanding of database technologies and best practices.</li>
            <li>Successfully guide the team in implementing and optimizing database solutions within specified timeframes.</li>
            <li>Implement and enforce security measures, ensuring the confidentiality and integrity of our data.</li>
            <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>8+ years of experience as a Database Engineer, with a focus on designing and optimizing database systems.</li>
            <li>Expertise in database technologies such as SQL Server, MySQL, or PostgreSQL.</li>
            <li>Demonstrated leadership experience in leading database projects and initiatives.</li>
            <li>Strong understanding of database security, performance tuning, and optimization.</li>
            <li>Experience with cloud-based databases (e.g., AWS RDS, Azure SQL Database).</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
        </ul>
        
    <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv4', 4)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv4" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails3()">Close</a>
    </div>
    <div id="jobDetailsBox4" class="job-details-box">
        <h3>The Opportunity: Technical Leadership Role</h3>
        <p>
            Job Opportunity: Senior Database Engineer
            
            We're on the lookout for a seasoned and skilled Senior Database Engineer to join our dynamic team. As a Senior Database Engineer, you will play a crucial role in designing, implementing, and optimizing our database systems. This is a leadership position where you will lead initiatives to enhance data management, performance, and scalability. If you're passionate about database technologies and ready to take on a senior role in shaping our data infrastructure, we want to hear from you.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Lead the design and implementation of high-performance database systems.</li>
            <li>Optimize and maintain database performance, ensuring responsiveness, reliability, and scalability.</li>
            <li>Collaborate closely with cross-functional teams, including software engineers and system administrators, to align database solutions with overall system architecture.</li>
            <li>Troubleshoot and resolve complex database issues, ensuring minimal downtime and data integrity.</li>
            <li>Implement and enforce security best practices for database systems.</li>
            <li>Mentor and guide junior database engineers, fostering a culture of knowledge-sharing and collaboration.</li>
            <li>Manage individual and team priorities, deadlines, and deliverables within the database development lifecycle.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining insights into our database systems, team dynamics, and business objectives.</li>
            <li>Familiarize yourself with our specific database development lifecycle and project management methodologies.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead major database initiatives, demonstrating a deep understanding of database technologies and best practices.</li>
            <li>Successfully guide the team in implementing and optimizing database solutions within specified timeframes.</li>
            <li>Implement and enforce security measures, ensuring the confidentiality and integrity of our data.</li>
            <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>8+ years of experience as a Database Engineer, with a focus on designing and optimizing database systems.</li>
            <li>Expertise in database technologies such as SQL Server, MySQL, or PostgreSQL.</li>
            <li>Demonstrated leadership experience in leading database projects and initiatives.</li>
            <li>Strong understanding of database security, performance tuning, and optimization.</li>
            <li>Experience with cloud-based databases (e.g., AWS RDS, Azure SQL Database).</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
        </ul>
        
        
    <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv5', 5)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv5" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails4()">Close</a>
    </div>
    <div id="jobDetailsBox5" class="job-details-box">
        <h3>The Opportunity: Leadership Role</h3>
        <p>
            Job Opportunity: Senior Director, Enterprise Architecture
            
            We are seeking an experienced and visionary leader to join our organization as the Senior Director of Enterprise Architecture. In this pivotal role, you will play a key part in shaping the technology landscape of our organization, driving strategic initiatives, and ensuring alignment between business goals and IT solutions. As the Senior Director of Enterprise Architecture, you will lead a team of talented architects in defining and implementing scalable, innovative, and secure enterprise-wide solutions, contributing significantly to the success and growth of our organization.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Lead the development and implementation of the enterprise-wide technology strategy and architecture.</li>
            <li>Collaborate closely with C-level executives, business leaders, and IT teams to align technology solutions with business objectives.</li>
            <li>Define and enforce architectural standards, ensuring consistency, scalability, and security across all IT projects.</li>
            <li>Oversee the evaluation and adoption of new technologies, driving innovation and continuous improvement.</li>
            <li>Mentor and guide a team of architects, fostering a culture of excellence, collaboration, and professional growth.</li>
            <li>Provide strategic direction on major IT initiatives, ensuring they align with the overall enterprise architecture.</li>
            <li>Manage individual and team priorities, deadlines, and deliverables within the enterprise architecture domain.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and business objectives.</li>
            <li>Familiarize yourself with the existing enterprise architecture, ongoing projects, and team dynamics.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead strategic initiatives, demonstrating a deep understanding of enterprise architecture principles and best practices.</li>
            <li>Mentor and guide your team to achieve architectural excellence in project deliveries.</li>
            <li>Drive the implementation of innovative solutions that enhance the overall efficiency and effectiveness of our technology landscape.</li>
            <li>Collaborate with key stakeholders to align technology strategies with business goals.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>12+ years of experience in IT, with a focus on enterprise architecture and leadership roles.</li>
            <li>Demonstrated experience in defining and implementing enterprise-wide technology strategies.</li>
            <li>Strong leadership and people management skills, with a proven ability to mentor and develop high-performing teams.</li>
            <li>Expertise in enterprise architecture frameworks (e.g., TOGAF) and best practices.</li>
            <li>Experience working closely with C-level executives and influencing technology decisions at the highest organizational level.</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Excellent strategic thinking, problem-solving, and communication skills.</li>
        </ul>
        
      <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv6', 6)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv6" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails5()">Close</a>
    </div>
    <div id="jobDetailsBox6" class="job-details-box">
        <h3>The Opportunity: Technical Leadership Role</h3>
        <p>
            Job Opportunity: Senior DevOps Engineer
            
            We are in search of an experienced and accomplished Senior DevOps Engineer to join our innovative team. As a Senior DevOps Engineer, you will lead the charge in designing, implementing, and automating our infrastructure and deployment processes. This role is ideal for someone with a passion for streamlining operations, optimizing performance, and ensuring the reliability of our systems. If you're ready to take on a senior role in shaping our DevOps practices, we want to hear from you.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Lead the design and implementation of scalable and automated infrastructure solutions.</li>
            <li>Collaborate with development and operations teams to integrate DevOps practices into the software development lifecycle.</li>
            <li>Implement and manage CI/CD pipelines for efficient and reliable software delivery.</li>
            <li>Automate manual processes, reducing deployment times and improving system efficiency.</li>
            <li>Ensure the security, reliability, and performance of production and development environments.</li>
            <li>Mentor and guide junior DevOps engineers, fostering a culture of continuous improvement and knowledge-sharing.</li>
            <li>Manage individual and team priorities, deadlines, and deliverables within the DevOps domain.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining insights into our infrastructure, team dynamics, and business objectives.</li>
            <li>Familiarize yourself with our specific DevOps practices, tools, and ongoing projects.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead major DevOps initiatives, demonstrating a deep understanding of DevOps principles and best practices.</li>
            <li>Successfully guide the team in implementing and optimizing infrastructure solutions within specified timeframes.</li>
            <li>Implement and enforce security measures, ensuring the confidentiality and integrity of our systems.</li>
            <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>8+ years of experience as a DevOps Engineer, with a focus on designing and automating infrastructure.</li>
            <li>Expertise in CI/CD tools, containerization (Docker, Kubernetes), and infrastructure as code (Terraform, Ansible).</li>
            <li>Demonstrated leadership experience in leading DevOps projects and initiatives.</li>
            <li>Strong understanding of cloud platforms (AWS, Azure, GCP).</li>
            <li>Familiarity with monitoring and logging tools for system analysis and troubleshooting.</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
        </ul> 
        <br>
        <div id="applyForm">
            <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
            <br>
            <form onsubmit="return validateApplyForm('cv7', 7)">
                <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
                <input type="file" id="cv7" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
                <br>
                <button type="submit" id="butoniApply"><b>Apply</b></button>
            </form>
        </div>
    
       <a href="#" class="close-btn" onclick="closeJobDetails6()">Close</a>
    </div>
 

    <!-- <div id="jobDetailsBox8" class="job-details-box">
        <h3>The Opportunity: Embedded Systems Engineer</h3>
        <p>
            Job Opportunity: Embedded Systems Engineer
            
            We're searching for a talented and innovative Embedded Systems Engineer to join our dynamic team. As an Embedded Systems Engineer, you will be at the forefront of designing and developing embedded solutions that power our cutting-edge products. If you have a passion for embedded systems, hardware design, and firmware development, we want to hear from you. Join us and contribute to the creation of innovative technologies that make a significant impact.
        </p>
        <br>
        <h3>A Day in the Life:</h3>
        <ul id="req">
            <li>Participate in the design and development of embedded systems for our products.</li>
            <li>Collaborate with cross-functional teams, including hardware engineers and software developers, to integrate embedded solutions into overall product architecture.</li>
            <li>Develop and optimize firmware for embedded systems, ensuring reliability, efficiency, and scalability.</li>
            <li>Conduct hardware and software debugging, troubleshooting, and performance testing.</li>
            <li>Work on low-level programming, interfacing with sensors, and implementing communication protocols.</li>
            <li>Mentor and guide junior engineers, fostering a culture of knowledge-sharing and innovation.</li>
            <li>Manage individual and team priorities, deadlines, and deliverables within the embedded systems domain.</li>
        </ul>
        <br>
        <h3>Role Progression:</h3>
        <p>Within 1 month, you will:</p>
        <ul id="req">
            <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing projects.</li>
            <li>Familiarize yourself with our specific embedded systems development lifecycle and project management methodologies.</li>
        </ul>
        <p>Within 6 months, you will:</p>
        <ul id="req">
            <li>Lead embedded systems projects, demonstrating a deep understanding of embedded systems design and development.</li>
            <li>Successfully guide the team in implementing and optimizing embedded solutions within specified timeframes.</li>
            <li>Contribute to the evaluation and adoption of new technologies to enhance embedded systems capabilities.</li>
            <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
        </ul>
        <br>
        <h3>Requirements About You:</h3>
        <ul id="req">
            <li>5+ years of experience as an Embedded Systems Engineer, with a focus on hardware design and firmware development.</li>
            <li>Expertise in C/C++ programming for embedded systems.</li>
            <li>Experience with microcontrollers, microprocessors, and embedded system architectures.</li>
            <li>Knowledge of communication protocols such as SPI, I2C, UART, and experience with wireless communication technologies.</li>
            <li>Familiarity with hardware debugging tools and oscilloscopes.</li>
            <li>Experience with version control systems (e.g., Git).</li>
            <li>Familiarity with agile methodologies and project management tools.</li>
            <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
        </ul>
        
        
<br>
    <div id="applyForm">
        <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
        <br>
        <form onsubmit="return validateApplyForm('cv9', 9)">
            <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
            <input type="file" id="cv9" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
            <br>
            <button type="submit" id="butoniApply"><b>Apply</b></button>
        </form>
    </div>

   <a href="#" class="close-btn" onclick="closeJobDetails8()">Close</a>
</div>
<div id="jobDetailsBox9" class="job-details-box">
    <h3>The Opportunity: Blockchain Developer</h3>
    <p>
        Job Opportunity: Blockchain Developer
        
        Join our dynamic team as a Blockchain Developer and be at the forefront of revolutionizing the way we interact with technology. As a Blockchain Developer, you will play a pivotal role in designing, implementing, and maintaining blockchain solutions that power our innovative projects. If you have a passion for blockchain technology, decentralized applications, and smart contract development, we want to hear from you. Embark on a journey with us to create cutting-edge blockchain solutions that drive our organization to new heights.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Design and develop blockchain solutions, including smart contracts and decentralized applications (DApps).</li>
        <li>Collaborate with cross-functional teams, including front-end and back-end developers, to integrate blockchain technology into overall system architecture.</li>
        <li>Implement and optimize smart contracts on blockchain platforms such as Ethereum, Binance Smart Chain, or others.</li>
        <li>Conduct blockchain research, staying abreast of the latest technologies, trends, and security measures.</li>
        <li>Participate in code reviews and contribute to the development of blockchain-related projects.</li>
        <li>Mentor and guide junior developers interested in blockchain technology.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the blockchain development domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing blockchain projects.</li>
        <li>Familiarize yourself with our specific blockchain development lifecycle and project management methodologies.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead blockchain development projects, demonstrating a deep understanding of blockchain technologies and best practices.</li>
        <li>Successfully guide the team in implementing and optimizing blockchain solutions within specified timeframes.</li>
        <li>Contribute to the evaluation and adoption of new blockchain technologies to enhance our capabilities.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>3+ years of experience as a Blockchain Developer, with a focus on smart contract development and DApps.</li>
        <li>Proficiency in programming languages used in blockchain development, such as Solidity.</li>
        <li>Experience with popular blockchain platforms like Ethereum, Binance Smart Chain, or others.</li>
        <li>Knowledge of blockchain development frameworks and tools.</li>
        <li>Familiarity with decentralized finance (DeFi) concepts and protocols.</li>
        <li>Experience with version control systems (e.g., Git).</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
    </ul>
    
    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv10', 10)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv10" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails9()">Close</a>
</div>
<div id="jobDetailsBox10" class="job-details-box">
    <h3>The Opportunity: Machine Learning Engineer</h3>
    <p>
        Job Opportunity: Machine Learning Engineer
        
        We are looking for a talented and enthusiastic Machine Learning Engineer to join our innovative team. As a Machine Learning Engineer, you will be at the forefront of developing and implementing machine learning solutions that drive our projects to new heights. If you have a passion for artificial intelligence, data science, and building intelligent systems, we want to hear from you. Join us in shaping the future of technology through cutting-edge machine learning applications.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Design and develop machine learning models and algorithms for various applications.</li>
        <li>Collaborate with cross-functional teams, including data scientists and software engineers, to integrate machine learning solutions into overall system architecture.</li>
        <li>Conduct exploratory data analysis, feature engineering, and model evaluation.</li>
        <li>Implement and deploy machine learning models in production environments.</li>
        <li>Stay up-to-date with the latest advancements in machine learning and artificial intelligence.</li>
        <li>Mentor and guide junior data scientists and machine learning engineers.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the machine learning domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing machine learning projects.</li>
        <li>Familiarize yourself with our specific machine learning development lifecycle and project management methodologies.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead machine learning projects, demonstrating a deep understanding of machine learning concepts and best practices.</li>
        <li>Successfully guide the team in implementing and optimizing machine learning solutions within specified timeframes.</li>
        <li>Contribute to the evaluation and adoption of new machine learning technologies to enhance our capabilities.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>3+ years of experience as a Machine Learning Engineer, with a focus on model development and deployment.</li>
        <li>Strong proficiency in machine learning frameworks and libraries (e.g., TensorFlow, PyTorch, scikit-learn).</li>
        <li>Experience with data preprocessing, feature engineering, and model evaluation.</li>
        <li>Knowledge of deep learning concepts and architectures.</li>
        <li>Experience with deploying machine learning models in production environments.</li>
        <li>Familiarity with version control systems (e.g., Git).</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
    </ul>
    
    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv11', 11)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv11" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails10()">Close</a>
</div>
<div id="jobDetailsBox11" class="job-details-box">
    <h3>The Opportunity: Cloud Solutions Architect</h3>
    <p>
        Job Opportunity: Cloud Solutions Architect
        
        Join our dynamic team as a Cloud Solutions Architect and play a crucial role in shaping the architecture and performance of our cloud solutions. As a Cloud Solutions Architect, you will be at the forefront of designing and implementing scalable and innovative cloud-based systems. If you have a passion for cloud technologies, infrastructure design, and optimizing system performance, we want to hear from you. Help us build cutting-edge solutions that leverage the power of the cloud to drive our organization's success.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Lead the design and implementation of cloud solutions architecture for our projects.</li>
        <li>Collaborate with cross-functional teams, including software engineers and system administrators, to integrate cloud solutions into overall system architecture.</li>
        <li>Conduct cloud assessments and provide recommendations for optimizing performance, scalability, and cost efficiency.</li>
        <li>Implement and manage infrastructure as code (IaC) for efficient and reproducible deployments.</li>
        <li>Stay up-to-date with the latest advancements in cloud technologies and best practices.</li>
        <li>Mentor and guide junior cloud engineers, fostering a culture of knowledge-sharing and innovation.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the cloud solutions domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing cloud projects.</li>
        <li>Familiarize yourself with our specific cloud solutions development lifecycle and project management methodologies.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead major cloud initiatives, demonstrating a deep understanding of cloud technologies and best practices.</li>
        <li>Successfully guide the team in implementing and optimizing cloud solutions within specified timeframes.</li>
        <li>Contribute to the evaluation and adoption of new cloud technologies to enhance our capabilities.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>5+ years of experience as a Cloud Solutions Architect, with a focus on designing and optimizing cloud-based systems.</li>
        <li>Expertise in cloud platforms such as AWS, Azure, or Google Cloud.</li>
        <li>Demonstrated experience with infrastructure as code (IaC) tools like Terraform or CloudFormation.</li>
        <li>Strong understanding of containerization and orchestration tools (e.g., Docker, Kubernetes).</li>
        <li>Experience with serverless computing and microservices architecture.</li>
        <li>Familiarity with security best practices for cloud environments.</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv12', 12)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv12" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails11()">Close</a>
</div>
<div id="jobDetailsBox12" class="job-details-box">
    <h3>The Opportunity: Cybersecurity Engineer</h3>
    <p>
        Job Opportunity: Cybersecurity Engineer
        
        We are seeking a skilled and proactive Cybersecurity Engineer to join our dedicated team. As a Cybersecurity Engineer, you will play a critical role in safeguarding our organization's systems and data from cyber threats. If you have a passion for cybersecurity, ethical hacking, and ensuring the confidentiality and integrity of information, we want to hear from you. Join us in the mission to create a secure and resilient technology environment.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Lead the development and implementation of cybersecurity strategies and solutions.</li>
        <li>Conduct vulnerability assessments and penetration testing to identify and address security weaknesses.</li>
        <li>Collaborate with cross-functional teams to design and implement security controls for systems and applications.</li>
        <li>Monitor security incidents, conduct investigations, and implement incident response measures.</li>
        <li>Stay abreast of the latest cybersecurity threats and technologies to ensure proactive defense measures.</li>
        <li>Mentor and guide junior cybersecurity professionals, fostering a culture of continuous improvement and knowledge-sharing.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the cybersecurity domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing cybersecurity initiatives.</li>
        <li>Familiarize yourself with our specific cybersecurity protocols, systems, and ongoing projects.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead major cybersecurity initiatives, demonstrating a deep understanding of cybersecurity principles and best practices.</li>
        <li>Successfully guide the team in implementing and optimizing cybersecurity solutions within specified timeframes.</li>
        <li>Contribute to the development and enhancement of cybersecurity policies and procedures.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>5+ years of experience as a Cybersecurity Engineer, with a focus on vulnerability assessments, penetration testing, and incident response.</li>
        <li>Expertise in cybersecurity tools and technologies, including SIEM, IDS/IPS, antivirus solutions, and firewall management.</li>
        <li>Certifications such as CISSP, CISM, or CEH are highly desirable.</li>
        <li>Experience with security frameworks and standards (e.g., NIST, ISO 27001).</li>
        <li>Strong understanding of networking protocols and security architectures.</li>
        <li>Familiarity with ethical hacking and threat modeling.</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Excellent problem-solving skills and the ability to work independently or collaboratively.</li>
    </ul>
    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv13', 13)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv13" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails12()">Close</a>
</div>
<div id="jobDetailsBox25" class="job-details-box">
    <h3>The Opportunity: Business Development Representative</h3>
    <p>
        Job Opportunity: Business Development Representative
        
        Join our dynamic team as a Business Development Representative (BDR) and be a key player in driving the growth and success of our organization. As a BDR, you will play a crucial role in identifying and nurturing business opportunities, building relationships with potential clients, and contributing to our sales pipeline. If you have a passion for sales, excellent communication skills, and the drive to excel in a fast-paced environment, we want to hear from you. Take the next step in your career with us and be a part of our exciting journey.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Conduct outbound prospecting to identify and qualify potential leads through various channels.</li>
        <li>Initiate contact with potential clients through calls, emails, and social media to understand their needs and introduce our products/services.</li>
        <li>Collaborate with the sales team to develop and execute targeted outreach campaigns.</li>
        <li>Maintain accurate and up-to-date records of prospect interactions in the CRM system.</li>
        <li>Schedule and coordinate meetings or demos between potential clients and the sales team.</li>
        <li>Stay informed about industry trends, market conditions, and competitor activities.</li>
        <li>Maintain a high level of product and industry knowledge to effectively communicate value propositions to potential clients.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's products/services, culture, and sales processes.</li>
        <li>Familiarize yourself with our CRM system and sales tools.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Independently manage and prioritize your prospecting activities to meet or exceed assigned targets.</li>
        <li>Build and nurture strong relationships with potential clients, guiding them through the early stages of the sales funnel.</li>
        <li>Contribute to the development of targeted outreach strategies and campaigns.</li>
        <li>Collaborate effectively with the sales team to hand off qualified leads and support the overall sales process.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>1-2 years of experience in business development, sales, or a related field.</li>
        <li>Excellent communication and interpersonal skills, with the ability to engage potential clients effectively.</li>
        <li>Proven ability to work in a fast-paced and target-driven environment.</li>
        <li>Familiarity with CRM systems and sales tools.</li>
        <li>Adaptability and a willingness to learn about our products/services and industry.</li>
        <li>Self-motivated and goal-oriented with a strong work ethic.</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Bachelor’s degree in Business, Marketing, or a related field is a plus.</li>
    </ul>
    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv14', 14)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv14" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails25()">Close</a>
</div>
<div id="jobDetailsBox13" class="job-details-box">
    <h3>The Opportunity: Senior Software Engineer (C++)</h3>
<p>
    Job Opportunity: Senior Software Engineer (C++)
    
    We are seeking a talented and experienced Senior Software Engineer with expertise in C++ to join our dynamic team. As a Senior Software Engineer, you will play a key role in the design, development, and optimization of our software solutions. If you have a passion for building robust and scalable software applications and are well-versed in C++, we want to hear from you. Join us and contribute to the success of our cutting-edge projects.
</p>
<br>
<h3>A Day in the Life:</h3>
<ul id="req">
    <li>Lead the design and development of complex software features using C++.</li>
    <li>Collaborate with cross-functional teams, including product managers and fellow engineers, to define requirements and specifications.</li>
    <li>Conduct code reviews, provide constructive feedback, and ensure high code quality and maintainability.</li>
    <li>Optimize existing software for performance, scalability, and efficiency.</li>
    <li>Mentor and guide junior engineers, fostering a culture of technical excellence and knowledge-sharing.</li>
    <li>Manage individual and team priorities, deadlines, and deliverables within the software engineering domain.</li>
</ul>
<br>
<h3>Role Progression:</h3>
<p>Within 1 month, you will:</p>
<ul id="req">
    <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing projects.</li>
    <li>Familiarize yourself with our specific software development processes and coding standards.</li>
</ul>
<p>Within 6 months, you will:</p>
<ul id="req">
    <li>Lead major software engineering initiatives, demonstrating a deep understanding of C++ and software architecture.</li>
    <li>Successfully guide the team in implementing and optimizing software solutions within specified timeframes.</li>
    <li>Contribute to the improvement of development processes and methodologies.</li>
    <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
</ul>
<br>
<h3>Requirements About You:</h3>
<ul id="req">
    <li>8+ years of experience as a Software Engineer, with a strong focus on C++ development.</li>
    <li>Proven experience in designing and developing complex, scalable software solutions.</li>
    <li>Expertise in data structures, algorithms, and object-oriented design principles.</li>
    <li>Experience with multi-threading, performance optimization, and memory management in C++ applications.</li>
    <li>Familiarity with software development best practices, including code reviews, unit testing, and version control.</li>
    <li>Strong problem-solving skills and the ability to work independently or collaboratively.</li>
    <li>Familiarity with agile methodologies and project management tools.</li>
    <li>Bachelor’s or Master’s degree in Computer Science or a related field.</li>
</ul>

    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv15', 15)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv15" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails13()">Close</a>
</div>
<div id="jobDetailsBox14" class="job-details-box">
    <h3>The Opportunity: Senior Software Engineer - Frontend</h3>
    <p>
        Job Opportunity: Senior Software Engineer - Frontend
        
        We are looking for a highly skilled and motivated Senior Software Engineer with expertise in frontend technologies to join our innovative team. As a Senior Software Engineer - Frontend, you will be instrumental in designing, developing, and optimizing our user interfaces. If you have a passion for creating seamless and intuitive user experiences and are proficient in frontend technologies, we want to hear from you. Join us and contribute to the success of our cutting-edge projects.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Lead the design and development of complex frontend features, ensuring a seamless user experience.</li>
        <li>Collaborate with UX/UI designers and backend engineers to implement responsive and visually appealing user interfaces.</li>
        <li>Conduct code reviews, provide constructive feedback, and ensure high code quality and maintainability.</li>
        <li>Optimize frontend applications for performance, scalability, and responsiveness.</li>
        <li>Mentor and guide junior frontend engineers, fostering a culture of technical excellence and knowledge-sharing.</li>
        <li>Stay abreast of the latest trends and best practices in frontend development.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the frontend development domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing projects.</li>
        <li>Familiarize yourself with our specific frontend development processes, coding standards, and design principles.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead major frontend development initiatives, demonstrating a deep understanding of frontend technologies and best practices.</li>
        <li>Successfully guide the team in implementing and optimizing frontend solutions within specified timeframes.</li>
        <li>Contribute to the improvement of frontend development processes and methodologies.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>8+ years of experience as a Frontend Software Engineer, with a focus on web application development.</li>
        <li>Expertise in modern frontend frameworks such as React, Angular, or Vue.js.</li>
        <li>Strong proficiency in HTML, CSS, and JavaScript.</li>
        <li>Experience with state management libraries (e.g., Redux) and component-based architecture.</li>
        <li>Familiarity with frontend build tools, package managers, and version control systems.</li>
        <li>Experience with responsive design and cross-browser compatibility.</li>
        <li>Strong problem-solving skills and the ability to work independently or collaboratively.</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Bachelor’s or Master’s degree in Computer Science or a related field.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv16', 16)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv16" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails14()">Close</a>
</div>
<div id="jobDetailsBox15" class="job-details-box">
    <h3>The Opportunity: Full Stack Developer</h3>
    <p>
        Job Opportunity: Full Stack Developer
        
        Join our dynamic team as a Full Stack Developer and contribute to the end-to-end development of our innovative projects. As a Full Stack Developer, you will be involved in both frontend and backend development, playing a crucial role in creating scalable and high-performance applications. If you have a passion for full-stack development, a strong understanding of web technologies, and a desire to work on diverse and challenging projects, we want to hear from you. Join us and make a significant impact on our technology initiatives.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Lead the design and development of scalable and responsive web applications.</li>
        <li>Collaborate with UX/UI designers to implement visually appealing and intuitive user interfaces.</li>
        <li>Develop server-side logic, databases, and APIs to support frontend functionality.</li>
        <li>Conduct code reviews, provide constructive feedback, and ensure high code quality and maintainability.</li>
        <li>Optimize applications for performance, scalability, and responsiveness.</li>
        <li>Maintain awareness of the latest trends and best practices in full-stack development.</li>
        <li>Mentor and guide junior developers, fostering a culture of technical excellence and knowledge-sharing.</li>
        <li>Manage individual and team priorities, deadlines, and deliverables within the full-stack development domain.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing projects.</li>
        <li>Familiarize yourself with our specific full-stack development processes, coding standards, and design principles.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead major full-stack development initiatives, demonstrating a deep understanding of both frontend and backend technologies.</li>
        <li>Successfully guide the team in implementing and optimizing full-stack solutions within specified timeframes.</li>
        <li>Contribute to the improvement of full-stack development processes and methodologies.</li>
        <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>5+ years of experience as a Full Stack Developer, with proficiency in both frontend and backend technologies.</li>
        <li>Expertise in frontend frameworks such as React, Angular, or Vue.js.</li>
        <li>Strong proficiency in server-side languages such as Node.js, Python, or Ruby.</li>
        <li>Experience with databases (SQL and NoSQL), RESTful APIs, and server-side architecture.</li>
        <li>Familiarity with version control systems (e.g., Git) and build tools.</li>
        <li>Experience with cloud platforms (e.g., AWS, Azure, or Google Cloud).</li>
        <li>Strong problem-solving skills and the ability to work independently or collaboratively.</li>
        <li>Familiarity with agile methodologies and project management tools.</li>
        <li>Bachelor’s or Master’s degree in Computer Science or a related field.</li>
    </ul>
    
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv17', 17)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv17" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails15()">Close</a>
</div>
<div id="jobDetailsBox16" class="job-details-box">
    <h3>The Opportunity: Database Engineer</h3>
<p>
    Job Opportunity: Database Engineer
    
    Join our dynamic team as a Database Engineer and contribute to the design, implementation, and optimization of our database systems. As a Database Engineer, you will play a crucial role in ensuring the efficiency, security, and scalability of our data infrastructure. If you have a passion for database technologies, a strong understanding of data management, and a desire to work on diverse and challenging projects, we want to hear from you. Join us and make a significant impact on our data-driven initiatives.
</p>
<br>
<h3>A Day in the Life:</h3>
<ul id="req">
    <li>Lead the design and implementation of database systems, considering performance, scalability, and security requirements.</li>
    <li>Collaborate with software engineers to define database schema, tables, and relationships.</li>
    <li>Optimize database performance through indexing, query optimization, and other performance-tuning techniques.</li>
    <li>Implement and manage database security measures, including access controls and encryption.</li>
    <li>Conduct regular backups, recovery, and ensure data integrity and availability.</li>
    <li>Stay informed about the latest trends and best practices in database management.</li>
    <li>Mentor and guide junior database engineers, fostering a culture of technical excellence and knowledge-sharing.</li>
    <li>Manage individual and team priorities, deadlines, and deliverables within the database engineering domain.</li>
</ul>
<br>
<h3>Role Progression:</h3>
<p>Within 1 month, you will:</p>
<ul id="req">
    <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing projects.</li>
    <li>Familiarize yourself with our specific database engineering processes, coding standards, and design principles.</li>
</ul>
<p>Within 6 months, you will:</p>
<ul id="req">
    <li>Lead major database engineering initiatives, demonstrating a deep understanding of database technologies and best practices.</li>
    <li>Successfully guide the team in implementing and optimizing database solutions within specified timeframes.</li>
    <li>Contribute to the improvement of database engineering processes and methodologies.</li>
    <li>Provide mentorship and assistance to team members, fostering a collaborative and growth-oriented team culture.</li>
</ul>
<br>
<h3>Requirements About You:</h3>
<ul id="req">
    <li>5+ years of experience as a Database Engineer, with a strong focus on database design, implementation, and optimization.</li>
    <li>Expertise in relational database management systems (RDBMS) such as MySQL, PostgreSQL, or SQL Server.</li>
    <li>Experience with NoSQL databases, such as MongoDB or Cassandra, is a plus.</li>
    <li>Proficiency in SQL and database scripting languages.</li>
    <li>Experience with database security measures and best practices.</li>
    <li>Familiarity with version control systems (e.g., Git) and database migration tools.</li>
    <li>Strong problem-solving skills and the ability to work independently or collaboratively.</li>
    <li>Familiarity with agile methodologies and project management tools.</li>
    <li>Bachelor’s or Master’s degree in Computer Science or a related field.</li>
</ul>

<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv18', 18)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv18" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails16()">Close</a>
</div>
<div id="jobDetailsBox17" class="job-details-box">
    <h3>The Opportunity: Technical Support Executive</h3>
    <p>
        Job Opportunity: Technical Support Executive
        
        Join our customer-focused team as a Technical Support Executive and play a vital role in providing exceptional support to our clients. As a Technical Support Executive, you will be the first point of contact for resolving technical issues, ensuring customer satisfaction, and contributing to the overall success of our products/services. If you have a passion for assisting customers, excellent communication skills, and a technical aptitude, we want to hear from you. Join us and make a difference in our commitment to delivering outstanding customer support.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Provide frontline technical support to customers via phone, email, or chat, addressing inquiries and resolving technical issues.</li>
        <li>Diagnose and troubleshoot software, hardware, and network problems, guiding customers through step-by-step solutions.</li>
        <li>Document customer interactions, including details of inquiries, issues, and resolutions, in a clear and concise manner.</li>
        <li>Escalate complex technical issues to the appropriate internal teams for further investigation and resolution.</li>
        <li>Ensure timely and effective communication with customers, setting clear expectations regarding issue resolution times.</li>
        <li>Stay informed about product updates, new features, and technical advancements to provide accurate and up-to-date information to customers.</li>
        <li>Maintain a positive and customer-centric attitude, even in high-pressure situations.</li>
        <li>Collaborate with cross-functional teams to share customer feedback and contribute to ongoing product improvements.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and products/services.</li>
        <li>Familiarize yourself with our specific technical support processes, tools, and knowledge base.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Independently handle a wide range of technical support inquiries, demonstrating a deep understanding of our products/services.</li>
        <li>Contribute to the development of support documentation, FAQs, and training materials.</li>
        <li>Participate in ongoing training sessions to enhance technical knowledge and support skills.</li>
        <li>Provide mentorship and assistance to new team members, fostering a collaborative and customer-focused team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>2+ years of experience in technical support or a related customer-facing role.</li>
        <li>Strong technical aptitude and the ability to quickly learn and understand new technologies.</li>
        <li>Excellent communication skills, with the ability to convey technical information in a clear and understandable manner.</li>
        <li>Experience with troubleshooting software, hardware, and network issues.</li>
        <li>Familiarity with ticketing systems and customer relationship management (CRM) tools.</li>
        <li>Patience, empathy, and a customer-centric approach to problem-solving.</li>
        <li>Ability to work independently and collaboratively in a fast-paced environment.</li>
        <li>Familiarity with agile methodologies and customer support tools.</li>
        <li>Bachelor’s degree in Computer Science or a related field is a plus.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv19', 19)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv19" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails17()">Close</a>
</div>
<div id="jobDetailsBox18" class="job-details-box">
    <h3>The Opportunity: Systems Administrator</h3>
    <p>
        Job Opportunity: Systems Administrator
        
        We are looking for a skilled and detail-oriented Systems Administrator to join our IT team. As a Systems Administrator, you will play a crucial role in maintaining and optimizing our organization's IT infrastructure. If you have a passion for systems administration, strong problem-solving skills, and a proactive approach to IT management, we want to hear from you. Join us and contribute to the stability and efficiency of our technology environment.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Administer and maintain servers, networks, and other IT infrastructure components.</li>
        <li>Install, configure, and troubleshoot operating systems and software applications.</li>
        <li>Monitor system performance, identify issues, and implement solutions to ensure optimal uptime and efficiency.</li>
        <li>Manage user accounts, permissions, and access controls.</li>
        <li>Conduct routine security audits and implement measures to safeguard against unauthorized access and data breaches.</li>
        <li>Collaborate with cross-functional teams to implement IT policies, procedures, and best practices.</li>
        <li>Assist in the planning and execution of system upgrades and migrations.</li>
        <li>Provide technical support to end-users, addressing IT-related inquiries and issues.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's IT infrastructure, policies, and ongoing projects.</li>
        <li>Familiarize yourself with our specific systems administration processes, tools, and documentation.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Independently manage and resolve a wide range of systems administration tasks and issues.</li>
        <li>Contribute to the development and enhancement of IT policies and procedures.</li>
        <li>Participate in ongoing training to stay current with the latest technologies and best practices.</li>
        <li>Mentor and assist junior team members, fostering a collaborative and knowledge-sharing team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>3+ years of experience as a Systems Administrator or a related IT role.</li>
        <li>Strong knowledge of Windows and/or Linux operating systems.</li>
        <li>Experience with virtualization technologies (e.g., VMware, Hyper-V).</li>
        <li>Familiarity with network protocols, security principles, and firewall configurations.</li>
        <li>Proficiency in scripting languages (e.g., PowerShell, Bash) for automation tasks.</li>
        <li>Experience with ITIL or other IT service management frameworks is a plus.</li>
        <li>Excellent problem-solving and troubleshooting skills.</li>
        <li>Ability to work independently and collaboratively in a fast-paced environment.</li>
        <li>Familiarity with agile methodologies and IT management tools.</li>
        <li>Bachelor’s degree in Computer Science, Information Technology, or a related field.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv20', 20)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv20" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails18()">Close</a>
</div>
<div id="jobDetailsBox19" class="job-details-box">
    <h3>The Opportunity: Network Engineer</h3>
<p>
    Job Opportunity: Network Engineer
    
    Join our dedicated IT team as a Network Engineer and contribute to the design, implementation, and optimization of our organization's network infrastructure. As a Network Engineer, you will play a crucial role in ensuring the reliability, security, and performance of our network systems. If you have a passion for networking, strong problem-solving skills, and a proactive approach to network management, we want to hear from you. Join us and make a significant impact on the connectivity and efficiency of our technology environment.
</p>
<br>
<h3>A Day in the Life:</h3>
<ul id="req">
    <li>Design, implement, and manage local and wide area network (LAN/WAN) infrastructure.</li>
    <li>Configure and optimize network components, including routers, switches, firewalls, and load balancers.</li>
    <li>Monitor network performance, identify issues, and implement solutions to ensure optimal uptime and efficiency.</li>
    <li>Collaborate with cross-functional teams to plan and execute network upgrades, migrations, and expansions.</li>
    <li>Conduct routine security audits and implement measures to safeguard against unauthorized access and cyber threats.</li>
    <li>Assist in the development and enforcement of network policies and procedures.</li>
    <li>Provide technical support to end-users, addressing network-related inquiries and issues.</li>
    <li>Stay informed about the latest networking technologies and best practices.</li>
</ul>
<br>
<h3>Role Progression:</h3>
<p>Within 1 month, you will:</p>
<ul id="req">
    <li>Complete the onboarding program, gaining insights into our organization's network infrastructure, policies, and ongoing projects.</li>
    <li>Familiarize yourself with our specific network engineering processes, tools, and documentation.</li>
</ul>
<p>Within 6 months, you will:</p>
<ul id="req">
    <li>Independently manage and resolve a wide range of network engineering tasks and issues.</li>
    <li>Contribute to the development and enhancement of network policies and procedures.</li>
    <li>Participate in ongoing training to stay current with the latest networking technologies and best practices.</li>
    <li>Mentor and assist junior team members, fostering a collaborative and knowledge-sharing team culture.</li>
</ul>
<br>
<h3>Requirements About You:</h3>
<ul id="req">
    <li>3+ years of experience as a Network Engineer or a related IT role.</li>
    <li>Strong knowledge of networking protocols and technologies, including TCP/IP, DNS, DHCP, VPNs, and VLANs.</li>
    <li>Experience with network hardware, such as routers, switches, firewalls, and load balancers.</li>
    <li>Familiarity with network security principles and best practices.</li>
    <li>Certifications such as Cisco CCNA, CCNP, or equivalent are a plus.</li>
    <li>Excellent problem-solving and troubleshooting skills.</li>
    <li>Ability to work independently and collaboratively in a fast-paced environment.</li>
    <li>Familiarity with agile methodologies and IT management tools.</li>
    <li>Bachelor’s degree in Computer Science, Information Technology, or a related field.</li>
</ul>

<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv21', 21)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv21" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails19()">Close</a>
</div>
<div id="jobDetailsBox20" class="job-details-box">
    <h3>The Opportunity: Data Scientist</h3>
    <p>
        Job Opportunity: Data Scientist
        
        Join our innovative team as a Data Scientist and contribute to the analysis, interpretation, and utilization of our organization's data assets. As a Data Scientist, you will play a key role in extracting valuable insights, building predictive models, and driving data-driven decision-making. If you have a passion for data analysis, machine learning, and a strong analytical mindset, we want to hear from you. Join us and make a significant impact on our data-driven initiatives.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Collaborate with cross-functional teams to define business objectives and data requirements.</li>
        <li>Collect, clean, and preprocess large datasets to prepare them for analysis.</li>
        <li>Apply statistical analysis and machine learning techniques to extract meaningful insights from data.</li>
        <li>Develop and implement predictive models and algorithms to solve business problems.</li>
        <li>Build and deploy machine learning models in production environments.</li>
        <li>Communicate complex data findings to non-technical stakeholders in a clear and understandable manner.</li>
        <li>Stay abreast of the latest trends and advancements in data science and machine learning.</li>
        <li>Collaborate with IT and business teams to ensure data quality, integrity, and security.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing data initiatives.</li>
        <li>Familiarize yourself with our specific data science processes, tools, and data sources.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Independently lead and execute data science projects, demonstrating a deep understanding of our business objectives.</li>
        <li>Contribute to the development and enhancement of data science methodologies and best practices.</li>
        <li>Participate in ongoing training to stay current with the latest data science technologies and methodologies.</li>
        <li>Mentor and assist junior data scientists, fostering a collaborative and knowledge-sharing team culture.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>3+ years of experience as a Data Scientist or a related role.</li>
        <li>Advanced proficiency in programming languages such as Python or R for data analysis and machine learning.</li>
        <li>Experience with data visualization tools (e.g., Matplotlib, Seaborn, Tableau).</li>
        <li>Strong knowledge of statistical analysis and machine learning techniques.</li>
        <li>Experience with machine learning frameworks (e.g., TensorFlow, PyTorch) and model deployment.</li>
        <li>Excellent problem-solving and critical-thinking skills.</li>
        <li>Ability to work independently and collaboratively in a fast-paced environment.</li>
        <li>Familiarity with agile methodologies and data management tools.</li>
        <li>Master’s or Ph.D. in Data Science, Statistics, Computer Science, or a related field.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv22', 22)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv22" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails20()">Close</a>
</div>
<div id="jobDetailsBox21" class="job-details-box">
    <h3>The Opportunity: Public Relations (PR) & Communications Strategist</h3>
<p>
    Job Opportunity: Public Relations (PR) & Communications Strategist
    
    Join our dynamic team as a Public Relations (PR) & Communications Strategist and play a crucial role in shaping our brand image, managing communications, and fostering positive relationships with stakeholders. As a PR & Communications Strategist, you will lead strategic communication initiatives, build strong media relations, and contribute to the overall success of our organization. If you have a passion for storytelling, excellent communication skills, and a strategic mindset, we want to hear from you. Join us and make a lasting impact on our public image and communication efforts.
</p>
<br>
<h3>A Day in the Life:</h3>
<ul id="req">
    <li>Develop and implement strategic PR and communication plans aligned with organizational goals and objectives.</li>
    <li>Create compelling narratives and press releases to effectively communicate key messages to the media and the public.</li>
    <li>Build and maintain strong relationships with journalists, editors, and media outlets.</li>
    <li>Coordinate and manage media interviews, press conferences, and other public appearances.</li>
    <li>Monitor media coverage and public sentiment, providing timely and insightful reports to internal stakeholders.</li>
    <li>Collaborate with cross-functional teams, including marketing, social media, and executive leadership, to ensure consistent messaging.</li>
    <li>Respond to media inquiries and act as a spokesperson for the organization when necessary.</li>
    <li>Develop and maintain crisis communication plans and participate in crisis management activities.</li>
</ul>
<br>
<h3>Role Progression:</h3>
<p>Within 1 month, you will:</p>
<ul id="req">
    <li>Complete the onboarding program, gaining insights into our organization's structure, culture, and ongoing communication initiatives.</li>
    <li>Familiarize yourself with our specific PR and communication processes, tools, and key stakeholders.</li>
</ul>
<p>Within 6 months, you will:</p>
<ul id="req">
    <li>Lead and execute strategic PR campaigns, demonstrating a deep understanding of our brand and target audience.</li>
    <li>Contribute to the development and enhancement of PR and communication strategies and best practices.</li>
    <li>Participate in ongoing training to stay current with the latest trends and advancements in PR and communications.</li>
    <li>Mentor and assist junior team members, fostering a collaborative and knowledge-sharing team culture.</li>
</ul>
<br>
<h3>Requirements About You:</h3>
<ul id="req">
    <li>5+ years of experience in public relations, corporate communications, or a related field.</li>
    <li>Demonstrated success in developing and executing strategic PR and communication plans.</li>
    <li>Excellent written and verbal communication skills, with the ability to tailor messages for different audiences.</li>
    <li>Strong media relations with a proven track record of securing positive media coverage.</li>
    <li>Experience in crisis communication and issues management.</li>
    <li>Ability to work independently and collaboratively in a fast-paced environment.</li>
    <li>Familiarity with digital PR and social media strategies is a plus.</li>
    <li>Bachelor’s or Master’s degree in Public Relations, Communications, Marketing, or a related field.</li>
</ul>
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv23', 23)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv23" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div>

<a href="#" class="close-btn" onclick="closeJobDetails21()">Close</a>
</div>
<div id="jobDetailsBox22" class="job-details-box">
    

<div id="jobDetailsBox24" class="job-details-box">
    <h3>The Opportunity: Scrum Master</h3>
    <p>
        Job Opportunity: Scrum Master
        
        Join our dynamic and agile team as a Scrum Master and play a pivotal role in facilitating effective collaboration, communication, and delivery. As a Scrum Master, you will guide and support the Scrum team in applying Scrum practices and principles to achieve high-performance results. If you have a passion for agile methodologies, excellent interpersonal skills, and a commitment to continuous improvement, we want to hear from you. Join us and contribute to the success of our projects through your expertise in Scrum and agile practices.
    </p>
    <br>
    <h3>A Day in the Life:</h3>
    <ul id="req">
        <li>Facilitate Scrum ceremonies, including Sprint Planning, Daily Stand-ups, Sprint Reviews, and Retrospectives.</li>
        <li>Coach and mentor the Scrum team on agile principles, ensuring a consistent and effective application of Scrum practices.</li>
        <li>Remove impediments and obstacles that hinder the team's progress, fostering a collaborative and empowered work environment.</li>
        <li>Work closely with Product Owners to prioritize and refine the product backlog, ensuring alignment with project goals.</li>
        <li>Promote continuous improvement by identifying areas for enhancement and implementing adjustments to the team's processes.</li>
        <li>Facilitate communication and collaboration among team members, stakeholders, and other departments.</li>
        <li>Track and report on team progress, using relevant metrics and key performance indicators.</li>
    </ul>
    <br>
    <h3>Role Progression:</h3>
    <p>Within 1 month, you will:</p>
    <ul id="req">
        <li>Complete the onboarding program, gaining insights into our organization's projects, teams, and existing Scrum processes.</li>
        <li>Build relationships with team members, Product Owners, and stakeholders.</li>
    </ul>
    <p>Within 6 months, you will:</p>
    <ul id="req">
        <li>Lead and facilitate multiple Scrum teams, ensuring consistent adherence to agile principles.</li>
        <li>Implement and champion agile best practices, adapting them to the specific needs of our organization.</li>
        <li>Participate in training and development opportunities to stay current with Scrum and agile advancements.</li>
        <li>Mentor and guide other Scrum Masters or team members interested in agile methodologies.</li>
    </ul>
    <br>
    <h3>Requirements About You:</h3>
    <ul id="req">
        <li>2+ years of experience as a Scrum Master or in a similar agile coaching role.</li>
        <li>Certification in Scrum (CSM) or other relevant agile certifications.</li>
        <li>Strong understanding of agile principles, values, and frameworks.</li>
        <li>Excellent communication and interpersonal skills, with the ability to influence and motivate teams.</li>
        <li>Experience in a software development or IT environment is a plus.</li>
        <li>Problem-solving mindset and the ability to adapt in a fast-paced and changing environment.</li>
        <li>Bachelor’s or Master’s degree in a relevant field.</li>
    </ul>
    
<br>
<div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv26', 26)">
        <label for="cv" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv26" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <br>
        <button type="submit" id="butoniApply"><b>Apply</b></button>
    </form>
</div> -->

<a href="#" class="close-btn" onclick="closeJobDetails24()">Close</a>
</div>
</body>
<script>
    function showJobDetails() {
        var jobDetailsBox = document.getElementById('jobDetailsBox');
        jobDetailsBox.style.display = 'block';
        jobDetailsBox.style.overflowY = 'auto';
    }

    function closeJobDetails() {
        var jobDetailsBox = document.getElementById('jobDetailsBox');
        jobDetailsBox.style.display = 'none';
    }
    function showJobDetails1() {
        var jobDetailsBox1 = document.getElementById('jobDetailsBox1');
        jobDetailsBox1.style.display = 'block';
        jobDetailsBox1.style.overflowY = 'auto';
    }

    function closeJobDetails1() {
        var jobDetailsBox1 = document.getElementById('jobDetailsBox1');
        jobDetailsBox1.style.display = 'none';
    }
    function showJobDetails2() {
        var jobDetailsBox1 = document.getElementById('jobDetailsBox2');
        jobDetailsBox2.style.display = 'block';
        jobDetailsBox2.style.overflowY = 'auto';
    }

    function closeJobDetails2() {
        var jobDetailsBox2 = document.getElementById('jobDetailsBox2');
        jobDetailsBox2.style.display = 'none';
    }
    function showJobDetails3() {
        var jobDetailsBox3 = document.getElementById('jobDetailsBox3');
        jobDetailsBox3.style.display = 'block';
        jobDetailsBox3.style.overflowY = 'auto';
    }

    function closeJobDetails3() {
        var jobDetailsBox3= document.getElementById('jobDetailsBox3');
        jobDetailsBox3.style.display = 'none';
    }
    function showJobDetails4() {
        var jobDetailsBox3 = document.getElementById('jobDetailsBox4');
        jobDetailsBox3.style.display = 'block';
        jobDetailsBox3.style.overflowY = 'auto';
    }

    function closeJobDetails4() {
        var jobDetailsBox3= document.getElementById('jobDetailsBox4');
        jobDetailsBox3.style.display = 'none';
    }
    function showJobDetails5() {
        var jobDetailsBox3 = document.getElementById('jobDetailsBox5');
        jobDetailsBox3.style.display = 'block';
        jobDetailsBox3.style.overflowY = 'auto';
    }

    function closeJobDetails5() {
        var jobDetailsBox3= document.getElementById('jobDetailsBox5');
        jobDetailsBox3.style.display = 'none';
    }
    function showJobDetails6() {
        var jobDetailsBox3 = document.getElementById('jobDetailsBox6');
        jobDetailsBox3.style.display = 'block';
        jobDetailsBox3.style.overflowY = 'auto';
    }

    function closeJobDetails6() {
        var jobDetailsBox3= document.getElementById('jobDetailsBox6');
        jobDetailsBox3.style.display = 'none';
    }
  ?
    // function showJobDetails8() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox8');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails8() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox8');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails9() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox9');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails9() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox9');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails10() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox10');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails10() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox10');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails11() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox11');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails11() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox11');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails12() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox12');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails12() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox12');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails25() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox25');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails25() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox25');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails13() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox13');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails13() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox13');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails14() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox14');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails14() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox14');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails15() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox15');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails15() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox15');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails16() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox16');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails16() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox16');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails17() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox17');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails17() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox17');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails18() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox18');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails18() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox18');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails19() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox19');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails19() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox19');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails20() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox20');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails20() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox20');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails21() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox21');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails21() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox21');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails22() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox22');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }
    // function closeJobDetails22() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox22');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function closeJobDetails23() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox23');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails23() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox23');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }

    // function closeJobDetails24() {
    //     var jobDetailsBox3= document.getElementById('jobDetailsBox24');
    //     jobDetailsBox3.style.display = 'none';
    // }
    // function showJobDetails24() {
    //     var jobDetailsBox3 = document.getElementById('jobDetailsBox24');
    //     jobDetailsBox3.style.display = 'block';
    //     jobDetailsBox3.style.overflowY = 'auto';
    // }


    function openApplyForm() {
    var card = document.getElementById("card");
    var applyForm = document.getElementById("applyForm");

    card.style.transform = "rotateY(180deg)";
    applyForm.style.display = "block";
}

function validateApplyForm(fileInputId, index) {
    var cvFile = document.getElementById(fileInputId).files[0];

    if (!cvFile) {
        alert('Please upload your CV!');
        return false;
    }

    alert('Application submitted successfully!');
    return true;
}


$(document).ready(function() {
      function performSearch() {
        var searchTerm = $('#searchInput').val().toLowerCase();

   
        $('.puna').each(function() {
          var jobTitle = $(this).find('.job-title').text().toLowerCase();
          var jobContainer = $(this);

          if (jobTitle.includes(searchTerm)) {
            jobContainer.show();
          } else {
            jobContainer.hide();
          }
        });
      }

      $('#searchBtn').click(function() {
        performSearch();
      });

    
    });
</script>
</html>
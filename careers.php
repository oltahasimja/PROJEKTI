<?php
    include "DatabaseConnection.php";
    include_once "teamRepository.php";

    $te = new TeamRepository();
    $team = $te->getAllTeam();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
    <link rel="stylesheet" href="stylecareers.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner2">
           <div class="title">
            <div id="titull">Meet The Team</div></div>
      
        <br>
        <div class="team">
            <div class="nje">
                <img src="foto/person2.jpg" alt="">
                <div class="person1-text">
                <h2 id="h2">David Wilson - CEO</h2>
                <br>
                <p id="nje">
                    As Chief Executive Officer, David Wilson is responsible for leading HireME as it scales its enterprise software businesses, 
                    delivers the best legal technology ecosystem, and revolutionizes how legal teams and law firms use technology to drive 
                    digital transformation. David drives the entire team to deliver genuinely leading-edge legal technology solutions 
                    for our customers. He strives to serve the business and its customers by helping enable our leaders and people to 
                    fulfill their passion for making a difference.
                    <br>
                    <br>
                    David has more than twenty years of experience in the global technology industry and a proven track record 
                    managing global teams. He spent the first decade of his career at General Electric and McKesson Corp, 
                    where he held domestic and international leadership roles. Most recently, David served as CEO of Upserve. 
                    He received a BS Degree in Electrical Engineering, an MBA in Marketing, and is a US Army veteran.</p>
                </div>
            </div>
           
            <div class="dy">
                <div class="person2-text">
                <h2 id="h2">Jennifer Reynolds - CFO</h2>
                <br>
                <p id="dy">
                    As Chief Financial Officer, Jennifer Reynolds oversees the financial stability of the company, 
                    managing all aspects of accounting, finance, and legal functions. She plays a crucial role as a key 
                    member of the company's management team, contributing to the strategic direction and growth initiatives
                    of HireMe Corporation. Jennifer is actively engaged in all facets of M&A financial planning and execution.
                    <br>
                    <br>
                    With a wealth of experience exceeding 20 years in the software industry, Jennifer has held prominent 
                    executive positions in finance and operations within private equity-backed companies. Prior to joining 
                    HireMe Corporation, she demonstrated her leadership in finance and operations at companies such as 
                    TechSolutions, InnovateSoft, and Pinnacle Systems. Jennifer brings invaluable expertise in guiding 
                    companies through phases of rapid growth, successfully orchestrating multiple exits. 
                    <br>
                    <br>
                    Jennifer holds an MBA from the University of California, Berkeley, and a bachelor's degree in finance 
                    from Stanford University.</p>
                    
                 
                </div>
                <img src="foto/person1.jpg" alt="">
            </div>
            <div class="tre">
                <img src="foto/person3.jpg" alt="">
                <div class="person2-text">
                <h2 id="h2">Emily Mitchell - CTO</h2>
                <br>
                <p id="tre">
                As Chief Technology Officer, Emily Mitchell takes the helm in leading the engineering, DevOps, 
                architecture, R&D operations, QA, IT, and Security teams at HireMe Corporation.
                Boasting over 17 years of senior management expertise in both private equity-backed and public 
                companies, Emily has consistently excelled in high-growth, acquisitive software firms across various 
                industries. Before joining HireMe Corporation, Emily served as the CTO of TechSolutions. 
                <br>
                <br>
                There, she played a pivotal role in the reconstruction and transformation of the technology organization, 
                achieving enterprise scale by seamlessly integrating multiple acquisitions. Throughout her tenure, 
                Emily successfully delivered new enterprise platform capabilities, launched the company's first 
                enterprise data offering, and bolstered the overall scalability of its technology assets.
                Emily holds a bachelor’s degree from Stanford University and an MBA from the University of California, 
                Berkeley.</p>
                </div>
            </div>
        </div> <div class="exp">
        <p id="explore">Explore inspiring careers at our company.... </p>
    </div>
        <div class="card_container">
            <div class="card">
                <div class="squarebox"></div>
                <div class="roundbox"></div>
                <div class="img_box"><img src="foto/person5.jpg"></div>
                
          
            <div class="user_content">
                <h5 class="name">Carry Johnson</h5>
                <p class="post">Data Scientist</p>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                    <i class="fa-solid fa-star transparent"></i>
                </div>
                <p class="about">As the Chief Data Scientist, Carry Johnson takes the reins in harnessing the power of data for strategic decision-making at HireMe Corporation. Responsible for orchestrating advanced analytics, machine learning, and data-driven insights, Carry plays a critical role in guiding the company's data strategy. Her leadership extends to managing data operations, ensuring data quality, and championing data security initiatives. A vital contributor to the company's management team, Carry's expertise aids in determining strategic directions and growth initiatives, positioning HireMe Corporation at the forefront of data-driven innovation.</p>
            </div>
        </div>
        <div class="card">
            <div class="squarebox"></div>
            <div class="roundbox"></div>
            <div class="img_box"><img src="foto/person7.jpg"></div>
            
      
        <div class="user_content">
            <h5 class="name">Rachel Bennett</h5>
            <p class="post">Cyber Security</p>
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <p class="about">In the capacity of Chief Information Security Officer, Rachel Bennett is entrusted with fortifying the digital defenses of HireMe Corporation. With a focus on maintaining the highest standards of cybersecurity, Rachel oversees the company's information security strategy, operations, and compliance. Serving as a key member of the management team, she actively contributes to shaping the strategic direction and growth initiatives of the company while playing a crucial role in implementing and executing comprehensive cybersecurity measures. Rachel's dedication ensures the resilience and security of HireMe Corporation's digital infrastructure in an ever-evolving technological landscape.</p>
        </div>
    </div>
    <div class="card">
        <div class="squarebox"></div>
        <div class="roundbox"></div>
        <div class="img_box"><img src="foto/person6.jpg"></div>
        
  
    <div class="user_content">
        <h5 class="name">Jordan Williams</h5>
        <p class="post">UI/UX Designer</p>
        <div class="star">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <p class="about">In the role of Chief UX/UI Designer, Jordan Williams leads the charge in crafting exceptional user experiences and intuitive interfaces at HireMe Corporation. Responsible for the visual and interactive aspects of the company's products, Jordan oversees the UX and UI design teams, ensuring a seamless and delightful user journey.As a valued member of the management team, Jordan actively contributes to the determination of HireMe Corporation's strategic direction and growth. With a focus on human-centric design, Jordan plays a pivotal role in elevating HireMe Corporation's digital presence and ensuring that user satisfaction remains at the forefront of the company's goals.</p>
    </div>
</div>


        </div>
    
    <div class="card_container">
        <?php foreach ($team as $worker) { ?>
        
            <div class="card">
                <div class="squarebox"></div>
                <div class="roundbox"></div>
                <div class="img_box"><img src="<?php echo $worker['Img']?>"></div>
            

                <div class="user_content">
                    <h5 class="name"><?php echo $worker['name']?></h5>
                    <p class="post"><?php echo $worker['jobTitle']?></p>
                        <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star transparent"></i>
                        </div>
                    <p class="about"><?php echo $worker['description']?></p>
                </div>
            </div>
    
        <?php } ?>
    </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>





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
        if (isset($_SESSION['roli'])) {
         if($_SESSION['roli']=="admin"){
             echo"<div class='dashboardbutton' style='display: flex; justify-content: center; align-items: center; width: 100%;'>
                            <button style='background-color: #023047; width: 10em; height: 3em; border: 1px solid white; border-radius: 1.5em;'>
                            <a style='color:white; text-decoration: none;' href='dashboard.php'><b>Dashboard</b></a>
                            </button>
                    </div>";
         }
        }
 require_once "DatabaseConnection.php";
include_once "PunaRepository.php";

$jbrep = new PunaRepository();
$puna = $jbrep->getAllJobs();

?>
        
    <div class="punet">
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
        <!-- <div id="applyForm">
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
    </div> -->

   <div id="applyForm">
    <h3 style="color: white; display: flex; justify-content: center;">Add your CV</h3>
    <br>
    <form onsubmit="return validateApplyForm('cv<?php echo $job['ID']; ?>', <?php echo $job['ID']; ?>)" enctype="multipart/form-data" method="post">
        <label for="cv<?php echo $job['ID']; ?>" style="color: white; margin-left: 2.5em;">Upload your CV:   </label>
        <input type="file" id="cv<?php echo $job['ID']; ?>" name="cv" accept=".pdf, .doc, .docx" style="margin-left: 1em;">
        <!-- Hidden input to store the job_id -->
        <input type="hidden" id="job_id" name="job_id" value="<?php echo $job['ID']; ?>">
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

</div>
 
<?php include 'footer.php'; ?>
      
    </div>
 

    <?php
    // ... Your existing code ...
 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["cv"]) && isset($_POST["job_id"])) {
        $jobId = $_POST["job_id"];
        $cvFile = $_FILES["cv"];
    
        // Validate and move the uploaded CV file
        $uploadDir = "uploads/"; // Change this to your desired upload directory
        $cvFileName = $uploadDir . basename($cvFile["name"]);
    
        if (move_uploaded_file($cvFile["tmp_name"], $cvFileName)) {
            // CV file moved successfully, now insert into the database
            include_once "ApplicantRepository.php"; // Create this file to handle database operations
    
            $applicantRepository = new ApplicantRepository();
            $applicantRepository->insertApplicant($jobId, $cvFileName);
    
            echo "Application submitted successfully!";
        } else {
            echo "Error uploading CV file.";
        }
    }
    ?>



</body>

<script>
    function openApplyForm() {
    var card = document.getElementById("card");
    var applyForm = document.getElementById("applyForm");

    card.style.transform = "rotateY(180deg)";
    applyForm.style.display = "block";
}

// function validateApplyForm(fileInputId, index) {
//     var cvFile = document.getElementById(fileInputId).files[0];

//     if (!cvFile) {
//         alert('Please upload your CV!');
//         return false;
//     }

//     alert('Application submitted successfully!');
//     return true;
// }

    function validateApplyForm(fileInputId, jobId) {
        var cvFile = document.getElementById(fileInputId).files[0];

        if (!cvFile) {
            alert('Please upload your CV!');
            return false;
        }

        // Set the job_id in the hidden input
        document.getElementById('job_id').value = jobId;

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
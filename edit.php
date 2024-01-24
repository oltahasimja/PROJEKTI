
<?php
include ('PunaRepository.php');
$id = $_GET['id'];//e merr id e punes prej url

$jbrep = new PunaRepository();
$puna = $jbrep->getJobById($id);
?>

<!DOCTYPE html>
<html>
<style>
    h3 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 400px;
        margin: 0 auto;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    
    <h3>Edit Puna</h3>

    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <label>Job Title:</label>
        <input type="text" name="jobTitle"  value="<?php echo $puna['JobTitle']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <label>Orari:</label>
        <input type="text" name="orari"  value="<?php echo $puna['Orari']?>"> <br> <br>
        <label>Lokacioni:</label>
        <input type="text" name="lokacioni"  value="<?php echo $puna['Lokacioni']?>"> <br> <br>
        <label>Detajet:</label>
        <input type="text" name="detajet"  value="<?php echo $puna['Detajet']?>"> <br> <br>
        <label>PozitaTeHapura:</label>
        <input type="text" name="pozitaTeHapura"  value="<?php echo $puna['PozitaTeHapura']?>"> <br> <br>
        <input type="submit" name="editBtn" value="Save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editBtn'])){
    $id = $puna['ID']; 
    $jobTitle = $_POST['jobTitle'];
    $orari = $_POST['orari'];
    $lokacioni = $_POST['lokacioni'];
    $detajet = $_POST['detajet'];
    $pozitaTeHapura = $_POST['pozitaTeHapura'];

    $jbrep->editJob($id, $jobTitle, $orari, $lokacioni,  $detajet , $pozitaTeHapura);
    header("location:dashboard.php");
}

?>
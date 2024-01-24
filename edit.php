
<?php
include ('PunaRepository.php');
$id = $_GET['ID'];//e merr id e punes prej url

$jbrep = new PunaRepository();
$puna = $jbrep->getJobById($id);
?>

<!DOCTYPE html>
<html>
<body>
    <h3>Edit Puna</h3>

    <form action="<?php echo $SERVER['PHP_SELF']?>" method="post">
     <!-- nese nuk duam t'i ndryshojme te gjitha te dhenat, e perdorim kete pjesen tek value qe te na shfaqen vlerat aktuale, ashtu qe atributet qe nuk duam t'i ndryshojme mbesin te njejta pa pasur nevoje t'i shkruajme prape-->
        <input type="text" name="jobTitle"  value="<?php echo $puna['jobTitle']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <input type="text" name="orari"  value="<?php echo $puna['orari']?>"> <br> <br>
        <input type="text" name="lokacioni"  value="<?php echo $puna['lokacioni']?>"> <br> <br>
        <input type="date" name="detajet"  value="<?php echo $puna['detajet']?>"> <br> <br>
        <input type="text" name="pozitaTeHapura"  value="<?php echo $puna['pozitaTeHapura']?>"> <br> <br>
        <input type="submit" name="editBtn" value="save"> <br> <br>
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
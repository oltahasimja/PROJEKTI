<?php
include_once ('Puna.php');
include_once ('PunaRepository.php');

if (isset($_POST['submitbtn'])) {
    $jobTitle = $_POST['jobTitle'];
    $orari = $_POST['orari'];
    $lokacioni = $_POST['lokacioni'];
    $detajet = $_POST['detajet'];
    $pozitaTeHapura = $_POST['pozitaTeHapura'];
   
    $puna = new Puna($jobTitle, $orari, $lokacioni,$detajet, $pozitaTeHapura);

    $punaRepository = new PunaRepository();
    $punaRepository->insertPuna($puna);
    header("location:dashboard.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="<?php echo $SERVER['PHP_SELF']?>" method="POST">  
            <input type="text" name="jobTitle" ><br>
            <input type="text" name="orari" ><br>
            <input type="date" name="lokacioni" ><br>
            <input type="email" name="detajet" ><br>
            <input type="text" name="pozitaTeHapura" ><br>
            <input type="submit" name="submitbtn" value="Submit">
        </form>
    </body>
</html>
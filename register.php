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
  
    header("location:jobopenings.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<style>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .istambul{
        display: flex;
        justify-content: center;
        width: 100%;
        align-items: center;
        flex-direction: column;
    }
    h1 {
        text-align: center;
        color: #333;
    }

    form {
        width: 30%;
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>


    <body>
        <div class="istambul">
        <h1>Register</h1>
      
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <label>Job Title:</label> 
            <input type="text" name="jobTitle" ><br>
            <label>Orari:</label>
            <input type="text" name="orari" ><br>
            <label>Lokacioni:</label>
            <input type="text" name="lokacioni" ><br>
            <label>Detajet:</label>
            <input type="text" name="detajet" ><br>
            <label>PozitaTeHapura:</label>
            <input type="text" name="pozitaTeHapura" required><br>
            <input type="submit" name="submitbtn" value="Submit">
        </form>

        </div>
    </body>
</html>
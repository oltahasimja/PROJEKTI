<?php
session_start();
include 'teamRepository.php';
$id = $_GET['id'];//e merr id e studentit prej url
$editedBy = isset($_SESSION['name']) ? "Edited By: " . $_SESSION['name'] : "Edited By: Unknown";
$strep = new TeamRepository();
$team = $strep->getTeamById($id);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Adjust the width as needed */
            width: 100%;
        }

        h3 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<body>

    <h3>Edit Worker</h3>

    <form action="<?php echo $_SERVER['PHP_SELF'] . '?id=' . $id; ?>" method="POST">
        <label>Img:</label>
        <input type="file" name="img"  value="<?php echo $team['Img']?>"> <br> <br>
        <label>Name:</label>
        <input type="text" name="name"  value="<?php echo $team['name']?>"> <br> <br>
        <label>Job Title:</label>
        <input type="text" name="jobTitle"  value="<?php echo $team['jobTitle']?>"> <br> <br> <!-- Pjesa brenda [] eshte emri i sakte i atributit si ne Databaze-->
        <label>Lokacioni:</label>
        <input type="text" name="description"  value="<?php echo $team['description']?>"> <br> <br>
        <input type="submit" name="editBtn" value="Save"> <br> <br>
        <input type="hidden" name="modifikoi" value="<?php echo htmlspecialchars($editedBy); ?>">

    </form>


</body>
</html>

<?php 
    if(isset($_POST['editBtn'])){
        $id =$id;
        $name = $_POST['name']; //merret nga formulari
        $jobTitle = $_POST['jobTitle'];
        $description = $_POST['description'];
        $img = $_POST['img'];
        $modifikoi = $_POST['modifikoi'];
    
        $strep->editTeam($id, $name, $jobTitle, $description, $img, $modifikoi);
        header("location:dashboard.php");
        exit();
    }
    $team = $strep->getTeamById($id);
?>
<?php 

include "DatabaseConnection.php";
include_once "PunaRepository.php";

$jbrep = new PunaRepository();
$puna = $jbrep->getAllJobs();

?>

<!DOCTYPE html>
<html>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="dashboard.css">
<link rel="stylesheet" href="stylecover.css">

    <body>
    <a href='register.php'>Register</a>
        <table>
            <thead>
            <tr>
            <th>Img</th>
                <th>JobTitle</th>
                <th>Orari</th>
                <th>Lokacioni</th>
                <th>Detajet</th>
                <th>PozitaTeHapura</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($puna as $job) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $job['Img'];?></td>
                        <td><?php echo $job['JobTitle'];?></td>
                        <td><?php echo $job['Orari'];?></td>
                        <td><?php echo $job['Lokacioni'];?></td>
                        <td><?php echo $job['Detajet'];?></td>
                        <td><?php echo $job['PozitaTeHapura'];?></td>
                        <td><a href='edit.php?id=<?php echo $job['ID']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga jobi i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $job['ID']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>

</html>
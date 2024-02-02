<?php 

include "DatabaseConnection.php";
include_once "PunaRepository.php";
include "function.php";
$jbrep = new PunaRepository();
$puna = $jbrep->getAllJobs();
$cmrep = new Contact();
$comment = $cmrep->getAllComments();

include_once "teamRepository.php";
$strep = new TeamRepository();
$team = $strep->getAllTeam();

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
            <th>ID</th>
            <th>Img</th>
                <th>JobTitle</th>
                <th>Orari</th>
                <th>Lokacioni</th>
                <th>Detajet</th>
                <th>PozitaTeHapura</th>
                <th>Pershkrimi</th>
                <th>Modifikoi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($puna as $job) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $job['ID'];?></td>
                    <td><?php echo $job['Img'];?></td>
                        <td><?php echo $job['JobTitle'];?></td>
                        <td><?php echo $job['Orari'];?></td>
                        <td><?php echo $job['Lokacioni'];?></td>
                        <td><?php echo $job['Detajet'];?></td>
                        <td><?php echo $job['PozitaTeHapura'];?></td>
                        <td><?php echo $job['Pershkrimi'];?></td>
                        <td><?php echo $job['Modifikoi'];?></td>
                        <td><a href='edit.php?id=<?php echo $job['ID']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga jobi i cili eshte i paraqitur ne kete rresht-->
                        <td><a href='delete.php?id=<?php echo $job['ID']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>


        <table>
            <thead>
            <tr>
            <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Comment</th>
           
            </tr>
            </thead>
            <tbody>
                <?php foreach($comment as $msg) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $msg['first_name'];?></td>
                        <td><?php echo $msg['last_name'];?></td>
                        <td><?php echo $msg['email'];?></td>
                        <td><?php echo $msg['phone'];?></td>
                        <td><?php echo $msg['comments'];?></td>
                     
                       
                    </tr>
                <?php }?> 
            </tbody>
        </table>

        <a href='registerTeam.php'>Register</a>
        <table>
            <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>JobTitle</th>
            <th>Description</th>
            <th>Img</th>
            <th>Modifikoi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($team as $worker) { ?> <!--e hapim foreach-->
                    <tr>
                    <td><?php echo $worker['ID'];?></td>
                    <td><?php echo $worker['name'];?></td>
                    <td><?php echo $worker['jobTitle'];?></td>
                    <td><?php echo $worker['description'];?></td>
                    <td><?php echo $worker['Img'];?></td>
                    <td><?php echo $worker['Modifikoi'];?></td>
                    <td><a href='editTeam.php?id=<?php echo $worker['ID']?>'>Edit</a></td> <!--e dergojme id ne url permes pjeses ?id= dhe permes kodit ne php e marrim nga jobi i cili eshte i paraqitur ne kete rresht-->
                    <td><a href='deleteTeam.php?id=<?php echo $worker['ID']?>'>Delete</a></td>
                    </tr>
                <?php }?> 
            </tbody>
        </table>
    </body>

</html>
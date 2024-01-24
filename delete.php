<?php
include_once 'Punarepository.php';
$id = $_GET['id'];//e merr id prej url

$strep = new PunaRepository();
$strep->deleteJobs($id);

header("location:dashboard.php");
?>
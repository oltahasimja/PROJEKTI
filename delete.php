<?php
include_once 'Punarepository.php';
$id = $_GET['ID'];//e merr id prej url

$strep = new PunaRepository();
$strep->deleteJobs($id);

header("location:dashboard.php");
?>
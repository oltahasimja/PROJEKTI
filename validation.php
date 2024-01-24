<?php
include('user.php');

if(isset($_POST['submit'])){
    for($i = 0; $i< sizeof($user); $i++){
        if($_POST['email']==$user[$i][0] && $_POST['psw']==$user[$i][1]){
            session_start();
            $_SESSION['email']=$user[$i][0];
            $_SESSION['password']=$user[$i][1];
            $_SESSION['roli']=$user[$i][2];
            header("Location:cover.php");
        }
    }
}
?>
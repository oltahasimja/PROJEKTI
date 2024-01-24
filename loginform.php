<?php
    // include ('validation.php');

    session_start();

    include("db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            if(!empty($email) && !empty($pass) && !is_numeric($email)){
                $query= "Select * From form where email = '$email' limit 1";
                $result = mysqli_query($con, $query);

                if($result){

                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['pass'] == $pass){
                            header("location:cover.php");
                            die;

                        }
                    }
                }
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }
            else{
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }

        }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    
    <div class="containerlog">
    <div class="card">
    <div class="inner-box" id="card">
        <div class="card-front">
            <h2>LOGIN</h2>
            <form  onsubmit="return validateform()" method ="POST">
                <input type="email" name="email" id='email' class="input-box" placeholder="Your Email ID" required>
                <input type="password" name="pass" id='password' class="input-box" placeholder="Password" required>
                <input type="submit" class="submit-btn1">
                
            </form>
            <button type="button" class="btn1" ><a href="signup.php">I am new here</a></button>
            <a href="">Forgot Password</a>
        </div>
    </div>
</div>
     </div>
    
    <script>
        function validateform(){
            var email=document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(email)){
                alert('Please enter a valid address');
                return false;
            }
            if(password.length<6){
                alert('Password must be at least 6 characters long');
                return false;
            }
            return true;
        }
            
    

    </script>
</body>
</html>

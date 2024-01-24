<?php
    // include ('validation.php');

    session_start();

    include("db.php");

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_POST['name'];
            $pass = $_POST['pass'];

            if(!empty($name) && !empty($pass) && !is_numeric($name)){
                $query= "Select * From form where name = '$name' limit 1";
                $result = mysqli_query($con, $query);

                if($result){

                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['pass'] == $pass){
                            session_start();
                            $_SESSION['name'] = $user_data['name'];
                            $_SESSION['roli'] = $user_data['roli'];                            
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
                <input type="text" name="name" id='name' class="input-box" placeholder="Your Username" required>
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
            var name=document.getElementById('name').value;
            var password = document.getElementById('password').value;
            var nameRegex=/^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            alert('Please enter your name');
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

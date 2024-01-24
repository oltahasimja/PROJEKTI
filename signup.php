<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!empty($email) && !empty($pass) && !is_numeric($email)){
            $query = "insert into form (name, email, pass) values('$name', '$email', '$pass')";

            mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
</head>
<body>
        </div>
        </div>
        <div class="containerlog">
    <div class="card">
    <div class="inner-box" id="card">
        <div class="card-front">
            <h2>REGISTER</h2>
            <form onsubmit="return validateRegisterForm()" method ="POST">
                <input type="text" name="name" id="name" class="input-box" placeholder="Your Name" required>
                <input type="email" name="email" id='registerEmail' class="input-box" placeholder="Your Email ID" required>
                <input type="password" name="pass" id='registerPassword' class="input-box" placeholder="Password" required>
                <!-- <button type="submit" class="submit-btn1">Submit</button> -->
                <input type="submit" class="submit-btn1">
                
            </form>
            <button type="button" class="btn1" ><a href="loginform.php">I've an account</a></button>
            <a href="">Forgot Password</a>
        </div>
    </div>
</div>
     </div>
    <script>        
        function validateRegisterForm() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('registerEmail').value;
        var password = document.getElementById('registerPassword').value;

        var nameRegex=/^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            alert('Please enter your name');
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return false;
        }
        
        if (password.length < 8) {
            alert('Password must be at least 8 characters long');
            return false;
        }
        return true;
    }
    </script>
</body>
</html>

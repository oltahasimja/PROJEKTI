<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecover.css">
    <title>Document</title>
</head>
<body>

    
    <div class="containerlog">
    <div class="card">
    <div class="inner-box" id="card">
        <div class="card-front">
            <h2>LOGIN</h2>
            <form onsubmit="return validateform()">
                <input type="email" id='email' class="input-box" placeholder="Your Email ID" required>
                <input type="password" id='password' class="input-box" placeholder="Password" required>
                <button type="submit" class="submit-btn1">Submit</button>
                <input type="checkbox" ><span>Remember Me</span>
            </form>
            <button type="button" class="btn1" onclick="openRegister()">I am new here</button>
            <a href="">Forgot Password</a>
        </div>
        <div class="card-back">
            <h2>REGISTER</h2>
            <form onsubmit="return validateRegisterForm()">
                <input type="text" id="name" class="input-box" placeholder="Your Name" required>
                <input type="email" id='registerEmail' class="input-box" placeholder="Your Email ID" required>
                <input type="password" id='registerPassword' class="input-box" placeholder="Password" required>
                <button type="submit" class="submit-btn1">Submit</button>
                <input type="checkbox" ><span>Remember Me</span>
            </form>
            <button type="button" class="btn1" onclick="openLogin()">I've an account</button>
            <a href="">Forgot Password</a>
        </div>
    </div>
</div>
     </div>
    
    <script>
        var card=document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(-180deg)";
        }
        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }
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

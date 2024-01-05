<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="all">
    <div class="forma">
        <form onsubmit="return validateform()">
            <div class="contact">Contact Us & Get in touch</div>
            <p>First Name:<br>
            <input type="text" id="first_name"></p>
            <p>Last Name:<br>
            <input type="text" id="last_name"></p>
            <p>E-mail:<br>
            <input type="text" id="email"></p>
            <p>Phone Number:<br>
            <input type="text" id="phone"></p>
            <p>What do you have in mind?<br>
            <textarea id="comments" cols="40" rows="10" style="border-color: #eeeeee; border:2px solid #eeeeee"></textarea></p>
            <p><input type="submit" id="submit-btn" value="Send"></p>
        </form>
    </div>
    <div class="harta">
        <p id="reachus">Reach us at</p>
        <div class="ikonat">
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>

            </div>
    </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.675080355656!2d-87.64407712452093!3d41.87833667124184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cc10885b721%3A0x7a7c279e1e7514d5!2s550%20W%20Jackson%20Blvd%2C%20Chicago%2C%20IL%2060661%2C%20USA!5e0!3m2!1sen!2s!4v1704473623666!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
    <script>
        function validateform() {
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;
            var phoneregex = /^(\+383|0)?[1-9]\d{7,8}$/;

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address');
                return false;
            }

            if (!phoneregex.test(phone)) {
                alert('Please enter a valid phone number');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

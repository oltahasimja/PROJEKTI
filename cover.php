<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylecover.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="banner">
        <div class="partition-1">
              <div class="partition-11">
             <div class="rombi2"></div>
             <div class="content">
             <h1 id="Unlock">Unlock Your Potential,<br> <span id="find">Find Your Path to Success</span></h1>
             <br>
             <h3>Your success story begins here – let us guide you towards a fulfilling and rewarding career.</h3>
             <a href="loginform.php" class="btn"><h2>Get Started</h2></a>
              </div>
             <div class="shkallet">
  
              <div class="rombi">
             <img src="foto/shkallet.png" alt="">
             </div>
              </div>
               </div>
              </div>
              <div class="slider-area">
        <h2>Our Partners</h2>
        <div class="wrapper" style="display: flex; overflow: hidden; height: 150px;">
            <div class="item" style="width: 100px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/K2-logo.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 200px; height: 100px; object-fit: contain; overflow: hidden; ">
                <img alt="" src="foto/2000px-AEW_Capital_Management_logo.svg-pd8y9l6ubmuqake5njvxfn4mhbwz91hep0fa94d4hs.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 100px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/RPM-pyve0q1lw1h7bu0s8qgbkk9ywhd97qfrebdx1cssn4.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 500px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/kraft-kennedy.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 200px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/fireman-company-logo-white.webp" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 400px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/harbor_logo_midnite-blu_rgb2x.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 400px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/imanage.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 200px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/kraft-kennedy.png" style="width: 100%; height: 100%;">
            </div>
            <div class="item" style="width: 300px; height: 100px; object-fit: contain; overflow: hidden;">
                <img alt="" src="foto/micro-strategies.png" style="width: 100%; height: 100%;">
            </div>
          
        </div>
    </div>
        </div>

        <?php include 'footer.php'; ?>
        <script>
            var slides = document.querySelectorAll(".slider-area .wrapper .item");
            var dots = document.querySelectorAll(".item");
            var index = 0;
            var itemsToShow = 3;

            function nextSlide() {
                index += itemsToShow;
                if (index >= slides.length) {
                    index = 0;
                }
                changeSlide();
            }

            function changeSlide() {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                    dots[i].classList.remove("active");
                }
            
                for (let i = index; i < index + itemsToShow && i < slides.length; i++) {
                    slides[i].style.display = "block";
                    dots[i].classList.add("active");
                }
            }


            setInterval(nextSlide, 1000);
        </script>



</body>
</html>
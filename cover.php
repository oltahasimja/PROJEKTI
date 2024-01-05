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
             <a href="loginform.html" class="btn"><h2>Get Started</h2></a>
              </div>
             <div class="shkallet">
  
              <div class="rombi">
             <img src="shkallet.png" alt="">
             </div>
              </div>
               </div>
              </div>
              <div class="slider-area">
                <h2>Our Partners</h2>
                <div class="wrapper">
                    <div class="item" style="  width: 100px;
                    height: 100px;"><img alt="" src="K2-logo.png"></div>

                    <div class="item"  style="  width: 50px;
                    height: 50px; margin-top: 2em;"><img alt="" src="2000px-AEW_Capital_Management_logo.svg-pd8y9l6ubmuqake5njvxfn4mhbwz91hep0fa94d4hs.png"></div>
                   
                   <div class="item"  style="  width: 100px;
                    height: 100px;"><img alt="" src="RPM-pyve0q1lw1h7bu0s8qgbkk9ywhd97qfrebdx1cssn4.png"></div>
                     
                       
                      
                    <div class="item" style="  width: 500px;
                    height: 100px;"><img alt="" src="kraft-kennedy.png"></div>

                     <div class="item" style="  width: 100px;
                    height: 100px;"><img alt="" src="fireman-company-logo-white.webp"></div>
                   
                    
                    <div class="item" style="  width: 100px;
                    height: 100px;"><img alt="" src="harbor_logo_midnite-blu_rgb2x.png"></div>
                   
                  <div class="item" style="  width: 400px;
                    height: 100px;"><img alt="" src="imanage.png"></div>
                    
                    <div class="item" style="  width: 200px;
                    height: 100px;"><img alt="" src="kraft-kennedy.png"></div>
                    
                    <div class="item" style="  width: 100px;
                    height: 100px;"><img alt="" src="micro-strategies.png"></div>
                    
                    <div class="item" style="  width: 100px;
                    height: 100px;"><img alt="" src="netdocuments.png"></div>
                </div>
            </div>
        </div>

                <?php include 'footer.php'; ?>
    <script>
   var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n){
  index+=n;
  console.log("prevSlide is called");
  changeSlide();
}

function nextSlide(n){
  index+=n;
  changeSlide();
}

changeSlide();

function changeSlide(){

  if(index>slides.length-1)
    index=0;

  if(index<0)
    index=slides.length-1;



    for(let i=0;i<slides.length;i++){
      slides[i].style.display = "none";

      dots[i].classList.remove("active");


    }

    slides[index].style.display = "block";
    dots[index].classList.add("active");



}
</script>
</body>
</html>
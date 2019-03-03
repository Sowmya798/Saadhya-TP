<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #000000;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

div {
    background: linear-gradient(to bottom, #bee7fa 0%, #ffffff 100%)
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>



</head>
<body>
<h1><font face="verdana"><center>PLACES</center></font></h1>

<form action="logout_page.php" >
<button class="button" style="float: right";>LOGOUT</button>
</form>



<form action="tags.php" >
<button class="button" style="float: left";>Back to tags page</button>
</form>
</div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 20</div>
  <a href="Andaman.php">
  <img src="Andaman.png" style="width:100%">
  <div class="text">Andaman and Nicobar</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 20 </div>
  <a href="Meghalaya.php">
  <img src="meghalaya.jpg" style="width:100%">
  <div class="text">Meghalaya</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 20</div>
  <a href="Lakshadweep.php">
  <img src="lakshadweep.jpg" style="width:100%">
  <div class="text">Lakshadweep</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 20</div>
  <a href="Uttarakhand.php">
  <img src="uttarakhand.jpg" style="width:100%">
  <div class="text">Uttarakhand</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 20</div>
  <a href="Delhi.php">
  <img src="delhi.jpg" style="width:100%">
  <div class="text">Delhi</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 20</div>
  <a href="Assam.php">
  <img src="assam.jpg" style="width:100%">
  <div class="text">Assam</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 20</div>
  <a href="Hyderabad.php">
  <img src="hyderabad.jpg" style="width:100%">
  <div class="text">Hyderabad</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">8 / 20</div>
  <a href="Thar.php">
  <img src="rajasthan.jpg" style="width:100%">
  <div class="text">Thar</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 20</div>
  <a href="Bhubaneshwar.php">
  <img src="bhubaneshwar.jpg" style="width:100%">
  <div class="text">Bhubaneshwar</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 20</div>
  <a href="Sabarmati.php">
  <img src="ashram.jpg" style="width:100%">
  <div class="text">Sabarmati</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">11 / 20</div>
  <a href="Varanasi.php">
  <img src="varanasi.jpg" style="width:100%">
  <div class="text">Varanasi</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">12 / 20</div>
  <a href="Cherrapunji.php">
  <img src="cherrapunjee.jpg" style="width:100%">
  <div class="text">Cherrapunjee</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">13 / 20</div>
  <a href="Puri.php">
  <img src="puri.jpg" style="width:100%">
  <div class="text">Puri</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">14 / 20</div>
  <a href="Jaipur.php">
  <img src="jaipur.jpg" style="width:100%">
  <div class="text">Jaipur</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">15 / 20</div>
  <a href="Goa.php">
  <img src="goa.jpg" style="width:100%">
  <div class="text">Goa</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">16 / 20</div>
  <a href="Kolkata.php">
  <img src="kolkata.jpg" style="width:100%">
  <div class="text">Kolkata</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">17 / 20</div>
  <a href="Kashmir.php">
  <img src="kashmir.jpg" style="width:100%">
  <div class="text">Kashmir</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">18 / 20</div>
  <a href="Ladakh.php">
  <img src="ladakh.jpg" style="width:100%">
  <div class="text">Ladakh</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">19/ 20</div>
  <a href="Shimla.php">
  <img src="shimla.jpg" style="width:100%">
  <div class="text">Shimla</div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">20 / 20</div>
  <a href="Tanjore.php">
  <img src="tanjore.jpg" style="width:100%">
  <div class="text">Tanjore</div>
  </a>
</div>





<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span> 
  <span class="dot" onclick="currentSlide(11)"></span> 
  <span class="dot" onclick="currentSlide(12)"></span>
  <span class="dot" onclick="currentSlide(13)"></span> 
  <span class="dot" onclick="currentSlide(14)"></span> 
  <span class="dot" onclick="currentSlide(15)"></span> 
  <span class="dot" onclick="currentSlide(16)"></span> 
  <span class="dot" onclick="currentSlide(17)"></span> 
  <span class="dot" onclick="currentSlide(18)"></span>
  <span class="dot" onclick="currentSlide(19)"></span> 
  <span class="dot" onclick="currentSlide(20)"></span> 
  </div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 

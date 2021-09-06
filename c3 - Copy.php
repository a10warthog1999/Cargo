<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;-
  position: relative;
  margin: auto;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 7px;
  margin-top: -20px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 1px 1px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 1px 0 0 1px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* Caption text */
.text {
  color: black;
  font-size: 20px;
  font-family: algerian;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
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
  .text {font-size: 11px}
}
</style>
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1</div>
  <a href=""><img src="image.MQ6.7.20190715130727.jpeg" style="width:100%"></a>
  <div class="text">MERCEDES C-CLASS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 </div>
  <img src="5a197a081cb1b2bc80a5660e784a354e.jpg" style="width:100%">
  <div class="text">MERCEDES S-CLASS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 </div>
  <img src="USC40MBS111A021001.jpg" style="width:100%">
  <div class="text">MERCEDES G-CLASS </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4</div>
  <img src="300x225x24472160-mercedes_benz_e_class.jpg.pagespeed.ic.AJXUDS5yXa.jpg" style="width:100%">
  <div class="text">MERCEDES E</div>
</div>

</div>
<a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<br>



<script>
var slideIndex = 0;
showSlides();
var slides,dots;



function plusSlides(position) {
    slideIndex +=position;
    if (slideIndex> slides.length) {slideIndex = 1}
    else if(slideIndex<1){slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  function currentSlide(index) {
    if (index> slides.length) {index = 1}
    else if(index<1){index = slides.length}
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[index-1].style.display = "block";  
    dots[index-1].className += " active";
  }

function showSlides() {
    var i;
    slides = document.getElementsByClassName("mySlides");
    dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 8 seconds
}

</script>

</body>
</html> 
<html>
  <head>
    <title>Cargo </title>
  <body>
    <h1 align="center"><font face="algerian" size="26px">Select the car you want to try </h1>
    <?php
      //step 1 connect db

      include_once "bmwdatabase.php";

      //step 2-create query

      $sql="SELECT * FROM mercedes";

      //step 3 execute query

      $res=mysqli_query($conn,$sql);

      //step 4 check res
      if(mysqli_num_rows($res)>0)
      {
        ?>
        <table>
        <tr>
        
        <table border="1" align="center" width="1300px">
            <th bgcolor="lightgreen">NAME</th>
            <th bgcolor="lightgreen">PRICE</th>
            <th bgcolor="lightgreen">TEST DRIVE</th>
            <th bgcolor="lightgreen">BUY NOW</th>
          </tr>
        <?php
          while($row=mysqli_fetch_array($res))
          {
            print("<tr>");
              

              print("<td>");
                echo $row['NAME'];
              print("</td>");

              print("<td>");
                echo $row['PRICE'];
              print("</td>");
              
              
          ?>
          <td>
            <form action="test.php" method="POST">
              <input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
              <input type="submit" width="900px" value="test"/>

            </form>
          </td>

          <td>
            <form action="buy.php" method="POST">
              <input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
              <input type="submit" value="BUY"/>

            </form>
          </td>

          <?php

          print("</tr>");
        }
          print("</table>");
        }
          else //step 5 result set res is empty
          {
            print("empty set");
          }
          ?>
          
    </body>
    </html>

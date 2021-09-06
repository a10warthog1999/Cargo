<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <?php include_once "navbar.php"; ?>
<style>
 /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="USC90AUC016A021001.jpg" alt="AUDI-A4" height="500">
      <div class="carousel-caption">
        <h3><font color="black">AUDI-A4</h3></font>
       
      </div>   
    </div>
    <div class="carousel-item">
      <img src="USC90AUC021A021001.jpg" alt="AUDI-A6" width="1100" height="500">
      <div class="carousel-caption">
        <h3><font color="black">AUDI-A6</h3></font>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="audi-q7.jpg" alt="AUDI-Q7" width="1100" height="500">
      <div class="carousel-caption">
        <h3><font color="black">AUDI-Q7</h3></font>
        
      </div>   
    </div>

         <div class="carousel-item">
      <img src="B18CHgLCogS._UY560_.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3><font color="black">AUDI-R8</h3></font>
        
      </div>   
    </div>  

    


  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  <body>
    <h1 align="center"><font face="algerian" size="26px">Select the car you want to try </h1>
    <?php
      //step 1 connect db

      include_once "bmwdatabase.php";

      //step 2-create query

      $sql="SELECT * FROM audi";

      //step 3 execute query

      $res=mysqli_query($conn,$sql);

      //step 4 check res
      if(mysqli_num_rows($res)>0)
      {
        ?>
        <table>
        <tr>
        
        <table border="1" align="center" width="1300px" class="table">
          <tr bgcolor="black">
            <th><font color="white">NAME</th></font>
            <th><font color="white">PRICE</th></font>
            <th><font color="white">TEST DRIVE</th></font>
            <th><font color="white">BUY NOW</th></font>
          </tr>
        <?php
          while($row=mysqli_fetch_array($res))
          {
            print("<tr bgcolor='lightgrey'>");
              

              print("<td>");
                echo $row['NAME'];
              print("</td>");

              print("<td>");
                echo $row['PRICE'];
              print("</td>");
              
              
          ?>
          <td  style="text-align: center">
            <form action="test.php" method="POST">
              <input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
              <input type="submit" style="height:80px;background-color:white; width:150px" value="test"/>

            </form>
          </td>

          <td  style="text-align: center">
            <form action="user.php" method="POST">
              <input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
              <input type="submit" style="height:80px;background-color:white; width:150px" value="BUY"/>

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

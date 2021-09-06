<html>
<head>

  <title>www.cargo.com</title>
  

  	<h1 align="center"><font face="algerian" size="36px">CARGO</font></h1>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

   <body bgcolor="white">


<nav class="navbar navbar-inverse">
  <div class="navbar-wrapper">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">CARGO</a>
    </div>
    <div class="collapse navbar-collapse" class="modal" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="cargo.php">Home</a></li>
        <li>
          <a href="ab.php">ABOUT US</a>
        </li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</div>
</nav>
</head>


<br><br><br>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container {
  position: relative;
  width: 50%;
}


.image {
  opacity: 1;
  display: block;
  width: 450;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: ;
  opacity: 0;
  position: absolute;
  top: 50%;
  left:50%;
  transform: translate(50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.button {
  background-color:black;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
</style>
</head>
<body>
<table>
    <tr>
      <td>
        
<div class="container">
  <div class= "row">
  <div class="row">
    <div class="col">
  <img src="61HobFlkn-L._SX466_.jpg" class="image" style="width:350" style="height:600" hspace="200">
  <div class="middle">

    <?php

	echo '<a href="t2.php">
    <button class="button">BMW</button></a>';
    ?>
  </div>
</div>
</div>
</div>
</td>
<td>
  
  <div class="container">
    <div class="col">
  <img src="41y0x5bWC8L._SX425_.jpg" class="image" style="width:450" style="height:700" hspace="90">
  <div class="middle">
    <?php
    echo '<a href="c3.php">
    <button class="button">MERCEDES</button></a>';
    ?>
  </div>
</div>
</div>
</div>
</td>
</tr>
</table>
<br><br><br><br><br>

  <table>

<tr>
  <td>
    <div class="container">
    <div class="row">
      <div class="col">
  <img src="41GLOFulHNL._SX425_ (1).jpg" class="image" style="width:350" style="height:600" hspace="200">
  <div class="middle">
    <?php

    echo '<a href="c4.php">
    <button class="button">JAGUAR</div></a>';
    ?>
  </div>

</div>
</div>
</td>
<td>
  <div class="container">
    <div class="col">
  <img src="9d167058a918a79ecb4f839ca08684f9 (1).jpg" class="image" style="width:450" style="height:700" hspace="90">
  <div class="middle">
    <?php

    echo '<a href="c5.php">
    <button class="button">AUDI</div></a>';
    ?>
  </div>
</div>
</div>
</div>
</td>
</tr>
</body>
</head>
</html>


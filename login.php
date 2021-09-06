<html>
<head>
	<body background="SmallThriftyFugu-size_restricted.gif">
<meta name="viewport" 
content="width=device-width,initial-scale="1">
 
<style>
body {font-family:arial,helvetica,sans-serif,background-image:url("tumblr_nolukqcgYJ1rve2pqo1_500.gif");}

input[type=text], input[type=password]{
	width:100%;
	padding:12px 20px;
	margin:8px 0;
	display : inline-block;
	border:1px solid #ccc;
	box-sizing:border-box;
}

button{
	background-color: #333;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:100%;
}
button:hover{
	opacity:0.5;
}


.cancelbtn{
	width:auto;
	padding:10px 18px;
	background-color:#f44336;
}
.imgcontainer{
	text-align:center;
	margin:24px 0 12px 0;
	position:relative;

}
img.avatar{
	width:20%;
	border-radius:50%;
}
.continer{
	padding:16px;

}
span.psw{
	float:right;
	padding-top:16px;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 2; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 0px;
 
}

/* Modal Content/Box */
.modal-content {
  
  background-color:#ccc ;
  margin: 5% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>

<body>


	 
	 <form method="post" action="" class="modal-content animate">
    
    <div class="imgcontainer">
    	<img src="avatar2.png" alt="Avatar" class="avatar">
   
</div>
	  
     <div class="container">
      <label for="uname" name="uname"><b>Username</b></label></i>
     <input type="text" id="uname" placeholder="Enter Username" name="uname" required>
 

      <label for="psw" name="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
        
      <button type="submit" name="sub"/>Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">

    	 <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn" onclick="location.href='cargo.php';">Cancel</button>
      	<span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

</div>
</div>

<?php
              if(isset($_POST['sub']))
              {
                
                $uname=$_POST['uname'];
                $psw=$_POST['psw'];
               
                  if($uname=='admin' && $psw=='admin')
                  {
                    header('location:index.php');
                  }
                } 

              
              ?>


</body>
</html>

<html>
	<head>
		<title>Cargo </title>
		<link rel="stylesheet" href="bootstrap.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style>
		body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:red;
  color: white;
}
</style>
</head>

<body>


<div class="topnav">
<?php
  echo '<a class="active" href ="add_form3.php">ADD NEW CAR</a>';
   echo '<a href ="index.php">BMW </a>';
    echo '<a href ="index2.php">MERCEDES </a>';
     echo '<a href ="index4.php">AUDI </a>';

?>
</div>
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
	<body bgcolor="lightgrey">
		<h1 align="center"> <a href="cargo.php">CARGO </a></h1>
		<?php
			//step 1 connect db

			include_once "bmwdatabase.php";

			//step 2-create query

			$sql="SELECT * FROM jaguar";

			//step 3 execute query

			$res=mysqli_query($conn,$sql);

			//step 4 check res
			if(mysqli_num_rows($res)>0)
			{
				?>
				<table class="table" border="1" align="center" width="1300px" height="350px">
					<tr bgcolor="black">
						<th><font color="white">CARID</font></th>
						<th><font color="white">NAME</font></th>
						<th><font color="white">PRICE</font></th>
						<th><font color="white">DELETE</font></th>
						<th><font color="white">UPDATE</font></th>
					
					</tr>
				<?php
					while($row=mysqli_fetch_array($res))
					{
						print("<tr  bgcolor='lightgrey'>");
							print("<td style='text-align: center'>");
								echo $row['CARID'];
							print("</td>");

							print("<td style='text-align: center'>");
								echo $row['NAME'];
							print("</td>");

							print("<td style='text-align: center'>");
								echo $row['PRICE'];
							print("</td>");
					?>
					<td style="text-align: center">
						<form action="del3.php" method="POST">
							<input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
							<input type="submit" style="height:50px;background-color:white; width:100px" value="DELETE"/>

						</form>
					</td>

					<td style="text-align: center">
						<form action="mo_d.php" method="POST">
							<input type="hidden" name="mid" value="<?php echo $row['CARID']; ?>">
							<input type="submit" style="height:50px;background-color:white; width:100px" value="UPDATE"/>

						</form>
					</td>

					
					<?php

					print("</tr>");
				}
					print("<table>");
				}
					else //step 5 result set res is empty
					{
						print("empty set");
					}
					?>
					
		</body>
		</html>
<html>
	<head>
		<title> project </title>
	<body>
	
		<?php
			// step 1
			include_once 'bmwdatabase.php';
			
			//step 2
			$sql = "SELECT * FROM bmw ";
			
			//step 3
			$res=mysqli_query($conn,$sql);
			?>
				<?php
					if(mysqli_num_rows($res) > 0)
			{
				while($row = mysqli_fetch_array($res))
				{
					
					$name=$row['NAME'];
					$price=$row['PRICE'];
					
					
					
					
				}//end of while
			} //end of if
			else //step 5 - result set has 0 rows
			{
				print("empty result set");
			}
			?>
				<form action="bmwdatabase.php" method="POST"/>

		NAME : 
				<input type ="text" name="name" value= "<?php echo $row['NAME']; ?>"size="10">
				<br><br>

		PRICE :
				<input type="text" name="price"  value= "<?php echo $row['PRICE']; ?>" size="10">
				<br><br>

		<input type="submit" name="sub" value ="GO"/>

	</form>

	</body>
	</head>
	</html>
<?php
	$di=$_POST['di'];
	$name=$_POST['name'];
	$pr=$_POST['pr'];

	include_once "bmwdatabase.php";


	//step 2
	$sql="INSERT INTO audi (CARID,NAME,PRICE) VALUES ('$di','$name','$pr')";

	//step 3
	$res =mysqli_query($conn,$sql);

	//step 4
	if($res)
	{
		print("car details added</br></br>");
		include_once "index4.php";
		include_once "UploadImage.php";


	}
	else{
		print("error in adding" .mysqli_error($conn));
	}
	?>
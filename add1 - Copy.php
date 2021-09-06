<?php
	$di=$_POST['di'];
	$name=$_POST['name'];
	$pr=$_POST['pr'];
	$but_upload=$_POST['but_upload'];

	include_once "bmwdatabase.php";


	//step 2
	$sql="INSERT INTO bmw (CARID,NAME,PRICE,IMGPATH) VALUES ('$di','$name','$pr','$but_upload')";

	//step 3
	$res =mysqli_query($conn,$sql);

	//step 4
	if($res)
	{
		print("car details added</br></br>");
		include_once "index.php";
		include_once "UploadImage.php";


	}
	else{
		print("error in adding" .mysqli_error($conn));
	}
	?>
<?php
	$name=$_POST['name'];
	$em=$_POST['em'];
	$cn=$_POST['cn'];

	include_once "bmwdatabase.php";


	//step 2
	$sql="INSERT INTO user (NAME,EMAIL,PHONE) VALUES ('$name','$em','$cn')";

	//step 3
	$res =mysqli_query($conn,$sql);

	//step 4
	if($res)
	{
		print("user details added</br></br>");
		include_once "checkout.php";
		


	}
	else{
		print("error in adding" .mysqli_error($conn));
	}
	?>
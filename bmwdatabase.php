<?php
	$dbhost = 'localhost';
	$dbuser = 'admin';
	$dbpass = '1234';
	$db		= 'cargo';
	
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	
	if(! $conn)
	{
		die ("could not connect to MYSQL".mysql_error());
	}
	
	print("</br>");

?>
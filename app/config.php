<?php 

	$mysql_host = "mysql6.000webhost.com";
	$mysql_database = "a9999905_travel";
	$mysql_user = "a9999905_travel";
	$mysql_password = "Manutd11";

	$con = mysqli_connect("mysql6.000webhost.com","a9999905_travel","Manutd11","a9999905_travel");
	
	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  

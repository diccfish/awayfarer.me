<?php 

	$mysql_host = "216.172.170.14";
	$mysql_user = "charlene_away";
	$mysql_password = "Bigchuck1";
	$mysql_database = "charlene_places";

	$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database);
	
	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  

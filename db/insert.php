<?php
	$con = mysqli_connect("mysql6.000webhost.com","a9999905_travel","Manutd11","a9999905_travel");

	// Check connection
	if ( mysqli_connect_errno())
	  {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	$sql="INSERT INTO places (code, name, romance, party, family)
	VALUES
	('$_POST[code]','$_POST[name]','$_POST[romace]','$_POST[party]','$_POST[family]')";

	if (!mysqli_query($con,$sql))
	  {
	  die('Error: ' . mysqli_error($con));
	  }
	echo "1 record added";

	mysqli_close($con);
?>
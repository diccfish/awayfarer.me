<?php
$party = $_POST['party'];
$family = $_POST['family'];

$match = array();

$con = mysqli_connect("mysql6.000webhost.com","a9999905_travel","Manutd11","a9999905_travel");
$matching = mysqli_query($con, "select * from places Where party='$party' AND family='$family'");

	while (($row = mysqli_fetch_array($matching))) {
	  $match[] = $row;
	}

	if($match != null) {
	  foreach($match as $result) {
	  	echo('<div class="match"><a href="locations/' . $result["code"] . '.php">');
	  	print_r($result['name']);
	  	echo('</a></div>');
	  }
	}
	else {
		echo('Sorry, we cant find a place to match all your answers but:');
		$partyresults = mysqli_query($con,"select * from places Where party='$party' OR family='$family'");
		  while (($row = mysqli_fetch_array($partyresults))) {
			  $parties[] = $row['name'];
		  }
		echo('<br />Try these places:<br />');
		foreach($parties as $party) {
			echo('<div class="match">' . print($party)	.	'</div>');
		}
	}
?>


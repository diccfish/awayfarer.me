<?php
	$pageTitle = "UK";
	include('../config.php');
	include('../header.php');

	$match = array();
	$listings = array();
	
	$matching = mysqli_query($con, "select * from places Where code='uk'");
	  while (($row = mysqli_fetch_array($matching))) {
		  $match[] = $row;
	  }

  foreach ($match as $oneMatch) {
  	echo('<h1>' . $oneMatch['name'] . '</h1>');
  	echo('<h2>' . $oneMatch['code'] . '</h2>');
  	echo('<h3> Party: ' . $oneMatch['party'] . '</h3>');
  	echo('<h3> Family: ' . $oneMatch['family'] . '</h3>');
  }
  
  $dir = "../../img/uk/*";
	
	foreach(glob($dir) as $file) {  
		echo "<img src='$file' alt='$file'/>";  
		$listings[] = $file;
	}
	
	$bg = array_shift($listings);
	
?>

	<section class="bg" style="background: url(<?php print_r($bg); ?>); height: 100%; position: absolute; top: 0; width: 100%; z-index: -1;"></section>
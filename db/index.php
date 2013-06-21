<?php

	include('../app/config.php');
	
	$romance = trim($_POST['romance']);
	$adventure = trim($_POST['adventure']);
	$weather = trim($_POST['weather']);
	$budget = trim($_POST['budget']);
	
	$match = array();
	$allmatches = array();

	$matching = mysqli_query($con, "select code, name, coordinates from places Where romance='$romance' AND adventure='$adventure' AND weather='$weather' AND budget='$budget' ");
	$allmatching = mysqli_query($con, "select * from places Where romance='$romance' OR adventure='$adventure' OR weather='$weather' OR budget='$budget' ORDER BY name asc");

	  while (($row = mysqli_fetch_array($matching))) {
		  $match[] = $row;
	  }

	  while (($allrow = mysqli_fetch_array($allmatching))) {
	  	$allmatches[] = $allrow;
	  }
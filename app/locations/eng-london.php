<?php
	$pageTitle = "London";
	
	include('index.php');

  $dir = "../../img/locations/eng-london/*";

	$matching = mysqli_query($con, "select * from places Where code='eng-london'");
	  while (($row = mysqli_fetch_array($matching))) {
		  $match[] = $row;
	  }

	echo '<div class="result-wrap">';
	  foreach ($match as $oneMatch) {
	  	echo "<h1>$oneMatch[name]</h1><h3>Weather:$oneMatch[weather]</h3>";
	  }
	echo '</div>';
	  
	echo '<div class="images">';
		foreach(glob($dir) as $file) {  
			echo "<img src='$file' alt='$file'/>";  
			$listings[] = $file;
		}
	echo '</div>';

	$bg = array_shift($listings);

  echo '<section class="bg" style="background-image: url(' . $bg . ');"></section>';
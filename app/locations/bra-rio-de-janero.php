<?php
	$pageTitle = "Rio De Janero";
	
	include('index.php');

  $dir = "../../img/locations/bra-rio-de-janero/*";

	$matching = mysqli_query($con, "select * from places Where code='bra-rio-de-janero'");
	  while (($row = mysqli_fetch_array($matching))) {
		  $match[] = $row;
	  }

	echo '<div class="result-wrap">';
	  foreach ($match as $oneMatch) {
	  	echo "<h1>$oneMatch[name]</h1>";
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
<?php
	$pageTitle = "Quiz";
	include('/home/a9999905/public_html/app/config.php');
	include('/home/a9999905/public_html/app/quiz-header.php');

	$party = trim($_POST['party']);
	$family = trim($_POST['family']);
	
	$match = array();
	$parties = array();
	
	$matching = mysqli_query($con, "select * from places Where party='$party' AND family='$family'");
	  while (($row = mysqli_fetch_array($matching))) {
		  $match[] = $row;
	  }
?>

<aside class="results-page-left">
	<?php 
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
</aside>

<section class="results-page-right">
	<div class="map-wrap">
		<div id="map"></div>
	</div>

	<div id='zoomlens'>
    <div class='overlay rotater'>
        <div class='overlay rotater'>
            <div id='zoommap' class='overlay'></div>
        </div>
    </div>
    <div id='border'></div>
	</div>
</section>

<?php include('/home/a9999905/public_html/app/quiz-footer.php') ?>
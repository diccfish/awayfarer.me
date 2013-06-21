<?php
	$pageTitle = "Quiz";
	include('config.php');
	include('header.php');
	include('../db/index.php');
?>

<aside class="results-page-left">
	<?php include('../db/results.php');	?>
</aside>

<section class="results-page-right">
	<div class="map-wrap">
		<div id="map"></div>
	</div>
</section>

<script>
	//sets the bitch ass shit from the god dam database, rest of it is in scripts.js
	var geoJson = [
		<?php 
		foreach($allmatches as $oneMatch) { ?>
			{
			type: 'Feature',
			"geometry": { "type" : "Point", "coordinates" : [<?php print_r($oneMatch['coordinates']); ?>] },
			"properties" : {
		        "id" : "<?php print_r($oneMatch['code']); ?>",
				"url": "../app/locations/<?php print_r($oneMatch['code']); ?>.php",
		        "image" : '<?php echo("../img/$oneMatch[code]/thumb.jpg"); ?> ',
				"marker-symbol": "harbor",
		        "city": "<?php print_r($oneMatch['name']); ?>"
		    	}
		  	},
	  <?php } ?>
	 ];
</script>

<?php include('footer.php') ?>
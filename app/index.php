<?php
	$pageTitle = "Travel";
	include( 'header.php');
?>

<div id="container">
		
		<section class="breadcrumbs">
			<a href="#stage1"></a>
			<a href="#stage2"></a>
			<a href="#stage3"></a>
			<a href="#stage4"></a>
		</section>

	<div id="stage1">
		<section class="main">
			<h1>Travel</h1>
			  <form id="form" method="post" action="quiz.php">
					<h2>Who is going on this trip?</h2>
						<label>
							<input type="radio" class="romance" name="romance" value="4" onClick="getresults();">
								<i class="icon-heart"></i>
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="3" onClick="getresults();">
								Family 
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="2" onClick="getresults();">
								Mellow friends
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="1" onClick="getresults();">
								Party animals
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="0" onClick="getresults();">
								Just trying to get laid
						</label>
		</section>
		
		<a href="#stage2" class="next">Next</a>  
	</div>
	
	<div id="stage2">
	    <section class="main">
			<h2>You Want Adventure?</h2>
				<label>
					<input type="radio" class="adventure" name="adventure" value="4" onClick="getresults();"> I hate anything indoors
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="3" onClick="getresults();"> Hell yea
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="2" onClick="getresults();"> Maybe when i am drunk
				</label>
				<label>
					<input type="radio" class="adventure" name="adventure" value="1" onClick="getresults();"> uhhhh, yuck
				</label>
				<label>
					<input type="radio" class="adventure" name="adventure" value="0" onClick="getresults();"> I hate anything outdoors
				</label>				
	    </section>
	    
	    <a href="#stage1" class="back">Back</a>
	    <a class="show-current-results" ></a>
	    <a href="#stage3" class="next">Next</a>  
	</div>
	  
	<div id="stage3">
	    <section class="main">
		  	<h2>What kinda weather?</h2>
		  		<label class="climate-icon hot i-sun">
		  			<input type="radio" class="weather" name="weather" value="hot" onClick="getresults();">
		  		</label>
		  		<label class="climate-icon warm i-sun">
		  			<input type="radio" class="weather" name="weather" value="warm" onClick="getresults();">
		  		</label>
		  		<label class="climate-icon mild i-basecloud">
		  			<span class="i-sunny"></span>
		  			<input type="radio" class="weather" name="weather" value="mild" onClick="getresults();">
		  		</label>
		  		<label class="climate-icon snow i-basecloud">
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  			<input type="radio" class="weather" name="weather" value="cool" onClick="getresults();">
		  		</label>
		  		<label class="climate-icon cold i-windysnowcloud">
		  				<span class="i-windysnow"></span>
		  			<input type="radio" class="weather" name="weather" value="cold" onClick="getresults();">
		  		</label>
	    </section>
	    
	    <a href="#stage2" class="back">Back</a>
	    <a class="show-current-results"></a>
	    <a href="#stage4" class="next">Next</a>  
	</div>
	
	<div id="stage4">
	    <section class="main">
	    	<h2>What is your budget?</h2>
				<label>
					<input type="radio" class="budget" name="budget" value="4" onClick="getresults();"> HA, budget, mmm yesss budget, haha
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="3" onClick="getresults();"> I have saved up a bunch
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="2" onClick="getresults();"> middle class family vacation
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="1" onClick="getresults();"> cheaper is better
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="0" onClick="getresults();"> hostels are a must
				</label>
				
			<input type="submit" formaction="quiz.php" class="btn">
			</form>
	    </section>
	    
	    
	    <a href="#stage3" class="back">Back</a>
	    <a class="show-current-results"></a>
	</div>

	<section id="current-results">
		<div id="current-results-map-wrap"></div>
	</section>

</div>

<?php include('footer.php') ?>
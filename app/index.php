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
			<a href="#stage5"></a>
			<a href="#stage6"></a>
			<a href="#stage7"></a>
			<a href="#stage8"></a>
		</section>

	<div id="stage1">
		<section class="main">
			<h1>Travel</h1>
			  <form id="form" method="post" action="quiz.php">
					<h2>Romance</h2>
						<label>
							<input type="radio" class="romance" name="romance" value="4">
								4
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="3">
								3 
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="2">
								2
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="1">
								1
						</label>
						<label>
							<input type="radio" class="romance" name="romance" value="0">
								0
						</label>
		</section>
		
		<a href="#stage2" class="next"></a>  
	</div>
	
	<div id="stage2">
	    <section class="main">
			<h2>Adventure</h2>
				<label>
						<input type="radio" class="adventure" name="adventure" value="4">
						4
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="3">
						3
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="2">
						2
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="1">
						1
				</label>
				<label>
						<input type="radio" class="adventure" name="adventure" value="0">
						0
				</label>				
	    </section>
	    
	    <a href="#stage1" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage3" class="next"></a>  
	</div>
	  
	<div id="stage3">
	    <section class="main">
		  	<h2>Weather</h2>
		  		<label class="climate-icon hot i-sun">
		  			<input type="radio" class="weather" name="weather" value="hot">
		  			hot
		  		</label>
		  		<label class="climate-icon warm i-sun">
		  			<input type="radio" class="weather" name="weather" value="warm">
		  			warm
		  		</label>
		  		<label class="climate-icon mild i-basecloud">
		  			<span class="i-sunny"></span>
		  			<input type="radio" class="weather" name="weather" value="mild">
		  		</label>
		  		<label class="climate-icon snow i-basecloud">
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  				<span class="i-frosty"></span>
		  			<input type="radio" class="weather" name="weather" value="cool">
		  			cool
		  		</label>
		  		<label class="climate-icon cold i-windysnowcloud">
		  				<span class="i-windysnow"></span>
		  			<input type="radio" class="weather" name="weather" value="cold">
		  		</label>
	    </section>
	    
	    <a href="#stage2" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage4" class="next"></a>  
	</div>
	
	<div id="stage4">
	    <section class="main">
	    	<h2>Budget</h2>
				<label>
					<input type="radio" class="budget" name="budget" value="4">
					4
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="3">
					3
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="2">
					2
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="1">
					1
				</label>
				<label>
					<input type="radio" class="budget" name="budget" value="0">
					0
				</label>			
	    </section>
	    
	    <a href="#stage3" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage5" class="next"></a>  
	</div>
	
	<div id="stage5">
	    <section class="main">
	    	<h2>Metropolis</h2>
				<label>
					<input type="radio" class="metropolis" name="metropolis" value="4">
					4
				</label>
				<label>
					<input type="radio" class="metropolis" name="metropolis" value="3">
					3
				</label>
				<label>
					<input type="radio" class="metropolis" name="metropolis" value="2">
					2
				</label>
				<label>
					<input type="radio" class="metropolis" name="metropolis" value="1">
					1
				</label>
				<label>
					<input type="radio" class="metropolis" name="metropolis" value="0">
					0
				</label>			
	    </section>
	    
	    <a href="#stage4" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage6" class="next"></a>  
	</div>
	
	<div id="stage6">
	    <section class="main">
	    	<h2>historical</h2>
				<label>
					<input type="radio" class="historical" name="historical" value="4">
					4
				</label>
				<label>
					<input type="radio" class="historical" name="historical" value="3">
					3
				</label>
				<label>
					<input type="radio" class="historical" name="historical" value="2">
					2
				</label>
				<label>
					<input type="radio" class="historical" name="historical" value="1">
					1
				</label>
				<label>
					<input type="radio" class="historical" name="historical" value="0">
					0
				</label>
			</section>
	    
	    <a href="#stage5" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage7" class="next"></a>  
	</div>
	
	<div id="stage7">
	    <section class="main">
	    	<h2>population</h2>
				<label>
					<input type="radio" class="population" name="population" value="4">
					4
				</label>
				<label>
					<input type="radio" class="population" name="population" value="3">
					3
				</label>
				<label>
					<input type="radio" class="population" name="population" value="2">
					2
				</label>
				<label>
					<input type="radio" class="population" name="population" value="1">
					1
				</label>
				<label>
					<input type="radio" class="population" name="population" value="0">
					0
				</label>
			</section>
	    
	    <a href="#stage6" class="back"></a>
	    <a class="show-current-results"></a>
	    <a href="#stage8" class="next"></a>  
	</div>
	
	<div id="stage8">
	    <section class="main">
			<input type="submit" formaction="quiz.php" class="btn">
			</form>
	    </section>
	    <a href="#stage7" class="back"></a>
	</div>

	<section id="current-results">
		<div id="current-results-map-wrap"></div>
	</section>

</div>

<?php include('footer.php') ?>
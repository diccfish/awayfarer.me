<?php
	$pageTitle = "Travel";
	$section = "home";
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
			<h1>Travel</h1>
		<section class="main">
		    	<form id="form" method="post" action="quiz.php">
					<h2>Who is going on this trip?</h2>
							<label>
								<input type="radio" class="party" name="party" value="yes" onClick="getresults()">A lover
							</label>
							<label>
								<input type="radio" class="party" name="party" value="no" onClick="getresults()">It's a family affair 
							</label>
							<label>
								<input type="radio" class="party" name="party" value="no" onClick="getresults()">Some mellow friends
							</label>
							<label>
								<input type="radio" class="party" name="party" value="no" onClick="getresults()">Party animals
							</label>
							<label>
								<input type="radio" class="party" name="party" value="no" onClick="getresults()">Just trying to get laid
							</label>
					<h2>Neato Graphics, no burritos</h2>
		</section>
		
		<a href="#stage2" class="next">Next</a>  
	</div>
	
	<div id="stage2">
	    <section class="main">
			<h2>Who is going on this trip?</h2>
				<label>
					<input type="radio" class="family" name="family" value="yes" onClick="getresults()"> A lover
				</label>
				<label>
						<input type="radio" class="family" name="family" value="no" onClick="getresults()"> Some mellow friends
				</label>
				<label>
						<input type="radio" class="family" name="family" value="no" onClick="getresults()"> Party animals
				</label>
				<label>
					<input type="radio" class="family" name="family" value="no" onClick="getresults()"> It's a family affair
				</label>
				<label>
					<input type="radio" class="family" name="family" value="no" onClick="getresults()"> It does not matter to me
				</label>				
	    </section>

	  	<input type="submit" formaction="quiz.php" class="btn">
	    
	    <a href="#stage1" class="back">Back</a>
	    <a class="show-current-results" ></a>
	    <a href="#stage3" class="next">Next</a>  
	</div>
	  
	<div id="stage3">
	    <section class="main">
		  	<h2>What kinda weather?</h2>
		  		<label class="climate-icon">
		  			<?php include('sun.svg'); ?>
		  			<input type="radio">
		  		</label>
		  		<label class="climate-icon snow">
		  			<?php include('snow.svg'); ?>
		  				<i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
	  				<input type="radio">
		  		</label>
		  		<label class="climate-icon hot">
		  			<?php include('sun.svg'); ?>
		  			<input type="radio">
		  		</label>
		  		<label class="climate-icon freeze">
		  			<?php include('sun.svg'); ?>
		  			<i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
		  			<input type="radio">
		  		</label>
		  		<label class="climate-icon">
		  			<?php include('sun.svg'); ?>
		  			<input type="radio">
		  		</label>
	    </section>
	    
	    <a href="#stage2" class="back">Back</a>
	    <a class="show-current-results"></a>
	    <a href="#stage4" class="next">Next</a>  
	</div>
	
	<div id="stage4">
	    <section class="full">
	    	<h2>If you had to pick one, what would it be?</h2>
				<label>
					<input type="radio" name="fall">
				</label>
				<label>
					<input type="radio" name="fall">
				</label>
				<label>
					<input type="radio" name="fall">
				</label>
				<label>
					<input type="radio" name="fall">
				</label>
				<label>
					<input type="radio" name="fall">
				</label>
			</form>
	    </section>
	    
	    <a href="#stage3" class="back">Back</a>
	    <a class="show-current-results"></a>
	    <a href="#stage5" class="next">Next</a>  
	</div>

	
	<section id="current-results">
		<div id="current-results-map-wrap"></div>
	</section>

</div>

<?php include('/home/a9999905/public_html/app/footer.php') ?>
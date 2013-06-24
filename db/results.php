<?php
	// Perfect Match
	if(isset($match)) {
		echo '<div class="match">';
		  foreach($match as $result) {
		  	echo "<div class='first'><i class='icon-star'></i><a href='locations/$result[code].php' rel='prefetch' target='_blank'>$result[name]</a></div>";
		  }
	  echo '</div>';
	}
	
	// Finding all the matches
 	if (isset($allmatches)) {
 		echo '<div class="allmatch">';

 		foreach($allmatches as $result) {
 			
 			// Match at least Six
			if ( 
				( $result['romance'] == $romance AND $result['adventure'] == $adventure AND $result['weather'] == $weather AND $result['budget'] == $budget AND $result['metropolis'] == $metropolis AND ( $result['historical'] == $historical || $result['population'] == $population ) )
				OR 
				( $result['romance'] == $romance AND $result['adventure'] == $adventure AND $result['weather'] == $weather AND $result['population'] == $population AND $result['historical'] == $historical AND ( $result['metropolis'] == $metropolis || $result['budget'] == $budget ) )
				OR 
				( $result['romance'] == $romance AND $result['adventure'] == $adventure AND $result['weather'] == $weather AND $result['metropolis'] == $metropolis AND $result['historical'] == $historical AND ( $result['population'] == $population || $result['budget'] == $budget ) )
				OR 
				( $result['romance'] == $romance AND $result['population'] == $population AND $result['budget'] == $budget AND $result['metropolis'] == $metropolis AND $result['historical'] == $historical AND ( $result['weather'] == $weather || $result['adventure'] == $adventure ) )
				OR 
				( $result['adventure'] == $adventure AND $result['weather'] == $weather AND $result['budget'] == $budget AND $result['metropolis'] == $metropolis AND $result['historical'] == $historical AND ( $result['romance'] == $romance || $result['population'] == $population ) )
				OR 
				( $result['adventure'] == $adventure AND $result['historical'] == $historical AND $result['weather'] == $weather AND $result['population'] == $population AND $result['budget'] == $budget AND ( $result['romance'] == $romance || $result['metropolis'] == $metropolis ) )
				OR 
				( $result['adventure'] == $adventure AND $result['historical'] == $historical AND $result['weather'] == $weather AND $result['population'] == $population AND $result['metropolis'] == $metropolis AND ( $result['romance'] == $romance || $result['budget'] == $budget ) )
				OR 
				( $result['adventure'] == $adventure AND $result['population'] == $population AND $result['budget'] == $budget AND $result['population'] == $population AND $result['metropolis'] == $metropolis AND ( $result['romance'] == $romance || $result['weather'] == $weather ) )
				OR 
				( $result['adventure'] == $adventure AND $result['budget'] == $budget AND $result['weather'] == $weather AND $result['population'] == $population AND $result['metropolis'] == $metropolis AND ( $result['romance'] == $romance || $result['historical'] == $historical ) )
				OR 
				( $result['historical'] == $historical AND $result['budget'] == $budget AND $result['weather'] == $weather AND $result['population'] == $population AND $result['metropolis'] == $metropolis AND ( $result['romance'] == $romance || $result['adventure'] == $adventure ) ) )
				{
					echo "<div class='six'><i class='icon-smile'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
			}
 			 			
	  		// Match at least Two
	  		elseif ( ( $result['romance'] == $romance AND ( $result['adventure'] == $adventure || $result['weather'] == $weather || $result['budget'] == $budget || $result['metropolis'] == $metropolis || $result['historical'] == $historical || $result['population'] == $population ) ) 
	  				OR
	  				( $result['adventure'] == $adventure AND ( $result['weather'] == $weather || $result['budget'] == $budget || $result['metropolis'] == $metropolis || $result['historical'] == $historical || $result['population'] == $population ) )
	  				OR
	  				( $result['weather'] == $weather AND ( $result['budget'] == $budget || $result['metropolis'] == $metropolis || $result['historical'] == $historical || $result['population'] == $population ) )
	  				OR
	  				( $result['budget'] == $budget AND ( $result['metropolis'] == $metropolis || $result['historical'] == $historical || $result['population'] == $population ) )
	  				OR
	  				( $result['metropolis'] == $metropolis AND ( $result['historical'] == $historical || $result['population'] == $population ) )
	  				OR
	  				( $result['historical'] == $historical AND $result['population'] == $population ) )
	  				{
		  				echo "<div class='two'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  	} 
		  	
		  	// Match One
	  		elseif ( 	( $result['romance'] == $romance ) 
	  					OR 
	  					( $result['adventure'] == $adventure )
	  					OR
	  					( $result['weather'] == $weather )
	  					OR
	  					( $result['budget'] == $budget )
	  					OR
	  					( $result['metropolis'] == $metropolis ) 
	  					OR
	  					( $result['historical'] == $historical ) 
	  					OR
	  					( $result['population'] == $population ) ) 
	  				{
		  				echo "<div class='one'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  	} 
  		}
		echo '</div>';
 	}
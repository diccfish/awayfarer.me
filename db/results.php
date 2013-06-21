<?php

	if(isset($match)) {
		echo '<div class="match">';
		  foreach($match as $result) {
		  	echo "<div class='first'><i class='icon-smile'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  }
	  echo '</div>';
	}

	// Finding all the matches
 	if (isset($allmatches)) {
 		echo '<div class="allmatch">';

 		foreach($allmatches as $result) {
 			// Match 3 answers (romance, adventure, weather)
 			if($result['romance'] == $romance AND $result['adventure'] == $adventure AND $result['weather'] == $weather) {
		  	echo "<div class='three'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
 			}
 			// Match 3 answers (romance, adventure, weather)
 			elseif($result['romance'] == $romance AND $result['adventure'] == $adventure AND $result['budget'] == $budget) {
		  	echo "<div class='three'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
	  	}
	  	// Match 3 answers (romance, weather, budget)
	  	elseif($result['romance'] == $romance AND $result['weather'] == $weather AND $result['budget'] == $budget) {
		  	echo "<div class='three'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
	 	  }
	 	  // Match 3 answers (adventure, weather, budget)
	  	elseif($result['adventure'] == $adventure AND $result['weather'] == $weather AND $result['budget'] == $budget) {
		  	echo "<div class='three'><i class='icon-meh'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
	  	}
	  		// Match 2 answers (one is romance)
	  		elseif(($result['romance'] == $romance AND $result['adventure'] == $adventure) || ($result['romance'] == $romance AND $result['weather'] == $weather) || ($result['romance'] == $romance AND $result['budget'] == $budget)) {
			  	echo "<div class='two'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  	} 
		  	
	  		// Match 2 answers (one is adventure)
		  	elseif(($result['adventure'] == $adventure AND $result['weather'] == $weather) || ($result['adventure'] == $adventure AND $result['budget'] == $budget)) {
			  	echo "<div class='two'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  	}

		  	// Match 2 answers (one is weather)
		  	elseif(($result['weather'] == $weather AND $result['budget'] == $budget)) {
			  	echo "<div class='two'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
		  	}

			  	// Match Romance
		  		elseif($result['romance'] == $romance) {
				  	echo "<div class='one'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
			  	} 
			  	
		  		// Match Adventure
			  	elseif($result['adventure'] == $adventure) {
				  	echo "<div class='one'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
			  	}

			  	// Match Weather
			  	elseif($result['weather'] == $weather) {
				  	echo "<div class='one'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
			  	}

			  	// Match Budget
			  	elseif($result['budget'] == $budget) {
				  	echo "<div class='one'><i class='icon-frown'></i><a href='locations/$result[code].php' target='_blank'>$result[name]</a></div>";
			  	}
  		}
		echo '</div>';
 	}
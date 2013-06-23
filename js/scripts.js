// Me Scripts
  
  // Swipe Events
  $(function(){
	  $('#stage1').on( 'swipeleft', swipeleftHandler );
	 	
	 	function swipeleftHandler(event){
	    $(event.target).scrollTo( '#stage2' );
	  }
	});

  // Checks for mobile to remove overflow
  var width = $(window).width();
    if (width < 685) {
      $('body').css( {'overflow-x' : 'auto', 'overflow-y' : 'scroll' } );
    }
    else {
      $('body').css( {'overflow-x' : 'auto', 'overflow-y' : 'hidden'} );
    }

	// Current results div up
	$('.show-current-results').click( function() {
        $('.show-current-results').toggleClass('close-current-results');
        $('#current-results').toggleClass('current-results-open');
        $('#container > div').toggleClass('container-up');        
        return false;
    });
    
	  // get current results data
	  function getresults() {
	    var romance = $('.romance:checked').val();
	    var adventure = $('.adventure:checked').val();
	    var weather = $('.weather:checked').val();
	    var budget = $('.budget:checked').val();
	    var metropolis = $('.metropolis:checked').val();
	    var historical = $('.historical:checked').val();
	    var population = $('.population:checked').val();
	
	    $.ajax({
	      type: 'Post',
	      url: 'current.php',
	      data: {romance:romance, adventure:adventure, weather:weather, budget:budget, metropolis:metropolis, historical:historical, population:population}
	    }).done( function(result) {
	      $('#current-results-map-wrap').html(result);
	    });
	  }
	  
	  // run getresults function
	  $('input[type=radio]').on( 'click', function() {
	  	getresults();
	  	return;
	  });

	// Full Screen Shit
	$('#container').fullContent({ 
	  stages: 'div', 
	  mapPosition: [ {v: 1, h: 1}, {v: 1, h: 2}, {v: 1, h: 3}, {v: 1, h: 4}, {v: 1, h: 5}, {v: 1, h: 6}, {v: 1, h: 7}, {v: 1, h: 8} ], 
	  stageStart: 0, 
	  speedTransition: 500, 
	  idComplement: '_page' 
	});

	// Showing that mother fucking map 
		 // ramp up dat map
		 var map = L.mapbox.map('map', 'diccfish.map-uvbdj3pk');
		
		 map.markerLayer.setGeoJSON(geoJson);
	
		 map.markerLayer.on('ready', function(e) {
	       this.eachLayer(function(marker) {
	
	        var feature = marker.feature;
	
	        // Create custom popup shit
	        var popupContent =  '<a target="_blank" class="popup" href="' + feature.properties.url + '">' +
												'<img src="' + feature.properties.image + '">' +
												'<h3>' + feature.properties.city + '</h3>' +
											'</a>';
	
	        // this be from http://leafletjs.com/reference.html#popup
	        marker.bindPopup(popupContent,{
	            closeButton: true,
	            minWidth: 200
	        });
	
	    });
	  });
	
	// setting the default map geo coords and worldly view
    map.setView( [40, 0], 2);


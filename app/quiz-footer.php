<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
	var geoJson = [
		<?php foreach($match as $oneMatch) { ?>
			{
			type: 'Feature',
			"geometry": { "type" : "Point", "coordinates" : [<?php print_r($oneMatch['coordinates']); ?>] },
			"properties" : {
        "id" : "<?php print_r($oneMatch['code']); ?>",
				"url": "../app/locations/<?php print_r($oneMatch['code']); ?>.php",
        "image" : "../img/map-pin-yellow.png",
	      "marker-symbol": "harbor",
	      "city": "<?php print_r($oneMatch['name']); ?>"
	    	}
	  	},
	  <?php } ?>
  ];

  var map = L.mapbox.map('map', 'diccfish.map-uvbdj3pk');

	map.markerLayer.setGeoJSON(geoJson);

	map.markerLayer.on('ready', function(e) {
    this.eachLayer(function(marker) {

        var feature = marker.feature;

        // Create custom popup content
        var popupContent =  '<a target="_blank" class="popup" href="' + feature.properties.url + '">' +
                                '<img src="' + feature.properties.image + '">' +
                            '   <h2>' + feature.properties.city + '</h2>' +
                            '</a>';

        // http://leafletjs.com/reference.html#popup
        marker.bindPopup(popupContent,{
            closeButton: true,
            minWidth: 300
        });

    });
  });

  map.setView( [40, 0], 2);

  var zoommap = L.mapbox.map('zoommap', 'diccfish.map-a6ek3t3v', {
    fadeAnimation: false,
    zoomControl: false,
    attributionControl: false
  });

  var zl = document.getElementById('zoomlens');

  map.on('hover', update);
  map.on('zoomend', zoom);

  function zoom(e) {
      if (zoommap._loaded) zoommap.setZoom(e.target.getZoom() + 2);
  }

  function update(e) {
      zl.style.top = ~~e.containerPoint.y - -20 + 'px';
      zl.style.left = ~~e.containerPoint.x - -35 + 'px';
      zoommap.setView(e.latlng, map.getZoom() + 2, true);
  }
</script>
</body>
</html>
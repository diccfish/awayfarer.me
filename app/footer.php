
<div class="footer">

	<div class="wrapper">

		
	</div>

</div>

<script src="/js/scrollTo.js"></script>
<script src="/js/fullContent.js"></script>
<script>
	$('.show-current-results').click( function() {
        $('.show-current-results').toggleClass('close-current-results');
        $('#current-results').toggleClass('current-results-open');
        $('#container > div').toggleClass('container-up');        
        return false;
    });

  function getresults() {
    var party = $('.party:checked').val();
    var family = $('.family:checked').val();

    $.ajax({
      type: 'Post',
      url: 'current.php',
      data: {party:party, family:family}
    }).done( function(result) {
      $('#current-results-map-wrap').html(result);
    });
  }
</script>
<script>
$('#container').fullContent({ 
  stages: 'div', 
  mapPosition: [{v: 1, h: 1}, {v: 1, h: 2}, {v: 1, h: 3}, {v: 1, h: 4}], 
  stageStart: 0, 
  speedTransition: 500, 
  idComplement: '_page' 
});
</script>
<script>
  var width = $(window).width();
    if (width < 685) {
      $('body').css('overflow-x', 'auto');
    }
    else {
      $('body').css({'overflow-x' : 'hidden', 'overflow-y' : 'hidden'});
    }
</script>
<script>
  var map = L.mapbox.map('map', 'diccfish.map-uvbdj3pk');
  	map.setView( [40, 0], 2);
</script>
</body>
</html>
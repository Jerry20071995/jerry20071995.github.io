
 $(function(){

    var $container = $('#container');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.box'
      });
    });
  
  });

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
	$('.bar .fa').click(function() {
		$('.category_menu').toggle('slow');	
	    if ($('.wapper').hasClass("marleft180")) {
	    	$('.wapper').removeClass('marleft180');
	    }else {
	    	$('.wapper').addClass('marleft180');
	    }
	});

}

$( ".nut_search i" ).click(function() {
  $( ".search_view" ).toggle( "slow", function() {
    // Animation complete.
  });
});
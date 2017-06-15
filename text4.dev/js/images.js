
 $(function(){

    var $container = $('#container');
  
    $container.imagesLoaded( function(){
      $container.masonry({
        itemSelector : '.box'
      });
    });
  
  });

$( ".nut_search i" ).click(function() {
  $( ".search_view" ).toggle( "slow", function() {
    // Animation complete.
  });
});
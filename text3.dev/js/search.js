$( ".nut_search" ).click(function() {
  $( ".search_view" ).toggle( "slow", function() {
    $(".nut_search a").addClass("intro");
  });
});
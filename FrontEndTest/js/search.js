$( '.search-toggler .fa' ).click(function() {
  $( '.search_view').show( "swing", function() {
  });
});
$( '.form-search .fa-times' ).click(function() {
  $( '.search_view').hide( "fast", function() {
  });
});

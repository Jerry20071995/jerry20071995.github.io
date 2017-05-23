jQuery(document).ready(function($) {
  $('.fadeOut').owlCarousel({
    items: 1,
    animateOut: 'fadeOut',
    loop: true,
    margin: 10,
  });
  $('.custom1').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInX',
    items: 3,
    margin: 30,
    stagePadding: 30,
    smartSpeed: 450
  });
});

jQuery(document).ready(function() {

      var owl = $("#detail-demo");

      owl.owlCarousel({

      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0;
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      
      });

      // Custom Navigation Events
      $(".right").click(function(){
        owl.trigger('owl.next');
      })
      $(".left").click(function(){
        owl.trigger('owl.prev');
      })

    });
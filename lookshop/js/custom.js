if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
  $(document).ready(function() {

      var owl = $(".owl-carousel");

      owl.owlCarousel({
      loop:true,
      center:false,
      nav:true,
      navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      margin:10,
      items : 6, //10 items above 1000px browser width
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:6
          }
      }
      
      });
  });
}else{
  $(document).ready(function() {

      var owl = $(".owl-carousel");

      owl.owlCarousel({
      loop:true,
      center:true,
      nav:true,
      navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      margin:10,
      items : 6, //10 items above 1000px browser width
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:6
          }
      }
      
      });
  });
}

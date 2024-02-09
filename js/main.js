$(document).ready(function(){
    // $(".owl-carousel").owlCarousel();

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true
    });
    $('.carousel').carousel({
        interval: 2000
      })
      $(window).on('scroll', function(){
        if($(window).scrollTop()){
    
            $('#header_area').css('box-shadow','rgba(99, 99, 99, 0.2) 0px 2px 8px 0px')
            
    
            
        }else{
            $('#header_area').css('box-shadow','')
            
    
        }
    });
  });
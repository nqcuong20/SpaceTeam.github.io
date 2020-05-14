$(document).ready(function () {


    // Code sẽ viết ở đây
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
          $('.back-to-top').fadeIn('slow');
        } 
        else {
          $('.back-to-top').fadeOut('slow');
        }
      });
    
      $('.back-to-top').click(function() {
        
        console.log("uc");
        $('html, body').animate({
            
          scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
      });
// SẢN PHẨM NỔI BẬT
$(document).ready(function() {

  $(".owl-carousel").owlCarousel({
  
  autoPlay: 3000,
  items : 4,
  itemsDesktop : [1199,3],
  itemsDesktopSmall : [979,3],
  center: true,
  nav:true,
  loop:true,
  responsive: {
  600: {
  items: 4
  }
  }
  
  
  
  
  
  
  });
  
  });
      

    $(function(){

        $("#exzoom").exzoom({
      
          // thumbnail nav options
          "navWidth": 60,
          "navHeight": 60,
          "navItemNum": 5,
          "navItemMargin": 7,
          "navBorder": 1,
      
          // autoplay
          "autoPlay": true,
      
          // autoplay interval in milliseconds
          "autoPlayTimeout": 2000
          
        });
      
      });

    // button  TĂNG GIẢM GIÁ TRị
    // FIX COL-9 --> COL 12
    
    
});



$(document).ready(function () {
    // Code sẽ viết ở đây
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
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
      
});
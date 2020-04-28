$(document).ready(function () {
    // Code sẽ viết ở đây
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $('.back-to-top').fadeIn('slow');
        } 
        else {
          $('.back-to-top').fadeOut('slow');
        }
      });//hàm này là nó cho cái đó nó khi hạ dưới 100px thì hiển thị
    
      $('.back-to-top').click(function() {
        
        console.log("uc");
        $('html, body').animate({
            
          scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
      });

      
});
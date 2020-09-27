//Modified version of
//https://codepen.io/bravotanmoy/pen/zBNPYV

jQuery(document).ready(function($){

  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('nav').outerHeight();

  $('.sticky-nav').css("display", "none");

  $(window).scroll(function(event){
      didScroll = true;
  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);

  function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
          return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('.sticky-nav').addClass('nav-up');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('.sticky-nav').addClass('sticky').removeClass('nav-up').css("display", "block");
          }
          // Disappear once we get back to the top
          if($(window).scrollTop() < navbarHeight) {
            $('.sticky-nav').removeClass('sticky').css("display", "none");
          }
      }

      lastScrollTop = st;
  }

});

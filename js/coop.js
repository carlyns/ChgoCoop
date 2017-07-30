
// toggle mobile menu on click
$(".icon-menu").click(function() {
  $(".menu-mobile").toggle({duration: 500});
  $(".icon-menu").toggleClass( "invertcolors" );
});


//FIXED BANNER FADE IN ON SCROLL
// from this thread: https://jsfiddle.net/tcloninger/e5qaD/  and  http://www.ordinarycoder.com/jquery-fade-content-scroll/

$(window).scroll( function (){

  if ( $(window).scrollTop() > 200 ) {
    $(".showonscrolldown").fadeIn(500)
    // don't even need this: !!  .css("display","block");
    // bc fadeIn takes care of it!
  }
  else
  {
    $(".showonscrolldown").fadeOut(500);
  }

} );



// SMOOTH SCROLLING TO ANCHORS ON PAGE
// snippet from https://css-tricks.com/snippets/jquery/smooth-scrolling/
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


$(document).ready(main);

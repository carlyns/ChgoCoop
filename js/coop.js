var main = function() {


// TOGGLING THE MENU ICON -- off for now
/*
$(".icon-menu").click(function() {
    $(".menu").toggle();
  });
}
*/




// TRYING TO SLIDE THE MENU IN FROM THE RIGHT on click
$(".icon-menu").click(function() {
    $(".menu").animate({right: "-30px"});
    $(".icon-rocket").toggle({duration: 500});
  });

// TRYING TO SLIDE THE MENU IN FROM THE RIGHT on click
$(".icon-rocket").click(function() {
    $(".menu").animate({right: "-350px"});
    $(".icon-rocket").toggle({duration: 500});
  });



}

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


// HIDE TOPBAR (INLUDING NAV) AFTER TWO SECONDS, ONLY ON MOBILE???

// ALSO HIDE IT (INLUDING NAV) ON CLICK OF NAV.



$(document).ready(main);

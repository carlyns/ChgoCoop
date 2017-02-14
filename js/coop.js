// TOGGLING THE MENU ICON -- off for now
/*
$(".icon-menu").click(function() {
    $(".menu").toggle();
  });
}
*/


// TRYING TO SLIDE THE MENU IN FROM THE RIGHT on click
$(".icon-menu").click(function() {
  $(".menu-mobile").toggle({duration: 500});
});

// FIXED BAR ON SCROLL, works but not smooth
// var headerTopOffset = $(".topexplore").offset().top;
// $(window).scroll(function () {
//
//   if ($(window).scrollTop() > headerTopOffset) {
//     $(".topexplore").addClass("fixedbar");
//   }
//   else {
//     $(".topexplore").removeClass("fixedbar");
//   }
// });

//FIXED BAR FADE IN ON SCROLL
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




// CURATED PAGES: TOGGLE BETWEEN STEPS ON DESKTOP

// start off with Step 1 displayed
$(".desktopcontent1").addClass("showdesktopstep");
$(".step1").addClass("active-tab");
$(".step1 .stepicon").addClass("active-step");

var allButDesktop1 = ".desktopcontent2, .desktopcontent3, .desktopcontent4, .desktopcontent5";
var allButDesktop2 = ".desktopcontent1, .desktopcontent3, .desktopcontent4, .desktopcontent5";
var allButDesktop3 = ".desktopcontent1, .desktopcontent2, .desktopcontent4, .desktopcontent5";
var allButDesktop4 = ".desktopcontent1, .desktopcontent2, .desktopcontent3, .desktopcontent5";
var allButDesktop5 = ".desktopcontent1, .desktopcontent2, .desktopcontent3, .desktopcontent4";

var allButStep1 = ".step2, .step3, .step4, .step5";
var allButStep2 = ".step1, .step3, .step4, .step5";
var allButStep3 = ".step1, .step2, .step4, .step5";
var allButStep4 = ".step1, .step2, .step3, .step5";
var allButStep5 = ".step1, .step2, .step3, .step4";

var allButStepicon1 = ".step2 .stepicon, .step3 .stepicon, .step4 .stepicon, .step5 .stepicon";
var allButStepicon2 = ".step1 .stepicon, .step3 .stepicon, .step4 .stepicon, .step5 .stepicon";
var allButStepicon3 = ".step1 .stepicon, .step2 .stepicon, .step4 .stepicon, .step5 .stepicon";
var allButStepicon4 = ".step1 .stepicon, .step2 .stepicon, .step3 .stepicon, .step5 .stepicon";
var allButStepicon5 = ".step1 .stepicon, .step2 .stepicon, .step3 .stepicon, .step4 .stepicon";


$(".step1").click(function() {
  $(allButDesktop1).removeClass("showdesktopstep");
  $(".desktopcontent1").addClass("showdesktopstep");
  $(".step1").addClass("active-tab");
  $(allButStep1).removeClass("active-tab");
  $(".step1 .stepicon").addClass("active-step");
  $(allButStepicon1).removeClass("active-step");

});
$(".step2").click(function() {
  $(allButDesktop2).removeClass("showdesktopstep");
  $(".desktopcontent2").addClass("showdesktopstep");
  $(".step2").addClass("active-tab");
  $(allButStep2).removeClass("active-tab");
  $(".step2 .stepicon").addClass("active-step");
  $(allButStepicon2).removeClass("active-step");

});
$(".step3").click(function() {
  $(allButDesktop3).removeClass("showdesktopstep");
  $(".desktopcontent3").addClass("showdesktopstep");
  $(".step3").addClass("active-tab");
  $(allButStep3).removeClass("active-tab");
  $(".step3 .stepicon").addClass("active-step");
  $(allButStepicon3).removeClass("active-step");

});
$(".step4").click(function() {
  $(allButDesktop4).removeClass("showdesktopstep");
  $(".desktopcontent4").addClass("showdesktopstep");
  $(".step4").addClass("active-tab");
  $(allButStep4).removeClass("active-tab");
  $(".step4 .stepicon").addClass("active-step");
  $(allButStepicon4).removeClass("active-step");

});
$(".step5").click(function() {
  $(allButDesktop5).removeClass("showdesktopstep");
  $(".desktopcontent5").addClass("showdesktopstep");
  $(".step5").addClass("active-tab");
  $(allButStep5).removeClass("active-tab");
  $(".step5 .stepicon").addClass("active-step");
  $(allButStepicon5).removeClass("active-step");

});


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

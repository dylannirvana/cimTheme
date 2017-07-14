// hello
jQuery(function($) {
  console.log('Hello from custom scripts');
/* scroll function */
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
//
// // MASONRY
// $('.grid').masonry({
//   // options...
//   itemSelector: '.grid-item',
//   // columnWidth: 200
// });
//
// // LETTERING
// $(document).ready(function() {
// 	    $(".fancy_title").lettering();
// 	  });
//
//   $(document).ready(function() {
// $(".word_split").lettering('words');
//     });
//
// // PIN THE NAV WITH SCROLL MAGIC
// var controller = new ScrollMagic.Controller();
// var containerScene = new ScrollMagic.Scene({
// 				// offset: 154,
// 				offset: 214,
//         // triggerElement: '#target'
//         // duration: 500
//     })
//     .setPin('#nav')
//     // .addIndicators()
//     .addTo(controller);
//
//
//     // Add slideDown animation to Bootstrap dropdown when expanding.
//  $('.dropdown').on('show.bs.dropdown', function() {
//    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
//  });
//
//  // Add slideUp animation to Bootstrap dropdown when collapsing.
//  $('.dropdown').on('hide.bs.dropdown', function() {
//    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
//  });
//
//
//   $(".carousel-item").ready(function(){
//       $("img").addClass("animated fadeIn");
//       $("h3").addClass("animated fadeInDown");
//       $(".carousel-caption > p").addClass("animated fadeInLeft");
//       $(".carousel-caption > h6").addClass("animated fadeInUp");
//   });
});

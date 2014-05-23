/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

   $(document).ready(function(){
  $('.slider6').bxSlider({
    slideWidth: 140,
    minSlides: 6,
    maxSlides: 6,
    moveSlides: 1,
    slideMargin: 10
  });
});

   $(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 800,
    minSlides: 1,
    maxSlides: 1,
    moveSlides: 1,
    slideMargin: 10
  });
});

$('a[href*=#]').bind("click", function(e){
var anchor = $(this);
var name = anchor.attr('href').replace(new RegExp("#",'gi'), '');
$('html, body').stop().animate({
scrollTop: $('a[name='+name+']').offset().top
}, 1000);
e.preventDefault();
return false;
});

    // Place your code here.

  }
};


})(jQuery, Drupal, this, this.document);



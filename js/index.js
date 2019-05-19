$(window).scroll(function() {
  
  // selectors
  var $window = $(window),
      $body = $('body'),
      $panel = $('.panel');
  
  // Change 33% earlier than scroll position so colour is there when you arrive.
  var scroll = $window.scrollTop() + ($window.height() / 3);
 
  $panel.each(function () {
    var $this = $(this);
    
    // if position is within range of this panel.
    // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
    // Remember we set the scroll to 33% earlier in scroll var.
    if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
          
      // Remove all classes on body with color-
      $body.removeClass(function (index, css) {
        return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
      });
       
      // Add class of currently active div
      $body.addClass('color-' + $(this).data('color'));
    }
  });    
  
}).scroll();

/*
 * Icon
 * --------
 * This code toggle classes for
 * our navigation.
 *
 */

$('.menu-toggle').on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink1").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink2").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink3").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink4").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});

$("#menulink5").on('click', function(){
  $('.full-menu').toggleClass('full-menu--open');
});
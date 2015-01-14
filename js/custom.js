/**
  *
  * Slider jQuery
  *
  **/


/**
  * this sets the absolute positioning for each element based on if it is even or odd
  * giving the effect that the caption is sliding from the left or right.
  *
  **/
$('.carousel-caption').each(function( index ) {

  if(index %2 == 0) {
    $(this).css('left', '200%');
  } else {
    $(this).css('left', '-100%');
  }

});

// this function affects only the first slide and then is released for on load/ready only
jQuery(document).ready(function() {
if ( $('.carousel-caption').hasClass('cap-right') ) {
  $('.active .carousel-caption').queue(function(){
      setTimeout (function() {
        $('.active .carousel-caption').removeClass('cap-right')
      }, 4500); // sets when the slide moves out 
      $.dequeue( this );
  })
}
});




// this is the action after slide i.e. show
$('#rdl-slider').on('slid.bs.carousel', function(){

var cur_elem = $('.carousel-inner .item.active');
cur_elem = cur_elem[0];
var index = $('.carousel-inner .item').index( cur_elem );

  if(index %2 == 0 && $('.item').hasClass('active')) {

    setTimeout (function() {
      $('.active .carousel-caption').addClass('cap-right')
    }, 1000); // sets when the slide moves in

    setTimeout (function() {
      $('.active .carousel-caption').removeClass('cap-right')
    }, 4500); // sets when the slide moves out    

  } else {

    setTimeout (function() {
      $('.active .carousel-caption').addClass('cap-left');
    }, 1000); // sets when the slide moves in

    setTimeout (function() {
      $('.active .carousel-caption').removeClass('cap-left');
    }, 4500); // sets when the slide moves out

  }

});
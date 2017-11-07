$(document).ready(function(){

/* CAROUSEL */

  var $carousel = $('.carousel').flickity({
    autoPlay: 1600
  });

  $('.play-button').on( 'click', function() {
    $carousel.flickity('playPlayer');
  });

  $('.stop-button').on( 'click', function() {
    $carousel.flickity('stopPlayer');
  });

  $('.pause-button').on( 'click', function() {
    $carousel.flickity('pausePlayer');
  });

  $('.unpause-button').on( 'click', function() {
    $carousel.flickity('unpausePlayer');
  });

    /* Over carousel */

  $('.carousel-cell').mouseenter( function(){

    $( this ).find('.overlay_slider').fadeIn();
    $( this ).find('h3').fadeIn();

  });

  $('.carousel-cell').mouseleave( function(){

    $( this ).find('.overlay_slider').fadeOut();
    $( this ).find('h3').fadeOut();

  });

  
});
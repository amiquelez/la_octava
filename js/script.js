$(document).ready(function(){

  /* BX SLIDER */

  $('.bxslider').bxSlider();

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    $('.bxslider_mobile').bxSlider();
  }


  /* PRODUCTOS FILTRO CATEGORIAS */

  $('.list_products li.crudos').css('display', 'list-item');

  $('.list_filters ul li').click( function(){

    $('.list_filters ul li').removeClass("actual");

    $(this).addClass("actual");

    var nameId = $(this).find('a').attr("id");

    var name = nameId.split("_");

    var nameIn = name[1];

    if( nameIn == "todos" ){

      $('.list_products li').fadeIn("slow");

    }else{

        $('.list_products li').fadeOut("fast", function() {

        $('.list_products').find('.'+nameIn).fadeIn('slow');

      });

    }

  });


  /* BTN MOBILE */

  $('#btn_mobile').click( function(){

    $('header nav').toggle();

  });


  /* BTN CONOCE */

  $('#btn_conoce').click( function(){

    $('html, body').animate({
          scrollTop: $("#productos_destacados").offset().top
      }, 400);

  });


  var lastScrollTop = 0;
  $(window).scroll(function(event){
     var st = $(this).scrollTop();

     if (st > 1 ){
        
        $('#header_fix').addClass('backfix');

     } else {
        
        $('#header_fix').removeClass('backfix');
     }
     
     lastScrollTop = st;
  });



});

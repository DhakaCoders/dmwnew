(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"color":"#868686"},{"visibility":"off"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#d2d2d2"}]},{"featureType":"administrative.province","elementType":"geometry","stylers":[{"color":"#676767"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#848484"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#212121"},{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#212121"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#212121"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"color":"#212121"},{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#212121"},{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"lightness":21},{"color":"#212121"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#181818"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#3c3c3c"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"lightness":29},{"weight":.2}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#4e4e4e"},{"visibility":"simplified"},{"lightness":"-20"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#373737"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"lightness":16},{"color":"#313131"},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#212121"},{"lightness":19},{"visibility":"off"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"visibility":"on"}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
  $('#mobile-nav').slideToggle(300);
});

$(window).scroll(function(){
  var sticky = $('header.header'),
      scroll = $(window).scrollTop();

  if (scroll >= 10) $('body').addClass('hasSticky');
  else $('body').removeClass('hasSticky');
});
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}

/*Milon*/
/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#googlemap').length ){
    var latitude = $('#googlemap').data('latitude');
    var longitude = $('#googlemap').data('longitude');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          mapTypeControl:false,
          scrollwheel: false,

          zoomControl: false,
          disableDefaultUI: true,
          zoom:17,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : CustomMapStyles
      };
      var map= new google.maps.Map(document.getElementById('googlemap'),mapProp);

      var marker= new google.maps.Marker({
        position:myCenter,
        icon:'assets/images/map-marker.png'
        });
      marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}


 if (windowWidth <= 767) {
  $('.ftr-menu h4, .ftr-cnt-menu h4').on('click', function(){
    $(this).toggleClass('active');
    $(this).parent().siblings().find('h4').removeClass('active');
    $(this).parent().find('ul').slideToggle(300);
    $(this).parent().siblings().find('ul').slideUp(300);
  });


 }


if( $('.mainSlider').length ){
    $('.mainSlider').slick({
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      infinite: true,
      arrows:false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true
    });
}

if( $('.hmProTabSlider').length ){
    $('.hmProTabSlider').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      infinite: true,
      arrows: false,
      speed: 700,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('.clientsPartnersLogosSlider').length ){
    $('.clientsPartnersLogosSlider').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      infinite: true,
      arrows: false,
      speed: 700,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
          }
        }
      ]
    });
}

if( $('.participateBnrSlider').length ){
    $('.participateBnrSlider').slick({
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 5000,
      dots: true,
      infinite: true,
      arrows:false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true
    });
}


if( $('.fl-tabs').length ){

  $('div.fl-tabs button').click(function(){
    $('.hmProTabSlider').slick('refresh');
      var tab_id = $(this).attr('data-tab');

      $('div.fl-tabs button').removeClass('current');
      $('.fl-tab-content').removeClass('current');

      $(this).addClass('current');
      $("#"+tab_id).addClass('current');
      $('.hmProTabSlider').slick('refresh');
  });
}

if( $('.counter').length ){
  $('.counter').counterUp({
      delay: 10,
      time: 1000
  });
}


$('.filter-btn button').on('click', function(){
  $(this).toggleClass('filter-btn-active');
  $(this).parent().parent().find('.filter-btn-dorpdown').slideToggle(300);

});
  

$('.view-full-biography-toggle-btn').on('click', function(){
  $(this).toggleClass('view-full-biography-toggle-btn-active');
  $('.view-full-biography-con').slideToggle(300);

});



/**
Sidebar menu
*/
if (windowWidth <= 991) {
  $('.hdr-humbergur-btn').on('click', function(e){
    $('.xs-nav-cntlr').addClass('opacity-1');
    $('.bdoverlay').addClass('active');
    $('body').addClass('active-scroll-off');
    $(this).addClass('menu-expend');
  });
  $('.menu-closebtn').on('click', function(e){
    $('.bdoverlay').removeClass('active');
    $('.xs-nav-cntlr').removeClass('opacity-1');
    $('body').removeClass('active-scroll-off');
    $('.hdr-humbergur-btn').removeClass('menu-expend');
  });
  
  $('li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).parent().siblings().find('.sub-menu').slideUp(300);
    $(this).parent().find('.sub-menu').slideToggle(300);
    $(this).toggleClass('sub-menu-active');
  });
}

/*popup*/
/*$('.popup-btn').on('click', function(e){
  e.preventDefault();
  $('.info-popup-cntlr').addClass('opacity-1');
});

$('.popup-close').on('click', function(e){
  $('.info-popup-cntlr').removeClass('opacity-1');
});
*/

$('.dm-about-sec-inr p a').on('click', function(e){
  e.preventDefault();
  $('.dm-about-sec-inr .continue-reading-desc').slideDown();
  $(this).hide();
});

    new WOW().init();

})(jQuery);
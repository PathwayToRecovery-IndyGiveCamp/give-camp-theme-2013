// test
$(document).ready(function() {


  $.getJSON('/?feed=json', function( data ) {
    var data = data[0];
    var titleLength = 30;
    var contentLength = 400;

    if( data.title.length > titleLength ) {
      data.title = data.title.substr(0, titleLength) + '...';
    }
    if( data.content.length > contentLength ) {
      data.content = data.content.substr(0, contentLength) + '...';
    }
    var tmpContent = '<h3>'+ data.title +'</h3><p>'+ data.content +'</p><a href="'+ data.permalink +'">Learn More</a>';
    $('#newsResults').parent().html( tmpContent );
  });

  function updateNav( $, window, delay, callback ) {

    $('.nav.navbar-nav').find('li > .sub-menu').addClass('dropdown-menu').prev().attr('data-toggle', 'dropdown').parent().addClass('dropdown');

    if( $('.navbar-header').height() <= 0 ) {
        callback($, window, delay);
    }
  }

  updateNav( $, window, 0, function ($, window, delay) {
    // http://jsfiddle.net/AndreasPizsa/NzvKC/
    var theTimer = 0;
    var theElement = null;
      var theLastPosition = {x:0,y:0};
    $('[data-toggle]')
      .closest('li')
      .on('mouseenter', function (inEvent) {
      if (theElement) theElement.removeClass('open');
      window.clearTimeout(theTimer);
      theElement = $(this);

      theTimer = window.setTimeout(function () {
        theElement.addClass('open');
      }, delay);
    })
      .on('mousemove', function (inEvent) {
          if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
             Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
          {
              theLastPosition.x = inEvent.ScreenX;
              theLastPosition.y = inEvent.ScreenY;
              return;
          }
          
      if (theElement.hasClass('open')) return;
      window.clearTimeout(theTimer);
      theTimer = window.setTimeout(function () {
        theElement.addClass('open');
      }, delay);
    })
      .on('mouseleave', function (inEvent) {
      window.clearTimeout(theTimer);
      theElement = $(this);
      theTimer = window.setTimeout(function () {
        theElement.removeClass('open');
      }, delay);
    });
  });

});
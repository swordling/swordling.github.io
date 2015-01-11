//Credit to the Stack Exchange developers that coded the following plugins. <3

//
$(function(){       
   var scroll_start = 0;
   var startchange = $('#get');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar').css('background-color', '#222');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
});

//
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

//
$('nav a').on('click', function() {

    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top +10;

    $('body,html').animate({
        scrollTop: scrollPoint
    }, 500);

    return false;

})


$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        $('nav').addClass('fixed');
        $('.wrapper section').each(function(i) {
            if ($(this).position().top <= windscroll + 10) {
                $('nav li.active').removeClass('active');
                $('nav li').eq(i).addClass('active');
            }
        });

    } else {

        $('nav').removeClass('fixed');
        $('nav li.active').removeClass('active');
        $('nav li:first').addClass('active');
    }

}).scroll();

$(function () {
  "use strict";
  // toggle password masking
  $('.toggle-mask').on('click', function () {
    var maskToggle = $(this).text();
    var password = $('#password').val();
    if (maskToggle === 'Hide') {
      $(this).text("Show");
      $('#password').replaceWith('<input type="password" id="password" name="password" maxlength="12" autocorrect="off" autocapitalize="off" value=' + password + '>');
    } else if (maskToggle === 'Show') {
      $(this).text("Hide");
      $('#password').replaceWith('<input type="text" id="password" name="password" maxlength="12" autocorrect="off" autocapitalize="off" value=' + password + '>');
    }
  });

  // highlight row on focus
  $('#full-name, #email, #password').focus(function () {
    $(this).parent().addClass('active');
  });
  $('#full-name, #email, #password').focusout(function () {
    $('.active').removeClass('active');
  });
});

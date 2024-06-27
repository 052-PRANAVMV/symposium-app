$(document).ready(function() {
    $(window).scroll(function() {
      $('.txtabout').each(function() {
        var positionFromTop = $(this).offset().top;
        var windowHeight = $(window).height();
        if (positionFromTop - windowHeight <= 0) {
          $(this).addClass('animate');
        }
      });
    });
  });
  
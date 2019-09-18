(function ($) {
  $(document).ready(function(){

    // hide .navbar first
    $(".nav-bar").hide();

    // fade in .navbar
    $(function () {
        $(window).scroll(function () {

                 // set distance user needs to scroll before we start fadeIn
            if ($(this).scrollTop() > 100) {
                $('.nav-bar').fadeIn();
            } else {
                $('.nav-bar').fadeOut();
            }
        });
    });

});

//--TEXT CHANGE--//
$(document).ready(function(){
    $('#mce-MMERGE').change(
        function () {
            var method = $('option:selected', this).text();
            if (method == "Artist") {
                $('#signupLabel').text("I am an");
            } else if (method == "Listener") {
                $('#signupLabel').text("I am a");
            }
        });
 });
 
 //-----NAV FADE IN/OUT-----//
 $(document).ready(function(){
        //When distance from top = 250px fade button in/out
        $(window).scroll(function(){
            if ($(this).scrollTop() > 250) {
                $('#navHome').fadeIn(300);
            } else {
                $('#navHome').fadeOut(300);
            }
        });
 
        //On click scroll to top of page t = 1000ms
        $('#navHome').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;
        });
 
        $("#navAbout").click(function() {
            $('html, body').animate({
                scrollTop: $("#about").offset().top-80
            }, 1000);
        });
    });
   
   
   //-----SLIDER-----//
   $(document).ready(function(){
    $('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  var isClicked = false;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
 
  
  function advance() {
    clearTimeout(timeout);
        timeout = setTimeout(function() {
          if (currentIndex < ($slides.length - 1)) {
            move(currentIndex + 1);
          } else {
            move(0);
          }
        }, 8000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
    advance();
});
 
   });
  }(jQuery));
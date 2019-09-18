var button_user = $('#toggle-user');
var button_artist = $('#toggle-artist');
var button_next = $('#next-button');
var button_back = $('#back-button');
var start = $('#start');
var detail = $('#detail');
var box = $('.box');
var userSelected, nextSelected, artistSelected = false;

$(function() {
    
   detail.hide();
   
$( "img" ).each( function() {
    var $img = $( this );
    $img.width( $img.width() * .3 );
});
    
   //shows up after clicking next when entering the page 
   button_next.click(function() {
        start.slideUp(1000);
        detail.slideDown(1000);
    });
    
  //selecting the back button to go back from the second card
  button_back.click(function() {
        detail.slideUp(1000);
        start.slideDown(1000);
    });
   
    button_user.click(function() {
      userSelected = true; 

      if(artistSelected){
          button_artist.toggleClass('selected');
          artistSelected = false;
      }
      $(this).toggleClass('selected');
    });

    button_artist.click(function() {
      artistSelected = true;

      if(userSelected){
          button_user.toggleClass('selected');
          userSelected = false;
      }
      $(this).toggleClass('selected');
    });

    //user button hover lighten color
    button_user.mouseenter(function() {
       $(this).css('background', '#5c5c5c');
       $(this).css('transition', 'background-color 0.3s');
    });
    button_user.mouseleave(function() {
       $(this).css('background', '#454545');
       $(this).css('transition', 'background-color 0.3s');
    });


    //artist button hover lighten color
     button_artist.mouseenter(function() {
       $(this).css('background', '#5c5c5c');
       $(this).css('transition', 'background-color 0.2s');
    });
    button_artist.mouseleave(function() {
       $(this).css('background', '#454545');
       $(this).css('transition', 'background-color 0.2s');
    });
    
    
      //back button button hover lighten color
    button_back.mouseenter(function() {
       $(this).css('background', '#5c5c5c');
       $(this).css('transition', 'background-color 0.3s');
    });
    button_back.mouseleave(function() {
       $(this).css('background', '#454545');
       $(this).css('transition', 'background-color 0.3s');
    });
});

function submitAll(){
    for(var i=0, n=document.forms.length; i<n; i++){
        document.forms[i].onsubmit();
    }
}
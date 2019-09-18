 // Initialize Firebase
 var config = {
    apiKey: "AIzaSyAXYm3Yt9L_yKnHp-9zF2dGENxaE2uZWVk",
    authDomain: "survey-7fe09.firebaseapp.com",
    databaseURL: "https://survey-7fe09.firebaseio.com",
    projectId: "survey-7fe09",
    storageBucket: "",
    messagingSenderId: "510428603154"
  };
  firebase.initializeApp(config);

  var database = firebase.database();
  var ipRef = database.ref('ArtistSurvey1/responses');
  var email = $('#emailInput').val();
  var key = ipRef.push().key;

  $.get("https://ipinfo.io", function (response) {
    var newResponseRef = ipRef.child(key).update({
        IP: response.ip,
        city: response.city,
        region: response.region,
        details: response
    });
    }, "jsonp");




    jQuery(document).ready(function($){
        //open popup
        setTimeout(function(){
            $('.cd-popup').addClass('is-visible');
        }, 15000);
        
        //close popup
        $('.cd-popup').on('click', function(event){
            if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });

        $('#subscribe').on('click', function(event){
            var email = $('#emailInput').val();  
            event.preventDefault();            
            if(email.length > 0){
                var enterEmail = ipRef.child(key).update({
                    email: email
                });
                $('.cd-popup').removeClass('is-visible');
            } 
        });
        //close popup when clicking the esc keyboard button
        $(document).keyup(function(event){
            if(event.which=='27'){
                $('.cd-popup').removeClass('is-visible');
            }
        });
    });
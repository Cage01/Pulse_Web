/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = function(){
var videoList = [ "vid/concert2.mp4", "vid/indieconcert.mp4", "vid/guitar3.mp4", "vid/dashboard.mp4"];


videoList.sort(function(a, b) {return 0.5 - Math.random();});

$("#backgroundVid").html("<source src='" + videoList[0] + "' type='video/mp4' />");

 $('#signupForm').submit(function (evt) {
    evt.preventDefault();
    var name = $('#name').val();
    var email = $('#email').val();
    var location = $('#location').val();
    var beta = $('#one').is(":checked")?1:0;

    if(isValidEmailAddress(email)){
            $.ajax({
                type: "POST",
                url: "submit.php",
                data: {'name':name, 'email':email, 'location':location, 'beta':beta },
                success: function (data) {
                   positiveMessage();
                },
                error: function (jXHR, textStatus, errorThrown) {
                   negativeMessage();            
                }
            });
     }
 });
 
  var $results = document.querySelector('.result');
          var appendToResult = $results.insertAdjacentHTML.bind($results);
          TeleportAutocomplete.init('.location').on('change', function(value) {
          });
          
         
};

//checks the email address to they cant just send us garbage
//if possible I would like to also check the email somehow to see if the email is real, but im not sure that is possible, or how necessary it is
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}


//all these functions handle the animations for error and and thank you
function delayedThankYou(){
    setTimeout(function(){
        $('#thankyou').removeClass('hidden');
        $('#thankyou').addClass('show');
           
        $('#thankyou').animate({
           marginTop:-15 
        });
    return true;
    },600);
}

function delayedError(){
    setTimeout(function(){
        $('#error').removeClass('hidden');
        $('#error').addClass('show');
           
        $('#error').animate({
           marginTop:-15 
        });
    return true;
    },600);
}

function removeError(){
     setTimeout(function(){
        $('#error').removeClass('show');
        $('#error').addClass('hidden');
           
        $('#error').animate({
           marginTop:+0 
        });
    return true;
    },3200);
}

function delayedReturn(){
    setTimeout(function(){
        $('#content').removeClass('hidden');
        $('#content').addClass('show');
           
        $('#content').animate({
           marginTop:+0
        });
    return true;
    },3800);
}

function positiveMessage(){
    $('#signupForm').disabled = true;
    $('#name').prop('disabled', true);
    $('#email').prop('disabled', true);
    $('#location').prop('disabled', true);
    $('#signupForm').css('cursor', 'default');

    $('#content').addClass('hidden'); 
    $('#content').animate({
        marginTop:-15
    });
    delayedThankYou();
}

function negativeMessage(){
    $('#content').removeClass('show');
    $('#content').addClass('hidden');
    $('#content').animate({
        marginTop:-15
    });
    delayedError();
    removeError();
    delayedReturn();
}
 var config = {
                    apiKey: "AIzaSyCz9Wu__v2t0d_D9QxMGAJpGTkG2d-W6EA",
                    authDomain: "pulse-d3b54.firebaseapp.com",
                    databaseURL: "https://pulse-d3b54.firebaseio.com",
                    projectId: "pulse-d3b54",
                    storageBucket: "pulse-d3b54.appspot.com",
                    messagingSenderId: "1080036607856"
                  };
                  firebase.initializeApp(config);
                  
var signedInWithGoogle = false;
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    updateNavbar(firebase.auth().currentUser);
  } else {
    
  }
});                  

//create account/sign in with google  
var signInGoogle = document.getElementById('signInGoogle');

if(signInGoogle != null){
    var provider = new firebase.auth.GoogleAuthProvider();
    signInGoogle.addEventListener("click", function(e){
            e.preventDefault();
            
            firebase.auth().signInWithRedirect(provider);
            firebase.auth().getRedirectResult().then(function(result) {
                if (result.credential) {
                    // This gives you a Google Access Token. You can use it to access the Google API.
                    var token = result.credential.accessToken;
                    // ...
                }
                // The signed-in user info.
                var user = result.user;
                signedInWithGoogle = true;
            }).catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;
                var errorMessage = error.message;
                // The email of the user's account used.
                var email = error.email;
                // The firebase.auth.AuthCredential type that was used.
                var credential = error.credential;
                // ...
            });
    });


}
    
function signInWithEmailAndPassword(){
    var signIn = document.getElementById("signIn");
    var signInEmail = document.getElementById('signInEmail');
    var signInPassword = document.getElementById('signInPassword');

    firebase.auth().signInWithEmailAndPassword(signInEmail.value, signInPassword.value).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
    });


}    

function createUserWithEmailAndPassword(){
    //TODO - switch all these variables to JQuery variables
    var createAccount = document.getElementById('createAccount');
    var createAccountEmail = document.getElementById("createAccountEmail");
    var createAccountPassword = document.getElementById("createAccountPassword");
    var verifyPassword = document.getElementById("verifyPassword");
    var mDisplayName = document.getElementById("createDisplayName");

     if(createAccountPassword.value.length >= 6 && createAccountPassword.value === verifyPassword.value){
           firebase.auth().createUserWithEmailAndPassword(createAccountEmail.value, createAccountPassword.value).catch(function(error) {
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    window.alert(errorMessage +" "+errorCode);

            }); 
    }else{
    //TODO - add something here to show user that info is wrong
    }
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            //sets display name and default profile pic
            var defaultProfilePic = firebase.storage().ref('Default/defaultProfilePic.png');
            defaultProfilePic.getDownloadURL().then(function(url) {
                user.updateProfile({
                    displayName: mDisplayName.value,
                    photoURL: url
                }).then(function() {
                    // Update successful.
                    console.log('updated profile');
                }, function(error) {
                    console.log(error);
                });
            }); 

            // firebase.auth().currentUser.sendEmailVerification().then(function() {   
            //     console.log('sent email verification'); 
            // }); 
            
            var artistAccount = 'false';
            if(window.location == 'https://pulsemusic.io/auth/create')
                artistAccount = 'false';
            else if(window.location == 'https://pulsemusic.io/artist-creation')
                artistAccount = 'true';
            
            //sets user info in database
            firebase.database().ref('UserInfo/userReadable/accounts').child(user.uid).update({
                displayName: user.displayName,
                isArtist: artistAccount
            }, function(error) {
                if(error)
                    console.log(error);
                else
                    console.log('set account type');
            });   
        }
    });  
}


function createMailChimpSubscription(){

}

function signOutUser(){    
    var signOut = document.getElementById("signOut");
    firebase.auth().signOut().then(function() {
        // Sign-out successful.

        window.location = '../test';
    }).catch(function(error) {
        // An error happened.
        console.log(error);
    });
}

function updateNavbar(user){
    //updates the dropdown with the username
    var userDropdown = $("#userDropdown");
    userDropdown.append(user.displayName+" <span class='caret'>");

    //updates the profile pic area with the users profile pic
    var profilePic = document.getElementById('navProfilePic');
    profilePic.src = user.photoURL;

    //updates the upload or upgrade button, depending on if the user is an artist or not
    var uploadOrUpgrade = document.getElementById('uploadOrUpgrade');
    var userRef = firebase.database().ref('UserInfo/userReadable/accounts/'+user.uid);
    userRef.child('isArtist').once('value').then(function(snapshot) {
        if(snapshot.val() == 'true'){
            uploadOrUpgrade.textContent = 'Upload';
            uploadOrUpgrade.addEventListener('click', function() {
                window.location = '../upload';
            });
        }else{
            uploadOrUpgrade.textContent = 'Upgrade';
            uploadOrUpgrade.addEventListener('click', function() {
                window.location = '../pricing';
            });
        }
    });
}








/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ($) {

	var pluses = /\+/g;

	function encode(s) {
		return config.raw ? s : encodeURIComponent(s);
	}

	function decode(s) {
		return config.raw ? s : decodeURIComponent(s);
	}

	function stringifyCookieValue(value) {
		return encode(config.json ? JSON.stringify(value) : String(value));
	}

	function parseCookieValue(s) {
		if (s.indexOf('"') === 0) {
			// This is a quoted cookie as according to RFC2068, unescape...
			s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
		}

		try {
			// Replace server-side written pluses with spaces.
			// If we can't decode the cookie, ignore it, it's unusable.
			// If we can't parse the cookie, ignore it, it's unusable.
			s = decodeURIComponent(s.replace(pluses, ' '));
			return config.json ? JSON.parse(s) : s;
		} catch(e) {}
	}

	function read(s, converter) {
		var value = config.raw ? s : parseCookieValue(s);
		return $.isFunction(converter) ? converter(value) : value;
	}

	var config = $.cookie = function (key, value, options) {

		// Write

		if (value !== undefined && !$.isFunction(value)) {
			options = $.extend({}, config.defaults, options);

			if (typeof options.expires === 'number') {
				var days = options.expires, t = options.expires = new Date();
				t.setTime(+t + days * 864e+5);
			}

			return (document.cookie = [
				encode(key), '=', stringifyCookieValue(value),
				options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
				options.path    ? '; path=' + options.path : '',
				options.domain  ? '; domain=' + options.domain : '',
				options.secure  ? '; secure' : ''
			].join(''));
		}

		// Read

		var result = key ? undefined : {};

		// To prevent the for loop in the first place assign an empty array
		// in case there are no cookies at all. Also prevents odd result when
		// calling $.cookie().
		var cookies = document.cookie ? document.cookie.split('; ') : [];

		for (var i = 0, l = cookies.length; i < l; i++) {
			var parts = cookies[i].split('=');
			var name = decode(parts.shift());
			var cookie = parts.join('=');

			if (key && key === name) {
				// If second argument (value) is a function it's a converter...
				result = read(cookie, value);
				break;
			}

			// Prevent storing a cookie that we couldn't decode.
			if (!key && (cookie = read(cookie)) !== undefined) {
				result[name] = cookie;
			}
		}

		return result;
	};

	config.defaults = {};

	$.removeCookie = function (key, options) {
		if ($.cookie(key) === undefined) {
			return false;
		}

		// Must not alter options, thus extending a fresh object...
		$.cookie(key, '', $.extend({}, options, { expires: -1 }));
		return !$.cookie(key);
	};

}));





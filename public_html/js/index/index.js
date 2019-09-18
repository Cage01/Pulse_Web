
/***************** NEW AND TRENDING LIST *******************/
//Storage
var storage = firebase.storage();
var storageRef = storage.ref();

//TODO: these are placeholder variables, and will be changed in the future
var songRoot = 'TestMusic';
var artistID = 'artistID';
var albumID = 'albumID';
var songRef = storageRef.child(songRoot+'/'+artistID+'/'+albumID);
var imagesRef = songRef.child('art');

//Database
var database = firebase.database();

//these variables will be changed once it is possible to determine which songs will be displayed
var artistID = 'artistID';
var albumID = 'albumID';
var songIDs = ['songID1', 'songID2', 'songID3', 'songID4', 'songID5', 'songID6', 'songID7', 'songID8', 'songID9', 'songID10', 'songID11', 'songID12'];

var artistRef = database.ref('ArtistInfo/artistReadable/'+artistID);
var songRef = database.ref('SongsInfo/songsReadable/');

//Album Art
var albumImages = ['trend1', 'trend2','trend3', 'trend4','trend5', 'trend6','trend7', 'trend8','trend9', 'trend10','trend11', 'trend12',];
imagesRef.getDownloadURL().then(function(url) {
    
    for(i = 0; i < albumImages.length; i++){
        var img = document.getElementById(albumImages[i]);
        img.src = url;
    }
}).catch(function(error) {

});

//Artist Names
var artistNames = ['trend1Artist', 'trend2Artist','trend3Artist', 'trend4Artist','trend5Artist', 'trend6Artist','trend7Artist', 'trend8Artist','trend9Artist', 'trend10Artist','trend11Artist', 'trend12Artist'];
artistRef.once('value').then(function(snapshot) {
    for(i = 0; i < artistNames.length; i++){
        var artistName = document.getElementById(artistNames[i]);
        artistName.textContent = snapshot.val().name;
    }
});

//Song Names
var songNames = ['trend1Song', 'trend2Song','trend3Song', 'trend4Song','trend5Song', 'trend6Song','trend7Song', 'trend8Song','trend9Song', 'trend10Song','trend11Song', 'trend12Song'];
var songCount = 0;
for(i = 0; i < songIDs.length; i++){
    songRef.child(songIDs[i]).once('value').then(function(snapshot) {
            var songName = document.getElementById(songNames[songCount]);
            songName.textContent = snapshot.val().name;
            songCount++;
    });
}



/***************** LIVE FEEDBACK *******************/
//TODO: this will have to be done differently, likely with the shallow command for firebase in php to deal with a lard dataset

//number of users fixed, this will no longer cause preformance issues
var numOfUsersRef = database.ref('UserInfo/userReadable/numberOfUsers');
numOfUsersRef.on('value', function(snapshot) {
    var numOfListeners = document.getElementById('numOfListeners');
    numOfListeners.textContent = snapshot.val();
});

var numOfArtistsRef = database.ref('ArtistInfo/numberOfArtists');
numOfArtistsRef.on('value', function(snapshot) {
    var numOfArtists = document.getElementById('numOfArtists');
    numOfArtists.textContent = snapshot.val();
});

var numOfSongsRef =  songRef.parent.child('numberOfSongs')
numOfSongsRef.on('value', function(snapshot) {
    var numOfSongs = document.getElementById('numOfSongs');
    numOfSongs.textContent = snapshot.val(); 
});

/***************** PAGE FUNCTIONS *******************/
$('#creatAccount').click(function() {
    document.location = 'auth/create';
});

$('#signIn').click(function() {
    document.location = 'auth/login';
});

$('#becomeArtist').click(function() {
    document.location = 'pricing';
});




/***************** APP COUNTDOWN *******************/
function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime){
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock(){
    var t = getTimeRemaining(endtime);
    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if(t.total<=0){
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock,1000);
}

// LAUNCH DATE
var deadline = 'December 25 2019 00:00:00 UTC';
initializeClock('countdown', deadline);
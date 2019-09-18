//Handles the input fields to show the icons properly
var $field = $('input');
var $iconCC = $('#iconCC');

$field.on('focus', function() {
    $(this).parent().addClass('focus');
    $(this).parent().removeClass('active');
})

$field.on('blur', function() {
    $(this).parent().removeClass('focus');
          
    if ($field.val() !== "") {
        $(this).parent().addClass('active');
    } else {
        $(this).parent().removeClass('active');
        $('.iconCheck').hide();
    }
});

$field.on('keydown', function() {
    var emailaddress = $field.val();
          
    if( !isValidEmailAddress( emailaddress ) ) { 
        $('#iconPassed').hide(); 
        $('#iconWrong').show();
    } else {
         $('#iconPassed').show(); 
        $('#iconWrong').hide();
    }
        
})

function isValidEmailAddress(emailAddress) {
    var pattern = /^(([a-zA-Z]|[0-9])|([-]|[_]|[.]))+[@](([a-zA-Z0-9])|([-])){2,63}[.](([a-zA-Z0-9]){2,63})+$/gi;
    return pattern.test(emailAddress);
};


//if(firebase.auth().currentUser){
    $('#continue').click(function() {
       // if($('#createAccountEmail').val().length > 0 && checkPassword()){
            $('#section1').addClass('hidediv');
            $('#section2').removeClass('hidediv');
        //}
    });
//}


function checkPassword(){
    if($('#createAccountPassword').val().length >= 6 && $('#verifyPassword').val() === $('#createAccountPassword').val())
        return true;
    else
        return false;
}

//previews the image selected into the box
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();     
        reader.onload = function (e) {
             $('#artistImage').attr('src', e.target.result);
        } 
        reader.readAsDataURL(input.files[0]);
    }
}


$("#imgUpload").change(function(){
    readURL(this);
});



//TODO: This will be changed once payment functionality is added
$('#paypal').click(function() {
    $('#section1').addClass('hidediv');
    $('#section2').addClass('hidediv');    
    $('#section3').addClass('hidediv');    
    $('#section4').removeClass('hidediv');  
});

$('#credit').click(function() {
    $('#section1').addClass('hidediv');
    $('#section2').addClass('hidediv');    
    $('#section3').addClass('hidediv');    
    $('#section4').removeClass('hidediv');  
});

$('#finish').click(function() {
    uploadImage();       
});

//Uploads the artists profile image to Firebase Storage
function uploadImage(){
    var user = firebase.auth().currentUser;
    var file = $('#imgUpload').prop('files')[0];
    var imageRef = firebase.storage().ref("UserImages/ArtistImages/"+user.uid+"/profilePic");

    var task = imageRef.put(file);

    task.on("state_changed",function progress(snapshot){
    },function error(err){
        console.log(err);      
    },function complete(){
        console.log("Completed Successfully");  
        setNameAndPhoto();                
    });
}

//Sets the artists authentication display name and photo
function setNameAndPhoto(){
    var user = firebase.auth().currentUser;
    var displayName = document.getElementById('userName');
    var genre = document.getElementById('genre');
    var subGenre = document.getElementById('subGenre');
    var artistName = document.getElementById('artistName');

    profileImgRef = firebase.storage().ref("UserImages/ArtistImages/"+user.uid+"/profilePic");
    profileImgRef.getDownloadURL().then(function(url) {
        user.updateProfile({
            displayName: displayName.value,
            photoURL: url
        }).then(function() {
        }, function(error) {
            console.log(error);
        });
        
        setArtistDetails(artistName.value, genre.value, subGenre.value);

    }).catch(function(error) {
        console.log(error);
    });
    
}

function setArtistDetails(artistName, genre, subGenre){
    var user = firebase.auth().currentUser;
    var database = firebase.database();
    var artistRef = database.ref('ArtistInfo/artistReadable');
    var userRef = database.ref('UserInfo/userReadable/accounts');

    artistRef.child(user.uid).set({
        email: user.email,
        name: artistName,
        genre: genre,
        subGenre: subGenre
    }, function(error) {
        if(error){
            console.log(error);
        }else{
            console.log('Details added to database');
            window.location = "../../globalUI/signedInNavbar";
        }
    });

}





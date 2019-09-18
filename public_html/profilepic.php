<html>
<head>
 <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

</head>
<body>

<?php require('globalUI/signedInNavbar.php'); ?>

<div class="container" style="margin-top: 30%;">
    <div class="row">
        <div class="col-lg-12 col-xs-offset-5">
        <img id="profilePic" src="">
        </div>
    </div>    
</div>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Firebase Initialization 
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>    
    <script src="js/firebase.js"></script>
    -->

 <script type="text/javascript"> 
        var img = document.getElementById('profilePic');
        firebase.auth().onAuthStateChanged(function(user) {
            if(user){

                img.src = user.photoURL;
            }
        });
    </script>
</body>
</html>
<html>
  <head>
	<!-- Bootstrap Core CSS -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  
  <link href="css/artist-creation/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  <!-- Bootstrap Social Buttons -->
  <link href="bootstrap/bootstrap-social/bootstrap-social.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>


  </head>
  <body>
    <?php //require('globalUI/navbar-nobuttons.php'); ?>





    <!-- ##### CREATE ACCOUNT SECTION ##### --> 
    <div id="section1" class="container">
      <h1>Create your account</h1>
      <span class="fieldRow">
        <input id="createAccountEmail" type="email" placeholder="example@domain.com" />
        <label for="email">Email</label>
        <i id="email" class="icon ion-email"></i> 
        <i id="iconPassed" class="iconCheck icon ion-checkmark"></i>
        <i id="iconWrong" class="iconCheck icon ion-close"></i> 
      </span>
      <span class="fieldRow">
       <input id="createAccountPassword" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" />
        <label for="password">Password</label>
        <i id="password" class="icon ion-unlocked"></i> 
        <i id="iconPasswordPassed" class="iconCheck icon ion-checkmark"></i>
        <i id="iconPasswordWrong" class="iconCheck icon ion-close"></i> 
      </span>
      <span class="fieldRow">
       <input id="verifyPassword" type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" />
        <label for="verifyPassword">Confirm Password</label>
        <i id="verifyPassword" class="icon ion-locked"></i> 
        <i id="iconVerifyPassed" class="iconCheck icon ion-checkmark"></i>
        <i id="iconVerifyWrong" class="iconCheck icon ion-close"></i> 
      </span>
      <span class="fieldRow">
        <button id="continue" style="font-family: 'Lato'; font-size: 20px; " type="button" class="btn btn-primary btn-block" onclick="createUserWithEmailAndPassword()">Continue</button>
      </span>  
      <hr class="hr-text" data-content="OR" style="margin: 5px;">
      <span class="fieldRow" style="margin-top: 0px;">
        <a style="margin-top: 10px; text-decoration: none; text-align: center; font-weight: 500;" class="more btn btn-lg btn-block btn-social btn-google" id="signInGoogle">
          <span class="fa fa-google"></span> Continue with Google
        </a>
      </span>  
    </div>
    <!-- ##### END OF CREATE ACCOUNT SECTION ##### --> 
    





    <!-- ##### PAYMENT SELECTION SECTION ##### --> 
    <!--TODO: these links will have to change in the future -->
    <div id="section2" class="container hidediv">
      <h1>Payment Method</h1>
      <span class="fieldRow">
        <button id="credit" style="font-family: 'Lato'; font-size: 20px; " type="button" class="btn btn-primary btn-block" onclick="">Credit/Debit Card</button>      
      </span>
      <hr class="hr-text" data-content="OR" style="margin: 5px;">
      <span class="fieldRow">
        <button id="paypal" style="font-family: 'Lato'; font-size: 20px; " type="button" class="btn btn-primary btn-block" onclick="">PayPal</button>      
      </span>
    </div>
    <!-- ##### END OF PAYMENT SELECTION SECTION ##### --> 







    <!-- ##### PAYMENT PROCESSING SECTION ##### --> 
    <!--TODO: once I figure out how to securely take card transactions, I will fill this in -->   
    <div id="section3" class="container hidediv">
      <span class="fieldRow">

      </span>
    </div>
    <!-- ##### END OF PAYMENT PROCESSING SECTION ##### -->







    <!-- ##### ARTIST DETAILS SECTION ##### -->
    <!--TODO: Will need to add image resizing and position modal, that opens up when an image is selected -->
    <div id="section4" class="container hidediv" style="width: 800px;">
      <h1>Artist Details</h1>
      <img id="artistImage" src="https://placehold.it/200x200" alt="" style="float: left; height: 200px; width: 200px; ">
      <span class="fieldRow" >
        <input id="artistName" type="text" placeholder="Artist Name"/>
        <label for="artistName" >Artist Name</label>
        <i id="artistName" class="icon ion-paintbrush" ></i>        
      </span>
      <span class="fieldRow" style="margin-bottom: 65px;">
        <input id="userName" type="text" placeholder="Your Name" />
        <label for="userName">Your Name</label>
        <i id="userName" class="icon ion-person"></i>        
      </span>
     
      <input id="imgUpload" type="file" value="upload" style="float: left; width: 200px; padding: 0; height: 26px; font-size: 13px; border: 0;" />
      <br>
      <br>
      <br>
      <span class="fieldRow" style="">
        <input id="genre" type="text" placeholder="Genre"/>
        <label for="genre">Genre</label>
        <i id="genre" class="icon ion-paintbrush"></i>       
      </span> 
      <span class="fieldRow">
        <input id="subGenre" type="text" placeholder="Sub Genre"/>
        <label for="subGenre">Sub Genre</label>
        <i id="subGenre" class="icon ion-paintbrush"></i>        
      </span>    
      <span class="fieldRow">
          <button id="finish" style="font-family: 'Lato'; font-size: 20px; " type="button" class="btn btn-primary btn-block" onclick="">Finish</button>      
      </span>  
    </div>
    <!-- ##### END OF ARTIST DETAILS SECTION ##### -->


		 <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  
    <!-- Firebase Initialization -->
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    <script src="js/firebase.js"></script>
  
    <script src="js/artistCreation/artistCreation.js"></script>

  </body>
</html>  
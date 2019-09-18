<!DOCTYPE html>
<?php
require ('../lib/DatabaseConnect.php');

extract($_POST);
$fname = 'test';
$lname = 'test';
$email = 'test';
$type = 'ml';

    if($_POST){
    $stmt = $sql->prepare("INSERT INTO PulseDB.SignupPage_tbl (FirstName, LastName, Email, SignerType, City, State, Country, Messages) Values(:firstname, :lastname, :email, :signtype, :city, :state, :country, :messages)");
   
   // $stmt = mysqli_pre
    $stmt->bind_param(':firstname', $fname);
    $stmt->bind_param(':lastname', $lname);
    $stmt->bind_param(':email', $email);
    $stmt->bind_param(':signtype', $type);
    $stmt->bind_param(':city', $_POST['city']);
    $stmt->bind_param(':state', $_POST['state']);
    $stmt->bind_param(':country', $_POST['country']);
    $stmt->bind_param(':messages', $_POST['message']);

    $stmt->execute();
}
 
        ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    </head>
    <body>
         
        
    <div id="page-wrapper">
      <div id="modal-wrapper">
          <div class="header">
              <h1>We're about music, and artists.</h1>
              <h2>Pulse is a one of a kind platform that allows complete flexibility and effortless control over your local music and streamed songs.
                  <br>With a focus on indie artist promotion, your songs will reach people all over the world unlike ever before.
          </div>
        <div id="modal">  
          <div id="cards">
               <div class="box">
                <img src="images/pulse.png"/>
                   
             </div>
              
             <!-- splash page sign up-->
            <div class="card" id="start">
              <div class="box">
              
                <div class="box-header">Who are you?</div>
              
                <form method='post' action="" id="register-form">
                  <label>First Name</label>
                  <input type="text" name="firstName" class="textbox" placeholder="Enter here" required="true">
                  <label>Last Name</label>
                  <input type="text" name="lastName" class="textbox" placeholder="Enter here" required="true">
                  <label>Email</label>
                  <input type="email" name="email" class="textbox" placeholder="Enter here" required="true">
                </form>
              </div>
              
                 <div id="toggle-tabs">
            <div class="tab" id="toggle-user">A music lover</div>
            <div class="tab" id="toggle-artist">An artist</div>
            
          </div>
                <button id="next-button" class="proceed">Next</button>
            </div>
              
              <!-- the slider that asks for more detail on the person signing up -->
              <div class="card" id="detail">
                  <form method='post' action="" id="register-form">
                <div class="box">
              <div class="box-header">Tell us a bit about you</div>
              
              
                  <label>City</label>
                  <input type="text" name="city" class="textbox" placeholder="Enter here" required="true">
                  <label>State/Province</label>
                  <input type="text" name="state" class="textbox" placeholder="Enter here" required="true">
                  <label>Country</label>
                  <input type="text" name="country" class="textbox" placeholder="Enter here" required="true">
                  <label>How did you hear about us?</label>
                  <textarea rows="3" name="message" maxlength="140" class="textbox" placeholder="Max 140 characters.." required="true"></textarea>
                  <span class="countdown"></span>
                
                </div>
                  <div id="toggle-tabs">
                    <div class="tab" id="back-button">Go Back</div>
                    <button type="submit" id="signup" class="proceed">Sign Up</button>
                  </div>
                  </form>
                 
              </div>
            </div>
          </div>
          </div>
      </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="javascript/index.js"></script>
    </body>
</html>
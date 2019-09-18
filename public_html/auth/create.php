<html>
<head>
<title>Create Account</title>    

<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="../css/auth/style.css" rel="stylesheet">

    <!-- Bootstrap Social Buttons -->
    <link href="../bootstrap/bootstrap-social/bootstrap-social.css" rel="stylesheet">

     <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>

    <?php require('../globalUI/navbar-nobuttons.php') ?>    

    <section class="container sign">
		    <article class="half">
			        <h1 class="earthorbiter" style="font-size: 35px; margin-top: -10px;">Pulse</h1>
			        <div class="tabs">
				            <span class="tab signup active"><a href="#signup">Sign up</a></span>
			        </div>
			        <div class="content">
    				        <div class="signup-cont cont">
                <form id="register-form" method="post" role="form">
					<input type="text" name="name" class="inpt" required="required" placeholder="Your Name" id="createDisplayName">
                        <label for="name">Your name</label>	
                                            
                    <input type="email" name="email" class="inpt" required="required" placeholder="Your email" id="createAccountEmail">
					    <label for="email">Your email</label>
					<input type="password" name="password" class="inpt" required="required" placeholder="Your password" id="createAccountPassword">
                	    <label for="password">Your password</label>                  
                    <input type="password" name="verifypassword" class="inpt" required="required" placeholder="Re-enter password" id="verifyPassword">
                        <label for="verifypassword">Re-enter password</label>
					<div class="submit-wrap" style="position: relative;">

					<input type="button" style="text-align: center;" value="Sign up" class="submit" id="createAccount" onclick="createUserWithEmailAndPassword()">
                                                    
                    <a style="margin-top: 10px; text-decoration: none; text-align: center; font-weight: 500;" class="more btn btn-block btn-social btn-google" id="signInGoogle">
                        <span class="fa fa-google"></span> Sign in with Google
                    </a>
                    <a href="#" class="more">Terms and conditions</a>
                    <a href="login" style="margin-bottom: -15px;" class="more forgotPassword">Already have an account?</a>

					</div>
        		</form>
            </div>
			        </div>
		    </article>
		    <div class="half bg"></div>
    </section>
    
    
    

    <!-- Firebase Initialization -->
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>

    <!-- Firebase -->
    <script src="../js/firebase.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    
</body>
</html>    
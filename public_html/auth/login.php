<html>
<head>
<title>Sign In</title>    
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
				            <span class="tab signin active"><a href="#signin">Sign in</a></span>
			        </div>
			        <div class="content">
				            <div class="signin-cont cont">
					                <form id="login-form" method="post" role="form">
						                    <input type="email" name="signInEmail" class="inpt" required="required" placeholder="Your email" id="signInEmail">
						                    <label for="email">Your email</label>
						                    <input type="password" name="password" class="inpt" required="required" placeholder="Your password" id="signInPassword">
                                            <label for="password">Your password</label>
                                            <a href="#" class="more" style="padding-left: 4px; font-size: 11px; padding-top: -10px;">Forgot your password?</a>
						                    <input type="checkbox" id="remember" class="checkbox" checked>
                                            <label for="remember" style="margin-top: -20px;">Remember me</label>
                                            
						                    <div class="submit-wrap">
                                                    <input type="button" style="text-align: center;" value="Sign in" class="submit" id="signIn" onclick="signInWithEmailAndPassword()">
                                                    
                                                    <a style="margin-top: 10px; text-decoration: none; text-align: center; font-weight: 500;" class="more btn btn-block btn-social btn-google" id="signInGoogle">
                                                        <span class="fa fa-google"></span> Sign in with Google
                                                    </a>
                                                    
                                                    <a href="create" class="more forgotPassword">Don't have an account?</a>
                                                    
                                                    
						                    </div>
        					        </form>
    				        </div>
    				        
        					     
            </div>
			        </div>
		    </article>
		    <div class="half bg"></div>
    </section>
                                                        

    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Firebase Initialization -->
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>

    <!-- Firebase -->
    <script src="../js/firebase.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script src="../js/redirect.js"></script>
</body>
</html>    
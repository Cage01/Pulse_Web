<html>
<head>
        <link href='../css/sign-in-modal.css' rel="stylesheet">
</head>

<body>        
<!--sign in modal-->
    
<!-- Modal -->
<div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
		<div class="panel panel-login">
                    <div class="panel-heading">
			<div class="row">
                            <div class="col-xs-6">
				<a href="#signin" id="login-form-link">Sign In</a>
                            </div>
                            <div class="col-xs-6">
				<a href="#create" class="active" id="register-form-link">Create Account</a>
                            </div>
			</div>
			<hr>
                    </div>
                    <div class="panel-body">
			<div class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-block btn-social btn-google" id="signInGoogle">
                                    <span class="fa fa-google"></span> Sign in with Google
                                </a>
                                <hr class="hr-text" data-content="OR">
				<form id="login-form"  method="post" role="form" style="display: block;">
                                    <div class="form-group">
					<input type="text" name="signInEmail" id="signInEmail" tabindex="1" class="form-control" placeholder="Email" value="">
                                    </div>
                                    <div class="form-group">
					<input type="password" name="password" id="signInPassword" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center">
					<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
					<label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
						<input type="submit" name="login-submit" id="signIn" tabindex="4" class="form-control btn btn-login" value="Sign In">
                                            </div>
					</div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
						<div class="text-center">
                                                    <a tabindex="5" class="forgot-password">Forgot Password?</a>
						</div>
                                            </div>
					</div>
                                    </div>
				</form>
				<form id="register-form"  method="post" role="form" style="display: none;">
                                    <div class="form-group">
					<input type="email" name="email" id="createAccountEmail" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="createAccountPassword" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
					<input type="password" name="confirm-password" id="verifyPassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
					<div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
						<input type="submit" name="register-submit" id="createAccount" tabindex="4" class="form-control btn btn-register" value="Create">
                                            </div>
					</div>
                                    </div>
				</form>
                            </div>
                        </div>
                    </div>
		</div>
            </div>
	</div>
    </div> 
  </div>
    
    <!--end of modal-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="../js/signInModal.js"></script>

</body>
</html>    
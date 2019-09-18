<!DOCTYPE html>
<html lang="en">
<head>

  
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="../css/nav-bar.css" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../test">Pulse</a>
        </div>
        
      
      <!-- Collect the nav links, forms, and other content for toggling -->
     <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
      <form id="navSearch" class="navbar-form navbar-left">
                <div class="form-group">
                    <input style="width: 500px" id="searchbar" type="text" placeholder="Search" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Discover</button>
                <button id="uploadOrUpgrade" style="border: 0; background: #FF5722; color: white; height: 100%;" class="btn btn-default">Upgrade</button>
            </form>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" id="userDropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img id="navProfilePic" style="height: 35px; width: 35px;" src=""/> </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Favorites</a></li>
              <li><a href="#">Discover</a></li>
              <li><a href="#">Who to follow</a></li>
              <li role="separator" class="divider"></li>
              <li><a>Upgrade</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" id="notificationDropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size: 25px; ;" class="icon ion-android-notifications"></i></span></a>
            <ul class="dropdown-menu notification-dropdown">
              <li style="text-align: center; height: 50px; padding-top: 15px;">No notifications</li>
              <li role="separator" class="divider"></li>
              <li><a href="#" style="text-align: center;">View all notifications</a></li>
            </ul>
          </li>

          <!-- TODO: need to check for messages instead of just saying no messages -->
          <li class="dropdown">
            <a href="#" id="messageDropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i style="font-size: 25px; ;" class="icon ion-email"></i></span></a>
            <ul class="dropdown-menu message-dropdown">
              <li style="text-align: center; height: 50px; padding-top: 15px;">No messages</li>
              <li role="separator" class="divider"></li>
              <li><a href="#" style="text-align: center;">View all messages</a></li>
            </ul>
          </li>
          

          <li class="dropdown">
            <a href="#" id="infoDropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon ion-more" style="font-size: 25px;"></i></span></a>
            <ul class="dropdown-menu">
              <li><a href="info/about-us">About us</a></li>
              <li><a href="https://pulsemusic.freshdesk.com">Support</a></li>
              <li><a href="info/terms-of-use">Legal</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Subscription</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#" onclick="signOutUser()">Sign Out</a></li>
            </ul>
          </li>
 
      </ul>
            
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- /.navbar -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Firebase Initialization -->
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    <script src="../js/firebase.js"></script>

    <script>
    
      $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
    </script>


</body>

</html>    
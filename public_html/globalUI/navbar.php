<html>
<head>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

<link href="../css/nav-bar.css" rel="stylesheet">


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
        
        <form id="navSearch" class="navbar-form navbar-left hide">
                <div class="form-group">
                    <input style="width: 500px;" type="text" placeholder="Search" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Discover</button>
            </form>
     <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-contents" id="navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right">
            
            <li style='padding-right: 5px;'>
              <a style="font-family: 'Lato'; font-weight: 400;" class="btn btn-default btn-outline collapsed" href="../auth/login" aria-expanded="false">Sign in</a>
            </li>
            <li>
              <a style="font-family: 'Lato'; font-weight: 400;" class="btn btn-default btn-outline "href="../auth/create" aria-expanded="false">Create account</a>
            </li>
            <li></li>
          </ul>
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    <!-- /.navbar -->

 <!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $(window).scroll(function() {    
        var scroll = $(window).scrollTop();

        //adds the search bar to the navbar
        if (scroll >= 500) {
            //clearHeader, not clearheader - caps H
            $("#navSearch").removeClass("hide");
             $("#navSearch").addClass("show");
        }

        //removes the search bar to the navbar 
        if (scroll < 500) {
            $("#navSearch").addClass("hide");
            $("#navSearch").removeClass("show");
        }
      });
      
    </script>


</body>
</html>    
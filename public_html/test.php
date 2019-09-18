<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pulse</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- Bootstrap Social Buttons -->
    <link href="bootstrap/bootstrap-social/bootstrap-social.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/particles.css">
    <link href="css/searchbar-large.css" rel="stylesheet">
    <link href='css/index/style.css' rel="stylesheet">
    <link href='css/playhover.css' rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>
<div id="particles-js"></div>

<!--navbar-->
<?php require("globalUI/navbar.php"); ?>

<!--signInModal -->    
<?php //require("globalUI/signInModal.php"); ?>

    
    <!-- Header -->
    <a name="about"></a>
    
    <div class="intro-header title-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="earthorbiter">Pulse music</h1>
                        <h3>Building a community for listeners and musicians.</h3>
                        <hr class="intro-divider">
                            <div class="container col-xs-offset-0-5">
                                <div class="row-search">
                                    <!--search box-->
                                    <div id="custom-search-input">
                                        <div class="input-group col-md-12">
                                            <input type="text" class="form-control input-lg button-color" placeholder="Search for artists, bands or songs" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-info btn-lg" type="button">
                                                    <i class="glyphicon glyphicon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end of search box-->
                                </div>
                            </div>

                            <div class="container col-xs-offset-0-5">
                                <div class="row-search">
                                    <!--become artist button-->
                                    <div style="padding-top:40px;">
                                        <div class="input-group col-md-12">
                                            <button id="becomeArtist" type="button" class="btn btn-primary btn-lg">Become an Artist</button>

                                        </div>
                                    </div>
                                    <!--end become artist button-->
                                </div>
                            </div>
                    </div>
                </div>
            </div>   
        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->
    <!-- Page Content -->

    
    <a name="liveFeedback"></a>
    <div class="liveFeedback">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="particles-background" class="vertical-centered-box"></div>
                    <div id="particles-foreground" class="vertical-centered-box"></div>

                        <object id="liveFeedbackLogo" height="250" width="100%" data="img/logo.svg" type="image/svg+xml">
                        </object>

                      

                </div>  

                  <div class="row" style="text-align: center; padding-bottom: 15px;">
                        <div class="col-lg-4"><h2 id="numOfArtists"></h2><span> Artists</span></div>
                        <div class="col-lg-4"><h2 id="numOfListeners"></h2><span> Listeners</span></div>
                        <div class="col-lg-4"><h2 id="numOfSongs"></h2><span> Songs</span></div>
                        </div>  
            </div>    
        </div>    
    </div>
<!--http://placehold.it/200x200-->

	<a  name="trending"></a>
    <div id="topTrending" class="content-section-a">
        <div class="container">
            

                <div class="col-lg-12">
                    <h1 style="font-family: 'Lato'; font-weight: 300; font-size: 40px;" class="page-header">New and Trending</h1>
                </div>

                <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>              
            <img id="trend1" src="" alt="">
              <div class="caption">
                <h4 id="trend1Song">Song Name</h4>
                <p id="trend1Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                              
            <img id="trend2" src="" alt="">
              <div class="caption">
                <h4 id="trend2Song">Song Name</h4>
                <p id="trend2Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                               
            <img id="trend3" src="" alt="">
              <div class="caption">
                <h4 id="trend3Song">Song Name</h4>
                <p id="trend3Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                             
            <img id="trend4" src="" alt="">
              <div class="caption">
                <h4 id="trend4Song">Song Name</h4>
                <p id="trend4Artist">Artist Name</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                              
            <img id="trend5" src="" alt="">
              <div class="caption">
                <h4 id="trend5Song">Song Name</h4>
                <p id="trend5Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                              
            <img id="trend6" src="" alt="">
              <div class="caption">
                <h4 id="trend6Song">Song Name</h4>
                <p id="trend6Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                             
            <img id="trend7" src="" alt="">
              <div class="caption">
                <h4 id="trend7Song">Song Name</h4>
                <p id="trend7Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                               
            <img id="trend8" src="" alt="">
              <div class="caption">
                <h4 id="trend8Song">Song Name</h4>
                <p id="trend8Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                              
            <img id="trend9" src="" alt="">
              <div class="caption">
                <h4 id="trend9Song">Song Name</h4>
                <p id="trend9Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                            
            <img id="trend10" src="" alt="">
              <div class="caption">
                <h4 id="trend10Song">Song Name</h4>
                <p id="trend10Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                              
            <img id="trend11" src="" alt="">
              <div class="caption">
                <h4 id="trend11Song">Song Name</h4>
                <p id="trend11Artist">Artist Name</p>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-4 thumb">
          <div class="thumbnail">
                <a href="#">
                    <span class="play">&#9658;</span>
                    <div class="overlay"></div>
                </a>                            
            <img id="trend12" src="" alt="">
              <div class="caption">
                <h4 id="trend12Song">Song Name</h4>
                <p id="trend12Artist">Artist Name</p>
            </div>
          </div>
        </div>       
        

            <div id="trendingList" class="input-group col-lg-12">
                <button id="trendingListButton" type="button" class="btn btn-primary btn-lg">Discover More</button>
            </div>

        </div>
    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                     <h2 class="text-center">Pulse App coming soon!</h2>    
                    <div id="countdown">  
                        <div class="countdown-section">
                        <span class="h1 days">?</span>
                        <div class="text-center">DAYS</div>
                        </div>
                        <div class="countdown-section">
                        <span class="h1 hours">?</span>
                        <div class="text-center">HRS</div>
                        </div>
                        <div class="countdown-section">
                        <span class="h1 minutes">?</span>
                        <div class="text-center">MINS</div>
                        </div>
                        <div class="countdown-section">
                        <span class="h1 seconds">?</span>
                        <div class="text-center">SECS</div>
                        </div>

                        
                    </div>

                    <div class="col-lg-12">
                        <div id="mc_embed_signup">
                            <form action="//pulsemusic.us15.list-manage.com/subscribe/post?u=67b4e15ea5d409e9f85355813&amp;id=6ac8e3d136" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <h4 style="text-align: center; color: #999;">Want to be notified when the app is live?</h4>
                                 <div class="webflow-style-input"> 
                                    <input class="" type="email" placeholder="Enter your email"></input>
                                    <button type="submit"><i class="icon ion-android-arrow-forward"></i></button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>    

                    
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

                
            <div class="row">
                 <div class="col-lg-12">
                    <h1 style="font-family: 'Lato'; font-weight: 300;">Thanks for listening. Become a fan!</h1>
                    <h3 style="font-family: 'Lato'; font-weight: 300;">Save songs, follow and support artists, discover new music. Without limitation.</h3>
                </div>

                <div style="padding-top: 15px;" class="col-lg-12">
                      <button id="creatAccount" type="button" class="btn btn-primary btn-lg">Create Account</button>
                        <br>
                        <hr class="hr-text" data-content="OR">
                        <br>
                        <span>Already have an account? &nbsp &nbsp</span><button id="signIn" type="button" class="btn btn-default btn-lg">Sign In</button>

                   </div>

                
            </div>

        </div>
        <!-- /.container -->



    </div>
    <!-- /.content-section-a -->

	
    <?php //require("globalUI/socialbar.php"); ?>

    <!--footer-->
    <?php require("globalUI/footer.php"); ?>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   
    <!-- particles.js -->
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src="js/particle-configs/index-particles.js"></script>
    
    
    
    <!-- Firebase Initialization -->
    <script src="https://www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
    <script src="js/firebase.js"></script>

    <!-- Page Script -->    
    <script src="js/index/index.js"></script>
    
</body>

</html>

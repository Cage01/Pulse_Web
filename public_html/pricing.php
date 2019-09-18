<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Pulse Artis Pricing</title>    
	<!-- Bootstrap Core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link href="css/pricing/style.css" rel="stylesheet">
	<link href="css/pricing/hover.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/particles.css">

    <!-- Tooltips -->
    <link href="css/tipped.css" rel="stylesheet">

    <!-- Ion Icons -->
    <link rel='stylesheet prefetch' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    </head>
    <body>
<!--ion-ios-information-outline
ion-ios-information-->

<?php require('globalUI/navbar-transparent.php'); ?>

<div id="particles-js"></div>
	<div id="pricing">
        
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Pricing Guide</h1>
                    <h3>By supporting Pulse it helps us deliver our listeners premium content.</h3>
                    <div class="col-xs-2 col-xs-offset-5" style="padding-bottom: 25px;">
                        <!-- <div class="bootstrap-switch-container" style="width: 256px; margin-left: 0px;">
                            <input style="display: inline-block;" name="monthlyOrAnnual" id="switch-onText" type="checkbox" checked="checked" data-on-text="Monthly" data-off-text="Annually">
                        </div>-->
                        <div id="switcher" class="switch switch--horizontal">
                            <input id="radio-a" type="radio" name="first-switch" checked="checked"/>
                            <label style="padding-right: 10px;" for="radio-a">Monthly</label>
                            <input id="radio-b" type="radio" name="first-switch"/>
                            <label style="padding-left: 8px;" for="radio-b">Annually</label><span class="toggle-outside"><span class="toggle-inside"></span></span>
                        </div>
                        
                    </div>
                    <div class="col-xs-2" style="padding-bottom: 25px;">
                        <label class="label">20% off</label>
                    </div>    
                </div>
			</div>
            <div class="row" style="padding-bottom: 50px;">
                <div class="col-md-4 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Starter</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost warning-bg"><strong id="starter">$7</strong><span class="payPeriod">/MONTH</span></div>
                            <div class="price_table_row">Basic analytics <i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Vote for new songs<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>Bronze</b> level promotion<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Max songs promoted: <b>3</b><i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>6</b> hours of upload time<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Email Support<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>                                                
                        </div>
                        <a href="/artist-creation" id="plan1" class="getStarted btn btn-warning btn-lg btn-block">Get Started</a>
                    </div>
                </div>
        
        
                <div class="col-md-4 col-sm-6 col-xs-12 float-shadow"> 
				<div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> MOST POPULAR</strong></div>                              
       
                    <div class="price_table_container">
                        <div class="price_table_heading">Premium</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost success-bg"><strong id="premium">$14</strong><span class="payPeriod">/MONTH</span></div>
                            <div class="price_table_row">In depth analytics<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Vote for new songs<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>Silver</b> level promotion<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Max songs promoted: <b>5</b><i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>12</b> hours of upload time<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Email Support<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>                                                
                        </div>
                        <a href="/artist-creation" class="getStarted btn btn-success btn-lg btn-block">Get Started</a>
                    </div>
                </div>
        
                <div class="col-md-4 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Master</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost info-bg"><strong id="master">$20</strong><span class="payPeriod">/MONTH</span></div>
                            <div class="price_table_row">in depth analytics<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Vote for new songs<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>Gold</b> level promotion<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Max songs promoted: <b>7</b><i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row"><b>Unlimited</b> upload time<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>
                            <div class="price_table_row">Email Support<i class="icon ion-ios-information-outline info" title="the tooltip"></i></div>                                                
                        </div>
                        <a href="/artist-creation" class="getStarted btn btn-info btn-lg btn-block">Get Started</a>
                    </div>
                </div>
            </div>
            <!-- SECTION 2 -->
            <div class="section-2">
                <div class="row">
                     <div class="col-lg-12">
                        <h1>Discover how Pulse can help you succeed.</h1>
                        <h3>As a pulse artist, us helping you get your music heard is out biggest priority. Click to find out how</h3>
                        

                    </div>
                    <div class="col-xs-2 col-xs-offset-5-5">
                     <button type="button" class="btn btn-primary btn-lg" style="margin-bottom: 20px;">Learn More</button>
                    </div> 
                </div>
                
            </div>
            <!-- END OF SECTION 2 -->
        </div>

          
	</div>

		 <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Tooltips -->
    <!-- TODO: Need to buy commercial License -->
    <script src="js/tipped/tipped.js"></script>
    
    <!-- particles.js -->
    <script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src="js/particle-configs/pricing-particles.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            Tipped.create('.info');
        });
        
    $('#switcher').click(function(){
        if($('#radio-a').is(':checked')) { 
            $('#starter').text('$7 ');
            $('#premium').text('$14 ');
            $('#master').text('$20 ');

            $('.payPeriod').text('/MONTH');
         }

        if($('#radio-b').is(':checked')) { 
            $('#starter').text('$68 ');
            $('#premium').text('$135 ');
            $('#master').text('$192 ');

            $('.payPeriod').text('/YEAR');
         }
    });  
    
    /*
    $('#plan1').click(function() {
      
        $('#pricing').animate({
            left: '-50%'
        }, 500, function() {
            $('#pricing').css('left', '150%');
            
        });

        $('#pricing').next().animate({
            left: '50%'
        }, 500);
        });
    });
    */
    </script>  


</body>
</html>            

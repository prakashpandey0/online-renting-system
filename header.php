
<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['ID'])) {
    $ID = true;
} else {
    $ID = false;
}
?>
<html>
    <head>
        <title>HOME RENTING</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="search.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
        </script>
        <!-- start-smoth-scrolling -->
        <!--start manu -->
        <link href="css/flexy-menu.css" rel="stylesheet">
        <script type="text/javascript" src="js/flexy-menu.js"></script>
        <script type="text/javascript">$(document).ready(function () {
    $(".flexy-menu").flexymenu({speed: 400, type: "horizontal", align: "right"});
});</script>
        <!--start slider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 1
    $("#slider1").responsiveSlides({
        maxwidth: 1500,
        speed: 600
    });
});
        </script>
    </head>
    <style>
        #bg{ background-color: #CCFF99;}
    </style>
    <body id="bg">
        <!-- header -->

        <div class="header">
            <div class="container">
                <div class="header-nav">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php" >HOME<span class="glyphicon glyphicon-home" aria-hidden="true"></span>RENTING</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="act"><a href="about.php">About</a></li>


                                <?php
                                if ($ID == true) {
                                    echo '<li class="act"><a href="logout.php">logout</a></li>';
                                    echo '<li class="act"><a href="profile.php">profile</a></li>';
                                } else {
                                    echo'<li class="act"><a href="registration.php">Signup</a></li>';
                                    echo'<li class="act"><a href="login.php">Login</a></li>';
                                }
                                ?>




                                <li class="act"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>

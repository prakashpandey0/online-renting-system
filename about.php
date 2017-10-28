
<!DOCTYPE html>
<html>
    <head>
        <title>Home Renting</title>
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
    </head>

    <body>
        <?php include 'header.php'; ?>

        <!-- about -->
        <div class="about">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>About</li>
                </ol>
                <div class="about-top">
                    <div class="col-md-5 about-top-left">
                        <img src="images/2.png" class="img-responsive" alt=" " />
                    </div>
                    <div class="col-md-7 about-top-right">
                        <h3> HR.com is a free rental site that offers a large selection of trusted room for rent. 
                            Our large selection of listings and helpful tools will make it easy for you to find an affordable room quickly.</h3>
                        <p>HR.com promises to be the most preferred way of finding your dream room and is committed to help you make 
                            a wiser room decision as a tenent. Over a period of time, we want our esteemed users 
                            to acknowledge HR.com as an "expert friend" that can help them make one of their biggest and most 
                            important decisions in life in a sharper, faster and easier way.</p>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>

        <div id="team" class="team">
            <div class="container">
                <h3>Meet Our Staff</h3>
                <div class="team-grids">
                    <div class="col-md-3 team-grid">
                        <img src="images/3.png" class="img-responsive" alt=" " />
                        <h4>MISS NAIDU</h4>
                        <p>FOR ANY INFORMATION RELEATED TO HOME CALL ME:011-2345634</p>
                    </div>
                    <div class="col-md-3 team-grid">
                        <img src="images/6.png" class="img-responsive" alt=" " />
                        <h4>MARK JOHNSON</h4>
                        <p>INFORMATION RELEATED TO FINANACE CALL ME:011-4356782</p>
                    </div>


                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
        <!-- here stars scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //here ends scrolling icon -->
        <!-- for bootstrap working -->
        <script src="js/bootstrap.js"></script>
        <!-- //for bootstrap working -->
    </body>
</html>
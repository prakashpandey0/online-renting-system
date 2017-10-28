<?php include'conn.php'; ?>
<!DOCTYPE html>
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
        <!-- contact -->

        <div class="container">

            <center><h3>How To Find Us</h3></center>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d49841.86558755707!2d29.406200000000002!3d38.6691883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1434690788056" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="paragraph">
                <p><h3>HR.com is a free rental site that offers a large selection of trusted rooms for rent. 
                    Our large selection of listings and helpful tools will make it easy for you to find an affordable rooms quickly.</h3></p>
            </div>
            <div class="contact-grids">
                <div class="contact-grid">
                    <h4>LOCATION</h4>
                    <p class="dot">456,
                        <span>gtbnagar, .</span>
                </div>
                <div class="contact-grid">
                    <h4>CONTACT INFO</h4>
                    <p class="phone">+9100 2478 0954.
                        <span>+9100 2476 8907.</span>
                </div>
                <div class="contact-grid">
                    <h4>MAIL US</h4>
                    <p class="message"><a href="mailto:prakash.pandey911@.com"></a>prakash.pandey911@gmail.com</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Subject = $_POST['Subject'];
                $Message = $_POST['Message'];

                $query = mysqli_query($mycon, "INSERT INTO contact" .
                        "(Name,Email,Subject,Message)" .
                        "VALUES" .
                        "('$Name',' $Email','$Subject','$Message')");
                if ($query) {
                    echo "<script>alert('THANX WE WILL CONTACT YOU REGARDING YOUR QUERY');</script>";
                    echo "<script>window.location.href='index.php';</script>";
                } else {
                    echo "<script>alert('SERVER PROBLEM PLEASE TRY LATER');</script>";
                }
            }
            ?>

            <div class="contact-form">
                <h3>Contact Form</h3>
                <form method="post">
                    <input type="text"  name="Name" placeholder="Name" required=" ">
                    <input type="text"  name="Email" placeholder="Email" required=" ">
                    <input type="text" name="Subject" placeholder="Subject" required=" ">
                    <div class="clearfix"> </div>
                    <textarea placeholder="Message"  name="Message" required=" "></textarea>
                    <input type="submit"  name="submit" value="SEND">
                </form>
            </div>
        </div>


        <!-- //contact -->	
        <?php include'footer.php'; ?>
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
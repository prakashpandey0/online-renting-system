
<?php
include 'header.php';
include 'conn.php';
?>



<div id="services2" class="featured-services">
    <div class="container">			
        <h3>AVAILABLE ROOMS</h3>

        <?php
        if (isset($_GET['submit'])) {
            $city = $_GET['City'];
            $location = $_GET['Location'];
            $roomtype = $_GET['Room_Type'];
            $query = mysqli_query($mycon, "SELECT * FROM room_information WHERE Enter_city ='$city'  AND Location='$location' AND Room_Type='$roomtype' ");


            if (mysqli_num_rows($query) > 0) {

                while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <div class="col-md-4" style=" margin-bottom:30px;">
                        <div class="col-md-12" style="border:1px solid #ddd; padding:10px;">
                            <div class="row">
                                <div class="col-md-12">

                                    <img src="Images/<?php echo $row['image']; ?>"  class="img-responsive" alt=" " style="height:250px;" />
                                </div>
                                <div class="col-md-12">
                                    <big><h4>SPECIFICATION</h4></big>
                                    <small>
                                        <div class="col-md-6">Room Type: </div><div class="col-md-6"><?php echo $row['Room_Type']; ?></div>
                                        <div class="col-md-6">City: </div><div class="col-md-6"><?php echo $row['Enter_City']; ?></div>
                                        <div class="col-md-6">Location: </div><div class="col-md-6"><?php echo $row['Location']; ?></div>
                                        <div class="col-md-6">Price:</div><div class="col-md-6">$<?php echo $row['Price_Range']; ?></div>
                                    </small>
                                </div>
                                <div class="col-md-12" style=" margin-top:10px;">
                                    <a class="btn btn-info" href='fetch1.php?fetch=<?php echo $row['ID']; ?>'>more detail</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                }
            }
        }
        ?>


        
    </div>
</div>


<?php
include'footer.php';
?>
</body>
</html>
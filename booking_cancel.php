<?php include'header.php'; ?>
<?php include 'conn.php'; ?>
<?php
$ID = $_SESSION['ID'];
?> 

<?php
$query = mysqli_query($mycon, "SELECT * FROM Booking WHERE user_id ='$ID'");
if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    ?>
    <div class="container" style="margin:30px 10px; ">

        <div class="col-md-6 col-md-offset-3" style="border:1px solid #000; background-color: #66FF33;">
            <h2>Cancel booking</h2>

            <form method="post" action="">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>User ID:</label>
                        <input name="user_id" type="text" class="form-control" value=" <?php echo $row['user_id']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Booking ID</label>
                        <input name="Booking id" type="text" class="form-control" value=" <?php echo $row['ID']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>City</label>
                        <input name="Enter_City" type="text" class="form-control" value="<?php echo $row['Enter_City']; ?>" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Room type</label>
                        <input name="Room_type" type="text" class="form-control" value="<?php echo $row['Room_type']; ?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Check-IN</label>
                        <input name="check_in" type="text" class="form-control" value="<?php echo $row['check_in']; ?>" >
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">			  
                        <label>Check-OUT</label>
                        <input name="check_out" type="text" class="form-control" value="<?php echo $row['check_out']; ?>">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">		 
                        <label>Price</label>
                        <input name= "Price" type="number"  class="form-control" value="<?php echo $row['Price']; ?>" >
                    </div>
                </div> <!--taking more than 10 -->

                <div class="col-md-12">
                    <div class="form-group">

                        <input type="submit" name="Submit" class="btn btn-info" value="Cancel" >
                    </div>
                </div>
        </div>
        <div class="clearfix"> </div>
        <?php
    }
    if (isset($_POST['Submit'])) {
        $Enter_City = $_POST['Enter_City'];
        $Room_type = $_POST['Room_type'];
        $Price = $_POST['Price'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $user_id = $_POST['user_id'];
        $Date = date('y-m-d');

        $query1 = mysqli_query($mycon, "INSERT INTO booking_cancel" .
                "(Enter_City, Room_type, Price, check_in, check_out,user_id,Date)" .
                "VALUES" .
                "('$Enter_City', '$Room_type','$Price', '$check_in', '$check_out','$user_id','$Date' )");

        if ($query1) {
            echo"data inserted";

            if ($_REQUEST['bookid']) {
                $Book_ID = $_REQUEST['bookid'];
                $query1 = mysqli_query($mycon, "DELETE   FROM booking WHERE ID='$Book_ID'");
                if ($query1) {
                    echo"<script>alert('Thankyou Your Room is Cancel');</script>";
                    echo"<script>window.location.href='profile.php';</script>";
                    echo"data deleted";
                }
            } else {
                echo"NO";
            }
        }
    }
    ?>  
</form>
</div>
</div>	

<?php
include'footer.php';
?>	
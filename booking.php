
<!-- Booking-->
<?php
include 'header.php';
if (isset($_SESSION['ID'])) {
    $ID = $_SESSION['ID'];
} else {

    echo"<script >window.location.href='login.php' ;</script>";
}
?> 
<?php
include 'conn.php';

if (isset($_POST['submit'])) {

    $Enter_City = $_POST['Enter_City'];
    $Room_type = $_POST['Room_type'];
    $Price = $_POST['Price'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $user_id = $ID;

    $sql = "INSERT INTO booking" .
            "(	Enter_City , Room_type,  Price, check_in, check_out, user_id)" .
            "VALUES" .
            "('$Enter_City','$Room_type','$Price','$check_in','$check_out','$user_id' )";

    $result = mysqli_query($mycon, $sql);
    if ($result) {
        unset($_POST['Enter_City']);
        unset($_POST['Room_type']);
        unset($_POST['Price']);


        echo"<script >alert('your room is booked for payment check your profile.</h1>');</script>";
        echo"<script >window.location.href='index.php' ;</script>";
    } else {
        echo "no result";
    }
}
?>

<?php
if (isset($_REQUEST['bookid'])) {
    $id = $_REQUEST['bookid'];
    $query = mysqli_query($mycon, "select * from room_information WHERE ID='$id' ");
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {

            //var_dump($row);//it show all data from database.
            ?>
            <div class="container" style="margin:30px 10px; ">

                <div class="col-md-6 col-md-offset-3" style="border:1px solid #000; background-color: #66FF33;">
                    <h2>Booking Form</h2>

                    <form method="post" action="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter city:</label>
                                <input name="Enter_City" type="text" class="form-control" value="<?php echo $row['Enter_City'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Room type:</label>
                                <input name="Room_type" type="text" class="form-control" value="<?php echo $row['Room_Type'] ?>">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">

                                <label>Price:</label>
                                <input name="Price" type="number" class="form-control" value="<?php echo $row['Price_Range'] ?>">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Check-in:</label>
                                <input name="check_in" type="date" class="form-control" value="<?php echo isset($_POST['check_in']) ? $_POST['check_in'] : '' ?>" required >
                            </div>
                        </div> 

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Check-out:</label>
                                <input name="check_out" type="date" class="form-control" value="<?php echo isset($_POST['check_out']) ? $_POST['check_out'] : '' ?>" required >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info"value="Book" >
                            </div>
                        </div>

                        <div class="clearfix"> </div>

                    </form>
            <?php
        }
    }
}
?>
    </div>
</div>
</div>



<?php
include 'footer.php';
?>
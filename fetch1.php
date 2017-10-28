<?php
include 'header.php';
?>

<?php
include 'conn.php';
if (isset($_REQUEST['fetch'])) {
    $id = $_REQUEST['fetch'];
    $query = mysqli_query($mycon, "select * from room_information WHERE ID='$id' ");
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <div class="container" style="padding:10px 0;">
                <div class="col-md-12">
                    <img src="Images/<?php echo $row['image']; ?>"  class="col-md-5" width="200" alt=" " /></img><br>
                    <div class="col-md-7">
                        <div class="col-md-3">product id:</div><div class="col-md-9"> <?php echo $id; ?></div>
                        <div class="col-md-3">City:</div><div class="col-md-9"><?php echo $row['Enter_City']; ?></div>
                        <div class="col-md-3">Price:</div><div class="col-md-9"><?php echo "$" . $row['Price_Range']; ?></div>
                        <div class="col-md-3">Room Type:</div><div class="col-md-9"><?php echo $row['Room_Type']; ?></div>
                        <div class="col-md-3">Location:</div><div class="col-md-9"><?php echo $row['Location']; ?></div>    
                        <div class="col-md-3">description:</div><div class="col-md-9"><?php echo $row['Description']; ?></div>
                        <?php
                        if (isset($_SESSION['ID'])) {
                            ?>
                            <a href='booking.php?bookid=<?php echo $row['ID']; ?>'type="submit" class="btn btn-info" name="book" value="">Book Now</a>
                        <?php } else { ?>
                            <a href='login.php?bookid=<?php echo $row['ID']; ?>'type="submit" class="btn btn-info" name="book" value="">Book Now</a>
                        <?php } ?>
                    </div>

                <?php }
            }
        } else { ?>
            <div class="col-md-12">Sorry, No Record Found.</div>
<?php } ?> 
    </div>
</div>
<?php
include'footer.php';
?>
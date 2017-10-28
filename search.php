

<?php
include 'conn.php';
?>



<div class="container">
    <div class="row">

        <h2>Search Room</h2>
        <div class="col-md-12" style="margin-bottom:30px;">
            <form method="get" action="roominfo.php" >
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Select city:</label>
                        <select name="City" class="form-control" >
                            <?php
                            $query1 = mysqli_query($mycon, "SELECT * FROM city");
                            if (mysqli_num_rows($query1) > 0) {
                                while ($row = mysqli_fetch_assoc($query1)) {
                                    ?>  

                                    <option value="<?php echo $row['City']; ?>"><?php echo $row['City']; ?></option>
                                <?php }
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Select Location:</label>
                        <select name="Location" class="form-control">
                            <?php
                            $query1 = mysqli_query($mycon, "SELECT * FROM city");
                            if (mysqli_num_rows($query1) > 0) {
                                while ($row = mysqli_fetch_assoc($query1)) {
                                    $c_id = $row['ID'];
                                    $query2 = mysqli_query($mycon, "SELECT * FROM location WHERE C_ID='$c_id'");
                                    if (mysqli_num_rows($query2) > 0) {
                                        while ($row1 = mysqli_fetch_assoc($query2)) {
                                            ?>
                                            <option value="<?php echo $row1['Location']; ?>"><?php echo $row1['Location']; ?></option>
                                        <?php }
                                    }
                                }
                            } ?>
                        </select>
                    </div>
                </div>  
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Select Room type:</label>
                        <select name="Room_Type" class="form-control">
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <center>
                        <input type="submit" name="submit" value="search" class="btn btn-info" />
                    </center>
                </div>

            </form>
        </div>
    </div>
</div>

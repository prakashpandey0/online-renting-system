<?php
include 'header.php';
?>

<?php
include 'conn.php';

if (isset($_POST['Submit'])) {

    $First_Name = $_POST['First_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Permanent_Address = $_POST['Permanent_Address'];
    $Corresponding_Address = $_POST['Corresponding_Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Password = $_POST['Password'];
    $Date = date('Y-m-d');

    $error = "";
    /**
     * validation starts from here.
     */
    if ($First_Name == "") {
        $error.="Please Enter Your First Name.";
    } else if (strlen($First_Name) < 3) {
        $error.="Please Enter Min. 3 Char. in First Name.";
    } else if (strlen($First_Name) > 30) {
        $error.="Please Enter Max. 30 Char. in First Name.<br/>";
    }

    if (strlen($Middle_Name) < 4) {
        $error.="Please Enter Min. 4 Char. in Middle Name.<br/>";
    } else if (strlen($Middle_Name) > 40) {
        $error.="Please Enter Max. 40 Char. in Middle Name.<br/>";
    }

    if ($Last_Name == "") {
        $error.="Please Enter Your Last Name.<br/>";
    } else if (strlen($Last_Name) < 3) {
        $error.="Please Enter Min. 3 Char. in Last Name.<br/>";
    } else if (strlen($Last_Name) > 50) {
        $error.="Please Enter Max. 50 Char. in Last Name.<br/>";
    }

    if ($Permanent_Address == "") {
        $error.="Please Enter Permanent Address.<br/>";
    } else if (strlen($Permanent_Address) < 10) {
        $error.="Please Enter Min. 10 Char. in Permanent Address.<br/>";
    } else if (strlen($Permanent_Address) > 100) {
        $error.="Please Enter Max. 100 Char. in Permanent Address.<br/>";
    }

    if ($Corresponding_Address == "") {
        $error.="Please Enter Corresponding Address.<br/>";
    } else if (strlen($Corresponding_Address) < 10) {
        $error.="Please Enter Min. 10 Char. in Corresponding Address.<br/>";
    } else if (strlen($Corresponding_Address) > 100) {
        $error.="Please Enter Max. 100 Char. in Corresponding Address.<br/>";
    }

    if (strlen($Phone_Number) < 10) {
        $error.="Please Enter Min. 10 number. in phone number.<br/>";
    } else if (strlen($Phone_Number) > 10) {
        $error.="Please Enter MAx. 10 number. in phone number.<br/>";
    }

    if (strlen($Password) < 10) {
        $error.="Please Enter Min. 10 number. in password.<br/>";
    } else if (strlen($Phone_Number) > 10) {
        $error.="Please Enter MAx. 10 number. in password.<br/>";
    }
}
?>



<div class="container" style="margin:30px 10px; ">

    <div class="col-md-6 col-md-offset-3" style="border:2px solid #FFCC00; background-color: #CC6600;">
        <h2>Update Profile</h2>

        <form method="post" action="#">
            <div class="col-md-12">
                <div class="form-group">
                    <?php
                    if (isset($_REQUEST['updateid'])) {
                        $id = $_REQUEST['updateid'];
                        $query2 = mysqli_query($mycon, "SELECT * FROM registration WHERE ID='$id'");
                        if (mysqli_num_rows($query2) > 0) {
                            while ($row = mysqli_fetch_assoc($query2)) {
                                ?>
                                <input type="hidden" name="update_id" value="<?php echo $row['ID']; ?>">
                                <label>First Name:</label>
                                <input name="First_Name" type="text" class="form-control" value="<?php echo isset($row['First_Name']) ? $row['First_Name'] : '' ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Middle Name:</label>
                                <input name="Middle_Name" type="text" class="form-control" value="<?php echo isset($row['Middle_Name']) ? $row['Middle_Name'] : '' ?>" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Last Name:</label>
                                <input name="Last_Name" type="text"  class="form-control" value="<?php echo isset($row['Last_Name']) ? $row['Last_Name'] : '' ?>" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Permanent address:</label>
                                <input name="Permanent_Address" type="text" class="form-control" value="<?php echo isset($row['Permanent_Address']) ? $row['Permanent_Address'] : '' ?>" >
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Corresponding address:</label>
                                <input name="Corresponding_Address" type="text" class="form-control" value="<?php echo isset($row['Corresponding_Address']) ? $row['Corresponding_Address'] : '' ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone number: </label>
                                <input name= "Phone_Number" type="number" class="form-control" value="<?php echo isset($row['Phone_Number']) ? $row['Phone_Number'] : '' ?>" >
                            </div>
                        </div> 
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password:</label>
                                <input name="Password" type="password" class="form-control" value="<?php echo isset($row['Password']) ? $row['Password'] : '' ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info" value="Update" >
                            </div>
                        </div>

                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>

            <?php
        }
    }
} else {
    echo "no result";
}
?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['update_id'];
    $First_Name = $_POST['First_Name'];
    $Middle_Name = $_POST['Middle_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Permanent_Address = $_POST['Permanent_Address'];
    $Corresponding_Address = $_POST['Corresponding_Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Password = $_POST['Password'];
    $Date = date('Y-m-d');

    $query1 = mysqli_query($mycon, "UPDATE registration SET First_Name='" . $First_Name . "', Middle_Name='" . $Middle_Name . "', Last_Name='" . $Last_Name . "', Permanent_Address='" . $Permanent_Address . "', Corresponding_Address='" . $Corresponding_Address . "', Phone_Number='" . $Phone_Number . "', Password='" . $Password . "' WHERE ID='$id'");
    if ($query1) {
        echo "<script>alert('your profile is updated');</script>";
        echo "<script>window.location.href='profile.php';</script>";
    } else {
        echo "no action";
    }
}
?>	


<?php
include 'footer.php';
?>
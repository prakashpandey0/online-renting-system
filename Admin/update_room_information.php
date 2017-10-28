<?php
include 'header.php';
?>

<?php
include 'conn.php';

if (isset($_POST['submit'])) {



    $Enter_City = $_POST['Enter_City'];
    $Room_Type = $_POST['Room_type'];
    $Size = $_POST['Size'];
    $Location = $_POST['Location'];
    $Price_Range = $_POST['Price_Range'];
    $Description = $_POST['Description'];
    $Image_1 = "";
    $filename = $_FILES['Image_1']['name'];
    $path = "../Images/" . $filename;
    $tempname = $_FILES['Image_1']['tmp_name'];
    move_uploaded_file($tempname, $path);

    $error = "";

    if ($Enter_City == "") {
        $error.="Please Enter City.<br/>";
    } else if (strlen($Enter_City) < 3) {
        $error.="Please Enter Min. 3 Char. in city.<br/>";
    } else if (strlen($Enter_City) > 40) {
        $error.="Please Enter Max. 40 Char. in city.<br/>";
    }

    if ($Room_Type == "") {
        $error.="Please Enter Room type.<br/>";
    } else if (strlen($Room_Type) < 4) {
        $error.="Please Enter Min. 4 Char. in  Room type.";
    } else if (strlen($Room_Type) > 30) {
        $error.="Please Enter Max. 30 Char. in Room type.<br/>";
    }

    if ($Price_Range == "") {
        $error.="Please Enter price.<br/>";
    } else if (strlen($Price_Range) < 4) {
        $error.="Please Enter Min. 4 Number. in  price.<br/>";
    } else if (strlen($Price_Range) > 20) {
        $error.="Please Enter Max. 20 Number. in price.<br/>";
    }

    if ($Location == "") {
        $error.="Please Enter loaction.<br/>";
    } else if (strlen($Location) < 5) {
        $error.="Please Enter Min. 5 Char. in location.<br/>";
    } else if (strlen($Location) > 35) {
        $error.="Please Enter Max. 35 Char. in loaction.<br/>";
    }


    if ($Description == "") {
        $error.="Please Enter Description<br/>.";
    } else if (strlen($Description) < 5) {
        $error.="Please Enter Min. 5 Char. in Description.<br/>";
    } else if (strlen($Location) > 35) {
        $error.="Please Enter Max. 35 Char. in Description.<br/>";
    }
}
?>


<div class="contact">

    <div class="contact-form">
        <h2>Room Information Form</h2>


        <form method="post" action="" enctype="multipart/form-data">
<?php
if (isset($_REQUEST['updateid'])) {
    $id = $_REQUEST['updateid'];

    $query2 = mysqli_query($mycon, "SELECT * FROM room_information WHERE ID='$id'");

    if (mysqli_num_rows($query2) > 0) {

        while ($row = mysqli_fetch_assoc($query2)) {
            ?>

                        <input type="hidden" name="update_id" value="<?php echo $row['ID'] ?>">
                        Enter City:<br><input name="Enter_City" type="text" value="<?php echo isset($row['Enter_City']) ? $row['Enter_City'] : '' ?>" ><br><br>

                        Enter Room type:<br><input name="Room_type" type="text" value="<?php echo isset($row['Room_Type']) ? $row['Room_Type'] : '' ?>" ><br><br>

                        Enter Room Size:<br><input name="Size" type="text" value="<?php echo isset($row['Size']) ? $row['Size'] : '' ?>"><br><br>

                        Price Range:<br><input name="Price_Range" type="number" value="<?php echo isset($row['Price_Range']) ? $row['Price_Range'] : '' ?>" ><br><br>

                        Location:<br><input name="Location" type="text" value="<?php echo isset($row['Location']) ? $row['Location'] : '' ?>" ><br><br>

                        Descrpition:<br><input name="Description" type="text" value="<?php echo isset($row['Description']) ? $row['Description'] : '' ?>" ><br><br>

                        Upload image:<input type="file" name="Image_1" value="<?php echo isset($row['Image_1']) ? $row['Image_1'] : '' ?>" ><br><br>

                        <input type="submit" name="submit" value="update" ><br><br>

                        <div class="clearfix"> </div>
                    </form>

                </div>
            </div>
            <?php
        }
    } else {
        echo "no data";
    }
}
?>
<?php
if (isset($_POST['submit'])) {
    $id = $_POST['update_id'];
    $Enter_City = $_POST['Enter_City'];
    $Price_Range = $_POST['Price_Range'];
    $Room_Type = $_POST['Room_type'];
    $Size = $_POST['Size'];
    $Location = $_POST['Location'];
    
    $Description = $_POST['Description'];

    $query1 = mysqli_query($mycon, "UPDATE room_information SET Enter_City='" . $Enter_City . "', Price_Range='" . $Price_Range . "', Room_Type='" . $Room_Type . "', Size='" . $Size . "', Location='" . $Location . "', image='" . $path . "', Description='" . $Description . "' WHERE ID='$id'");
    if ($query1) {
        echo "data updated";
    } else {
        echo "no action";
    }
}
?>


<?php
include 'footer.php';
?>		
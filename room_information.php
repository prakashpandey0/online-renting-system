<?php include'header.php'; ?>

<?php
include 'conn.php';

if (isset($_POST['submit'])) {



    $Enter_City = $_POST['Enter_City'];
    $Room_Type = $_POST['Room_type'];
    $Location = $_POST['Location'];
    $Price_Range = $_POST['Price_Range'];
    $Description = $_POST['Description'];
    $Image_1 = "";
    $filename = $_FILES['Image_1']['name'];
    $path = "Images/" . $filename;
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
    } else if (strlen($Description) > 200) {
        $error.="Please Enter Max. 200 Char. in Description.<br/>";
    }





    if ($error == "") {

        $query = mysqli_query($mycon, "INSERT INTO room_information (Enter_City, Price_Range, Room_Type, Location, image, Description) VALUES('$Enter_City', '$Price_Range', '$Room_Type', '$Location', '$path', '$Description')");
        //var_dump($query);					
//$result= mysqli_query($mycon,$sql);
        if ($query) {

            unset($_POST['Enter_City']);
            unset($_POST['Room_Type']);
            unset($_POST['Location']);
            unset($_POST['Price_Range']);
            unset($_POST['Image_1']);
            unset($_POST['Description']);

            echo "form submited successfully.";
        } else {
            echo "no result";
        }
    } else {
        echo $error;
    }
}
?>

<div class="contact">

    <div class="contact-form">
        <h2>Room Information Form</h2>


        <form method="post" action="" enctype="multipart/form-data">


            Enter City:<br><input name="Enter_City" type="text" value="<?php echo isset($_POST['Enter_City']) ? $_POST['Enter_City'] : '' ?>" ><br><br>

            Enter Room type:<br><input name="Room_type" type="text" value="<?php echo isset($_POST['Room_Type']) ? $_POST['Room_Type'] : '' ?>" ><br><br>


            Price Range:<br><input name="Price_Range" type="number" value="<?php echo isset($_POST['Price_Range']) ? $_POST['Price_Range'] : '' ?>" ><br><br>

            Location:<br><input name="Location" type="text" value="<?php echo isset($_POST['Location']) ? $_POST['Location'] : '' ?>" ><br><br>

            Descrpition:<br><input name="Description" type="text" value="<?php echo isset($_POST['Description']) ? $_POST['Description'] : '' ?>" ><br><br>

            Upload image:<input type="file" name="Image_1" value="<?php echo isset($_POST['Image_1']) ? $_POST['Image_1'] : '' ?>" ><br><br>

            <input type="submit" name="submit" value="submit" ><br><br>

            <div class="clearfix"> </div>
        </form>

    </div>
</div>
</div>

<?php
include 'footer.php';
?>		
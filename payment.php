<?php include 'header.php'; ?>
<html>
    <head>
        <title>payment</title>
    </head>
    <body>
        <?php include 'conn.php'; ?>

        <?php
        if (isset($_REQUEST['userid'])) {
            $user_id = $_REQUEST['userid'];

            $query = mysqli_query($mycon, "SELECT * FROM booking WHERE user_id='$ID'");
            $row = mysqli_fetch_assoc($query);
            $Product_ID = $row['ID'];
            $Price = $row['Price'];


            $query1 = mysqli_query($mycon, "SELECT * FROM registration WHERE ID='$ID'");
            $row = mysqli_fetch_assoc($query1);
            $UserName = $row['First_Name'];
            $Phone_Number = $row['Phone_Number'];
            $Email_id = $row['Email_id'];
        }
        ?>

        <?php
        if (isset($_POST['submit'])) {

            $Product_ID = $_POST['Product_ID'];
            $UserName = $_POST['UserName'];
            $user_id = $_POST['user_id'];

            $Phone_Number = $_POST['Phone_Number'];
            $Price = $_POST['Price'];


            $query2 = mysqli_query($mycon, "INSERT INTO payment" .
                    "(user_id,Product_ID, User_Name, Amount, Phone_Number )" .
                    "VALUES" .
                    "('$user_id','$Product_ID','$UserName', '$Price', '$Phone_Number')");

            if ($query2) {
                echo "<script>alert('payment is completed');</script>";
                echo "<script>window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('SERVER ERROR CONTACT TO OUR STAFF');</script>";
            }
        }
        ?>

        <div class="container" style="margin:30px 0px;">

            <div class="col-md-6 col-md-offset-3" style="border:1px solid #000;">
                <h2>Payment</h2>

                <form method="post" action="">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Product ID:</label>
                            <input name="Product_ID" type="text" class="form-control" value="<?php echo $Product_ID; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>UserName:</label>
                            <input name="UserName" type="text" class="form-control" value="<?php echo $UserName; ?>" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>User ID:</label>
                            <input name="user_id" type="text" class="form-control" value="<?php echo $user_id; ?>" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Amount:</label>
                            <input name="Price" type="text" class="form-control" value="<?php echo $Price; ?>" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Phone Number:</label>
                            <input name="Phone_Number" type="text" class="form-control" value="<?php echo $Phone_Number; ?>" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">             
                            <input type="submit" name="submit" class="btn btn-info" value="Pay" >
                        </div>
                    </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </form>
</div>
</div>
</body>
</html>

<?php include'footer.php'; ?>
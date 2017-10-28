<?php include'header.php';?>

<?php include'conn.php';?>

<?php
$ID=$_SESSION['ID'];
?>
<div class="container" style="margin:30px 0px;">
<div class="row">
<?php
$query=mysqli_query($mycon,"SELECT * FROM registration WHERE ID='$ID'");
if(mysqli_num_rows($query) > 0){
 while($row=mysqli_fetch_assoc($query)){
//var_dump($row);
?>
    <div class="col-md-6 ">
            <div class="col-md-12" style="background-color: #66FF33; padding:5px;">
                <div class="col-md-6">first Name:</div>
                <div class="col-md-6"><?php echo $row['First_Name'];?></div>
                
                <div class="col-md-6">Last Name:</div>
                <div class="col-md-6"><?php echo $row['Last_Name'];?></div>
                <div class="col-md-6">Address:</div>
                <div class="col-md-6"><?php echo $row['Permanent_Address'];?></div>
                <div class="col-md-6">Phone Number:</div>
                <div class="col-md-6"><?php echo $row['Phone_Number'];?></div>
				<div class="col-md-6">Email-id:</div>
                <div class="col-md-6"><?php echo $row['Email_id'];?></div>
                <div class="col-md-12"><a href="update_profile.php?updateid=<?php echo $row['ID'];?>" type="submit" class="btn btn-info" name="book" value="">Update Detail</a></div>
            </div>
    </div>
    
<?php
}}else{

echo "SEVER PROBLEM";
} ?>
		
    <div class="col-md-6">
    		<?php
			$query=mysqli_query($mycon,"SELECT * FROM Booking WHERE user_id ='$ID'");
				if(mysqli_num_rows($query) > 0){
					while($row=mysqli_fetch_assoc($query)){
					$id=$row['ID']; //Booking id 
			?>
            <div class="col-md-12" style="background-color: #FF9966; padding:5px;">
                <div class="col-md-6">Booking id:</div>
                <div class="col-md-6"><?php echo $row['ID'];?></div>
                <div class="col-md-6">City:</div>
                <div class="col-md-6"><?php echo $row['Enter_City'];?></div>
                <div class="col-md-6">Room type:</div>
                <div class="col-md-6"><?php echo $row['Room_type'];?></div>
                <div class="col-md-6">Check-in:</div>
                <div class="col-md-6"><?php echo $row['check_in'];?></div>
                <div class="col-md-6">Check-out:</div>
                <div class="col-md-6"><?php echo $row['check_out'];?></div>
                <div class="col-md-6">Price:</div>
                <div class="col-md-6"><?php echo "$".$row['Price'];?></div>
				
				
                <?php 
                       					
				$query3=mysqli_query($mycon,"SELECT * FROM payment WHERE Product_ID='$id' ");
				if(mysqli_num_rows($query3) > 0){
				?>
                       
                        				
				  <div class="col-md-6"><a href="booking_cancel.php?bookid=<?php echo $row['ID'];?>" type="submit" class="btn btn-info" name="book" value="">Cancel Booking</a></div>
				  <?php }else{ ?>
					<div class="col-md-6"><a href="payment.php?userid=<?php echo $ID;?>" type="submit" class="btn btn-info" name="payment" value="">Payment</a></div>
				<?php } ?>
			</div>
		
            <div class="clearfix"></div>
             <?php
			}}else{
			echo "you have not booked any room";
			} ?>
    
	</div>
   
</div>
</div>
<?php include'footer.php';?>

 
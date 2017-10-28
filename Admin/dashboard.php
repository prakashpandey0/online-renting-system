<?php include'header.php';?>
<?php include 'conn.php';?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
<h3>Registered User</h3>

    <table class="table table-bordered small">
        <tr>
        <td>S.no</td>
        <td>First_Name</td>
        <td>Last_Name</td>
        <td>Permanent_Address</td>
        <td>Phone_Number</td>
        
        </tr>
        <?php
        $query=mysqli_query($mycon,"SELECT * FROM registration");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
         
        ?>
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['First_Name'];?></td>
        <td><?php echo $row['Last_Name'];?></td>
        <td><?php echo $row['Permanent_Address'];?></td>
        <td><?php echo $row['Phone_Number'];?></td>
        
		</tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
	</table>
    </div>
 		<div class="col-md-6">
<h3>Booking Detail</h3>
 <table class="table table-bordered small">
     <tr>
        <td>S.no</td>
        <td>Enter_City</td>
        <td>Room_type</td>
        <td>Price</td>
        
        
     </tr>

		<?php
        $query=mysqli_query($mycon,"SELECT * FROM booking");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
        
        ?>
        
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['Enter_City'];?></td>
        <td><?php echo $row['Room_type'];?></td>
        <td><?php echo $row['Price'];?></td>
        
        </tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
        </table>
        </div>
	</div>
	<div class="col-md-6">
<h3>Cancel Booking</h3>
 <table class="table table-bordered small">
     <tr>
        <td>S.no</td>
        <td>cancel Date</td>
		<td>user_id</td>
		<td>Enter_City</td>
        <td>Room_type</td>
        <td>check_in</td>
		<td>check_out</td>
        
        
     </tr>

		<?php
        $query=mysqli_query($mycon,"SELECT * FROM booking_cancel");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
        
        ?>
        
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['Date'];?></td>
        <td><?php echo $row['user_id'];?></td>
        <td><?php echo $row['Enter_City'];?></td>
		<td><?php echo $row['Room_type'];?></td>
		<td><?php echo $row['check_in'];?></td>
		<td><?php echo $row['check_out'];?></td>
        
        </tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
        </table>
        </div>
	
	</div>
	
	<div class="row">
		<div class="col-md-6">
<h3>Room Information</h3>

    <table class="table table-bordered small">
        <tr>
        <td>S.no</td>
        <td>Enter_City</td>
        <td>Price_Range</td>
        <td>Room_Type</td>
		<td>Location</td>
        
        
        </tr>
        <?php
        $query=mysqli_query($mycon,"SELECT * FROM room_information");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
         
        ?>
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['Enter_City'];?></td>
        <td><?php echo $row['Price_Range'];?></td>
        <td><?php echo $row['Room_Type'];?></td>
		<td><?php echo $row['Location'];?></td>
        
        </tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
	</table>
    </div>
</div>

      
		<div class="col-md-6">
<h3>Done payment</h3>

    <table class="table table-bordered small">
        <tr>
        <td>S.no</td>
        <td>user_id</td>
        <td>Product_ID</td>
        <td>User_Name</td>
		<td>Amount</td>
		<td>Phone_Number</td>
        
        
        </tr>
        <?php
        $query=mysqli_query($mycon,"SELECT * FROM payment");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
         
        ?>
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['user_id'];?></td>
        <td><?php echo $row['Product_ID'];?></td>
        <td><?php echo $row['User_Name'];?></td>
		<td><?php echo $row['Amount'];?></td>
		<td><?php echo $row['Phone_Number'];?></td>
        
        </tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
	</table>
    </div>
     
	 <div class="col-md-6">
<h3>Users Query</h3>
 <table class="table table-bordered small">
     <tr>
        <td>S.no</td>
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
		<td>Message</td>
        
        
     </tr>

		<?php
        $query=mysqli_query($mycon,"SELECT * FROM contact");
        if(mysqli_num_rows($query) > 0){
         $sn=1;
        while($row=mysqli_fetch_assoc($query)){
        
        ?>
        
        <tr>
        <td><?php echo $sn++;?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Email'];?></td>
        <td><?php echo $row['Subject'];?></td>
		<td><?php echo $row['Message'];?></td>
        
        </tr>
        <?php
        }}else{ ?>
         <tr><td>sorry no record found</td></tr>
         <?php
        }?>
        </table>
        </div>
	</div>
	


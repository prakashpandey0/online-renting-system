<?php include 'header.php';
	
	include 'conn.php';
 ?>
 
 
<?php

if(isset($_POST['submit'])){
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	$error="";
	$query=mysqli_query($mycon,"SELECT * FROM registration WHERE First_Name = '$UserName' AND Password = '$Password'" ); 
	   $row=mysqli_fetch_assoc($query);
	   $ID=$row['ID'];
	   if(count($row)>0)
	     {
		 if(isset($_REQUEST['bookid'])){
		 	$bid=$_REQUEST['bookid'];
		     $_SESSION['ID']=$ID;
		   echo"<script>window.location.href='booking.php?bookid=$bid' ;</script>";
		 }else{
		 
		   $_SESSION['ID']=$ID;
		   echo"<script>window.location.href='index.php' ;</script>";
		   }
		 }
		 else
		 {
		   echo"<script>alert('username or password not match..Try again!');</script>";
		 }
		 }
?>
<div class="container" style="margin:30px 10px; ">

		
	<div class="col-md-6 col-md-offset-3" style="border:2px solid #FFCC00; background-color: #CC6600;">
     <h3>Login Form</h3>
    <form method="post" action="#">
       <div class="col-md-12">
        	<div class="form-group">
              <label>UserName:</label>
            <input name="UserName" type="text" class="form-control" value="<?php echo isset($_POST['UserName']) ? $_POST['UserName'] : ''?>" >
            </div>
           </div>
        <div class="col-md-12">
        	<div class="form-group">      
              <label>Password:</label>
                 <input name="Password" type="password"  class="form-control" value="<?php echo isset($_POST['Password']) ? $_POST['Password'] : ''?>" >
             </div>
            </div>
             <div class="col-md-12">
        	<div class="form-group">
            <input type="submit" name="submit" class="btn btn-info" value="Login" >
          </div>
         </div>

<div class="clearfix"> </div>
</form>

   </div>
		
    <div class="col-md-6" style="margin:30px 10px;" >
	<div class="slider">
		<div class="image-slider">
			<!-- Slideshow 1 -->
			<ul class="rslides" id="slider1">
				<li><img class="img-responsive" src="Images/p1.jpg" alt="" ></img></li>
				<li><img class="img-responsive" src="Images/p2.jpg" alt="" ></img></li>
				<li><img class="img-responsive" src="Images/p3.jpg" alt="" ></img></li>
			</ul>
		<!-- Slideshow 2 -->
		</div>
	</div>
</div>		
</div>

<?php include 'footer.php'; ?>
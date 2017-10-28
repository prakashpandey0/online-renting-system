<?php include'header.php';?>
<?php include 'conn.php';?>
<html>
<head>
<link href="search.css" rel="stylesheet">
</head>
<body>


<div class="contact">
		
	<div class="contact-form">
		<h2>WELCOME TO ADMIN</h2><br/>
		<h2>ADMIN LOGIN</h2><br/>





		

<?php
if(isset($_POST['submit'])){



	$Admin_Name= $_POST['Admin_Name'];
	$Password = $_POST['Password'];
	
 
 

	$query=mysqli_query($mycon,"SELECT * FROM admin WHERE Admin_Name = '$Admin_Name' AND Password = '$Password'" ); 
	   $row=mysqli_fetch_assoc($query) ;
	             if(count($row)>0){
				  $_SESSION['Admin_Name']=$Admin_Name;
				 echo"<script>window.location.href='dashboard.php' ;</script>";
				 }else{
				   echo "<p>Login failed, Admin Name or Password Incorrect.</p>";
				 
				 }
	}
?>




		

<form method="post" action="">


Admin Name:<br><input name="Admin_Name" type="text" value="<?php echo isset($_POST['Admin_Name']) ? $_POST['Admin_Name'] : ''?>" ><br><br>

Password:<br><input name="Password" type="Password" value="<?php echo isset($_POST['Password']) ? $_POST['Password'] : ''?>" ><br><br>

<input type="submit" name="submit" value="Login" ><br><br>

<div class="clearfix"> </div>
</form>

   </div>
		</div>
	
	
	
	
	

	
	
	
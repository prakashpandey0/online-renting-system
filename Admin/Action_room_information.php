<?php
include 'conn.php'; 
include 'header.php';
?>
<?php
if(isset($_SESSION['Admin_Name'])){
$Admin_Name = $_SESSION['Admin_Name'];
}else{
echo"<script>window.location.href='login.php';</script>";
}

?>
<?php
include 'conn.php';

if(isset($_POST['submit'])){



	$Enter_City = $_POST['Enter_City'];
	$Room_Type = $_POST['Room_type'];
	$Size=$_POST['Size'];
	$Location = $_POST['Location'];
	$Price_Range=$_POST['Price_Range'];
	$Description=$_POST['Description'];
    $Image_1="";	
	$filename=$_FILES['Image_1']['name'];
	$path="../Images/".$filename;
	$tempname=$_FILES['Image_1']['tmp_name'];
	move_uploaded_file($tempname, $path);
	
$error="";
 
 if($Enter_City==""){
   $error.="Please Enter City.<br/>";
 }
 else if(strlen($Enter_City) < 3){
   $error.="Please Enter Min. 3 Char. in city.<br/>"; 
 }
 else if(strlen($Enter_City) > 40){
   $error.="Please Enter Max. 40 Char. in city.<br/>";
 }
 
 if($Room_Type==""){
   $error.="Please Enter Room type.<br/>";
 }
 else if(strlen($Room_Type) < 4){
   $error.="Please Enter Min. 4 Char. in  Room type."; 
 }
 else if(strlen($Room_Type) > 30){
   $error.="Please Enter Max. 30 Char. in Room type.<br/>";
 }
 
 if($Price_Range==""){
   $error.="Please Enter price.<br/>";
 }
 else if(strlen($Price_Range) < 4){
   $error.="Please Enter Min. 4 Number. in  price.<br/>"; 
 }
 else if(strlen($Price_Range) > 20){
   $error.="Please Enter Max. 20 Number. in price.<br/>";
 }
 
 if($Location==""){
   $error.="Please Enter loaction.<br/>";
 }
 else if(strlen($Location) < 5){
   $error.="Please Enter Min. 3 Char. in location.<br/>"; 
 }
 else if(strlen($Location) > 35){
   $error.="Please Enter Max. 35 Char. in loaction.<br/>";
 }
 /*if($Image_1==""){
   $error.="Please upload image<br/>.";
 }*/
 
 if($Description==""){
   $error.="Please Enter Description<br/>.";
 }
 else if(strlen($Description) < 5){
   $error.="Please Enter Min. 5 Char. in Description.<br/>"; 
 }
 else if(strlen($Location) > 35){
   $error.="Please Enter Max. 35 Char. in Description.<br/>";
 }
 
 
 
 
if($error==""){

	$query=mysqli_query($mycon,"INSERT INTO room_information (Enter_City, Price_Range, Room_Type,Size, Location, image, Description) VALUES('$Enter_City', '$Price_Range', '$Room_Type','$Size', '$Location', '$filename', '$Description')"); 
		//var_dump($query);					
//$result= mysqli_query($mycon,$sql);
		if($query){

	 unset($_POST['Enter_City']);
	 unset($_POST['Room_Type']);
	 unset($_POST['Size']);
	 unset($_POST['Location']);
	 unset($_POST['Price_Range']);
	 unset($_POST['Image_1']);
	 unset($_POST['Description']); 
	 
	 echo "form submited successfully.";

	}else{
		echo "no result" ;
	}
}else{
	echo $error;
}
}
?>

 <div class="contact">
		
	<div class="contact-form">
		<h2>Room Information Form</h2>
		

<form method="post" action="" enctype="multipart/form-data">


Enter City:<br><input name="Enter_City" type="text" value="<?php echo isset($_POST['Enter_City']) ? $_POST['Enter_City'] : ''?>" ><br><br>

Enter Room type:<br><input name="Room_type" type="text" value="<?php echo isset($_POST['Room_Type']) ? $_POST['Room_Type'] : ''?>" ><br><br>

Enter Room Size:<br><input name="Size" type="text" value="<?php echo isset($_POST['Size'])? $_POST['Size']:''?>"><br><br>

Price Range:<br><input name="Price_Range" type="number" value="<?php echo isset($_POST['Price_Range']) ? $_POST['Price_Range'] : ''?>" ><br><br>

Location:<br><input name="Location" type="text" value="<?php echo isset($_POST['Location']) ? $_POST['Location'] : ''?>" ><br><br>

Descrpition:<br><input name="Description" type="text" value="<?php echo isset($_POST['Description']) ? $_POST['Description'] : ''?>" ><br><br>

Upload image:<input type="file" name="Image_1" value="<?php echo isset($_POST['Image_1']) ? $_POST['Image_1'] : ''?>" ><br><br>

<input type="submit" name="submit" value="submit" ><br><br>

<div class="clearfix"> </div>
</form>

   </div>
		</div>



<table border="1px solid black">
<td>S.no</td>
<td>City</td>
<td>price</td>
<td>Room type</td>
<td>size</td>

<td>Loaction</td>
<td>image</td>
<td>Description</td>
<td colspan="2">Action</td>
</tr>
<?php
$query=mysqli_query($mycon,'select * from room_information');

if(mysqli_num_rows($query)>0){
    $sn=1;
 while($row=mysqli_fetch_assoc($query)){
    //var_dump($row); // it show data in database.
	
?>       
<tr>
<td><?php echo $sn++;?></td>
<td><?php echo $row['Enter_City'];?></td>
<td><?php echo $row['Price_Range'];?></td>	
<td><?php echo $row['Room_Type'];?></td>
<td><?php echo $row['Size'];?></td>
<td><?php echo $row['Location'];?></td>
<td><?php echo $row['image'];?></td>
<td><?php echo $row['Description'];?></td>
<td><a href="Action_room_information.php?deleteid=<?php echo $row['ID']?>">Delete</a></td>
<td><a href="update_room_information.php?updateid=<?php echo $row['ID']?>">Update</a></td>
</tr>
<?php
}}else{ ?>
 <tr><td>sorry no record found</tr></td>
 <?php
}?>

<?php
 if(isset($_REQUEST['deleteid'])){
   $id=$_REQUEST['deleteid'];
   $query1=mysqli_query($mycon,"Delete from room_information where ID='$id'");
   if($query1){
    echo"deleted id is[$id]";
   }else{
   echo"no action";
   }
 
 }

?>



</table>
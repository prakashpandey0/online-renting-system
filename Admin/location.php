<?php include'conn.php'; ?>

<?php



    						 
 ?>

				  

<?php

if(isset($_POST['Add_Location'])){

  $Location=$_POST['Location'];
  $C_ID= $_POST['City'];
   
 $query1=mysqli_query($mycon,"INSERT INTO location (C_ID ,Location) VALUES('$C_ID','$Location')");
 if($query1){
  echo "<script>alert('NEW LOCATION INSERTED');</script>";
 }else{
  echo "SERVER PROBLEM";
 }
}
?>





<form method="post" action="">

Select city:<select name="City">
<?php
 $query=mysqli_query($mycon,"SELECT * FROM city");
 while($row=mysqli_fetch_assoc($query)){
 //var_dump($row);
?> 
 <option value="<?php echo $row['ID'] ?>"><?php echo $row['City'];?></option>
	<?php } ?>				 
</select>
<br>

Enter Location:<br><input name="Location" type="text" value="" ><br><br>
<input type="submit" name="Add_Location" value="Add location" ><br><br>

</form>
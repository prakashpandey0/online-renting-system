

<?php

include'conn.php';
if(isset($_POST['Add_City'])){

$City = $_POST['Enter_City'];

$query=mysqli_query($mycon,"INSERT INTO city(City )VALUES('$City')");
 	  
			  
?>
 
 
<?php
if($query){
 echo "YEs";
 }else{
  echo "NO";
 }
}	
?>
<form method="post" action="">

Enter City:<br><input name="Enter_City" type="text" value="" ><br><br>
<input type="submit" name="Add_City" value="Add_City" ><br><br>
</form>


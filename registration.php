<?php
include 'header.php';
?>

<?php
include 'conn.php';

if(isset($_POST['Submit'])){

 $First_Name = $_POST['First_Name'];
 $Middle_Name = $_POST['Middle_Name'];
 $Last_Name = $_POST['Last_Name'];
 $Permanent_Address = $_POST['Permanent_Address'];
 $Corresponding_Address = $_POST['Corresponding_Address'];
 $Phone_Number = $_POST['Phone_Number'];
 $Password = $_POST['Password'];
 $Email_id= $_POST['Email_id'];
 $Date=date('Y-m-d');
 
 $error="";
          /**
		   * validation starts from here.
		  */
 if($First_Name==""){
   $error.="Please Enter Your First Name.";
 }
 else if(strlen($First_Name) < 3){
   $error.="Please Enter Min. 3 Char. in First Name."; 
 }
 else if(strlen($First_Name) > 30){
   $error.="Please Enter Max. 30 Char. in First Name.";
 }
 
 if(strlen($Middle_Name)<4){
   $error.="Please Enter Min. 4 Char. in Middle Name.";
 }
 else if(strlen($Middle_Name)>40){
    $error.="Please Enter Max. 40 Char. in Middle Name.";
 }

 if($Last_Name==""){
   $error.="Please Enter Your Last Name.";
 }
 else if(strlen($Last_Name) < 2){
   $error.="Please Enter Min. 2 Char. in Last Name."; 
 }
 else if(strlen($Last_Name) > 50){
   $error.="Please Enter Max. 50 Char. in Last Name.";
 }
 
 if($Permanent_Address==""){
   $error.="Please Enter Permanent Address.";
 }
 else if(strlen($Permanent_Address) < 10){
   $error.="Please Enter Min. 10 Char. in Permanent Address."; 
 }
 else if(strlen($Permanent_Address) > 100){
   $error.="Please Enter Max. 100 Char. in Permanent Address.";
 }
 
 if($Corresponding_Address==""){
   $error.="Please Enter Corresponding Address.";
 }
 else if(strlen($Corresponding_Address) < 10){
   $error.="Please Enter Min. 10 Char. in Corresponding Address."; 
 }
 else if(strlen($Corresponding_Address) > 100){
   $error.="Please Enter Max. 100 Char. in Corresponding Address.";
 }
 
 if(strlen($Phone_Number) < 10){
   $error.="Please Enter Min. 10 number. in phone number."; 
 }else if(strlen($Phone_Number) > 10){
   $error.="Please Enter MAx. 10 number. in phone number."; 
 }
 if($Password==""){
  $error.="Please Enter  password.";
 }else if(strlen($Password) < 10){
   $error.="Please Enter Min. 10 number/chars. in password."; 
 }else if(strlen($Phone_Number) > 20){
   $error.="Please Enter MAx. 20 number/chars. in password."; 
 }

/**
*VALIDATION END HERE.

*/ 
 
 
if($error==""){


$sql="INSERT INTO registration".
"(First_Name, Middle_Name, Last_Name, Permanent_Address, Corresponding_Address,Phone_Number,Date,Password, Email_id )".
"VALUES".
"('$First_Name', '$Middle_Name','$Last_Name', '$Permanent_Address', '$Corresponding_Address','$Phone_Number','$Date','$Password','$Email_id' )"; 
							
$result= mysqli_query($mycon,$sql);
if($result){
 unset($_POST['First_Name']);          //CLEAR DATA FROM FORM AFTER SUBMITING
 unset($_POST['Middle_Name']);
 unset($_POST['Last_Name']);
 unset($_POST['Permanent_Address']);
 unset($_POST['Corresponding_Address']);
 unset($_POST['Phone_Number']);
 unset($_POST['Password']);
 unset($_POST['Email_id']);
 
 echo "<script>alert('Thanx for registration Now you can login');</script>";
 echo"<script >window.location.href='index.php' ;</script>";
}else{
 echo "no result" ;
}
}else{
   echo "<script>alert('".$error."');</script>";
} 
}
?>

<div class="container" style="margin:30px 10px;">
		
	<div class="col-md-6 col-md-offset-3" style="border:1px solid #000; background-color: #66FF33;">
		 
        <h2>Registration Form</h2>
		
		<form method="post" action="">
        <div class="col-md-12" >
        	<div class="form-group">
        		<label>First Name:</label>
        		<input name="First_Name" class="form-control" type="text" value="<?php echo isset($_POST['First_Name']) ? $_POST['First_Name'] : ''?>">
        	</div>
		</div>
        <div class="col-md-12">
        	<div class="form-group">
            <label>Middle Name:</label>
            <input name="Middle_Name" type="text" class="form-control" value="<?php echo isset($_POST['Middle_Name']) ? $_POST['Middle_Name'] : ''?>" >
            </div>
        </div>
        <div class="col-md-12">
        	<div class="form-group">
             <label>Last Name:</label>
             <input name="Last_Name" type="text" class="form-control" value="<?php echo isset($_POST['Last_Name']) ? $_POST['Last_Name'] : ''?>" >
              </div>
         </div>
         
         <div class="col-md-12">
        	<div class="form-group">
             <label>Permanent address:</label>
             <input name="Permanent_Address" type="text"  class="form-control" value="<?php echo isset($_POST['Permanent_Address']) ? $_POST['Permanent_Address'] : ''?>" >
             </div>
           </div>
           <div class="col-md-12">
        	<div class="form-group">
                 <label>Corresponding address:</label>	
                 <input name="Corresponding_Address" type="text" class="form-control" value="<?php echo isset($_POST['Corresponding_Address']) ? $_POST['Corresponding_Address'] : ''?>">
                 </div>
               </div>
             <div class="col-md-12">
        	<div class="form-group">               
               <label>Phone number:</label>
                     <input name= "Phone_Number" type="number"  class="form-control" value="<?php echo isset($_POST['Phone_Number']) ? $_POST['Phone_Number'] : ''?>" > <!--taking more than 10 -->
                 </div>
               </div>
        <div class="col-md-12">
        	<div class="form-group">
                <label>Password:</label>
                     <input name="Password" type="password" class="form-control" value="<?php echo isset($_POST['Password']) ? $_POST['Password'] : ''?>">
             </div>
         </div>
         
         <div class="col-md-12">
        	<div class="form-group">
                 <label>Email-id:</label>
                 <input name="Email_id" type="text"  class="form-control"value="<?php echo isset($_POST['Email_id']) ? $_POST['Email_id'] : ''?>" >
             </div>
            </div>
           
            
          <div class="col-md-12">
             
        	<div class="form-group">
                <center> <input type="submit" name="Submit" class="btn btn-info" value="Register" ></center>
             </div>
            </div>
          </div>
        
          <div class="clearfix"> </div>
    </form>
         </div>
		</div>
	</div>
	<?php
	include 'footer.php';
	?>
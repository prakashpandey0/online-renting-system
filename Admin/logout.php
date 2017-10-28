<?php
include 'header.php';
?>
<?php
$des = session_destroy();
 if($des){
 echo"<script>window.location.href='index.php'; </script>";
 
 }
?>

<?php include'footer.php';?>
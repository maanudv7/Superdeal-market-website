<?php
include ("includes/common.php");

$ep = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'ep'));

$upq = "Select id OR email from users where email='" . $ep . "' OR con='" . $ep . "'";
echo $upq;
$upr = mysqli_query($con,$upq) or die($mysqli_error($con));
$total= mysqli_num_rows($upr);
if ($total == 0) {
  $error = "<span class='red'>No account matched this email or phone</span>";
  header('location: forgot.php?error=' . $error);
} 
else{
   $row = mysqli_fetch_assoc($upr);
   if(!isset($_SESSION))
   session_start();
   $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  echo $row['id'];
 
    
  header('location: forgot1.php');
  

}
?>
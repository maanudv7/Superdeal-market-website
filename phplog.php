<?php
include ("includes/common.php");

$email = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'e-mail'));
$pwd = filter_input(INPUT_POST, 'pwd');
$pwd = mysqli_real_escape_string($con, $pwd);
$pwd = MD5($pwd);

$upq = "Select id , email from users where email='" . $email . "' AND pwd='" . $pwd . "'";
echo $upq;
$upr = mysqli_query($con,$upq) or die($mysqli_error($con));
$total= mysqli_num_rows($upr);
if ($total == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} 
else{
   $row = mysqli_fetch_assoc($upr);
   if(!isset($_SESSION))
   session_start();
   $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  echo $row['id'];
 
    
  header('location: shop.php');
  

}
?>
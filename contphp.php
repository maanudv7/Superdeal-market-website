<?php
require("includes/common.php");
$n= mysqli_real_escape_string($con, filter_input(INPUT_POST, 'name'));//name
$email =mysqli_real_escape_string($con, filter_input(INPUT_POST, 'e-mail'));//email
$co=mysqli_real_escape_string($con, filter_input(INPUT_POST, 'comment')); //comment
echo $n;

$upq = "Select * from users where email='$email'";
$upr = mysqli_query($con,$upq);
$total= mysqli_num_rows($upr);
if($total!=0){
 $query = "INSERT INTO contact(name, email, comment, status) VALUES('$n', '$email', '$co','Existing User')";
 $user_registration_submit = mysqli_query($con, $query) or die(mysqli_error($con));
  
}
else{
$query = "INSERT INTO contact(name, email, comment,status) VALUES('$n', '$email', '$co','Random User')";
$user_registration_submit = mysqli_query($con, $query) or die(mysqli_error($con));
}
echo '<h3>Your message is submitted</h3>';
header('location: shop.php');
?>
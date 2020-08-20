<?php
require("includes/common.php");

$n= mysqli_real_escape_string($con, filter_input(INPUT_POST, 'name'));//name
$email =mysqli_real_escape_string($con, filter_input(INPUT_POST, 'e-mail'));
$pwd1 = mysqli_real_escape_string($con, filter_input(INPUT_POST, 'pwd'));// password
$pwd2 = MD5($pwd1);

$co=mysqli_real_escape_string($con, filter_input(INPUT_POST, 'co')); //contact
$ads= mysqli_real_escape_string($con, filter_input(INPUT_POST, 'ads')); //address

$upq = "Select * from users where email='$email'";
$upr = mysqli_query($con,$upq);
$total= mysqli_num_rows($upr);
if($total!=0){
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: Signup.php?m1=' . $m);
}

else{
$user_registration_query = "insert into users (name,email, pwd,con,ads) values ('$n','$email','$pwd2','$co','$ads')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: shop.php');
  
}
?>
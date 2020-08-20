<?php

// This page updates the user password
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$op1 = filter_input(INPUT_POST,'op');
$op1 = mysqli_real_escape_string($con, $op1);
$op1 = MD5($op1);


$np1 = filter_input(INPUT_POST,'np');
$np1 = mysqli_real_escape_string($con, $np1);
$np1 = MD5($np1);

$npp1 =   filter_input(INPUT_POST,'npp');
$npp1 = mysqli_real_escape_string($con, $npp1);
$npp1 = MD5($npp1);

$query = "SELECT email, pwd FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['pwd'];

if ($np1 != $npp1) {
    header('location: settings.php?error=The two passwords don\'t match');
} else {
    if ($op1 == $orig_pass) {
        $query = "UPDATE  users SET pwd = '" . $np1 . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated');
    } else
        header('location: settings.php?error=Wrong Old Password');
}
?>
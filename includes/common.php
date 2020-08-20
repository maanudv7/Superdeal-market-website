<?php
$con = mysqli_connect("localhost", "root", "Football7", "ecom") or die(mysqli_error($con));
 error_reporting(0); 

if(!isset($_SESSION))
session_start();
?>
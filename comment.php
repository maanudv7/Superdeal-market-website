
<?php
require("includes/common.php");
	$idt=$_SESSION['user_id'];
	$p="SELECT name from users where id='$idt'";
    $d=mysqli_query($con,$p);
    $total= mysqli_num_rows($d);
if($total!=0){
   // $n=mysql_fetch_field($d,2);
	//$n=$_SESSION['$d'];
  //  $n=$_SESSION['name'];
$tarik=$_POST['date'];    
$c=$_POST['message'];

while($result=mysqli_fetch_assoc($d)){
	$please=$result['name'];
}
//echo "$idt <br>$please <br> $c";
 $query="INSERT INTO comments(uid,pname,message,date) VALUES('$idt','$please','$c','$tarik')";
 $data=mysqli_query($con,$query) or die(mysqli_error($con));
if($data){
	echo "data has been successfully entered";
	header('location: shop.php');
} 
else
{echo "no";}
  }
  else{
  $tarik=$_POST['date'];    
$c=$_POST['message'];
 $query="INSERT INTO comments(uid,pname,message,date) VALUES(100,'Anonymous','$c','$tarik')";
 $data=mysqli_query($con,$query) or die(mysqli_error($con));
if($data){
	echo "data has been successfully entered";
	header('location: shop.php');
} 
else
{echo "no";}


  }

?>
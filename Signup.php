<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: shop.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            function msg(){  
 alert("Your account has been created.");  
}          

           function checkPassword(form){
             pwd = form.pwd.value; 
             pwd2 = form.pwd2.value; 

             if (pwd != pwd2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Matched") 
                    return true; 
                } 
           }
            
        </script>  
        
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up | E-Commerce</title>
        
    </head>
    <body>
        
        <?php
        include 'includes/header.php';
        ?>
        
                <div class="container-fluid">
            <div class="row row_style">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <h4>Register Now:</h4>
                        </div>
                        <div class="panel-body">
                            <p>Enter your details:</p>
                            
                            <form action="phpsign.php" method="POST" onSubmit = "return checkPassword(this)">
         <div class="form-group">
         Name:    <input type="text"  class="form-control" name="name"  placeholder="Name" required  pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
        </div>
                               
        <div class="form-group">
         Email Id:   <input type="Email"  class="form-control" name="e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required = "true" >
   <?php  
   echo filter_input(INPUT_GET, 'm1'); ?>     
        </div>
        <div class="form-group">
       Password:   <input type="password"  pattern=".{6,}" class="form-control" name="pwd" placeholder="Minimum 6 characters" required = "true">
                        </div>
           <div class="form-group">
        Confirm Password:   <input type="password"  class="form-control" name="pwd2" required = "true">
                        </div>
          
          <div class="form-group">
         Contact:    <input type="text"  class="form-control" pattern="[1-9]{1}[0-9]{9}"  name="co"  placeholder="Don't enter more than 10 digits" required = "true">
        
          </div>   
            <div class="form-group">
         Address   <input type="text"  class="form-control" name="ads"  placeholder="Address" required = "true">
        </div>
         <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
      <button type="submit" class="btn btn-primary" value=”registration_submit”>Sign Up</button>
                     
                        
                    </form>
                            <br>
                            <br>
                            </div>
                        </div>
                   </div>
               </div>
                </div>
     
        <?php
        include 'includes/footer.php';
        ?>
</body>
</html>

<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
 alert("Your Password has been changed.");  
}
            
        </script>  

          <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce</title>
    </head>
    <body>
         <?php include 'includes/header.php'; ?>
      
        <div class="container">
            <div class="col-xs-6 row_style">
                <h4>Change Password</h4>
                     <form action="phpset.php" method="POST">
         <div class="form-group ">
            <input type="text"  class="form-control" name="op"  placeholder="Old Password" required>
        </div>
                
        <div class="form-group">
            <input type="password"  class="form-control" name="np" placeholder="New Password" required>
                        </div>
           <div class="form-group">
               <input type="password"  class="form-control" name="npp" placeholder="Re-type New Password" >
                        </div>
                <button type="submit" class="btn btn-primary" >Change
                </button>       
                          
                      <?php 
              echo filter_input(INPUT_POST, 'error'); ?> 
            
                    </form>
              
                </div>
                 </div>
        
            <br>
<br><br><br><br><br>
<br><br><br><br><br> 

     <?php include("includes/footer.php"); ?>
    
    </body>
</html

 <?php
require("includes/common.php");
// Redirects the user to products page if logged in.
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
        
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce</title>
    </head>
    <body>

        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading ">
                            <h4>Login</h4>
                        </div>
                        
                            <p>Enter your details:</p>
                            
                            <form action="phplog.php" method="POST">
                        <div class="form-group">
                        Username:    <input type="Email"  class="form-control" name="e-mail"   placeholder="email id or username" required >
                        </div>
                        <div class="form-group">
                         Password:   <input type="password"  class="form-control" name="pwd"  placeholder="minimum 6 characters" required>
                        </div>
                                  <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
      <br>
      <a href="forgot.php">Forgot password?</a>
    </div>
          <button type="submit" class="btn btn-primary" value=”registration_submit”>Login</button>
              <?php 
              echo filter_input(INPUT_POST, 'error'); ?> 
                            </form>
                              
                            <br>
                            <br>
                              <p>Do not have an account? <a href="Signup.php">Create now</a></p>
                        
                        </div>
                   </div>
               </div>
                  
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
            </body>
</html>

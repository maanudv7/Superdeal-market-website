<?php
require("includes/common.php");
// Redirects the user to products page if he/she is logged in.
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
        <div id="banner_img">
            <div class="container">
                <center>
                <div id="banner_content">
                     <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                    <a  href="shop.php" class ="btn btn-danger btn-lg active">Shop Now</a>    
                </div>
                    </center>
            </div>
        </div>
        
        
        <div class="container">
        <div class="row">
            <div class=" col-sm-4">
               
                <a href="shop.php" class="thumbnail">   
                <img src="img/1.jpg"  alt="Responsive image" style="height: 250px;">
                <div class="caption">
                    <h3>Fastrack E10</h3>
                    <p>Price Rs. 2499</p>
                </div>
                <div class="btn btn-primary btn block">
                            Buy Now
                </div>
               </a>
            </div>
            <div class="col-sm-4">
             
                   <a href="shop.php" class="thumbnail">    
                <img src="img/5.jpeg"  alt="Responsive image" style="height: 250px;">
                <div class="caption">
                    <h3>Peter England</h3>
                    <p>Price Rs. 1499</p>
                </div>
                <div class="btn btn-primary btn block">
                               Buy Now
                </div>
                   </a>
            </div>
            
            <div class="col-sm-4">
             
                   <a href="shop.php" class="thumbnail">    
                       <img src="img/9.jpg"  alt="Responsive image" style="height: 250px;">
                <div class="caption">
                    <h3>Samsung</h3>
                    <p>Price Rs. 24999</p>
                </div>
                <div class="btn btn-primary btn block">
Buy Now
                </div>
                   </a>
            </div>
        
        </div>
        </div>
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

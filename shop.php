 <?php
require("includes/common.php");
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
        <style>
            #bt{
                color:#fff;
           background-color: #282828;
           font-family: arial;
           cursor: pointer;
           margin-left: 70px;
           margin-bottom: 50px;
            }
            #ta{
            margin-left: 70px;
        }
        </style>
    </head>
    <body>
             <?php
        include ("includes/header.php");
        include ("includes/chk.php");
        ?>
  
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>
We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
                </p>
            </div>
        </div>
        
                     <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="" style="height: 250px;">
                        <div class="caption">
                            <h3>Fastrack E10 </h3>
                            <p>Price Rs. 2499 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (chk(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

         <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="" style="height: 250px;">
                        <div class="caption">
                            <h3>Tiffany Swiss Made </h3>
                            <p> Price Rs. 5499</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (chk(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>

           <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="" style="height: 250px;">
                        <div class="caption">
                            <h3>Fossil Watch</h3>
                            <p>Price Rs. 4999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (chk(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>

    <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="" style="height: 250px;">
                        <div class="caption">
                            <h3>Rosra NR0256</h3>
                            <p>Price Rs. 9999</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (chk(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>
            
              
            
        </div>
        
        
        <hr>
        
        
                 
        <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
               
                <a href="login.php" class="thumbnail">   
                <img src="img/shirt.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Peter England</h3>
                    <p>Price Rs. 2499</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
           <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/being fab men's blue shirt.jpeg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Being fab Men's Shirt</h3>
                    <p>Price Rs. 1499</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/lafantar men's denim shirt.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Lafantar Men's Shirt</h3>
                    <p>Price Rs. 2999</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/mojo sportswear.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Mojo Men's T-shirt</h3>
                    <p>Price Rs. 2999</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
              
            
        </div>
        </div>
        
        
        <hr>
        <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
               
                <a href="login.php" class="thumbnail">   
                <img src="img/camera.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Samsung</h3>
                    <p>Price Rs. 24499</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
           <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/canon.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Canon</h3>
                    <p>Price Rs. 49999</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/nikon.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Nikon</h3>
                    <p>Price Rs. 54999</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
            <div class="col-md-3 col-sm-6">
           <a href="login.php" class="thumbnail">   
                <img src="img/sony.jpg"  alt="Responsive image" style="height: 150px;">
                <div class="caption">
                    <h3>Sony</h3>
                    <p>Price Rs. 34999</p>
                </div>
                <div class="btn btn-primary btn block">
                       Add to cart
                </div>
               </a>
            </div>
              
            
        </div>
        </div>
        <hr>
        <hr>

        <div class="container">
            <div class="jumbotron">
        <h2 id=ta>Comment</h2>
        
        <?php
  date_default_timezone_set('Europe/London');
 // echo date_default)timezone_get();
  //include 'comment.php';  
  echo "<form method='POST' action='comment.php'>
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d   H:i:s')."'>
    <textarea id='ta' rows='4' cols='70' name='message' placeholder='Comment here...'></textarea><br>
    <button id=bt name='submit' type='submit'>Comment</button>
</form>";
?>
<div id=ta>
    <h3>User reviews</h3>
<?php
$q="Select pname,message,date from comments";
$da=mysqli_query($con,$q) or die(mysqli_error($con));
$total=mysqli_num_rows($da);
if($total!=0){
    while($result=mysqli_fetch_assoc($da)){
       echo "<pre><b style='font-size:20px;'> <a href='#'>".$result['pname']."</a></b>   <b>Time </b>".$result['date'];
       echo "<h4 style='margin-left:10px;'>".$result['message']."</h4></pre>" ;
       echo "<hr>";
     }
}
?>
</div>       
</div>
</div>
 
        
        <?php include("includes/footer.php"); ?>
    
</body>
</html>

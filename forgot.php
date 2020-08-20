
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
        <title>Forgot Password</title>
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
                            <h4>Reset your Password</h4>
                        </div>
                        <hr>
                        <br>
                        
                         
                        <form action="phpfrg.php" method="POST">
                            <p> Please enter your email address or phone number to search for your account.</p>
                            <input type="text"  class="form-control" name="ep"   placeholder="Email id or phone number" required style="width: 350px;" >
                        
                           <button type="submit" class="btn btn-primary" value=”nxt”>Next</button>
      
                         </form>
              
                    
                       
                        <br>
                        
                          
                    </div>
                </div>
            </div>
       </div>
                <br><br><br>    
        <br><br><br>
        
          <?php
        include 'includes/footer.php';
        ?>
      
    </body>
</html>

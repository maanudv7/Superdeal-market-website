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
        <title>E-Commerce Contact Us</title>
        <style>
       
        #ai{
float: left;
width: 50%;
margin-top: 50px;
margin-bottom: 100px;

}
#fi{
    
    float:right;
    margin-top:30px;
    margin-bottom: 100px;
    
}
        </style>
    </head>
    <body>
        <?php
include ("includes/header.php");
?>  
       <br>
       <br>
       <br>


        <div class="container" >
            <h3>For any queries, suggestions or complains feel free to share</h3>
        
       
       <p id=ai style="width:520px; margin-top: 80px;">
            Lifestyle store provides you the answer within 24 hours of your message.  
            Lifestyle store provides you the answer within 24 hours of your message. 
            Lifestyle store provides you the answer within 24 hours of your message. 
            Lifestyle store provides you the answer within 24 hours of your message. 
            Lifestyle store provides you the answer within 24 hours of your message. 
            Lifestyle store provides you the answer within 24 hours of your message. 
            Lifestyle store provides you the answer within 24 hours of your message.
        </p>
        
        
            
<div class="container-fluid" id=fi >
  <h2>Enter Here</h2>
  <form class="form-horizontal" action="contphp.php"  method="POST" style="width:520px;">
    <div class="form-group">
      <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
      
    <div class="form-group">
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="e-mail">
      </div>
    </div>
   
      
      <div class="form-group">
      <textarea style="margin-left: 16px;" rows="4" cols="60" name="comment" >
        Enter Message here...</textarea>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" style="background-color: blue; color: white; border-color: blue; " class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

        </div>        
        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br>

       
       <br>
       <br>
       <br>
      <?php
include ("includes/footer.php");
?>
    </body>
</html>
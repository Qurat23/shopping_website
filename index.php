<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        footer{
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Bootstrap</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"></div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <a href="index.php" class="navbar-brand">Lifestyle Store</a>
        <div class="collapse navbar-collapse" id="mynavbar">
          <?php
              if(!isset($_SESSION['email'])){
              ?>
            <ul class="nav navbar-nav navbar-right"style="margin-right: 3%">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
            </ul>
          <?php }?>
        </div>
     </nav>
     <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h1>We Sell Lifestyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div> 
     </div>
     <footer>
         <div class="container">
             <center>Copyright &copy Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
         </div>
     </footer>
  </body>
</html>
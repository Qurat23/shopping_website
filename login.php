<?php
session_start();
if(isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/products.php');
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
            <ul class="nav navbar-nav navbar-right"style="margin-right: 3%">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
            </ul>
        </div>
     </nav>
     <div class="row" style="margin-top:5%;margin-left: 30% ; margin-bottom: 13%;margin-right: 30%">
        <div class="col-xs-12">
        <div class="panel panel-primary">
           <div class="panel-heading"><h3>LOGIN</h3></div>
           <div class="panel-body">
               <p class="text-warning">Login to make a purchase</p>
               <div class="col-xs-12">
               <form action="loginDone.php" method="POST">
                   <div class="form-group">
                       <input type="email" name="email" placeholder ="E-mail"class="form-control input-lg"required><br>
                       <input type="password" name="password" placeholder ="Password"class="form-control input-lg"pattern=".{8,50}"title="Use combination of symbols & letters with length 6 to 50"required><br>
                       <button type="submit" class="btn btn-primary">Login</button>
                   </div>
               </form>
               </div>
           </div> 
           <div class="panel-footer">Don't have an account?Register</div>
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
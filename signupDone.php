<?php
	$uname=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contact=$_POST['contact'];
    $city=$_POST['city'];
	$address=$_POST['address'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'lifestyle');
	$q="INSERT INTO users (name,email,password,contact,city,address) values ('$uname','$email','$password','$contact','$city','$address')";
	$status=mysqli_query($con,$q);
        mysqli_close($con);	
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
<title>SignUp Done</title>
<style>
        footer{
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            margin-top: 100px;
        }
        body {
        	font-weight: bold;
        }
        #d2 {
        	margin-top: 100px;
        	word-spacing: 3px;
        }
    </style>
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
<div id="d2"><p><?php
if($status==1)
echo "Dear user you have succesfully registered, now go to login page and
explore all the features !";
else
echo "OOPS! EITHER THIS EMAIL IS ALREADY REGISTERED WITH US, OR SOME FIELDS ARE INCORRECT! PLEASE SIGNUP WITH SOME DIFFERENT EMAIL ID!!!";
?>
</p></div>
<footer>
         <div class="container">
             <center>Copyright &copy Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
         </div>
     </footer>
</body>
</html>
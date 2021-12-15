<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/index.php');
    $email=$_SESSION['email'];
    $name=$_SESSION['user'];
	$oldpassword=$_POST['oldpassword'];
	$newpassword=$_POST['newpassword'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'lifestyle');
    $x="SELECT * FROM users WHERE email='$email' && password='$oldpassword' ";
$presult=mysqli_query($con,$x);
$pnum=mysqli_num_rows($presult);
if($pnum>0){
	$q="UPDATE users SET password='$newpassword' WHERE email='$email' && password='$oldpassword' ";
    $status=mysqli_query($con,$q);}
    ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
<title>PASSWORD CHANGE</title>
<style>
        footer{
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d;
            bottom: 0;
            width: 100%;
            margin-top: 200px;
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
        </div>
     </nav>
<div id="d2"><p><?php
if($pnum>0)
echo "Password associated with $name has been successfully updated!
 Stay connected to our services!!,
 we value your security & privacy. Never share your password with anyone. Enjoy
 our services!!!!";
else
echo "Sorry, Password doesn't match with your old password, try again";
?>
</p></div>
<footer>
         <div class="container">
             <center>Copyright &copy Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
         </div>
     </footer>
</body>
</html>
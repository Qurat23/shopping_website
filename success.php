<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/index.php');
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lifestyle');
$user_id=$_SESSION['user_id'];
$q="UPDATE users_items SET status='Confirmed' WHERE user_id='$user_id' ";
$status=mysqli_query($con,$q);
if($status=1)
echo "Your order is confirmed.Thank you for shopping with us."
?>
<!DOCTYPE html>
<html>
  <head><title>Confirmed!</title></head>
  <body>
        <h4><a href="products.php">click here</a> to purchase any other item </h4>
  </body>
 </html> 
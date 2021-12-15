<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/index.php');
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id']; 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lifestyle');
$q="DELETE FROM users_items WHERE user_id='$user_id' && item_id='$item_id'";
$status=mysqli_query($con,$q);
if($status==1)
header('location:http://localhost/qurat_assignment/cart.php');
else
echo "some problem occured while removing this item from cart";
?>
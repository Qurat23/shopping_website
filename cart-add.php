<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/index.php');
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lifestyle');
$q="INSERT INTO users_items(user_id,item_id,status) VALUES('$user_id','$item_id','Added to cart') ";
$status=mysqli_query($con,$q);
if($status==1)
header('location:http://localhost/qurat_assignment/products.php');
else
echo "some problem occured while adding this item to cart";
?>
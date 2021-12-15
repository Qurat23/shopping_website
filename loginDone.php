<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lifestyle');
$q="SELECT * FROM users WHERE email='$email' && password='$password' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
$_SESSION['email']=$email;
$_SESSION['user_id']=$row['user_id'];
$_SESSION['user']=$row['name'];
header('location:http://localhost/qurat_assignment/products.php');
}
else
{
header('location:http://localhost/qurat_assignment/login.php');?>
<script>alert("USER WITH SUCH CREDENTIALS DOESN'T EXIST..TRY AGAIN");</script>
<?php
}
 ?>
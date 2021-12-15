<?php
session_start();
if(!isset($_SESSION['email']))
header('location:http://localhost/qurat_assignment/index.php');
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'lifestyle');
$user_id=$_SESSION['user_id'];
$q="SELECT * FROM users_items where user_id='$user_id' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$sum=0;
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
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user">Setting</span></a></li>
                <li><a href="logoutDone.php"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>
            </ul>
        </div>
     </nav>
     <div class="row"style="margin-top:5%;margin-left: 30% ; margin-bottom: 30%;margin-right: 30%">
     	<table class="table table-hover">
     		<thead>
     			<tr>
     				<th>Item Number</th>
     				<th>Item Name</th>
                    <th>Price</th>
                    <th></th>
     			</tr>
     		</thead>
     		<?php
     		 if($num<1)
     		 	echo "Add items to the cart first!";
             for($i=1;$i<=$num;$i++)
              {
               $row=mysqli_fetch_array($result);
               $Id=$row['item_id'];
               $n="SELECT * FROM items where item_id='$Id' ";
               $nresult=mysqli_query($con,$n);
               $nrow=mysqli_fetch_array($nresult);
               $item_name=$nrow['name'];
               $item_price=$nrow['price'];
               $sum=$sum+$item_price;
                     ?>
     		<tbody>
     			<tr>
     				<td><?php echo $row['item_id'];?></td>
     			    <td><?php echo $item_name;?></td>
     			    <td><?php echo $item_price;?></td>
     			    <td><a href="cart-remove.php?id=<?php echo $Id ?>"class="remove_item_link">Remove</a></td>
     			</tr>
     			<?php
             }
            ?>
     			<tr>
     				<td></td>
     			    <td>Total</td>
     			    <td><?php echo $sum;?>/--</td>
     			    <td><a href="success.php"class="btn btn-primary">Confirm Order</a></td>
     			</tr>
     		</tbody>
     	</table>
     	</div>
     </div>
<footer>
         <div class="container">
             <center>Copyright &copy Lifestyle Store.All Rights Reserved | Contact Us: +91 90000 00000</center>
         </div>
     </footer>
  </body>
</html>
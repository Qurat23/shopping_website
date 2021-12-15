<?php
session_start();
if(isset($_SESSION['email'])){
$UID=$_SESSION['user_id'];}
else{
    $UID=0;
}
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
    <?php
    function check_if_added_to_cart($x,$uid)
    {
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'lifestyle');
        $q="SELECT * FROM users_items WHERE item_id='$x' && user_id='$uid' && status='Added to cart' ";
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);
        if($num>=1)
            return 1;
        else
            return 0;
    }
    ?>
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
              if(isset($_SESSION['email'])){
              ?>
            <ul class="nav navbar-nav navbar-right"style="margin-right: 3%">
            	<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">Cart</span></a></li>
                <li><a href="settings.php"><span class="glyphicon glyphicon-user">Setting</span></a></li>
                <li><a href="logoutDone.php"><span class="glyphicon glyphicon-log-in">Logout</span></a></li>
            </ul>
        <?php }?>
        </div>
     </nav>
     <div class="container">
     	<div class="jumbotron">
     		<h1>Welcome to our Lifestyle Store!</h1>
     		<p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
     	</div>	
     		<div class="row text-center">
     			<div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/5.jpg">
     					<div class="caption">
     						<h3> Connon EOS</h3>
     						<p>Price:Rs.36000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(1,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=1"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			    </div>
     			</div>	
     			<div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/2.jpg">
     					<div class="caption">
     						<h3> Nikon DSLR</h3>
     						<p>Price:Rs.40000.00</p>
                            <?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(2,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=2"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     						<!--<button type="submit" class="btn btn-primary btn-block">Add to cart</button>-->
     				    </div>
     			    </div>
     			</div>	
     			<div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/3.jpg">
     					<div class="caption">
     						<h3> Sony DSLR</h3>
     						<p>Price:Rs.50000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(3,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=3"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			    </div>
     			</div>
     			<div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/4.jpg">
     					<div class="caption">
     						<h3>Olympus DSLR</h3>
     						<p>Price:Rs.80000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(4,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=4"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		 </div> 
     		 <div class="row text-center">
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/9.jpg">
     					<div class="caption">
     						<h3>Titan Model#301</h3>
     						<p>Price:Rs.13000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(5,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=5"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/10.jpg">
     					<div class="caption">
     						<h3>Titan Model#201</h3>
     						<p>Price:Rs.3000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(6,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=6"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/11.jpg">
     					<div class="caption">
     						<h3>HMT Milan</h3>
     						<p>Price:Rs.8000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(7,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=7"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/12.jpg">
     					<div class="caption">
     						<h3>Faber Luba#111</h3>
     						<p>Price:Rs.18000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(8,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=8"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		</div>
     		<div class="row text-center">
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/8.jpg">
     					<div class="caption">
     						<h3>H&W</h3>
     						<p>Price:Rs.800.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(9,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=9"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/6.jpg">
     					<div class="caption">
     						<h3>Luis phil</h3>
     						<p>Price:Rs.1000.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(10,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=10"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/13.jpg">
     					<div class="caption">
     						<h3>John Zok</h3>
     						<p>Price:Rs.1500.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(11,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=11"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
     			   </div>
     		    </div>
     		    <div class="col-md-3 col-sm-6">
     				<div class="thumbnail">
     					<img src="img/14.jpg">
     					<div class="caption">
     						<h3>Jhalsani</h3>
     						<p>Price:Rs.1300.00</p>
     						<?php if(!isset($_SESSION['email'])){?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }else{
                                if(check_if_added_to_cart(12,$UID)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart-add.php?id=12"name="add"value="add"class="btn btn-block btn-primary">Add to cart</a><?php
                                }
                            }
                            ?>
     				    </div>
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
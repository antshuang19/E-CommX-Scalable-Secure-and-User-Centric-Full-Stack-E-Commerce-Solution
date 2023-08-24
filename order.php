<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login.php");	exit();
	}
    if(!isset($_SESSION['id'])){
		header("location: login.php");	exit();
	}
    if(!isset($_SESSION['pw'])){
		header("location: login.php");	exit();
	}
    if(!isset($_SESSION['email'])){
		header("location: login.php");	exit();
	}
    if(!isset($_SESSION['money'])){
		header("location: login.php");	exit();
	}
	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		header("location: login.php");	exit();
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Setting the pages character encoding -->
	<meta charset="UTF-8">

	<!-- The meta viewport will scale my content to any device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- Link to my stylesheet -->
	 <link rel="stylesheet" href="style1.css">
	<title>黄天</title>
</head>
<body>
	<section id="header">
        <a href="#"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a href="contact.php">Contact</a></li>
				<li><a class="active" href="order.php">Order</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>
	<table>
		<thead>
			<tr>
				<th>Image</th>
				<th>Product name</th>
				<th>Price</th>
				<th>Order ID</th>
			</tr>
		</thead>
		<tbody id="data-output">
			<!-- Prodcuts from gavascript file in here. -->
		</tbody>
	</table>

	<script src="order.js"></script> <!-- Link to the javascript file -->
</body>
</html>


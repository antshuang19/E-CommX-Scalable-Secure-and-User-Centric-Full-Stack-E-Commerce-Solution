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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>黄田</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
   
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="home.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>

    <section id="hero">
       
    </section>

    
    <section id="product1" class="section-p1">
        <h2>All Products</h2>
        <p>Summer Collection New Morden Design</p>
        <h3>SHOES</h3>
        <div  id="data-output" class="pro-container">

        </div>
        <h3>MEN-CLOTHES</h3>
        <div  id="data-output1" class="pro-container">

        </div>
        <h3>WOMEN-CLOTHES</h3>
        <div  id="data-output2" class="pro-container">

        </div>
        <h3>BAGS</h3>
        <div  id="data-output3" class="pro-container">

        </div>
        <h3>HATS</h3>
        <div  id="data-output4" class="pro-container">

        </div>
        <h3>GLASSES</h3>
        <div  id="data-output5" class="pro-container">

        </div>
    </section>

    <section  id="lower" class ="section-p2">
    <h7>网站创建者:黄黄田 </h7>
    </section>



    <script src="shop.js"></script>
</body>
</html>
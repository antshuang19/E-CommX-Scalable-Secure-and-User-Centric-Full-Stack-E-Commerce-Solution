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
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>黄田</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<section id="header">
        <a href="#"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="main.php">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="contact.php">Order</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
</section>
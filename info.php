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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="styles.css">
	<title>二手</title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h2>个人信息</h2>
		
		<!-- <lable>用户名</label>
		<li><?php echo $_SESSION['user']; ?></li><a href="changename.php">修改用户名</a> -->
        <br>
        <br>
		<lable>学号</label>
		<li><?php echo $_SESSION['id']; ?></li><a href="changeid.php">修改学号</a>
        <br>
        <br>
		<label>邮箱</label>
		<li><?php echo $_SESSION['email']; ?></li><a href="changeemail.php">修改邮箱</a>
        <br>
		<br>
		<label>钱包余额</label>
		<li><?php echo $_SESSION['money']; ?></li><a href="changemoney.php">钱包充值</a>
        <br>
        <br>
		<li><a href="changepw.php">修改密码</a></li>
		<br>
		<a href="home.php">返回</a>
	</form>

</body>
</html>


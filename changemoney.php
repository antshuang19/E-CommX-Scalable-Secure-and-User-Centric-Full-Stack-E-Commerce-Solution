<?php require("changeinfo.class.php") ?>
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
 <?php
	if(isset($_POST['submit'])){
		$user = new ChangeInfo($_SESSION['user'],$_SESSION['id'],$_SESSION['email'], $_SESSION['pw'], $_SESSION['money']);
        $newmoney=strval(floatval($_SESSION['money'])+$_POST['mm']);
        $user->changemoney($_SESSION['money'],$newmoney);
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
		<h2>钱包充值</h2>
		
		<lable>钱包余额</label>
		<li><?php echo $_SESSION['money']; ?></li>
        <br>
        <br>
		<label>请输入充值金额</label>
		<input type="number"name="mm"step="0.01">
        <br>    
        <button type="submit" name="submit">确认</button>
		<a href="info.php">返回</a>
	</form>

</body>
</html>
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
        $user->changepw($_SESSION['email'],$_POST['oldpw'],$_POST['newpw']);
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
		<h2>修改密码</h2>
		
		<lable>请输入原密码</label>
		<input type="text" name="oldpw">
        <br>
        <br>
		<label>请输入新密码</label>
		<input type="text" name="newpw"minlength="8" required>
        <br>    
        <button type="submit" name="submit">确认</button>
        <p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		<a href="info.php">返回</a>
	</form>

</body>
</html>
<?php require("login.class.php") ?>
<?php 
 error_reporting(E_ERROR); 
 ini_set("display_errors","Off");
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
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
		<h2>登录</h2>
		<h4>Both fields are <span>required</span></h4>

		<label>邮箱</label>
		<input type="text" name="username">

		<label>密码</label>
		<input type="password" id="pass" name="password"minlength="8" required>

		<button type="submit" name="submit">登录</button>
        <br>
        <br>
        <a href='index.php'>注册</a>
		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>
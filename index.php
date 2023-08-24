<?php require("register.class.php") ?>
<?php
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['name'],$_POST['id_student'],$_POST['username'], $_POST['password']);
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
		<h2>注册</h2>
		<h4>Both fields are <span>required</span></h4>

		
		<lable>名字</label>
		<input type="text" name="name">

		<lable>学号</label>
		<input type="text" name="id_student">

		<label>邮箱</label>
		<input type="text" name="username">

		<label>密码</label>
		<input type="password" id="pass" name="password"minlength="8" required>

		<button type="submit" name="submit">注册</button>
        <br>
        <br>
        <a href='login.php'>登录</a>
		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
	</form>

</body>
</html>
<?php 
	session_start();
	if(!isset($_SESSION['user'])){
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section id="header">
        <a href="home.php"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a class="active" href="Contact.php">Contact</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>
    <div class="container">
  <div style="text-align:center">
    <h21>Contact Us</h21>
    
  </div>
  <div class="row">
    <div class="column">
    <iframe class="iframe" src="https://map.baidu.com/@13242769,3756077,17z,50t,-0.13h"></iframe>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Argentina">Argentina</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="China">China</option>
          <option value="Indonesia">Indonesia</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
    
    
    <section  id="lower" class ="section-p2">
    <h7>网站创建者:黄黄田 </h7>
    </section>



    <script src="script.js"></script>
</body>
</html>
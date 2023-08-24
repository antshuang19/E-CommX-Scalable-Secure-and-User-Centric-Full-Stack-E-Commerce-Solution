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
    <title>二手交易平台</title>
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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a id="<?php echo $_SESSION['user']; ?>" onclick=getId2(this)>Order</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <h4>以旧换新</h4>
        <h2>处理闲置</h2>
        <h1>二手物品</h1>
        <p>通过校园保障安全性！</p>
        <button onclick="window.location.href = 'shop.php';">现在去购物</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/feature/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/feature/f6.png" alt="">
            <h6>Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <a id= "1" onclick = "getId(this)"><img src ="img/product/shoes1.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>阿迪达斯43码黑色八成新</h5>
                    <h4>￥327</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "2" onclick = "getId(this)" src ="img/product/shoes2.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>阿迪女鞋36码全新</h5>
                    <h4>￥370</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "3" onclick = "getId(this)" src ="img/product/shoes3.jpeg" alt="">
                <div class="des">
                    <span>Alexander McQueen</span>
                    <h5>亚历山大麦昆女鞋37码</h5>
                    <h4>￥150</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "4" onclick = "getId(this)" src ="img/product/shoes4.jpeg" alt="">
                <div class="des">
                    <span>Alexander McQueen</span>
                    <h5>阿迪女鞋37码带鞋盒</h5>
                    <h4>￥200</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "5" onclick = "getId(this)" src ="img/product/shoes5.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>阿迪蓝黑新款41码半九成新</h5>
                    <h4>￥500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "6" onclick = "getId(this)"src ="img/product/shoes6.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>摩登耐克运动风42码半</h5>
                    <h4>￥100</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "7" onclick = "getId(this)" src ="img/product/shoes7.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>三叶草阿迪正品37码女鞋</h5>
                    <h4>￥78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "8" onclick = "getId(this)" src ="img/product/shoes8.jpeg" alt="">
                <div class="des">
                    <h5></h5>鸿星尔克亲戚送的 无明显穿着痕迹</h5>
                    <h4>￥100</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "9" onclick = "getId(this)"  src ="img/product/f1.jpg" alt="">
                <div class="des">
                    <h5></h5>夏威夷风T恤全新没穿过男士</h5>
                    <h4>￥50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "10" onclick = "getId(this)"  src ="img/product/f2.jpg" alt="">
                <div class="des">
                    <h5></h5>夏威夷风T恤全新没穿过男士</h5>
                    <h4>￥50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "11" onclick = "getId(this)" src ="img/product/f3.jpg" alt="">
                <div class="des">
                    <h5></h5>夏威夷风T恤全新没穿过男士</h5>
                    <h4>￥45</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "12" onclick = "getId(this)" src ="img/product/f4.jpg" alt="">
                <div class="des">
                    <h5></h5>日式风格花衬衫九成新</h5>
                    <h4>￥50</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "13" onclick = "getId(this)" src ="img/product/f5.jpg" alt="">
                <div class="des">
                    <h5></h5>日式风格花衬衫九成新</h5>
                    <h4>￥49</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "14" onclick = "getId(this)" src ="img/product/f6.jpg" alt="">
                <div class="des">
                    <h5></h5>撞色搭配秋季外套没穿过</h5>
                    <h4>￥80</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "15" onclick = "getId(this)" src ="img/product/f7.jpg" alt="">
                <div class="des">
                    <h5></h5>卡其色九分裤春秋穿八成新</h5>
                    <h4>￥90</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img id= "16" onclick = "getId(this)"  src ="img/product/f8.jpg" alt="">
                <div class="des">
                    <h5></h5>猫猫图案宽松深色</h5>
                    <h4>￥60</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
        </div>
    </section>

    <section  id="lower" class ="section-p2">
    <h7>网站创建者:黄黄田 </h7>
    </section>



    <script src="script.js"></script>
</body>
</html>
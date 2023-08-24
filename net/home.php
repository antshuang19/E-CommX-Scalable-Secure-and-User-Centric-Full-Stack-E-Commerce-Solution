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
    <title>二手</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="main.html">Shop</a></li>
                <li><a href="index.php">Blog</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="home.php">Contanct</a></li>
                <li><a href=""><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <h4>以旧换新</h4>
        <h2>超值优惠</h2>
        <h1>在所有产品上</h1>
        <p>使用优惠券节省更多并享受高达 70% 的折扣！</p>
        <button>现在去购物</button>
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
                <a href="商品页面.html"><img src ="img/product/shoes1.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas 019000 Samba Classic</h5>
                    <h4>$527</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes2.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Alexander McQueen Oversized Lace-Up Sneakers</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes3.jpeg" alt="">
                <div class="des">
                    <span>Alexander McQueen</span>
                    <h5>(WMNS) Skechers Kozmiks Low-top Running Shoes Black/White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes4.jpeg" alt="">
                <div class="des">
                    <span>Alexander McQueen</span>
                    <h5>Alexander McQueen Oversized Lace-Up Sneakers</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes5.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes6.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>adidas Originals adiFOM Q</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes7.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/shoes8.jpeg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
            <div class="pro">
                <img src ="img/product/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5></h5>Adidas Originals Samba OG Shoes - Black White</h5>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart"></i></a>

            </div>
        </div>
    </section>




    <script src="script.js"></script>
</body>
</html>
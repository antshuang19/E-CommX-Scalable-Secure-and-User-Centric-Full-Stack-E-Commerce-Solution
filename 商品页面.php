<?php require("changeinfo.class.php") ?>
<?php 
    error_reporting(E_ERROR); 
    ini_set("display_errors","Off");
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
    $json_order = file_get_contents('order.json');
    $json_product =file_get_contents('all_product.json');
    $product_data = json_decode($json_product, true);
    $order_data = json_decode($json_order, true);
    $product_length=count($product_data);
    $last_order=array_slice($order_data, -1);
    if(isset($_POST['submit'])){
            redirect(3,'home.php','购买成功！');
            $order = array();
            $order['product']=$_POST['product'];
            $order['id_order']=$last_order[0]["id_order"]+1;
            $order['price']=$_POST['price'];
            $order['username']=$_SESSION['user'];
            $order['image']=$_POST['image'];
            array_push($order_data,$order);
            $json_string = json_encode($order_data);
            file_put_contents('order.json', $json_string);
            for($i=0;$i<$product_length;$i++)
                {   
                    
                    if($product_data[$i]["id"]===$_POST['product_id'])
                            $product_data[$i]["BuyorNot"]=true;
                }
                $json_product = json_encode($product_data);
                file_put_contents('all_product.json', $json_product);
		    $user = new ChangeInfo($_SESSION['user'],$_SESSION['id'],$_SESSION['email'], $_SESSION['pw'], $_SESSION['money']);
            $user->changemoney($_SESSION['money'],$_POST['balance']); 
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品页面</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="shop.css">
    <style>
        * {
        box-sizing: border-box;
        }
        .header{
            /* background-color: #F1F1F1; */
            text-align: center;
            padding: 20px;
            background-color: purple;
        }
        .header a{
            float:right;
            padding: 10px;
        }
        .header_logo
        {
            float:left;
            margin: 25px;
            width:10%;
        }
        .login_not{
            color:#000;
        }
        .login_yes{
            color:#000;
        }
        .topnav {
            list-style-type: none;
            margin: 10px;
            border-radius: 25px;
            padding: 0;
            overflow:hidden;
            background-color: #c562ce;
        }
        .topnav li{
            float:left;
            border-right: 1px solid rgb(187, 187, 187);
        }
        .topnav li a{
            display: block;
            text-align:center;
            width:100px;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }
        .topnav li a:hover{
            background-color: #d641ac;
            color:white;
        }
        .column{
            float:left;
            padding:5px;
        }
        .column.side{
            width:15%;
        }
        .column.middle{
            border-radius: 25px;
            background-color: bisque;
            width:70%;
        }
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
        @media screen and (max-width: 600px) {
        .column.side, .column.middle {
         width: 100%;
        }
        }
        .commodity_img{
            margin:auto;
            border-radius: 25px;
            border:10px;
            padding:10px;
            width:500px;
            float:left;
        }
        .commodity_name
        {
            font-size:20px;
            text-align: center;
            color:#000;
        }
        .commodity_price
        {
            font-size:25px;
            color:purple;
        }
        .commodity_title
        {
            font-size:20px;
            color:rgb(145, 141, 141);
        }
        .commodity_content
        {
            font-size:20px;
        }
        .buy{
            font-size:25px;
        }
        a:link {color:white;}      /* 未访问链接*/
        a:visited {color:purple;}  /* 已访问链接 */
        a:hover {color:#FF00FF;}  /* 鼠标移动到链接上 */
        a:active {color:#0000FF;}  /* 鼠标点击时 */
    </style>
</head>
<body>
<div id="root">
    <!-- <div class="header">
        <a class="login_not" href="css.html" style="display: hidden;">注册</a> <a class="login_not" href="css.html"style="display: hidden;>登录</a>
        <a class="login_yes style="display: none;">退出</a> <a class="login_yes" style="display: none;">欢迎！</a>
    <h1 >二手交易平台</h1>
    </div> -->
    <section id="header">
        <a href="#"><img src ="img/logo.png" width="60" height="60" class="logo" alt=""></a>
        <li><a>钱包余额：￥{{wallet}}</a></li>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="shop">Shop</a></li>
                <li><a href="About-Blog/index.html">Blog & About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="info.php"><?php echo $_SESSION['user']; ?></a></li>
                <li><a href="?logout">Log out</a><li>
            </ul>
        </div>
    </section>
    <!-- <div class="topnav">
        <li><a href="/home.php" >主页</a></li>
        <li><a href="#2">二手物品</a></li>
    </div> -->
<section style="background-image: url(img/images.jpeg);">
    <div class="row">
    <div class="column side"></div>
    <div class="column middle" >
    <img :src="img" alt="加载失败" class="commodity_img"  >
    <p>
    <strong class="commodity_name" >{{name}}</strong><br>
    <!-- <div style="display: block;">商品标签</div><br> -->
    <strong class="commodity_price" >{{getPrice}}</strong><br>
    <span class="commodity_title">卖家:</span>
    <span class="commodity_content" >{{seller_id}}</span> <br>
    <span class="commodity_title">简述:</span>
    <span class="commodity_content">{{document}}</span><br>
    </p>
    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<input type="hidden" name="balance" :value=curwallet>
        <input type="hidden" name="price" :value=price>
        <input type="hidden" name="product" :value= name>
        <input type="hidden" name="image" :value= img>
        <input type="hidden" name="product_id" :value= id>
        <div v-show="SuccessBuy===false">您的余额不足，请在充值后再进行操作。</div>
        <button class="button" type="submit" name="submit" :disabled="SuccessBuy===false" >立即购买</button>
    </form>
    </div>
</div>
</section>
<section id="product1" class="section-p1">
        <h2>猜你喜欢:</h2>
        <div  :id="Like" class="pro-container">
            </section>
</div>
</div>
</body>
<script type="text/javascript" src="js/vue.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script  type="text/javascript" >
    Vue.config.productionTip=false;
    const vm =new Vue({
        el:'#root',
        data:{
            user:'',
            id:'',
            name:'OMG',
            price:0,
            img:'f1',
            seller_id:'205220016',
            document:'babababababaabba',
            wallet:<?php echo $_SESSION['money']; ?>,
            SuccessBuy:false,
            type:'',
        },
        methods:{    
        },
        computed:{
            getPrice(){
                return '¥'+this.price;
            },
            curwallet(){
                if(this.wallet-this.price>=0)
                    this.SuccessBuy=true;
                else
                    this.SuccessBuy=false;
                return this.wallet-this.price;
            },
            Like(){
                if(this.type==='shoes')
                    return 'data-output';
                else if(this.type==='men-clothes')
                    return 'data-output1';
                else if(this.type==='women-clothes')
                    return 'data-output2';
                else if(this.type==='bags')
                    return 'data-output3';
                else if(this.type==='hats')
                    return 'data-output4';
                else if(this.type==='glasses')
                    return 'data-output5';
            }
        },
        mounted() {
            $.getJSON('./all_product.json',function(result){
               vm.id=localStorage.getItem('id');
               vm.name=result[localStorage.getItem('id')-1].name;
               vm.img=result[localStorage.getItem('id')-1].image;
               vm.document=result[localStorage.getItem('id')-1].description;
               vm.price=result[localStorage.getItem('id')-1].price;
               vm.type=result[localStorage.getItem('id')-1].type;
            //    if(result[localStorage.getItem('id')-1].type==='shoes')
            //         vm.Like='data-output';
            //     else if(result[localStorage.getItem('id')-1].type==='men-clothes')
            //         vm.Like='data-output1';
            //     else if(result[localStorage.getItem('id')-1].type==='women-clothes')
            //         vm.Like='data-output2';
            //     else if(result[localStorage.getItem('id')-1].type==='bags')
            //         vm.Like='data-output3';
            //     else if(result[localStorage.getItem('id')-1].type==='hats')
            //         vm.Like='data-output4';
            //     else if(result[localStorage.getItem('id')-1].type==='glasses')
            //         vm.Like='data-output5';
            })
        } 
    })
</script>
<script src="shop.js"></script>
</html>
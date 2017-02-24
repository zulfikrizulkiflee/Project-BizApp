<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM comm_user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Username or Password is invalid";
      }
   }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login | BizApp</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> </head>
    <!--/head-->

    <body>
        <header id="header">
            <!--header-->
            <div class="header_top">
                <!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!--
                        <div class="contactinfo">
    <ul class="nav nav-pills">
        <li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
        <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
    </ul>
</div>
--></div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->
            <div class="header-middle">
                <!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.html"><img src="images/home/bizapp_logo.png" alt="" /></a>
                            </div>
                            <div class="btn-group pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown"> English <span class="caret"></span> </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Bahasa Malaysia</a></li>
                                    </ul>
                                </div>
                                <!--
                            <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown"> DOLLAR <span class="caret"></span> </button>
    <ul class="dropdown-menu">
        <li><a href="">Canadian Dollar</a></li>
        <li><a href="">Pound</a></li>
    </ul>
</div>
--></div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <?php
                                        if(isset($_SESSION['login_user'])){
                                            echo "<li class='account-user' data-toggle='modal' data-target='#modalAccount'><a href=''><i class='fa fa-user'></i> ".$login_session."</a></li>";
                                            echo "<li class='cart-user'><a href='cart.html'><i class='fa fa-shopping-cart'></i> Cart</a></li>";
                                            echo "<li class='login-user'><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
                                        }else{
                                            echo "<li class='login-user'><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-middle-->
            <div class="header-bottom">
                <!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="login.html" class="active">Login</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search" /> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header-bottom-->
        </header>
        <!--/header-->
        <section id="form">
            <!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form">
                            <!--login form-->
                            <h2>Login to your account</h2>
                            <form action="" method="post">
                                <input type="text" name="username" placeholder="Username" />
                                <input type="password" name="password" placeholder="Password" /> <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
                                <div style="color:red;text-align:center">
                                    <?php echo $error ?>
                                </div>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div>
                        <!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2> </div>
                    <div class="col-sm-4">
                        <div class="signup-form">
                            <!--sign up form-->
                            <h2>New User Signup!</h2>
                            <form action="#">
                                <input type="text" placeholder="Name" />
                                <input type="text" placeholder="Phone Number" />
                                <input type="email" placeholder="Email Address" />
                                <input type="text" placeholder="Username" />
                                <input type="password" placeholder="Password" />
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div>
                        <!--/sign up form-->
                    </div>
                </div>
            </div>
        </section>
        <!--/form-->
        <footer id="footer">
            <!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>biz</span>app</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img"> <img src="images/home/iframe1.png" alt="" /> </div>
                                        <div class="overlay-icon"> <i class="fa fa-play-circle-o"></i> </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2> </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img"> <img src="images/home/iframe2.png" alt="" /> </div>
                                        <div class="overlay-icon"> <i class="fa fa-play-circle-o"></i> </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2> </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img"> <img src="images/home/iframe3.png" alt="" /> </div>
                                        <div class="overlay-icon"> <i class="fa fa-play-circle-o"></i> </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2> </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="video-gallery text-center">
                                    <a href="#">
                                        <div class="iframe-img"> <img src="images/home/iframe4.png" alt="" /> </div>
                                        <div class="overlay-icon"> <i class="fa fa-play-circle-o"></i> </div>
                                    </a>
                                    <p>Circle of Hands</p>
                                    <h2>24 DEC 2014</h2> </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="address"> <img src="images/home/map.png" alt="" />
                                <p>9-2, Jalan Tasik Selatan 3, Bandar Tasik Selatan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Service</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Online Help</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Order Status</a></li>
                                    <li><a href="">Change Location</a></li>
                                    <li><a href="">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Quick Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">T-Shirt</a></li>
                                    <li><a href="">Mens</a></li>
                                    <li><a href="">Womens</a></li>
                                    <li><a href="">Gift Cards</a></li>
                                    <li><a href="">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Terms of Use</a></li>
                                    <li><a href="">Privecy Policy</a></li>
                                    <li><a href="">Refund Policy</a></li>
                                    <li><a href="">Billing System</a></li>
                                    <li><a href="">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About BizApp</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="">Company Information</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="">Store Location</a></li>
                                    <li><a href="">Affillate Program</a></li>
                                    <li><a href="">Copyright</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="single-widget">
                                <h2>About BizApp</h2>
                                <form action="#" class="searchform">
                                    <input type="text" placeholder="Your email address" />
                                    <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                    <p>Get the most recent updates from
                                        <br />our site and be updated your self...</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2017 BizApp All rights reserved.</p>
                        <!--<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>-->
                    </div>
                </div>
            </div>
        </footer>
        <!--/Footer-->
        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>
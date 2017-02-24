<?php
    include('session.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home | BizApp</title>
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
        <link rel="shortcut icon" href="images/ico/3d%20logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/3d%20logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/3d%20logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/3d%20logo.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/3d%20logo.png"> </head>
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
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
--></div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
                                        <li><a href="#">Bahasa Malaysia</a></li>
                                    </ul>
                                </div>
                                <!--
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown"> DOLLAR <span class="caret"></span> </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
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
                                            echo "<li class='cart-user'><a href='cart.html'><i class='fa fa-shopping-cart'></i> Buylist</a></li>";
                                            echo "<li class='logout-user' data-toggle='modal' data-target='#logout-modal'><a href='javascript:void'><i class='fa fa-lock'></i> Logout</a></li>";
                                        }else{
                                            echo "<li class='login-user'><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="modalAccount" tabindex="-1" role="dialog" aria-labelledby="modalAccountLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="profile-pic">
                                            <br><img src='<?php echo"$profile_pic"; ?>' style="width:125px;height:125px;border-radius:50%;border:1px solid #888" />
                                            <h4 class="modal-title" id="myModalLabel"><?php echo"$login_session"; ?></h4></div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-3"><b>Name:</b></div>
                                                <div class="col-md-9">
                                                    <?php echo"$user_name"; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-3"><b>Email:</b></div>
                                                <div class="col-md-9">
                                                    <?php echo"$email"; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-md-3"><b>Member Since:</b></div>
                                                <div class="col-md-9">
                                                    <?php echo"$date_register"; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-md-3"><b>Rating: </b></div>
                                                <div class="col-md-9" style="color:gold"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- logout modal-->
                        <div class="modal fade" id="logout-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="text-align:center">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Logout?</h4> </div>
                                    <div class="modal-body" style="text-align:center"><img src="images/home/alert-icon.png" style="width:15vw"></div>
                                    <div class="modal-footer" style="text-align:center">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color:#fff;color:#FE980F">Cancel</button>
                                        <button type="button" class="btn btn-primary logout-btn">Logout Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end logout modal-->
                        <!--product modal-->
                        <div class="modal fade" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel">
                            <div class="modal-dialog product-info" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <div class="row" style="padding-top:0;padding-bottom:0">
                                            <div class="col-sm-12">
                                                <div class="product-details">
                                                    <!--product-details-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end product modal-->
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
                                    <li><a href="index.html" class="active">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="login.html">Login</a></li>
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
        <section id="slider">
            <!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1><span>BIZ</span>APP</h1>
                                        <h2>Latest Marketplace For You</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6"> <img src="images/home/girl1.jpg" class="girl img-responsive" alt="" /> <img src="images/home/pricing.png" class="pricing" alt="" /> </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>BIZ</span>APP</h1>
                                        <h2>Get Your Favourite Product Here</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6"> <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" /> <img src="images/home/pricing.png" class="pricing" alt="" /> </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1><span>BIZ</span>APP</h1>
                                        <h2>More Than 15,000 Products To Be Browsed</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <button type="button" class="btn btn-default get">Get it now</button>
                                    </div>
                                    <div class="col-sm-6"> <img src="images/home/girl3.jpg" class="girl img-responsive" alt="" /> <img src="images/home/pricing.png" class="pricing" alt="" /> </div>
                                </div>
                            </div>
                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev"> <i class="fa fa-angle-left"></i> </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/slider-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Kategori</h2>
                            <div class="panel-group category-products" id="accordian">
                                <!--category-productsr-->
                                <div class="row preloader">
                                    <div class="wrap-loading">
                                        <div class="loading loading-4"></div>
                                    </div>
                                </div>
                            </div>
                            <!--/category-products-->
                            <div class="brands_products">
                                <!--brands_products-->
                                <h2>Brands</h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a href="#"> <span class="pull-right">(50)</span>Acne</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(27)</span>Albiro</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(32)</span>Ronhill</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(5)</span>Oddmolly</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(9)</span>Boudestijn</a>
                                        </li>
                                        <li>
                                            <a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/brands_products-->
                            <div class="price-range">
                                <!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well text-center">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[0,600]" id="sl2">
                                    <br /> <b class="pull-left">RM 0</b> <b class="pull-right">RM 600+</b> </div>
                            </div>
                            <!--/price-range-->
                            <div class="shipping text-center">
                                <!--shipping--><img src="images/home/shipping.jpg" alt="" /> </div>
                            <!--/shipping-->
                        </div>
                    </div>
                    <div class="col-sm-9 padding-right">
                        <div class="features_items" id="disc">
                            <!--features_items-->
                            <h2 class="title text-center">Discover Items</h2>
                            <div class="discover-items">
                                <div class="row preloader">
                                    <div class="wrap-loading">
                                        <div class="loading loading-4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--features_items-->
                    </div>
                </div>
            </div>
        </section>
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
                                    <li><a href="#">Online Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Order Status</a></li>
                                    <li><a href="#">Change Location</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Quick Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privecy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Billing System</a></li>
                                    <li><a href="#">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About BizApp</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Company Information</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Store Location</a></li>
                                    <li><a href="#">Affillate Program</a></li>
                                    <li><a href="#">Copyright</a></li>
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
                        <!--                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>-->
                    </div>
                </div>
            </div>
        </footer>
        <!--/Footer-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function () {
                discoverProduct();
            });
            $.get("php/category.php", function (data) {
                $(".category-products").html(data);
            });

            function discoverProduct() {
                $(".discover-items").html("<div class=\"row preloader\"><div class=\"wrap-loading\"><div class=\"loading loading-4\"></div></div></div>");
                $.get("php/discover.php", function (data) {
                    $(".discover-items").html(data);
                });
            }
        </script>
    </body>

    </html>
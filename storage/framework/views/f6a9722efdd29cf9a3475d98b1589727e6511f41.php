<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('css/stellarnav.min.css')); ?>">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/demo.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header-footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/contain.css')); ?>">
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="container">

            <div class="header-item-1">
                <div class="left-list col-md-4 col-sm-4">
                    <p>Free Shipping on All Orders Over <span class="over-price">$49</span></p>
                </div>

                <div class="logo col-xs-5">
                    <div class="menu-item-1">
                        <div>
                            <img src="../image/logo.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="right-list col-md-8 col-sm-9" >
                    <ul class="list-item">
                        <li class="responsive-none"> <a href="">Language</a> </li>
                        <li class="responsive-none"><a href="">My Account</a></li>
                        <li class="responsive-none"><a href="">Whishlist</a></li>
                        <li class="responsive-none"><a href="">Login</a></li>
                        <li class="responsive-none"><a href="">Register</a></li>
                        <li class="header-cart" >
                            <a href="">
                                <img src="../image/cart.png" alt="">
                            </a>
                            <div class="amount">
                                <p>3</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="main-nav" class="stellarnav">
    <div class="cart-img" >
        <a href="">
            <img src="../image/cart.png" alt="">
        </a>
    </div>
    <div class="responsive-logo">
        <div class="menu-item-1">
            <div class="left-list">
                <img src="../image/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="logo">
                <div class="menu-item-1">
                    <div class="left-list">
                        <img src="../image/logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="menu" >
                <ul>
                    <li><a class="active"  href="">shop</a></li>
                    <li><a href="">best sellers</a></li>
                    <li><a href="">collections</a></li>
                    <li><a href="">sale</a></li>
                    <li><a href="">blog</a></li>
                    <li><a href="">pages</a></li>

                    <li class="search menu-field">
                        <form class="back">
                            <input type="text" name="search" class="extand">
                            <span class="fa fa-search searchicon" aria-hidden="true"></span>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="slide-content">
    <div id="myCarousel-1" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-1" data-slide-to="1"></li>
            <li data-target="#myCarousel-1" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_Slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item active">
                <img src="../image/<?php echo e($each_Slide->name); ?>" alt="">
                <div class="centered"><p>2016</p></div>
                <div class="title">
                    <p class="title-paragraph-1">new collection</p>
                    <p class="title-paragraph-2">for men's</p>
                    <p class="title-paragraph-3">beauty world on my life</p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
    <div id="myCarousel-responsive" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#myCarousel-responsive" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-responsive" data-slide-to="1"></li>
            <li data-target="#myCarousel-responsive" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">
                <img src="../image/slide-1.png" alt="">
            </div>

            <div class="item">
                <img src="../image/slide-2.png" alt="">
            </div>

            <div class="item">
                <img src="../image/slide-3.png" alt="">
            </div>
        </div>

    </div>
</div>
<div class="container-fluid ">
    <div class="container slide">
        <div class="contain-1">
            <div class="right-product-img col-md-6 col-sm-6 col-xs-12">
                <div class="name-product-1 col-md-4">
                    <p class= "name">sale <span>75%</span></p>
                    <p class="category">accessories</p>
                    <p class="shop"><a>shop now</a></p>
                </div>

                <div class="right-img-item-1 col-md-12 col-sm-12 col-xs-12">
                    <img src="../image/right-img-1.jpg" alt="">
                    <div class="centered">
                        <div class="before"></div>
                        <p class="text-1">new arrival</p>
                        <p class="text-2">new arrivals, new feelings, new choices</p>
                        <div class="after"></div>
                    </div>
                </div>
            </div>
            <div class="middle-product-img col-md-3  col-sm-6 col-xs-12">
                <div class="img-item-1 col-md-12 col-sm-12 col-xs-12">
                    <img src="../image/middle-1.jpg" alt="">
                    <div class="centered">
                        <div class="before"></div>
                        <p class="text-1">new arrival</p>
                        <p class="text-2">new arrivals, new feelings, new choices</p>
                        <div class="after"></div>
                    </div>
                </div>
                <div class="img-item-2 col-md-12 col-sm-12 col-xs-12">
                    <img src="../image/middle-2.jpg" alt="">
                    <div class="centered">
                        <div class="before"></div>
                        <p class="text-1">new arrival</p>
                        <p class="text-2">new arrivals, new feelings, new choices</p>
                        <div class="after"></div>
                    </div>
                </div>
            </div>
            <div class="left-product-img  col-md-3  col-sm-6 col-xs-12">

                <div class="name-product col-md-5 col-sm-12">
                    <p class="category" >men's</p>
                    <p class="shop"><a>fashions</a></p>
                    <div class="before"></div>
                </div>
                <div class="img-item-2 col-md-12  col-sm-12 col-xs-12" >
                    <img src="../image/middle-3.jpg" alt="">
                    <div class="centered">
                        <div class="before"></div>
                        <p class="text-1">new arrival</p>
                        <p class="text-2">new arrivals, new feelings, new choices</p>
                        <div class="after"></div>
                    </div>
                </div>

                <div class="name-product-2 col-md-8  col-sm-6 col-xs-12">
                    <p class="category" >WOMEN'S</p>
                    <p class="name">collection</p>
                    <p class="shop"><a>view collection</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fashion white-background">
    <div class="container">
        <div class="new-product">
            <h2>
                NEWS PRODUCTS
            </h2>
            <hr>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptas.</p>
            <div class="product col-sm-12">
                <div class="item col-md-3 col-sm-5 col-xs-11">
                    <div class="new-product-img">
                        <img src="../image/new-product-1.jpg" alt="">
                        <div class="left">
                            <div id="sale" class="left-note"><p>SALE</p></div>
                        </div>
                    </div>
                    <div class="new-product-name">
                        <p class="name">A blue search top</p>
                        <p class="price"><span><i>$175.00 </span><span class="del-price">220.00</i></span> </p>
                    </div>
                    <a href="" class="icon cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    <a href="" class="icon star"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                    <a href="" class="icon random"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
                <div class="item col-md-3 col-sm-5 col-xs-11">
                    <div class="new-product-img">
                        <img src="../image/new-product-2.jpg" alt="">
                    </div>
                    <div class=" new-product-name">
                        <p class="name">A blue search top</p>
                        <p class="price"><span><i>$175.00 </span><span class="del-price">220.00</i></span> </p>
                    </div>
                    <a href="" class="icon cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    <a href="" class="icon star"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                    <a href="" class="icon random"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
                <div class="item col-md-3 col-sm-5 col-xs-11">
                    <div class="new-product-img">
                        <img src="../image/new-product-3.jpg" alt="">
                        <div class="left">
                            <div id="new" class="left-note"><p>NEWS</p></div>
                        </div>
                    </div>
                    <div class="new-product-name">
                        <p class="name">A blue search top</p>
                        <p class="price"><span><i>$175.00 </span><span class="del-price">220.00</i></span> </p>
                    </div>
                    <a href="" class="icon cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    <a href="" class="icon star"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                    <a href="" class="icon random"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
                <div class="item col-md-3 col-sm-5 col-xs-11">
                    <div class="new-product-img">
                        <img src="../image/new-product-4.jpg" alt="">
                    </div>
                    <div class="new-product-name">
                        <p class="name">A blue search top</p>
                        <p class="price"><span><i>$175.00 </span><span class="del-price">220.00</i></span> </p>
                    </div>
                    <a href="" class="icon cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    <a href="" class="icon star"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                    <a href="" class="icon random"><i class="fa fa-random" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid  hot-deal-background">
    <div class="container">
        <div class="col-md-8 col-sm-12 hot-deal-content">
            <h2>HOT DEAL OF THIS WEEK</h2>
            <hr>
            <p>Sale Minium <span>25%</span> Discount Or Up <span>75%</span>Off On A Big Range Of Clothing</p>
            <div class="countdown countdown-container"
                 data-start="1362139200"
                 data-end="1388461320"
                 data-now="1387461319"
                 data-border-color="rgba(255, 255, 255, .8)">
                <div class="clock row">
                    <div class="clock-item clock-days countdown-time-value col-sm-6">
                        <div class="">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">10</p>
                                    <p class="type-days type-time">DAYS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-hours countdown-time-value col-sm-6">
                        <div class="">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">4</p>
                                    <p class="type-hours type-time">HOURS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-minutes countdown-time-value col-sm-6">
                        <div class="">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">19</p>
                                    <p class="type-minutes type-time">MINS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-seconds countdown-time-value col-sm-6">
                        <div class="">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">56</p>
                                    <p class="type-seconds type-time">SECS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->
                </div><!-- /.clock -->
            </div><!-- /.countdown-wrapper -->
            <div class="shop-now">
                <button>SHOP NOW</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid fashion white-background">
    <div class="container">
        <div class="fashion-women">
            <h2>
                FASHION WOMEN'S
            </h2>
            <hr>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptas.</p>

            <div class="product">
                <div class="left col-md-3 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/women-1.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>

                    </div>
                    <div class="col-md-12  col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/women-2.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>
                    </div>
                </div>
                <div class="middle col-md-6 col-sm-12 col-xs-12">
                    <div id="myCarousel" class="carousel slide col-md-12  col-sm-12 col-xs-12" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../image/women-3.jpg" alt="">
                            </div>

                            <div class="item">
                                <img src="../image/women-3.jpg" alt="">

                            </div>

                            <div class="item">
                                <img src="../image/women-3.jpg" alt="">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="left col-md-3 col-sm-12 col-xs-12 ">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/women-4.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>

                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/women-5.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid fashion  white-background">
    <div class="container">
        <div class="fashion-men">
            <h2>
                FASHION MEN'S
            </h2>
            <hr>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="product">
                <div class="left col-md-3 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/men-1.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>

                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/men-2.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>
                    </div>
                </div>
                <div class="left col-md-3 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/men-3.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>

                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="fashion-item">
                            <img src="../image/men-4.jpg" alt="">
                        </div>

                        <div class="new-product-name">
                            <p class="name">A blue search top</p>
                            <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                        </div>
                    </div>
                </div>
                <div class="middle col-md-6 col-sm-12 col-xs-12">
                    <div id="myCarousel" class="carousel slide col-md-12 col-sm-12 col-xs-12" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="../image/men-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid quote-content">
    <div id="myCarousel-4" class="carousel slide" data-ride="carousel">

        <div class="quote">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel-4" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel-4" data-slide-to="1"></li>
                <li data-target="#myCarousel-4" data-slide-to="2"></li>
                <li data-target="#myCarousel-4" data-slide-to="3"></li>
                <li data-target="#myCarousel-4" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner col-md-12">
                <div class="item active">
                    <div class="image col-md-2 col-md-offset-2">
                        <img src="../image/quote.png" alt="">
                    </div>
                    <div class="quote-text col-md-6">
                        <p class="text-1">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ut totam, dolores minima facilis ea ullam repellat perferendis a numquam."</p>
                        <p  class="text-2">Sakara.Tran</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image col-md-2 col-md-offset-2">
                        <img src="../image/quote.png" alt="">
                    </div>
                    <div class="quote-text col-md-6">
                        <p class="text-1">"ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ut totam, dolores minima facilis ea ullam repellat perferendis a numquam"</p>
                        <p class="text-2">Sakara.Tran</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image col-md-2 col-md-offset-2">
                        <img src="../image/quote.png" alt="">
                    </div>
                    <div class="quote-text col-md-6">
                        <p class="text-1">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ut totam, dolores minima facilis ea ullam repellat perferendis a numquam."</p>
                        <p  class="text-2">Sakara.Tran</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image col-md-2 col-md-offset-2">
                        <img src="../image/quote.png" alt="">
                    </div>
                    <div class="quote-text col-md-6">
                        <p class="text-1">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ut totam, dolores minima facilis ea ullam repellat perferendis a numquam."</p>
                        <p  class="text-2">Sakara.Tran</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image col-md-2 col-md-offset-2">
                        <img src="../image/quote.png" alt="">
                    </div>
                    <div class="quote-text col-md-6">
                        <p class="text-1">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ut totam, dolores minima facilis ea ullam repellat perferendis a numquam."</p>
                        <p  class="text-2">Sakara.Tran</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="fashion white-background container-fluid">
    <div id="exTab2" class="container">
        <div class="shell-tab">
            <ul class="nav nav-tabs col-md-7 col-xs-offset-2 col-md-offset-3 col-xs-10 ">
                <li class="active">
                    <a  href="#1" data-toggle="tab">BEST SELLERS</a>
                </li>
                <li>
                    <a href="#2" data-toggle="tab">FEATURED</a>
                </li>
                <li>
                    <a href="#3" data-toggle="tab">POPULAR</a>
                </li>
                <li class="new-line">
                    <a href="#4" data-toggle="tab">SALE OFF</a>
                </li>
            </ul>

            <div class="tab-content ">

                <div class="tab-pane active product col-md-12 col-sm-12 col-xs-12" id="1">

                    <div class="middle col-md-6 col-sm-12 col-xs-12">
                        <div id="myCarousel-2" class="carousel slide col-md-12  col-sm-12 col-xs-12" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../image/blog-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="fashion-item">
                                <img src="../image/blog-2.jpg" alt="">
                                <div class="note">
                                    <div id="sale" class="left-note"><p>SALE</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-3.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-4.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="ol-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-5.jpg" alt="">
                                <div class="note">
                                    <div id="new" class="left-note"><p>NEWS</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane product col-md-12 col-sm-12 col-xs-12" id="2">
                    <div class="middle col-md-6 col-sm-12 col-xs-12">
                        <div id="myCarousel-2" class="carousel slide col-md-12  col-sm-12 col-xs-12" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../image/featured-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="fashion-item">
                                <img src="../image/men-2.jpg" alt="">
                                <div class="note">
                                    <div id="sale" class="left-note"><p>SALE</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/men-3.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/men-4.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="ol-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/men-1.jpg" alt="">
                                <div class="note">
                                    <div id="new" class="left-note"><p>NEWS</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane product col-md-12 col-sm-12 col-xs-12" id="3">

                    <div class="middle col-md-6 col-sm-12 col-xs-12">
                        <div id="myCarousel-2" class="carousel slide col-md-12  col-sm-12 col-xs-12" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../image/popular-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="fashion-item">
                                <img src="../image/women-1.jpg" alt="">
                                <div class="note">
                                    <div id="sale" class="left-note"><p>SALE</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/women-2.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/women-4.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="ol-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-5.jpg" alt="">
                                <div class="note">
                                    <div id="new" class="left-note"><p>NEWS</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane product col-md-12 col-sm-12 col-xs-12" id="4">

                    <div class="middle col-md-6 col-sm-12 col-xs-12">
                        <div id="myCarousel-2" class="carousel slide col-md-12  col-sm-12 col-xs-12" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="../image/sale-off-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12">
                            <div class="fashion-item">
                                <img src="../image/blog-2.jpg" alt="">
                                <div class="note">
                                    <div id="sale" class="left-note"><p>SALE</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-3.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="left col-md-3 col-sm-6 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-4.jpg" alt="">
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>

                        </div>
                        <div class="ol-md-12 col-sm-12 col-xs-12">
                            <div class="fashion-item">
                                <img src="../image/blog-5.jpg" alt="">
                                <div class="note">
                                    <div id="new" class="left-note"><p>NEWS</p></div>
                                </div>
                            </div>

                            <div class="new-product-name">
                                <p class="name">A blue search top</p>
                                <p class="price"><span>$175.00 </span><span class="del-price"><i>220.00</i></span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="blog-content">
    <div class="container-fluid">
        <div class="container blog">
            <h2>
                LATEST BLOG
            </h2>
            <hr>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <?php $__currentLoopData = $ava; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_ava): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-4">
                <div class="blog-img">
                    <img class="main-img" src="../image/blog-img-1.jpg" alt="">
                    <img class="avatar" src="../image/<?php echo e($each_ava->name); ?>" alt="">
                </div>
                <div class="title">
                    <p>Genius Beauty Tips Learned Finibus Eget Sagittis</p>
                    <span><i>By Saka.Tran . 27 February, 2016</i></span>

                    <div class="content">
                        <p>Phasellus commod est vitae arcu convallis laoreet venenatis. Interdum et malesuada fames ac ante ipsum primis in faucibus...</p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="container-fluid white-background">
    <div class="container">
        <div class="logo-slide col-md-12">
            <?php $__currentLoopData = $logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $each_logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="logo-slide-item col-md-2 col-sm-4 col-xs-12">
                    <img src="../image/<?php echo e($each_logo->name); ?>" alt="">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<div id="sign-up-content" class="container-fluid">
    <div class="container">
        <div class="sign-up">
            <div class="col-md-5">
                <p>SIGN UP FOR OUR EXCULSIVE NEWSLETTER</p>
            </div>
            <div class="input-mail col-md-7 col-sm-7 col-xs-11">
                <input type="text" placeholder="Enter your email here">
                <img class="mail-img" src="../image/mail.png" alt="">
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container-fluid contain-img">

        <div class="container footer-item">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="footer-left-part left-list col-md-11 col-xs-11 ">
                    <img src="../image/logo.png" alt="">
                    <p class="text">
                        This is the culmination of almost a year's worth of fittings and iterations-it was one of the first pieces that I envisioned creating when I began working on the line but it really had to be perfect towor.In between a pullover and blouse and a sort of sn1oc. It's somehow the coolest
                    </p>
                    <p>
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        9067 Zurich, Switzerland 87.
                    </p>
                    <p>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Hello@sakatran.com
                    </p>
                    <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        01-222-567-6789
                    </p>
                    <p>
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        Naturel.com
                    </p>
                </div>
            </div>
            <div class="footer-right-part col-md-8 col-sm-10 col-xs-10">
                <div class="footer-field-1">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h5>may we help you?</h5>
                        <ul class="list-before">
                            <li><a href="">Contacts Us</a></li>
                            <li><a href="">FAQs</a></li>
                            <li><a href="">Payment Options</a></li>
                            <li><a href="">Shipping Services</a></li>
                            <li><a href="">Returns and Exchanges</a></li>
                            <li><a href="">How to Shop Naturel.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h5>the company</h5>
                        <ul class="list-before">
                            <li><a href="">About Naturel</a></li>
                            <li><a href="">Corporate Responsibility</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Legal</a></li>
                            <li><a href="">Privacy & Cookies</a></li>
                            <li><a href="">Corporate Information</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h5>Find us on</h5>
                        <ul>
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    Facebook
                                </a>
                            </li>
                            <li><a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    Twitter
                                </a>
                            </li>
                            <li><a href="">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                    Youtube
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    Google+
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i>
                                    Printerest
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-field-2">
                    <div id="copy-right" class="col-md-6 col-sm-6  col-xs-12">
                        <p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2015, Design by <span> Saka.Tran </span> </p>
                    </div>
                    <div id="pay-method" class="col-md-6 col-sm-6 col-xs-12">
                        <img src="../image/footer-pay.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo e(assert('js/kinetic.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(assert('js/jquery.final-countdown.js')); ?>"></script>
<script type="text/javascript">
    $('.countdown').final_countdown();
</script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type="text/javascript" src="<?php echo e(assert('js/stellarnav.min.js')); ?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'light'
        });
    });
</script>
</body>

</html>
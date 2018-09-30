<!DOCTYPE html>
<html>
<head>
<title>Online Product Review System</title>
<!--css-->
<link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/css/ken-burns.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/css/animate.min.css') }}" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ONLINE SHOPPING" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/js/jquery.min.js') }}"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!--webfonts-->

<style type="text/css">
    div.social {
        margin-bottom: 1em;
    }
    div.social a {
        width: 32px;
        height: 32px;
        background: #F58703;
        display: inline-block;
        margin:0 0.2em;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        border-radius: 20px;
    }
    div.social i {
        padding-top: 20%;
    }
    body {
        background-color: #d6ebd9;
    }

</style>
</head>
<body>
    <!--header-->
    <div class="col-md-12 wel-grid"> 
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                <!---Brand and toggle get grouped for better mobile display-->
                        <div class="navbar-header">
                            <div class="navbar-brand">
                                <h1><a href="home.html">Online Shopping</a></h1>
                            </div>
                        </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <nav class="link-effect-4" id="link-effect-4">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><span data-hover="Home">Home</span></a></li>
                                    <li><a href="review-sign-in.php"><span data-hover="Review Products">Review Products</span></a></li>
                                    <li><a href="register"><span data-hover="Register">Register</span></a></li>
                                    <li><a href="login"><span data-hover="Login">Login</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    <!--header-->
    <!-- banner -->
    <div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">

            <!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First-Slide -->
                <div class="item active">
                    <img src="images/slide1.jpg" alt="" class="img-responsive" />
                  <!--  <div class="carousel-caption kb_caption">

                        <h4 data-animation="animated flipInX">Online Shopping</h4>
                    </div>-->
                </div>

                <!-- Second-Slide -->
                <div class="item">
                    <img src="images/slide2.jpg" alt="" class="img-responsive" />
                    <!--<div class="carousel-caption kb_caption kb_caption_right">

                        <h2 data-animation="animated flipInX">Online Shopping</h2>
                    </div>-->
                </div>

                <!-- Third-Slide -->
                <div class="item">
                    <img src="images/slide3.jpg" alt="" class="img-responsive" />
                   <!-- <div class="carousel-caption kb_caption kb_caption_center">

                        <h2 data-animation="animated flipInX">Enjoy Shopping</h2>
                    </div>-->
                </div>

            </div>

            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
        <script src="js/custom.js"></script>
    </div>
<!--banner-->
    <!--content-->
        <div class="content">
            <!--banner-bottom-->
            <div class="banner-bottom">
                <div class="col-md-3 ban-grid">
                    <div class="ban-left">
                        <h4>24/7 Shopping Site</h4>

                    </div>
                    <div class="ban-right">
                        <!--<i class="glyphicon glyphicon-user"> </i>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 ban-grid">
                    <div class="ban-left">
                        <h4>Quality Products</h4>

                    </div>
                    <div class="ban-right">
                        <!--<i class="glyphicon glyphicon-facetime-video"> </i>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 ban-grid">
                    <div class="ban-left">
                        <h4>On-Time Delivery</h4>

                    </div>
                    <div class="ban-right">
                        <!--<i class="glyphicon glyphicon-book"> </i>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-3 ban-grid">
                    <div class="ban-left">
                        <h4>Consumer Friendly</h4>

                    </div>
                    <div class="ban-right">
                    <!--<i class="glyphicon glyphicon-blackboard"> </i>-->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--banner-bottom-->
            <!--welcome-->
            <div class="welcome-w3">
                <div class="container">
                    <h2 class="tittle">Welcome To Online Shopping Cart</h2>
                </div>
            </div>
            <!--welcome-->
            @yield('content')

    <div class="content">
            <div class="projects-agile">
                <div class="container">
                    <!--<h2 class="tittle">Our Gallery</h2>-->
                        <div class="portfolio_grid_w3lss">
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g1.jpg">
                                        <figure>
                                            <img src="images/men.jpg" alt="men" class="img-responsive" />
                                            <figcaption>
                                                <h4>MEN</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <a href="mens">
                                        <button type="button" class="btn btn-success">MEN</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g2.jpg">
                                        <figure>
                                            <img src="images/shop.jpg" alt="shop" class="img-responsive" />
                                            <figcaption>
                                                <h4>SHOP</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <button type="button" class="btn btn-success">SHOP</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g3.jpg">
                                        <figure>
                                            <img src="images/gadget.jpg" alt="gadget" class="img-responsive" />
                                            <figcaption>
                                                <h4>GADGETS</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <a href="gadgets.php?login=0">
                                        <button type="button" class="btn btn-success">GADGETS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="portfolio_grid_w3lss">
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g4.jpg">
                                        <figure>
                                            <img src="images/women.jpg" alt="women" class="img-responsive" />
                                            <figcaption>
                                                <h4>WOMEN</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <a href="women.php?login=0">
                                        <button type="button" class="btn btn-success">WOMEN</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g5.jpg">
                                        <figure>
                                            <img src="images/book.jpg" alt="books" class="img-responsive" />
                                            <figcaption>
                                                <h4>BOOKS</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <a href="books.php?login=0">
                                        <button type="button" class="btn btn-success">BOOKS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 w3agile_Projects_grid">
                                <div class="w3agile_Projects_image">
                                    <a class="sb" href="images/g6.jpg">
                                        <figure>
                                            <img src="images/sport.jpg" alt="sports" class="img-responsive" />
                                            <figcaption>
                                                <h4>SPORTS</h4>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <br>
                                    <div class="text" align="center">
                                        <a href="sports.php?login=0">
                                        <button type="button" class="btn btn-success">SPORTS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        
                    <script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
                </div>
            </div>
        </div>

        
        </div> 
        
            <div class="copy-section">
                <div class="container">
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <!--copy-->
</div>


</body>
</html>
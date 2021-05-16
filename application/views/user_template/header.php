<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from haintheme.com/demo/html/supershine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jun 2019 20:13:51 GMT -->
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vegam Cars</title>
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/bootstrap-theme.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/font-awesome.min.css">
    <!--Simple Line Icons-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/ionicons.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/vendors/owl.carousel/owl.carousel.css">
    <!--Select-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/vendors/bootstrap-select/css/bootstrap-select.css">
    <!--Theme Styles-->
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>user_assets/front_end_assets/css/theme.css">
</head>
<body>
    <!--Top Bar-->
    
    <section class="row top-bar">
        <h2 class="hd-sec">Heading</h2>
        <div class="container">
            <div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>Vegam Cars!</span></div>
            <ul class="social-lists-wSearch nav nav-pills">
<!--                <li class="search-pop"><a href="#"><span class="ion-ios-search-strong"></span></a></li>-->
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                <li><a href="#"><i class="ion-social-whatsapp"></i></a></li>
<!--                <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>-->
<!--                <li><a href="#"><i class="ion-social-rss"></i></a></li>-->
            </ul>
        </div>
    </section>
    <!--Info Bar-->
    <section class="row info-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-8 logo-box">
                    <a href="index.html" class="logo"><img src="<?=base_url()?>user_assets/front_end_assets/images/logo.png" alt=""></a>
                </div>
                <div class="col-sm-7 col-xs-4 info-box">
                    <div class="header-informations hidden-xs">
                        <div class="media info-media">
                            <div class="media-left"><i class="ion-location"></i></div>
                            <div class="media-body">
                                <h5 class="this-top">C/o. The Creators Zone </h5>
                                <h5 class="this-bottom">Visakhapatnam, IN</h5>
                            </div>
                        </div>
                        <div class="media info-media">
                            <div class="media-left"><i class="ion-ios-telephone"></i></div>
                            <div class="media-body">
                                <h5 class="this-top">+91 844 844 8929, +91 984 984 9824</h5>
                                <h5 class="this-bottom">support@VegamCars.com</h5>
                            </div>
                        </div>
<!--
                        <div class="media info-media">
                            <div class="media-left"><i class="ion-ios-clock"></i></div>
                            <div class="media-body">
                                <h5 class="this-top">Monday - Friday:</h5>
                                <h5 class="this-bottom">08:00am ~ 05:00pm</h5>
                            </div>
                        </div>
-->
                    </div>
                    <div class="cart-nav">
<!--                        <a href="#" class="cart-count"><i class="ion-bag"></i><span class="badge">03</span></a>-->
                        <a href="#" class="nav-hider hidden-xs hidden-sm hidden-lg"><i class="ion-android-menu"></i></a>
                        <button type="button" class="navbar-toggle nav-hider collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ion-android-menu"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Navigation-->
    <nav class="navbar navbar-default main-navigation navbar-static-top">
        <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">                
                <ul class="nav navbar-nav">
                    <li class="active dropdown"><a href="<?=base_url()?>">home</a></li>
                    <li><a href="<?=base_url()?>about">about</a></li>
                    <!-- <li><a href="<?=base_url()?>services">services</a></li> -->
                    <li><a href="<?=base_url()?>feet">fleet </a></li>
                    <li><a href="<?=base_url()?>contactus">contact</a></li>
<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single.html">Details</a></li>
                        </ul>
                    </li>
-->
                    
<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="404.html">404</a></li>
                            <li><a href="coming-soon.html">coming soon</a></li>
                        </ul>
                    </li>
-->
                </ul>           
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
        
        <!-- Load Core CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/core/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/core/animate.min.css">
        
        <!-- Load Main CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/main/main.css">
        <link rel="stylesheet" href="assets/css/main/setting.css">
        <link rel="stylesheet" href="assets/css/main/hover.css">
        
        <link rel="stylesheet" href="assets/css/typed/typed.css">
        
        <!-- Load Magnific Popup CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/magnific/magic.min.css">        
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup.css">              
        <link rel="stylesheet" href="assets/css/magnific/magnific-popup-zoom-gallery.css">
        
        <!-- Load OWL Carousel CSS 
        =====================================-->
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.transitions.css">
        
        <!-- Load Color CSS - Please uncomment to apply the color.
        =====================================      
        <link rel="stylesheet" href="assets/css/color/blue.css">
        <link rel="stylesheet" href="assets/css/color/brown.css">
        <link rel="stylesheet" href="assets/css/color/cyan.css">
        <link rel="stylesheet" href="assets/css/color/dark.css">
        <link rel="stylesheet" href="assets/css/color/green.css">
        <link rel="stylesheet" href="assets/css/color/orange.css">
        <link rel="stylesheet" href="assets/css/color/purple.css">
        <link rel="stylesheet" href="assets/css/color/pink.css">
        <link rel="stylesheet" href="assets/css/color/red.css">
        <link rel="stylesheet" href="assets/css/color/yellow.css">-->
        <link rel="stylesheet" href="assets/css/color/pasific.css">

        
        <!-- Load Fontbase Icons - Please Uncomment to use linea icons
        =====================================       
        <link rel="stylesheet" href="assets/css/icon/linea-arrows-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-basic-elaboration-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-ecommerce-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-music-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-software-10.css">
        <link rel="stylesheet" href="assets/css/icon/linea-weather-10.css">--> 
        <link rel="stylesheet" href="assets/css/icon/font-awesome.css">
        <link rel="stylesheet" href="assets/css/icon/et-line-font.css">
        
        <!-- Load JS
        HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file://
        =====================================-->

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @yield('header')
    </head>

    <body >
        

                @yield('topbar')
                @yield('content')
         
        <!-- footer Area
        ===================================== -->
        <div id="footer" class="footer-two pt10 bg-white" >
           {{--  <div class="container-fluid bb-solid-1">
                <div class="container pb35" >
                    <div class="row" >
                        
                        <!-- footer about start -->
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">About Us</h6>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit morbi sagittis.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                        </div>
                        <!-- footer about end -->
                        
                        <!-- footer menu one start -->
                        <div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Menu</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Member</a></li>
                            </ul>
                        </div>
                        <!-- footer menu one end -->
                        
                        <!-- footer menu two start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Learn more</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">How To Get To Us</a></li>
                                <li><a href="#">How To Ask For Our Help</a></li>
                                <li><a href="#">How To Reach For Blood</a></li>
                                
                            </ul>
                        </div>
                        <!-- footer menu two end -->
                        
                        <!-- footer menu three start -->
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <h6 class="font-montserrat text-uppercase color-dark">Support</h6>
                            <ul class="no-icon-list">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- footer menu three end -->
                        
                        <!-- footer social icons start -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <h6 class="font-montserrat text-uppercase color-dark">Social Media</h6>
                            <div class="social social-two">
                                <a href="#"><i class="fa fa-twitter color-blue"></i></a>
                                <a href="#"><i class="fa fa-facebook color-primary"></i></a>
                                <a href="#"><i class="fa fa-linkedin color-blue"></i></a><br><br>
                                <a href="#"><i class="fa fa-github color-dark"></i></a>
                                <a href="#"><i class="fa fa-pinterest color-red"></i></a>
                            </div>
                        </div>
                        <!-- footer social icons end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->
             --}}
            <div class="container-fluid pt10">
                <div class="container">
                    <div class="row">

                        <!-- copyright start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-left">
                            <p>Copyright &copy;2016 <a href="#">WeCare</a>. All rights reserved.</p>
                        </div>
                        <!-- copyright end -->

                        <!-- footer bottom start -->
                        <div class="col-md-6 col-sm-6 col-xs-6 pull-right">
                            <p class="text-right">
                                <a href="#" class="mr20">Privacy Policy</a>
                                <a href="#" class="mr20">Term of Use</a>
                                <a href="#" class="mr50">Site Map</a>
                            </p>
                        </div>
                        <!-- footer bottom end -->

                    </div><!-- row end -->
                </div><!-- container end -->
            </div><!-- container-fluid end -->
        </div><!-- footer end -->
        


    
    </body>

  <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        
        <!-- Magnific Popup
        =====================================-->
        <script src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/magnific-popup/magnific-popup-zoom-gallery.js"></script>
        
        <!-- Progress Bars
        =====================================-->
        <script src="assets/js/progress-bar/bootstrap-progressbar.js"></script>
        <script src="assets/js/progress-bar/bootstrap-progressbar-main.js"></script>
        
        <!-- Typed
        =====================================-->
        <script src="assets/js/typed/typed.min.js"></script>
        
        <!-- JQuery Main
        =====================================-->
        <script src="assets/js/main/jquery.appear.js"></script>
        <script src="assets/js/main/isotope.pkgd.min.js"></script>
        <script src="assets/js/main/parallax.min.js"></script>
        <script src="assets/js/main/jquery.countTo.js"></script>
        <script src="assets/js/main/owl.carousel.min.js"></script>
        <script src="assets/js/main/jquery.sticky.js"></script>
        <script src="assets/js/main/ion.rangeSlider.min.js"></script>
        <script src="assets/js/main/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main/main.js"></script>
               @yield('footer')



    </html>
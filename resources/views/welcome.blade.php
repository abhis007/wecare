@extends('layout')

@section('title')
    Welcome To WeCare
@endsection()

@section ('content')
  
        
        <!-- Page Loader
        ===================================== -->
        <div id="pageloader">
            <div class="loader-item">
                <img src="assets/img/other/puff.svg" alt="page loader">
            </div>
        </div>
        
        <a href="#page-top" class="go-to-top">
            <i class="fa fa-long-arrow-up"></i>
        </a>
        
        
        <!-- Navigation Area
        ===================================== -->
                 <nav class="navbar navbar-pasific navbar-op navbar-fixed-top">
           <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-gratipay fa-2x" aria-hidden="true"></i>
                        WeCare
                    </a>
                </div>
        
                <div class="navbar-collapse collapse navbar-main-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="events" >Events</a></li>
                        <li><a href="donate" >Donate</a></li>
                        <li><a href="./register" >Become A Member</a></li>
                        <li><a href="./login" >Login</a></li>
                      
                        
                    </ul>
                
                </div>
            </div>
        </nav>
        
        
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>                
        
        
        <!-- Intro Area
        ===================================== -->
        <header class="intro pt100 pb100 parallax-window" data-parallax="scroll" data-speed="0.5" data-image-src="assets/img/bg/img-bg-6.jpg">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="brand-heading text-capitalize color-light pt10 pb10">
                                 <div class="brand-heading-typed-container">
                                    <div id="typed-strings">
                                        <p>Welcome to <span class="color-pasific">We Care</span>.^1000</p>
                                        <p>Let's Unite To help^1000</p>
                                        <p>Your Old Things Can be.^1000</p>
                                        <p>Useful To Other.^5000</p>
                                    </div>
                                    <span id="typed" style="white-space:pre;"></span>
                                </div>
                            </h1>
                            <a class="button button-pasific button-lg hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="17000">Start Donating</a>
                        </div>
                    </div>
                </div>
                
                <div class="intro-direction">
                    <a href="#welcome">
                        <div class="mouse-icon"><div class="wheel"></div></div>
                    </a>
                </div>
                
            </div>
            
        </header>

        
        <!-- Welcome Area
        ===================================== -->
        <div id="welcome" class="pt75">
            <div class="container ">
                <div class="row">
                    
                    <!-- title start -->
                    <div class="col-md-12 text-center">
                        <h1 class="font-size-normal">
                            <small>Welcome to WeCare</small>
                            Let Us Unite To Help
                            <small class="heading heading-solid center-block"></small>
                        </h1>
                    </div>
                    <!-- title end -->
                    
                    <!-- title description start -->
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p>
                            <span class="lead"><strong>
                             The Best Part Of Life Is Find Enjoyment In Giving .</strong></span>
                        </p>
                    </div>
                    <!-- title description end -->
                </div>
                
                <div class="row mt50">
                    
                     <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-mobile color-pasific"></span>
                            <h5>Mobile Optimzed</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-tools color-pasific"></span>
                            <h5>Easy to Customize</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-browser color-pasific"></span>
                            <h5>Corss Browsers</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-wallet color-pasific"></span>
                            <h5>Save Money</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-layers color-pasific"></span>
                            <h5>Clean Code</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="content-box content-box-icon-o content-box-left-icon mb30">                        
                            <span class="icon-video color-pasific"></span>
                            <h5>Video Background</h5>               
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit commodi pariatur magni omnis reiciendis architecto.</p>
                      
                        </div>
                    </div>
                    
                </div>             
            </div>
        </div>
        <hr>
        
        
      
      
        
      

@endsection()
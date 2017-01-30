@extends('layout')
@extends('topbar')
@section('header')
<style type="text/css">
    
    .fixedPos
    {
        position: fixed;
        top: 80px;

    }
    .fixed_right
    {
        position: fixed;
        top: 80px;

        right: 60px";
    }
   


</style>

@endsection

@section('content')

<div class="bg-gray">
<div class="container ">
    <div class="row pt80 pb50">
       <div class="col-md-3 col-sm-6  hidden-xs hidden-sm animated zoomIn visible  "  style="position: fixed;top:160" id='side_pro' data-animation="zoomIn" data-animation-delay="200">
                      
                            
                              <div class="team team-one price price-one active">
                            <h5>Harry Doe<small class="color-pasific">App Designer</small></h5>                            
                            <img src="/storage/{{ Auth::user()->avatar }} " alt="" class="img-responsive">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            </div>
               

                           
                          
                      
        </div>

        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12 col-md-offset-3 " style="left: 40px">
        <div class="bg-white pl30 pr30 pt30 pb30">
            <div class="row">
                                  
                        <center>
                           <h3 class="font-pacifico color-pasific">Welcome {{ Auth::user()->name }} </h3>             
                            <small>Charity Begins From Home , But Sometimes At Webiste <i class="fa fa-heart color-red"></i></small></center>
                            <hr>
                           <h4 class="text-center">                            
                          So What You Wish To do Today ? 
                            <small class="heading heading-solid-icon center-block">
                                <span>&nbsp;</span>
                                <i class="fa fa-heart"></i>
                                <span>&nbsp;</span>
                            </small>
                        </h4>                   
                         
                        <CENTER>
           
               <button class="button-o button-sm button-square button-success hover-bounce-to-bottom" data-toggle="modal" data-target="#talkModal"      >Post Talk</button>
               <button class="button-o button-sm button-square button-primary hover-bounce-to-bottom" data-toggle="modal" data-target="#eventModal">
               Make Event</button>
               <button class="button-o button-sm button-square button-info hover-bounce-to-bottom">Donate</button>
                <button class="button-o button-sm button-square button-danger hover-bounce-to-bottom">Donate Blood</button></CENTER>
            </div>
        </div>
                                <hr>
        <div class="blog-one">
                                   
                                    <div class="blog-one-attrib">                                
                                        <img src="assets/img/other/photo-2.jpg" alt="photo blog" class="blog-author-photo">
                                        <span class="blog-author-name">Harry Boo</span>                                                           
                                        <span class="blog-category bg-green"><a href="#">News</a></span>
                                        <span class="blog-date">PEB. 14 2016  08.00 AM</span>                                                           
                                    </div>
                                    <div class="blog-one-body">
                                        <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                                        <p class="">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                        </p>
                                    </div>
                                    <div class="blog-one-footer">
                                        <a href="#">Read More</a>
                                        <i class="fa fa-heart"></i>59 Likes
                                        <i class="fa fa-comments"></i><a href="#">120 Comments</a>                                 
                                        <i class="fa fa-tags"></i><a href="#">freebies</a>, <a href="#">html</a>, <a href="#">wordpress</a>, <a href="#">css</a>
                                    </div>
                                </div>

                                 <div class="blog-one mt10">
                                   
                                    <div class="blog-one-attrib">                                
                                        <img src="assets/img/other/photo-2.jpg" alt="photo blog" class="blog-author-photo">
                                        <span class="blog-author-name">Harry Boo</span>                                                           
                                        <span class="blog-category bg-green"><a href="#">News</a></span>
                                        <span class="blog-date">PEB. 14 2016  08.00 AM</span>                                                           
                                    </div>
                                    <div class="blog-one-body">
                                        <h4 class="blog-title"><a href="#">Amazing Blog Post One</a></h4>
                                        <p class="">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.
                                        </p>
                                    </div>
                                    <div class="blog-one-footer">
                                        <a href="#">Read More</a>
                                        <i class="fa fa-heart"></i>59 Likes
                                        <i class="fa fa-comments"></i><a href="#">120 Comments</a>                                 
                                        <i class="fa fa-tags"></i><a href="#">freebies</a>, <a href="#">html</a>, <a href="#">wordpress</a>, <a href="#">css</a>
                                    </div>
                                </div>
            
            

                    </div>
                    <div class="col-lg-3 pl70 pr70 hidden-sm hidden-xs hidden-md "  id='rside' style="position:fixed;right: 60px"  >
                    <div class="row">

           
       





        
            <div class="list-group  "   data-animation="zoomIn" data-animation-delay="200">
             
                                  
                        <div class="panel-group " id="accordion6">
                            
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <a href="#collapse16" class="accordian-toggle-chevron-left collapsed" data-toggle="collapse" data-parent="#accordion6" aria-expanded="false">Events&nbsp;<img class="flaticon pull-right" alt="flat icon" src="assets/img/flat-icon/rating.svg" title="rating.svg" style="height: 23px;width: 23px"></a>
                                            </div>
                                            <div id="collapse16" class="panel-collapse active collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    Sometime the best help you can give to some is yor time .if you are willing to spent your time for the neede . Dont wait Create a event now . Discuss you idea about the event with other member . make other members to join the event.
                                                    <button class="button-o button-sm btn-block button-square button-warning hover-shutter-out-horizontal">Show All Events</button>

                                                </div>
                                            </div>                                
                                        </div>
                                        
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <a href="#collapse17" class="accordian-toggle-chevron-left collapsed" data-toggle="collapse" data-parent="#accordion6" aria-expanded="false">Donate Or Sponsor<img class="flaticon pull-right" alt="flat icon" src="assets/img/flat-icon/donate.svg" title="rating.svg" style="height: 23px;width: 23px"></a>
                                            </div>
                                            <div id="collapse17" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </div>
                                            </div>                                
                                        </div>
                                        
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <a href="#collapse18" class="accordian-toggle-chevron-left collapsed" data-toggle="collapse" data-parent="#accordion6" aria-expanded="false">Accordian Title</a>
                                            </div>
                                            <div id="collapse18" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </div>
                                            </div>                                
                                        </div>
                            
                        </div>                        

                </div>
            </div>

            
        </div>

    </div>

<hr>
</div>

<!-- Modal -->
 @include('models.models')
</div>

@endsection

@section('footer')
    <script type="text/javascript">
        $(window).scroll(function() {
        var scroll = $(window).scrollTop();
           
                if (scroll >= 100) {
                    $("#side_pro").addClass("fixedPos");
                     $("#rside").addClass("fixed_right");
                }
                else{

                    $("#side_pro").removeClass("fixedPos");
                     $("#rside").addClass("fixed_right");
                }
                   if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
                       
                        $( "#footer" ).addClass( "navbar-fixed-bottom" );
                   }
                   else
                   {
                          $( "#footer" ).removeClass( "navbar-fixed-bottom" );
                   }
                });
    </script>

 

@endsection
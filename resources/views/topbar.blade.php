
@section('topbar')

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
          <!-- Navigation Area
        ===================================== -->
        <nav class="navbar navbar-pasific navbar-mp navbar-standart navbar-fixed-top" style="border-bottom:1px solid #fff;">
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
                    <ul class="nav navbar-nav">
                        
                        <li><a href="events" >Events</a></li>
                        <li><a href="donate" >Donate</a></li>
                         @if (Auth::guest())
                                <li><a href="signup" >Become A Member</a></li>
                                <li><a href="login" >Login</a></li>
                        @else
                        
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                      
                        
                    </ul>
                
                </div>
            </div>

        </nav>
        


@endsection()
@extends('../layout')
@extends('topbar')
@section('header')
<style type="text/css">
.bg-grad-stellar {
    background: #7474BF;
    background: -webkit-linear-gradient(-45deg, #7474BF, #348AC7);
    background: -o-linear-gradient(-45deg, #7474BF, #348AC7);
    background: -moz-linear-gradient(-45deg, #7474BF, #348AC7);
    background: linear-gradient(-45deg, #822c2c, #ed5284);
}

</style>
@endsection

@section('content')
       <header class="bg-grad-stellar mt40">

            <div class="container">
                <div class="row mt30 mb20">
                    <div class="col-md-6 text-left">
                        <h3 class="color-light text-uppercase animated" data-animation="fadeInUp" data-animation-delay="100">Ready To Help?<small class="color-light alpha7">Become A Member Now.</small></h3>
                    </div>
                   
                </div>
            </div>
        </header>
        
<div class="bg-gray ">
<div class="container " >
    <div class="row  pt50 pb50 " >
        <div class="col-md-6 col-md-offset-3 thumbnail">
           
                           
                            <h3 class=" font-montserrat text-capitalize mr40 color-dark text-center">&nbsp;&nbsp;<i class="fa fa-fw"></i>&nbsp;Registration&nbsp;&nbsp;
                            <small class="heading heading-solid-icon center-block">
                                <span>&nbsp;</span>
                                <i class="fa fa-heart"></i>
                                <span>&nbsp;</span>
                            </small>
                        </h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control input-md input-square form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input-md input-square form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input-md input-square form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control input-md input-square form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2 ">
                               <button class="button-o btn-block button-md button-square button-danger hover-shutter-out-vertical">Become A Member</button>
                            </div>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
     </div>
  

@endsection

@extends('layouts.wk')

@section('content')
    <!-- Login-Registration Form  -->

    <div class="registration-login-form">
        <!-- Nav tabs -->
{{--            <ul class="nav nav-tabs" role="tablist">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" data-toggle="tab" href='{{route('register')}}' role="tab">--}}
{{--                        <i class="fa fa-user-plus" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" data-toggle="tab" href="{{route('login')}}" role="tab">--}}
{{--                        <i class="fa fa-sign-in" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

    <!-- Tab panes -->
        <div class="tab-content">



            {{--            register-form--}}

            <div class="tab-pane active" id="login" role="tabpanel" data-mh="log-tab">
                <div class="title h6">Login to your Account</div>
                <form action="{{route('login')}}" class="content" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Your Email</label>
                                <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" type="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Your Password</label>
                                <input name="password" id="password" class="form-control  @error('password') is-invalid @enderror" placeholder="" type="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="remember">

                                <div class="checkbox">
                                    <label>
                                        <input name="remember" id="remember" type="checkbox">
                                        Remember Me
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    {{--                                    {{ route('password.request') }}--}}
                                    <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-lg btn-primary full-width">Login</button>

                            <div class="or"></div>

                            <a href="{{url('feed')}}" class="btn btn-lg bg-google full-width btn-icon-left"><i class="fab fa-google" aria-hidden="true"></i>Login with Google Account</a>

                            {{--                                    <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>--}}


                            <p>Don’t you have an account? <a href="{{route('register')}}">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                        </div>
                    </div>
                </form>
            </div>


            {{--            login-form-end--}}
        </div>
    </div>

    <!-- ... end Login-Registration Form  -->

@endsection

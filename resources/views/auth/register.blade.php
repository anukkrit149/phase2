@extends('layouts.wk')

@section('content')
    <!-- Login-Registration Form  -->

    <div class="registration-login-form">
        <!-- Nav tabs -->
{{--        <ul class="nav nav-tabs" role="tablist">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link active" data-toggle="tab" href='{{route('register')}}' role="tab">--}}
{{--                    <i class="fa fa-user-plus" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" data-toggle="tab" href="{{route('login')}}" role="tab">--}}
{{--                    <i class="fa fa-sign-in" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}

        <!-- Tab panes -->
        <div class="tab-content">
{{--            register-form--}}
            <div class="tab-pane active" id="register" role="tabpanel" data-mh="log-tab">
                <div class="title h6">Register to wiseKreator</div>
                <form class="content" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="row">
                        <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group label-floating @error('name') is-invalid @enderror">
                                @error('name')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="control-label">First Name</label>
                                <input id="f_name" name="f_name" class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Last Name</label>
                                <input id="l_name" name="l_name" class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Your Email</label>
                                <input id="email" name="email" class="form-control" placeholder="" type="email">
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">Your Password</label>
                                <input id="password" name="password" class="form-control" placeholder="" type="password">
                            </div>
                            <div class="form-group date-time-picker label-floating">
                            <label class="control-label">Your Birthday</label>
                                <input id='dob' name="dob" value="10/24/1999" />
                                <span class="input-group-addon">
														<i class="fa fa-birthday-cake fa-2x"></i>
													</span>
                            </div>


                            <div class="form-group label-floating is-select">
                                <label class="control-label">Your Gender</label>
                                <select id="gender" name="gender" class="selectpicker form-control">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>

                            <div class="remember">
                                <div class="checkbox">
                                    <label>
                                        <input name="optionsCheckboxes" type="checkbox">
                                        I accept the <a href="#">Terms and Conditions</a> of the website
                                    </label>
                                </div>
                            </div>

                            <button type="submit"  class="btn btn-purple btn-lg full-width">Complete Registration!</button>
                            <a href="{{route('login')}}" class="btn btn-green btn-lg full-width">Login Page</a>
                        </div>
                    </div>
                </form>
            </div>
{{--                end-register-form--}}

{{--            login-form-end--}}
        </div>
    </div>

    <!-- ... end Login-Registration Form  -->

@endsection

<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-11:40 PM
 * Date-03-01-2020
 * File-Landing.blade.php
 * Project-phase2
 * Copyrights Reserved
 * Created by PhpStorm
 *
 * Working-
 *********************/

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>{{ config('app.name', 'wk |Landing') }}</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main Font -->
    <script src="{{asset("js/libs/webfontloader.min.js")}}"></script>

    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/fonts.min.css")}}">



</head>

<body class="landing-page">


<!-- Preloader -->

<div id="hellopreloader">
    <div class="preloader">
        <svg width="45" height="45" stroke="#fff">
            <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="6" stroke="none">
                    <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
                    <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
                    <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
                </circle>
                <circle cx="22" cy="22" r="8">
                    <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
                </circle>
            </g>
        </svg>

        <div class="text">Loading ...</div>
    </div>
</div>

<!-- ... end Preloader -->
<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
    <div class="container">
        <div class="header--standard-wrap">

            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="{{asset("img/logo.png")}}" alt="Olympus" style="max-height: 5em;">
                    <img src="{{asset("img/logo.png")}}" alt="Olympus" class="logo-colored">
                </div>
                <div class="title-block">
                    <h6 class="logo-title" style="color: yellowgreen;">wise<span style="color: yellow;">Kreator</span></h6>
                    <div class="sub-title">SOCIAL NETWORK</div>
                </div>
            </a>

            <a href="#" class="open-responsive-menu js-open-responsive-menu">
                <svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>
            </a>


        </div>
    </div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
    <div class="row display-flex">
        <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="landing-content">
                <h1>Welcome to the Biggest Social Network in the World</h1>
                <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                    thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                </p>
                <a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
            </div>
        </div>

        <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

            <!-- Login-Registration Form  -->

            <div class="registration-login-form">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                        <div class="title h6">Register to wsieKreator</div>
                        <form class="content">
                            <div class="row">
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control" placeholder="" type="email">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Password</label>
                                        <input class="form-control" placeholder="" type="password">
                                    </div>

                                    <div class="form-group date-time-picker label-floating">
                                        <label class="control-label">Your Birthday</label>
                                        <input name="datetimepicker" value="10/24/1984" />
                                        <span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
													</span>
                                    </div>

                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Gender</label>
                                        <select class="selectpicker form-control">
                                            <option value="MA">Male</option>
                                            <option value="FE">Female</option>
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

                                    <a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                        <div class="title h6">Login to your Account</div>
                        <form class="content">
                            <div class="row">
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control" placeholder="" type="email">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Password</label>
                                        <input class="form-control" placeholder="" type="password">
                                    </div>

                                    <div class="remember">

                                        <div class="checkbox">
                                            <label>
                                                <input name="optionsCheckboxes" type="checkbox">
                                                Remember Me
                                            </label>
                                        </div>
                                        <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
                                    </div>

                                    <a href="#" class="btn btn-lg btn-primary full-width">Login</a>

                                    <div class="or"></div>

                                    <a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i>Login with Facebook</a>

                                    <a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i>Login with Twitter</a>


                                    <p>Don’t you have an account? <a data-toggle="tab" href="#home" role="tab">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ... end Login-Registration Form  -->		</div>
    </div>
</div>

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
    <div class="modal-dialog window-popup restore-password-popup" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>

            <div class="modal-header">
                <h6 class="title">Restore your Password</h6>
            </div>

            <div class="modal-body">
                <form  method="get">
                    <p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
                        code below to change the old password for a new one.
                    </p>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Email</label>
                        <input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
                    </div>
                    <button class="btn btn-purple btn-lg full-width">Send me the Code</button>
                    <div class="form-group label-floating">
                        <label class="control-label">Enter the Code</label>
                        <input class="form-control" placeholder="" type="text" value="">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Your New Password</label>
                        <input class="form-control" placeholder="" type="password" value="olympus">
                    </div>
                    <button class="btn btn-primary btn-lg full-width">Change your Password!</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- ... end Window-popup Restore Password -->


<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
        <div class="modal-content">
            <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
            </a>
            <div class="modal-body">
                <form class="form-inline search-form" method="post">
                    <div class="form-group label-floating">
                        <label class="control-label">What are you looking for?</label>
                        <input class="form-control bg-white" placeholder="" type="text" value="">
                    </div>

                    <button class="btn btn-purple btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ... end Window Popup Main Search -->

<!-- JS Scripts -->
<script src="{{asset("js/jQuery/jquery-3.4.1.js")}}"></script>
<script src="{{asset("js/libs/jquery.appear.js")}}"></script>
<script src="{{asset("js/libs/jquery.mousewheel.js")}}"></script>
<script src="{{asset("js/libs/perfect-scrollbar.js")}}"></script>
<script src="{{asset("js/libs/jquery.matchHeight.js")}}"></script>
<script src="{{asset("js/libs/svgxuse.js")}}"></script>
<script src="{{asset("js/libs/imagesloaded.pkgd.js")}}"></script>
<script src="{{asset("js/libs/Headroom.js")}}"></script>
<script src="{{asset("js/libs/velocity.js")}}"></script>
<script src="{{asset("js/libs/ScrollMagic.js")}}"></script>
<script src="{{asset("js/libs/jquery.waypoints.js")}}"></script>
<script src="{{asset("js/libs/jquery.countTo.js")}}"></script>
<script src="{{asset("js/libs/popper.min.js")}}"></script>
<script src="{{asset("js/libs/material.min.js")}}"></script>
<script src="{{asset("js/libs/bootstrap-select.js")}}"></script>
<script src="{{asset("js/libs/smooth-scroll.js")}}"></script>
<script src="{{asset("js/libs/selectize.js")}}"></script>
<script src="{{asset("js/libs/swiper.jquery.js")}}"></script>
<script src="{{asset("js/libs/moment.js")}}"></script>
<script src="{{asset("js/libs/daterangepicker.js")}}"></script>
<script src="{{asset("js/libs/fullcalendar.js")}}"></script>
<script src="{{asset("js/libs/isotope.pkgd.js")}}"></script>
<script src="{{asset("js/libs/ajax-pagination.js")}}"></script>
<script src="{{asset("js/libs/Chart.js")}}"></script>
<script src="{{asset("js/libs/chartjs-plugin-deferred.js")}}"></script>
<script src="{{asset("js/libs/circle-progress.js")}}"></script>
<script src="{{asset("js/libs/loader.js")}}"></script>
<script src="{{asset("js/libs/run-chart.js")}}"></script>
<script src="{{asset("js/libs/jquery.magnific-popup.js")}}"></script>
<script src="{{asset("js/libs/jquery.gifplayer.js")}}"></script>
<script src="{{asset("js/libs/mediaelement-and-player.js")}}"></script>
<script src="{{asset("js/libs/mediaelement-playlist-plugin.min.js")}}"></script>
<script src="{{asset("js/libs/ion.rangeSlider.js")}}"></script>
<script src="{{asset("js/libs/leaflet.js")}}"></script>
<script src="{{asset("js/libs/MarkerClusterGroup.js")}}"></script>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/libs-init/libs-init.js")}}"></script>
<script defer src="{{asset("fonts/fontawesome-all.js")}}"></script>



</body>
</html>

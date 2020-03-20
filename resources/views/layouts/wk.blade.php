<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-02:26 AM
 * Date-09-03-2020
 * File-wk.blade.php
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

    <title>{{ config('app.name', 'wiseKreator') }}</title>

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



@guest
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
                        <div class="sub-title">Social Network</div>
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

@if (Request::path() != '/')
    <div class="container">
        <div class="row display-flex">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="landing-content">
                    <h1>Welcome to the Biggest Social Network in the World</h1>
                    <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                        thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
                    </p>
                    <a href="#register" class="btn btn-md btn-border c-white">Register Now!</a>
                </div>
            </div>

            <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

                @yield('content')
            </div>
        </div>
    </div>
@else
    <div class="col p-4 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="landing-content">
            <h1>Welcome to the Biggest Social Network in the World</h1>
            <p>We are the best and biggest social network with 5 billion active users all around the world. Share you
                thoughts, write blog posts, show your favourite music via Stopify, earn badges and much more!
            </p>
            <div class="row">
                <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('register')}}" class="btn btn-md btn-border c-white">Register Now!</a>
                </div>
                <div class="col col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <a href="{{route('login')}}" class="btn btn-md btn-border c-white">Login Now!</a>
                </div>
            </div>
        </div>
    </div>

@endif

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

@else

    <!-- Fixed Sidebar Left -->

    <div class="fixed-sidebar">
        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

            <a href="{{url("user")}}" class="logo">
                <div class="img-wrap">
                    <img src="img/logo.png" alt="wiseKreator">
                </div>
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <i class="fa fa-arrow-alt-circle-right fa-2x"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" >
                            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pen-fancy fa-2x"></i>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-camera-polaroid fa-2x"></i>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-video fa-2x"></i>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-podcast fa-2x"></i>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-poll-people fa-2x"></i>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-chart-bar fa-2x"></i>

                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
            <a href="{{url("user")}}" class="logo">
                <div class="img-wrap">
                    <img src="img/WK2.png" alt="wiseKreator">
                </div>
{{--                <div class="title-block">--}}
{{--                    <h6 class="logo-title"></h6>--}}
{{--                </div>--}}
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">
                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <i class="fa fa-arrow-alt-circle-left fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Collapse </span>
                        </a>
                    </li>

                    <li>
                        <a href="#" >
                            <i class="fa fa-list fa-2x" aria-hidden="true"></i>
                            <span class="left-menu-title">&nbsp; Categories </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pen-fancy fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Writings </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-camera-polaroid fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Photography </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-video fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Videography </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-podcast fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Podcasts </span>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-poll-people fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Forum  </span>


                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-chart-bar fa-2x"></i>
                            <span class="left-menu-title">&nbsp; Trending </span>

                        </a>
                    </li>
                </ul>

                <div class="profile-completion">

{{--                    <div class="skills-item">--}}
{{--                        <div class="skills-item-info">--}}
{{--                            <span class="skills-item-title">Profile Completion</span>--}}
{{--                            <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>--}}
{{--                        </div>--}}
{{--                        <div class="skills-item-meter">--}}
{{--                            <span class="skills-item-meter-active bg-primary" style="width: 76%"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <span>Complete <a href="#">your profile</a> so people can know more about you!</span>--}}

                </div>
            </div>
        </div>
    </div>

    <!-- ... end Fixed Sidebar Left -->


    <!-- Fixed Sidebar Left -->

    <div class="fixed-sidebar fixed-sidebar-responsive">

        <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
            <a href="#" class="logo js-sidebar-open">
                <img src="img/logo.png" alt="wiseKreator">
            </a>

        </div>

        <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
            <a href="#" class="logo">
                <div class="img-wrap">
                    <img src="img/logo.png" alt="Olympus">
                </div>
                <div class="title-block">
                    <h6 class="logo-title">wiseKreator</h6>
                </div>
            </a>

            <div class="mCustomScrollbar" data-mcs-theme="dark">

                <div class="control-block">
                    <div class="author-page author vcard inline-items">
                        <div class="author-thumb">
                            <img alt="author" src="img/author-page.jpg" class="avatar">
                            <span class="icon-status online"></span>
                        </div>
                        <a href="{{url("user")}}" class="author-name fn">
                            <div class="author-title">
                                Anukkrit Shanker <i class="fa fa-arrow-alt-down fa-2x"></i>
                            </div>
                            <span class="author-subtitle">SPACE COWBOY</span>
                        </a>
                    </div>
                </div>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">MAIN SECTIONS</h6>
                </div>

                <ul class="left-menu">
                    <li>
                        <a href="#" class="js-sidebar-open">
                            <svg class="olymp-close-icon left-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                            <span class="left-menu-title">Collapse Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="mobile-index.html">
                            <svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="svg-icons/sprites/icons.svg#olymp-newsfeed-icon"></use></svg>
                            <span class="left-menu-title">Newsfeed</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-28-YourAccount-PersonalInformation.html">
                            <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
                            <span class="left-menu-title">Fav Pages Feed</span>
                        </a>
                    </li>
                    <li>
                        <a href="mobile-29-YourAccount-AccountSettings.html">
                            <svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-faces-icon"></use></svg>
                            <span class="left-menu-title">Friend Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-30-YourAccount-ChangePassword.html">
                            <svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="svg-icons/sprites/icons.svg#olymp-headphones-icon"></use></svg>
                            <span class="left-menu-title">Music & Playlists</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
                            <svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="svg-icons/sprites/icons.svg#olymp-weather-icon"></use></svg>
                            <span class="left-menu-title">Weather App</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-32-YourAccount-EducationAndEmployement.html">
                            <svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                            <span class="left-menu-title">Calendar and Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-33-YourAccount-Notifications.html">
                            <svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="svg-icons/sprites/icons.svg#olymp-badge-icon"></use></svg>
                            <span class="left-menu-title">Community Badges</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-34-YourAccount-ChatMessages.html">
                            <svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="svg-icons/sprites/icons.svg#olymp-cupcake-icon"></use></svg>
                            <span class="left-menu-title">Friends Birthdays</span>
                        </a>
                    </li>
                    <li>
                        <a href="Mobile-35-YourAccount-FriendsRequests.html">
                            <svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="svg-icons/sprites/icons.svg#olymp-stats-icon"></use></svg>
                            <span class="left-menu-title">Account Stats</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="svg-icons/sprites/icons.svg#olymp-manage-widgets-icon"></use></svg>
                            <span class="left-menu-title">Manage Widgets</span>
                        </a>
                    </li>
                </ul>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">YOUR ACCOUNT</h6>
                </div>

                <ul class="account-settings">
                    <li>
                        <a href="#">

                            <svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>

                            <span>Create Fav Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                            <i class="fa fa-sign-out"></i>

                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>

                <div class="ui-block-title ui-block-title-small">
                    <h6 class="title">About Olympus</h6>
                </div>

                <ul class="about-olympus">
                    <li>
                        <a href="#">
                            <span>Terms and Conditions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>FAQs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Careers</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!-- ... end Fixed Sidebar Left -->
    {{$page=\Illuminate\Support\Facades\Request::path() }}


    <!-- Header-BP -->

    <header class="header" id="site-header">

        <div class="page-title">
            <h6>{{$page}}</h6>
        </div>

        <div class="header-content-wrapper">
            <form class="search-bar w-search notification-list friend-requests">
                <div class="form-group with-button">
                    <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                    <button>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </form>

{{--            <a href="{{route('create_article')}}" class="link-find-friend">Create Post</a>--}}

            <div class="control-block">

                <div class="control-icon more has-items">
                    <i class="fa fa-person-booth fa-3x" aria-hidden="true"></i>
                    <div class="label-avatar bg-blue">6</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">REQUESTS</h6>
                            <a href="#">Find Friends</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list friend-requests">
                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar55-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                        <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                                    </div>
                                    <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar56-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                        <span class="chat-message-item">4 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li class="accepted">
                                    <div class="author-thumb">
                                        <img src="img/avatar57-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar58-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                        <span class="chat-message-item">9 Friends in Common</span>
                                    </div>
                                    <span class="notification-icon">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>
									</a>

								</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <a href="#" class="view-all bg-blue">Check all your Events</a>
                    </div>
                </div>

                <div class="control-icon more has-items">
                    <i class="fa fa-bell fa-3x" aria-hidden="true"></i>
                    <div class="label-avatar bg-purple">2</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Chat / Messages</h6>
                            <a href="#">Mark all as read</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list chat-message">
                                <li class="message-unread">
                                    <div class="author-thumb">
                                        <img src="img/avatar59-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                        <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar60-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Jake Parker</a>
                                        <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
									<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
								</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar61-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                        <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>

                                <li class="chat-group">
                                    <div class="author-thumb">
                                        <img src="img/avatar11-sm.jpg" alt="author">
                                        <img src="img/avatar12-sm.jpg" alt="author">
                                        <img src="img/avatar13-sm.jpg" alt="author">
                                        <img src="img/avatar10-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                        <span class="last-message-author">Ed:</span>
                                        <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-purple">View All Messages</a>
                    </div>
                </div>

                <div class="control-icon more has-items">
                    <i class="fa fa-bell fa-3x" aria-hidden="true"></i>

                    <div class="label-avatar bg-primary">8</div>

                    <div class="more-dropdown more-with-triangle triangle-top-center">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Notifications</h6>
                            <a href="#">Mark all as read</a>
                            <a href="#">Settings</a>
                        </div>

                        <div class="mCustomScrollbar" data-mcs-theme="dark">
                            <ul class="notification-list">
                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar62-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="un-read">
                                    <div class="author-thumb">
                                        <img src="img/avatar63-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li class="with-comment-photo">
                                    <div class="author-thumb">
                                        <img src="img/avatar64-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
									</span>

                                    <div class="comment-photo">
                                        <img src="img/comment-photo1.jpg" alt="photo">
                                        <span>“She looks incredible in that outfit! We should see each...”</span>
                                    </div>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar65-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>

                                <li>
                                    <div class="author-thumb">
                                        <img src="img/avatar66-sm.jpg" alt="author">
                                    </div>
                                    <div class="notification-event">
                                        <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                                    </div>
                                    <span class="notification-icon">
										<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
									</span>

                                    <div class="more">
                                        <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                        <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="view-all bg-primary">View All Notifications</a>
                    </div>
                </div>

                <div class="author-page author vcard inline-items more">
                    <div class="author-thumb">
                        <img alt="author" src="img/author-page.jpg" class="avatar">
                        <span class="icon-status online"></span>
                        <div class="more-dropdown more-with-triangle">
                            <div class="mCustomScrollbar" data-mcs-theme="dark">
                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">Your Account</h6>
                                </div>

                                <ul class="account-settings">
                                    <li>
                                        <a href="29-YourAccount-AccountSettings.html">

                                            <svg class="olymp-menu-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use></svg>

                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="36-FavPage-SettingsAndCreatePopup.html">
                                            <svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>

                                            <span>Create Fav Page</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i>

                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="ui-block-title ui-block-title-small">
                                    <h6 class="title">About wiseKreator</h6>
                                </div>

                                <ul>
                                    <li>
                                        <a href="#">
                                            <span>Terms and Conditions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>FAQs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Careers</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <a href="#" class="author-name fn">
                        <div class="author-title">
                            {{ Auth::user()->name }}
                        </div>

                        <span class="author-subtitle">
                            @if (!Auth::user()->bio)
                                {{'NO BIO'}}
                            @else
                                {{Auth::user()->bio}}
                            @endif

                        </span>

                    </a>
                    <i class="fa fa-angle-down "></i>
                </div>

            </div>
        </div>

    </header>

    <!-- ... end Header-BP -->


    <!-- Responsive Header-BP -->

    <header class="header header-responsive" id="site-header-responsive">

        <div class="header-content-wrapper">
            <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#request" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                            <div class="label-avatar bg-blue">6</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                            <div class="label-avatar bg-purple">2</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
                        <div class="control-icon has-items">
                            <svg class="olymp-thunder-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-thunder-icon"></use></svg>
                            <div class="label-avatar bg-primary">8</div>
                        </div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#search" role="tab">
                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                        <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content tab-content-responsive">

            <div class="tab-pane " id="request" role="tabpanel">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">FRIEND REQUESTS</h6>
                        <a href="#">Find Friends</a>
                        <a href="#">Settings</a>
                    </div>
                    <ul class="notification-list friend-requests">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar55-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tamara Romanoff</a>
                                <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
                            </div>
                            <span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar56-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Tony Stevens</a>
                                <span class="chat-message-item">4 Friends in Common</span>
                            </div>
                            <span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li class="accepted">
                            <div class="author-thumb">
                                <img src="img/avatar57-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
                            </div>
                            <span class="notification-icon">
										<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar58-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Stagg Clothing</a>
                                <span class="chat-message-item">9 Friends in Common</span>
                            </div>
                            <span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
											</span>
										</a>

									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="view-all bg-blue">Check all your Events</a>
                </div>

            </div>

            <div class="tab-pane " id="chat" role="tabpanel">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Chat / Messages</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <ul class="notification-list chat-message">
                        <li class="message-unread">
                            <div class="author-thumb">
                                <img src="img/avatar59-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Diana Jameson</a>
                                <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar60-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Jake Parker</a>
                                <span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
										<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
									</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar61-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
                                <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
										</span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>

                        <li class="chat-group">
                            <div class="author-thumb">
                                <img src="img/avatar11-sm.jpg" alt="author">
                                <img src="img/avatar12-sm.jpg" alt="author">
                                <img src="img/avatar13-sm.jpg" alt="author">
                                <img src="img/avatar10-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
                                <span class="last-message-author">Ed:</span>
                                <span class="chat-message-item">Yeah! Seems fine by me!</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
										</span>
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-purple">View All Messages</a>
                </div>

            </div>

            <div class="tab-pane " id="notification" role="tabpanel">

                <div class="mCustomScrollbar" data-mcs-theme="dark">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Notifications</h6>
                        <a href="#">Mark all as read</a>
                        <a href="#">Settings</a>
                    </div>

                    <ul class="notification-list">
                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar62-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="un-read">
                            <div class="author-thumb">
                                <img src="img/avatar63-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li class="with-comment-photo">
                            <div class="author-thumb">
                                <img src="img/avatar64-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
										</span>

                            <div class="comment-photo">
                                <img src="img/comment-photo1.jpg" alt="photo">
                                <span>“She looks incredible in that outfit! We should see each...”</span>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar65-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
										</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="img/avatar66-sm.jpg" alt="author">
                            </div>
                            <div class="notification-event">
                                <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
                            </div>
                            <span class="notification-icon">
											<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
										</span>

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                            </div>
                        </li>
                    </ul>

                    <a href="#" class="view-all bg-primary">View All Notifications</a>
                </div>

            </div>

            <div class="tab-pane " id="search" role="tabpanel">


                <form class="search-bar w-search notification-list friend-requests">
                    <div class="form-group with-button">
                        <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
                    </div>
                </form>


            </div>

        </div>
        <!-- ... end  Tab panes -->

    </header>

    <!-- ... end Responsive Header-BP -->
    <div class="header-spacer"></div>

    <div class="container">
        <div class="row">

            @yield('content')

        </div>
    </div>




@endguest
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


@yield('modal_content')


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
<script src="{{asset("js/bootstrap.bundle.js")}}"></script>
<script src="{{asset("js/libs/MarkerClusterGroup.js")}}"></script>
<script defer src="{{asset("fonts/fontawesome-all.js")}}"></script>
<script src="{{asset("js/main.js")}}"></script>
<script src="{{asset("js/libs-init/libs-init.js")}}"></script>
{{--<script src="{{asset("js/app.js")}}"></script>--}}

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

</body>
</html>

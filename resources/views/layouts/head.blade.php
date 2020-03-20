<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-11:42 PM
 * Date-04-01-2020
 * File-head.blade.php
 * Project-phase2
 * Copyrights Reserved
 * Created by PhpStorm
 *
 * Working-
 *********************/

?>

<head>

    <title>{{ config('app.name', 'user') }}</title>

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
    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap-reboot.css")}}">--}}
{{--    <link rel="stylesheet" type="text/css" href="{{asset("bootstrap/css/bootstrap.css")}}">--}}
{{--    <link rel="stylesheetw" type="text/css" href="{{asset("bootstrap/css/bootstrap-grid.css")}}">--}}

<!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("css/fonts.min.css")}}">



</head>

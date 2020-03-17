<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('titleSite', env('APP_NAME'))</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link rel="stylesheet" href="{{ asset('principal/gallery-grid.css') }}">
    <!-- favicon icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

    <link rel="shortcut icon" href="{{ asset('principal/images/favicon.png') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/bootstrap.min.css') }}"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/animate.css') }}"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/owl.carousel.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/font-awesome.css') }}"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/themify-icons.css') }}"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/flaticon.css') }}"/>

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/prettyPhoto.css') }}">

    <!-- twentytwenty -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/twentytwenty.css') }}"/>

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/shortcodes.css') }}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/main.css') }}"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('principal/css/responsive.css') }}"/>

    <style>

        .float-right-button-sob {
            top: 79%;
            z-index: 99999999999;
            right: -2px;
            height: auto;
            padding: 5px 11px;
            position: fixed;
        }

        .float-button img {
            margin-right: -2px;
            margin-top: 30px;
        }

        @media (max-width: 500px) {
            .float-right-button-sob img {
                margin-top: 40px;
                line-height: 25px;
                font-size: 24px;
            }
            .slide-main-text, .icon-text{
                font-size: 25px;
            }
        }

        .list-inline li {
            display: inline-block;
            margin-right: 7px;
            font-size: 21px;
        }
        .floating-numbers {
            position: fixed;
            right: 0;
            bottom: 125px;
            margin: 0;
            z-index: 9999;
        }

        .floating-left-bottom {
            top: 79%;
            z-index: 99999999999;
            right: -20px;
            height: auto;
            padding: 5px 11px;
            position: fixed;
            margin-top: -43px;
            margin-right: -43px;
            margin-left: 50px;
        }

        }
    </style>


</head>

<body>

<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <div class="float-button float-right-button-sob">
        <a href="https://api.whatsapp.com/send?phone=+5561991614527&amp;text=Olá,%20preciso%20de%20ajuda" target="_blank"><img src="https://renovareurologia.com.br/principal/images/whats.svg" width="70" alt=""></a>
    </div>

    <div class="floating-left-bottom">
        <img src="{{ asset('principal/images/rhaiana.png') }}" width="80%" id="trigger">
    </div>



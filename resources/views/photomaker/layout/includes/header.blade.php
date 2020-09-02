<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>WorkSpace</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/css/style-ar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/image-popup/source/jquery.fancybox.css?v=2.1.5')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('PhotoMaker/image-popup/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}">

    <style>
        input[type="file"] {
            padding: 0;
            border: none;
        }
        input[type="text"], input[type="email"]  {
            border: none;
        }
        .black-box.margin-bottom {
            margin: 0 0 15px;
        }

        .checkbox-holder {
            font-weight: 100;
            position: relative;
            cursor: pointer;
            margin-bottom: 10px;
            display: block;
        }

        .checkbox-holder span {
            vertical-align: middle;
        }

        .checkbox-holder .checkbox-icon {
            width: 13px;
            height: 13px;
            line-height: 7px;
            display: inline-block;
            border: 1px solid #000;
            background: #000;
            text-align: center;
            margin: 0 4px;
        }

        .checkbox-holder input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-holder .checkbox-icon:after {
            content: '';
            background: #000;
            width: 7px;
            height: 7px;
            display: block;
            margin: 2px;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon {
            border-color: #00bcd4;
        }

        .checkbox-holder input[type="checkbox"]:checked + .checkbox-icon:after {
            background: #00bcd4;
        }

        .main-label {
            border-bottom: 1px dashed #00bcd4;
        }

        .check-open {
            margin-top: 10px;
        }
    </style>
</head>

<body>

<!--===============================
    NAV
===================================-->

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>

                <a href="{{url('/')}}" class="navbar-brand hidden-sm hidden-md hidden-lg" style="    margin-top: 25px;
    color: white;
    font-weight: bold;
    font-size: 30px;">WorkSpace </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-align-left">
                    <li class="active"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li><a href="{{url('/about')}}">من نحن</a></li>
                    <li><a href="{{url('/service')}}">خدماتنا</a></li>
                </ul>

                <a href="{{url('/')}}" class="navbar-brand hidden-xs text-center" style="    margin-top: 25px;
    color: white;
    font-weight: bold;
    font-size: 30px;">WorkSpace </a>

                <ul class="nav navbar-nav navbar-left text-align-right">
                    <li><a href="{{url('/gallery')}}">معرض الصور</a></li>
                    <li><a href="{{url('/contact')}}">اتصل بنا</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

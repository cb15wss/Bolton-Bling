<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','Master Page')</title>
    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('dist/js/html5shiv.js')}}"></script>
    <script src="{{asset('dist/js/respond.min.js')}}"></script>
    <![endif]-->


    <link rel="stylesheet" href="{{asset('easyzoom/css/easyzoom.css')}}" />
</head><!--/head-->

<body>
@include('frontEnd.layouts.header')
@show
@yield('content')
@include('frontEnd.layouts.footer')
<script src="{{asset('dist/js/jquery.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/price-range.js')}}"></script>
<script src="{{asset('dist/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
<script src="{{asset('easyzoom/dist/easyzoom.js')}}"></script>

</body>
</html>

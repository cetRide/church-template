<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Alma</title>

    <link rel="shortcut icon" href="/site_images/favicon.ico" type="image/x-icon"/>
    {{--Bootstrap CSS--}}
    <link rel="stylesheet" href="/bower/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/bower/datepicker/bootstrap-datepicker.css">
    {{--Font Awesome--}}
    <link rel="stylesheet" href="/bower/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
    {{--Custom CSS--}}
    @if(app('env')=='local')
        <link rel="stylesheet" href="{!! asset('css/dashboard.css') !!}"/>
    @else
        <link rel="stylesheet" href="{!! asset('css/dashboard.css', config('core.secure')) !!}"/>
    @endif
    {{-- Slice CSS Files--}}
    <link rel="stylesheet" type="text/css" href="/bower/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/bower/slick/slick-theme.css"/>

    {{--Angular--}}
    <script src="/bower/angular/angular.min.js"></script>
    {{--JQuery--}}
    <script src="/bower/jquery/dist/jquery.min.js"></script>
    {{-- Slice js--}}
    <script type="text/javascript" src="/bower/slick/slick.min.js"></script>
    {{--Bootstrap JS--}}
    <script src="/bower/bootstrap/dist/js/bootstrap.min.js"></script>
    {{--TinyMCE--}}
    <script type="text/javascript" src="/bower/tinymce/tinymce.min.js"></script>
    <script src="/bower/datepicker/bootstrap-datepicker.js"></script>
    {{--Smarttable--}}
    <script type="text/javascript" src="/bower/angular-smart-table/dist/smart-table.min.js"></script>
    {{--Angular Sanitize--}}
    <script type="text/javascript" src="/bower/angular-sanitize/angular-sanitize.min.js"></script>
    {{-- Angular Modal Service  and UI- Bootstrap--}}
    <script type="text/javascript" src="/bower/angular-modal-service/angular-modal-service.min.js"></script>
    <script type="text/javascript" src="/bower/angular-modal-service/ui-bootstrap-tpls-0.14.3.min.js"></script>
    {{--Custom JS--}}
    <script type="text/javascript" src="/js/dashboard.js"></script>
</head>
<body>
@include('layouts.partials.nav')
<div class="container-fluid" ng-app="amaraApp">
    @if(Auth::user())
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @include('layouts.partials.sidebar')
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @include('flash::message')
                @yield('content')
            </div>
        </div>
    @else
        <div style="margin-top: 70px">
            <div class="col-md-6 col-lg-offset-3">
                @include('flash::message')
                <div class="jumbotron">
                    <h3>The Alma Website Dashboard</h3>

                    <p>To access the dashboard you need to login <br/>Login with your corporate email</p>
                    <a href="/dashboard/auth/google" class="btn btn-primary">Login with Google</a>
                </div>
            </div>
        </div>
    @endif

</div>

</body>
</html>

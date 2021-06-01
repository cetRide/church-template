<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Development Company" content="Cetric Okola Technologies">
    <meta name="Developer" content="Cetric Okola">

    <title>Covenant Chapel Ministries</title>
    <link rel="shortcut icon" href="/site_images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/bower/foundation/css/foundation.min.css">
    <link rel="stylesheet" href="/bower/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/main.css"/>
    @if(app('env')=='local')
{{--        <link rel="stylesheet" href="{!! asset('css/app.css') !!}"/>--}}
    @else
{{--        <link rel="stylesheet" href="{!! asset('css/app.css', config('core.secure')) !!}"/>--}}
    @endif
    <script src="/bower/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
</head>

<body>
<div>
    @yield('content')
</div>

</body>
</html>

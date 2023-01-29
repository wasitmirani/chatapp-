<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Socket-Chat -{{config('app.name')}}</title>

    <link rel="icon" href="{{asset('assets/img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/plugins/feather/feather.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fullcalendar.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body class="mini-sidebar">

    <div id="app">
        @yield('content')
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    @vite('resources/ts/app.ts')
    <script src="{{asset('assets/js/script.js')}}"></script>

    {{-- <script src="{{asset('assets/js/script.js')}}"></script> --}}

</body>

</html>

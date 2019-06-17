<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Flying Fox</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
</head>
    <body>
        <div id="header">
            <fox-header></fox-header>
        </div>

        @yield('content')

        <div id="footer">
            <fox-footer></fox-footer>
        </div>
        <script type="text/javascript" src="../../js/app.js"></script>
    </body>
</html>

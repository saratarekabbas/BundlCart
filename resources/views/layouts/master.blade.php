<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/script.js')
</head>
<body>

@include('layouts.header')

{{--Begin Page Content--}}
@yield('content')

@include('layouts.footer')
</body>
</html>

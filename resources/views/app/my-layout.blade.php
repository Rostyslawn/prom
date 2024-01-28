<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('imgs/icon.jpg')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/modals.css')}}">
    @yield("styles")
    <title>@yield("title", "Prom")</title>
</head>
<body>
@include("components.nav")
@yield("content")
@yield("scripts")
<script src="{{asset('js/modals.js')}}"></script>
</body>
</html>

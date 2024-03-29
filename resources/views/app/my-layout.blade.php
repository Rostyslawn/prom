<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('imgs/icon.jpg')}}">
    @vite("resources/scss/imports.scss")
    @yield("styles")
    <title>@yield("title", "Prom")</title>
</head>
<body>
@include("components.nav")
@yield("content")
<div class="global-errors"></div>
@yield("scripts")
<script src="{{asset('js/ajax.js')}}"></script>
<script src="{{asset('js/modals.js')}}"></script>
<script src="{{asset('js/buyProduct.js')}}"></script>
<script src="{{asset('js/errors.js')}}"></script>
</body>
</html>

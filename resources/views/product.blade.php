@extends("app.my-layout")
@section("scripts")

@endsection
@section("styles")
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection
@section("content")
    {{$product_data}}
@endsection

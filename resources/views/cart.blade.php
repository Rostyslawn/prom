@extends('app.my-layout')
@section('styles')
    @vite("resources/scss/cart.scss")
@endsection
@section("title", "Cart")
@section("content")
    <div class="content block">
        <div class="products">
            @foreach($cart as $product)
                <div class="product">
                    <img src="{{ $product->img }}" alt="{{ $product->name }}">
                    <div class="product_name">{{ $product->name }}</div>
                </div>
            @endforeach
        </div>
    </div>
    @include("components.footer")
    @include("components.modals")
@endsection

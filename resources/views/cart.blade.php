@extends('app.my-layout')
@section('styles')
    @vite("resources/scss/cart.scss")
@endsection
@section("title", "Cart")
@section("content")
    <div class="content block">
        <div class="products">
            @if(count($cart) == 0)
                <div>Ви ще нiчого не додали до кошика</div>
            @else
                @foreach($cart as $product)
                    <div class="product">
                        <div class="product-img"><img src="{{ $product->img }}" alt="{{ $product->name }}"></div>
                        <div class="prices">
                            @if($product->sale)
                                <div class="old-price">{{ $product->price }} ₴</div>
                                <div class="sale">{{ $product->sale }} ₴</div>
                            @else
                                <div class="price">{{ $product->price }} ₴</div>
                            @endif
                        </div>
                        <div class="product-name">{{ $product->name }}</div>
                        <button class="buy">Замовити</button>
                        <form action="{{route('deleteFromCart', ["product_id" => $product->id])}}" method="POST">
                            @csrf
                            <button type="submit" class="delete-from-cart">Удалити из кошика</button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    @include("components.footer")
    @include("components.modals")
@endsection

@extends("app.my-layout")
@section("scripts")

@endsection
@section("styles")
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection
@section("title", $product_data->name)
@section("content")
{{--    {{$product_data}}--}}
    <div class="category-nav block">
        <div class="item catalog"><a href="#">Каталог товарiв</a></div>
        <div class="item arrow"><img alt=">" src="{{asset("imgs/arrow.png")}}"></div>
        <div class="item catalog-name"><a href="#">Краса</a></div>
        <div class="item arrow"><img alt=">" src="{{asset("imgs/arrow.png")}}"></div>
        <div class="item catalog-name"><a href="#">Шампунi</a></div>
    </div>
    <div class="main block">
        <div class="container main-img">
            <img alt="{{$product_data->name}}" src="{{$product_data->img}}">
        </div>
        <div class="container product-info">
            <span class="head">
                <div class="product_name">{{$product_data->name}}, {{$product_data->amount}}шт.</div>
                <button class="like"><img alt="like" src="{{asset('imgs/purpleHeart.png')}}"></button>
            </span>
            <div class="delivery-status">
                @if($product_data->amount > 0)
                    <div class="ready">Товар в наявностi</div>
                @else
                    <div class="not-ready">Товар закiнчився</div>
                @endif
            </div>
            @if($product_data->sale)
                <div class="sale">{{$product_data->sale}} ₴</div>
                <div class="old-price">{{$product_data->price}} ₴</div>
            @else
                <div class="price">{{$product_data->price}} ₴</div>
            @endif
            <div class="buttons">
                <button class="buy-product">
                    <img src="{{asset('imgs/whitecart.png')}}">
                    <span>Купити</span>
                </button>
                <button class="chat-with-seller">
                    <img src="{{asset('imgs/chat.png')}}">
                    <span>Чат з продавцем</span>
                </button>
            </div>
            <div class="seller">
                <a href="#">Продавець {{$product_data->seller}}</a>
            </div>
        </div>
    </div>
@endsection

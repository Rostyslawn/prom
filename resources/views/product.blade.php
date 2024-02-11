@extends("app.my-layout")
@section("styles")
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection
@section("title", $product_data->name)
@section("content")
    <div class="category-nav block">
        <div class="item catalog"><a href="#">Каталог товарiв</a></div>
        <div class="item arrow"><img alt=">" src="{{asset("imgs/arrow.png")}}"></div>
        <div class="item catalog-name"><a href="#">Краса</a></div>
        <div class="item arrow"><img alt=">" src="{{asset("imgs/arrow.png")}}"></div>
        <div class="item catalog-name"><a href="#">Шампунi</a></div>
    </div>
    <div class="main block">
        <div class="container characteristics">
            <div class="item characteristics-img">
                <img alt="{{$product_data->name}}" src="{{$product_data->img}}">
            </div>
            <div class="item-margin item about-product">
                <h2>Характеристики та опис</h2>
                <div class="main-characteristics">
                    <span class="title">Основнi</span>
                    <div>Країна виробник: <span>{{$product_data->country_of_origin}}</span></div>
                    <div>Кiлькiсть: <span>{{$product_data->amount}}</span></div>
                    <div>Лайки: <span>{{$product_data->likes}}</span></div>
                    <button class="showAllCharacteristics">Всi характеристики</button>
                    <div>Характеристика</div>
                    <div>Характеристика</div>
                    <div>Характеристика</div>
                    <div>Характеристика</div>
                </div>
                <div class="description">
                    <span>{{$product_data->description}}</span>
                    <button class="showAllDescription">Показати весь опис</button>
                </div>
            </div>
            <div class="item-margin item about-seller">
                <div class="buttons">
                    <button class="share">
                        <img src="{{asset('imgs/share.png')}}" alt="share">
                    </button>
                    <button class="like">
                        <img src="{{asset('imgs/heartWithOutBG.png')}}" alt="like">
                    </button>
                </div>
                <div class="head">
                    <div class="seller-img">
                        <img src="{{$sellers_data->img}}">
                    </div>
                    <div class="seller-rating">
                        <h2>Продавець {{$sellers_data->name}}</h2>
                        <div>{{$sellers_data->rating}} Вiдгукiв</div>
                    </div>
                </div>
                <div class="seller-data">
                    <div class="div data">
                        <div class="date">багато рокiв</div>
                        <div class="orders">4000+ замовлень</div>
                    </div>
                    <div class="div data-links">
                        <div class="item catalog"><a href="#">Каталог продавця</a></div>
                        <div class="item contacts"><a href="#">Контакти</a></div>
                        <div class="item reviews"><a href="#">Вiдгуки <span>{{$sellers_data->reviews}}</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="item product-info">
                <span class="head">
                    <div class="product_name">{{$product_data->name}}, {{$product_data->amount}}шт.</div>
                    @if(session("user"))
                        <form method="POST" action="{{ route('addToCart') }}">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product_data->id }}">
                        <input type="hidden" name="username" value="{{ session("user")->username }}">
                        <button type="submit" class="like"><img alt="like" src="{{asset('imgs/purpleHeart.png')}}"></button>
                        </form>
                    @else
                        <button class="like"><img alt="like" src="{{asset('imgs/purpleHeart.png')}}"></button>
                    @endif
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
                    <a href="#">Продавець {{$product_data->seller}} <img src="{{asset('imgs/arrow.png')}}"></a>
                </div>
            </div>
            <a href="#" class="item-margin item cards">
                <span>Сплачуй безпечно карткою</span>
                <img src="{{asset('imgs/cards.png')}}">
            </a>
            <div class="item-margin item delivery">
                <h2>Доставка</h2>
                <div class="delivery-service">
                    <img src="{{asset('imgs/novaposhta.jpg')}}">
                    <span>Нова пошта</span>
                </div>
                <button class="see-all">Дивитись все</button>
            </div>
        </div>
    </div>
    <div class="another-products">
        @foreach($another_products as $categoryId => $products)
            @php
                $uniqueProducts = $products->unique("id")->take(20);
            @endphp
        @endforeach
        @foreach($uniqueProducts as $product)
            <div class="item">
                <img src="{{$product->img}}" alt="product" class="product_img">
                <div class="head">
                    <div class="prices">
                        @if($product->sale)
                            <div class="old-price">{{ $product->price }} ₴</div>
                            <div class="sale">{{ $product->sale }} ₴</div>
                        @else
                            <div class="price">{{ $product->price }} ₴</div>
                        @endif
                    </div>
                    <div class="product_name">
                        <a href="{{route('product', ["product_name" => $product->name])}}">{{ $product->name }}</a>
                    </div>
                </div>
                <div class="buttons">
                    <button>Купити</button>
                    <img src="{{asset('imgs/heartWithOutBG.png')}}" alt="like" class="like">
                </div>
            </div>
        @endforeach
    </div>
    <div class="show-more-div block">
        <button class="show-more">Показати ще</button>
    </div>
    @include('components.footer')
    @include("components.modals")
@endsection
@section('scripts')
    <script src="{{asset('js/modalsProduct.js')}}"></script>
    <script src="{{asset('js/product_infoController.js')}}"></script>
@endsection

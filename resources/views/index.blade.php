@extends("app.my-layout")
@section('scripts')
    <script src="{{asset('js/carousel.js')}}"></script>
@endsection
@section("styles")
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section("title", "Prom")
@section("content")
    <div class="header block">
        <div class="container">
            <div id="left-side" class="left-side categories">
                <div class="item">
                    <a href="#">Military</a>
                </div>
                <div class="item">
                    <a href="#">Супермаркет Пром</a>
                </div>
                <div class="item">
                    <a href="#">Красата та здоров'я</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Дiм i сад</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Одяг та взуття</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Технiка та електронiка</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Товари для дiтей</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Авто-, мото</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Подарунки, хобi, книги</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Аксесуари та прикраси</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Матерiали для ремонту</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Спорт i вiдпочинок</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Медикаменти та медичнi товари</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
                <div class="item">
                    <a href="#">Домашнi тварини та зоотовари</a>
                    <img alt="arrow" src="{{asset('imgs/arrow.png')}}">
                </div>
            </div>
            <div class="carousel">
                <div onclick="main_ch_to_l()" class="btn btn-left">
                    <img src="{{asset('imgs/arrow.png')}}" alt="swap to the left">
                </div>
                <div class="slider-wrapper">
                    <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                    <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                    <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                    <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                </div>
                <div onclick="main_ch_to_r()" class="btn btn-right">
                    <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                </div>
            </div>
            <div id="right-side" class="right-side">
                <div>Продавати по всій <br> Україні</div>
                <button><a href="#">Створити магазин</a></button>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container block">
            <h2>Часто купують</h2>
            <div class="most-popular container-item">
                <div class="items">
                    <div class="btn btn-left">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the left">
                    </div>
                    <div class="slider-wrapper carousels">
                        @foreach($AllProducts->take(20) as $categoryId => $products)
                            <div class="item">
                                <div class="head">
                                    <div class="head_img"><img src="{{ $products->first()->img }}"></div>
                                    <h3><a href="#">{{ $products->first()->category_name }}</a></h3>
                                </div>
                                <div class="content">
                                    @foreach($products->take(3) as $product)
                                        <div class="product">
                                            <img class="product_img" alt="product" src="{{ $product->img }}">
                                            <div class="product_name"><a
                                                    href="{{route('product', ["product_name" => $product->name])}}">{{ $product->name }}</a>
                                            </div>
                                            <div class="prices">
                                                @if($product->sale)
                                                    <div class="old-price">{{ $product->price }} ₴</div>
                                                    <div class="sale">{{ $product->sale }} ₴</div>
                                                @else
                                                    <div class="price">{{ $product->price }} ₴</div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="btn btn-right">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                    </div>
                </div>
            </div>
            <h2 class="hope-you-h2">Тебе зацiкавить</h2>
            <div class="hope-you container-item">
                <div class="items">
                    <div class="btn btn-left">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to left">
                    </div>
                    <div class="slider-wrapper carousels">
                        @foreach($AllProducts as $categoryId => $products)
                            @php
                                $uniqueProducts = $products->unique('id')->take(20);
                            @endphp
                        @endforeach
                        @foreach($uniqueProducts as $product)
                            <div class="item">
                                <div class="product_img">
                                    <img src="{{$product->img}}" alt="product">
                                </div>
                                <div class="product_name">
                                    <a href="{{route('product', ["product_name" => $product->name])}}">{{$product->name}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="btn btn-right">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                    </div>
                </div>
            </div>
            <h2 class="for-you-h2">Для тебе</h2>
            <div class="for-you container-item">
                <div class="items">
                    @foreach($AllProducts as $categoryId => $products)
                        @php
                            $uniqueProducts = $products->unique('id')->take(20);
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
                                <button class="buy">Купити</button>
                                @if(session("user"))
                                    <form method="POST" action="{{ route('addToCart') }}">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="like"><img src="{{asset('imgs/heartWithOutBG.png')}}" alt="like" class="like"></button>
                                    </form>
                                @else
                                    <button class="like"><img src="{{asset('imgs/heartWithOutBG.png')}}" alt="like" class="like"></button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="show-more container-item"><span>Показати ще</span></button>
            <h2>Що шукають</h2>
            <div class="what-find container-item">
                <div class="items">
                    <div class="item">
                        <a href="#">Берці зимові</a>
                    </div>
                    <div class="item">
                        <a href="#">Шпалери для спальні</a>
                    </div>
                    <div class="item">
                        <a href="#">Підліткові зимові куртки для дівчаток</a>
                    </div>
                    <div class="item">
                        <a href="#">Зимові кросівки жіночі</a>
                    </div>
                    <div class="item">
                        <a href="#">Чоловіча термобілизна</a>
                    </div>
                    <div class="item">
                        <a href="#">Шпалери на кухню</a>
                    </div>
                    <div class="item">
                        <a href="#">Кросівки чоловічі</a>
                    </div>
                    <div class="item">
                        <a href="#">Термобілизна COLUMBIA</a>
                    </div>
                    <div class="item">
                        <a href="#">Жіночі зимові дутіки</a>
                    </div>
                    <div class="item">
                        <a href="#">Дутики жіночі</a>
                    </div>
                    <div class="item">
                        <a href="#">Зимові кросівки nike</a>
                    </div>
                    <div class="item">
                        <a href="#">Чоловіча зимова взуття</a>
                    </div>
                    <div class="item">
                        <a href="#">Готові фотошпалери</a>
                    </div>
                    <div class="item">
                        <a href="#">Жіночі зимові черевики</a>
                    </div>
                    <div class="item">
                        <a href="#">Військова форма одягу</a>
                    </div>
                    <div class="item">
                        <a href="#">Зимові чоловічі кросівки</a>
                    </div>
                    <div class="item">
                        <a href="#">Уггі жіночі</a>
                    </div>
                    <div class="item">
                        <a href="#">Шпалери метрові</a>
                    </div>
                    <div class="item">
                        <a href="#">Теплі жіночі лосини</a>
                    </div>
                </div>
            </div>
            <div class="container-footer container-item">
                <div class="left-side">
                    <div class="img"><img alt="want to sale?" src="{{asset('imgs/PromFavoriteStore.svg')}}"></div>
                    <span>
                        <h3>Хочете продавати на промi?</h3>
                        <button class="start-todayBtn">Почнiть сьогоднi</button>
                    </span>
                </div>
                <div class="right-side">
                    <a>Перейти в кабінет компанії</a>
                    <a onclick="modals(); open_auth_menu()">Перейти в особистий кабiнет</a>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
    @include('components.modals')
@endsection
{{--@if($errors->any())--}}
{{--    @foreach($errors->keys() as $field)--}}
{{--        <div class="error">--}}
{{--            Error: {{ $errors->first($field) }}<br>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endif--}}
{{--<div>--}}
{{--    @if(session("user"))--}}
{{--        <div>{{ session("user")->username }}</div>--}}
{{--    @endif--}}
{{--</div>--}}


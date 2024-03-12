@extends("app.my-layout")
@section("styles")
    @vite("resources/scss/category.scss")
@endsection
@section("title", $categoryName)
@section("content")
    <div class="category-nav block">
        <div class="item catalog"><a href="{{ route("index") }}">Каталог товарiв</a></div>
        @foreach($bread as $category)
            @if(!$category)
                @break
            @endif
            <div class="item arrow"><img alt=">" src="{{asset("imgs/arrow.png")}}"></div>
            <div class="item catalog-name"><a
                    href="{{ route('category', ["category_id" => $category->id]) }}">{{$category->name}}</a></div>
        @endforeach
    </div>
    <div class="main">
        <div class="content block">
            <div class="filters">
                <div class="filters-1">
                    <button class="item active">За рейтингом</button>
                    <button class="item">Дешевше</button>
                    <button class="item">Дорожче</button>
                </div>
                <button class="sex">Стать</button>
                <button class="type">Вид взуття</button>
                <button class="season">Сезон</button>
            </div>
            <div class="container">
                <form onchange="filter(this)" action="{{ route('ajax.filter') }}" method="POST" class="left-side">
                    @csrf
                    <button class="rate-filters">
                        <img src="{{asset('imgs/star.png')}}">
                        <span>
                            Оцiнити зручнiсть фiльтрiв
                        </span>
                        <img class="arrow" src="{{asset('imgs/arrow.png')}}">
                    </button>
                    <div class="pay-method">
                        <img alt="pay method" src="{{asset('imgs/pay-method.png')}}">
                    </div>
                    <div class="filters-2">
                        <div class="filter-parent">
                            <label class="filter">
                                В наявностi
                                <input name="instock" class="hidden-checkbox" type="checkbox">
                            </label>
                            <label class="filter">
                                Знижка
                                <input name="sale" class="hidden-checkbox" type="checkbox">
                            </label>
                        </div>
                        <label class="filter">
                            Опт
                            <input name="wholesale" class="hidden-checkbox" type="checkbox">
                        </label>
                    </div>
                    <div class="filters-price">
                        <span>Цiна, ₴</span>
                        <div class="select-price-between">
                            <label class="filter">
                                <input type="text" placeholder="0" class="price min">
                            </label>
                            <label class="filter">
                                <input type="text" placeholder="3333" class="price max">
                            </label>
{{--                        fix button    --}}
                            <button class="submit">Ок</button>
                        </div>
                    </div>
                </form>
                <div class="products">
                    @foreach($products as $product)
                        <div class="product">
                            <div class="product-img">
                                <img alt="{{$product->name}}" src="{{$product->img}}">
                            </div>
                            <div class="product-name">
                                {{$product->name}}
                            </div>
                            <div class="status">В наявностi</div>
                            <div class="prices">
                                @if($product->sale)
                                    <div class="old-price">{{ $product->price }} ₴</div>
                                    <div class="sale">{{ $product->sale }} ₴</div>
                                @else
                                    <div class="price">{{ $product->price }} ₴</div>
                                @endif
                            </div>
                            <div class="buttons">
                                <input type="hidden" class="product_id" value="{{$product->id}}">
                                <button onclick="buyProduct('{{route("ajax.buy")}}')" class="buy">Купити</button>
                                <button onclick="addToCart('{{route("ajax.addToCart")}}')" class="like"><img
                                        src="{{asset('imgs/likes.png')}}"></button>
                            </div>
                            <div class="seller">
                                <span>{{$product->seller}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include("components.modals")
@endsection
@section("scripts")
    <script src="{{asset('js/filters.js')}}"></script>
@endsection

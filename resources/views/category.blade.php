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
                <div class="left-side">
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
                            <button class="filter">В наявностi</button>
                            <button class="filter">Знижка</button>
                        </div>
                        <button class="filter">Опт</button>
                    </div>
                    <div class="filters-price">
                        <span>Цiна, ₴</span>
                        <div class="select-price-between">
                            <input type="text" placeholder="0" class="price min">
                            <input type="text" placeholder="3333" class="price max">
                            <button class="submit">Ок</button>
                        </div>
                    </div>
                </div>
                <div class="products">
                    {{--            @foreach($products as $product)--}}

                    {{--            @endforeach--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section("scripts")
    <script src="{{asset('js/filters.js')}}"></script>
@endsection

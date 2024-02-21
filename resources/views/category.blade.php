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
            <div class="item catalog-name"><a href="{{ route('category', ["category_id" => $category->id]) }}">{{$category->name}}</a></div>
        @endforeach
    </div>
    <div class="content">
        <div class="filters">
            <div class="item active">За рейтингом</div>
            <div class="item">Дешевше</div>
            <div class="item">Дорожче</div>
        </div>
        <div class="left-side">

        </div>
        <div class="products">

        </div>
    </div>
@endsection

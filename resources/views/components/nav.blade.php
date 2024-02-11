<div class="ad">
    <img alt="ad img" src="{{asset('imgs/adImg.png')}}">
</div>
<div class="nav block">
    <div class="item logo">
        <a href="{{route("index")}}"><img src="{{asset('imgs/logo.png')}}" alt="logo"></a>
    </div>
    <div class="item search">
        <form>
            <label>
                <input placeholder="Я шукаю...">
            </label>
            <div class="mic">
                <img src="{{asset('imgs/mic.png')}}" alt="microphone">
            </div>
            <button class="findBtn">
                Знайти
            </button>
        </form>
    </div>
    <div class="item buttons">
        <div onclick="open_login_menu()" class="btn-head login">
            <img src="{{asset('imgs/login.png')}}" alt="login">
            <div>Увiйти</div>
        </div>
        <div href="#" class="btn-head likes">
            <img src="{{asset('imgs/likes.png')}}" alt="likes">
            <div>Бажане</div>
        </div>
        @if(session("user"))
            <a href="{{ route("cart") }}" class="btn-head cart">
                <img src="{{asset('imgs/cart.png')}}" alt="cart">
                <div>Кошик</div>
            </a>
        @else
            <a href="#" class="btn-head cart">
                <img src="{{asset('imgs/cart.png')}}" alt="cart">
                <div>Кошик</div>
            </a>
        @endif
    </div>
</div>

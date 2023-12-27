<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromUa</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="icon" href="{{asset('imgs/icon.jpg')}}">
</head>
<body>
@if($errors->any())
    @foreach($errors->keys() as $field)
        <div class="error">
            Error: {{ $errors->first($field) }}<br>
        </div>
    @endforeach
@endif
{{--<div>--}}
{{--    @if(session("user"))--}}
{{--        <div>{{ session("user")->username }}</div>--}}
{{--    @endif--}}
{{--</div>--}}
<div class="ad">
    <img alt="ad img" src="{{asset('imgs/adImg.png')}}">
</div>
<div class="nav block">
    <div class="item logo">
        <img src="{{asset('imgs/logo.png')}}" alt="logo">
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
        <div href="{{route('likes')}}" class="btn-head likes">
            <img src="{{asset('imgs/likes.png')}}" alt="likes">
            <div>Бажане</div>
        </div>
        <div href="{{route('cart')}}" class="btn-head cart">
            <img src="{{asset('imgs/cart.png')}}" alt="cart">
            <div>Кошик</div>
        </div>
    </div>
</div>
<div class="header block">
    <div class="container">
        <div class="left-side categories">
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
        <div class="right-side">
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
                                        <div class="product_name"><a href="#">{{ $product->name }}</a></div>
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
        <h2>Тебе зацiкавить</h2>
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
                                <a href="#">{{$product->name}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="btn btn-right">
                    <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                </div>
            </div>
        </div>
        <h2>Для тебе</h2>
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
                            @if($product->sale)
                                <div class="old-price">{{ $product->price }} ₴</div>
                                <div class="sale">{{ $product->sale }} ₴</div>
                            @else
                                <div class="price">{{ $product->price }} ₴</div>
                            @endif
                            <div class="product_name">
                                <a href="#">{{ $product->name }}</a>
                            </div>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
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
                <a href="#">Перейти в кабінет компанії</a>
                <a href="#">Перейти в особистий кабiнет</a>
            </div>
        </div>
    </div>
</div>
<div class="footer block">
    <div class="columns">
        <div class="column">
            <h2>Покупцям</h2>
            <span><a href="#">Довідка для покупців</a></span>
            <span><a href="#">Пром-підтримка</a></span>
            <span><a href="#">Як купувати з Пром-оплатою</a></span>
            <span><a href="#">Рекомендації з безпечних покупок</a></span>
            <span><a href="#">Перевірка на приналежність сайту до платформи prom.ua</a></span>
        </div>
        <div class="column">
            <h2>Продавцям</h2>
            <span><a href="#">Довідка для продавців</a></span>
            <span><a href="#">Як почати продавати на prom.ua</a></span>
            <span><a href="#">Тарифи</a></span>
            <span><a href="#">Просування в каталозі ProSale</a></span>
            <span><a href="#">Sprava.prom — медіа для підприємців</a></span>
            <span><a href="#">Угода користувача</a></span>
            <span><a href="#">Політика конфіденційності</a></span>
            <span><a href="#">Правила роботи на маркетплейсі</a></span>
            <span><a href="#">Інструкція Google Ads</a></span>
            <span><a href="#">Бонусна програма електронний маркетплейс PROM</a></span>
        </div>
        <div class="column">
            <h2>Про нас</h2>
            <span><a href="#">Про prom.ua</a></span>
            <span><a href="#">Работа в prom.ua</a></span>
            <span><a href="#">Контактна інформація</a></span>
            <span><a href="#">Захист легальності контенту</a></span>
            <span><a href="#">Content legality protection</a></span>
        </div>
        <div class="column">
            <h2>Партнери</h2>
            <span><a href="#">Kabanchik.ua</a></span>
            <span><a href="#">Вчасно</a></span>
            <span><a href="#">Crafta.ua</a></span>
            <span><a href="#">Zakupki.prom.ua</a></span>
            <span><a href="#">Shafa</a></span>
            <span><a href="#">IZI.ua</a></span>
            <span><a href="#">VendiGo.ro</a></span>
            <span><a href="#">Bigl.ua</a></span>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="item">
            <div class="qr-code"><img alt="qr-code" src="{{asset('imgs/qr-code.png')}}"></div>
            <span class="qr-code-text">Відскануй QR-код, щоб <br> щось побачити</span>
            <span><a href="#">Тема - свiтла</a></span>
        </div>
        <div class="item language">
            <span>Українська</span>
        </div>
        <div class="social-media">
            <span><a href="https://www.youtube.com/prom4ua"><img alt="youtube" src=""></a></span>
            <span><img alt="facebook" src="#"></span>
            <span><a href="https://www.instagram.com/prom.pompom/"><img alt="instagram" src=""></a></span>
        </div>
    </div>
</div>
<div class="modals">
    <div onclick="close_modals()" class="modal-bg"></div>
    <div class="login-menu menu">
        <h3 class="status">Ви не авторизованi</h3>
        <button onclick="open_auth_menu()" class="registry-or-login">
            Увійти або зареєструватись
        </button>
        <div class="item select-language">
            <img src="{{asset('imgs/world.png')}}" class="icon" alt="Select language">
            <span>Українська</span>
        </div>
        <div class="item order-history">
            <img src="{{asset('imgs/history.png')}}" class="icon" alt="Order history">
            <span>Історія замовлень</span>
        </div>
        <div class="item order-tracking">
            <img src="{{asset('imgs/tracking.png')}}" class="icon" alt="Order tracking">
            <span>Відстеження замовлення</span>
        </div>
        <div class="item favorite">
            <img src="{{asset('imgs/heart.png')}}" class="icon" alt="Favorite">
            <span>Бажане</span>
        </div>
        <div class="item reviews">
            <img src="{{asset('imgs/star.png')}}" class="icon" alt="My reviews">
            <span>Мої відгуки</span>
        </div>
        <div class="item wallet">
            <img src="{{asset('imgs/wallet.png')}}" class="icon" alt="My wallet">
            <span>Мій гаманець</span>
        </div>
        <div class="item discounts">
            <img src="{{asset('imgs/discount.png')}}" class="icon" alt="Discounts and bonuses">
            <span>Знижки та бонуси</span>
        </div>
        <div class="item settings">
            <img src="{{asset('imgs/setting.png')}}" class="icon" alt="Settings">
            <span>Налаштування</span>
        </div>
        <div class="item start-selling">
            <img src="{{asset('imgs/trade.png')}}" class="icon" alt="Start selling on prom">
            <span>Почати продавати на prom.ua</span>
        </div>
        <div class="item support">
            <img src="{{asset('imgs/telegram.png')}}" class="icon" alt="Prom-support">
            <span>Пром-підтримка</span>
        </div>
        <div class="item help">
            <img src="{{asset('imgs/help.png')}}" class="icon" alt="Help">
            <span>Довідка</span>
        </div>
        <div class="item qr-code">
            <img src="{{asset('imgs/qr-code.png')}}" alt="QR-Code">
            <div>
                <span>Агов! А в додатку зручніше</span>
                <span>Відскануй QR-код</span>
            </div>
        </div>
    </div>
    <div class="authorization menu">
        <div class="head">
            <img onclick="open_auth_menu()" src="{{asset('imgs/leftarrow.png')}}" alt="Go back" class="go-back">
            <h3>Вхiд</h3>
        </div>
        <div class="items">
            <div class="hello">
                <img src="{{asset('imgs/hello.png')}}" alt="Hello">
            </div>
            <h3>Увійти в кабінет</h3>
            <span>Увійдіть, щоб додавати товари до бажаного, <br> писати продавцям і бачити свої замовлення</span>
            <form action="{{ route("auth") }}" method="POST">
                @csrf
                <div class="insert-number">Введіть телефон <span>*</span></div>
                <label>
                    <input name="login" placeholder="+380 (__) ___-__-__" class="telephone-number input-event">
                    {{--                    <input name="password" placeholder="password">--}}
                </label>
                <button type="submit" class="auth submit">Увiйти</button>
            </form>
            <span class="login-with-text">Або увійдіть за допомогою:</span>
            <div class="login-with">
                <div class="elem">
                    <img src="{{asset('imgs/mail.png')}}" alt="Mail">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/google.png')}}" alt="Google">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/facebook.png')}}" alt="Facebook">
                </div>
            </div>
            <div class="no-profile">
                <span>Немає профілю?</span>
                <div onclick="open_reg_menu()">Зареєструйтесь</div>
            </div>
            <h3 class="peoples">2 600 000</h3>
            <span>відвідувачів кожен день на prom.ua.</span>
            <span>Реєструйся, додавай товари, продавай по всій Україні</span>
            <button class="become-seller">Стати продавцем</button>
        </div>
    </div>
    <div class="registration menu">
        <div class="head">
            <img onclick="open_reg_menu()" src="{{asset('imgs/leftarrow.png')}}" alt="Go back" class="go-back">
            <h3>Реєстрація</h3>
        </div>
        <div class="items">
            <h3>Створити профіль</h3>
            <span>Заповніть всі поля нижче, щоб створити свій профіль</span>
            <form action="{{ route("reg") }}" method="POST">
                @csrf
                <label>
                    <span>Ваше ім'я</span>
                    <input class="input-event" name="name" type="text">
                </label>
                <label>
                    <span>Ваше прізвище</span>
                    <input class="input-event" name="surname" type="text">
                </label>
                <label class="phone-number">
                    <span>Номер телефону <span>*</span></span>
                    <input class="input-event" name="number" placeholder="+380 (__) ___-__-__" type="text">
                </label>
                <label>
                    <span>Пароль</span>
                    <input class="input-event" name="password" type="password">
                </label>
                <span class="receive-checkbox">
                    <input name="receive_prom_offers" type="checkbox">
                    <label for="custom-checkbox">Я хочу отримувати цікаві пропозиції від prom.ua</label>
                </span>
                <button type="submit" class="auth submit">Зареєструватися</button>
            </form>
            <div class="accepts">
                Реєструючись, ви погоджуєтеся з
                <a href="#">угодою користувача</a>
                i
                <a href="#">політикою конфіденційності</a>
                маркетплейсу prom.ua
            </div>
            <span class="login-with-text">Або увійдіть за допомогою:</span>
            <div class="login-with">
                <div class="elem">
                    <img src="{{asset('imgs/mail.png')}}" alt="Mail">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/google.png')}}" alt="Google">
                </div>
                <div class="elem">
                    <img src="{{asset('imgs/facebook.png')}}" alt="Facebook">
                </div>
            </div>
            <div class="have-profile">
                Вже є профіль?
                <span onclick="open_reg_menu()">Увiйдiть</span>
            </div>
        </div>
        <hr>
        <div class="users">
            <h3>2 600 000</h3>
            <span>відвідувачів кожен день на prom.ua.</span> <br>
            <span>Реєструйся, додавай товари, продавай по всій Україні</span>
        </div>
    </div>
</div>
<script src="{{asset('js/modals.js')}}"></script>
<script src="{{asset('js/carousel.js')}}"></script>
<script src="{{asset('js/inputs.js')}}"></script>
</body>
</html>

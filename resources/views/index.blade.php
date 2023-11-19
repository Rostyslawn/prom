<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromUa</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="icon" href="{{asset('imgs/icon.jpg')}}">
</head>
<body>
<div class="ad">
    <img alt="ad img" src="{{asset('imgs/adImg.png')}}">
</div>
<div class="nav block">
    <div class="item logo">
        <img src="{{asset('imgs/logo.png')}}" alt="logo">
    </div>
    <div class="item search">
        <form method="post" action="">
            <label>
                <input placeholder="я шукаю...">
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
        <a href="{{route('login')}}" class="btn-head login">
            <img src="{{asset('imgs/login.png')}}" alt="login">
            <div>Увiйти</div>
        </a>
        <a href="{{route('likes')}}" class="btn-head likes">
            <img src="{{asset('imgs/likes.png')}}" alt="likes">
            <div>Бажане</div>
        </a>
        <a href="{{route('cart')}}" class="btn-head cart">
            <img src="{{asset('imgs/cart.png')}}" alt="cart">
            <div>Кошик</div>
        </a>
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
            <div class="btn btn-left">
                <img src="{{asset('imgs/arrow.png')}}" alt="swap to the left">
            </div>
            <div class="slider-wrapper">
                <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
                <div class="img"><img src="{{asset('imgs/govno.jpg')}}"></div>
            </div>
            <div class="btn btn-right">
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
                <div class="slider-wrapper">
                    <div class="btn btn-left">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the left">
                    </div>
					@foreach($mostPopularProducts as $categoryId => $products)
						<div class="item">
							<div class="head">
								<img class="head_img" src="{{ $products->first()->img }}">
								<h3><a href="#">{{ $products->first()->category_name }}</a></h3>
							</div>
							<div class="content">
								@foreach($products->take(3) as $product)
									<div class="product">
										<img class="product_img" alt="product" src="{{ $product->img }}">
										<div class="product_name"><a href="#">{{ $product->name }}</a></div>
										@if($product->sale)
											<div class="old-price">{{ $product->price }} ₴</div>
											<div class="sale">{{ $product->sale }} ₴</div>
										@else
											<div class="price">{{ $product->price }} ₴</div>
										@endif
									</div>
								@endforeach
							</div>
						</div>
					@endforeach
                    <div class="btn btn-right">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                    </div>
                </div>
            </div>
        </div>
        <h2>Тебе зацiкавить</h2>
        <div class="hope-you container-item">
            <div class="items">
                <div class="slider-wrapper">
                    <div class="btn btn-left">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to left">
                    </div>
                    {{--                fix for to normal loader    --}}
                    @for($i = 0; $i < 10; $i++)
                        <div class="item">
                            <div class="product_img"><img src="{{asset('imgs/govno.jpg')}}" alt="product"></div>
                            <div class="product_name">
                                <a href="#">Невидимки i шпильки</a>
                            </div>
                        </div>
                    @endfor
                    <div class="btn btn-right">
                        <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                    </div>
                </div>
            </div>
        </div>
        <h2>Для тебе</h2>
        <div class="for-you container-item">
            <div class="items">
                {{--            fix for to normal loader   --}}
                @for($i = 0; $i < 20; $i++)
                    <div class="item">
                        <img src="{{asset('imgs/govno.jpg')}}" alt="product" class="product_img">
                        <div class="head">
                            <div class="price">11 ₴</div>
                            <div class="product_name">
                                <a href="#">Product name</a>
                            </div>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
                        </div>
                    </div>
                @endfor
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
{{--<script src="{{asset('js/carousel.js')}}"></script>--}}
</body>
</html>

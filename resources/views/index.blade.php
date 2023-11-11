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
                        <div class="item">
                            <div class="head">
                                <img class="head_img" src="{{asset('imgs/cart.png')}}">
                                <h3><a href="#">Невидимки i шпильки</a></h3>
                            </div>
                            <div class="content">
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="old-price">10 ₴</div>
                                    <div class="sale">9 ₴</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="head">
                                <img class="head_img" src="{{asset('imgs/cart.png')}}">
                                <h3><a href="#">Невидимки i шпильки</a></h3>
                            </div>
                            <div class="content">
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="old-price">10 ₴</div>
                                    <div class="sale">9 ₴</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="head">
                                <img class="head_img" src="{{asset('imgs/cart.png')}}">
                                <h3><a href="#">Невидимки i шпильки</a></h3>
                            </div>
                            <div class="content">
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="old-price">10 ₴</div>
                                    <div class="sale">9 ₴</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="head">
                                <img class="head_img" src="{{asset('imgs/cart.png')}}">
                                <h3><a href="#">Невидимки i шпильки</a></h3>
                            </div>
                            <div class="content">
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="price">10 ₴</div>
                                </div>
                                <div class="product">
                                    <img class="product_img" alt="product" src="{{asset('imgs/govno.jpg')}}">
                                    <div class="product_name"><a href="#">Невидимка-стiкер</a></div>
                                    <div class="old-price">10 ₴</div>
                                    <div class="sale">9 ₴</div>
                                </div>
                            </div>
                        </div>
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
                        <div class="item">
                            <div class="product_img"><img src="{{asset('imgs/govno.jpg')}}" alt="product"></div>
                            <div class="product_name">
                                <a href="#">Невидимки i шпильки</a>
                            </div>
                        </div>
                        <div class="btn btn-right">
                            <img src="{{asset('imgs/arrow.png')}}" alt="swap to the right">
                        </div>
                    </div>
                </div>
            </div>
            <h2>Для тебе</h2>
            <div class="for-you container-item">
                <div class="items">
                    <div class="item">
                        <img src="{{asset('imgs/govno.jpg')}}" alt="product" class="product_img">
                        <div class="price">11 ₴</div>
                        <div class="product_name">
                            <a href="#">Product name</a>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('imgs/govno.jpg')}}" alt="product" class="product_img">
                        <div class="old-price">10 ₴</div>
                        <div class="sale">9 ₴</div>
                        <div class="product_name">
                            <a href="#">Product name</a>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('imgs/govno.jpg')}}" alt="product" class="product_img">
                        <div class="old-price">10 ₴</div>
                        <div class="sale">9 ₴</div>
                        <div class="product_name">
                            <a href="#">Product name</a>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('imgs/govno.jpg')}}" alt="product" class="product_img">
                        <div class="old-price">10 ₴</div>
                        <div class="sale">9 ₴</div>
                        <div class="product_name">
                            <a href="#">Product name</a>
                        </div>
                        <div class="buttons">
                            <button>Купити</button>
                            <img src="{{asset('imgs/likes.png')}}" alt="like" class="like">
                        </div>
                    </div>
                </div>
            </div>
            <button class="show-more container-item"><span>Показати ще</span></button>
            <h2>Що шукають</h2>
            <div class="what-find container-item">
                <div class="items">
                    <div class="item">
                        <a href="#">Текст</a>
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
{{--<script src="{{asset('js/carousel.js')}}"></script>--}}
</body>
</html>

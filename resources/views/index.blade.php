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
    <div class="header block">
        <div class="nav">
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
                <a href="{{route('login')}}" class="btn login">
                    <img src="{{asset('imgs/login.png')}}" alt="login">
                    <div>Увiйти</div>
                </a>
                <a href="{{route('likes')}}" class="btn likes">
                    <img src="{{asset('imgs/likes.png')}}" alt="likes">
                    <div>Бажане</div>
                </a>
                <a href="{{route('cart')}}" class="btn cart">
                    <img src="{{asset('imgs/cart.png')}}" alt="cart">
                    <div>Кошик</div>
                </a>
            </div>
        </div>
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
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Дiм i сад</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Одяг та взуття</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Технiка та електронiка</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Товари для дiтей</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Авто-, мото</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Подарунки, хобi, книги</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Аксесуари та прикраси</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Матерiали для ремонту</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Спорт i вiдпочинок</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Медикаменти та медичнi товари</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
                </div>
                <div class="item">
                    <a href="#">Домашнi тварини та зоотовари</a>
                    <div><img alt="arrow" src="{{asset('imgs/arrow.png')}}"></div>
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
            <div class="most-popular container-item">
                <h2>Часто купують</h2>
                <div class="items">
                    <div class="item">
                        <div class="head">
                            <img class="head_img" src="{{asset('imgs/cart.png')}}">
                            <h3>Невидимки i шпильки</h3>
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
                            <h3>Невидимки i шпильки</h3>
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
                            <h3>Невидимки i шпильки</h3>
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
                </div>
            </div>
        </div>
    </div>
</body>
</html>
